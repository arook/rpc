@extends('rpc::layouts.master')

@section('content')

<div class="span8">
	<div class="widget stacked widget-table">

		<div class="widget-header">
			<i class="icon-magnet"></i>
			<h3>{{trans('skulist')}}</h3>
		</div>
		
		<div class="widget-content">
			
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>{{trans('sku')}}</th>
						<th>{{trans('cpi')}}</th>
						<th>{{trans('apm')}}</th>
						<th>{{trans('train')}}</th>
						<th>{{trans('create')}}</th>
						<th>{{trans('update')}}</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($items as $item)
					<tr>
						<td>{{$item->sku}}</td>
						<td>{{$item->consuming}}</td>
						<td>{{$item->amount}}</td>
						<td>{{$item->train}}</td>
						<td>{{$item->created_at}}</td>
						<td>{{$item->updated_at}}</td>
						<td>
							<a class="btn btn-info" href="{{ route(Config::get('rpc::uri').'.client.define.edit', array($item->id)) }}"><i class="icon-pencil"></i></a>
							<a class="btn btn-info" href="{{ route(Config::get('rpc::uri').'.client.define.edit', array($item->id)) }}"><i class="icon-barcode"></i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		
		{{$items->links()}}
		
	</div>
</div>

<div class="span4">
	<div class="widget widget-plain">
		<div class="widget-content">
			<a href="{{ route(Config::get('rpc::uri'). '.client.define.create')}}" class="btn btn-large btn-warning btn-support-ask" style="display: block; font-size: 22px; padding: 14px 0; font-weight: 600; margin-bottom: .75em;">Create New Item</a>	
			<a href="javascript:;" class="btn btn-large btn-support-contact" style="display: block; padding: 12px 0; font-size: 18px; font-weight: 600;">Contact Support</a>
		</div>
	</div>
	
	<div class="widget stacked widget-box">
		<div class="widget-header">	
			<h3>Most Popular Questions</h3>			
		</div>
		<div class="widget-content">
			xxx
		</div>
</div>

@stop