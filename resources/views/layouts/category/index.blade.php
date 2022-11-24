@extends('master')

@section('title')
    <title>Category Page</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Category Page</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="{{ route('category.create') }}">Home</a></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <a href="{{ route('category.create') }}" class="btn btn-primary">Add Category</a>
                    </div>
                    <div class="card-body">
                        <div class="table table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <th>No</th>
                                    <th>Category Name</th>
                                    <th>Tools</th>
                                </thead>
                                <tbody>
                                    @forelse ($category as $c)
                                    <tr>
                                        <td>{{ $loop->iteratioon }}</td>
                                        <td>{{ $c->name_category }}</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                        
                                    @empty
                                        <tr>
                                            <td colspan="3" class="text-center">Belum ada data</td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection