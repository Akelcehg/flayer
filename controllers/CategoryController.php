<?php

namespace app\controllers;

use app\models\Flayer;
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

        return $this->render('index');
    }


}
