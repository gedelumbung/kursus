<?php

class Laporan_gajiController extends Controller
{
	public $layout='main';

	public function init()
	{
		if (Yii::app()->user->isGuest) 
		{
			$this->redirect(array("site/login"));
		}
		$this->widget('SetConfig');
	}

	public function actionIndex()
	{
		$bulan = (array_key_exists('bulan',$_SESSION) ? $_SESSION['bulan'] : date('m'));
		$tahun = (array_key_exists('tahun',$_SESSION) ? $_SESSION['tahun'] : date('Y'));

		$arr = Yii::app()->db->createCommand('select a.id_guru as id_pengajar, a.id_transaksi_penggajian, b.nama as nama_pengajar, c.nama as nama_program, a.bulan, a.tahun from tbl_transaksi_penggajian a left join tbl_pengajar b on a.id_guru=b.id_pengajar left join tbl_program c on a.id_program=c.id_program where a.bulan="'.$bulan.'" and a.tahun="'.$tahun.'" group by a.id_guru,a.bulan,a.tahun')->queryAll();
		

		$this->render('index', array(
				'arr' => $arr,
			));
	}

	public function actionSet()
	{
		$_SESSION['bulan'] = $_POST['bulan'];
		$_SESSION['tahun'] = $_POST['tahun'];

		$this->redirect(array("laporan_gaji/index"));
	}

	public function actionDetail($id)
	{
		$bulan = Yii::app()->request->getParam('bulan');
		$tahun = Yii::app()->request->getParam('tahun');
		$pengajar = Pengajar::model()->findByPk($id);

		$arr_gaji = Yii::app()->db->createCommand('select a.id_guru as id_pengajar, 
			b.nama,
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

		$this->render('detail', array(
				'arr_gaji' => $arr_gaji,
				'arr_tunjangan' => $arr_tunjangan,
				'bulan' => $bulan,
				'tahun' => $tahun,
				'id' => $id,
			));
	}

	public function actionCetak($id)
	{
		$bulan = Yii::app()->request->getParam('bulan');
		$tahun = Yii::app()->request->getParam('tahun');
		$pengajar = Pengajar::model()->findByPk($id);

		$arr_gaji = Yii::app()->db->createCommand('select a.id_guru as id_pengajar, 
			b.nama,
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

		$this->renderPartial('cetak', array(
				'arr_gaji' => $arr_gaji,
				'arr_tunjangan' => $arr_tunjangan,
			));
	}
}