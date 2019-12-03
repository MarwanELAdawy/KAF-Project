
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
                                            <li class="active"><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
                                            <li><a href="offers.php">Offers</a></li>
                                            <li><a href="knowledge.php">Knowledge</a></li>
                                            <li><a href="support.php">Support</a></li>
                                            <li><a href="contact_us.php">Contact Us</a></li>
                                            <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Language <span class="caret"></span></a>
                                                    <ul class="dropdown-menu">
                                                            <li><a href="index.php">English</a></li>
                                                            <li><a href="index_Arabic.php">Arabic</a></li>
                                                    </ul>
                                                  </li>
                                              <?php if (!isset($_COOKIE['user_name']))
                                              {?>

                                        <li><a data-toggle="modal" data-target="#razik2" >Login</a></li>
                                              <?php }
                                              else {
                                                ?>
                                        <li><a href="index.php?logout">logout</a></li>
                                                
                                                <?Php
                                              }
                                              ?>
                                        <?php 
                                       
                                        if (!isset($_COOKIE['user_name'])){?>
                                        <li><a><button data-toggle="modal" data-target="#razik" class="btn btn-default">Sign up</button></a></li>
                                        <?php }
                                        else {
                                          ?>
                                        <li><a><?php echo $_COOKIE['user_name'];?></a></li>
                                          <?php
                                        }
                                        ?>
                                        
                                        <li><a href="search.php"><span class="glyphicon glyphicon-search" aria-hidden="true" style="border-right-style:none"></span></a></li>
                                        
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
                    <form class="form-horizontal"  method="post" action="index.php">

                        <div class="modal-body" style="height:700px;">
                            <h4 class="modal-title" style="color: #2e445f; text-align: center; font-size: 50px;font-weight: bold;">Sign Up</h4>
                            <h5 class="modal-title" style="color:#dd3939; text-align: center; font-size: 20px;">Come on and join us</h5>
                            <div class="gang center-block" style="background-image:url(assets/img/parts/kaf.png);box-shadow: 0px 0px 0px; margin-top: 30px;border-radius: 100%;">
        
                            </div>
                            <div class="form-group">
                                    
                                    <div class="col-sm-12" style="margin-top:10px;">
                                      <input placeholder="Full Name" type="text" class="form-control" name="full_name" style="color: grey; font-size: 18px; background-color:white;box-shadow: 5px 5px 5px #d0d3d7; text-align: center;">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                                    
                                        <div class="col-sm-12" style="margin-top:10px;">
                                          <input placeholder="User Name" type="text" class="form-control" id="name"  name="user_name" style="color: grey; font-size: 18px; background-color:white;box-shadow: 5px 5px 5px #d0d3d7; text-align: center;">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                                    
                                            <div class="col-sm-12" style="margin-top:10px;">
                                              <input placeholder="E-mail" type="email" class="form-control" name="email" style="color: grey; font-size: 18px; background-color:white;box-shadow: 5px 5px 5px #d0d3d7;text-align: center; ">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                                    
                                                <div class="col-sm-12" style="margin-top:10px;">
                                                  <input placeholder="Password" type="Password" class="form-control" name="password" style="color: grey; font-size: 18px; background-color:white;box-shadow: 5px 5px 5px #d0d3d7;text-align: center; ">
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                    
                                                    <div class="col-sm-12" style="margin-top:10px;">
                                                      <input placeholder="Phone" type="text" class="form-control" name="phone" style="color: grey; font-size: 18px; background-color:white; box-shadow: 5px 5px 5px #d0d3d7;text-align: center;">
                                                    </div>
                                                  </div>
                        </div>
                        <button type="submit" name="submit_sign_up" value="submit_sign_up" class="btn btn-primary center-block" style="margin-top:50px; background-color:#2e445f ;">Sign up</button>
                            </form>
                        <div class="modal-footer" style="border-color: #2e445f;">

                             
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
                    <form class="form-horizontal" action="index.php" method="post">

                        <div class="modal-body" style="height:500px;">
                            <h4 class="modal-title" style="color: #2e445f; text-align: center; font-size: 50px;font-weight: bold;">Login</h4>
                            <h5 class="modal-title" style="color:#dd3939; text-align: center; font-size: 20px;">Enter Username and Password</h5>
                            <div class="gang center-block" style="background-image:url(assets/img/parts/kaf.png);box-shadow: 0px 0px 0px; margin-top: 30px;border-radius: 100%;">
        
                            </div>
                            <div class="form-group">
                                    
                                    <div class="col-sm-12" style="margin-top:10px;">
                                      <input placeholder="User Name"type="text" class="form-control" name="name" style="color: grey; font-size: 18px; background-color:white;box-shadow: 5px 5px 5px #d0d3d7; text-align: center;">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                                    
                                        <div class="col-sm-12" style="margin-top:10px;">
                                          <input placeholder="Password" type="password" class="form-control" name="password" style="color: grey; font-size: 18px; background-color:white;box-shadow: 5px 5px 5px #d0d3d7; text-align: center;">
                                        </div>
                                      </div>
                        </div>                           
                        <button type="submit" name="submit_login" value="submit_login" class="btn btn-primary center-block" style="margin-top:50px; background-color:#2e445f ;">Login</button>

                      </form>

                        <div class="modal-footer" style="border-color: #2e445f;">
                        </div>
                    </div>
                </div>
            </div>
            <!--end popup-->