<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container-trend{
            width: 80%;
            margin: 30px auto;
            padding: 20px;
            box-sizing: border-box;
            background-color: #333;
        }
        .container-trend h2{
            font-size: 45px;
            text-align: center;
            color: white;
            font-weight: bold;
        }
        .flex-trend{
            margin: 30px auto;
            width: 90%;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .box-trend{
            width: 30%;
            padding: 20px;
            box-sizing: border-box;
            color: #333;
            background-color: #fff;
            margin: 0 0 0 20px;
            border-radius: 10px;
        }
        .box-trend h3{
            font-size: 21px;
        }
        .box-trend a{
            text-decoration: none;
        }
        @media(max-width:900px){
            .box-trend{
                width: 100%;
                margin: 20px 0 0 0;
            }
        }

    </style>
</head>
<body>
    <div class="container-trend">
        <h2>STAY TREND WITH JOP-STORE</h2>
        <div class="flex-trend">
            <div class="box-trend">
                <h3>Free Shipping</h3>
                <p>Free shipping only at Jop-Store, Let's order now</p>
                <a href="">Read-more</a>
            </div>

            <div class="box-trend">
                <h3>Best Price</h3>
                <p>Best Price Only at Jop-Store, Let's order now</p>
                <a href="">Read-more</a>
            </div>

            <div class="box-trend">
                <h3>Best Quality</h3>
                <p>The Best Quality of all product only at Jop-Store, Let's order now</p>
                <a href="">Read-more</a>
            </div>
        </div>
    </div>
</body>
</html>