<?php namespace Devine\Repositories;
use Link;
use Illuminate\Validation\Factory as Validator;
use Devine\Facades\MyHash;
use Devine\Exceptions\ValidationException;
class LinkRepository implements LinkRepositoryInterface{
  protected $validator;
  protected $rules = ["url" => 'required|url|unique:links,url', 'hash' => 'required|alpha_num|size:5|unique:links,hash'];

  public function __construct(Validator $validator){
    $this->validator = $validator;
  }
  public function findOrCreateByUrl($url){
    $link = $this->findByUrl($url);
    if(!is_null($link)){
      return $link;
    }
    return $this->create($url);
  }

  public function findByUrl($url){
    return Link::where('url', $url)->first();
  }

  public function findByHash($hash){
    return Link::where('hash', $hash)->first();
  }

  public function create($url){
    $hash = $this->generateUniqueHash();
    $link = ['url' => $url, 'hash' => $hash];
    $validator = $this->validator->make($link, $this->rules);
    if($validator->fails()) throw new ValidationException($validator);
    return Link::create($link);
  }

  protected function generateUniqueHash(){
    do{
      $hash = MyHash::generate(5);
    }while(!is_null($this->findByHash($hash)));
    return $hash;
  }
}