
<?php
$sql =
  " SELECT * FROM jeux_plateforme jp
    INNER JOIN plateforme p
    ON p.id = jp.plateforme
    WHERE jeux = ".$jeu['id']."
  ";
$pre = $pdo->prepare($sql);
$pre->execute();
$plateforms = $pre->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="card" style= "height: 260px ; width: 195px; border-radius: 15px;
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
                 background-image:url(<?php echo $jeu['image']?>);
                 border-radius: 15px;
                ">
    </div>

    <div style="text-align:center">
      <h2 style="font-size: 15px;
                 color : white;
                 margin:0 auto;
                 font-weight:bold;
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
    </div>
  </div>
</div>
