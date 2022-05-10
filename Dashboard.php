<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <?php 
  include 'inc/header.php'; ?>
  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

     <?php include 'inc/admin_navbar.php'; ?>


       <section  style="padding-bottom: 0px; margin-top: -40px">
      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-100 py-5">

        <div class="container-lg">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5 text-center mb-1">
              <h2>Administrator Dashboard</h2>
              <p>Welcome admin, you are entitled to manage Inmates,cells and check for notifications .</p>
            </div>
          </div>
          <div class="row justify-content-center">
            
            <div class="col-md-4 pt-2 px-md-2 px-lg-3">
              <div class="card h-100">
                <div class="card-body d-flex flex-column justify-content-around mx-auto">
                  <div class="text-center pt-5"><img class="img-fluid" src="assets/img/icons/pricing.png" alt="" />
                    
                   
                  </div>
                 
                  <br>
                 <!-- <a class="btn btn-danger" href="notifications.php" name="btn_notify" type="submit">Notifications</a>-->
                 <a type="submit" class="btn btn-danger btn-block mb-4" name="btn_notify" href="notifications.php" >Notify Me</a>
                </div>
              </div>
            </div>
           
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
   <?php include 'inc/footer.php'; ?>
  </body>

</html>