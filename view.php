<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Story dashboard dashboard</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!--to close/open tab on mobileview-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
  </head>


  <body>
    <!--NAV BAR--->
  <section class ="header" style= "background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)),
    url(./images/background.jpeg)" >

    <div class="user">
      <a href="login-signup.php"><i class='bx bxs-user'></i></a>
  </div>
    <!--<div class="logout">
        <a href="logout.php"><i class='bx bx-log-out'></i></a>
    </div>-->

    <?php
    include_once("dbconnection.php");

    if (isset($_GET['id']));
    {
        $id=$_GET['id'];
        $sql="SELECT * FROM viewstory WHERE entryid = '$id' ";
        $result = mysqli_query($db,$sql);

        while ($story = mysqli_fetch_array($result)) 
        { ?>
                       "  <div class="story">
                         <h2><a href="view.php?id=<?php echo $story ['entryid']; ?>"> <?php echo $story ['title']; ?></a></h2>
                          <img src="<?php echo $story ['image'];  ?>" alt=" " class="img"> 
                          <i class='bx bxs-user-circle'><?php echo $story ['username']; ?></i>
                         <i class='bx bxs-user-circle'><?php echo  date ("m-d-y", strtotime ($story ['datetime'])); ?></i>
                       <p><?php echo $story ['content']; ?></p>
                       </div>";
   <?php     }
    } ?>







    <footer class="page-footer bg-dark " id="footer">
      
    <section class="footer">
      <div class="container">
        <div class="row">
          <div class="about">
          <h4>About Us</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Explicabo, eos. Voluptatibus molestias nam quasi similique <br>odio! Fugit quaerat itaque quam. Dignissimos recusandae <br>velit a qui doloremque ullam ex praesentium ducimus.</p>
    
           <div class="social-links">
          <a href="#"><i class='bx bxl-facebook-circle' ></i></a>
          <a href="#"><i class='bx bxl-twitter' ></i></a>
          <a href="#"><i class='bx bxl-twitter' ></i></a>
          <a href="#"><i class='bx bxl-youtube' ></i></a>
          <a href="#"><i class='bx bxl-linkedin-square' ></i></a>
        </div>
      </div>

      <div class="copyright">
      <p>Copyright <br>Geotag<i class='bx bx-copyright'></i>All rights reserved</p>
      </div>
    </section>
          </div>
      </div>
    </div>

  </body>
</html>
