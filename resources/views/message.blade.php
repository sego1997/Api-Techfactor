@extends('home')
@section('section-home')
@if(!empty($action))
	<div class="col-12 col-sm-12 col-lg-8 col-xl-8">
		<div class="alert alert-succes text-center" data-toggl="collapse">
			<button class="close" data-dismiss="alert">&times</button>
			<h1 > Accion: {{ $action }} ejecutada exitosamente</h1>
			<div class="card" style="width: 18rem;">
  				<img src="http://dinapoli.belenesdinapoli.com/wp-content/uploads/2017/03/tienda.png" class="card-img-top">
  				<div class="card-body">
    				<h5 class="card-title">{{ $name }} </h5>
    				<p> <b> Pais: </b> </p> {{ $country }}
    				<p> <b> Ciudad: </b> </p> {{ $city }}
    				<p> <b> Direccion: </b> </p> {{ $address }}
  				</div>
			</div>
		</div>
	</div>
@endif
</div>
@endsection