<?php

class BookingController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('BookMyPlace'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('BookMyPlace','ViewMyBooking'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','BookMyPlace','update','delete','index'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new BookingModel;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['BookingModel']))
		{
			$model->attributes=$_POST['BookingModel'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->booking_id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['BookingModel']))
		{
			$model->attributes=$_POST['BookingModel'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->booking_id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('BookingModel');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new BookingModel('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['BookingModel']))
			$model->attributes=$_GET['BookingModel'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return BookingModel the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=BookingModel::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Function for booking the place that was booked by Traveller
	 */
	public function actionBookMyPlace()
	{	
		$model=new BookingModel;
		if (isset($_POST)&&isset(Yii::app()->session['travellerid']))
		{
			
			$model->booking_place_id=$_POST['placeid'];
			$model->booking_traveller_id=Yii::app()->session['travellerid'];
			$model->booking_amount=$_POST['placeprice'];
			if($model->save())
			{
			$this->render('view',array('model'=>$model));
			}
		}
		else 
		{
			$path=Yii::app()->createUrl('traveller/create');
			$error="* You must be a User for this site to Book a Place";
			$this->redirect($path,array('model'=>$model,
					'error'=>$error,
			));
			
		}
	}
	
	/*
	 * function to only view self booking 
	 */
	public function actionViewMyBooking()
	{
		$id=Yii::app()->session["travellerid"];
		$cmd = Yii::app()->db->createCommand();
		$cmd->select = '*';
		$cmd->from = 'booking';
		$cmd->where = 'booking_traveller_id='.$id;
		$result = $cmd->query();
		$this->render('selfbookings',array(
				'result'=>$result,
		));
	}
	
	/**
	 * Performs the AJAX validation.
	 * @param BookingModel $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='booking-model-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
