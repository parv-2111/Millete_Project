
<!DOCTYPE html>
<?php
  session_start();
?>  
<html lang="zxx">

<?php
        include("inc/style.php");
?>

<body>


  
  <main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Login Area Wrapper ==-->
    <section class="account-login-area">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 col-lg-7 col-xl-6">
            <div class="login-register-form-wrap register-form-wrap">
              <div class="login-register-form">
                <div class="form-title">
                  <h4 class="title">Millet Festival</h4>
                </div>
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="candidate-tab" data-bs-toggle="pill" data-bs-target="#candidate" type="button" role="tab" aria-controls="candidate" aria-selected="true"><i class="icofont-businessman"></i>Visitor</button>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="candidate" role="tabpanel" aria-labelledby="candidate-tab">


                    
                  <form action="#" method="Post">
                      <div class="row">
                        <div class="col-12">
                          <div class="form-group">
                            <input class="form-control" type="name" name="cnm" placeholder="Full Name">
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Email">
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <input class="form-control" type="tel" name="mno" placeholder="Contact Number">
                          </div>
                       </div>
                        <div class="col-12">
                          <div class="form-group">
                              <select class="form-control" name="visit" required>
                                <option value="" disabled selected>Visit As...</option>
                                <option value="Parent">Parents</option>
                                <option value="Guest">Faculty</option>
                                <option value="Guest">Guest</option>
                              </select>
                          </div>
                        </div>
                       
                        
                        <div class="col-12">
                          <div class="form-group">
                            <button type="submit" class="btn-theme">Register Now</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="tab-pane fade" id="employer" role="tabpanel" aria-labelledby="employer-tab">
                    </form>
                  </div>
                </div>
                <div class="login-register-form-info">
                  <p>Already have an account? <a href="visitor_login.php">Login</a></p>
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
        include("inc/script.php");
?>


</body>

</html>