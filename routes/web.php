<?php

use Illuminate\Support\Facades\Route;

$jobs = [
  ['id' => 1, 'title' => 'Software Developer', 'description' => 'Develop high-quality software applications.'],
  ['id' => 2, 'title' => 'Frontend Developer', 'description' => 'Build responsive and user-friendly web applications.'],
  ['id' => 3, 'title' => 'Backend Developer', 'description' => 'Design and implement backend systems for web applications.'],
  ['id' => 4, 'title' => 'Full Stack Developer', 'description' => 'Develop web applications using both frontend and backend technologies.'],
];

Route::get('/', function () {
  return view('home',);
});

Route::get('/jobs', function () use ($jobs) {
  return view('jobs', [
    'jobs' => $jobs
  ]);
});

Route::get('/jobs/{id}', function ($id) use ($jobs) {

  $job = \Illuminate\Support\Arr::first($jobs, fn(  $job) => $job['id'] == $id);

  //dd($job);

  return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
  return view('contact');
});
