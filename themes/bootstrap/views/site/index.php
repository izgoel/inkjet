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
    </div>
    <?php $this->endWidget()?>
    <div class="span6">
        <?php
       //     $this->beginWidget('zii.widgets.CPortlet', array(
         //       'title'=>'More Services',
           // ));?>
        <!--<span class="pull-left">-->
        <img src="images/j-flag-01.png" max-width="90%" alt="J-Flag">
        <!--</span>-->
            <dl>
                 <dt>J-Flag</dt>
                 <dd>Price THB 900</dd>
            </dl>
        <span class="badge">J-Flag </span>
        <span class="badge">J-Flag </span><b style="font-size: 0.9em;">Miso Web Design</b> นี้เป็น บริษัท ที่มีประสบการณ์ 
            เราสามารถไปถึงสำหรับคุณเว็บไซต์ที่ดีในภาษาอังกฤษ, เยอรมันและไทย และราคาไม่แพง</p>
        <?php //$this->endWidget()?>
    </div>
    <div class="span3">
        <h3><?php echo Yii::t('messages', 'rubber stamp'); ?></h3>
        <!--<p>we have everything for your rubberstamp. we finish your rubber stamp in shortest possible time.
        if you want to sell rubber stamp, then we have all material for your needs</p>-->
        <p>เรามีทุกอย่างสำหรับตรายางของคุณ เราเสร็จตรายางของคุณในเวลาที่สั้นที่สุด 
            ถ้าคุณต้องการที่จะขายตรายางแล้วเรามีวัสดุทั้งหมดสำหรับความต้องการของคุณ ...</p>
        <p><a class="btn btn-small btn-warning" href="<?php echo Yii::app()->getBaseUrl()?>/index.php?r=site/rubberstamp">
        <?php echo Yii::t('messages','View details')?> &raquo </a></p>
    </div>
    <div class="span3">
        <h3><?php echo Yii::t('messages', 'Web design'); ?></h3>
        <p> สำหรับการออกแบบเว็บเราทำงานร่วมกับ <b style="font-size: 0.9em;">Miso Web Design</b> นี้เป็น บริษัท ที่มีประสบการณ์ 
            เราสามารถไปถึงสำหรับคุณเว็บไซต์ที่ดีในภาษาอังกฤษ, เยอรมันและไทย และราคาไม่แพง</p>
        <p><a class="btn btn-small btn-warning" href="<?php echo Yii::app()->getBaseUrl()?>/index.php?r=site/webdesign">
        <?php echo Yii::t('messages','View details') ?>&raquo</a></p>
    </div>
    
    
    
</div>


