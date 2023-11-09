<?php



namespace App\Enums;



enum repetitionTimeTableService:string {

    case eachSunday = 'eachSunday';
    case eachMonday  = 'eachMonday';
    case eachTuesday  = 'eachTuesday';
    case eachWednesday = 'eachWednesday';
    case eachThursday = 'eachThursday';
    case eachFriday = 'eachFriday';
    case eachSaturday = 'eachSaturday';
    case eachDay = 'eachDay';
    case specificDate = 'specificDate';



}
