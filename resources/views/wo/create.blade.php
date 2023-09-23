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
                                <label>Date Of Birth <span class="login-danger">*</span></label>
                                <input class="form-control datetimepicker @error('date_of_birth') is-invalid @enderror" name="date_of_birth" type="text" placeholder="DD-MM-YYYY" value="{{ old('date_of_birth') }}">
                                @error('date_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Roll </label>
                                <input class="form-control @error('roll') is-invalid @enderror" type="text" name="roll" placeholder="Enter Roll Number" value="{{ old('roll') }}">
                                @error('roll')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Blood Group <span class="login-danger">*</span></label>
                                <select class="form-control select @error('blood_group') is-invalid @enderror" name="blood_group">
                                    <option selected disabled>Please Select Group </option>
                                    <option value="A+" {{ old('blood_group') == 'A+' ? "selected" :""}}>A+</option>
                                    <option value="B+" {{ old('blood_group') == 'B+' ? "selected" :""}}>B+</option>
                                    <option value="O+" {{ old('blood_group') == 'O+' ? "selected" :""}}>O+</option>
                                </select>
                                @error('blood_group')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Religion <span class="login-danger">*</span></label>
                                <select class="form-control select @error('religion') is-invalid @enderror" name="religion">
                                    <option selected disabled>Please Select Religion </option>
                                    <option value="Hindu" {{ old('religion') == 'Hindu' ? "selected" :""}}>Hindu</option>
                                    <option value="Christian" {{ old('religion') == 'Christian' ? "selected" :""}}>Christian</option>
                                    <option value="Others" {{ old('religion') == 'Others' ? "selected" :""}}>Others</option>
                                </select>
                                @error('religion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>E-Mail <span class="login-danger">*</span></label>
                                <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" placeholder="Enter Email Address" value="{{ old('email') }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Class <span class="login-danger">*</span></label>
                                <select class="form-control select @error('class') is-invalid @enderror" name="class">
                                    <option selected disabled>Please Select Class </option>
                                    <option value="12" {{ old('class') == '12' ? "selected" :""}}>12</option>
                                    <option value="11" {{ old('class') == '11' ? "selected" :""}}>11</option>
                                    <option value="10" {{ old('class') == '10' ? "selected" :""}}>10</option>
                                </select>
                                @error('class')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Section <span class="login-danger">*</span></label>
                                <select class="form-control select @error('section') is-invalid @enderror" name="section">
                                    <option selected disabled>Please Select Section </option>
                                    <option value="A" {{ old('section') == 'A' ? "selected" :""}}>A</option>
                                    <option value="B" {{ old('section') == 'B' ? "selected" :""}}>B</option>
                                    <option value="C" {{ old('section') == 'C' ? "selected" :""}}>C</option>
                                </select>
                                @error('section')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Admission ID </label>
                                <input class="form-control @error('admission_id') is-invalid @enderror" type="text" name="admission_id" placeholder="Enter Admission ID" value="{{ old('admission_id') }}">
                                @error('admission_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group local-forms">
                                <label>Phone </label>
                                <input class="form-control @error('phone_number') is-invalid @enderror" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" name="phone_number" placeholder="Enter Phone Number" value="{{ old('phone_number') }}">
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group students-up-files">
                                <label>Upload Student Photo (150px X 150px)</label>
                                <div class="uplod">
                                    <label class="file-upload image-upbtn mb-0 @error('upload') is-invalid @enderror">
                                        Choose File <input type="file" name="upload">
                                    </label>
                                    @error('upload')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="student-submit">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
