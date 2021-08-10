<?php

namespace App\Exception;

use App\Exception\AbstractGenericException;
use Throwable;

class IndexException extends AbstractGenericException
{
    protected $message = "Exception: ";
    //the rest is inherited
}
