<?php namespace App\Modules\Auth\Controllers;

use View, Sentry, Input, Session, Redirect, FrontController;

class LogoutController extends FrontController {

    public function getIndex()
    {
        Sentry::logout();

        $this->message(t('Logged out!'));
    }
}