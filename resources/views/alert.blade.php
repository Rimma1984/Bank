<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alert</title>
    <link rel="stylesheet" href="/public/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="/public/js/moment-with-locales.min.js"></script>
    <script src="/public/js/bootstrap-datetimepicker.min.js"></script>

</head>
<body class="bg-dark text-white">
    <nav class="navbar bg-body-tertiary py-0">
        <div class="container-fluid bg-dark border-bottom light">
            <img class="logo" src="/public/images/logotype.svg" alt="Logo" class="d-inline-block align-text-top">
            <a href="/" style="text-decoration: none; color: white;"><b>Вернуться к бронированию</b></a>
        </div>
    </nav>
    <div>
        <p>
            Вы успешно записаны на: {{$date}} {{$time}}
        </p>
    </div>
</body>
</html>