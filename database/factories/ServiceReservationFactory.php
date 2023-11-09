<?php

namespace Database\Factories;

use App\Enums\repetitionTimeTableService;
use App\Models\CategoryService;
use App\Models\Service;
use App\Models\TimeTable;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServiceReservation>
 */
class ServiceReservationFactory extends Factory
{
    public function isFree($DateTime,$serviceid)
    {
        //$listOfReservation=TimeTable::where()
    }

    function getRandomDateTimeForDayWithin30Days($dayOfWeek, $startOfMonth, $startTime, $endTime,$specifiqueDate) {
        // Convert the start date to a DateTime object
        $startOfMonth = new DateTime($startOfMonth);

        // Calculate the end date by adding 30 days to the start date
        $endOfMonth = clone $startOfMonth;
        $endOfMonth->modify('+30 days');

        // Get the current month and year from the start date
        $month = $startOfMonth->format('n');  // Month without leading zeros
        $year = $startOfMonth->format('Y');

        // Generate a random time between start and end times
        $randomHour = mt_rand(intval(substr($startTime, 0, 2)), intval(substr($endTime, 0, 2)));
        $randomMinute = (mt_rand(0, 1) == 0) ? 0 : 30;

        // Initialize an array to store valid date-time combinations
        $validDateTimes = array();

        // Loop through each day between start and end dates
        $currentDate = clone $startOfMonth;
        $randomTime = sprintf("%02d:%02d", $randomHour, $randomMinute);

        if ( $dayOfWeek==8) //specifique date
        {
            $dateTime = new DateTime("$specifiqueDate $randomTime");
            $validDateTimes[] = $dateTime->format('Y-m-d H:i:s');

        }
        else {
            while ($currentDate <= $endOfMonth) {
                $date = $currentDate->format('Y-m-d');

                // Check if the current day is the desired day of the week
                if ($dayOfWeek == 7) //all day permited
                {
                    $dateTime = new DateTime("$date $randomTime");
                    $validDateTimes[] = $dateTime->format('Y-m-d H:i:s');

                } else if (date('N', strtotime($date)) == $dayOfWeek) {
                    $dateTime = new DateTime("$date $randomTime");
                    $validDateTimes[] = $dateTime->format('Y-m-d H:i:s');

                    // Store the valid date-time combination
                }


                // Move to the next day
                $currentDate->modify('+1 day');
            }
        }
        // Check if there are valid date-time combinations for the specified day within 30 days
        if (count($validDateTimes) > 0) {
            // Generate a random index to select a date-time combination from the valid combinations array
            $randomIndex = array_rand($validDateTimes);
            return $validDateTimes[$randomIndex];
        } else {
            // No valid date-time combinations found for the specified day within 30 days
            return null;
        }
    }

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $enumValues =

        $service_timeTable=$this->faker->randomElement(TimeTable::all()); // get id of service
        $service_id=$service_timeTable->service_id;
        $service=Service::find($service_id);
        $indexday = array_search(repetitionTimeTableService::from($service_timeTable->repetition), repetitionTimeTableService::cases());
        //'date' =>  getRandomDateTimeForDayWithin30Days($indexday,$service),

        $shiftStart=$service_timeTable->shiftStart;
        $string="-".strval($service->duration)." minutes";
        $shiftEnd=($service_timeTable->shiftEnd);
        $shiftEnd = DateTime::createFromFormat(' H:i:s', $shiftEnd);
        $shiftEnd->modify($string);
        $shiftEnd = $shiftEnd->format('H:i:s');


     //  $date=$this->getRandomDateTimeForDayWithin30Days();
        return[
            'date' =>  $this->getRandomDateTimeForDayWithin30Days($indexday,$service_timeTable->created_at,$shiftStart,$shiftEnd,$service_timeTable->specificDate),
            'status'=> $this->faker->randomElement(["propose","accepter","refuser"]),
            'note'=>$this->faker->realTextBetween(30,300),
            'service_id'=> $service_id,
            'user_id'=> $this->faker->randomElement(User::all()->pluck("id"))

        ];

    }


}
