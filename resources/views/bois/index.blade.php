@extends('bois.layout')
@section('content')
    <div class = "container">
        <div class = "row" style="margin:20px;">
            <div class ="col-12">
                <div class="card">
                    <div ="card-header">
                        <h2>
                            Bull Manger gerenciador de bovinos
                        </h2>
                    </div>
                    <div ="card-body">
                        <a href="" class ="btn btn-success btn-sn" title="Registre novos bovinos">
                            Adicionar bovino
                        </a>
                        <br>
                        <br>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>codigo</th>
                                <th>leite</th>
                                <th>ração</th>
                                <th>idade</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bois as $b)
                            <tr>
                                <td>{{$loop->interation}}</td>
                                <td>{{$b->codigo}}</td>
                                <td>{{$b->leite}}</td>
                                <td>{{$b->ração}}</td>
                                <td>{{$b->data}}</td>

                                <td>
                                <a href="{{ url('/student/' . $b->id) }}" title="View Bovino"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                <a href="{{ url('/boi/' . $b->id . '/edit') }}" title="Editar bovino"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                <form method="POST" action="{{ url('/boi' . '/' . $b->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm("Confirmar exclusão ?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Deletar</button>
                                            </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
