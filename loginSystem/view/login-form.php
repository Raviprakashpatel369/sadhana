<!DOCTYPE html>
<html lang="en">
<head>
<title>User Login</title>
<link rel="stylesheet" href="./../css/styles.css">
<link rel="stylesheet" href="view/css/login-form.css">
<?php include './../phputil/links.php' ?>

</head>
<!-- Remember to remove the bg color and put something related to sadhanaskills-->
<body style=" background-color: #dcdcdc">
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="./../index.php">SADHANA SKILLS</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="./../index.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./../index.php#AboutUs">About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./../gallery.php">Gallery</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">TOT</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Success Stories</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="https://forms.gle/pvPKYhJuPjmR3BY48">Contact Us</a>
				</li>
				
			</ul>
			<form class="form-inline navb">
				<a id=hovertext href="./../index.php" style="padding-left: 18px; padding-right: 18px; text-decoration:none;">Back</a>
			</form>
		</div>
	</nav>


<br><br><br><br>
    <div>
        <form action="login-action.php" method="post" id="frmLogin" onSubmit="return validate();">
            <div class="demo-table" style="width: 450px; border-radius: 8px;">

                <div class="form-head">Login</div> 
                <?php 
                if(isset($_SESSION["errorMessage"])) {
                ?>
                <div class="error-message"><?php  echo $_SESSION["errorMessage"]; ?></div>
                <?php 
                unset($_SESSION["errorMessage"]);
                } 
                ?>
                <div class="field-column">
                    <div>
                        <label for="username">Username</label><span id="user_info" class="error-info"></span>
                    </div>
                    <div>
                        <input name="user_name" id="user_name" type="text"
                            class="demo-input-box">
                    </div>
                </div>
                <div class="field-column">
                    <div>
                        <label for="password">Password</label><span id="password_info" class="error-info"></span>
                    </div>
                    <div>
                        <input name="password" id="password" type="password"
                            class="demo-input-box">
                    </div>
                </div>
                <div class=field-column>
                    <div>
                        <input type="submit" name="login" value="Login"
                        class="btnLogin"></span>
                    </div>
                </div>
            </div>
        </form>
    </div>



    <script>
    function validate() {
        var $valid = true;
        document.getElementById("user_info").innerHTML = "";
        document.getElementById("password_info").innerHTML = "";
        
        var userName = document.getElementById("user_name").value;
        var password = document.getElementById("password").value;
        if(userName == "") 
        {
            document.getElementById("user_info").innerHTML = "required";
        	$valid = false;
        }
        if(password == "") 
        {
        	document.getElementById("password_info").innerHTML = "required";
            $valid = false;
        }
        return $valid;
    }
    </script>


</body>
</html>






