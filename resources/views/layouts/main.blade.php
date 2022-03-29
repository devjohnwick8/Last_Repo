<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    @include('layouts.css')
    <link rel="icon" href="{{ asset('images/fav.png') }}" type="image/png">
    <title>ELITE GROUP CUSTOM</title>
</head>

<body>


    {{-- @if (Request::segment(1) == ' ' or Request::segment(1) == '')
        @include('layouts.header')
    @else --}}

    @include('layouts.header')
    {{-- @endif --}}

{{--    for toaster     --}}
    @push('js')
        <script>
            $(document).ready(function() {
                @if(Session::has('success'))
                    toastr["success"](' {{ Session::get('success') }}');
                @endif
                    @if(Session::has('failed'))
                    toastr["error"]('{{ Session::get('failed') }}');
                @endif
                    @if(Session::has('out_of_stock'))
                    toastr["error"]('{{ Session::get('out_of_stock') }}');
                @endif
                    @if(Session::has('already_exist'))
                    toastr["error"]('{{ Session::get('already_exist') }}');
                @endif
            });
        </script>
    @endpush



    @yield('content')
    @include('layouts.footer')
    @include('layouts.js')
</body>



<div class="main_modal search">
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <div class="inner_form">
                            <div class="col-xs-12 col-sm-8 col-md-8 centerCol">
                                <div class="form-group">
                                    <input type="text" placeholder="Lorem Ipsum">
                                    <button>Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</html>
