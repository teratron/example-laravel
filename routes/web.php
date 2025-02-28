<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('home', [
        'greeting' => 'Hello, World!',
        'name' => 'Larry Robot',
    ]);
});

Route::get('jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50000',
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$30000',
            ],
            [
                'id' => 3,
                'title' => 'Intern',
                'salary' => '$10000',
            ],
        ]
    ]);
});

Route::get('jobs/{id}', function ($id) {
    $jobs = [
        1 => [
            'id' => 1,
            'title' => 'Director',
            'salary' => '$50000',
        ],
        2 => [
            'id' => 2,
            'title' => 'Programmer',
            'salary' => '$30000',
        ],
        3 => [
            'id' => 3,
            'title' => 'Intern',
            'salary' => '$10000',
        ],
    ];

//    Arr::first($jobs, function ($job) use ($id) {
//        return $job['id'] == $id;
//    });

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    return view('job', ['job' => $job]);
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('test', function () {
    return ['foo' => 'bar'];
});
