<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Mail</title>
</head>

<body>
    <img src="{{url('storage/'.$company['logo'])}}" alt="">
    <p>
        {{$company['name']}}
    </p>
    <p>
        {{$company['email']}}
    </p>
    <p>
        {{$company['website']}}
    </p>
</body>

</html>