<?php include('server.php');
if (!isset($_SESSION['success']))
    header('location: login.php'); ?>
<?php

$username = $_SESSION['username'];
$db = mysqli_connect('localhost', 'root', '', 'registration');
$query = "SELECT * FROM `question`;";
$result = mysqli_query($db, $query) or die("SQL Query Failed.");
$total = mysqli_num_rows($result) ;
$query = "SELECT * FROM `correct` where username = '{$username}';";
$result1 = mysqli_query($db, $query) or die("SQL Query Failed.");
$output = "";$j = 0;
if(mysqli_num_rows($result1) > 0 ){
    for($i=1;$i<=$total;$i++){
        $flat = 1; 
    while($row = mysqli_fetch_assoc($result1)){
        $j++;
        if($row["qnum"]==$i){
            
                if($row["answered"]=="yes"){
                    $output .= "<button type='button' class='col-4 btn btn-success' id='pageid' data-eid='{$i}'>{$i}</button>"; $flat = 0;
                }else{
                    $output .= "<button type='button' class='col-4 btn btn-danger' id='pageid' data-eid='{$i}'>{$i}</button>"; $flat = 0;
                }
        }
    }
    if($flat == 1){
        $output .= "<button type='button' class='col-4 btn btn-primary' id='pageid' data-eid='{$i}'>{$i}</button>"; 
        }  
        $result1 = mysqli_query($db, $query);
}
}
else{
    for($i=1;$i<=$total;$i++){
        $output .= "<button type='button' class='col-4 btn btn-primary' id='pageid'  data-eid='{$i}'>{$i}</button>"; 
    }
}
echo $output;
?>