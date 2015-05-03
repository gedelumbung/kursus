<?php

class TotalGaji extends CWidget
{
    public $bulan;
    public $tahun;
    public $id_user;

    public function run()
    {

        $bulan = $this->bulan;
        $tahun = $this->tahun;
        $id = $this->id_user;

        $arr_gaji = Yii::app()->db->createCommand('select a.id_guru as id_pengajar, 
            a.id_transaksi_penggajian, 
            b.nama as nama_pengajar, 
            c.nama as nama_program, 
            a.bulan, 
            a.tahun,
            c.harga_reguler,
            c.pertemuan_reguler, 
            a.jumlah_murid_reguler,
            c.harga_privat,
            c.pertemuan_privat, 
            a.jumlah_murid_privat
            from tbl_transaksi_penggajian a left join tbl_pengajar b on a.id_guru=b.id_pengajar left join tbl_program c on a.id_program=c.id_program 
            where a.bulan="'.$bulan.'" and a.tahun="'.$tahun.'" and a.id_guru="'.$id.'"')->queryAll();

        $arr_tunjangan = Yii::app()->db->createCommand('select a.id_guru as id_pengajar, 
            a.id_transaksi_tambahan, 
            b.nama as nama_pengajar, 
            a.nama_transaksi,
            a.jumlah,
            a.bulan, 
            a.tahun
            from tbl_transaksi_tambahan a left join tbl_pengajar b on a.id_guru=b.id_pengajar
            where a.bulan="'.$bulan.'" and a.tahun="'.$tahun.'" and a.id_guru="'.$id.'"')->queryAll();

        $total = 0;
        foreach ($arr_gaji as $key => $value) {
            $honor_reguler = $value['harga_reguler']*40/100/$value['pertemuan_reguler'];
            $honor_private = $value['harga_privat']*50/100;
            $sub_total = ($honor_reguler*$value['jumlah_murid_reguler']) + (($honor_private)*$value['jumlah_murid_privat']);
            $total = $total+$sub_total;
        }
        foreach ($arr_tunjangan as $keys => $values) {
            $total = $total+$values['jumlah'];
        }

        echo rupiah($total);
    }
}