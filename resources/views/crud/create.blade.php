@extends('sidebar.dashboard')
@section('create')
<section>
    <div class="container mt-5 pt-5 ">
        <div class="row ">
            <div class="col-12 col-sm-8 col-md-4 m-auto">
                <div class="card border-0 shadow">
                    <div class="card-body ">

                        <form action="{{route('store')}}" method="post">
                            @csrf
                            <div class="card border-0 shadow-lg">
                                <div class="card-body">
                                    <div class=" mb-3 ">
                                        <label for="brand" class="form-label">Brand</label>
                                        <input type="text" name="brand" class="form-control" id="brand"
                                            placeholder="Enter Bike Brand Name">
                                    </div>
                                    <div class=" mb-3 ">
                                        <label for=" name" class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Enter Bike Name">
                                    </div>

                                    <div class=" mb-3 ">
                                        <label for=" price" class="form-label">Price</label>
                                        <input type="text" name="price" class="form-control" id="price"
                                            placeholder="price">
                                    </div>
                                    <div class="mb-3">
                                        <label for="remarks" class="form-label">Remarks</label>
                                        <textarea class="form-control" name="remarks" id="remarks" rows="3"
                                            placeholder="Enter the remarks"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <button class="btn btn-success">Submit</button>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection