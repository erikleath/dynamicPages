<?php

class SiteController extends Controller
{
	public $domain;
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}
	
	/*
public function requestUrl(){
		if(Yii::app()->request->baseUrl == '/dynamicPages'){
			$newUrl = '/dynamic';
			Yii::app()->request->baseUrl = $newUrl;
			return Yii::app()->request->baseUrl;
		}
	}
*/


	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}
	
	public function actionView($domain,$page = null, $parm = null){
		$model = new Users;
		$this->domain = $domain; //Why save this like this, since you are already passing it to the view? (FJW)
		$this->layout='//layouts/'.$domain.'/main';
		//var_dump($this->layout);exit;
                
		//var_dump($this->layout);exit;
		$domainName = Domain::model()->findByAttributes(array('domain_name'=>$domain));
		$parmName = Pages::model()->findByAttributes(array('parm'=>$parm));
		if($domainName===NULL){
			throw new CHttpException(404,'The requested page does not exist.');
		}
                
		$pageName = $domainName->retrievePage($page); //Moved this here to make sure $domainName is not null
                
		//echo "<pre>";var_dump($domain,$page,$domainName); exit;		
		if($pageName===NULL){
			Yii::app()->request->redirect($domain.'/index');
		}
		
		if($parmName->parm != null){
			$this->layout='//layouts/'.$domain.'/'.$parm.'/column1';
		}
		
		//$parmValue = Pages::model()->findByAttributes(array('parm'=>$parm));
		if($parmName===NULL){
			throw new CHttpException(404,'The requested page does not exist.');
		}
		
		$form = $parmName;
		
		if($form == 'yes'){
			//form handeling functionality goes here!
		}
				
		$this->render('view', array('domainName'=>$domainName, 'pageName'=>$pageName, 'domain'=>$domain, 'parmName'=>$parmName, 'form'=>$form, 'model'=>$model));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}