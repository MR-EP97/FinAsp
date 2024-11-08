<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body, html {
            width: 100%;
            height: 100%;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }


        body {
            background-image: url('{{asset('assets/img/finasp-high-resolution-logo-transparent.png')}}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
{{--<img src="{{asset('assets/img/finasp-high-resolution-logo-transparent.png')}}" alt="FinAsp"--}}
</body>
</html>


<script src="https://telegram.org/js/telegram-web-app.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {

        const telegramData = Telegram.WebApp.initData;

        fetch('{{route('auth-telegram')}}?' + (telegramData), {
            method: 'GET',
        }).then(response => {
                if (response.status === 200) {
                    setTimeout(function () {
                        window.location.href = "{{route('modify-balance')}}";
                    }, 1250);
                } else {
                    window.location.href = "{{route('error')}}";
                }
            }
        )
    });
</script>
