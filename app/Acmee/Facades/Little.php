<?php namespace Devine\Facades;
use Illuminate\Support\Facades\Facade;

class Little extends Facade{
	protected static function getFacadeAccessor(){
		return 'little';
	}
}