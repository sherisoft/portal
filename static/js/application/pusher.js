document.addEventListener("DOMContentLoaded", function(event) { 
  /**
   * CodeIgniter Application Controller Class
   *
   * This class object is the super class that every library in
   * CodeIgniter will be assigned to.
   *
   * @package     Form validator
   * @subpackage  ajax Pusher
   * @category    Libraries
   * @author      Mark Ochieng' | Vinarq Technologies
   * @license     MIT
   */
  
 
  // process form 1
  $('#loginform').submit(function(event) {

    var u = $('#login_email').val();
    var p = $('#login_password').val();

      $.ajax({
          url : "login_user",
          type : "POST",
          dataType : "json",
          data : {"email" : u, "password" : p},
          cache: false,
          success : function(json) {            
            var message = json.message;

            if (message == 'ok') {

              window.location.href = "dashboard";

            }else if (message == 'notFound') {

              $(".login-message").html("Account does not Exist!!");
              setTimeout(function() {
                $(".login-message").fadeOut().empty();
              }, 5000);
            }
            else if (message == 'notVerified') {

              $(".login-message").html("Verify email sent to your account!!");
              setTimeout(function() {
                $(".login-message").fadeOut().empty();
              }, 5000);

            }else if (message == 'disabled') {

              $(".login-message").html("This account is disabled!!");
              setTimeout(function() {
                $(".login-message").fadeOut().empty();
              }, 5000);

            }else if (message == 'notMatch') {

              $(".login-message").html("Incorrect email and password!!");
              setTimeout(function() {
                $(".login-message").fadeOut().empty();
              }, 5000);
            }   
            else{

              console.log(message);
              $(".login-message").html(message);
              setTimeout(function() {
                $(".login-message").fadeOut().empty();
              }, 5000);

            }
          },
          error : function(json) {
              var message = json.message;
              console.log(message);
              alert(message);
          }
      });
      // stop the form from submitting the normal way and refreshing the page
      return false;
  });


  // process form 2
  $('#signupform').submit(function(event) {

    var n = $('#register_username').val();
    var p = $('#register_password').val();
    var rp = $('#register_password_repeat').val();
    var e = $('#register_email').val();

      $.ajax({
          url : "register_user",
          type : "POST",
          dataType : "json",
          data : {"username" : n, "password" : p,"repeatPassword" : rp, "email" : e},
          cache: false,
          success : function(json) {            
            var message = json.message;
            if (message == 'success') {
              $('#signupform')[0].reset();
              // window.location.href = "successfully registered";
              $(".register-message-success").html("Please proceed and verify your email address.");
              setTimeout(function() {
                $(".register-message-success").fadeOut().empty();
              }, 5000);

            }else if (message == 'exists') {

              $(".register-message-error").html("Account does Exist!!");
              setTimeout(function() {
                $(".register-message-error").fadeOut().empty();
              }, 5000);
            }
            else if (message == 'failed') {

              $(".register-message-error").html("Registration failed. Please try again later!!");
              setTimeout(function() {
                $(".register-message-error").fadeOut().empty();
              }, 5000);
            }
            else{

              console.log(message);
              $(".register-message-error").html(message);
              // alert(message);
              setTimeout(function() {
                $(".register-message-error").fadeOut().empty();
              }, 5000);
            }
          },
          error : function(json) {
              var message = json.message;
              console.log(message);
              alert(message);
          }
      });
      // stop the form from submitting the normal way and refreshing the page
      return false;
  });

  // register staff
  $('.create_staff').submit(function(event) {

    var n = $('#reg_staff_names').val();
    var e = $('#reg_staff_email').val();
    var p = $('#reg_staff_password').val();
    var po = $('#reg_staff_position').val();

      $.ajax({
          url : "register_staff_",
          type : "POST",
          dataType : "json",
          data : {"username" : n, "password" : p,"position" : po, "email" : e},
          cache: false,
          success : function(json) {            
            var message = json.message;
            if (message == 'success') {
              $('.create_staff')[0].reset();
              // window.location.href = "successfully registered";
              $(".register-message-success").html("Staff has been registered successfully.");
              setTimeout(function() {
                $(".register-message-success").fadeOut().empty();
              }, 5000);

            }else if (message == 'exists') {

              $(".register-message-error").html("Account already exists!!");
              setTimeout(function() {
                $(".register-message-error").fadeOut().empty();
              }, 5000);
            }
            else if (message == 'failed') {

              $(".register-message-error").html("Registration failed. Please try again later!!");
              setTimeout(function() {
                $(".register-message-error").fadeOut().empty();
              }, 5000);
            }
            else{

              console.log(message);
              $(".register-message-error").html(message);
              // alert(message);
              setTimeout(function() {
                $(".register-message-error").fadeOut().empty();
              }, 5000);
            }
          },
          error : function(json) {
              var message = json.message;
              console.log(message);
              alert(message);
          }
      });
      // stop the form from submitting the normal way and refreshing the page
      return false;
  });

  // new eployer
  $('.new_employer').submit(function(event) {

    var firstName = $('#fname').val();
    var middleName = $('#mname').val();
    var lastName = $('#lname').val();
    var mobileNumber = $('#mnumber').val();
    var username = $('#username').val();
    var password = $('#password').val();
    var businessName = $('#bisname').val();
    var businessLocation = $('#bislocation').val();
    var businessRegNo = $('#bisregno').val();
    var email = $('#email').val();
    var gender = $('#val_radio_gender').val();
    var industry = $('#val_industry').val();
    var about = $('#about').val();
      $.ajax({
          url : "create_new_employer_",
          type : "POST",
          dataType : "json",
          data : {"firstName" : firstName, "middleName" : middleName,"lastName" : lastName, "mobileNumber" : mobileNumber, "username" : username, "password" : password,"businessName" : businessName, "businessLocation" : businessLocation, "businessRegNo" : businessRegNo, "email" : email,"gender" : gender, "industry" : industry,"about" : about},
          cache: false,
          success : function(json) {            
            var message = json.message;
            if (message == 'success') {
              $('.new_employer')[0].reset();
              // window.location.href = "successfully registered";
              $(".register-message-success").html("Employer has been registered successfully.");
              setTimeout(function() {
                $(".register-message-success").fadeOut().empty();
              }, 5000);

            }else if (message == 'exists') {

              $(".register-message-error").html("Account already exists!!");
              setTimeout(function() {
                $(".register-message-error").fadeOut().empty();
              }, 5000);
            }
            else if (message == 'failed') {

              $(".register-message-error").html("Registration failed. Please try again later!!");
              setTimeout(function() {
                $(".register-message-error").fadeOut().empty();
              }, 5000);
            }
            else{

              console.log(message);
              $(".register-message-error").html(message);
              // alert(message);
              setTimeout(function() {
                $(".register-message-error").fadeOut().empty();
              }, 5000);
            }
          },
          error : function(json) {
              var message = json.message;
              console.log(message);
              alert(message);
          }
      });
      // stop the form from submitting the normal way and refreshing the page
      return false;
  });
  // new eployer
  $('.new_employee').submit(function(event) {

    var firstName = $('#fname').val();
    var middleName = $('#mname').val();
    var lastName = $('#lname').val();
    var mobileNumber = $('#mnumber').val();
    var username = $('#username').val();
    var password = $('#password').val();
    var dob = $('#dob').val();
    var identityNumber = $('#idnumber').val();
    var email = $('#email').val();
    var gender = $('#val_radio_gender').val();
    var residence = $('#residence').val();
    var about = $('#about').val();
      $.ajax({
          url : "create_new_employee_",
          type : "POST",
          dataType : "json",
          data : {"firstName" : firstName, "middleName" : middleName,"lastName" : lastName, "mobileNumber" : mobileNumber, "username" : username, "password" : password,"dob" : dob, "identityNumber" : identityNumber, "email" : email,"gender" : gender, "residence" : residence,"about" : about},
          cache: false,
          success : function(json) {            
            var message = json.message;
            if (message == 'success') {
              $('.new_employee')[0].reset();
              // window.location.href = "successfully registered";
              $(".register-message-success").html("Employee has been registered successfully.");
              setTimeout(function() {
                $(".register-message-success").fadeOut().empty();
              }, 5000);

            }else if (message == 'exists') {

              $(".register-message-error").html("Account already exists!!");
              setTimeout(function() {
                $(".register-message-error").fadeOut().empty();
              }, 5000);
            }
            else if (message == 'failed') {

              $(".register-message-error").html("Registration failed. Please try again later!!");
              setTimeout(function() {
                $(".register-message-error").fadeOut().empty();
              }, 5000);
            }
            else{

              console.log(message);
              $(".register-message-error").html(message);
              // alert(message);
              setTimeout(function() {
                $(".register-message-error").fadeOut().empty();
              }, 5000);
            }
          },
          error : function(json) {
              var message = json.message;
              console.log(message);
              alert(message);
          }
      });
      // stop the form from submitting the normal way and refreshing the page
      return false;
  });



// eventName,position, howMany, minSalary,maxSalary,openingDate,closingDate,employer,category,about
// ,, , ,,,,,,about
  // new eployer
  $('.new_job').submit(function(event) {

    var companyName = $('#companyName').val();
    var position = $('#position').val();
    var howMany = $('#howMany').val();
    var minSalary = $('#minSalary').val();
    var maxSalary = $('#maxSalary').val();
    var openingDate = $('#openingDate').val();
    var closingDate = $('#closingDate').val();
    var employer = $('#employer').val();
    var category = $('#category').val();
    var about = $('#about').val();
      $.ajax({
          url : "create_new_job_",
          type : "POST",
          dataType : "json",
          data : {"employer":employer, "companyName" : companyName, "position" : position,"howMany" : howMany, "minSalary" : minSalary, "maxSalary" : maxSalary, "openingDate" : openingDate,"closingDate" : closingDate, "category" : category, "about" : about},
          cache: false,
          success : function(json) {            
            var message = json.message;
            if (message == 'success') {
              $('.new_job')[0].reset();
              // window.location.href = "successfully registered";
              $(".register-message-success").html("Employee has been registered successfully.");
              setTimeout(function() {
                $(".register-message-success").fadeOut().empty();
              }, 5000);

            }else if (message == 'exists') {

              $(".register-message-error").html("Account already exists!!");
              setTimeout(function() {
                $(".register-message-error").fadeOut().empty();
              }, 5000);
            }
            else if (message == 'failed') {

              $(".register-message-error").html("Registration failed. Please try again later!!");
              setTimeout(function() {
                $(".register-message-error").fadeOut().empty();
              }, 5000);
            }
            else{

              console.log(message);
              $(".register-message-error").html(message);
              // alert(message);
              setTimeout(function() {
                $(".register-message-error").fadeOut().empty();
              }, 5000);
            }
          },
          error : function(json) {
              var message = json.message;
              console.log(message);
              alert(message);
          }
      });
      // stop the form from submitting the normal way and refreshing the page
      return false;
  });


  // new eployer
  $('.update_employer_data').submit(function(event) {

    var firstName = $('#fname').val();
    var middleName = $('#mname').val();
    var lastName = $('#lname').val();
    var mobileNumber = $('#mnumber').val();
    var username = $('#username').val();
    var businessName = $('#bisname').val();
    var businessLocation = $('#bislocation').val();
    var businessRegNo = $('#bisregno').val();
    var email = $('#email').val();
    var industry = $('#val_industry').val();
    var about = $('#about').val();
      $.ajax({
          url : "update_employer_details",
          type : "POST",
          dataType : "json",
          data : {"firstName" : firstName, "middleName" : middleName,"lastName" : lastName, "mobileNumber" : mobileNumber, "username" : username, "businessName" : businessName, "businessLocation" : businessLocation, "businessRegNo" : businessRegNo, "email" : email, "industry" : industry,"about" : about},
          cache: false,
          success : function(json) {            
            var message = json.message;
            if (message == 'success') {
              $('.update_employer_data')[0].reset();
              // window.location.href = "successfully registered";
              $(".update-message-success").html("Employer has been updated successfully.");
              setTimeout(function() {
                $(".update-message-success").fadeOut().empty();
              }, 5000);

            }else if (message == 'notFoud') {

              $(".register-message-error").html("Account with the provided email wasn't Found!!");
              setTimeout(function() {
                $(".register-message-error").fadeOut().empty();
              }, 5000);
            }else if (message == 'failed') {

              $(".update-message-error").html("Employer update failed. Please try again later!!");
              setTimeout(function() {
                $(".update-message-error").fadeOut().empty();
              }, 5000);
            }
            else{

              console.log(message);
              $(".update-message-error").html(message);
              // alert(message);
              setTimeout(function() {
                $(".update-message-error").fadeOut().empty();
              }, 5000);
            }
          },
          error : function(json) {
              var message = json.message;
              console.log(message);
              alert(message);
          }
      });
      // stop the form from submitting the normal way and refreshing the page
      return false;
  });



  // new eployer
  $('.update_employee_data').submit(function(event) {

    var firstName = $('#fname').val();
    var middleName = $('#mname').val();
    var lastName = $('#lname').val();
    var mobileNumber = $('#mnumber').val();
    var username = $('#username').val();
    var dob = $('#dob').val();
    var identityNumber = $('#idnumber').val();
    var email = $('#email').val();
    var residence = $('#residence').val();
    var about = $('#about').val();
      $.ajax({
          url : "update_employee_details",
          type : "POST",
          dataType : "json",
          data : {"firstName" : firstName, "middleName" : middleName,"lastName" : lastName, "mobileNumber" : mobileNumber, "username" : username, "dob" : dob, "identityNumber" : identityNumber, "email" : email, "residence" : residence,"about" : about},
          cache: false,
          success : function(json) {            
            var message = json.message;
            if (message == 'success') {
              $('.update_employee_data')[0].reset();
              // window.location.href = "successfully registered";
              $(".update-message-success").html("Job seeker has been updated successfully.");
              setTimeout(function() {
                $(".update-message-success").fadeOut().empty();
              }, 5000);

            }else if (message == 'notFoud') {

              $(".update-message-error").html("Job seeker with the provided email wasn't Found!!");
              setTimeout(function() {
                $(".update-message-error").fadeOut().empty();
              }, 5000);
            }
            else if (message == 'failed') {

              $(".update-message-error").html("Job seeker update failed. Please try again later!!");
              setTimeout(function() {
                $(".update-message-error").fadeOut().empty();
              }, 5000);
            }
            else{

              console.log(message);
              $(".update-message-error").html(message);
              // alert(message);
              setTimeout(function() {
                $(".update-message-error").fadeOut().empty();
              }, 5000);
            }
          },
          error : function(json) {
              var message = json.message;
              console.log(message);
              alert(message);
          }
      });
      // stop the form from submitting the normal way and refreshing the page
      return false;
  });


 // new eployer
  $('.update_job_data').submit(function(event) {

    var companyName = $('#companyName').val();
    var position = $('#position').val();
    var howMany = $('#howMany').val();
    var minSalary = $('#minSalary').val();
    var maxSalary = $('#maxSalary').val();
    var openingDate = $('#openingDate').val();
    var closingDate = $('#closingDate').val();
    var employer = $('#employer').val();
    var category = $('#category').val();
    var about = $('#about').val();
    var id = $('#id').val();
      $.ajax({
          url : "update_job_details",
          type : "POST",
          dataType : "json",
          data : {"id": id, "employer":employer, "companyName" : companyName, "position" : position,"howMany" : howMany, "minSalary" : minSalary, "maxSalary" : maxSalary, "openingDate" : openingDate,"closingDate" : closingDate, "category" : category, "about" : about},
          cache: false,
          success : function(json) {            
            var message = json.message;
            if (message == 'success') {
              $('.update_job_data')[0].reset();
              // window.location.href = "successfully registered";
              $(".update-message-success").html("Job has been updated successfully.");
              setTimeout(function() {
                $(".update-message-success").fadeOut().empty();
              }, 5000);

            }else if (message == 'notFoud') {

              $(".update-message-error").html("Job with the provided details was not found!!");
              setTimeout(function() {
                $(".update-message-error").fadeOut().empty();
              }, 5000);
            }
            else if (message == 'failed') {

              $(".update-message-error").html("Job update failed. Please try again later!!");
              setTimeout(function() {
                $(".update-message-error").fadeOut().empty();
              }, 5000);
            }
            else{

              console.log(message);
              $(".update-message-error").html(message);
              // alert(message);
              setTimeout(function() {
                $(".update-message-error").fadeOut().empty();
              }, 5000);
            }
          },
          error : function(json) {
              var message = json.message;
              console.log(message);
              alert(message);
          }
      });
      // stop the form from submitting the normal way and refreshing the page
      return false;
  });

}); 