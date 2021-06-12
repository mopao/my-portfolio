<?php
use App\Database\{Database, ProjectPDO};
require_once 'vendor/autoload.php';

//number of projects per page
$projects_per_page = 5;
//default page number
$page_number = 1;
$project_pdo = new ProjectPDO();
//fetch projects
$total_projects = $project_pdo->getProjects();
//number of projects
$numb_of_projects = count($total_projects);
//number of pages
$numb_pages = ceil($numb_of_projects/$projects_per_page);
if (isset($_GET['pagenum'])) {
  //retrieve the page number requested
  $page_number = abs(intval($_GET['pagenum']));
}

$start_index = ($page_number - 1) * $projects_per_page;
//get projects to print
$projects = array_slice($total_projects,$start_index,$projects_per_page);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <title>Franck Cheuzem - portfolio</title>
  <meta name="description" content="franck cheuzem's portfolio"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap css -->
  <link rel="stylesheet"  type="text/css" href="css/bootstrap/css/bootstrap.min.css">

  <!-- our stylesheet -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
  <link rel="stylesheet" type="text/css" href="css/general.css">
  <link rel="stylesheet" type="text/css" href="css/portfolio.css">
  <script src="https://kit.fontawesome.com/c03ea9a48c.js" crossorigin="anonymous"></script>
</head>
<body class="container-fluid ">
  <?php include_once "views/header.php"; ?>
  <main>
    <h1>portfolio</h1>
    <?php
    //display each project
    if(count($projects) > 0){
      for ($i=0; $i < count($projects); $i++) {
        ?>
        <section class="project" id="<?= implode("-",explode(" ",strtolower($projects[$i]->name)))?>">
          <h2 class="heading"><?= $projects[$i]->name ?></h2>
          <div class="url-wrapper">
            <span> <a href="<?= ($projects[$i]->live_link !== null)? $projects[$i]->live_link : "" ?>" target="_blank">Live</a> </span>
            | <span> <a href="<?= $projects[$i]->github_link ?>" target="_blank"><i class="fab fa-github" id="f_github"></i></a> </span>
          </div>
          <div class="project-wrapper">
            <div class="project-img-wrapper">
              <?php if ($projects[$i]->result_type === "image"): ?>
                <img src="<?= "images/". $projects[$i]->result ?>"  alt="<?= strtolower($projects[$i]->name) . "caption"?>">
              <?php else: ?>
                <iframe src="<?= $projects[$i]->result ?>" allow="fullscreen"></iframe>
              <?php endif; ?>
            </div>
            <div class="project-details">
              <section class="description">
                <h3>brief description</h3>
                <p>
                  <?= $projects[$i]->description ?>
                </p>
              </section>
              <?php
              //display thoughts process if exists
              $process = $project_pdo->getProjectThoughtsProcess($projects[$i]->id);
              if(count($process) > 0 ){
                ?>
                <section class="process">
                  <h3>Thoughts Process:</h3>
                  <ul>
                    <?php foreach ($process as $value): ?>
                      <li><?= $value->thought ?></li>
                    <?php endforeach; ?>
                  </ul>
                </section>
                <?php
              }
              ?>

              <?php
              //display challenges if exists
              $challenges = $project_pdo->getProjectChallenges($projects[$i]->id);
              if($challenges){
                ?>
                <section class="challenges">
                  <h3>challenges</h3>
                  <p>
                    <?= $challenges->challenge ?>
                  </p>
                </section>
                <?php
              }
              ?>
              <section class="project-tool">
                <h3>Technologies/languages/tools used</h3>
                <ul>
                  <li><span>Technologies/Tools: </span> <?= $projects[$i]->tech_tools ?></li>
                  <li><span>Languages:</span> <?= $projects[$i]->languages ?></li>

                </ul>
              </section>
            </div>
          </div>
        </section>

        <?php
      }
    }
    else {
      echo "Page not found !";
    }
    ?>
  </main>
  <?php if (count($projects) > 0): ?>


    <ul class="pagination justify-content-end">
      <?php if ($page_number > 1): ?>
        <li> <a href="index.php?page=portfolio&pagenum= <?= $page_number-1 ?>">Prev</a> |</li>
      <?php endif; ?>
      <li><?= $page_number . " of " . $numb_pages ?></li>
      <?php if ($page_number < $numb_pages): ?>
        <li>| <a href="index.php?page=portfolio&pagenum= <?= $page_number + 1 ?>"> Next </a> </li>
      <?php endif; ?>
    </ul>
  <?php endif; ?>
  <?php include_once "views/footer.php" ?>
  <script type="text/javascript" src="js/jquery.min.js">
  </script>
  <script type="text/javascript" src="js/bootstrap/js/bootstrap.min.js">
  </script>
</body>
</html>
