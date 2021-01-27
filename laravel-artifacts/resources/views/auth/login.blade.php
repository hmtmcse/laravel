<form role="form"  method="post" action="{{ url('/login') }}" >
    {{ csrf_field() }}


    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" placeholder="Email" required>
        @if ($errors->has('email'))
            <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
        @endif
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" placeholder="password" required>
        @if ($errors->has('password'))
            <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
        @endif
    </div>

    <button type="submit" >Login</button>
</form>
