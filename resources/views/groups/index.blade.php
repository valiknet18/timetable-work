@extends('app')

@section('content')
    <div>
        <table>
            <tr>
                <td>Назва групи</td>
                <td>Курс</td>
                <td>Кількість людей</td>
            </tr>

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