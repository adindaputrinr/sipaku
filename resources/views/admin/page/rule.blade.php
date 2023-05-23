@extends('admin.masters')

@section('css')
<link href="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Kelola Data Rule</h1>

<!-- DataTales Example -->
<div class="card border-0 shadow rounded">
    <div class="card-body">
        <a href="{{ route('rule.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id</th>
                        <th>Kode Rule</th>
                        <th>Kode Gejala</th>
                        <th>Kode Penyakit</th>
                        <th>Tindakan</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Id</th>
                        <th>Kode Rule</th>
                        <th>Kode Gejala</th>
                        <th>Kode Penyakit</th>
                        <th>Tindakan</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($datarule as $data)
                    <tr>
                        <td>{{$loop -> iteration}}</td>
                        <td>{{$data -> id}}</td>
                        <td>{{$data -> kodeRule}}</td>
                        <td>{{$data -> kodeGejala}}</td>
                        <td>{{$data -> kodePenyakit}}</td>
                        <td>{{$data -> tindakan}}</td>
                        <td>
                            <a href="{{ route('rule.edit', $rule->id) }}" class="btn btn-warning"><i class="fa-solid fa-edit"></i></a>
                        </td>
                        <td>
                        <form action="{{ route('rule.destroy', $rule->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fa-solid fa-trash"></i></button>
                        </form>
                        </td>
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