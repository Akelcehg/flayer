<?php

namespace app\controllers;

use app\models\FlayerGroup;
use app\models\SearchFlayer;
use Yii;
use yii\web\Controller;


class FlayerController extends Controller
{
    public function actionIndex()
    {
        $searchModel = new SearchFlayer();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('flayers', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'flayerGroups' => FlayerGroup::getFlayerGroupsAndCount(),
        ]);
    }    
}