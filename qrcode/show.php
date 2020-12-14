<?php
    // include "/home/terc5822/public_html/01_development/01_generator/01_qr/phpqrcode/qrlib.php";
    include "phpqrcode/qrlib.php";

    // $path = '/home/terc5822/public_html/01_development/01_generator/01_qr/images/';
    $path = 'images/';

    $file = $path.uniqid().".png";

    // $relative_path = $path.$file;

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
	$email = $_POST['email'];
	$date = $_POST['date'];

    $text = "";
    $text .= $nim;
    $text .= " ";
    $text .= $nama;
	$text .= " ";
    $text .= $email;
    $text .= " ";
    $text .= $date;
	
	QRcode::png($text,$file,"Q",7,7);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>QR Code Generator</title>
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
                    <b><h2 style="color: white;">QR Code Generator</b></h2>
                </div>
                <hr style="border:1px solid rgb(220,53,69)">
                <div id="qrbox" style="text-align: center;">
                    <img src="<?php echo $file; ?>" alt="">
                </div>
                <hr style="border:1px solid rgb(220,53,69)">
                <a href="index.php" class="btn btn-md btn-danger btn-block" style="color: white;"><b>Generate Again</b></a>
            </div>
        </div>
    </div>
</body>
</html>