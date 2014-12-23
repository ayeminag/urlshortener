<?php namespace Devine\Services;

use Devine\Repositories\LinkRepositoryInterface;

class LittleService{
  protected $linkrepo;

  public function __construct(LinkRepositoryInterface $linkrepo){
    $this->linkrepo = $linkrepo;
  }

  public function make($url){
    return $this->linkrepo->findOrCreateByUrl($url);
  }

  public function get($hash){
  	return $this->linkrepo->findByHash($hash);
  }
}