<?php

namespace App\Models;

class Job {
  public static function all(): array {
    return [
      ['id' => 1, 'title' => 'Software Developer', 'description' => 'Develop high-quality software applications.'],
      ['id' => 2, 'title' => 'Frontend Developer', 'description' => 'Build responsive and user-friendly web applications.'],
      ['id' => 3, 'title' => 'Backend Developer', 'description' => 'Design and implement backend systems for web applications.'],
      ['id' => 4, 'title' => 'Full Stack Developer', 'description' => 'Develop web applications using both frontend and backend technologies.'],
    ];
  }
}
