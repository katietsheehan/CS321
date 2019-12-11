<!doctype html>
<html lang="en">
  <head>

  <title>KTS Records | Studio</title>
  <meta charset="utf-8" name="viewport" content="width=divice-width, initial-scale=1.0">

  <link href="css/style.css"
type="text/css"
rel="stylesheet">

<?php include "form.php" ?>
  <script src="javascript/script.js"></script>
  </head>
  <body>
  <header>
<h1> K.T.S Records </h1>
<img src="https://png.pngtree.com/png-vector/20190223/ourlarge/pngtree-vector-vinyl-player-icon-png-image_696317.jpg"
class = "mainimage">

<div class = "topnav">
    <nav>
      <a href="index.php"> Home </a>
      <a class = "active" href="contact.php">Contact </a>
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

</header>

  <h2>Contact</h2>
  <p>Contact us to book the studio or with any questions!</p>



<!-- FORM CODE FROM https://www.w3schools.com/html/tryit.asp?filename=tryhtml_form_mail
MODIFIED USING CLASS NOTES AND EXAMPLES FROM 9/25/19 -->

  <form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    <div class="formitem">
      <label for="name">Name: </label>
      <div id="errorname" class="error"><?php echo $nameErr; ?></div>
      <input type="text" id="name" minlength="2" name="name" size=50>
    </div>

    <div class="formitem">
      <label for="email">Email: </label>
      <div id="erroremail" class="error"><?php echo $emailErr; ?></div>
      <input type="email" id="email" placeholder="name@example.com" name="email" size=50>
    </div>

    <div class="formitem">
      <label for="phone">Phone: </label>
      <div id="errorphone" class="error"><?php echo $phoneErr; ?></div>
      <input type="tel" id="phone" placeholder="000-000-0000" name="phone" size=50>
    </div>

    <div class="formitem">
      <label for="comment">Message: </label>
      <div id="errorcomment" class="error"><?php echo $CommentErr; ?></div>
      <input type="text" id="comment" name="comment" size=50>
    </div>



<!--Comment:<br>
<input type="text" name="comment" size="50"><br><br>-->

<input type="submit" name="submit" value="Send" onclick=<a href="thankyou.php">>
<input type="reset" name="reset" value="Reset">


</form>




  </body>

  <footer>
    <code>Katie Sheehan -- CS 321</code>

  </footer>

  </html>

