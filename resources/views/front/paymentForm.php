<!DOCTYPE html>
<html>
    <body>
        <form method="POST" action="processPayment.php" id="paymentForm">
            <input type="hidden" name="amount" value="200" /> <!-- Replace the value with your transaction amount -->
            <input type="hidden" name="payment_options" value="" /> <!-- Can be card, account, ussd, qr, mpesa, mobilemoneyghana  (optional) -->
            <input type="hidden" name="description" value="Bus Ticket" /> <!-- Replace the value with your transaction description -->
            <input type="hidden" name="logo" value="http://52.38.56.164/bus_dev/img/logo-invert.png" /> <!-- Replace the value with your logo url (optional) -->
            <input type="hidden" name="title" value="Victor Store" /> <!-- Replace the value with your transaction title (optional) -->
            <input type="hidden" name="country" value="NG" /> <!-- Replace the value with your transaction country -->
            <input type="hidden" name="currency" value="NGN" /> <!-- Replace the value with your transaction currency -->
            <input type="hidden" name="email" value="fionotollan@yahoo.com" /> <!-- Replace the value with your customer email -->
            <input type="hidden" name="firstname" value="Olufemi" /> <!-- Replace the value with your customer firstname (optional) -->
            <input type="hidden" name="lastname"value="Olanipekun" /> <!-- Replace the value with your customer lastname (optional) -->
            <input type="hidden" name="phonenumber" value="08098787676" /> <!-- Replace the value with your customer phonenumber (optional if email is passes) -->
            <input type="hidden" name="pay_button_text" value="Complete Payment" /> <!-- Replace the value with the payment button text you prefer (optional) -->
            <input type="hidden" name="ref" value="MY_NAME_5a22a7f270abc8879" /> <!-- Replace the value with your transaction reference. It must be unique per transaction. You can delete this line if you want one to be generated for you. -->
           <input type="hidden" name="env" value="test"> 
            <input type="hidden" name="publicKey" value="FLWPUBK-630f2049e9a1515dc916602cc55ad485-X"> <!-- Put your public key here -->
            <input type="hidden" name="secretKey" value="FLWSECK-2fa483b17fbd2991fef4eec39243bc37-X"> <!-- Put your secret key here -->
            <input type="hidden" name="successurl" value="http://request.lendlot.com/13b9gxc1?name=success"> <!-- Put your success url here -->
            <input type="hidden" name="failureurl" value="http://request.lendlot.com/13b9gxc1?name=failed"> <!-- Put your failure url here -->
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>