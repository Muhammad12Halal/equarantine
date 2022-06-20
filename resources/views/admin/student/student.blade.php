@extends('layouts.master')

@section('content')
        <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Student Register Information</h1>
    <p class="mb-4">Here are all Student that has been apply into quarantine system in Kolej Awang Had Salleh at Universiti Pendidikan Sultan Idris.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Student Information</h6>
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <form action="" method="GET" class="d-none d-sm-inline-block navbar-search" style="margin-bottom: 20px;">
                                @csrf
                                <div class="input-group">
                                    <input type="text" name="search" id="search" class="form-control bg-light border-0 small" placeholder="Search for name..."
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
                                            <th>Email</th>
                                            <th>Matric</th>
                                            <th>Phone</th>
                                            <th>Quarantine</th>
                                            <th>Status</th>
                                            <th>Picture</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($student as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->matric }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>{{ $item->quarantine }}</td>
                                            @if ($item->status =='Approve')
                                            <td style="color: green">{{ $item->status }}</td>
                                            @endif
                                            @if ($item->status=='Reject')
                                            <td style="color:red">{{ $item->status }}</td>
                                            @endif

                                            <td><img src="{{ asset('images/'.$item->image) }}" alt="{{ $item->image }}" class="img-thumbnail" style="width: 80px; height: 80px;">
                                            </td>
                                            <td>
                                                <a href="{{ route('student.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                <form action="{{ route('student.destroy', $item->id)}}" method="POST" class="d-inline">
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


                    <script>
                        $(document).ready(function(){

                        fetch_customer_data();

                        function fetch_customer_data(query = '')
                        {
                        $.ajax({
                        url:"{{ route('student.search') }}",
                        method:'GET',
                        data:{query:query},
                        dataType:'json',
                        success:function(data)
                        {
                            $('tbody').html(data.table_data);
                            $('#total_records').text(data.total_data);
                        }
                        })
                        }

                        $(document).on('keyup', '#search', function(){
                        var query = $(this).val();
                        fetch_customer_data(query);
                        });
                        });
                        </script>

@endsection



