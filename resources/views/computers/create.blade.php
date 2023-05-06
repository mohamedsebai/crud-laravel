<!-- to inherit layout page -->
@extends('layout')
<!-- page title -->
@section('title', 'create computer')

<!-- define the page content in section content to read by Laravel -->
@section('content')
  <div class="max-w-7xl mx-auto p-6 lg:p-8">
      <div class="flex justify-center">
       CREATE PAGE
      </div>

      <div class="mt-16">
          <div class="grid" style="text-align: center">
            create new computer
          </div>
          <div class="flex justify-center">

            <form class="" action="{{ route('computers.store') }}" method="post" class="form bg-white">
              @csrf

              <div>
              <input type="text" name="computer-name" class="text-lg border-1" value="{{old('computer-name')}}">
              @error('computer-name')
                <div class="form-error">
                  {{$message}}
                </div>
              @enderror
             </div>

              <div>
              <input type="text" name="computer-origin" class="text-lg border-1" value="{{old('computer-origin')}}">
                @error('computer-origin')
                  <div class="form-error">
                    {{$message}}
                  </div>
                @enderror
             </div>

              <div>
              <input type="text" name="computer-price" class="text-lg border-1" value="{{old('computer-price')}}">
                @error('computer-price')
                  <div class="form-error">
                    {{$message}}
                  </div>
                @enderror
             </div>

             <div class="button-div">
               <button type="submit">create</button>
             </div>

            </form>
          </div>
      </div>

  </div>
@endsection
