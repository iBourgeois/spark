<?php

namespace iBourgeois\Spark\Events\User;

use Illuminate\Queue\SerializesModels;

class SubscriptionCancelled
{
    use Event, SerializesModels;
}
