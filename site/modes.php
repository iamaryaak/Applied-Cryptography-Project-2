
<?php
//index.php

$error = '';
$q1 = '';
$q2 = '';
$q3 = '';
$q4 = '';
$q5 = '';

if(isset($_POST["submit"]))
{
 $q1 = ($_POST["q1"]);
 $q2 = ($_POST["q2"]);
 $q3 = ($_POST["q3"]);
 $q4 = ($_POST["q4"]);
 $q5 = ($_POST["q5"]);

 if($error == '')
 {
  $file_open = fopen("answers2.csv", "a");
  $form_data = array(
   'q1'  => $q1,
   'q2'  => $q2,
   'q3' => $q3,
   'q4' => $q4,
   'q5' => $q5,
  );
  fputcsv($file_open, $form_data);
  $error = '<label class="text-success">Awaiting Results</label>';
  $q1 = '';
  $q2 = '';
  $q3 = '';
  $q4 = '';
  $q5 = '';
 }
}

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Modes of Operation</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container">
   <h2 align="center">Which Mode of Operation is best for you?</h2>
   <br />
   <div class="col-md-6" style="margin:0 auto; float:none;">
    <form method="post">
     <h3 align="center">Choose the choice that best works for you</h3>
     <br />
     <?php echo $error; ?>
     <div class="form-group">
      <label>What is the purpose of your product?</label>
      a) General Purpose
      <br>
      b) Hardware
      <br>
      c) Streaming
      <input type="text" name="q1" placeholder="'a' or 'b', or 'c'" class="form-control" value="<?php echo $q1; ?>" />
     </div>
     <div class="form-group">
      <label>2) Is speed a top priority?</label>
      <br>
      a) Yes
      <br>
      b) No
      <input type="text" name="q2" placeholder="'a' or 'b'" class="form-control" value="<?php echo $q2; ?>" />
     </div>
     <div class="form-group">
      <label>3) Would you like to encrypt your data in a set block at a time or one bit at a time?</label>
      <br>
      a) Block
      <br>
      b) One Bit (Stream)
      <input type="text" name="q3" placeholder="'a' or 'b'" class="form-control" value="<?php echo $q3; ?>" />
     </div>
     <div class="form-group">
      <label> 4) How important is security to you?</label>
      <br>
      a) Very
      <br>
      b) Not So Much
      <input type="text" name="q4" placeholder="'a' or 'b'" class="form-control" value="<?php echo $q4; ?>" />
     </div>
     <div class="form-group">
      <label>    5) In the data structure of your product, do you need to access data randomly?</label>
      <br>
      a) Yes
      <br>
      b) No
      <input type="text" name="q5" placeholder="'a' or 'b'" class="form-control" value="<?php echo $q5; ?>" />
     </div>
     <div class="form-group" align="center">
      <input type="submit" name="submit" class="btn btn-info" value="Submit" />
      <br>
      <a class="btn btn-info" href="index.php">Back</a>
     </div>
    </form>
   </div>
  </div>
 </body>
</html>