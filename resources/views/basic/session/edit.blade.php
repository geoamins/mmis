@extends('admin.adminmain', [
    'menu' => 'userconfiguration',
    'sub_menu' => 'roleslist'
])
@section('contents')
<section class="content-header">

</section>
<div class="container">
    <div class="justify-content-center">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="card-header">{{ __('Basic.Edit Session') }}
                <span class="float-right">
                    <a class="btn btn-primary" href="{{ route('session.index') }}">{{ __('Users.Back') }}</a>
                </span>
            </div>


                <form action="{{route('session.update',$data->SessionID)}}" method="POST">
                    {{csrf_field()}}
                    {{method_field('put')}}

                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">{{ __('Basic.Session Title') }}
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" value="{{ $data->SessionTitle }}" name="SessionTitle" placeholder="Enter Session Name" class="form-control ">

                    </div>
                    <div class="col-md-3 col-sm-3 ">
                        <button type="submit" class="btn btn-primary">{{ __('Users.Submit') }}</button>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
@endsection
