

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Flugticket Manager</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <?php
    $servername ="localhost";
    $username = "root";
    $password = "Brztgm1234";

    try{
      $conn = new PDO("mysql:host=$servername;dbname=flightdata",$username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully";
    }
    catch(PDOException $e){
      echo "Connection failed: " . $e->getMessage();
    }

  ?>

</head>
<body>
​<form  method="post" action="<?=$_SERVER['PHP_SELF']?>" >
<div class="container">
  <h2>Flugticket-Manager</h2>
  <br>


	<div class="form-group">
		<label for="search" class="control-label">Search</label>
		<input type="number" class="form-control" id="search_id" name="flugnr" placeholder="703">
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>
    <input type="hidden" value="1" name="flug" />
  </div>
<br>
<br>
</form>

</div>

<?php

if(isset($_POST['flug']))
{

    $flightnr = $_POST['flugnr'];

    $sql = "SELECT * FROM flights WHERE flightnr = $flightnr";

    foreach($conn->query($sql) as $row) {

      echo "
      <table border='2' cellpadding='5'><tr>
      <th align='left'> Abflugsflughafen </th><th align='left'>Abflugszeit</th><th align='left'>Airline</th><th align='left'>Ankunftsflughafen</th><th align='left'>Ankunftszeit</th><th align='left'>Flugzeugart</th><tr>

      ";

      echo "
      <tr>
        <td>". $row['departure_airport'] ."</td>
        <td>". $row['departure_time'] ."</td>
        <td>". $row['airline'] ."</td>
        <td>". $row['destination_airport'] ."</td>
        <td>". $row['destination_time'] ."</td>
        <td>". $row['planetype'] ."</td>
      </tr>
    </table>
        ";
     }


}

 ?>
​
</body>
</html>
​
​
