<?php
   include 'navigation.php';
   head("Mining");
   navigate ("Mining");
   ?> 
<link rel="stylesheet" type="text/css" href="style.css">
<div class="container" style="background-color: #eff1f4;>
<div class="row">
   <div class= "col-md-9">
<h1> MINING </h1>
                  <b> Note: This mining section talks about bitcoin mining. </b>
                  <p> The main incentive for mining is to include a new block into the Blockchain. Miners from all around the world work to add new blocks into the Blockchain to ensure that Blockchain grow as new transactions are carried out. In the beginning, one could mine bitcoins using their laptop, however as more people started mining it became more difficult to mine due to bitcoin’s scarcity. If people could mine all the bitcoins, they would have finished bitcoins long time ago. Moreover, a certain gap is needed between the creation of each block. This time gap is different for different currencies. In bitcoin, the time limit is 10 minutes. Therefore, a difficulty level is set to restrict the block creation. This difficulty level fluctuates with the number of miners. The difficulty level increases when more people are mining and decreases when less people mine.
                     When a new block is ready to be added to the Blockchain, all the items of the block are first hashed. If the hash is smaller than the difficulty target, it is added to the Blockchain because if a hash is higher than the difficulty target people will not be able to solve it. Once a block is added to the Blockchain, everyone in the community accepts the new block.
                  </p>
                 However, this is not the case. In reality, a very lucky person will get a block like that. </br>
                     This is where nonce is needed. A nonce is a random bit string. </br>
                  <h4> Following are the steps of mining in a normal scenario </h4>
                  <ol type="1">
                     <li>  The hash of the new block is taken and appended with the nonce. </li>
                     <li> The newly generated string (in step 1) is hashed again. </li>
                     <li> This final hash is checked if it is less than the difficulty level. </li>
                     <li> If the answer to previous step is no, then a nonce is generated again and compared. The process is repeated until the answer is yes. </li>
                     <li>  The new block is generated and added to the Blockchain. </li>
                     <li>  The miners are rewarded with bitcoins. </li>
                  </ol>
                  Here the puzzle friendliness property is recalled. </br>
                  In bitcoin mining: </br>
                  X= hash of the block </br>
                  K= nonce </br>
                  Y= difficulty target</br>
               </div>
            </div>
            <?php
footer() 
?>