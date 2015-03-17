<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

?>

<?php require_once ('slider.php') ?>
<div class="clearfix"></div>

<?php //$this->endWidget(); ?>

<div class="row-fluid">
    <div class="span6">
        <?php
            $this->beginWidget('zii.widgets.CPortlet', array(
                'title'=>'Our Services',
            ));?>
        <div class="media">
            <span class="pull-left">
                <img src="images/gr-design.png" width="66" height="66" alt="Graphic design">
            </span>
            <div class="media-body">
                <h4 class="media-heading"> <?php echo Yii::t('messages','Graphic design');?></h4>
                        <p>เราจะทำให้การออกแบบกราฟิกที่ดีที่สุดสำหรับคุณ</p>
            </div>            
        </div>
        <div class="media">
            <span class="pull-left">
                <img src="images/cmyk.png" width="66" height="66" alt="Print services">
            </span>
            <div class="media-body">
                <h4 class="media-heading"><?php echo Yii::t('messages', 'Print services'); ?></h4>
                <p>งานพิมพ์ของคุณในทุกขนาดและในหลายสื่อ</p>
            </div>
        </div>
        <div class="media">
            <span class="pull-left">
                <img src="images/business-cards-icon.png" width="66" height="66" alt="Name cards, business cards">
            </span>
            <div class="media-body">
                <h4 class="media-heading"><?php echo Yii::t('messages', 'Name cards, Business cards'); ?></h4>
                <p>งานพิมพ์ของคุณในทุกขนาดและในหลายสื่อ</p>
            </div>
        </div>
        <div class="media">
            <span class="pull-left">
                <img src="images/stamp-icon-64x64.png" width="66" height="66" alt="Rubberstamp">
            </span>
            <div class="media-body">
                <h4 class="media-heading"><?php echo Yii::t('messages', 'rubber stamp'); ?></h4>
                <p>เรามีทุกอย่างสำหรับตรายางของคุณ เราผลิตตรายางของคุณในเวลาที่สั้นที่สุด 
            ถ้าคุณต้องการที่จะขายตรายางแล้วเรามีวัสดุทั้งหมดสำหรับความต้องการของคุณ ...</p>
            </div>
        </div>
        <?php $this->endWidget()?>
    </div>
    
    <div class="span6">
        <img src="images/j-flag-01.png" max-width="90%" alt="J-Flag">
        <div class="row-fluid">
        <div class="span6">    
            <dl>
                <dt>J-Flag</dt>
                <dd>50x180 <?php echo Yii::t('messages','complete price');?> 1.500<sup>฿</sup></dd>
                <dt>Roll up</dt>
                <dd>60x160 <?php echo Yii::t('messages','complete price');?> 1.400<sup>฿</sup></dd>
                <dd>80x200 <?php echo Yii::t('messages','complete price');?> 1.800<sup>฿</sup></dd>
            </dl>
        </div>
        <div class="span6">    
            <dl>
                <dt>X-Stand</dt>
                <dd>60x160 <?php echo Yii::t('messages','complete price');?> 1.000<sup>฿</sup></dd>
                <dd>80x180 <?php echo Yii::t('messages','complete price');?> 1.400<sup>฿</sup></dd>
                <dt>Exhibition Wall</dt>
                <dd>175x165 <?php echo Yii::t('messages','complete price');?> 9.900<sup>฿</sup></dd>
                
            </dl>
        </div>
        </div>
        <?php //$this->endWidget()?>
    </div>
    </div>
<!--</div>-->


