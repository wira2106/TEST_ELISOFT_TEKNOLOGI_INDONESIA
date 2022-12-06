@extends('layouts.template')

@section('title','Dashboard ')

@php
$dashboard = true;
@endphp

@section('header')
<div class="page-inner py-5 bg-dark">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
            <h2 class="text-white pb-2 fw-bold">{{ (request()->is('*detail*'))? 'Detail '.$user->name:'Dashboard'}}</h2>
            <!-- <h5 class="text-white op-7 mb-2">Selamat datang, <strong>{{ Auth::user()->nama ?? 'Guest' }}</strong></h5> -->
        </div>
    </div>
</div>
@endsection
@section('content')

<div class="row mt--2">
    <!-- Profil -->
    <div class="col-md-6">
        <div class="card card-profile bg-dark2">
            <div class="card-header" style="background-image: url({{url('/homepage/assets/img/bg-signup.jpg')}}); height:240px;">
                <div class="profile-picture">
                    <div class="avatar avatar-xl">
                        <img src="{{ (request()->is('*detail*')) ?  url('/image/'.$user->foto) : url('/image/'.Auth::user()->foto)}}" alt="..." class="avatar-img rounded-circle">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="user-profile text-center">
                    <div class="name text-white" id="name">{{ (request()->is('*detail*')) ? $user->name : Auth::user()->name}}</div>
                    <div class="job text-white"><b>{{ (request()->is('*detail*')) ? $user->role_status :Auth::user()->role_status}}</b></div>
                    <div class="job text-white" id="jabatan">{{ (request()->is('*detail*')) ? $user->jabatan :Auth::user()->jabatan}}</div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalPublish" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><span class="title"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{url('/dashboard/publish')}}" method="post" id="form_data">
                        @csrf
                        <div class="row pt-3">
                            <div class="col-md-12" id="insert_field1">
                                <label for="nilai">Batas Publish Pengumuman Nilai</label>
                                <input type="date" id="nilai" class="form-control form-control-sm" name="ket" placeholder="Masukkan tanggal publish ..." autocomplete="off" required value="">
                                <div class="ket"></div>
                            </div>
                        </div>
                        <input type="hidden" name="kategori" id="id_nilai" value="publish nilai">
                        <input type="hidden" name="redirect" value="{{url('/dashboard')}}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<!-- <script src="{{asset('js/form/dashboard/form.js')}}"></script> -->
<script src="{{asset('js/submitForm.js')}}"></script>
<script src="{{asset('js/hapus.js')}}"></script>
<!-- <script src="{{url('homepage/js/pengumuman.js')}}"></script> -->
<script>
    $(document).ready(function(){
        let name = $('#name').html()
        let jabatan = $('#jabatan').html()
        let getLogin = localStorage.getItem("login");
        if(!getLogin){
            Swal.fire(
                'Selamat Datang',
                name,
                'success'
            )
        }
        localStorage.setItem('login', true);
    });
</script>
@endsection
@push('bottom')

@endpush