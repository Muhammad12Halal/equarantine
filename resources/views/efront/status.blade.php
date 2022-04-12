@extends('layouts.panel')

@section('content')

    <section class="page-title bg-1">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="block text-center">
              <span class="text-white"></span>
              <h1 class="text-capitalize mb-5 text-lg">Application Status</h1>

              <!-- <ul class="list-inline breadcumb-nav">
                <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
                <li class="list-inline-item"><span class="text-white">/</span></li>
                <li class="list-inline-item"><a href="#" class="text-white-50">Contact Us</a></li>
              </ul> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- contact form start -->

    <section class="contact-form-wrap section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h2 class="text-md mb-2">Check Your Application Status</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p class="mb-5">This page will show list of name person who their apply has been approved by administrator</p>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="table-wrap">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Pictures</th>
                        <th>Name</th>
                        <th>Quarantine</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($student as $item)
                        @if ($item -> status == "Approve")
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->matric }}</td>
                            <td>{{ $item->quarantine }}</td>
                            <td style="color: green">{{ $item->status }}</td>
                            <td><img src="{{ asset('images/'.$item->image) }}" alt="{{ $item->image }}" class="img-thumbnail" style="width: 80px; height: 80px;">
                            </td>
                        </tr>
                        @endif
                        @empty

                        @endforelse

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
    </section>

@endsection
