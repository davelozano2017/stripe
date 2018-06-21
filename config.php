<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_LqhFGo0LLU2lEbb37u0pjIO3",
  "publishable_key" => "pk_test_JArpaNbLyErrzFlfYZjbhgtM"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>