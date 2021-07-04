<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        .container{
            padding-top: 20px;
        }
       
    </style>
</head>
<body>
    <h3 class="text-dark" style="margin-left: 650px; padding-top: 20px;">Result</h3>
    <div class="container">
<table class="table table-dark table-striped" >
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">Mail_id</th>
      <th scope="col">Mark</th>
    </tr>
  </thead>
  <tbody id="td">

  </tbody>
</table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script>
    $(document).ready(function(){
        function mark(){
            $.ajax({
                url: "mark.php",
                type: "POST",
                success: function(data) {
                    $("#td").html(data);
                }
            })
        }
        mark();

    });
</script>
</html>