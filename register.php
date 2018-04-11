<!DOCTYPE html>
<html>
      <head>
            <title> Indian Mobile Congress Online Challenge Page</title>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="vendor/bootstrap4.0.0/css/bootstrap.min.css" rel="stylesheet"/>
            <link href="css/custom-styles.css" rel="stylesheet"/>
            <script src="vendor/jquery-3.3.1/js/jquery-3.3.1.min.js"></script>
            <script src="vendor/bootstrap4.0.0/js/bootstrap.min.js"></script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNJIkM-vnrJ48rDnA59ERFFRMC1PB11m4&sensor=false&libraries=places&language=en"></script>
            <script src="custom_apiScript.js"></script>
            
      </head>
      <body>
            <div class="container-fluid register">
                  <div class="row banner">
                        <div class="col-xs-12 col-md-12 col-lg-12 col-sm-12 header-banner"> 
                              <img src="images/header1.jpg" alt="company logo" style="width: 100%;">
                              <a href="index.php"><img style="margin-top: -1em; margin-left: 1em;" src="images/logo.png" alt="Indian Mobile Congress" /></a>
                        </div>
                  </div>
                  <div class="row">
                        <div class="col-md-3">
                              &nbsp;
                        </div>
                        <div class="col-md-6">
                              <h6 class="text-center">Register your Startup here</h6>
                              <p>Please fill in the following details</p>
                              <form id="registerForm" name="registerForm">
                                    <div class="section">
                                          <div class="row">
                                                <div class="form-group col-md-12 col-xs-12">
                                                      <label for="companyName">Startup Title</label><br/>
                                                      <input id="companyName" type="text" name="companyName" placeholder="Staple & Fancy Hotel" /> <br/>
                                                      <input id="tagline" type="text" name="tagline" placeholder="Tagline Example: Best Example Mexican Grill" />
                                                </div>
                                          </div>
                                          
                                          <div class="row">
                                                <div class="form-group col-md-12 col-xs-12">
                                                      <label for="city">City </label><br/>
                                                      <input id="city" type="text" name="city" autocomplete="on" placeholder="Select Your List Region"/> <br/>
                                                </div>
                                          </div>

                                          <div class="row">
                                                <div class="form-group col-md-12 col-xs-12">
                                                      <label for="phone">Phone </label><br/>
                                                      <input id="phone" type="text" name="phone" placeholder="111-111-1234" /> <br/>
                                                </div>
                                          </div>
                                          
                                          <div class="row">
                                                <div class="form-group col-md-12 col-xs-12">
                                                      <label for="website">Website </label><br/>
                                                      <input id="website" type="text" name="website" placeholder="http://" /> <br/>
                                                </div>
                                          </div>
                                    </div>
                                    
                                    <div class="section">
                                          <div class="row">
                                                <div class="form-group col-md-12 col-xs-12">
                                                      <label for="Theme">Theme </label><br/>
                                                      <select id="theme" name="theme"></select>
                                                </div>
                                          </div>
                                    </div>
                                    
                                    
                                    <div class="section">
                                          <div class="row">
                                                <div class="form-group col-md-12 col-xs-12">
                                                      <label for="description">Description </label><br/>
                                                      <textarea rows="2" cols="100" id="description" name="description">Detail description about your listing</textarea>
                                                </div>
                                          </div>
                                    </div>
                                    
                                    <div class="section">
                                          <div class="row">
                                                <div class="form-group col-md-12 col-xs-12">
                                                      <label class="btn btn-primary" for="my-file-selector">
                                                      <input id="my-file-selector" name="companyLogo" type="file" style="display:none" 
                                                            onchange="$('#upload-file-info').html(this.files[0].name)">
                                                            Upload Logo Here
                                                      </label>
                                                      <span class='label label-info' id="upload-file-info"></span>
                                                </div>
                                          </div>
                                    </div>

                                    <div class="row">
                                          <div class="form-group col-md-12 col-xs-12">
                                                <label for="email">Email </label><br/>
                                                <input id="email" type="text" name="email" placeholder="Your Contact Email" />
                                          </div>
                                    </div>

                                    <div class="row">
                                          <div class="form-group col-md-6 col-xs-12 text-center">
                                                <input id="submit" onclick="registerFormSubmit()" type="button" value="Register" />
                                          </div>
                                    </div>

                                    
                              </form>
                        </div>
                        <div class="col-md-3"></div>

                  </div>
            </div>
            <script>
                              
                  function phonenumber(inputtxt) {
                        //var phoneno = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
                        var phoneno = /^(\([0-9]{3}\) |[0-9]{3}-)[0-9]{3}-[0-9]{4}/;
                        if(inputtxt.value.match(phoneno)) {
                              return true;
                        }  
                        else {  
                              alert("message");
                              return false;
                        }
                  }
                  function registerFormSubmit() {
                        var companyname = document.getElementById("companyName").value;
                        var tagline = document.getElementById("tagline").value;
                        var city = document.getElementById("city").value;
                        var phone = document.getElementById("phone").value;
                        var website = document.getElementById("website").value;
                        var theme = document.getElementById("theme").value;
                        var description = document.getElementById("description").innerHTML;
                        //var image = document.getElementById("upload-file-info").innerHtml;
                        var image = '';
                        var email = document.getElementById("email").value;
                        var x = document.getElementById("my-file-selector");
                        if ('files' in x) {
                              if (x.files.length == 0) {
                                    txt = "Select one or more files.";
                              } else {
                                    image = x.files[0]
                              }
                        } 
                        var description = 'Description about the company will be updated soon...';
                        var regexEmail = /\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;

                        if($('#description').html() !== 'Detail description about your listing' || $('#description').html() !== '') {
                              validated = true;
                              description = $('#description').html();
                        }
                        var dataString = 'companyName=' + companyname + '&tagline=' + tagline + '&city=' + city + '&phone=' + phone + '&website=' + website + '&theme=' + theme + '&description=' + description + '&companyLogo=' + image + '&email=' + email;
                        if($('#companyName').val() === '' || $('#upload-file-info').html() === '' || $('#email').val() === '' || !regexEmail.test($('#email').val())) {
                              if($('#email').val() !== '' && !regexEmail.test($('#email').val())) {
                                    alert('Please enter valid email address');
                                    return;
                              }
                              alert('Please fill all the required fieldsss');
                              return;
                        } else if($("#companyName.val()" !== '') && $('#upload-file-info').html() !== '' && $('#email').val() !== '' && regexEmail.test($('#email').val())) {
                              $.ajax({
                                    type: "POST",
                                    url: "api/storeStartupData.php",
                                    data: dataString,
                                    cache: false,
                                    success: function(data) {
                                          if(data === 'Success') {
                                                if (confirm("Thanks for Registering!")) {
                                                      window.location.replace('index.php');
                                                } else {

                                                }
                                          } else if(data === 'Warning'){
                                                //alert('Please fill all the required field');
                                          } else {
                                                alert('Server Error. Please try again');
                                          }

                                    }
                              });      
                        }
                        return false;
                  }
            </script>
      </body>
</html>