<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>People</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('people.create')}}">Create</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Phonenumber</th>
                <th>Street</th>
                <th>City</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($fpeople as $people )
                <tr>
                    <td>{{$people->id}}</td>
                    <td>{{$people->name}}</td>
                    <td>{{$people->surname}}</td>
                    <td>{{$people->phonenumber}}</td>
                    <td>{{$people->street}}</td>
                    <td>{{$people->city}}</td>
                    <td>
                        <a href="{{route('people.edit', ['people' => $people])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('people.destroy', ['people' => $people])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>