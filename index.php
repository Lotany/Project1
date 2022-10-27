<?php include 'header.php'; ?>
     <!--main page-->
        <main>
            
        <section class="index-banner">
            <div class="vertical-center">
                <h2>I AM A FREELANCE SOFTWARE<br>DEVELOPER</h2>
                <h1>With speciality in back-end development and functionality</h1>
            </div>
        </section>
    <div class="wrapper">


<?php require 'sig-log.php'?>

   
            <!--display an error code-->
            <?php
            if (isset($_GET['error'])){
                if($_GET['error'] == "emptyfields"){
                    echo '<p>Fill in all the fields!</p>';
                }
                elseif($_GET['error'] == "invalidmailuid"){
                    echo '<p>Invalid Email Address!</p>';
                }
                elseif($_GET['error'] == "invalidmail"){
                    echo '<p>Invalid Email!</p>';
                }
                elseif($_GET['error'] == "usernametaken"){
                    echo '<p>Username has already been taken!</p>';
                }
                
            } 
             elseif($_GET['signup'] == "success"){
                echo '<p>Registration successfull!</p>';

            }

            ?>


    <section class="index-links">
        <a href="cases.php">
        <div class="index-boxlink-square">
            <h3>Projects</h3>
        </div>
        </a>
        
        <a href="#">
        <div class="index-boxlink-rectangle">
            <h3>Portfolio</h3>
        </div>
        </a>

        <a href="#">
        <div class="index-boxlink-square">
            <h3>Able</h3>
        </div>
        </a>

        <a href="#">
        <div class="index-boxlink-rectangle">
            <h3>Youtube channnel</h3>
        </div>
        </a>

        <a href="#">
        <div class="index-boxlink-square">
            <h3>Contact</h3>
        </div>
        </a>

        <a href="#">
        <div class="index-boxlink-square">
            <h3>About</h3>
        </div>
        </a>

    </section>
    
    <section class="testimonials">
        <h2>Testimonies</h2>
    <div class="container">
  <img src="images/banner8.jpg" alt="Avatar" style="width:90px">
  <p><span>Tony Miguel.</span> CEO Jijenge Foundation.</p>
  <p>Mr Lotan saved us from a web disaster, He gets the work done.</p>
</div>

<div class="container">
  <img src="images/banner8.jpg" alt="Avatar" style="width:90px">
  <p><span >Rebecca Mariam.</span> Front-end Developer.</p>
  <p>No one is better than Lotan when it comes to back-end programming</p>
</div>
<h2>Contact Me</h2>
<div class="contact" id="contact-me-id">
    
  <div style="text-align:center">
 
    <p>Swing by for a cup of coffee, or leave me a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="images/banner5.png" style="width:100%">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Kenya</option>
          <option value="canada">Tanzania</option>
          <option value="usa">Uganda</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
    </section>





</div>


    
    </main>
   

    <?php include 'footer.php';?>