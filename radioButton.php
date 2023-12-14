<?php 
    $payment_method = [
        1=>"Cash ",
        2=>"Transfer ",
        3=>"e-Wallet ",
        4=>"Crypto Currency "
    ];
?>
<form method="POST" action="p_radioButton.php"> 
Metode Pembayaran : 
<?php 
        foreach($payment_method as $key => $val){
            echo '<input type="radio" name="payment" value="'.$val.'">'.$key;
        }
    ?>
    <input type="submit" value="Submit" name="submit"/>
</form>
    