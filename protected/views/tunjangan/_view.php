<?php
/* @var $this TunjanganController */
/* @var $data TransaksiTunjangan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_transaksi_tambahan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_transaksi_tambahan), array('view', 'id'=>$data->id_transaksi_tambahan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_guru')); ?>:</b>
	<?php echo CHtml::encode($data->id_guru); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_program')); ?>:</b>
	<?php echo CHtml::encode($data->id_program); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bulan')); ?>:</b>
	<?php echo CHtml::encode($data->bulan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun')); ?>:</b>
	<?php echo CHtml::encode($data->tahun); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	*/ ?>

</div>