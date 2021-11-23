<?php

use App\Models\MAttendanceModel;

?>
    <!DOCTYPE html>
    <html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
              integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
              crossorigin="anonymous">
    </head>
    </html>
    <body style="background: #9dbed0"

<div id="record">
    <div class="container" style="margin-top: 10%">
        <h1 style="text-align: center">Monthly Attendance</h1>
        <div class="">
            <div class="row">
                <div class="col-md-6 text-left">
                    <a class="btn btn-primary" href="<?= site_url('Listing/fetchFromDatabase') ?>">
                        View Today's Attendance
                    </a>
                </div>
                <div class="col-md-6 text-right mb-2">
                    <a href="<?php echo base_url() . '/dashboard' ?>" class="btn btn-success">
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
                    <th scope="col">Total Days</th>
                    <th scope="col">Presents</th>
                    <th scope="col">Absents</th>
                    <th scope="col">Leaves</th>
                    <th scope="col">Casual Leaves</th>
                    <th scope="col">Medical Leaves</th>
                </tr>
                </thead>
                <tbody>
                <?php
                //                $record = new AttendanceModel();
                //                $data['attendance'] = $record->findAll();
                //                print_r($data);die;
                //                print_r($attendance);
                //                die;
                if (!empty($monthly)) {
                    $i = 1;
                    foreach ($monthly as $k): ?>
                        <tr>
                            <th scope="row"><?php echo $i++; ?></th>
                            <!--                            <td>--><?php //echo $k['name']; ?><!--</td>-->
                            <td><?php echo $k['name']; ?></td>
                            <td><?php echo $k['pak_number']; ?></td>
                            <td><?php echo $k['total_days']; ?></td>
                            <td><?php echo $k['presents']; ?></td>
                            <td><?php echo $k['absenties']; ?></td>
                            <td><?php echo $k['leaves']; ?></td>
                            <td><?php echo $k['casual_leaves']; ?></td>
                            <td><?php echo $k['medical_leaves']; ?></td>
                        </tr>
                    <?php endforeach;
                } ?>
                </tbody>
                </tbody>
            </table>
        </div>
    </div>
</div><?php
