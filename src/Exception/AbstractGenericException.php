<?php
/*
Abstract parent class all other Exceptions should extend/inherit from.
This can then be the central place for logging and outputting to Slack and jira
*/


namespace App\Exception;

use Throwable;

abstract class AbstractGenericException extends \Exception
{

protected $message = "GenericException: ";
protected $code = 500;
protected $content = array();

public function __construct($defaultCode="500", $message = "", $code = 500, $content = array() )
{
if($message!="") $this->message = $this->message.$message;
$this->code = $code;
if($this->code==0) $this->code = 500;
$this->content = $content;


}

/**
* @param string $message
*/
public function setMessage($message)
{
$this->message = $message;
}

/**
* @param int $code
*/
public function setCode($code)
{
$this->code = $code;
}

/**
* @return array
*/
public function getContent()
{
return $this->content;
}

/**
* @param array $content
*/
public function setContent($content)
{
$this->content = $content;
}

}
