@if ( session('info') || session('message') || session('success') || session('error') || $errors->any() )
	<section class="content">
		@if (session('info'))
			<div class="alert alert-info">
				{{ session('info') }}
			</div>
		@endif  
		@if (session('message'))
			<div class="alert alert-info">
				{{ session('message') }}
			</div>
		@endif               			  
		@if (session('success'))
			<div class="alert alert-success">
				{{ session('success') }}
			</div>
		@endif 
		@if (session('error'))
			<div class="alert alert-error">
				{{ session('error') }}
			</div>
		@endif              
		@if ($errors->any())
			<div class="alert alert-error">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
	</section>
@endif