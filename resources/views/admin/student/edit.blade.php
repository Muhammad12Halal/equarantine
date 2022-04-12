@extends('layouts.master')

@section('content')

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-0">Student Profile Management</h4>
                        <div class="mt-3">
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
                            <form action="{{ route('student.update', $item->id)}}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-group row">
                                    <label for="name" class="col-4 col-form-label">Full Name</label>
                                    <div class="col-8">
                                      <input id="name" name="name" type="text" class="form-control" value="{{ $item->name }}" required="required">
                                      <input id="student_id" name="student_id" type="hidden" class="form-control" value="{{ $item->id }}" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-4 col-form-label">Email</label>
                                    <div class="col-8">
                                      <input id="email" name="email" type="email" class="form-control" value="{{ $item->email }}" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="matric" class="col-4 col-form-label">Matric Number</label>
                                    <div class="col-8">
                                      <input id="matric" name="matric" type="text" class="form-control" value="{{ $item->matric }}" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="phone" class="col-4 col-form-label">Phone</label>
                                    <div class="col-8">
                                      <input id="phone" name="phone" type="text" class="form-control" value="{{ $item->phone }}" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ic" class="col-4 col-form-label">Ic number</label>
                                    <div class="col-8">
                                      <input id="ic" name="ic" type="text" class="form-control" value="{{ $item->ic }}" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="quarantine" class="col-4 col-form-label">Type Quarantine</label>
                                    <div class="col-8">
                                      <select id="quarantine" name="quarantine" class="custom-select" required="required">
                                        <option value=""></option>
                                        <option value="home" {{($item->quarantine=='Home')? 'selected':'' }}>Home</option>
                                        <option value="college" {{($item->quarantine=='College')? 'selected':'' }}>College</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="status" class="col-4 col-form-label">Status</label>
                                    <div class="col-8">
                                      <select id="status" name="status" class="custom-select" required="required">
                                        <option value=""></option>
                                        <option value="approve" {{($item->status=='Approve')? 'selected':'' }}>Approve</option>
                                        <option value="reject" {{($item->status=='Reject')? 'selected':'' }}>Reject</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="image" class="col-4 col-form-label">Image</label>
                                    <div class="col-8">
                                      <img src="{{ asset('images/'.$item->image) }}" alt="{{ $item->image }}" width="300px" height="300px">
                                      <br>
                                      <input id="image" name="image" type="file" class="form-control-custom">
                                    </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-4 col-8">
                                    <button name="submit" type="submit" class="btn btn-success">Submit</button>
                                    <a href="{{ route('home') }}" name="cancel" type="button" class="btn btn-warning">Back</a>
                                  </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('script')

@endsection
