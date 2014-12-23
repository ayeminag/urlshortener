<?php
use Devine\Exceptions\ValidationException;
class LinkController extends \BaseController {

  public function store()
  {
    try{
      $url = Little::make(Input::get('url'));
      return Redirect::home()->with('url', $url);
    }catch(ValidationException $e){
      return Redirect::home()->withErrors($e->getErrorMessages());
    }
  }

  public function redirect($hash){
  	$link = Little::get($hash);
  	return Redirect::to($link->url);
  }

}
