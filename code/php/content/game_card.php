

    <div class="card" style= "height: 260px ; width: 195px; border-radius: 15px;
     <?php  if ($jeu['PEGI'] == 18){
                ?>background: rgb(255,97,97);
                background: linear-gradient(180deg, rgba(255,97,97,1) 0%, rgba(143,0,0,1) 100%);<?php
            } elseif ($jeu['PEGI'] == 16){
                ?> background: rgb(97,207,255);
                background: linear-gradient(0deg, rgba(97,207,255,1) 0%, rgba(73,76,255,1) 100%);<?php
            } elseif($jeu['PEGI'] == 12){
                ?> background: rgb(97,207,255);
                background: linear-gradient(180deg, rgba(97,207,255,1) 0%, rgba(73,76,255,1) 100%);<?php
            } elseif($jeu['PEGI'] == 7){ 
                ?> background: rgb(255,153,238);
                background: linear-gradient(0deg, rgba(255,153,238,1) 0%, rgba(155,73,255,1) 100%);  <?php
            } elseif($jeu['PEGI'] == 3){
                ?> background: rgb(255,153,238);
                background: linear-gradient(180deg, rgba(255,153,238,1) 0%, rgba(155,73,255,1) 100%);<?php
            }
                ?>">
        <div class="card-image">
        <img src="../../../assets/PlayStation-logo.png" style="height:30px; width:30px; margin-bottom: 10px">
            <div style= "background-size: cover; width: 90%; height: 180px; margin:0 auto; background-image:url(<?php echo $jeu['image']?>);border-radius: 15px;";>
            </div>
            <div style="text-align:center">
            <h2 style="font-size: 15px; color : white ;margin:0 auto; font-weight:bold;white-space: nowrap; overflow: hidden;  text-overflow: ellipsis;"> <?php echo $jeu['title']?></h2>
            <p style="font-size: 12px; color : white; margin:0 auto;"> <?php echo $jeu['prix']?> €</p>

            </div>
            </div>



