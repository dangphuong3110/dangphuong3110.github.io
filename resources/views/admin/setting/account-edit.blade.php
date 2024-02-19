@extends('layouts.layout')

@section('title', 'Management Account')

@section('route-title')
    {{ route('account.index') }}
@endsection

@section('content')
    <div class="card">
        <div class="card-header title">Edit Account</div>
        <div class="card-body">
            <form action="{{ route('account.update', $account->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">Enter information</div>
                            <div class="card-body">
                                <div class="row mb-3 border-bottom border-dark-subtle">
                                    <label class="col-12 mb-1 col-label-form">Username</label>
                                    <div class="col-12 mb-3">
                                        <input type="text" name="username" class="form-control" value="{{ $account->username }}" required/>
                                    </div>
                                    @if($errors->has('username'))
                                        <div class="alert alert-danger" style="font-size: small">
                                            {{ $errors->first('username') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="row mb-3 border-bottom border-dark-subtle">
                                    <label class="col-12 mb-1 col-label-form">First name</label>
                                    <div class="col-12 mb-3">
                                        <input type="text" name="first-name" class="form-control" value="{{ explode(" " ,$account->name)[1] }}" required/>
                                    </div>
                                    @if($errors->has('first-name'))
                                        <div class="alert alert-danger" style="font-size: small">
                                            {{ $errors->first('first-name') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="row mb-3 border-bottom border-dark-subtle">
                                    <label class="col-12 mb-1 col-label-form">Last name</label>
                                    <div class="col-12 mb-3">
                                        <input type="text" name="last-name" class="form-control" value="{{ explode(" " ,$account->name)[0] }}" required/>
                                    </div>
                                    @if($errors->has('last-name'))
                                        <div class="alert alert-danger" style="font-size: small">
                                            {{ $errors->first('last-name') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="row mb-3 border-bottom border-dark-subtle">
                                    <label class="col-12 mb-1 col-label-form">Email</label>
                                    <div class="col-12 mb-3">
                                        <input type="email" name="email" class="form-control" value="{{ $account->email }}" required/>
                                    </div>
                                    @if($errors->has('email'))
                                        <div class="alert alert-danger" style="font-size: small">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="row mb-3 border-bottom border-dark-subtle">
                                    <label class="col-12 mb-1 col-label-form">Phone number</label>
                                    <div class="col-12 mb-3">
                                        <input type="text" name="phone-number" class="form-control" value="{{ $account->phone_number }}"/>
                                    </div>
                                </div>
                                <div class="row mb-3 border-bottom border-dark-subtle">
                                    <label class="col-12 mb-1 col-label-form">Password</label>
                                    <div class="col-12 mb-3">
                                        <input type="password" name="password" class="form-control" value="######" autocomplete="off"/>
                                    </div>
                                    @if($errors->has('password'))
                                        <div class="alert alert-danger" style="font-size: small">
                                            {{ $errors->first('password') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="row">
                                    <label class="col-12 mb-1 col-label-form">Confirm password</label>
                                    <div class="col-12">
                                        <input type="password" name="confirm-password" class="form-control"/>
                                    </div>
                                    @if($errors->has('confirm-password'))
                                        <div class="alert alert-danger mt-3" style="font-size: small">
                                            {{ $errors->first('confirm-password') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="ms-auto p-2 me-5">
                        <a href="{{ route('account.index') }}" class="btn btn-danger me-2">Cancel</a>
                        <input type="submit" class="btn btn-warning" value="Save"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

