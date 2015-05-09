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
            Група: {{ $group->group_name }}
            Курс: {{ $group->group_course }}
            Кількість студентів: {{ $group->group_students_count }}
        </div>

        <div>
            <h3>Події які будуть відбуваються з цією групою</h3>
            <div>

            </div>
        </div>
    </div>
@endsection