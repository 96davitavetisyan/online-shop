@extends('site.app1')
@section('title')
@section('content')
    <div style="margin-top: 120px">
    </div>
    <product></product>
@stop

@push('scripts')
    <script src="{{ mix('backend/js/app.js') }}"></script>
@endpush
