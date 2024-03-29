<?php

class SiteController extends Controller
{
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

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		if (Yii::app()->user->isGuest)
        		$this->redirect(Yii::app()->createUrl('site/login'));
        	else{
			$this->render('index');
		}
	}


	public function actionsalesreport() {
		if (Yii::app()->user->isGuest)
        		$this->redirect(Yii::app()->createUrl('site/login'));
        	else{
			$this->render('salesreport');
		}
	}

	public function actioninvoiceentry() {		

		if (Yii::app()->user->isGuest)
        		$this->redirect(Yii::app()->createUrl('site/login'));
        	else{
			$todaysDate = date("Y-m-d");
			$nextInvoiceNumber = Yii::app()->db->createCommand()
	  		->select('max(invoiceNumber) as max')
	  		->from('invoices')
	  		->queryScalar();
			$nextInvoiceNumber += 1;

			if(isset($_POST['productName1'])) {
				$grandTotal = 0;					

				$invoice = new Invoices;
				$invoice->invoiceNumber = $nextInvoiceNumber;
				$invoice->invoiceDate = $todaysDate;
				$invoice->invoiceTotal = $_POST['productCost1'];
				$invoice->save();
				
				for ($x=1; $x<=5; $x++) {
					if(isset($_POST['productName' . $x])) {
						$model=new InvoiceDetails;
						$model->invoiceNumber = $nextInvoiceNumber;
						$model->productName = $_POST['productName' . $x];
						$model->productCost = $_POST['productCost' . $x];
						$model->save();
						$grandTotal += $_POST['productCost' . $x];
					}
				}
				$invoice->invoiceTotal = $grandTotal;
				$invoice->save();
				
				$criteria = new CDbCriteria();
				$criteria->condition = 'salesDate=:salesDate';
				$criteria->params = array(':salesDate'=>$todaysDate);
				
				$newSS=SummarySales::model()->find($criteria);

				if (empty($newSS)) {				
					$newSS=new SummarySales;
					$newSS->salesDate = $todaysDate;
					$newSS->salesTotal = $grandTotal;
				}
				else {
					$newSS->salesTotal += $grandTotal;
				}
				$newSS->save();
				$this->redirect(Yii::app()->createUrl('site/salesreport'));
			}

			$this->render('invoiceentry', array(
			'todaysDate'=>$todaysDate,
			'nextInvoiceNumber'=>$nextInvoiceNumber,
		));
		}
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
					"Content-Type: text/plain; charset=UTF-8";

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
