@extends('admin.admin')

@section('content')
    <div>
        <div>
            {!! Form::open() !!}
                <div>
                    {!! Form::label('auditory_number', 'Номер аудиторії:') !!}
                    {!! Form::text('auditory_number') !!}
                </div>

                <div>
                    {!! Form::label('auditory_type', 'Тип аудиторії:') !!}
                    {!! Form::select('auditory_type', array(0 => 'Лабораторна', 1 => 'Лекційна')); !!}
                </div>

                <div>
                    {!! Form::submit('Зберегти') !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection