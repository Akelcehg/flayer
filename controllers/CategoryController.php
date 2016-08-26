<?php

namespace app\controllers;

use app\models\Flayer;
use app\models\FlayerGroup;
use app\models\SearchFlayer;
use app\models\SignupForm;
use app\models\Users;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class CategoryController extends Controller
{

    public function actionIndex($name)
    {
        $filter = null;
        if ($name) {
            $filter = [
                "SearchFlayer" => [
                    "category" => $name
                ]
            ];
        }

        $searchModel = new SearchFlayer();
        $dataProvider = $searchModel->search($filter);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'flayerGroups' => FlayerGroup::getFlayerGroupsAndCount(),
        ]);
    }

}
