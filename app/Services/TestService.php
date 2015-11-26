<?php
namespace App\Services;
use App\Contracts\TestContract;

//定义一个TestService的服务来实现TestContracts接口
class TestService implements TestContract{
	// 定义callMe 的具体实现方法
	
	public function callMe($controller){
		dd("Call me from the TestProvieder In " .$controller);
	}
}

