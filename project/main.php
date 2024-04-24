

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="maria2.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <title>Glimpth</title>
  </head>

  <body>
    <section class="main-section" id="main-section" style="background-image: url('raya3.jpg')">
      <div class="container">
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <a class="navbar-brand heading">Glimpth</a>
             <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarText"
              aria-controls="navbarText"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link links" aria-current="page" href="#"
                    >Home</a
                  >
                </li>
                
                <li class="nav-item">
                  <a class="nav-link links" href="login.html">Movie</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link links" href="login.html">LogIn</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link links" href="logout.php">LogOut</a>
                </li>
              </ul>
              <div> 
               
                
                <!-- <button class="log" id="log"><a href="login.html" >Login</a></button>  -->
              </div>
            </div>
          </div> 
        </nav>
      </div>
      
               
        <div class="main">
          <div class="col-lg-6">
            <div class="title">
              <h1>RAYA AND THE LAST DRAGON</h1>
            </div>
            <div class="tag-line">
              <h3>A quest to save her world.</h3>
              <h5>Mar. 03,2025 lebanon</h5>
            </div>
            <div class="description">
              <p>
              Raya, a warrior, sets out to track down Sisu, a dragon, who transferred all her powers into a magical gem which is now scattered all over 
              the kingdom of Kumandra, dividing its people.
              </p>
            </div>
            <div class="rating">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-regular fa-star"></i>
              <h2>8.0 RATING</h2>
            </div>
            <div class="buttons">
              <button class="play"><a href="c.html" style="color: white; text-decoration: none"><i class="bi bi-ticket-perforated"></i> Book now </a></button>
              
            </div>
          </div>
        </div>
      </div>
      <div class="movie-pictures">
        <div class="images" style="display: block">
          <img
            src="raya3.jpg"
            onclick="changeBackgroundImage(this)"
          />
        </div>
        <div class="images">
          <img
            src="raya2.jpg"
            onclick="changeBackgroundImage(this)"
          />
        </div>
        <div class="images">
          <img
            src="raya1.jpg"
            onclick="changeBackgroundImage(this)"
          />
        </div>
      </div>
    </section>

 
    <div class="category-header">
      <h1 class="category-title" style="margin-top:30px;">Movies of the Week </h1>
      <h1 class="view-all" ><a href="movie-list.php" style="color: white; text-decoration: none"> View all</a>
         <i class="fa-solid fa-circle-arrow-right"></i>
      </h1>
    </div>
    <section class="cards-collection">
      <div class="cards">
        <div class="card">
          <img src="WhatsApp Image 2024-04-21 at 00.00.54_13106090.jpg" />
          <div class="content">
            <h1>Minnions</h1>
            <p>Mar. 04,2025 - Lebanon, Beirut  Saida</p>
            <div class="rating">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-regular fa-star"></i>
              <h2>8.0 RATING</h2>
            </div>
            <div class="buttons">
              <button class="play"><a href="c.html" style="color: white; text-decoration: none"><i class="bi bi-ticket-perforated"></i> Book now </a></button>
            </div>
          </div>
        </div>
        <div class="card">
          <img src="slider-control.jpg" />
          <div class="content">
            <h1>Puss in Boots:The Last Wish</h1>
            <p>Mar. 05,2025 - Lebanon, Saida Tyre</p>
            <div class="rating">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-regular fa-star"></i>
              <h2>8.5 RATING</h2>
            </div>
            <div class="buttons">
              <button class="play"><a href="c.html" style="color: white; text-decoration: none"><i class="bi bi-ticket-perforated"></i> Book now </a></button>
              
            </div>
          </div>
        </div>
        <div class="card">
          <img src="wonkamov.jpeg" />
          <div class="content">
            <h1>Wonka</h1>
            <p>Mar. 06,2025 - Lebanon, Beirut Jounieh-Jbeil</p>
            <div class="rating">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-regular fa-star"></i>
              <h2>7.5 RATING</h2>
            </div>
            <div class="buttons">
              <button class="play"><a href="c.html" style="color: white; text-decoration: none"><i class="bi bi-ticket-perforated"></i> Book now </a></button>
              
            </div>
          </div>
        </div>
        <div class="card">
          <img src="cabrinimov.jpeg" />
          <div class="content">
            <h1>Cabrini</h1>
            <p>Mar. 07,2025 - Lebanon, Beirut Saida</p>
            <div class="rating">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-regular fa-star"></i>
              <h2>8.0 RATING</h2>
            </div>
            <div class="buttons">
              <button class="play"><a href="c.html" style="color: white; text-decoration: none"><i class="bi bi-ticket-perforated"></i> Book now </a></button>
       
            </div>
          </div>
        </div>
        <div class="card">
          <img src="civil war movie.jpeg" />
          <div class="content">
            <h1>Civil war</h1>
            <p>March 08, Lebanon, Saida Tripoli</p>
            <div class="rating">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-regular fa-star"></i>
              <h2>8.0 RATING</h2>
            </div>
            <div class="buttons">
              <button class="play"><a href="c.html" style="color: white; text-decoration: none"><i class="bi bi-ticket-perforated"></i> Book now </a></button>
              
            </div>
          </div>
        </div>
      </div>
    </section>
  
  
    <section class="seasons-section" id="seasons-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="title">
              <h1>Money Heist : Season 3</h1>
            </div>
            <div class="tag-line">
              
              <h5>COMING SOON </h5>
            </div>
            <div class="description">
              
            </div>
            <div class="rating">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-regular fa-star"></i>
              <h2>9.0 RATING</h2>
            </div>
            <div class="buttons">
              <button class="play">COMING SOON</button>
              
            </div>
          </div>
          <div class="col-lg-6 second-portion">
            <div class="movie-pictures">
              <div class="images">
                <img
                  src="WhatsApp Image 2024-04-21 at 00.00.53_f2ed5eab.jpg"
                  onclick="changeBackgroundImageSeason(this)"
                />
              </div>
              <div class="images">
                <img
                  src="WhatsApp Image 2024-04-21 at 00.00.54_1e2db771.jpg"
                  onclick="changeBackgroundImageSeason(this)"
                />
              </div>
              <div class="images seasons-active-image">
                <img
                  src="WhatsApp Image 2024-04-21 at 00.00.56_4651797c.jpg"
                  onclick="changeBackgroundImageSeason(this)"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   
    <div class="category-header">
      <h1 class="category-title">Movies of the Week</h1>
      <h1 class="view-all" ><a href="movie-list.php" style="color: white; text-decoration: none"> View all</a>
 <i class="fa-solid fa-circle-arrow-right"></i>
      </h1>
    </div>
    <section class="cards-collection">
      <div class="cards">
        <div class="card">
          <img src="monkey man movie.jpeg" />
          <div class="content">
            <h1>Monkey man</h1>
            <p>Mar. 04, 2025 Lebanon, Saida - Tripoli </p>
            <div class="rating">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-regular fa-star"></i>
              <h2>8.0 RATING</h2>
            </div>
            <div class="buttons">
              <button class="play"><a href="c.html" style="color: white; text-decoration: none"><i class="bi bi-ticket-perforated"></i> Book now </a></button>
              
            </div>
          </div>
        </div>
        <div class="card">
          <img src="Arthur the king movie.jpeg" />
          <div class="content">
            <h1>Arthur the king</h1>
            <p>Mar. 05, 2025 Lebanon, Tripoli - Beirut</p>
            <div class="rating">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-regular fa-star"></i>
              <h2>8.0 RATING</h2>
            </div>
            <div class="buttons">
              <button class="play"><a href="c.html" style="color: white; text-decoration: none"><i class="bi bi-ticket-perforated"></i> Book now </a></button>
              
            </div>
          </div>
        </div>
        <div class="card">
          <img src="Madame Web movie.jpeg" />
          <div class="content">
            <h1>Madame Web</h1>
            <p>Mar. 06,2023, Lebanon, Beirut - Sayda - Tripoli</p>
            <div class="rating">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-regular fa-star"></i>
              <h2>8.0 RATING</h2>
            </div>
            <div class="buttons">
              <button class="play"><a href="c.html" style="color: white; text-decoration: none"><i class="bi bi-ticket-perforated"></i> Book now </a></button>
              
            </div>
          </div>
        </div>
        <div class="card">
          <img src="Maestro movie.jpeg" />
          <div class="content">
            <h1>Maestro</h1>
            <p>Mar. 07,2025 , Lebanon Beirut Saida</p>
            <div class="rating">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-regular fa-star"></i>
              <h2>8.0 RATING</h2>
            </div>
            <div class="buttons">
              <button class="play"><a href="c.html" style="color: white; text-decoration: none"><i class="bi bi-ticket-perforated"></i> Book now </a></button>
          
            </div>
          </div>
        </div>
        <div class="card">
          <img src="napoleon movie.jpeg" />
          <div class="content">
            <h1>Napoleon</h1>
            <p>Mar. 08,2025, Lebanon, Beirut, Sayda, Jbeil</p>
            <div class="rating">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-regular fa-star"></i>
              <h2>8.0 RATING</h2>
            </div>
            <div class="buttons">
              <button class="play"><a href="c.html" style="color: white; text-decoration: none"><i class="bi bi-ticket-perforated"></i> Book now </a></button>
              
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="category-header">
      <h1 class="category-title">COMING SOON</h1>
      <h1 class="view-all" ><a href="movie-list.php" style="color: white; text-decoration: none"> View all</a>
 <i class="fa-solid fa-circle-arrow-right"></i>
      </h1>
    </div>
    <section class="cards-collection">
      <div class="cards">
        <div class="card">
          <img src="Oppenheimer movie.jpeg" />
          <div class="content">
            <h1>Oppenheimer</h1>
            <p>It is a long established fact that a reader...</p>
            <div class="rating">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-regular fa-star"></i>
              <h2>8.0 RATING</h2>
            </div>
            <div class="buttons">
              <button class="play">SOON</button>
              
            </div>
          </div>
        </div>
        <div class="card">
          <img src="Poor Things.jpeg" />
          <div class="content">
            <h1>Poor Things</h1>
            <p>It is a long established fact that a reader...</p>
            <div class="rating">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-regular fa-star"></i>
              <h2>8.0 RATING</h2>
            </div>
            <div class="buttons">
              <button class="play">SOON</button>
            
            </div>
          </div>
        </div>
        <div class="card">
          <img src="Kung Fu Panda 4.jpeg" />
          <div class="content">
            <h1>Kung Fu Panda 4</h1>
            <p>It is a long established fact that a reader...</p>
            <div class="rating">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-regular fa-star"></i>
              <h2>8.0 RATING</h2>
            </div>
            <div class="buttons">
              <button class="play">SOON</button>
             
            </div>
          </div>
        </div>
        <div class="card">
          <img src="Dune Part Two movie.jpeg" />
          <div class="content">
            <h1>Dune: Part Two</h1>
            <p>It is a long established fact that a reader...</p>
            <div class="rating">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-regular fa-star"></i>
              <h2>8.0 RATING</h2>
            </div>
            <div class="buttons">
              <button class="play">SOON</button>
           
            </div>
          </div>
        </div>
        <div class="card">
          <img src="Barbie movie.jpeg" />
          <div class="content">
            <h1>Barbie</h1>
            <p>It is a long established fact that a reader...</p>
            <div class="rating">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-regular fa-star"></i>
              <h2>8.0 RATING</h2>
            </div>
            <div class="buttons">
              <button class="play">SOON</button>
          
            </div>
          </div>
        </div>
      </div>
    </section>
    <h1 class="announcement">Popular Movies</h1>
    <section class="tv-series-section" id="tv-series-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="title">
              <h1>Avengers the End Game</h1>
            </div>
            <div class="tag-line">
              
              <h5>Mar. 09,2025 Lebanon</h5>
            </div>
            <div class="description">
              <p>
              After Thanos, an intergalactic warlord, disintegrates 
              half of the universe, the Avengers must reunite and assemble again to reinvigorate their 
              trounced allies and restore balance.
            </div>
            <div class="rating">
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ><i class="fa-regular fa-star"></i>
              <h2>8.0 RATING</h2>
            </div>
            <div class="buttons">
              <button class="play">Unavailable</button>
        
            </div>
          </div>
          <div class="col-lg-6 second-portion">
            <div class="movie-pictures" class="tv-series-active-image">
              <div class="images tv-series-active-image">
                <img
                  src="WhatsApp Image 2024-04-21 at 00.00.54_ef1671cd.jpg"
                  onclick="changeBackgroundImageSeries(this)"
                />
              </div>
              <div class="images">
                <img
                  src="WhatsApp Image 2024-04-21 at 00.00.53_832ef6b0.jpg"
                  onclick="changeBackgroundImageSeries(this)"
                />
              </div>
              <div class="images">
                <img
                  src="WhatsApp Image 2024-04-21 at 00.00.55_3d684418.jpg"
                  onclick="changeBackgroundImageSeries(this)"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  
    

    <section class="footer">
      <div class="category-header">
        <h1 class="view-all">Glimpth</h1>
        <h1 class="view-all">
          Follow us on <i class="fa-brands fa-facebook-f"></i>
          <i class="fa-brands fa-instagram"></i>
          <i class="fa-brands fa-threads"></i>
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-youtube"></i>
        </h1>
      </div>
      <hr />
      <div class="footer-cards">
        <div class="footer-card">
          <h1>Movies</h1>
          <h2>Action</h2>
          <h2>Comedy</h2>
          <h2>Horror</h2>
          <h2>Animation</h2>
          <h2>Fantasy</h2>
        </div>
        
        <div class="footer-card">
          <h1>Support</h1>
          <h2>General Info</h2>
          <h2>Privacy Policy</h2>
          <h2>Terms of service</h2>
          <h2>Help Center</h2>
        </div>
        <div class="footer-card">
          <h1>Contact Us</h1>
          <h2>support@glimptj.com</h2>
          <h2>Tel: AABBXXCC</h2>
        </div>
      </div>
    </section>

    <!---------------------------------------------------------------------------------------------------------------------------->
    <script src="maria1.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.7.0.js"
      integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
      script
    ></script>
  </body>
</html>
