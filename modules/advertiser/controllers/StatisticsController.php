<?php

namespace app\modules\advertiser\controllers;

use yii\web\Controller;

/**
 * Default controller for the `advertiser` module
 */
class StatisticsController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
