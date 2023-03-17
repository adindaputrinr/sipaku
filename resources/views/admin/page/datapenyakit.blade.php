@extends('admin.masters')

@section('css')
<link href="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Kelola Data Penyakit</h1>

<!-- DataTales Example -->
<div class="card border-0 shadow rounded">
    <div class="card-body">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id</th>
                        <th>Kode Penyakit</th>
                        <th>Penyakit</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Id</th>
                        <th>Kode Penyakit</th>
                        <th>Penyakit</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($datapenyakit as $penyakit)
                    <tr>
                        <td>{{$loop -> iteration}}</td>
                        <td>{{$penyakit -> id}}</td>
                        <td>{{$penyakit -> kodePenyakit}}</td>
                        <td>{{$penyakit -> penyakit}}</td>
                        <td>Aksi</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
@endsection

@section('scripts')
    <script src="{{asset('assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('assets/js/demo/datatables-demo.js')}}"></script>
@endsection