
@extends('home')
@section('content')
    <div class="content">

        <div class="title m-b-md">
            <a href="{{url('/')}}">Productos</a>
        </div>
        @if($suppliers)
            <div>
                <form action="{{route('products_save')}}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-12" style="height: 30px;">
                            <label for="exampleInputPassword1"><b>Seleccione un proveedor</b></label>
                            <p></p>
                            <select name="supplier" class="form-control" style="height: 20px; width: 50%">
                                @foreach($suppliers as $supplier)
                                    <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <br>
                    <p>___________________________________________________________</p>
                    <b>Registro de productos</b>
                    <br>
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-12" style="height: 30px;">
                            <input name="title" type="text"  class="form-control-plaintext"  placeholder="Nombre Producto" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12" style="height: 30px;">
                            <input name="url_image" type="text"  class="form-control-plaintext"  placeholder="URL IMAGEN">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12" style="height: 30px;">
                            <input name="cost" type="number" class="form-control" placeholder="Costo" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12" style="height: 30px;">
                            <input name="price" type="number" class="form-control" placeholder="Precio Sugerido" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12" style="height: 30px;">
                            <label for="exampleInputPassword1"><b>Divisa</b></label>
                            <select name="currency" class="form-control col-sm-12">
                                <option value="USD">USD</option>
                                <option value="GBP">GBP</option>
                                <option value="EUR">EUR</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit">Enviar</button>
                </form>
                <p>___________________________________________________________</p>
            </div>
        @else
            <div class="text-center">
                Debe registrar primero Proveedores, click <a href="{{url('supplier')}}"> AQUI</a>  para continuar
                <br>
                <p>___________________________________________________________</p>
            </div>

        @endif
        <div class="links">

            @if($products)
                @foreach($products as $product)
                    <div class="col-sm-12 ">
                        <div><img src="{{$product->url_image}}" style="height: 18%; width: 18%"> </div>
                        <div class="container">
                            <div class="row" style="-webkit-column-count: 2;  -moz-column-count: 2;  column-count: 2;">
                                <div class="col-lg-4"> <b>Nombre</b> {{$product->title}}</div>
                                <div class="col-lg-4">  <b>Divisa</b> {{$product->currency}}</div>
                                <div class="col-lg-4">  <b>Costo</b> {{$product->cost}}</div>
                                <div class="col-lg-4">  <b>Precio</b> {{$product->price}}</div>
                            </div>
                            <div><p><b>Datos del proveedor Proveedor</b></p></div>

                            <div class="row" style="-webkit-column-count: 3;  -moz-column-count: 3;  column-count: 3;">
                                <div class="col-lg-12"> <b>Nombre</b> {{$product->supplier->name}}</div>
                                <div class="col-lg-12">  <b>Telefono</b> {{$product->supplier->phone}}</div>
                                <div class="col-lg-12">  <b>Email</b> {{$product->supplier->email}}</div>

                            </div>

                        </div>


                        <p>___________________________________________________________</p>
                    </div>
                @endforeach
            @else
                <div class="text-center">
                    No hay informacion que mostrar, agregue Productos
                </div>
            @endif
        </div>

    </div>

@endsection
