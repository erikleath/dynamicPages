	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<?php $domain = $this->domain;
	?>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/<?php echo $domain; ?>/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<?php $jsUrl = Yii::app()->request->baseUrl.'/js/'; ?>
<?php Yii::app()->clientScript->registerScriptFile($jsUrl.'backtotop.js', CClientScript::POS_HEAD); ?>

</head>

  <html>
     <body>
       <a id="top"></a>
       <div id="container">
        <div id="header-container">
            <div id="header">
                <div id="header-left"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/selfhelpworks.png" ></img></div>
                <div id="header-right"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/trusted-by.jpg" ></img></div>
            </div>
        </div>
           <div id="mainmenu">
        
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/biz')),
                                array('label'=>'How It Works', 'url'=>array('biz/how-it-works')),
                                array('label'=>'LivingLean', 'url'=>array('biz/livinglean')),
                                array('label'=>'LivingFree', 'url'=>array('biz/livingfree')),
                                array('label'=>'LivingEasy', 'url'=>array('biz/livingeasy')),
                                array('label'=>'LivingSmart', 'url'=>array('biz/livingsmart')),
                                array('label'=>'JOIN NOW!', 'url'=>array('biz/joinNow'), 'itemOptions'=>array('class'=>'last')),
			),
		)); ?>
		
	</div><!-- mainmenu -->
          <div id="body">
             <?php echo $content; ?>
        </div><!-- body -->
        </div><!-- container -->
          <div id="footer-container">
            <div id="footer">
            	<?php
            		//Create an instance of ColorBox
					$colorbox = $this->widget('application.extensions.colorpowered.JColorBox');
					 
					//Call addInstance (chainable) from the widget generated.
					$colorbox
					    ->addInstance('.colorbox', array('maxHeight'=>'60%', 'maxWidth'=>'65%'))
					    ->addInstance('.colorbox1', array('iframe'=>true, 'width'=>'50%', 'height'=>'50%'))
					    ->addInstance('a[rel="footer"]');

            	?>
            	
            	
                <div id="footer-links"><a href='<?php echo Yii::app()->request->baseUrl; ?>/site/terms' class='colorbox' rel="footer">Terms & Conditions</a> | <a href='<?php echo Yii::app()->request->baseUrl; ?>/site/policy' class='colorbox' rel="footer">Privacy Policy by TRUSTe</a> | <a href='<?php echo Yii::app()->request->baseUrl; ?>/site/support' class='colorbox' rel="footer">Customer Support</a> | <a href='images/guarantee100.gif' class="colorbox" rel="footer">100% Guarantee</a></div>
                <div id="footer-btn"><a href="#top">Back to Top</a></div>
                <div id="footer-copy">Copyright 2012 SelfHelpWorks</div>
            </div>
        </div>
        </body>
            </html> 