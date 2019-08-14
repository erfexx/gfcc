@extends('user_view.master')

@section('content')
    <section class="site-section" id="contact-section">
        <div class="container">
            <div class="row mb-0">
                <div class="col-12">
                    <h2 class="section-title mb-3">Fill Form</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-5">
                    <form action="{{url('/join')}}" method="POST" class="p-5 bg-white">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Fullname</label>
                                <input type="text" id="full" name="full" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="text-black" for="lname">Nickname</label>
                                <input type="text" id="nick" name="nick" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="email">Birthdate</label>
                                <input type="date" id="bdate" name="bdate" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="email">Phone</label>
                                <input type="number" id="phone" name="phone" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="subject">Address</label>
                                <input type="text" id="subject" name="address" class="form-control">
                            </div>
                        </div>

                        {{--<div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="subject">Interest in</label>
                                <select class="form-control" id="interest">
                                    <option class="form-control"></option>
                                    <option class="form-control">Music</option>
                                    <option class="form-control">Vocal</option>
                                    <option class="form-control">Hospitality</option>
                                    <option class="form-control">Multimedia</option>
                                </select>
                            </div>
                        </div>--}}

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Send Data" class="btn btn-primary btn-md text-white">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection