<!-- to inherit layout page -->
@extends('layout')


<!-- define the page content in section content to read by Laravel -->
@section('content')
  <div class="max-w-7xl mx-auto p-6 lg:p-8">
      <div class="flex justify-center">
       SHOW INFORMATION
      </div>

      <div class="mt-16">
          <div class="grid">
            {{ $computer['id'] }} =>  {{ $computer['name'] }} => {{ $computer['origin'] }} => {{ $computer['price'] }}
          </div>
          <div class="button-div">
             <!-- anthor way to send id {{route('computers.edit', ['computer' => $computer['id']] ) }} -->
            <a class="btn" href="{{route('computers.edit', $computer->id ) }}">edit</a>

            <!-- to delete something it most be form with mehtod delete from Laravel not get request  -->
            <form action="{{route('computers.destroy', $computer->id ) }}" method="post">
              @csrf
              @method('delete')
              <input type="submit" name="delete" value="delete" class="btn">
            </form>
          </div>

      </div>

  </div>
@endsection

<!-- page title -->
@section('title', 'show')
