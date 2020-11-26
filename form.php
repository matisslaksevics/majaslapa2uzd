<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!doctype html>
<html lang="en">
<head>
    <title>Application for job</title>
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
            <div class="collapse navbar-collapse p-4" id="micon">
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
        <div class="col-md-8">
        <form action="form" method="post">
        	<div class="form-group">
            	<label for="firstname">First name</label>
            	<input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter your first name">
            </div>
            <div class="form-group">
            	<label for="surname">Last name</label>
            	<input type="text" name="surname" id="surname" class="form-control" placeholder="Enter your last name">
        	</div>
        	<div class="form-group">
            	<label for="age">Age</label>
            	<input type="text" name="age" id="age" class="form-control" placeholder="Enter your age">
        	</div>
        	<div class="form-group">
            	<label for="country">Country</label>
            	<input type="text" name="country" id="country" class="form-control" placeholder="Enter your currect residing country">
            </div>
            <div class="form-group">
            	<label for="email">E-Mail</label>
            	<input type="text" name="email" id="email" class="form-control" placeholder="Enter your e-mail">
        	</div>
        	<div class="form-group">
            	<label for="phone">Phone number</label>
            	<input type="text" name="name" id="phone" class="form-control" placeholder="Enther your phone number">
            </div>
        	<div class="form-group">
            	<label for="gender">Gender</label>
            	<select name="gender" id="gender" class="form-control">
            	    <option value="selectone">Select</option>
            	    <option value="male">Male</option>
            	    <option value="female">Female</option>
            	</select>
            </div>
            <div class="form-group">
            	<label for="desc">Description of yourself</label>
            	<textarea name="description" class="form-control" id="description" rows="10" placeholder="Write a description of yourself"></textarea>>
        	</div>
            <input type="checkbox" id="accept-terms" class="form-check-input">
            <label for="accept-terms" class="form-check=label">Aceept Terms & Conditions for applying to this project group</label>
            <div class="invalid-feedback">This should be accepted</div>
            <button type="submit" class="btn btn-primary" name="save">Submit</button>
        </form>
    </div>
    </div>
</header>
<?php
    if(isset($_POST['save'])) {
        if(empty($_POST['firstname']))
        {
            echo "<b>First name:</b>Needs to be filled!</br>";
        } else {
            if(preg_match('~[0-9]+~', $_POST['firstname'])) {
                echo "<b>First name:</b>Cannot contain numbers!</br>";
            } else {
                echo "<b>First name:</b> {$_POST['firstname']}</br>";
            }
        }
        if(empty($_POST['surname']))
        {
            echo "<b>Last name:</b>Needs to be filled!</br>";
        } else {
            if(preg_match('~[0-9]+~', $_POST['surname'])) {
                echo "<b>Last name:</b>Cannot contain numbers!</br>";
            } else {
                echo "<b>Last name:</b> {$_POST['surname']}</br>";
            }
        }
        if(empty($_POST['age']))
        {
            echo "<b>Age:</b>Must be filled!</br>";
        } else {
            if(preg_match('~[aA-zZ]+~', $_POST['age'])) {
                echo "<b>Age: </b>Cannot contain letters!</br>";
            } else {
                echo "<b>Age: </b>{$_POST['age']}</br>";
            }
        }
        if(empty($_POST['country']))
        {
            echo "<b>Country:</b>Needs to be filled!</br>";
        } else {
            if(preg_match('~[0-9]+~', $_POST['firstname'])) {
                echo "<b>Country:</b>Cannot contain numbers!</br>";
            } else {
                echo "<b>Country:</b> {$_POST['country']}</br>";
            }
        }
        if(empty($_POST['email']))
        {
            echo "<b>E-Maail:</b>Must be filled!</br>";
        } else {
            echo "<b>E-Mail: </b>{$_POST['email']}</br>";
        }
        if(empty($_POST['phone']))
        {
            echo "<b>Phone number:</b>Must be filled!</br>";
        } else {
            if(preg_match('~[aA-zZ]+~', $_POST['phone'])) {
                echo "<b>Phone number: </b>Cannot contain numbers!</br>";
            } else {
                echo "<b>Phone number: </b>{$_POST['phone']}</br>";
            }
        }
        if ($_POST['gender'] == 'selectone') {
        	echo "<b>Gender: </b>One must be chosen!</br>";
        } else {
        	echo "<b>Gender: </b>{$_POST['gender']}</br>";
        }
        if(empty($_POST['desc']))
        {
            echo "<b>Description:</b>Must be filled!</br>";
        } else {
            echo "<b>Description: </b>{$_POST['desc']}</br>";
        }
		if(empty($_POST['accept-terms']) ) { 
			echo "<b>Checkbox:</b>Unchecked!</br>"; 
		} else { 
			echo "<b>Checked: </b>Checked!</br>"; }
    }
?>
</body>
</html>