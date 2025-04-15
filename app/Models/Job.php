<?php

namespace App\Models;
use Illuminate\Support\Arr;

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

    public static function find(int $id) :array {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id );
        
        if (! $job) {
            abort(404);
        } else {
            return $job;
        }
    }
} 



