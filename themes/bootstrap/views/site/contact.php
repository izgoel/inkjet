<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form TbActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>
<div class="row-fluid">
    <div class="span6">
<h2><?php echo Yii::t('messages','Contact Us')?></h2>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('contact'),
    )); ?>

<?php else: ?>

<p><?php echo Yii::t('messages','Please fill out the following form to contact us. Thank you.');?></p>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'contact-form',
    'type'=>'horizontal',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note"><?php echo Yii::t('messages','Fields with * are required');?></p>

	<?php echo $form->errorSummary($model); ?>

    <?php echo Yii::t('messages',$form->textFieldRow($model,'name')); ?>

    <?php echo $form->textFieldRow($model,'email'); ?>

    <?php echo $form->textFieldRow($model,'subject',array('size'=>60,'maxlength'=>128)); ?>

    <?php echo $form->textAreaRow($model,'body',array('rows'=>6, 'class'=>'span10')); ?>

	<?php if(CCaptcha::checkRequirements()): ?>
		<?php echo $form->captchaRow($model,'verifyCode',array(
            'hint'=>'Please enter the letters as they are shown in the image above.<br/>Letters are not case-sensitive.',
        )); ?>
	<?php endif; ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton',array(
            'buttonType'=>'submit',
            'type'=>'primary',
            'label'=>'Submit',
        )); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>
</div><!--span6-->
<div class="span6">
    <h2><?php echo Yii::t('messages','Our location')?></h2>
   <!-- <img src="images/location.jpg" style="border: 1px solid" />
    <p><?php //echo Yii::t('messages','You can also send us an email')?>
        <a href="mailto:office@print-design.tk?subject=Inquiry">office@print-design.tk</a></p>-->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.0053038042915!2d100.79975583467102!3d13.718128437119827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d67d5ba67f0df%3A0x2ef286db22cf421b!2s621+Thanon+Luang+Phaeng!5e0!3m2!1sen!2s!4v1401959153581" 
        width="425" height="350" frameborder="0" style="border:0"></iframe>    
</div>


</div><!--row fluid-->

