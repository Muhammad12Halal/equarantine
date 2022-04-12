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
  <section class="appoinment section">
    <div class="container">
      <div class="row" style="width: 100%">
        <div class="testbox">
        <form action="{{ route('covid.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h4>B. Covid Information</h4>

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
            
            <div class="form-group row">
            <label for="student_id" class="col-4 col-form-label">Student</label>
            <div class="col-8">
              <select id="student_id" name="student_id" class="custom-select" required>
                <option value=""></option>
                @forelse ($students as $data)
                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                @empty

                @endforelse
              </select>
            </div>
            </div>
            <div class="form-group row">
               <label for="name" class="col-4 col-form-label">Full Name</label>
                <div class="col-8">
                  <input id="name" name="name" type="text" class="form-control" value="" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="address" class="col-4 col-form-label">Address</label>
                 <div class="col-8">
                   <input id="address" name="address" type="text" class="form-control" value="" required="required">
                 </div>
             </div>
            <div class="form-group row">
                <label for="level" class="col-4 col-form-label">Level of Covid Case</label>
                <div class="col-8">
                  <select id="level" name="level" class="custom-select" required="required">
                    <option value=""></option>
                    <option value="C1" >C1</option>
                    <option value="C2A" >C2A</option>
                    <option value="C2B" >C2B</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="vaccine" class="col-4 col-form-label">Vaccination Info</label>
                <div class="col-8">
                  <select id="vaccine" name="vaccine" class="custom-select" required="required">
                    <option value=""></option>
                    <option value="Full Vaccine" >2 Vaccine</option>
                    <option value="Booster" >Booster</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="type" class="col-4 col-form-label">Type of Vaccine</label>
                <div class="col-8">
                  <select id="type" name="type" class="custom-select" required="required">
                    <option value=""></option>
                    <option value="pfizer" >Pfizer</option>
                    <option value="Sinovac" >Sinovac</option>
                    <option value="Astrazeneca" >Astrazeneca</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="image" class="col-4 col-form-label">Image</label>
                <div class="col-8">
                  <input id="image" name="image" type="file" class="control-custom">
                </div>
            </div>
            <div class="btn-block">
            <button type="submit" id="submit" name="submit">Submit</button>
          </div>
        </form>
        </div>
      </div>
        </section>

@endsection
