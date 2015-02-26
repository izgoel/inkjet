<?php
$gridDataProvider = new CArrayDataProvider(array(
    array('media'=>'Vinyl', 'first'=>'200', 'second'=>'150','third'=>'120'),
    array('media'=>'PP Sticker', 'first'=>'250', 'second'=>'','third'=>''),
    array('media'=>'PP Sticker clear', 'first'=>'300', 'second'=>'','third'=>''),
    array('media'=>'see through', 'first'=>'550', 'second'=>'','third'=>''),
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