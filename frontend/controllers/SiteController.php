<?php
namespace frontend\controllers;

use yii\web\Controller;

/**
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */
class SiteController extends Controller
{
    public function actionIndex() {
        return $this->render('index');
    }
}