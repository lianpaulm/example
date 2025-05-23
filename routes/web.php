<?php
use Illuminate\Support\Facades\Route;
use App\Models\Job; 


Route::get('/', function () {
    return view('home');
});

Route::get('/jobs',  function () {
    $jobs = Job::with('employer')->latest()->paginate(3);
    return view('jobs.index', ['jobs'=> $jobs ]); 
});

Route::get('/jobs/create', function () {
    return view('jobs.create-job');
});

Route::get('/jobs/{id}', function ($id){
    $job = Job::find( $id );
    return view('jobs.show-job', ['job' => $job]);
});

Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required','min:3'],
        'salary' => ['required','numeric']
    ]);

    // Create a new job listing
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'), 
        'employer_id' => '1'
    ]);

    return redirect('/jobs');
});
 

Route::get('/contact', function () {
    return view('contact');
});
