@php
    use SimpleSoftwareIO\QrCode\Facades\QrCode;
@endphp
@extends('layouts.master')

@section('content')
    <div class="well">
        <fieldset>
            <h3 class="text-center mt-3">Hello, my name is {!! $client->name !!}</h3>
            <h1 class="text-center mt-3">My History</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ullamcorper sollicitudin ante vel pulvinar.
                Ut ultrices tortor erat, ut tincidunt odio dignissim eget. Nulla aliquam, felis ac finibus vulputate,
                velit elit varius purus, a viverra orci ligula eu mi. Phasellus efficitur, enim eu dapibus aliquet, dui
                metus hendrerit leo, sit amet pharetra est tortor in nisi. Quisque pulvinar ex erat, eget lacinia lorem
                venenatis fringilla. Vivamus arcu velit, ultrices at augue eu, posuere tempor erat. Aenean semper et
                nibh a pharetra. Sed eu lacinia velit. Suspendisse in finibus magna. Sed sed euismod eros, egestas
                vestibulum lacus. Fusce ultrices viverra tellus, vel imperdiet tellus scelerisque eget. Nunc tempor sem
                sed suscipit condimentum. Vestibulum et lectus leo. Nullam mattis elit id aliquet vehicula. Ut eleifend
                nisl id lorem varius gravida. Vestibulum luctus odio dui, ac facilisis metus ornare sit amet. </p>
            <!-- Name -->
            <div class="form-group">
                <div class="form-group">
                    <div class="text-center">
                        <a class="btn btn-lg btn-primary" target="_blank" href="{{$client->github}}">Github</a>
                        <a class="btn btn-lg btn-primary" target="_blank" href="{{$client->linkedin}}">Linkedin</a>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
@endsection
