<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Introducion to Be My Eyes App</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  	
	<title>App Introduction to| Be My Eyes App</title>
</head>
    <body>
     <header class=" navbar navbar-inverse navbar-fixed-top">
         
		 <a class="BMElogo" href="#"> <img class="BMElogo" src="BME_2.png"></a>
        </header>
        
	<main class="container">
		<div class="main">
			<h1>Let's Get started</h1>
    <form class="form-horizontal" name="registration" action="welcome.php" method="post" >
        <div class="form-group text-left">
        <label class="control-label col-sm-2" for="name">Name:</label> 
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="Enter name" maxlength="99" name="name" pattern="[A-Za-z]{1,99}" required>
            </div>
        </div>
        <div class="form-group text-left">
            <label class="control-label col-sm-2" for="surname">Surname:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="surname" placeholder="Enter Surname" maxlength="99" name="surname" pattern="[A-Za-z]{1,99}" required>
            </div>
        </div>
        <div class="form-group text-left">
            <label class="control-label col-sm-2" for="email">E-mail</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="Enter E-mail" name="email" required>
            </div>
        </div>
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-danger btn-block">Submit</button>
            </div>
    </form>
        	</div> 
    </main>
</body>
</html>