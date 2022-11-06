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
    <div class="row">

      <div class="left">

        <div class="skills">
        <h2>Skills</h2>

          <div class="skill">
            <div class="details">
              <span>HTML5</span>
              <Span>95%</Span>
            </div>
            <div class="bar">
              <div id="html-bar"></div>
            </div>
          </div>

          <div class="skill">
            <div class="details">
              <span>CSS</span>
              <Span>90%</Span>
            </div>
            <div class="bar">
              <div id="css-bar"></div>
            </div>
          </div>


          <div class="skill">
            <div class="details">
              <span>JAVASCRIPT</span>
              <Span>72%</Span>
            </div>
            <div class="bar">
              <div id="js-bar"></div>
            </div>
          </div>

          <div class="skill">
            <div class="details">
              <span>PHP</span>
              <Span>89%</Span>
            </div>
            <div class="bar">
              <div id="php-bar"></div>
            </div>
          </div>


          <div class="skill">
            <div class="details">
              <span>DART</span>
              <Span>65%</Span>
            </div>
            <div class="bar">
              <div id="dart-bar"></div>
            </div>
          </div>


          <div class="skill">
            <div class="details">
              <span>FLUTTER</span>
              <Span>65%</Span>
            </div>
            <div class="bar">
              <div id="flut-bar"></div>
            </div>
          </div>

          <div class="skill">
            <div class="details">
              <span>PYTHON</span>
              <Span>59%</Span>
            </div>
            <div class="bar">
              <div id="python-bar"></div>
            </div>
          </div>


          <div class="skill">
            <div class="details">
              <span>SQL</span>
              <Span>99%</Span>
            </div>
            <div class="bar">
              <div id="sql-bar"></div>
            </div>
          </div>
        </div>


        <div class="projects">
          <h2>Projects</h2>
          <img src="images/banner5.png" alt="" width="50%" height="50%">
          <a href="cases.php">Check my projects</a>
        </div>


        



      </div>

      <div class="right">
        <!-- testimonies section -->
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

        <!--contact section-->
        <div class="contact" id="contact-me-id">
          <h2>Contact Me</h2>
          <div style="text-align:center" class="pad">
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
                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                <input type="submit" value="Submit">
              </form>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</main>

<?php include 'footer.php'; ?>