@extends('layout.app')
@section('body')
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <h3 class="ms-3 me-3"><a class="navbar-brand" href="{{ route('index') }}">CRUD</a></h3>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="container-fluid ms-3 me-3">
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}"><i
                                class="bi bi-person-circle fs-3"></i></a>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <section class="section about-section" id="about">
                <div class="container">
                    <h1 class="text-center mb-5">Customer Detail</h1>
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-lg-6">
                            <div class="about-text go-to">
                                {{-- <h6 class="theme-color lead">A Lead UX &amp; UI designer based in Canada</h6> --}}
                                {{-- <p>I <mark>design and develop</mark> services for customers of all sizes, specializing in
                                creating stylish, modern websites, web services and online stores. My passion is to
                                design digital user experiences through the bold interface and meaningful interactions.
                            </p> --}}
                                <div class="row about-list">
                                    <div class="col-md-6">
                                        <div class="media">
                                            <label>Name</label>
                                            <p>{{ $customer->name }}</p>
                                        </div>
                                        <div class="media">
                                            <label>Gender</label>
                                            <p>{{ $customer->gender }}</p>
                                        </div>
                                        <div class="media">
                                            <label>Languages</label>
                                            <p>
                                                @php
                                                // database in return data in string fromate show we can tranform to array for match in_array condition is lagnagua match
                                                    $languages= explode(',',$customer->languages);
                                                @endphp
                                                @foreach ($languages as $lang)
                                                    {{ $lang }}
                                                @endforeach
                                            </p>
                                        </div>
                                        <div class="media">
                                            <label>E-mail</label>
                                            <p>{{ $customer->email }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="media">
                                            <label>Phone</label>
                                            <p>{{ $customer->mobile }}</p>
                                        </div>
                                        {{-- <div class="media">
                                        <label>Password</label>
                                        <p>{{ $customer->password }}</p>
                                    </div> --}}
                                        <div class="media">
                                            <label>Date</label>
                                            <p>{{ $customer->date }}</p>
                                        </div>
                                        <div class="media">
                                            <label>Caste</label>
                                            <p>{{ $customer->caste }}</p>
                                        </div>
                                        <div class="button">
                                            <a href="{{ route('edit', ['id' => $customer->id]) }}"><button
                                                    class="btn btn-primary mt-3 w-25">Edit</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-avatar">
                                {{-- <img src="https://bootdey.com/img/Content/avatar/avatar7.png" title="" alt=""> --}}
                                @if (file_exists(public_path('upload/' . $customer->file)))
                                    <img src="{{ asset('upload/' . $customer->file) }}" title="" alt="">
                                @else
                                    <img src="{{ $customer->file }}" title="" alt="">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <div class="container-fluid mt-5">
            <footer class="d-flex justify-content-center align-items-center py-3 my-4 border-top">
                <div class="col-12 col-md-12 col-sm-12 d-flex align-items-center">
                    <span class="mb-3 mb-md-0 text-body-secondary">© 2023 Company, Inc</span>
                </div>
            </footer>
        </div>
    </body>
@endsection
