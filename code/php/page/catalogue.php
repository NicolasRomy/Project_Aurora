
<?php include_once '../action/config.php'; ?>
<!DOCTYPE html>
<head>
<!DOCTYPE html>
  <?php include '../content/head.php'; ?>
  <title></title>
</head>
<body>
  <header>

    <?php include '../content/navbar.php'; ?>
    <br><br>
  </header>
     <meta charset="utf-8">
     <meta name="description" content="A page's description, usually one or two sentences."/>
     <title>Contact</title>
     <link rel="stylesheet" href="../../css/catalogue.css">
     </head>
     <?php
     $sql= "SELECT * FROM jeux ";
            $pre = $pdo->prepare($sql);
            $pre->execute();
            $jeux = $pre->fetchAll(PDO::FETCH_ASSOC); 
      $sql= "SELECT * FROM images";
            $pre = $pdo->prepare($sql);
            $pre->execute();
            $image = $pre->fetchAll(PDO::FETCH_ASSOC); ?>
<html>

<body>

<div class = "col s12 m7">
 <h1> nos coups de coeur <h1>
</div>

<h2>Filter DIV Elements</h2>
<div id="myBtnContainer">
  <button class="waves-effect waves-light btn-small" onclick="filterSelection2('all')"> Show all</button>
  <button class="waves-effect waves-light btn-small" onclick="filterSelection2('3')"> pegi 3</button>
  <button class="waves-effect waves-light btn-small" onclick="filterSelection2('7')"> pegi 7</button>
  <button class="waves-effect waves-light btn-small" onclick="filterSelection2('12')"> pegi 12</button>
  <button class="waves-effect waves-light btn-small" onclick="filterSelection2('16')"> pegi 16</button>
  <button class="waves-effect waves-light btn-small" onclick="filterSelection2('18')"> pegi 18</button>
</div>
<div id="myBtnContainer">
  <button class="waves-effect waves-light btn-small" onclick="filterSelection2('all')"> Show all</button>
  <button class="waves-effect waves-light btn-small" onclick="filterSelection2('0')"> coeur</button>
  <button class="waves-effect waves-light btn-small" onclick="filterSelection2('1')"> pascoeur</button>


  <p>Click the "Try it" button to toggle between hiding and showing the DIV element:</p>

<button onclick="myFunction()">Try it</button>
<?php
  //loop to display title one by one and create unique link to articles
  foreach($jeux as $jeu){
    ?>
      <div style="display:flex;">
<<<<<<< HEAD
       <div id= "myDIV"><?php gameCard($pdo, $jeu, 0);?></div><?php } ?>
=======
       <div class= 'filterDiv <?php echo $jeu['PEGI']?>' class = 'filterDiv2 <?php echo $jeu['coeur']?>'><?php gameCard($pdo, $jeu, 0);?></div><?php } ?>
>>>>>>> c20b92d2f55721164531ab4480142bc00e883732
      </div>
<p><b>Note:</b> The element will not take up any space when the display property set to "none".</p>

<script>
filterrrr("all")
function filterrrr(c){
  x = document.getElementsByClassName("filterDiv");
  $('.filterDiv').hide();
  $('.'+c).show();}

filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}
filterSelection2("all")
function filterSelection2(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv2");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

      

<script>

function filterSelection2(c){
  $x = document.getElementsByClassName("filterDiv");
  $i = 0
  while (i < x.lengh)
  { 
    $(x[i]).show();
    $i++;
  }
  $('.filterDiv'+c).show();}

$(document).ready(function(){

$('.sidenav').sidenav();
$('select').formSelect();
});

</script>

</body>
</html>
