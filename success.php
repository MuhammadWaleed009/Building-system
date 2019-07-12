<?php

require 'inc/common.php';

$db_dm = db_dm();

  $bldgNumber = $_GET['bldgNumber'];


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



    <title>Deferred Maintenance - Submitted Successfully</title>
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
      <li class="nav-item ">
        <a class="nav-link" href="reports.php">Reports</a>
      </li>
    </ul>
  </div>
</nav>
    </div>
</nav>
    </div>
    <br>
<br>
<?php

  $sql =  mysqli_query($db_dm, "SELECT ssc_asmt_scores_calc_id, bldg, bldg_desc, ccps_facility_type_desc, bldg_gross_sqft, bldg_curr_replacement_value, assesment_date, total_bldg_deferred_main, facility_condition_index, structure_score, exterior_score, roof_score, hvac_score, electrical_score, plumbing_score, conveying_score, interior_score, lifesafety_score, ada_score, structural_deferred_maint, exterior_deferred_maint, roof_deferred_maint, hvac_deferred_maint, electrical_deferred_maint, plumbing_deferred_maint, conveying_deferred_maint, interior_deferred_maint FROM ssc_asmt_scores_calc WHERE bldg = '$bldgNumber' ORDER BY ssc_asmt_scores_calc_id DESC LIMIT 0, 1");

while($row = mysqli_fetch_array($sql)){
  $bldg_desc  = $row['bldg_desc'];
  $ccps_facility_type_desc  = $row['ccps_facility_type_desc'];
  $bldg_gross_sqft  = $row['bldg_gross_sqft'];
  $bldg_curr_replacement_value  = $row['bldg_curr_replacement_value'];
  $total_bldg_deferred_main  = $row['total_bldg_deferred_main'];
  $facility_condition_index  = $row['facility_condition_index'];
  $assesment_date  = $row['assesment_date'];

  $structure_score  = $row['structure_score'];
  $exterior_score  = $row['exterior_score'];
  $roof_score  = $row['roof_score'];
  $hvac_score  = $row['hvac_score'];
  $electrical_score  = $row['electrical_score'];
  $plumbing_score  = $row['plumbing_score'];
  $conveying_score  = $row['conveying_score'];
  $interior_score  = $row['interior_score'];
  $lifesafety_score  = $row['lifesafety_score'];
  $ada_score  = $row['ada_score'];

  $structural_deferred_maint  = $row['structural_deferred_maint'];
  $exterior_deferred_maint  = $row['exterior_deferred_maint'];
  $roof_deferred_maint  = $row['roof_deferred_maint'];
  $hvac_deferred_maint  = $row['hvac_deferred_maint'];
  $electrical_deferred_maint  = $row['electrical_deferred_maint'];
  $plumbing_deferred_maint  = $row['plumbing_deferred_maint'];
  $conveying_deferred_maint  = $row['conveying_deferred_maint'];
  $interior_deferred_maint  = $row['interior_deferred_maint'];

  $bldg_desc = $bldg_desc;
  $ccps_facility_type_desc = $ccps_facility_type_desc;
  $bldg_gross_sqft = round($bldg_gross_sqft);
  $bldg_curr_replacement_value = money_format("%!n", $bldg_curr_replacement_value);
  $total_bldg_deferred_main = money_format("%!n", $total_bldg_deferred_main);
  $facility_condition_index = round($facility_condition_index)."%";
  $assesment_date = date( 'F j, Y',strtotime($assesment_date));

  $structure_score = $structure_score;
  $exterior_score = $exterior_score;
  $roof_score = $roof_score;
  $hvac_score = $hvac_score;
  $electrical_score = $electrical_score;
  $plumbing_score = $plumbing_score;
  $conveying_score = $conveying_score;
  $interior_score = $interior_score;
  $lifesafety_score = $lifesafety_score;
  $ada_score = $ada_score;

  $structural_deferred_maint = money_format("%!n", $structural_deferred_maint);
  $exterior_deferred_maint = money_format("%!n", $exterior_deferred_maint);
  $roof_deferred_maint = money_format("%!n", $roof_deferred_maint);
  $hvac_deferred_maint = money_format("%!n", $hvac_deferred_maint);
  $electrical_deferred_maint = money_format("%!n", $electrical_deferred_maint);
  $plumbing_deferred_maint = money_format("%!n", $plumbing_deferred_maint);
  $conveying_deferred_maint = money_format("%!n", $conveying_deferred_maint);
  $interior_deferred_maint = money_format("%!n", $interior_deferred_maint);

}


?>
    <h2><i class="fas fa-check-circle"></i> Calculation Submitted Successfully for <b><?php echo "$bldg_desc - $bldgNumber" ; ?></b> </h2>

<br>

<div id="parent">
  <div id="wide"><?php echo "$bldg_desc - $bldgNumber" ; ?></div>
</div>
  
  


<div class="">
  <b>Assesment Date: </b> <?php echo "$assesment_date"; ?>
</div>
  <div class="assessment-info">
<b>Facility Type: </b> <?php echo "$ccps_facility_type_desc"; ?>
  |
<b>Square Feet: </b><?php echo "$bldg_gross_sqft"; ?>

</div>



<table class="table table-responsive-sm">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Structure</th>
      <th scope="col">Exterior</th>
      <th scope="col">Roof</th>
      <th scope="col">HVAC</th>
      <th scope="col">Electrical</th>
      <th scope="col">Plumbing</th>
      <th scope="col">Conveying</th>
      <th scope="col">Interior</th>
      <th scope="col">FLS</th>
      <th scope="col">TAS/ADA</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Score</th>
      <td><?php echo "$structure_score" ; ?></td>
      <td><?php echo "$exterior_score" ; ?></td>
      <td><?php echo "$roof_score" ; ?></td>
      <td><?php echo "$hvac_score" ; ?></td>
      <td><?php echo "$electrical_score" ; ?></td>
      <td><?php echo "$plumbing_score" ; ?></td>
      <td><?php echo "$conveying_score" ; ?></td>
      <td><?php echo "$interior_score" ; ?></td>
      <td><?php echo "$lifesafety_score" ; ?></td>
      <td><?php echo "$ada_score" ; ?></td>


    </tr>
    <tr>
      <th scope="row">Estimated DM</th>
      <td>$<?php echo "$structural_deferred_maint" ; ?></td>
      <td>$<?php echo "$exterior_deferred_maint" ; ?></td>
      <td>$<?php echo "$roof_deferred_maint" ; ?></td>
      <td>$<?php echo "$hvac_deferred_maint" ; ?></td>
      <td>$<?php echo "$electrical_deferred_maint" ; ?></td>
      <td>$<?php echo "$plumbing_deferred_maint" ; ?></td>
      <td>$<?php echo "$conveying_deferred_maint" ; ?></td>
      <td>$<?php echo "$interior_deferred_maint" ; ?></td>
      <td>$0.00</td>
      <td>$0.00</td>
    </tr>
  </tbody>
</table>
<div class="padder-left">
<b>DM Total: </b>$<input class="input-clear" type="text" id="totaldm" name="totaldm" value="<?php echo "$total_bldg_deferred_main"; ?>" readonly="readonly" />
<b>CRV: </b>$<input class="input-clear" type="text" id="currentreplacement" name="currentreplacement" value="<?php echo "$bldg_curr_replacement_value"; ?>" readonly="readonly" />
<b>FCI: </b><input class="input-clear" type="text" id="facilityconditionindex" name="facilityconditionindex" value="<?php echo "$facility_condition_index"; ?>" readonly="readonly" />

</div>




</table>
<?php mysqli_close($db_dm); ?>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<br>
      <div class="button-box col-lg-12">
                <button class="btn btn-success btn-lg" onclick="location.href='./index.php';" >Submit New Calculation</button>
                <button class="btn btn-success btn-lg" onclick="location.href='history.php?bldgNumber=<?php echo "$bldgNumber" ; ?>';" name="view_history">View History</button>
                <button class="btn btn-success btn-lg" onclick="location.href='#';" name="create_report">Create Report</button>
       </div>
  </body>
</html>