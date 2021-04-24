<?php require_once '../action/config.php'; ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <?php include '../content/head.php'; ?>
  <title></title>
</head>
<body>
  <header>
    <?php include '../content/navbar.php'; ?>

  </header>


<div class="section">
      <div class="row container">
        <h2 class="header white-text">Vos Avis</h2>
          <p class="range-field">
            <input type="range" id="note" min="0" max="10"/>
          </p>
          <div class="row">
              <div class="col s12">
                <div class="row">
                    <div class="col s12">
                      <div class="row">
                        <div class="input-field col s12">
                          <textarea id="text" class="materialize-textarea white-text"></textarea>
                          <label for="text">Votre Avis</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button class="btn waves-effect waves-light orange" id="submit" onclick="send_avis()" name="action">Submit
                      <i class="material-icons right">send</i>
                  </button>
              </div>
            </div>
            <div class="row" id="avis" >

            </div>
        </div>
      </div>

      <script type="text/javascript">

    function send_avis(){
          $.ajax({
            type: "POST",
            url: "../action/send_avis.php",
            data: { ,
              note:$("#note").val(),
              content:$("#text").val(),
              jeux_id: <?php $_POST['jeux_id'] ?>
              projet:projet
            },
          });
  }
    