@extends('layouts.courseplus.horizontal')

@section('content')
    <courses-page :model="{{ $model }}"></courses-page>
@endsection