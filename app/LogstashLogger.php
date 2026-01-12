<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogstashLogger
{
    /**
     * Log message to Logstash
     */
    public static function log($level, $message, $context = [])
    {
        // Logstash logging implementation
    }
}
