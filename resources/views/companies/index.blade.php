<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Crud Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Laravel 10 CRUD example</h2>
            </div>
            <div>
                <a href="{{ route('companies.create') }}" class="btn btn-success">Create Company</a>
            </div>
            <div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-sucess">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <table class="table  table-bordered">
                    <tr>
                        <th>No.</th>
                        <th>Company Name</th>
                        <th>Company Email</th>
                        <th>Company Address</th>
                        <th>Action</th>
                        @foreach ($company as $com)
                    <tr>
                        <td>{{ $com->id }}</td>
                        <td>{{ $com->name }}</td>
                        <td>{{ $com->email }}</td>
                        <td>{{ $com->address }}</td>
                        <td>
                            <form action="{{ route('companies.destroy', $com->id) }}" method="POST">
                                <a href="{{ route('companies.edit', $com->id) }} " class="btn btn-warning">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tr>
                </table>
                <div> {!! $company->links('pagination::bootstrap-5') !!}</div>

            </div>
        </div>
    </div>
</body>

</html>
