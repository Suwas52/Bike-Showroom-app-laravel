@extends('sidebar.dashboard')
@section('list')
<section>
    <div class="container mt-4 ">

        <table class="table table-hover">
            <thead class="bg-success text-white fw-bold">
                <tr>
                    <th>ID</th>
                    <th>Brand</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Remarks</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i = 1;
                @endphp
                @foreach($cruds as $items)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$items['brand']}}</td>
                    <td>{{$items['name']}}</td>
                    <td>{{$items['price']}}</td>
                    <td>{{$items['remarks']}}</td>
                    <td>

                        <a href="{{url('/edit/'.$items->id)}}" type="button" class="btn btn-success">Update</a>
                        <a href="{{url('/delete/'.$items->id)}}" type="button" class="btn btn-danger">Delete</a>


                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</section>
@endsection