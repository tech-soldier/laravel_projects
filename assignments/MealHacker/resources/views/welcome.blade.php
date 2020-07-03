

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <title>Carbonite</title>
</head>
<body>
<header class="header">
    <nav class="navbar is-dark">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item has-text-white is-size-4 has-text-weight-bold" href="https://biron.bironthemes.com">
                    MealHacker
                </a>
                <span role="button" tabindex="0" class="navbar-burger burger has-text-white" data-target="navbar-menu">
          <span></span>
          <span></span>
          <span></span>
        </span>
            </div>
            <div id="navbar-menu" class="navbar-menu">
                <div class="navbar-end">
                    <!-- Loop through the navigation items -->
                    <a class="navbar-item nav-home is-active" href="">Home</a>
                    <a class="navbar-item nav-style-guide" href="">Recipes</a>
                    <a class="navbar-item nav-features" href="">About</a>
                    <a class="navbar-item nav-tech" href="https://biron.bironthemes.com/tag/technology/">Contact</a>


                </div>
            </div>
        </div>
    </nav>
</header>
<main class="main">

    <section class="hero background-img is-large" style="background-image: url('images/hero.jpg')">
        <!-- Hero content: will be in the middle -->
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title is-size-1 has-text-white has-text-left text-focus-in">
                    MealHacker
                </h1>
                <h2 class="subtitle has-text-light has-text-left">
                    You just can't live a full life on an empty stomach
                </h2>
            </div>
        </div>
    </section>
    <section class="section main-content">
        <div class="container">
            <div class="columns">
                <div class="column is-two-thirds">

                    <div class="card-posts">
                        @foreach($recipes as $recipe)
                        <div class="card-post-item">

                            <div class="mb-4"><a class="button has-background-grey-lighter has-text-black is-radiusless is-uppercase">Ukrainian</a></div>
                            <div class="card card-post is-shadowless">
                                <div class="card-post-header">
                                    <h1>{{ $recipe->name }}</h1>
                                    <h4 class="is-uppercase pb-2">{{ date('l, F j, Y  \a\t g:i A', strtotime($recipe->created_at))  }}</h4>
                                </div>
                                <div class="card-image">
                                    <figure class="image is-4by3"><img src="images/borsh.jpg" alt="Placeholder image" /></figure>
                                </div>
                                <div class="card-content is-paddingless">
                                    <div class="content pt-5">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis in est fugiat quia harum eaque sequi illo qui? Tempore ducimus qui laboriosam, laborum molestias numquam corrupti fugit quas
                                        dolorum similique.
                                    </div>
                                    <a href="" class="button has-background-primary has-text-white is-radiusless">Read More</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <ul class="pagination-list">
                        <li>
                            <a class="pagination-link pagination-btn"><i class="fa fa-arrow-left"></i></a>
                        </li>
                        <li><a class="pagination-link" aria-label="Goto page 1">1</a></li>
                        <li><a class="pagination-link" aria-label="Goto page 2">2</a></li>
                        <li><a class="pagination-link" aria-label="Goto page 3">3</a></li>
                        <li><a class="pagination-link" aria-label="Goto page 4">4</a></li>
                        <li>
                            <a class="pagination-link pagination-btn"><i class="fa fa-arrow-right"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="column sidebar is-one-third">
                    <div id="about-me">
                        <div class="has-text-centered">
                            <div class="img" style="background: url(images/inna.jpg);"></div>
                            <h1 class="has-text-white is-uppercase">About Me</h1>
                        </div>
                        <div class="has-text-white body mb-6">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium facilis, culpa, maiores perspiciatis neque fugiat exercitationem vero soluta eaque expedita suscipit commodi blanditiis aliquid magnam
                            delectus et! Quaerat, adipisci omnis.<a href="" class="has-text-white is-uppercase">Read More</a>
                        </div>
                    </div>
                    <div id="categories" class="dashed-container">
                        <div class="dashed-container__title is-uppercase">Categories<span></span></div>
                        <div class="dashed-container__content">
                            <table>
                                <tbody>
                                <tr>
                                    <td><a href="">Ukrainian Cuisine</a></td>
                                    <td><span class="dashed-container__content-counter">(33)</span></td>
                                </tr>
                                <tr>
                                    <td><a href="">Egyptian Cuisine</a></td>
                                    <td><span class="dashed-container__content-counter">(33)</span></td>
                                </tr>
                                <tr>
                                    <td><a href="">Italian Cuisine</a></td>
                                    <td><span class="dashed-container__content-counter">(33)</span></td>
                                </tr>
                                <tr>
                                    <td><a href="">Japanese Cuisine</a></td>
                                    <td><span class="dashed-container__content-counter">(33)</span></td>
                                </tr>
                                <tr>
                                    <td><a href="">Turkish Cuisine</a></td>
                                    <td><span class="dashed-container__content-counter">(33)</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="latest-blogs" class="dashed-container">
                        <div class="dashed-container__title is-uppercase">Latest Blogs<span></span></div>
                        <div class="dashed-container__content">
                            <a href="" class="latest-blogs__item">
                                <div class="latest-blogs__item-image" style="background: url('./img/latest-blog-1.png');"></div>
                                <div class="latest-blogs__item-content">
                                    <div>Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                                    <div>12-09-2018</div>
                                </div>
                            </a>
                            <a href="" class="latest-blogs__item">
                                <div class="latest-blogs__item-image" style="background: url('./img/latest-blog-2.png');"></div>
                                <div class="latest-blogs__item-content">
                                    <div>Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                                    <div>12-09-2018</div>
                                </div>
                            </a>
                            <a href="" class="latest-blogs__item">
                                <div class="latest-blogs__item-image" style="background: url('./img/latest-blog-3.png');"></div>
                                <div class="latest-blogs__item-content">
                                    <div>Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                                    <div>12-09-2018</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="dashed-container">
                        <div class="dashed-container__title is-uppercase">Subscribe & Follow<span></span></div>
                        <div class="dashed-container__content">
                            <div>
                                <ul class="sidebar-social-links">
                                    <li>
                                        <a href="" style="color: #36549d;"><span class="fa fa-facebook-f"></span></a>
                                    </li>
                                    <li>
                                        <a href="" style="color: #00aaf9;"><span class="fa fa-twitter"></span></a>
                                    </li>
                                    <li>
                                        <a href="" style="color: #0081c4;"><span class="fa fa-linkedin"></span></a>
                                    </li>
                                    <li>
                                        <a href="" style="color: #e32601;"><span class="fa fa-youtube"></span></a>
                                    </li>
                                    <li>
                                        <a href="" style="color: #36549d;"><span class="fa fa-instagram"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer has-background-dark">
        <div class="container">
            <div class="footer-content">
                <div>MealHacker - 2020</div>
                <div>
                    <ul class="footer-social-links">
                        <li>
                            <a href=""><span class="fa fa-facebook-f"></span></a>
                        </li>
                        <li>
                            <a href=""><span class="fa fa-twitter"></span></a>
                        </li>
                        <li>
                            <a href=""><span class="fa fa-linkedin"></span></a>
                        </li>
                        <li>
                            <a href=""><span class="fa fa-youtube"></span></a>
                        </li>
                        <li>
                            <a href=""><span class="fa fa-instagram"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</main>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
