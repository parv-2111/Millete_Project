<!DOCTYPE html>
<html lang="zxx">
<?php
  session_start();
?>
<?php
  include("inc/style.php")
?>

<body>

<!--wrapper start-->
<div class="wrapper">
  
  

    <!--== Start Login Area Wrapper ==-->
    <section class="account-login-area">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-7 col-xl-6">
            <div class="login-register-form-wrap register-form-wrap">
              <div class="login-register-form">
                <div class="form-title">
                  <h4 class="title">Login Plz</h4>
                </div>
                
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="candidate-tab" data-bs-toggle="pill" data-bs-target="#candidate" type="button" role="tab" aria-controls="candidate" aria-selected="true"><i class="icofont-businessman"></i>Student</button>
                  </li>
                </ul>
            
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="candidate" role="tabpanel" aria-labelledby="candidate-tab">

                  
                <form action="#" method="post">
                  <div class="row">
                    <div class="col-12">
                    
                      <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email">
                      </div>
                    </div>
                    <div class="col-12">
                          <div class="form-group">
                            <input class="form-control" type="tel" name="mno" placeholder="Contact Number">
                    </div>
                    
                    <div class="col-12">                                                                                                                                                
                      <div class="form-group">                        
                        <button type="submit" class="btn-theme">LOG IN</button>                                                                                                                                    
                      </div>
                    </div>
                  </div>
                </form>
                <div class="login-register-form-info">
                  <p>Don't you have an account? <a href="stud_register.php">Register</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Login Area Wrapper ==-->
  </main>

  

<!--=======================Javascript============================-->

<?php
  include("inc/script.php")
?>
</body>

</html>