<?php
/**
 * Created by PhpStorm.
 * @author: devbrom (Roman Budnitsky)
 * @date: 03.02.15 16:46
 *
 * Class DefaultController
 */

namespace devbrom\releases\controllers;

use yii\web\Controller;

class DefaultController extends Controller {

    public function actionIndex() {
        echo 'OK!';
    }

}