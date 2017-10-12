<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shrink It!</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
      <script src="/jquery.js"></script>
      <script src="/js/bootstrap.js"></script>
</head>
<body>
    
        
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                   <div class="navbar-header">
                       <a class="navbar-brand" href="/index.html">Shrink It!</a>
                   </div>
                   <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Service</a></li>
                    <li><a href="#">EULA</a></li>
                    <li><a href="#">Premium</a></li>
                    
                </ul>
                
                <form class="navbar-form navbar-left">
                <div class="form-group">
                <input type="text" class="form-control" placeholder="Search...">
                 </div>
                 <button type="submit" class="btn btn-info">Search</button>
                </form>
                
                
                <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
            
        </div>
         </nav>
       <!--body--> 
       <div class="container-fluid"> 
       <div class="body" style="background:white;height=100%">
         <div class="centery">
           <div col-md-12>
           <div class="col-md-4" >
            <center>
              <p>?????</p>
              
              <?php
                if(isset($_SESSION['feedback'])){
                    echo "<p>{$_SESSION['feedback']}</p>";
                    unset($_SESSION['feedback']);
                    
                }
                ?>
              
               <form action="shorten.php" method="post">
                <div class="form-group">
                <input type="url" name="url" class="form-control" placeholder="https://example.com/loongURL..." autocomplete="off">
                 </div>
                 <input type="submit" value="Shorten" class="btn btn-info">
                </form>
                </center>
                </div>
          </div>
           </div> 
           </div> 
       </div>
       <!--body-->
       
    <!--Footer-->
         <div class="clearfix"></div>
         <footer>
         <nav class="nav navbar-inverse navbar-fixed-bottom">
             <div class="container-fluid">
                <div class="col-md-12">
                <div class="col-md-5">
                 <ul class="nav navbar-nav">
                     <li><a href="#">Pivacy</a></li>
                     <li><a href="#">Tearms &amp; Conditions</a></li>
                     <li><a href="#">EULA</a></li>
                    </ul>
                    </div>
                    <div class="col-md-4">
                    <div class="foo-brand" style="padding-top:10px;color:silver;margin-right:150px;">Made by &copy; Salman 2016 - 2017</div>
                     </div>
                     <div class="col-md-3">
             <div class="pull-right "style="margin-bottom:10px;margin-top:10px;padding-top:0px;">
                 <i class="fa fa-facebook fa-2x" style="margin-right:5px; aria-hidden="true"></i>
                 <i class="fa fa-twitter fa-2x" style="margin-right:5px;" aria-hidden="true"></i>
                 <i class="fa fa-youtube-play fa-2x"style="margin-right:5px; aria-hidden="true"></i>
                <a href="http://instagram.com/s4salman_"><i class="fa fa-instagram fa-2x" style="margin-right:5px; aria-hidden="true"></i></a>
             </div>
             </div>
             </div>
        </div>
         </nav>
         </footer>
         <!--Footer-->
</body>
</html>