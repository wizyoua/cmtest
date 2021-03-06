@extends('default')
@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-8">
            <form action="{{ route('sellers.create.step.one.post') }}" method="POST">
                @csrf
  
                <div class="card">
  
                    <div class="card-body">
                            <div class="row">
                                <div class="col"><p>SELLER APPLICATION</p></div>
                                <div class="col" style="text-align: right;">STEP 1 OF 2</div>
                            </div>

                            <h4>Share your work with us</h4>
                            <small>To ensure the quality of our marketplace, we limit our seller community to the most qualified creators. Let our curators know why you'd be a great seller.</small>
                            
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                                
                            <div class="row pt-3">
                                <div class="col">
                                    <label for="first_name">First Name:</label>
                                    <input type="text" value="{{ $seller->name ?? '' }}" class="form-control" id="firstName"  name="first_name">
                                </div>
                                <div class="col">
                                    <label for="last_name">Last Name:</label>
                                    <input type="text"  value="{{{ $seller->amount ?? '' }}}" class="form-control" id="lastName" name="last_name"/>
                                </div>
                            </div>
                            

                            <div class="form-group  pt-3">
                                <label for="category_content">Your Shop Category</label> <br>
                                <select class="custom-select" name="category_content">
                                    <option selected>Select Category</option>
                                    <option value="1">Graphics</option>
                                    <option value="2">Fonts</option>
                                    <option value="3">Templates</option>
                                    <option value="4">Add-ons</option>
                                    <option value="5">Photos</option>
                                    <option value="6">Web Themes</option>
                                    <option value="7">3D</option>
                                  </select>
                            </div>

                            <div class="form-group">
                                <label for="portfolio">Portfolio Link:</label>
                                <input type="text"  value="{{{ $seller->amount ?? '' }}}" class="form-control" id="portfolioLink" name="portfolio"/>
                            </div>

                            <div class="form-group">
                                <label for="portfolio_content">Yes, I confirm the content I submit is authorized by me.</label> <br>
                                <select class="custom-select" name="portfolio_content">
                                    <option selected>Open this select menu</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                  </select>
                            </div>

                            <div class="form-group">
                                <label for="online_store">Do you already have an online store?</label> <br>
                                <select class="custom-select" aria-label="Default select example" name="online_store">
                                    <option selected>Open this select menu</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                  </select>
                            </div>

                            <div class="form-group">
                                <label for="stores_desc">Shop Description:</label>
                                <textarea type="text"  class="form-control" id="stores_desc" name="stores_desc">{{{ $seller->description ?? '' }}}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary float-right">Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection