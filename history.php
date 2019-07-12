<?php

require 'inc/common.php';

$db_dm = db_dm();

if(isset($_POST['Submit'])){ //check if form was submitted
  $bldgNumber = $_POST['bldgNumber'];
  $bldgNumber = $_GET['bldgNumber'];

}   

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



    <title>Deferred Maintenance - History</title>
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
      <li class="nav-item active">
        <a class="nav-link" href="history.php">History<span class="sr-only">(current)</span></a>
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
</nav>
    </div>

    <div class="content">
    <h1>Building History Search</h1>
    <div class="col-md-8 order-md-1">
          <form class="needs-validation" autocomplete="off" action="" method="post" novalidate>
            <div class="row">
              <div class="col-md-4 mb-2">
                <label for="firstName">Building Number</label>
                <div class="input-group mb-3">
                <input type="text" class="form-control form-req" placeholder="Please use the 'Lookup' button." name="bldgNumber" id="bldgNumber" readonly value="<?php echo isset($_GET['bldgNumber']) ? $_GET['bldgNumber'] : '' ?>" required aria-describedby="button-addon2">
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
                <div class="invalid-feedback">
              Provide a building number.
                </div>
              </div>
              <div class="col-md-4 mb-2 autocomplete invisible">
                
              </div>
              <div class="col-md-4 mb-2 invisible">
              </div>
              <hr class="mb-4">
           <div class="col-md-4 mb-2">
              <button class="btn btn-success btn-lg btn-block" name="Submit" type="submit">Search</button>
          </div>
            </div>


<?php 
if(isset($_POST['Submit'])){

       include "historytable.php";

}

?>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>