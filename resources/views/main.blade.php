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
<body class="bg-dark text-white">
    <nav class="navbar bg-body-tertiary py-0">
        <div class="container-fluid bg-dark border-bottom light">
            <img class="logo" src="/public/images/logotype.svg" alt="Logo" class="d-inline-block align-text-top">
        </div>
    </nav>
    <main class="mess mt-5 mb-5">
        <div class="blockquote text-center">
            <b>Заполните форму и забронируйте очередь<br>не выходя из дома</b>
        </div>
    </main>
    <form action="{{route('form')}}" method="post">
        @csrf
            <div>
                @if($errors->any())
                    <h3 style="color: red;">Есть ошибки заполнения формы:</h3>

                    <ul>
                        {{-- Перебор всех ошибок --}}
                        @foreach($errors->all() as $error)
                            {{-- Вывод текста ошибки --}}
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-4 offset-4">
                        <div class="input-group input-group-lg ">
                            <input type="int" name="iin" value="{{old('iin')}}" class="form-control" required placeholder="Введите ИИН">
                        </div>  
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 offset-4 mt-4">
                        <div class="input-group input-group-lg">
                            <input type="email" class="form-control" name="email"  value="{{old('email')}}" required placeholder="Введите свою почту">
                        </div>  
                    </div>
                </div>
                <select class="form-select-lg col-4 offset-4 mt-4" name="category" required aria-label="Large select example">
                    <option selected>Выберите операцию</option>
                    @foreach($services as $service)
                      <option value="{{$service->id}}" @selected($service->id == old("category"))>{{$service->name}}</option>
                    @endforeach
                </select>
                    <div class="row">
                        <div class="col-4 offset-4 mt-4">
                            <div class="input-group input-group-lg ">
                                <span class="input-group-text" id="inputGroup-sizing-lg">Выберите дату</span>
                                <input type="date" name="date" value="{{old('date')}}" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                                <input type="time" name="time" value="{{old('time')}}" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                            </div>  
                        </div>
                    <button class="btn btn-success col-2 offset-5 mt-5">Забронировать</button>
                    </div>
            </div>
            <div class="notification">
                <p>
            Уважаемые клиенты! Если Вы не смогли забронировать подходящее для Вас время, 
            Вы можете посетить отделение банка без онлайн-бронирования очереди. В случае бронирования, 
            Вам необходимо: <br>
            - Прибыть за 15 минут до наступления забронированного времени;<br>
            - Иметь при себе оригинал документа, удостоверяющего личность;<br>
            При бронировании вам определяется время допуска в здание Банка;<br>
            В случае задержки, связанной с обслуживанием предыдущего клиента,<br>
            время начала вашего обслуживания может быть смещено.
                </p>
            </div>
    </form>
       
</body>
</html>
