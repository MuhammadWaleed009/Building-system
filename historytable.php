<?php
$sql =  mysqli_query($db_dm, "SELECT bldg, bldg_desc, year_built, numb_floors, address_property, city, zip, bldg_gross_sqrft  FROM ssc_properties WHERE bldg = '$bldgNumber'");

if(mysqli_num_rows($sql) > 0){
while($row = mysqli_fetch_array($sql)){

  $bldg_desc  = $row['bldg_desc'];
  $year_built  = $row['year_built'];
  $numb_floors  = $row['numb_floors'];
  $address_property  = $row['address_property'];
  $city  = $row['city'];
  $zip  = $row['zip'];
  $bldg_gross_sqrft  = $row['bldg_gross_sqrft'];

  $bldg_desc = $bldg_desc;
  $year_built = $year_built;
  $numb_floors = $numb_floors;
  $address_property = $address_property;
  $city = $city;
  $zip = $zip;
  $bldg_gross_sqrft = $bldg_gross_sqrft;

}

echo '<div id="parent">';
  echo '<div id="wide">' . $bldg_desc . ' - ' . $bldgNumber . '</div>';
  echo '<div id="narrow">';
  echo '<a href="chartdemo.php?bldgNumber=' . $bldgNumber . '"> View Reports</a>';
echo '</div>';
echo '</div>';
echo '<b>Year Built:</b> ' . date( 'Y',strtotime($year_built));
echo '<br>';
echo '<b>Number of Floors:</b>  ' . $numb_floors;
echo '<br>';
echo '<b>Property Address:</b>  ' . $address_property . ', ' . $city . ', TX ' . $zip;
echo '<br>';
echo '<div id="maps-link">';
echo '<b>Maps:</b>  <a target="_blank" href="https://maps.google.com/?q=' . $address_property . ' ' . $city . ' ' . $zip . '">Google</a>';
echo ' & ';
echo '<a target="_blank" href="https://aggiemap.tamu.edu/?bldg=' . $bldgNumber . '">Aggiemap</a>';
echo '</div>';

echo '<b>Bldg Size:</b> ' . $bldg_gross_sqrft . ' sqft';
echo '<br>';
echo '<br>';
echo '<br>';

}  else {
    echo '<tr><td><h5>This building does not exist in our database, please choose a different building.</h5></td></tr>';
}
?>

<?php

  $sql =  mysqli_query($db_dm, "SELECT ssc_asmt_scores_calc_id, bldg, bldg_desc, ccps_facility_type_desc, bldg_gross_sqft, bldg_curr_replacement_value, assesment_date, total_bldg_deferred_main, facility_condition_index, structure_score, exterior_score, roof_score, hvac_score, electrical_score, plumbing_score, conveying_score, interior_score, lifesafety_score, ada_score, structural_deferred_maint, exterior_deferred_maint, roof_deferred_maint, hvac_deferred_maint, electrical_deferred_maint, plumbing_deferred_maint, conveying_deferred_maint, interior_deferred_maint FROM ssc_asmt_scores_calc WHERE bldg = '$bldgNumber' ORDER BY assesment_date DESC");

if(mysqli_num_rows($sql) > 0){

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



      echo '<div class="">';
      echo '<b>Assesment Date: </b>'. date( 'F j, Y',strtotime($row['assesment_date']));
    echo '</div>';
      echo '<div class="assessment-info">';
    echo '<b>Facility Type: </b>' . $row['ccps_facility_type_desc'] .'
       | <b>Square Feet: </b>' . $row['bldg_gross_sqft'];
    echo '</div>';

    echo '<table class="table table-responsive-sm">';
        echo '<thead>';
          echo '<tr>';
              echo '<th scope="col"></th>';
              echo '<th scope="col">Structure</th>';
              echo '<th scope="col">Exterior</th>';
              echo '<th scope="col">Roof</th>';
              echo '<th scope="col">HVAC</th>';
              echo '<th scope="col">Electrical</th>';
              echo '<th scope="col">Plumbing</th>';
              echo '<th scope="col">Conveying</th>';
              echo '<th scope="col">Interior</th>';
              echo '<th scope="col">FLS</th>';
              echo '<th scope="col">TAS/ADA</th>';
          echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
          echo '<tr>';
              echo '<th scope="row">Score</th>';
              echo '<td>' . $row['structure_score'] . '</td>';
              echo '<td>' . $row['exterior_score'] . '</td>';
              echo '<td>' . $row['roof_score'] . '</td>';
              echo '<td>' . $row['hvac_score'] . '</td>';
              echo '<td>' . $row['electrical_score'] . '</t`d>';
              echo '<td>' . $row['plumbing_score'] . '</td>';
              echo '<td>' . $row['conveying_score'] . '</td>';
              echo '<td>' . $row['interior_score'] . '</td>';
              echo '<td>' . $row['lifesafety_score'] . '</td>';
              echo '<td>' . $row['ada_score'] . '</td>';
          echo '</tr>';
          echo '<tr>';
              echo '<th scope="row">Estimated DM</th>';
                echo '<td>$' . money_format("%!n", $row['structural_deferred_maint']) . '</td>';
                echo '<td>$' .  money_format("%!n", $row['exterior_deferred_maint']) . '</td>';
                echo '<td>$' .  money_format("%!n", $row['roof_deferred_maint']) . '</td>';
                echo '<td>$' .  money_format("%!n", $row['hvac_deferred_maint']) . '</td>';
                echo '<td>$' .  money_format("%!n", $row['electrical_deferred_maint']) . '</td>';;
                echo '<td>$' .  money_format("%!n", $row['plumbing_deferred_maint']) . '</td>';
                echo '<td>$' .  money_format("%!n", $row['conveying_deferred_maint']) . '</td>';
                echo '<td>$' .  money_format("%!n", $row['interior_deferred_maint']) . '</td>';
                echo '<td>$0.00</td>';
                echo '<td>$0.00</td>';
          echo '</tr>';
        echo '</tbody>';
    echo '</table>';
    echo '<div class="padder-left">';
    echo '<b>DM Total: </b>$<input class="input-clear" type="text" id="totaldm" name="totaldm" value="'. money_format("%!n", $row['total_bldg_deferred_main']) .'" readonly="readonly" />';
    echo '<b>CRV: </b>$<input class="input-clear" type="text" id="currentreplacement" name="currentreplacement" value="'. money_format("%!n", $row['bldg_curr_replacement_value']) .'" readonly="readonly" />';
    echo '<b>FCI: </b><input class="input-clear" type="text" id="facilityconditionindex" name="facilityconditionindex" value="'. round($row['facility_condition_index']) .'%" readonly="readonly" />';
    echo '</div>';
    echo '</br>';
    echo '<div class="hr-f"></div>';
    echo '</br></br>';
      }

} 
else {
    echo '<tr><td>No records found for this building.</td></tr>';
}


?>

<?php mysqli_close($db_dm); ?>