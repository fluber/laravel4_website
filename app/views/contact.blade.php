@extends('layout')

@section('content')
<div class="panel panel-success" class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
    <div class="panel-heading">
        <h3 class="panel-title">聯絡我們</h3>
    </div>
    <div class="panel-body">
       <hr>
        <form id="contact" name="contact" method="post" class="form-horizontal">
            <div class="form-group has-success">
                <input class="form-control" id="name" name="name" type="text" placeholder="姓名" required>
            </div>
            <div class="form-group has-success">
                <input class="form-control" id="email" name="email" type="email" placeholder="電子信箱" required>
            </div>
            <div class="form-group has-success">
                <textarea class="form-control" id="message" name="message" rows="10"  placeholder="訊息" required></textarea>
            </div>
            <div class="pull-right">
                <button type="submit" id="submit" name="submit" class="btn btn-success">傳送</button>
            </div>
        </form>
    </div>
</div>
    <style>
        #map-canvas {
            height: 400px;
            background-color: #CCC;
        }
    </style>
    <script>
        $('#contact').on('submit', function(e) {
            e.preventDefault();
            var fd = new FormData(this);
            $.ajax({
                type: 'POST',
                url: 'contact',
                data: fd,
                cache: false,
                dataType: 'json',
                processData: false,
                contentType: false,
                success: function(data) {
                    $('#contact').fadeTo( "slow", 0.15, function() {
                        BootstrapDialog.show({
                            type: BootstrapDialog.TYPE_SUCCESS,
                            title: 'Information',
                            message: '你的訊息已經傳送成功',
                            size: BootstrapDialog.SIZE_SMALL,
                            buttons:[{
                                label: '確定',
                                action: function(dialogItself) {
                                    dialogItself.close();
                                    location.reload();
                                }}]
                        });
                    });
                },
                error: function(request, status, error) {
                    $('#contact').fadeTo( "slow", 0.15, function() {
                        BootstrapDialog.show({
                            type: BootstrapDialog.TYPE_DANGER,
                            title: 'Information',
                            message: '傳送失敗，請重新更新網頁並再重新輸入！',
                            size: BootstrapDialog.SIZE_SMALL,
                            buttons:[{
                                label: '確定',
                                action: function(dialogItself) {
                                    dialogItself.close();
                                    location.reload();
                                }}]
                        });
                        location.reload();
                    });
                }
            });
        });
        $(document).ready(function() {
            $("#contact-li").addClass('active');
        });

    </script>
@stop
