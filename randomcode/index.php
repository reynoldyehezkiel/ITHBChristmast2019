<!DOCTYPE html>
<html lang="en">
<head>
    <title>Random Code Generator</title>
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
                    <b><h2 style="color: white;">Generate Random Code</b></h2>
                </div>
                <hr style="border:1px solid rgb(220,53,69)"> 
                <b><h3 align="center" style="color: white;"><?php
                    if(isset($_POST['submit'])){
                        function randomAlphabet($n){
                            $alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                            $randomString = "";
                            for($i = 0; $i < $n; $i++){
                                $index = rand(0, strlen($alphabet)-1);
                                $randomString .= $alphabet[$index];
                            }
                            return $randomString;
                        }

                        function randomNumber($n){
                            $number = "0123456789";
                            $randomString = "";
                            for($i = 0; $i < $n; $i++){
                                $index = rand(0, strlen($number)-1);
                                $randomString .= $number[$index];
                            }
                            return $randomString;
                        }
                        function GenerateCode($length){
                            echo randomAlphabet($length-10) //2 digits
                            .randomNumber($length-9)        //3 digits
                            .randomAlphabet($length-8)      //4 digits
                            .randomNumber($length-10)       //2 digits
                            .randomAlphabet($length-11);    //1 digits
                        }
                        $length = 12;
                        $lotteryNumber = GenerateCode($length);
                        echo "<b>$lotteryNumber</b>";
                    }
                ?></b></h3>

                <!-- animation -->
                <script>
                    var lotteryNumber = "<?php echo $lotteryNumber ?>";

                    function repeatOften(){
                        lotteryNumber = requestAnimationFrame(repeatOften);
                    }

                    $(#generate).on("click",function(){
                        repeatOften();
                    });
                </script>

                <form method="POST" action="" enctype="multipart/form-data">
                    <hr style="border:1px solid rgb(220,53,69)">
                    <input type="submit" class="btn btn-md btn-danger btn-block" name="submit" value="Generate" style="font-weight: 700;">
                </form>
            </div>
        </div>
    </div>
</body>
</html>