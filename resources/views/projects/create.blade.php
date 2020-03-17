@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form</div>

                <div class="card-body">
                <form action="{{route('projects.store')}}" method="post">
                        @csrf
                    @include('projects.form')
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection