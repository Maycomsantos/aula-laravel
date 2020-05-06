<?php

namespace App\Traits;

use Spatie\Activitylog\Contracts\Activity;
use Spatie\Activitylog\Traits\LogsActivity;

trait EnableLogs
{
    use LogsActivity;

    protected static $logOnlyDirty = true;

    protected static $submitEmptyLogs = false;

    protected static $logAttributes = ['*'];

    protected static $ignoreChangedAttributes = [
        'remember_token', 'last_login_at', 'access_number', 'updated_at'
    ];

    public function tapActivity(Activity $activity, string $eventName)
    {
        $activity->properties = $activity->properties->put('ip_address', request()->ip());

        if ($eventName == 'deleted') {
            $activity->properties = $activity->properties->put('motive', request()->motive);
        }
    }
}
