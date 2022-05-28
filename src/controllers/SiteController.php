<?php

namespace app\controllers;

use app\models\Form1;
use app\models\Form2;
use Yii;
use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $first_model = new Form1();

        if ($this->request->isAjax) {
            if ($first_model->load($this->request->post()) && $first_model->save()) {
                return 'Запрос принят!';
            }
        } else {
            $first_model->loadDefaultValues();
        }

        $second_model = new Form2();
        if ($this->request->isAjax) {
            if ($second_model->load($this->request->post()) && $second_model->save()) {
                return 'Запрос принят!';
            }
        } else {
            $second_model->loadDefaultValues();
        }

        return $this->render('index', compact('first_model', 'second_model'));
    }
}


