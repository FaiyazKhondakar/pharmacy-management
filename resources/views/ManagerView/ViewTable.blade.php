@extends('AllUserLayout.account')
@section('content')
<body bgcolor="#CCCCFF">
    <table border="1">
        <tr>
            <th>User Id</th>
            <th>Name</th>
        </tr>
        @foreach ($Val as $it)
        <tr>
            <td>{{$it->u_id}}</td>
            <td>{{$it->u_name}}</td>
            <td><a href="{{route('user.info',['id'=>$it->u_id])}}">Details</td>
            <td><a href="{{route('user.',['id'=>$it->u_id])}}">Delete</td>
            {{-- <td><a href="{{route('Information',['Id'=>$it->customer_id])}}">{{$it->customer_name}}</a></td> --}}
            {{-- <td><a href="{{route('delete',['Id'=>$it->ID])}}">Delete</a></td> --}}
        </tr>
        {{-- <td><a href="{{route('student.details',['id'=>$it->Name])}}">{{$st->name}}</a></td>   --}}
        @endforeach

    </table>
</body>
@endsection