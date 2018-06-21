@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo producto</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error) 
					<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>
	{!!Form::open(array('url'=>'inventario/producto','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!} 
	{{Form::token()}}	
	<div class="row">		
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">		
			<div class="form-group">
				<label for="Nombre">Asignale un nombre a tu producto(*)</label>
				<input type="text" name="Nombre" required value="{{old('Nombre')}}" class="form-control"  placeholder="Nombre...">
			</div>		
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="Descripcion">Describe tu producto(*)</label>
				<input type="text" name="Descripcion" required value="{{old('Descripcion')}}" class="form-control"  placeholder="Descripcion...">
			</div>	
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="Precio">Precio del producto(*)</label>
				<input type="text" name="Precio" required value="{{old('Precio')}}" class="form-control" >
			</div>	
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="Imagen">Agrega una imagen del producto(*)</label>
				<input type="file" name="Imagen" required class="form-control">
			</div>								
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="Existencias">Existencias del producto(*)</label>
				<input type="text" name="Existencias" required value="{{old('Existencias')}}" class="form-control" >
			</div>	
		</div>									
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-primary" type="reset">Cancelar</button>
			</div>			
		</div>
	</div>
			{!! Form::close() !!}			
@endsection