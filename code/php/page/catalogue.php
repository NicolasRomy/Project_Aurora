
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
            $image = $pre->fetchAll(PDO::FETCH_ASSOC); 
      $sql= "SELECT * FROM jeux_plateforme";
            $pre = $pdo->prepare($sql);
            $pre->execute();
            $plateformes = $pre->fetchAll(PDO::FETCH_ASSOC);
     ?>
<html>

<body>

<div class = "col s12 m7">
 <h1> nos coups de coeur <h1>
</div>

<h2>Filter DIV Elements</h2>
<div id="myBtnContainer">
  <button class="waves-effect waves-light btn-small" onclick="filter('all')"> Show all</button>
  <button class="waves-effect waves-light btn-small" onclick="filter('3')"> pegi 3</button>
  <button class="waves-effect waves-light btn-small" onclick="filter('7')"> pegi 7</button>
  <button class="waves-effect waves-light btn-small" onclick="filter('12')"> pegi 12</button>
  <button class="waves-effect waves-light btn-small" onclick="filter('16')"> pegi 16</button>
  <button class="waves-effect waves-light btn-small" onclick="filter('18')"> pegi 18</button>
</div>

<div id="myBtnContainer">
  <button class="waves-effect waves-light btn-small" onclick="filter2('0')"> pas coeur</button>
  <button class="waves-effect waves-light btn-small" onclick="filter2('1')"> coeur</button>
</div>
<div id="myBtnContainer">
    <button class="waves-effect waves-light btn-small" onclick="filter3('1')"> 0-10€ </button>
    <button class="waves-effect waves-light btn-small" onclick="filter3('2')"> 10-25€</button>
    <button class="waves-effect waves-light btn-small" onclick="filter3('3')"> 25-50€</button>
    <button class="waves-effect waves-light btn-small" onclick="filter3('4')"> 50+€</button>
</div>
<div id="myBtnContainer">
    <button class="waves-effect waves-light btn-small" onclick="filter4('1')"> PC </button>
    <button class="waves-effect waves-light btn-small" onclick="filter5('1')"> XBOX</button>
    <button class="waves-effect waves-light btn-small" onclick="filter6('1')"> PS4 </button>
    <button class="waves-effect waves-light btn-small" onclick="filter7('1')"> SW</button>
    <button class="waves-effect waves-light btn-small" onclick="filter8('1')"> PS5</button>
    <button class="waves-effect waves-light btn-small" onclick="filter9('1')"> WII U</button>
    <button class="waves-effect waves-light btn-small" onclick="filter10('1')"> MAC </button>
    <button class="waves-effect waves-light btn-small" onclick="filter11('1')"> Linux</button>
</div>
<?php
  //loop to display title one by one and create unique link to articles
  foreach($jeux as $jeu){
    ?>
    <?php
        $PC = 0;$XB = 0; $PS4 = 0;$SW = 0; $PS5 = 0;$WII_U = 0;$MAC = 0; $Linux = 0;
        foreach($plateformes as $plateforme){
          if ($jeu['id'] == $plateforme['jeux']){
            if($plateforme['plateforme'] == 1)
              {
                $PC = 1;
              }
            elseif($plateforme['plateforme'] == 2)
              {
                $XB = 1;
              }
            elseif($plateforme['plateforme'] == 3)
              {
                $PS4 = 1;
              }
            elseif($plateforme['plateforme'] == 4)
              {
                $SW = 1;
              }
            elseif($plateforme['plateforme'] == 5)
              {
                $PS5 = 1;
              }
            elseif($plateforme['plateforme'] == 6)
              {
                $WII_U = 1;
              }
            elseif($plateforme['plateforme'] == 7)
              {
                $MAC = 1;
              }
            elseif($plateforme['plateforme'] == 8)
              {
                $Linux = 1;
              }
          }
        }
      ?>

      <?php $i = $jeu['prix'];  
            if( $i < 11){
              $i = 1;
            }
            elseif($i > 11 && $i <26){
              $i = 2;
            }
            elseif($i > 24 && $i <51){
              $i = 3;
            }
            else{
              $i = 4;
            }
      

              ?>
      <div style="display:flex;">
       <div class= 'filterDiv <?php echo $jeu['PEGI']?>'>
        <div class= 'filterDiv2 <?php echo $jeu['coeur']?>'>
          <div class= 'filterDiv3 <?php echo $i?>'>
            <div class= 'filterDiv4 <?php echo $PC?>'>
              <div class='filterDiv5 <?php echo $XB?>'>
                <div class= 'filterDiv6 <?php echo $PS4?>'>
                  <div class= 'filterDiv7 <?php echo $SW?>'>
                    <div class= 'filterDiv8 <?php echo $PS5?>'>
                      <div class= 'filterDiv9 <?php echo $WII_U?>'>
                        <div class= 'filterDiv10 <?php echo $MAC?>'>
                          <div class= 'filterDiv11 <?php echo $Linux?>'>

        <?php gameCard($pdo, $jeu, 0);?></div></div></div></div></div></div></div></div></div></div></div><?php } ?>
      </div>
      

<script>
filter("all")
function filter(c){
  if (c== "all") {
    $(".filterDiv").show();
    filter2('all');
    filter3('all');
    filter4('all');
    filter5('all');
    filter6('all');
    filter7('all');
    filter8('all');
    filter9('all');
    filter10('all');
    filter11('all');
} else {
  $(".filterDiv").hide();
  $("."+c).show();
}
  
}
function filter2(c){
  if (c== "all") {
    $(".filterDiv2").show();
} else {
  $(".filterDiv2").hide();
  $("."+c).show();
}
  
}
function filter3(c){
  if (c== "all") {
    $(".filterDiv3").show();
} else {
  $(".filterDiv3").hide();
  $("."+c).show();

}
}
function filter4(c){
  if (c== "all") {
    $(".filterDiv4").show();
} else {
  $(".filterDiv4").hide();
  $("."+c).show();

}
}
function filter5(c){
  if (c== "all") {
    $(".filterDiv5").show();
} else {
  $(".filterDiv5").hide();
  $("."+c).show();

}
}
function filter6(c){
  if (c== "all") {
    $(".filterDiv6").show();
} else {
  $(".filterDiv6").hide();
  $("."+c).show();

}
}
function filter7(c){
  if (c== "all") {
    $(".filterDiv7").show();
} else {
  $(".filterDiv7").hide();
  $("."+c).show();

}
}
function filter8(c){
  if (c== "all") {
    $(".filterDiv8").show();
} else {
  $(".filterDiv8").hide();
  $("."+c).show();

}
}
function filter9(c){
  if (c== "all") {
    $(".filterDiv9").show();
} else {
  $(".filterDiv9").hide();
  $("."+c).show();

}
}
function filter10(c){
  if (c== "all") {
    $(".filterDiv10").show();
} else {
  $(".filterDiv10").hide();
  $("."+c).show();

}
}
function filter11(c){
  if (c== "all") {
    $(".filterDiv11").show();
} else {
  $(".filterDiv11").hide();
  $("."+c).show();

}
}



</script>

</body>
</html>
