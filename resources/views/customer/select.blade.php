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

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="table-responsive">
          <a href="{{url('/')}}" class="text-light text-decoration-none"><button class="btn btn-primary m-3 ps-3 pe-3">Create</button></a>
            <table
                class="table table-striped
      table-hover	
      table-borderless
      table-primary
      align-middle
      text-center">
                <thead class="table-light">
                    <caption></caption>
                    <th colspan="100%" class="text-center table-light">Customer</th>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        {{-- <th>Password</th> --}}
                        <th>Operations</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($Customers as $customer)
                        <tr class="table-primary">
                            <td class="col-lg-1">{{ $no }}</td>
                            <td class="col-lg-3">{{ $customer->name }}</td>
                            <td class="col-lg-3">{{ $customer->email }}</td>
                            {{-- <td class="col-lg-3">{{ $customer->password }}</td> --}}
                            <td class="col-lg-2">
                              <a href="{{route('update',['id' => $customer->id])}}"><button class="btn btn-warning">Update</button></a>
                              <a href="{{route('delete',['id' => $customer->id])}}"><button class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                        @php
                            $no++;
                        @endphp
                    @endforeach
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
