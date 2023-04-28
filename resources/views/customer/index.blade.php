<!doctype html>
<html lang="en">

<head>
    <title>Customer View</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="table-responsive">
            <a href="{{ route('create') }}" class="text-light text-decoration-none"><button
                    class="btn btn-primary m-3 ps-3 pe-3">Create</button></a>
            <table class="table set">
                <thead class="table-dark">
                    {{-- <caption></caption> --}}
                    {{-- <th colspan="100%" class="text-center">Customer</th> --}}
                    <tr>
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
                <tbody class="table-light text-center">
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
                            <td>{{ Str::limit($customer->file, 20, '...') }}</td>
                            <td>
                                <a href="{{ route('edit', ['id' => $customer->id]) }}"><button
                                        class="btn btn-warning mb-2 w-75">Update</button></a>
                                <a href="{{ route('delete', ['id' => $customer->id]) }}"><button
                                        class="btn btn-danger w-75">Delete</button></a>
                            </td>
                        </tr>
                    @empty
                        <td colspan="100%" class="bg-transparent text-center border-white m-5 p-5">
                            <h1 class="p-5 m-5">NO Data Found</h1>
                        </td>
                    @endforelse
                </tbody>
                <tfoot>

                </tfoot>
            </table>
        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
