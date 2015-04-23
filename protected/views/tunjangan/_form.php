<?php
/* @var $this TunjanganController */
/* @var $model TransaksiTunjangan */
/* @var $form CActiveForm */
?>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transaksi-tunjangan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_guru'); ?>
		<?php
			$this->widget('ext.chosen.Chosen',array(
			   'name' => 'TransaksiTunjangan[id_guru]', // input name
			   'value' => $model->id_guru, // selection
			   'data' => array(''=>'Semua') + CHtml::listData(Pengajar::model()->findAll(),'id_pengajar','nama')
			));
		?>
		<?php echo $form->error($model,'id_guru'); ?>
	</div>
	<br>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_transaksi'); ?>
		<?php echo $form->textField($model,'nama_transaksi', array('class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'nama_transaksi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bulan'); ?>
        <select name="TransaksiTunjangan[bulan]">
        	<?php $this->widget('SelectOpBulan', array('id_select' => $model->bulan)); ?>
        </select>
		<?php echo $form->error($model,'bulan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tahun'); ?>
        <select name="TransaksiTunjangan[tahun]">
        	<?php $this->widget('SelectOpTahun', array('id_select' => $model->tahun)); ?>
        </select>
		<?php echo $form->error($model,'tahun'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlah'); ?>
		<?php echo $form->textField($model,'jumlah', array('class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'jumlah'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan', array('class' => 'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

</div>
</div>