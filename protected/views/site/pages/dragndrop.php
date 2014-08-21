<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - Drag and Drop';
$this->breadcrumbs=array(
	'Drag and Drop',
);
?>

<style type="text/css">
div[id^="place"] {
	float:left; 
	width:200px; 
	height:200px;
	margin:3px; 
	padding:3px; 
	border:1px dotted #333333; 
	background-color:#569dc8;
}
.pics {
	clear:both; 
	text-align:center;
}
.sources {
clear:both;
text-align:left;
padding-top: 4%;
}
.sources p {
margin: 0;
padding: 0;
}
</style>

<script type="text/javascript">
function dragIt(theEvent) {
	theEvent.dataTransfer.setData("Text", theEvent.target.id);
}

function dropIt(theEvent) {
	var theData = theEvent.dataTransfer.getData("Text");
	var theDraggedElement = document.getElementById(theData);
	theEvent.target.appendChild(theDraggedElement);
	theEvent.preventDefault();
}
</script>

<h1>Robo Repair's Drag and Drop Experiment</h1>
<div class="pics">
<?php
for ($x=0; $x<12; $x++) {
	echo "<div id='place$x' ondrop='dropIt(event);' ondragover='event.preventDefault();'>";
	if ($x == 0) { echo "<img src= '" . Yii::app()->baseUrl. "/images/Preview_12.png' width='200' height='200' draggable='true' ondragstart='dragIt(event)' id='pic1' />";}
	if ($x == 4) { echo "<img src= '" . Yii::app()->baseUrl. "/images/golem_col.png' width='200' height='200' draggable='true' ondragstart='dragIt(event)' id='pic2' />";}
	if ($x == 8) { echo "<img src= '" . Yii::app()->baseUrl. "/images/PicaBot.png' width='200' height='200' draggable='true' ondragstart='dragIt(event)' id='pic3' />";}
	echo "</div>";
}
?> 
<div class="sources">
<p>Sapper Bot Image courtesy of <a href ="http://opengameart.org/content/sap-1-sapper-bot-mark-1">Quandtum</a>.</p>
<p>Mechanical Giant image courtesy of <a href = "http://opengameart.org/content/mechanic-giant">Buch</a>.</p>
<p>Pica Bot Image courtesy of <a href = "http://commons.wikimedia.org/wiki/File:PicaBot.jpg">Wikimedia</a>.</p>
</div>

