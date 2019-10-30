<!doctype html>
<html lang="en">
  <head>

  <title>KTS Records | Studio</title>
  <meta charset="utf-8">

  <link href="css/style.css"
type="text/css"
rel="stylesheet">

<script src="form.php"></script>
  <script src="javascript/script.js"></script>

<h1> K.T.S Records </h1>
<img src="https://png.pngtree.com/png-vector/20190223/ourlarge/pngtree-vector-vinyl-player-icon-png-image_696317.jpg"
class = "mainimage">

<div class = "topnav">
    <nav>
      <a href="index.php"> Home </a>
      <a class = "active" href="studio.php">Studio </a>
        <!-- make this a drop down
         <ul>
          <li>Booking</li>
          <li>Equipment</li>
        </ul> -->
        <a href="artist.php"> Artists</a>
      <!--  <ul>
          <li>All</li>
          <li>Genre</li>
        </ul>
      </ul>-->
    </nav>
</div>

  </head>

  <body>

  <h2>Studio</h2>
  <p>This is our studio page. Here you can find what equipment we have and you can book time to use the studio</p>

<h2>Booking</h2>

<!-- FORM CODE FROM https://www.w3schools.com/html/tryit.asp?filename=tryhtml_form_mail
MODIFIED USING CLASS NOTES AND EXAMPLES FROM 9/25/19 -->

  <form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="text/plain">

    <div class="formitem">
      <label for="name">Name: </label>
      <div id="errorname" class="error"></div>
      <input type="text" id="name" minlength="2" name="name" size=50>
    </div>

    <div class="formitem">
      <label for="email">Email: </label>
      <div id="erroremail" class="error"></div>
      <input type="email" id="email" placeholder="name@example.com" name="email" size=50>
    </div>

    <div class="formitem">
      <label for="phone">Phone: </label>
      <div id="errorphone" class="error"></div>
      <input type="tel" id="phone" placeholder="000-000-0000" name="phone" size=50>
    </div>

    <div class="formitem">
      <label for="comment">Message: </label>
      <div id="errorcomment" class="error"></div>
      <textarea rows="5" cols="48" id = "comment"></textarea>
      <!--<input type="text" id="comment" name="comment" size=50>-->
    </div>



<!--Comment:<br>
<input type="text" name="comment" size="50"><br><br>-->

<input type="button" value="Send" <!--onclick="checkAll()-->">
<input type="reset" value="Reset">


</form>
<?php
echo "Your Input:";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $phone;
echo "<br>";
echo $comment;
?>

</body>
</html>



  </body>

  <footer>
    <code>Katie Sheehan -- CS 321</code>

  </footer>

  </html>

