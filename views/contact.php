<?php
use App\Database\{Database, ContactPDO};
use App\ObjectManagers\MailManager;
require_once 'vendor/autoload.php';

$contactpdo = new ContactPDO();
//fetch my email
$contact = $contactpdo->getContact("email");
$myEmail = (is_object($contact))? $contact->value : "";

// fetch my github link
$contact = $contactpdo->getContact("github");
$myGithub = (is_object($contact))? $contact->value : "";

// fetch my linkedin link
$contact = $contactpdo->getContact("linkedin");
$myLinkedin = (is_object($contact))? $contact->value : "";

$name="";
$err_name="";
$email="";
$err_email="";
$message="";
$err_message="";
$success_msg ="";

if (isset($_POST['send'])) {
  //retrieve user inputs
  $name = filter_input(INPUT_POST, 'f_name', FILTER_SANITIZE_SPECIAL_CHARS);
  $message = filter_input(INPUT_POST, 'f_message', FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, 'f_email', FILTER_VALIDATE_EMAIL);
  $is_inputs_valid = true;

  // inputs validation
  if ($name === "") {
    $is_inputs_valid = false;
    $err_name = "Please enter a name !";
  }
  if (!$email) {
    $is_inputs_valid = false;
    $err_email = "Please enter a valid email !";
  }
  if ($message == "") {
    $is_inputs_valid = false;
    $err_message = "Please enter a message !";
  }

  if ($is_inputs_valid) {
    $mailManager = new MailManager();
    $mailManager->sendContactMessage($message,$name, $email);
    $success_msg = "Your message has been successfully sent !";
    $name="";
    $message="";
    $email="";
  }


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <title>Franck Cheuzem - contact</title>
  <meta name="description" content="franck cheuzem's contact"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap css -->
  <link rel="stylesheet"  type="text/css" href="css/bootstrap/css/bootstrap.min.css">

  <!-- our stylesheet -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
  <link rel="stylesheet" type="text/css" href="css/general.css">
  <link rel="stylesheet" type="text/css" href="css/contact.css">
  <script src="https://kit.fontawesome.com/c03ea9a48c.js" crossorigin="anonymous"></script>
</head>
<body class="container-fluid ">
  <?php include_once "views/header.php"; ?>
  <main class="container">
    <h1>contact</h1>
    <p>For inquiries or to get a quote, please do not hesitate
      to contact me using any of the means below.</p>

      <ul>
        <li> <span class="contact">email:</span> <?= $myEmail ?> </li>
      </ul>
      <div class="row" id="layout-2columns">
        <article id="social-media-wrapper" class="col-lg">
          <h2 id="social-media">Social media</h2>
          <ul id="list-social-media">
            <li> <a href="<?= $myGithub ?>" target="_blank"><i id="github-icon" class="fab fa-github"></i><span id="github">github</span></a>
              <p>Follow for open-source projects.</p>
            </li>
            <li> <a href="<?= $myLinkedin ?>" target="_blank"><i id="linkedln-icon" class="fab fa-linkedin-in"></i><span id="linkedln">linkedln</span></a>
              <p>Let's connect on Linkedln.</p>
            </li>
          </ul>
        </article>
        <form id="form-enquiry" class="col-lg" method="post" action="#">
          <h2 id="enquiry">enquiry</h2>
          <p class="success-msg"> <?= $success_msg ?> </p>
          <div class="form-group">
            <div class="error-message">
              <?= $err_name ?>
            </div>
            <label for="f_name" >name<span class="required">*</span> </label>
            <input type="text" name="f_name" id="f_name" value="<?= $name ?>" class="form-control">
          </div>
          <div class="form-group">
            <div class="error-message">
              <?= $err_email ?>
            </div>
            <label for="f_email" >Email<span class="required">*</span></label>
            <input type="email" name="f_email" id="f_email" value="<?= $email ?>" class="form-control" >
          </div>
          <div id="div-message" class="form-group">
            <div class="error-message">
              <?= $err_message ?>
            </div>
            <label for="f_message">message<span class="required">*</span></label>
            <textarea placeholder="leave your message here." id="f_message" name="f_message"  rows="6" class="form-control"><?= $message ?></textarea>
          </div>

          <div id="div-submit">
            <input type="submit" value="send" name="send">
          </div>

        </form>

      </div>
    </main>
    <?php include_once "views/footer.php" ?>
    <script type="text/javascript" src="js/jquery.min.js">
    </script>
    <script type="text/javascript" src="js/bootstrap/js/bootstrap.min.js">
    </script>
  </body>
  </html>
