<?php
$token = $_POST['stripeToken'];
$email = $_POST['email'];
$name = $_POST['name'];

if (filter_var($email,FILTER_VALIDATE_EMAIL) && !empty($name) && !empty($token)){
    require('cle_stripe.php');
    $stripe = new Stripe('sk_test_51Ij187I4NeokXeq3SgUzV9QoPYSXueEaODfNZSVthpZFwdvnJVxihXjzNKrT5FCdXigB4DqzI6YZxijWXJ2H4WQB00zaiUyyKo');
    $customer = $stripe-> api('customers',[
        'source' => $token,
        'description' => $name,
        'email'=> $email,
    ]);
        var_dump($customer);
    die();
}