<?php 
    $hobi = $_POST['hobi'];
    foreach($hobi as $key => $val){
        echo $val.', ';
    }
?>
<form>
    <br>
    <button><a href="checkBox.php">Kembali</a></button>
</form>