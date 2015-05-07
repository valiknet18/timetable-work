@extends('app')

@section('content')
    <div>
        <h3></h3>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Прізвище</th>
                    <th>Ім’я</th>
                    <th>По-батькові</th>
                    <th>Номер телефону</th>
                    <th>Предмети які викладає</th>
                    <th>Посилання</th>
                </tr>
            </thead>

            @foreach($teachers as $teacher)
                <tr>
                    <td>
                        {{$teacher->teacher_surname}}
                    </td>

                    <td>
                        {{$teacher->teacher_name}}
                    </td>

                    <td>
                        {{$teacher->teacher_last_name}}
                    </td>

                    <td>
                        {{$teacher->teacher_phone}}
                    </td>

                    <td>
                        Предмет1, Предмет2
                    </td>

                    <td>
                        link
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection