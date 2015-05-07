@extends('app')

@section('content')
    <div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Назва групи</th>
                    <th>Курс</th>
                    <th>Кількість людей</th>
                </tr>
            </thead>

            @foreach($groups as $group)
                <tr>
                    <td>{{ $group->group_name }}</td>
                    <td>{{ $group->group_course }}</td>
                    <td>{{ $group->group_students_count }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection