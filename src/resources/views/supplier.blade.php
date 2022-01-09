
@extends('home')
@section('content')
    <div class="content">

        <div class="title m-b-md">
            <a href="{{url('/')}}">Proveedores</a>
        </div>

        <div>
            <b>Registro de Proveedor</b>
            <form action="{{route('supplier_save')}}" method="POST">
                @csrf
                <div class="form-group row">
                    <div class="col-sm-12" style="height: 30px;">
                        <input name="name" type="text"  class="form-control-plaintext"  placeholder="Nombre" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12" style="height: 30px;">
                        <input name="phone" type="number" class="form-control" id="inputPassword" placeholder="Telefono">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12" style="height: 30px;">
                        <input name="email" type="email" class="form-control" id="inputPassword" placeholder="Email" required>
                    </div>
                </div>
                <button type="submit">Enviar</button>
            </form>
            <p>___________________________________________________________</p>
        </div>
        <div class="links">

            @if($data)

                @foreach($data as $supplier)
                 <div class="col-sm-12 ">

                     <b>Proveedor {{$num++}}</b>
                     <div> <b>Nombre</b> {{$supplier->name}}</div>
                     <div> <b>Telefono</b> {{$supplier->phone}}</div>
                     <div> <b>Email</b> {{$supplier->email}}</div>
                     <p>___________________________________________________________</p>
                 </div>

                @endforeach
            @else
                <div class="text-center">
                    No hay informacion que mostrar, agregue proveedores
                </div>
            @endif
        </div>

    </div>

@endsection
