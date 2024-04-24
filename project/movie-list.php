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

  
    <script src="./assets/js/global.js" defer></script>
    <script src="./assets/js/index.js" type="module"></script>
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
      
      <nav class="sidebar active" sidebar>
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
        </div>
      </nav>
      <div class="overlay" overlay menu-toggler></div>
      <article class="container" page-content>
       


       
        <section class="movie-list genre-list">
          <div class="title-wrapper">
            <h1 class="heading">Movies</h1>
          </div>

          <div class="grid-list">
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

              <a href="./detail.php" class="card-btn"></a>
            </div>
            <div class="movie-card">
              <figure class="poster-box card-banner">
                <img
                  src="Maestro movie.jpeg"
                  alt="American Fiction"
                  class="img-cover"
                />
              </figure>
              <h4 class="title">Maestro</h4>

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

              <a href="./detail.php" class="card-btn"></a>
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

              <a href="./detail.php" class="card-btn"></a>
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

              <a href="./detail.php" class="card-btn"></a>
            </div>
            <div class="movie-card">
              <figure class="poster-box card-banner">
                <img
                  src="napoleon movie.jpeg"
                  alt="Napoleon"
                  class="img-cover"
                />
              </figure>
              <h4 class="title">Napoleon</h4>

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

              <a href="./detail.php" class="card-btn"></a>
            </div>
            <div class="movie-card">
              <figure class="poster-box card-banner">
                <img src="minions.jpg" alt="Minions" class="img-cover" />
              </figure>
              <h4 class="title">Minions</h4>

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

              <a href="./detail.php" class="card-btn"></a>
            </div>
            <div class="movie-card">
              <figure class="poster-box card-banner">
                <img
                  src="./assets/images/Madame Web movie.jpeg"
                  alt="Madame Web "
                  class="img-cover"
                />
              </figure>
              <h4 class="title">Madame Web</h4>

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

              <a href="./detail.php" class="card-btn"></a>
            </div>

            <div class="movie-card">
              <figure class="poster-box card-banner">
                <img
                  src="civil war movie.jpeg"
                  alt="civil war"
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

                  <span class="span">7.8</span>
                </div>

                <div class="card-badge">2022</div>
              </div>
            </div>

            <div class="movie-card">
              <figure class="poster-box card-banner">
                <img src="wonkamov.jpeg" alt="civil war" class="img-cover" />
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

                  <span class="span">7.8</span>
                </div>

                <div class="card-badge">2022</div>
              </div>
            </div>
          </div>
          <button
            class="btn load-more"
            style="background-color: rgb(254, 184, 1)"
          >
            Load More
          </button>
        </section>
      </article>
    </main>

    <div class="search-modal">
      <p class="lable">Results for</p>

      <h1 class="heading">Puss in Boots</h1>

      <div class="movie-list">
        <div class="grid-list">
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

            <a href="./detail.php" class="card-btn"></a>
          </div>
          <div class="movie-card">
            <figure class="poster-box card-banner">
              <img
                src="./assets/images/American Fiction.jpeg"
                alt="American Fiction"
                class="img-cover"
              />
            </figure>
            <h4 class="title">American Fiction</h4>

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

            <a href="./detail.php" class="card-btn"></a>
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

            <a href="./detail.php" class="card-btn"></a>
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

            <a href="./detail.php" class="card-btn"></a>
          </div>
          <div class="movie-card">
            <figure class="poster-box card-banner">
              <img
                src="./assets/images/Kung Fu Panda 4.jpeg"
                alt="Kung Fu Panda 4"
                class="img-cover"
              />
            </figure>
            <h4 class="title">Kung Fu Panda 4</h4>

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

            <a href="./detail.php" class="card-btn"></a>
          </div>
          <div class="movie-card">
            <figure class="poster-box card-banner">
              <img
                src="./assets/images/Oppenheimer movie.jpeg"
                alt="Oppenheimer"
                class="img-cover"
              />
            </figure>
            <h4 class="title">Oppenheimer</h4>

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

            <a href="./detail.php" class="card-btn"></a>
          </div>
          <div class="movie-card">
            <figure class="poster-box card-banner">
              <img
                src="./assets/images/Madame Web movie.jpeg"
                alt="Madame Web "
                class="img-cover"
              />
            </figure>
            <h4 class="title">Madame Web</h4>

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

            <a href="./detail.php" class="card-btn"></a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
