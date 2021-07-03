<?php include('server.php');
if (!isset($_SESSION['success']))
    header('location: login.php'); ?>
<?php


$username = $_SESSION['username'];

$op = "";
if(isset($_POST["op"]))
    $op =$_POST["op"];
$qnum = $_POST["qid"];

$db = mysqli_connect('localhost', 'root', '', 'registration');
$query = "SELECT * FROM `correct` where username = '{$username}' and qnum = '{$qnum}';";
$result = mysqli_query($db, $query) or die("SQL Query Failed.");
if(mysqli_num_rows($result) > 0 ){
  
    while($row = mysqli_fetch_assoc($result)){
        if($op != "")
             $query = "UPDATE `correct` SET `ans` = '{$op}' , `answered` = 'yes' where `correct`.`username` = '{$username}' and `correct`.`qnum` = '{$qnum}';";
    }
    $result = mysqli_query($db, $query) or die("SQL Query Failed.");
}else{
   
    if($op != ""){
        $query = "INSERT INTO `correct` (`username`, `qnum`, `ans`, `answered`, `visited`) VALUES ('{$username}', '{$qnum}', '{$op}', 'yes', 'yes');";}
    else{
        $query = "INSERT INTO `correct` (`username`, `qnum`, `ans`, `answered`, `visited`) VALUES ('{$username}', '{$qnum}', '', 'no', 'yes');";}
$result = mysqli_query($db, $query) or die("SQL Query Failed.");
}
?>
