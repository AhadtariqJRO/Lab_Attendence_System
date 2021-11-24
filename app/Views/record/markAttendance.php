<?php
use App\Models\UsersModel;
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
</html>
<body>

<div id="record" >
    <div class="container" style="margin-top: 10%">
        <h1 style="text-align: center">Mark Attendance</h1>
        <div class="">
            <div class="row">
                <div class="col-md-6 text-left">
<!--                    <a class="btn btn-primary" href="--><?//= site_url('Listing/monthdata')?><!--">-->
<!--                        View Monthly Attendance-->
<!--                    </a>-->
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
                    <th>#</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Pak-Number</th>
                    <th>Present</th>
                    <th>Absent</th>
                    <th>Leave</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if (!empty($users)){
                    $i = 1;
                    foreach ($users as $k):?>
                        <tr>
                            <td scope="row"><?php echo $i++; ?></td>
                            <td><?php echo $k['name']; ?></td>
                            <td><?php echo $k['designation']; ?></td>
                            <td><?php echo $k['pak_number']; ?></td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    </label>
                                </div>
                            </td>
                            <td><a class="btn btn-success " data-toggle="modal" data-target="#leave" id="addLeave">Leave</a></td>
                        </tr>
                    <?php endforeach;
                } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="modal fade" id="leave">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1>Leave Record</h1>
                        </div>
                        <div class="modal-body">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Medical Leave</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Casual Leave</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-group">
                                <span class="input-group-text">Reason</span>
                                <textarea class="form-control" aria-label="With textarea"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input class="btn btn-primary" data-dismiss="modal" value="Save">
                        </div>
                    </div>
                </div>
            </div>
            <!--            <a href="#" data-toggle="modal" data-target="#myModal">Open Model</a>-->
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>



<!--This script has been written so that only one checkbox is selected from absent or present column-->
<script>
    $(document).ready(function(){
        $('input:checkbox').click(function() {
            $('input:checkbox').not(this).prop('checked', false);
        });
    });
</script>
