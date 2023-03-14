<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
       <div class="container mt-5 text-center">
            <div class="cardbody">
            </div>
{{-- <form action="{{route('cups.index')}}">
<button class="btn btn-primary ">Users</button>
</form> --}}
        </div>
<div class="container mt-auto" >
            <br />
            <h1 class="text-center text-primary">Users</h1>
            <br />
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Body</th>
                            {{-- <th>City</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                            <tr>
                                <td>{{ $row->title }}</td>
                                <td>{{ $row->body }}</td>
                                {{-- <td>{{ $row->city_name }}</td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container mt-5 text-centre">
            <div class="card-body">
                <div class="card-hader"></div>





            </div>
        </div>
</body>
</html>
