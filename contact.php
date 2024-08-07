<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $access_key = "SET_YOUR_KEY";
    $data = array(
        "access_key" => $access_key,
        "name" => $_POST['name'],
        "surname" => $_POST['surname'],
        "email" => $_POST['email'],
        "phone" => $_POST['phone'],
        "message" => $_POST['message']
    );

    $ch = curl_init('https://api.web3forms.com/submit');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

    $response = curl_exec($ch);
    curl_close($ch);

    echo $response;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link rel="shortcut icon" href="img\logo.ico" type="image/x-icon" />
    <title data-en="Team 9438 | Contact Form" data-tr="Team 9438 | İletişim Formu"></title>
    <style>
        @font-face {
            font-family: inter;
            src: url(fonts/Inter-VariableFont_slnt,wght.ttf);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: rgb(0, 0, 0);
            font-family: inter, sans-serif;
            text-decoration: none;
        }

        body::-webkit-scrollbar {
            display: none;
        }

        svg {
            width: 160px;
            display: block;
            margin: 100px auto 0;
        }

        .path {
            stroke-dasharray: 1000;
            stroke-dashoffset: 0;
        }

        .path.circle {
            -webkit-animation: dash .9s ease-in-out;
            animation: dash .9s ease-in-out;
        }

        .path.check {
            stroke-dashoffset: -100;
            -webkit-animation: dash-check .9s .35s ease-in-out forwards;
            animation: dash-check .9s .35s ease-in-out forwards;
        }

        p {
            text-align: center;
            margin: 20px 0 0px;
            font-size: 1.25em;
        }

        p.success {
            font-family: inter;
            font-size: x-large;
            font-weight: 800;
            color: #73AF55;
        }

        p.success-content {
            font-family: inter;
            font-size: medium;
            font-weight: 400;
            color: rgb(230, 230, 230);
            margin-bottom: 40px;
        }

        .succes-home a {
            font-family: inter;
            font-size: medium;
            font-weight: 600;
            color: rgb(250, 250, 250);
            text-decoration: underline;
        }

        .succes-home a:hover {
            text-decoration: underline;
            color: rgb(200, 200, 200);
        }

        @-webkit-keyframes dash {
            0% {
                stroke-dashoffset: 1000;
            }

            100% {
                stroke-dashoffset: 0;
            }
        }

        @keyframes dash {
            0% {
                stroke-dashoffset: 1000;
            }

            100% {
                stroke-dashoffset: 0;
            }
        }

        @-webkit-keyframes dash-check {
            0% {
                stroke-dashoffset: -100;
            }

            100% {
                stroke-dashoffset: 900;
            }
        }

        @keyframes dash-check {
            0% {
                stroke-dashoffset: -100;
            }

            100% {
                stroke-dashoffset: 900;
            }
        }
    </style>
</head>

<body>
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
        <circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1" />
        <polyline class="path check" fill="none" stroke="#73AF55" stroke-width="10" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 " />
    </svg>
    <p class="success" data-en="Contact Form Submitted Successfully!" data-tr="İleitşim Formu Başarıyla Gönderilldi!"></p>
    <p class="success-content" data-en="We will get back to you as soon as possible. Thank you for your support." data-tr="En kısa sürede sizlere geri dönüş yapacağız. Bizi desteklediğiniz için teşekkür ederiz."></p>
    <div class="succes-home">
        <p><a href="/" data-en="Return to Home" data-tr="Ana Sayfaya Dön"></a></p>
    </div>

    <script>
        function setLanguage(language) {
            document.querySelectorAll('[data-en]').forEach(element => {
                element.textContent = element.getAttribute('data-' + language);
            });
        }
        document.addEventListener('DOMContentLoaded', () => {
            const userLang = navigator.language || navigator.userLanguage;
            const language = userLang.startsWith('tr') ? 'tr' : 'en';
            setLanguage(language);
            setContent(language);
        });
    </script>
</body>

</html>