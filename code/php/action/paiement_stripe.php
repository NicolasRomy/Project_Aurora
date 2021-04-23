<?php
$name = $_POST['name'];
$email = $_POST['email'];
$token = $_POST['stripeToken'];

if (filter_var($email,FILTER_VALIDATE_EMAIL) && !empty($name) && !empty($token)){
    require('cle_stripe.php');
    //$stripe = new Stripe('sk_test_51Ij187I4NeokXeq3SgUzV9QoPYSXueEaODfNZSVthpZFwdvnJVxihXjzNKrT5FCdXigB4DqzI6YZxijWXJ2H4WQB00zaiUyyKo');
    /*$customer = $stripe-> api('customers',[
        'source' => $token,
        'description' => $name,
        'email'=> $email,
    ]);*/
    
    $s = new Stripe('sk_test_51Ij187I4NeokXeq3SgUzV9QoPYSXueEaODfNZSVthpZFwdvnJVxihXjzNKrT5FCdXigB4DqzI6YZxijWXJ2H4WQB00zaiUyyKo');
    /*$s->url .= 'customers';
    $s->method = "POST";
    $s->fields = $_POST['email'];
    $customer = $s->call();*/
    $s->url .= 'charges';
    $s->fields = [
        'amount' => 1000,
        'currency' => "eur",
        'source' => $token
    ];
    try{
        $response = $s->call();
    }catch(Exception $e){
        print_r($e);
        exit();
    }
    print_r($response);
    die('la commande a été enregistré');
}