<?php

$server="localhost";
$user='root';
$password="";
$db="user_documents_and_info";

$con=mysqli_connect($server,$user,$password,$db);

if($con){
   
}else{
 
    ?>
<script>
    alert('connection not successful');
</script>

<?php
}