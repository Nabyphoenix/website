<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload To YouTube</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/flex.css">
    <link rel="stylesheet" href="./css/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/main.css">
    <style>
        ::-webkit-file-upload-button{
            background-color: rgba(255, 0, 0, 0);
            border: 1px solid rgb(170, 170, 170);
            border-radius: 5px;
            color: grey;
        }
        ::-webkit-file-upload-button:hover{
            color: rgb(78, 78, 78);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container s-shadow s-padd12 s-border mt-5">
        <form action="./php/upload.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <h1>Upload Video</h1>
            </div>
            <div class="form-group">
                <label for="name">Video name:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter video name">
            </div>
            <div class="form-group">
                <label for="">Upload video:</label>
                <input type="file" name="file" id="file" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Upload cover Thumbnail:</label>
                <input type="file" name="cover" id="cover" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Video Description:</label>
                <textarea name="description" id="description" class="form-control" placeholder="Enter video description..."></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn btn-outline-secondary">Upload Video</button>
            </div>
        </form>
    </div>
</body>
</html>