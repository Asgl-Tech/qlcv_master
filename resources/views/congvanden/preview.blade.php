@section('title', 'My Profile')
@include('main')
@include('components/mainmenu')
<?php header('Access-Control-Allow-Origin: *'); ?>
<div class="container">
    <div class="card-header">
        <div class="dropdown pull-right">
           <button id="sendEmail" value="{{$congvanden->id}}"  class="btn btn-success btn-sm"><i class="fa fa-plus "></i>&nbsp; &nbsp; Send Mail &nbsp; &nbsp;</button>
       </div>
        <span class="cat__core__title">
            <strong>Preview</strong>
        </span>
    </div>
    <div class=" row">
        <div class="col-xl-12">        
            <section class="card">
                <div class="card-body">
                    <dl class="row" style="font-size: 14px; font-family: arial;">
                        <dt class="col-xl-3">Loại công văn</dt>
                            <dd class="col-xl-9">{{$Loaicongvan->TenLoaiCV}}</dd>

                        <dt class="col-xl-3">Năm</dt>
                        <dd class="col-xl-9">{{$namcv->Nam}}</dd>
                        <dt class="col-xl-3">Số đến</dt>
                        <dd class="col-xl-9"><span class="badge badge-success">{{$congvanden->SoDen}}</span></dd>
                        <dt class="col-xl-3">Số/Ký hiệu</dt>
                        <dd class="col-xl-9">{{$congvanden->KyHieu}}</dd>
                        <dt class="col-xl-3">Ngày tháng đến	</dt>
                        <dd class="col-xl-9">{{$congvanden->NgayThang}}</dd>

                        <dt class="col-xl-3">Ngày phát hành</dt>
                        <dd class="col-xl-9">{{$congvanden->NgayPhatHanh}}</dd>

                        <dt class="col-xl-3">Nơi phát hành</dt>
                        <dd class="col-xl-9">{{$Noiphathanh->TenCoQuan}}</dd>

                        <dt class="col-xl-3">Số lượng bản</dt>
                        <dd class="col-xl-9">{{$congvanden->SoLuong}}</dd>

                        <dt class="col-xl-3">Thể loại công văn</dt>
                        <dd class="col-xl-9">{{$Theloaicongvan->TenTheLoai}}</dd>

                        <dt class="col-xl-3">Lĩnh vực</dt>
                        <dd class="col-xl-9">{{$linhvuc->TenLinhVuc}}</dd>

                        <dt class="col-xl-3">Độ khẩn</dt>
                        <dd class="col-xl-9">{{$dokhan->TenDoKhan}}</dd>

                        <dt class="col-xl-3">Độ mật</dt>
                        <dd class="col-xl-9">{{$domat->TenDoMat}}</dd>

                        <dt class="col-xl-3">Trích yếu nội dung</dt>
                        <dd class="col-xl-9">{{$congvanden->TrichYeu}}</dd>

                        <dt class="col-xl-3">Nội dung Email</dt>
                        <dd class="col-xl-9">{{$congvanden->GhiChu}}</dd>

                        
                        @foreach($Phongban as $pb)
                        <dt class="col-xl-3">Phòng ban xử lý: </dt>
                             <!-- <option value="{{$pb->id}}">{{$pb->TenPhong}}</option>   -->
                             <dd class="col-xl-9">{{$pb->TenPhong}}.</dd>
                        @endforeach

                        

                        <dt class="col-xl-3">Email khác</dt>
                        <dd class="col-xl-9">{{$congvanden->EmailAdd}}</dd>

                        <dt class="col-xl-3">Email CC</dt>
                        <dd class="col-xl-9">{{$congvanden->EmailCC}}</dd>

                        <dt class="col-xl-3">File đính kèm</dt>
                        <dd class="col-xl-9" > 
                            <a href="upload/file/{{$congvanden->DuongDan}}"><b style="color: blue;">{{$congvanden->DuongDan}}</b></a>  
                        </dd>

                        <dt class="col-xl-3">Hạn xử lý</dt>
                        <dd class="col-xl-9">{{$congvanden->HanXuly}}</dd>

                        <dt class="col-xl-3">Nơi lưu</dt>
                        <dd class="col-xl-9">{{$noiluu->TenNoiLuu}}</dd>

                        <dt class="col-xl-3">Email Send</dt>
                        <dd class="col-xl-9">{{$congvanden->EmailSend}}</dd>

                        <dt class="col-xl-3">Email send status</dt>
                        <dd class="col-xl-9">{{$congvanden->TinhTrang}}</dd>
                    </dl>
                </div>
            </section>
            
        </div>
    </div>
</div>
<script>
    $('#id').delay(3000).fadeOut('fast');
</script>
<script type="text/javascript">
    $(document).ready(function() {      
            $("#sendEmail").click(function () {
            var url = 'http://alst.com.vn/qlvb/' + "Home/cvden_sendemail";
            var ddlsource = $(this).val();
            // alert(ddlsource);
            $.getJSON(url, { id: ddlsource }, function (data) {
                alert("Send email: " + data);
            })
        }) 
        // $("#sendEmail").click(function(){
        //     var idpb = $(this).val();
            //  alert(idpb);
            // $.get("admin/ajax/loaitin/"+idTheLoai,function(data){
            //     //  alert(data);
            //     $("#idLoaiTin").html(data);
            // });
        // });
    });
</script>

<!-- START: page scripts -->
<script>

    $(function() {
		$("#m_section_name").html("Our Profile");
        ///////////////////////////////////////////////////////////
        // ADJUSTABLE TEXTAREA
        autosize($('.adjustable-textarea'));

        
    });
</script>
<!-- END: page scripts -->
@include('components/footer')
