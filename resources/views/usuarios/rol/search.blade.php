{!! Form::open(array('url'=>'admin/usuarios/rol','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}

<div class="form-group">
	<div class="input-group">
		<input type="text" class="form-control" name="searchText" placeholder="Buscar un rol..." value="{{$searchText}}">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-primary">Buscar</button>			
			</button>
		</span>
</div>

{{Form::close()}}