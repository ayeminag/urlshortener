<?php namespace Devine\Exceptions;
use Exception;
class ValidationException extends Exception{
	protected $errorMessages;

	public function __construct($errorMessages){
		$this->errorMessages = $errorMessages;
	}

	public function getErrorMessages(){
		return $this->errorMessages;
	}
}