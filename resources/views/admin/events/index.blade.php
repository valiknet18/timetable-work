@extends('admin.admin')

@section('content')
    <div>
        <h3>
            <span>Розклад зайнять на 06.05.2015</span>
            @if (date('d.m.Y') < '06.05.2015')
                <a href="">Назад</a>
            @endif

            <a href="">Вперед</a>
        </h3>

        <div>
            <a href="">Додати подію</a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Дата початку</th>
                    <th>Дата кінця</th>
                    <th>Аудиторія</th>
                    <th>Група(и)</th>
                    <th>Предмет</th>
                    <th>Викладач</th>
                    <th>Тип</th>
                </tr>
            </thead>
            <tr>
                <td>08:00</td>
                <td>09:30</td>
                <td>130</td>
                <td>КЕ-12</td>
                <td>Операційні системи</td>
                <td>Авраменко В. С.</td>
                <td>Лабораторна робота</td>
            </tr>
            <tr>
                <td>10:00</td>
                <td>11:30</td>
                <td>127</td>
                <td>КЕ-12</td>
                <td>Організація БД</td>
                <td>Яриніч Ю. О.</td>
                <td>Лабораторна робота</td>
            </tr>
        </table>
    </div>
@endsection