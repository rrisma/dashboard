<!DOCTYPE html>
<html>
<head>
	@include('layouts.header')

</head>
<body>
	
		<div class="container">
        {{-- @include('layouts.navbar')	 --}}
		
				<div class="row">
					@include('layouts.sidebar')
					@yield('content')
				</div>
				@include('layouts.footer')
			</div>
	

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
</body>
</html>
