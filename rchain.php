<?php
   include 'navigation.php';
   head("RChain");
   navigate ("RChain");
   ?>
    <link rel="stylesheet" type="text/css" href="style.css">
 <!-- Create container for RChain -->
         <div class="container-fluid" id="rchain" style="background-color: white;color:black;">
            <div class="row">
               <div class="col-md-3" style="margin-top: 200px;">
                  <h1> A brief introduction to RChain </h1>
               </div>
               <div class="col-md-6" style="margin-top: 200px;">
                  <h2> MOTIVATION FOR DEVELOPMENT </h2>
                  <p> Providing the benefits of decentralization, the use of Blockhain technology is increasing which causes an issue of scalability as the current Blockchains cannot handle the volume of transactions. Modern commerce requires a Blockhain which can handle tens of thousands of transactions per second. However, only 10 transactions per second can be handled by Bitcoin and Ethereum. The R-chain Blockhain ensures scalability which is a missing feature in other Blockchains. It is expected that R-chain will be able to handle 40,000 transactions per second making it equal to visa. The data of users will be encrypted by a private key which is kept off-chain. This data will be stored on RChain’s decentralized storage infrastructure. </p>
                  There are some other issues except scalability:
                  <ul>
                     <li> Restrictive node requirements </li>
                     <li> Effectiveness of Blockhain protocol </li>
                     <li> Provable correctness of smart contracts </li>
                  </ul>
                  RChain has following features to cope with the issues stated above
                  <ul>
                     <li>  Rho Calculus (a mathematical model) </li>
                     <li> Rholang (a strongly typed smart contract programming language). This language is difficult to learn even for expert programmers.</li>
                     <p> This language can be learnt by going to <a href="https://developer.rchain.coop/"> RChain official website </a> </p>
                     <img src= images/Rholang.png   alt= "Rholang"  class="img-responsive"  style= "margin: 30px 0px 30px 0px" > </br>
                     <li>RhoVM (a concurrent virtual machine)</li>
                     <li> Correct-by-construction software engineering.</li>
                     <li> Smart contracts are concurrent and verified by formal verification.</li>
                     <li> RChain uses proof of stake protocol.</li>
                     <li>RChain has compositional Blockchains meaning a single node supports more than one Blockchains. Nodes can be configured to run public and/or private Blockchains. </li>
                     <li>The features stated above provide accuracy of the system building trustworthiness of information stored safely online.</li>
                  </ul>
                  <hr>
                  <h4> AN RCHAIN NODE </h4>
                  A single node of RChain will support:
                  <ul>
                     <li>  More than one Blockchains (Public and/or private Blockchains).</li>
                     <li>  More than one application tokens. The first token of RChain will be named REV.</li>
                     <li>  Proof-of-Stake protocol.</li>
                     <li> Leased storage</li>
                  </ul>
                  <hr>
                  <h4> HOW SCALABILITY IS ACHIEVED </h4>
                  A node initiates a new instance of a RhoVM as platform is grown. This is how the excessive load can be managed without any performance issues.
                  <h4> PERFORMANCE </h4>
                  Due to light weight RhoVM, multiple instances can run on a single node with the ability of multithreading. These concurrency features provide better performance.
                  <hr>
               </div>
               <div class="col-md-3" style="margin-top: 200px;">
                  <img src= images/rchain-logo.png   alt= "RChain Logo"  class="img-responsive"  style= "height: 220px; margin: 30px 0px 30px 0px" > </br>
               </div>
            </div>
         </div>
         <!-- Include footer -->
         <?php
         footer ();
         ?>