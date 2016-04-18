@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    @if(auth()->guest())
                    Your Application's Landing Page.
                    @else
                    {{ auth()->user()->name }} &#160;<a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
