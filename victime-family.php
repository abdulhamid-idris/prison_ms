<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <?php 
  session_start();
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
               <div class="card">
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <h4 class="card-title">Add Victime Family Details</h4>
                                    <div class="form-group row">
                                        <label for="nin"
                                            class="col-sm-3 text-end control-label col-form-label">Relative NIN</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="family_nin" name="family_nin" 
                                                placeholder="Victime NIN Here">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="inmate_nin"
                                            class="col-sm-3 text-end control-label col-form-label">Inmate NIN</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="inmate_nin" name="Inmate_nin" 
                                                placeholder="Inmate NIN Here">
                                        </div>
                                    </div>
                                   
                                   <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">Full Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" name="fname" 
                                                placeholder="Full Name Here">
                                        </div>
                                    </div>
                                       <div class="form-group row">
                                        <label for="nationality" class="col-sm-3 text-end control-label col-form-label">Nationality</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nationality" name="nationality" 
                                                placeholder="Nationality Name Here">
                                        </div>
                                    </div>
                                       <div class="form-group row">
                                        <label for="state_origin" class="col-sm-3 text-end control-label col-form-label">State of Origin</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="state_origin" name="state_origin" 
                                                placeholder="State of Origin Name Here">
                                        </div>
                                    </div>
                                       <div class="form-group row">
                                        <label for="status"
                                            class="col-sm-3 text-end control-label col-form-label">Marital Status</label>
                                        <div class="col-sm-9">
                                           <select class="select2 form-select shadow-none"
                                            style="width: 100%; height:36px;" id="status" name="status">
                                            <option>Select</option>
                                            <optgroup label="Select Marital Status">
                                                <option value="single">Sigle</option>
                                                <option value="married">Married</option>
                                                <option value="devorce">Devorce</option>
                                            </optgroup>
                                          </select>
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="status"
                                            class="col-sm-3 text-end control-label col-form-label">Gender</label>
                                        <div class="col-sm-9">
                                           <select class="select2 form-select shadow-none"
                                            style="width: 100%; height:36px;" id="gender" name="gender">
                                            <option>Select</option>
                                            <optgroup label="Select Gender">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </optgroup>
                                          </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone"
                                            class="col-sm-3 text-end control-label col-form-label">Phone</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="phone" name="phone" 
                                                placeholder="Phone number Here">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="dob"
                                            class="col-sm-3 text-end control-label col-form-label">Date of Birth</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="dob" name="dob" 
                                                placeholder="Date of Birth Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="address"
                                            class="col-sm-3 text-end control-label col-form-label">Contact Addess</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="address" name="address"></textarea>
                                        </div>
                                    </div>
                                   <div class="form-group row">
                                        <label for="relationship"
                                            class="col-sm-3 text-end control-label col-form-label">Relationship</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="relationship" name="relationship"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary" id="btn_victime" name="btn_victime">Submit</button>
                                    </div>
                                </div>
                            </form>
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