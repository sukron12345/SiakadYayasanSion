@extends('template_backend.home')
@section('heading')
  Data SPP
@endsection
@section('page')
  <li class="breadcrumb-item active"><a href="{{ route('spp') }}">SPP</a></li>
  <li class="breadcrumb-item active"> </li>
@endsection
@section('content')
@php
    $no = 1;
@endphp
<div class="col-md-12">
    <div class="card">
        <div class="card-header">

            <a href="{{ route('spp') }}" class="btn btn-default btn-sm"><i class="nav-icon fas fa-arrow-left"></i> &nbsp; Kembali</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Hari</th>
                    <th>Jadwal</th>
                    <th>Jam Pelajaran</th>
                    <th>Ruang Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spps as $spp)
                <tr>
                    <td>{{ $spp->ket }}</td>
                    <td>{{ $spp->ket }}</td>
                    <td>{{ $spp->ket }}</td>
                    <td>{{ $spp->ketn }}</td>
                    <td>{{ $spp->ket }}</td>
                
                 </td>
               
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.col -->

@endsection
@section('script')
    <!-- <script>
        $("#MasterData").addClass("active");
        $("#liMasterData").addClass("menu-open");
        $("#DataJadwal").addClass("active");
    </script> -->
@endsection