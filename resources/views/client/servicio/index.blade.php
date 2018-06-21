@extends ('layouts.product')
@section ('servicios')

@foreach($servicios as $serv)
<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-3">
		<div class="thumbnail thumbnail-content-phones">
			<img src="{{asset('Imagenes/Servicios/'.$serv->Imagen)}}" alt="{{$serv->Nombre}}" height="100px" width="100px" class="img-thumbnail">
			<div class="caption">
				<h3 class=" text-center">{{$serv->Nombre}}</h3>
				<p class="text-justify"><h4>Descripción del producto</h4>
					<br>{{$serv->Descripcion}}
			    </p>
				<p class="text-justify"><h5>Existencias: {{$serv->Existencias}}</h5></p>
				<p clas="text-center"><h5>Precio unitario: {{$serv->Precio}}</h5></p>
				<p class="text-center"><a href="#" class="btn btn-danger" role="button">Solicitar</a></p>
			</div>
		</div>
	</div>
</div>
@endforeach
{{$servicios->render()}}
@endsection
