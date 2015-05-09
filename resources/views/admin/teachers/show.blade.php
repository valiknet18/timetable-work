@extends('admin.admin')

@section('content')
    <div>
        <div>
            <ul>
                <li>Редагувати</li>
                <li>Видалити</li>
            </ul>
        </div>

        <div>
            Викладач: {{ $teacher->teacher_surname }} {{ $teacher->teacher_name }} {{ $teacher->teacher_last_name }}
        </div>

        <div>
            Номер телефону: {{$teacher->teacher_phone}}
        </div>

        <div>
        </div>
    </div>
@endsection