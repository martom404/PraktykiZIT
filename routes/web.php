<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home', [
        'name' => 'mt',
        'greeting' => 'Hello!'
    ]);
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Teacher',
                'salary' => '25.000$'
            ],
            [
                'id' => 2,
                'title' => 'Actor',
                'salary' => '15.000$'
            ],
            [
                'id' => 3,
                'title' => 'Programmer',
                'salary' => '55.000$'
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Teacher',
            'salary' => '25.000$'
        ],
        [
            'id' => 2,
            'title' => 'Actor',
            'salary' => '15.000$'
        ],
        [
            'id' => 3,
            'title' => 'Programmer',
            'salary' => '55.000$'
        ]
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view("contact");
});
