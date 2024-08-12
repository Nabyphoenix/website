<?php
$conn = mysqli_connect("localhost","root","","youtube_db");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youtube clone</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/flex.css">
    <link rel="stylesheet" href="./css/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/main.css">
    
    
    <style>
        .fa-youtube{
            font-size: 30px;
            color: red;

            
        }
        .fa-play{ 
            background-color:white;
            font-size: 10px;
            padding:4px 12px;
            border-radius:3px; 
            color:rgb(20, 19, 19);
            
        }
        .top-nav{
            background-color: #232323;
        }
        .youtube-text{
            color: #fff;
            font-family: fantasy;
            font-size: 25px;
        }
        #search{
            padding: 8px;
            min-width: 400px;
            outline: none;
            color: aliceblue;
            border: 1px solid #888;
            background-color: #232323;
            border-radius: 15px 0px 0px 15px;
        }
        .search-btn{
            padding: 8px 15px;
            border-radius: 0px 15px 15px 0px;
            border: 1px solid #888;
            background-color: #333;
            color: aliceblue;
        }
        .icon{
            font-size: 30px;
            color: aliceblue;
        }
        .user-icon{
            background-color: rgb(16, 135, 135);
            color: #fff;
            padding: 8px 14px;
            font-weight: 700;
            font-size: 17px;
            border-radius: 100%;
        }
        .row2{
            width: 100%;
        }
        .row1{
            width: 50%;
        }
        .icons .icon{
            margin: 0px 4px;
        }
        .s-width{
            width: 30%;
        }
        hr{
            background-color: #fff;
        }
        nav{
            background-color: #232323;
            color: rgb(235, 235, 235);
            height: 100vh;
            
        }
        body, html{
            overflow: hidden;
        }
        ul li{
            margin: 5px;
            width: 95%;
            text-align: left;
            padding: 10px;
            border-radius: 20px;
            cursor: pointer;
        }
        ul li:hover{
            background-color: #333;
        }
        .main{
            background-color: #232323;
            height: 100vh;
            background-size:cover;
            overflow-y: auto;
            display: flex;
            flex-wrap: wrap;
        }
        .video-card{
            width: 240px;
            color: rgb(242, 243, 245);
        }
        .video-card .cover{
            background-image: url('./img/download.jpg');
            border-radius: 10px;
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 180px;
        }
        .video-card .title{
            text-transform: uppercase;
            font-weight: 600;
            font-size: 18px;
        }
        c{
            color: grey;
            font-size: 10px;
            display: block;
        }
        
        .video{
            background-image: url("img/download.jpg");
            background-size: cover;
            background-position: center;
            position: relative;
        }
       
        .fa-thumbs-down:hover{
            color:red;
            transition: 0.08s;
            padding:2px 20px;
            margin:15px;
            box-shadow: 2px solid #444;
        
        }
        .fa-thumbs-up:hover{
          color:rgba(76, 0, 255, 0.952);        
          transition: 0.08s;
          padding:2px 2px;
          margin:0.2px;                                                                     
          box-shadow: 2px solid #444;
        
        }   
        .fa-book-open:hover{
          color:rgba(8, 231, 101, 0.349);   
          transition: 0.8s;
          padding:2px 2px;
          box-shadow: 2px solid #444;
        }
        
        .cover{
            width: 50px;
            height: 50px;
            color:grey;


        }
        .content{
            width: 100%;
        }
        .row1{
            width: 30%;
        }
        .main-cover{
            position: relative;
        }
        .cover-add{
            position: absolute;
            transform: translate(-50%,-50%);
            bottom: -20%;
            left: 90%;

        } 
        .fa-plus{
          position:relative;
          width:47%;
          height:12px;
         padding:12px  0px;
        }
        .span{
            color:white;
        }   
    </style>
</head>
<body>
    <header>
        <div class="top-nav flex-center s-padd12">
            <div class="row1">
                <i class="fab fa-youtube"></i>
                <span class="youtube-text">
                    Youtube
                </span>
            </div>
            <div class="row2 flex-center">
                <form action="search.php"method="get">
                
                    <input type="text" name="search" id="search" placeholder="Search">
                    <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
              </form>
            </div>
            <div class="row1 icons flex-end">
                <i class="fa fa-video icon"></i>
                <i class="fa fa-bell icon"></i>
                <span class="user-icon icon">N</span>You<ul></ul><br>
                
            </div>
        </div>
    </header>
    <main class="flex-center">
        <nav class="s-width s-padd">
            <ul>
                <li>
                    <a class="fa fa-home" href="search.php"></a><i>&nbsp;Home</i>
                </li>
                <li>
                    <a class="fa fa-play" href="uploads/videos/thumb-66195861ed57f.mp4" target="player"></a><i>&nbsp;shorts</i>
                </li>
                <li>
                    <i class="fa fa-home"></i>&nbsp;Subscription
                </li>
                <li>

                <div class="cover f-border main-cover">
                    <img class="f-border" src="./php/upload/snoaw-654ce664883ab.jpg" alt="" srcset="" style="object-fit: cover;outline: 5px solid #007bff4d;" width="100%" height="100%">
                    <a href="#555" class="btn btn-primary f-border cover-add">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
                 
                </div>
                </il>
            </ul>
            <hr />
            <ul>
                <li>
                    <i class="fa fa-home"></i>&nbsp;Your channel
                </li>
                <li>
                    <i class="fa fa-business-time"></i>&nbsp;History
                </li>
                <!-- <li>
                    <i class="fa fa-home"></i>&nbsp;Subscription
                </li> -->

                <li>
                <div class="cover f-border main-cover">
                    <img class="f-border" src="./php/upload/snoaw-654ce664883ab.jpg" alt="" srcset="" style="object-fit: cover;outline: 5px solid #007bff4d;" width="100%" height="100%">
                    <a href="./php/file.php" class="btn btn-primary f-border cover-add">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>

                </li>
                <li>
                    <a class="fa fa-clock"a class="s-margin" href="./video/JavaScript Crash Course For Beginners.mp4" target="player"></a><i>&nbsp;watch later</i>
                    <!-- <a class="s-margin" href="./video/JavaScript Crash Course For Beginners.mp4" target="player"> -->
                    
                </li>

                <li>
                    <a class="fa fa-cloud-download-alt" href="./video/JavaScript Crash Course For Beginners.mp4" target="player"download="download"></a><i>&nbsp;Downloads</i>
              
                </li>

                
<ul>
            
  <div class="btn-container flex">

                            <span id="counter" >7</span> <i onclick="Like()" id="like" class="fa fa-thumbs-up" >&nbsp;</i>
                        </span>         

                        <span  id="count">5</span><i onclick="dislike()" id="dislikes" class="fa fa-thumbs-down">&nbsp;</i>
                    </span>
                    

                    <span id="vbtn">
                            100 <i class="fa fa-book-open" >&nbsp;</i> 
                        </span>
  </div>
            
</ul>         
        </nav>
    <div class="container">
<?php
    if(isset($_GET['search'])){
        $content = $_GET['search'];
        $sql = "SELECT * FROM `tbl_videos` WHERE `name` LIKE '%$content%'";
        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query)>0){
            echo "<ul>";
            while($row = mysqli_fetch_assoc($query)){
                echo "<div class='alert alert-danger flex-strat'><a href='uploads/videos/". $row['path_name'] ."'>" . $row['name'] . "</a></div>";
            }
            echo "</ul>";
        } else{
            echo "<h1>(0) results found</h1>";
        }

    }
?>

</div>  
</main>

    <script>

          function Like(){ 
          const counter = document.getElementById('counter');
    
          let likes = parseInt(counter.innerHTML);
          counter.innerHTML = likes + 5;
          
       }
             
        function dislike(){
            const count  = document.getElementById('count');
            let dislikes = parseInt(count.innerHTML);
            count.innerHTML = dislikes + 3;

        }

        function lear(){
            const counte = document.getElementById('counte');
            let lear = parseInt(counter.innerHTML);
            counte.innerHTML = lear +1;
        }
        </script>

</body>
</html>