<div class="row-fluid">
    <div class="span3">
       <?php $this->beginWidget('zii.widgets.CPortlet', array(
                   'title'=>Yii::t('messages',''),
               ));?>
        <?php $this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'tabs', // '', 'tabs', 'pills' (or 'list')
    'stacked'=>true, // whether this is a stacked menu
    'items'=>array(
        array('label'=>Yii::t('messages','Rubberstamp services'), 'url'=>array('/site/rubberstamp'), 'active'=>true),
        array('label'=>Yii::t('messages','Rubberstamp prices'), 'url'=>array('/admin/index')),
        array('label'=>Yii::t('messages','Flash stamp machine'), 'url'=>array('/site/flashstamp')),
    ),
)); ?>
    <?php $this->endWidget();?>    
    </div>
    <div class="span9">
        <div class="well-small">
            <h2><?php echo Yii::t('messages','Rubberstamp services')?></h2>
        </div>
        <!--<img src="images/stamp-offset-1.png" alt="text" style="float: left; margin-right:5px;"/>-->
        <?php $abc=dirname(__FILE__)?>
        <?php $text = file_get_contents ($abc.'/rubberstamp.txt' );?>
        <!--<p style="text-align: justify;"><?php //echo $text ?></p>-->
        <?php echo $text ?>
    </div>
    
</div>