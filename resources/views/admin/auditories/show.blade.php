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
            Аудиторія: {{ $auditory->auditory_number }}
        </div>

        <div>
            <h3>Події які будуть відбуваються в цій аудиторії</h3>
            <div>

            </div>
        </div>
    </div>
@endsection