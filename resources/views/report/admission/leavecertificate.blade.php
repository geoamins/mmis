<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        .main{
            display: flex;
        }
        .certificate {
            width: 11in;
            height: 8.5in;
            background-size: 11in 8.5in;
            background-image: url({{ asset('images/LeaveCertificate.png') }});
        }

        .first {
            width: 500px;
            display: inline-flex;
            justify-content: space-between;
            font-weight: bold;
            margin-top: 330px;
            margin-left: 230px;
        }

        .second {
            width: 500px;
            display: inline-flex;
            justify-content: space-between;
            font-weight: bold;
            margin-top: 35px;
            margin-left: 210px;
        }

        .btn{
            margin: 20px;
        }

        .btn button{
            width: 90px;
            height: 45px;
            border: none;
            background-color: green;
            color: white;
            font-weight: bold;
            border-radius: 3px;
        }

    </style>
</head>

<body>
    <div class="main">
        <div class="certificate" id="certificate">
            <div class="first">
                <p>{{ $data->AdmissionDate }}</p>
                <p>{{ $data->DOSLC }}</p>
            </div>
            <div class="second">
                <p>{{ $data->StudentName }}</p>
                <p>{{ $data->FatherName }}</p>
            </div>
            <div class="third">

            </div>
        </div>
        <div class="btn">
            <button class="btn btn-primary" onclick="printDiv('certificate')">Print</button>
        </div>
    </div>
</body>
<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).outerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>

</html>
