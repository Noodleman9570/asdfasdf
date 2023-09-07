<?php

namespace App\Controller;

use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        $contactModel = new Contact();

        return $contactModel->query('SELECT * FROM contacts')->get();

        return $this->view('home', [
            'title' => 'Home',
            'description' => 'Esta es la pagina Home'
        ]);
    }
}