@extends('layout.app')
@section('body')
<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-12 col-lg-9 col-xl-7">
                        <div class="card shadow-2-strong card-registration" style="border-radius: 15px">
                            <div class="card-body p-4 p-md-5">
                                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                                <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 mb-4">
                                            <div class="form-group">
                                                <label for="" class="font-weight-bold">Name</label>
                                                <input type="text" name="name" id="" class="form-control" placeholder="Enter Your Name" autocomplete="off" value="{{old('name')}}" />
                                                <span class="text-danger">
                                                    @error("name")
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <h6 class="mb-2 pb-1 font-weight-bold">Gender:</h6>
    
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="Female" />
                                                <label class="form-check-label" for="femaleGender">Female</label>
                                            </div>
    
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" id="maleGender" value="Male" />
                                                <label class="form-check-label" for="maleGender">Male</label>
                                            </div>
    
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" id="otherGender" value="Other" />
                                                <label class="form-check-label" for="otherGender">Other</label>
                                            </div>
                                            <br>
                                            <span class="text-danger">
                                                @error("gender")
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
    
                                        <div class="col-md-6 mb-4">
                                            <h6 class="mb-2 pb-1 font-weight-bold">Languages</h6>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="languages[]" id="inlineCheckbox1" value="English" />
                                                <label class="form-check-label" for="inlineCheckbox1">English</label>
                                            </div>
    
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="languages[]" id="inlineCheckbox2" value="Hindi" />
                                                <label class="form-check-label" for="inlineCheckbox2">Hindi</label>
                                            </div>
    
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="languages[]" id="inlineCheckbox3" value="Gujarati" />
                                                <label class="form-check-label" for="inlineCheckbox3">Gujarati</label>
                                            </div>
                                            <br>
                                            <span class="text-danger">
                                                @error("languages")
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
    
                                    <div class="row">
                                        <div class="col-md-6 mb-4 pb-2">
                                            <div class="form-group">
                                                <label for="" class="font-weight-bold">Email</label>
                                                <input type="email" name="email" id="" class="form-control" placeholder="Enter Your email" autocomplete="off" value="{{old('email')}}"/>
                                                <span class="text-danger">
                                                    @error("email")
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4 pb-2">
                                            <div class="form-group">
                                                <label for="" class="font-weight-bold">Mobile</label>
                                                <input type="tel" name="mobile" id="" class="form-control" placeholder="Enter Your Mobile Number" autocomplete="off" maxlength="10" value="{{old('mobile')}}"/>
                                                <span class="text-danger">
                                                    @error("mobile")
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="" class="font-weight-bold">Password</label>
                                                <input type="password" name="password" id="" class="form-control" placeholder="Enter Your Password" autocomplete="off"/>
                                                <span class="text-danger">
                                                    @error("password")
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="" class="font-weight-bold">Date Of Birth</label>
                                                <input type="date" name="date" id="" class="form-control" placeholder="Enter Your DOB" autocomplete="off"/>
                                                <span class="text-danger">
                                                    @error("date")
                                                        {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mb-4">
    
                                            <label class="form-label select-label font-weight-bold">Choose Caste</label>
                                            <select class="select form-control" name="caste" style="width: 100%;">
                                                <option disabled>Choose Caste</option>
                                                <option value="General">General</option>
                                                <option value="OBC">OBC</option>
                                                <option value="ST">ST</option>
                                                <option value="SC">SC</option>
                                            </select>
                                            <span class="text-danger">
                                                @error("caste")
                                                    {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
    
                                    <div class="row align-items-center ">
                                        <div class="col-md-2">
    
                                            <h6 class="mb-0 font-weight-bold">Upload CV</h6>
    
                                        </div>
                                        <div class="col-md-10">
    
                                            <input class="form-control form-control-lg" type="file" name="file" />
                                            <div class="small text-muted mt-2">Upload your CV/Resume or any other relevant file. Max file
                                                size 50 MB</div>
    
                                        </div>
                                        <span class="text-danger">
                                            @error("file")
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
    
                                    <div class="form-check d-flex justify-content-start mb-4 pb-3 py-4">
                                        <input class="form-check-input me-3" type="checkbox" value="" id=""/>
                                        <label class="form-check-label text-black" for="">
                                            I do accept the <a href="#!" class="text-black"><u>Terms and Conditions</u></a> of your
                                            site.
                                        </label>
                                    </div>
    
                                    <div class="mt-4 pt-2">
                                        <input class="btn btn-primary btn-lg" type="submit" value="Submit" name="submit" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
@endsection