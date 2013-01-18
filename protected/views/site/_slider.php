
<div id="content">
	<?php $this->widget('application.extensions.slider.slider', array(
        'container'=>'slideshow',
        'width'=>670, 
        'height'=>320, 
        'timeout'=>6000,
        'infos'=>true,
        'constrainImage'=>true,
        'images'=>array('livingeasy.jpg','livingfree.jpg','livinglean.jpg','livingsmart.jpg'),
        'alts'=>array("LivingEasy is about creating calm where there was fear, creating fulfilling relationships where there was anger, and creating clarity where there was overwhelm.","In just a few days you have the power to stop smoking! Learn to eliminate tobacco cravings and urges with a variety of tools and support to help you succeed.","Do your food cravings stop your weight management efforts? Do feelings control your eating habits? Never diet again - and still lose weight with our LivingLean Program","LivingSmart: Learn to control your drinking permanently with the internets leading alcohol control program. Its convenient, easy and PROVEN!"),
        //'defaultUrl'=>Yii::app()->request->hostInfo
        )
    );?>	     
</div>
  <div id="content-images">
        <p><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/livinglean.png" class="floatRight" ></img></p>
        <p><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/livingfree.png" class="floatRight" ></img></p>
        <p><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/livingeasy.png" class="floatRight" ></img></p>
        <p><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/livingsmart.png" class="floatRight" ></img></p>
    </div>   <div class="clear"></div>
