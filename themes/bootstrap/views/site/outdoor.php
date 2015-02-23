<div class="row-fluid">
    <div class="well">
        <h2><?php echo Yii::t('messages','Outdoor print services')?></h2>
    </div>
        <?php $abc=dirname(__FILE__)?>
        <?php $text = file_get_contents ($abc.'/outdoor.txt' );?>
        <!--<p style="text-align: justify;"><?php //echo $text ?></p>-->
        <?php echo $text ?>
    
</div>