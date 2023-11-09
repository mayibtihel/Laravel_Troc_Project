<?php



namespace App\Enums;



enum statusReservationService:string {

    case propose = 'propose';

    case accepter  = 'accepter';

    case refuser  = 'refuser';


}
