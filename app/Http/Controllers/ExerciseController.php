<?php


namespace App\Http\Controllers;


use App\Exercise;

class ExerciseController extends Controller
{
    /**
     * Get the list of exercises
     * @return \Illuminate\Http\JsonResponse
     */
    public function index() {
        return response()->json(Exercise::all());
    }
}
