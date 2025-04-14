<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class Job {
    public static function all():array {
        return [
            [
                'id'=> '1',
                'title'=> 'Director',
                'salary'=> 'P80,000'
            ],
            [
                'id'=> '2',
                'title'=> 'Programmer',
                'salary'=> 'P30,000'
            ],
            [
                'id'=> '3',
                'title'=> 'Teacher',
                'salary'=> 'P40,000'
            ]
        ];
    }
} 


Route::get('/', function () {
    return view('home');
});

Route::get('/jobs',  function () {
    return view('jobs', ['jobs'=> Job::all() ]);
});

Route::get('/jobs/{id}', function ($id){
    $job = Arr::first(Job::all(), fn($job) => $job['id'] == $id );
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});