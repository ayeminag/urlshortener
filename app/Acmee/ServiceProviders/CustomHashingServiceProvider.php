<?php namespace Devine\ServiceProviders;
use Illuminate\Support\ServiceProvider;
class CustomHashingServiceProvider extends ServiceProvider{
  public function register(){
    $this->app->bind('myhash', 'Devine\Services\CustomHashingService');
  }
}