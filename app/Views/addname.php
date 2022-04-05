<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูล</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css"/>

    <style>
        .error{
            display: block;
            padding-top: 5px;
            font-size: 14px;
            color: red;
        }
    </style>
</head>
<body>
<?php include('templastes/header.php') ?>
<br><br><br>
    <div class="container mt-1">
    <h1 style="text-align: center;">เพิ่มข้อมูลการเข้าเรียน</h1>
        <hr>

        <div class="container" style="margin-left: 35%;" >
            <form id="add-form" action="<?= site_url('/submit-form'); ?>" method="post" name="addname">
                <div class="form-group">
                    <label for="fname">ชื่อ</label>
                    <input type="text" name="fname" class="form-control" style="width:350px;">
                </div>
                <div class="form-group">
                    <label for="lname">นามสกุล</label>
                    <input type="text" name="lname" class="form-control" style="width:350px;">
                </div>
                <div class="form-group">
                    <label for="email">อีเมล</label>
                    <input type="text" name="email" class="form-control" style="width:350px;">
                </div>
                <div class="form-group">
                    <label for="timeIn">เวลาเข้า</label>
                    <input type="time" name="timeIn" class="form-control" style="width:350px;">
                </div>
                <div class="form-group">
                    <label for="timeOut">เวลาออก</label>
                    <input type="time" name="timeOut" class="form-control" style="width:350px;">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success my-2" value="เพิ่มข้อมูล">
                </div>
            </form>
        </div>
        <hr><center>
        <a href="/namelist" class="btn btn-primary">ย้อนกลับ</a></center>
    </div><br><br><br><br><br><br>
    <?php include('templastes/footer.php') ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script>
        $(document).ready(function(){
           
            if($('#add-form').length > 0) {
                $('#add-form').validate({
                    rules : {
                        fname: {
                            require:true
                        },
                        lname: {
                            require:true
                        },
                        email:{
                            require: true,
                            maxlength: 60,
                            email: true
                        },
                        timeIn: {
                            require:true
                        },
                        timeOut: {
                            require:true
                        }
                    },
                    messages:{
                        fname:{
                            required: 'กรุณากรอกชื่อ',
                        },
                        lname:{
                            required: 'กรุณากรอกนามสกุล',
                        },
                        email:{
                            required: 'กรุณากรอกอีเมล',
                        },
                        timeIn:{
                            required: 'กรุณากรอกเวลาเข้า',
                        },
                        timeOut:{
                            required: 'กรุณากรอกเวลาออก',
                        },
                    }
                })
            }
        })
    </script>
    
</body>
</html>