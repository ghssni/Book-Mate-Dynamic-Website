<?php
    include 'register.php';
    include 'login.php';
    include 'form.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Mate</title>
    <!-- CSS External -->
    <link rel="stylesheet" href="./style.css">
    <!-- Using Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</head>
<body>
    <!-- Header -->
    <header>
        <h3 class="float-md-start mb-0">BookMate</h3>
        <nav class="nav nav-masthead justify-content-center float-md-end">
          <a class="nav-link text-white active" aria-current="page" href="#">Home</a>
          <a class="nav-link text-white" href="#product">Product</a>
          <a class="nav-link text-white" href="#gallery">Gallery</a>
          <a class="nav-link text-white" href="#about">About Us</a>
          <a class="nav-link text-white" href="#contact">Contact Us</a>
          <a class="nav-link text-white" href="#login">Login</a>
          <a class="nav-link text-white" href="#register">Register</a>
        </nav>
    </header>
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <main>
          <h1>Find Your Best Book Mate</h1>
          <p class="lead text-white">We offer a book that will captivate and inspire you. Start your journey with Bookmate today and find your perfect reading partner!</p>
          <p class="lead">
            <a href="#product" class="btn btn-lg btn-warning">Shop Now</a>
          </p>
        </main>
    </div>

    <!-- Product -->
    <div class="container">
        <section id="product">
        <h3 class="text-center text-white"><b>Your Ready Book Mate</b></h3>
        <div class="row justify-content-center mb-3">
            <div class="col-md-12">
                <form class="d-flex">
                    <input class="form-control me-2" id="myInput" onkeyup="myFunction()" type="search" placeholder="Search your book mate" aria-label="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col">
            <div class="card shadow-sm">
              <img src="https://99designs-blog.imgix.net/blog/wp-content/uploads/2017/07/goodnight.jpg?auto=format&q=60&fit=max&w=930" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Thumbnail" style="width: 100%; height: 300px; object-fit: cover;">
              <div class="card-body">
                <h5 class="title-book text-center" id="title-book">Goodnight, Construction Site</h5>
                <p class="author text-center" id="author">Sherri Duskey</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Buy Now</button>
                  </div>
                  <small class="text-muted">Rp 90.000</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="https://99designs-blog.imgix.net/blog/wp-content/uploads/2017/07/attachment_40860259-e1500059396686.jpg?auto=format&q=60&fit=max&w=930" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Thumbnail" style="width: 100%; height: 300px; object-fit: cover;">
              <div class="card-body">
                <h5 class="title-book text-center" id="title-book">Shipwrecked</h5>
                <p class="author text-center" id="author">Jacci Turner</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Buy Now</button>
                  </div>
                  <small class="text-muted">Rp 90.000</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="https://99designs-blog.imgix.net/blog/wp-content/uploads/2017/07/68f9f776-78f5-417f-911e-a94b977421a9-1.jpg?auto=format&q=60&fit=max&w=930" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Thumbnail" style="width: 100%; height: 300px; object-fit: cover;">
              <div class="card-body">
                <h5 class="title-book text-center" id="title-book">A Town Called Hairyscary</h5>
                <p class="author text-center" id="author">Jennifer Tallagnon</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Buy Now</button>
                  </div>
                  <small class="text-muted">Rp 90.000</small>
                </div>
              </div>
            </div>
          </div>
  
          <div class="col">
            <div class="card shadow-sm">
              <img src="https://99designs-blog.imgix.net/blog/wp-content/uploads/2017/07/attachment_27516952-1.jpg?auto=format&q=60&fit=max&w=930" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Thumbnail" style="width: 100%; height: 300px; object-fit: cover;">
              <div class="card-body">
                <h5 class="title-book text-center" id="title-book">Calico Bear</h5>
                <p class="author text-center" id="author">Elica Hunt</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Buy Now</button>
                  </div>
                  <small class="text-muted">Rp 90.000</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="https://99designs-blog.imgix.net/blog/wp-content/uploads/2017/07/Serafina-and-the-black-cloak-final-cover-e1500059300680.jpg?auto=format&q=60&fit=max&w=930" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Thumbnail" style="width: 100%; height: 300px; object-fit: cover;">
  
              <div class="card-body">
                <h5 class="title-book text-center" id="title-book">Serafina and The Black Cloak</h5>
                <p class="author text-center" id="author">Robert Beatty</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Buy Now</button>
                  </div>
                  <small class="text-muted">Rp 90.000</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="https://99designs-blog.imgix.net/blog/wp-content/uploads/2017/07/attachment_49797537-e1500060293604.jpg?auto=format&q=60&fit=max&w=930" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Thumbnail" style="width: 100%; height: 300px; object-fit: cover;">
  
              <div class="card-body">
                <h5 class="title-book text-center" id="title-book">33 Things to Explain The World</h5>
                <p class="author text-center" id="author">Constanze</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Buy Now</button>
                  </div>
                  <small class="text-muted">Rp 90.000</small>
                </div>
              </div>
            </div>
          </div>
  
          <div class="col">
            <div class="card shadow-sm">
              <img src="https://99designs-blog.imgix.net/blog/wp-content/uploads/2017/07/attachment_60213328-e1500059192173.jpg?auto=format&q=60&fit=max&w=930" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Thumbnail" style="width: 100%; height: 300px; object-fit: cover;">
  
              <div class="card-body">
                <h5 class="title-book text-center" id="title-book">The Giant of Time</h5>
                <p class="author text-center" id="author">Mallory Leigh</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Buy Now</button>
                  </div>
                  <small class="text-muted">Rp 90.000</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="https://99designs-blog.imgix.net/blog/wp-content/uploads/2017/07/attachment_44732874-e1500057501374.jpg?auto=format&q=60&fit=max&w=930" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Thumbnail" style="width: 100%; height: 300px; object-fit: cover;">
  
              <div class="card-body">
                <h5 class="title-book text-center" id="title-book">Wiggly McGee</h5>
                <p class="author text-center" id="author">Natasha Hanson</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Buy Now</button>
                  </div>
                  <small class="text-muted">Rp 90.000</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="https://99designs-blog.imgix.net/blog/wp-content/uploads/2017/07/attachment_78895234.png?auto=format&q=60&fit=max&w=930" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Thumbnail" style="width: 100%; height: 300px; object-fit: cover;">
  
              <div class="card-body">
                <h5 class="title-book text-center" id="title-book">Princess The Cat</h5>
                <p class="author text-center" id="author">John Heaton</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Buy Now</button>
                  </div>
                  <small class="text-muted">Rp 90.000</small>
                </div>
              </div>
            </div>
          </div>
        </div>
        </section>
    </div>

    <!-- Gallery -->
  <section id="gallery">
    <div id="carouselExampleCaptions" class="carousel slide containerr col-md-9" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://images.adsttc.com/media/images/59d0/89db/b22e/3898/7000/00d9/large_jpg/_DSC6058-X_FOR_WEBSITE.jpg?1506838995" class="d-block w-100" alt="slide" style="width: 100%; height: 300px; object-fit: cover;">
          <div class="carousel-caption d-none d-md-block">
            <h5>Personalized Recommendations Just For You</h5>
            <p>Advanced technology tailors book suggestions to each reader's preferences.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://i.pinimg.com/originals/0b/5f/93/0b5f93aa62c45bf98aa8d61c0c2d35fc.jpg" class="d-block w-100" alt="slide" style="width: 100%; height: 300px; object-fit: cover;">
          <div class="carousel-caption d-none d-md-block">
            <h5>Curated Selections</h5>
            <p>Carefully selected books of the highest quality in every genre.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://www.thoughtco.com/thmb/oBY9qbfcY7gbfvDhXnY_p5XvV5M=/3865x2576/filters:no_upscale():max_bytes(150000):strip_icc()/diverse-group-of-friends-discussing-a-book-in-library--583816330-59cd08c76f53ba001111922a.jpg" class="d-block w-100" alt="slide" style="width: 100%; height: 300px; object-fit: cover;">
          <div class="carousel-caption d-none d-md-block">
            <h5>Active Reader Community</h5>
            <p>ngage with fellow readers through reviews, recommendations, and shared reading experiences.</p>
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

    <!-- About Us -->
    <div class="containerr col-md-9">
        <section id="about">
            <h2 class="text-center">Your Complete E-Commerce Solution for Books</h2>
            <p class="text-center">All you need is to find your book mate</p><hr>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="https://i.pinimg.com/originals/0a/8d/59/0a8d59e0c8607f8b8b87c511538d9fd9.jpg" alt="About Us Image" class="img-fluid" style="height: 300px; object-fit: cover;">
                </div>
                <div class="col-md-6">
                    <p>BookMate is your go-to source for finding the perfect book that matches your interests. We believe in the power of books to transform lives and provide a gateway to new worlds and ideas. Our curated collection is designed to inspire, educate, and entertain. Join us on this literary journey and discover your next great read with BookMate!</p>
                    <ul>
                        <li>Curated Book Selections</li>
                        <li>Personalized Recommendations</li>
                        <li>Active Reader Community</li>
                        <li>User-Friendly Experience</li>
                        <li>Exclusive Promotions</li>
                        <li>Responsive Customer Service</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>

    <!-- Contact Us -->
    <div class="containerr col-md-9">
        <section id="contact">
            <h2 class="text-center">Contact Us</h2>
            <div class="contact-content">
                <p class="text-center">Contact us for more information:</p>
                <p class="text-center">Phone: 123-456-7890</p>
                <p class="text-center">Email: your@bookmate.com</p>
                <p class="text-center"><b>Get In Touch</b></p>
                <div class="form-container offset-md-3">
                    <form method="POST" action="form.php" class="form col-md-9">
                        <div class="input-group mb-2">
                            <input type="text" name="formName" class="form-control" placeholder="Name" aria-label="name" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-2">
                            <input type="text" name="formEmail" class="form-control" placeholder="Email" aria-label="email" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-floating mb-2">
                            <textarea class="form-control" name="formMessage" placeholder="Messages" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Messages</label>
                        </div>
                    </form>
                </div>
            <button type="submit" name="submit-form" data-mdb-button-init data-mdb-ripple-init class="btn btn-warning btn-sm offset-md-3">Send Messages</button>
        </section>
    </div>

    <!-- Login -->
<section id="login">
  <div class="containerr col-md-9 d-flex justify-content-center">
    <!-- Pills content -->
    <div class="tab-content">
      <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
        <form method="POST" action="login.php">
          <h3 class="text-center">BookMate</h3>
          <!-- Email input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="email" name="loginName" id="loginName" class="form-control" placeholder="Email or username">
            <!-- <label class="form-label" for="loginName">Email or username</label> -->
          </div>
    
          <!-- Password input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="password" name="loginPassword" id="loginPassword" class="form-control" placeholder="Password">
            <!-- <label class="form-label" for="loginPassword">Password</label> -->
          </div>
    
          <!-- 2 column grid layout -->
          <div class="row mb-3">
            <div class= "d-flex">
              <!-- Checkbox -->
              <div class="form-check mb-2 mb-md-0">
                <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                <label class="form-check-label" for="loginCheck"> Remember me</label>
              </div>
            </div>
          </div>
    
          <!-- Submit button -->
          <button type="submit" name="submit-login" data-mdb-button-init data-mdb-ripple-init class="btn btn-warning btn-block mb-4">Sign in</button>
    
          <!-- Register buttons -->
          <div class="text-center">
            <p>Not a member? <a href="#register">Register</a></p>
          </div>
        </form>
      </div>
    </div>
    <!-- Pills content -->
  </section>
</div>


<!-- register -->
<div class="containerr col-md-9 d-flex justify-content-center">
  <section id="register">
      <form method="POST" action="register.php">
        <h3 class="text-center">BookMate</h3>
        <!-- Name input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <input type="text" name="registerName" id="registerName" class="form-control" placeholder="Enter Your Name"/>
        </div>
  
        <!-- Username input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <input type="text" name="registerUsername" id="registerUsername" class="form-control" placeholder="Enter Your Username"/>
        </div>
  
        <!-- Email input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <input type="email" name="registerEmail" id="registerEmail" class="form-control" placeholder="Enter Your Email"/>
        </div>
  
        <!-- Password input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <input type="password" name="registerPassword" id="registerPassword" class="form-control" placeholder="Enter Password"/>
        </div>
  
        <!-- Repeat Password input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <input type="password" id="registerRepeatPassword" class="form-control" placeholder="Repeat Your Password"/>
        </div>
  
        <!-- Checkbox -->
        <div class="form-check d-flex justify-content-center mb-4">
          <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
            aria-describedby="registerCheckHelpText" />
          <label class="form-check-label" for="registerCheck">
            I have read and agree to the terms
          </label>
        </div>
  
        <!-- Submit button -->
        <button type="submit" name="submit-register" data-mdb-button-init data-mdb-ripple-init class="btn btn-warning btn-block mb-3">Sign Up</button>
      </form>
    </div>
  </section>
</div> 
<!-- Footer -->
<footer class="footer py-1">
    <p class="footer_contents">&copy; 2024 BookMate. All rights reserved.</p>
</footer>

<script>
function myFunction() {
  // Declare variables
  // var input, filter, div, h5, txtValue;
  var input = document.getElementById('myInput');
  filter = input.value.toLowerCase();
  var books = document.getElementsByClassName('col');

  // Loop through all list items, and hide those who don't match the search query
  for (var i = 0; i < books.length; i++) {
    var title = books[i].getElementsByClassName("title-book")[0];
    var author = books[i].getElementsByClassName("author")[0];
    if (title.innerHTML.toLowerCase().indexOf(filter) > -1 || author.innerHTML.toLowerCase().indexOf(filter) > -1) {
      books[i].style.display = "";
    } else {
      books[i].style.display = "none";
    }
  }
}
</script>

</body>
</html>