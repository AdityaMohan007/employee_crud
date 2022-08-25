<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Employee creation</title>
</head>

<style>
    .container {
        padding: 100px;
    }
</style>



<body>
    <div class="container">
        <div class="d-flex">
            <h3 class="col-sm mb-4">EMPLOYEE LIST</h3>
            <a href="{{ route('create') }}" class="col-sm"><button type="button" class="btn btn-info float-end">Create Employee</button></a>
        </div>


        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
             @foreach ($list as $item)
                 <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->mobile }}</td>
                    <td>
                        <a href="{{ route('read', $item->id) }}"><button type="button" class="btn btn-info btn-sm">Read</button></a>
                        <a href="{{ route('update', $item->id) }}"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                        <a href="{{ route('delete', $item->id) }}"><button type="button" class="btn btn-danger btn-sm">Delete</button></a>

                    </td>
                 </tr>
             @endforeach
            </tbody>
        </table>


    </div>


</body>

</html>
