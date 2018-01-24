<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="assets/css/style.css">
    <meta charset="utf-8">
    <title>MadLibs</title>
  </head>
  <body>
    <div id="background">
      <h1 class="title">MadLibs</h1>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="onkunde.php">Onkunde</a></li>
        </ul>
      </nav>
      <h2>Onkunde</h2>
      <p>Er zijn veel mensen die niet kunnen <?php echo $_POST['answerOne'] ?>. Neem nou <?php echo $_POST['answerTwo'] ?>. Zelfs met de hulp van een <?php echo $_POST['answerFour'] ?> of zelfs <?php echo $_POST['answerThree'] ?> kan <?php echo $_POST['answerTwo'] ?> niet tekenen. Dat heeft niet te maken met een gebrek aan <?php echo $_POST['answerFive'] ?>, maar met een teveel aan <?php echo $_POST['answerSix'] ?>. Te veel <?php echo $_POST['answerSix'] ?> leidt tot <?php echo $_POST['answerSeven'] ?> en dat is niet goed als je wilt <?php echo $_POST['answerOne'] ?>. Helaas voor <?php echo $_POST['answerTwo'] ?></p><br>
    </div>
    <style media="screen">
      p {
        padding: 0px 10px 0px 10px;
      }
    </style>
  </body>
</html>
