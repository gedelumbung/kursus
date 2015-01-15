<?php
/* @var $this Gaji_insentifController */
/* @var $data TransaksiPenggajian */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_transaksi_penggajian')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_transaksi_penggajian), array('view', 'id'=>$data->id_transaksi_penggajian)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_guru')); ?>:</b>
	<?php echo CHtml::encode($data->id_guru); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_program')); ?>:</b>
	<?php echo CHtml::encode($data->id_program); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_murid_reguler')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_murid_reguler); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_murid_privat')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_murid_privat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bulan')); ?>:</b>
	<?php echo CHtml::encode($data->bulan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun')); ?>:</b>
	<?php echo CHtml::encode($data->tahun); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	*/ ?>

</div>