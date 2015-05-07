@extends('app')

@section('content')
    <div>
        <h3></h3>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Номер аудиторії</th>
                    <th>Тип аудиторії</th>
                </tr>
            </thead>

            @foreach($auditories as $auditory)
                <tr>
                    <td>{{$auditory->auditory_number}}</td>
                    <td>{{$auditory->auditory_type}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection