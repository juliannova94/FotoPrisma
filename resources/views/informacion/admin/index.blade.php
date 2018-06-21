@extends ('layouts.admin')
@section ('contenido')
<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Información general de la empresa</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thread>						
						<th>Mision</th>
						<th>Vision</th>
						<th>Horario de atención</th>
						<th>Contactos</th>						
						<th>Opciones</th>
					</thread> 					
					@foreach($informaciones as $info)
					<tr>
						<td>{{$info->Mision}}</td>						
						<td>{{$info->Vision}}</td>
						<td>{{$info->HorarioAtencion}}</td>
						<td>{{$info->Contactenos}}</td>
						<td>
							<a href="{{URL::action('InformacionController@edit',$info->idInformacion)}}"><button class="btn btn-info">Editar información</button></a>																	
						</td>
					</tr>					
					@endforeach
				</table>
			</div>
			{{$informacion->render()}}
		</div>
	</div>
@endsection
