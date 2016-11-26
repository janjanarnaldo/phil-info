<div class="ui grid">
	<div class="computer tablet only">
		<div class="ui inverted fixed menu navbar page grid">

			<a href="{{ url('/')}}" class="item">Home</a>
			<a href="{{ url('category')}}" class="item">Categories</a>
			
			@if (Auth::guest())
			<a href="{{ url('login') }}" class="right item">Login</a>
			<a href="{{ url('register') }}" class="item">Register</a>
			@else
			<a href="{{ url('logout') }}" class="right item">Logout</a>
			@endif

		</div>
	</div>
</div>

