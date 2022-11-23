<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,200;1,300;1,400;1,500;1,600&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,200;1,300;1,400;1,500;1,600&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <title>Shipment </title>
    <style>
        body{
            font-family: 'Roboto';
            font-style: normal;
        }
        .headtx{
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 20px;
            text-align: center;
            color: #000000;
            opacity: 0.7;
            padding: 30px;
            background: #F4F4F4;
        }

        ul {
            list-style: none;
        }
        ul li::before {
            content: "\2022";
            color: red;
            font-weight: bold;
            font-size: 10px;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
        }
        .itembtn{
            border: 1px solid #D0D0D0;
            box-sizing: border-box;
            border-radius: 23px;
            border-radius: 10px;
            font-weight: 400;
            font-size: 11px;
        }
        .or{
            left: 50%;
            position: absolute;
            top: 2px;
            background: white;
            padding-left: 6px;
            padding-right: 6px;
        }
        .labeltx{
            position: absolute;
            background: white;
            left: 36px;
            bottom: 29px;
            font-size: 11px;
            padding: 1px;
        }
        .bdradi{
            margin-top: 40px;
            border-radius: 10px;
        }
        .pd{
            padding-left: 12%;
            padding-right: 13%;
        }


        /*new phone image*/

        /*.take-picture {*/
            /*display: inline-block;*/
            /*margin: 0 auto;*/
            /*padding: 15px 20px;*/
            /*text-align: center;*/
            /*background-color: blue;*/
            /*color: #fff;*/
            /*cursor: pointer;*/
        /*}*/
        /*.single-img-show {*/
            /*width:200px;height: 300px;*/
        /*}*/
        /*.single-image {*/
            /*float: left;*/
            /*display: inline-block;*/
        /*}*/

        /*new phone image*/
    </style>
    @yield('css')
</head>
<body>


    @yield('content')


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@yield('script')
</body>
</html>
