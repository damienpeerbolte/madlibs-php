<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MadLibs</title>
    <link rel="stylesheet" href="assets/css/style.css">
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
      <form class="questionForm" action="onkunderesult.php" method="post">
        <p>Wat zou je graag willen kunnen?</p><input type="text" name="answerOne" value=""><br>
        <p>Met welke persoon kun je goed opschieten?</p><input type="text" name="answerTwo" value=""><br>
        <p>Wat is je favoriete getal?</p><input type="text" name="answerThree" value=""><br>
        <p>Wat heb je altijd bij je als je op vakantie gaat?</p><input type="text" name="answerFour" value=""><br>
        <p>Wat is je beste persoonlijke eigenschap?</p><input type="text" name="answerFive" value=""><br>
        <p>Wat is je slechtste persoonlijke eigenschap?</p><input type="text" name="answerSix" value=""><br>
        <p>Wat is het ergste wat je kan overkomen?</p><input type="text" name="answerSeven" value=""><br>
        <input class="formSubmit" type="submit" name="submit" value="Submit">
      </form>
    </div>
  </body>
</html>
