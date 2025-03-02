<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job /*extends Model*/
{
    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (!$job) {
            abort(404);
        }

        return $job;
    }

    public static function all(): array
    {
        return [
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
        ];
    }
}
