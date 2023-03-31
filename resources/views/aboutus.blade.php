<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <h4> World Airports</h4>
    <hr>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>City</th>
            <th>Country</th>
        </tr>

        @foreach($airports as $airport)

        <tr>
            <td>{{$airport->id}}</td>
            <td>{{$airport->city}}</td>
            <td>{{$airport->country}}</td>
        </tr>
        @endforeach
    </table>

</div>

<style>
    .container{
        text-align: center;
    }
</style>
</body>
</html>
