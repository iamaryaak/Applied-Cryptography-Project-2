
<?php
//index.php

$error = '';
$q1 = '';
$q2 = '';
$q3 = '';
$q4 = '';
$q5 = '';
$q6 = '';

if(isset($_POST["submit"]))
{
 $q1 = ($_POST["q1"]);
 $q2 = ($_POST["q2"]);
 $q3 = ($_POST["q3"]);
 $q4 = ($_POST["q4"]);
 $q5 = ($_POST["q5"]);
 $q6 = ($_POST["q6"]);

 if($error == '')
 {
  $file_open = fopen("answers.csv", "a");
  $form_data = array(
   'q1'  => $q1,
   'q2'  => $q2,
   'q3' => $q3,
   'q4' => $q4,
   'q5' => $q5,
   'q6' => $q6
  );
  fputcsv($file_open, $form_data);
  $error = '<label class="text-success">Awaiting Results</label>';
  $q1 = '';
  $q2 = '';
  $q3 = '';
  $q4 = '';
  $q5 = '';
  $q6 = '';
 }
}

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Which Block Cipher is best for you?</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container">
   <h2 align="center">Which Block Cipher is best for you?</h2>
   <br />
   <div class="col-md-6" style="margin:0 auto; float:none;">
    <form method="post">
     <h3 align="center">Choose the choice that best works for you</h3>
     <br />
     <?php echo $error; ?>
     <div class="form-group">
      <label>1) Is your product considered as a resource-constrained device? (ex. IoT device such as smart sensors, controllers, activity trackers, smart thermometers, coffee machines, fridges, toys)</label>
      a) Yes
      <br>
      b) No
      <input type="text" name="q1" placeholder="'a' or 'b'" class="form-control" value="<?php echo $q1; ?>" />
     </div>
     <div class="form-group">
      <label>2) How important is speed to you?</label>
      <br>
      a) Very
      <br>
      b) Not Important
      <input type="text" name="q2" placeholder="'a' or 'b'" class="form-control" value="<?php echo $q2; ?>" />
     </div>
     <div class="form-group">
      <label>3) How lightweight does your product have to be?</label>
      <br>
      a) light
      <br>
      b) medium
      <br>
      c) heavy
      <input type="text" name="q3" placeholder="'a' or 'b' or 'c'" class="form-control" value="<?php echo $q3; ?>" />
     </div>
     <div class="form-group">
      <label>    4) Is using a standard, well-implemented system important to you?</label>
      <br>
      a) Yes
      <br>
      b) No
      <input type="text" name="q4" placeholder="'a' or 'b'" class="form-control" value="<?php echo $q4; ?>" />
     </div>
     <div class="form-group">
      <label>    5) How much personal information does your product store?</label>
      <br>
      a) Personal Use
      <br>
      b) Corporate Use
      <br>
      c) Maximum possible security required
      <input type="text" name="q5" placeholder="'a' or 'b' or 'c'" class="form-control" value="<?php echo $q5; ?>" />
     </div>
     <div class="form-group">
      <label>6) Does your product use hash function as part of its data structure?</label>
      <br>
      a) Yes
      <br>
      b) No
      <input type="text" name="q6" placeholder="'a' or 'b'" class="form-control" value="<?php echo $q6; ?>" />
     </div>
     <div class="form-group" align="center">
      <input type="submit" name="submit" class="btn btn-info" value="Submit" />
      <br>
      <a class="btn btn-info" href="modes.php">Next</a>
     </div>
    </form>
   </div>
  </div>
 </body>
</html>