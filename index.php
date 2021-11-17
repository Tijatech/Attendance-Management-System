<?php 
require("php_lib/config.php");


require_once("./components/blankHeader.php");
?>
<div class="p-5">
  <div class="container">
    <div class="row"> 
      <div class="col-12 col-md-6">
        <img src="https://i.ibb.co/vmmRcCr/Screenshot-2021-11-17-14-11-03.png" />
      </div>
      <div class="col-12 col-md-6">
        <h2 class="display-4">Convert Your Data To Information</h2>
        <div> 
            4Anet converts your attendance raw data into a more interpreted information which can be used to make decisions. 
            Make decision faster with the best attendance management system. 
        </div>
        <div class="pt-5">
            <a style="border-radius:50px;" class="btn btn-dark btn-lg btn-outline-white" href="<?= $_SESSION["authenticated"] ? 'dashboard.php' : 'login.php'?>">Convert Now</a>
        </div>
      </div>
    </div>
  </div>
</div>


<?php  require_once("./components/blankFooter.php"); ?>