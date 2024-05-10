<?php 
if(isset($_GET['id'])){
    include("cadpiso/cadprodatualiza.php");
}else{
    include("cadpiso/cadprod.php");
}
?>