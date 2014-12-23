<?php namespace Devine\Services;

class CustomHashingService{
  protected $pool = "abcdefghijklmnopqrstuvwxyz0123456789";
  public function generate($hashLength){
   $hash = '';
   for ($i = 0; $i < $hashLength; $i++) {
      $hash .= $this->pool[rand(0, strlen($this->pool) - 1)];
   }
   return $hash;
  }
}