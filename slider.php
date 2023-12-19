<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Image Slider</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <nav>
    <!-- Your navigation bar content -->
  </nav>

  <div class="slider">
    <img id="sliderImage" src="" alt="Slider Image">
  </div>

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
</body>
</html>
