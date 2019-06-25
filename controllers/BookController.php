<?php

namespace app\controllers;
use yii\web\Controller;
class BookController extends Controller
{ public function actionIndex(){
    ob_start();
    echo 11;
}

}