<?php


namespace App\Controllers;


use App\Models\AttendanceModel;
use App\Models\DattendanceModel;
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
//        return view('record/test', $data);
    }

    function dataInserting(){
        $record = new DattendanceModel();
        $users = new UsersModel();
        $data['users'] = $users->findAll();
        print_r($data);
        die;
        print_r($_POST);
//        $pak_number = [
//          "pak_number" =>   $this->request->getVar('pak_number')
//
//        ];
//        print_r($pak_number);
        die;

    }

    function insertingAttendance(){

        $record = new DattendanceModel();
        $users = new UsersModel();
        $data['users'] = $users->select('pak_number')->findAll();
//        $record['dailyAttendance'] = $data['users'];
        $pakn = array_shift($data['users']);
        print_r($pakn);die;
        print_r($data['users']['0']['pak_number']);die;
//        $query = $record->insert($data['users'],true);

        print_r($query);die;
//        print_r($record);
        print_r($data);
        die;
    }
}