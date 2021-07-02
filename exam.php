<?php include('server.php');
if (!isset($_SESSION['success']))
    header('location: login.php'); 
    $query = "SELECT * FROM `user` WHERE `username`='{$_SESSION['username']}' ; ";
    //     echo $query;
          $result = mysqli_query($db,$query);
          if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)){
                  if($row['exam']==0)
                    header('location: result.php');
              }
          }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        .container-fluid {
            padding-top: 100px;
        }

        .col-4 {
            margin-left: 20px;
            width: 40px;
            margin-top: 20px;
        }

        .col-8 {
            margin-top: 20px;
            margin-left: 30px;
        }
    </style>
</head>

<body>

    <div class="container-fluid bg-gray-900">
        <div class="row">
            <div class="col-2 border border-5">
                <div class="row " id="btn">

                </div>
            </div>
            <div class="col-8 border border-5" id="que-data">

            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script>
    $(document).ready(function() {
        var qid=1;
        function loadqus(page){
            $.ajax({
                url: "question.php",
                type: "POST",
                data: {
                    page_no: page
                },
                success: function(data) {
                    $("#que-data").html(data);
                }
            })
        }

        loadqus();

        function check_user() {
            $.ajax({
                url: "page.php",
                type: "POST",
                success: function(data) {
                    $("#btn").html(data);
                }
            });
        }
        check_user();

        function visited(){
           // console.log(qid);
            $.ajax({
                url: "insert.php",
                type: "POST",
                data: {
                    qid: qid
                },
                success: function(data) {
                   
                }
            })
        }
        visited();
        $(document).on("click", "#pageid", function() {
            qid = $(this).data("eid");
            console.log(qid);
             visited();   
            loadqus(qid);
            check_user();
            
        });

        $(document).on("click","input[type='radio']",function(){  
           var op = $(this).val(); 
           //console.log(qid);
           $.ajax({
                url: "insert.php",
                type: "POST",
                data:{
                    op : op,
                    qid : qid
                },
                success: function(data) {
                }
            });
      });

    });
</script>

</html>