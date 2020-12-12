<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Project Worlds || TEST YOUR SKILL </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

 
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
 <!--alert message-->
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<!--alert message end-->

</head>
<?php
//include_once 'dbConnection.php';
?>
<body>
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">My School</span></div>
<div class="col-md-4 col-md-offset-2">
<?php
 //include_once 'dbConnection.php';
//session_start();
 // if(!(isset($_SESSION['email']))){
//header("location:index.php");

//}
//else
//{
//$name = $_SESSION['name'];
//$email=$_SESSION['email'];

//include_once 'dbConnection.php';
//echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <a href="account.php?q=1" class="log log1">'.$name.'</a>&nbsp;|&nbsp;<a href="logout.php?q=account.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</button></a></span>';
//}
?> 
</div>
</div></div>
<div class="bg">

<!--navigation menu-->
<nav class="navbar navbar-default title1">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar" <?php  echo'class="active"'; ?> ></span>
      </button>
      <a class="navbar-brand" href="#"><b>Netcamp</b></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
	    	<li class="pull-right"> <a href="logout.php?q=account.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Signout</a></li>
		</ul>
            <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter tag ">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;Search</button>
      </form>
      </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><!--navigation menu closed-->
<div class="container"><!--container start-->
<div class="row">
<div class="col-md-12">

<!--class button start-->
<br>

<div class="container">

      <div class="row">
      <div class="col text-center">
        <div class="col-lg-12">
          <p>
            <a href="class01.php?q=1" class="btn btn-sq-lg btn-info">
                <i class="fa fa-user fa-5x"></i><br/>
               -  G  R  A  D  E  - <br> 0 1
            </a>
            <a href="class01.php?q=2" class="btn btn-sq-lg btn-info">
                <i class="fa fa-user fa-5x"></i><br/>
                -  G  R  A  D  E  - <br> 0 2
            </a>
            <a href="class01.php?q=3" class="btn btn-sq-lg btn-info">
                <i class="fa fa-user fa-5x"></i><br/>
                -  G  R  A  D  E  - <br> 0 3
            </a>
            <a href="class01.php?q=4" class="btn btn-sq-lg btn-info">
                <i class="fa fa-user fa-5x"></i><br/>
                -  G  R  A  D  E  - <br> 0 4
            </a>
            <a href="class01.php?q=5" class="btn btn-sq-lg btn-info">
                <i class="fa fa-user fa-5x"></i><br/>
                -  G  R  A  D  E  - <br> 0 5
            </a>
          </p>
        </div>
        </div>
    </div>

    <div class="row">
    <div class="col text-center">
        <div class="col-lg-12">
          <p>
            <a href="#" class="btn btn-sq-lg btn-primary">
                <i class="fa fa-user fa-5x"></i><br/>
                -  G  R  A  D  E  - <br> 0 6
            </a>
            <a href="#" class="btn btn-sq-lg btn-primary">
                <i class="fa fa-user fa-5x"></i><br/>
                -  G  R  A  D  E  - <br> 0 7
            </a>
            <a href="#" class="btn btn-sq-lg btn-primary">
              <i class="fa fa-user fa-5x"></i><br/>
              -  G  R  A  D  E  - <br> 0 8
            </a>
            <a href="#" class="btn btn-sq-lg btn-primary">
              <i class="fa fa-user fa-5x"></i><br/>
              -  G  R  A  D  E  - <br> 0 9
            </a>
            <a href="#" class="btn btn-sq-lg btn-primary">
              <i class="fa fa-user fa-5x"></i><br/>
              -  G  R  A  D  E  - <br> 1 0
            </a>
            <a href="#" class="btn btn-sq-lg btn-primary">
              <i class="fa fa-user fa-5x"></i><br/>
              -  G  R  A  D  E  - <br> 1 1
            </a>
          </p>
        </div>
        </div>
    </div>

    <div class="row">
    <div class="col text-center">
        <div class="col-lg-12">
          <p>
          <a href="#" class="btn btn-sq-lg btn-success">
              <i class="fa fa-user fa-5x"></i><br/>
              -  G  R  A  D  E  - <br> 1 2
            </a>
            <a href="#" class="btn btn-sq-lg btn-success">
              <i class="fa fa-user fa-5x"></i><br/>
              -  G  R  A  D  E  - <br> 1 3
            </a>
            
          </p>
        </div>
        </div>
    </div>

</div>

<!--class button end-->


<!--home start-->

<!--<span id="countdown" class="timer"></span>
<script>
var seconds = 40;
    function secondPassed() {
    var minutes = Math.round((seconds - 30)/60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds; 
    }
    document.getElementById('countdown').innerHTML = minutes + ":" +    remainingSeconds;
    if (seconds == 0) {
        clearInterval(countdownTimer);
        document.getElementById('countdown').innerHTML = "Buzz Buzz";
    } else {    
        seconds--;
    }
    }
var countdownTimer = setInterval('secondPassed()', 1000);
</script>-->

<!--home closed-->

<!--quiz start-->

<!--quiz end-->




</div></div></div></div>
<!--Footer start-->
<div class="row footer">
<div class="col-md-3 box">
<a href="http://www.projectworlds.in/online-examination" target="_blank">About us</a>
</div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#login">Admin Login</a></div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#developers">Developers</a>
</div>
<div class="col-md-3 box">
<a href="feedback.php" target="_blank">Feedback</a></div></div>
<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span></h4>
      </div>
	  
      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="image/CAM00121.jpg" width=100 height=100 alt="Sunny Prakash Tiwari" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="http://yugeshverma.blogspot.in" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Yugesh Verma</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91 9165063741</h4>
		<h4 style="font-family:'typo' ">vermayugesh323@gmail.com</h4>
		<h4 style="font-family:'typo' ">Chhattishgarh insitute of management & Technology ,bhilai</h4></div></div>
		</p>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--Modal for admin login-->
	 <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--footer end-->


</body>
</html>
