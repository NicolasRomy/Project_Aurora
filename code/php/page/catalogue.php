<?php include_once '../action/config.php'; ?>
<!DOCTYPE html>
<head>
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

<h2>Filter DIV Elements</h2>

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('3')"> pegi 3</button>
  <button class="btn" onclick="filterSelection('7')"> pegi 7</button>
  <button class="btn" onclick="filterSelection('12')"> pegi 12</button>
  <button class="btn" onclick="filterSelection('16')"> pegi 16</button>
  <button class="btn" onclick="filterSelection('18')"> pegi 18</button>
</div>

<div class="container">
<?php
  //loop to display title one by one and create unique link to articles
  foreach($jeux as $jeu){
    ?>
       <div class= 'filterDiv <?php echo $jeu['PEGI']?>'><?php echo $jeu['title']?><br><?php echo $jeu['PEGI']?></div><?php } ?>
      
  
</div>

<script>

function filterrrr(c){
  $('.filterDiv').hide();
  $('.'+c).show();
}
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

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>
