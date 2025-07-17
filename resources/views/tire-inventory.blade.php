@extends('layouts.static')

@section('content')
<div class="card shadow-sm mx-auto mt-5">

    <div class="card-body">
        <a href="#" class="btn btn-link text-decoration-none text-danger mb-4">
            <i class="bi bi-arrow-left"></i>
            < Kembali </a>
                <h4 class="mb-5 ms-0" style="color:#4f2c3f"><b>Detail Inventory Ban</b></h4>

                <div class="row mb-3">
                    <div class="col-md-10">
                        <h6 class="mb-3 text-mute" style="color:#80495d"><b>Informasi Ban</b></h6>
                    </div>
                    <div class="col-md-2 mb-2">
                        <span style="float:right;margin-right:8px">
                            <button class="btn btn-sm btn-batal me-2">Batal</button>
                            <button class="btn btn-sm btn-simpan">Simpan</button>
                        </span>
                    </div>
                </div>
                <!-- <h6 class="mb-3 text-mute" style="color:#80495d"><b>Informasi Ban</b></h6> -->
                <div class="row g-3 mb-5 pb-5 shadow-sm mx-1" style="background-color:#fff">
                    <div class="col-md-3">
                        <label for="namaBan" class="form-label">Nama</label>
                        <input style="font-size:11pt" type="text" class="form-control" id="namaBan"
                            value="EMSA E-Miler Super">
                        <small class="form-text text-mute"><span class="text-danger">*</span> Wajib diisi</small>
                    </div>
                    <div class="col-md-3">
                        <label for="jenisBan" class="form-label">Jenis</label>
                        <select class="form-select" id="jenisBan" style="font-size:11pt">
                            <option selected>Ban Luar</option>
                            <option>Ban Dalam</option>
                        </select>
                        <small class="form-text text-mute"><span class="text-danger">*</span> Wajib diisi</small>

                    </div>
                    <div class="col-md-3">
                        <label for="brandBan" class="form-label">Brand</label>
                        <select class="form-select" id="brandBan" style="font-size:11pt">
                            <option selected>Bridgestone</option>
                            <option>Michelin</option>
                        </select>
                        <small class="form-text text-mut"><span class="text-danger">*</span> Wajib diisi</small>

                    </div>
                    <div class="col-md-3">
                        <label for="ukuranBan" class="form-label">Ukuran</label>
                        <input type="text" class="form-control" id="ukuranBan" value="9.00-20" style="font-size:11pt">
                    </div>
                </div>

                <h6 class="mb-3 text-mute" style="color:#80495d"><b>Daftar Ban</b></h6>
                @include('partials.tire-list-table')

    </div>
</div>
@endsection

@push('scripts')
<script>
// Optional: Add any specific JS for this page here
</script>
@endpush