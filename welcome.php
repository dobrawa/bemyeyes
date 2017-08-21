<!DOCTYPE html>
<html>
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
     <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
   


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
     <header class=" navbar navbar-inverse navbar-fixed-top">
		 <a class="BMElogo" href="#"> <img class="BMElogo" src="BME_2.png"></a>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span></a>
<!--
         <a class="right carousel-control" href="#myCarousel" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span></a>
-->
	</header>

<div class="main">
  <div id="myCarousel" class="carousel slide" data-interval="false">
      <!-- Indicators
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
</ol> --> 
   

      <!-- Wrapper for slides -->
    <div class="container">
            <div class="carousel-inner">
                <div class="item active">
                    <h4 class="step_text">Welcome</h4>
                    <div class="carousel-content">
                        <div><div class="content-text">
                            <h3>
                                <?php
                                $name = $_POST["name"];
                                echo "Thank you, " . $name . "!";
                               ?> 
                               </h3> 
                            <p>Now, let's teach you how to help</p>
                         </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <h4 class="step_text">Step 1 of 13</h4>
                    <div class="carousel-content">
                        <div class="content-text">
                            <h3>Not ALL of ‘blind’ are...blind</h3>
                            <p>In fact, most of visually impaired people can see something. They can have limited vision, see different light levels, have pinhole vision, see everything cloudy…</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <h4 class="step_text">Step 2 of 13</h4>
                    <div class="carousel-content">
                        <div class="content-text">
                            <h3>We are all the same</h3>
                            <p>Remember, visually impaired people are just like you - they have their hobbies, strengths and weaknesses. Do not treat them as ‘disabled’!</p>
                        </div>
                    </div>
                </div>   
                <div class="item">
                    <h4 class="step_text">Step 3 of 13</h4>
                    <div class="carousel-content">
                        <div class="content-text">
                            <h3>Be yourself</h3>
                                <p>Don’t try to speak slowly and louder - vision loss doesn’t mean problems with hearing. Be natural and speak as usual. You don’t have to worry about words like ‘see’ or ‘look’. It is still nice to say, ‘Nice to see you!”</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <h4 class="step_text">Step 4 of 13</h4>
                    <div class="carousel-content">
                        <div class="content-text">
                            <h3>Be clear</h3>
                            <p> Remember about using specific and clear language when directing a person</p>
                        </div>
                    </div>
                </div>  
                <div class="item">
                    <h4 class="step_text">Step 5 of 13</h4>
                    <div class="carousel-content">
                        <div class="content-text">
                            <h3>Example 1</h3>
                            <p>Imagine that a person is asking about the location of the canned tomatoes in the cupboard.</p>
                        </div>
                    </div>
                </div>  
                <div class="item">
                    <h4 class="step_text">Step 5 of 13</h4>
                    <div class="carousel-content">
                        <div class="content-text">
                            <h3>DON’T</h3>
                            <p>‘It is on the second level’</p>
                        </div>
                    </div>
                </div>  
                <div class="item">
                    <h4 class="step_text">Step 5 of 13</h4>
                    <div class="carousel-content">
                        <div class="content-text">
                            <h3>DO</h3>
                            <p>‘It is on the second level, on the left, standing between glass jar of jam and a can of tuna’</p>
                            <p>Specify the location as accurate as you can. Remember, vision is limited, so try to focus on facture (glass), characteristic shape (canned tuna), shapes etc.</p>

                        </div>
                    </div>
                </div>
                <div class="item">
                    <h4 class="step_text">Step 6 of 13</h4>
                    <div class="carousel-content">
                        <div class="content-text">
                            <h3>Example 2</h3>
                            <p>A person wants you to read the small colour name on the lipstick. You can’t see it well.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <h4 class="step_text">Step 6 of 13</h4>
                    <div class="carousel-content">
                        <div class="content-text">
                            <h3>DON’T</h3>
                            <p>‘Turn it’</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <h4 class="step_text">Step 7 of 13</h4>
                    <div class="carousel-content">
                        <div class="content-text">
                            <h3>Do</h3>
                            <p>‘Turn it clockwise two times’</p><p>
                            Remember about using words such as left and right, count the times of action if possible, use numbers.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <h4 class="step_text">The end</h4>
                    <div class="carousel-content">
                        <div class="content-text">
                           <h3><?php
                                $name = $_POST["name"];
                                echo "Great, " . $name . "!"?> <br>
                            </h3>
                                <p>Remember, at the moment we have a lot of volunteers. It might take some time until you receive your first call. Meanwhile, you can check out others’ experiences on our community page.</p>
                            <div>
                              <a class="btn  btn-block">
                            <span class="fa fa-users"></span> Go to our community page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="next_button"> 
        <button type="button" class=" btn btn-danger btn-block" data-target="#myCarousel" data-slide="next">Next page</button>
      </div>
    </div>
      </div>
<!--
   <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
-->


        <!-- jQuery -->
     <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
 $('.carousel').carousel({wrap: false }).on('slid.bs.carousel', function() {check() });
        
function check() {
  curSlide = $('.active');
  if (curSlide.is(':first-child')) {
    $('.left').hide();
    $('.right').show();
  } else if (curSlide.is(':last-child')) {
    $('.right').hide();
    $('.left').show();
  } else {
    $('.left').show();
    $('.right').show();
  }
}
check()
 

$(".#mCarousel").swipe({

  swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

    if (direction == 'left') $(this).carousel('next');
    if (direction == 'right') $(this).carousel('prev');

  },
  allowPageScroll:"vertical"

});
    </script> 
    </div>
    </body> 
</html> 