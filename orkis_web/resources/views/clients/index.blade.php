@extends ('layout')
@section ('content')

<div class="d-flex flex-row justify-content-between">
    <div>
        <h1>Клиенты</h1>
    </div>
    <div class="d-flex justify-content-end" style="align-self: center;"><a href="clients/create" class="btn btn-warning mb-">Добавить нового клиента</a></div>
</div>

<div class="d-flex flex-column bd-highlight mb-3 align-items-center">
    @if (count($clients) > 0)
    @foreach ($clients as $client)
    <div class="d-flex flex-row justify-content-between bd-highlight mb-3 card input-group" style="width: 100rem; padding: 2rem; margin: 3rem">
        <div class="p-2 bd-highlight" style="align-self:center">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">Имя</span>
            </div>
            <p>{{ $client->name }}</p>

            <div class="input-group-prepend">
                <span class="input-group-text" id="">Фамилия</span>
            </div>
            <p>{{ $client->surname }}</p>
            <div class="input-group-prepend">
                <span class="input-group-text" id="">Отчество</span>
            </div>
            <p>{{ $client->patronymic }} </p>
            <div class="input-group-prepend">
                <span class="input-group-text" id="">Дата рождения</span>
            </div>
            <p>{{ $client->bth }} </p>
            <div class="input-group-prepend">
                <span class="input-group-text" id="">Серия паспорта</span>
            </div>
            <p>{{ $client->series_passport}} </p>
            <div class="input-group-prepend">
                <span class="input-group-text" id="">Серия номер</span>
            </div>
            <p>{{$client->number_passport }} </p>
        </div>
        <div class="p-2 bd-highlight" style="align-self:center">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">Дата выдачи</span>
            </div>
            <p>{{$client->date_of_issue }} </p>
            <div class="input-group-prepend">
                <span class="input-group-text" id="">Срок окончания действия </span>
            </div>
            <p>{{$client->expiration_date }} </p>
            <div class="input-group-prepend">
                <span class="input-group-text" id="">Орган выдавший документ</span>
            </div>
            <p>{{$client->government_agency }} </p>
            <div class="input-group-prepend">
                <span class="input-group-text" id="">Место рождения</span>
            </div>
            <p>{{$client->place_of_birth }} </p>
            <div class="input-group-prepend">
                <span class="input-group-text" id="">Пол</span>
            </div>
            <p>{{$client->type_sex }} </p>
            <div class="input-group-prepend">
                <span class="input-group-text" id="">Статус</span>
            </div>
            <p>{{$client->type_client }}</p>
        </div>
        <div class="p-2 bd-highlight d-flex  align-items-end">
            <div>
                <a class="btn btn-warning" href="{{ route('clients.edit', $client->id) }}">Изменить</a>
            </div>
            <div>
                <form action="{{ route('clients.destroy',$client->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger ms-2">Удалить</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
    @else
    <p>Записей не найдено...</p>
    @endif
</div>
@endsection

@section ('form')
<form class="d-flex" method="get" action="/clients/filter">
    <select id="typeClient" name='filter' class="form-select" aria-label="Default select example" required>
        <option disabled>Фильтр</option>
        <option value="1">VIP</option>
        <option value="2">Привилегированный</option>
        <option value="3">Обычный</option>
    </select>
    <button type='submit' class="btn btn-warning" style="margin-left:10px; margin-right:20px;">Фильтровать</button>
</form>
<form class="d-flex" method="get" action="/clients/search">
    <input class="form-control me-2" type="text" id="search" name="text" placeholder="Поиск" aria-label="Search">
    <button type='submit' class="btn btn-warning">Искать</button>
</form>
@endsection

@section ('title')
<title>Клиенты</title>
@endsection