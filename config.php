<?php
    require_once "stripe-php-master/init.php";

    $stripeDetails = array(
        "secretKey" => "sk_test_51LjI5ZExdkdnx2ApbWJmG5YZMWdfolqgEldK1AyAgtWhLIhSrf4xGMvIEI3hbtUcQCArNWf551HjWShN5O844mAW00b3k9qP31",
        "publishableKey" => "pk_test_51LjI5ZExdkdnx2ApP80AplQgAVO8XPr0XhVnkavHFtlOaXD8WsJJ4KEgtsrtSD4mwHlYcsWscisiW4lpSypK1zkr005WZ20dGU"
    );

    \Stripe\Stripe::setApiKey($stripeDetails["secretKey"]);
?>