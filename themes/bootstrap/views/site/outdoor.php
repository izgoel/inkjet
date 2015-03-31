<?php
$gridDataProvider = new CArrayDataProvider(array(
    array('id'=>1,'media'=>'Vinyl', 'first'=>'200', 'second'=>'150','third'=>'120'),
    array('id'=>2,'media'=>'PP Sticker', 'first'=>'250', 'second'=>'call','third'=>'call'),
    array('id'=>3,'media'=>'PP Sticker clear', 'first'=>'300', 'second'=>'call','third'=>'call'),
    array('id'=>4,'media'=>'see through', 'first'=>'550', 'second'=>'call','third'=>'call'),
    //array('media'=>'Stu', 'first'=>'Dent', 'language'=>'HTML','usage'=>'<span class="inlinebar">1,3,4,5,3,5</span>'),
));
?>
<div class="row-fluid">
    <div class="well">
        <h2><?php echo Yii::t('messages','Outdoor print services')?></h2>
    </div>
        <?php $abc=dirname(__FILE__)?>
        <?php $text = file_get_contents ($abc.'/outdoor.txt' );?>
        <!--<p style="text-align: justify;"><?php //echo $text ?></p>-->
        <?php echo $text ?>
    
</div>
<div class="row-fluid">
    <?php 
        $this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'OUTDOOR PRINT PRICE LIST',
			'titleCssClass'=>'',
                        'htmlOptions'=>array("style"=>"height:200")
		));
   ?>
    <?php $this->widget('zii.widgets.grid.CGridView', array(
			'htmlOptions'=>array('class'=>'table table-striped table-bordered table-condensed'),
			'dataProvider'=>$gridDataProvider,
			'template'=>"{items}",
			'columns'=>array(
				array('name'=>'media', 'header'=>'Media'),
				array('name'=>'first', 'header'=>'1 - 50 sqm'),
				array('name'=>'second', 'header'=>'51 - 100 sqm'),
				array('name'=>'third', 'header'=>'101 - ...'),
			),
		)); ?>
    <?php $this->endWidget(); ?>

    
</div>