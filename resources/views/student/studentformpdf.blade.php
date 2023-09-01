<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        .header{
            display: flex;
            justify-content: space-between;
            width: 100%;
            height: 200px;
        }
        .logo{
            width: 15%;
            height: 80px;
            border: 1px solid black;
        }
        .title{
            width: 60%;
            height: 100px;
        }
        .img{
            width: 100px;
            height: 140px;
        }

        .img img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>
        <div class="header">
            <div class="logo">

            </div>
            <div class="title">
                <h2>Madrasa Anwar Ul Quran</h2>
                <p>Address: Yarhussain Swabi Kpk</p>
            </div>
            <div class="img">
                {{-- <img src="{{asset('images/'.$data->Image)}}" alt=""> --}}
            </div>
        </div>

</body>
</html>
