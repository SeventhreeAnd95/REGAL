<?php
session_start();
$_SESSION['current'] = 'home';
include "config.php";
$e ="";
 if(isset($_POST['email'])) 
	{
    	/* //include("config.php"); */
		
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$gender=$_POST['gender'];
	$experience=$_POST['exp'];
	$qual=addslashes($_POST['qualification']);
	$yop=$_POST['yop'];
	$skills=addslashes($_POST['skills']);
	$collegename=addslashes($_POST['collegename']);
	$city=$_POST['city'];
	$pincode=$_POST['pincode'];
	$role=$_POST['roles'];
    $Area= $_POST['area'];
/* candidates table details can_details  27-07-2021  -- Abhishek */ 
		$check = mysqli_query($con, " SELECT email FROM regal_can_details WHERE email='$email'");
		$num_rows = mysqli_num_rows($check);
		if($num_rows>0)
		{
			$e = "<font color='red'>Email already exists...!!</font>";
		}
		else
		{
			$sql ="INSERT INTO regal_can_details  (name, email, phone, gender,exp,qualification,yop,skills,collegename,city, pincode,role,Area)VALUES('$name','$email','$phone','$gender', '$experience', '$qual', '$yop', '$skills', '$collegename','$city', '$pincode', '$role', '$Area')";
				
			$retval = mysqli_query($con, $sql) or die(mysqli_error($con));

			if(! $retval ) 
			{
				/* die('Could not enter data: ' . mysql_error()); */
				header("Location: signup.php");
				
			}
			else
			{
				header("Location: User/Userdashboard.php"); 
			
			}
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>REGAL</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="css/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/styles1.css" rel="stylesheet"/>
        <style>
                * {
                box-sizing: border-box;
                }

                body {
                background-color: #f1f1f1;
                }

                #regForm {
                background-color: #ffffff;
                margin: 100px auto;
                font-family: Raleway;
                padding: 40px;
                width: 70%;
                min-width: 300px;
                }

                h1 {
                text-align: center;  
                }

                input {
                padding: 10px;
                width: 100%;
                font-size: 17px;
                font-family: Raleway;
                border: 1px solid #aaaaaa;
                }

                /* Mark input boxes that gets an error on validation: */
                input.invalid {
                background-color: #ffdddd;
                }

                /* Hide all steps by default: */
                .tab {
                display: none;
                }

                button {
                background-color: #04AA6D;
                color: #ffffff;
                border: none;
                padding: 10px 20px;
                font-size: 17px;
                font-family: Raleway;
                cursor: pointer;
                }

                button:hover {
                opacity: 0.8;
                }

                #prevBtn {
                background-color: #bbbbbb;
                }

                /* Make circles that indicate the steps of the form: */
                .step {
                height: 15px;
                width: 15px;
                margin: 0 2px;
                background-color: #bbbbbb;
                border: none;  
                border-radius: 50%;
                display: inline-block;
                opacity: 0.5;
                }

                .step.active {
                opacity: 1;
                }

                /* Mark the steps that are finished and valid: */
                .step.finish {
                background-color: #04AA6D;
                }
        </style>
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <?php include("Navigation.php"); ?>
            <!-- Page Content-->
            <section class="py-5">
                <div class="wrapper">
                    <div class="headline">
                        <div class="text-center mb-5">
                        <h1>Welcome</h1>
                        </div>
                    </div>
                    <form id="regForm" action="Signup.php" method="post">
                            <h1>Contact Info:</h1>
                            <!-- One "tab" for each step in the form: -->
                            <div class="tab">Personal Info:
                                <p><input placeholder="Enter your full name..." oninput="this.className = ''" name="name"></p>
                                <p><input placeholder="Phone Number" type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"></p>
                                <p><input placeholder="Email.." oninput="this.className=''" name="email"></p>
                                <p><input type="radio" name="gender" id="gender" value="M" style="visibility:visible !important;height:1em;width:30px" checked> Male&emsp;
                                   <input type="radio" name="gender" id="gender" value="F" style="visibility:visible !important;height:1em;width:30px"> Female&emsp;
                                   <input type="radio" name="gender" id="gender" value="T" style="visibility:visible !important;height:1em;width:30px"> Transgender</p>
                            </div>
                            <div class="tab">Qualification:
                                <p><select style="color:#8B8282; font-family:Arial;font-size:15px;display:block!important;" class="form-control" id="qualification" name="qualification" required>
                                <option value='' style='display:none'>Select Qualification</option>
                                <option value='BE/BTech'>BE/BTech</option>
                                <option value='MTech'>ME/MTech</option>
                                <option value='MCA'>MCA</option>
                                <option value='BCA'>BCA</option>
                                <option value='MSC'>MSc</option>
                                <option value='BSC'>BSc</option>
                                <option value='Diploma'>Diploma</option>
                                <option value='MBA'>MBA</option>
                                <option value='BBA'>BBA</option>
                                <option value='MCom'>M.Com</option>			
                                <option value='BCom'>B.Com</option>
                                <option value='MA'>MA</option>
                                <option value='BA'>BA</option>
                                <option value='MPharmacy'>M.Pharm</option>
                                <option value='BPharmacy'>B.Pharm</option>
                                <option value='PUC'>PUC(12th)</option>
                                <option value='SSLC'>SSLC(10th)</option>                           
                                </select></p>
                                <p><input type="date" placeholder="Year of pass" oninput="this.className = ''" name="yop"></p>
                                <p><input placeholder="Skills" oninput="this.className = ''" name="skills"></p>
                                <p><input placeholder="College Name" oninput="this.className = ''" name="collegename" id="collegename"></p>
                                <p><input placeholder="Stream/Subject" oninput="this.className = ''" name="roles" id="role"></p>
                            </div>
                            <div class="tab">Address:
                            <p><input placeholder="Address" oninput="this.className = ''" name="area" id="area"></p>
                            <p><input placeholder="City" oninput="this.className = ''" name="City"></p>
                            <p><input placeholder="State" oninput="this.className = ''" name="State" id="State"></p>
                            <p><input placeholder="Pincode" oninput="this.className = ''" name="pincode"></p>
                            
                            </div>
                            <div style="overflow:auto;">
                                <div style="float:right;">
                                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                </div>
                            </div>
                            <!-- Circles which indicates the steps of the form: -->
                            <div style="text-align:center;margin-top:40px;">
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                            </div>
                        </form>
                </div>
           
            </section>
        </main>
        <!-- Footer-->
        <?php include("footer.php"); ?>
        <!-- Bootstrap core JS-->
        <script>
                    var currentTab = 0; // Current tab is set to be the first tab (0)
                    showTab(currentTab); // Display the current tab

                    function showTab(n) {
                    // This function will display the specified tab of the form...
                    var x = document.getElementsByClassName("tab");
                    x[n].style.display = "block";
                    //... and fix the Previous/Next buttons:
                    if (n == 0) {
                        document.getElementById("prevBtn").style.display = "none";
                    } else {
                        document.getElementById("prevBtn").style.display = "inline";
                    }
                    if (n == (x.length - 1)) {
                        document.getElementById("nextBtn").innerHTML = "Submit";
                    } else {
                        document.getElementById("nextBtn").innerHTML = "Next";
                    }
                    //... and run a function that will display the correct step indicator:
                    fixStepIndicator(n)
                    }

                    function nextPrev(n) {
                    // This function will figure out which tab to display
                    var x = document.getElementsByClassName("tab");
                    // Exit the function if any field in the current tab is invalid:
                    if (n == 1 && !validateForm()) return false;
                    // Hide the current tab:
                    x[currentTab].style.display = "none";
                    // Increase or decrease the current tab by 1:
                    currentTab = currentTab + n;
                    // if you have reached the end of the form...
                    if (currentTab >= x.length) {
                        // ... the form gets submitted:
                        document.getElementById("regForm").submit();
                        return false;
                    }
                    // Otherwise, display the correct tab:
                    showTab(currentTab);
                    }

                    function validateForm() {
                    // This function deals with validation of the form fields
                    var x, y, i, valid = true;
                    x = document.getElementsByClassName("tab");
                    y = x[currentTab].getElementsByTagName("input");
                    // A loop that checks every input field in the current tab:
                    for (i = 0; i < y.length; i++) {
                        // If a field is empty...
                        if (y[i].value == "") {
                        // add an "invalid" class to the field:
                        y[i].className += " invalid";
                        // and set the current valid status to false
                        valid = false;
                        }
                    }
                    // If the valid status is true, mark the step as finished and valid:
                    if (valid) {
                        document.getElementsByClassName("step")[currentTab].className += " finish";
                    }
                    return valid; // return the valid status
                    }

                    function fixStepIndicator(n) {
                    // This function removes the "active" class of all steps...
                    var i, x = document.getElementsByClassName("step");
                    for (i = 0; i < x.length; i++) {
                        x[i].className = x[i].className.replace(" active", "");
                    }
                    //... and adds the "active" class on the current step:
                    x[n].className += " active";
                    }
        </script>

        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
