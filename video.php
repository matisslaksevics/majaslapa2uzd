<!doctype html>
<html lang="en">
<head>
    <title>Video gallery</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<header class="header">
    <nav class="navbar navbar-style">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#micon">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index"><img class="logo" src="images/logo.png"></a>
            </div>
            <div class="collapse navbar-collapse" id="micon">
                <ul class="nav navbar-nav navbar-right">
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownmenu" data-toggle="dropdown">
                            Gallery
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownmenu">
                            <li><a href="video">Video</a></li>
                            <li><a href="photo">Photo</a></li>
                        </ul>
                    </div>
                    <li><a href="https://www.hltv.org/">News</a></li>
                    <li><a href="about">About</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="big-text">Video gallery</p>
                <p>Why not take a look at some of the greatest moments in CS:GO history?</p>
                <div class="gallery">
                    <a href="https://youtu.be/6LgAB_N3DJ0" data-lightbox="mygallery"><img src="images/1video.JPG"></a>
                    <a href="https://youtu.be/mawYSZHKnsM" data-lightbox="mygallery"><img src="images/2video.JPG"></a>
                </div>
            </div>
        </div>
    </div>
</header>


</body>
</html>