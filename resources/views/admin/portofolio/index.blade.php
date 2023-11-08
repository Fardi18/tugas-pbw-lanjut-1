@extends('admin.template.app')

@section('title', 'Porto')

@section('content')
    <div class="pagetitle">
        <h1>Data Porto</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="/admin/porto">Porto</a></li>
                <li class="breadcrumb-item active">Data Porto</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Porto</h5>
                        <a type="button" class="btn btn-primary m-2" href="/admin/porto/add"><i
                                class="bi bi-plus-square-fill"></i> Tambah Porto</a>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Porto Category</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($portos as $porto)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $porto->name }}</td>
                                        <td><img src="{{ Storage::url($porto->image) }}" alt=""
                                                style="height:40px; width:60px; object-fit: cover;"></td>
                                        <td>{{ $porto->portocategory->name }}</td>
                                        <td>{{ $porto->tanggal }}</td>
                                        <td><a href="/admin/porto/{{ $porto->id }}/edit" class="btn btn-warning"><i
                                                    class="bi bi-pencil-fill text-white"></i></a>
                                            | <a href="/admin/porto/{{ $porto->id }}/delete" class="btn btn-danger"><i
                                                    class="bi bi-trash3-fill text-white"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
