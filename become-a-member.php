<!DOCTYPE html>
<html lang="en">
  <?php include_once 'head.php';?>
<body>

<?php include_once 'navigation_bar.php';?>
  
<div class="container-fluid text-center ">    
  <div class="col-sm-10 text-center content-pusher">

  <div class="col-sm-12 bemember" >
      <div class="col-sm-6 bemember_left">
        <form class="was-validated becomeamember" >
          <label for="validationTooltip01">Vreau să devin membru AMMB</label>
          <div class="form-row">
              <div class="form-group line col-sm-12">
                  <input type="text" class="form-control is-invalid" id="inputName" placeholder="Nume">
              </div>
              <div class="form-group line col-sm-12">
                  <input type="text" class="form-control" id="inputSurname" placeholder="Prenume">
              </div>
              <div class="form-group line col-sm-12">
              <input type="email" class="form-control" id="inputEmail" placeholder="Email">
              </div>
              <div class="form-group line col-sm-12">
                  <input type="text" class="form-control" id="inputPhone" placeholder="Telefon">
              </div>
          </div>
          <div class="form-row">
              <div class="col-sm-4 line">
                  <label for="validationTooltip01">Atașează CV-ul</label>
              </div>
              <div class="col-sm-8">
                  <div class="custom-file line">
                  <input class="form-control form-control-sm" id="formFileSm" type="file" />                  </div>
              </div>
            </div>

            <div class="form-row ">
                <div class="form-group  line col-sm-12">
                  <button type="submit" class="btn btn-primary btn-lg">Trimite cererea</button>
              </div>
            </div>   
      </form>
      </div>
          
      <div class="col-sm-6 bemember_right">
        
<img
sizes="(max-width: 1335px) 100vw, 1335px"
srcset="
img/img_member_tuvxdo_c_scale,w_200.jpg 200w,
img/img_member_tuvxdo_c_scale,w_394.jpg 394w,
img/img_member_tuvxdo_c_scale,w_538.jpg 538w,
img/img_member_tuvxdo_c_scale,w_680.jpg 680w,
img/img_member_tuvxdo_c_scale,w_794.jpg 794w,
img/img_member_tuvxdo_c_scale,w_877.jpg 877w,
img/img_member_tuvxdo_c_scale,w_983.jpg 983w,
img/img_member_tuvxdo_c_scale,w_1084.jpg 1084w,
img/img_member_tuvxdo_c_scale,w_1175.jpg 1175w,
img/img_member_tuvxdo_c_scale,w_1283.jpg 1283w,
img/img_member_tuvxdo_c_scale,w_1335.jpg 1335w"
src="img/img_member_tuvxdo_c_scale,w_1335.jpg"
alt="">

      </div>
    </div>

  </div>
  <?php include_once 'sidenav.php';?>
  </div>

</div>
<?php include_once 'footer.php';?>


</body>
</html>
