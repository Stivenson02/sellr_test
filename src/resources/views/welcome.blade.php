@extends('home')
@section('content')

            <div class="content">
                <div class="title m-b-md">
                    Test Sellr
                </div>

                <div class="links">
                    <a href="{{route('supplier')}}">Administrar proveedores</a>
                    <a href="{{route('products')}}">Administrar productos</a>
                </div>
            </div>

@endsection
