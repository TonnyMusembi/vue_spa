<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Export Csv</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5 text-center">
        <h2 class="mb-4">
            Import Csv<a href="" target="_blank">Tonny Tech</a>
        </h2>
        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <button class="btn btn-primary">Import Users</button>
            <a class="btn btn-success" href="{{ route('export-users') }}">Export Users</a>
        </form>
    </div>
    <div class="container mt-5 text-center">
            <div class="cardbody">
                <div class="cardheader">Users</div>
            </div>
<form action="{{route('export-users')}}">

<button class="btn btn-primary ">Users</button>
</form>
 </div>
 <div class="table responsive">
  <table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach ( $data as $row )

            @endforeach
            <td>{{$row->name}}</td>

@endforeach
        </tr>


    </tbody>





  </table>

 </div>
</body>

</html>
