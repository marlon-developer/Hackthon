@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1>Pessoas</h1>
@stop

@section('content')
<p>Pessoas</p>


<div>
    <div class="col-md-12">
        <img src="">
    </div>

    <div class="box-body">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th style="width: 40px">Telefone</th>
                </tr>
                @foreach($dados as $d)
                <tr>
                    <td>{{$d->nome}}</td>
                    <td>{{$d->email}}</td>
                    <td>{{$d->telefone}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop