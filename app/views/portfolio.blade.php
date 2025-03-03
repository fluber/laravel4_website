@extends('layout')

@section('content')
<div class="container">
	<ul class="nav nav-pills">
	    <li role="presentation">
		<a href="#screw" data-toggle="tab">金屬扣件</a>
	    </li>
	    <li role="presentation" class="active">
		<a href="#wafer" data-toggle="tab">半導體</a>
	    </li>
	    <li role="presentation">
		<a href="#battery" data-toggle="tab">電池</a>
	    </li>
	    <li role="presentation">
		<a href="#fruit01" data-toggle="tab">農產品磅秤系統</a>
	    </li>
	    <li role="presentation">
		<a href="#fruit02" data-toggle="tab">農產品分類系統</a>
	    </li>
	    <li role="presentation">
		<a href="#3D01" data-toggle="tab">3D屬性檢測</a>
	    </li>
	    <li role="presentation">
		<a href="#Flir01" data-toggle="tab">Flir工具</a>
	    </li>
	    <li role="presentation">
		<a href="#PlantCV01" data-toggle="tab">PlantCV分析</a>
	    </li>
	    <li role="presentation">
		<a href="#OCR01" data-toggle="tab">OCR分析</a>
	    </li>
	    <li role="presentation">
		<a href="#TYC01" data-toggle="tab">車燈檢測</a>
	    </li>
	    <li role="presentation">
		<a href="#Paper01" data-toggle="tab">標籤凹凸分析</a>
	    </li>
	</ul>
	<div class="tab-content" style="padding:10px;">
	   <div class="tab-pane " id="screw">
		<div class="container-fluid">
			<div class="panel panel-success">
		    		<div class="panel-heading">
					<h3 class="panel-title">金屬扣件業視覺檢測設備-視覺檢測系統</h3>
		    		</div>
		    		<div class="panel-body">
					<div style="display: flex; justify-content: center;">
					<iframe width="669" height="658" src="https://www.youtube.com/embed/kNnnKljKJ54" title="電容量測" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
					</div>
		    		</div>
				<div class="panel-footer">
					<div class="row">
					<p>
					    <font size="4" color="#3c763d">檢測項目</font>
					</p>
			    <div class="col-xs-4 col-sm-4 col-md-4">
				<ul>
				    <li>高度、寬度</li>
				    <li>孔徑</li>
				    <li>高度差異</li>
				    <li>寬度差異</li>
				    <li>孔徑差異</li>
				    <li>四角螺帽對邊對角</li>
				    <li>六角螺帽對邊對角</li>
				    <li>同心度</li>
				    <li>真圓度</li>
				</ul> 
			    </div>
			    <div class="col-xs-4 col-sm-4 col-md-4">
				<ul>
				    <li>牙外徑</li>
				    <li>牙底徑</li>
				    <li>牙距</li>
				    <li>牙角</li>
				    <li>牙品質</li>
				    <li>360度牙傷</li>
				    <li>正反牙</li>
				</ul> 
			    </div>
			    <div class="col-xs-4 col-sm-4 col-md-4">
				<ul>
				    <li>表面瑕疪</li>
				    <li>毛刺開裂</li>
				    <li>有無電鍍</li>
				    <li>有無印記</li>
				    <li>斷針、塞孔</li>
				    <li>有無焊點</li>
				</ul> 
			    </div>
					</div>
					<div class="row">
					<p>
					    <font size="4" color="#3c763d">案例說明</font>
					</p>
			       <p>
				  本系統提供金屬的螺絲及螺帽的外觀及尺寸的光學檢測功能，採用Halcon影像函式庫及Vistual Studio C#工具，經半年的開發時間，， 其檢測速度依檢測物大小及送料情況而有所不同，目前實際最快可到800 PPM，內部實測最高可到1200PPM，目前此系統自2012年運行至今，目前銷售到台灣、中國、韓國、泰國、西班牙、馬來西牙、德國、土耳其等國家，本公司累積大量的視覺檢測及電控整合經驗，我們的視覺檢測系統開發服務，可提供貴公司的檢測需求客製化設計，並達到快速檢測驗証、專業的機電整合系統開發服務。
			       <p>
					</div>
				</div>
			</div>
		</div>
	   </div>
	   <div class="tab-pane" id="Paper01">
		<div class="container-fluid">
			<div class="panel panel-success">
		    		<div class="panel-heading">
					<h3 class="panel-title">標籤凹凸分析</h3>
		    		</div>
		    		<div class="panel-body">
				<iframe src="{{ URL::to('標籤凹凸分析.pdf') }}" width="100%" height="600px"></iframe>
				</div>
			</div>
		</div>
	   </div>
	   <div class="tab-pane" id="TYC01">
		<div class="container-fluid">
			<div class="panel panel-success">
		    		<div class="panel-heading">
					<h3 class="panel-title">車燈檢測</h3>
		    		</div>
		    		<div class="panel-body">
				<iframe src="{{ URL::to('TYC.pdf') }}" width="100%" height="600px"></iframe>
				</div>
			</div>
		</div>
	   </div>
	   <div class="tab-pane" id="OCR01">
		<div class="container-fluid">
			<div class="panel panel-success">
		    		<div class="panel-heading">
					<h3 class="panel-title">OCR分析</h3>
		    		</div>
		    		<div class="panel-body">
				<iframe src="{{ URL::to('OCR視覺評估建議書.pdf') }}" width="100%" height="600px"></iframe>
				</div>
			</div>
		</div>
	   </div>
	   <div class="tab-pane" id="PlantCV01">
		<div class="container-fluid">
			<div class="panel panel-success">
		    		<div class="panel-heading">
					<h3 class="panel-title">PlantCV分析</h3>
		    		</div>
		    		<div class="panel-body">
				<iframe src="{{ URL::to('PlantCV.pdf') }}" width="100%" height="600px"></iframe>
				</div>
				<div class="panel-footer">
				   <div class="row">
					<p>
PlantCV is an open-source image analysis software package targeted for plant phenotyping. PlantCV provides a common programming and documentation interface to a collection of image analysis techniques that are integrated from a variety of source packages and algorithms. PlantCV utilizes a modular architecture that enables flexibility in the design of analysis workflows and rapid assimilation and integration of new methods. For more information about the project, links to recorded presentations, and publications using PlantCV, please visit our homepage: https://plantcv.danforthcenter.org/.
					</p>
					<p>
					    <font size="4" color="#3c763d">python package</font>
					</p>
			    		<div class="col-xs-4 col-sm-4 col-md-4">
			    		    <ul>
			    		        <li>pyqt5</li>
			    		        <li>numpy</li>
			    		        <li>matplotlib</li>
			    		        <li>plantcv</li>
			    		    </ul> 
			    		</div>
				   </div>
				</div>
			</div>
		</div>
		
	   </div>
	   <div class="tab-pane" id="Flir01">
		<div class="container-fluid">
			<div class="panel panel-success">
		    		<div class="panel-heading">
					<h3 class="panel-title">Flir工具</h3>
		    		</div>
		    		<div class="panel-body">
				<iframe src="{{ URL::to('FlirManual.pdf') }}" width="100%" height="600px"></iframe>
				</div>
				<div class="panel-footer">
				   <div class="row">
					<p>
					    <font size="4" color="#3c763d">python package</font>
					</p>
			    		<div class="col-xs-4 col-sm-4 col-md-4">
			    		    <ul>
			    		        <li>pyside6</li>
			    		        <li>numpy</li>
			    		        <li>matplotlib</li>
			    		    </ul> 
			    		</div>
				   </div>
				</div>
			</div>
		</div>
		
	   </div>
	   <div class="tab-pane" id="3D01">
		<div class="container-fluid">
			<div class="panel panel-success">
		    		<div class="panel-heading">
					<h3 class="panel-title">3D屬性檢測</h3>
		    		</div>
		    		<div class="panel-body">
				<iframe src="{{ URL::to('3D屬性檢測程式.pdf') }}" width="100%" height="600px"></iframe>
				<iframe src="{{ URL::to('plant_3d.pdf') }}" width="100%" height="600px"></iframe>
				</div>
				<div class="panel-footer">
				   <div class="row">
					<p>
					    <font size="4" color="#3c763d">python package</font>
					</p>
			    		<div class="col-xs-4 col-sm-4 col-md-4">
			    		    <ul>
			    		        <li>open3d</li>
			    		        <li>pyqti5</li>
			    		        <li>numpy</li>
			    		        <li>matplotlib</li>
			    		        <li>pillow</li>
			    		        <li>trimesh</li>
			    		        <li>vedo</li>
			    		        <li>vtk</li>
			    		        <li>PyMuPDF</li>
			    		    </ul> 
			    		</div>
				   </div>
				</div>
			</div>
		</div>
		
	   </div>
	   <div class="tab-pane" id="fruit01">
		<div class="container-fluid">
			<div class="panel panel-success">
		    		<div class="panel-heading">
					<h3 class="panel-title">農產品磅秤系統</h3>
		    		</div>
		    		<div class="panel-body">
				<iframe src="{{ URL::to('農產品磅秤系統.pdf') }}" width="100%" height="600px"></iframe>
				</div>
			</div>
		</div>
		
	   </div>
	   <div class="tab-pane" id="fruit02">
		<div class="container-fluid">
			<div class="panel panel-success">
		    		<div class="panel-heading">
					<h3 class="panel-title">農產品分類系統</h3>
		    		</div>
		    		<div class="panel-body">
				<iframe src="{{ URL::to('農產品分類視覺檢測機.pdf') }}" width="100%" height="600px"></iframe>
				</div>
			</div>
		</div>
		
	   </div>
	   <div class="tab-pane" id="battery">
		<div class="container-fluid">
			<div class="panel panel-success">
		    		<div class="panel-heading">
					<h3 class="panel-title">電池絕緣片組裝異常檢測</h3>
		    		</div>
		    		<div class="panel-body">
				<iframe src="{{ URL::to('battery.pdf') }}" width="100%" height="600px"></iframe>
				</div>
			</div>
		</div>
		
	   </div>
	   <div class="tab-pane active" id="wafer">
		<div class="container-fluid">
			<div class="panel panel-success">
		    		<div class="panel-heading">
					<h3 class="panel-title">Coating製程-噴嘴漏液檢測</h3>
		    		</div>
		    		<div class="panel-body">
					<div style="display: flex; justify-content: center;">
					<iframe width="699" height="658" src="https://www.youtube.com/embed/0IiyfrljP8Y" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

					</div>
		    		</div>
				<div class="panel-footer">
					<p>針對Coating製程噴嘴漏液的情況, 進行記錄與透過Modbus通知警示系統。</p>
					<p>本系統運行在Linux平台的Docker Container環境中</p>
					<p>Docker Image: docker pull winerva/docker_drip</p>
				<p>運行∶ docker run --rm  -e DISPLAY=$DISPLAY  --network host --privileged --device=/dev/bus/usb -v /tmp/.X11-unix:/tmp/.X11-unix  -v /var/run/docker.sock:/var/run/docker.sock -v ./DSCF0327.AVI:/home/smg/DSCF0327.AVI -v <span style="color: red;">./license.dat:/home/smg/docker_drip/license.dat</span>  -it winerva/docker_drip:2024012601 /home/smg/docker_drip/docker_drip 172.17.0.2</p>
				<p><span style="color: red;">要取得合法授權才可運行</span></p>
				</div>
			</div>

		</div>
	   </div>
	</div>
</div>
@stop
