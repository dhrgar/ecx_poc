<?php

if(isset($_REQUEST['payPal'])) {
header('Location: pay_pal_checkout.php?amount='. $_POST['amount']. '&currency='.$_POST['currency'] .'&description='.$_POST['description'].'');

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PayPal testing</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">

            </div>
        </div>
    </nav>

    <div class="container">

        <div class="starter-template">
            <h1 align="center">PayPal testing</h1>
            <br>

            <div class="">
                <form class="" id="paypal" action="" method="POST" align="center">

                    <section>
                        <div>
                            <label for="amount">Amount</label></br>
                            <input type="number" name="amount">
                        </div>
                        </br>
                        <div>
                            <label for="currency">Currency</label></br>
                            <select class="selectpicker" name="currency">
								  <option>EUR</option>
								  <option>USD</option>
								  <option>CAD</option>
							</select>
                        </div>

                        </br>

                        <div>
                            <label for="description">Description</label></br>
                            <textarea name="description" cols="40" rows="5"></textarea>


                        </div>

                    </section>
                    </br>



                    <input type="submit" name="payPal" value="" style="background:url(https://www.paypalobjects.com/webstatic/en_US/i/buttons/checkout-logo-large.png) no-repeat;  width:228px; height:46px; background-size: 100%; border: 0;" />



                </form>

            </div>
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>



</body>


</html>