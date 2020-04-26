<?php

use App\Exercise;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exercises = [
            'BENT OVER HIGH ROWS', 'LOW PULL APARTS', 'BENT OVER LOW ROWS', 'ARCHER PULLS',
            'PUSH-UP w/ BAND', 'REVERSE GRIP FLYE', 'WRAPAROUND MOST MUSCULAR', 'WRAPAROUND PRESS', 'REVERSE CRUNCHES',
            'STANDING BICEPS CURLS', 'SINGLE-ARM CONCENTRATION CURLS', 'SINGLE-ARM OVERHEAD EXTENSIONS', 'SINGLE-ARM KICKBACKS',
            'STANDING SINGLE-ARM PRESS', 'SINGLE-ARM LATERAL RAISE', 'HIGH PULL APARTS', 'FRONT RAISES',
            'OVERHEAD SQUAT', 'SINGLE LEG SQUAT', 'STIFF LEG DEADLIFT', 'SINGLE LEG CALF RAISE'
        ];

        foreach ($exercises as $exercise) {
            Exercise::create(['name' => $exercise]);
        }
    }
}
