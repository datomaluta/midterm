@extends('main')
@section('content')
{{--    "ამით ვამოწმემთ ცარიელია თუ არა employees table"--}}
    @if($employees->isNotEmpty())
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">SurName</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody >
        @foreach($employees as $employee)
            <tr>
                <td>{{$employee->id}}</td>
                <td>{{$employee->Name}}</td>
                <td>{{$employee->Surname}}</td>
                <td>

                    <a href="#">Edit</a>


                    @if($employee->is_hired==1)
                        <a href="#">Hired</a>
                    @else
                        <a href="#">Not Hired</a>
                    @endif

                    @method('DELETE')
                    <a href="{{route('employee.delete', $employee->id)}}">Delete</a>

                </td>
            </tr>
        @endforeach
        </tbody>
        {{$employees->links()}}
    </table>

    @else
        <p>employees not registered yet</p>
    @endif
@endsection
