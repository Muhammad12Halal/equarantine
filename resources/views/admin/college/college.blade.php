@extends('layouts.master')

@section('content')
        <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">College Information</h1>
    <p class="mb-4">Here are all Student College that has been apply into quarantine system in Kolej Awang Had Salleh at Universiti Pendidikan Sultan Idris.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">College Information</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('college.search') }}" method="GET" class="d-none d-sm-inline-block navbar-search" style="margin-bottom: 20px;">
                                <div class="input-group">
                                    <input type="search" class="form-control bg-light border-0 small" placeholder="Search for name..."
                                        aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>College</th>
                                            <th>Block</th>
                                            <th>Room</th>
                                            <th>Adrress</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @forelse ($data as $college)
                                        <tr>
                                            <td>{{ $college->name }}</td>
                                            <td>{{ $college->college }}</td>
                                            <td>{{ $college->block }}</td>
                                            <td>{{ $college->room }}</td>
                                            <td>{{ $college->address }}</td>

                                        </tr>
                                        @empty
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection



