@extends('Login.layout')

@section('content')

    <div class="col-sm-6 border-right left-panel pb-4 d-none d-sm-block">
        <div class="text-center mt-4">
            <img src="{{asset('img/bubu-we-inverted.png')}}" class="login-img" alt="" srcset="">
        </div>
        <div class="mt-5">
            <span>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sagittis consectetur odio in pellentesque. Ut eu convallis turpis. Nulla dignissim magna lorem, sit amet ultricies sem efficitur at. Sed condimentum ipsum ex, nec pharetra lacus suscipit non. Donec varius sed
            </span>
        </div>
    </div>
    <div class="col-sm-6 login-form pb-4">
        <div id="login" class="show">
            <div class="text-center mb-4">
                <h3>Login</h3>
            </div>
            <form>
                <div class="form-group my-4">
                    <input id="username" class="form-control" type="text" name="username" placeholder="Username">
                </div>
                <div class="input-group">
                    <input class="form-control password" type="password" name="password" placeholder="Password" aria-label="Recipient's text" aria-describedby="password">
                    <div class="input-group-append eye">
                        <span class="input-group-text"><i class="fas fa-eye-slash"></i></span>
                    </div>
                </div>
                <div class="float-right checkbox mt-3">
                    <input type="checkbox" value="None" id="keepMeLogin" name="keepMeLogin" checked />
                    <label for="keepMeLogin">Keep Me Login</label>
                </div>
                <button type="button" class="login-btn btn form-control mt-5">Login</button>
            </form>
            <div class="text-center register-link">
                <div class="pb-2">
                    <a href="#">Forgot Password?</a>
                </div>
                <span>Doesn't have an account yet?</span><a href="#" id="registration"> Click here</a>
            </div>
        </div>
        <div id="register" class="hide">
            <div class="text-center mb-4">
                <h3>Register</h3>
            </div>
            <form>
                <div class="form-group my-4">
                    <input id="regUsername" class="form-control" type="text" name="username" placeholder="Mobile No or Email">
                </div>
                <div class="input-group">
                    <input class="form-control password" type="password" name="password" placeholder="Password" aria-label="Recipient's text" aria-describedby="password">
                    <div class="input-group-append eye">
                        <span class="input-group-text"><i class="fas fa-eye-slash"></i></span>
                    </div>
                </div>
                <div id="termsAgreement" class="mt-4 mx-2">
                    <span>By clicking Register, you agree to our Terms, Data Policy and Cookies Policy. You may receive SMS Notifications from us and can opt out any time.</span>
                </div>
                <button type="button" class="login-btn btn form-control mt-5">Register</button>
            </form>
            <div class="text-center register-link">
                <span>Already have an account?</span><a href="#" id="loginNow"> Login now</a>
            </div>
        </div>
    </div>
    <script src="{{asset('js/Login/login.js')}}"></script>
@endsection
