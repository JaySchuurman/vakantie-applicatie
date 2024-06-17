<?php

if($_POST['leeftijd'] < 18 ){
header("location: ../pages/home.php");
}

else{
    echo'legal';
}

?>