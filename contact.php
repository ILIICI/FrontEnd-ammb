<!DOCTYPE html>
<html lang="en">
<?php include_once 'head.php';?>
<body>

<?php include_once 'navigation_bar.php';?>
  
<div class="container-fluid text-center">    
  <div class="col-sm-10 text-center content-pusher">
    <div class="row">
    <div class="col-md-4">
                 <a class="px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-map-marker"></i></a>
                 <p>London<br> UK</p>
                 
             </div>

             <div class="col-md-4">
                 <a class="px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-phone"></i></a>
                 <p>Lun-Vin, 9:00-17:00</p>
             </div>

             <div class="col-md-4">
                 <a class="px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-envelope"></i></a>
                 <p>ammbsoc@gmail.com </p>
             </div>
         </div>
        <div class="col-lg-2 mb-4">

        </div>
        <div class="col-lg-8 mb-4">
        <div class="card border-primary rounded-0">

<div class="card-header p-0">
    <div class="bg-primary text-white text-center py-2">
        <h3><i class="fa fa-envelope"></i> Contactează-ne:</h3>
    </div>
</div>
<div class="card-body p-3">

    <!--Body-->
    <div class="form-group" >
	<form method="POST" name="contactform" action="contact-form-handler.php"> 
	<label>Nume Prenume</label>
        <div class="input-group">
            <div class="input-group-addon bg-light"><i class="fa fa-user text-primary"></i></div>
            <input type="text" name="fullname" class="form-control" placeholder="Nume Prenume">
        </div>
		
		<label>Email</label>
        <div class="input-group mb-2 mb-sm-0">
            <div class="input-group-addon bg-light"><i class="fa fa-envelope text-primary"></i></div>
            <input type="text" name="email" class="form-control" placeholder="Email Dmvs">
        </div>
		
		<label>Tema</label>
        <div class="input-group mb-2 mb-sm-0">
            <div class="input-group-addon bg-light"><i class="fa fa-tag prefix text-primary"></i></div>
            <input type="text" name="theme" class="form-control" placeholder="Tematica">
        </div>
		
		<label>Mesaj</label>
        <div class="input-group mb-2 mb-sm-0">
            <div class="input-group-addon bg-light"><i class="fa fa-pencil text-primary"></i></div>
            <textarea type="text" name="message" class="form-control"></textarea>
        </div>
		
		<div class="text-center">
			<button type="submit" value="Trimite" class="btn btn-primary btn-block rounded-0 py-2">Trimite</button>
		</div>
	</form>
        
    </div>
	<script language="JavaScript">
	// Code for validating the form
	// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
	// for details
	var frmvalidator  = new Validator("contactform");
	frmvalidator.addValidation("name","req","Please provide your name"); 
	frmvalidator.addValidation("email","req","Please provide your email"); 
	frmvalidator.addValidation("email","email","Please enter a valid email address"); 
	</script>



</div>

</div>
<!--Form with header-->
        </div>
        <div class="col-lg-2 mb-4">

        </div>
    </div>

  <?php include_once 'sidenav.php';?>
  </div>

</div>
<?php include_once 'footer.php';?>

</body>
</html>
