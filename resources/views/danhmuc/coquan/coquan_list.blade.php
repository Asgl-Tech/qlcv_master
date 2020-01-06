@section('title', 'Danh mục cơ quan')
@include('main')
@include('components/mainmenu')
{{-- @include('components/breadcrumb') --}}
<div class="cat__content">

    <!-- START: ecommerce/Pages-list -->
    <section class="card">
        <div class="card-header">
            <div class="dropdown pull-right">
                <a href="pages/danhmuc/coquan/coquan_add" class="btn btn-success btn-sm"><i class="fa fa-plus "></i>&nbsp; &nbsp; Thêm &nbsp; &nbsp;</a>
            </div>
            <span class="cat__core__title">
            <strong>Danh mục Cơ quan</strong>
        </span>
        </div>
        <div class="card-body">
            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif
            <table class="table table-hover nowrap" id="example1" width="100%">
                <thead class="thead-default">
                <tr style="text-align: center;">
                    <th>ID</th>
                    <th>Tên Cơ quan</th>
                </tr>
                </thead>

                <tbody>
                @foreach($coquan as $dk)
                    <tr>
                        <td>{{$dk->id}}</td>
                        <td>{{$dk->TenCoQuan}}</td>
                        <td style="width:250px;">

                            <i class="fa fa-trash fa-fw" style="margin-left:4px;margin-right:4px;"></i><a  href="pages/danhmuc/coquan/coquan_edit/{{$dk->id}}"> Sửa</a>
                            <i class="fa fa-delete  fa-fw"></i><a href="pages/danhmuc/coquan/coquan_del/{{$dk->id}}"> Xóa</a>
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
    <!-- START: page scripts -->
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
{{-- <script>
    $( function() {
		$("#m_section_name").html("Pages");
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
</script> --}}
<!-- END: page scripts -->
{{-- @include('components/footer') --}}
