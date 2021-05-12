<!DOCTYPE html>
<html lang="en">
  <?php include_once 'head.php';?>
<body>

<?php include_once 'navigation_bar.php';?>
  
<div class="container-fluid text-center">    
  <div class="col-sm-10 text-left content-pusher">
  <br>
	<div class="row">
		<div class="col-sm">
			<div class="styleNewsArticle">
				<div class="dateNews">
					<p>Data: 15 Martie 2021</p>
				</div>
				<div class="themeNews">
					<p>Asociaţia Moldovenilor din Marea Britanie (AMMB) lanseazǎ website-ul official pentru a fi mai aproape de public.</p>
				</div>
				<div class="imageNews">
					<img src="img/launch.png">
				</div>
				<div class="textNews">
					<p>Aici puteţi gasi:</p>
					<ul>
					<li>Proiectele la care sunt implicaţi membrii AMMB </li>
					<li>Cele mai importante noutǎţi ale comunitǎţii de moldoveni </li>
					<li>Cum sǎ devii membru AMMB. Daca esti student, alaturǎ-te AMMB Students pentru o integrare mai ușoarǎ în mediul de studii superioare. </li>
					<li>Urmarește-ne pe reţelele de socializare Facebook, YouTube, Instagram. Poţi susţine și tu proiectele noastre devenind Patreon AMMB.</li>
					</ul>
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
data-href="https://ammb.co.uk/post1.php" 
data-layout="button_count" style="text-align:left;">
</div>
				</div>

			</div>
		</div>
	</div>
  </div>
<?php include_once 'sidenav.php';?>
</div>
</div>
<?php include_once 'footer.php';?>

</body>
</html>
