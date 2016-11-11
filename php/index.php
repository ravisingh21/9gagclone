<?php
include('includes/config.php');
include('includes/header.php');
include('includes/nav.php');
$imageData = [];
?>
<div class="container">

  <!-- content-box -->
  <div class="col-lg-8 content-container">
        <?php foreach ($imageData as $data) {  ?>
         <div class="row">
            <div class="col-lg-8 col-lg-offset-2 content">
              <h4><?php echo $data['title']; ?></h4>
              <img src="<?php echo $data['img']; ?>">
            </div>
          </div>
          <?php }?>
   </div>


 <!--ads--->
  <div class="col-lg-4 ads-container">
    <div class="col-lg-12 content"><a class="ad-image" href=""><img src="images/pexels-photo-26549.jpg"></a></div>
  </div>
  <!--ads End--->

</div>

<?php
include('includes/footer.php');
?>
