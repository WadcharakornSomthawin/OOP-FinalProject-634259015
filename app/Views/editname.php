<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูล</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<?php include('templastes/header.php') ?>
<br><br><br>
    <div class="container mt-4">
    <h1 style="text-align: center;">แก้ไขข้อมูลการเข้าเรียน</h1>
        <hr>

        <div class="container" style="margin-left: 35%;">
            <form id="update-form" action="<?= site_url('/update'); ?>" method="post" name="update_user">
                <input type="hidden" name="id" id="id" value="<?php echo $user_obj['id']; ?>">
                <div class="form-group">
                    <label for="fname">ชื่อ</label>
                    <input type="text" name="fname" style="width:350px;" class="form-control" value="<?php echo $user_obj['fname'] ?>">
                </div>
                <div class="form-group">
                    <label for="lname">นามสกุล</label>
                    <input type="text" name="lname" style="width:350px;" class="form-control" value="<?php echo $user_obj['lname'] ?>">
                </div>
                <div class="form-group">
                    <label for="email">อีเมล</label>
                    <input type="text" name="email" style="width:350px;" class="form-control" value="<?php echo $user_obj['email'] ?>">
                </div>
                <div class="form-group">
                    <label for="timeIn">เวลาเข้า</label>
                    <input type="time" name="timeIn" style="width:350px;" class="form-control" value="<?php echo $user_obj['timeIn'] ?>">
                </div>
                <div class="form-group">
                    <label for="timeOut">เวลาออก</label>
                    <input type="time" name="timeOut" style="width:350px;" class="form-control" value="<?php echo $user_obj['timeOut'] ?>">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success my-3" value="บันทึกการแก้ไข">
                </div>
                
            </form>
        </div>
        <hr>
                <a href="/namelist" style="margin-left: 85%;" class="btn btn-primary">ย้อนกลับ</a>
    </div>
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