@extends('layouts.app')
@section('content')
<!-- Page Heading -->
<div class="page-heading">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1>Data Produk</h1>
            </div>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<!-- Tables -->
<section class="tables">
    <div class="container-fluid">
        <div class="row justify-content-end">
            <div class="col-md-4">
                <form action="{{ route('admin.produk') }}" accept-charset="UTF-8" method="get">
                    <div class="input-group">
                        <input type="text" name="search" id="search" placeholder="Cari" class="form-control">
                        <span class="input-group-btn">
                            <input type="submit" value="Cari" class="btn btn-primary">
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="default-table">
                    <table>
                        <caption></caption>
                        <thead>
                            <tr>
                                <th scope="">Id</th>
                                <th scope="">Name</th>
                                <th scope="">Description</th>
                                <th scope="">Image</th>
                                <th scope="">Price</th>
                                <th scope="">Weigth</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $Product)
                            <tr>
                                <td>{{ $Product->id }}</td>
                                <td>{{ $Product->name }}</td>
                                <td>{{ $Product->description }}</td>
                                <td>{{ $Product->image }}</td>
                                <td>{{ $Product->price }}</td>
                                <td>{{ $Product->weigth }}</td>
                                <td>
                                    <form action="{{ route('produk.destroy', $Product->id ) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <!-- TARUH LINKS DISINI-->
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
