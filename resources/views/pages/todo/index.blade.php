@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Home Page</h1>
            </div>
        </div>
        
        <div class="row">
            <form action="{{ route('todo.store') }}" method="post">
                @csrf
                    <div class="col-12 ">
                        <div class="form-group">
                             <input class="form-control" type="text" placeholder="Enter A Task.."  name="title">
                         </div>
                    </div>
                <div class="col-12 text-center">
                    <div class="form-group">
                     <button type="submit" class="btn btn-primary m-3">SAVE</button>
                    </div>
                </div>
            </form>
         </div>
         <div class="col-lg-12">
             <div>
             <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Complete</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($tasks as $key=>$task)
    <tr>
      <th scope="row">{{ $key++ }}</th>
      <td>{{$task->title}}</td>
      <td>@if($task->done==0)
          <span class="badge bg-danger">Not Completed.</span>
          @else
          <span class="badge bg-success">Completed.</span>
          @endif
      </td>
      <td>
          <a href="{{ route('todo.delete',$task->id) }}" class="btn btn-danger p-1">Delete</a>
          <a href="{{ route('todo.done',$task->id) }}" class="btn btn-warning p-1">Done</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
             </div>
         </div>
    </div>
@endsection
@push('css')
<style>
.page-title{
    color: #046287;
    padding-top: 8vh;
    font-size: 3rem;
}
</style>
@endpush