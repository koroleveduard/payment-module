<?php

namespace app\modules\account\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;

class BackendController extends Controller
{
    public function beforeAction($action)
    {
        $this->layout = 'backend_main';
        return parent::beforeAction($action);
    }

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
}
