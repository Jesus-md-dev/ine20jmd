@extends('masters.master')

@section('content-center')
@if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success', null)[0] }}
</div>
@endif

@foreach ($errors->all() as $sError)
<div class="alert alert-warning">{{ $sError }}</div>
@endforeach
<div class="card m-4">
    <div class="card-header text-center font-weight-bold">
        Datos de usuario
    </div>
    <div class="card-body">
        <form name="edit-user-form" id="edit-user-form" action="{{ route('user.save') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="email">{{ __('auth.Email') }}</label>
                <input type="text" id="email" name="email" disabled="" value="{{ Auth::user()->email }}" />
                <br />
                <label for="name">{{ __('auth.Name') }}</label>
                <input type="text" id="name" name="name" class="form-control" required="" value="{{ Auth::user()->name }}" />
                <label for="oldPass">{{ __('auth.OldPass') }}</label>
                <input type="password" id="oldPass" name="oldPass" class="form-control" />
                <label for="newPass">{{ __('auth.NewPass') }}</label>
                <input type="password" id="newPass" name="newPass" class="form-control" />
                <label for="newPass2">{{ __('auth.NewPass2') }}</label>
                <input type="password" id="newPass2" name="newPass2" class="form-control" />
            </div>
            <button type="submit" class="btn btn-primary">{{ __('auth.Save') }}</button>
        </form>
    </div>
</div>
@endsection