@extends('bois.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">bovinos Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Codigo: {{ $bois->codigo }}</h5>
        <p class="card-text">leite : {{ $bois->leite }}</p>
        <p class="card-text">ração : {{ $bois->ração }}</p>
        <p class="card-text">data : {{ $bois->data}}</p>
  </div>
    </hr>
  </div>
</div>
