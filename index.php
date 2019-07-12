<?php
// Start the session
session_start();
?>
<?php

require 'inc/common.php';
$db_dm = db_dm();


if(isset($_POST['structureupload'])){
	$image_name = $_FILES['structureimage']['name'];
	$image_type = $_FILES['structureimage']['type'];
	$image_size = $_FILES['structureimage']['size'];
	$image_tmp_name= $_FILES['structureimage']['tmp_name'];

		

  move_uploaded_file($image_tmp_name,"images/$image_name");
  $bld=$_SESSION['bld'];
  $syste="structure";

  $sql="INSERT INTO `images` (`bldnumber`, `system`, `url`) VALUES ('$bld', '$syste', 'images/$image_name')";
  if ($db_dm->query($sql) === TRUE) {
    echo "data inserted";
  }
  else 
  {
      echo "failed";
  }

}
if(isset($_POST['Exteriorupload'])){
	$image_name = $_FILES['Exteriorimage']['name'];
	$image_type = $_FILES['Exteriorimage']['type'];
	$image_size = $_FILES['Exteriorimage']['size'];
	$image_tmp_name= $_FILES['Exteriorimage']['tmp_name'];

		

  move_uploaded_file($image_tmp_name,"images/$image_name");
  $bld=$_SESSION['bld'];
  $syste="Exterior";

  $sql="INSERT INTO `images` (`bldnumber`, `system`, `url`) VALUES ('$bld', '$syste', 'images/$image_name')";
  if ($db_dm->query($sql) === TRUE) {
    echo "data inserted";
  }
  else 
  {
      echo "failed";
  }

}
if(isset($_POST['Roofupload'])){
	$image_name = $_FILES['Roofimage']['name'];
	$image_type = $_FILES['Roofimage']['type'];
	$image_size = $_FILES['Roofimage']['size'];
	$image_tmp_name= $_FILES['Roofimage']['tmp_name'];

		

  move_uploaded_file($image_tmp_name,"images/$image_name");
  $bld=$_SESSION['bld'];
  $syste="Roof";

  $sql="INSERT INTO `images` (`bldnumber`, `system`, `url`) VALUES ('$bld', '$syste', 'images/$image_name')";
  if ($db_dm->query($sql) === TRUE) {
    echo "data inserted";
  }
  else 
  {
      echo "failed";
  }

}
if(isset($_POST['HAVCupload'])){
	$image_name = $_FILES['HAVCimage']['name'];
	$image_type = $_FILES['HAVCimage']['type'];
	$image_size = $_FILES['HAVCimage']['size'];
	$image_tmp_name= $_FILES['HAVCimage']['tmp_name'];

		

  move_uploaded_file($image_tmp_name,"images/$image_name");
  $bld=$_SESSION['bld'];
  $syste="HAVC";

  $sql="INSERT INTO `images` (`bldnumber`, `system`, `url`) VALUES ('$bld', '$syste', 'images/$image_name')";
  if ($db_dm->query($sql) === TRUE) {
    echo "data inserted";
  }
  else 
  {
      echo "failed";
  }

}
if(isset($_POST['electricalupload'])){
	$image_name = $_FILES['electricalimage']['name'];
	$image_type = $_FILES['electricalimage']['type'];
	$image_size = $_FILES['electricalimage']['size'];
	$image_tmp_name= $_FILES['electricalimage']['tmp_name'];

		

  move_uploaded_file($image_tmp_name,"images/$image_name");
  $bld=$_SESSION['bld'];
  $syste="electrical";

  $sql="INSERT INTO `images` (`bldnumber`, `system`, `url`) VALUES ('$bld', '$syste', 'images/$image_name')";
  if ($db_dm->query($sql) === TRUE) {
    echo "data inserted";
  }
  else 
  {
      echo "failed";
  }

}
if(isset($_POST['plumbingupload'])){
	$image_name = $_FILES['plumbingimage']['name'];
	$image_type = $_FILES['plumbingimage']['type'];
	$image_size = $_FILES['plumbingimage']['size'];
	$image_tmp_name= $_FILES['plumbingimage']['tmp_name'];

		

  move_uploaded_file($image_tmp_name,"images/$image_name");
  $bld=$_SESSION['bld'];
  $syste="plumbing";

  $sql="INSERT INTO `images` (`bldnumber`, `system`, `url`) VALUES ('$bld', '$syste', 'images/$image_name')";
  if ($db_dm->query($sql) === TRUE) {
    echo "data inserted";
  }
  else 
  {
      echo "failed";
  }

}
if(isset($_POST['conveyingupload'])){
	$image_name = $_FILES['conveyingimage']['name'];
	$image_type = $_FILES['conveyingimage']['type'];
	$image_size = $_FILES['conveyingimage']['size'];
	$image_tmp_name= $_FILES['conveyingimage']['tmp_name'];

		

  move_uploaded_file($image_tmp_name,"images/$image_name");
  $bld=$_SESSION['bld'];
  $syste="conveying";

  $sql="INSERT INTO `images` (`bldnumber`, `system`, `url`) VALUES ('$bld', '$syste', 'images/$image_name')";
  if ($db_dm->query($sql) === TRUE) {
    echo "data inserted";
  }
  else 
  {
      echo "failed";
  }

}
if(isset($_POST['interiorupload'])){
	$image_name = $_FILES['interiorimage']['name'];
	$image_type = $_FILES['interiorimage']['type'];
	$image_size = $_FILES['interiorimage']['size'];
	$image_tmp_name= $_FILES['interiorimage']['tmp_name'];

		

  move_uploaded_file($image_tmp_name,"images/$image_name");
  $bld=$_SESSION['bld'];
  $syste="interior";

  $sql="INSERT INTO `images` (`bldnumber`, `system`, `url`) VALUES ('$bld', '$syste', 'images/$image_name')";
  if ($db_dm->query($sql) === TRUE) {
    echo "data inserted";
  }
  else 
  {
      echo "failed";
  }

}

if(isset($_POST['Safetyupload'])){
	$image_name = $_FILES['Safetyimage']['name'];
	$image_type = $_FILES['Safetyimage']['type'];
	$image_size = $_FILES['Safetyimage']['size'];
	$image_tmp_name= $_FILES['Safetyimage']['tmp_name'];

		

  move_uploaded_file($image_tmp_name,"images/$image_name");
  $bld=$_SESSION['bld'];
  $syste="Safety";

  $sql="INSERT INTO `images` (`bldnumber`, `system`, `url`) VALUES ('$bld', '$syste', 'images/$image_name')";
  if ($db_dm->query($sql) === TRUE) {
    echo "data inserted";
  }
  else 
  {
      echo "failed";
  }

}
if(isset($_POST['ADAupload'])){
	$image_name = $_FILES['ADAimage']['name'];
	$image_type = $_FILES['ADAimage']['type'];
	$image_size = $_FILES['ADAimage']['size'];
	$image_tmp_name= $_FILES['ADAimage']['tmp_name'];

		

  move_uploaded_file($image_tmp_name,"images/$image_name");
  $bld=$_SESSION['bld'];
  $syste="ADA";

  $sql="INSERT INTO `images` (`bldnumber`, `system`, `url`) VALUES ('$bld', '$syste', 'images/$image_name')";
  if ($db_dm->query($sql) === TRUE) {
    echo "data inserted";
  }
  else 
  {
      echo "failed";
  }

}



if(isset($_POST['Submit'])){ //check if form was submitted

  $bldgNumber = $_POST['bldgNumber'];

  $sql = "SELECT facility_type_descp FROM ssc_properties WHERE bldg = '$bldgNumber'";

  $result = mysqli_query($db_dm, $sql);

  while($row = mysqli_fetch_array($result)){

    echo '<div class="padder-left">
<input class="input-clear" type="hidden" id="facType" name="facType" value="'.$row['facility_type_descp'].'" readonly="readonly" />
</div>';
$facType = $row['facility_type_descp'];
}
  $message = "Bldg Number: $bldgNumber" . '<br>' . "Facility Type: $facType";

  $sql = "SELECT facility_type_descp, new_construction_avg, structure_system_distribution, exterior_system_distribution, roof_system_distribution, hvac_system_distribution, electrical_system_distribution, plumbing_system_distribution, conveying_system_distribution, interior_system_distribution FROM ccps_codes WHERE facility_type_descp = '$facType'";

  $result = mysqli_query($db_dm, $sql);

  while($row = mysqli_fetch_array($result)){

echo '<input type="hidden" id="new_construction_avg" name="new_construction_avg" value="'.$row['new_construction_avg'].'">';
echo '<input type="hidden" id="facility_type_descp" name="facility_type_descp" value="'.$row['facility_type_descp'].'">';

echo '<input type="hidden" id="structure_system_distribution" name="structure_system_distribution" value="'.$row['structure_system_distribution'].'">';
echo '<input type="hidden" id="exterior_system_distribution" name="exterior_system_distribution" value="'.$row['exterior_system_distribution'].'">';
echo '<input type="hidden" id="roof_system_distribution" name="roof_system_distribution" value="'.$row['roof_system_distribution'].'">';
echo '<input type="hidden" id="hvac_system_distribution" name="hvac_system_distribution" value="'.$row['hvac_system_distribution'].'">';
echo '<input type="hidden" id="electrical_system_distribution" name="electrical_system_distribution" value="'.$row['electrical_system_distribution'].'">';
echo '<input type="hidden" id="plumbing_system_distribution" name="plumbing_system_distribution" value="'.$row['plumbing_system_distribution'].'">';
echo '<input type="hidden" id="conveying_system_distribution" name="conveying_system_distribution" value="'.$row['conveying_system_distribution'].'">';
echo '<input type="hidden" id="interior_system_distribution" name="interior_system_distribution" value="'.$row['interior_system_distribution'].'">';
echo '<input type="hidden" id="lifesafety_system_distribution" name="lifesafety_system_distribution" value="">';
echo '<input type="hidden" id="ada_system_distribution" name="ada_system_distribution" value="">';
}

$sql = "SELECT bldg_desc FROM ssc_properties WHERE bldg = '$bldgNumber'";

  $result = mysqli_query($db_dm, $sql);

  while($row = mysqli_fetch_array($result)){

    echo '<input type="hidden" id="bldg_desc" name="bldg_desc" value="'.$row['bldg_desc'].'">';

}

}    


if(isset($_POST['Save'])){ //check if form was submitted

$bldgNumberHist = $_POST['bldgNumberHist'];
$bldgDescHist = $_POST['bldgDescHist'];
$ccpsFacHist = $_POST['ccpsFacHist'];
$ccpsfAmountHist = $_POST['ccpsfAmountHist'];
$timestamp = date('Y-m-d H:i:s');
$structureHist = $_POST['structureHist'];
$exteriorHist = $_POST['exteriorHist'];
$roofHist = $_POST['roofHist'];
$hvacHist = $_POST['hvacHist'];
$electricalHist = $_POST['electricalHist'];
$plumbingHist = $_POST['plumbingHist'];
$conveyingHist = $_POST['conveyingHist'];
$interiorHist = $_POST['interiorHist'];
$lifeSafetyHist = $_POST['lifeSafetyHist'];
$adaHist = $_POST['adaHist'];
$crvHist = $_POST['crvHist'];
$fciHist = $_POST['fciHist'];
$sqftHist = $_POST['sqftHist'];
$scoreAverage = $_POST['scoreAverage'];

// Max Sys Def
$structureMaxSysDefHist = $_POST['structureMaxSysDefHist'];
$exteriorMaxSysDefHist = $_POST['exteriorMaxSysDefHist'];
$roofMaxSysDefHist = $_POST['roofMaxSysDefHist'];
$hvacMaxSysDefHist = $_POST['hvacMaxSysDefHist'];
$electricalMaxSysDefHist = $_POST['electricalMaxSysDefHist'];
$plumbingMaxSysDefHist = $_POST['plumbingMaxSysDefHist'];
$conveyingMaxSysDefHist = $_POST['conveyingMaxSysDefHist'];
$interiorMaxSysDefHist = $_POST['interiorMaxSysDefHist'];
$lifeSafetyMaxSysDefHist = $_POST['lifeSafetyMaxSysDefHist'];
$adaMaxSysDefHist = $_POST['adaMaxSysDefHist'];

// Estimated Sys DM
$SysstructureValHist = $_POST['SysstructureValHist'];
$SysexteriorValHist = $_POST['SysexteriorValHist'];
$SysroofValHist = $_POST['SysroofValHist'];
$SyshvacValHist = $_POST['SyshvacValHist'];
$SyselectricalValHist = $_POST['SyselectricalValHist'];
$SysplumbingValHist = $_POST['SysplumbingValHist'];
$SysconveyingValHist = $_POST['SysconveyingValHist'];
$SysinteriorValHist = $_POST['SysinteriorValHist'];

//Notes

$structureNotes = $_POST['structureNotes'];
$exteriorNotes = $_POST['exteriorNotes'];
$roofNotes = $_POST['roofNotes'];
$hvacNotes = $_POST['hvacNotes'];
$electricalNotes = $_POST['electricalNotes'];
$plumbingNotes = $_POST['plumbingNotes'];
$conveyingNotes = $_POST['conveyingNotes'];
$interiorNotes = $_POST['interiorNotes'];
$adaNotes = $_POST['adaNotes'];
$dmTotalCompleteHist = $_POST['dmTotalCompleteHist'];



$sql = "INSERT INTO `ssc_ampt_property_management`.`ssc_asmt_scores_calc` (`bldg_id`, `bldg`, `bldg_desc`,`ccps_facility_type_desc`, `ccpsf_amount`, `bldg_gross_sqft`, `bldg_curr_replacement_value`, `assesment_date`, `structure_curr_replacement_value`, `exterior_curr_replacement_value`, `roof_curr_replacement_value`, `hvac_curr_replacement_value`, `electrical_curr_replacement_value`, `plumbing_curr_replacement_value`, `conveying_curr_replacement_value`, `interior_curr_replacement_value`, `structural_deferred_maint`, `exterior_deferred_maint`, `roof_deferred_maint`, `hvac_deferred_maint`, `electrical_deferred_maint`, `plumbing_deferred_maint`, `conveying_deferred_maint`, `interior_deferred_maint`, `total_bldg_deferred_main`, `facility_condition_index`, `structure_score`, `exterior_score`, `roof_score`, `hvac_score`, `electrical_score`, `plumbing_score`, `conveying_score`, `interior_score`, `lifesafety_score`, `ada_score`, `score_average`, `structure_notes`, `exterior_notes`, `roof_notes`, `hvac_notes`, `electrical_notes`, `plumbing_notes`, `conveying_notes`, `interior_notes`, `lifesafety_notes`, `ada_notes`) VALUES ((SELECT bldg_id FROM ssc_properties WHERE bldg ='$bldgNumberHist'), '$bldgNumberHist', '$bldgDescHist', '$ccpsFacHist', '$ccpsfAmountHist', '$sqftHist', '$crvHist', '$timestamp', '$structureMaxSysDefHist', '$exteriorMaxSysDefHist', '$roofMaxSysDefHist', '$hvacMaxSysDefHist', '$electricalMaxSysDefHist', '$plumbingMaxSysDefHist', '$conveyingMaxSysDefHist', '$interiorMaxSysDefHist', '$SysstructureValHist', '$SysexteriorValHist', '$SysroofValHist', '$SyshvacValHist', '$SyselectricalValHist', '$SysplumbingValHist', '$SysconveyingValHist', '$SysinteriorValHist','$dmTotalCompleteHist', '$fciHist', '$structureHist', '$exteriorHist', '$roofHist', '$hvacHist', '$electricalHist', '$plumbingHist', '$conveyingHist', '$interiorHist', '$lifeSafetyHist', '$adaHist', '$scoreAverage', '$structureNotes', '$exteriorNotes', '$roofNotes', '$hvacNotes', '$electricalNotes', '$plumbingNotes', '$conveyingNotes', '$interiorNotes', '$lifeSafetyNotes', '$adaNotes')";

  $result = mysqli_query($db_dm, $sql);



header("Location: success.php?bldgNumber=$bldgNumberHist");


}


?>
<!doctype html>
<html lang="en">
  <head>
   <input type="hidden" name="new_construction_avg"> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

         <script src="https://code.jquery.com/jquery-latest.js"></script>

<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#008651">
<meta name="msapplication-TileColor" content="#00a300">
<meta name="theme-color" content="#ffffff">

    <title>Deferred Maintenance</title>
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
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="history.php">History</a>
      </li>     
      <li class="nav-item">
        <a class="nav-link" href="reports.php">Reports</a>
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
    <div class="content">
    <h1>Deferred Maintenance Calculator</h1>
    <div class="col-6 col-md-8 order-md-1">
          <form class="needs-validation" autocomplete="off" action="" method="post" novalidate>
            <div class="row">
              <div class="col-sm-6 col-md-5 mb-2">
                <label for="firstName">Building Number</label>
                <div class="input-group mb-3">
                <input type="text" class="form-control form-req" readonly name="bldgNumber" id="bldgNumber" placeholder="Please use the 'Lookup' button.
" value="<?php echo isset($_POST['bldgNumber']) ? $_POST['bldgNumber'] : '' ?>" required aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary form-req" type="button" id="bldg-lookup-btn" data-toggle="modal" data-target="#bldgModal">Lookup</button>
  </div>
</div>
<!-- Building Modal -->
<div class="modal fade" id="bldgModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h2 classsd="modal-title"><i class="fas fa-building"></i> Building Search</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="padding:30px 50px;">
        <input type="text" class="form-control" name="filterbox" id="filterbox" placeholder="" >  
        <div class="bldg-list" style="padding:10px ;">
        <ul id="bldglist">
        </ul>
        </div>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<script>
  //jquery
  //          TRYING TO FIGURE OUT HOW TO BOLD THE MENU ITEM HDRS THAT ARE EXPANDED.  \\
  /*$(document).ready(function(){
      $("#indexForm").submit(function(){
         //alert("AAA" + document.activeElement.tagName);
      });
  });*/

  //set the autfocus for the text input on the modal after it is shown
  $(document).ready(function(){
     $('#bldgModal').on('shown.bs.modal', function () {
         $('#filterbox').focus();
       });
  });
  //This code is necessary to prevent the modal from closing and jumping to another page if the user hits enter.
  //It also simulates a click on the list item if there is only one item in the list.
  $( '#bldgModal' ).on( 'keypress keyup', function( e ) {
    //user hit enter
    if( e.keyCode === 13 ) {
      if ($("#bldglist li").length==1) {
        e.preventDefault();
        //since there is only one item in the list, "click" it
        $( "#litem" ).click();
      } else {
        //there are either no items or more than one in the list, so ignore the "enter"
        e.preventDefault();
      }
    }
  });

  //Populate a global variable array from values stored in a text file whose format is like "1600":"(1600) Texas Transportation Institute", "1300":"(1300) Animal Lab", "0345":"(0345) Cost Center Building".
  var bldgs = {<?php include 'buildinglist.txt'; ?>}; 
  //do a search of this array every time a char is entered, and rebuild the ui list with the items that match.
  $(document).ready(function(){
      $("#filterbox").on('input', function(){
      //regular javascript
      var matchstring = document.getElementById("filterbox").value;
      matchstring = matchstring.toUpperCase();
      var bldgsfound = "";
      if (matchstring!==null & matchstring!==" ") {
        for (var key in bldgs) {
          //alert(key + " " + bldgs[key]);
          //alert(bldgs[key].search(matchstring));
          if (bldgs[key]['description'].toUpperCase().search(matchstring)>-1) {
              bldgsfound = bldgsfound + "<li class='mh' id='litem' value='" + key + "' onclick='document.getElementById(\"bldgNumber\").value=\"" + key + "\"; document.getElementById(\"bldg-desc\").value=\"" + bldgs[key]['description'] + "\"; document.getElementById(\"regionCode\").value=\"" + bldgs[key]['region'] + "\"; document.getElementById(\"facId\").value=\"" + bldgs[key]['fac_id'] + "\";' data-dismiss='modal' >" + bldgs[key]['description'] + "</li>";
          }
        }
        document.getElementById("bldglist").innerHTML = bldgsfound;
        //$("#bldg").trigger("click");
      } else {
        for (var key in bldgs) {
          bldgsfound = bldgsfound + "<li class='mh' value='" + key + "' onclick='document.getElementById(\"bldgNumber\").value=\"" + key + "\"; document.getElementById(\"bldg-desc\").value=\"" + bldgs[key]['description'] + "\"; document.getElementById(\"regionCode\").value=\"" + bldgs[key]['region'] + "\"; document.getElementById(\"facId\").value=\"" + bldgs[key]['fac_id'] + "\";' data-dismiss='modal'>" + bldgs[key]['description'] + "</li>";
        }
        document.getElementById("bldglist").innerHTML = bldgsfound;
      }
      });
  });            
  //when the modal closes, run the script that makes an ajax call to the server to populate the room numbers for the building.
  $('#bldgModal').on('hidden.bs.modal', function () {
    //the hidden text element modalCloseReason is set to 'Cancel' if either cancel button is clicked
    var cause = document.getElementById('modalCloseReason').value;
    document.getElementById('modalCloseReason').value="";
    //if the cause var is null then neither cancel button was clicked
    if (cause=='') {
      if (typeof showRooms === 'function') {
        showRooms();
      }
    }

  
  });
</script>

</div>

              <div class="col-md-4 mb-4 invisible">
              </div>

              <hr class="mb-4">
           <div class="col-md-4 mb-2">
              <button class="btn btn-success btn-lg btn-block" name="Submit" type="submit">Calculate</button>
          </div>
            </div>

        </form>
 
    </div>
  
<?php 
if(isset($_POST['Submit'])){

       include "score.php";

}

?>
    <input type="hidden" id="structureMaxSysDef" name="structureMaxSysDef" value="">
    <input type="hidden" id="exteriorMaxSysDef" name="exteriorMaxSysDef" value="">
    <input type="hidden" id="roofMaxSysDef" name="roofMaxSysDef" value="">
    <input type="hidden" id="hvacMaxSysDef" name="hvacMaxSysDef" value="">
    <input type="hidden" id="electricalMaxSysDef" name="electricalMaxSysDef" value="">
    <input type="hidden" id="plumbingMaxSysDef" name="plumbingMaxSysDef" value="">
    <input type="hidden" id="conveyingMaxSysDef" name="conveyingMaxSysDef" value="">
    <input type="hidden" id="interiorMaxSysDef" name="interiorMaxSysDef" value="">
    <input type="hidden" id="lifeSafetyMaxSysDef" name="lifeSafetyMaxSysDef" value="">
    <input type="hidden" id="adaMaxSysDef" name="adaMaxSysDef" value="">


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script>
// Disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

// Update and Calculate DM Total
      
       function SysCalc(sys) {
        var crv = document.getElementById("new_construction_avg").value * document.getElementById("sqFt").value;
        document.getElementById("crv").value = crv.toLocaleString('en-US', { style: 'currency', currency: 'USD' });


        var structureMaxSysDef = document.getElementById("structure_system_distribution").value * crv;
        document.getElementById("structureMaxSysDef").value = structureMaxSysDef;

        var exteriorMaxSysDef = document.getElementById("exterior_system_distribution").value * crv;
        document.getElementById("exteriorMaxSysDef").value = exteriorMaxSysDef;

        var roofMaxSysDef = document.getElementById("roof_system_distribution").value * crv;
        document.getElementById("roofMaxSysDef").value = roofMaxSysDef;

        var hvacMaxSysDef = document.getElementById("hvac_system_distribution").value * crv;
        document.getElementById("hvacMaxSysDef").value = hvacMaxSysDef;

        var electricalMaxSysDef = document.getElementById("electrical_system_distribution").value * crv;
        document.getElementById("electricalMaxSysDef").value = electricalMaxSysDef;

        var plumbingMaxSysDef = document.getElementById("plumbing_system_distribution").value * crv;
        document.getElementById("plumbingMaxSysDef").value = plumbingMaxSysDef;

        var conveyingMaxSysDef = document.getElementById("conveying_system_distribution").value * crv;
        document.getElementById("conveyingMaxSysDef").value = conveyingMaxSysDef;

        var interiorMaxSysDef = document.getElementById("interior_system_distribution").value * crv;
        document.getElementById("interiorMaxSysDef").value = interiorMaxSysDef;

        var lifeSafetyMaxSysDef = document.getElementById("lifesafety_system_distribution").value * crv;
        document.getElementById("lifeSafetyMaxSysDef").value = lifeSafetyMaxSysDef;

        var adaMaxSysDef = document.getElementById("ada_system_distribution").value * crv;
        document.getElementById("adaMaxSysDef").value = adaMaxSysDef;

        var fci = Number(document.getElementById("dmTotalComplete").value.replace('$', '').replace(',', '').replace(',', '')) / Number(document.getElementById("crv").value.replace('$', '').replace(',', '').replace(',', '')) * 100;

        document.getElementById("fci").value =  Math.round(fci) +'%';


// Update Sys + sys + Val on select.

        var StructureSysID = document.getElementById("structure");
        var StructureValue = StructureSysID[StructureSysID.selectedIndex].value;
        var StructureSysID = StructureValue * structureMaxSysDef;
        document.getElementById("SysstructureVal").value = Math.round(StructureSysID).toLocaleString('en-US', { style: 'currency', currency: 'USD' });

        var ExteriorSysID = document.getElementById("exterior");
        var ExteriorValue = ExteriorSysID[ExteriorSysID.selectedIndex].value;
        var ExteriorSysID = ExteriorValue * exteriorMaxSysDef;
        document.getElementById("SysexteriorVal").value = Math.round(ExteriorSysID).toLocaleString('en-US', { style: 'currency', currency: 'USD' });

        var RoofSysID = document.getElementById("roof");
        var RoofValue = RoofSysID[RoofSysID.selectedIndex].value;
        var RoofSysID = RoofValue * roofMaxSysDef;
        document.getElementById("SysroofVal").value = Math.round(RoofSysID).toLocaleString('en-US', { style: 'currency', currency: 'USD' });

        var HVACSysID = document.getElementById("hvac");
        var HVACValue = HVACSysID[HVACSysID.selectedIndex].value;
        var HVACSysID = HVACValue * hvacMaxSysDef;
        document.getElementById("SyshvacVal").value = Math.round(HVACSysID).toLocaleString('en-US', { style: 'currency', currency: 'USD' });

        var ElectricalSysID = document.getElementById("electrical");
        var ElectricalValue = ElectricalSysID[ElectricalSysID.selectedIndex].value;
        var ElectricalSysID = ElectricalValue * electricalMaxSysDef;
        document.getElementById("SyselectricalVal").value = Math.round(ElectricalSysID).toLocaleString('en-US', { style: 'currency', currency: 'USD' });

        var PlumbingSysID = document.getElementById("plumbing");
        var PlumbingValue = PlumbingSysID[PlumbingSysID.selectedIndex].value;
        var PlumbingSysID = PlumbingValue * plumbingMaxSysDef;
        document.getElementById("SysplumbingVal").value = Math.round(PlumbingSysID).toLocaleString('en-US', { style: 'currency', currency: 'USD' });

        var ConveyingSysID = document.getElementById("conveying");
        var ConveyingValue = ConveyingSysID[ConveyingSysID.selectedIndex].value;
        var ConveyingSysID = ConveyingValue * conveyingMaxSysDef;
        document.getElementById("SysconveyingVal").value = Math.round(ConveyingSysID).toLocaleString('en-US', { style: 'currency', currency: 'USD' });

        var InteriorSysID = document.getElementById("interior");
        var InteriorValue = InteriorSysID[InteriorSysID.selectedIndex].value;
        var InteriorSysID = InteriorValue * interiorMaxSysDef;
        document.getElementById("SysinteriorVal").value = Math.round(InteriorSysID).toLocaleString('en-US', { style: 'currency', currency: 'USD' });

        var LifeSafetySysID = document.getElementById("lifeSafety");
        var LifeSafetyValue = LifeSafetySysID[LifeSafetySysID.selectedIndex].value;
        var LifeSafetySysID = LifeSafetyValue * lifeSafetyMaxSysDef;
        document.getElementById("SyslifeSafetyVal").value = Math.round(LifeSafetySysID).toLocaleString('en-US', { style: 'currency', currency: 'USD' });

        var adaSysID = document.getElementById("ada");
        var adaValue = adaSysID[adaSysID.selectedIndex].value;
        var adaSysID = adaValue * adaMaxSysDef;
        document.getElementById("SysadaVal").value = Math.round(adaSysID).toLocaleString('en-US', { style: 'currency', currency: 'USD' });


        var dmTotalComplete = parseFloat(document.getElementById("SysstructureVal").value.replace('$', '').replace(',', '').replace(',', '')) + parseFloat(document.getElementById("SysexteriorVal").value.replace('$', '').replace(',', '').replace(',', '')) + parseFloat(document.getElementById("SysroofVal").value.replace('$', '').replace(',', '').replace(',', '')) + parseFloat(document.getElementById("SyshvacVal").value.replace('$', '').replace(',', '').replace(',', '')) + parseFloat(document.getElementById("SyselectricalVal").value.replace('$', '').replace(',', '').replace(',', '')) + parseFloat(document.getElementById("SysplumbingVal").value.replace('$', '').replace(',', '').replace(',', '')) + parseFloat(document.getElementById("SysconveyingVal").value.replace('$', '').replace(',', '').replace(',', '')) + parseFloat(document.getElementById("SysinteriorVal").value.replace('$', '').replace(',', '').replace(',', '')); 

        document.getElementById("dmTotalComplete").value = dmTotalComplete.toLocaleString('en-US', { style: 'currency', currency: 'USD' });;

        document.getElementById('bldgNumberHist').value = document.getElementById('bldgNumber').value;
        document.getElementById('bldgDescHist').value = document.getElementById('bldg_desc').value;
        document.getElementById('ccpsFacHist').value = document.getElementById('facility_type_descp').value;
        document.getElementById('ccpsfAmountHist').value = document.getElementById('new_construction_avg').value;
        document.getElementById('crvHist').value = document.getElementById("new_construction_avg").value * document.getElementById("sqFt").value;
        document.getElementById('sqftHist').value = document.getElementById('sqFt').value;
        document.getElementById('fciHist').value = document.getElementById("fci").value.replace('%', '');
        document.getElementById('structureMaxSysDefHist').value = document.getElementById('structureMaxSysDef').value;
        document.getElementById('exteriorMaxSysDefHist').value = document.getElementById('exteriorMaxSysDef').value;
        document.getElementById('roofMaxSysDefHist').value = document.getElementById('roofMaxSysDef').value;
        document.getElementById('hvacMaxSysDefHist').value = document.getElementById('hvacMaxSysDef').value;
        document.getElementById('electricalMaxSysDefHist').value = document.getElementById('electricalMaxSysDef').value;
        document.getElementById('plumbingMaxSysDefHist').value = document.getElementById('plumbingMaxSysDef').value;
        document.getElementById('conveyingMaxSysDefHist').value = document.getElementById('conveyingMaxSysDef').value;
        document.getElementById('interiorMaxSysDefHist').value = document.getElementById('interiorMaxSysDef').value;
        document.getElementById('lifeSafetyMaxSysDefHist').value = document.getElementById('lifeSafetyMaxSysDef').value;
        document.getElementById('adaMaxSysDefHist').value = document.getElementById('adaMaxSysDef').value;

        document.getElementById('SysstructureValHist').value = parseFloat(document.getElementById("SysstructureVal").value.replace('$', '').replace(',', '').replace(',', ''));
        document.getElementById('SysexteriorValHist').value = parseFloat(document.getElementById("SysexteriorVal").value.replace('$', '').replace(',', '').replace(',', ''));
        document.getElementById('SysroofValHist').value = parseFloat(document.getElementById("SysroofVal").value.replace('$', '').replace(',', '').replace(',', ''));
        document.getElementById('SyshvacValHist').value = parseFloat(document.getElementById("SyshvacVal").value.replace('$', '').replace(',', '').replace(',', ''));
        document.getElementById('SyselectricalValHist').value = parseFloat(document.getElementById("SyselectricalVal").value.replace('$', '').replace(',', '').replace(',', ''));
        document.getElementById('SysplumbingValHist').value = parseFloat(document.getElementById("SysplumbingVal").value.replace('$', '').replace(',', '').replace(',', ''));
        document.getElementById('SysconveyingValHist').value = parseFloat(document.getElementById("SysconveyingVal").value.replace('$', '').replace(',', '').replace(',', ''));
        document.getElementById('SysinteriorValHist').value = parseFloat(document.getElementById("SysinteriorVal").value.replace('$', '').replace(',', '').replace(',', ''));
        document.getElementById('SyslifeSafetyValHist').value = parseFloat(document.getElementById("SyslifeSafetyVal").value.replace('$', '').replace(',', '').replace(',', ''));
        document.getElementById('SysadaValHist').value = parseFloat(document.getElementById("SysadaVal").value.replace('$', '').replace(',', '').replace(',', ''));

        document.getElementById('dmTotalCompleteHist').value = parseFloat(document.getElementById("dmTotalComplete").value.replace('$', '').replace(',', '').replace(',', ''));

        document.getElementById('structureHist').value = document.getElementById('structure').selectedOptions[0].text;
        document.getElementById('exteriorHist').value = document.getElementById('exterior').selectedOptions[0].text;
        document.getElementById('roofHist').value = document.getElementById('roof').selectedOptions[0].text;
        document.getElementById('hvacHist').value = document.getElementById('hvac').selectedOptions[0].text;
        document.getElementById('electricalHist').value = document.getElementById('electrical').selectedOptions[0].text;
        document.getElementById('plumbingHist').value = document.getElementById('plumbing').selectedOptions[0].text;
        document.getElementById('conveyingHist').value = document.getElementById('conveying').selectedOptions[0].text;
        document.getElementById('interiorHist').value = document.getElementById('interior').selectedOptions[0].text;
        document.getElementById('lifeSafetyHist').value = document.getElementById('lifeSafety').selectedOptions[0].text;
        document.getElementById('adaHist').value = document.getElementById('ada').selectedOptions[0].text;

        document.getElementById('scoreAveragePre').value = parseFloat(document.getElementById('structureHist').value) + parseFloat(document.getElementById('exteriorHist').value) + parseFloat(document.getElementById('roofHist').value) + parseFloat(document.getElementById('hvacHist').value) + parseFloat(document.getElementById('electricalHist').value) + parseFloat(document.getElementById('plumbingHist').value) + parseFloat(document.getElementById('conveyingHist').value) + parseFloat(document.getElementById('interiorHist').value) + parseFloat(document.getElementById('lifeSafetyHist').value) + parseFloat(document.getElementById('adaHist').value);

        document.getElementById('scoreAverage').value = parseFloat(document.getElementById('scoreAveragePre').value) / 10;
}
</script>  
</div>


  </body>
</html>