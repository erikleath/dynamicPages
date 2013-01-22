<?php if($pageName->page_name == 'index'):?>
<div id="body-top">
	<?php
		if($pageName->slider == 'yes'){
			$this->renderPartial('_slider', array('pageName'=>$pageName));
		}
	?>
</div>
<?php endif; ?>

<?php if($pageName->page_name == 'terms' || $pageName->page_name == 'policy' || $pageName->page_name == 'support' || $pageName->page_name == 'images' ): 
        $content = $pageName->getContent();
	if($content != null && $parmName->parm == null){
		echo $content;
	}
        exit;
       endif; 
?>
<?php
        if($pageName->form == 'yes'){ ?>
            <div id="body-top"> 
            <?php
                $content = $pageName->getContent();
                if($content != null && $parmName->parm == null){
                    echo $content;
                } 
                $this->renderPartial('_form', array('model'=>$model));
          ?></div>
<?php   }
        else{
            $content = $pageName->getContent();
            if($content != null && $parmName->parm == null){
                    echo $content; 
            }

            if($parmName->parm != null){
                    $parmValue = $parmName->getContent();
                    echo $parmValue;
            }
        }
?>
	
