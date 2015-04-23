<script type="text/javascript">
window.print();
</script>
<style type="text/css">
body{
	font-family: Arial;
	font-size: 12px;
	padding: 0px;
	margin: 20px 70px;
}
h3{
	font-size: 12px;
	padding: 0px;
	line-height: 16px;
}
h1{
	font-size: 20px;
	padding: 0px;
	line-height: 10px;
}
table{
	font-size: 12px;
	width: 100%;
	border-collapse: collapse;
}
.detail-view{
	text-align: left;
}
.detail-view tbody tr th{
	padding: 5px;
}
select{
	background: #fff;
	border: none;
}
</style>
<div style="width:20%; float:left;">
	<img src="<?php echo Yii::app()->theme->baseUrl; ?>/asset/img/dshock.png">
</div>
<div style="width:80%;">
	<h1><?php echo $_SESSION['site_name']; ?></h1>
	<h3><?php echo $_SESSION['site_address']; ?></h3>
</div>
<br><br>
Bulan : 
<select name="bulan">
	<?php $this->widget('SelectOpBulan', array('id_select' => (array_key_exists('bulan',$_SESSION) ? $_SESSION['bulan'] : date('m')))); ?>
</select>
Tahun : 
<select name="tahun">
	<?php $this->widget('SelectOpTahun', array('id_select' => (array_key_exists('tahun',$_SESSION) ? $_SESSION['tahun'] : date('Y')))); ?>
</select>
<br>
<br>
<table border="1" cellpadding="5" cellspacing="0" width="100%">
        		<tr>
	        		<th>No.</th>
	        		<th>Program</th>
	        		<th colspan="2">Kelas Reguler</th>
	        		<th colspan="2">Kelas Privat</th>
	        		<th>Sub Total</th>
	        	</tr>
            <?php
            	$total = 0;
            	$no = 0;
            	foreach ($arr_gaji as $key => $value) {
            		$honor_reguler = $value['harga_reguler']*40/100/$value['pertemuan_reguler'];
            		$honor_private = $value['harga_privat']*50/100;
            		$sub_total = ($honor_reguler*$value['jumlah_murid_reguler']) + (($honor_private+5000)*$value['jumlah_murid_privat']);
            		$total = $total+$sub_total;
            	?>
	        		<tr>
		        		<th><?php echo $key+1; ?></th>
		        		<th><?php echo $value['nama_program']; ?></th>
		        		<th>
		        			<?php echo rupiah($honor_reguler); ?>
		        		</th>
		        		<th>
		        			<?php echo $value['jumlah_murid_reguler']; ?> orang
		        		</th>
		        		<th>
		        			<?php echo rupiah($honor_private); ?> + <?php echo rupiah(5000); ?>
		        		</th>
		        		<th>
		        			<?php echo $value['jumlah_murid_privat']; ?> orang
		        		</th>
		        		<th><?php echo rupiah($sub_total); ?></th>
		        	</tr>
		        <?php
		        	$no = $key;
            	}
            ?>
            <?php
            	foreach ($arr_tunjangan as $keys => $values) {
            		$total = $total+$values['jumlah'];
            	?>
	        		<tr>
		        		<th><?php echo $no+$keys+2; ?></th>
		        		<th><?php echo $values['nama_transaksi']; ?></th>
		        		<th colspan="4"></th>
		        		<th>
		        			<?php echo rupiah($values['jumlah']); ?>
		        		</th>
		        	</tr>
		        <?php
            	}
            ?>
        		<tr>
	        		<th colspan="6">Total.</th>
	        		<th><?php echo rupiah($total); ?></th>
	        	</tr>
        	</table>

<br><br>
<div style="width:200px; float:left; text-align:center;">
TTD
<br><br><br><br><br><br>
(PIMPINAN)
</div>
<div style="width:200px; float:right; text-align:center;">
TTD
<br><br><br><br><br><br>
(.........................................)
</div>