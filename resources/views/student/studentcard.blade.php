<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: poppins;
        }
        .front{
            width: 2in;
            height: 3.5in;
            border: .1px solid black;
            border-radius: 4px;
            background-image: url({{asset('images/IDCard.png')}});
            background-size: cover;
        }
        .image{
            width: .67in;
            height: .82in;
            margin-top: .85in;
            margin-left: .71in;
        }
        .image img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .name{
            margin-top: 5px;
        }
        .name center p{
            font-weight: bold;
            font-size: 15px
        }
        .idcarddata{
            display: flex;
            margin: 8px;
            margin-top: 2px;
        }

        .idcarddata .name{
            margin-top: 0;
            width: 40%;
        }
        .idcarddata .name p{
            font-size: 10px;
            font-weight: bold;
        }

        .idcarddata .data{
            width: 60%;
        }
        .idcarddata .data p{
            font-size: 10px;
        }
        .back{
            width: 2in;
            height: 3.5in;
            border: .1px solid black;
            margin-top: 4px;
            border-radius: 4px;
        }

    </style>
</head>
<body>
    <div class="front">
        <div class="image">
            <img src="{{asset('images/'.$data->Image)}}" alt="">
        </div>
        <div class="name">
            <center><p>{{$data->StudentName}}</p></center>
        </div>
        <div class="idcarddata">
            <div class="name">
                <p>ID No</p>
                <p>Father Name</p>
                <p>Class</p>
                <p>Section</p>
                <p>Session</p>
                <p>DOB</p>
            </div>
            <div class="data">
                <p><b>: </b>{{$data->RegistrationNo}}</p>
                <p><b>: </b>{{$data->FatherName}}</p>
                <p><b>: </b>{{$data->ClassName}}</p>
                <p><b>: </b>{{$data->SectionName}}</p>
                <p><b>: </b>{{$data->SessionTitle}}</p>
                <p><b>: </b>{{$data->DOB}}</p>
            </div>
        </div>

    </div>
    <div class="back">

    </div>
</body>
</html>
