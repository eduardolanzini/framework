<?php

namespace Framework;

Class Config{

	private $environment,$path,$root,$email;

	public function getEnvironment()
	{
		return $this->environment;
	}

	public function getPath()
	{
		if ($this->environment == 'local')
		{
			return $this->localPath;
		}
		elseif($this->environment == 'production')
		{
			return $this->productionPath;
		}
		else
		{
			Log::error('Environment não informado');
		}
	}

	public function getRoot()
	{
		if ($this->environment == 'local')
		{
			return $this->localRoot;
		}
		elseif($this->environment == 'production')
		{
			return $this->productionRoot;
		}
		else
		{
			Log::error('Environment não informado');
		}
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEnvironment($env){
		$this->environment = $env;
	}

	public function setLocalPath($path){
		$this->localPath = $path;
	}

	public function setProductionPath($path){
		$this->productionPath = $path;
	}

	public function setLocalRoot($root){
		$this->localRoot = $root;
	}

	public function setProductionRoot($root){
		$this->productionRoot = $root;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function showErrors(bool $bool)
	{
		if ($bool) {
			error_reporting(E_ALL);
			ini_set("display_errors", 1);
		}else{
			error_reporting(0);
			ini_set("display_errors", 0);
		}
	}

	public function setTimezone($timezone)
	{
		date_default_timezone_set($timezone);
	}

	public function getDb()
	{
		if ($this->environment == 'local') {
			return $this->db;
		} elseif ($this->environment == 'production') {

			return $this->productionDB;
		} else {
			Log::error('Environment não informado');
		}
	}
	
}