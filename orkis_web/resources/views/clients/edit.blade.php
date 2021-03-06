<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <title>Edit</title>
</head>

<body style="background-color:#96CEB4;">
    <div class='container p-4' style="margin-bottom: 100px;">
        <div class="row">
            <div class="d-flex flex-row justify-content-between bd-highlight col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Изменить клиента: {{ $client->id }}</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-warning" href="{{ route('clients.index') }}">Вернуться назад</a>
                </div>
            </div>
        </div>

        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('clients.update',$client->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">Имя</span>
                    </div>
                    <input type="text" name="name" value="{{ $client->name }}" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">Фамилия</span>
                    </div>
                    <input type="text" name="surname" value="{{ $client->surname }}" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">Отчество</span>
                    </div>
                    <input type="text" name="patronymic" value="{{ $client->patronymic }}" class="form-control">
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Дата рождения</span>
                </div>
                <input type="date" name="bth" value="{{ $client->bth }}" class="form-control">

            </div>
            <div class="input-group mb-3">

                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Серия паспорта</span>
                </div>
                <input type="text" name="series_passport" value="{{ $client->series_passport }}" class="form-control">

            </div>
            <div class="input-group mb-3">

                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Номер паспорта</span>
                </div>
                <input type="text" name="number_passport" value="{{ $client->number_passport }}" class="form-control">

            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Дата выдачи</span>
                </div>
                <input type="date" name="date_of_issue" value="{{ $client->date_of_issue }}" class="form-control">
            </div>
            <div class="input-group mb-3">

                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Срок окончания действия</span>
                </div>
                <input type="date" name="expiration_date" value="{{ $client->expiration_date }}" class="form-control">

            </div>
            <div class="input-group mb-3">

                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Орган выдавший документ</span>
                </div>
                <input type="text" name="government_agency" value="{{ $client->government_agency }}" class="form-control">

            </div>
            <div class="input-group mb-3">

                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Место рождения</span>
                </div>
                <input type="text" name="place_of_birth" value="{{ $client->place_of_birth }}" class="form-control">

            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Пол</span>
                </div>

                <select id="sex" name='type_sex' class="form-select" aria-label="Default select example" required>
                    <option <?php if ($client->type_sex == 'ж') echo ("selected"); ?> value="1">Женский</option>
                    <option <?php if ($client->type_sex == 'м') echo ("selected"); ?> value="2">Мужской</option>
                </select>

            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Статус</span>
                </div>
                <select id="typeClient" name='type_client' class="form-select" aria-label="Default select example" required>
                    <option <?php if ($client->type_client == 'VIP') echo ("selected"); ?> value="1">VIP</option>
                    <option <?php if ($client->type_client == 'Привилегированный') echo ("selected"); ?> value="2">Привилегированный</option>
                    <option <?php if ($client->type_client == 'Обычный')  echo ("selected"); ?> value="3">Обычный</option>
                </select>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-warning">Сохранить изменения</button>
            </div>
    </div>
    </form>
    </div>

</body>

</html>