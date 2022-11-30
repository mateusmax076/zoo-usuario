<?php 
require_once('db-connect.php');
if($_SERVER['REQUEST_METHOD'] !='POST'){
    echo "<script> alert('Não salvo.'); location.replace('./') </script>";
    $conn->close();
    exit;
}
extract($_POST);
$allday = isset($allday);

if(empty($id)){
    $sql = "INSERT INTO `apro_evento` (`titulo`,`email`,`telefone`,`start`,`end`) VALUES ('$titulo','$email','$telefone','$start','$end')";
}else{
    
    echo "<pre>";
    echo "An Error occured.<br>";
    echo "Error: ".$conn->error."<br>";
    echo "SQL: ".$sql."<br>";
    echo "</pre>";

}
$save = $conn->query($sql);
if($save){
    echo "<script> alert('salvo com sucesso.'); location.replace('./') </script>";
}else{
    echo "<pre>";
    echo "um erro ocorreu.<br>";
    echo "Error: ".$conn->error."<br>";
    echo "SQL: ".$sql."<br>";
    echo "</pre>";
}
$conn->close();
?>