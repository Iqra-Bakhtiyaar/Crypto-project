<?php
   include 'navigation.php';
   head("Litecoin");
   navigate ("Litecoin");
   ?>
    <link rel="stylesheet" type="text/css" href="style.css">

         <!-- Create a container for litecoin-->
         <div class= "container-fluid" id="litecoin" style="background-color: #e3f7f7; position:relative; color: black;">
            <div class="row">
               <div class="col-md-3" style="margin-top: 200px;">
                  <h1>Litecoin</h1>
               </div>
               <div class="col-md-5" style="margin-top: 200px;">
                  Like all other currencies, Litecoin is also a decentralized currency created in October 2011 by a former Google engineer Charlie Lee. The main purpose of making the currency was to make transaction time faster. As with Bitcoin transaction confirmation time is 10 minutes. The confirmation time for Litecoin is 2 ½ minutes making it four times faster than Bitcoin. Litecoin is referred as silver currency. It requires less computing power as compare to Bitcoin because of scrypt algorithm (a cryptographic algorithm). Litecoin can be used to buy services and goods. There is no fee for receiving payments and no chargebacks. Litecoin also uses blockchain ledger. There will be only 84 million Litecoins ever. As of 22 December 2017, 12:41pm, its current price is £183.09 which is in increase of almost £100 within 10 days 
                  <hr>
               </div>
               <div class="col-md-4" style="margin-top: 180px;">
                  <img src="https://media.coindesk.com/uploads/2017/06/litecoin-coins-e1497897282632.jpg" class="img-responsive" alt="litecoin" height="300px">
               </div>
            </div>
         </div>
         <!-- Include footer -->
         <?php
         footer ();
         ?>