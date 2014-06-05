<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title><?php echo CHtml::encode($this->pageTitle.'- Print design'); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="th" />
    <meta name="robots" content="INDEX, FOLLOW"/>
    <meta name="revisit-after" content="1 week" />
    <meta name="author" content="Miso Webdesign">
    <meta name="keywords" content='พิมพ์ , ออกแบบ, ตรายาง, การออกแบบกราฟิก, การออกแบบเว็บ, 
                แสตมป์, เครื่องแสตมป์'/>
    <meta name="description" content="ที่มีคุณภาพสูงออกแบบกราฟิกและการพิมพ์ ออกแบบเว็บไซต์ การผลิตและการขายของตรายาง"/>
    <link rel="shortcut icon" href="images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl ?>/js/jquery-cycle-plugin-all.js"></script>
    <?php Yii::app()->bootstrap->register(); ?>
</head>

<body style="background: url('images/bg-picture.jpg');">
    <?php require_once('header.php')?>
    <div class="container" id="page">
    <div class="row-fluid">
        <div class="span-12">
        <?php $this->widget('bootstrap.widgets.TbNavbar',array(
            'fluid'=>'false',
            'collapse'=>'true',
            'fixed'=>'',
            'items'=>array(
                array(
                    'class'=>'bootstrap.widgets.TbMenu',
                    'items'=>array(
                        array('label'=>Yii::t('messages','Home'), 'icon'=>'home','url'=>array('/site/index')),
                        //array('label'=>Yii::t('messages','Services'), 'url'=>array('/site/page', 'view'=>'about')),
                        array('label'=>Yii::t('messages','Services'), 'url'=>array('/site/services')),
                        array('label'=>Yii::t('messages','Rubber stamp'), 'url'=>array('/site/rubberstamp')),
                        array('label'=>Yii::t('messages','Promotions'), 'url'=>array('/site/promotion')),
                        array('label'=>Yii::t('messages','Contact'), 'url'=>array('/site/contact')),
                    ),
                ),
            array(
            'class'=>'bootstrap.widgets.TbMenu',
            'htmlOptions'=>array('class'=>'pull-right'),
            'items'=>array(
            array('label'=>Yii::t('messages','Login'), 'url'=>array('/site/login'),'visible'=>Yii::app()->user->isGuest),
            array('label'=>Yii::t('messages','Logout(').Yii::app()->user->name.')', 'url'=>array('/site/logout'), 
                  'visible'=>!Yii::app()->user->isGuest)

                )
        )

            ),
        )); ?>

<!--<div class="container" id="page">-->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
    <?php //require_once ('slider.php') ?>
</div>
    </div>
	<?php echo $content; ?>

	<div class="clear"></div>

<?php require_once 'footer.php';?>

</div><!-- page -->

</body>
</html>
