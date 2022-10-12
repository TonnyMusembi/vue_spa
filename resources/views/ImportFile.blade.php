<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tonny Tech</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5 text-center">
        <h2 class="mb-4">
          Export Data<a href="" target="_blank"></a>
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
                <div class="cardheader">Users </div>
            </div>
<form action="{{route('import-view')}}">
<button class="btn btn-primary ">Users Download</button>
</form>
 </div>
 <div class="container mt-5 text-center">
    <div class="card-body">
        <div class="card-header">Upload file </div><br>
        <form action="" method="GET" enctype="multipart/form-data">
          @csrf
            <div class="custom-file text-left">
            <input type="file" name="file" class="custom-file-input" id="customFile">
            <label for="CustomFile" class="custom-file-label">Add file</label>
           </div>
        </form>
    </div>
 </div>
</body>
</html>
<script>
   fetch('http://vue-spa.test/api/cups')
  .then((response) => response.json())
  .then((data) => console.log(data.data));
     const timeNow = new Date ();
     console.log(timeNow);

     let numbers = [-23,-20,-17, -12, -5, 0, 1, 5, 12, 19, 20];

   let positive_array = numbers.filter(function(value) {
    return value >= 0; });

   console.log(positive_array);
</script>
