<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
</head>
<body style="background-color: #508bfc;">
<section class="vh-100" style="padding-top: 5%">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5">
                        <form action="<?=  base_url('auth/check') ?>" method="post" autocomplete="off">

                            <h2 class="mb-5 text-center">CEA <br> Attendence System</h2>
                            <hr class="my-4">

                            <h3 class="mb-2">Sign in</h3>
                            <?= csrf_field(); ?>

                            <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                                <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                            <?php endif ?>
                            <div class="form-group">
                                <label for="">Pak Number</label>
                                <input type="number" class="form-control" name="Pak_Number" placeholder="Enter your Pak Number" value="<?= set_value('Pak_Number') ?>">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'Pak_Number') : '' ?></span>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter password">
                                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>

                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit">Sign In</button>
                            </div>
                            <br>
                            <a href="<?= site_url('auth/register'); ?>">Have no Account, create new account</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

</body>
</html>