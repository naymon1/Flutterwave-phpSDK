<!DOCTYPE html>
<html>
    <body>
        <form method="POST" action="./processPayment.php" id="paymentForm">
            <input type="text" name="amount" value="200" /> <!-- Replace the value with your transaction amount -->
            <input type="text" name="payment_method" value="both" /> <!-- Can be card, account, both -->
            <input type="text" name="description" value="I Phone X, 100GB, 32GB RAM" /> <!-- Replace the value with your transaction description -->
            <input type="text" name="logo" value="http://brandmark.io/logo-rank/random/apple.png" /> <!-- Replace the value with your logo url -->
            <input type="text" name="title" value="Victor Store" /> <!-- Replace the value with your transaction title -->
            <input type="text" name="country" value="NG" /> <!-- Replace the value with your transaction country -->
            <input type="text" name="currency" value="NGN" /> <!-- Replace the value with your transaction currency -->
            <input type="text" name="email" value="fionotollan@yahoo.com" /> <!-- Replace the value with your customer email -->
            <input type="text" name="firstname" value="Olufemi" /> <!-- Replace the value with your customer firstname -->
            <input type="text" name="lastname"value="Olanipekun" /> <!-- Replace the value with your customer lastname -->
            <input type="text" name="phonenumber" value="08098787676" /> <!-- Replace the value with your customer phonenumber -->
            <input type="text" name="pay_button_text" value="Complete Payment" /> <!-- Replace the value the payment button text you prefer -->
            <input type="text" name="ref" value="7737dbdbegegeh737" /> <!-- Replace the value the payment button text your transaction reference. It must be unique per transaction. You can delete this line if you want one to be generated for you. -->
            <input type="submit" value="Submit" style="display:none;" />
        </form>
       
       <script type="text/javascript" >
            document.addEventListener("DOMContentLoaded", function(event) {
                document.getElementById("paymentForm").submit();
           });
        </script>
    </body>
</html>