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
   <div class="col-xs-12 col-sm-12 col-md-12" >
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">關於鴻博</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h4>
                                <p>
                                 本公司致力於成為新一波工業革命浪潮中提供機械視覺系統整合的系統開發商，整合運動控制、系統通訊、快速回饋資訊成為製造業升級時，不可獲缺的伙伴。
                                 <br>
                                 <br>
                                核心技術
                                <br>
                                <br>
                                <ul>
                                    <li>AOI光學自動量測技術</li>
                                    <li>高效率影像處理技術</li>
                                    <li>智慧型幾何空間快整運算技術</li>
                                    <li>PC-Base 運動、視覺控制系統整合</li>
                                    <li>光機電控系統整合技術. </li>
                                 </ul>
                                 <br>
                                 服務實績
                                 <br>
                                 <br>
                                 <ul>
                                     <li>螺絲/螺帽外觀尺寸視覺量測</li>
                                     <li>智慧停車場車牌辨識</li>
                                     <li>裁縫機針隙視覺量測</li>
                                 </ul>
                                 <br>
                                 </p>
                                </h4>
                            </div>
                        </div>
                    </div>
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <iframe width="100%" height="439" src="https://www.youtube.com/embed/m1K0o5OqvHQ" frameborder="0" allowfullscreen></iframe>
                </div>
                </div>
            </div>
        </div>
   </div>
   <div class="col-xs-12 col-sm-12 col-md-12" >
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">我們的合作伙伴</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-2">
                    <div class="panel-body img-hover">
                        <a href="images/halcon12-new-version.jpg" class="jqzoom" title="Halcon">
                            <img title="Halcon" src="images/halcon12-new-version.jpg" alt="Mvtec"style="width:100px;height:100px;" />
                        </a>
                    </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2">
                    <div class="panel-body img-hover">
                        <a href="images/ids.jpeg" class="jqzoom" title="皕像科技">
                            <img style="width:100px;height:100px;" src="/images/ids.jpeg">
                        </a> 
                    </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2">
                    <div class="panel-body img-hover">
                        <a href="images/farsight.jpeg" class="jqzoom" title="永視科技">
                            <img style="width:100px;height:100px;" src="/images/farsight.jpeg">
                        </a> 
                    </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2">
                    <div class="panel-body img-hover">
                        <a href="images/jidien.jpeg" class="jqzoom" title="中和碁電">
                            <img style="width:100px;height:100px;" src="/images/jidien.jpeg">
                        </a> 
                    </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2">
                    <div class="panel-body img-hover">
                        <a href="images/Photon-Tech.jpg" class="jqzoom" title="新亞洲儀器股份有限公司">
                            <img style="width:100px;height:100px;" src="/images/Photon-Tech.jpg">
                        </a> 
                    </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2">
                    <div class="panel-body img-hover">
                        <a href="images/basler_camera.jpg" class="jqzoom" title="Balser">
                       <img class="img-zoom" style="width:100px;height:100px;" src="/images/basler_camera.jpg">
                        </a> 
                    </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2">
                    <div class="panel-body img-hover">
                        <a href="images/Nevis.png" class="jqzoom" title="睿怡科技">
                       <img  style="width:150px;height:75px;" src="/images/Nevis.png">
                        </a>
                    </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2">
                    <div class="panel-body img-hover">
                        <a href="images/advantech.webp" class="jqzoom" title="研華科技">
                       <img  style="width:100px;height:100px;" src="/images/advantech.webp">
                        </a>
                    </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2">
                    <div class="panel-body img-hover" >
                        <a href="images/icpdas.jpeg" class="jqzoom" title="泓格科技">
                       	 <img  style="width:100px;height:100px;" src="/images/icpdas.jpeg">
                        </a>
                    </div>
            </div>
        </div>
   </div>
</div>
@stop
