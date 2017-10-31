<!DOCTYPE html>
<html>
<head>
	<title>Watch</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="main.css">
</head>
<body id="watch">
	<header>
		<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.html">SENTEU <span class="glyphicon glyphicon-home"></span></a>
        </div>
        <ul class="nav navbar-nav pull-left">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="request.html">Request</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav pull-right">
          <li><form action=""><input type="text" class="form-control search" placeholder="Search"></form></li>
          <li><a href="login.html">Login</a></li>
          <li><a href="signup.html">SignUp</a></li>
        </ul>
      </div>
    </nav>
	</header><br><br>
   <section>
      <div class="container">
        <video  controls=""  poster="spiderman.jpg" width="100%">
          <source src="phill.MP4">
        </video>
    </div> 
    <button class="btn btn-info" onclick="peter(0)" id="btn">Night Mode</button>
    <button class="btn btn-success" onclick="peter(1)" id="btn">light Mode</button>
   </section>
   <script>
      function peter(color) {
        // body...
        var pic;
        if (color == 0) {
            pic = "#000"
        } else {
            pic = "#fff"
        }
        document.getElementById('watch').style.background = pic;
      }
   </script>
</body>
</html>
<?PHP 
if
?>