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
                              <!-- <div class="about-us">
                                    <p><b>About</b></p>
                                    <a href="index.php#overview">Overview</a><br/>
                                    <a href="index.php#themes">Themes</a><br/>
                                    <a href="index.php#prizes">Prizes</a><br/>
                              </div>
                              <div class="start-ups">
                                    <a href="startups.php"><b>Start-Ups</b></a>
                              </div>
                              <div class="contact-us">
                                    <a href="contactus.php"><b>Contact Us</b></a>
                              </div> -->
                        </div>
                        <div class="col-md-6">
                              <h6 class="text-center">Register your Startup here</h6>
                              <p>Please fill in the following details</p>
                              <form action="api/createProfile.php" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                          <div class="form-group col-md-12 col-xs-12">
                                                <label for="name">Your Name </label><br/>
                                                <input id="name" type="text" name="name" /> <br/>
                                          </div>
                                    </div>
                                    <div class="row">
                                          <div class="form-group col-md-12 col-xs-12">
                                                <label for="contactnumber">Contact Number </label><br/>
                                                <input id="contactnumber" type="text" name="contactnumber" /> <br/>
                                          </div>
                                    </div>
                                    
                                    <div class="row">
                                          <div class="form-group col-md-12 col-xs-12">
                                                <label for="company">Company Name </label><br/>
                                                <input id="company" type="text" name="company" /> <br/>
                                          </div>
                                    </div>

                                    <div class="row">
                                          <div class="form-group col-md-6 col-xs-12">
                                                <label for="website">Website </label><br/>
                                                <input id="website" type="text" name="website" /> <br/>
                                          </div>
                                          <div class="form-group col-md-6 col-xs-12">
                                                <label for="location">Location </label><br/>
                                                <input id="location" type="text" name="location" /> <br/>
                                          </div>
                                    </div>
                                    
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
                                    <div class="row">
                                          <div class="form-group col-md-6 col-xs-12 text-center">
                                                <input type="submit" value="Register" class="btn btn-primary"/>
                                          </div>
                                    </div>

                                    
                              </form>
                        </div>
                        <div class="col-md-3"></div>

                  </div>
            </div>
      </body>
</html>