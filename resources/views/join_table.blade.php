<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tables</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
          <div class="container mt-5 text-center">
            <div class="cardbody">
            </div>
<form action="">
<button class="btn btn-primary ">Users</button>
</form>
        </div>
        <div class="container mt-auto" >
            <br />
            <h1 class="text-center text-primary">Users</h1>
            <br />
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Country</th>
                            <th>State</th>
                            <th>City</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                            <tr>
                                <td>{{ $row->country_name }}</td>
                                <td>{{ $row->state_name }}</td>
                                <td>{{ $row->city_name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class=" mt-5 text-center">
    <input type="button" id="btn" value="Call API" />
    </div>
    <div class="container mt-5 ">
        <div class="card-body " >
            <div class="card-header text-center" >
            </div>
        </div>
    </div>
    </body>
</html>
<script>

    const api = 'http://vue-spa.test/api/cups'

    fetch(api).then((response) => response.json())
  .then((data) => console.log(data.data));

</script>
