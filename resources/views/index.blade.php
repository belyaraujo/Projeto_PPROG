@extends('layout')
@section('content')
<div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel 9 CRUD (Create, Read, Update and Delete)</h2>
                    </div>
<div class="card-body">
    <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="Add New Student">
        Novo
    </a>
    <br />
    <br />
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Ações</th>  
                </tr>
            </thead>
            <tbody>
                @foreach($produto as $prod)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $prod->nome }}</td>
                    <td>{{ $prod->preco }}</td>

                    <td>
                        <a href="{{ url('/student/' . $prod->id) }}" title="Ver Produto"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                        <a href="{{ url('/student/' . $prod->id . '/edit') }}" title="Editar Produto"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('/student' . '/' . $prod->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(Confirm delete?)"><i class="fa fa-trash-o" aria-hidden="true"></i> Deletar</button>
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
</div>
@endsection