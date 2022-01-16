@extends ('layout')
@section ('content')

<div class="d-flex flex-row justify-content-between">
    <div>
        <h2>Валюты</h2>
    </div>
</div>

<div class="d-flex flex-column bd-highlight mb-3 align-items-center">
    <table class="table table-bordered">
        <thead style="background-color: #064635; color:aliceblue">
            <tr>
                <th scope="col">Код</th>
                <th scope="col">Наименование</th>
                <th scope="col">Курс</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data => $value)
            <tr>
                <th scope="row p-3" style='vertical-align: middle;'>{{ $value['NumCode'] }}</th>
                <td class="p-3">{{ $value['Name'] }}</td>
                <td class="p-3">{{ $value['Value'] }}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>



@endsection

@section ('title')
<title>Валюты</title>
@endsection