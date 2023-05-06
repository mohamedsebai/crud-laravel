<!-- to inherit layout page -->
@extends('layout')


<!-- define the page content in section content to read by Laravel -->
@section('content')
  <div class="max-w-7xl mx-auto p-6 lg:p-8">
      <div class="flex justify-center">
       HOME PAGE
      </div>

      <div class="mt-16">
          <div class="grid">
            THIS IS HOME PAGE
          </div>
      </div>
  </div>
@endsection

<!-- page title -->
@section('title', 'home')
