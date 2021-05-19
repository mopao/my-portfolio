<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Franck Cheuzem</title>
        <meta name="description" content="franck cheuzem's portfolio"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- bootstrap css -->
        <link rel="stylesheet"  type="text/css" href="css/bootstrap/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <!-- our stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/general.css">
        <link rel="stylesheet" type="text/css" href="css/home.css">
        <script src="https://kit.fontawesome.com/c03ea9a48c.js" crossorigin="anonymous"></script>
    </head>
    <body class="container-fluid ">
      <?php include_once "views/header.php"; ?>
        <main >
            <h2 class="hide"> main content</h2>

            <div id="banner" class="row">
                <div id="profile-img-wrapper" class="col-md-4">
                    <img alt="franck cheuzem's picture" src="images/profile-image.png">
                </div>
                <div id="banner-msg-wrapper" class="col-md-8">
                    <h1><span id="profile-name">franck cheuzem </span><span id="profile-profession">web developer</span></h1>
                    <div id="banner-msg">
                        <p><em>"Hi. I am franck, a full stack developer with experience designing and coding successful websites" </em></p>
                    </div>

                </div>
            </div>

            <section id="layout-3columns" class="main-section">
                <h2 class="heading">Why entrust me your website?</h2>
                <div id="columns3-wrapper" class="row">
                    <article id="frontend-wrapper" class="col-sm">
                    <h3 class="hide">frontend service </h3>
                    <figure>
                        <img alt=" a frontend image" src="images/frontend-image.png" id="frontend-img">
                        <figcaption>
                            Front-end development
                        </figcaption>
                    </figure>
                    <p>Build responsive websites to achieve your business goals.</p>
                </article>
                <article id="backend-wrapper" class="col-sm">
                    <h3 class="hide">backend service </h3>
                    <figure>
                        <img alt=" a backend image" src="images/backend-image.png" id="backend-img">
                        <figcaption>
                            Back-end development
                        </figcaption>
                    </figure>
                    <p>Make your website fast and easy to manage.</p>
                </article>
                <article id="seo-wrapper" class="col-sm">
                    <h3 class="hide">Seo and accessibility service </h3>
                    <figure>
                        <img alt=" a seo and accessibility image" src="images/seo-accessibility-image.png" id="seo-img">
                        <figcaption>
                            Seo &amp; accessibility
                        </figcaption>
                    </figure>
                    <p>Make your website easy to find and reach the largest audience possible.</p>
                </article>
                </div>
            </section>

            <section id="skills" class="main-section">
              <div class="row">
                <h2 class="col-sm-12 heading">skills</h2>
              </div>
              <div class="row">
                <section class="col-sm">
                  <h3>Programming languages:</h3>
                  <ul>
                    <li>PHP</li>
                    <li>Java</li>
                    <li>JavaScript</li>
                    <li>C#</li>
                    <li>Python</li>
                  </ul>

                </section>
                <section class="col-sm">
                  <h3>Technologies and Tools:</h3>
                  <ul>
                    <li>Git, Composer</li>
                    <li>CSS3, SCSS, SASS</li>
                    <li>HTML5, XML, JSON, XSLT, XPATH</li>
                    <li>JQuery, Bootstrap</li>
                    <li>Node.JS, Angular, .NET</li>
                    <li>RESTful web services</li>
                    <li>SQL, MYSQL databases</li>
                  </ul>

                </section>
              </div>
            </section>

            <section id="my-work" class="main-section">
              <div class="row">
                <h2 class="col-sm-12 heading">take a look at some of my work</h2>
              </div>
              <div id="myWorkCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#myWorkCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#myWorkCaptions" data-slide-to="1"></li>
                  <li data-target="#myWorkCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images/flights_search_form.png" class="d-block w-100" alt="flights search engine caption">
                    <div class="carousel-caption d-none d-md-block">
                      <div class="myWorkCaptions-title">Flights search engine</div>
                      <p class="myWorkCaptions-link">
                        <a href="#"> Try it !</a>
                      </p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="images/list-tickets.png" class="d-block w-100" alt="list of tickets caption">
                    <div class="carousel-caption d-none d-md-block">
                      <div class="myWorkCaptions-title">Basic ticket system</div>
                      <p class="myWorkCaptions-link">
                        <a href="#"> Try it !</a>
                      </p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="images/itemList.jpg" class="d-block w-100" alt="list of items caption">
                    <div class="carousel-caption d-none d-md-block">
                      <div class="myWorkCaptions-title">Basic online sneakers store</div>
                      <p class="myWorkCaptions-link">
                        <a href="#">See details</a>
                      </p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#myWorkCaptions" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myWorkCaptions" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </section>
        </main>
 <!--
        <div id="layout-2columns" class="page-wrapper">
            <article id="social-media-wrapper">
                <h2 id="social-media">Social media</h2>
                <ul id="list-social-media">
                    <li> <a href="#"><i id="github-icon" class="fab fa-github"></i><span id="github">github</span></a>
                        <p>Follow for open-source projects.</p>
                    </li>
                    <li> <a href="#"><i id="linkedln-icon" class="fab fa-linkedin-in"></i><span id="linkedln">linkedln</span></a>
                        <p>Let's connect on Linkedln.</p>
                    </li>
                </ul>
            </article>
            <form id="form-enquiry">
                <h2 id="enquiry">enquiry</h2>
                <div id="form-content-wrapper">
                    <div>
                    <label for="f_name" >name:</label>
                    <input type="text" name="f_name" id="f_name">
                </div>
                <div>
                    <label for="f_email" >Email:</label>
                    <input type="email" name="f_email" id="f_email" >
                </div>
                <div id="div-message">
                    <label for="f_message" class="hide">message:</label>
                    <textarea placeholder="leave your message here." id="f_message" name="f_message" maxlength="1000" cols="25" rows="6"></textarea>
                </div>

                <div id="div-submit">
                    <input type="submit" value="send">
                </div>
                </div>
            </form>
        </div>
      -->
        <?php include_once "views/footer.php" ?>
        <script type="text/javascript" src="js/jquery.min.js">
        </script>
        <script type="text/javascript" src="js/bootstrap/js/bootstrap.min.js">
        </script>
    </body>
</html>
