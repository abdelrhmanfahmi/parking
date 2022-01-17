<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Smart Parking System</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>
        .btnCssLogin2{
            color:#004280;
            background-color: #F9BE57;
            width:250px;
            height:60px;
        }
        .btnCssLogin2:hover{
            color:#F9BE57;
            font-weight: bold;
            background-color: #004280;
        }
    </style>

</head>
<body>

    <div class="container-fluid pt-5">
        <div class="row" style="margin-bottom: 190px;">
            <div class="col-md-12 pt-5">
                <h3 class="text-center" style="color:#333;font-size:30px;">Smart Parking System</h3>
            </div>
        </div>

        
        <div class="row mb-5">
            <div class="col-md-12 d-flex justify-content-center">
                <img src="{{ asset('assets/images/check.png') }}" alt="">
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-12 d-flex justify-content-center">
                <h3 style="color:#004280;font-weight:bold;">Thank You For Your Order</h3>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-12 d-flex justify-content-center">
                <button class="btn btnCssLogin2">Pay For Order</button>
            </div>
        </div>
        
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>