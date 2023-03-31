@extends('layouts.master')

@section('content')

    <div class="well">

        {!!Form::open(['url' => route('client.store'), 'class' => 'form-horizontal']) !!}

        <fieldset>

            <legend>Qr-Code generator</legend>

            <!-- Name -->
            <div class="form-group">
                {!! Form::label('name', 'Name:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::text('name',  null, ['class' => 'form-control', 'placeholder' => 'name']) !!}
                </div>
            </div>
            <!-- Linkedin URL -->
            <div class="form-group">
                {!! Form::label('linkedin', 'Linkedin:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::text('linkedin',$value = null,['class' => 'form-control', 'placeholder' => 'linkedin']) !!}
                </div>
            </div>
            <!-- github URL -->
            <div class="form-group">
                {!! Form::label('github', 'Github:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::text('github', null, ['class' => 'form-control', 'placeholder' => 'github']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    {!! Form::submit('Generate', ['class' => 'btn btn-lg btn-info pull-left'] ) !!}
                </div>
            </div>

        </fieldset>

        {!! Form::close()  !!}

    </div>
@endsection
