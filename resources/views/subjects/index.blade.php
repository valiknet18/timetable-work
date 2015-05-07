@extends('app')

@section('content')
    <div>
        <h3></h3>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Назва предмета</th>
                    <th>Викладачі</th>
                </tr>
            </thead>

            @foreach($subjects as $subject)
                <tr>
                    <td>{{$subject->subject_name}}</td>
                    <td>Викладач 1, Викладач 2</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection