<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css" integrity="sha512-2bBQCjcnw658Lho4nlXJcc6WkV/UxpE/sAokbXPxQNGqmNdQrWqtw26Ns9kFF/yG792pKR1Sx8/Y1Lf1XN4GKA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .form{
            width:500px;
            margin:100px auto;
        }
        form input{
            width: 100%;
            height:40px;
            border:1px solid #b42c2cff;
            margin:5px auto;
        }
         form button{
            width: 60%;
            height:40px;
            color:#fff;
            border:none;
            background:blue;
            margin:5px auto;
        }
        .data-display{
            width:90%;
            margin:20px auto;
        }
        img{
            width:100px;
        }
    </style>
</head>
<body>
    <div class="form">
        <?php
        $result=isset($_GET['result'])?$_GET['result']:'';
        if(isset($result)){

       
        ?>
<!-- <script> 
    alert('<?php echo $result ?>');
</script> -->
        <?php } ?>
<form action="process/process_submit.php" enctype="multipart/form-data" method="post">
    <input type="text" name="name"><br/>
    <input type="text" name="address"><br/>
    <input type="text" name="email"><br/>
    <input type="text" name="phone"><br/>
    <input type="file" name="profile"><br/>
    <button type="submit">save</button>
</form>


<?php
include('functions.php');
$data=getData();
?>


    </div>

    <div class="table-responsive data-display">

    <?php if(count($data)>0){?>
        <table class="table table-bordered table-striped table-hovered">
            <thead >
                <tr style="background:blue;color:#fff;" >
                    <th>S.N.</th>
                    <th>Profile</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $index=1;
                foreach($data as $value) {?>
                <tr>
                    <td> <?php echo $index ?></td>
                    <td> <a href="uploads/<?php echo $value['profile'] ?>" target="_blank"><img src="uploads/<?php echo $value['profile'] ?>" alt=""/></a> </td>
                    <td> <?php echo $value['name'] ?></td>
                    <td><?php echo $value['address'] ?></td>
                    <td><?php echo $value['email'] ?></td>
                    <td><?php echo $value['phone'] ?></td>
                   <td>
                    edit | <a href="process/process_delete.php?id=<?php echo $value['id'] ?>&profile=<?php echo $value['profile'] ?>">Delete</a>
                   </td>
                </tr>
                 <?php
                $index++;
                }?>
            </tbody>
        </table>
         <?php } ?>
    </div>
</body>
</html>

