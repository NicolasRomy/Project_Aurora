
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
  <button class="waves-effect waves-light btn-small" onclick="filterrrr('all')"> Show all</button>
  <button class="waves-effect waves-light btn-small" onclick="filterrrr('3')"> pegi 3</button>
  <button class="waves-effect waves-light btn-small" onclick="filterrrr('7')"> pegi 7</button>
  <button class="waves-effect waves-light btn-small" onclick="filterrrr('12')"> pegi 12</button>
  <button class="waves-effect waves-light btn-small" onclick="filterrrr('16')"> pegi 16</button>
  <button class="waves-effect waves-light btn-small" onclick="filterrrr('18')"> pegi 18</button>
</div>

<div id="myBtnContainer">
  <button class="waves-effect waves-light btn-small" onclick="filter2('0')"> pas coeur</button>
  <button class="waves-effect waves-light btn-small" onclick="filter2('1')"> coeur</button>
</div>

<?php
  //loop to display title one by one and create unique link to articles
  foreach($jeux as $jeu){
    ?>
      <div style="display:flex;">
       <div class= 'filterDiv <?php echo $jeu['PEGI']?>'>
        <div class= 'filterDiv2 <?php echo $jeu['coeur']?>'>
          <div class= 'filterDiv2 <?php echo $jeu['coeur']?>'>
        <?php gameCard($pdo, $jeu, 0);?></div>
      </div><?php } ?>
      </div>
      </div>

<script>
filterrrr("all")
function filterrrr(c){
  if (c== "all") {
    $(".filterDiv").show();
    filter2('all');
} else {
  $(".filterDiv").hide();
  $("."+c).show();
}
  
}
function filter2(c){
  if (c== "all") {
    $(".filterDiv2").show();
    filterrrr("all");
} else {
  $(".filterDiv2").hide();
  $("."+c).show();
}
  
}
function filter3(c){
  if (c== "all") {
    $(".filterDiv2").show();
    filterrrr("all");
} else {
  $(".filterDiv2").hide();
  $("."+c).show();
}
  
}


</script>

</body>
</html>
