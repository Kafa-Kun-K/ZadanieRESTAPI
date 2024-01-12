<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form method="post" action="{{route('people.store')}}">
        @csrf 
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" />
        </div>
        <div>
            <label>Surname</label>
            <input type="text" name="surname" placeholder="Surname" />
        </div>
        <div>
            <label>Phonenumber</label>
            <input type="text" name="phonenumber" placeholder="Phonenumber" />
        </div>
        <div>
            <label>Street</label>
            <input type="text" name="street" placeholder="Street" />
        </div>
        <div>
            <label>City</label>
            <input type="text" name="city" placeholder="City" />
        </div>
        <div>
            <input type="submit" value="Save" />
        </div>
    </form>
</body>
</html>