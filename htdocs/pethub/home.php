<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="general.css">
  <link rel="stylesheet" href="navbar.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=bookmark" /> 
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Georama:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bookmark icon -->
  <title>Home</title>
</head>



<body>
<div class="navbar">
  <div class="left-section">
    <div class="logo-icon">
      <img class="logo-image" src="img/logo2.png">
    </div>
    <div class="infurrmation-hub">    
      <h1>INFURRMATION HUB</h1>
    </div>
  </div>
  <div class="middle-section">
    <!-- Main Dropdown for Exotic Pets -->
    <div class="dropdown">
      <button class="button-style" id="button-spacing">DOMESTIC PETS<div class="chevron-down"><i class="fa fa-chevron-down"></i></div></button>
      <div class="dropdown-content">
          <!-- Dogs Dropdown -->
          <div class="nested-dropdown">
              <a href="dogs.php#grooming">DOGS</a>
              <div class="nested-dropdown-content">
                  <a href="dogs.php#grooming">Grooming</a>
                  <a href="dogs.php#environment">Proper Environment/Caging</a>
                  <a href="dogs.php#nutrition">Nutrition</a>
                  <a href="dogs.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="dogs.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Cats Dropdown -->
          <div class="nested-dropdown">
              <a href="cats.php#grooming">CATS</a>
              <div class="nested-dropdown-content">
                  <a href="cats.php#grooming">Grooming</a>
                  <a href="cats.php#environment">Proper Environment/Caging</a>
                  <a href="cats.php#nutrition">Nutrition</a>
                  <a href="cats.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="cats.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Birds Dropdown -->
          <div class="nested-dropdown">
              <a href="birds.php#grooming">BIRDS</a>
              <div class="nested-dropdown-content">
                  <a href="birds.php#grooming">Grooming</a>
                  <a href="birds.php#environment">Proper Environment/Caging</a>
                  <a href="birds.php#nutrition">Nutrition</a>
                  <a href="birds.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="birds.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Fishes Dropdown -->
          <div class="nested-dropdown">
              <a href="fishes.php#grooming">FISHES</a>
              <div class="nested-dropdown-content">
                  <a href="fishes.php#grooming">Grooming</a>
                  <a href="fishes.php#environment">Proper Environment/Caging</a>
                  <a href="fishes.php#nutrition">Nutrition</a>
                  <a href="fishes.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="fishes.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Rabbit Dropdown -->
          <div class="nested-dropdown">
              <a href="rabbit.php#grooming">RABBIT</a>
              <div class="nested-dropdown-content">
                  <a href="rabbit.php#grooming">Grooming</a>
                  <a href="rabbit.php#environment">Proper Environment/Caging</a>
                  <a href="rabbit.php#nutrition">Nutrition</a>
                  <a href="rabbit.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="rabbit.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Rodents Dropdown -->
          <div class="nested-dropdown">
              <a href="rodents.php#grooming">RODENTS</a>
              <div class="nested-dropdown-content">
                  <a href="rodents.php#grooming">Grooming</a>
                  <a href="rodents.php#environment">Proper Environment/Caging</a>
                  <a href="rodents.php#nutrition">Nutrition</a>
                  <a href="rodents.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="rodents.php#products">Recommended Products</a>
              </div>
          </div>
      </div>
    </div>
    <!-- Main Dropdown for Exotic Pets -->
    <div class="dropdown">
      <button class="button-style">EXOTIC PETS <div class="chevron-down"><i class="fa fa-chevron-down"></i></div></button>
      <div class="dropdown-content">
          <!-- Ball Python Dropdown -->
          <div class="nested-dropdown">
              <a href="ballpython.php#grooming">Snake (Ball Python)</a>
              <div class="nested-dropdown-content">
                  <a href="ballpython.php#grooming">Grooming</a>
                  <a href="ballpython.php#environment">Proper Environment/Caging</a>
                  <a href="ballpython.php#nutrition">Nutrition</a>
                  <a href="ballpython.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="ballpython.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Tarantulas Dropdown -->
          <div class="nested-dropdown">
              <a href="tarantulas.php#grooming">Tarantulas</a>
              <div class="nested-dropdown-content">
                  <a href="tarantulas.php#grooming">Grooming</a>
                  <a href="tarantulas.php#environment">Proper Environment/Caging</a>
                  <a href="tarantulas.php#nutrition">Nutrition</a>
                  <a href="tarantulas.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="tarantulas.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Domestic Pig Dropdown -->
          <div class="nested-dropdown">
              <a href="domesticpig.php#grooming">Domestic Pig</a>
              <div class="nested-dropdown-content">
                  <a href="domesticpig.php#grooming">Grooming</a>
                  <a href="domesticpig.php#environment">Proper Environment/Caging</a>
                  <a href="domesticpig.php#nutrition">Nutrition</a>
                  <a href="domesticpig.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="domesticpig.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Turtle Dropdown -->
          <div class="nested-dropdown">
              <a href="turtle.php#grooming">Turtle</a>
              <div class="nested-dropdown-content">
                  <a href="turtle.php#grooming">Grooming</a>
                  <a href="turtle.php#environment">Proper Environment/Caging</a>
                  <a href="turtle.php#nutrition">Nutrition</a>
                  <a href="turtle.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="turtle.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Hedgehogs Dropdown -->
          <div class="nested-dropdown">
              <a href="hedgehogs.php#grooming">Hedgehogs</a>
              <div class="nested-dropdown-content">
                  <a href="hedgehogs.php#grooming">Grooming</a>
                  <a href="hedgehogs.php#environment">Proper Environment/Caging</a>
                  <a href="hedgehogs.php#nutrition">Nutrition</a>
                  <a href="hedgehogs.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="hedgehogs.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Bearded Dragons Dropdown -->
          <div class="nested-dropdown">
              <a href="bearded_dragons.php#grooming">Bearded Dragons</a>
              <div class="nested-dropdown-content">
                  <a href="bearded_dragons.php#grooming">Grooming</a>
                  <a href="bearded_dragons.php#environment">Proper Environment/Caging</a>
                  <a href="bearded_dragons.php#nutrition">Nutrition</a>
                  <a href="bearded_dragons.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="bearded_dragons.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Axolotl Dropdown -->
          <div class="nested-dropdown">
              <a href="axolotl.php#grooming">Axolotl</a>
              <div class="nested-dropdown-content">
                  <a href="axolotl.php#grooming">Grooming</a>
                  <a href="axolotl.php#environment">Proper Environment/Caging</a>
                  <a href="axolotl.php#nutrition">Nutrition</a>
                  <a href="axolotl.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="axolotl.php#products">Recommended Products</a>
              </div>
          </div>
      </div>
    </div>
  </div>
  <div class="right-section">
    <div class="search-section">
      <input class="search-bar" type="text" name="search" placeholder="Search">
      <img class="search-icon" src="img/search.png" alt="search-icon">
    </div>
    <div class="search-icon-section">
      
    </div>
    <div class="profile-section">
      <form method="POST" action="index.php">
        <div class="profile-picture-section">
          
        <a href="index.php"><img class="profile-img" src="img/profile-picture-dog.png"></a>
          
        </div>
      </form>
    </div>
  </div>
</div>



<div class="home-section">
<div class="home-top-text">
      <h1>FOR YOUR<br>INFURRMATION</h1>
    </div>
    <div class="home-bottom-text">
      <h2>This website will serve as an information hub for your pets.</h2>
    </div>
    <section class="container">
      <div class="slider-wrapper">
        <div class="slider">
          <img id="slide-1" src="img/img1.jpg" alt="animal1" />
          <img id="slide-2" src="img/img2.jpg" alt="animal2" />
          <img id="slide-3" src="img/img3.jpg" alt="animal3" />
          <img id="slide-4" src="img/img4.jpg" alt="animal4" />
        </div>
        <div class="slider-nav">
          <a href="#slide-1"></a>
          <a href="#slide-2"></a>
          <a href="#slide-3"></a>
          <a href="#slide-4"></a>
        </div>
      </div>
      <script>
document.addEventListener("DOMContentLoaded", function () {
  const slider = document.querySelector(".slider");
  const slides = Array.from(slider.children); // Convert NodeList to an array
  const slideCount = 5;

  let currentIndex = 0; // Start at the first slide
  let direction = 1; // 1 for forward, -1 for backward

  // Function to show the next slide
  function showNextSlide() {
    // Move to the next slide
    currentIndex += direction;

    // Handle reverse direction when reaching the last or first slide
    if (currentIndex === slideCount) {
      currentIndex = slideCount - 2; // Go to the second-to-last slide (img3)
      direction = -1; // Change direction to backward
    } else if (currentIndex === -1) {
      currentIndex = 1; // Go to the second slide (img2)
      direction = 1; // Change direction to forward
    }

    // Smooth scroll to the current slide
    slider.scrollTo({
      left: currentIndex * window.innerWidth,
      behavior: "smooth",
    });
  }

  // Automatically switch slides every 3 seconds
  setInterval(showNextSlide, 4000);

  // Adjust slide position on window resize
  window.addEventListener("resize", () => {
    slider.scrollTo({
      left: currentIndex * window.innerWidth,
      behavior: "instant", // Avoid animation during resize
    });
  });
});
      </script>
    </section>
  <div class="about-page">
    <div class="about-part">
      <h2>WHY DO WE NEED TO LEARN ABOUT HOW TO CARE AND THE HEALTH OF OUR PETS?</h2>
    </div>
    <div class="paragraph1">
      <p class="1">  Animal health and welfare are essential for ethical, environmental, economic, and <br>societal well-being. Treating animals humanely reflects moral responsibility, while <br>healthy animals reduce the risk of zoonotic diseases and ensure food security and <br>quality.</p>

      <p class="2"> Proper care minimizes economic losses, supports sustainable farming, and conserves <br>ecosystems. Additionally, animal welfare enhances human well-being through <br>emotional connections with companion animals. Prioritizing animal welfare benefits <br>both animals and humans, fostering a more sustainable and humane world.</p>
    </div>
    <div class="paragraph2">
      <p>IF YOUR ARE A FIRST TIME PET OWNER AND NEED <br>MORE KNOWLEDGE TO KEEP YOUR PET COMFORTABLE <br>AND HEALTHY OR YOU FEEL LIKE THERE IS SOMETHING <br>WRONG WITH YOUR PET’S HEALTH, THIS WEBSITE <br>MIGHT BE USEFUL OR GET IMMEDIATE VET CARE IF <br>CONDITION IS SERIOUS..</p>
    </div>
    <div class="about-page-image">
      <img src="img/image 4.png" alt="About Page Image" />
    </div>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
  const image = document.querySelector(".about-page-image img");

  // IntersectionObserver callback function
  const handleIntersection = (entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
      } else {
        entry.target.classList.remove("visible");
      }
    });
  };

  // Set up the IntersectionObserver for the image
  const observer = new IntersectionObserver(handleIntersection, {
    threshold: 0.1  // Trigger the animation when the element is 10% visible
  });

  // Observe the image
  if (image) {
    observer.observe(image);
  }
});

document.addEventListener("DOMContentLoaded", function () {
  // Select the elements that need to be animated
  const elementsToAnimate = [
    document.querySelector(".about-part"),
    document.querySelector(".paragraph1"),
    document.querySelector(".paragraph2"),
   // Target the image directly
  ];

  // IntersectionObserver callback function
  const handleIntersection = (entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Add the 'visible' class to trigger animation
        entry.target.classList.add("visible");
      } else {
        // Optionally remove the 'visible' class when it leaves the viewport
        entry.target.classList.remove("visible");
      }
    });
  };

  // Set up the IntersectionObserver
  const observer = new IntersectionObserver(handleIntersection, {
    threshold: 0.1  // Trigger the animation when the element is 10% visible
  });

  // Observe each element to trigger animation when they enter the viewport
  elementsToAnimate.forEach(element => {
    observer.observe(element);
  });
});

</script>






<!-- <div>
  <?php
  // if (isset($_POST['profile_click'])) {
  //     header("Location: index.php"); // Redirect to index.php
  //     exit();
  // }
  ?>
</div> -->

<script>
let lastScrollTop = 0; // Tracks the last scroll position
const navbar = document.querySelector(".navbar"); // Selects the navbar element

// Throttle function for better performance
const throttle = (callback, delay) => {
  let timeout = false;
  return () => {
    if (!timeout) {
      callback();
      timeout = true;
      setTimeout(() => (timeout = false), delay);
    }
  };
};
</script>
</body>
</html>

<!-- 
<div class="container">
  <?php
  // Fetch data grouped by a specific column (e.g., pet_housing)
  $fetch_data = mysqli_query($conn, "SELECT * FROM pet_data ORDER BY pet_housing");
  if (mysqli_num_rows($fetch_data) > 0) {
      while ($fetch_row = mysqli_fetch_assoc($fetch_data)) {
          echo "<div class='record'>";
          echo "<h2>Pet Housing</h2>";
          echo "<p>" . htmlspecialchars($fetch_row['pet_housing']) . "</p>";
          
          echo "<h2>Grooming</h2>";
          echo "<p>" . htmlspecialchars($fetch_row['grooming']) . "</p>";
          
          echo "<h2>Teaching</h2>";
          echo "<p>" . htmlspecialchars($fetch_row['teaching']) . "</p>";
          
          echo "<h2>Nutrition</h2>";
          echo "<p>" . htmlspecialchars($fetch_row['nutrition']) . "</p>";
          
          echo "<h2>Recommendation</h2>";
          echo "<p>" . htmlspecialchars($fetch_row['recommendation']) . "</p>";
          
          // Action buttons
          echo "<div class='actions'>";
          echo "<a href='home.php?edit_id=" . $fetch_row['pet_id'] . "'>Edit</a> | ";
          echo "<a href='home.php?delete_id=" . $fetch_row['pet_id'] . "' onclick=\"return confirm('Are you sure you want to delete this record?')\">Delete</a>";
          echo "</div>";

          echo "</div>"; // Close record
      }
  } else {
      echo "<div class='no-records'>NO RECORDS FOUND</div>";
  }
  ?> -->