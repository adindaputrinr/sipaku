@extends('admin.masters')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Data Rule</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('rule.store') }}">
                            {{-- <form action="/datagejala/{{$gejala->kodeGejala}}" method="post"> --}}
                            @csrf

                            <div class="form-group row">
                                <label for="kodeRule" class="col-md-4 col-form-label text-md-right">Kode Rule</label>

                                <div class="col-md-6">
                                    <input id="kodeRule" type="text"
                                        class="form-control @error('kodeRule') is-invalid @enderror" name="kodeRule"
                                        value="{{ old('kodeRule') }}" required autocomplete="kodeRule" autofocus>

                                    @error('kodeRule')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="kodeGejala" class="col-md-4 col-form-label text-md-right">Kode Gejala</label>

                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        @foreach ($rule as $rules)
                                        <select class="form-control" input id="kodeRule" type="text" class="form-control @error('kodeRule') is-invalid @enderror" name="kodeRule" value="{{ old('kodeRule', $rules->kodeRule) }}" required autocomplete="kodeRule" autofocus>
                                            <option>Kode Gejala</option>
                                            <option>{{ old('kodeGejala') }}</option>
                                            <option>{{ $rules -> kodeGejala }}</option>
                                            <option>{{ $rules -> kodeGejala }}</option>
                                            <option>{{ $rules -> kodeGejala }}</option>
                                        </select>    
                                        @endforeach
                                        </div> 
                                    @error('kodeGejala')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> --}}
                            </div>

                            <div class="form-group row">
                                <label for="kodePenyakit" class="col-md-4 col-form-label text-md-right">Kode
                                    Penyakit</label>

                                <div class="form-group">
                                    {{-- <label for="kodePenyakit">Kode Penyakit</label> --}}
                                    <select name="kodePenyakit" id="kodePenyakit" class="form-control">
                                        @foreach ($penyakit as $row)
                                            <option value="{{ $row->id }}">{{ $row->kodePenyakit }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control">
                                          <option>Kode Penyakit</option>
                                          <option>Sistem Informasi</option>
                                          <option>Teknik Komputer</option>
                                          <option>Manajemen Informatika</option>
                                        <option>Komputerisasi Akuntansi</option>
                                        </select>
                                      </div>

                                    @error('kodePenyakit')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> --}}
                            </div>

                            <div class="form-group row">
                                <label for="Tindakan" class="col-md-4 col-form-label text-md-right">Tindakan</label>

                                <div class="col-md-6">
                                    <input id="Tindakan" type="text"
                                        class="form-control @error('Tindakan') is-invalid @enderror" name="Tindakan"
                                        value="{{ old('Tindakan') }}" required autocomplete="Tindakan" autofocus>

                                    @error('Tindakan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Tambah Data
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
