<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        return view('login');
    }



    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if ($username == 'admin' && $password == '0000') 
        {
            $session = session();
            $session->set('isLoggedIn', true);
            //
            $session2 = session();
            $session2->set('username', 'admin');
            //
            return redirect()->to('News');
        } 
        else {
            return redirect()->to('Auth');
        }
    }
    public function dashboard()
    {
        $session = session();
        $isLoggedIn = $session->get('isLoggedIn');

        if (!$isLoggedIn) {
            return redirect()->to('Auth');
        }

        $model = model(NewsModel::class);

        $data = [
            'news'  => $model->getNews(),
            'title' => 'News archive',
        ];

        return view('templates/header', $data)
            . view('news/index')
            . view('templates/footer');
    }
    public function logout()
    {
        $session = session();
        $session->destroy();

        return redirect()->to('News');
    }
}
