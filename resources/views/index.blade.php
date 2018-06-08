@extends('layouts.app')

@section('content')

    @isset($result)
        @component('components.result', ['message' => $result])

        @endcomponent
    @endisset

    @if($errors->any())
        @foreach ($errors->all() as $message)
            @component('components.alert', ['message' => $message])

            @endcomponent
        @endforeach
    @endif

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="tab-content">

                @include('main')

                @include('about')

            </div>
        </div>
    </div>

@endsection
