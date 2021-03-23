

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	 ini_set ("display_errors", "1");
    error_reporting(E_ALL); 

    if(isset($_GET['r'])) {
    $r = $_GET['r'];
    } else {
        $r = '';
    }
    if(isset($_GET['s'])) {
    $s = $_GET['s'];
    } else {
        $s = '';
    }
?>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title></title>
	<script src="odontograma_archivos/jquery-1.js" type="text/javascript"></script>
	<script src="odontograma_archivos/jquery.js" type="text/javascript"></script>
	<script src="odontograma_archivos/jquery_002.js" type="text/javascript"></script>
	<script src="odontograma_archivos/jquery_004.js" type="text/javascript"></script>
	<script src="odontograma_archivos/jquery_003.js" type="text/javascript"></script>

	<script type="text/javascript" src="canvg/rgbcolor.js"></script> 
    <script type="text/javascript" src="canvg/StackBlur.js"></script>
    <script type="text/javascript" src="canvg/canvg.js"></script>

    <script src="mootools-core-1.3.2-full-compat-yc.js" type="text/javascript"></script>
   	<script src="pace-0.5.1/pace.js"></script>
    <link href="pace-0.5.1/themes/pace-theme-center-circle.css" rel="stylesheet" />

    <link href="bootstrap.min.css" rel="stylesheet" />

</head>
<body>

<table border="1">
	<tbody><tr>
		<td colspan="2">
					<div id="message" style="height:20px">
					</div>
		</td>
	</tr>
	<tr>
		<td>
			<div style="font-family:arial; font-weight: bold;  font-size: 11pt; line-height:30px;height:30px;">
				Examen De Diagnostico
			</div>
			<div id="svgselect" style="width: 610px; height: 240px;"> <!-- background-color:red -->
				<svg id="examen" version="1.1" height="100%" width="100%">
					<g transform="scale(1.5)" id="gmain">
						<g id="P18">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">18</text>
							<!--
							-->
						</g>
						<g id="P17" transform="translate(25,0)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">17</text>
						</g>
						<g id="P16" transform="translate(50,0)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">16</text>
						</g>
						<g id="P15" transform="translate(75,0)">
						<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">15</text>
						</g>
						<g id="P14" transform="translate(100,0)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">14</text>
						</g>
						<g id="P13" transform="translate(125,0)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">13</text>
						</g>
						<g id="P12" transform="translate(150,0)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">12</text>
						</g>
						<g id="P11" transform="translate(175,0)">
						<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">11</text>
						</g>
						
						<!-- Izquierda segunda fila -->
				
						<g id="P55" transform="translate(75,40)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">55</text>
						</g>
						<g id="P54" transform="translate(100,40)">
						<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">54</text>
						</g>
						<g id="P53" transform="translate(125,40)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">53</text>
						</g>
						<g id="P52" transform="translate(150,40)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">52</text>
						</g>
						<g id="P51" transform="translate(175,40)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">51</text>
						</g>
				
						<!-- Izquierda tercer fila -->
				
						<g id="P85" transform="translate(75,80)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">85</text>
						</g>
						<g id="P84" transform="translate(100,80)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">84</text>
						</g>
						<g id="P83" transform="translate(125,80)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">83</text>
						</g>
						<g id="P82" transform="translate(150,80)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">82</text>
						</g>
						<g id="P81" transform="translate(175,80)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">81</text>
						</g>
				
						<!-- Izquierda cuarta fila -->
				
						<g id="P48" transform="translate(0,120)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">48</text>
						</g>
						<g id="P47" transform="translate(25,120)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">47</text>
						</g>
						<g id="P46" transform="translate(50,120)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">46</text>
						</g>
						<g id="P45" transform="translate(75,120)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">45</text>
						</g>
						<g id="P44" transform="translate(100,120)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">44</text>
						</g>
						<g id="P43" transform="translate(125,120)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">43</text>
						</g>
						<g id="P42" transform="translate(150,120)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">42</text>
						</g>
						<g id="P41" transform="translate(175,120)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">41</text>
						</g>
						
						<!-- Derecha primer fila -->
						
						<g id="P21" transform="translate(210,0)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">21</text>
						</g>
						<g id="P22" transform="translate(235,0)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">22</text>
						</g>
						<g id="P23" transform="translate(260,0)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">23</text>
						</g>
						<g id="P24" transform="translate(285,0)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">24</text>
						</g>
						<g id="P25" transform="translate(310,0)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">25</text>
						</g>
						<g id="P26" transform="translate(335,0)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">26</text>
						</g>
						<g id="P27" transform="translate(360,0)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">27</text>
						</g>
						<g id="P28" transform="translate(385,0)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">28</text>
						</g>
						
						<!-- Derecha segunda fila -->
						
						<g id="P61" transform="translate(210,40)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">61</text>
						</g>
						<g id="P62" transform="translate(235,40)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">62</text>
						</g>
						<g id="P63" transform="translate(260,40)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">63</text>
						</g>
						<g id="P64" transform="translate(285,40)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">64</text>
						</g>
						<g id="P65" transform="translate(310,40)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">65</text>
						</g>
						
						<!-- Derecha tercer fila -->
						
						<g id="P71" transform="translate(210,80)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">71</text>
						</g>
						<g id="P72" transform="translate(235,80)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">72</text>
						</g>
						<g id="P73" transform="translate(260,80)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">73</text>
						</g>
						<g id="P74" transform="translate(285,80)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">74</text>
						</g>
						<g id="P75" transform="translate(310,80)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">75</text>
						</g>
						
						<!-- Derecha cuarta fila -->
						
						<g id="P31" transform="translate(210,120)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">31</text>
						</g>
						<g id="P32" transform="translate(235,120)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">32</text>
						</g>
						<g id="P33" transform="translate(260,120)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">33</text>
						</g>
						<g id="P34" transform="translate(285,120)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">34</text>
						</g>
						<g id="P35" transform="translate(310,120)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">35</text>
						</g>
						<g id="P36" transform="translate(335,120)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">36</text>
						</g>
						<g id="P37" transform="translate(360,120)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">37</text>
						</g>
						<g id="P38" transform="translate(385,120)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">38</text>
						</g>
					</g>
				</svg>
			</div>
				<!--
			    <label id="copcaries">Caries: </label><br>
				<label id="copobturada">Obturadas: </label><br>
				<label id="copperdida">Perdidas </label><br>
				<label id="copsano">Sanos: </label><br>
				<label id="copindice">Indice COP: </label>
				-->
				<label style="color: #484343; font-family:arial; font-weight: bold;  font-size: 11pt;" id="coplabel">Caries:0	|| Obturadas:0	|| P/Ausentes:0	|| Sanos:0  || Indice COP:0  ||  COP:0 </label><br>
		</td>
		
	</tr>
	<tr> 
		<td>
			<table>
			
				<tbody>
				<div style="font-family:arial; font-weight: bold;  font-size: 11pt; line-height:30px;height:30px;">
				Examen Control
			</div>
			<div id="svgselect" style="width: 610px; height: 240px;"> <!-- background-color:red -->
				<svg id="control" version="1.1" height="100%" width="100%">
					<g transform="scale(1.5)" id="gmain">
						<g id="P18">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">18</text>
							<!--
							-->
						</g>
						<g id="P17" transform="translate(25,0)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">17</text>
						</g>
						<g id="P16" transform="translate(50,0)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">16</text>
						</g>
						<g id="P15" transform="translate(75,0)">
						<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">15</text>
						</g>
						<g id="P14" transform="translate(100,0)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">14</text>
						</g>
						<g id="P13" transform="translate(125,0)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">13</text>
						</g>
						<g id="P12" transform="translate(150,0)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">12</text>
						</g>
						<g id="P11" transform="translate(175,0)">
						<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">11</text>
						</g>
						
						<!-- Izquierda segunda fila -->
				
						<g id="P55" transform="translate(75,40)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">55</text>
						</g>
						<g id="P54" transform="translate(100,40)">
						<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">54</text>
						</g>
						<g id="P53" transform="translate(125,40)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">53</text>
						</g>
						<g id="P52" transform="translate(150,40)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">52</text>
						</g>
						<g id="P51" transform="translate(175,40)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">51</text>
						</g>
				
						<!-- Izquierda tercer fila -->
				
						<g id="P85" transform="translate(75,80)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">85</text>
						</g>
						<g id="P84" transform="translate(100,80)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">84</text>
						</g>
						<g id="P83" transform="translate(125,80)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">83</text>
						</g>
						<g id="P82" transform="translate(150,80)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">82</text>
						</g>
						<g id="P81" transform="translate(175,80)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">81</text>
						</g>
				
						<!-- Izquierda cuarta fila -->
				
						<g id="P48" transform="translate(0,120)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">48</text>
						</g>
						<g id="P47" transform="translate(25,120)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">47</text>
						</g>
						<g id="P46" transform="translate(50,120)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">46</text>
						</g>
						<g id="P45" transform="translate(75,120)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">45</text>
						</g>
						<g id="P44" transform="translate(100,120)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">44</text>
						</g>
						<g id="P43" transform="translate(125,120)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">43</text>
						</g>
						<g id="P42" transform="translate(150,120)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">42</text>
						</g>
						<g id="P41" transform="translate(175,120)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">41</text>
						</g>
						
						<!-- Derecha primer fila -->
						
						<g id="P21" transform="translate(210,0)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">21</text>
						</g>
						<g id="P22" transform="translate(235,0)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">22</text>
						</g>
						<g id="P23" transform="translate(260,0)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">23</text>
						</g>
						<g id="P24" transform="translate(285,0)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">24</text>
						</g>
						<g id="P25" transform="translate(310,0)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">25</text>
						</g>
						<g id="P26" transform="translate(335,0)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">26</text>
						</g>
						<g id="P27" transform="translate(360,0)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">27</text>
						</g>
						<g id="P28" transform="translate(385,0)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">28</text>
						</g>
						
						<!-- Derecha segunda fila -->
						
						<g id="P61" transform="translate(210,40)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">61</text>
						</g>
						<g id="P62" transform="translate(235,40)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">62</text>
						</g>
						<g id="P63" transform="translate(260,40)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">63</text>
						</g>
						<g id="P64" transform="translate(285,40)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">64</text>
						</g>
						<g id="P65" transform="translate(310,40)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">65</text>
						</g>
						
						<!-- Derecha tercer fila -->
						
						<g id="P71" transform="translate(210,80)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">71</text>
						</g>
						<g id="P72" transform="translate(235,80)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">72</text>
						</g>
						<g id="P73" transform="translate(260,80)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">73</text>
						</g>
						<g id="P74" transform="translate(285,80)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">74</text>
						</g>
						<g id="P75" transform="translate(310,80)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">75</text>
						</g>
						
						<!-- Derecha cuarta fila -->
						
						<g id="P31" transform="translate(210,120)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">31</text>
						</g>
						<g id="P32" transform="translate(235,120)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">32</text>
						</g>
						<g id="P33" transform="translate(260,120)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">33</text>
						</g>
						<g id="P34" transform="translate(285,120)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">34</text>
						</g>
						<g id="P35" transform="translate(310,120)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">35</text>
						</g>
						<g id="P36" transform="translate(335,120)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">36</text>
						</g>
						<g id="P37" transform="translate(360,120)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">37</text>
						</g>
						<g id="P38" transform="translate(385,120)">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="white" stroke="navy" stroke-width="0.5" id="Incisal" opacity="1"></polygon>
							<polygon points="0,5 	20,5 	15,10 	5,10" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,10 	15,10 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Oclusal" opacity="1"></polygon>
							<polygon points="5,20 	15,20 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="5,25 	15,25 	20,30 	0,30" fill="white" stroke="navy" stroke-width="0.5" id="Vestibular" opacity="1"></polygon>
							<polygon points="15,10 	20,5 	20,25 	15,20" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	5,10 	5,20 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">38</text>
						</g>
					</g>
				</svg>
			</div>
				<!--
			    <label id="copcariesc">Caries: </label><br>
				<label id="copobturadac">Obturadas: </label><br>
				<label id="copperdidac">Perdidas </label><br>
				<label id="copsanoc">Dientes sanos: </label><br>
				<label id="copindicec">Indice COP: </label>
				-->
				<label style="color: #484343; font-family:arial; font-weight: bold;  font-size: 11pt;" id="coplabelc">Caries:0	|| Obturadas:0	|| P/Ausentes:0	|| Sanos:0  || Indice COP:0  ||  COP:0 </label><br>
			</tbody>
				
			</table>
		
				<!--</tr>-->

				<tr>

					<td>
			<div style="font-family:arial; font-weight: bold;  font-size: 11pt; line-height:30px;height:30px;">Indice de O´Leary Inicial
			</div>
			<div id="svgselect3" style="width: 610px; height: 120px;"> <!-- background-color:red -->
				<svg id="loreal1" version="1.1" height="100%" width="100%">
	<g transform="scale(1.5)" id="gmain">
						<g id="OI18" transform="translate(0,0)">							
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">18</text>
							<!--
							-->
						</g>
						<g id="OI17" transform="translate(25,0)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">17</text>
						</g>
						<g id="OI16" transform="translate(50,0)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">16</text>
						</g>
						<g id="OI15" transform="translate(75,0)">						
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">15</text>
						</g>
						<g id="OI14" transform="translate(100,0)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">14</text>
						</g>
						<g id="OI13" transform="translate(125,0)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">13</text>
						</g>
						<g id="OI12" transform="translate(150,0)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">12</text>
						</g>
						<g id="OI11" transform="translate(175,0)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">11</text>
						</g>
						
						<!-- Izquierda segunda fila -->
						<!--
						<g id="OI55" transform="translate(75,-20)">							
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">55</text>
						</g>
						<g id="OI54" transform="translate(100,-20)">						
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">54</text>
						</g>
						<g id="OI53" transform="translate(125,-20)">						
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">53</text>
						</g>
						<g id="OI52" transform="translate(150,-20)">						
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">52</text>
						</g>
						<g id="OI51" transform="translate(175,-20)">						
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">51</text>
						</g>
				
						
				
						<g id="OI85" transform="translate(75,80)">							
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">85</text>
						</g>
						<g id="OI84" transform="translate(100,80)">							
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">84</text>
						</g>
						<g id="OI83" transform="translate(125,80)">						
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">83</text>
						</g>
						<g id="OI82" transform="translate(150,80)">							
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">82</text>
						</g>
						<g id="OI81" transform="translate(175,80)">							
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">81</text>
						</g>
						-->
						<!-- Izquierda cuarta fila -->
				
						<g id="OI48" transform="translate(0,40)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">48</text>
						</g>
						<g id="OI47" transform="translate(25,40)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">47</text>
						</g>
						<g id="OI46" transform="translate(50,40)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">46</text>
						</g>
						<g id="OI45" transform="translate(75,40)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">45</text>
						</g>
						<g id="OI44" transform="translate(100,40)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">44</text>
						</g>
						<g id="OI43" transform="translate(125,40)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">43</text>
						</g>
						<g id="OI42" transform="translate(150,40)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">42</text>
						</g>
						<g id="OI41" transform="translate(175,40)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">41</text>
						</g>
						
						<!-- Derecha primer fila -->
						
						<g id="OI21" transform="translate(210,0)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">21</text>
						</g>
						<g id="OI22" transform="translate(235,0)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">22</text>
						</g>
						<g id="OI23" transform="translate(260,0)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">23</text>
						</g>
						<g id="OI24" transform="translate(285,0)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">24</text>
						</g>
						<g id="OI25" transform="translate(310,0)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">25</text>
						</g>
						<g id="OI26" transform="translate(335,0)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">26</text>
						</g>
						<g id="OI27" transform="translate(360,0)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">27</text>
						</g>
						<g id="OI28" transform="translate(385,0)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">28</text>
						</g>
						
						<!-- Derecha segunda fila -->
						<!--
						<g id="OI61" transform="translate(210,-20)">							
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">61</text>
						</g>
						<g id="OI62" transform="translate(235,-20)">							
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">62</text>
						</g>
						<g id="OI63" transform="translate(260,-20)">							
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">63</text>
						</g>
						<g id="OI64" transform="translate(285,-20)">							
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">64</text>
						</g>
						<g id="OI65" transform="translate(310,-20)">							
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">65</text>
						</g>
						
						
						
						<g id="OI71" transform="translate(210,80)">							
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">71</text>
						</g>
						<g id="OI72" transform="translate(235,80)">							
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">72</text>
						</g>
						<g id="OI73" transform="translate(260,80)">							
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">73</text>
						</g>
						<g id="OI74" transform="translate(285,80)">							
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">74</text>
						</g>
						<g id="OI75" transform="translate(310,80)">						
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">75</text>
						</g>
						-->
						<!-- Derecha cuarta fila -->
						
						<g id="OI31" transform="translate(210,40)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">31</text>
						</g>
						<g id="OI32" transform="translate(235,40)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">32</text>
						</g>
						<g id="OI33" transform="translate(260,40)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">33</text>
						</g>
						<g id="OI34" transform="translate(285,40)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">34</text>
						</g>
						<g id="OI35" transform="translate(310,40)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">35</text>
						</g>
						<g id="OI36" transform="translate(335,40)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">36</text>
						</g>
						<g id="OI37" transform="translate(360,40)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">37</text>
						</g>

						<g id="OI38" transform="translate(385,40)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">38</text>
						</g>
					</g>					
				</svg>
			

			</div>	
				<!--
			    <label id="oipresente">Superfices presentes: </label><br>
				<label id="oitenido">Superfices teñidas: </label><br>
				<label id="oiindice">Indice O´Leary inicial: </label><br>
				<label id="oidiagnostico">Diagnostico inicial: </label>
				-->
				<label style="color: #484343; font-family:arial; font-weight: bold;  font-size: 11pt;" id="oilabel">Presentes:0	|| Teñidas:0	||  O´Leary Inicial:0  ||  Diagnostico:-- </label><br>
			</td>
					
				</tr>

				<tr>
				
					<td><div style="font-family:arial; font-weight: bold;  font-size: 11pt; line-height:30px;height:30px;">Indice de O´Leary Final
			</div>
			<div id="svgselect4" style="width: 610px; height: 120px;"> <!-- background-color:red -->
				<svg id="loreal2" version="1.1" height="100%" width="100%">
					<g transform="scale(1.5)" id="gmain">
						<g id="OF18" transform="translate(0,0)">							
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">18</text>
							<!--
							-->
						</g>
						<g id="OF17" transform="translate(25,0)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">17</text>
						</g>
						<g id="OF16" transform="translate(50,0)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">16</text>
						</g>
						<g id="OF15" transform="translate(75,0)">						
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">15</text>
						</g>
						<g id="OF14" transform="translate(100,0)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">14</text>
						</g>
						<g id="OF13" transform="translate(125,0)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">13</text>
						</g>
						<g id="OF12" transform="translate(150,0)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">12</text>
						</g>
						<g id="OF11" transform="translate(175,0)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">11</text>
						</g>
						
						<!-- Izquierda segunda fila -->
						<!--
						<g id="P55" transform="translate(75,-20)">							
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">55</text>
						</g>
						<g id="P54" transform="translate(100,-20)">						
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">54</text>
						</g>
						<g id="P53" transform="translate(125,-20)">						
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">53</text>
						</g>
						<g id="P52" transform="translate(150,-20)">						
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">52</text>
						</g>
						<g id="P51" transform="translate(175,-20)">						
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">51</text>
						</g>
				
						
				
						<g id="P85" transform="translate(75,80)">							
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">85</text>
						</g>
						<g id="P84" transform="translate(100,80)">							
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">84</text>
						</g>
						<g id="P83" transform="translate(125,80)">						
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">83</text>
						</g>
						<g id="P82" transform="translate(150,80)">							
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">82</text>
						</g>
						<g id="P81" transform="translate(175,80)">							
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">81</text>
						</g>
						-->
						<!-- Izquierda cuarta fila -->
				
						<g id="OF48" transform="translate(0,40)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">48</text>
						</g>
						<g id="OF47" transform="translate(25,40)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">47</text>
						</g>
						<g id="OF46" transform="translate(50,40)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">46</text>
						</g>
						<g id="OF45" transform="translate(75,40)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">45</text>
						</g>
						<g id="OF44" transform="translate(100,40)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">44</text>
						</g>
						<g id="OF43" transform="translate(125,40)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">43</text>
						</g>
						<g id="OF42" transform="translate(150,40)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">42</text>
						</g>
						<g id="OF41" transform="translate(175,40)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">41</text>
						</g>
						
						<!-- Derecha primer fila -->
						
						<g id="OF21" transform="translate(210,0)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">21</text>
						</g>
						<g id="OF22" transform="translate(235,0)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">22</text>
						</g>
						<g id="OF23" transform="translate(260,0)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">23</text>
						</g>
						<g id="OF24" transform="translate(285,0)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">24</text>
						</g>
						<g id="OF25" transform="translate(310,0)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">25</text>
						</g>
						<g id="OF26" transform="translate(335,0)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">26</text>
						</g>
						<g id="OF27" transform="translate(360,0)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">27</text>
						</g>
						<g id="OF28" transform="translate(385,0)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">28</text>
						</g>
						
						<!-- Derecha segunda fila -->
						<!--
						<g id="P61" transform="translate(210,-20)">							
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">61</text>
						</g>
						<g id="P62" transform="translate(235,-20)">							
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">62</text>
						</g>
						<g id="P63" transform="translate(260,-20)">							
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">63</text>
						</g>
						<g id="P64" transform="translate(285,-20)">							
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">64</text>
						</g>
						<g id="P65" transform="translate(310,-20)">							
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">65</text>
						</g>
						
						
						
						<g id="P71" transform="translate(210,80)">							
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">71</text>
						</g>
						<g id="P72" transform="translate(235,80)">							
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">72</text>
						</g>
						<g id="P73" transform="translate(260,80)">							
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">73</text>
						</g>
						<g id="P74" transform="translate(285,80)">							
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">74</text>
						</g>
						<g id="P75" transform="translate(310,80)">						
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">75</text>
						</g>
						-->
						<!-- Derecha cuarta fila -->
						
						<g id="OF31" transform="translate(210,40)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">31</text>
						</g>
						<g id="OF32" transform="translate(235,40)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">32</text>
						</g>
						<g id="OF33" transform="translate(260,40)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">33</text>
						</g>
						<g id="OF34" transform="translate(285,40)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">34</text>
						</g>
						<g id="OF35" transform="translate(310,40)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">35</text>
						</g>
						<g id="OF36" transform="translate(335,40)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">36</text>
						</g>
						<g id="OF37" transform="translate(360,40)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">37</text>
						</g>

						<g id="OF38" transform="translate(385,40)">
							<polygon points="0,5 	20,5 	15,20 	5,20" fill="white" stroke="navy" stroke-width="0.5" id="Bucal" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,25 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Lingual" opacity="1"></polygon>
							<polygon points="10,15 	20,5 	20,25 	10,15" fill="white" stroke="navy" stroke-width="0.5" id="Mesial" opacity="1"></polygon>
							<polygon points="0,5 	10,15 	10,15 	0,25" fill="white" stroke="navy" stroke-width="0.5" id="Distal" opacity="1"></polygon>
							<text x="6" y="37" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">38</text>
						</g>
					</g>
				</svg>
			</div>
				<!--
				 <label id="ofpresente">Superfices presentes: </label><br>
				<label id="oftenido">Superfices teñidas: </label><br>
				<label id="ofindice">Indice O´Leary Final: </label><br>
				<label id="ofdiagnostico">Diagnostico Final: </label>
				-->
				<label style="color: #484343; font-family:arial; font-weight: bold;  font-size: 11pt;" id="oflabel">Presentes:0	|| Teñidas:0	||  O´Leary Inicial:0  ||  Diagnostico:-- </label><br>
			</td>	
			
			<tr>
				<td>
				   
					<textarea wrap="hard" id="tarea" placeholder="Observaciones" rows="3" cols="85"></textarea>		
				   
				</td>
			</tr>

		    </tr>
			</tbody></table>
		</td>
	</tr>
</tbody></table>

 <div id="clr"> 
 		<div id="gray" title="Diente en erupción" style="background-color:gray;"><label style="position: fixed; left: 730px;" for="gray">Diente en erupción</label></div>
 		<div id="sano" title="Sano" style="background-color:purple; border: solid 3px green;"><label style="position: fixed; left: 730px;" for="sano">Sano</label></div>
        <div id="black" title="Ausente" style="background-color:black;"><label style="position: fixed; left: 730px;" for="black">Ausente</label></div>
        <div id="red" title="Caries" style="background-color:red;"><label style="position: fixed; left: 730px;" for="red">Caries</label></div>
        <div id="green" title="Sellante" style="background-color:green;"><label style="position: fixed; left: 730px;" for="green">Sellante</label></div> 
        <div id="orange" title="Indicacion de Exodoncia" style="background-color:orange;"><label style="position: fixed; left: 730px;" for="orange">Indicacion de Exodoncia</label></div>
        <div id="blue" title="Obturada" style="background-color:blue;"><label style="position: fixed; left: 730px;" for="blue">Obturada</label></div>
        <div id="yellow" title="Obturada Deficiente" style="background-color:blue; border: solid 3px red;"><label style="position: fixed; left: 730px;" for="yellow">Obturada Deficiente</label></div>
        <div id="eraser" title="Borrador" style="background-color:white; border: solid 1px;"><label style="position: fixed; left: 730px;" for="eraser">Borrador</label></div>
        <form name="f1" method="POST" action="snapshot.php">        
		<input id="imagen" type="text" name="imagen" style="visibility:hidden">
		<input id="usuario" type="text" name="usuario" style="visibility:hidden">
		<input id="caso" type="text" name="caso" style="visibility:hidden">
        <input id="guardar" type="button" style="position: fixed; left: 730px;" value="Guardar"></input>
        <!--<input id="cargar" type="button" style="position: fixed; left: 730px;" value="Cargar"></input>-->
        <!--<input id="descargar" type="button" style="position: fixed; left: 730px;" value="Descargar" onclick="renderCanvas(), descargar()"></input>-->
        <label id="colse" style="visibility:hidden ; position: fixed; left: 700px;">Item seleccionado: Ninguno</label>
        <label id="dise" style="visibility:hidden; position: fixed; left: 700px;">Ult. Diente seleccionado: Ninguno  <br>Cara: ninguna</label>
        <label id="diex" style="visibility:hidden; position: fixed; left: 700px;">Diente explorado: Ninguno  <br>Cara: ninguna</label>
        </form>
 </div> 

 	<table id="tb1" class="table table-striped" name="tb1" style="position: fixed; left: 730px;"  ></table>
	<script type="text/javascript">
		var cedula=<?php echo $r ?>;
		var parametros = {
	                "cedula" : cedula
	    };
	    //////////////////////////////////////////////
		$.ajax({
	                data:  parametros,
	                url:   'OdontoHistorico.php',
	                type:  'post',
	                beforeSend: function () {
	                        $("#tb1").html("Procesando, espere por favor...");
	                },
	                success:  function (response) {
	                        $("#tb1").html(response);
	                        //$('#tb1').DataTable();
	                }
	    });
		//////////////////////////////////////////////////
	</script>

<style type="text/css">
	
	#histo{
	  overflow-y: scroll;
	  height: 200px;
	  width: 100%;
	  position: absolute;
	}
	#tb1{
	   
	    float: right;
	 	position: fixed;
	 	top: 322px;
	 	width: 100px;
	    left: 700px;
	}

	#gray{
	    cursor:pointer;
	    width:20px;
	    height:20px;
	    float: right;
	 	position: fixed;
	 	top: 108px;
	    left: 700px;
	}
	#sano{
	    cursor:pointer;
	    width:20px;
	    height:20px;
	    float: right;
	 	position: fixed;
	 	top: 128px;
	    left: 698px;
	}
	#black{
	    cursor:pointer;
	    width:20px;
	    height:20px;
	    float: right;
	 	position: fixed;
	 	top: 150px;
	    left: 700px;
	}
	#red{
	    cursor:pointer;
	    width:20px;
	    height:20px;
	    float: right;
	 	position: fixed;
	 	top: 170px;
	    left: 700px;
	}
	#green{
	    cursor:pointer;
	    width:20px;
	    height:20px;
	    float: right;
	 	position: fixed;
	 	top: 190px;
	    left: 700px;
	}
	#orange{
	    cursor:pointer;
	    width:20px;
	    height:20px;
	    float: right;
	 	position: fixed;
	 	top: 210px;
	    left: 700px;
	}
	#blue{
	    cursor:pointer;
	    width:20px;
	    height:20px;
	    float: right;
	 	position: fixed;
	 	top: 230px;
	    left: 700px;
	}
	#yellow{
	    cursor:pointer;
	    width:20px;
	    height:20px;
	    float: right;
	 	position: fixed;
	 	top: 250px;
	    left: 698px;
	}
	#eraser{
	    cursor:pointer;
	    width:20px;
	    height:20px;
	    float: right;
	 	position: fixed;
	 	top: 275px;
	    left: 700px;
	}
	#guardar{
	    cursor:pointer;	   
	    float: right;
	 	position: fixed;
	 	top: 290px;
	    left: 700px;
	}
	#cargar{
	    cursor:pointer;	   
	    float: right;
	 	position: fixed;
	 	top: 310px;
	    left: 700px;
	}
	/*
	#colse{
	       
	    float: right;
	 	position: fixed;
	 	top: 340px;
	    left: 680px;
	}
	#dise{    
	    
	    float: right;
	 	position: fixed;
	 	top: 380px;
	    left: 680px;
	}
	#diex{ 
	    float: right;
	 	position: fixed;
	 	top: 430px;
	    left: 680px;
	}
	/*
	#black label{
	    float: right;
	 	position: fixed;
	 	top: 500px;
	    left: 700px;
	}*/
	
	
</style>
<script type="text/javascript">

	var colorparte='white';

	
	var nomencladores = {"practicas": [
			{"nomenclador": "02.01", "color": "cyan"},
			{"nomenclador": "02.02", "color": "magenta"},
    ]
	};
	
	var color_lapiz = 'navy';
	var tenidaoi=0;
	var suppoi=128;
	var indiceoi= (tenidaoi*100)/suppoi;

	var tenidaof=0;
	var suppof=128;
	var indiceof= (tenidaof*100)/suppof;

	var copcariesV=0;
	var copobturadaV=0;
	var copperdidaV=0;
	var copsanoV=0;
	var copindiceV=0;

	var copcariesVc=0;
	var copobturadaVc=0;
	var copperdidaVc=0;
	var copsanoVc=0;
	var copindiceVc=0;

	$("#copcaries").text("Superficies cariadas: "+copcariesV); 
	$("#copobturada").text("Superficies obturadas: "+copobturadaV); 
	$("#copperdida").text("Dientes ausentes: "+copperdidaV); 
	$("#copsano").text("Dientes sanos: "+copsanoV); 
	$("#copindice").text("Indice COP: "+copindiceV+"  Sumatoria COP: "+(copcariesV+copobturadaV+copperdidaV)); 

	$("#oipresente").text("Superficies presentes: "+suppoi); //superficies presentes ioi
	$("#oitenido").text("Superficies teñidas: "+tenidaoi); //superficies tenidas ioi
	$("#oiindice").text("Indice O´Leary inicial: "+indiceoi+"%"); //superficies tenidas ioi
	if(indiceoi<20)$("#oidiagnostico").text("Diagnostico inicial: "+"< 20% Dentro del valor normal"); //superficies tenidas ioi

	$("#ofpresente").text("Superficies presentes: "+suppof); //superficies presentes iof
	$("#oftenido").text("Superficies teñidas: "+tenidaof); //superficies tenidas iof
	$("#ofindice").text("Indice O´Leary Final: "+indiceof+"%"); //superficies tenidas iof
	if(indiceof<20)$("#oidiagnostico").text("Diagnostico Final: "+"< 20% Dentro del valor normal"); //superficies tenidas iof
	$(document).ready(function () {
	    //guarda automaticamente cuando cierra
		/*window.onbeforeunload = function() {		  
		  window.onunload=guardarOdontograma;
		  alert("odontograma guardado");
		}*/
		        
		   

		var cs=0;
		var usua="<?php echo $r; ?>";
		var cas="<?php echo $s; ?>";
		$('polygon').attr('stroke', color_lapiz);
		$('text').attr('stroke', color_lapiz);
		$('text').attr('fill', color_lapiz);

		
		//alert(odontograma.dientes[0].pieza);
		//alert(odontograma.dientes[0].anterior.Oclusal);
		
		$('polygon').mouseover(function (evt) {
			var svg = $('#svgselect').svg('get'); 
			//alert(svg);
			var sector = $(evt.target);
			var sv=sector.parent().parent().parent().attr('id');
			var cara = sector.attr('id');
			var diente = sector.parent().attr('id');
			//var sv=sector.parent().parent().parent().attr('id');

			$('#piezanumero').html(diente);
			$('#piezacara').html(cara);
			//sector.attr('fill', 'yellow');
			//var over = sector.clone();
			//over.attr('fill', 'yellow');
			//sector.parent().add(over);

			//cambios over
			var ss=0;
			var inc2=$("#"+sv+"> #gmain > #"+diente+" > #Incisal").attr('fill');
			//alert($("#"+sv+"> #gmain > #"+diente+" > #Incisal").attr('fill'));
			var buc2=$("#"+sv+"> #gmain > #"+diente+" > #Bucal").attr('fill');
			var ocl2=$("#"+sv+"> #gmain > #"+diente+" > #Oclusal").attr('fill');
			var lin2=$("#"+sv+"> #gmain > #"+diente+" > #Lingual").attr('fill');
			var vest2=$("#"+sv+"> #gmain > #"+diente+" > #Vestibular").attr('fill');
			var mes2=$("#"+sv+"> #gmain > #"+diente+" > #Mesial").attr('fill');
			var dist2=$("#"+sv+"> #gmain > #"+diente+" > #Distal").attr('fill');

						 		//cambio over
			if(inc2!='white' && inc2!='#AED5B1')ss++;
			if(buc2!='white' && buc2!='#AED5B1')ss++;
			if(ocl2!='white' && ocl2!='#AED5B1')ss++;
			if(lin2!='white' && lin2!='#AED5B1')ss++;
			if(vest2!='white' && vest2!='#AED5B1')ss++;
			if(mes2!='white' && mes2!='#AED5B1')ss++;
			if(dist2!='white' && dist2!='#AED5B1')ss++;

		    if($(this).attr('fill')=="white"){
		    	$(this).attr('fill', '#AED5B1');	
		    	//$(this).attr('stroke-width', '1');	
		    	//si es todo el diente
		    	if(colorparte=='black' && ss==0)    	
				$("#"+sv+"> #gmain > #"+diente+" > polygon").attr('fill', '#AED5B1');	

				if(colorparte=='purple' && ss==0)    	
				$("#"+sv+"> #gmain > #"+diente+" > polygon").attr('fill', '#AED5B1');	

				if(colorparte=='orange' && ss==0)    	
				$("#"+sv+"> #gmain > #"+diente+" > polygon").attr('fill', '#AED5B1');	

				if(colorparte=='gray' && ss==0)    	
				$("#"+sv+"> #gmain > #"+diente+" > polygon").attr('fill', '#AED5B1');	
		    }

			$("#diex").html("Diente explorado: "+diente+"<br>Cara: "+cara);
			$("#message").html( "Diente explorado: "+diente+"    Cara: "+cara );
		});
		
		$('polygon').mouseout(function (evt) {
			//var sector = $(evt.target);
			//sector.attr('fill', 'white');
			var sector = $(evt.target);
			var cara = sector.attr('id');
			var diente = sector.parent().attr('id');
			var sv=sector.parent().parent().parent().attr('id');
			$('#piezanumero').html('XX');
			$('#piezacara').html('X');
			$("#diex").html("Diente explorado: Ninguno <br>Cara: ninguna");

			//cambios over

			var ss=0;
			var inc2=$("#"+sv+"> #gmain > #"+diente+" > #Incisal").attr('fill');
			var buc2=$("#"+sv+"> #gmain > #"+diente+" > #Bucal").attr('fill');
			var ocl2=$("#"+sv+"> #gmain > #"+diente+" > #Oclusal").attr('fill');
			var lin2=$("#"+sv+"> #gmain > #"+diente+" > #Lingual").attr('fill');
			var vest2=$("#"+sv+"> #gmain > #"+diente+" > #Vestibular").attr('fill');
			var mes2=$("#"+sv+"> #gmain > #"+diente+" > #Mesial").attr('fill');
			var dist2=$("#"+sv+"> #gmain > #"+diente+" > #Distal").attr('fill');

						 		//cambio over
			if(inc2!='white' && inc2!='#AED5B1')ss++;
			if(buc2!='white' && buc2!='#AED5B1')ss++;
			if(ocl2!='white' && ocl2!='#AED5B1')ss++;
			if(lin2!='white' && lin2!='#AED5B1')ss++;
			if(vest2!='white' && vest2!='#AED5B1')ss++;
			if(mes2!='white' && mes2!='#AED5B1')ss++;
			if(dist2!='white' && dist2!='#AED5B1')ss++;

			if($(this).attr('fill')=="#AED5B1"){
				$(this).attr('fill', 'white');	
				//$(this).attr('stroke-width', '0.5');	

				if(colorparte=='black' && ss==0)    	
				$("#"+sv+"> #gmain > #"+diente+" > polygon").attr('fill', 'white');	

				if(colorparte=='purple' && ss==0)    	
				$("#"+sv+"> #gmain > #"+diente+" > polygon").attr('fill', 'white');	

				if(colorparte=='orange' && ss==0)    	
				$("#"+sv+"> #gmain > #"+diente+" > polygon").attr('fill', 'white');	

				if(colorparte=='gray' && ss==0)    	
				$("#"+sv+"> #gmain > #"+diente+" > polygon").attr('fill', 'white');

				//$("#"+diente+" > polygon").attr('stroke-width', '0.5');	
			}
		});

		//guardar datos
		$('#guardar').click(function(evt){	
 			guardarOdontograma();
 			
		});


		$('#cargar').click(function(evt){	
			cargarOdontograma();
		});
		
		$('polygon').click(function (evt) {
			var sector = $(evt.target); 
			var col =$(this).attr('fill');//color de la superficie
			var coldi =$(this).attr('stroke');//color el marco de la superficie
			var sv=sector.parent().parent().parent().attr('id');
			 //cambios over
			 if(col=="#AED5B1")col='white';

			//alert(coldi);
			//si es oleary
			var ol = sector.parent().attr('id'); 
			var rest = ol.substring(0, 2);  // devuelve "abcde"
			var ccop = ol.substring(0, 1);  // devuelve "abcde"
			//alert(col);
			if(col!='white'){ //superficie diferente de clanco
				if(colorparte=='white'){//borrador PARA EFECTOS DE BORRADOR
					if(col=='black'){ //SI ERA AUSENTE,,
						if(rest=="OI")suppoi++;
						if(rest=="OF")suppof++;
						//if(ccop=="P"){copperdidaV--; copindiceV=copindiceV+2;}
					}
					else{ //si es de otro color no borrador
					 if(rest=="OI")tenidaoi--;
					 if(rest=="OF")tenidaof--;
					 if(ccop=="P"){
					 	if(sv=="examen"){
					 		if(col=='red'){copcariesV--; copindiceV=copindiceV+1;}
						 	//if(col=='orange'){copperdidaV--;  copindiceV=copindiceV+2;}
						 	if(col=='blue'){copobturadaV--;  copindiceV=copindiceV+0.5;}	
					 	}
					 	else{
					 		if(col=='red'){copcariesVc--; copindiceVc=copindiceVc+1;}
						 	//if(col=='orange'){copperdidaV--;  copindiceV=copindiceV+2;}
						 	if(col=='blue'){copobturadaVc--;  copindiceVc=copindiceVc+0.5;}	
					 	}
					 	if(coldi=="red") {$(this).attr('stroke', 'navy');  $(this).attr('stroke-width', '0.5');	}						
					 						 	
					 }
					}
					$(this).attr('fill', colorparte);					
				}
				else alert("Superficie ya marcardo, primero borre");
			}
			else{//superficie blanca y lapiz color
				var sedisano=0;				
				if(colorparte!='white' && col=='white'){
					if(colorparte=='black'){//si pinta ausente						
						if(rest=="OI")suppoi--;
						if(rest=="OF")suppof--;
						if(ccop=="P"){
							
							//si es ausente //si intenta pintar un ausente pero ya esta marcada alguna cara
						 	if (colorparte=='black' && coldi!='green') {
						 		var sectorss = $(evt.target);	
						 		var dientess = sectorss.parent().attr('id');

						 		var inc=$("#"+sv+"> #gmain > #"+dientess+" > #Incisal").attr('fill');
						 		var buc=$("#"+sv+"> #gmain > #"+dientess+" > #Bucal").attr('fill');
						 		var ocl=$("#"+sv+"> #gmain > #"+dientess+" > #Oclusal").attr('fill');
						 		var lin=$("#"+sv+"> #gmain > #"+dientess+" > #Lingual").attr('fill');
						 		var vest=$("#"+sv+"> #gmain > #"+dientess+" > #Vestibular").attr('fill');
						 		var mes=$("#"+sv+"> #gmain > #"+dientess+" > #Mesial").attr('fill');
						 		var dist=$("#"+sv+"> #gmain > #"+dientess+" > #Distal").attr('fill');
						 		/*if(inc!='white')sedisano++;
						 		if(buc!='white')sedisano++;
						 		if(ocl!='white')sedisano++;
						 		if(lin!='white')sedisano++;
						 		if(vest!='white')sedisano++;
						 		if(mes!='white')sedisano++;
						 		if(dist!='white')sedisano++;*/

						 		//cambio over
						 		if(inc!='white' && inc!='#AED5B1')sedisano++;
						 		if(buc!='white' && buc!='#AED5B1')sedisano++;
						 		if(ocl!='white' && ocl!='#AED5B1')sedisano++;
						 		if(lin!='white' && lin!='#AED5B1')sedisano++;
						 		if(vest!='white' && vest!='#AED5B1')sedisano++;
						 		if(mes!='white' && mes!='#AED5B1')sedisano++;
						 		if(dist!='white' && dist!='#AED5B1')sedisano++;

						 		if (sedisano>0) {alert("Superficie tiene marcadas "+sedisano+" superficies, primero borre");}
						 		else {
						 			if(sv=="examen"){copperdidaV++; copindiceV=copindiceV-10;}
						 			else{copperdidaVc++; copindiceVc=copindiceVc-10;}						 			
						 		}
						 	}				
						}
					}
					else {	//si pinta otro color				
						if(rest=="OI")tenidaoi++;
						if(rest=="OF")tenidaof++;
						if(ccop=="P"){
						 	if(colorparte=='red' && coldi!='green'){
						 		if(sv=="examen"){copcariesV++; copindiceV=copindiceV-1;}
						 		else {copcariesVc++; copindiceVc=copindiceVc-1;}
						 	}
						 	//if(colorparte=='orange' && coldi!='green'){copperdidaV++;  copindiceV=copindiceV-2;}
						 	if(colorparte=='blue' && coldi!='green'){
						 		if(sv=="examen"){copobturadaV++;  copindiceV=copindiceV-0.5;}
						 		else{copobturadaVc++;  copindiceVc=copindiceVc-0.5;}
						 	}
						 	if(colorparte=='purple'  && coldi!='green'){ //si es sano //si intenta pintar un sano pero ya esta marcada alguna cara
						 		
						 		var sectorss = $(evt.target);	
						 		var dientess = sectorss.parent().attr('id');

						 		var inc=$("#"+sv+"> #gmain > #"+dientess+" > #Incisal").attr('fill');
						 		var buc=$("#"+sv+"> #gmain > #"+dientess+" > #Bucal").attr('fill');
						 		var ocl=$("#"+sv+"> #gmain > #"+dientess+" > #Oclusal").attr('fill');
						 		var lin=$("#"+sv+"> #gmain > #"+dientess+" > #Lingual").attr('fill');
						 		var vest=$("#"+sv+"> #gmain > #"+dientess+" > #Vestibular").attr('fill');
						 		var mes=$("#"+sv+"> #gmain > #"+dientess+" > #Mesial").attr('fill');
						 		var dist=$("#"+sv+"> #gmain > #"+dientess+" > #Distal").attr('fill');
						 		/*if(inc!='white')sedisano++;
						 		if(buc!='white')sedisano++;
						 		if(ocl!='white')sedisano++;
						 		if(lin!='white')sedisano++;
						 		if(vest!='white')sedisano++;
						 		if(mes!='white')sedisano++;
						 		if(dist!='white')sedisano++;*/

						 		//cambio over
						 		if(inc!='white' && inc!='#AED5B1')sedisano++;
						 		if(buc!='white' && buc!='#AED5B1')sedisano++;
						 		if(ocl!='white' && ocl!='#AED5B1')sedisano++;
						 		if(lin!='white' && lin!='#AED5B1')sedisano++;
						 		if(vest!='white' && vest!='#AED5B1')sedisano++;
						 		if(mes!='white' && mes!='#AED5B1')sedisano++;
						 		if(dist!='white' && dist!='#AED5B1')sedisano++;

						 		if (sedisano==0) {
						 			if (sv=="examen") {copsanoV++;  copindiceV=copindiceV+10;}
						 			else{copsanoVc++;  copindiceVc=copindiceVc+10;}
						 		}
						 		else {alert("Superficie tiene marcadas "+sedisano+" superficies, primero borre");}
						 		//alert(bu);
						 	}

						 	//si es Diente en erupción //si intenta pintar un Diente en erupción pero ya esta marcada alguna cara
						 	if (colorparte=='gray' && coldi!='green') {
						 		var sectorss = $(evt.target);	
						 		var dientess = sectorss.parent().attr('id');

						 		var inc=$("#"+sv+"> #gmain > #"+dientess+" > #Incisal").attr('fill');
						 		var buc=$("#"+sv+"> #gmain > #"+dientess+" > #Bucal").attr('fill');
						 		var ocl=$("#"+sv+"> #gmain > #"+dientess+" > #Oclusal").attr('fill');
						 		var lin=$("#"+sv+"> #gmain > #"+dientess+" > #Lingual").attr('fill');
						 		var vest=$("#"+sv+"> #gmain > #"+dientess+" > #Vestibular").attr('fill');
						 		var mes=$("#"+sv+"> #gmain > #"+dientess+" > #Mesial").attr('fill');
						 		var dist=$("#"+sv+"> #gmain > #"+dientess+" > #Distal").attr('fill');
						 		/*if(inc!='white')sedisano++;
						 		if(buc!='white')sedisano++;
						 		if(ocl!='white')sedisano++;
						 		if(lin!='white')sedisano++;
						 		if(vest!='white')sedisano++;
						 		if(mes!='white')sedisano++;
						 		if(dist!='white')sedisano++;*/

						 		//cambio over
						 		if(inc!='white' && inc!='#AED5B1')sedisano++;
						 		if(buc!='white' && buc!='#AED5B1')sedisano++;
						 		if(ocl!='white' && ocl!='#AED5B1')sedisano++;
						 		if(lin!='white' && lin!='#AED5B1')sedisano++;
						 		if(vest!='white' && vest!='#AED5B1')sedisano++;
						 		if(mes!='white' && mes!='#AED5B1')sedisano++;
						 		if(dist!='white' && dist!='#AED5B1')sedisano++;

						 		if (sedisano>0) {alert("Superficie tiene marcadas "+sedisano+" superficies, primero borre");}
						 	}	
						 			
						 	//si es indicacion exodinci //si intenta pintar un indicacion exodinci  pero ya esta marcada alguna cara
						 	if (colorparte=='orange' && coldi!='green') {
						 		var sectorss = $(evt.target);	
						 		var dientess = sectorss.parent().attr('id');

						 		var inc=$("#"+sv+"> #gmain > #"+dientess+" > #Incisal").attr('fill');
						 		var buc=$("#"+sv+"> #gmain > #"+dientess+" > #Bucal").attr('fill');
						 		var ocl=$("#"+sv+"> #gmain > #"+dientess+" > #Oclusal").attr('fill');
						 		var lin=$("#"+sv+"> #gmain > #"+dientess+" > #Lingual").attr('fill');
						 		var vest=$("#"+sv+"> #gmain > #"+dientess+" > #Vestibular").attr('fill');
						 		var mes=$("#"+sv+"> #gmain > #"+dientess+" > #Mesial").attr('fill');
						 		var dist=$("#"+sv+"> #gmain > #"+dientess+" > #Distal").attr('fill');
						 		/*if(inc!='white')sedisano++;
						 		if(buc!='white')sedisano++;
						 		if(ocl!='white')sedisano++;
						 		if(lin!='white')sedisano++;
						 		if(vest!='white')sedisano++;
						 		if(mes!='white')sedisano++;
						 		if(dist!='white')sedisano++;*/
						 		//cambio over
						 		if(inc!='white' && inc!='#AED5B1')sedisano++;
						 		if(buc!='white' && buc!='#AED5B1')sedisano++;
						 		if(ocl!='white' && ocl!='#AED5B1')sedisano++;
						 		if(lin!='white' && lin!='#AED5B1')sedisano++;
						 		if(vest!='white' && vest!='#AED5B1')sedisano++;
						 		if(mes!='white' && mes!='#AED5B1')sedisano++;
						 		if(dist!='white' && dist!='#AED5B1')sedisano++;

						 		if (sedisano>0) {alert("Superficie tiene marcadas "+sedisano+" superficies, primero borre");}
						 		else {
						 			if(sv=="examen"){copperdidaV++; copindiceV=copindiceV-10;}
						 			else{copperdidaVc++; copindiceVc=copindiceVc-10;}
						 		}
						 	}				 	
					    }
					}
					if(coldi!='green' && sedisano==0) {$(this).attr('fill', colorparte);}
					//else alert("Superficie ya marcardo, primero borre");
					if(rest=="OI" && colorparte!='white' && colorparte!='black')$(this).attr('fill', '#008080');	
					if(rest=="OF" && colorparte!='white'  && colorparte!='black')$(this).attr('fill', '#008080');	
					if(ccop=="P" && /Deficiente/.test(cs) && coldi!='green') {$(this).attr('stroke', 'red');  $(this).attr('stroke-width', '1.2');	}						
					
					if(ccop=="P" && /Sano/.test(cs) && sedisano==0){	//pintar diente sano					
						var sector = $(evt.target);			
						var cara = sector.attr('id');
					    var diente = sector.parent().attr('id');
					    $("#"+sv+"> #gmain > #"+diente+" > polygon").attr('stroke', 'green');	
					    $("#"+sv+"> #gmain > #"+diente+" > polygon").attr('fill', 'white');				
					}

					if(ccop=="P" && /Ausente/.test(cs) && sedisano==0 && coldi!='green'){	//pintar diente Ausente					
						var sector = $(evt.target);			
						var cara = sector.attr('id');
					    var diente = sector.parent().attr('id');
					    $("#"+sv+"> #gmain > #"+diente+" > polygon").attr('stroke', 'white');	
					    $("#"+sv+"> #gmain > #"+diente+" > polygon").attr('fill', 'black');				
					}

					if(ccop=="P" && /Diente en erupción/.test(cs) && sedisano==0 && coldi!='green'){	 //pintar diente Diente en erupción				
						var sector2 = $(evt.target);			
						var cara2 = sector2.attr('id');
					    var diente2 = sector2.parent().attr('id');
					    $("#"+sv+"> #gmain > #"+diente2+" > polygon").attr('stroke', 'white');	
					    $("#"+sv+"> #gmain > #"+diente2+" > polygon").attr('fill', 'gray');				
					}

					//Indicacion de Exodoncia
					if(ccop=="P" && /Indicacion de Exodoncia/.test(cs) && sedisano==0 && coldi!='green'){	 //pintar diente exodonxia				
						var sector2 = $(evt.target);			
						var cara2 = sector2.attr('id');
					    var diente2 = sector2.parent().attr('id');
					    $("#"+sv+"> #gmain > #"+diente2+" > polygon").attr('stroke', 'white');	
					    $("#"+sv+"> #gmain > #"+diente2+" > polygon").attr('fill', 'orange');				
					}
							
				}			

				if(coldi=='green' && colorparte=='white'){ //borrar diente sano
					if(sv=="examen"){copsanoV--;  copindiceV=copindiceV-10;}
					else{copsanoVc--;  copindiceVc=copindiceVc-10;}
					var sector = $(evt.target);			
				    var cara = sector.attr('id');
					var diente = sector.parent().attr('id');
					$("#"+sv+"> #gmain > #"+diente+" > polygon").attr('stroke', 'navy');	
					$("#"+sv+"> #gmain > #"+diente+" > polygon").attr('fill', 'white');	
				}	

				//alert(col);
							
				/*
				else{
					/*if(rest=="OI" && colorparte!='white' && colorparte!='black'){tenidaoi++;}
					if(rest=="OI" && colorparte=='black'){suppoi--;}

					if(rest=="OF" && colorparte!='white' && colorparte!='black'){tenidaof++;}
					if(rest=="OF" && colorparte=='black'){suppof--;}
					//alert(tenidaoi+" "+suppoi);
					if(col=='black'){						
						if(rest=="OI")suppoi++;
						if(rest=="OF")suppof++;
						if(ccop=="P"){copperdidaV--; copindiceV=copindiceV-10;}
					}
					else {					
						if(rest=="OI")tenidaoi--;
						if(rest=="OF")tenidaof--;
						if(ccop=="P"){
						 	if(col=='red'){copcariesV--; copindiceV=copindiceV-1;}
						 	if(col=='orange'){copperdidaV--;  copindiceV=copindiceV-10;}
						 	if(col=='blue'){copobturadaV--;  copindiceV=copindiceV-0.5;}
					    }
					}
					
					
					$(this).attr('fill', colorparte);
					if(rest=="OI" && colorparte!='white')$(this).attr('fill', '#008080');	
					if(rest=="OF" && colorparte!='white')$(this).attr('fill', '#008080');	
					
					if(colorparte=='black')	$(this).attr('fill', colorparte);	

				}*/
			}
			
			if(col=='gray' && colorparte=='white'){ //borrar diente Diente en erupción
				var sector2= $(evt.target);			
				var cara2 = sector2.attr('id');
				var diente2 = sector2.parent().attr('id');
				$("#"+sv+"> #gmain > #"+diente2+" > polygon").attr('stroke', 'navy');	
				$("#"+sv+"> #gmain > #"+diente2+" > polygon").attr('fill', 'white');	
			}	

			if(col=='black' && colorparte=='white'){ //borrar diente ausente
					if (sv=="examen") {copperdidaV--;  copindiceV=copindiceV+10;}
					else{copperdidaVc--;  copindiceVc=copindiceVc+10;}
					var sector = $(evt.target);			
				    var cara = sector.attr('id');
					var diente = sector.parent().attr('id');
					$("#"+sv+"> #gmain > #"+diente+" > polygon").attr('stroke', 'navy');	
					$("#"+sv+"> #gmain > #"+diente+" > polygon").attr('fill', 'white');	
			}	

			if(col=='orange' && colorparte=='white'){ //borrar diente exodoncia
					if (sv=="examen") {copperdidaV--;  copindiceV=copindiceV+10;}
					else{copperdidaVc--;  copindiceVc=copindiceVc+10;}
					var sector = $(evt.target);			
				    var cara = sector.attr('id');
					var diente = sector.parent().attr('id');
					$("#"+sv+"> #gmain > #"+diente+" > polygon").attr('stroke', 'navy');	
					$("#"+sv+"> #gmain > #"+diente+" > polygon").attr('fill', 'white');	
			}	
			
			var strdebug = sector.parent().attr('id') + ' - ' + sector.attr('id');
			$("#message").html( strdebug );
			
		
			actualizarIndices();
			$("#dise").html("Ult. Diente seleccionado: "+ol+"<br>Cara: "+sector.attr('id'));
		});

		$("#clr > div").click(function(){
			    $("#clr > div").css('color','black');
                colorparte =$(this).css("background-color");
                cs=$(this).text();
                $(this).css('color','red');
                $("#colse").text("Item seleccionado: "+cs);

                //alert(colorparte);
        });

        $("#clr > div").mouseover(function(evt){
                $(this).css('width','24px');
               
                if( $(this).css('left')=="698px") $(this).css('left','696px');
                else  $(this).css('left','698px');
             /*
              cursor:pointer;
			    width:20px;
			    height:20px;
			    float: right;
			 	position: fixed;
			 	top: 230px;
			    left: 700px;
             */
                //alert(colorparte);
        });

         $("#clr > div").mouseout(function(evt){
                $(this).css('width','20px');
                if( $(this).css('left')=="698px") $(this).css('left','700px');
                else  $(this).css('left','698px');
            
        });
		
		$('#chkAnterior').click( function() {
		});
		
		$('#chkNuevo').click( function() {
		});



		function cargarOdontograma(){
		//DIAGNOSTICO Y CONTROL EXAMEN		
			$.ajax({
				//cargar con caso
	            //url: "imagenologia/Odontologia/"+usua+"/"+cas+"-dientes.json",
	            //cargar uno solo
	            url: "imagenologia/Odontologia/"+usua+"/dientes.json",
	            //force to handle it as text
	            dataType: "text",
	            error: function(jqXHR, textStatus, errorThrown) {
			    	alert('No se encontraron datos anteriores, se crearan cuando guarde el odontograma');
				},
	            success: function(data) {		                        
		            //data downloaded so we call parseJSON function 
		            //and pass downloaded data
		            var json = $.parseJSON(data);
		            if (json!=null) {
		            var u=0;
		 			var u2=11;
		 			while(u<52){
		 				$("#examen > #gmain > "+"#P"+u2+" > #Incisal").attr('fill',json['P'+u2]['diagn']['Incisal']);
		 				$("#examen > #gmain > "+"#P"+u2+" > #Bucal").attr('fill',json['P'+u2]['diagn']['Bucal']);
		 				$("#examen > #gmain > "+"#P"+u2+" > #Oclusal").attr('fill',json['P'+u2]['diagn']['Oclusal']);
		 				$("#examen > #gmain > "+"#P"+u2+" > #Lingual").attr('fill',json['P'+u2]['diagn']['Lingual']);
		 				$("#examen > #gmain > "+"#P"+u2+" > #Vestibular").attr('fill',json['P'+u2]['diagn']['Vestibular']);
		 				$("#examen > #gmain > "+"#P"+u2+" > #Mesial").attr('fill',json['P'+u2]['diagn']['Mesial']);
		 				$("#examen > #gmain > "+"#P"+u2+" > #Distal").attr('fill',json['P'+u2]['diagn']['Distal']);
		 				//$("#examen > #gmain > "+"#P"+u2+" > polygon").attr('stroke',json['P'+u2]['diagn']['linea']);
		 				//linea
		 				$("#examen > #gmain > "+"#P"+u2+" > #Incisal").attr('stroke',json['P'+u2]['diagn']['lIncisal']);
		 				$("#examen > #gmain > "+"#P"+u2+" > #Bucal").attr('stroke',json['P'+u2]['diagn']['lBucal']);
		 				$("#examen > #gmain > "+"#P"+u2+" > #Oclusal").attr('stroke',json['P'+u2]['diagn']['lOclusal']);
		 				$("#examen > #gmain > "+"#P"+u2+" > #Lingual").attr('stroke',json['P'+u2]['diagn']['lLingual']);
		 				$("#examen > #gmain > "+"#P"+u2+" > #Vestibular").attr('stroke',json['P'+u2]['diagn']['lVestibular']);
		 				$("#examen > #gmain > "+"#P"+u2+" > #Mesial").attr('stroke',json['P'+u2]['diagn']['lMesial']);
		 				$("#examen > #gmain > "+"#P"+u2+" > #Distal").attr('stroke',json['P'+u2]['diagn']['lDistal']);
		 				//$("#examen > #gmain > "+"#P"+u2+" > polygon").attr('stroke',json['P'+u2]['diagn']['llinea']);
		 				if(json['P'+u2]['diagn']['lIncisal']=="red")$("#examen > #gmain > "+"#P"+u2+" > #Incisal").attr('stroke-width','1.2');
		 				if(json['P'+u2]['diagn']['lBucal']=="red")$("#examen > #gmain > "+"#P"+u2+" > #Bucal").attr('stroke-width','1.2');
		 				if(json['P'+u2]['diagn']['lOclusal']=="red")$("#examen > #gmain > "+"#P"+u2+" > #Oclusal").attr('stroke-width','1.2');
		 				if(json['P'+u2]['diagn']['lLingual']=="red")$("#examen > #gmain > "+"#P"+u2+" > #Lingual").attr('stroke-width','1.2');
		 				if(json['P'+u2]['diagn']['lVestibular']=="red")$("#examen > #gmain > "+"#P"+u2+" > #Vestibular").attr('stroke-width','1.2');
		 				if(json['P'+u2]['diagn']['lMesial']=="red")$("#examen > #gmain > "+"#P"+u2+" > #Mesial").attr('stroke-width','1.2');
		 				if(json['P'+u2]['diagn']['lDistal']=="red")$("#examen > #gmain > "+"#P"+u2+" > #Distal").attr('stroke-width','1.2');

		 				$("#control > #gmain > "+"#P"+u2+" > #Incisal").attr('fill',json['P'+u2]['control']['Incisal']);
		 				$("#control > #gmain > "+"#P"+u2+" > #Bucal").attr('fill',json['P'+u2]['control']['Bucal']);
		 				$("#control > #gmain > "+"#P"+u2+" > #Oclusal").attr('fill',json['P'+u2]['control']['Oclusal']);
		 				$("#control > #gmain > "+"#P"+u2+" > #Lingual").attr('fill',json['P'+u2]['control']['Lingual']);
		 				$("#control > #gmain > "+"#P"+u2+" > #Vestibular").attr('fill',json['P'+u2]['control']['Vestibular']);
		 				$("#control > #gmain > "+"#P"+u2+" > #Mesial").attr('fill',json['P'+u2]['control']['Mesial']);
		 				$("#control > #gmain > "+"#P"+u2+" > #Distal").attr('fill',json['P'+u2]['control']['Distal']);
		 				//$("#control > #gmain > "+"#P"+u2+" > polygon").attr('stroke',json['P'+u2]['control']['linea']);
		 				//linea
		 				$("#control > #gmain > "+"#P"+u2+" > #Incisal").attr('stroke',json['P'+u2]['control']['lIncisal']);
		 				$("#control > #gmain > "+"#P"+u2+" > #Bucal").attr('stroke',json['P'+u2]['control']['lBucal']);
		 				$("#control > #gmain > "+"#P"+u2+" > #Oclusal").attr('stroke',json['P'+u2]['control']['lOclusal']);
		 				$("#control > #gmain > "+"#P"+u2+" > #Lingual").attr('stroke',json['P'+u2]['control']['lLingual']);
		 				$("#control > #gmain > "+"#P"+u2+" > #Vestibular").attr('stroke',json['P'+u2]['control']['lVestibular']);
		 				$("#control > #gmain > "+"#P"+u2+" > #Mesial").attr('stroke',json['P'+u2]['control']['lMesial']);
		 				$("#control > #gmain > "+"#P"+u2+" > #Distal").attr('stroke',json['P'+u2]['control']['lDistal']);
		 				//linea
		 				if(json['P'+u2]['control']['lIncisal']=="red")$("#control > #gmain > "+"#P"+u2+" > #Incisal").attr('stroke-width','1.2');
		 				if(json['P'+u2]['control']['lBucal']=="red")$("#control > #gmain > "+"#P"+u2+" > #Bucal").attr('stroke-width','1.2');
		 				if(json['P'+u2]['control']['lOclusal']=="red")$("#control > #gmain > "+"#P"+u2+" > #Oclusal").attr('stroke-width','1.2');
		 				if(json['P'+u2]['control']['lLingual']=="red")$("#control > #gmain > "+"#P"+u2+" > #Lingual").attr('stroke-width','1.2');
		 				if(json['P'+u2]['control']['lVestibular']=="red")$("#control > #gmain > "+"#P"+u2+" > #Vestibular").attr('stroke-width','1.2');
		 				if(json['P'+u2]['control']['lMesial']=="red")$("#control > #gmain > "+"#P"+u2+" > #Mesial").attr('stroke-width','1.2');
		 				if(json['P'+u2]['control']['lDistal']=="red")$("#control > #gmain > "+"#P"+u2+" > #Distal").attr('stroke-width','1.2');
		 				
						u2++;				
						if(u2==19 || u2==29 || u2==39 || u2==49)u2=u2+2;
						if(u2==56 || u2==66 || u2==76)u2=u2+5;

						u++;
					   }					   
		 			}
		 			else {alert('No se encontraron datos anteriores, se crearan cuando guarde el odontograma');}
	            }
            });
            //OLEARY FINAL E INICIAL
			$.ajax({
				//cargar con caso
	            //url: "imagenologia/Odontologia/"+usua+"/"+cas+"-oleary.json",

	            //cargar uno solo
	            url: "imagenologia/Odontologia/"+usua+"/oleary.json",
	            //force to handle it as text
	            dataType: "text",
	            success: function(data) {		                        
		            //data downloaded so we call parseJSON function 
		            //and pass downloaded data
		            var json = $.parseJSON(data);
		            if (json!=null) {
		            var d=0;
		 			var d2=11;
		 			while(d<32){		 			
		 				$("#OI"+d2+" > #Bucal").attr('fill',json['P'+d2]['inicial']['Bucal']);		 				
		 				//var ocl3=$("#OI"+d2+" > #Oclusal").attr('fill');
		 				$("#OI"+d2+" > #Lingual").attr('fill',json['P'+d2]['inicial']['Lingual']);
		 				//var vest3=$("#OI"+d2+" > #Vestibular").attr('fill');
		 				$("#OI"+d2+" > #Mesial").attr('fill',json['P'+d2]['inicial']['Mesial']);
		 				$("#OI"+d2+" > #Distal").attr('fill',json['P'+d2]['inicial']['Distal']);

		 				var line=$("#OI"+d2+" > polygon").attr('stroke'); 
		 				///////////////////////////////////////////////////////////////////////
		 				//var inc3c=$("#OF"+d2+" > #Incisal").attr('fill');
		 				$("#OF"+d2+" > #Bucal").attr('fill',json['P'+d2]['final']['Bucal']);		 				
		 				//var ocl3=$("#OI"+d2+" > #Oclusal").attr('fill');
		 				$("#OF"+d2+" > #Lingual").attr('fill',json['P'+d2]['final']['Lingual']);
		 				//var vest3=$("#OI"+d2+" > #Vestibular").attr('fill');
		 				$("#OF"+d2+" > #Mesial").attr('fill',json['P'+d2]['final']['Mesial']);
		 				$("#OF"+d2+" > #Distal").attr('fill',json['P'+d2]['final']['Distal']);

		 				var linec=$("#OF"+d2+" > polygon").attr('stroke'); 
		 				
						d2++;				
						if(d2==19 || d2==29 || d2==39 || d2==49)d2=d2+2;
						if(d2==56 || d2==66 || d2==76)d2=d2+5;

						d++;
		 			}
		 		    }
	            }
            });
			//INDICES
            $.ajax({
	            //url: "imagenologia/Odontologia/"+usua+"/"+cas+"-indices.json",

	            url: "imagenologia/Odontologia/"+usua+"/indices.json",
	            //force to handle it as text
	            dataType: "text",
	            success: function(data) {		                        
		            //data downloaded so we call parseJSON function 
		            //and pass downloaded data	
		            var json = $.parseJSON(data);	
		            if (json!=null) {
		            tenidaoi=parseInt(json['oleary']['inicial']['tenida']);
					suppoi=parseInt(json['oleary']['inicial']['supp']);
					indiceoi= (json['oleary']['inicial']['indice']);

					tenidaof=parseInt(json['oleary']['final']['tenida']);
					suppof=parseInt(json['oleary']['final']['supp']);
					indiceof=parseInt(json['oleary']['final']['indice']);

					copcariesV=parseInt(json['cop']['diagn']['caries']);
					copobturadaV=parseInt(json['cop']['diagn']['obturadas']);
					copperdidaV=parseInt(json['cop']['diagn']['perdidas']);
					copsanoV=parseInt(json['cop']['diagn']['sano']);
					copindiceV=parseInt(json['cop']['diagn']['indice']);  

					copcariesVc=parseInt(json['cop']['control']['caries']);
					copobturadaVc=parseInt(json['cop']['control']['obturadas']);
					copperdidaVc=parseInt(json['cop']['control']['perdidas']);
					copsanoVc=parseInt(json['cop']['control']['sano']);
					copindiceVc=parseInt(json['cop']['control']['indice']);  

					actualizarIndices();  
					}
		        }
            });
            //OBSERVACION
             $.ajax({
	            //url: "imagenologia/Odontologia/"+usua+"/"+cas+"-obs.txt",
	            url: "imagenologia/Odontologia/"+usua+"/obs.txt",
	            dataType: "text",
	            success: function(data) {
		            $('#tarea').html(data);
		        }
            });
	}
	//window.addEventListener('load', cargarOdontograma(), false);
	window.onload = cargarOdontograma;


	function guardarOdontograma(){
		////////////////////////////////////////////////////////////
 			//DIAGNOSTICO Y CONTROL EXAMEN
 			var odontograma2 =  {}; 	
 			var u=0;
 			var u2=11;
 			while(u<52){
 				var inc3=$("#examen > #gmain > "+"#P"+u2+" > #Incisal").attr('fill');
 				var buc3=$("#examen > #gmain > "+"#P"+u2+" > #Bucal").attr('fill');
 				var ocl3=$("#examen > #gmain > "+"#P"+u2+" > #Oclusal").attr('fill');
 				var lin3=$("#examen > #gmain > "+"#P"+u2+" > #Lingual").attr('fill');
 				var vest3=$("#examen > #gmain > "+"#P"+u2+" > #Vestibular").attr('fill');
 				var mes3=$("#examen > #gmain > "+"#P"+u2+" > #Mesial").attr('fill');
 				var dist3=$("#examen > #gmain > "+"#P"+u2+" > #Distal").attr('fill');

 				//lineas
 				var linc3=$("#examen > #gmain > "+"#P"+u2+" > #Incisal").attr('stroke');
 				var lbuc3=$("#examen > #gmain > "+"#P"+u2+" > #Bucal").attr('stroke');
 				var locl3=$("#examen > #gmain > "+"#P"+u2+" > #Oclusal").attr('stroke');
 				var llin3=$("#examen > #gmain > "+"#P"+u2+" > #Lingual").attr('stroke');
 				var lvest3=$("#examen > #gmain > "+"#P"+u2+" > #Vestibular").attr('stroke');
 				var lmes3=$("#examen > #gmain > "+"#P"+u2+" > #Mesial").attr('stroke');
 				var ldist3=$("#examen > #gmain > "+"#P"+u2+" > #Distal").attr('stroke');

 				var line=$("#examen > #gmain > "+"#P"+u2+" > polygon").attr('stroke'); 
 				///////////////////////////////////////////////////////////////////////
 				var inc3c=$("#control > #gmain > "+"#P"+u2+" > #Incisal").attr('fill');
 				var buc3c=$("#control > #gmain > "+"#P"+u2+" > #Bucal").attr('fill');
 				var ocl3c=$("#control > #gmain > "+"#P"+u2+" > #Oclusal").attr('fill');
 				var lin3c=$("#control > #gmain > "+"#P"+u2+" > #Lingual").attr('fill');
 				var vest3c=$("#control > #gmain > "+"#P"+u2+" > #Vestibular").attr('fill');
 				var mes3c=$("#control > #gmain > "+"#P"+u2+" > #Mesial").attr('fill');
 				var dist3c=$("#control > #gmain > "+"#P"+u2+" > #Distal").attr('fill');
 				//lineas
 				var linc3c=$("#control > #gmain > "+"#P"+u2+" > #Incisal").attr('stroke');
 				var lbuc3c=$("#control > #gmain > "+"#P"+u2+" > #Bucal").attr('stroke');
 				var locl3c=$("#control > #gmain > "+"#P"+u2+" > #Oclusal").attr('stroke');
 				var llin3c=$("#control > #gmain > "+"#P"+u2+" > #Lingual").attr('stroke');
 				var lvest3c=$("#control > #gmain > "+"#P"+u2+" > #Vestibular").attr('stroke');
 				var lmes3c=$("#control > #gmain > "+"#P"+u2+" > #Mesial").attr('stroke');
 				var ldist3c=$("#control > #gmain > "+"#P"+u2+" > #Distal").attr('stroke');


 				var linec=$("#control > #gmain > "+"#P"+u2+" > polygon").attr('stroke'); 
 				//alert(linea);			
 				odontograma2['P'+u2]={diagn:{Incisal:''+inc3+'', Bucal: ''+buc3+'', Oclusal:''+ocl3+'', Lingual:''+lin3+'', Vestibular:''+vest3+'', Mesial: ''+mes3+'', Distal: ''+dist3+'', linea: ''+line+'',
 										lIncisal:''+linc3+'', lBucal: ''+lbuc3+'', lOclusal:''+locl3+'', lLingual:''+llin3+'', lVestibular:''+lvest3+'', lMesial: ''+lmes3+'', lDistal: ''+ldist3+''}, 
								       control:{Incisal:''+inc3c+'', Bucal: ''+buc3c+'', Oclusal:''+ocl3c+'', Lingual:''+lin3c+'', Vestibular:''+vest3c+'', Mesial: ''+mes3c+'', Distal: ''+dist3c+'', linea: ''+linec+'',
								       lIncisal:''+linc3c+'', lBucal: ''+lbuc3c+'', lOclusal:''+locl3c+'', lLingual:''+llin3c+'', lVestibular:''+lvest3c+'', lMesial: ''+lmes3c+'', lDistal: ''+ldist3c+''}};	
				u2++;				
				if(u2==19 || u2==29 || u2==39 || u2==49)u2=u2+2;
				if(u2==56 || u2==66 || u2==76)u2=u2+5;

				u++;
 			}
			
		    odontograma2=JSON.encode(odontograma2);
		    ////////////////////////////////////////////////////////////
		    //OLEARY FINAL E INICIAL
 			var ole =  {}; 	
 			var d=0;
 			var d2=11;
 			while(d<32){
 				//var inc3=$("#OI"+d2+" > #Incisal").attr('fill');
 				var buc3=$("#OI"+d2+" > #Bucal").attr('fill');
 				//var ocl3=$("#OI"+d2+" > #Oclusal").attr('fill');
 				var lin3=$("#OI"+d2+" > #Lingual").attr('fill');
 				//var vest3=$("#OI"+d2+" > #Vestibular").attr('fill');
 				var mes3=$("#OI"+d2+" > #Mesial").attr('fill');
 				var dist3=$("#OI"+d2+" > #Distal").attr('fill');

 				var line=$("#OI"+d2+" > polygon").attr('stroke'); 
 				///////////////////////////////////////////////////////////////////////
 				//var inc3c=$("#OF"+d2+" > #Incisal").attr('fill');
 				var buc3c=$("#OF"+d2+" > #Bucal").attr('fill');
 				//var ocl3c=$("#OF"+d2+" > #Oclusal").attr('fill');
 				var lin3c=$("#OF"+d2+" > #Lingual").attr('fill');
 				//var vest3c=$("#OF"+d2+" > #Vestibular").attr('fill');
 				var mes3c=$("#OF"+d2+" > #Mesial").attr('fill');
 				var dist3c=$("#OF"+d2+" > #Distal").attr('fill');

 				var linec=$("#OF"+d2+" > polygon").attr('stroke'); 
 				//alert(linea);			
 				ole['P'+d2]={inicial:{Bucal: ''+buc3+'', Lingual:''+lin3+'', Mesial: ''+mes3+'', Distal: ''+dist3+'', linea: ''+line+''}, 
							final:{Bucal: ''+buc3c+'', Lingual:''+lin3c+'', Mesial: ''+mes3c+'', Distal: ''+dist3c+'', linea: ''+linec+''}};	
				d2++;				
				if(d2==19 || d2==29 || d2==39 || d2==49)d2=d2+2;
				if(d2==56 || d2==66 || d2==76)d2=d2+5;

				d++;
 			}
			
		    ole=JSON.encode(ole);
		    ////////////////////////////////////////////////////////////
		    //INDICES
		    var indices =  {};
		    indices['oleary']={inicial:{tenida:''+tenidaoi+'', supp:''+suppoi+'', indice:''+indiceoi+''}, 
		    						final:{tenida:''+tenidaof+'', supp:''+suppof+'', indice:''+indiceof+''}};

		    indices['cop']={diagn:{caries:''+copcariesV+'', obturadas:''+copobturadaV+'', perdidas:''+copperdidaV+'', sano:''+copsanoV+'', indice:''+copindiceV+''}, 
		    control:{caries:''+copcariesVc+'', obturadas:''+copobturadaVc+'', perdidas:''+copperdidaVc+'', sano:''+copsanoVc+'', indice:''+copindiceVc+''}};

		    indices=JSON.encode(indices);
		    //////////////////////////////////////////////////////////
		    //OBSERVACION
		    var obs = $('#tarea').val();	
		    /////////////////////////////////////////////////////////
			$.ajax({
	                url:'guardardientes.php',
	                //contentType: "application/json",
	                type: 'post',
	                //dataType: "json",
	                //data: "dientes="+odontograma2 
	                data:  "dientes="+odontograma2+"&usuario="+usua+"&caso="+cas+"&indices="+indices+"&observacion="+obs+"&oleary="+ole    
	        });
	        renderCanvas();	       
	        sendToServer();
	        alert("odontograma guardado");
	        
	        
	}
	/*
	window.onunload = function() {
		alert("dfdsfdsfdsfs");
		/*
        if (confirm('¿Está Ud. seguro de que desea cerrar la aplicación?'))
        {	guardarOdontograma();
            // todo correcto, parece; ahora sí cierras la ventana...
            window.close();            
            return false
        }
        return false;
        
    };
	
    //window.onunload=guardarOdontograma;
    */
    
    window.onunload = window.onbeforeunload = function(){
    	
        return "Ud esta abandonando este sitio, su sesion se finalizara";
    };
    
    
		function actualizarIndices(){
				//ACTUALIZA COP
			/*$("#copcaries").text("Superficies cariadas: "+copcariesV); 
			$("#copobturada").text("Superficies obturadas: "+copobturadaV); 
			$("#copperdida").text("Dientes ausentes: "+copperdidaV); 
			$("#copsano").text("Dientes sanos: "+copsanoV); 
			//copindiceV = copcariesV + copobturadaV + copperdidaV + copsanoV;			
			$("#copindice").text("Indice COP: "+copindiceV+"  Sumatoria COP: "+suma); 
			*/
			var suma=copcariesV+copobturadaV+copperdidaV;
			$("#coplabel").text("Caries:"+copcariesV+"	|| Obturadas:"+copobturadaV+"	|| P/Ausentes:"+copperdidaV+"	|| Sanos:"+copsanoV+"  || Indice COP:"+copindiceV+"  ||  COP:"+suma+""); 

			//actualiza cop control
			/*$("#copcariesc").text("Superficies cariadas: "+copcariesVc); 
			$("#copobturadac").text("Superficies obturadas: "+copobturadaVc); 
			$("#copperdidac").text("Dientes ausentes: "+copperdidaVc); 
			$("#copsanoc").text("Dientes sanos: "+copsanoVc); 
			//copindiceV = copcariesV + copobturadaV + copperdidaV + copsanoV;
			*/
			var suma2=copcariesVc+copobturadaVc+copperdidaVc;
			//$("#copindicec").text("Indice COP: "+copindiceVc+"  Sumatoria COP: "+suma2); 		
			$("#coplabelc").text("Caries:"+copcariesVc+"	|| Obturadas:"+copobturadaVc+"	|| P/Ausentes:"+copperdidaVc+"	|| Sanos:"+copsanoVc+"  || Indice COP:"+copindiceVc+"  ||  COP:"+suma2+""); 	
			//console.debug(strdebug);

			//actualiza valores ioi	
			/*		
			$("#oipresente").text("Superficies presentes: "+suppoi); //superficies presentes ioi
			$("#oitenido").text("Superficies teñidas: "+tenidaoi); //superficies tenidas ioi
			
			$("#oiindice").text("Indice O´Leary inicial: "+indiceoi.toFixed(2)+"%"); //indice oleary ioi
			if(indiceoi<15)$("#oidiagnostico").text("Diagnostico inicial: "+"< 15% Buena Higiene"); //superficies tenidas ioi
			if(indiceoi>=16 && indiceoi<49)$("#oidiagnostico").text("Diagnostico inicial: "+">= 16% y <49% A Higiene Regular"); //diagnostico ioi
			if(indiceoi>=49)$("#oidiagnostico").text("Diagnostico inicial: "+">= 49% Necesita Apoyo al cepillado dental"); 
			*/	
			var oid="";
			indiceoi= (tenidaoi*100)/suppoi;
			if(indiceoi<=15)oid="<= 15% Buena Higiene";
			if(indiceoi>15.0 && indiceoi<49)oid="> 16% Higiene Regular";
			if(indiceoi>=49)oid=">= 49% Higiene Mala";		

			$("#oilabel").text("Presentes:"+suppoi+"	|| Teñidas:"+tenidaoi+"	||  O´Leary Inicial:"+indiceoi.toFixed(2)+"%"+"  ||  DX:"+oid+""); 
			
			//actualiza valores iof		
			/*	
			$("#ofpresente").text("Superficies presentes: "+suppof); //superficies presentes iof
			$("#oftenido").text("Superficies teñidas: "+tenidaof); //superficies tenidas iof
			indiceof= (tenidaof*100)/suppof;
			$("#ofindice").text("Indice O´Leary final: "+indiceof.toFixed(2)+"%"); //indice oleary ioi
			if(indiceof<15)$("#ofdiagnostico").text("Diagnostico final: "+"< 15% Buena Higiene"); //superficies tenidas ioi
			if(indiceof>=16 && indiceof<49)$("#oidiagnostico").text("Diagnostico final: "+">= 16% y <49% A Higiene Regular"); //diagnostico ioi
			if(indiceof>=49)$("#ofdiagnostico").text("Diagnostico final: "+">= 49% Necesita Apoyo al cepillado dental"); //diagnostico ioi
			*/
			var ofd="";
			indiceof= (tenidaof*100)/suppof;
			if(indiceof<=15)ofd="<= 15% Buena Higiene";
			if(indiceof>15.0 && indiceof<49)ofd="> 16% Higiene Regular";
			if(indiceof>=49)ofd=">= 49% Higiene Mala";		

			$("#oflabel").text("Presentes:"+suppof+"	|| Teñidas:"+tenidaof+"	||  O´Leary Inicial:"+indiceof.toFixed(2)+"%"+"  ||  DX:"+ofd+"");
		}
	});

	
</script>

<script type="text/javascript">
	//var usua="<?php echo $r; ?>";
		//var cas="<?php echo $s; ?>";
	

	function renderCanvas(){

		var oSerializer = new XMLSerializer();
		var sXML = oSerializer.serializeToString(document.getElementById("examen"));		 
		canvg(document.getElementById('cexamen'), sXML,{ ignoreMouse: true, ignoreAnimation: true })

		
		
		var oSerializer2 = new XMLSerializer();
		var sXML2 = oSerializer2.serializeToString(document.getElementById("control"));		 
		canvg(document.getElementById('ccontrol'), sXML2,{ ignoreMouse: true, ignoreAnimation: true })
		

		var oSerializer3 = new XMLSerializer();
		var sXML3 = oSerializer3.serializeToString(document.getElementById("loreal1"));		 
		canvg(document.getElementById('cloreal1'), sXML3,{ ignoreMouse: true, ignoreAnimation: true })

		var oSerializer4 = new XMLSerializer();
		var sXML4 = oSerializer4.serializeToString(document.getElementById("loreal2"));		 
		canvg(document.getElementById('cloreal2'), sXML4,{ ignoreMouse: true, ignoreAnimation: true })


	}
	
	function descargar() {
		var canvas1 = document.getElementById("cexamen");
		var canvas2 = document.getElementById("ccontrol");
		var canvas3 = document.getElementById("cloreal1");
		var canvas4 = document.getElementById("cloreal2");

        var data1 = canvas1.toDataURL('image/png');
        var data2 = canvas2.toDataURL('image/png');
        var data3 = canvas3.toDataURL('image/png');
        var data4 = canvas4.toDataURL('image/png');

        var canvas = document.getElementById("completo");
		var ctx = canvas.getContext("2d");

        var img = new Image();
		img.src = data1;

		var img2 = new Image();
		img2.src = data2;

		var img3 = new Image();
		img3.src = data3;

		var img4 = new Image();
		img4.src = data4;

		ctx.drawImage(img,20,20);
		ctx.drawImage(img2,20,300);
		ctx.drawImage(img3,20,550);
		ctx.drawImage(img4,20,750);
		//ctx.drawImage(img2,20,750);

		var canvas = document.getElementById("completo");
		var data = canvas.toDataURL('image/png');
        
        document.location.href = data;
       
	}
	function sendToServer(){
		var canvas1 = document.getElementById("cexamen");
		var canvas2 = document.getElementById("ccontrol");
		var canvas3 = document.getElementById("cloreal1");
		var canvas4 = document.getElementById("cloreal2");

        var data1 = canvas1.toDataURL('image/png');
        var data2 = canvas2.toDataURL('image/png');
        var data3 = canvas3.toDataURL('image/png');
        var data4 = canvas4.toDataURL('image/png');

        var canvas = document.getElementById("completo");
		var ctx = canvas.getContext("2d");

        var img = new Image();
		img.src = data1;

		var img2 = new Image();
		img2.src = data2;

		var img3 = new Image();
		img3.src = data3;

		var img4 = new Image();
		img4.src = data4;

		ctx.font = '12pt Calibri';
		ctx.fillText('Examen De Diagnostico', 20, 10);
		ctx.drawImage(img,20,20);
		ctx.fillText('Caries: '+copcariesV, 20, 280);
		ctx.fillText('Obturadas : '+copobturadaV, 100, 280);
		ctx.fillText('Perdidas : '+copperdidaV, 210, 280);
		ctx.fillText('D. Sanos: '+copsanoV, 310, 280);
		ctx.fillText('COP : '+copindiceV+'   Suma COP: '+(copcariesV+copobturadaV+copperdidaV), 410, 280);
		ctx.fillText('----------------------------------------------------------------------------------------------------------------------------', 20, 290);
		ctx.fillText('Examen De Control', 20, 312);
		ctx.drawImage(img2,20,322);
		ctx.fillText('Caries: '+copcariesVc, 20, 580);
		ctx.fillText('Obturadas : '+copobturadaVc, 100, 580);
		ctx.fillText('Perdidas : '+copperdidaVc, 210, 580);
		ctx.fillText('D. Sanos: '+copsanoVc, 310, 580);
		ctx.fillText('COP : '+copindiceVc+'   Suma COP: '+(copcariesVc+copobturadaVc+copperdidaVc), 410, 580);
		ctx.fillText('----------------------------------------------------------------------------------------------------------------------------', 20, 588);
		ctx.fillText('Indice de O´Leary Inicial', 20, 598);
		ctx.drawImage(img3,20,602);
		ctx.fillText('Teñidas: '+tenidaoi, 20, 736);
		ctx.fillText('Presentes : '+suppoi, 100, 736);
		ctx.fillText('Indice O´Leary : '+indiceoi.toFixed(2)+'%', 210, 736);
		ctx.fillText('----------------------------------------------------------------------------------------------------------------------------', 20, 742);		
		ctx.fillText('Indice de O´Leary Final', 20, 752);
		ctx.drawImage(img4,20,759);
		ctx.fillText('Teñidas: '+tenidaof, 20, 893);
		ctx.fillText('Presentes : '+suppof, 100, 893);
		ctx.fillText('Indice O´Leary : '+indiceof.toFixed(2)+'%', 210, 893);
		ctx.fillText('----------------------------------------------------------------------------------------------------------------------------', 20, 901);
	    ctx.fillText('Observaciones', 20, 909);
	    var text = $('#tarea').val();	
	    //text=text.replace(/\r?\n/g, "<br>");  
	    var start = 0; // Carácter por el que empezar
	    var currentLine = 0; // Línea en la que nos encontramos.
	    var jumpAt = 93; // Número de caracteres por línea.
	    var lineHeight = 20; // Ancho de cada línea.
	    var str; // Auxiliar donde guardar el texto partido.
	 
	    while (start < text.length)
	    {
	        str = text.substr(start,jumpAt);
	        start += jumpAt;
	 
	        ctx.fillText(str, 20, 922+(lineHeight*currentLine++));
	    }
		//ctx.fillText(text,20,796);
		ctx.fillText('----------------------------------------------------------------------------------------------------------------------------', 20, 929+(lineHeight*currentLine));
		//ctx.drawImage(img4,20,750);

		var canvas = document.getElementById("completo");
		var datac = canvas.toDataURL('image/png');
		/*
		document.getElementById("imagen").value=data;
        document.getElementById("usuario").value="<?php echo $r; ?>";
        document.getElementById("caso").value="<?php echo $s; ?>";
        */
        //alert(data);
        var usua="<?php echo $r; ?>";
        var cc="<?php echo $s; ?>";
       $.ajax({
		    url:'guardarimg.php', 
		    //contentType: "multipart/form-data",
		    type:'POST', 
		    data: {imagen: datac,
		    	   usuario: usua,
		    	   caso: cc
		    }
		  
		});
   
	}
</script>
<canvas id="cexamen" hidden="true"></canvas>
<canvas id="ccontrol" hidden="true"></canvas>
<canvas id="cloreal1" hidden="true"></canvas>
<canvas id="cloreal2" hidden="true"></canvas>
<canvas id="completo" width="800" height="940" hidden="true"></canvas>
</body></html>