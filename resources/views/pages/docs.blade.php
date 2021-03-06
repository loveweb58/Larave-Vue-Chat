<!DOCTYPE html>
<html lang="en">
<head>
    <title>TMMN Docs</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @import url(//fonts.googleapis.com/css?family=Roboto:300,400,700);
        @import url(//fonts.googleapis.com/css?family=Montserrat:400,700);

        body {
            margin: 0;
            padding: 0;
            font-family: Verdana, Geneva, sans-serif;
            font-size: 14px;
            color: #333;
        }

        redoc api-logo img {
            padding: 20px 30px 14px 30px;
        }

        .powered-by-badge {
            display: none !important;
        }
    </style>
</head>
<body>
<redoc spec-url="{{asset("js/swagger.yaml")}}" hide-hostname="true" lazy-rendering>
</redoc>
<script src="{{asset("js/redoc.min.js")}}"></script>
</body>
</html>
