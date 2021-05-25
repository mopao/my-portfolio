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
        <link rel="stylesheet" type="text/css" href="css/about.css">
        <script src="https://kit.fontawesome.com/c03ea9a48c.js" crossorigin="anonymous"></script>
    </head>
    <body class="container-fluid ">
      <?php include_once "views/header.php"; ?>
      <main>
        <h1>About me</h1>
        <section id="bio" class="main-section">
          <div class="row">
            <div class="col-sm-3">
              <h2 class="heading">Bio</h2>
            </div>
            <div class="col-sm-9">
              <p>
                I am passionate about learning backend and frontend development skills.
                Devoting myself into projects involving different kinds of skills is actually what
                I enjoy the most. I have a background in computer science, especially in computer
                 programming. I have recently got into a web development program to expand my knowledge
                 of web programming. Sufficiently armed with knowledge, I am eager
                 to build you a website responding to your needs and exceeding your expectations.
              </p>
            </div>

          </div>
        </section>
        <section id="education" class="main-section">
          <div class="row">
            <div class="col-sm-3">
              <h2 class="heading">education</h2>
            </div>

            <div class="col-sm-9">
              <section class="program">
                <div class="row">
                    <h3 class="col-sm-12">Humber College, Canada</h3>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <ul>
                      <li>
                        <span>web development program: </span>
                        <span>Sept. 2020 - present</span>
                      </li>
                      <li>Key courses: ASP.NET, C#, HTML5, CSS3, JavaScript, PHP, SQL, MYSQL databases
                         Oriented Object Programming and Web Services.</li>
                    </ul>
                  </div>
                </div>

              </section>
              <section class="program">
                <div class="row">
                    <h3 class="col-sm-12">University of MONS, Belgium</h3>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <ul>
                      <li>
                        <span>master's degree, Computer science: </span>
                        <span>oct. 2011 - Jun. 2016</span>
                      </li>
                      <li>Key courses: java, python, artificial intelligence,
                        software development life cycle, agile methods, mobile development (Android)</li>
                        <li>Dissertation Topic: Answering in a polynomial time to self-join-free
                          conjunctive queries on a database violating primary key constraints.</li>
                    </ul>
                  </div>
                </div>
              </section>
              <section class="program">
                <div class="row">
                    <h3 class="col-sm-12">University of Dschang, Cameroon</h3>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <ul>
                      <li>
                        <span>bachelor's degree, Computer science: </span>
                        <span>oct. 2008 - Jun. 2011</span>
                      </li>
                      <li>Key courses: c, c++, java, Oriented Object Programming, SQL, MYSQL databases</li>
                    </ul>
                  </div>
                </div>
              </section>

            </div>
          </div>

        </section>

        <section id="experience" class="main-section">
          <div class="row">
            <div class="col-sm-3">
              <h2 class="heading">experience</h2>
            </div>
            <div class="col-sm-9">

              <section class="experience">
                <div class="row">
                    <h3 class="col-sm-12 experience-position">Internship as Web Developer:
                    <span class="experience-period"> Sept. 2015 – Feb. 2016 </span> </h3>
                </div>
                <div class="row">
                    <div class="col-sm-12 experience-company"> <a href="https://qwerteach.com" target="_blank">QWERTEACH</a> Brussels, Belgium </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <ul>
                      <li>
                        Upgraded and provided support to fix issues related to existing website
                      </li>
                      <li>
                        Provided support to design, develop and implement new features on website,
                         as well as SQL databases related to them
                       </li>
                       <li>
                         Developed and worked from specifications under the supervision of a Senior Developer
                       </li>
                       <li>
                         Tested programs to ensure compliance with specifications
                       </li>
                       <li>
                         Participated in the development of the online payment feature using MANGOPAY solution
                       </li>
                    </ul>
                  </div>
                </div>
              </section>
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
