<?php
/* @var $this DashboardController */

$this->breadcrumbs=array(
	'Dashboard',
);
?>
<h1>Laporan Bulanan - <?php echo $_SESSION['site_name']; ?></h1>

<div class="container-fluid" id="content-area">

    <div class="row-fluid">

    	<form method="post" action="<?php echo Yii::app()->baseUrl; ?>/laporan_bulanan/set">

	        <div class="span4">
	        	Bulan : 
	            <select name="bulan">
	            	<?php $this->widget('SelectOpBulan', array('id_select' => (array_key_exists('bulan',$_SESSION) ? $_SESSION['bulan'] : date('m')))); ?>
	            </select>
	        </div>

	        <div class="span4">
	        	Tahun : 
	            <select name="tahun">
	            	<?php $this->widget('SelectOpTahun', array('id_select' => (array_key_exists('tahun',$_SESSION) ? $_SESSION['tahun'] : date('Y')))); ?>
	            </select>
	        </div>

	        <div class="span3">
	        	<input type="submit" class="btn btn-warning pull-right" value="Lihat Laporan">
	        </div>
    	</form>

    </div>
    <div class="row-fluid">

        <div class="span12">
			<table border="1" cellpadding="5" cellspacing="0" width="100%">
        		<tr>
	        		<th>No.</th>
	        		<th>Nama Pengajar</th>
	        		<th>Total Penghasilan</th>
	        		<th>Bulan</th>
	        		<th>Tahun</th>
	        	</tr>
            <?php
            	foreach ($arr as $key => $value) {
            	?>
	        		<tr>
		        		<th><?php echo $key+1; ?></th>
		        		<th><?php echo $value['nama_pengajar']; ?></th>
		        		<th><?php $this->widget('TotalGaji', array('bulan' => $value['bulan'], 'tahun' => $value['tahun'], 'id_user' => $value['id_pengajar'])); ?></th>
		        		<th><?php echo $value['bulan']; ?></th>
		        		<th><?php echo $value['tahun']; ?></th>
		        	</tr>
		        <?php
            	}
            ?>
            <tr>
            	<th colspan="2">Total Pengeluaran Gaji : </th>
            	<th colspan="1"><?php $this->widget('TotalGajiBulanan', array('bulan' => $_SESSION['bulan'], 'tahun' => $_SESSION['tahun'])); ?></th>
            	<th colspan="2"> </th>
            </tr>
        	</table>        
        </div>

    </div>
</div>
