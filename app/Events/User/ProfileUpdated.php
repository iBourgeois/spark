<?php

namespace iBourgeois\Spark\Events\User;

use Illuminate\Queue\SerializesModels;

class ProfileUpdated
{
    use Event, SerializesModels;
}
