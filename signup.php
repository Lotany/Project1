<?php
 require 'header.php';
?>

<div class="wrap-content">

            <h1>Signup</h1>
            

            <div class="container-fom
            ">
            <form action="backend/signup-inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="email" name="mail" placeholder="Email">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwd-repeat" placeholder="Repeat Password">
                <button type="submit" name="signup-submit">Signup</button>
            </form>
            </div>
    </div>


<?php
 require 'footer.php';
 ?>