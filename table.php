<?php include('server.php');
if (!isset($_SESSION['success']))
    header('location: login.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>CSV File to HTML Table Using AJAX jQuery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }
</style>

<body>
    <div class="container">
        <div class="table-responsive">
            <h1 align="center">Load the data from the xl sheet</h1>
            <br />
            <?php

            require_once 'Classes/PHPExcel.php';
            $excel = PHPExcel_IOFactory::load('Attendance.csv');
            $excel->setActiveSheetIndex(0);

            echo "<table align='center' style='width:100%'>";

            $i = 1;
            $flat = true;
            $j = 0;
            while ($excel->getActiveSheet()->getcell('A' . $i)->getValue() != "" || $j <= 2) {
                if ($excel->getActiveSheet()->getcell('A' . $i)->getValue() != "") {
                    $c1 = $excel->getActiveSheet()->getcell('A' . $i)->getValue();
                    $c2 =   $excel->getActiveSheet()->getcell('B' . $i)->getValue();
                    $c3 = $excel->getActiveSheet()->getcell('C' . $i)->getValue();
                    if ($flat) {
                        echo "
                    <tr>
                        <th>" . $c1 . "</th>
                        <th>" . $c2 . "</th>
                        <th>" . $c3 . "</th>
                    </tr>    
             ";
                        $flat = false;
                    } else {
                        echo "
            <tr>
                <td>" . $c1 . "</td>
                <td>" . $c2 . "</td>
                <td>" . $c3 . "</td>
            </tr>    
     ";
                    }
                } else {
                    $j++;
                }
                $i++;
            }

            echo "</table>";



            ?>
            <br />

        </div>
    </div>
</body>

</html>