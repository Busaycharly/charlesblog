<?php     
$conn= new mysqli("localhost", "wetinde2_cbblog", "cb2023blog", "wetinde2_cbblogdb");
if(mysqli_connect_errno()){
    printf("connect failed: %s\n", mysqli_connect_error());
    exit(); 
}

?>