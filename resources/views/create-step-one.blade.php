@extends('default')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('sellers.create.step.one.post') }}" method="POST">
                @csrf
  
                <div class="card">
                    <div class="card-header">Step 1: Basic Info</div>
  
                    <div class="card-body">
  
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
  
                            <div class="form-group">
                                <label for="first_name">First Name:</label>
                                <input type="text" value="{{ $seller->name ?? '' }}" class="form-control" id="firstName"  name="first_name">
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name:</label>
                                <input type="text"  value="{{{ $seller->amount ?? '' }}}" class="form-control" id="lastName" name="last_name"/>
                            </div>
   
                            <div class="form-group">
                                <label for="category">Shop Category:</label>
                                <textarea type="text"  class="form-control" id="category" name="category">{{{ $seller->description ?? '' }}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="portfolio">Portfolio Link:</label>
                                <input type="text"  value="{{{ $seller->amount ?? '' }}}" class="form-control" id="portfolioLink" name="portfolio"/>
                            </div>

                            <div class="form-group">
                                <label for="portfolio_content">Yes, I confirm the content I submit is authorized by me.</label>
                                <input class="form-control" name="portfolio_content" type="checkbox" value="" aria-label="Checkbox for following text input">
                            </div>
                            
                            <div class="form-group">
                                <label for="online_store">Do you already have an online store?</label>
                                <input class="form-check-input" type="radio" value="" aria-label="Radio button for following text input" name="online_store">
                            </div>

                            <div class="form-group">
                                <label for="stores_desc">Shop Category:</label>
                                <textarea type="text"  class="form-control" id="stores_desc" name="stores_desc">{{{ $seller->description ?? '' }}}</textarea>
                            </div>
                    </div>
  
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection