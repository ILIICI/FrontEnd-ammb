<!DOCTYPE html>
<html lang="en">
  <?php include_once 'head.php';?>
<body>

<?php include_once 'navigation_bar.php';?>
  
<div class="container-fluid text-center">    
  <div class="col-sm-10 text-center content-pusher" >
  <div class="col-lg-12" >

<!-- Title -->
<h1 class="mt-4" style="text-align: center;font-weight:700;color:#1a4f8a;">Dezvoltarea profesională</h1>

<hr style="clear: both;">

<!-- Preview Image -->
<img class="img-fluid rounded" src="img/buss.jpg" style="width: 100%;height: auto;"alt="">

<hr>

<!-- Post Content -->
<p class="lead text-left">Dezvoltarea profesională este un proces complex, iar dobandirea de noi cunostințe și abilități poate fi dificilă petru cei mutați recent în Marea Britanie. AMMB încearcă să contribuie prin implementarea workshopurilor, discuțiilor panel și împărtășirea de experiență a oamenilor de success din UK, ceea ce permite schimbarea, informarea și creșterea capabilităților profesionale.</p>

</div>
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
data-href="https://ammb.co.uk/devprof.php" 
data-layout="button_count" style="float:left;">
</div>
  </div>
<?php include_once 'sidenav.php';?>
</div>

<?php include_once 'footer.php';?>

</body>
</html>
