@extends('layouts.master')

@section('content')


 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>

<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Vaccine information </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            @php
                            $count = App\Models\Covid::where('vaccine', 'Booster')->count();
                                    echo $count;
                        @endphp
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            All Students apply</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            @php
                                $count = App\Models\Student::where('quarantine', 'College')->count();
                                        echo $count;
                            @endphp
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 <!-- Content Row -->
    <div class="row">

    <div class="col-lg-12 mb-4">

        <!-- Approach -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Quarantine College</h6>
            </div>
            <div class="card-body">
                <p>Hai <span style="color: red">{{ auth()->user()->name }}</span>, this admin dashboard for quarantine system in Kolej Awang Had Salleh in Universiti Pendidikan Sultan Azlan Shah. </p>
                <p>Here you can check about student infromation, Vaccine information and Kolej information of student who apply in quarantine system.</p>
            </div>
        </div>

    </div>
</div>
@endsection
