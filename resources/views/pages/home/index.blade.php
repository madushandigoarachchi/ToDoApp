@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="page-title">My ToDo List</h1>
            </div>
        </div>
    </div>
@endsection
@push('css')
<style>
.page-title{
    color: #b91a1a;
    padding-top: 23vh;
    font-size:4rem;
}
</style>
@endpush