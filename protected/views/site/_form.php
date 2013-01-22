<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-biz-form',
    'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
))); 

/*
Hey Erik,
Wasn't quite too sure how you used the $pageName in the SiteController
So if you can implement that to the form, we could just use that to display the 
"Complete your ______ Signup!" part of the form and maybe in the DB as well. 
As of right now, the DB is hardcoded to point to certain images (which is fine). 
*/
?>
        <p class="note">Complete Your <?php $page ?> Signup!</p>
        <div class="clear"></div>
        <div class="row">
                <?php echo $form->labelEx($model,'billfname'); ?>
		<?php echo $form->textField($model,'billfname'); ?>
		<?php echo $form->error($model,'billfname'); ?>
        </div>
        <div class="row">
                <?php echo $form->labelEx($model,'billlname'); ?>
		<?php echo $form->textField($model,'billlname'); ?>
		<?php echo $form->error($model,'billlname'); ?>
        </div>
	<div class="row">
            <?php echo $form->labelEx($model,'method'); ?>
            <?php echo $form->dropDownList($model, 'method', array("", "Visa"=>"Visa","Master Card"=>"Master Card","AmericanExpress"=>"AmericanExpress","Discover"=>"Discover"));?>
            <?php echo $form->error($model,'method'); ?>
        </div>

	<div class="row">
		<?php echo $form->labelEx($model,'card'); ?>
		<?php echo $form->textField($model,'card'); ?>
		<?php echo $form->error($model,'card'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'exp'); ?>
		<?php echo $form->dropDownList($model, 'expM', array("","01"=>'1', "02"=>'2',"03"=>'3',"04"=>'4',"05"=>'5',"06"=>'6',"07"=>'7',"08"=>'8',"09"=>'9',"10"=>'10',"11"=>'11',"12"=>'12')); ?>
                <?php echo $form->dropDownList($model, 'expY', array("","13"=>'2013',"14"=>'2014',"15"=>"2015","16"=>'2016',"17"=>'2017',"18"=>'2018',"19"=>'2019',"20"=>'2020',"21"=>'2021',"22"=>'2022')); ?>
		<?php echo $form->error($model,'exp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cvv2'); ?>
		<?php echo $form->textField($model,'cvv2'); ?>
		<?php echo $form->error($model,'cvv2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'baddress'); ?>
		<?php echo $form->textField($model,'baddress'); ?>
		<?php echo $form->error($model,'baddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'baddress2'); ?>
		<?php echo $form->textField($model,'baddress2'); ?>
		<?php echo $form->error($model,'baddress2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bcity'); ?>
		<?php echo $form->textField($model,'bcity'); ?>
		<?php echo $form->error($model,'bcity'); ?>
	</div>

	<div class="row">
		//states 
	</div>

	<div class="zipRow">
		<?php echo $form->labelEx($model,'bzip'); ?>
		<?php echo $form->textField($model,'bzip'); ?>
		<?php echo $form->error($model,'bzip'); ?>
	</div>

        <br>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Click to get Started', array('class'=>'Finish')); ?>
	</div>
	Please click the button only once to prevent submitting your order twice! Thank You!
<?php $this->endWidget(); ?>

</div><!-- form -->
<div class="clear"></div>
