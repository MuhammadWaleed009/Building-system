<?php
// Start the session
session_start();

?>

	


<style>
img {
  border: 1px solid #ddd; /* Gray border */
  border-radius: 4px;  /* Rounded border */
  padding: 5px; /* Some padding */
  width: 150px; /* Set a small width */
}

/* Add a hover effect (blue shadow) */
img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
</style>
<link href="styles.css" rel="stylesheet" type="text/css" />

<?php
$_SESSION['sys']=0; 
$syst="";
$sql = "SELECT bldg_gross_sqrft,facility_type_descp FROM ssc_properties WHERE bldg = '$bldgNumber'";

  $result = mysqli_query($db_dm, $sql);

  while($row = mysqli_fetch_array($result)){

    echo '<div class="padder-left">
<b>Bldg Sqft: </b> <input class="input-clear" type="text" id="sqFt" name="sqFt" value="'.$row['bldg_gross_sqrft'].'" readonly="readonly" />
<b>Facility Type: </b> <input class="input-clear" type="text" id="facType" name="facType" value="'.$row['facility_type_descp'].'" readonly="readonly" />
</div>';

function make_query($db_dm)
{
  $_SESSION['sys']=$GLOBALS['syst'];
$_SESSION['bld']= $GLOBALS['bldgNumber'];

 $query = "SELECT * FROM images where bldnumber='".$GLOBALS['bldgNumber']."' and system='".$GLOBALS['syst']."'";
 $res = mysqli_query($db_dm, $query);
 return $res;
}


}

?>
<form class="needs-validation" action="" method="post" enctype="multipart/form-data" novalidate>
  
<table class="table table-responsive-sm ">
  <thead class="table">
    <tr>
      <th scope="col"></th>
      <th  scope="col">Struct <a href="#"  data-toggle="modal" data-target="#structureModal"><i class="fas fa-edit"></i></a></th>
      <th scope="col">Exterior <a href="#" data-toggle="modal" data-target="#exteriorModal"><i class="fas fa-edit"></i></a></th>
      <th scope="col">Roof <a href="#" data-toggle="modal" data-target="#roofModal"><i class="fas fa-edit"></i></a></th>
      <th scope="col">HVAC <a href="#" data-toggle="modal" data-target="#hvacModal"><i class="fas fa-edit"></i></a></th>
      <th scope="col">Electrical <a href="#" data-toggle="modal" data-target="#electricalModal"><i class="fas fa-edit"></i></a></th>
      <th scope="col">Plumbing <a href="#" data-toggle="modal" data-target="#plumbingModal"><i class="fas fa-edit"></i></a></th>
      <th scope="col">Conveying <a href="#" data-toggle="modal" data-target="#conveyingModal"><i class="fas fa-edit"></i></a></th>
      <th scope="col">Interior <a href="#" data-toggle="modal" data-target="#interiorModal"><i class="fas fa-edit"></i></a></th>
      <th scope="col">FLS <a href="#" data-toggle="modal" data-target="#lifeSafetyModal"><i class="fas fa-edit"></i></a></th>
      <th scope="col">TAS/ADA <a href="#" data-toggle="modal" data-target="#adaModal"><i class="fas fa-edit"></i></a></th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <th scope="col">Score</th>
    <td>
      <select class="form-c" type="number" name="structure" id="structure" onchange="SysCalc('structure');">
        <option selected="true" value="0" disabled="disabled">Select</option>    
        <option value="0">0</option>
        <option value="1">1</option>
        <option value=".90">2</option>
        <option value=".32">3</option>
        <option value=".07">4</option>
        <option value="0">5</option>
      </select>
    </td>
      <td>
       <select class="form-c" type="number" name="exterior" id="exterior" onchange="SysCalc('exterior');">
        <option selected="true" value="0" disabled="disabled">Select</option> 
        <option value="0">0</option>
        <option value="1">1</option>
        <option value=".90">2</option>
        <option value=".32">3</option>
        <option value=".07">4</option>
        <option value="0">5</option>
      </select>
      </td>
      <td>
       <select class="form-c" name="roof" id="roof" onchange="SysCalc('roof');">
        <option selected="true" value="0" disabled="disabled">Select</option> 
        <option value="0">0</option>
        <option value="1">1</option>
        <option value=".90">2</option>
        <option value=".32">3</option>
        <option value=".07">4</option>
        <option value="0">5</option>
      </select>        
      </td>
      <td>
       <select class="form-c" name="hvac" id="hvac" onchange="SysCalc('hvac');">
        <option selected="true" value="0" disabled="disabled">Select</option> 
        <option value="0">0</option>
        <option value="1">1</option>
        <option value=".90">2</option>
        <option value=".32">3</option>
        <option value=".07">4</option>
        <option value="0">5</option>
      </select>          
      </td>
      <td>
       <select class="form-c" name="electrical" id="electrical" onchange="SysCalc('electrical');">
        <option selected="true" value="0" disabled="disabled">Select</option> 
        <option value="0">0</option>
        <option value="1">1</option>
        <option value=".90">2</option>
        <option value=".32">3</option>
        <option value=".07">4</option>
        <option value="0">5</option>
      </select>  
      </td>
      <td>
       <select class="form-c" name="plumbing" id="plumbing" onchange="SysCalc('plumbing');">
        <option selected="true" value="0" disabled="disabled">Select</option> 
        <option value="0">0</option>
        <option value="1">1</option>
        <option value=".90">2</option>
        <option value=".32">3</option>
        <option value=".07">4</option>
        <option value="0">5</option>
      </select>  
      </td>
      <td>
       <select class="form-c" name="conveying" id="conveying" onchange="SysCalc('conveying');">
        <option selected="true" value="0" disabled="disabled">Select</option> 
        <option value="0">0</option>
        <option value="1">1</option>
        <option value=".90">2</option>
        <option value=".32">3</option>
        <option value=".07">4</option>
        <option value="0">5</option>
      </select>  
      </td>
      <td>
       <select class="form-c" name="interior" id="interior" onchange="SysCalc('interior');">
        <option selected="true" value="0" disabled="disabled">Select</option> 
        <option value="0">0</option>
        <option value="1">1</option>
        <option value=".90">2</option>
        <option value=".32">3</option>
        <option value=".07">4</option>
        <option value="0">5</option>
      </select>  
      </td>
      <td>
       <select class="form-c" name="lifeSafety" id="lifeSafety" onchange="SysCalc('lifeSafety');">
        <option selected="true" value="0" disabled="disabled">Select</option> 
        <option value="0">0</option>
        <option value="1">1</option>
        <option value=".90">2</option>
        <option value=".32">3</option>
        <option value=".07">4</option>
        <option value="0">5</option>
      </select>  
      </td>
      <td>
       <select class="form-c" name="ada" id="ada" onchange="SysCalc('ada');">
        <option selected="true" value="0" disabled="disabled">Select</option> 
        <option value="0">0</option>
        <option value="1">1</option>
        <option value=".90">2</option>
        <option value=".32">3</option>
        <option value=".07">4</option>
        <option value="0">5</option>
      </select>  
      </td>
    </tr>
    <tr>
    <th scope="col">Estimated DM</th>
      <td><input class="input-clear" type="text" id="SysstructureVal" name="SysstructureVal" value="" readonly="readonly"  /> </td>
      <td><input class="input-clear" type="text" id="SysexteriorVal" name="SysexteriorVal" value="" readonly="readonly" /> </td>
      <td><input class="input-clear" type="text" id="SysroofVal" name="SysroofVal" value="" readonly="readonly" /> </td>
      <td><input class="input-clear" type="text" id="SyshvacVal" name="Syshvacval" value="" readonly="readonly" /> </td>
      <td><input class="input-clear" type="text" id="SyselectricalVal" name="SyselectricalVal" value="" readonly="readonly" /> </td>
      <td><input class="input-clear" type="text" id="SysplumbingVal" name="SysplumbingVal" value="" readonly="readonly" /> </td>
      <td><input class="input-clear" type="text" id="SysconveyingVal" name="SysconveyingVal" value="" readonly="readonly" /> </td>
      <td><input class="input-clear" type="text" id="SysinteriorVal" name="SysinteriorVal" value="" readonly="readonly" /> </td>
      <td><input class="input-clear" type="text" id="SyslifeSafetyVal" name="SyslifeSafetyVal" value="" readonly="readonly" /> </td>
      <td><input class="input-clear" type="text" id="SysadaVal" name="SysadaVal" value="" readonly="readonly" /> </td>
    </tr>
    
  </tbody>
</table>

<div class="padder-left">
<b>DM Total: </b> <input class="input-clear" type="text" id="dmTotalComplete" name="dmTotalComplete" value="" readonly="readonly" />
<b>CRV: </b><input class="input-clear" type="text" id="crv" name="crv" value="" readonly="readonly" />
<b>FCI: </b><input class="input-clear" type="text" id="fci" name="fci" value="" readonly="readonly" />
</div>
<!-- RS MEANS INPUT
<br>
<div class="padder-left">
  <label for="rsmeans"><b>RS Means</b></label>
  <input type="text" class="form-req" name="rsmeans" id="rsmeans" placeholder="" value="" required><div class="invalid-feedback">Please provide RSMeans Calculation. 
  </div>
-->
  
</div>

<br>
<div class="col-md-8 order-md-1">
           
           <div class="col-md-2 mb-2">
            <input type="hidden" name="bldgNumberHist" id="bldgNumberHist" placeholder="" value="">
            <input type="hidden" name="bldgDescHist" id="bldgDescHist" placeholder="" value="">
            <input type="hidden" name="ccpsFacHist" id="ccpsFacHist" placeholder="" value="">
            <input type="hidden" name="ccpsfAmountHist" id="ccpsfAmountHist" placeholder="" value="">
            <input type="hidden" name="crvHist" id="crvHist" placeholder="" value="">
            <input type="hidden" name="structureHist" id="structureHist" placeholder="" value="">
            <input type="hidden" name="exteriorHist" id="exteriorHist" placeholder="" value="">
            <input type="hidden" name="roofHist" id="roofHist" placeholder="" value="">
            <input type="hidden" name="hvacHist" id="hvacHist" placeholder="" value="">
            <input type="hidden" name="electricalHist" id="electricalHist" placeholder="" value="">
            <input type="hidden" name="plumbingHist" id="plumbingHist" placeholder="" value="">
            <input type="hidden" name="conveyingHist" id="conveyingHist" placeholder="" value="">
            <input type="hidden" name="interiorHist" id="interiorHist" placeholder="" value="">
            <input type="hidden" name="lifeSafetyHist" id="lifeSafetyHist" placeholder="" value="">
            <input type="hidden" name="adaHist" id="adaHist" placeholder="" value="">

            <input type="hidden" name="scoreAveragePre" id="scoreAveragePre" placeholder="" value="">
            <input type="hidden" name="scoreAverage" id="scoreAverage" placeholder="" value="">
            

            <input type="hidden" id="structureMaxSysDefHist" name="structureMaxSysDefHist" value="">
            <input type="hidden" id="exteriorMaxSysDefHist" name="exteriorMaxSysDefHist" value="">
            <input type="hidden" id="roofMaxSysDefHist" name="roofMaxSysDefHist" value="">
            <input type="hidden" id="hvacMaxSysDefHist" name="hvacMaxSysDefHist" value="">
            <input type="hidden" id="electricalMaxSysDefHist" name="electricalMaxSysDefHist" value="">
            <input type="hidden" id="plumbingMaxSysDefHist" name="plumbingMaxSysDefHist" value="">
            <input type="hidden" id="conveyingMaxSysDefHist" name="conveyingMaxSysDefHist" value="">
            <input type="hidden" id="interiorMaxSysDefHist" name="interiorMaxSysDefHist" value="">
            <input type="hidden" id="lifeSafetyMaxSysDefHist" name="lifeSafetyMaxSysDefHist" value="">
            <input type="hidden" id="adaMaxSysDefHist" name="adaMaxSysDefHist" value="">


            <input type="hidden" id="SysstructureValHist" name="SysstructureValHist" value="">
            <input type="hidden" id="SysexteriorValHist" name="SysexteriorValHist" value="">
            <input type="hidden" id="SysroofValHist" name="SysroofValHist" value="">
            <input type="hidden" id="SyshvacValHist" name="SyshvacValHist" value="">
            <input type="hidden" id="SyselectricalValHist" name="SyselectricalValHist" value="">
            <input type="hidden" id="SysplumbingValHist" name="SysplumbingValHist" value="">
            <input type="hidden" id="SysconveyingValHist" name="SysconveyingValHist" value="">
            <input type="hidden" id="SysinteriorValHist" name="SysinteriorValHist" value="">
            <input type="hidden" id="SyslifeSafetyValHist" name="SyslifeSafetyValHist" value="">
            <input type="hidden" id="SysadaValHist" name="SysadaValHist" value="">
            
            <input type="hidden" id="dmTotalCompleteHist" name="dmTotalCompleteHist" value="">


            <input type="hidden" name="fciHist" id="fciHist" placeholder="" value="">
            <input type="hidden" name="sqftHist" id="sqftHist" placeholder="" value="">
              
          </div>
          <div class="col-md-3 mb-2">
            <button class="btn btn-success btn-lg btn-block" name="Save" type="submit">Save</button>
          </div>
            </div>


           <!-- Structure Modal -->
                     
          <div id="structureModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <h3 class="modal-title">Structure Notes</h3>
                  <br>
                    <div class="form-group">
                      <textarea id="structureNotes" name="structureNotes" class="form-control" rows="5"></textarea>
                    </div>
                    <?php
                    
                    $syst='structure';
                    $r = make_query($db_dm);
                    $ro = mysqli_fetch_array($r);
                    echo "<a target=_blank href=".$ro['url'].">
                        <img src=".$ro['url']." alt='structure'>
                        </a>
                        
                    ";
                    
                                                      
?>

<input type="file"   name="structureimage"><br /><br />
<input type="submit"  class="btn btn-primary btn-success"  name="structureupload" value="Upload Now">
  </div>


                <br />
                
                
                <div class="modal-footer">
                <button  type="button"  class="btn btn-primary btn-success"  data-dismiss="modal" >Save changes</button>
                
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="ClearFields('structureNotes');">Clear</button>
                </div>
                <?php
                // List Structure Notes From Database
                $sql = "SELECT structure_notes, assesment_date FROM ssc_asmt_scores_calc WHERE bldg = '$bldgNumber' AND structure_notes<>'' ORDER BY ssc_asmt_scores_calc_id DESC";
                $dropdown = mysqli_query($db_dm, $sql);
                ?>
                <div class="modal-body">
                  <h4 class="modal-title">Structure Notes History</h4>
                </br>
                  <div class="form-group">
                    <?php while($row1 = mysqli_fetch_array($dropdown)):;?>
                    <h6><?php echo date( 'F j, Y',strtotime($row1[1]));?></h6>
                    <textarea disabled class="form-control" rows="3"><?php echo $row1[0];?></textarea>
                    </br>
                    <?php endwhile;?>
                </div>
                </div>
                <!---  End List Structure Notes --->

              </div>
            </div>
          </div>




          <!-- Exterior Modal -->
          <div id="exteriorModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <h3 class="modal-title">Exterior Notes</h3>
                  <br>
                    <div class="form-group">
                      <textarea id="exteriorNotes" name="exteriorNotes" class="form-control" rows="5"></textarea>
                    </div>
                    <?php
                    
                    $syst='Exterior';
                    $r = make_query($db_dm);
                    $ro = mysqli_fetch_array($r);
                    echo "<a target=_blank href=".$ro['url'].">
                        <img src=".$ro['url']." alt='structure'>
                        </a>
                    ";
                   
?>

<input type="file"   name="Exteriorimage"><br /><br />
<input type="submit"  class="btn btn-primary btn-success"  name="Exteriorupload" value="Upload Now">
</div>

                  
                   
                <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-success" data-dismiss="modal">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="ClearFields('exteriorNotes');">Clear</button>
                </div>
                <?php
                // List Exterior Notes From Database
                $sql = "SELECT exterior_notes, assesment_date FROM ssc_asmt_scores_calc WHERE bldg = '$bldgNumber' AND exterior_notes<>'' ORDER BY ssc_asmt_scores_calc_id DESC";
                $dropdown = mysqli_query($db_dm, $sql);
                ?>
                <div class="modal-body">
                  <h4 class="modal-title">Exterior Notes History</h4>
                </br>
                  <div class="form-group">
                    <?php while($row1 = mysqli_fetch_array($dropdown)):;?>
                    <h6><?php echo date( 'F j, Y',strtotime($row1[1]));?></h6>
                    <textarea disabled class="form-control" rows="3"><?php echo $row1[0];?></textarea>
                    </br>
                    <?php endwhile;?>
                </div>
                </div>
                <!---  End List Exterior Notes --->
              </div>
            </div>
          </div>
          <!-- Roof Modal -->
          <div id="roofModal" class="modal fade" role="dialog">
            <div class="modal-dialog"x>
              <div class="modal-content">
                <div class="modal-body">
                  <h3 class="modal-title">Roof Notes</h3>
                  <br>
                    <div class="form-group">
                      <textarea id="roofNotes" name="roofNotes" class="form-control" rows="5"></textarea>
                    </div>
                    <?php
                    $syst='Roof';
                    $r = make_query($db_dm);
                    $ro = mysqli_fetch_array($r);
                    echo "<a target=_blank href=".$ro['url'].">
                        <img src=".$ro['url']." alt='structure'>
                        </a>
                    ";
                    ?>
                    <input type="file"   name="Roofimage"><br /><br />
                    <input type="submit"  class="btn btn-primary btn-success"  name="Roofupload" value="Upload Now">
                    </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-success" data-dismiss="modal">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="ClearFields('roofNotes');">Clear</button>
                </div>
                <?php
                // List Roof Notes From Database
                $sql = "SELECT roof_notes, assesment_date FROM ssc_asmt_scores_calc WHERE bldg = '$bldgNumber' AND roof_notes<>'' ORDER BY ssc_asmt_scores_calc_id DESC";
                $dropdown = mysqli_query($db_dm, $sql);
                ?>
                <div class="modal-body">
                  <h4 class="modal-title">Roof Notes History</h4>
                </br>
                  <div class="form-group">
                    <?php while($row1 = mysqli_fetch_array($dropdown)):;?>
                    <h6><?php echo date( 'F j, Y',strtotime($row1[1]));?></h6>
                    <textarea disabled class="form-control" rows="3"><?php echo $row1[0];?></textarea>
                    </br>
                    <?php endwhile;?>
                </div>
                </div>
                <!---  End List Roof Notes --->
              </div>
            </div>
          </div>
          <!-- HVAC Modal -->
          <div id="hvacModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <h3 class="modal-title">HVAC Notes</h3>
                  <br>
                    <div class="form-group">
                      <textarea id="hvacNotes" name="hvacNotes" class="form-control" rows="5"></textarea>
                    </div>
                    <?php
                    $syst='HAVC';
                    $r = make_query($db_dm);
                    $ro = mysqli_fetch_array($r);
                    echo "<a target=_blank href=".$ro['url'].">
                        <img src=".$ro['url']." alt='structure'>
                        </a>
                    ";
                    ?>
                    <input type="file"   name="HAVCimage"><br /><br />
                    <input type="submit"  class="btn btn-primary btn-success"  name="HAVCupload" value="Upload Now">
                    </div> 
                   
                <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-success" data-dismiss="modal">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="ClearFields('hvacNotes');">Clear</button>
                </div>
                <?php
                // List HVAC Notes From Database
                $sql = "SELECT hvac_notes, assesment_date FROM ssc_asmt_scores_calc WHERE bldg = '$bldgNumber' AND hvac_notes<>'' ORDER BY ssc_asmt_scores_calc_id DESC";
                $dropdown = mysqli_query($db_dm, $sql);
                ?>
                <div class="modal-body">
                  <h4 class="modal-title">HVAC Notes History</h4>
                </br>
                  <div class="form-group">
                    <?php while($row1 = mysqli_fetch_array($dropdown)):;?>
                    <h6><?php echo date( 'F j, Y',strtotime($row1[1]));?></h6>
                    <textarea disabled class="form-control" rows="3"><?php echo $row1[0];?></textarea>
                    </br>
                    <?php endwhile;?>
                </div>
                </div>
                <!---  End List HVAC Notes --->
              </div>
            </div>
          </div>
          <!-- Electrical Modal -->
          <div id="electricalModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <h3 class="modal-title">Electrical Notes</h3>
                  <br>
                    <div class="form-group">
                      <textarea id="electricalNotes" name="electricalNotes" class="form-control" rows="5"></textarea>
                    </div>
                    <?php
                    $syst='electrical';
                    $r = make_query($db_dm);
                    $ro = mysqli_fetch_array($r);
                    echo "<a target=_blank href=".$ro['url'].">
                        <img src=".$ro['url']." alt='structure'>
                        </a>
                    ";
                    ?>
                    <input type="file"   name="electricalimage"><br /><br />
                    <input type="submit"  class="btn btn-primary btn-success"  name="electricalupload" value="Upload Now">
                    </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-success" data-dismiss="modal">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="ClearFields('electricalNotes');">Clear</button>
                </div>
                <?php
                // List Electrical Notes From Database
                $sql = "SELECT electrical_notes, assesment_date FROM ssc_asmt_scores_calc WHERE bldg = '$bldgNumber' AND electrical_notes<>'' ORDER BY ssc_asmt_scores_calc_id DESC";
                $dropdown = mysqli_query($db_dm, $sql);
                ?>
                <div class="modal-body">
                  <h4 class="modal-title">Electrical Notes History</h4>
                </br>
                  <div class="form-group">
                    <?php while($row1 = mysqli_fetch_array($dropdown)):;?>
                    <h6><?php echo date( 'F j, Y',strtotime($row1[1]));?></h6>
                    <textarea disabled class="form-control" rows="3"><?php echo $row1[0];?></textarea>
                    </br>
                    <?php endwhile;?>
                </div>
                </div>
                <!---  End List Electtrical Notes --->
              </div>
            </div>
          </div>
          <!-- Plumbing Modal -->
          <div id="plumbingModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <h3 class="modal-title">Plumbing Notes</h3>
                  <br>
                    <div class="form-group">
                      <textarea id="plumbingNotes" name="plumbingNotes" class="form-control" rows="5"></textarea>
                    </div>
                    <?php
                    $syst='plumbing';
                    $r = make_query($db_dm);
                    $ro = mysqli_fetch_array($r);
                    echo "<a target=_blank href=".$ro['url'].">
                        <img src=".$ro['url']." alt='structure'>
                        </a>
                    ";
                    ?>
                    <input type="file"   name="plumbingimage"><br /><br />
                    <input type="submit"  class="btn btn-primary btn-success"  name="plumbingupload" value="Upload Now">
                    </div>
                  
                <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-success" data-dismiss="modal">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="ClearFields('plumbingNotes');">Clear</button>
                </div>
                <?php
                // List Plumbing Notes From Database
                $sql = "SELECT plumbing_notes, assesment_date FROM ssc_asmt_scores_calc WHERE bldg = '$bldgNumber' AND plumbing_notes<>'' ORDER BY ssc_asmt_scores_calc_id DESC";
                $dropdown = mysqli_query($db_dm, $sql);
                ?>
                <div class="modal-body">
                  <h4 class="modal-title">Plumbing Notes History</h4>
                </br>
                  <div class="form-group">
                    <?php while($row1 = mysqli_fetch_array($dropdown)):;?>
                    <h6><?php echo date( 'F j, Y',strtotime($row1[1]));?></h6>
                    <textarea disabled class="form-control" rows="3"><?php echo $row1[0];?></textarea>
                    </br>
                    <?php endwhile;?>
                </div>
                </div>
                <!---  End List Plumbing Notes --->
              </div>
            </div>
          </div>
          <!-- Conveying Modal -->
          <div id="conveyingModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <h3 class="modal-title">Conveying Notes</h3>
                  <br>
                    <div class="form-group">
                      <textarea id="conveyingNotes" name="conveyingNotes" class="form-control" rows="5"></textarea>
                    </div>
                    <?php
                    $syst='conveying';
                    $r = make_query($db_dm);
                    $ro = mysqli_fetch_array($r);
                    echo "<a target=_blank href=".$ro['url'].">
                        <img src=".$ro['url']." alt='structure'>
                        </a>
                    ";
                    ?>
                    <input type="file"   name="conveyingimage"><br /><br />
                    <input type="submit"  class="btn btn-primary btn-success"  name="conveyingupload" value="Upload Now">
                    </div> 
                   
                <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-success" data-dismiss="modal">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="ClearFields('conveyingNotes');">Clear</button>
                </div>
                <?php
                // List Conveying Notes From Database
                $sql = "SELECT conveying_notes, assesment_date FROM ssc_asmt_scores_calc WHERE bldg = '$bldgNumber' AND conveying_notes<>'' ORDER BY ssc_asmt_scores_calc_id DESC";
                $dropdown = mysqli_query($db_dm, $sql);
                ?>
                <div class="modal-body">
                  <h4 class="modal-title">Conveying Notes History</h4>
                </br>
                  <div class="form-group">
                    <?php while($row1 = mysqli_fetch_array($dropdown)):;?>
                    <h6><?php echo date( 'F j, Y',strtotime($row1[1]));?></h6>
                    <textarea disabled class="form-control" rows="3"><?php echo $row1[0];?></textarea>
                    </br>
                    <?php endwhile;?>
                </div>
                </div>
                <!---  End List Conveying Notes --->
              </div>
            </div>
          </div>
          <!-- Interior Modal -->
          <div id="interiorModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <h3 class="modal-title">Interior Notes</h3>
                  <br>
                    <div class="form-group">
                      <textarea id="interiorNotes" name="interiorNotes" class="form-control" rows="5"></textarea>
                    </div>
                    <?php
                    $syst='interior';
                    $r = make_query($db_dm);
                    $ro = mysqli_fetch_array($r);
                    echo "<a target=_blank href=".$ro['url'].">
                        <img src=".$ro['url']." alt='structure'>
                        </a>
                    ";
                    ?>
                    <input type="file"   name="interiorimage"><br /><br />
                    <input type="submit"  class="btn btn-primary btn-success"  name="interiorupload" value="Upload Now">
                    </div> 
                   
                <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-success" data-dismiss="modal">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="ClearFields('interiorNotes');">Clear</button>
                </div>
                <?php
                // List Interior Notes From Database
                $sql = "SELECT interior_notes, assesment_date FROM ssc_asmt_scores_calc WHERE bldg = '$bldgNumber' AND interior_notes<>'' ORDER BY ssc_asmt_scores_calc_id DESC";
                $dropdown = mysqli_query($db_dm, $sql);
                ?>
                <div class="modal-body">
                  <h4 class="modal-title">Interior Notes History</h4>
                </br>
                  <div class="form-group">
                    <?php while($row1 = mysqli_fetch_array($dropdown)):;?>
                    <h6><?php echo date( 'F j, Y',strtotime($row1[1]));?></h6>
                    <textarea disabled class="form-control" rows="3"><?php echo $row1[0];?></textarea>
                    </br>
                    <?php endwhile;?>
                </div>
                </div>
                <!---  End List Interior Notes --->
              </div>
            </div>
          </div>
          <!-- Life and Safety Modal -->
          <div id="lifeSafetyModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <h3 class="modal-title">Fire and Life Safety Notes</h3>
                  <br>
                    <div class="form-group">
                      <textarea id="lifeSafetyNotes" name="lifeSafetyNotes" class="form-control" rows="5"></textarea>
                    </div>
                    <?php
                    $syst='Safety';
                    $r = make_query($db_dm);
                    $ro = mysqli_fetch_array($r);
                    echo "<a target=_blank href=".$ro['url'].">
                        <img src=".$ro['url']." alt='structure'>
                        </a>
                    ";
                    ?>
                    <input type="file"   name="Safetyimage"><br /><br />
                    <input type="submit"  class="btn btn-primary btn-success"  name="Safetyupload" value="Upload Now">
                    </div> 
                   
                <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-success" data-dismiss="modal">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="ClearFields('lifeSafetyNotes');">Clear</button>
                </div>
                <?php
                // List Life & Safety Notes From Database
                $sql = "SELECT lifesafety_notes, assesment_date FROM ssc_asmt_scores_calc WHERE bldg = '$bldgNumber' AND lifesafety_notes<>'' ORDER BY ssc_asmt_scores_calc_id DESC";
                $dropdown = mysqli_query($db_dm, $sql);
                ?>
                <div class="modal-body">
                  <h4 class="modal-title">Fire and Life Safety Notes History</h4>
                </br>
                  <div class="form-group">
                    <?php while($row1 = mysqli_fetch_array($dropdown)):;?>
                    <h6><?php echo date( 'F j, Y',strtotime($row1[1]));?></h6>
                    <textarea disabled class="form-control" rows="3"><?php echo $row1[0];?></textarea>
                    </br>
                    <?php endwhile;?>
                </div>
                </div>
                <!---  End List Life & Safety Notes --->

              </div>
            </div>
          </div>
          <!-- ADA Modal -->
          <div id="adaModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <h3 class="modal-title">TAS/ADA Notes</h3>
                  <br>
                    <div class="form-group">
                      <textarea id="adaNotes" name="adaNotes" class="form-control" rows="5"></textarea>
                    </div>
                    <?php
                    $syst='ADA';
                    $r = make_query($db_dm);
                    $ro = mysqli_fetch_array($r);
                    echo "<a target=_blank href=".$ro['url'].">
                        <img src=".$ro['url']." alt='structure'>
                        </a>
                    ";

                    ?>
                    <input type="file"   name="ADAimage"><br /><br />
                    <input type="submit"  class="btn btn-primary btn-success"  name="ADAupload" value="Upload Now">
                    </div>
                    
                   
                <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-success" data-dismiss="modal">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="ClearFields('adaNotes');">Clear</button>
                </div>
                <?php
                // List ADA Notes From Database
                $sql = "SELECT ada_notes, assesment_date FROM ssc_asmt_scores_calc WHERE bldg = '$bldgNumber' AND ada_notes<>'' ORDER BY ssc_asmt_scores_calc_id DESC";
                $dropdown = mysqli_query($db_dm, $sql);
                ?>
                <div class="modal-body">
                  <h4 class="modal-title">TAS/ADA Notes History</h4>
                </br>
                  <div class="form-group">
                    <?php while($row1 = mysqli_fetch_array($dropdown)):;?>
                    <h6><?php echo date( 'F j, Y',strtotime($row1[1]));?></h6>
                    <textarea disabled class="form-control" rows="3"><?php echo $row1[0];?></textarea>
                    </br>
                    <?php endwhile;?>
                </div>
                </div>
                <!---  End List ADA Notes --->

              </div>
            </div>
          </div>
<script type="text/javascript">
  function ClearFields(struct) {

     document.getElementById(struct).value = "";

}


</script>
        </form>
</div>


<span class="history"><h4>Most Recent Record</h4> </span>

<?php
$sql =  mysqli_query($db_dm, "SELECT bldg, bldg_desc FROM ssc_properties WHERE bldg = '$bldgNumber'");

if(mysqli_num_rows($sql) > 0){
while($row = mysqli_fetch_array($sql)){

  $bldg_desc  = $row['bldg_desc'];
  $bldg_desc = $bldg_desc;

}

echo '<div id="parent">';
  echo '<div id="wide">' . $bldg_desc . ' - ' . $bldgNumber . '</div>';
  echo '<div id="narrow">';
  echo '<a target="_blank" href="history.php?bldgNumber=' . $bldgNumber . '">View All</a>';
  echo ' | ';
  echo '<a href="chartdemo.php?bldgNumber=' . $bldgNumber . '">View Reports</a>';
echo '</div>';
echo '</div>';

}  else {
    echo '<tr><td><h5>This building does not exist in our database, please choose a different building.</h5></td></tr>';
}
?>


<?php
$_SESSION['bld']=$bldgNumber;
$_SESSION['sys']=$GLOBALS['syst'];

  $sql =  mysqli_query($db_dm, "SELECT ssc_asmt_scores_calc_id, bldg, bldg_desc, ccps_facility_type_desc, bldg_gross_sqft, bldg_curr_replacement_value, assesment_date, total_bldg_deferred_main, facility_condition_index, structure_score, exterior_score, roof_score, hvac_score, electrical_score, plumbing_score, conveying_score, interior_score, lifesafety_score, ada_score, structural_deferred_maint, exterior_deferred_maint, roof_deferred_maint, hvac_deferred_maint, electrical_deferred_maint, plumbing_deferred_maint, conveying_deferred_maint, interior_deferred_maint FROM ssc_asmt_scores_calc WHERE bldg = '$bldgNumber' ORDER BY assesment_date DESC LIMIT 0,1");

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
              echo '<td>' . $row['electrical_score'] . '</td>';
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

