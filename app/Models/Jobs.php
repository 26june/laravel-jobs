<?php

namespace App\Models;

class Jobs
{
    public static function all()
    {
        return [
            [
                "id" => 1,
                "title" => "Job One",
                "Description" => "This is a description for Job One"
            ],
            [
                "id" => 2,
                "title" => "Job Two",
                "Description" => "This is a description for Job Two"
            ],
            [
                "id" => 3,
                "title" => "Job Three",
                "Description" => "This is a description for Job Three"
            ],
        ];
    }

    public static function find($id)
    {
        $jobs = self::all();

        foreach ($jobs as $job) {
            if ($job["id"] == $id) {
                return $job;
            }
        }
    }
}
