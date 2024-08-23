
<?php
include_once('connect/dbcon.php');

$sql_1="Select * From Diagnosis;";
$result_1=mysqli_query($con,$sql_1);
$result=mysqli_query($con,$sql_1);

//Address
$sql_address="Select DISTINCT province_name FROM AddressDetails ORDER BY province_name ASC;";
$result_address=mysqli_query($con,$sql_address);

//Province
//$sql_pro="SELECT DISTINCT province_name FROM AddressDetails;";
//$result_pro=mysqli_query($con,$sql_pro);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
    
  </head>
  <body>
    
    <div class="container-fluid">
      <form action="#"  method="post" id="patientform" class="needs-validation" novalidate>
        
        <div  class="modal-header mb-1" style="width:350px;">
          <h5 class="modal-title text-primary">User Registration</h5>
        </div>
        <div class="input-group row text-bg-light" style="border-radius:10px;">
          <div class="col-xs-3 d-inline-flex ms-5 mb-2" style="width:350px;">
            <label class="pt-3" for="datenow">Today Date:</label>
            <input type="date" class="form-control ms-2 mt-2 w-50" id="datenow" placeholder="date" name="datenow" required>
          </div>
          <!--Javascript for Todays Date-->
          <Script>
            var field = document.querySelector('#datenow');
            var date = new Date();
            // Set the date
            field.value = date.getFullYear().toString() + '-' + (date.getMonth() + 1).toString().padStart(2, 0) + 
            '-' + date.getDate().toString().padStart(2, 0);
            </Script>

<div class="col-xs-3">
  <div class="form-floating mb-2" style="width:210px;">
    <input type="text" class="form-control" id="patientid" placeholder="Patient ID" name="patient_id" required>
    <label for="patientid">ID Number:</label>
  </div>
</div>
<div class="d-inline-flex">
  <div class="form-floating mb-2 me-2" style="width:210px;">
    <input type="text" class="form-control" id="firstname" placeholder="firstname" name="firstname" required>
    <label for="firstname">Firstname</label>
  </div>
  <div class="form-floating" style="width:210px;">
    <input type="text" class="form-control" id="lastname" placeholder="lastname" name="lastname" required>
    <label for="lastname">Lastname</label>
  </div>
</div>
<div class="d-inline-flex">
  <div class="col-xs-3">
    <div  class="form-floating mb-2 me-3" style="width:150px;">
      <input type="date" class="form-control" id="dob" placeholder="DoB" name="dob" required>
      <label for="dob">Date of Birth</label>
    </div>
  </div>
  <div class="col-xs-4 text-bg-light mb-2" style="width:260px;border-radius:5px;">
    <h6 class="ms-4">Gender</h6>
    <div></div>
    <input type="radio" name="gender" class="form-check-input ms-2" id="gender1" value="Male" required>
    <label for="gender1" class="ms-4 me-4"> Male</label>
    <input type="radio" name="gender" class="form-check-input" id="gender2" value="Female">
    <label for="gender2" class=" me-1">Female</label>
    <input type="radio" name="gender" class="form-check-input ms-1" id="gender3" value="Others">
    <label for="gender3" class="ms-4">Others</label>
  </div>
</div>

<div class="d-inline-flex">
  <div class="col-xs-3">
    <div class="form-floating mb-2 me-2" style="width:180px;">
      <input type="tel" class="form-control" id="phone" placeholder="Phone" name="phone">
      <label for="phone">Phone Number</label>
    </div>
  </div>
  <div class="col-xs-3">
    <div class="form-floating" style="width:180px;">
      <input type="tel" class="form-control" id="mobile" placeholder="Mobile" name="mobile">
      <label for="mobile">Mobile Number</label>
    </div>
  </div>
</div>  

<div class="col-xs-3">
  <div class="form-floating mb-2" style="max-width:250px;">
    <input type="text" class="form-control" id="resident" placeholder="Resident" name="resident">
    <label for="resident">Current Address</label>
  </div>
</div> 
<div class="col-xs-3">
  <div class="form-floating mb-2" style="max-width:350px;">
    <select class="form-control" id="home_province" name="home_province" required>
      <option> Please select province</option>
      <option value="Province 1"> Province 1</option>
      <option value="Province 2"> Province 2</option>
      <option value="Province 3"> Province 3</option>
                    </select>
                    <label for="home_province">Province:</label>
                    
                  </div>
                </div>
                <div class="col-xs-3">
                  <div class="form-floating mb-2" style="max-width:350px;">
                    <select disabled class="form-control" id="district" name="district" required>
                      <option><Select:disabled>Please select the district</Select:disabled></option>
                      <option value="Central">Central District</option>
                      <option value="North">North District</option>
                      <option value="South"> South District</option>
                    </select>
                    <label for="district">Home District:</label>
                    <!--SCRIPT FOR DISTRICT(JQUERY AJAX)-->
                    <script>
                      //district
                      $('#home_province').on('change', function(){
                        var val1 = $(this).val();
                        if(val1){
                          $('#district').prop("disabled",false);
                          $.ajax({
                            type: "POST",
                            url: "connect/districtAddress.php",
                            data:'q='+val1,
                            success: function(data){
                              $("#district").html(data);
                            }
                          });
                        }else{ 
                          $('#district').html('<option>Selection the Province first</option>');
                          
                        }
                        
                      });
                      </script>
          
        </div>
      </div>
                <div class="modal-footer mb-1 w-50">
                  <input type="reset" class="btn btn-warning m-1">
                  <input type="submit" id='submit_user' class="btn btn-primary">
                </div>
              </form>
              
              
<!--Notification Status for the Informatio Saved-->
<!-- Modal -->
<div class="modal fade" id="notifyModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Notification</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <span id="pmessage"> Notification messege</span>
      </div>
    </div>
  </div>
 </div>
<!--end-->
                            <script>
                              $(document).ready(function(){ 

                             
                              var myNotification = new bootstrap.Modal(document.getElementById('notifyModal'), {
                            keyboard: false
                                  });
                              
                             $('#submit_user').click(function(){
                              myNotification .show();
                             });

                             $('.btn-close').on('click',function(){
                              myNotification .hide(); 
                             });

                            });//document


                            </script>


</div>


</body>
</html>
<script src="form_clientvalidation.js"></script>




