<?php
$gridDataProvider = new CArrayDataProvider(array(
    array('id'=>1,'media'=>Yii::t('messages','paper laminated (glossy)'), 'first'=>'500 ฿', 'second'=>'','third'=>''),
    array('id'=>2,'media'=>'Photo paper', 'first'=>'450', 'second'=>'','third'=>''),
    array('id'=>3,'media'=>'PP sticker', 'first'=>'500', 'second'=>'','third'=>''),
    array('id'=>4,'media'=>'glossy PP sticker', 'first'=>'550', 'second'=>'','third'=>''),
    array('id'=>5,'media'=>'clear PP sticker', 'first'=>'580', 'second'=>'','third'=>''),
    array('id'=>6,'media'=>'backlit film', 'first'=>'600', 'second'=>'','third'=>''),
    array('id'=>7,'media'=>'backlit film sticker', 'first'=>'650', 'second'=>'','third'=>''),
));
?>
<div class="row-fluid">
    <div class="well">
        <h2><?php echo Yii::t('messages','Indoor print services')?></h2>
    </div>
        <?php $abc=dirname(__FILE__)?>
        <?php $text = file_get_contents ($abc.'/indoor.txt' );?>
        <!--<p style="text-align: justify;"><?php //echo $text ?></p>-->
        <?php echo $text ?>
    
</div>
<div class="row-fluid">
    <?php 
        $this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'INDOOR PRINT PRICE LIST',
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