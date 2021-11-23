<?php

use App\Models\AttendanceModel;

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
</html>
<body style="background: #9dbed0">

<div id="record" >
    <div class="container" style="margin-top: 10%">
        <h1 style="text-align: center">Current Day Attendance </h1>
        <div class="">
            <div class="row">
                <div class="col-md-6 text-left">
                    <a class="btn btn-primary" href="<?= site_url('Listing/monthdata')?>">
                        View Monthly Attendance
                    </a>
                </div>
                <div class="col-md-6 text-right mb-2">
                    <a href="<?php echo base_url().'/dashboard'?>" class="btn btn-success">
                        Back To Dashboard
                    </a>
                </div>
            </div>
            <table class="table table-striped table-dark">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Pak Number</th>
                    <th scope="col">Date</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                <?php
//                $record = new AttendanceModel();
//                $data['attendance'] = $record->findAll();
//                print_r($data);die;
//                print_r($attendance);
//                die;
                if (!empty($attendance)) {
                    $i = 1;
                    foreach ($attendance as $k): ?>
                        <tr>
                            <th scope="row"><?php echo $i++; ?></th>
                            <td><?php echo $k['name']; ?></td>
                            <td><?php echo $k['pak_number']; ?></td>
                            <td><?php echo $k['date']; ?></td>
                            <td><?php echo $k['present_absent']; ?></td>
                        </tr>
                    <?php endforeach;
                } ?>
                </tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>