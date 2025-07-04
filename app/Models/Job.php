<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
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
    }

    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (!$job) {
            abort(404);
        }

        return $job;
    }
}
