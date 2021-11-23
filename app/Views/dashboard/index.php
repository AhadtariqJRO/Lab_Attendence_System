<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
    <a href="#" class="navbar-brand">CEA Attendance System</a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id=""  >
        <ul class="navbar-nav" >
            <li class="nav-item">
                <a href="" class="nav-link">Dashboard</a>
            </li>
            <li>
                <a href="" class="nav-link">Profile</a>
            </li>
            <li>
                <a href="<?= site_url('auth/logout'); ?>" class="nav-link" >Logout</a>
            </li>
        </ul>
    </div>
</nav>
    <div class="container">
        <div class="row" style="margin-top: 40px">
<!--            <div class="col-md-4"></div>-->
<!--            <div class="col-md-4 col-md-offset-4">-->
                <div class="col-lg-12">
                <h4><?= $title; ?></h4><hr>
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
                        <a href="<?= site_url('Listing/fetchFromDatabase')?>">
                            <button class="btn btn-success mb-2">View Today's Attendance</button>
                        </a>
                        <a href="<?= site_url('Listing/monthdata')?>">
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
</body>
</html>