<!-- to inherit layout page -->
@extends('layout')


<!-- define the page content in section content to read by Laravel -->
@section('content')
  <div class="max-w-7xl mx-auto p-6 lg:p-8">
      <div class="flex justify-center">
       COMPUTERS
      </div>

      <div class="mt-16">
          <div class="grid">
            THIS IS COMPUTER PAGE
             <!-- best way -->
             <h1>{{' ***** Laravel code ******'}}</h1>
            @if ( isset($computers) )
            <ul>
              @foreach ($computers as $computer)
                 <li style="margin: 10px;">
                   <a href="{{route('computers.show', ['computer' => $computer['id']]) }}" style="background: red; padding: 5px;">
                      <!-- we can use this way as array not object {{$computer['price']}}  -->
                         {{$computer->id}} => {{$computer->name}} => {{$computer->origin}} => {{$computer->price}}
                        <!-- array way anthor way to send id {{route('computers.edit', ['computer' => $computer['id']] ) }} -->
                       <a class="btn" href="{{route('computers.edit', $computer->id ) }}">edit</a>

                         <!-- to delete something we need to use form -->
                         <form action="{{route('computers.destroy', $computer->id ) }}" method="post">
                           @csrf
                           @method('delete')
                           <input type="submit" name="delete" value="delete" class="btn">
                         </form>
                   </a>
                 </li>
               @endforeach
            </ul>
            @else
            {{ 'There is no data' }}
            @endif
            <?php

               // anthor way but it's not logic in Laravel
               echo '<br><br><br><br>' . " ***** PHP native code ***** ";
              if(isset($computers)){
                foreach($computers as $computer){
                  echo "<h1>" . $computer['id'] . "=>"  . $computer['name'] . "=>" . $computer['origin'] . "</h1>";
                }
              }else{
                echo 'There is no data';
              }
            ?>

          </div>
      </div>

  </div>
@endsection

<!-- page title -->
@section('title', 'computer')
