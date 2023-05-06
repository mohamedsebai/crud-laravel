<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// include model that will send and recive the data
use App\Models\Computer;


class ComputersController extends Controller
{
     // private static function getData(){
     //   return [
     //      ['id' => 1, 'name' => 'LG' , 'origin' => 'Koria', 'price' => 100],
     //      ['id' => 2, 'name' => 'HP' , 'origin' => 'USA', 'price' => 200],
     //      ['id' => 3, 'name' => 'Siemens' , 'origin' => 'Germany', 'price' => 300]
     //   ];
     // }

    public function index(){
        // foldername.filename
        return view('computers.index', $data = [
          // send variable to view contain data from getData function
          // 'computers' => self::getData(),
          // get all data from database;
          'computers' => Computer::all(),
        ]);
    }

    public function show(string $id){
      /*
         use self to get static method from same class
         we can use $computers = $this->getData(); if the method is not static
        $computers  = self::getData();

         ===>>> data comme from database as multidiminsion array and you can not search in it dirctly so you use that;
         ===>>> array_column($computers, 'id')  this get an array of column id (1,2,3)
         ===>>> array_search($id , $array_of_id)
         ===>>> the result is false or !false
         $id = array_search($id, array_column($computers, 'id'));

         // check if id is exist
         if($id === false){
           // get not found page
           abort(404);
         }else{
           return view('computers.show', [
             // send data by id
             'computer' => $computers[$id],
           ]);
        }
    */

      //Laravel give us find() method to get spacific value from database;
      //Laravel give us findOrFail() method to get spacific value from database or redirect to 404 page
         $id = Computer::findOrFail($id);
          return view('computers.show', [
            // send data by id
            'computer' => $id,
          ]);

    }

    public function create(){
      // only show form to create
      return view('computers.create');
    }
    public function store(Request $request){
      // create object from model;
      $computer = new Computer();


      $request->validate([
        'computer-name' => 'required',
        'computer-origin' => 'required',
        'computer-price' => ['required', 'integer'],
        //'computer-price' => 'require|integer',
      ]);


      $computer->name   = strip_tags($request->input('computer-name'));
      $computer->origin = strip_tags($request->input('computer-origin'));
      $computer->price  = strip_tags($request->input('computer-price'));

      // save data into database
      $computer->save();
      return redirect()->route('computers.index');
    }

    public function edit($id){
      $id = Computer::findOrFail($id);
      return view('computers.edit', [
        'computer' => $id,
      ]);
    }

    public function update(Request $request, $id){

      $request->validate([
        'computer-name'   => 'required',
        'computer-origin' => 'required',
        'computer-price'  => ['required', 'integer'],
        //'computer-price' => 'require|integer',
      ]);

      // create object from model;
      //$computer = new Computer();
      $computer_to_update = Computer::findOrFail($id);

      $computer_to_update->name   = strip_tags($request->input('computer-name'));
      $computer_to_update->origin = strip_tags($request->input('computer-origin'));
      $computer_to_update->price  = strip_tags($request->input('computer-price'));

      // save data into database by id
      $computer_to_update->save();
      return redirect()->route('computers.show', $id);

    }

    public function destroy($id){
      $computer_to_delete = Computer::findOrFail($id);
      $computer_to_delete->delete();
      return redirect()->route('computers.index');
    }






























}
