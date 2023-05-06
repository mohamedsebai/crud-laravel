<!-- to inherit layout page -->
@extends('layout')
<!-- page title -->
@section('title', 'edit computer')

<!-- define the page content in section content to read by Laravel -->
@section('content')
  <div class="max-w-7xl mx-auto p-6 lg:p-8">
      <div class="flex justify-center">
       EDIT PAGE
      </div>

      <div class="mt-16">
          <div class="grid" style="text-align: center">
            edit new computer
          </div>
          <div class="flex justify-center">
             <!-- ['computer' => $computer['id']] that is variable name as computer contain computer_id -->
            <form action="{{ route('computers.update',  $computer->id ) }}" method="POST" class="form bg-white">
              @csrf
              @method('PUT')
              <div>
              <input type="text" name="computer-name" class="text-lg border-1" value="{{ $computer['name'] }}">
              @error('computer-name')
                <div class="form-error">
                  {{$message}}
                </div>
              @enderror
             </div>

              <div>
              <input type="text" name="computer-origin" class="text-lg border-1" value="{{ $computer['origin'] }}">
                @error('computer-origin')
                  <div class="form-error">
                    {{$message}}
                  </div>
                @enderror
             </div>

              <div>
              <input type="text" name="computer-price" class="text-lg border-1" value="{{ $computer['price'] }}">
                @error('computer-price')
                  <div class="form-error">
                    {{$message}}
                  </div>
                @enderror
             </div>

             <div class="button-div">
               <button type="submit">Update</button>
             </div>

            </form>
          </div>
      </div>

  </div>
@endsection
