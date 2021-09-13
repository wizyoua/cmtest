@extends('default')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('sellers.create.step.two.post') }}" method="POST">
                @csrf
                <div class="card">
  
                    <div class="card-body">
                            <div class="row">
                                <div class="col"><p>SELLER APPLICATION</p></div>
                                <div class="col" style="text-align: right;">STEP 2 OF 2</div>
                            </div>

                            <h4>Tell us a little about yourself</h4>
                            <p>Your answers will help us provide you with a more personlized experience as a seller!</p>
  
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
                                <label for="quality_level">When creating products to sell, which best describes your perspective on quality?</label> <br>
                                <select class="custom-select" aria-label="Default select example" name="quality_level">
                                    <option selected>Select Answer</option>
                                    <option value="1">I don't care what it takes, my products are the highest quality possible</option>
                                    <option value="2">I put in enough effort to make my product pretty high quality, but at some point my time is better spent elsewhere</option>
                                    <option value="3">I try to get quality products out quickly, even if I need ot take a shortcut now and then</option>
                                    <option value="4">I spend the minimum amount of time & effort it takes to create products that are acceptable quality</option>
                                    <option value="5">Quantity is more important to me than quality</option>
                                  </select>
                            </div>

                            <div class="form-group">
                                <label for="experience_level">How would you describe your experience level as an online seller?</label> <br>
                                <select class="custom-select" aria-label="Default select example" name="experience_level">
                                    <option selected>Select Answer</option>
                                    <option value="1">I sell on multiple marketplaces and through my own website</option>
                                    <option value="2">I have experience selling through only my websit</option>
                                    <option value="3">I have experience selling through multiple marketplaces</option>
                                    <option value="4">I have experience selling through one online marketplace</option>
                                    <option value="5">I'm new to selling creative products online</option>
                                  </select>
                            </div>

                            <div class="form-group">
                                <label for="business_level">How would you describe your understanding of business and marketing</label> <br>
                                <select class="custom-select" aria-label="Default select example" name="business_level">
                                    <option selected>Select Answer</option>
                                    <option value="1">I have an extensive background in business and/or marketing</option>
                                    <option value="2">I'm familiar with some skills & techniques, but I'm not sure how to apply them when selling my creative work</option>
                                    <option value="3">I'm vaguely aware of basic business & marketing concepts</option>
                                    <option value="4">I'm not interested in understanding business & marketing</option>
                                  </select>
                            </div>
                           
                            <div class="row">
                                <div class="col text-left">
                                    <a href="{{ route('sellers.create.step.one') }}" class="btn btn-danger pull-right">Back</a>
                                </div>
                                <div class="col text-right">
                                    <button type="submit" class="btn btn-primary">Next</button>
                                </div>
                            </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection