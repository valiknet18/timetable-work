@extends('admin.admin')

@section('content')
    <div>
        <h3>Список аудиторій</h3>

        <div>
            <a href="{{action('Admin\AuditoriesController@create')}}">Додати аудиторію</a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Номер аудиторії</th>
                    <th>Тип аудиторії</th>
                </tr>
            </thead>

            @foreach($auditories as $auditory)
                <tr>
                    <td><a href='{{action('Admin\AuditoriesController@show', ['auditory_number' => $auditory->auditory_number])}}'>{{$auditory->auditory_number}}</a></td>
                    <td>{{$auditory->auditory_type}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection