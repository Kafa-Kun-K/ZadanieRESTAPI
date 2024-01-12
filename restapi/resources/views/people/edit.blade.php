<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('people.update', ['people' => $people])}}">
        @csrf 
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{$people->name}}" />
        </div>
        <div>
            <label>Surname</label>
            <input type="text" name="surname" placeholder="Surname" value="{{$people->surname}}" />
        </div>
        <div>
            <label>Phonenumber</label>
            <input type="integer" name="phonenumber" placeholder="Phonenumber" value="{{$people->phonenumber}}" />
        </div>
        <div>
            <label>Street</label>
            <input type="text" name="street" placeholder="Street" value="{{$people->street}}" />
        </div>
        <div>
            <label>City</label>
            <input type="text" name="city" placeholder="City" value="{{$people->ciy}}" />
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
</body>
</html>