<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job_listings';

    protected $fillable = ['title', 'salary'];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}

/*
use Illuminate\Support\Arr;

class Job
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
}*/
