@extends('layouts.base')

@section('csslist')
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    
    <link rel="stylesheet" href="{{ asset('css/theme.css')}}">
    <link href="{{ asset('css/3/main.css')}}" rel="stylesheet">
    <script src="https://sdk.accountkit.com/en_US/sdk.js"></script>
@endsection

@section('content')
<body>
  <section class="slide fade bg13 oneSide">
    <div class="content oneSide">
      <div class="container">
        <div class="wrap cropBottomSide">
          <h2 class="ae-1" style="color:white">Sign Up</h2>
          <div class="fix-5-12 box-43">
            <div class="pad shadow selected ae-2">
              <form action="{{ route('register') }}" method="post" id="form" class="wide center">
                {{ csrf_field() }}
                <label class="uppercase ae-3" for="name">Full Name</label>
                <input class="stroke round wide ae-4" id="name" type="text" name="name" placeholder="Name" value="{{old('name')}}" required autofocus/>
                  @if ($errors->has('name'))
                      <p style="color:red">
                          {{ $errors->first('name') }}
                      </p>
                  @endif   

                <label class="uppercase ae-3" for="email">Email Address</label>
                <input class="stroke round wide ae-4" id="email" type="email" name="email" placeholder="Email" value="{{old('email')}}" required autofocus/>
                  @if ($errors->has('email'))
                      <p style="color:red">
                          {{ $errors->first('email') }}
                      </p>
                  @endif   
                <label class="uppercase ae-5" for="password">Password</label>
                <input class="stroke round wide ae-6" id="password" type="password" name="password" placeholder="Password" required/>
                <label class="uppercase ae-5" for="password_confirmation">Confirm Password</label>
                <input class="stroke round wide ae-6" id="password" type="password" name="password_confirmation" placeholder="Confirm Password" required/>
                  @if ($errors->has('password'))
                      <p style="color:red">
                          <strong>{{ $errors->first('password') }}</strong>
                      </p>
                  @endif              
                <input class="button wide teal round uppercase ae-8 buttonBigger" type="submit" name="submit" id="submit-button" value="Sign Up"/>
              </form>

              <!-- <a href="{{ url('/login/facebook') }}" class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
@endsection

@section('jslist')
    <!-- Scripts -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="{{ asset('js/1/main.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
@endsection
