@extends('layouts.app')

@section('content')
<div class="">
    <dashboard-component :user="{{$user}}"></dashboard-component>
</div>
@endsection
