<?php

namespace app\modules\account\controllers;

use yii\web\Controller;
use Yii;
use app\modules\account\controllers\BackendController;
use app\modules\account\models\Customer;

class CustomerController extends BackendController
{
    public function actionProfile()
    {
    	$user = Yii::$app->user->identity;
    	$customer = $user->customer;

    	if($customer) {
    		return $this->render('profile',[
    			'customer' => $customer,
    			'user' => $user
    		]);
    	}

    	$customer = new Customer();

    	if ($customer->load(Yii::$app->request->post()) && $customer->save()) {
    		return $this->redirect(['profile']);
    	}


        return $this->render('requisites',[
        	'model' => $customer
        ]);
    }

}
