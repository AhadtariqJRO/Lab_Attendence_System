<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        //get logged user info and then pass to dashboard
        $usersModel = new \App\Models\UsersModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $usersModel->find($loggedUserID);
        $data = [
            'title' => 'Dashboard',
            'userInfo'=>$userInfo
        ];
        return view('dashboard/index', $data);
    }

    //creating function for user profile
    function  profile(){
        $usersModel = new \App\Models\UsersModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $usersModel->find($loggedUserID);
        $data = [
            'title' => 'Dashboard',
            'userInfo'=>$userInfo
        ];
        return view('dashboard/index', $data);
    }
}
