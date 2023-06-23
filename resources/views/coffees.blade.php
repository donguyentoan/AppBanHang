<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>About</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   </head>
   <body>
   <div class="header_section">
        
        @include('header')
           <!-- banner section end -->
  
        @include('banner')
        </div>
      <!-- header section end -->
      <!-- coffee section start -->
      <div class="coffee_section layout_padding">
         <div class="container">
            <div class="row">
               <h1 class="coffee_taital">OUR Coffee OFFER</h1>
               <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
            <form class="search d-flex"  action="/coffees">

            <input class="searchpro" type="text" name="key" id="">
           <input class="button" type="submit" value="Search">

            </form>
               
                   
            </div>
         </div>
         <div class="coffee_section_2">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               
               <div class="carousel-item active">
                  <div class="container-fluid">

                 
                     <div class="row">

                     @foreach($products as $sp)
                        <div class="col-lg-3 col-md-6 pt-5 pb-5">
                           <div class="coffee_img"><img src="images/img-2.png"></div>
                           <h3 class="types_text">{{$sp->name}}</h3>
                           <p class="looking_text">looking at its layout. The point of</p>
                           <div class="read_bt"><a href="{{ route('products.show', $sp->id) }}">Read More</a></div>
                        </div>
                        @endforeach
                        
                     </div>
                
                  </div>
               </div>
             
              
               
              
            </div>

          
         
            
          
            <div class="pagination">
 

  
  


{{ $products->links() }}
  

  


  
  
 
</div>
            </div>
         </div>
      </div>
      <!-- coffee section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="address_text">Address</h1>
                  <p class="footer_text">here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use </p>
                  <div class="location_text">
                     <ul>
                        <li>
                           <a href="#">
                           <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">+01 1234567890</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10">demo@gmail.com</span>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="form-group">
                     <textarea class="update_mail" placeholder="Your Email" rows="5" id="comment" name="Your Email"></textarea>
                     <div class="subscribe_bt"><a href="#"><img src="images/teligram-icon.png"></a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-sm-12">
                  <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free Html Templates</a></p>
               </div>
               <div class="col-lg-6 col-sm-12">
                  <div class="footer_social_icon">
                     <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>