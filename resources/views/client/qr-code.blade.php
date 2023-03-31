@php
    use SimpleSoftwareIO\QrCode\Facades\QrCode;
@endphp
@extends('layouts.master')

@section('content')
    <div class="well">
        <fieldset>
            <h1 class="text-center mt-3">{!! $client->name !!}</h1>

            <!-- Name -->
            <div class="form-group">
                <div class=" text-center">
                    <h2>Scan Me</h2>
                    {!! QrCode::format('svg')->size(200)->generate(route('client.show',['name' => $client->name])); !!}
                </div>
            </div>
        </fieldset>
    </div>
@endsection
