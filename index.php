<?php include './includes/dp.php'?>
<?php include './includes/regestration_system.php'?>
<?php logout();?>
<?php sign_up();?>
<?php login();?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>KAF</title>

    <link rel="shortcut icon" href="assets/img/parts/logo.png">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Blinker|Crimson+Pro|Fira+Code|Lato|Montserrat|Muli|Nunito+Sans|Roboto|Signika+Negative|Source+Sans+Pro|Ubuntu&display=swap" rel="stylesheet">

    <!--Global style-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/login.css">

    <!--Jquery-->
    <script src="assets/css/additions/jquery/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!--Font-->
    <link href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css" />

     <!--Jquery-->
     <script src="assets/additions/jquery/jquery-3.2.1.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style>
    @font-face {
        font-family: NeoSansArabic;
    src: url(assets/fonts/neo-sans-arabic-regular/neo-sans-arabic-regular.ttf);
    }
    </style>

</head>

<body>
    <!-- Header -->

    <?php include './includes/nav_bar_english.php';?>



<!--------------------------------------Hero section----------------------------------------------------------------->

    <section class="intro">
        <div class="container-fluid">
        
            <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
     
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"style=" background-image:url(assets/img/parts/intro.png);background-repeat:no-repeat;background-size:contain; height:500px;margin-top:100px;">
                            <h2 style="">Get the right discount for you with                         <div class="text-white">
                            <?php print_r($errors)
                            ;
                            print_r($_COOKIE);
                            ?>
                            
   
    </div> <span style="color:#facf5a;"> on click</span></h2>
                            <div class="row">
   
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                                  <select id="hear" class="form-control" name="commuitte" style="margin-top:20px;position: relative;top:180px;">
                                                    <option>Select your city</option>
                                                    <option value=""></option>
                                                <option value=""></option>
                                                <option value=""></option>
                                                <option value=""></option>
                                                <option value=""></option>
                                                <option value=""></option>
                                                <option value=""></option>
                                                <option value=""></option>
                                                  </select>
                                              </div>
                                              <div class="form-group">
                                                    <select id="hear" class="form-control" name="commuitte" style="margin-top:20px;position: relative;top:180px;">
                                                      <option>Select your city</option>
                                                      <option value=""></option>
                                                  <option value=""></option>
                                                  <option value=""></option>
                                                  <option value=""></option>
                                                  <option value=""></option>
                                                  <option value=""></option>
                                                  <option value=""></option>
                                                  <option value=""></option>
                                                    </select>
                                                </div>
                                                <div id="search">
                                                <div class="form-group">
                                                    <div style="margin-top:20px;position: relative;">
                                                            <div class="input-group" style="margin-top:20px;position: relative;top:180px;">
                                                                    <input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2">
                                                                    <span class="input-group-addon" id="basic-addon2" style="position: relative;right: 20px;"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
                                                                </div>
                                                    </div>    
                                                </div>
                                                </div>
                                                <div id="search2">
                                                <div class="form-group">
                                                    <div style="margin-top:20px;position: relative;">
                                                            <div class="input-group" style="margin-top:20px;position: relative;top:180px;">
                                                                    <input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2">
                                                                    <span class="input-group-addon" id="basic-addon2" style="position: relative;right: 20px;"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
                                                                </div>
                                                    </div>    
                                                </div>
                                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

                                </div>
                            </div>
                        </div>
                        
                            
                    
            </div>
            <img src="assets/img/parts/introboy.png" width="300" height="300" style="position: relative;bottom:200px;"/>
        </div>
    </section>


<!-------------------------------------End Hero section----------------------------------------------------------------->


    <section class="content content-3" id="sec3">
        <div class="container">
            <div class="row">
                <h2  data-aos="fade-up" data-aos-duration="1500">How to get a discount</h2>
                <hr style="border-width: 3px; line-height: 2px;border-top-color: #facf5a; margin-bottom: 50px;" width="10%">

                <div class="col-md-4" style=" height: 350px;">
                        <div data-aos="flip-left" data-aos-duration="1500" data-toggle="modal" data-target="#razik" class="gang center-block" style="background-image:url(assets/img/parts/fro.png);">
                            <span style="top: 38px;left: 36px; color: white;font-size: 40px;"class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        </div>
                        <h3>1 | Login</h3>
                        <h4>Register personal information</h4>
                </div>
                <div class="col-md-4"style="height: 350px;">
                        <div data-aos="flip-left" data-aos-duration="1500" data-toggle="modal" data-target="#razik" class="gang center-block" style="background-image:url(assets/img/parts/fro.png);">
                            <span style="top: 38px;left: 36px; color: white;font-size: 40px;"class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        </div>
                        <h3>2 | Search</h3>
                        <h4>Search for your servies</h4>
                </div>
                <div class="col-md-4"style="height: 350px;">
                        <div data-aos="flip-left" data-aos-duration="1500" data-toggle="modal" data-target="#razik" class="gang center-block" style="background-image:url(assets/img/parts/fro.png);">
                            <span style="top: 38px;left: 36px; color: white;font-size: 40px;"class="glyphicon glyphicon-gift" aria-hidden="true"></span>
                        </div>
                        <h3>3 | Get your discount</h3>
                        <h4>Choose the right servies for you at the best discount</h4>
                </div>
            </div>
        </div>
    </section>


    
      <!-- Footer -->
    <!-- START FOOTER -->
    <footer id="footer">
            <div id="footerInfo">
                <div class="container">
                    <div class="row">
    
                            <div class="col-md-4 footerCol" style="border-right: #d0d3d7;border-right-style: solid;height: 380px;">
                                    <div data-aos="zoom-in" data-aos-duration="1500" class="footerWidget">
                                        <h2 class="footerWidgeTitle">KAF On your mobile phone</h2>
                                        <hr style="border-width: 3px; line-height: 2px;border-top-color: #facf5a; margin-bottom: 50px;" width="10%">
                                           <img class="img-responsive" src="assets/img/parts/Group366x.png" width="150" height="150" style="margin:0 auto;"/>
                                    </div>
                                </div>
    
                        <div class="col-md-4 footerCol" style="border-right: #d0d3d7;border-right-style: solid;">
                            <div data-aos="zoom-in" data-aos-duration="1500" class="footerWidget">
                                    <img class="img-responsive" src="assets/img/parts/Group361x.png" width="100" height="100" style="margin:0 auto;"/>
                                <h2 class="footerWidgeTitle">To know what's new</h2>
                                <p class="footerWidgetCon">
                                        <div class="form-group">
                                                <div style="margin-top:20px;position: relative; left: 20px;">
                                                        <div class="input-group" style="margin-top:20px;position: relative;top:0px;">
                                                                <input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2">
                                                                <span class="input-group-addon" id="basic-addon2" style="position: relative;right: 20px;background-color: #facf5a;border-top-right-radius: 50px;border-bottom-right-radius: 50px;">Subscribe</span>
                                                            </div>
                                                </div>    
                                            </div>
                                            <p class="footerMediaBtns footerWidgeTitle">
                                                    <a href="https://www.facebook.com/supernova.explosion.99/">
                                                        <img data-aos="zoom-in" data-aos-duration="1500" src="assets/img/social/facebook.png" width="50" height="50" />
                                                    </a>
                    
                                                    <a href="#">
                                                        <img data-aos="zoom-in" data-aos-duration="1500" src="assets/img/social/twitter.png" width="55" height="55" />
                                                    </a>
                    
                                                    <a href="#">
                                                        <img data-aos="zoom-in" data-aos-duration="1500" src="assets/img/social/youtube.png" width="50" height="50" />
                                                    </a>
                                                </p>
                                </p>
                            </div>
                        </div>
    
                        <div class="col-md-4 footerCol">
                            <div data-aos="zoom-in" data-aos-duration="1500" class="footerWidget">
                                <p class="footerWidgetCon">
                                    <div class="col-md-6">
                                            <h2 class="footerWidgeTitle">News</h2>
                                            <hr style="border-width: 3px; line-height: 2px;border-top-color: #facf5a; margin-bottom: 50px;" width="25%">
                                            <h2 style="font-size: 15px;">News</h2>
                                            <h2 style="font-size: 15px;">News</h2>
                                            <h2 style="font-size: 15px;">News</h2>
                                            <h2 style="font-size: 15px;">News</h2>
                                    </div>
                                    <div class="col-md-6">
                                            <h2 class="footerWidgeTitle">News</h2>
                                            <hr style="border-width: 3px; line-height: 2px;border-top-color: #facf5a; margin-bottom: 50px;" width="25%">
                                            <h2 style="font-size: 15px;">News</h2>
                                            <h2 style="font-size: 15px;">News</h2>
                                            <h2 style="font-size: 15px;">News</h2>
                                            <h2 style="font-size: 15px;">News</h2>
                                        </div>
                                    
                                </p>
                            </div>
                        </div>
    
    
                    </div>
                </div>
            </div>
    
            <div id="copyrightsWrap">
                <div class="container">
    
                    <p id="copyrights">Copyright &copy; KAF 2019</p>
    
                </div>
            </div>
    
        </footer>
        <!-- END FOOTER -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            $("h1").fadeIn(3000);

        });
    </script>
    <script>
            $(function() {
                $(document).scroll(function() {
                    var $nav = $(".navbar-fixed-top");
                    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
                });
            });
        </script>
    <script src="https://unpkg.com/scrollreveal@4"></script>

    <script>
        AOS.init();
    </script>
    </body>
    </html>