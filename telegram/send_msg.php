<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        function sendMessage($chat_id, $msg, $token){
            $url = "https://api.telegram.org/bot$token/sendMessage?parse_mode=markdown&chat_id=$chat_id";
            $url .= "&text=".urlencode($msg);

            $ch = curl_init();

            $optArrray = array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true
            );

            curl_setopt_array($ch,$optArrray);
            $result = curl_exec($ch);

            $err = curl_error($ch);
            curl_close($ch);
        }

        $msg = $_POST['text'];
        $token = "953022116:AAFtNtbHLM6l9ZRGYfyTfNEl5gAKEsmkK2c";
        $user_id = $_POST['user_id'];

        sendMessage($user_id, $msg, $token);
    }
?>

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
                <div id="qrbox" style="text-align: center;">
                    <?php
                        echo '<b><h2 style="color: white;">Message Succesfully Sent</b></h2>';
                    ?>
                </div>
                <hr style="border:1px solid rgb(220,53,69)">
                <a href="index.php" class="btn btn-md btn-danger btn-block" style="color: white;"><b>Send Message Again</b></a>
            </div>
        </div>
    </div>
</body>
</html>