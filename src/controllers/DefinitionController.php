<?php namespace Bluebanner\Rpc;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class DefinitionController extends BaseController
{
	
	public function index()
	{
		$items = Item::whereCompanyId(Auth::user()->company_id)->paginate();
		return View::make('rpc::item.index')
			->with('items', $items);
	}
	
	public function create()
	{
		return View::make('rpc::item.create');
	}
	
	public function store()
	{
		$validation = Validator::make(Input::all(), array(
			'sku' => 'required|max:20|unique:item',
			'desc' => 'required',
			'consuming' => 'required|integer',
			'amount' => 'required|integer',
			'train' => 'required',
		));
		
		if ($validation->fails()) {
			return Redirect::route(\Config::get('rpc::uri').'.client.define.create')
				->withErrors($validation)
				->withInput();
		}
		
		$item = new Item;
		$item->fill(Input::all())
			->fill(array('company_id' => Auth::user()->company_id));
		$item->save();
		
		return Redirect::route(\Config::get('rpc::uri').'.client.define.index');
	}
}
