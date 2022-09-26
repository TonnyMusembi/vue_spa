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
            Download and Import<a href="" target="_blank"></a>
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
<form action="{{route('export-users')}}">
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


    const list = [1,2,23,3]
    console.log(list);

    const api = 'http://vue-spa.test/api/programs'
    fetch ('api',
   {
    method:'get'
   }).then((response) => {
        console.log(response)
    })
    .catch((err) => {
        console.log(err)
    })

    const  year =  new Date();
     document.write("Year value :"+year.getFullYear());

     const timeNow = new Date ();
     console.log(timeNow);

//     const options = {
//   method: 'GET',
//   url: 'https://airbnb13.p.rapidapi.com/autocomplete',
//   params: {query: 'paris'},
//   headers: {
//     'X-RapidAPI-Key': '68a17b08dbmshe68484fe4f7905bp16ece9jsn2069f40c2728',
//     'X-RapidAPI-Host': 'airbnb13.p.rapidapi.com'
//   }
// };

// axios.request(options).then(function (response) {
// 	console.log(response.data);
// }).catch(function (error) {
// 	console.error(error);
// });

</script>
