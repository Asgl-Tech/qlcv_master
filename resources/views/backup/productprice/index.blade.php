@section('title', 'Manage Product Price')
@include('main')
@include('components/mainmenu')
@include('components/breadcrumb')
<div class="cat__content">

<!-- START: ecommerce/Blog Category-list -->
<section class="card">
    <div class="card-header">
        <div class="dropdown pull-right">
		   <a href="{{asset('product')}}" class="btn btn-info"><i class="fa fa-reply" aria-hidden="true"></i>&nbsp; &nbsp; Back to Product list &nbsp; &nbsp;</a>
           <a href="{{asset('/productprice/create/'.$productprice)}}" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp; &nbsp; Add Product Price &nbsp; &nbsp;</a>
       </div>
        <span class="cat__core__title">
            <strong>Product Price List</strong>
        </span>
    </div>
	
	
	<div class="card-body">
		 @if ($message = Session::get('error'))
			<div class="alert alert-danger" role="alert" id="id">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>Oh snap! </strong> {{ $message }}
            </div>
		@endif
		 @if ($message = Session::get('success'))
			<div class="alert alert-success" role="alert" id="id">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>Well done! </strong> {{ $message }} !
            </div>
		@endif
        <table class="table table-hover nowrap" id="example1" width="100%">
            <thead class="thead-default">
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>price</th>
                <th>Price From Date</th>
                <th>Price To Date</th>
                <th>Action</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>price</th>
                <th>Price From Date</th>
                <th>Price To Date</th>
                <th>Action</th>
            </tr>
            </tfoot>
            <tbody>
			@foreach($productprices as $productprice)
            <tr>
                <td>{{ $productprice->product_price_id }}</td>
                <td>{{ $productprice->name }}</td>
                <td>{{ $productprice->quantity }}</td>
                <td><i class="fa fa-usd"></i> {{ $productprice->price }}</td>
                <td><i class="fa fa-clock-o" aria-hidden="true"></i> {{ date('d-M-y', strtotime($productprice->price_from_date )) }}</td>
                <td><i class="fa fa-clock-o" aria-hidden="true"></i> {{ date('d-M-y', strtotime($productprice->price_to_date)) }}</td>
               <td style="width:250px;">
                  {!! Form::open(['method' => 'delete','url' => ['/productprice/destroy/'. $productprice->product_price_id,$productprice->product_id ],'style'=>'display:inline','role'=>'form','onsubmit' => 'return confirm("Do you want to delete this ?")']) !!}
					{!! Form::submit('Remove', ['class' => 'btn btn-danger', 'style'=>'margin-left:50px;']) !!}
					{!! Form::close() !!}
                </td>
            </tr>
			@endforeach
            </tbody>
        </table>
    </div>
</section>
<!-- END: ecommerce/products-list -->
<script>
    $('#id').delay(3000).fadeOut('fast');
</script>
<!-- START: blogcategorys scripts -->
<script>
    $(function () {

        // Datatables
        $('#example1').DataTable({
            "lengthMenu": [[10, 25, 50, 100, 200, -1], [10, 25,50, 100, 200, "All"]],
            responsive: true,
            "autoWidth": false
        });

    })
</script>
<!-- END: page scripts -->
<!-- END: page scripts -->
<!-- START: page scripts -->
<script>
    $( function() {
		$("#m_section_name").html("Product Price");
        ///////////////////////////////////////////////////////////
        // tooltips
        $("[data-toggle=tooltip]").tooltip();

        ///////////////////////////////////////////////////////////
        // chart1
        new Chartist.Line(".chart-line", {
            labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
            series: [
                [5, 0, 7, 8, 12],
                [2, 1, 3.5, 7, 3],
                [1, 3, 4, 5, 6]
            ]
        }, {
            fullWidth: !0,
            chartPadding: {
                right: 40
            },
            plugins: [
                Chartist.plugins.tooltip()
            ]
        });

        ///////////////////////////////////////////////////////////
        // chart 2
        var overlappingData = {
                    labels: ["Jan", "Feb", "Mar", "Apr", "Mai", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    series: [
                        [5, 4, 3, 7, 5, 10, 3, 4, 8, 10, 6, 8],
                        [3, 2, 9, 5, 4, 6, 4, 6, 7, 8, 7, 4]
                    ]
                },
                overlappingOptions = {
                    seriesBarDistance: 10,
                    plugins: [
                        Chartist.plugins.tooltip()
                    ]
                },
                overlappingResponsiveOptions = [
                    ["", {
                        seriesBarDistance: 5,
                        axisX: {
                            labelInterpolationFnc: function(value) {
                                return value[0]
                            }
                        }
                    }]
                ];

        new Chartist.Bar(".chart-overlapping-bar", overlappingData, overlappingOptions, overlappingResponsiveOptions);

        ///////////////////////////////////////////////////////////
        // custom scroll
        if (!('ontouchstart' in document.documentElement) && jQuery().jScrollPane) {
            $('.custom-scroll').each(function() {
                $(this).jScrollPane({
                    contentWidth: '100%',
                    autoReinitialise: true,
                    autoReinitialiseDelay: 100
                });
                var api = $(this).data('jsp'),
                        throttleTimeout;
                $(window).bind('resize', function() {
                    if (!throttleTimeout) {
                        throttleTimeout = setTimeout(function() {
                            api.reinitialise();
                            throttleTimeout = null;
                        }, 50);
                    }
                });
            });
        }

    } );
</script>
<!-- END: page scripts -->
@include('components/footer')
