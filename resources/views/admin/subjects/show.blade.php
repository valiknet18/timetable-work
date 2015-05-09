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
            Предмет: {{ $subject->subject_name }}
        </div>

        <div>
            <h3>Викладачі:</h3>
            <div>

            </div>
        </div>

        <div>
            <h3>Події які будуть відбуваються з цією групою</h3>
            <div>

            </div>
        </div>
    </div>
@endsection