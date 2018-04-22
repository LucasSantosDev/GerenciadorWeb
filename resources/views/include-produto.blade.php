@extends('principal')

@section('conteudo')
    <div class="row">
        <div class="col-md-12" id="center">              
            <h1><b>Produto</b></h1>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li><a href="">Panel</a></li>                  
                <li><a href="{{route('product.index')}}">Produtos</a></li>                  
                <li class="active">Cadastro</li>
            </ol>              
        </div>          
    </div>
    <div class="row">  
        <br>
        <h4 id="center"><b>CADASTRO DOS DADOS DO PRODUTO</b></h4>
        <br> 
        <form method="post" 
              action="{{route('product.store')}}" 
              enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col-md-6">              
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" name="name" 
                           class="form-control" 
                           required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="foto"> Foto </label>
                    <input type="text" name="imagem"
                           accept=".gif,.jpg,.png"
                           class="form-control"
                           data-toggle="tooltip" 
                           data-placement="top"
                           title="Usar arquivo com dimensões 300x300 
                           - JPG, GIF, PNG">
                </div>   
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="description">Descrição</label>
                    <input type="text" name="description" 
                           class="form-control" 
                           required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="quantity">Quantidade</label>
                    <input type="number" name="quantity" 
                           class="form-control" 
                           required>
                </div>    
            </div>                 
            <div class="col-md-6">
                <div class="form-group">
                    <label for="price"> Preço </label>
                    <input type="text" name="price"                               
                           class="form-control">
                </div>
            </div>                       
            <div class="col-md-12">                   
                <button type="reset" class="btn btn-default">
                    Limpar
                </button>
                <button type="submit" 
                        class="btn btn-warning" id="black">
                    Cadastrar
                </button>
            </div>
        </form>             
    </div>
@stop
