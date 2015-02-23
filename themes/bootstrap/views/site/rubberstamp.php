<div class="row-fluid">
        <div class="well">
            <h2><?php echo Yii::t('messages','Rubberstamp services')?></h2>
        </div>
        <!--<img src="images/rubberstamp01.png" style="float: left; margin-right:5px;"/>-->
        <?php $abc=dirname(__FILE__)?>
        <?php $text = file_get_contents ($abc.'/rubberstamp.txt' );?>
        <!--<p style="text-align: justify;"><?php //echo $text ?></p>-->
        <?php echo $text ?>
    
</div>