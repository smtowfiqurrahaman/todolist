<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
   public function index()
   {
   	$todos = Todo::all();
   	return view('todos.index',compact('todos'));
   }
   //Create
   public function create(){
   	return view('todos.create');
   }
   //Store
   public function store(Request $request)
   {
   	  $this->validate($request,[
   	  	'name' => 'required|min:3|max:20', //name= Frrm name
   	  	'Discription' => 'required'
   	  ]);

   	  $todo = new Todo();

   	  $todo->Name = $request->name;
   	  $todo->Discription = $request->Discription;
   	  $todo->completed = false;

   	  $todo->save();
   	  return redirect('/todoapp');
   }
   //Show Function

   public function show($id)
   {
   	$todo = Todo::find($id);
   	return view('todos.show', compact('todo'));
   }
   //Edit

  	public function edit($id)
  	{
  		$todo = Todo::find($id);
  		return view('todos.edit', compact('todo'));
  	}
  	//updateEEEEEEE
  	public function update(Request $request, $id)
   {
   	  $this->validate($request,[
   	  	'name' => 'required|min:3|max:20', //name= Frrm name
   	  	'Discription' => 'required'
   	  ]);

   	  $todo =Todo::find($id);

   	  $todo->Name = $request->name;
   	  $todo->Discription = $request->Discription;
   	  $todo->completed = false;

   	  $todo->save();
   	  return redirect('/todoapp');
   }

   //update
   public function destroy($id)
   {
   	$todo = Todo::find($id);
   	$todo->delete();
   	return redirect('/todoapp');
   }


}

