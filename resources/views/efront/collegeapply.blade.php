@extends('layouts.head')

@section('content')

<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <h1 class="text-white">Apply Covid and College information Here</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="appoinment section">
    <div class="container">
      <div class="row">
        <div class="testbox">
        <form action="{{ route('college.store') }}" method="POST" enctype="multipart/form-data" >
            @csrf
          <fieldset>
            <h4>C. College Information</h4>
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

             <div class="colums">
                <div class="item">
                    <label for="student_id" class="col-4 col-form-label">Student</label>

                      <select id="student_id" name="student_id" type="select" class="custom-select" required>
                        <option value=""></option>
                        @forelse ($students as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @empty

                        @endforelse
                      </select>
                    </div>

            <div class="item">
              <label for="name"> Full Name<span>*</span></label>
              <input id="name" type="text" name="name" required />
            </div>
            <div class="item">
              <label for="college">College name<span>*</span></label>
              <input id="college" type="text" name="college" required />
            </div>
            <div class="item">
            <label for="block" class="col-4 col-form-label">Choose Block in College:</label>

                <select name="block" id="block" type="select" class="custom-select">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                </select>
            </div>
          <div class="item">
              <label for="room">Room Number<span>*</span></label>
              <input id="room" type="text"   name="room" required />
            </div>
              <div class="item">
              <label for="address">Address College<span>*</span></label>
              <input id="address" type="text"   name="address" required/>
            </div>
            </fieldset>
          <div class="btn-block">
            <button type="submit" id="submit" name="submit">Submit</button>
          </div>
        </form>
      </div>
        </section>

@endsection
