@extends('layout.app')

@section('slider')
<nav id="sidebar">
    <div class="sidebar-header">
        <h3>Bike Showroom</h3>
    </div>

    <ul class="list-unstyled components">
        <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="">Dashboard</a>
        </li>
        <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="">Add Product</a>
        </li>
        <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="">Log Out</a>
        </li>
    </ul>

</nav>

@endsection