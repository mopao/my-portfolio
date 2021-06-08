<?php
use App\Database\{Database, SkillPDO, PageContentPDO};
require_once 'vendor/autoload.php';

$skillpdo = new SkillPDO();
$pagecontentpdo = new PageContentPDO();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <title>Franck Cheuzem</title>
  <meta name="description" content="franck cheuzem's portfolio"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap css -->
  <link rel="stylesheet"  type="text/css" href="css/bootstrap/css/bootstrap.min.css">
  <!-- our stylesheet -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
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
        <img alt="franck cheuzem's picture" src="images/profile-image3.png">
      </div>
      <div id="banner-msg-wrapper" class="col-md-8">
        <h1><span id="profile-name">franck cheuzem </span>
          <span id="profile-profession">  web developer</span>
          <span id="profile-profession">  speak french - english</span></h1>
          <div id="banner-msg">
            <p><em>"
              <?php
              $content = $pagecontentpdo->getContent("greeting message");
              if(is_object($content)){
                echo $content->content;
              }
              ?>
              " </em></p>
              <a href="index.php?page=portfolio" id="my-project-link">my projects</a>
            </div>

          </div>
        </div>

        <section id="layout-3columns" class="main-section">
          <h2 class="heading">Why entrust me your website?</h2>
          <div id="columns3-wrapper" class="row">
            <article id="frontend-wrapper" class="col-lg">
              <h3 class="hide">frontend service </h3>
              <figure>
                <img alt=" a frontend image" src="images/frontend-image.png" id="frontend-img">
                <figcaption>
                  Front-end development
                </figcaption>
              </figure>
              <p>Build responsive websites to achieve your business goals.</p>
            </article>
            <article id="backend-wrapper" class="col-lg">
              <h3 class="hide">backend service </h3>
              <figure>
                <img alt=" a backend image" src="images/backend-image.png" id="backend-img">
                <figcaption>
                  Back-end development
                </figcaption>
              </figure>
              <p>Make your website fast and easy to manage.</p>
            </article>
            <article id="seo-wrapper" class="col-lg">
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
          <div id="skills-details">
            <section>
              <h3>Programming languages:</h3>
              <ul>
                <?php
                $languages = $skillpdo->getSkills("programming language");
                for ($i=0; $i < count($languages) ; $i++) {
                  echo "<li>". $languages[$i]->skill . "</li>";
                }
                ?>
              </ul>
            </section>
            <section>
              <h3>Technologies and Tools:</h3>
              <ul>
                <?php
                $techs_tools = $skillpdo->getSkills("technologies and tools");
                for ($i=0; $i < count($techs_tools) ; $i++) {
                  echo "<li>". $techs_tools[$i]->skill . "</li>";
                }
                ?>
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
                <a href="index.php?page=portfolio#project-flightsSearch-engine">
                  <img src="images/flights_search_form.png" class="d-block w-100" alt="flights search engine caption">
                </a>
                <div class="carousel-caption  d-none d-md-block">
                  <div class="myWorkCaptions-title">Flights search engine</div>
                  <div class="myWorkCaptions-link">
                    <a href="index.php?page=portfolio#project-flightsSearch-engine"> see details</a>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <a href="index.php?page=portfolio#project-support-ticket">
                  <img src="images/list-tickets.png" class="d-block w-100" alt="list of tickets caption">
                </a>
                <div class="carousel-caption d-none d-sm-block">
                  <div class="myWorkCaptions-title">Basic ticket system</div>
                  <div class="myWorkCaptions-link">
                    <a href="index.php?page=portfolio#project-support-ticket"> see details</a>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <a href="index.php?page=portfolio#project-sneaker-shop">
                  <img src="images/itemList.jpg" class="d-block w-100" alt="list of items caption">
                </a>
                <div class="carousel-caption d-none d-sm-block">
                  <div class="myWorkCaptions-title">Basic online sneakers store</div>
                  <div class="myWorkCaptions-link">
                    <a href="index.php?page=portfolio#project-sneaker-shop">See details</a>
                  </div>
                </div>
              </div>
            </div>
            <!--<a class="carousel-control-prev" href="#myWorkCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myWorkCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      -->
    </div>
  </section>
</main>
<?php include_once "views/footer.php" ?>
<script type="text/javascript" src="js/jquery.min.js">
</script>
<script type="text/javascript" src="js/bootstrap/js/bootstrap.min.js">
</script>
</body>
</html>
