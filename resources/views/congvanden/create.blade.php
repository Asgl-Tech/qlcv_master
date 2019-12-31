@section('title', 'Add Pages')
@include('main')
@include('components/mainmenu')
{{-- @include('components/breadcrumb') --}}
<div class="cat__content">

<!-- START: ecommerce/Pages-edit -->
<section class="card">
   <div class="card-header">
        <span class="cat__core__title">
            <strong>Thêm công văn</strong>
        </span>
    </div>
    <div class="card-body">
        <div class="row">
			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<strong>Whoops!</strong> There were some problems with your input.<br><br>
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
            <div class="col-lg-12">
             <form action="them" method="POST">    
                <input type="hidden" name="_token" value="{{csrf_token()}}">               
				<div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>Loại công văn</label>
                                <select class="form-control" id="idLoaicongvan" name="Loaicongvan">                               
                                    <!-- <option value="">select</option>                                                        -->
                                    @foreach($Loaicongvan as $lcv)
                                    <option value="{{$lcv->id}}">{{$lcv->TenLoaiCV}}</option>  
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>Năm: </label>
                            <select class="form-control" id="idNam" name="nam">                               
                                @foreach($namcv as $ncv)
                                    <option value="{{$ncv->Nam}}">{{$ncv->Nam}}</option>  
                                @endforeach                                                       
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>Nơi phát hành: </label>
                            <select class="form-control" id="idNoiPhathanh" name="NoiPhathanh">                               
                                @foreach($Noiphathanh as $nph)
                                    <option value="{{$nph->id}}">{{$nph->TenCoQuan}}</option>  
                                @endforeach                                                      
                            </select>
                        </div>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="validation-pagename">Số đến <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <input id="validation-pagename" class="form-control"  placeholder="Số công văn đến"   name="Soden"  type="text" data-validation="[NOTEMPTY]" data-validation-message="Page Name must not be empty!">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="pagetitle">Số Ký hiệu <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <input id="validation-pagetitle" class="form-control"  placeholder="Số ký hiệu"   name="Sokyhieu"  type="text" data-validation="[NOTEMPTY]" data-validation-message="Page Title must not be empty!">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="pagetitle">Số lượng <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <input id="validation-pagetitle" class="form-control"  placeholder="Số lượng"   name="Soluong"  type="text" data-validation="[NOTEMPTY]" data-validation-message="Page Title must not be empty!">
                        </div>
                    </div> 
                                      
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="validation-pagename">Ngày tháng đến <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <input id="validation-pagename" class="form-control"  placeholder="Số công văn đến"   name="Ngayden"  type="date" data-validation="[NOTEMPTY]" data-validation-message="Page Name must not be empty!">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="pagetitle">Ngày phát hành <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <input id="validation-pagetitle" class="form-control"  placeholder="Số ký hiệu"   name="Ngayphathanh"  type="date" data-validation="[NOTEMPTY]" data-validation-message="Page Title must not be empty!">
                        </div>
                    </div>                    
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>Thể loại công văn</label>
                                <select class="form-control" id="idTheLoaicongvan" name="TheLoaicongvan">                               
                                    @foreach($Theloaicongvan as $tl)
                                        <option value="{{$tl->id}}">{{$tl->TenTheLoai}}</option>  
                                    @endforeach                                                        
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                        <label>Lĩnh vực: </label>
                                <select class="form-control" id="idLinhvuc" name="Linhvuc">                               
                                    @foreach($linhvuc as $lv)
                                        <option value="{{$lv->id}}">{{$lv->TenLinhVuc}}</option>  
                                    @endforeach                                                       
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>Độ mật: </label>
                                <select class="form-control" id="idDomat" name="Domat">                               
                                    @foreach($domat as $dm)
                                        <option value="{{$dm->id}}">{{$dm->TenDoMat}}</option>  
                                    @endforeach                                                        
                                </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>Độ khẩn: </label>
                                <select class="form-control" id="idDokhan" name="Dokhan">                               
                                    @foreach($dokhan as $dk)
                                        <option value="{{$dk->id}}">{{$dk->TenDoKhan}}</option>  
                                    @endforeach                                                        
                                </select>
                        </div>
                    </div> 
                </div>

                <!-- <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="validation-pagename">Page Name <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <input id="validation-pagename" class="form-control"  placeholder="Page Name"   name="page_name"  type="text" data-validation="[NOTEMPTY]" data-validation-message="Page Name must not be empty!">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="pagetitle">Page Title <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <input id="validation-pagetitle" class="form-control"  placeholder="Page Title"   name="page_title"  type="text" data-validation="[NOTEMPTY]" data-validation-message="Page Title must not be empty!">
                        </div>
                    </div>
                </div> -->
                <div class="form-group">
                    <label class="form-control-label">Trích yếu nội dung</label>
                    <textarea class="summernote" rows="3" id="l15" name="Trichyeunoidung" placeholder="Trích yếu nội dung"></textarea>
                </div>
                <div class="form-group">
                    <label class="form-control-label">Nội dung Email</label>
                    <textarea class="summernote" rows="3" id="idNoidungemail" name="Noidungemail" placeholder="Nội dung email"></textarea>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="validation-metatitle">Email khác <span style="color:red; font-weight:900; font-size:20px;"></span></label>
                            <input  class="form-control"  placeholder="Emailkhac"   name="Emailkhac"  type="text" >
                        </div>
                    </div>
                     <div class="col-lg-3">
                        <div class="form-group">
                            <label for="validation-metatitle" style="margin-top:9px;">Email CC</label>
                            <input class="form-control"  placeholder="EmailCC"   name="EmailCC"  type="text" >
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="pagetitle">Thời hạn xử lý <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <input id="validation-pagetitle" class="form-control"  placeholder="Thời hạn xử lý"   name="Thoihanxuly "  type="date" data-validation="[NOTEMPTY]" data-validation-message="Page Title must not be empty!">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group"> 
                            <label>File đính kèm</label>
                            <input type="file" class="form-control" name="filedinhkem"></input>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>Phòng xử lý</label>
                                <select class="form-control" id="idPhongbanxuly" name="Phongbanxuly">                               
                                    @foreach($phongban as $pb)
                                        <option value="{{$pb->id}}">{{$pb->TenPhong}}</option>  
                                    @endforeach                                                       
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                        <label>Nơi lưu: </label>
                                <select class="form-control" id="idNoiluu" name="Noiluu">                               
                                    @foreach($noiluu as $luucv)
                                        <option value="{{$luucv->id}}">{{$luucv->TenNoiLuu}}</option>  
                                    @endforeach                                                       
                            </select>
                        </div>
                    </div>
                      
               </div>
               <!-- <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>Phòng xử lý</label>
                                <select class="form-control" id="idPhongbanxuly" name="Phongbanxuly">                               
                                    <option value="">select</option>                                                       
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                        <label>Nơi lưu: </label>
                                <select class="form-control" id="idNoiluu" name="Noiluu">                               
                                    <option value="">select</option>                                                       
                            </select>
                        </div>
                    </div>
                    
                </div> -->
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary width-150" >Submit</button>
                    <button type="reset" class="btn btn-warning width-150" >Reset</button>
                    <a href="{{ url('pages')}}"  class="btn btn-default">Cancel</a>
                </div>
             </form>
            </div>
 
        </div>
    </div>
</section>
<!-- END: ecommerce/product-edit -->
<!-- END: ecommerce/products-list -->

<!-- START: page scripts -->
<script>
        $(document).ready(function() {
            $('.summernote').summernote();
        });
</script>
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
</script>
<script>
    $(function() {

        // Form Validation
        $('#form-validation').validate({
            submit: {
                settings: {
                    inputContainer: '.form-group',
                    errorListClass: 'form-control-error',
                    errorClass: 'has-danger'
                }
            }
        });

       
    });
</script>
<!-- END: page scripts -->
@include('components/footer')
