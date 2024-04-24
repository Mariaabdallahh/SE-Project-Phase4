<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Glimpth</title>
    <meta name="title" content="Glimpth" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />

 
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="maria2.css" />

    <script src="./assets/js/global.js" defer></script>
    <script src="./assets/js/index.js" type="module"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
</head>

  <body>
   
    <header class="header" style="color: #f6c90e; font-size: 1.5em">
      Glimpth

      <div class="search-box" search-box>
        <div class="search-wrapper" search-wrapper>
          <input
            type="text"
            name="search"
            aria-label="search movies"
            placeholder="Search any movies..."
            class="search-field"
            autocomplete="off"
            search-field
          />

          <img
            src="./assets/images/search.png"
            width="24"
            height="24"
            alt="search"
            class="leading-icon"
          />
        </div>

        <button class="search-btn" search-toggler>
          <img
            src="./assets/images/close.png"
            width="24"
            height="24"
            alt="close search box"
          />
        </button>
      </div>

      <button class="search-btn" search-toggler menu-close>
        <img
          src="./assets/images/search.png"
          width="24"
          height="24"
          alt="open search box"
        />
      </button>

      <button class="menu-btn" menu-btn menu-toggler>
        <img
          src="./assets/images/menu.png"
          width="24"
          height="24"
          alt="open menu"
          class="menu"
        />
        <img
          src="./assets/images/menu-close.png"
          width="24"
          height="24"
          alt="close menu"
          class="close"
        />
      </button>
    </header>

    <main>
      
      <nav class="sidebar" sidebar active>
        <div class="sidebar-inner">
        <div class="sidebar-list">
            <p class="title">Home</p>
            <a href="main.php" menu-close class="sidebar-link"
              >Main</a
            >
          </div>
          <div class="sidebar-list">
            <p class="title">Genre</p>
            <a href="./movie-list.html" menu-close class="sidebar-link"
              >Action</a
            >
            <a href="./movie-list.html" menu-close class="sidebar-link"
              >Horror</a
            >
            <a href="./movie-list.html" menu-close class="sidebar-link"
              >Comedy</a
            >
            <a href="./movie-list.html" menu-close class="sidebar-link"
              >Adventure</a
            >
            <a href="./movie-list.html" menu-close class="sidebar-link"
              >Drama</a
            >
            <a href="./movie-list.html" menu-close class="sidebar-link"
              >Sci-Fi</a
            >
          </div>
          
          <?php 
          if (isset($_SESSION['role'])) {
            $role = $_SESSION['role'];
            $username = $_SESSION['username'];
if($role=='CEO'){
?>
          <div class="sidebar-list">
            <p class="title">Tasks</p>
            <a href="page.php" menu-close class="sidebar-link"
              >Assign Tasks</a
            >
          </div>
          <?php 
          };
          ?>
          <?php  
          if($role=='Employer'){
          ?>
          <div class="sidebar-list">
            <p class="title">Tasks</p>
            <a href="employe_task.php" menu-close class="sidebar-link"
              >Tasks</a
            >
          </div>
          <?php
          };
          ?>
         
          
        </div>
        <div class="sidebar-list">
            <p class="title">Account</p>
            <a href="login.html" menu-close class="sidebar-link"
              >LogIn</a
            >
            <a href="logout.php" menu-close class="sidebar-link"
              >LogOut</a
            >
            <a href="#" menu-close class="sidebar-link"
              ><?php echo "<b>$username</b>"?></a
            >

          </div>
          <?php
          };
?>
      </nav>
      <div class="overlay" overlay menu-toggler></div>
      <article class="container" page-content>
        
        <!--donot forget to link small with pic images -->
        <div class="movie-detail">
          <div
            class="backdrop-image"
            style="background-image: url('./assets/images/slider-banner.jpg')"
          ></div>
          <figure class="poster-box movie-poster">
            <img
              src="./assets/images/slider-control.jpg"
              alt="Puss in Boots: The Last Wish"
              class="img-cover"
            />
          </figure>

          <div class="detail-box">
            <div class="detail-content">
              <h1 class="heading">Puss in Boots: The Last Wish</h1>
              <div class="meta-list">
                <div class="meta-item">
                  <img
                    src="./assets/images/star.png"
                    width="20"
                    height="20"
                    alt="rating"
                  />

                  <span class="span"> 8.4 </span>
                </div>

                <div class="separator"></div>

                <div class="meta-item">162m</div>

                <div class="separator"></div>

                <div class="meta-item">2022</div>

                <div class="meta-item card-badge">PG-13</div>
              </div>

              <p class="genre">Animation, Action, Adventure</p>

              <p class="overview">
                Puss in Boots discovers that his passion for adventure has taken
                its toll: He has burned through eight of his nine lives, leaving
                him with only one life left. Puss sets out on an epic journey to
                find the mythical Last Wish and restore his nine lives.
              </p>

              <ul class="detail-list">
                <div class="list-item">
                  <p class="list-name">Location</p>

                  <p>
                   Lebanon, Saida - Tyre
                  </p>
                </div>
                <div class="list-item">
                  <p class="list-name">Date </p>

                  <p>Mar. 05,2025</p>
                </div>
              </ul>

              
              
                

                <div class="buttons">
                  <button class="play" style="padding-left:25px; background-color:rgb(254, 184, 1);"> <a href="c.html" style="color: white; text-decoration: none"><i class="bi bi-ticket-perforated"></i> Book now </a></button>
                </div>
                
                
              </div>
            </div>
          </div>
          
             
               
        </div>


        <section class="movie-list" aria-label="upcoming movie">
          <div class="title-wrapper">
            <h3 class="title-large">Movies of the week</h3>
          </div>

          <div class="slider-list">
            <div class="slider-inner">
              <div class="movie-card">
                <figure class="poster-box card-banner">
                  <img
                    src="./assets/images/slider-control.jpg"
                    alt="Puss in Boots: The Last Wish"
                    class="img-cover"
                  />
                </figure>
                <h4 class="title">Puss in Boots: The Last Wish</h4>

                <div class="meta-list">
                  <div class="meta-iteam">
                    <img
                      src="./assets/images/star.png"
                      width="20"
                      height="20"
                      loading="lazy"
                      class="rating"
                    />

                    <span class="span">8.4</span>
                  </div>

                  <div class="card-badge">2022</div>
                </div>

                <a href="./detail.html" class="card-btn"></a>
              </div>
              <div class="movie-card">
                <figure class="poster-box card-banner">
                  <img
                    src="wonkamov.jpeg"
                    alt="American Fiction"
                    class="img-cover"
                  />
                </figure>
                <h4 class="title">Wonka</h4>

                <div class="meta-list">
                  <div class="meta-iteam">
                    <img
                      src="./assets/images/star.png"
                      width="20"
                      height="20"
                      loading="lazy"
                      class="rating"
                    />

                    <span class="span">8.0</span>
                  </div>

                  <div class="card-badge">2022</div>
                </div>

                <a href="./detail.html" class="card-btn"></a>
              </div>
              <div class="movie-card">
                <figure class="poster-box card-banner">
                  <img
                    src="./assets/images/Arthur the king movie.jpeg"
                    alt="Arthur the king movie"
                    class="img-cover"
                  />
                </figure>
                <h4 class="title">Arthur the king movie</h4>

                <div class="meta-list">
                  <div class="meta-iteam">
                    <img
                      src="./assets/images/star.png"
                      width="20"
                      height="20"
                      loading="lazy"
                      class="rating"
                    />

                    <span class="span">8.7</span>
                  </div>

                  <div class="card-badge">2022</div>
                </div>

                <a href="./detail.html" class="card-btn"></a>
              </div>
              <div class="movie-card">
                <figure class="poster-box card-banner">
                  <img
                    src="./assets/images/cabrinimov.jpeg"
                    alt="Cabrini"
                    class="img-cover"
                  />
                </figure>
                <h4 class="title">Cabrini</h4>

                <div class="meta-list">
                  <div class="meta-iteam">
                    <img
                      src="./assets/images/star.png"
                      width="20"
                      height="20"
                      loading="lazy"
                      class="rating"
                    />

                    <span class="span">7.8</span>
                  </div>

                  <div class="card-badge">2022</div>
                </div>

                <a href="./detail.html" class="card-btn"></a>
              </div>
              <div class="movie-card">
                <figure class="poster-box card-banner">
                  <img
                    src="civil war movie.jpeg"
                    alt="Kung Fu Panda 4"
                    class="img-cover"
                  />
                </figure>
                <h4 class="title">Civil War</h4>

                <div class="meta-list">
                  <div class="meta-iteam">
                    <img
                      src="./assets/images/star.png"
                      width="20"
                      height="20"
                      loading="lazy"
                      class="rating"
                    />

                    <span class="span">9.0</span>
                  </div>

                  <div class="card-badge">2022</div>
                </div>

                <a href="./detail.html" class="card-btn"></a>
              </div>
              <div class="movie-card">
                <figure class="poster-box card-banner">
                  <img
                    src="napoleon movie.jpeg"
                    alt="Oppenheimer"
                    class="img-cover"
                  />
                </figure>
                <h4 class="title">Napolean</h4>

                <div class="meta-list">
                  <div class="meta-iteam">
                    <img
                      src="./assets/images/star.png"
                      width="20"
                      height="20"
                      loading="lazy"
                      class="rating"
                    />

                    <span class="span">8.9</span>
                  </div>

                  <div class="card-badge">2022</div>
                </div>

                <a href="./detail.html" class="card-btn"></a>
              </div>
              <div class="movie-card">
                <figure class="poster-box card-banner">
                  <img
                    src="./assets/images/Madame Web movie.jpeg"
                    alt="Madame Web movie"
                    class="img-cover"
                  />
                </figure>
                <h4 class="title">Madame Web movie</h4>

                <div class="meta-list">
                  <div class="meta-iteam">
                    <img
                      src="./assets/images/star.png"
                      width="20"
                      height="20"
                      loading="lazy"
                      class="rating"
                    />

                    <span class="span">7.5</span>
                  </div>

                  <div class="card-badge">2022</div>
                </div>

                <a href="./detail.html" class="card-btn"></a>
              </div>
            </div>
          </div>
        </section>
      </article>
    </main>
  </body>
</html>
