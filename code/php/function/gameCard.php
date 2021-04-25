<?php function gameCard($pdo, $jeu, $option){ // passer en function dans requete sql !!!
  $plateforms = recupPlatForGame($pdo, $jeu);
  if ($option == 1){
    $class = "offset-s1 offset-m1 offset-l1 offset-xl1";
  }
  else{
    $class = "";
  }
  ?>
  
  <div class="col s4 m4 l3 xl2 <?php $class ?>" >
  <form action="../page/detaille_jeux.php"  method="post">

<<<<<<< HEAD
    <button type="submit" name="id" value='<?php echo $jeu['id']?>' style="background-color:rgba(0,0,0,0); border:none">
=======
<button type="submit" name="id" value='<?php echo $jeu['id']?>' style="background-color:rgba(0,0,0,0); border: none">
>>>>>>> c20b92d2f55721164531ab4480142bc00e883732
   
      <div class="card"
      style= "height: 260px ; width: 195px;
      border-radius: 15px;
      <?php  if ($jeu['PEGI'] == 18):?>
      background: rgb(255,97,97);
      background: linear-gradient(180deg, rgba(255, 91 , 91,1) 0%, rgba(181,0,0,1) 100%);
      <?php elseif ($jeu['PEGI'] == 16):?>
      background: rgb(97,207,255);
      background: linear-gradient(0deg, rgba(68, 169 ,255,1) 0%, rgba(67 ,101 ,255,1) 100%);
      <?php elseif($jeu['PEGI'] == 12):?>
      background: rgb(97,207,255);
      background: linear-gradient(180deg, rgba(68, 169 ,255,1) 0%, rgba(73,76,255,1) 100%);
      <?php elseif($jeu['PEGI'] == 7):?>
      background: rgb(255,153,238);
      background: linear-gradient(180deg, rgba(164,84,255,1) 0%, rgba(219,91,255,1) 100%);
      <?php elseif($jeu['PEGI'] == 3):?>
      background: rgb(255,153,238);
      background: linear-gradient(180deg, rgba(219,91,255,1) 0%, rgba(164,84,255,1) 100%);
      <?php endif;?>
      "> 

      <div class="card-image">     
      
        <div style="display:flex;align-items:center;justify-content:center">
          <?php foreach($plateforms as $plateform): ?>
            <img src="../../../<?php echo $plateform['icon'] ?>"
            style= "height:30px; width:32px;
            margin-bottom: 5px ;margin-top: 5px;margin-right:5px;
            ">
          <?php endforeach; ?>
        </div>

        <div style= "background-size: cover;
        width: 90%; height: 180px;
        margin:0 auto;margin-bottom:3px;
        background-image:url(../../../assets/imgJeu/<?php echo $jeu['image']?>);
        border-radius: 15px;
        ">
      </div>

      <div style="text-align:center">
        <h2 style="font-size: 15px;
        color : white;
        margin:0 auto;
        font-weight:bold;
        margin-top:5px;
        margin-right:5px;
        margin-left:5px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        ">
        <?php echo $jeu['title']?>
      </h2>
      <p style = "font-size: 12px;
      color : white;
      margin:0 auto;
      ">
      <?php echo $jeu['prix']?> €
    </p>
     
    </form>
  </div>




</div>
</div>
</a>
</div> 
</button> 
<?php } ?>
