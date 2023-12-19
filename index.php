<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a8dce0582d.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <script src="js/slider.js"></script>
  <title>Home Page</title>
</head>
<body>

<!-------Nav Bar-------->
  <section class="header">
    <nav>
        
            <div class="skew">
                <a href="index.html" style="display: flex; text-decoration:none "><img src="css/images/logo1.jpeg">
                    <p class="ltitle">Welcome To Kanaka Guru Peetha <br><br>ಕಾಗಿನೆಲೆ ಕನಕ ಗುರು ಪೀಠ</p></a>
            </div>
        <div class="nav-links" id="Navlinks">
            <i class="fa-solid fa-xmark" style="color: #fff;" onclick="hideMenu()"></i>
            <ul>
              <li><a href="">Home</a></li>
              <li><a href="">Culturals</a></li>
              <li><a href="">Education</a></li>
              <li><a href="">Publication</a></li>
              <li><a href="">Religious Reforms</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="">About</a></li>
              <li><a href="">Login</a></li>
            </ul>
        </div>
        <i class="fa-solid fa-bars" style="color: #fff;" onclick="showMenu()"></i>
    </nav>
    <marquee direction="left"><a href="">Notification links</a></marquee>
   
    <div class="slider">
      <img id="sliderImage" src="" alt="Slider Image">
    </div>

</section>

<!---------Poster----------->

<section class="Poster">
  <h1>Poster</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
      Praesentium consequatur distinctio at in veniam molestiae rerum, 
      tenetur dignissimos nam quaerat nobis quia ea pariatur suscipit perferendis fuga. Libero, eaque! Corporis.</p>

      <div class="container">
        <div class="box1">
            <div class="post-col" style="display: flex;">
                <div>
                    <h3>Image</h3>
                    <img src="css/images/logo.png" alt="">
                </div>
        
                  <div>
                    <h3>Information</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                      Est in id a velit exercitationem dolorum molestiae asperiores, at,
                       quaerat voluptatem iste dolor eos sed natus cumque ullam voluptatibus harum totam.</p>
                  </div>
              </div>
        </div>
        <div class="box">
            <h3>Notification Links</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                 quaerat voluptatem iste dolor eos sed natus cumque ullam voluptatibus harum totam.</p>
                 <div class="notification-container">
                    <a href="#">Notification 1</a>
                    <a href="#">Notification 2</a>
                    <a href="#">Notification 3</a>
                    <a href="#">Notification 4</a>
                  </div>                  
        </div>
      </div>
      

</section>
<br>
<!----------------------Social Posts------------------------------>
<section class="socailposts">
    <center><h1>Social Posts</h1></center>
    <div class="image-grid">
        <div class="row">
          <div class="image"><img src="image1.jpg" alt="Image 1"></div>
          <div class="image"><img src="image2.jpg" alt="Image 2"></div>
          <div class="image"><img src="image3.jpg" alt="Image 3"></div>
        </div>
        <div class="row">
          <div class="image"><img src="image4.jpg" alt="Image 4"></div>
          <div class="image"><img src="image5.jpg" alt="Image 5"></div>
          <div class="image"><img src="image6.jpg" alt="Image 6"></div>
        </div>
        <div class="row">
          <div class="image"><img src="image7.jpg" alt="Image 7"></div>
          <div class="image"><img src="image8.jpg" alt="Image 8"></div>
          <div class="image"><img src="image9.jpg" alt="Image 9"></div>
        </div>
      </div>
      

</section>

</body>

<!-----------------------Footer--------------------------------->
<footer>
  <div class="footer-col">
      <h4>Developers</h4>
      <ul>
          <li><img src="" alt=""><a href="#">Akash Hiremath</a></li>
          <li><img src="" alt=""><a href="#">Abu Bakkar</a></li>
          <li><img src="" alt=""><a href="#">Kallesh D R</a></li>
      </ul>
  </div>
  <div class="footer-col">
      <h4>network</h4>
      <ul>
          <li><a href="#">technology</a></li>
          <li><a href="#">science</a></li>
          <li><a href="#">business</a></li>
          <li><a href="#">professional</a></li>
      </ul>
  </div>
  <div class="footer-col">
      <h4>Menu</h4>
      <ul>
          <li><a href="#">home</a></li>
          <li><a href="#">about</a></li>
          <li><a href="#">Education</a></li>
          <li><a href="contact.html">contact us</a></li>
      </ul>
  </div>
  <div class="footer-col">
      <h4>follow us</h4>
      <div class="links">
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
  </div>
  </div>
  <hr>
  <p class="copyright">
    Copyright © 2023 Kanaka Guru Peetha. All Rights Reserved.
  </p>
</footer>

<!-----------JavaScript for Menu------------>
<script>
  var Navlinks = document.getElementById("Navlinks");

  function showMenu(){
      Navlinks.style.right = "0";
  }
  function hideMenu(){
      Navlinks.style.right = "-200px";
  }
</script>

<!-----------JavaScript for slider------------>
<script>
  let currentIndex = 0;
  const images = <?php echo json_encode(glob('images/*.{jpg,jpeg,png,gif}', GLOB_BRACE)); ?>;
  const sliderImage = document.getElementById('sliderImage');

  function changeImage() {
    sliderImage.src = images[currentIndex];

    currentIndex++;
    if (currentIndex >= images.length) {
      currentIndex = 0;
    }
  }

  changeImage();
  setInterval(changeImage, 2000);
</script>
</html>