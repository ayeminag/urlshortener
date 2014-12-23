<?php namespace Devine\Repositories;

interface LinkRepositoryInterface{
	public function findByUrl($url);
	public function findByHash($hash);
	public function findOrCreateByUrl($url);
	public function create($url);
}