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
                <li class="active">Alteração</li>
            </ol>              
        </div>          
    </div>
    <div class="row">  
        <br>
        <h4 id="center"><b>ALTERAÇÃO DOS DADOS DO PRODUTO</b></h4>
        <br> 
        <form method="post" 
              action="{{route('product.update', $product->id)}}" 
              enctype="multipart/form-data">
            {!! method_field('put') !!}
            {{ csrf_field() }}
            <div class="col-md-6">              
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" name="name" 
                           class="form-control" 
                           value="{{$product->name or old('name')}}"
                           required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="text" 
                           accept=".gif,.jpg,.png"
                           class="form-control"
                           data-toggle="tooltip" 
                           data-placement="top"
                           title="Usar arquivo com dimensões 300x300 
                           - JPG, GIF, PNG"
                           value="{{$product->imagem or old('imagem')}}">
                </div>   
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="description">Descrição</label>
                    <input type="text" name="description" 
                           class="form-control" 
                           value="{{$product->description or old('description')}}"
                           required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="quantity">Quantidade</label>
                    <input type="number" name="quantity" 
                           class="form-control" 
                           value="{{$product->quantity or old('quantity')}}"
                           required>
                </div>    
            </div>                 
            <div class="col-md-6">
                <div class="form-group">
                    <label for="price">Preço</label>
                    <input type="text" name="price"                               
                           class="form-control"
                           value="{{$product->price or old('price')}}"
                           required>
                </div>
            </div>                       
            <div class="col-md-12">                   
                <button type="reset" class="btn btn-default">
                    Limpar
                </button>
                <button type="submit" 
                        class="btn btn-warning" id="black">
                    Alterar
                </button>
            </div>
        </form>             
    </div>
@stop