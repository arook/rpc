<?php namespace Bluebanner\Rpc;

class Role
{
  
  // 超级管理员
	const ROLE_ADMIN = 1;
	
	// 客人
	const ROLE_CLIENT = 2;
	
	// 仓库人员
	const ROLE_WAREHOUSE = 3;
	
	// 测试人员
	const ROLE_TESTER = 4;
	
	// 经理
	const ROLE_MANAGER = 5;
	
	// 财务
	const ROLE_BILLING = 6;
	
	public static function name($role)
	{
		$class = new \ReflectionClass(__class__);
		return array_search($role, $class->getConstants());
	}
}