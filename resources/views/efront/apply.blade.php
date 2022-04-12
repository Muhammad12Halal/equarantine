@extends('layouts.head')

@section('content')

<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <h1 class="text-white">APPLY HERE</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="appoinment section">
    <div class="container">
      <div class="row">
         <div class="testbox">
           <form action="{{ route('student.store') }}" method="POST" class="panel" enctype="multipart/form-data">
               @csrf
            <h4>A. Applicant Information</h4>
            
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

            <div class="item">
              <label for="name"> Full Name<span>*</span></label>
              <input id="name" type="text" name="name" required/>
            </div>
            <div class="item">
              <label for="email">Email Address<span>*</span></label>
              <input id="email" type="email" name="email" required />

               <div class="item">
              <label for="matric">Matric Number<span>*</span></label>
              <input id="matric" type="text" name="matric" required />
            </div>

            <div class="item">
              <label for="phone">Telephone No.<span>*</span></label>
              <input id="phone" type="text" name="phone" required/>
            </div>

             <div class="item">
              <label for="ic">IC Number<span>*</span></label>
              <input id="ic" type="text" name="ic" required />
            </div>

            <div class="item">
                <label for="quarantine">Type of Quarantine<span>*</span></label>
                <select id="quarantine" name="quarantine" class="custom-select" required="required">
                    <option value=""></option>
                    <option value="Home" >Home Quarantine</option>
                    <option value="College" >College Quarantine</option>
                  </select>
              </div>

            <div class="item">
              <label for="image">IMAGE<span>*</span></label>
              <input id="image" type="file" name="image" />
            </div>
            <div class="btn-block">
            <button type="submit" id="submit" name="submit">Submit</button>
          </div>
        </form>
             <br>
      </div>
        </section>

@endsection
