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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>



<!--    For data tables-->
    <!-- DataTables CSS -->
    <link href="css/addons/datatables.min.css" rel="stylesheet">
    <!-- DataTables JS -->
    <script src="js/addons/datatables.min.js" type="text/javascript"></script>

    <!-- DataTables Select CSS -->
    <link href="css/addons/datatables-select.min.css" rel="stylesheet">
    <!-- DataTables Select JS -->
    <script src="js/addons/datatables-select.min.js" type="text/javascript"></script>

</head>
</html>
<body>

<div id="record">
    <div class="container" style="margin-top: 10%">
        <h1 style="text-align: center">Mark Attendance</h1>
        <div class="">
            <div class="row">
                <div class="col-md-6 text-left">
                    <!--                    <a class="btn btn-primary" href="-->
                    <? //= site_url('Listing/monthdata')?><!--">-->
                    <!--                        View Monthly Attendance-->
                    <!--                    </a>-->
                </div>
                <div class="col-md-6 text-right mb-2">
                    <a href="<?php echo base_url() . '/dashboard' ?>" class="btn btn-success">
                        Back To Dashboard
                    </a>
                </div>
            </div>
            <form action="<?php echo site_url('Listing/insertingAttendance') ?>" method="POST">
                <table class="table table-striped table-dark" id="dtBasicExample" >
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
                    if (!empty($users)) {
                        $i = 1;
                        foreach ($users as $k):?>
                            <tr>
                                <td scope="row"><?php echo $i++; ?></td>
                                <td><?php echo $k['name']; ?></td>
                                <td><?php echo $k['designation']; ?></td>
                                <td><?php echo $k['pak_number']; ?></td>
                                <td><a class="btn btn-success " id="butsave" >Present</a></td>

                                <td><a class="btn btn-danger " id="addAbsent" onclick="alert('Absent Marked Successfully')">Absent</a>
                                </td>

                                <td><a class="btn btn-warning " data-toggle="modal" data-target="#leave" id="addLeave">Leave</a>
                                </td>
                            </tr>
                            <div>
                                <input hidden="hidden" name="pak_number[]" value="<?php echo $k['pak_number'] ?>">
<!--                                <input hidden="hidden" name="pak_number[]" value="--><?php //echo $k['pak_number'] ?><!--"> -->
<!--                                <input hidden="hidden" name="pak_number[]" value="--><?php //echo $k['pak_number'] ?><!--">-->
                            </div>
                        <?php endforeach;
                    } ?>
                    </tbody>
                </table>

                <div class="text-center">
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Save Attendance Record</button>
                    </div>
                </div>
            </form>


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
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                       value="option1" checked>
                                <label class="form-check-label" for="inlineRadio1">Medical Leave</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                       value="option2">
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
<script>
    $(document).ready(function () {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>
<!--<script>-->
<!--    $(document).ready(function() {-->
<!--        $('#butsave').on('click', function() {-->
<!--            $("#butsave").attr("disabled", "disabled");-->
<!--            var pn = $('pak_number').val();-->
<!--            if(pn!="" ){-->
<!--                $.ajax({-->
<!--                    url: "Listing/insertingAttendance",-->
<!--                    type: "POST",-->
<!--                    data: {-->
<!--                        pn: pn,-->
<!--                    },-->
<!--                    cache: false,-->
<!--                    success: function(dataResult){-->
<!--                        var dataResult = JSON.parse(dataResult);-->
<!--                        if(dataResult.statusCode==200){-->
<!--                            $("#butsave").removeAttr("disabled");-->
<!--                            $('#fupForm').find('input:text').val('');-->
<!--                            $("#success").show();-->
<!--                            $('#success').html('Data added successfully !');-->
<!--                        }-->
<!--                        else if(dataResult.statusCode==201){-->
<!--                            alert("Error occured !");-->
<!--                        }-->
<!---->
<!--                    }-->
<!--                });-->
<!--            }-->
<!--            else{-->
<!--                alert('Please fill all the field !');-->
<!--            }-->
<!--        });-->
<!--    });-->
<!--</script>-->
<!--for checkboxes-->
<!--<script>-->
<!--    $('input[type="checkbox"]').on('change', function () {-->
<!--        $('input[name="' + this.name + '"]').not(this).prop('checked', false);-->
<!--    });-->
<!--</script>-->