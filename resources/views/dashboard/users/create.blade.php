 @extends('layouts.app')

@section('row')

    <div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <strong>اضافة</strong>مستخدم
        </div>
        <div class="card-block">
            <form role="form" method="post" action="/dashboard/users/save"  class="form-horizontal ">
                @csrf
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="hf-email">الاسم كاملاُ</label>
                    <div class="col-md-9">
                        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="أدخل الاسم.." value="{{ old('name') }}">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <span class="help-block">من فضلك أدخل إسمك</span>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="hf-email">البريد الالكتروني</label>
                    <div class="col-md-9">
                        <input type="email" id="hf-email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="أدخل البريد الإلكتروني .." value="{{ old('email') }}" >
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <span class="help-block">رجاءا أدخل بريدك الإلكتروني</span>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="hf-password">كلمة المرور</label>
                    <div class="col-md-9">
                        <input type="password" id="hf-password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="أدخل كلمة المرور .." value="{{ old('password') }}">
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <span class="help-block">من فضلك أدخل رقمك السري</span>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="hf-password">إعادة كلمة المرور</label>
                    <div class="col-md-9">
                        <input type="password" id="hf-password" name="conf_password" class="form-control @error('conf_password') is-invalid @enderror" placeholder="أدخل كلمة المرور .." value="{{ old('conf_password') }}">
                        @error('conf_password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <span class="help-block">من فضلك أدخل رقمك السري</span>
                    </div>
                </div>


                <div class="card-footer">
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i>حفظ</button>
                </div>
            </form>
        </div>

    </div>
    </div>

@endsection
