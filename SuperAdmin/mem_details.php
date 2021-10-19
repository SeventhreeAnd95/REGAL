<?php
include '../config.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Admin</title>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../dist/charts.css-0.9.0">
  <!--Load the AJAX API-->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Mushrooms', 3],
          ['Onions', 1],
          ['Olives', 1],
          ['Zucchini', 1],
          ['Pepperoni', 2]
        ]);

        // Set chart options
        var options = {'title':'Membership Details',
                       'width':440,
                       'height':440};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">

// Load the Visualization API and the corechart package.
google.charts.load('current', {'packages':['corechart']});

// Set a callback to run when the Google Visualization API is loaded.
google.charts.setOnLoadCallback(drawChart);

// Callback that creates and populates a data table,
// instantiates the pie chart, passes in the data and
// draws it.
function drawChart() {

  // Create the data table.
  var data = new google.visualization.DataTable();
  data.addColumn('string', 'Topping');
  data.addColumn('number', 'Slices');
  data.addRows([
    ['Mushrooms', 3],
    ['Onions', 1],
    ['Olives', 1],
    ['Zucchini', 1],
    ['Pepperoni', 2]
  ]);

  // Set chart options
  var options = {'title':'Membership Details',
                 'width':440,
                 'height':440};

  // Instantiate and draw our chart, passing in some options.
  var chart = new google.visualization.PieChart(document.getElementById('chart_dv'));
  chart.draw(data, options);
}
</script>
  <style>

      main {

        width: 100%;
      }
      table th{
        border-left: 2px solid #000;
        border-right: 2px solid #000;
        border-bottom: 2px solid #000;
        table-layout: auto;
        padding-left: 10px;
        padding-right: 10px;
        background-color: #D3D3D3	;
        
      }


        table td {
        border-left: 2px solid #000;
        border-right: 2px solid #000;
        table-layout: auto;
        text-align: center;
        }
        input {
        float: right;
        clear: both;
        margin-bottom: 30px;
        border-radius: 5px;
      }

        my-chart .bar{
        
        height: 300px;
        max-width: 600px;
        margin: 0 auto;
      }

      @media (min-width: 600px) {
        #my-chart .bar {
          height: 400px;
          max-width: 800px;
        }
      }

      @media (min-width: 1000px) {
        #my-chart .bar {
          height: 500px;
          max-width: 1000px;
        }
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



</style>
</head>

<body>


<main> 
          <div class="container-fluid"> 
                        <?php
                            
                            $count = mysqli_query($con, "SELECT * FROM regal_mem_details") or die(mysqli_error($con));
                            $row_count = mysqli_fetch_array($count);
                            if ($row_count != 0) {
                          ?>
            <br>
            
            <input id="myInput" type="text" placeholder="Search..">
              <table class="charts-css bar"  id="my-chart" style="width:100%" border='1'>
                  <thead class="thead-light">
                      <tr>
                        
                          <th>Name</th> 
                          <th>Email Id</th>
                          <th>Memtype</th>
                          <th>Amount</th>
                          <th>Txn Number</th>
                          <th>Start date</th>
                          <th>End date</th>
                          <th>Start Time</th>
                          <th>End Time</th>
                          <th>Usage</th>
                          <th>Duration</th>
                          <th>Added by</th>
                          <th>Activated by</th>
                      </tr>
                  </thead>
                    <?php $membership_details = mysqli_query($con,"SELECT * FROM regal_mem_details") or die(mysqli_error($con));
                      while ($row = mysqli_fetch_array($membership_details)) {
                    ?>
                    <tbody id="myTable">
                      <tr style="border-bottom:2px solid black" >
                        
                          <td><?php echo $row['Name']; ?></td>
                          <td><?php echo $row['email_id'];?></td>
                          <td><?php echo $row['mem_type'];?></td>
                          <td><?php echo $row['mem_amount'];?></td>
                          <td><?php echo $row['transaction_number'];?></td>
                          <td><?php echo $row['start_date'];?></td>
                          <td><?php echo $row['end_date'];?></td>
                          <td><?php echo $row['start_time'];?></td>
                          <td><?php echo $row['end_time'];?></td>
                          <td><?php echo $row['number_of_hours'];?></td>
                          <td><?php echo $row['duration'];?></td>
                          <td><?php echo $row['Added by'];?></td>
                          <td><?php echo $row['Activated by'];?></td>
                      </tr>
                    </tbody>
                  <?php } ?>
              </table>
                  <?php } ?>
          
          </div>
      </div>
      <div class="container">
          <div class="row">
            <div class="col-6">
                <div id="chart_div" style="margin-top: 20px;"></div>
            </div>
            <div class="col-6" style="float: right;"></div>
                <div id="chart_dv" style="margin-top: 20px;"></div>
            </div>
          </div>
      </div>  
       
           
</main>


     <script>
          // Get the modal
          var modal = document.getElementById("Modal");

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

    <script src="https://use.fontawesome.com/c8154970b8.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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



