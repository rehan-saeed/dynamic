<html>
    <head>
        <!-- <link rel="stylesheet" href="style/css/bootstrap.min.css">
        

        <script src="style/js/bootstrap.min.js"></script> -->

        <!-- <link rel="stylesheet" href="bootstrap3/css/bootstrap.min.css"> -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <style>
/* 
            .cont1{
                background-color: red;
            }

            

            .cont2{
                background-color: yellow;
            } */
            .container{
                    background-color: rgb(224, 223, 223);
            }
            .caption{

                text-align: center;
            }

            .transition{
                    transition: transform 1s;
                    
                
                    
            }
            .transition:hover{
                    
                    transform: scale(1.5);
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
                    z-index: 1;
                    position: relative;
                    
                    
                    
                    
            }

            a:hover{
                    text-decoration: none;
            }
            body{
                    background-color: rgba(0, 0, 0, 0.644)
            }


            .spinner {
  width: 40px;
  height: 40px;
  background-color: whitesmoke;

  position: absolute;
top: 48%;
left: 48%;
  -webkit-animation: sk-rotateplane 1.2s infinite ease-in-out;
  animation: sk-rotateplane 1.2s infinite ease-in-out;
}

@-webkit-keyframes sk-rotateplane {
  0% { -webkit-transform: perspective(120px) }
  50% { -webkit-transform: perspective(120px) rotateY(180deg) }
  100% { -webkit-transform: perspective(120px) rotateY(180deg)  rotateX(180deg) }
}

@keyframes sk-rotateplane {
  0% { 
    transform: perspective(120px) rotateX(0deg) rotateY(0deg);
    -webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg) 
  } 50% { 
    transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
    -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg) 
  } 100% { 
    transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
    -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
  }
}
.spinner-wrapper {
position: fixed;
top: 0;
left: 0;
right: 0;
bottom: 0;
background-color: orangered;
z-index: 999999;

}
            


            

        </style>
    </head>

    <body>
                <div class="spinner-wrapper">
                                <div class="spinner"></div>

                                              
                                </div>

        

        <div class="container cont1">

                <div class="row justify-content-center" style="background-color:rgba(0, 0, 0, 0.644); color:whitesmoke; ">
                        <h2>Responsive Image Gallery  </h2> 
                        
                </div>
                <div class="row justify-content-center" style="background-color:rgba(0, 0, 0, 0.644); color: whitesmoke;  ">
                                <h4 style="position: relative; right: 85px;">Gallery With Captions</h4>
                                
                        </div>
                
                        <!-- <div class="row">
                                <div class="col-md-12"><h1>Gallery</h1></div>
                        </div> -->
                        

                
            <div class="row ">
                <div class="col-md-4 col1">
                        
                    <div class="thumbnail transition  ">

                        <a href="img/7.jpg" target="_blank" >
                            
                                        <img src="img/7.jpg" class="img-fluid" class="rounded ">
                            <div class="caption">
                                    <h2>Lorem Ipsum</h2>
                                    <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
    

                            </div>

                        </a>
                        </div>

                        
                    
                </div>
                <div class="col-md-4 col2">
                        <div class="thumbnail transition">

                                <a href="img/8.jpg"  target="_blank">
                                <img src="img/8.jpg" class="img-fluid" class="rounded">
    
                                <div class="caption">
                                        <h2>Lorem Ipsum</h2>
                                        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
        
    
                                </div>

                        </a>
    
                            
                        </div>
                    </div>

                    <div class="col-md-4 col3">
                            <div class="thumbnail transition">

                                <a href="img/1.jpg" target="_blank">
                                    <img src="img/1.jpg" class="img-fluid" class="rounded">
        
                                    <div class="caption">
                                            <h2>Lorem Ipsum</h2>
                                            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
            
        
                                    </div>

                                </a>
        
                                
                            </div>
                    </div>
            </div>




                <div class="row">
                    <div class="col-md-4 col4">
                        <div class="thumbnail transition">

                                <a href="img/6.jpg" target="_blank">
                                <img src="img/6.jpg" class="img-fluid" class="rounded">
    
                                <div class="caption">
                                        <h2>Lorem Ipsum</h2>
                                        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
        
    
                                </div>

                        </a>
    
                            
                        </div>
                    </div>
                    <div class="col-md-4 col5">
                            <div class="thumbnail transition">

                                <a href="img/5.jpg" target="_blank">
                                    <img src="img/5.jpg" class="img-fluid" class="rounded">
        
                                    <div class="caption">
                                            <h2>Lorem Ipsum</h2>
                                            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
            
        
                                    </div>

                                </a>
        
                                
                            </div>
                        </div>
    
                        <div class="col-md-4 col6">
                                <div class="thumbnail transition">

                                        <a href="img/3.jpg" target="_blank">
                                        <img src="img/3.jpg" class="img-fluid" class="rounded">
            
                                        <div class="caption">
                                                <h2>Lorem Ipsum</h2>
                                                <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                
            
                                        </div>

                                </a>
            
                                    
                                </div>
                        </div>
                </div>
    
    
            </div>

            <!-- <script>
                $(document).ready(function() {
                //Preloader
                $(window).on("load", function() {
                preloaderFadeOutTime = 500;
                function hidePreloader() {
                var preloader = $('.spinner-wrapper');
                preloader.fadeOut(preloaderFadeOutTime);
                }
                hidePreloader();
                });
                });
                </script> -->

                <script>

(function($){
                        'use strict';
                          $(window).on('load', function () {
                              if ($(".spinner-wrapper").length > 0)
                              {
                                  $(".spinner-wrapper").fadeOut("slow");
                              }
                          });
                      })(jQuery)
                
                </script>
                


        
    </body>
</html>