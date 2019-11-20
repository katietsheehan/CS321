<?php
include_once 'db.php';

?>
<!doctype html>
<html lang="en">
  <head>

  <title>KTS Records | Artists</title>
  <meta charset="utf-8">

  <link href="css/style.css"
type="text/css"
rel="stylesheet">

<h1> K.T.S Records </h1>
<img src="https://png.pngtree.com/png-vector/20190223/ourlarge/pngtree-vector-vinyl-player-icon-png-image_696317.jpg"
class = "mainimage">

<div class = "topnav">
    <nav>
      <a href="index.php"> Home </a>
      <a href="studio.php">Studio </a>
        <!-- make this a drop down
         <ul>
          <li>Booking</li>
          <li>Equipment</li>
        </ul> -->
        <a class = "active" href="artist.php"> Artists</a>
      <!--  <ul>
          <li>All</li>
          <li>Genre</li>
        </ul>
      </ul>-->
    </nav>
</div>

  </head>

  <body>


  <h2>Artists</h2>
  <p>Here you will find a list of artists and a list of genres those artists belong to.</p>
  <p>
<?php
$sql="SELECT ArtistName FROM Artists;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck >0){
    while($row=mysqli_fetch_assoc($result)){
        echo $row["ArtistName"];
        echo "\n";
}
}
?>
  </p>

  </body>

  <footer>
    <code>Katie Sheehan -- CS 321</code>

  </footer>

  </html>


