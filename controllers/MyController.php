<?php
/**
 * Created by PhpStorm.
 * User: Дима
 * Date: 26.06.2019
 * Time: 0:38
 */

namespace app\controllers;
use yii\web\Controller;
class MyController extends Controller
{ public function actionOne(){
    ob_start();
   echo '111';
}

}