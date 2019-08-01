@extends('layouts.master')


@section('title', 'Main Page')



@section('content')


    <div class="row">


        <div class="col-md-6">

            <h3>Sign up</h3>

            <form method="post" action="/signup">
                @csrf

                <div class="form-group">

                    <label for="email"> Your E-mail</label>
                    <input class="form-control" type="email" name="email" id="email">


                    <label for="first_name">First Name</label>
                    <input  class='form-control' type="text" name="first_name" id="first_name">

                    <label for="password">Password</label>
                    <input  class='form-control' type="password" name="password" id="password">


                    <button class="btn btn-primary" type="submit"> Submit</button>
                </div>






            </form>




        </div>

        <div class="col-md-6">

            <h3> Sign in</h3>

            <form method="post" action="/signin">
                @csrf

                <div class="form-group">

                    <label for="email"> Your E-mail</label>
                    <input class="form-control" type="email" name="email" id="email">


                    <label for="password">Password</label>
                    <input  class='form-control' type="password" name="password" id="password">


                    <button class="btn btn-primary" type="submit"> Sign in</button>
                </div>






            </form>



        </div>

        </div>





    @endsection
