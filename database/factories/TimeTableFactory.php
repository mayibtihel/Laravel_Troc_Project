<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TimeTable>
 */
class TimeTableFactory extends Factory
{

    public function generateRandomTime($starhour,$endhour) {
        // Generate a random hour between 0 and 23
        $hour = rand($starhour, $endhour);

        // Generate a random minute, either 0 or 30
        $minute = (rand(0, 1) == 0) ? 0 : 30;

        // Create a formatted time string
        $timeString = sprintf("%02d:%02d", $hour, $minute);

        // Convert the formatted time string to a time type
        $timeType = strtotime($timeString);

        // Return the generated time
        return date("H:i", $timeType);
    }
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
         $repetion=$this->faker->randomElement(["eachDay","eachMonday","eachTuesday","eachWednesday","eachThursday","eachFriday","eachSaturday","eachSunday","specificDate"]);
         if ($repetion == "specificDate")
            {
             $specificDate =$this->faker->dateTimeBetween('-1 month', '+60 days');
            }
             else
                 $specificDate=null;
        $shiftStart=$this->generateRandomTime(8,17);

        $shiftEnd=$this->generateRandomTime(date("H", strtotime($shiftStart))+5,19);
        return [
            'shiftStart' =>$shiftStart,
            'shiftEnd'=>$shiftEnd,
            'repetition'=>$repetion,

            'specificDate'=>$specificDate,
            'service_id'=> $this->faker->randomElement(Service::all()->pluck("id"))


        ];
    }
}
