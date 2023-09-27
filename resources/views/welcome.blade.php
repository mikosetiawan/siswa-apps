@extends('layouts.main')

@include('pages.navbar')

@section('container')
    <div class="row px-1 py-1 my-3">
        <div class="col-lg-6">
            <h1 style="font-size: 80px">Hallo! Wellcome <span class="fc-slate">Siswa Apps!</span></h1>
            <h1>Training On Laravel 9.0 v.01</h1>
        </div>
        <div class="col-lg-6">
            <img src="img/school.png" alt="" class="img-fluid">
        </div>
    </div>
@endsection