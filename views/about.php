<?php
use App\Database\{Database, EducationPDO, PageContentPDO, ExperiencePDO};
require_once 'vendor/autoload.php';


$pagecontentpdo = new PageContentPDO();
$educationpdo = new EducationPDO();
$experiencepdo = new ExperiencePDO();
//get education information
$educInfos = $educationpdo->getEducationInfos();
//get experience information
$experiences = $experiencepdo->getExperienceInfos();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <title>Franck Cheuzem about</title>
  <meta name="description" content="franck cheuzem's about"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap css -->
  <link rel="stylesheet"  type="text/css" href="css/bootstrap/css/bootstrap.min.css">

  <!-- our stylesheet -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
  <link rel="stylesheet" type="text/css" href="css/general.css">
  <link rel="stylesheet" type="text/css" href="css/about.css">
  <script src="https://kit.fontawesome.com/c03ea9a48c.js" crossorigin="anonymous"></script>
</head>
<body class="container-fluid ">
  <?php include_once "views/header.php"; ?>
  <main>
    <h1>About me</h1>
    <section id="bio" class="main-section">
      <div class="row">
        <div class="col-lg-4">
          <h2 class="heading">Bio</h2>
        </div>
        <div class="col-lg-8">
          <p class="bio">
            <?php
            $content = $pagecontentpdo->getContent("bio");
            if(is_object($content)){
              echo $content->content;
            }
            ?>
          </p>
        </div>

      </div>
    </section>
    <section id="education" class="main-section">
      <div class="row">
        <div class="col-lg-4">
          <h2 class="heading">education</h2>
        </div>

        <div class="col-lg-8" >

          <?php
          for ($i=0; $i < count($educInfos) ; $i++) {
            ?>
            <section class="program">
              <div class="row">
                <h3 class="col-sm-12">
                  <?= $educInfos[$i]->name .', ' . $educInfos[$i]->location ?>
                </h3>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <ul>
                    <li>
                      <span class="diploma"><?= $educInfos[$i]->diploma .',' ?></span>
                      <span class="program-name"><?= $educInfos[$i]->program_name .':' ?></span>
                      <span><?= $educInfos[$i]->start_date . ' - ' . $educInfos[$i]->end_date ?></span>
                    </li>
                    <li>Key courses: <?= $educInfos[$i]->key_courses ?></li>
                    <?php if (isset($educInfos[$i]->dissertation) && $educInfos[$i]->dissertation !== null): ?>
                      <li> <span class="dissertation"> Dissertation Topic: </span> <?= $educInfos[$i]->dissertation ?></li>
                    <?php endif; ?>
                  </ul>
                </div>
              </div>
            </section>
            <?php
          }
          ?>
        </div>
      </div>
    </section>

    <section id="experience" class="main-section">
      <div class="row">
        <div class="col-lg-4">
          <h2 class="heading">experience</h2>
        </div>
        <div class="col-lg-8">
          <?php
          for ($i=0; $i < count($experiences); $i++) {
          ?>
          <section class="experience">
            <div class="row">
              <h3 class="col-sm-12 experience-position"><?= $experiences[$i]->position .':' ?>
                <span class="experience-period"> <?= $educInfos[$i]->start_date.' - '. $educInfos[$i]->end_date ?></span> </h3>
              </div>
              <div class="row">
                <div class="col-sm-12 experience-company">
                  <a href="<?= $experiences[$i]->company_link ?>" target="_blank">
                    <?= $experiences[$i]->company_name ?></a> -
                    <?= $experiences[$i]->company_location ?>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <ul>
                    <?php
                    // display tasks
                    $tasks = $experiencepdo->getExperienceTasks($experiences[$i]->id);
                    for ($j=0; $j < count($tasks); $j++) {
                    ?>
                    <li><?= $tasks[$j]->task ?></li>
                    <?php
                    }
                     ?>
                  </ul>
                </div>
              </div>
            </section>

          <?php
          }
          ?>


          </div>
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
