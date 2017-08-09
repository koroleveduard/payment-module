<?php

namespace app\modules\account\controllers;

use yii\web\Controller;
use Yii;
use app\modules\account\controllers\BackendController;
use app\modules\account\models\Payment;
use app\modules\account\services\PaymentService;
use yii\helpers\Url;

class PaymentController extends BackendController
{
	private $paymentService;

	public function __construct($id, $module, PaymentService $service, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->paymentService = $service;
    }

    /**
     * Создание счета
     */
    public function actionCreate()
    {
        $model = new Payment();
        $request = Yii::$app->request;
        $link = null;
        if($model->load($request->post()) && $model->save()) {
        	$link = Url::to(['/account/payment/show','id'=>$model->id]);
        }
        return $this->render('add',[
        	'model' => $model,
        	'link' => $link
        ]);
    }

    /**
     * Отображение счета
     * @param integer $id
     */
    public function actionShow($id)
    {
    	$model = $this->paymentService->findById($id);
    	return $this->render('show',[
    		'model' => $model
    	]);
    }

    /**
     * Список счетов пользователя
     */
    public function actionList()
    {
    	$userId = Yii::$app->user->identity->id;
    	$models = $this->paymentService->findByUserId($userId);
    	return $this->render('list.php',[
    		'models' => $models
    	]);
    }

}
