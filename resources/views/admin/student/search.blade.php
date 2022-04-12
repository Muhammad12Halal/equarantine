@extends('layouts.master')

@section('content')
        <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Student Register Information</h1>
    <p class="mb-4">Here are all Student that has been apply into quarantine system in Kolej Awang Had Salleh at Universiti Pendidikan Sultan Idris.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Student Information</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('student.search') }}" method="get" class="d-none d-sm-inline-block navbar-search" style="margin-bottom: 20px;">
                                <div class="input-group">
                                    <input type="search" class="form-control bg-light border-0 small" placeholder="Search for name...">
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
                                            <th>Email</th>
                                            <th>Matric</th>
                                            <th>Quarantine</th>
                                            <th>Status</th>
                                            <th>Picture</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($posts as $post)
                                        <tr>
                                            <td>{{ $post->name }}</td>
                                            <td>{{ $post->email }}</td>
                                            <td>{{ $post->matric }}</td>
                                            <td>{{ $post->quarantine }}</td>
                                            @if ($post->status =='Approve')
                                            <td style="color: green">{{ $post->status }}</td>

                                            @else
                                            <td style="color:red">{{ $post->status }}</td>
                                            @endif
                                            <td><img src="{{ asset('images/'.$post->image) }}" alt="{{ $post->image }}" class="img-thumbnail" style="width: 80px; height: 80px;">
                                            </td>
                                            <td>
                                                <a href="{{ route('student.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                <form action="{{ route('student.destroy', $post->id)}}" method="POST" class="d-inline">
                                                 @method('DELETE')
                                                @csrf
                                                 <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                         </td>
                                        </tr>
                                        @empty

                                        @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection



