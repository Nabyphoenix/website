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
    <link rel="shortcut icon" href="./css/" type="image/x-icon">
    
    <style>
        .fa-youtube{
            font-size: 30px;
            color: red;
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
        .c{
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
       ::-webkit-scrollbar-button{
         padding:4px;
         min-height: 12vh;
       }
       img{
        padding:10px .20px;
        width:100%;

       }
       iframe{
          width:900px;
          height:600px;
       }
       a[chat]{
        background-color:green;
       }
       .fa-play{ 
            background-color:white;
            font-size: 10px;
            padding:4px 12px;
            border-radius:3px; 
            color:rgb(20, 19, 19);
            
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
                <span class="user-icon icon">N</span>
            </div>
             
            <li>
                <i class="fa fa-"></i>
                <a href="./comm.php">chat</a>
                <div class="container" onclick="myFunction(this)">
                
            </li>

        </div>
    </header>
    <main class="flex-center">
        <nav class="s-width s-padd">
            <ul>
                <li>
                <a class="fa fa-home" href="home.php"></a><i>&nbsp;Home</i>
                    <div class="container" onclick="myFunction(this)">
                    
                </li>
                <li>
                <a class="fa fa-play" href="uploads/videos/thumb-66195861ed57f.mp4" target="player"></a><i>&nbsp;shorts</i>
                    <div class="container" onclick="myFunction(this)">
                        <a href="#"></a>
                    
                </li>
                   

                <li>
                    <i class="fa fa-home"></i>&nbsp;Subscription
                    <div class="container" onclick="myFunction(this)">
                </li>
            </ul>
            <hr />
            <ul>
                <li>
                    <i class="fa fa-home"href="search.php"></i>&nbsp;Your channel
                    <a href="#"></a>
                    <div class="container" onclick="myFunction(this)">
                </li>
                <li>
                    <i class="fa fa-business-time"></i>&nbsp;History
                    
                    <a href="#"></a>
                    
                </li>
                <li>
                    <i class="fa fa-home"></i>&nbsp;Subscription
                    <a href="#"></a>
                </li>
                <li>
                <a class="fa fa-clock"a class="s-margin" href="./video/JavaScript Crash Course For Beginners.mp4" target="player"></a><i>&nbsp;watch later</i>
                    <a href="#"></a>
                </li>
                <li>
                <a class="fa fa-cloud-download-alt" href="./video/JavaScript Crash Course For Beginners.mp4" target="player"download="download"></a><i>&nbsp;Downloads</i>
                    <a href="#"></a>
                
                </li>
            </ul>
        </nav>
        <main>
        
            <div class="vid">
                <div class="banner">
                 <!-- main content goes here-->
                    <iframe src="./video/GENTIL_MIS_-_BIRATUNGANA_(Official_Music_Video)_Sinzuko_ubigenza_Live.mp4" name="player" class="Controls">
                    </iframe>
                    </div>
                    </div>
        </main>
        
        <div class="main f-width" id="vidcontainer">
            <!-- [V]ideo cards -->
           <a class="s-margin" href="./video/JavaScript Crash Course For Beginners.mp4" target="player">
           <!-- <a href="./video/JavaScript Crash Course For Beginners.mp4" target="player" download>Download Movie</a> -->
                <img src="./img/100.jpg">
           </a>

           <a class="s-margin" href="./video/VID-20230824-WA0001.mp4" target="player">
                <img src="./img/istockphoto-1477483038-1024x1024.jpg" >
           </a>

           <a class="s-margin" href="./video/0350b1dc3e4f4fa2861a60ef7896251f.mp4" target="player">
                <img src="./img/2.jpg">
           </a>

        </a>
        <a class="s-margin" href="video/videoplayback.mp4" target="player">
             <img src="./img/istockphoto-1477483038-1024x1024.jpg">
        </a>

        </a>
           <a class="s-margin" href="video/GENTIL_MIS_-_BIRATUNGANA_(Official_Music_Video)_Sinzuko_ubigenza_Live.mp4" target="player">
                <img src="./img/binary-2372130_1280.jpg">
           </a>
          
           <a class="s-margin" href="./movies/7f0592ffec519da77f274b47cb59c7d79066a4ea.mp4" target="player">
            <img src="./img/binary-2372130_1280.jpg"width="70%"height="300px" >
       </a>


            <a class="s-margin" href="./movies/3d2bbc96954e6e4b50a9f61b82d2a3962b57228c.mp4" target="player">
                <img src="./img/istockphoto-1477483038-1024x1024.jpg" >
           </a>
          
                                          
        </div>

    </main>
    
    <script src="./js/dup.lib.js"></script>
    <script>
        duplicate('vidcontainer', 20);
    </script>
    
</body>
</html>