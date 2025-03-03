@extends('layout')

@section('head')

<link rel="stylesheet" type="text/css" href="css/jquery.jqzoom.css">
<script type="text/javascript" src="js/jquery-1.6.js"></script>
<script type="text/javascript" src="js/jquery.jqzoom-core.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.jqzoom').jqzoom({
            zoomType: 'innerzoom',
            lens: true,
            preloadImages: false,
            alwaysOn: false
        });
    });

</script>
@stop

@section('content')
<div class="row">
   <div class="col-xs-12 col-sm-12 col-md-8" >
        <div class="row">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">機械視覺 + 運動控制</h3>
                </div>
                <div class="panel-body">
                    <iframe style="width:100%;border:0;" height="510" src="https://www.youtube.com/embed/_As6_V7uoHI" allowfullscreen></iframe>
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">幾何尺寸量測</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6">
                             <a href="images/measure_size_1.png" class="jqzoom" title="Measure 1">
                                 <img style="width:100%;" height="300" alt="example1" src="images/measure_size_1.png">
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <a href="images/measure_size_2.png" class="jqzoom" title="Measure 2">
                                 <img style="width:100%;" height="300" alt="example2" src="images/measure_size_2.png">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
   </div>
   <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="row">
              <div class="panel panel-success">
                  <div class="panel-heading">
                      <h3 class="panel-title">工業4.0 全球製造業的下一步</h3>
                  </div>
                  <div class="panel-body">
                      <span>蒸氣動力帶動機械化生產是第一次工業革命，電力帶動大規模生產是第二次，第三資是資訊化，第四次是全球製造業的下一步，智慧製造。</span>
                  </div>
                  <div class="panel-footer">
                      <a href="/about">更多&gt;&gt;</a>
                  </div>
              </div>
              <div class="panel panel-success">
                    <img style="width:100%;" height="540" alt="contact" src="images/contact.jpeg">
              </div>
              <div class="panel panel-success">
                  <div class="panel-heading">
                      <hr>
                      <h3 class="panel-title" style="font-size: 25px;"><a href="mailto:fluber@winerva.com">fluber@winerva.com</a></h3>
                      <hr>
                      <h3>0927-377-741</h3>
                      <hr>
                  </div>
              </div>

        </div>
   </div>
</div>
@stop
