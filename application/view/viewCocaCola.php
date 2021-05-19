<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../application/css/bootstrap.css" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' href='../application/css/x3dom.css'>
    <link rel="stylesheet" href="../application/css/custom.css" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../application/css/jquery.fancybox.min.css">
    
    <title>Web 3D Applications Assignment</title>

  </head>
  <body id="bodyColor">
      <!-- header -->
      <nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
      
            <!-- logo for website -->
            <div class="logo">
              <a id="navHomeLogo" class="navbar-brand" href="#">
                <h1>1oca</h1>
                <h2>Cola</h2>
                <h3>Journey</h3>
                <p>Refreshing the world, one story at a time</p>
              </a>
            </div>

            <!-- Navbar Menu Icon for when page is small -->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- link Menu Icon button to the links class navbar-collapse selector -->
            <div class="collapse navbar-collapse">
                <!-- Links -->
                <ul class="navbar-nav ml-auto">

                  <li class="nav-item">
                    <!--<a id="navHome" class="nav-link active" href="#">Home</a>-->
                    <a id="navHome" class="nav-link" href="#">Home</a>
                  </li>

                  <li class="nav-item">
                    <a id="navAbout" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="Extra work I did for the Web 3D Applications" data-content="Web 3D Application is a final year and undergraduate module...">About</a>
                  </li>
              
                  <li class="nav-item">
                      <a id="navModels" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="X3D Models" data-content="There are three X3D models: Coke, Sprite and Appletiser" onclick="cameraFront();">Models</a>                      
                  </li>

                  <li class="nav-item">
                    <a id="navContact" class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
                  </li>

                  <li class="nav-item">
                    <a id="navSearch" class="nav-link" href="#" data-toggle="modal" data-target="#searchPage">Search</a>
                  </li>

                </ul>
            </div>
      </nav>


      <!-- This is the main contents of the page, it has an introduction row, followed by a background image across 1 column on a new row, then three more rows, holding cards for each model brand being used... -->
      <div class="container-fluid">

          <!-- This is the home page contents -->
          <div id="home" class="main_contents">

            <!-- A row for the introduction to the website -->
            <div class="row">
              <div class="col-sm-12">
                <div class="card img-narrow bg-secondary">                  
                  <div class="card-body">
                        <div id="title2" class="card-title drinksText"></div>
                        <div id="subTitle2" class="card-subtitle drinksText"></div>
                  </div>
                </div>
              </div>
            </div>  

            <!-- A row for the home page big image-->
            <div class="row">
              <div class="col-sm-12">
                <div id="main_3d_image">
                  <div id="main_text" class="col-xs-12 col-sm-4">
                    <div id="title_home"></div>
                    <div id="subTitle_home"></div>
                    <div id="description_home"></div>
                  </div> 
                </div>
              </div>
            </div>  

            <!-- 3 rows to hold the three cards for the Coke, Sprite and Appletiser information -->
            <div class="row">
                  <div class="col-sm-12">
                      <div class="card img-narrow bg-secondary">                        
                          <div class="card-body">
                                <div id="title_left" class="card-title drinksText"></div>
                                <div id="subTitle_left" class="card-subtitle drinksText"></div>
                                <div id="description_left" class="card-text drinksText"></div>   
                            <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola"  target="_blank" class="btn btn-primary btn-responsive">Find out more ...</a>                 
                          </div>
                      </div>
                  </div>
            </div>      
            <div class="row">      
                  <div class="col-sm-12">
                      <div class="card img-narrow bg-secondary">                          
                          <div class="card-body">
                            <div id="title_centre" class="card-title drinksText"></div>
                            <div id="subTitle_centre" class="card-subtitle drinksText"></div>
                            <div id="description_centre" class="card-text drinksText"></div>   
                            <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite"  target="_blank" class="btn btn-primary btn-responsive">Find out more ...</a>
                          </div>                          
                      </div>
                  </div>
            </div> 
            <div class="row">     
                  <div class="col-sm-12">
                      <div class="card img-narrow bg-secondary">                          
                          <div class="card-body">
                            <div id="title_right" class="card-title drinksText"></div>
                            <div id="subTitle_right" class="card-subtitle drinksText"></div>
                            <div id="description_right" class="card-text drinksText"></div>   
                            <a href="http://www.coca-cola.co.uk/drinks/appletiser"  target="_blank" class="btn btn-primary btn-responsive">Find out more ...</a>
                          </div>
                      </div>
                  </div>
            </div>
          </div>  <!-- End of the home page contents -->



          <!-- about page (aka what I did) -->
          <div id="about" style="display:none;">
            <div class="row">
              <div class="col-sm-12">
                <div class="card img-narrow bg-secondary">                          
                    <div class="card-body">
                      <div id="title_about"></div>                  
                      </br>
                      <div id="text_about"></div>
                      </div>
                    </div>
                </div>
              </br>              
            </div> 
            <div class="row"> 
              <div class="col-sm-12">
                <div class="card img-narrow bg-secondary">                          
                    <div class="card-body">
                      <div id="title_about2"></div>                  
                      </br>
                      <div id="text_about2"></div>
                      </div>
                    </div>
                </div>           
            </div>

              <!-- video to demonstrate the use of video media -->
              <video class="video" width="320" height="240" controls>
                <source src="../application/assets/videos/CocaCola.mp4" type="video/mp4">
              Your browser does not support the video tag.
              </video>
          </div>  









          <!-- Content for X3D models, information, interaction buttons and 3D Image Gallery -->
          <div id="models" class="main_contents" style="display:none;">
            <!-- Row to hold 3 cards (buttons, model interaction and model brand information)-->
            <div class="row">
              <div class="col-sm-4">

                <div class="card text-left bg-secondary">
                    <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs">
                      <li class="nav-item dropdown">
                          <a class="nav-link active" href="#">Cameras</a>                          
                        </li>
                      </ul>
                    </div>
                    <div class="card-body bg-secondary">
                      <div class="card-Title x3dCamera_Subtitle drinksText">
                        <h3>Camera Views</h3>
                      </div>                            
                      <a href="#" class="btn btn-success btn-responsive" onclick="cameraFront();">Default</a>
                      <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraFront();">Front</a>
                      <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</a>
                      <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</a>
                      <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</a>
                      <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraTop();">Top</a>
                      <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraBottom();">Bottom</a>
                      <div class="card-text x3dCameraDescription drinksText">
                        <p>These buttons select a limited range of X3D model viewpoints</p>
                      </div>
                    </div>
                </div>

                  <div class="card text-left bg-secondary">
                    <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#">Animation</a>
                        </li>
                      </ul>
                    </div>
                    <div class="card-body bg-secondary">
                      <div class="card-Title x3dAnimationSubtitle drinksText">
                        <h3>Animation Options</h3>
                      </div>
                      <a href="#" class="btn btn-secondary btn-responsive" onclick="spin();">Animate</a>              
                      <a href="#" class="btn btn-secondary btn-responsive" onclick="stopRotation();">Stop</a>
                      <div class="card-text x3dAnimationDescription drinksText">
                          <p>These buttons select a range of X3D animation options</p>
                      </div>
                    </div>
                  </div>

                  <div class="card text-left bg-secondary">
                    <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#">Render</a>                     
                        </li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <div class="card-Title x3dRendersubtitle drinksText">
                        <h3>Render and Lighting Options</h3>
                      </div>
                      <a href="#" class="btn btn-secondary btn-responsive" onclick="wireFrame();">Change Render</a>
                      <a href="#" class="btn btn-secondary btn-responsive" onclick="headLight();">Headlight</a>
                      <a href="#" class="btn btn-secondary btn-responsive" onclick="omniLight();">Omni light</a>
                      <div class="card-text x3dRenderDescription drinksText">
                          <p>These buttons select a limited number of render and lighting options</p>
                      </div>
                    </div>
                  </div>
              </div>
              <!-- X3D Model space -->
              <div class="col-sm-4">
                <div class="card text-left bg-secondary">
                  <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                      <li class="nav-item">
                        <a id="navCoke" class="nav-link active" href="#">X3D Models</a>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <!-- X3D Models -->
                    <div>
                        <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
                        <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>
                        <div id="x3dModelTitle_pepper" class="card-title drinksText"></div>

                        <button type="button" class="btn btn-success btn-responsive" onMouseUp="cokeScene(); cokeDescription();">Coke</button>
                        <button type="button" class="btn btn-success btn-responsive" onMouseUp="spriteScene(); spriteDescription();">Sprite</button>
                        <button type="button" class="btn btn-success btn-responsive" onMouseUP="pepperScene(); pepperDescription();">Appletiser</button>
                        
                        <div class="model3D">
                          <x3d id="wire">
                            <scene>
                                <Switch whichChoice="0" id='SceneSwitch'>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/coke.x3d" > </inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/sprite.x3d"> </inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/appletiser.x3d"> </inline>
                                    </transform>
                                </Switch>
                            </scene>
                          </x3d>
                        </div> 
                        <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
                        <div id="x3dCreationMethod_sprite" class="card-text drinksText"></div>
                        <div id="x3dCreationMethod_pepper" class="card-text drinksText"></div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Row to hold one card - coke descriptive text -->
              <div id="cokeDescription" class="col-sm-4" style="display:none;">
                  <div class="col-sm-12">
                      <div class="card bg-secondary">
                          <div class="card-body">
                              <div id="title_coke" class="card-title drinksText"></div>
                              <div id="subTitle_coke" class="card-subtitle drinksText"></div>
                              <div id="description_coke" class="card-text drinksText"></div>   
                            <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola"  target="_blank" class="btn btn-primary btn-responsive">Visit Coke</a>                 
                          </div>
                      </div>
                  </div>
              </div> 

              <!-- Row to hold one card - sprite descriptive text-->
              <div id="spriteDescription" class="col-sm-4" style="display:none;">
                  <div class="col-sm-12">
                      <div class="card bg-secondary">
                          <div class="card-body">
                              <div id="title_sprite" class="card-title drinksText"></div>
                              <div id="subTitle_sprite" class="card-subtitle drinksText"></div>
                              <div id="description_sprite" class="card-text drinksText"></div>  
                            <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite"  target="_blank" class="btn btn-primary btn-responsive">Visit Sprite</a>                 
                          </div>
                      </div>
                  </div>
              </div> 

              <!-- Row to hold one card - appletiser descriptive text-->
              <div id="pepperDescription" class="col-sm-4" style="display:none;">
                  <div class="col-sm-12">
                      <div class="card bg-secondary">
                          <div class="card-body">
                            <div id="title_pepper" class="card-title drinksText"></div>
                            <div id="subTitle_pepper" class="card-subtitle drinksText"></div>
                            <div id="description_pepper" class="card-text drinksText"></div>  
                            <a href="http://www.coca-cola.co.uk/drinks/appletiser"  target="_blank" class="btn btn-primary btn-responisve">Visit Pepper.</a>                 
                          </div>
                      </div>
                  </div>
              </div> 
              
             </div> <!-- End row for model, info and buttons -->
           </div>
            

          <!-- Row to look at gallery -->
          <div id="interaction" class="row" style="display:none;">
                <!-- 3D image gallery -->
              <div class="col-sm-12">
                <div class="card text-left bg-secondary">
                    <div class="card-header"><!-- gallery-header">  this was making the button move when hovered over--> 
                      <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Gallery</a>
                        </li>
                    </div>
                    <div class="card-body">
                        <div class="card-title title_gallery drinksText"></div>
                        <div class="gallery" id="gallery"></div>
                        <div class="card-text description_gallery drinksText"></div>
                    </div>
                </div> 
              </div>
          </div> <!-- End row for the gallery -->

      </div> <!-- End 3D App SPA Contents -->
      



      <nav id="footerColor" class="navbar navbar-expand-sm footer">
          <div class="container-fluid">   
              <div class="navbar-text float-left copyright">
                  <p><span class="align-baseline">&copy 2021 Web 3D Applications | <a href="javascript:changeLook()">Restyle</a> | <a href="javascript:changeBack()">Reset</a> | <a href="../application/assets/x3d.zip" download>Download<span></span></a></span></p>
              </div>
              <div class="navbar-text float-right social">
                  <a href="https://www.facebook.com/cocacolaGB/?brand_redir=40796308305" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>
                  <a href="https://twitter.com/CocaCola?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
                  <a href="https://github.com/Zoratio" target="_blank"><i class="fab fa-github-square fa-2x"></i></a><!-- link this to my github -->
              </div>
          </div>
      </nav> 



      <!-- Contact modal -->
      <div class="modal fade" id="contactModal">
          <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Contact Details</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  <p>Name - Taylor Bromley</p>
                  <p>Email - tb352@sussex.ac.uk</p>
                  <p>University - Sussex University</p>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>

            </div>
          </div>
      </div>


      <!-- Contact modal -->
      <div class="modal fade" id="searchPage">
          <div class="modal-dialog">
            <div class="modal-content">
            
            
                <h1> Flickr Web Service</h1>
                <h2> Search on Flickr Feed</h2>
                <!-- Text input box -->
                <div class="textInput">
                  <input type="text" id="txt" />
                </div>
                
                <div class="btn">
                  <button onclick="loadImages()">Search</button>
                </div>

                <div class="box">
                  <p> Results returned from the flickr web service: </p>
                  <div id="images" ></div>
                </div>

                <script src="http://code.jquery.com/jquery-latest.js"></script>

                <script language="javascript">
                  function loadImages()
                  {
                      var txt = document.getElementById('txt').value;
                      // Create a URI for the Flickr web service API call
                      var urlFlickr = "http://api.flickr.com/services/feeds/photos_public.gne?jsoncallback=?";
                      $.getJSON(urlFlickr,
                        {
                          tags: txt,
                          tagmode:"all",
                          format: "json"
                        },
                        function(data) {
                          $.each(data.items, function(i,item){
                            $("<img/>").attr("src", item.media.m).appendTo("#images");
                            if ( i == 3 ) return false;
                          });
                        });
                  }
                  </script>

            </div>
          </div>
      </div>


      
      <!-- JavaScript -->
      <script src="../application/js/jquery-3.2.1.js" crossorigin="anonymous"></script>
      <script src="../application/js/popper.min.js" crossorigin="anonymous"></script>
      <script src="../application/js/bootstrap.min.js" crossorigin="anonymous"></script>
      <script src="../application/js/fontawesome-all.min.js"></script>
      <script src="../application/js/custom.js" crossorigin="anonymous"></script>
      <script src="../application/js/swap_restyle.js"></script>
      <script type='text/javascript' src='../application/js/x3dom-1.7.2/x3dom.js'></script>
      <script type="text/javascript" src="../application/js/gallery_generator.js"></script>
      <script src="../application/js/getJsonData.js"></script>
      <script src="../application/js/modelInteractions.js"></script>
      <script src="../application/js/jquery.fancybox.min.js"></script>
  </body>
</html>