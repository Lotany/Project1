<div class="wrap-content">
      <h1>Login</h1>
      <?php
         if (isset($_SESSION['userId'])){
            echo "<p>You are logged in!</p>";
         }
         else {
            echo "<p>You are logged out!</p>";
         }
      ?>
     

     <?php
                        if (isset($_SESSION['userId'])){
                           echo '<form action="backend/logout-inc.php" method="post">
                           <button name="logout-submit" type="submit">Logout</button>
                       </form>';
                        }
                        else {
                           echo '<form action="backend/login-inc.php" method="post">
                           <input type="text" name="mailuid" id="" placeholder="Username/E-mail..">
                           <input type="password" name="pwd" placeholder="Password..">
                           <button name="login-submit" type="submit">Login</button>
                       </form>
                       <a href="signup.php">Signup</a>';
                        }      
                ?>
 
 </div>

<?php
 require 'footer.php';
 ?>