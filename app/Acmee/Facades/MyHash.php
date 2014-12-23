<?php namespace Devine\Facades;
use Illuminate\Support\Facades\Facade;
class MyHash extends Facade{
	protected static function getFacadeAccessor(){
		return 'myhash';
	}
}