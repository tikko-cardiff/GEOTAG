<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GEOTAG</title>
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

    <div class="user"></div>
      <a href="login-signup.php"><i class='bx bxs-user' ></i></a>
  </div>

    <nav>
        <a class="nav-brand" href="index.html">Geotag<span>.</span></a>
        <div class="nav-links" id="navlinks">
          <i class='bx bx-slider' onclick="hideMenu()"></i>
          <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="login-signup.php">DESTINATION</a></li>
            <li><a href="login-signup.php">SEE & TELL</a></li>
          </ul>
          </div>
        <i class='bx bx-menu' onclick="showMenu()" ></i>
      </nav>

      <div class="text-box">
        <h1>Discover Aberdeen</h1>
        <p>See & experience Aberdeen through the lens of other tourist</p>
        <a href="login-signup.php" class="post">Tell your story</a>
      </div>
    </section>

    <!--destination-->
    <section class="destination">
      <h1>Destination</h1>
      <p>Places you will love to see</p>

      <div class="row">
        <div class="destination-col">
          <h3>Union City</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias atque ullam nostrum eius commodi consequuntur, culpa provident optio animi tempora at sit reiciendis, voluptates aut nulla, molestiae odio suscipit quod.</p>
        </div>
       <div class="destination-col">
          <h3>Bridge of Don</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias atque ullam nostrum eius commodi consequuntur, culpa provident optio animi tempora at sit reiciendis, voluptates aut nulla, molestiae odio suscipit quod.</p>
        </div>
        <div class="destination-col">
          <h3>Bridge of Dee</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias atque ullam nostrum eius commodi consequuntur, culpa provident optio animi tempora at sit reiciendis, voluptates aut nulla, molestiae odio suscipit quod.</p>
        </div>
      </div>
    </section>

    <!--Map-->
    <section class="maps">
      <h1>Where would you want to be?</h1>
      <p>Navigate through the map and select a location</p>

      <div class="row">
        <div class="maps-col">
          <img src="./images/unionstreet.jpeg" alt="union street">
          <div class="layer">
          <h3>Union Street</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias atque ullam nostrum eius commodi consequuntur, culpa provident optio animi tempora at sit reiciendis, voluptates aut nulla, molestiae odio suscipit quod.</p>
          </div>
        </div>
        <div class="maps-col">
          <img src="./images/marischalcollege.jpeg" alt="Marischal College">
          <div class="layer">
          <h3>Bridge of Don</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias atque ullam nostrum eius commodi consequuntur, culpa provident optio animi tempora at sit reiciendis, voluptates aut nulla, molestiae odio suscipit quod.</p>
          </div>
        </div>
        <div class="maps-col">
          <img src="./images/aberdeenbeach.jpeg" alt="Aberdeen beach">
          <div class="layer">
          <h3>Bridge of Dee</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias atque ullam nostrum eius commodi consequuntur, culpa provident optio animi tempora at sit reiciendis, voluptates aut nulla, molestiae odio suscipit quod.</p>
          </div>
        </div>
      </div>
    </section>


    <footer class="page-footer bg-dark " id="footer">
      
      <section class="footer">
        <div class="container">
          <div class="row">
            <div class="about">
            <h4>About Us</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Explicabo, eos. Voluptatibus molestias nam quasi similique <br>odio! Fugit quaerat itaque quam. Dignissimos recusandae <br>velit a qui doloremque ullam ex praesentium ducimus.</p>
      
             <div class="social-links">
            <a href="www.facebook.com"><i class='bx bxl-facebook-circle' ></i></a>
            <a href="www.twitter.com"><i class='bx bxl-twitter' ></i></a>
            <a href="www.instagram.com"><i class='bx bxl-instagram' ></i></a>
            <a href="www.youtube.com"><i class='bx bxl-youtube' ></i></a>
            <a href="www.linkedin.com"><i class='bx bxl-linkedin-square' ></i></a>
          </div>
        </div>
  
        <div class="copyright">
        <p>Copyright <br>Geotag<i class='bx bx-copyright'></i>All rights reserved</p>
        </div>
      </section>
            </div>
        </div>
      </div>
  </section>
  </footer>
    <!--Javascript for toggling -->
    <script>
      var navlinks = document.getElementById("navlinks");
      function showMenu(){
        navlinks.style.right ="0";
      }
      function hideMenu(){
        navlinks.style.right ="-200px";
      }
    </script>
  </body>
 