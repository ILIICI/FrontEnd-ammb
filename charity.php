<!DOCTYPE html>
<html lang="en">
  <?php include_once 'head.php';?>
<body>

<?php include_once 'navigation_bar.php';?>
  
<div class="container-fluid text-center">    
  <div class="col-sm-10 text-center content-pusher" >
	  <div class="col-lg-12" >

        <!-- Title -->
        <h1 class="mt-4" style="text-align: center;font-weight:700;color:#1a4f8a;">Caritate</h1>

        <hr style="clear: both;">

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="img/char.jpg" style="width: 100%;height: auto;" alt="">

        <hr>

        <!-- Post Content -->
        <p class="lead text-left">Donațiile diasporei de aici pot face o schimbare acasă. De aceea proiectele noastre dezvoltă parteneriate cu ONG-uri din R.Moldova, iar donațiile ajung la oamenii care au cu adevărat nevoie. Comunicarea transparentă a datelor este regula de bază pentru dezvoltarea de noi parteneriate.</p>

        <p class="lead text-left">MAD-Aid și The Moldova Project sunt unii dintre beneficiarii proiectelor noastre.</p>

        <p class="lead text-left">Evenimentele prin care se colectează donațiile sunt ‘Colindăm și Donăm’ și ‘Martishop’. Ambele evenimente au la bază promovarea culturii naționale prin strângerea de fonduri.</p>

				<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your share button code -->
<div class="fb-share-button" 
data-href="https://ammb.co.uk/charity.php" 
data-layout="button_count" style="float:left;">
</div>

     </div>
	 
  </div>
  
<?php include_once 'sidenav.php';?>

</div>
<?php include_once 'footer.php';?>

</body>
</html>
