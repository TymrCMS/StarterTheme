@extends('layouts.app')

@section('content')
	<section id="services" class="bg-light">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mx-auto">

					@component('users::components.profile.info-widget',['person'=>$person])
					@endcomponent
					@component('users::components.profile.aboutme-widget',['person'=>$person])
					@endcomponent

				</div>
			</div>
		</div>
	</section>
@endsection