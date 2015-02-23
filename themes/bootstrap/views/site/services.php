<div class="row-fluid">
<!--    <div class="span9">-->
        <div class="well-small">
            <h2><?php echo Yii::t('messages','Our services')?></h2>
        </div>
        <?php $abc=dirname(__FILE__)?>
        <?php $text = file_get_contents ($abc.'/services.txt' );
                ?>
        <!--<p style="text-align: justify;"><?php //echo $text ?></p>-->
        <?php echo $text ?>
    </div>
    
