@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar la información de FotoPrisma</h3>
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
	{!! Form::model($informacion,['method'=>'PATCH','route'=>['informacion.admin.update',$informacion->idInformacion]])!!} 
	{{Form::token()}}
		<div class="row">	
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">		
			<div class="form-group">
				<label for="Mision">Misión de la empresa</label>
				<input type="text" name="Mision" unique required value="{{$informacion->Mision}}" class="form-control">
			</div>		
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="Vision">Vision de la empresa</label>
				<input type="text" name="Vision" required value="{{$informacion->Vision}}" class="form-control" >
			</div>	
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="HorarioAtencion">Horario de atención</label>
				<input type="text" name="HorarioAtencion" required value="{{$informacion->HorarioAtencion}}" class="form-control" >
			</div>	
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="Contactenos">Horario de atención</label>
				<input type="text" name="Contactenos" required value="{{$informacion->Contactenos}}" class="form-control" >
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