<?php include 'header.php'; ?>
<!--main page-->
<main>

  <section class="index-banner">
    <div class="vertical-center">
      <h2>I AM A SOFTWARE<br>DEVELOPER</h2>
      <h1>With speciality in back-end development and functionality</h1>
    </div>
  </section>
  <div class="wrapper">
    <?php require 'sig-log.php' ?>


    <!--display an error code-->
    <?php
    if (isset($_GET['error'])) {
      if ($_GET['error'] == "wrongpassword") {
        echo '<p>wrong password!</p>';
      } elseif (['error'] == "nouser") {
        echo '<p>No user found</p>';
      }
    }

    ?>
    <div class="rowlr">

    <div class="container-1">
      <h2 class="my-skills">My Skills</h2>
      <div class="bar-1">
        <div class="title">HTML5</div>
        <div class="bar" data-width="65%">
          <div class="bar-inner">

          </div>
          <div class="bar-percent">90%</div>
        </div>
      </div>

      <div class="bar-1">
        <div class="title" style="color: #084c61;">CSS</div>
        <div class="bar" data-width="85%">
          <div class="bar-inner" style="background: #084c61;">
        </div>
        <div class="bar-percent">85%</div>
        </div>
      </div>

      <div class="bar-1">
        <div class="title" style="color: #525252;">JAVASCRIPT</div>
        <div class="bar" data-width="85%">
          <div class="bar-inner" style="background: #525252;">
        </div>
        <div class="bar-percent">85%</div>
        </div>
      </div>

      <div class="bar-1">
        <div class="title" style="color: #525252;">PHP</div>
        <div class="bar" data-width="80%">
          <div class="bar-inner" style="background: #525252;">
        </div>
        <div class="bar-percent">80%</div>
        </div>
      </div>

      <div class="bar-1">
        <div class="title" style="color: #525252;">SQL</div>
        <div class="bar" data-width="90%">
          <div class="bar-inner" style="background: #525252;">
        </div>
        <div class="bar-percent">90%</div>
        </div>
      </div>


      <div class="bar-1">
        <div class="title" style="color: #525252;">PYTHON</div>
        <div class="bar" data-width="70%">
          <div class="bar-inner" style="background: #525252;">
        </div>
        <div class="bar-percent">70%</div>
        </div>
      </div>


    </div>


    <section class="testimonials">
      <h2>Testimonies</h2>
      <div class="container">
        <img src="images/banner8.jpg" alt="Avatar" style="width:90px">
        <p><span>Tony Miguel.</span></p>
        <br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis a nostrum itaque iste, placeat culpa assumenda perspiciatis accusamus cum modi quaerat. Ipsam expedita deserunt est ut. Quo vero debitis aperiam.</p>
      </div>

      <div class="container">
        <img src="images/banner8.jpg" alt="Avatar" style="width:90px">
        <p><span>Rebecca Mariam.</span></p>
        <br>
        <p>No one is better than Lotan when it comes to back-end programming Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas omnis facere aut reiciendis. Nemo excepturi, aliquid officiis vel in deleniti omnis tenetur at? Officia, vero veniam ab odit eveniet dolore?</p>
      </div>
    </section>
    <h2>Contact Me</h2>
    <br>
    <div class="contact" id="contact-me-id">
      <div style="text-align:center">
        <p>Swing by for a cup of coffee, or leave me a message:</p>
      </div>
      <div class="row">
        <div class="column">
          <img src="images/banner5.png" style="width:100%">
        </div>
        <div class="column">
          <form action="#">
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






  </div>



</main>


<?php include 'footer.php'; ?>