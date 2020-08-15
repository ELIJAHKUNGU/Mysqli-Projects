<?php
include 'fetch.php'
?>




<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="js/bootstrap.js">
    <title>Document</title>
</head>
<body>
<div class="container">
    <br>
    <h2 align="center">Search Data</h2>
    <div class="form-group">

        <span class="input-group-addon">Search</span>
        <input type="text" name="search_text" id="search_text" placeholder="Search" class="form-control">
    </div>
</div>
<br>
<div id="result"></div>
</body>
</html>
<script>
    $(document).ready(function () {
        $('#search_text').keyup(function () {
            var txt = $(this).val();
            if (txt != '')
            {
            }else {
                $('#result').html('');
                $.ajax({
                    url:"fetch.php",
                    method:"post",
                    data:{search:txt},
                    dataType:"text",
                    success:function (data) {
                        $('#result').html('');

                    }
                });

            }
        });

    });


</script>