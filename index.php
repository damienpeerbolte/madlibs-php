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
      <form class="questionForm" action="indexresult.php" method="post">
        <p>Welk dier zou je <strong>nooit</strong> als huisdier willen hebben?</p><input type="text" name="answerOne" value=""><br>
        <p>Wie is de belangrijkste persoon in je leven?</p><input type="text" name="answerTwo" value=""><br>
        <p>In welk land zou je graag willen wonen?</p><input type="text" name="answerThree" value=""><br>
        <p>Wat doe je als je je verveelt?</p><input type="text" name="answerFour" value=""><br>
        <p>Met welk speelgoed speelde je als kind het meest?</p><input type="text" name="answerFive" value=""><br>
        <p>Bij welke docent spijbel je het liefst?</p><input type="text" name="answerSix" value=""><br>
        <p>Als je €100.000,- had, wat zou je dan kopen?</p><input type="text" name="answerSeven" value=""><br>
        <p>Wat is je favoriete bezigheid?</p><input type="text" name="answerEight" value=""><br>
        <input class="formSubmit" type="submit" name="submit" value="Submit">
      </form>
    </div>
  </body>
</html>
