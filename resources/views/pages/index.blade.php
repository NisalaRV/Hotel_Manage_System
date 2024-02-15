<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel crud</title>
  </head>
  <body>

    <div class="contaner">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2 class="my-5 text-center">Laravel 10 crud</h2>

                @if (session()->has('message'))
               <div class="alert alert-danger alert-dismissible fade show" role="alert">
               <strong>Deleted task!!</strong> You should check in on some of those fields below.
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
               @endif

                <a href="" class="btn btn-success my-3" data-bs-toggle="modal" data-bs-target="#addModal">Add Task</a>

                <table class="table">

                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tasks</th>
                        <th scope="col">stutas</th>
                        <th scope="col">Acton</th>

                      </tr>
                    </thead>
                    @foreach ($task as $key=> $task)
                    <tbody>
                      <tr>
                        <th >{{++$key}}</th>
                        <td>{{$task->name}}</td>
                        <td>

                            <a href="{{Route('task.update',$task->id)}}"  class="btn btn-success "><i class="las la-edit"></i></a>




                            <a href="{{Route('task.delete',$task->id)}}" class="btn btn-danger"><i class="las la-trash"></i></a>
                        </td>
                      </tr>

                    </tbody>

                    @endforeach
                </table>
            </div>
        </div>
    </div>

  @include('pages.addTask')


</body>
</html>
