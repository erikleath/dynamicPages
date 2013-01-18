<div id="body-top">
	<?php
	//Frank, we need help splitting up the content here are two links for you to look at:
	//http://selfhelpworks.biz/how-it-works
	//http://selfhelpworks.biz/livinglean
	//basically we need to create a function that allows us to split the two container divs (body-top && body-bottom)
	//right now we can't split up the content, right now we can only output the bottom, except for the home page
	//because of the slider.
	//please use biz/index, biz/how-it-works, biz/livinglean, etc. Thanks
		if($pageName->slider == 'yes'){
			$this->renderPartial('_slider', array('pageName'=>$pageName));
		}
	?>
</div>
<?php
	$content = $pageName->getContent();
	if($content != null && $parmName->parm == null){
		echo $content;
	}
	
	if($parmName->parm != null){
		$parmValue = $parmName->getContent();
		echo $parmValue;
	}
	
	if($pageName->form == 'yes'){
		$this->renderPartial('_form', array('model'=>$model));
	}
?>
