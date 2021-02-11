<DOCTYPE=html>
<head>
  <title>learning cube</title>
  <?php
  //require 'php/db.php';
  ?>
  <?php
    $random_number = random_int(0,5);
    $side = array(
      "Was ist die Aufgabe der Netzhaut?",
      "Wie koennen optische Täuschungen entstehen?",
      "Sind farben real?",
      "Wie entseht unsere Farbwahrnehmung?",
      "Was sind Optische Täuschungen",
      "Wie könnte jemand eine Optische Täuschung initsiieren?"
    );
  ?>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital@1&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <div class="cube">
      <h1><?=$side[$random_number]?></h1>
    </div>
</body>
<style>
  * {
    font-family: 'Roboto Mono', monospace;
  }
  .cube {
    position: absolute;
    top: 40%;
    left: 20%
    width: 20em;
    height: 20em;
    border: solid 3px black;
    box-shadow: 0px 0px 34px -10px rgba(0,0,0,0.75);
}
.cube h1{
  text-align: center;
}
</style>
<!--
fonts

https://fonts.google.com/specimen/Roboto+Mono?preview.text_type=custom&sidebar.open=true&selection.family=Roboto+Mono:ital@1

bootstrap

https://getbootstrap.com

!-->
