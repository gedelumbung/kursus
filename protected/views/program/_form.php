<?php
/* @var $this ProgramController */
/* @var $model Program */
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
	'id'=>'program-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga_reguler'); ?>
		<?php echo $form->textField($model,'harga_reguler', array('class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'harga_reguler'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pertemuan_reguler'); ?>
		<?php echo $form->textField($model,'pertemuan_reguler', array('class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'pertemuan_reguler'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga_privat'); ?>
		<?php echo $form->textField($model,'harga_privat', array('class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'harga_privat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pertemuan_privat'); ?>
		<?php echo $form->textField($model,'pertemuan_privat', array('class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'pertemuan_privat'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

</div>
</div>