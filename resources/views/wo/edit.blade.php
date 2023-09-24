@extends('layouts.master')

@section('content')
    <h1>Edit Work Order</h1>
    <p>Ini adalah halaman pengeditan Work Order.</p>
    <div class="row">
        <div class="col-sm-12">
            <div class="card comman-shadow">
                <div class="card-body">
                    <form action="{{ route('wo.update', $workorder->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') <!-- Tambahkan ini untuk menentukan metode HTTP PUT -->
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
                                    <input type="text" class="form-control @error('no_wo') is-invalid @enderror"
                                        name="no_wo" placeholder="Enter Work Order" value="{{ $workorder->no_wo }}">
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
                                    <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                        name="alamat" placeholder="Enter Alamat" value="{{ $workorder->alamat }}">
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
                                    <select name="kategori_oa" id="kategori_oa" class="form-select">
                                        <option value="">Pilih Kategori OA</option>
                                        @foreach ($kategorys as $kategori)
                                            <option value="{{ $kategori->id }}"
                                                {{ $workorder->kategori_oa == $kategori->id ? 'selected' : '' }}>
                                                {{ $kategori->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('kategori_oa')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Nama PIC </label>
                                    <input class="form-control @error('nama_pic') is-invalid @enderror" type="text"
                                        name="nama_pic" placeholder="Enter nama_pic Number" value="{{ $workorder->nama_pic }}">
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
                                    <input class="form-control @error('telp_pic') is-invalid @enderror" type="text"
                                        name="telp_pic" placeholder="Enter telp_pic Number" value="{{ $workorder->telp_pic }}">
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
                                    <input class="form-control @error('layanan_mbps') is-invalid @enderror" type="text"
                                        name="layanan_mbps" placeholder="Enter layanan_mbps Number"
                                        value="{{ $workorder->layanan_mbps }}">
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
                                    <select name="segmen" id="segmen" class="form-select">
                                        <option value="">Pilih Segmen</option>
                                        @foreach ($segmens as $segmen)
                                            <option value="{{ $segmen->id }}"
                                                {{ $workorder->segmen_oa == $segmen->id ? 'selected' : '' }}>
                                                {{ $segmen->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('segmen')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
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
                                    <input class="form-control @error('sid') is-invalid @enderror" type="text"
                                        name="sid" placeholder="Enter Admission ID" value="{{ $workorder->sid }}">
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
                                    <input class="form-control @error('snont') is-invalid @enderror" type="text"
                                        name="snont" placeholder="Enter Admission ID" value="{{ $workorder->snont }}">
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
                                    <input class="form-control @error('lan') is-invalid @enderror" type="text"
                                        name="lan" placeholder="Enter Admission ID" value="{{ $workorder->lan }}">
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
                                    <input class="form-control @error('ip') is-invalid @enderror" type="text"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');"
                                        name="ip" placeholder="Enter Phone Number" value="{{ $workorder->ip }}">
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
                                    <input class="form-control @error('gw') is-invalid @enderror" type="text"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');"
                                        name="gw" placeholder="Enter Phone Number" value="{{ $workorder->gw }}">
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
                                    <input class="form-control @error('sm') is-invalid @enderror" type="text"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');"
                                        name="sm" placeholder="Enter Phone Number" value="{{ $workorder->sm }}">
                                    @error('sm')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- Sisipkan kembali bagian lain sesuai kebutuhan Anda -->
                            <!-- Anda dapat menggunakan nilai yang telah ada dari variabel $workorder -->
                            <div class="pt-4 col-12">
                                <div class="student-submit">
                                    <button type="submit" class="btn btn-primary">Update</button>
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
