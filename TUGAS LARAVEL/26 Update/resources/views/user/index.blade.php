<!-- User -->

@extends('layouts.main')

@section('content')
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">User</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Avatar</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Role</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                
                                                <td>
                                                    <img src="https://placehold.co/50x50" alt="avatar">
                                                </td>
                                                <td>Rani</td>
                                                <td>rani@gmail.com</td>
                                                <td>08881</td>
                                                <td>Admin</td>
                                                <td>
                                                    <a class="btn btn-primary" href="#">Detail</a>
                                                    <a class="btn btn-warning" href="#">Edit</a>
                                                    <a class="btn btn-danger" href="#">Hapus</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                
                                                <td>
                                                    <img src="https://placehold.co/50x50" alt="avatar">
                                                </td>
                                                <td>Ilmi</td>
                                                <td>ilmi@gmail.com</td>
                                                <td>08882</td>
                                                <td>Staff</td>
                                                <td>
                                                    <a class="btn btn-primary" href="#">Detail</a>
                                                    <a class="btn btn-warning" href="#">Edit</a>
                                                    <a class="btn btn-danger" href="#">Hapus</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
</main>
@endsection()
