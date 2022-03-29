@extends('admin.layouts.main')
@section('content')
<div class="py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item"><a href="{{route('admin_dashboard')}}"><span class="fas fa-home"></span></a></li>
            <li class="breadcrumb-item"><a href="{{route('admin_products')}}">Product-List</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product-Edit</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Product Edit (Cars)</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card border-light shadow-sm components-section">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-lg-12 col-sm-12">
                            <!-- Form -->
                            @if(Session::has('success'))
                            <div class="alert alert-success mb-4" id="success-alert">
                                <center><span class="text-white">{{Session::get('success')}}</span></center>
                            </div>
                            @endif
                            @if(Session::has('update'))
                            <div class="alert alert-success mb-4" id="success-alert">
                                <center><span class="text-white">{{Session::get('update')}}</span></center>
                            </div>
                            @endif

                            <form action="{{route('admin_products_cars_add_edit').'/'.$products->id}}" method="POST" enctype="multipart/form-data">@csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-4">
                                            <select class="form-select" id="parent_category" name="sub_categories">
                                                <!-- <option selected hidden disabled>Select Sub Category</option> -->
                                                @foreach($sub_categories as $values)
                                                <option value="{{$values->id}}" {{$products->get_product_submodel->id == $values->id ? 'selected' : ''}}>{{$values->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-4">
                                            <label for="title">Title</label>
                                            <input value="{{$products->title}}" type="text" class="form-control" required name="title" placeholder="Enter your title...">
                                        </div>
                                        <div class="my-4">
                                            <label for="textarea">Description</label>
                                            <textarea class="form-control" placeholder="Enter your message..." id="textarea" rows="5" name="description">{{$products->description}}</textarea>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="mb-4">
                                                <label for="title">Year</label>
                                                <input type="number" value="{{$products->get_product_cars->year}}" class="form-control" required name="year" placeholder="Enter your Year...">
                                            </div>
                                            <div class="mb-4">
                                                <label for="title">Engine</label>
                                                <input type="text" value="{{$products->get_product_cars->engine}}" class="form-control" required name="engine" placeholder="Enter your Engine...">
                                            </div>
                                            <div class="mb-4">
                                                <label for="title">Condition</label>
                                                <input type="text" value="{{$products->get_product_cars->condition}}" class="form-control" required name="condition" placeholder="Enter your Condition...">
                                            </div>
                                            <div class="mb-4">
                                                <label for="title">Body</label>
                                                <input type="text" value="{{$products->get_product_cars->body}}" class="form-control" required name="body" placeholder="Enter your Body...">
                                            </div>
                                            <div class="mb-4">
                                                <label for="title">Registered</label>
                                                <input type="text" value="{{$products->get_product_cars->registered}}" class="form-control" required name="registered" placeholder="Enter your Registered...">
                                            </div>
                                            <div class="mb-4">
                                                <label for="title">Vin Number</label>
                                                <input type="text" class="form-control" value="{{$products->get_product_cars->vin_number}}" required name="vin_number" placeholder="Enter your Vin Number...">
                                            </div>
                                            <div class="mb-4">
                                                <label for="title">Stock ID</label>
                                                <input type="text" value="{{$products->get_product_cars->stock_id}}" class="form-control" required name="stock_id" placeholder="Enter your Stock ID...">
                                            </div>
                                        </div>
                                        <fieldset class="my-4">
                                            <legend class="h6">Status</legend>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="1" {{$products->status == 1 ? 'checked' : ''}}>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Active
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="0" {{$products->status == 0 ? 'checked' : ''}}>
                                                <label class="form-check-label" for="exampleRadios2">
                                                    Inactive
                                                </label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="mb-4">
                                                    <label for="title">Price</label>
                                                    <input value="{{$products->price}}" type="number" class="form-control" required name="price" placeholder="Enter your price...">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="mb-4">
                                            <label for="title">Stock</label>
                                            <input value="{{$products->stock}}" type="number" class="form-control" required name="stock" placeholder="Enter your stock...">
                                        </div>
                                        <div class="mb-4">
                                            <label for="title">Sku</label>
                                            <input value="{{$products->sku}}" type="text" class="form-control" required name="sku" placeholder="Enter your Sku...">
                                        </div>
                                        <div class="mb-4">
                                            <label for="title">Mileage</label>
                                            <input type="text" value="{{$products->get_product_cars->mileage}}" class="form-control" required name="mileage" placeholder="Enter your Mileage...">
                                        </div>
                                        <div class="mb-4">
                                            <label for="title">Fuel Type</label>
                                            <input type="text" class="form-control" value="{{$products->get_product_cars->fuel_type}}" required name="fuel_type" placeholder="Enter your Fuel Type...">
                                        </div>
                                        <div class="mb-4">
                                            <label for="title">Transmission</label>
                                            <input type="text" class="form-control" value="{{$products->get_product_cars->transmission}}" required name="transmission" placeholder="Enter your Transmission...">
                                        </div>
                                        <div class="mb-4">
                                            <label for="title">Exterior Color</label>
                                            <input type="text" class="form-control" value="{{$products->get_product_cars->exterior_color}}" required name="exterior_color" placeholder="Enter your Exterior Color...">
                                        </div>
                                        <div class="mb-4">
                                            <label for="title">Interior Color</label>
                                            <input type="text" class="form-control" value="{{$products->get_product_cars->interior_color}}" required name="interior_color" placeholder="Enter your Interior Color...">
                                        </div>
                                        <div class="mb-4">
                                            <label for="title">Price Description</label>
                                            <input type="text" class="form-control" value="{{$products->get_product_cars->price_description}}" required name="price_description" placeholder="Enter your Price Description...">
                                        </div>

                                        <div>
                                            <label for="textarea">Image</label>
                                            <div class="form-file mb-3">
                                                <input type="file" class="form-file-input" id="customFile" multiple name="images[]" onchange="loadFile(this)">
                                                <label class="form-file-label" for="customFile">
                                                    <span class="form-file-text">Choose file...</span>
                                                    <span class="form-file-button">Browse</span>
                                                </label>
                                                <div id="imagediv">
                                                    @foreach($product_images as $images)
                                                    <img class="img-fluid image-preview" width="200" height="200" src="{{asset('uploads/products/'.$images->title)}}">
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" name="tec_featured" type="checkbox" checked="" id="tec" value="1">
                                                        <label class="form-check-label" for="flexSwitchCheckChecked">Technical Featured</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="mb-4" id="tec_div">
                                                <h4>Engine</h4>
                                                <br>
                                                <div class="mb-4">
                                                    <label for="title">No Of Cylinder</label>
                                                    <input type="text" class="form-control" name="engine_no_cyclinder" value="{{$products->get_technical ? $products->get_technical->engine_no_of_cylinder : ''}}" placeholder="Enter your Engine No Of Cylinder...">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="title">Displacement</label>
                                                    <input type="text" class="form-control" value="{{$products->get_technical ? $products->get_technical->engine_displacement : ''}}" name="engine_displacement" placeholder="Enter your Engine Displacement...">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="title">HoresPower</label>
                                                    <input type="text" class="form-control" value="{{$products->get_technical ? $products->get_technical->engine_horespower : ''}}" name="engine_horespower" placeholder="Enter your Engine Drive Layout...">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="title">Drive Layout</label>
                                                    <input type="text" class="form-control" value="{{$products->get_technical ? $products->get_technical->engine_drive_layout : ''}}" name="engine_drive_layout" placeholder="Enter your Engine HoresPower...">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="title">RPM</label>
                                                    <input type="text" class="form-control" value="{{$products->get_technical ? $products->get_technical->engine_rpm : ''}}" name="engine_rpm" placeholder="Enter your Engine RPM...">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="title">Torque</label>
                                                    <input type="text" class="form-control" value="{{$products->get_technical ? $products->get_technical->engine_torque : ''}}" name="engine_torque" placeholder="Enter your Engine Torque...">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="title">Compression Ratio</label>
                                                    <input type="text" class="form-control" value="{{$products->get_technical ? $products->get_technical->engine_compression_ratio : ''}}" name="engine_compression_ratio" placeholder="Enter your Engine Compression Ratio...">
                                                </div>
                                                <h4> Perfomance</h4>
                                                <br>
                                                <div class="mb-4">
                                                    <label for="title">Top Track Speed</label>
                                                    <input type="text" class="form-control" value="{{$products->get_technical ? $products->get_technical->performance_top_track_speed : ''}}" name="perfomance_top_track_speed" placeholder="Enter your Engine No Of Cylinder...">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="title">MPH</label>
                                                    <input type="text" class="form-control" value="{{$products->get_technical ? $products->get_technical->performance_mph : ''}}" name="perfomance_mph" placeholder="Enter your Engine No Of Cylinder...">
                                                </div>
                                                <h4> Transmission</h4>
                                                <br>
                                                <div class="mb-4">
                                                    <label for="title">Type</label>
                                                    <input type="text" class="form-control" value="{{$products->get_technical ? $products->get_technical->transmission_type : ''}}" name="transamission_type" placeholder="Enter your Engine No Of Cylinder...">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="title">Displacement</label>
                                                    <input type="text" class="form-control" value="{{$products->get_technical ? $products->get_technical->transmission_displacement : ''}}" name="transamission_displacement" placeholder="Enter your Engine No Of Cylinder...">
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" name="additional_featured" type="checkbox" checked="" id="dis" value="1">
                                                        <label class="form-check-label" for="flexSwitchCheckChecked">Additional Featured</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-4" id="dis_div">
                                        <h4>Additional Featured</h4>
                                        <div class="row input_fields_wrap">
                                            <div class="col-sm-12">
                                                <button type="button" class="add_field_button btn btn-pill btn-outline-success form-control">Add More Fields</button>
                                                
                                                @if(count($product_add_featured) == 0)
                                                    <div class="mb-4">
                                                        <label class="mt-2">Title </label>
                                                        <input type="text" class="form-control"  data-id="1" name="add_featured[]" placeholder="Enter your Title...">
                                                    </div>
                                                @endif

                                                @foreach($product_add_featured as $values)
                                                    <div class="mb-4">
                                                        <label class="mt-2">Title </label>
                                                        <input type="text" class="form-control" value="{{ $values->title}}" data-id="1" required name="add_featured[]" placeholder="Enter your Title...">
                                                    </div>
                                                @endforeach
                                                </div>
                                            </div>
                                        </div>

                                        </div>
                                       

                                    </div>
                                </div>
                                <div class="my-4">
                                    <button class="btn btn-pill btn-outline-success" type="submit">Submit</button>
                                </div>

                            </form>
                            <!-- End of Form -->

                            @push('js')
                            <script>
                                $(document).ready(function() {
                                    var max_fields = 10; //maximum input boxes allowed
                                    var wrapper = $(".input_fields_wrap"); //Fields wrapper
                                    var add_button = $(".add_field_button"); //Add button ID

                                    var x = 1; //initlal text box count
                                    $(add_button).click(function(e) { //on add input button click
                                        e.preventDefault();
                                        if (x < max_fields) { //max input box allowed
                                            x++; //text box increment
                                            $(wrapper).append(
                                                '<div class = "row input_fields_wrap" > ' +
                                                '<div class="col-sm-12">' +
                                                '<div class="mb-4">' +
                                                '<label class="mt-2">Title *</label>' +
                                                '<input type="text" class="form-control"  required name="add_featured[]"  placeholder="Enter your Title...">' +
                                                '</div>' +
                                                '<div class="mt-3 mb-3">' +
                                                '<a href="#" class="btn btn-pill btn-outline-danger remove_field ">Remove</a>' +
                                                '</div>' +
                                                '</div>' +

                                                '</div>'
                                            ); //add input box
                                        }
                                    });

                                    $(wrapper).on("click", ".remove_field", function(e) {
                                        //user click on remove text
                                        e.preventDefault();
                                        $(this).parent('div').parent('div').remove();
                                        x--;
                                    })
                                });
                            </script>
                            @endpush

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection