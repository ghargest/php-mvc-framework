<?php

namespace app\controllers;

use ghargest\phpmvc\Application;
use ghargest\phpmvc\Controller;
use ghargest\phpmvc\Request;
use ghargest\phpmvc\Response;
use app\models\ContactForm;

class SiteController extends Controller {

    public function home() {

        $params = [
            'name' => 'Greg Hargest'
        ];

        return $this->render('home', $params);
    }

    public function contact(Request $request, Response $response) {

        $contactForm = new ContactForm();

        if ($request->isPost()) {

            $contactForm->loadData($request->body());

            if ($contactForm->validate() && $contactForm->send()) {
                Application::$app->session->setFlash('success', 'Thanks for contacting us');
                return $response->redirect('/contact');
            }
        }
        
        return $this->render('contact', [
            'model' => $contactForm
        ]);
    }
}