<!DOCTYPE html>
<html lang="en">
<head>

<?php
// including the CSS STYLES

include_once '../includes/login.inc.php';

// disabling right click

include_once '../includes/disableright.inc.php';

?>

</head>

<body>

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5"  style="border-bottom:solid 7px #444;border-top:solid 7px #ffa200;">
              <!-- <div class="brand-logo">
                <img src="../assets/images/logo.svg" alt="logo">
              </div> -->
              <h4>Soyez connectés</h4>

              <!-- <h6 class="font-weight-light">Sign in to continue.</h6> -->
              <form class="pt-2" method="POST" autocomplete="off" action="../users/grpMember">


                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Entrer votre Email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Entrez votre mot de passe">
                </div>
                <div class="mt-3">
                  <button type="submit" style="background-color: #444;" class="btn btn-block btn-lg font-weight-medium auth-form-btn"><span style="color:#ffa200">S'identifier</span></button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <!-- <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div> -->
                  <a href="#" class="auth-link text-black">Mot de passe oublié?</a>
                </div>
                <!-- <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="fab fa-facebook-f mr-2"></i>Connect using facebook
                  </button>
                </div> -->
                <div class="text-center mt-4 font-weight-light">
                Vous n'avez pas de compte? <a href="register.html" class="text-primary">Créer une</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- JS INCLUDES -->
  <?php

  include_once '../includes/loginjs.inc.php';

  ?>

  <!-- END OF JS INCLUDES -->
</body>

</html>
