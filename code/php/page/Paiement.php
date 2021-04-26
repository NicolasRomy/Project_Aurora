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

     <?php# $total = $_POST["total"] 
     
     #ici on aurait du l'envoyer à /action/paiement_stripe.php mais comme l'on n'arrivais pas a faire fonctionner l'api on a préféré le simuler avec une fausse page de confirmation?>
     <form action="../action/paiement_stripe_demo.php" class="form white" id="payment_form" method="post">
        <div>
            <input type="text" name="name" placeholder="name" require value="Eliot">
        </div>
        <div>
            <input type="email" name="email" placeholder="email" require value="ecros@gaming.tech">
        </div>
        <div>
            <input type="text" placeholder="Votre code de carte Bleu" name="card_number"  data-stripe="number" value="4242 4242 4242 4242">
        </div>
        <div>
            <input type="text" placeholder="MM" name="exp_month"  data-stripe="exp_month" value="10">
        </div>
        <div>
            <input type="text" placeholder="YY" name="exp_year"  data-stripe="exp_year" value="22">
        </div>
        <div>
            <input type="text" placeholder="CVC" name="cvc"  data-stripe="cvc" value="123">
        </div>
        <button class="button" value="<?php #$total ?>" type="submit">Acheter</button>
     
     </form>

     <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
     <script type="text/javascript" src="../../js/jquery.min.js"></script>

     <script>
        Stripe.setPublishableKey("pk_test_51Ij187I4NeokXeq3sbuqZ5tA5E6ARw572XdUd0O05JDDlaAgflUBfzIOQ6A8EgqMCMXqQS64TmSbmp3xb1iWmY6R001IrgxmW7")
        var $form = $('#payment_form')
        $form.submit(function (e) {
            e.preventDefault()
            $form.find ('.button').attr('disabled', true)
            Stripe.card.createToken($form, function (status,response) {
                if (response.error) {
                    $form.find('.message').remove();
                    $form.prepend('<div class="white"><p>' + response.error.message + '</p> </div>');
                } else{
                    var token = response.id
                    $form.append($('<input type="hidden" name="stripeToken">').val(token))
                    $form.get(0).submit()
                }

            })
        })



     </script>