@extends('layouts.master')

@section('content')
<h1>Create Work Order</h1>
<p>Ini adalah halaman pembuatan Work Order.</p>
<div class="row">
    <div class="col-sm-12">
        <div class="card comman-shadow">
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <h5 class="form-title student-info">Work Order Information
                                <span>
                                    <a href="javascript:;"><i class="feather-more-vertical"></i></a>
                                </span>
                            </h5>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>No Work Order <span class="login-danger">*</span></label>
                                <input type="text" class="form-control @error('no_wo') is-invalid @enderror" name="no_wo" placeholder="Enter Work Order" value="{{ old('no_wo') }}">
                                @error('no_wo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Alamat <span class="login-danger">*</span></label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" placeholder="Enter Alamat" value="{{ old('alamat') }}">
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms calendar-icon">
                                <label>Kategori OA <span class="login-danger">*</span></label>
                                <input class="form-control datetimepicker @error('kategori_oa') is-invalid @enderror" name="kategori_oa" type="text" placeholder="DD-MM-YYYY" value="{{ old('kategori_oa') }}">
                                @error('kategori_oa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Nama PIC </label>
                                <input class="form-control @error('nama_pic') is-invalid @enderror" type="text" name="nama_pic" placeholder="Enter nama_pic Number" value="{{ old('nama_pic') }}">
                                @error('nama_pic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Tlp. PIC </label>
                                <input class="form-control @error('telp_pic') is-invalid @enderror" type="text" name="telp_pic" placeholder="Enter telp_pic Number" value="{{ old('telp_pic') }}">
                                @error('telp_pic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Layanan Mbps </label>
                                <input class="form-control @error('layanan_mbps') is-invalid @enderror" type="text" name="layanan_mbps" placeholder="Enter layanan_mbps Number" value="{{ old('layanan_mbps') }}">
                                @error('layanan_mbps')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Segmen <span class="login-danger">*</span></label>
                                <input class="form-control @error('segmen') is-invalid @enderror" type="text" name="segmen" placeholder="Enter segmen Address" value="{{ old('segmen') }}">
                                @error('segmen')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="pt-3 col-12">
                            <h5 class="form-title student-info">P2P
                                <span>
                                    <a href="javascript:;"><i class="feather-more-vertical"></i></a>
                                </span>
                            </h5>
                        </div>

                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>SID </label>
                                <input class="form-control @error('sid') is-invalid @enderror" type="text" name="sid" placeholder="Enter Admission ID" value="{{ old('sid') }}">
                                @error('sid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>SN ONT </label>
                                <input class="form-control @error('snont') is-invalid @enderror" type="text" name="snont" placeholder="Enter Admission ID" value="{{ old('snont') }}">
                                @error('snont')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>LAN </label>
                                <input class="form-control @error('lan') is-invalid @enderror" type="text" name="lan" placeholder="Enter Admission ID" value="{{ old('lan') }}">
                                @error('lan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>IP </label>
                                <input class="form-control @error('ip') is-invalid @enderror" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" name="ip" placeholder="Enter Phone Number" value="{{ old('ip') }}">
                                @error('ip')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>GW </label>
                                <input class="form-control @error('gw') is-invalid @enderror" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" name="gw" placeholder="Enter Phone Number" value="{{ old('gw') }}">
                                @error('gw')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>SM </label>
                                <input class="form-control @error('sm') is-invalid @enderror" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" name="sm" placeholder="Enter Phone Number" value="{{ old('sm') }}">
                                @error('sm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="pt-4 col-12">
                            <div class="student-submit">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a class="btn btn-danger" href="{{ route('wo.index') }}">Back</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
