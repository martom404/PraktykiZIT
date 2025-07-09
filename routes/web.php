<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home',
    [
        'name' => 'mt',
        'greeting' => 'Hello!'
    ]);

});

Route::prefix('jobs')->group(function () {
    //Index
    Route::get('/', function () {
        $jobs = Job::with('employer')->latest()->paginate(4);

        return view('jobs.index',
        [
            'jobs' => $jobs
        ]);
    })->name('index');

    //Create
    Route::get('/create', function () {
        return view('jobs.create');
    });

    //Show
    Route::get('/{id}', function ($id) {
        $job = Job::find($id);

        return view('jobs.show', ['job' => $job]);
    });

    //Store
    Route::post('/', function () {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1
        ]);

        return redirect('/jobs');
        //return redirect()->route('index');
    });

    //Edit
    Route::get('/{id}/edit', function($id) {
        $job = Job::find($id);

        return view('jobs.edit', ['job' => $job]);
    });

    //Update
    Route::patch('/{id}', function($id) {

        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        $job = Job::findOrFail($id);

        $job->update([
            'title'=> request('title'),
            'salary'=> request('salary'),
        ]);

        return redirect('/jobs/'. $job->id);
    });

    //Delete
    Route::delete('/{id}', function($id) {
        Job::findOrFail($id)->delete();

        return redirect('/jobs');
    });
});

Route::get('/contact', function () {
    return view("contact");
});


