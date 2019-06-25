<?php

namespace app\controllers;
use app\models\Book;
use yii\web\Controller;
class BookController extends Controller
{ public function actionIndex(){
    $model = new Book;
    $model->title = 'Война и мир';
    $model->author = 'Л. Толстой';
    $model->save(false);
}

}