<?php

require 'inc/common.php';

// connection
$db_dm = db_dm();

// Evaluate the connection
if (mysqli_connect_errno()) {
    echo mysqli_connect_error("Our database server is down at the moment. :(");
    exit();
} 
//initialize variables

//bldg info
$bldg_desc = '';
$ccps_facility_type_desc = '';
$ccpsf_amount = '';
$bldg_gross_sqft = '';
$bldg_curr_replacement_value = '';
$facility_condition_index = '';

//bldg scores
$structure_score = '';
$exterior_score = '';
$roof_score = '';
$hvac_score = '';
$electrical_score = '';
$plumbing_score = '';
$conveying_score = '';
$interior_score = '';
$score_average = '';

//bldg system crv's
$structural_deferred_maint = '';
$exterior_deferred_maint = '';
$roof_deferred_maint = '';
$hvac_deferred_maint = '';
$electrical_deferred_maint = '';
$plumbing_deferred_maint = '';
$conveying_deferred_maint = '';
$interior_deferred_maint = '';
$total_bldg_deferred_main = '';


$bldgNumber = $_GET['bldgNumber'];

//Get lists from db
$sql = mysqli_query($db_dm, "SELECT * FROM ssc_asmt_scores_calc WHERE bldg = '$bldgNumber'");
while($row = mysqli_fetch_array($sql)){
  $structure_score  = $row['structure_score'];
  $exterior_score  = $row['exterior_score'];
  $roof_score  = $row['roof_score'];
  $hvac_score  = $row['hvac_score'];
  $electrical_score  = $row['electrical_score'];
  $plumbing_score  = $row['plumbing_score'];
  $conveying_score  = $row['conveying_score'];
  $interior_score  = $row['interior_score'];
  $score_average  = $row['score_average'];

  $structural_deferred_maint  = $row['structural_deferred_maint'];
  $exterior_deferred_maint  = $row['exterior_deferred_maint'];
  $roof_deferred_maint  = $row['roof_deferred_maint'];
  $hvac_deferred_maint  = $row['hvac_deferred_maint'];
  $electrical_deferred_maint  = $row['electrical_deferred_maint'];
  $plumbing_deferred_maint  = $row['plumbing_deferred_maint'];
  $conveying_deferred_maint  = $row['conveying_deferred_maint'];
  $interior_deferred_maint  = $row['interior_deferred_maint'];
  $total_bldg_deferred_main  = $row['total_bldg_deferred_main'];
  $facility_condition_index  = $row['facility_condition_index'];

  
  $structure_score = $structure_score;
  $exterior_score = $exterior_score;
  $roof_score = $roof_score;
  $hvac_score = $hvac_score;
  $electrical_score = $electrical_score;
  $plumbing_score = $plumbing_score;
  $conveying_score = $conveying_score;
  $interior_score = $interior_score;
  $score_average = $score_average;

  $structural_deferred_maint = $structural_deferred_maint;
  $exterior_deferred_maint = $exterior_deferred_maint;
  $roof_deferred_maint = $roof_deferred_maint;
  $hvac_deferred_maint = $hvac_deferred_maint;
  $electrical_deferred_maint = $electrical_deferred_maint;
  $plumbing_deferred_maint = $plumbing_deferred_maint;
  $conveying_deferred_maint = $conveying_deferred_maint;
  $interior_deferred_maint = $interior_deferred_maint;
  $total_bldg_deferred_main = $total_bldg_deferred_main;
  $facility_condition_index = $facility_condition_index;
}

$structure_score = trim($structure_score, ",");
$exterior_score = trim($exterior_score, ",");
$roof_score = trim($hvac_score, ",");
$hvac_score = trim($hvac_score, ",");
$electrical_score = trim($electrical_score, ",");
$plumbing_score = trim($plumbing_score, ",");
$conveying_score = trim($conveying_score, ",");
$interior_score = trim($interior_score, ",");
$score_average = trim($score_average, ",");

$structural_deferred_maint = trim($structural_deferred_maint, ",");
$exterior_deferred_maint = trim($exterior_deferred_maint, ",");
$roof_deferred_maint = trim($roof_deferred_maint, ",");
$hvac_deferred_maint = trim($hvac_deferred_maint, ",");
$electrical_deferred_maint = trim($electrical_deferred_maint, ",");
$plumbing_deferred_maint = trim($plumbing_deferred_maint, ",");
$conveying_deferred_maint = trim($conveying_deferred_maint, ",");
$interior_deferred_maint = trim($interior_deferred_maint, ",");
$total_bldg_deferred_main = trim($total_bldg_deferred_main, ",");
$facility_condition_index = trim($facility_condition_index, ",");
?>
<!doctype html>
<html lang="en">
  <head>
   <input type="hidden" name="new_construction_avg"> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" type="text/css" href="style.css">
    <!-- Chart.js Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

         <script src="https://code.jquery.com/jquery-latest.js"></script>



    <title>Deferred Maintenance - Reports</title>
  </head>
  <body>
   <div class="fixed-top">
      <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #36845B;">
  <a class="navbar-brand" href="index.php">Deferred Maintenance</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="history.php">History</a>
      </li>      
      <li class="nav-item active">
        <a class="nav-link" href="reports.php">Reports<span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="../index.php?out=true" class="nav-link">Logout</a>
      </li>
    </ul>
  </div>
</nav>
    </div>
</nav>
    </div>
  <div class="content-reports">
    <h1>Reports</h1>
<div class="container">
  <div class="col-md-12 order-md-1">
    <div class="col-md-8 mb-4">
    <canvas id="scoresToAveragesChart"></canvas>
  </div>
  <div class="col-md-8 mb-4">
    <canvas id="assessmentAverageToCampusAverageChart"></canvas>
    </div>
    <div class="col-md-8 mb-4">
    <canvas id="sysDefMainttoCampusAverageChart"></canvas>
    </div>
    <div class="col-md-8 mb-4">
    <canvas id="bldgDefMainttoCampusAverageChart"></canvas>
    </div>
        <div class="col-md-8 mb-4">
    <canvas id="fciToCampusAverageChart"></canvas>
    </div>
  </div>
</div>
<!-- Chart 1 - Assesment Average Compared to Campus Wide Average-->
<script type="text/javascript">
  var ctx = document.getElementById("scoresToAveragesChart").getContext("2d");

var data = {
  labels: ["Structure", "Exterior", "Roof", "HVAC", "Electrical", "Plumbing", "Conveying", "Interior"],
  datasets: [{
    label: "Bldg <?php echo "$bldgNumber"; ?>",
    backgroundColor: "rgba(54, 162, 235, 0.6)",
    borderColor: "rgb(54, 162, 235)",
    borderWidth: 2,
    data: [<?php echo "$structure_score"; ?>, <?php echo "$exterior_score"; ?>, <?php echo "$roof_score"; ?>, <?php echo "$hvac_score"; ?>, <?php echo "$electrical_score"; ?>, <?php echo "$plumbing_score"; ?>, <?php echo "$conveying_score"; ?>, <?php echo "$interior_score"; ?>]
  }, {
    label: "Campus Averages",
    backgroundColor: "rgba(80, 0, 0, 0.6)",
    borderColor: "rgb(80, 0, 0)",
    borderWidth: 2,
    data: [4.32, 3.85, 3.83, 3.78, 3.88, 3.74, 4.32, 3.60]
  }]
};

var scoresToAveragesChart = new Chart(ctx, {
  type: 'bar',
  data: data,

  options: {
    responsive: true,
    legend: {
      position: 'top',
    },
    title: {
      display: true,
      text: 'Building System Assesment Scores Compared to Campus Averages'
    },
    barValueSpacing: 20,
    scales: {
      yAxes: [{
        ticks: {
          min: 0,
        }
      }]
    }
        }
      });

</script>
<!-- Chart 2 - Assesment Average Compared to Campus Wide Average-->
<script type="text/javascript">
  var ctx2 = document.getElementById("assessmentAverageToCampusAverageChart").getContext("2d");

var data = {
  datasets: [{
    label: "Bldg <?php echo "$bldgNumber"; ?>",
    backgroundColor: "rgba(54, 162, 235, 0.6)",
    borderColor: "rgb(54, 162, 235)",
    borderWidth: 2,
    data: [<?php echo $score_average; ?>]
  }, {
    label: "Campus Averages",
    backgroundColor: "rgba(80, 0, 0, 0.6)",
    borderColor: "rgb(80, 0, 0)",
    borderWidth: 2,
    data: [3.92]
  }]
};

var assessmentAverageToCampusAverageChart = new Chart(ctx2, {
  type: 'bar',
  data: data,

  options: {
    responsive: true,
    legend: {
      position: 'top',
    },
    title: {
      display: true,
      text: 'Assesment Average Compared to Campus Wide Average'
    },
    barValueSpacing: 1,
    scales: {
      yAxes: [{
        ticks: {
          min: 0,
        }
      }]
    }
        }
      });

</script>

<!-- Chart 3 - Calculated Building System Deferred Maintenance Compared to Campus Averages -->
<script type="text/javascript">
  var ctx3 = document.getElementById("sysDefMainttoCampusAverageChart").getContext("2d");

var data = {
  labels: ["Structure", "Exterior", "Roof", "HVAC", "Electrical", "Plumbing", "Conveying", "Interior"],
  datasets: [{
    label: "Bldg <?php echo "$bldgNumber"; ?>",
    backgroundColor: "rgba(54, 162, 235, 0.6)",
    borderColor: "rgb(54, 162, 235)",
    borderWidth: 2,
    data: [<?php echo "$structural_deferred_maint"; ?>, <?php echo "$exterior_deferred_maint"; ?>, <?php echo "$roof_deferred_maint"; ?>, <?php echo "$hvac_deferred_maint"; ?>, <?php echo "$electrical_deferred_maint"; ?>, <?php echo "$plumbing_deferred_maint"; ?>, <?php echo "$conveying_deferred_maint"; ?>, <?php echo "$interior_deferred_maint"; ?>]
  }, {
    label: "Campus Averages",
    backgroundColor: "rgba(80, 0, 0, 0.6)",
    borderColor: "rgb(80, 0, 0)",
    borderWidth: 2,
    data: [95817, 208243, 117266, 375801, 275887, 163041, 62072, 296257]
  }]
};

var sysDefMainttoCampusAverageChart = new Chart(ctx3, {
  type: 'bar',
  data: data,

  options: {
    responsive: true,
    legend: {
      position: 'top',
    },

    title: {
      display: true,
      text: 'Calculated Building System Deferred Maintenance Compared to Campus Averages'
    },
    tooltips: {
            mode: 'index',
            intersect: false,
            callbacks: {
                label: function (t, d) {
                    if (t.datasetIndex === 0) {
                        return '$' + t.yLabel.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                    } else if (t.datasetIndex === 1) {
                        if (t.yLabel.toString().length === 9) {
                            return '$' + t.yLabel.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        } else return '$' + t.yLabel.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                    }
                }
            }
        },
    barValueSpacing: 20,
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true,
            callback: function(value, index, values) {
              if(parseInt(value) >= 1000){
                return '$' + value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              } else {
                return '$' + value;
              }
            }
          }
        }]
      }
        }
      });
</script>

<!-- Chart 4 - Building Deferred Maintenance Compared to Campus Wide  Average -->
<script type="text/javascript">
  var ctx4 = document.getElementById("bldgDefMainttoCampusAverageChart").getContext("2d");

var data = {
  datasets: [{
    label: "Bldg <?php echo "$bldgNumber"; ?>",
    backgroundColor: "rgba(54, 162, 235, 0.6)",
    borderColor: "rgb(54, 162, 235)",
    borderWidth: 2,
    data: [<?php echo "$total_bldg_deferred_main"; ?>]
  }, {
    label: "Campus Averages",
    backgroundColor: "rgba(80, 0, 0, 0.6)",
    borderColor: "rgb(80, 0, 0)",
    borderWidth: 2,
    data: [1285831]
  }]
};

var bldgDefMainttoCampusAverageChart = new Chart(ctx4, {
  type: 'bar',
  data: data,

  options: {
    responsive: true,
    legend: {
      position: 'top',
    },
    title: {
      display: true,
      text: 'Building Deferred Maintenance Compared to Campus Wide Average'
    },
    tooltips: {
            mode: 'index',
            intersect: false,
            callbacks: {
                label: function (t, d) {
                    if (t.datasetIndex === 0) {
                        return '$' + t.yLabel.toString().replace(/w2\B(?=(\d{3})+(?!\d))/g, ",");
                    } else if (t.datasetIndex === 1) {
                        if (t.yLabel.toString().length === 9) {
                            return '$' + t.yLabel.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        } else return '$' + t.yLabel.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                    }
                }
            }
        },
    barValueSpacing: 20,
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true,
            callback: function(value, index, values) {
              if(parseInt(value) >= 1000){
                return '$' + value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              } else { 
                return '$' + value;
              }
            }
          }
        }]
      }
        }
      });

</script>
<!-- Chart 6 - Facility Condition Index Compared to Campus Wide  Average -->
<script type="text/javascript">
  var ctx6 = document.getElementById("fciToCampusAverageChart").getContext("2d");

var data = {
  datasets: [{
    label: "Bldg <?php echo "$bldgNumber"; ?>",
    backgroundColor: "rgba(54, 162, 235, 0.6)",
    borderColor: "rgb(54, 162, 235)",
    borderWidth: 2,
    data: [<?php echo $facility_condition_index; ?>]
  }, {
    label: "Campus Averages",
    backgroundColor: "rgba(80, 0, 0, 0.6)",
    borderColor: "rgb(80, 0, 0)",
    borderWidth: 2,
    data: [10.340]
  }]
};


var  ToCampusAverageChart = new Chart(ctx6, {
  type: 'bar',
  data: data,

  options: {
    responsive: true,
    legend: {
      position: 'top',
    },
    title: {
      display: true,
      text: 'Facility Condition Index Compared to Campus Wide  Average'
    },
    barValueSpacing: 1,
    scales: {
      yAxes: [{
        ticks: {
          min: 0,
        }
      }]
    }
        }
      });

</script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>