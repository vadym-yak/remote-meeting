<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Remote Meeting</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/left-side-bar.css">
	<link rel="stylesheet" href="./assets/css/dark.css">
    <link rel="stylesheet" href="./assets/css/ui-modal.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="./assets/js/cdn/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="./assets/js/cdn/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="./assets/css/cdn/jquery.dataTables.min.css">
    <script src="./assets/js/cdn/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/cdn/sweetalert2.min.css"/>
    <script src="./assets/js/cdn/sweetalert2.min.js"></script>
	<script type="text/javascript" src="./assets/js/main.js"></script>
	<script type="text/javascript" src="./assets/js/api.js"></script>
</head>
<body>
<div class="header">
  <div class="left-head">
 	<div class="logo">
      <img src="http://cdns2.freepik.com/media/img/logo.png">
    </div>
	<a href="#" class="toggle-nav"><i class="fas fa-bars"></i></a>
	</div>
	<div class="share-screen">
		<h2>Share Screen</h2>
		<svg viewbox="0 0 140 140">
			<circle cx="70" cy="70" r="65" style="fill:#fff;stroke:#ddd"/>
			<polygon id="shape" points="50,40 100,70 100,70 50,100, 50,40" style="fill:#aaa;">
				<animate 
				id="animate_to_stop" 
				begin="indefinite" 
				fill="freeze" 
				attributeName="points" 
				dur="500ms" 
				to="45,45 95,45 95,95, 45,95 45,45"
				keySplines="
					0.1 0.8 0.2 1; 
					0.1 0.8 0.2 1; 
					0.1 0.8 0.2 1; 
					0.1 0.8 0.2 1; 
					0.1 0.8 0.2 1; 
					0.1 0.8 0.2 1"
				keyTimes="0;0.22;0.33;0.55;0.66;0.88;1" 
				calcMode="spline"
				/>
				
				<animate 
				id="animate_to_play" 
				begin="indefinite" 
				fill="freeze" 
				attributeName="points" 
				dur="500ms" 
				to="50,40 100,70 100,70 50,100, 50,40" 
				keySplines="
					0.1 0.8 0.2 1; 
					0.1 0.8 0.2 1; 
					0.1 0.8 0.2 1; 
					0.1 0.8 0.2 1; 
					0.1 0.8 0.2 1; 
					0.1 0.8 0.2 1"
				keyTimes="0;0.22;0.33;0.55;0.66;0.88;1" 
				calcMode="spline"
				/>
			</polygon>
		</svg>
	</div>
  <div class="right-head">
   
  </div>
</div>
<div class="nice-nav">
  <div class="user-info clear">
    <h2>Skyortho</h2>
  </div>
  <div class="clear"></div>
  <ul>
    <li class="child-menu">
      <a href="#" class='display-btn'><span class='lbl-r'><i class="fas fa-eye"></i>Display</span><span class="arr-right"><i class="fas fa-chevron-right"></i></span></a>
    </li>
    <li class="child-menu">
      <a href="#" class='control-btn'><span class='lbl-r'><i class="fas fa-microphone-alt"></i>Control</span><span class="arr-right"><i class="fas fa-chevron-right"></i></span></a>
    </li>
    <li class="child-menu">
      <a href="#" class='record-btn'><span class='lbl-r'><i class="fas fa-video"></i>Record</span><span class="arr-right"><i class="fas fa-chevron-right"></i></span></a>
    </li>
  </ul>
</div>
<div class="darkpage display-panel">
	<div class="sexytabs dark">
		<ul>
			<li><a href="#tab_dicom">
			<span>Dicom</span></a></li>
			<li><a href="#tab_stl">
			<span>STL</span></a></li>
			<li><a href="#tab_share">
			<span>Share</span></a></li>
		</ul>
		<div class="contents">
			<div id="tab_dicom">
				<button class='selected button'>Refresh</button>
				<ul class='dcm-list'>
					<li><span>dicom001.dcm</span><button class='button'>Display</button>
					<li><span>dicom002.dcm</span><button class='button'>Display</button>
				</ul>
			</div>
			<div id="tab_stl">
				<button class='selected button'>Refresh</button>
				<ul class='dcm-list'>
					<li><span>Left.stl</span><button class='button'>Display</button>
					<li><span>Right.stl</span><button class='button'>Display</button>
				</ul>
			</div>
			<div id="tab_share">
				share
			</div>
		</div>
	</div>
</div>
<div class="darkpage control-panel">
	<div class="contents">
		<div class="icon-panel">
			<i class="fas fa-microphone-slash"></i>
			<i class="fas fa-volume-mute"></i>
			<i class="fas fa-user"></i>
		</div>
		<div id="parti-list">
			<ul class='p-list'>
				<li><span>漓江</span><i class="fas fa-volume-up"></i><button class='button'>Chairman</button></li>
				<li><span>李丽</span><i class="fas fa-volume-up"></i><button class='button'>Chairman</button></li>
				<li><span>往里</span><i class="fas fa-volume-up"></i><button class='button'>Chairman</button></li>
			</ul>
		</div>
	</div>
</div>
<div class="body-part">
	<div class="body-back">
	</div>
	<iframe id="frame-content" src=""></iframe>
</div>

<div id="modal_projects" class="modal">
	<div class="modal-projects">
		<div class="modal-title">
			<br/>
			Choose a Project to start
		</div>
		<br/>
		<hr class="modal-splitter" />
		<br/>
		<div class="projects-body">

			<div id="projects-container">
				<!-- <a href="#" class="close-classic" onclick="closeDialog()"></a> -->
				
				<div style="padding-top: 10px; ">
				<table id="project-table" class="display" style="width: 100%">
					<thead>
					<tr>
						<th>No</th>
						<th>Owner</th>
						<th>Name</th>
					</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Admin</td>
							<td>Right side_femoral fracture_45Y_F</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Admin</td>
							<td>Artificial kneearthroplasty</td>
						</tr>
					</tbody>
				</table>
				</div>
				<div style="padding-top:10px; display: inline-flex;">        
				<button class="cancel-project-btn">Cancel</button>
				<button class="load-project-btn">Start</button>
				</div>
			</div>

		</div>
	</div>
</div>
</body>
</html>