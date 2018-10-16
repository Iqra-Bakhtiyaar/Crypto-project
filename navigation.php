<?php


function head ($title) {
echo '<html lang="en">';
 echo  '<head>';
  echo    '<link rel="stylesheet" type="text/css" href="style.css">';
    echo  '<title>' .$title. '</title>';
    echo  '<meta charset="utf-8">';
    echo    '<meta name="viewport" content="width=device-width, initial-scale=1">';
    echo    '<meta property="fb:admins" content="{https://www.facebook.com/iqra.rahmani}"/>';
    echo    '<!-- insert libraries for bootstrap -->';
      echo  '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">';
     echo   '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>';
       echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>';
       echo '</head>';
          echo  '<body data-spy="scroll" data-target=".navbar" data-offset="50">';

}
function navigate ($pageName) {
     echo   '<!-- Create navigation bar -->';
      echo  '<nav class="navbar navbar-inverse navbar-fixed-top">';
        echo   '<div class="container-fluid">';
          echo    '<div class="navbar-header">';
              echo   '<!-- Create toggle button for navigation abar for small screens -->';
              echo   '<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">';
              echo   '<span class="icon-bar"></span>';
              echo   '<span class="icon-bar"></span>';
               echo  '<span class="icon-bar"></span> ';
               echo  '</button>';
              echo   '<a class="navbar-brand"><img src="images/logo.jpg" style="max-width:170px; margin-top:-50px; max-height: 85px;"></a>';
           echo   '</div>';
          
          echo    '<div class="collapse navbar-collapse" id="myNavbar">';
            echo    ' <ul class="nav navbar-nav navbar-right">';
          
            // create arrays for navigate between pages before login
   $fileName= array( "Home", "Blockchain", "Bitcoin", "Hashing", "Ethereum", "RChain", "Cardano", "Litecoin");
   $pagesAddress= array ("index.php" , "blockchain.php", "bitcoin.php", "hashingFunction.php", "ethereum.php", "rchain.php", "cardano.php", "litecoin.php" );
   
   $x=0;
   
   while ($x < count($fileName)) {
   echo '<li> <a ';
   if ($fileName[$x] == $pageName) {
   echo 'class="selected"';
   }
   echo 'href="'. $pagesAddress[$x].'">'. $fileName[$x].'</a> </li>';
   $x++;
   }
             echo   ' </ul>';
          echo    '</div>';
        echo  ' </div>';
      echo  '</nav>';
  }

function footer() {
  echo  '<!-- Create footer -->';
    echo     '<div class="container text-center">';
       echo   '<div class="row" style="font-size: 15px;">';
     

         echo    '<h3 class="footer" >About Us</h3>';
         echo    '<br>';
          echo   '<div class="col-md-4">';
             echo   '<center>';
              echo     '<img src="images/my.jpg" class="img-circle" alt="user" style="width:70px;">';
                echo   '<br>';
               echo    '<h4> Author </h4>';
               echo    '<p class="footertext">Iqra Bakhtiyaar<br>';
             echo      '<p> Contact me </p>';
               echo    '<p> IB279@live.mdx.ac.uk </p>';
              echo  '</center>';
           echo  '</div>';
           echo  '<div class="col-md-4">';
               echo '<center>';
              echo     '<img src="images/supervisor.jpg" class="img-circle" alt="Supervisor" style="length: 80px; width:80px;">';
               echo    '<br>';
               echo    '<h4> Supervisor</h4>';
              echo     '<p class="footertext">Prof. Raja Nagarajan<br>';
           echo    '</center>';
         echo    '</div>';
       echo   '</div>';
  echo  '</body>';
echo '</html>';
}