<?php
/**
 * Jaeger
 *
 * @copyright	Copyright (c) 2015-2016, mithra62
 * @link		http://jaeger-app.com
 * @version		1.0
 * @filesource 	./Exception.php
 */
namespace JaegerApp;

use Phine\Exception\Exception as Phine;
use JaegerApp\Traits\Log;

/**
 * Jaeger - Exception Object
 *
 * Handles exceptions within the mithra62 system
 *
 * @package Exceptions
 * @author Eric Lamb <eric@mithra62.com>
 */
class Exception extends Phine
{
    use Log;

    /**
     * Logs an exeption
     * 
     * @param \Exception $e            
     * @return bool
     */
    public function logException(\Exception $e)
    {
        $error = $e->getMessage() . $e->getTraceAsString();
        return $this->logEmergency($error);
    }
}