<div class="row-fluid">
    <div class="span3">
        <div class="sidebar-nav" id="sidebar">
        <?php 
        $this->beginWidget('zii.widgets.CPortlet', array(
                'title'=>"Operations",
            ));
        $this->widget('bootstrap.widgets.TbMenu', array(
            'type'=>'list', // '', 'tabs', 'pills' (or 'list')
            'stacked'=>true, // whether this is a stacked menu
            'items'=>array(
                array('label'=>Yii::t('messages','Graphics services'), 'url'=>array('/site/graphicdesign'), 'active'=>true),
                array('label'=>Yii::t('messages','Website design'), 'url'=>array('/site/webdesign')),
                array('label'=>Yii::t('messages','Rubberstamp'),'url'=>array('/site/rubberstamp')),
            ),
        )); 
         $this->endWidget();
        ?>
        </div>
    </div>
    <div class="span9">
        <div class="well-small">
            <h2><?php echo Yii::t('messages','Our services')?></h2>
        </div>
        <!--<img src="images/stamp-offset-1.png" alt="text" style="float: left; margin-right:5px;"/>-->
        <?php $abc=dirname(__FILE__)?>
        <?php $text = file_get_contents ($abc.'/services.txt' );
                ?>
        <!--<p style="text-align: justify;"><?php //echo $text ?></p>-->
        <?php echo $text ?>
    </div>
    
</div>
