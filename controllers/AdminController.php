<?php

namespace acmeCorp\humhub\modules\exampleBasic\controllers;

use humhub\modules\admin\components\Controller;

class AdminController extends Controller
{
    /**
     * Render admin only page
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

}
