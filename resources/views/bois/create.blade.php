@extends('bois.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Criar novo bovino</div>
  <div class="card-body">

      <form action="{{ url('boi') }}" method="post">
        {!! csrf_field() !!}
        <label>codigo</label></br>
        <input type="number" name="codigo" id="codigo" class="form-control"></br>
        <label>leite</label></br>
        <input type="number" name="leite" id="leite" class="form-control"></br>
        <label>ração</label></br>
        <input type="number" name="ração" id="ração" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
