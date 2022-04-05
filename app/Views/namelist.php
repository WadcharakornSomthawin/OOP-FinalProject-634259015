<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูล</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css"/>
 
</head>
<body>
       
    <?php

use CodeIgniter\I18n\TimeDifference;

 include('templastes/header.php') ?>
 <br><br><br>

    <div class="container mt-4">
        <h1 style="text-align: center;">ข้อมูลการเข้าเรียน</h1>
        <hr>

        <div class="d-flex justify-content-end">
            <a href="<?php echo site_url('/addname');?>" class="btn btn-primary">เพิ่มข้อมูล</a>
        </div>

        <div class="mt-3">
            <table class="table table-borderde" id="users-list">
                <thead>
                    <tr>
                        <th>ชื่อ</th>
                        <th>นามสกุล</th>
                        <th>อีเมล</th>
                        <th>ระยะเวลา</th>
                        <th>เวลาเข้า</th>
                        <th>เวลาออก</th>
                    </tr>
                </thead>
                <tbody>
                
                    <?php if($users) :?>
                        <?php foreach($users as $user): ?>
                            <tr>
                                <td><?php echo $user['fname']; ?></td>
                                <td><?php echo $user['lname']; ?></td>
                                <td><?php echo $user['email']; ?></td>
                                <td>
                                    <?php 
                                        $data1 = strtotime($user['timeOut']);
                                        $data2 = strtotime($user['timeIn']);

                                        $result = $data1-$data2;
                                        echo gmdate('H:i:s', $result) . " นาที";
                                    ?>
                                </td>
                                <td><?php echo $user['timeIn']." น."; ?></td>
                                <td><?php echo $user['timeOut']." น."; ?></td>
                                <td>
                                    <a href="<?php echo base_url('editnames/'.$user['id']) ?>" class="btn btn-warning">แก้ไข</a>
                                    <a href="<?php echo base_url('delete/'.$user['id']) ?>" class="btn btn-danger">ลบข้อมูล</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include('templastes/footer.php') ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#users-list').DataTable();
        })
    </script>



</body>
</html>