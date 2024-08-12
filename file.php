<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/flex.css">
    <link rel="stylesheet" href="./css/font-awesome/css/all.min.css">
    <title>Upload</title>
    <style>
    *{
      padding:0px;
      margin:0px;

    }
    .form{
        width:10px 0px;
        color:#cccfff;
    }
    input{
        padding:10px 10px;
        margin:12px;
        text-align:center;
        position:relative;
        transition:0.2s;
        background-color:  #44444434
    }


    body{

        text-align:center;
        border:1px 2px solid #ccc;
        /* background-color:  #444; */
        box-shadow:2px  solid  #444;
        min-height:20vh;    
          
    }
    </style>
</head>
<body>

<div class="flex-center">
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="img" id="img">
        <input type="submit" value="Submit" name="submit">
    </form>
 </div>
</body>
</html>
<?php   
if (isset($_POST['submit'])) {
    if ($_FILES['img']['name'] !== "") {
        $img = $_FILES['img'];
        $file = $_FILES['img']['name'];
        $file_tmp = $_FILES['img']['tmp_name'];
        $file_ext = pathinfo($file, PATHINFO_EXTENSION);
        $upload = "./upload/snoaw-" . "654ce664883ab.jpg";
        move_uploaded_file($file_tmp, $upload);
    }
}


?>