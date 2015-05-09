@extends('admin.admin')

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
                    <td><a href="{{action('Admin\GroupsController@show', ['group_code' => $group->group_code])}}">{{ $group->group_name }}</a></td>
                    <td>{{ $group->group_course }}</td>
                    <td>{{ $group->group_students_count }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection