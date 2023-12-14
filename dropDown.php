<?php 
    $mataKuliah = [
        ""=> "",
        "MK02"=> "Desain Web",
        "MK03"=> "PHP Programming",
        "MK04"=> "Database"
    ];
?>
<form method="POST" action="p_dropDown.php">
Pilihan Matakuliah :
<select name="mk">
    <?php 
        foreach($mataKuliah as $key => $val){
            echo '<option value="'.$val.'">'.$key.'</option>';
        }
    ?>
</select>
<input type="submit" value="Submit" name="submit"/>
</form>