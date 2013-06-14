<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<i class="icon-cog"></i>
			</a>
			<a class="brand" href="{{ route(Config::get('rpc::uri')) }}">
				RPC <sup>{{Config::get('rpc::version')}}</sup>
			</a>		
			<div class="nav-collapse collapse">
				<ul class="nav pull-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-cog"></i>
							Settings
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="javascript:;">Account Settings</a></li>
							<li><a href="javascript:;">Privacy Settings</a></li>
							<li class="dropdown-submenu">
								<a tabindex="-1" href="#">Language Settings</a>
								<ul class="dropdown-menu">
								<li><a tabindex="-1" href="">English</a></li>
								<li><a tabindex="-1" href="">简体中文</a></li>
								</ul>
							</li>
							
							<li class="divider"></li>
							<li><a href="javascript:;">Help</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user"></i> 
							{{ Auth::user()->username }} [{{Bluebanner\Rpc\Role::name(Auth::user()->role)}}]
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="javascript:;">My Profile</a></li>
							<li><a href="javascript:;">My Groups</a></li>
							<li class="divider"></li>
							<li><a href="{{ url('logout') }}">Logout</a></li>
						</ul>
					</li>
				</ul>
				<form class="navbar-search pull-right">
					<input type="text" class="search-query" placeholder="Search">
				</form>
			</div>
		</div>
	</div>
</div>

<div class="subnavbar">
	<div class="subnavbar-inner">
		<div class="container">
			<a class="btn-subnavbar collapsed" data-toggle="collapse" data-target=".subnav-collapse">
				<i class="icon-reorder"></i>
			</a>
			<div class="subnav-collapse collapse">
				<ul class="mainnav">
					<li class="{{Route::is(Config::get('rpc::uri')) || Request::is('/') ? 'active' : ''}}">
						<a href="{{ route(Config::get('rpc::uri')) }}">
							<i class="icon-home"></i>
							<span>{{ trans('rpc::menu.dashboard') }}</span>
						</a>	    				
					</li>
					<li class="dropdown {{Request::is('testing*') ? 'active' : ''}}">					
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-th"></i>
							<span>{{ trans('rpc::menu.testing')}}</span>
							<b class="caret"></b>
						</a>	    
						<ul class="dropdown-menu">
							<li><a href="./elements.html">{{ trans('rpc::menu.begin') }}</a></li>
							<li><a href="./validation.html">{{ trans('rpc::menu.requirement')}}</a></li>
							<li><a href="./jqueryui.html">{{ trans('rpc::menu.cost')}}</a></li>
							<li><a href="./charts.html">Charts</a></li>
							<li><a href="./popups.html">Popups/Notifications</a></li>
						</ul> 				
					</li>
					<li class="dropdown {{Request::is('shipment') ? 'active' : ''}}">					
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-plane"></i>
							<span>{{ trans('rpc::menu.shipment') }}</span>
							<b class="caret"></b>
						</a>	    
						<ul class="dropdown-menu">
							<li><a href="">{{trans('rpc::menu.inbound')}}</a></li>
							<li><a href="">{{trans('rpc::menu.inventory')}}</a></li>
							<li><a href="">{{trans('rpc::menu.outbound')}}</a></li>
						</ul>
					</li>
					<li class="dropdown {{ Route::is('rpc.client.define.index') || Route::is('rpc.client.define.create') ? 'active' : ''}}">					
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-barcode"></i>
							<span>{{ trans('rpc::menu.definition') }}</span>
							<b class="caret"></b>
						</a>	    
						<ul class="dropdown-menu">
							<li class="active"><a href="{{ route('rpc.client.define.index')}}">{{trans('rpc::menu.sku')}}</a></li>
							<li><a href="">{{trans('rpc::menu.sop')}}</a></li>
						</ul> 				
					</li>
					<li class="dropdown {{Request::is('report*') ? 'active' : ''}}">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-signal"></i>
							<span>{{ trans('rpc::menu.reporting') }}</span>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="">xxx</a></li>
						</ul>
					</li>
					<li class="dropdown {{Request::is('configuration*') ? 'active' : ''}}">					
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-wrench"></i>
							<span>{{ trans('rpc::menu.config') }}</span>
							<b class="caret"></b>
						</a>	
						<ul class="dropdown-menu">
							<li><a href="{{ route('rpc.client.define.index')}}">{{ trans('rpc::menu.company') }}</a></li>
							<li><a href="{{ route('rpc.client.define.index')}}">{{trans('rpc::menu.users')}}</a></li>
							<li class="dropdown-submenu">
								<a tabindex="-1" href="#">Dropdown menu</a>
								<ul class="dropdown-menu">
								<li><a tabindex="-1" href="#">Second level link</a></li>
								<li><a tabindex="-1" href="#">Second level link</a></li>
								<li><a tabindex="-1" href="#">Second level link</a></li>
								</ul>
							</li>
						</ul>    				
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>