@extends('layouts.blank')
@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-12">
                @if(session()->has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{session('error')}}
                    </div>
                @endif
                <div class="mar-ver pad-btm text-center">
                    <h1 class="h3">code</h1>
                    
                </div>
                <div class="text-muted font-13">
                    <form method="POST" action="{{ route('purchase.code') }}">
                        @csrf
                        <div class="form-group">
                            <label for="purchase_code">User</label>
                            <input type="text" value="{{env('BUYER_USERNAME')}}" class="form-control" id="username"
                                   name="username" required>
                        </div>

                        <div class="form-group">
                            <label for="purchase_code">Code</label>
                            <input type="text" value="{{env('PURCHASE_CODE')}}" class="form-control" id="purchase_key"
                                   name="purchase_key" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-info">Continue</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
