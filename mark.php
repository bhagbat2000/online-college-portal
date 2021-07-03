<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'registration');
if (!isset($_SESSION['success']))
    header('location: login.php');
$query = "SELECT * FROM `question`;";
$result = mysqli_query($db, $query);
$query1 = "SELECT * FROM `correct`; ";
$result1 = mysqli_query($db, $query1);
$total = 0;
$query2 = "SELECT * FROM `user`;";
$result2 = mysqli_query($db, $query2);
$output = "";

$i = 1;
while ($row2 = mysqli_fetch_assoc($result2)) {
    $i++;
    $total = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        while ($row1 = mysqli_fetch_assoc($result1)) {
            $a = $row2['username'];
            $b = $row1['username'];
            //echo $a . " == " . $b . "<br><br>";
            if ($row2['username'] == $row1['username']) {
                // echo "jp"; //echo $row1['qnum']." == ".$row['qnum']."<br><br>";
                if ($row1['qnum'] == $row['qnum']) {
                    //echo $row['correct'] . "==" . $row1['ans'] . "  ";
                    if ($row1['ans'] == $row['correct']) {
                        $total++;
                    }
                }
            }

        }
        $result1 = mysqli_query($db, $query1);
    }
    $result = mysqli_query($db, $query);
        $output .= "<tr>
        <th scope='row'>{$i}</th>
        <td>{$row2['username']}</td>
        <td>{$row2['email']}</td>
        <td>{$total}</td>
      </tr>";
}
echo $output;
