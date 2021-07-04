<?php include('server.php');
if (!isset($_SESSION['success']))
    header('location: login.php'); ?>
<?php

$username = $_SESSION['username'];
$page = 0;
if(isset($_POST["page_no"])){
    $page = $_POST["page_no"];
}else{
    $page=1;
}
$db = mysqli_connect('localhost', 'root', '', 'registration');
$query = "SELECT * FROM `question`;";
$result = mysqli_query($db, $query) or die("SQL Query Failed.");
$total = mysqli_num_rows($result) ;
$query = "SELECT * FROM `question` where qnum='{$page}';";
$result = mysqli_query($db, $query) or die("SQL Query Failed.");
$query = "SELECT * FROM `correct` where username = '{$username}' and qnum='{$page}' and answered='yes';";
$result1 = mysqli_query($db, $query) or die("SQL Query Failed.");
$output = "";
$page++;
if(mysqli_num_rows($result1) > 0){
    while($row = mysqli_fetch_assoc($result)){
        while($row1 = mysqli_fetch_assoc($result1)){
            $output .= " <i class='fa fa-question fs-5' aria-hidden='true'>question no:{$row['qnum']}</i><br>
            <p class='fw-bold fs-4'>{$row['question']}</p>
            <div class='form-check'>
                <input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault1' value='{$row['op1']}'";if($row['op1'] == $row1['ans'])$output.="checked";$output.=">
                <label class='form-check-label' for='flexRadioDefault1'>
                {$row['op1']}
                </label>
            </div>
            <div class='form-check'>
                <input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault2' value='{$row['op2']}' ";if($row['op2'] == $row1['ans'])$output.="checked";$output.=">
                <label class='form-check-label' for='flexRadioDefault2'>
                {$row['op2']}
                </label>
            </div>
            <div class='form-check'>
                <input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault3' value='{$row['op3']}'";if($row['op3'] == $row1['ans'])$output.="checked";$output.=">
                <label class='form-check-label' for='flexRadioDefault3'>
                {$row['op3']}
                </label>
            </div>
            <div class='form-check'>
                <input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault4' value='{$row['op4']}'";if($row['op4'] == $row1['ans'])$output.="checked";$output.=">
                <label class='form-check-label' for='flexRadioDefault4'>
                {$row['op4']}
                </label>
            </div><br>";
            if($page == $total+1)
             $output .= "<button type='button' class='btn btn-primary'  id='pageid' data-eid='{$page}' disabled>save & next</button>&nbsp;&nbsp;";
             else
             $output .= "<button type='button' class='btn btn-primary'  id='pageid' data-eid='{$page}' >save & next</button>&nbsp;&nbsp;";
            $output .= "<a href='index.php?id=1><button type='button' class='btn btn-success'>submit</button></a><br><br>";
        }
    }
}else{
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
    $output .= " <i class='fa fa-question fs-5' aria-hidden='true'>question no:{$row['qnum']}</i><br>
    <p class='fw-bold fs-4'>{$row['question']}</p>
    <div class='form-check'>
        <input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault1' value='{$row['op1']}'>
        <label class='form-check-label' for='flexRadioDefault1'>
        {$row['op1']}
        </label>
    </div>
    <div class='form-check'>
        <input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault2' value='{$row['op2']}' >
        <label class='form-check-label' for='flexRadioDefault2'>
        {$row['op2']}
        </label>
    </div>
    <div class='form-check'>
        <input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault3' value='{$row['op3']}'>
        <label class='form-check-label' for='flexRadioDefault3'>
        {$row['op3']}
        </label>
    </div>
    <div class='form-check'>
        <input class='form-check-input' type='radio' name='flexRadioDefault' id='flexRadioDefault4' value='{$row['op4']}'>
        <label class='form-check-label' for='flexRadioDefault4'>
        {$row['op4']}
        </label>
    </div><br>";
    if($page == $total+1)
     $output .= "<button type='button' class='btn btn-primary'  id='pageid' data-eid='{$page}' disabled>save & next</button>&nbsp;&nbsp;";
     else
     $output .= "<button type='button' class='btn btn-primary'  id='pageid' data-eid='{$page}' >save & next</button>&nbsp;&nbsp;";
    $output .= "<a href='index.php?id=1><button type='button' class='btn btn-success'>submit</button></a><br><br>";
    }
}
}
echo $output;
?>

           