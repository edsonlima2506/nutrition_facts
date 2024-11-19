<?php

namespace App\Traits;

use Exception;
use Illuminate\Support\Facades\Log;

trait HandleLog
{
    /**
     * handle Message Log
     *
     * @param string $logLevel
     * @param string $functionName
     * @param string $message
     * @param mixed $data
     * @param Exception|null $exception
     *
     * @return void
     */
    protected function handleMessageLog(
        string $logLevel,
        string $functionName,
        string $message = '',
        $data = null,
        string $channel = '',
        Exception $exception = null
    ): void {
        if (!$channel) $channel = config('logging.default');

        $pid = getmypid();

        $messageCustom = get_class() . "::pid($pid)::$functionName->$message";

        Log::channel($channel)->$logLevel($messageCustom);

        if ($data) Log::channel($channel)->$logLevel($data);

        if ($exception) {
            report($exception);
        }
    }
}