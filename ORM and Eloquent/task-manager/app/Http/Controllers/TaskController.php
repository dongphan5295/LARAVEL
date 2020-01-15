<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::all();
        return view('index',compact('tasks'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $task = new Task();
        $task->title = $request->input('title');
        $task->content = $request->input('content');
        $task->due_date = $request->input('due_date');

        if($request->hasFile('image')){
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $task->image = $path;
        }

        $task->save();

        Session::flash('success', 'Tạo mới thành công');

        return redirect()->route('tasks.index');
    }



    public function edit($id) {
        $task = Task::findOrFail($id);

        return view('edit', compact('task'));
    }

    public function update(Request $request ,$id)
    {
        $task = Task::findOrFail($id);
        $task->title = $request->input('title');
        $task->content = $request->input('content');
        $task->due_date = $request->input('due_date');

        //Update image

        if($request->hasFile('image')) {

            //Xoa anh cu neu co
            $currentImg = $task->image;
            if($currentImg) {
                Storage::delete('/public/'. $currentImg);
            }

            // cap nhat anh moi
            $image = $request->file('image');
            $path = $image->store('images' , 'public');
            $task->image = $path;
        }

        $task->save();

        $request->session()->flash('success', 'Update success');
        return redirect()->route('tasks.index');
    }

    public function destroy($id){
        $task = Task::findOrFail($id);
        $image = $task->image;

        //delete image
        if($image){
            Storage::delete('/public/' . $image);
        }

        $task->delete();

        Session::flash('success', 'Delete success');

        return redirect()->route('tasks.index');
    }


}
