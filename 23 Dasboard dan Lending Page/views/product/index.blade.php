<!-- Product -->

@extends('layouts.main')

@section('content')
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Product</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category</th>
                                            <th>Nama</th>
                                            <th>Price</th>
                                            <th>Sale Price</th>
                                            <th>Brand</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $productss)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ $productss['category'] }}</td>
                                            <td>{{ $productss['name'] }}</td>
                                            <td>{{ $productss['price'] }}</td>
                                            <td>{{ $productss['sale_price'] }}</td>
                                            <td>{{ $productss['brands'] }}</td>
                                            <td>
                                                <a href="#" class="btn btn-primary">Detail</a>
                                                <a href="#" class="btn btn-warning">Edit</a>
                                                <a href="#" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
</main>
@endsection()