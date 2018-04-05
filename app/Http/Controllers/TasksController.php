<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequest;
use App\Models\Task;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::orderBy('created_at', 'ASC')->get();

        return view('tasks', compact('tasks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        $task = new Task;
        $task->name = $request->name;

        if ($task->save()) {
            return back()->with('success', trans('lang.success-create'));
        } else {
            return back()->with('error', trans('lang.error-create'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);

        if (!$task) {
            return back()->with('error', trans('lang.error-delete'));
        }

        if ($task->delete()) {
            return back()->with('success', trans('lang.success-delete'));
        } else {
            return back()->with('error', trans('lang.error-delete'));
        }
    }
}
