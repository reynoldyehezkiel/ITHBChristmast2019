<!DOCTYPE html>
<html lang="en">
<head>
    <title>Telegram ChatBot</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body, html{
            height: 100%;
            width: 100%;
        }

        .bg{
            background-image: url("images/bg.jpg");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            overflow: hidden;
        }
    </style>
</head>
<body class="bg">
    <div class="container mt-5">
        <br><br><br>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="panel-heading">
                    <b><h2 style="color: white;">Telegram ChatBot</b></h2>
                </div>
                <hr style="border:1px solid rgb(220,53,69)">
                <form method="POST" action="send_msg.php" enctype="multipart/form-data">
                    <input type="text" class="form-control" name="user_id" placeholder="User ID" value="" required>
                    <br><input type="text" class="form-control" name="text" placeholder="Input text here..." required>
                    <hr style="border:1px solid rgb(220,53,69)">
                    <input type="submit" class="btn btn-md btn-danger btn-block" name="submit" value="Send Message" style="font-weight: 700;">
                </form>
            </div>
        </div>
    </div>
</body>
</html>