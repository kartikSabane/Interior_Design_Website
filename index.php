<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interior Design</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>


<!-- Header section  -->
<header class="header">
    <nav id="navbar">
      <div class="logo1">
        <img src="image/logo.jpg" alt="logo">
      </div>
      <div class="logo">Interior Design</div>
      
        <div class="menu">
            <a href="#home">Home</a>
            <a href="#service">Services</a>
            <a href="#blogs">Blog</a>
            <a href="#contact">Contacts</a>
      </div>
    </nav>
    <section id="home">
    <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/avante-table.jpg" class="d-block w-100" alt="image">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:black;">Main Interior</h5>
        <p style="color:black;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, tenetur.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/background.jpg" class="d-block w-100" alt="image">
      <div class="carousel-caption d-none d-md-block">
        <h5 >Kitchen Interior</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, adipisci.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/back3.jpeg" class="d-block w-100" alt="image">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:black;">Holl Interior</h5>
        <p style="color:black;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt, deleniti!</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </section>
        
</header>

<!-- Services  -->
<section class="services" id="service">
    <h1>Services Offer</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis sint veritatis libero fugiat tempore culpa architecto, itaque cum voluptate et debitis totam dolore qui at cumque dicta, explicabo eum perferendis?</p>

    <div class="row">
        <div class="services-col">
            <h3>Hospitality Design</h3>
            <img src="image/h_design.jpeg" alt="image">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis harum enim quaerat doloremque similique nisi, natus, earum quibusdam, dignissimos ratione quos libero! Saepe, eligendi rem enim deserunt blanditiis eaque tempore.</p>
        </div>
        <div class="services-col">
            <h3>Residential Design</h3>
            <img src="image/R_design.jpg" alt="image">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis harum enim quaerat doloremque similique nisi, natus, earum quibusdam, dignissimos ratione quos libero! Saepe, eligendi rem enim deserunt blanditiis eaque tempore.</p>
        </div>
        <div class="services-col">
            <h3>Hospitaly Design</h3>
            <img src="image/h2_design.jpg" alt="image">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis harum enim quaerat doloremque similique nisi, natus, earum quibusdam, dignissimos ratione quos libero! Saepe, eligendi rem enim deserunt blanditiis eaque tempore.</p>
        </div>
    </div>
</section>

<!-- About  -->
<section class="blog" id="blogs">
  <h1>Blog</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo ipsum aspernatur dignissimos assumenda nobis. Est dolorum at dolorem eius rerum accusamus non consequuntur voluptate officia repellat, dicta officiis error mollitia.</p>

  <div class="row">
        <div class="blog-col">
            <img src="image/bedroom.jpg" alt="image">
            <div class="layer">
              <h3>Bedroom</h3>
            </div>
        </div>
        <div class="blog-col">
            <img src="image/dinning.webp" alt="image">
            <div class="layer">
              <h3>Dinning</h3>
            </div>
        </div>
        <div class="blog-col">
            <img src="image/images.jpeg" alt="image">
            <div class="layer">
              <h3>Hall</h3>
            </div>
        </div>
    </div>

 </section>

 <!-- Contact -->
<section class="contact_us"id="contact">
    <h1>Contact Us</h1>
    <p>Contact us via a this form we will contact you as soon as possible</p>
    <div class="contact">
      <img src="image/contact1.webp" alt="image">
      <form action="contact.php" method="POST">
        <label style="color:black;">*** For update delete Phone number needed***</label>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <label for="number">Phone Number:</label>
        <input type="tel" name="number" id="number" pattern="[0-9]{10}" required>
        <label for="address">Address</label>
        <textarea name="address" id="address" cols="30" rows="10"></textarea>
        <input type="submit" value="Insert" name="submit">
        <input type="submit" value="Update" name="update">
        <input type="submit" value="Delete" name="delete">
        <input type="submit" value="Display" name="display">
    </form>
    </div>
</section>

<!-- Footer  -->
<section class="footer">
  <h4>About us</h4>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, culpa voluptatem, consequatur voluptas quod, similique quae nesciunt ab natus dicta dolores. Quam earum, aut saepe minima labore a sint ad.</p>

  <div class="icons">
    <i class="fa fa-facebook" ></i>
    <i class="fa fa-twitter" ></i>
    <i class="fa fa-instagram" ></i>
    <i class="fa fa-linkedin" ></i>
  </div>
</section>

<!-- javascript file  -->
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>