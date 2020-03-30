@extends('layouts.index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="span12">
                <form class="form-horizontal" action='{{  route('auth/signIn')  }}' method="POST">
                    <fieldset>
                        <div id="legend">
                            <legend class="">Login</legend>
                        </div>
                        <div class="control-group">
                            <!-- Username -->
                            <label class="control-label"  for="username">Username</label>
                            <div class="controls">
                                <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <!-- Password-->
                            <label class="control-label" for="password">Password</label>
                            <div class="controls">
                                <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <!-- Button -->
                            <div class="controls">
                                <button class="btn btn-success">Login</button>
                            </div>
                        </div>
                        {{ isset($error) ? $error : '' }}
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

@endsection