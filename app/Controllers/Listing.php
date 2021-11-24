<?php


namespace App\Controllers;


use App\Models\AttendanceModel;
use App\Models\MAttendanceModel;
use App\Models\UsersModel;

class Listing extends BaseController
{
    function index(){
        return view('record/listings');
    }

    function fetchFromDatabase(){
        $record = new AttendanceModel();
        $data['attendance'] = $record->findAll();
//        print_r($data);
//        die;
        return view('record/listings', $data);
    }

    function monthdata(){
        $record = new MAttendanceModel();
        $data['monthly'] = $record->findAll();
        return view('record/monthlist', $data);
    }

    function dataFetching(){
//        print_r("nfjkdsbfdsjk");die;
        $record = new UsersModel();
        $data['users'] = $record->findAll();
//        print_r($data);die;
        return view('record/markAttendance', $data);
    }
}