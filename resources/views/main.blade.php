<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BCC</title>
    <link rel="stylesheet" href="/public/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="/public/js/moment-with-locales.min.js"></script>
    <script src="/public/js/bootstrap-datetimepicker.min.js"></script>


</head>
<body>
    <nav class="navbar bg-body-tertiary py-0">
        <div class="container-fluid">
            <img class="logo" src="/public/images/logotype.svg" alt="Logo" class="d-inline-block align-text-top">
        </div>
    </nav>
    <main class="">
        <div class="blockquote text-center">
            <b>
                Заполните форму и забронируйте очередь
                <br>
                не выходя из дома
            </b>
        </div>
    </main>
    <form action="{{route('form')}}" method="post">
        @csrf
            <div class="container">
                <div class="row">
                    <div class="col-4 offset-4">
                        <div class="input-group input-group-lg ">
                            <span class="input-group-text" id="inputGroup-sizing-lg">ИИН</span>
                            <input type="int" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                        </div>  
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 offset-4 mt-4">
                        <div class="input-group input-group-lg ">
                            <span class="input-group-text" id="inputGroup-sizing-lg">Телефон</span>
                            <input type="int" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                        </div>  
                    </div>
                </div>
                <select class="form-select-lg col-4 offset-4 mt-4" aria-label="Large select example">
                    <option selected>Выберите операцию</option>
                    <option value="1">Открытие депозита</option>
                    <option value="2">Закрытие депозита</option>
                    <option value="3">Оформление нового кредита</option>
                    <option value="3">Погашение кредита</option>
                    <option value="3">Консультация</option>
                </select>
                    <div class="row">
                        <div class="col-4 offset-4 mt-4">
                            <div class="input-group input-group-lg ">
                                <span class="input-group-text" id="inputGroup-sizing-lg">Выберите дату</span>
                                <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                                <input type="time" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                            </div>  
                        </div>
                    <button class="btn btn-success col-2 offset-5 mt-5">Забронировать</button>
                    </div>
            </div>
    </form>
       
</body>
</html>
