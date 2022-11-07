<!DOCTYPE html>
<html>

<head>
   <title>Admin Site</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
</head>

<body>
   <div class="menu-btn">
      <i class="fas fa-bars"></i>
   </div>

   <div class="side-bar">
      <header>
         <div class="close-btn">
            <i class="fas fa-times"></i>
         </div>
         <img src="../images/banner8.jpg" alt="">
         <h1>Admin Board</h1>
      </header>

      <div class="menu">
         <div class="item">
            <a href="dashboard.php"><i class="fas fa-desktop"></i>Dashboard</a>
         </div>

         <div class="item"><a href="">Banner</a></div>

         <div class="item">
            <a href="">Projects</a>
         </div>
      </div>

   </div>


<script>
   $(document).ready(function(){

      $('.menu-btn').click(function(){

         $('.side-bar').addClass('active');
         $('.menu-btn').css("visibility","hidden");
      });

      $('.close-btn').click(function(){
         $('.side-bar').removeClass('active');
         $('.menu-btn').css("visibility", "visible");
      });
   });
</script>
</body>

</html>