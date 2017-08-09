<?php

namespace app\modules\account\controllers;

use yii\web\Controller;
use app\modules\account\controllers\BackendController;

class DefaultController extends BackendController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
