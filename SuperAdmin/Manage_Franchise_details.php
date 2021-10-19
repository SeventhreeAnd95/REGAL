<?php

include '../config.php'

?>
<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>Admin</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="../css/styles.css" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets1/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets1/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets1/demo/demo.css" rel="stylesheet" />
<style>

      main {

        width: 100%;
      }
      #example {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#example td, #example th {
  border: 1px solid #ddd;
  padding: 8px;
}

#example tr:nth-child(even){background-color: #f2f2f2;}

#example tr:hover {background-color: #ddd;}

#example th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #A9A9A9;
  color: white;
}
    input {
    float: right;
    clear: both;
    margin-bottom: 30px;
    border-radius: 5px;
    }
    .button {
     background-color: #4CAF50; /* Green */
     border: none;
     color: white;
     padding: 15px 32px;
     text-align: center;
     text-decoration: none;
     display: inline-block;
     font-size: 16px;
       }
                    nav {
                        background-color: #F5F5F5;
                        box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                         }

</style>
</head>

<body>

        <main>
              <div id="layoutSidenav_content" > 
                    <div class="container-fluid"> 
                      <?php
                          
                          $count = mysqli_query($con, "SELECT * FROM regal_franchise") or die(mysqli_error($con));
                          $row_count = mysqli_fetch_array($count);
                          if ($row_count != 0) {
                        ?>
                        <br>
                        
                        
                          <table id="example" class="display" style=" overflow-x:scroll;">
                              <thead class="thead-light">
                                  <tr>
                                      <th>Name</th> 
                                      <th>Business Name</th>
                                      <th>Email Address</th>
                                      <th>Mobile Number</th>
                                      <th>Address</th>
                                      <th>Payment No</th>
                                      <th>Category</th>
                                      <th>FranchiseLocation</th>
                                      <th>FranchiseType</th>
                                      <th>Occupation</th>
                                      <th>CardType</th>
                                      <th>Mem_limit</th>
                                      <th>PaidAmount</th> 
                                      <th>Remaining Amount</th>
                                      <th>GST Number</th>
                                      <th>Aadhaar Number</th>
                                      <th>PremiumStartDate</th>
                                      <th>PremiumEndDate</th>
                                      <th>Activatedby</th>
                                      <th>ImagePath</th>
                                      <th>Registeredon</th>
                                      <th>MenuID</th>
                                      <th>CompanyID</th>
                                      <th>TINno</th>
                                      <th>ReferralID</th>
                                      <th>Referredby</th>
                                      <th>Bald</th>
                                      <th>Catalogue</th>
                                      <th>ClientCompanies</th>
                                      <th>Enquiries</th>
                                      <th>BusinessRemarks</th>
                                      <th>Userpermission</th>
                                      <th>Resumesuploaded</th>
                                      <th>Resumesviewed</th>
                                  </tr>
                              </thead>
                                <?php $franchise_details = mysqli_query($con,"SELECT * FROM regal_franchise") or die(mysqli_error($con));
                                  while ($row = mysqli_fetch_array($franchise_details)) {
                                ?>
                                <tbody id="myTable">
                                  <tr style="border-bottom:2px solid black" >
                                      <td><?php echo $row['Name'];?></td>
                                      <td><?php echo $row['BusinessName'];?></td>
                                      <td><?php echo $row['Email'];?></td>
                                      <td><?php echo $row['Mobile'];?></td>
                                      <td><?php echo $row['Address'];?></td>
                                      <td><?php echo $row['PaymentNo'];?></td>
                                      <td><?php echo $row['Category'];?></td>
                                      <td><?php echo $row['FranchiseLocation'];?></td>
                                      <td><?php echo $row['FranchiseType'];?></td>
                                      <td><?php echo $row['Occupation'];?></td>
                                      <td><?php echo $row['CardType'];?></td>
                                      <td><?php echo $row['Mem_limit'];?></td>
                                      <td><?php echo $row['Paidamount'];?></td>
                                      <td><?php echo $row['remainingamount'];?></td>
                                      <td><?php echo $row['GSTnumber'];?></td>
                                      <td><?php echo $row['Aadharnumber'];?></td>
                                      <td><?php echo $row['Premiumstartdate'];?></td>
                                      <td><?php echo $row['PremimEndDate'];?></td>
                                      <td><?php echo $row['Activatedby'];?></td>
                                      <td><?php echo $row['Imagepath'];?></td>
                                      <td><?php echo $row['Registeredon'];?></td>
                                      <td><?php echo $row['menuids'];?></td>
                                      <td><?php echo $row['Companyid'];?></td>
                                      <td><?php echo $row['TINno'];?></td>
                                      <td><?php echo $row['ReferralID'];?></td>
                                      <td><?php echo $row['Bald'];?></td>
                                      <td><?php echo $row['Catalogue'];?></td>
                                      <td><?php echo $row['ClientCompanies'];?></td>
                                      <td><?php echo $row['Enquiries'];?></td>
                                      <td><?php echo $row['BusinessRemarks'];?></td>
                                      <td><?php echo $row['userPermissions'];?></td>
                                      <td><?php echo $row['resumeuploaded'];?></td>
                                      <td><?php echo $row['resumesviewed'];?></td>
                                  </tr>
                                </tbody>
                              <?php } ?>
                          </table>
                        <?php } ?>
                    </div>
              </div>
        </main>
     

<script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
          modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/c8154970b8.js"></script>
    <script src="../js1/core/jquery.min.js"></script>
  <script src="../js1/core/popper.min.js"></script>
  <script src="../js1/core/bootstrap.min.js"></script>
  <script src="../js1/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../js1/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../js1/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../js1/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../demo1/demo.js"></script>
    <script>
        $(document).ready(function(){
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>



</html>