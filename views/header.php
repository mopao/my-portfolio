<header>

    <nav class="navbar navbar-expand-sm navbar-light" id="menubar">
      <a class="navbar-brand" href="index.php">franck cheuzem </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link <?= ($_GET['page']==="home" || !isset($_GET['page']))? "active" : ""?>" href="index.php?page=home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= ($_GET['page']==="about")? "active" : ""?>" href="index.php?page=about">about</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= ($_GET['page']==="resume")? "active" : ""?>" href="index.php?page=resume">Resume</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= ($_GET['page']==="portfolio")? "active" : ""?>" href="index.php?page=portfolio">portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= ($_GET['page']==="portfolio")? "active" : ""?>" href="index.php?page=contact">contact</a>
          </li>
        </ul>
      </div>
</nav>
</header>
