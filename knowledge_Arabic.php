<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>كاف</title>

    <link rel="shortcut icon" href="assets/img/logo.png">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Blinker|Crimson+Pro|Fira+Code|Lato|Montserrat|Muli|Nunito+Sans|Roboto|Signika+Negative|Source+Sans+Pro|Ubuntu&display=swap" rel="stylesheet">

    <!--Global style-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/support.css">
    <link rel="stylesheet" href="assets/css/search.css">

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
    <script src="dist/js/demo.js"></script>
    <link rel="stylesheet" href="multirange.css">
    <script src="multirange.js"></script>

    <style>
    @font-face {
        font-family: NeoSansArabic;
    src: url(assets/fonts/neo-sans-arabic-regular/neo-sans-arabic-regular.ttf);
    }

    .box-body{
     border: solid; 
     height: 250px;
}
#sec3 .box-body {
    border-width: 2px;
    border-color: #e3e3e3;
}
.checked{
    color:#facf5a;
}

    </style>

    
</head>

<body>
        <header id="home">
                <div class="">
                    <div onscroll="myFunction()" class="header-content">
                        <div class="header-content-inner">
                            <nav class="navbar navbar-default navbar-fixed-top">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="#"><img src="assets/img/parts/logo.png"/></a>
                                    </div>
                                    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                                            <ul class="nav navbar-nav">
                                                    <li><a href="index_Arabic.php">الرئيسية<span class="sr-only">(current)</span></a></li>
                                                    <li><a href="offers_Arabic.php">العروض</a></li>
                                                    <li  class="active"><a href="knowledge_Arabic.php">الاثراء</a></li>
                                                    <li><a href="support_Arabic.php">الدعم</a></li>
                                                    <li><a href="contact_us_Arabic.php">تواصل معنا</a></li>
                                                    <li class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">اللغة<span class="caret"></span></a>
                                                            <ul class="dropdown-menu">
                                                                    <li><a href="knowledge.php">الانجليزية</a></li>
                                                                    <li><a href="knowledge_Arabic.php">العربية</a></li>
                                                            </ul>
                                                          </li>
                                                <li><a data-toggle="modal" data-target="#razik2" >تسجيل الدخول</a></li>
                                                <li><a><button data-toggle="modal" data-target="#razik" class=" btn btn-default">التسجيل</button></a></li>
                                                <li><a href="search_Arabic.php"><span class="glyphicon glyphicon-search" aria-hidden="true" style="border-right-style:none"></span></a></li>
                                            </ul>
                                    </div>
            
                                    </ul>
                                </div>
                                <!-- /.navbar-collapse -->
                        </div>
                        <!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
                </div>
            </header>
        
        
           <!--start popup-->
        
           <div class="modal fade" id="razik" role="dialog">
                <div class="modal-dialog">
        
                    <!-- Modal content-->
                    <div class="modal-content" style="background-color:rgb(255, 255, 255);">
                        <div class="modal-body" style="height:700px;">
                            <h4 class="modal-title" style="color: #2e445f; text-align: center; font-size: 50px;font-weight: bold;">التسجيل</h4>
                            <h5 class="modal-title" style="color:#dd3939; text-align: center; font-size: 20px;">قم بملئ البيانات لانشاء حساب جديد</h5>
                            <div class="gang center-block" style="background-image:url(assets/img/parts/kaf.png);box-shadow: 0px 0px 0px; margin-top: 30px;border-radius: 100%;">
        
                            </div>
                            <div class="form-group">
                                    
                                    <div class="col-sm-12" style="margin-top:10px;">
                                      <input placeholder="الاسم بالكامل"type="text" class="form-control" id="name"  name="name" style="color: grey; font-size: 18px; background-color:white;box-shadow: 5px 5px 5px #d0d3d7; text-align: center;">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                                    
                                        <div class="col-sm-12" style="margin-top:10px;">
                                          <input placeholder="اسم المستخدم"type="text" class="form-control" id="name"  name="name" style="color: grey; font-size: 18px; background-color:white;box-shadow: 5px 5px 5px #d0d3d7; text-align: center;">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                                    
                                            <div class="col-sm-12" style="margin-top:10px;">
                                              <input placeholder="البريد الالكترونى" type="email" class="form-control" id="name"  name="name" style="color: grey; font-size: 18px; background-color:white;box-shadow: 5px 5px 5px #d0d3d7;text-align: center; ">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                                    
                                                <div class="col-sm-12" style="margin-top:10px;">
                                                  <input placeholder="كلمة المرور" type="Password" class="form-control" id="name"  name="name" style="color: grey; font-size: 18px; background-color:white;box-shadow: 5px 5px 5px #d0d3d7;text-align: center; ">
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                    
                                                    <div class="col-sm-12" style="margin-top:10px;">
                                                      <input placeholder="الهاتف المحمول" type="text" class="form-control" id="name"  name="name" style="color: grey; font-size: 18px; background-color:white; box-shadow: 5px 5px 5px #d0d3d7;text-align: center;">
                                                    </div>
                                                  </div>
                        </div>
                        <div class="modal-footer" style="border-color: #2e445f;">
                            <form class="form-horizontal" action="#supernova-gang" method="post" name="myForm" onsubmit="return validateForm()" enctype="multipart/form-data">
                                <button type="submit" class="btn btn-primary center-block" style="margin-top:50px; background-color:#2e445f ;">تسجيل</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--end popup-->
        
        
            <!--start popup-->
        
           <div class="modal fade" id="razik2" role="dialog">
                <div class="modal-dialog">
        
                    <!-- Modal content-->
                    <div class="modal-content" style="background-color:rgb(255, 255, 255);">
                        <div class="modal-body" style="height:500px;">
                            <h4 class="modal-title" style="color: #2e445f; text-align: center; font-size: 50px;font-weight: bold;">تسجيل الدخول</h4>
                            <h5 class="modal-title" style="color:#dd3939; text-align: center; font-size: 20px;">ادخل اسم المستخدم و كلمة المرور الخاصه بك</h5>
                            <div class="gang center-block" style="background-image:url(assets/img/parts/kaf.png);box-shadow: 0px 0px 0px; margin-top: 30px;border-radius: 100%;">
        
                            </div>
                            <div class="form-group">
                                    
                                    <div class="col-sm-12" style="margin-top:10px;">
                                      <input placeholder="اسم المستخدم"type="text" class="form-control" id="name"  name="name" style="color: grey; font-size: 18px; background-color:white;box-shadow: 5px 5px 5px #d0d3d7; text-align: center;">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                                    
                                        <div class="col-sm-12" style="margin-top:10px;">
                                          <input placeholder="كلمة المرور"type="password" class="form-control" id="name"  name="name" style="color: grey; font-size: 18px; background-color:white;box-shadow: 5px 5px 5px #d0d3d7; text-align: center;">
                                        </div>
                                      </div>
                        </div>
                        <div class="modal-footer" style="border-color: #2e445f;">
                            <form class="form-horizontal" action="#supernova-gang" method="post" name="myForm" onsubmit="return validateForm()" enctype="multipart/form-data">
                                <button type="submit" class="btn btn-primary center-block" style="margin-top:50px; background-color:#2e445f ;">تسجيل الدخول</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--end popup-->
           
    <section class="content content-3" id="sec3">
        <div class="container">
            <div class="row">
               
                <!-- Content Wrapper. Contains page content -->
        <!-- Content Header (Page header) -->
        <section class="content-header">
          
        </section>
    
        <!-- Main content -->
        <section class="content" style="margin-top: 30px;">
          <div class="row">
             
            
              <div class="col-md-12">
                    <div class="row">
                            <a href="clinic_info_Arabic.php"><div data-aos="fade-up" data-aos-duration="1500" class="col-md-12 cont-div" style="">
                                    <div class="row">
                                        <div class="col-md-4 photo photo-dis" style="">
                    
                                        </div>
                                        <div class="col-md-5 infor cont-des" style="">
                                            <h2>عيادة امراض القلبٍٍ</h2>
                                            <h2 style="">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span style="font-size: 15px;">(+320)</span>
                                                </h2>
                                                <h4><i class="fa fa-hospital-o" aria-hidden="true"></i>&nbsp; &nbsp;المستشفى الطبى الدولى</h4>
                                                <br>
                                                <h4><span style="color: #c94747;"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; &nbsp;Street 12,Riyadh (1.2m)</span></h4>
                                                <h4><span style="color: #c94747;"><i class="fa fa-phone" aria-hidden="true"></i></span>&nbsp; &nbsp;(+20)1551196969</h4>
                                                <h4><span style="color: #c94747;"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>&nbsp; &nbsp;izome.kon@KAF.com</h4>
                                                <h4><span style="color: #c94747;"><i class="fa fa-clock-o" aria-hidden="true"></i></span>&nbsp; &nbsp;12:00 PM - 12:00 AM</h4>
                                            </div>
                                            <div class="col-md-3 hidden-sm" style="height: 350px;">
                                                
                                                <div class="photo photo2-des"style="">
                                                <div class="fifty" style="">
                                                    <h3>50%</h3>
                                                </div>
                                                <br>
                                                <div class="mop">
                                                <h2><span class="mop2" style="">150 SR<small><sup><del><span style="color: rgb(216, 213, 213);">300 SR</span></del></sup></small></span></h2>
                                                <h4><span class="mop3" style="">انت توفر 150 ريال</span></h4>
                                                </div>
                                            </div>
                                                <br>
                                                <h4 class="heart"style=""><i class="fa fa-heart" aria-hidden="true"></i></h4>
                                                
                                                      
                                                    
                                            </div>
                                    </div>
                                 </div>
                                 </a>
                                 <a href="clinic_info_Arabic.php"><div data-aos="fade-up" data-aos-duration="1500" class="col-md-12 cont-div" style="">
                                        <div class="row">
                                            <div class="col-md-4 photo photo-dis" style="">
                        
                                            </div>
                                            <div class="col-md-5 infor cont-des" style="">
                                                <h2>عيادة امراض القلبٍٍ</h2>
                                                <h2 style="">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span style="font-size: 15px;">(+320)</span>
                                                    </h2>
                                                    <h4><i class="fa fa-hospital-o" aria-hidden="true"></i>&nbsp; &nbsp;المستشفى الطبى الدولى</h4>
                                                    <br>
                                                    <h4><span style="color: #c94747;"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; &nbsp;Street 12,Riyadh (1.2m)</span></h4>
                                                    <h4><span style="color: #c94747;"><i class="fa fa-phone" aria-hidden="true"></i></span>&nbsp; &nbsp;(+20)1551196969</h4>
                                                    <h4><span style="color: #c94747;"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>&nbsp; &nbsp;izome.kon@KAF.com</h4>
                                                    <h4><span style="color: #c94747;"><i class="fa fa-clock-o" aria-hidden="true"></i></span>&nbsp; &nbsp;12:00 PM - 12:00 AM</h4>
                                                </div>
                                                <div class="col-md-3 hidden-sm" style="height: 350px;">
                                                    
                                                    <div class="photo photo2-des"style="">
                                                    <div class="fifty" style="">
                                                        <h3>50%</h3>
                                                    </div>
                                                    <br>
                                                    <div class="mop">
                                                    <h2><span class="mop2" style="">150 SR<small><sup><del><span style="color: rgb(216, 213, 213);">300 SR</span></del></sup></small></span></h2>
                                                    <h4><span class="mop3" style="">انت توفر 150 ريال</span></h4>
                                                    </div>
                                                </div>
                                                    <br>
                                                    <h4 class="heart"style=""><i class="fa fa-heart" aria-hidden="true"></i></h4>
                                                    
                                                          
                                                        
                                                </div>
                                        </div>
                                     </div>
                                     </a>
                                     <a href="clinic_info_Arabic.php"><div data-aos="fade-up" data-aos-duration="1500" class="col-md-12 cont-div" style="">
                                            <div class="row">
                                                <div class="col-md-4 photo photo-dis" style="">
                            
                                                </div>
                                                <div class="col-md-5 infor cont-des" style="">
                                                    <h2>عيادة امراض القلبٍٍ</h2>
                                                    <h2 style="">
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span style="font-size: 15px;">(+320)</span>
                                                        </h2>
                                                        <h4><i class="fa fa-hospital-o" aria-hidden="true"></i>&nbsp; &nbsp;المستشفى الطبى الدولى</h4>
                                                        <br>
                                                        <h4><span style="color: #c94747;"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; &nbsp;Street 12,Riyadh (1.2m)</span></h4>
                                                        <h4><span style="color: #c94747;"><i class="fa fa-phone" aria-hidden="true"></i></span>&nbsp; &nbsp;(+20)1551196969</h4>
                                                        <h4><span style="color: #c94747;"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>&nbsp; &nbsp;izome.kon@KAF.com</h4>
                                                        <h4><span style="color: #c94747;"><i class="fa fa-clock-o" aria-hidden="true"></i></span>&nbsp; &nbsp;12:00 PM - 12:00 AM</h4>
                                                    </div>
                                                    <div class="col-md-3 hidden-sm" style="height: 350px;">
                                                        
                                                        <div class="photo photo2-des"style="">
                                                        <div class="fifty" style="">
                                                            <h3>50%</h3>
                                                        </div>
                                                        <br>
                                                        <div class="mop">
                                                        <h2><span class="mop2" style="">150 SR<small><sup><del><span style="color: rgb(216, 213, 213);">300 SR</span></del></sup></small></span></h2>
                                                        <h4><span class="mop3" style="">انت توفر 150 ريال</span></h4>
                                                        </div>
                                                    </div>
                                                        <br>
                                                        <h4 class="heart"style=""><i class="fa fa-heart" aria-hidden="true"></i></h4>
                                                        
                                                              
                                                            
                                                    </div>
                                            </div>
                                         </div>
                                         </a>
                                         <a href="clinic_info_Arabic.php"><div data-aos="fade-up" data-aos-duration="1500" class="col-md-12 cont-div" style="">
                                                <div class="row">
                                                    <div class="col-md-4 photo photo-dis" style="">
                                
                                                    </div>
                                                    <div class="col-md-5 infor cont-des" style="">
                                                        <h2>عيادة امراض القلبٍٍ</h2>
                                                        <h2 style="">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span style="font-size: 15px;">(+320)</span>
                                                            </h2>
                                                            <h4><i class="fa fa-hospital-o" aria-hidden="true"></i>&nbsp; &nbsp;المستشفى الطبى الدولى</h4>
                                                            <br>
                                                            <h4><span style="color: #c94747;"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; &nbsp;Street 12,Riyadh (1.2m)</span></h4>
                                                            <h4><span style="color: #c94747;"><i class="fa fa-phone" aria-hidden="true"></i></span>&nbsp; &nbsp;(+20)1551196969</h4>
                                                            <h4><span style="color: #c94747;"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>&nbsp; &nbsp;izome.kon@KAF.com</h4>
                                                            <h4><span style="color: #c94747;"><i class="fa fa-clock-o" aria-hidden="true"></i></span>&nbsp; &nbsp;12:00 PM - 12:00 AM</h4>
                                                        </div>
                                                        <div class="col-md-3 hidden-sm" style="height: 350px;">
                                                            
                                                            <div class="photo photo2-des"style="">
                                                            <div class="fifty" style="">
                                                                <h3>50%</h3>
                                                            </div>
                                                            <br>
                                                            <div class="mop">
                                                            <h2><span class="mop2" style="">150 SR<small><sup><del><span style="color: rgb(216, 213, 213);">300 SR</span></del></sup></small></span></h2>
                                                            <h4><span class="mop3" style="">انت توفر 150 ريال</span></h4>
                                                            </div>
                                                        </div>
                                                            <br>
                                                            <h4 class="heart"style=""><i class="fa fa-heart" aria-hidden="true"></i></h4>
                                                            
                                                                  
                                                                
                                                        </div>
                                                </div>
                                             </div>
                                             </a>
                                             <a href="clinic_info_Arabic.php"><div data-aos="fade-up" data-aos-duration="1500" class="col-md-12 cont-div" style="">
                                                    <div class="row">
                                                        <div class="col-md-4 photo photo-dis" style="">
                                    
                                                        </div>
                                                        <div class="col-md-5 infor cont-des" style="">
                                                            <h2>عيادة امراض القلبٍٍ</h2>
                                                            <h2 style="">
                                                                    <span class="fa fa-star checked"></span>
                                                                    <span class="fa fa-star checked"></span>
                                                                    <span class="fa fa-star checked"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span style="font-size: 15px;">(+320)</span>
                                                                </h2>
                                                                <h4><i class="fa fa-hospital-o" aria-hidden="true"></i>&nbsp; &nbsp;المستشفى الطبى الدولى</h4>
                                                                <br>
                                                                <h4><span style="color: #c94747;"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; &nbsp;Street 12,Riyadh (1.2m)</span></h4>
                                                                <h4><span style="color: #c94747;"><i class="fa fa-phone" aria-hidden="true"></i></span>&nbsp; &nbsp;(+20)1551196969</h4>
                                                                <h4><span style="color: #c94747;"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>&nbsp; &nbsp;izome.kon@KAF.com</h4>
                                                                <h4><span style="color: #c94747;"><i class="fa fa-clock-o" aria-hidden="true"></i></span>&nbsp; &nbsp;12:00 PM - 12:00 AM</h4>
                                                            </div>
                                                            <div class="col-md-3 hidden-sm" style="height: 350px;">
                                                                
                                                                <div class="photo photo2-des"style="">
                                                                <div class="fifty" style="">
                                                                    <h3>50%</h3>
                                                                </div>
                                                                <br>
                                                                <div class="mop">
                                                                <h2><span class="mop2" style="">150 SR<small><sup><del><span style="color: rgb(216, 213, 213);">300 SR</span></del></sup></small></span></h2>
                                                                <h4><span class="mop3" style="">انت توفر 150 ريال</span></h4>
                                                                </div>
                                                            </div>
                                                                <br>
                                                                <h4 class="heart"style=""><i class="fa fa-heart" aria-hidden="true"></i></h4>
                                                                
                                                                      
                                                                    
                                                            </div>
                                                    </div>
                                                 </div>
                                                 </a>
                                                 <a href="clinic_info_Arabic.php"><div data-aos="fade-up" data-aos-duration="1500" class="col-md-12 cont-div" style="">
                                                        <div class="row">
                                                            <div class="col-md-4 photo photo-dis" style="">
                                        
                                                            </div>
                                                            <div class="col-md-5 infor cont-des" style="">
                                                                <h2>عيادة امراض القلبٍٍ</h2>
                                                                <h2 style="">
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span style="font-size: 15px;">(+320)</span>
                                                                    </h2>
                                                                    <h4><i class="fa fa-hospital-o" aria-hidden="true"></i>&nbsp; &nbsp;المستشفى الطبى الدولى</h4>
                                                                    <br>
                                                                    <h4><span style="color: #c94747;"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; &nbsp;Street 12,Riyadh (1.2m)</span></h4>
                                                                    <h4><span style="color: #c94747;"><i class="fa fa-phone" aria-hidden="true"></i></span>&nbsp; &nbsp;(+20)1551196969</h4>
                                                                    <h4><span style="color: #c94747;"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>&nbsp; &nbsp;izome.kon@KAF.com</h4>
                                                                    <h4><span style="color: #c94747;"><i class="fa fa-clock-o" aria-hidden="true"></i></span>&nbsp; &nbsp;12:00 PM - 12:00 AM</h4>
                                                                </div>
                                                                <div class="col-md-3 hidden-sm" style="height: 350px;">
                                                                    
                                                                    <div class="photo photo2-des"style="">
                                                                    <div class="fifty" style="">
                                                                        <h3>50%</h3>
                                                                    </div>
                                                                    <br>
                                                                    <div class="mop">
                                                                    <h2><span class="mop2" style="">150 SR<small><sup><del><span style="color: rgb(216, 213, 213);">300 SR</span></del></sup></small></span></h2>
                                                                    <h4><span class="mop3" style="">انت توفر 150 ريال</span></h4>
                                                                    </div>
                                                                </div>
                                                                    <br>
                                                                    <h4 class="heart"style=""><i class="fa fa-heart" aria-hidden="true"></i></h4>
                                                                    
                                                                          
                                                                        
                                                                </div>
                                                        </div>
                                                     </div>
                                                     </a>
                                                   
                                 
                    </div>
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
                                        <h2 class="footerWidgeTitle">كاف على هاتفك المحمول</h2>
                                        <hr style="border-width: 3px; line-height: 2px;border-top-color: #facf5a; margin-bottom: 50px;" width="10%">
                                           <img class="img-responsive" src="assets/img/parts/Group366x.png" width="150" height="150" style="margin:0 auto;"/>
                                    </div>
                                </div>
    
                        <div class="col-md-4 footerCol" style="border-right: #d0d3d7;border-right-style: solid;">
                            <div data-aos="zoom-in" data-aos-duration="1500" class="footerWidget">
                                    <img class="img-responsive" src="assets/img/parts/Group361x.png" width="100" height="100" style="margin:0 auto;"/>
                                <h2 class="footerWidgeTitle">لمعرفة جديدنا</h2>
                                <p class="footerWidgetCon">
                                        <div class="form-group">
                                                <div style="margin-top:20px;position: relative; left: 20px;">
                                                        <div class="input-group" style="margin-top:20px;position: relative;top:0px;">
                                                                <input type="text" class="form-control" placeholder="بريدك الالكترونى" aria-describedby="basic-addon2">
                                                                <span class="input-group-addon" id="basic-addon2" style="position: relative;right: 20px;background-color: #facf5a;border-top-right-radius: 50px;border-bottom-right-radius: 50px;">اشترك الان</span>
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
                                            <h2 class="footerWidgeTitle">الاخبار</h2>
                                            <hr style="border-width: 3px; line-height: 2px;border-top-color: #facf5a; margin-bottom: 50px;" width="25%">
                                            <h2 style="font-size: 15px;">الاخبار</h2>
                                            <h2 style="font-size: 15px;">الاخبار</h2>
                                            <h2 style="font-size: 15px;">الاخبار</h2>
                                            <h2 style="font-size: 15px;">الاخبار</h2>
                                    </div>
                                    <div class="col-md-6">
                                            <h2 class="footerWidgeTitle">عنا</h2>
                                            <hr style="border-width: 3px; line-height: 2px;border-top-color: #facf5a; margin-bottom: 50px;" width="25%">
                                            <h2 style="font-size: 15px;">عنا</h2>
                                            <h2 style="font-size: 15px;">عنا</h2>
                                            <h2 style="font-size: 15px;">عنا</h2>
                                            <h2 style="font-size: 15px;">عنا</h2>
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