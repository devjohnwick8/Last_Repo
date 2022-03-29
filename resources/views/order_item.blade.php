@extends('layouts.main')
@section('content')

<!-- BEGIN Contact Sec -->
<section class="thank_banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-ms-12 col-xs-12">
                <div class="thank_heading">
                    <h4>My<small> Order</small> Item</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END Contact Sec -->
</section>
<!-- END Header -->
<!-- main -->
<main>
    <!-- Google Maps -->
    <section class="mein_order">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 ">
                    <table id="example" class="display">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Order Date</th>
                                <th>Order Number</th>
                                <th>Name</th>
                                <th>Shipping Address</th>
                                <th>Total Price</th>
                                <th>Ordre Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border-0 font-weight-bold"><strong>1</strong></td>
                                <td class="border-0 font-weight-bold"><strong>2022-02-15</strong></td>
                                <td class="border-0 font-weight-bold"><strong>8498588639</strong></td>
                                <td class="border-0 font-weight-bold"><strong>john</strong></td>
                                <td class="border-0 font-weight-bold"><strong>address1</strong></td>
                                <td class="border-0 font-weight-bold"><strong>380</strong></td>
                                <td class="border-0 font-weight-bold"><strong>
                                        Pending
                                    </strong></td>
                                <td class="border-0"><strong>
                                        <a href="javascript:void(0)" class="text-secondary mr-3"><i class="fas fa-edit"></i>View Order</a></strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <a shref="javascript:void(0)" class="btn btn_red">Go To Back</a>
        </div>
    </section>
    <!-- Google Maps -->

</main>
<!-- end main -->

@endsection
