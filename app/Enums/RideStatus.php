<?php
  
namespace App\Enums;
 
enum RideStatus:string {
    case Waiting = 'Waiting';
    case Started = 'Started';
    case Cancelled = 'Cancelled';
    case Finished = 'Finished';
}

