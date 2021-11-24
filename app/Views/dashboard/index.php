<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
    <a href="#" class="navbar-brand">CEA Attendance System</a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="" class="nav-link">Dashboard</a>
            </li>
            <li>
                <a href="" class="nav-link">Profile</a>
            </li>
            <li>
                <a href="<?= site_url('auth/logout'); ?>" class="nav-link">Logout</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row" style="margin-top: 40px">
        <!--            <div class="col-md-4"></div>-->
        <!--            <div class="col-md-4 col-md-offset-4">-->
        <div class="col-lg-12">
            <h4><?= $title; ?></h4>
            <hr>
            <table>
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Pak Number</th>
                    <th></th>
                </tr>
                </thead>
                <?php
                $loggedUserID = session()->get('loggedUser');

                if ($loggedUserID == '16'):?>
                    <h1>Admin</h1>
<!--                    <a href="--><?//= site_url('Listing/datafetching') ?><!--" class="btn btn-primary mb-2" data-toggle="modal" data-target="#markAttendance" id="addAttendance">-->
<!--                        Mark Attendance-->
<!--                    </a>-->
                    <a href="<?= site_url('Listing/dataFetching')?>">
                        <button class="btn btn-primary mb-2">Mark Attendance</button>
                    </a>
                    <a href="<?= site_url('Listing/fetchFromDatabase') ?>">
                        <button class="btn btn-success mb-2">View Today's Attendance</button>
                    </a>
                    <a href="<?= site_url('Listing/monthdata') ?>">
                        <button class="btn btn-success mb-2">View Monthly Attendance</button>
                    </a>
                <?php endif; ?>
                <tbody>
                <tr>
                    <td><?= ucfirst($userInfo['name']); ?></td>
                    <td><?= $userInfo['pak_number']; ?></td>
                    <td><a href="<?= site_url('auth/logout'); ?>">Logout</a></td>
                </tr>
                </tbody>
            </table>
            <!--                    <div class="btn btn-success">-->
            <!--                        <button>Mark today's attendance</button>-->
            <!--                        <button>View attendance record</button>-->
            <!--                        <button>Add new member</button>-->
            <!--                    </div>-->
        </div>
    </div>
</div>

<!--Modal for Add student-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="modal fade" id="markAttendance">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1>Mark Attendance</h1>
                        </div>
                        <div class="modal-body">
                            <table class="table table-striped table-dark">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Pak-Number</th>
                                        <th>Present/Absent</th>
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
                                        <td></td>
                                        <td></td>
                                        <td><div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Present
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Absent
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

</body>
</html>