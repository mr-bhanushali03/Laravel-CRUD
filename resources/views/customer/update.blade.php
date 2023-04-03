<!doctype html>
<html lang="en">

<head>
    <title>Update Form</title>
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
        <form action="{{route('updateShow',['id'=>$CustomerUpdate->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <h1 class="text-center">Update Customer</h1>
                <x-update type="text" name="name" label="Please enter your Name" placeholder="Name" value="{{$CustomerUpdate->name}}"/>
                <x-update type="email" name="email" label="Please enter your Email" placeholder="xyz@gamil.com" value="{{$CustomerUpdate->email}}"/>
                <x-update type="password" name="password" label="Please enter your Password" placeholder="Password" value="{{$CustomerUpdate->password}}"/>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
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