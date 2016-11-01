<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index()
    {
    	$tasks = Task::all();

        
    }

    public function show()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {
    	
    }
}
