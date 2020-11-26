<!doctype html>
<html lang="en">
<head>
    <title>Photo gallery</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="CSS/lightbox.min.css">
    <script src="JS/lightbox-plus-jquery.min.js"></script>
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
                <p class="big-text">Photo gallery</p>
                <p>Enjoy some of the best winning moments for different teams during tournaments :)</p>
                <div class="col">
                    <div class="gallery">
                        <a href="images/1bilde.jpg" data-lightbox="mygallery" data-title="Astralis winning Blast Pro Series in Sao Paulo in 2019 "><img src="images/1bilde-small.JPG"></a>
                        <a href="images/2bilde.jpg" data-lightbox="mygallery" data-title="Mouz winning ESL One New York 2018 in USA"><img src="images/2bilde-small.JPG"></a>
                        <a href="images/3bilde.jpg" data-lightbox="mygallery" data-title="Cloud9 Winning ELEAGUE Major in Boston in 2018"><img src="images/3bilde-small.JPG"></a>
                        <a href="images/4bilde.jpg" data-lightbox="mygallery" data-title="Fnatic winning IEM Katowice 2016 in Poland"><img src="images/4bilde-small.JPG"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
</body>
</html>