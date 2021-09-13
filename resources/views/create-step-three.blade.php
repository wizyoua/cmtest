@extends('default')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ route('sellers.create.step.three.post') }}" method="post" >
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-body" style="text-align: center">
                        <img src="{{ asset('images/icon-sent.png') }}" alt="Thank You" style="max-width: 9em;">
                        <h4 class="mt-3">Thank you for applying to become a seller with Creative Market!</h4>
                        <small>Our curators are reviewing  your application. We'll get back to you within 5-7 business days. Meanwhile, you already have access to your Shop Studio. So let's start setting up your shop</small>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection