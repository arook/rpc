@extends('rpc::layouts.master')

@section('content')

<div class="span8">
	<div class="widget stacked">
		<div class="widget-header">
			<i class="icon-magnet"></i>
			<h3>{{trans('item create')}}</h3>
		</div>
		
		<div class="widget-content">
			
			<br/>
			
			{{ Form::open(array('url' => route(Config::get('rpc::uri').'.client.define.store'), 'class'=>'form-horizontal', 'id'=>'validation-form')) }}
			<fieldset>
				<div class="control-group {{$errors->has('sku') ? 'error' : ''}}">
					<label class="control-label" for="name">SKU</label>
					<div class="controls">
						{{Form::text('sku', Input::old('sku'), array('class'=>'input-large'))}}
						@if ($errors->has('sku'))
						<div>
							<span for="sku" class="error" style="display:inline">{{$errors->first('sku')}}</span>
						</div>
						@endif
					</div>
				</div>
				
				@if (Auth::user()->role == Bluebanner\Rpc\Role::ROLE_CLIENT)
					{{Form::hidden('company_id', Auth::user()->company_id)}}
				@else
				<div class="control-group {{$errors->has('company_id') ? 'error' : ''}}">
					<label class="control-label" for="name">COMPANY</label>
					<div class="controls">
						{{Form::select('company_id', Bluebanner\Rpc\Company::options(), Input::old('company_id'), array('class'=>'input-large'))}}
						@if ($errors->has('company_id'))
						<div>
							<span for="sku" class="error" style="display:inline">{{$errors->first('company_id')}}</span>
						</div>
						@endif
					</div>
				</div>
				@endif
				
				<div class="control-group {{$errors->has('desc') ? 'error' : ''}}">
					{{Form::label('desc', 'DESCRIPTION', array('class'=> 'control-label'))}}
					<div class="controls">
						{{Form::textarea('desc', Input::old('desc'), array('class'=>'input-large'))}}
						@if ($errors->has('desc'))
						<div>
							<span for="desc" class="error" style="display:inline">{{$errors->first('desc')}}</span>
						</div>
						@endif
					</div>
				</div>
				
				<div class="control-group {{$errors->has('consuming') ? 'error' : ''}}">
					{{Form::label('consuming', 'COST(min)/ITEM', array('class'=> 'control-label'))}}
					<div class="controls">
						{{Form::text('consuming', Input::old('consuming'), array('class'=>'input-large'))}}
						@if ($errors->has('consuming'))
						<div>
							<span for="desc" class="error" style="display:inline">{{$errors->first('consuming')}}</span>
						</div>
						@endif
					</div>
				</div>
				
				<div class="control-group {{$errors->has('amount') ? 'error' : ''}}">
					{{Form::label('amount', 'AMOUNT/MONTH', array('class'=> 'control-label'))}}
					<div class="controls">
						{{Form::text('amount', Input::old('amount'), array('class'=>'input-large'))}}
						@if ($errors->has('amount'))
						<div>
							<span for="desc" class="error" style="display:inline">{{$errors->first('amount')}}</span>
						</div>
						@endif
					</div>
				</div>
				
				<div class="control-group {{$errors->has('train') ? 'error' : ''}}">
					{{Form::label('train', 'TRAIN', array('class'=> 'control-label'))}}
					<div class="controls">
						<label class="radio">
							{{Form::radio('train', 1, false, array('class'=>'input-large'))}}
							YES,Need a Train.
						</label>
						<label class="radio">
							{{Form::radio('train', 0, true, array('class'=>'input-large'))}}
							NO
						</label>
						@if ($errors->has('train'))
						<div>
							<span for="desc" class="error" style="display:inline">{{$errors->first('train')}}</span>
						</div>
						@endif
					</div>
				</div>

				<div class="form-actions">
					<button type="submit" class="btn btn-danger btn">Save</button>&nbsp;&nbsp;
					<button type="reset" class="btn" >Cancel</button>
				</div>
				
			</fieldset>
			{{ Form::close() }}
		</div>
		
	</div>
</div>

<div class="span4">
	
</div>

@endsection