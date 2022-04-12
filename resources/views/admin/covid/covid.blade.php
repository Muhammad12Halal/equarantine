@extends('layouts.master')

@section('content')
        <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Vaccination Information</h1>
    <p class="mb-4">Here are all Student vaccination information that has been upload into quarantine system in Kolej Awang Had Salleh at Universiti Pendidikan Sultan Idris.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Vaccination Information</h6>
                        </div>
                        <div class="card-body">
                            <form action="#" method="GET" class="d-none d-sm-inline-block navbar-search" style="margin-bottom: 20px;">
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
                                            <th>Address</th>
                                            <th>Level</th>
                                            <th>Vaccine</th>
                                            <th>Vaccine Type</th>
                                            <th>Image</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                            @foreach ($data as $item)
                                            <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->address }}</td>
                                            <td>{{ $item->level }}</td>
                                            <td>{{ $item->vaccine }}</td>

                                            @if ($item->type =='pfizer')
                                            <td style="color: blue">{{ $item->type }}</td>

                                            @elseif ($item->type =='Sinovac')
                                            <td style="color:red">{{ $item->type }}</td>

                                            @else
                                            <td style="color:green">{{ $item->type }}</td>
                                            @endif

                                            <td><img src="{{ asset('images/'.$item->image) }}" alt="{{ $item->image }}" class="img-thumbnail" style="width: 80px; height: 80px;">
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection



