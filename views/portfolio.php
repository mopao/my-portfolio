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

    <section class="project" id="project-support-ticket">
      <h2 class="heading">basic ticket system</h2>
      <div class="url-wrapper">
         <span> <a href="https://xml-ticket-system.franckcheuzem.ca" target="_blank">Live</a> </span>
        | <span> <a href="https://github.com/mopao/Ticket-System" target="_blank"><i class="fab fa-github" id="f_github"></i></a> </span>
      </div>
      <div class="project-wrapper">
        <div class="project-img-wrapper">
          <img src="images/list-tickets.png"  alt="list of tickets caption">
        </div>
        <div class="project-details">
          <section class="description">
            <h3>brief description</h3>
            <p>
              This support ticket application allows users after logging in, to request support by
              submitting a ticket through a form.  After logging in, Support staff can see all tickets while
              users can only see tickets he or she owns. Support staff and users can add messages for each
              ticket as the issue identified for the ticket is being resolved. Support staff member can submit
              a status change about a ticket.
              The support ticket application uses XML to store data.
            </p>
          </section>
          <section class="project-tool">
            <h3>Technologies/languages/tools used</h3>
            <ul>
              <li><span>Technologies/Tools: </span> SimpleXML, XML DOM, Ajax, Bootstrap, composer, XPATH</li>
              <li><span>Languages:</span> PHP, JavaScript, HTML, CSS</li>
              <li><span>Data storage:</span> XML</li>
            </ul>
          </section>
        </div>
      </div>
    </section>

    <section class="project" id="project-flightsSearch-engine">
      <h2 class="heading">Flights Search Engine</h2>
      <div class="url-wrapper">
      </span> <span> <a href="https://mopaoflightssearch.franckcheuzem.ca" target="_blank">Live</a> </span>
        | <span> <a href="https://github.com/mopao/Mopao-FlightsSearch" target="_blank"><i class="fab fa-github" id="f_github"></i></a> </span>
      </div>
      <div class="project-wrapper">
        <div class="project-img-wrapper">
          <img src="images/flights_search_form.png" alt="flights search engine caption">
        </div>
        <div class="project-details">
          <section class="description">
            <h3>brief description</h3>
            <p>
              This flights search engine enables users to find the cheapest flights to or inside the United States,
              Spain, the United Kingdom, Germany and India on a given date. It also allows users
              to visualize the itinerary of a flight on google map.
            </p>
          </section>
          <section class="project-tool">
            <h3>Technologies/languages/tools used</h3>
            <ul>
              <li> <span>Technologies/Tools: </span> Amadeus APIs (Airline Code Lookup, Airport & City Search, and Flight Offers search),
                JQuery Autocomplete Widget, Google Map API, Ajax, Bootstrap, JQuery, flatpickr</li>
                <li><span>Languages:</span> HTML, CSS, PHP, Javascript</li>
              </ul>
            </section>
          </div>
        </div>
      </section>

      <section class="project" id="project-sneaker-shop">
        <h2 class="heading">Sneaker World online Shop</h2>
        <div class="url-wrapper">
          <span> Not hosted yet </span>
          | <span> <a href="https://github.com/mopao/passion-project" target="_blank"><i class="fab fa-github" id="f_github"></i></a> </span>
        </div>
        <div class="project-wrapper">
          <div class="project-img-wrapper iframe-wrapper" >
            <iframe src="https://www.youtube.com/embed/mm1lxMi_ESA" allow="fullscreen"></iframe>
          </div>
          <div class="project-details">
            <section class="description">
              <h3>brief description</h3>
              <p>
                This project is a basic application allowing users to showcase items, especially sneakers.
                Users can manage sneaker brands, sneakers and stocks of sneakers. This
                means users can register, update, view details and delete sneaker brands,
                sneakers, as well as their stocks.
              </p>
            </section>
            <section class="project-tool">
              <h3>Technologies/languages/tools used</h3>
              <ul>
                <li><span>Technologies/Tools:</span> .NET, Bootstrap, Entity framework</li>
                <li><span>Languages: </span> HTML, CSS, C#, Javascript</li>
              </ul>
            </section>
          </div>
        </div>
      </section>

      <section class="project" id="project-appointment-booking">
        <h2 class="heading">Hospital Appointment Booking</h2>
        <div class="url-wrapper">
          <span> Not hosted yet </span>
          | <span> <a href="https://github.com/Journeygault/Timmins_V3" target="_blank"><i class="fab fa-github" id="f_github"></i></a> </span>
        </div>
        <div class="project-wrapper">
          <div class="project-img-wrapper">
            <img src="images/apptlist.png"  alt="appointment booking form caption">
          </div>
          <div class="project-details">
            <section class="description">
              <h3>brief description</h3>
              <p>
                This project is a simple application allowing Patients to book an appointment with Physicians
                and Vice Versa. In fact, to book an appointment, a patient sends an appointment request to
                a physician, and the physician can approve or reject it. A patient can cancel or modified
                his or her appointment request if a decision has not been made by the physician yet.
                In addition to this, patients and physicians can manage their appointments, which means
                they can create, update, view details and delete their appointments. So, you need to be
                registered as a physician or a patient to be able to use all the functionalities of the
                application.
              </p>
            </section>
            <section class="project-tool">
              <h3>Technologies/languages/tools used</h3>
              <ul>
                <li><span>Technologies/Tools:</span> .NET, Bootstrap, Entity framework, flatpickr, authentication,
                  authorization, JQuery</li>
                  <li><span>Languages:</span> HTML, CSS, C#, Javascript</li>
                </ul>
              </section>
            </div>
          </div>
        </section>

        <section class="project" id="project-angular-traktapi">
          <h2 class="heading">trending movies search engine </h2>
          <div class="url-wrapper">
          <span> <a href="https://angular-trakt-api.franckcheuzem.ca/movies-search" target="_blank">Live</a> </span>
          | <span> <a href="https://github.com/mopao/angular-trakt-api" target="_blank"><i class="fab fa-github" id="f_github"></i></a> </span>
          </div>
          <div class="project-wrapper">
            <div class="project-img-wrapper">
              <img src="images/traktapi-form-search.png"  alt="movies search form caption">
            </div>
            <div class="project-details">
              <section class="description">
                <h3>brief description</h3>
                <p>
                  This project is a basic application using trakt ApI to display the top 10 trending movies
                  matching the user search. Users can specify their search through a form by entering the genre,
                   the year, the language or the country of movies they are looking for.
                   After submitting the form, a list of the top 10 trending movies matching their specifications
                   is displayed. Each movie of the list is represented by its title, and clicking on a movie's title
                    displays its details as well as its trailer.
                </p>
              </section>
              <section class="project-tool">
                <h3>Technologies/languages/tools used</h3>
                <ul>
                  <li><span>Technologies/Tools:</span> Angular, Bootstrap and trakt API</li>
                    <li><span>Languages:</span> HTML, CSS, JavaScript</li>
                  </ul>
                </section>
              </div>
            </div>
          </section>

          <section class="project" id="project-angular-traktapi">
            <h2 class="heading">Pac-Man </h2>
            <div class="url-wrapper">
             <span> <a href="https://github.com/mopao/pac-man-project" target="_blank"><i class="fab fa-github" id="f_github"></i></a> </span>
            </div>
            <div class="project-wrapper">
              <div class="project-img-wrapper">
                <img src="images/pacman.png"  alt="movies search form caption">
              </div>
              <div class="project-details">
                <section class="description">
                  <h3>brief description</h3>
                  <p>
                    Pac-Man is a video game; the player controls the eponymous character through an enclosed maze.
                    The objective of the game is to eat all of the dots placed in the maze while avoiding
                     the red ghosts that pursue him. When Pac-Man eats all of the dots, the player advances to the
                     next level. If Pac-Man makes contact with a ghost, he will lose a life; the game ends when all
                     lives are lost. Red ghosts are directed by  artificial intelligence (A.I.).

                  </p>
                </section>
                <section class="project-tool">
                  <h3>Technologies/languages/tools used</h3>
                  <ul>
                    <li><span>Technologies/Tools:</span> artificial intelligence, design patterns</li>
                      <li><span>Languages:</span> Java</li>
                    </ul>
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
