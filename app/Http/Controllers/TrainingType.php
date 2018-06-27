<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainingType extends ResourceController
{
    public function __construct(\App\TrainingType $model)
    {
        $this->model = $model;
    }
}
