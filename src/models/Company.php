<?php namespace Bluebanner\Rpc;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Company extends Eloquent
{
	
	protected $table = 'rpc_company';
	
	public static function options()
	{
		$options = array();
		foreach (Company::all() as $company) {
			$options[$company->id] = $company->name;
		}
		return $options;
	}
}