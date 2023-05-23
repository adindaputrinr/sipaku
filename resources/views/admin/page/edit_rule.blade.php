@extends('admin.masters')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit rule') }}</div>

                    <div class="card-body">
                        <form action="/datarule/{{ $rule->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{ $rule->id }}">

                            <div class="form-group">
                                <label for="kodeRule">Kode Rule</label>
                                <input type="text" name="kodeRule" class="form-control @error('kodeRule') is-invalid @enderror" value="{{ old('kodeRule', $rule->kodeRule) }}" required autocomplete="kodeRule" autofocus>
                                @error('kodeRule')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="kodeGejala">Kode Gejala</label>
                                <input type="text" name="kodeGejala" class="form-control @error('kodeGejala') is-invalid @enderror" value="{{ old('kodeGejala', $gejala->kodeGejala) }}" required autocomplete="kodeGejala" autofocus>
                                @error('kodeGejala')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="kodePenyakit">Kode Penyakit</label>
                                <input type="text" name="kodePenyakit" class="form-control @error('kodePenyakit') is-invalid @enderror" value="{{ old('kodePenyakit', $penyakit->kodePenyakit) }}" required autocomplete="kodePenyakit" autofocus>
                                @error('kodePenyakit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="tindakan">Tindakan</label>
                                <input type="text" name="tindakan" class="form-control @error('tindakan') is-invalid @enderror" value="{{ old('tindakan', $tindakan->tindakan) }}" required autocomplete="tindakan" autofocus>
                                @error('tindakan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Perbarui</button>
                            <a href="{{ url('/datarule') }}" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
