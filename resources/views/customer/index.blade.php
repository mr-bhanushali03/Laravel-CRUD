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
            <div class="d-flex justify-content-end me-4 mt-3 mb-3">
                <a href="{{ route('create') }}" class="text-center h-50"><button class="btn btn-primary">Create<i class="bi bi-person-plus-fill ms-3"></i></button></a>
            </div>
            <div class="table-responsive">
                <table class="table set text-center">
                    <thead class="table-dark">
                        {{-- <caption></caption> --}}
                        {{-- <th colspan="100%" class="text-center">Customer</th> --}}
                        <tr class="">
                            <th>#</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Languages</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Password</th>
                            <th>Date</th>
                            <th>Caste</th>
                            <th>File</th>
                            <th>Operations</th>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        @forelse ($customers as $customer)
                            <tr>
                                <td><a href="{{ route('show', ['id' => $customer->id]) }}"
                                        class="text-decoration-none text-dark">{{ $loop->iteration }}</a></td>
                                <td><a href="{{ route('show', ['id' => $customer->id]) }}"
                                        class="text-decoration-none text-dark">{{ $customer->name }}</a></td>
                                <td>{{ $customer->gender }}</td>
                                <td>{{ $customer->languages }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>{{ $customer->mobile }}</td>
                                <td>{{ Str::limit($customer->password, 20, '...') }}</td>
                                <td>{{ $customer->date }}</td>
                                <td>{{ $customer->caste }}</td>
                                <td>
                                    @if (file_exists(public_path('upload/' . $customer->file)))
                                        <img src="{{ asset('upload/' . $customer->file) }}">
                                    @else
                                        <img src="{{ $customer->file }}">
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('edit', ['id' => $customer->id]) }}"><i
                                            class="bi bi-pencil-fill fs-3 me-3"></i></a>
                                    <a href="{{ route('delete', ['id' => $customer->id]) }}"><i
                                            class="bi bi-trash-fill text-danger fs-3"></i></a>
                                </td>
                            </tr>
                        @empty
                            <td colspan="100%" class="bg-transparent text-center border-white m-5 p-5">
                                <h1 class="p-5 m-5">NO Data Found</h1>
                            </td>
                        @endforelse
                    </tbody>
                    <tfoot></tfoot>
                </table>
            </div>
        </main>
        <div class="container-fluid">
            <footer class="d-flex justify-content-center align-items-center py-3 my-4 border-top">
                <div class="col-12 col-md-12 col-sm-12 d-flex align-items-center">
                    <span class="mb-3 mb-md-0 text-body-secondary">© 2023 Company, Inc</span>
                </div>
            </footer>
        </div>
    </body>
@endsection
