<?php
   include 'navigation.php';
   head("Blockchain");
   navigate ("Blockchain");
   ?>
  <link rel="stylesheet" type="text/css" href="style.css">
            <!-- Create container for blockchain-->
            <div class="container-fluid" style= "background-color:#c3c5c9; color: black;">
               <div class= "row">
                  <div class="col-md-3 text-left" style="padding: 50px; margin-top: 130px">
                     <h1>An introduction to Blockchain</h1>
                  </div>
                  <div class="col-md-6 text-left" style="padding: 50px; margin-top: 130px">
                     <p> Blockchain is a distributed database or public ledger recording all the transactions on the network.
                        The idea of Blockchain is old but it came into practice with Bitcoin and all the new cryptocurrenices are based on this technology. It was revealed by Nakamoto in their paper ““Bitcoin: A Peer-to-Peer Electronic Cash System”. There are three core parts of Blockchain:
                     <h3> 1- Block </h3>
                     <p>A block is a list of transactions recorded over a specific period of time and this time period depends on the protocol of the cryptocurrency. Each currency has different time of adding a new block to its Blockchain. </p>
                     <div class="row">
                        <img src="images/block.png" class="img-thumbnail" alt="Block"  style= "width: 700px; margin: 30px 0 30px 0;">
                        <div class="caption">
                           <p> <a href="https://blockchain.info/block/000000000000000000002479d3be3563ddfab5c3e174d0e6d37ee726710290a3"> Visit Blockchain.info </a> </p>
                        </div>
                     </div>
                     <h3> 2- Chain </h3>
                     <p> A new block of transactions is added to the previous block and this is how a chain of blocks is created.  This is done by hashing. A mathematical algorithm maps data of any size into a fixed length size of bit string and this algorithm is created by hash function which will be discussed in detail in hashing function. This bit string then represents the data that was hashed. The most common cryptographic algorithm used in Blockchain is secure hash algorithm (SHA). The SHA 256 is an algorithm that maps data to a unique 256 bits (32 bytes) string. The time of adding a new block to previous block depends on a cryptocurrency protocol. All cryptocurrencies have their different protocols for running the Blockchain. </p>
                     <div class="row">
                        <img src="images/chain.png" class="img-thumbnail" alt="Chain"  style= "width: 700px; margin: 30px 0 30px 0;">
                        <div class="caption">
                           <p><a href= "https://blockchain.info/"> Visit blocks </a> </p>
                        </div>
                     </div>
                     <h3> 3- Network </h3>
                     <br>
                     Blockchain has a network of computers known as full nodes. These computers run a specific Blockchain algorithm to run and secure network. These nodes have a complete record of all the transactions ever made on the Blockchain. If you download the software of a particular cryptocurrency, your computer will also become a part of the network.
                     </p>
                     <div class="row">
                        <img src="images/network.jpg" class="img-thumbnail" alt="Network"  style= "width: 700px;">
                     </div>
                  </div>
               </div>
               <div class= "row">
                  <div class="col-md-3 text-left" style="padding: 50px;">
                     <h1> Types of blockchain </h1>
                  </div>
                  <div class="col-md-9 text-left" style="padding: 50px;">
                     <h2> There are three distinct types of Blockchains. </h2>
                     <p> 
                     <h3> 1- Public Blockchain: </h3>
                     Public blockhain are open source software and distributed widely. Anyone from public can participate in such Blockchains such as bitcoin. A native token runs these Blockchains. For example, in case of bitcoin Blockchain bitcoin currency is the native token.
                     <h3> 2- Permissioned Blockchain: </h3>
                     These Blockchain may or may not have open source code. Permissioned Blockchain controls the role of participants. These Blockchains are also largely distributed and run through a native token.
                     <h3> 3-Private Blockchains: </h3>
                     These Blockchains are for consortiums. Activities of users are strictly controlled in these Blockchains. The scale is smaller and limited to an organization. No token is used. These blockchains are used to share confidential information between trusted members.
                     </p>
                  </div>
               </div>
               <div class= "row">
                  <div class="col-md-3 text-left" style="padding: 50px;">
                     <h1> Why Blockchain is so important </h1>
                  </div>
                  <div class="col-md-9 text-left" style="padding: 50px;">
                     <hr>
                     <p> Blockchain is considered the missing layer of trust for the internet and the “fifth evolution” of computing because participants do not have to trust each other to make a transaction. <br>
                        Once a transaction is added to Blockchain it cannot be changed. It will stay on the ledger as long as Blockchain exists preventing deception. <br>
                        Blockchain is not restricted for making payments but can also be used for recording any kind of data online securely which is a crucial need in this era of technology when hackers and thieves invent new ways of deception and hacking. <br>
                        Everybody can see all the transactions but identity of the users is kept anonymous. <br>
                        It has not only changed the traditional financial system but also has introduced new technologies such as smart contracts and decentralized organizations which will be discussed in detail later. <br>
                        The most reliable website for seeing Blockchain blocks and transactions is <a href= "https://Blockchain.info/"> https://Blockchain.info/ </a> 
                     </p>
<p style="margin-top: 30px;"> <b> I found this book by Tiana Laurance very interesting and easy to comprehend. Anyone with an interest to get hands on Blockhain must read this book. </b>
                        <img src="images/blockchain-book.png" alt="Blockchain book by Tiana Laurance" class="img-responsive">
                     </p>
                  </div>
               </div>
            </div>
         </div>

         <!-- Include footer -->
         <?php
         footer ();
         ?>