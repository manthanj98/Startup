<!--

<html>


<head>
<meta charset="UTF-8">
	<title>Sangam Pathology</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >

<style>
body{
	background-color:#f2f2f2;
}

.bluesection
{
	border-radius:20px;
	background:rgba(0, 123, 255,0.3);
}
.uppercase
{
	    text-transform: uppercase;
}
#datacollected
{display:none;}
.imgholder img
{
	height:150px;
	width:150px;
}
</style>
</head>

<body>
<hr class="bg-primary"style="   width: 100%;   height: 5px; margin-top:0;" >
<div class="container">
<a href="./" class="btn btn-primary float-right mt-2" >back</a>
<h1 class="text-center" style="letter-spacing:5;">COMPLETE BLOOD COUNT</H1>
</div>
<?php
	if(isset($_POST['done']))
	{
		$name=$_POST['name'];
		$age=$_POST['age'];
		$sex=$_POST['sex'];
		$patientid=$_POST['patientid'];
		$receivedate=$_POST['receivedate'];
		$printdate=$_POST['printdate'];
		$haemoglobin=$_POST['haemoglobin'];
		$rbc=$_POST['rbc'];
		$platelet=$_POST['platelet'];
		$tlc=$_POST['tlc'];
		$pvc=$_POST['pvc'];
		$mcv=$_POST['mcv'];
		$mch=$_POST['mch'];
		$mchc=$_POST['mchc'];
		$rdwsd=$_POST['rdwsd'];
		$rdwcv=$_POST['rdwcv'];
		$neutrophlis=$_POST['neutrophlis'];
		$lymphocytes=$_POST['lymphocytes'];
		$monocytes=$_POST['monocytes'];
		$eosinophils=$_POST['eosinophils'];
		$basophil=$_POST['basophil'];
		$mpv=$_POST['mpv'];
		$pdw=$_POST['pdw'];

	}
?>

<div class="container bg-light my-5 py-2">
	<div class="row m-0">
		<div class="col-lg-6 col-md-6 col-12">
			<table width="50%">
				<tr>
					<td class="uppercase">Name</td>
					<td><?php echo $name; ?></td>
				</tr>
				<tr>
					<td class="uppercase">age/sex</td>
					<td><?php echo $age . "/" . $sex; ?></td>
				</tr>
				<tr>
					<td class="uppercase">Patient id</td>
					<td><?php echo $patientid; ?></td>
				</tr>
			</table>
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<table width=50%">
				<tr>
					<td class="uppercase">Referred by</td>
					<td><?php ?></td>
				</tr>
				<tr>
					<td class="uppercase">received date</td>
					<td><?php echo $receivedate; ?></td>
				</tr>
				<tr>
					<td class="uppercase">print date</td>
					<td><?php echo $printdate; ?></td>
				</tr>
			</table>
		</div>
	</div>
</div>
<div class="container bluesection py-2">
	<table width="100%" cellpadding=10 >
		<tr>
			<td class="uppercase">Haemoglobin</td>
			<td><?php echo $haemoglobin; ?></td>
			<td>g/dl</td>
			<td>12.0-13.0</td>
		</tr>
		<tr>
			<td class="uppercase">Platelet count</td>
			<td><?php echo $platelet; ?></td>
			<td>lakhs/cu.mm</td>
			<td>1.5-4.5</td>
		</tr>
		<tr>
			<td class="uppercase">RBC</td>
			<td><?php echo $rbc; ?></td>
			<td>mili/cu.mm</td>
			<td>4.5-5.0</td>
		</tr>
		<tr>
			<td class="uppercase">TOTAL leucocyte count</td>
			<td><?php echo $tlc; ?></td>
			<td>/cu.mm</td>
			<td>4000-11000</td>
		</tr>
	</table>
</div>

<div class="container py-5">
	<div class="row m-0">
		<div class="col-lg-6 col-md-6 col-12">
		<div class="bluesection px-5 py-3">
		<h4 class="text-center pb-3">RBC</h4>
			<table width="100%" cellpadding=15 class="" >
				<tr>
					<th class="uppercase">Name</th>
					<th class="uppercase" >Result</th>
					<th class="uppercase">Bio-ref</th>
				</tr>
				<tr>
					<td class="uppercase">PVC</td>
					<td><?php echo $pvc; ?></td>
					<td>35.0-45.0</td>
				</tr>
				<tr>
					<td class="uppercase">mcv</td>
					<td><?php echo $mcv; ?></td>
					<td>80.0-90.0</td>
				</tr>
				<tr>
					<td class="uppercase">MCH</td>
					<td><?php echo $mch; ?></td>
					<td>27-32</td>
				</tr>
				<tr>
					<td class="uppercase">MCHc</td>
					<td><?php echo $mchc; ?></td>
					<td>32-36.0</td>
				</tr>
				<tr>
					<td class="uppercase">rdw-sd</td>
					<td><?php echo $rdwsd; ?></td>
					<td>32-36.0</td>
				</tr>
				<tr>
					<td class="uppercase">rdw-cv</td>
					<td><?php echo $rdwcv; ?></td>
					<td>32-36.0</td>
				</tr>
			</table>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<div class="bluesection px-5 py-3">
		<h4 class="text-center pb-3">Differential leucocyte count</h4>
			<table width="100%" cellpadding=4 class="" >
				<tr>
					<th class="uppercase">Name</th>
					<th class="uppercase" >Result</th>
					<th class="uppercase">Bio-ref</th>
				</tr>
				<tr>
					<td class="uppercase">Neutrophils</td>
					<td><?php echo $neutrophlis; ?></td>
					<td>40-65</td>
				</tr>
				<tr>
					<td class="uppercase">Lymphocytes</td>
					<td><?php echo $lymphocytes; ?></td>
					<td>20-45</td>
				</tr>
				<tr>
					<td class="uppercase">Monocytes</td>
					<td><?php echo $monocytes; ?></td>
					<td>27-32</td>
				</tr>
				<tr>
					<td class="uppercase">MCHc</td>
					<td><?php echo $mchc; ?></td>
					<td>0-6</td>
				</tr>
				<tr>
					<td class="uppercase">eosinophils</td>
					<td><?php echo $eosinophils; ?></td>
					<td>32-36.0</td>
				</tr>
				<tr>
					<td class="uppercase">basophil</td>
					<td><?php echo $basophil; ?></td>
					<td>0-5</td>
				</tr>
			</table>
			</div>
			<div class="bluesection mt-2 px-5 py-3">
				<h4 class="text-center pb-3">Platelet</h4>
				<table width="100%" cellpadding=4 class="" >
					<tr>
						<td class="uppercase">MPV</td>
						<td ><?php echo $mpv; ?></td>
						<td >16.5-12.0</td>
					</tr>
					<tr>
						<td class="uppercase">PDW</td>
						<td><?php echo $pdw; ?></td>
						<td>9.6-15.2</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="py-5 container-fluid text-center">

	<h3 class="uppercase text-center">lifestyle suggestions</h3>
	<div class="imgholder">

		<img src="exc.png">
		<img src="diet.png">
	</div>


	<h5 class="uppercase float-right">Pathalogist</h5>
</div>
<div class="footer bg-warning py-5" style="">
	<h1 class="uppercase text-center py-5">Sangam Pathology labs</h1>
</div>
<hr class="bg-primary"style="   width: 100%;   height: 5px; margin-bottom:0; margin-top:0;" >


</body>

</html>


-->

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CBC</title>
<style id="applicationStylesheet" type="text/css">
	.mediaViewInfo {
		--web-view-name: CBC;
		--web-view-id: CBC;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
	}
	:root {
		--web-view-ids: CBC;
	}
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		border: none;
	}
	#CBC {
		position: absolute;
		width: 595px;
		height: 845px;
		background-color: rgba(255,255,255,1);
		overflow: hidden;
		--web-view-name: CBC;
		--web-view-id: CBC;
		--web-scale-on-resize: true;
		--web-enable-deep-linking: true;
	}
	#Branding {
		position: absolute;
		width: 595px;
		height: 846px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Lower_Rectangle {
		fill: rgba(66,133,244,1);
	}
	.Lower_Rectangle {
		position: absolute;
		overflow: visible;
		width: 595px;
		height: 9px;
		left: 0px;
		top: 837px;
	}
	#Brandind_Rectangle {
		fill: rgba(251,188,5,0.6);
	}
	.Brandind_Rectangle {
		position: absolute;
		overflow: visible;
		width: 595px;
		height: 93px;
		left: 0px;
		top: 744px;
	}
	#Address {
		fill: rgba(0,0,0,1);
	}
	.Address {
		overflow: visible;
		position: absolute;
		width: 298.86px;
		height: 13.16px;
		left: 148.708px;
		top: 789.612px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Lab_Name {
		fill: rgba(0,0,0,1);
	}
	.Lab_Name {
		overflow: visible;
		position: absolute;
		width: 326.648px;
		height: 17.184px;
		left: 133.984px;
		top: 761.008px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Pathologist {
		fill: rgba(0,0,0,1);
	}
	.Pathologist {
		overflow: visible;
		position: absolute;
		width: 85.526px;
		height: 9.884px;
		left: 488.596px;
		top: 720.2px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Title {
		fill: rgba(0,0,0,1);
	}
	.Title {
		overflow: visible;
		position: absolute;
		width: 499.686px;
		height: 25.92px;
		left: 48.385px;
		top: 21.44px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Upper_Rectangle {
		fill: rgba(66,133,244,1);
	}
	.Upper_Rectangle {
		position: absolute;
		overflow: visible;
		width: 595px;
		height: 9px;
		left: 0px;
		top: 0px;
	}
	#Lifestyle_Suggestion {
		position: absolute;
		width: 220.832px;
		height: 129.566px;
		left: 187.088px;
		top: 603.22px;
		overflow: visible;
	}
	#Lifestyle_Suggestions {
		fill: rgba(0,0,0,1);
	}
	.Lifestyle_Suggestions {
		overflow: visible;
		position: absolute;
		width: 220.832px;
		height: 12.96px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Excercise_Clip_Art {
		position: absolute;
		width: 69px;
		height: 69px;
		left: 20.912px;
		top: 22.78px;
		overflow: visible;
	}
	#Vegetable_Clip_Art {
		position: absolute;
		width: 85px;
		height: 85px;
		left: 110.912px;
		top: 17.78px;
		overflow: visible;
	}
	#Excercise_Regularly {
		fill: rgba(0,0,0,1);
	}
	.Excercise_Regularly {
		overflow: visible;
		position: absolute;
		width: 62.749px;
		height: 30.174px;
		left: 22.508px;
		top: 99.392px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Eat_Green_and_LEafy_Vegetables {
		fill: rgba(0,0,0,1);
	}
	.Eat_Green_and_LEafy_Vegetables {
		overflow: visible;
		position: absolute;
		width: 116.72px;
		height: 29.67px;
		left: 103.624px;
		top: 99.896px;
		transform: matrix(1,0,0,1,0,0);
	}
	#RBC {
		position: absolute;
		width: 190px;
		height: 127px;
		left: 362px;
		top: 397px;
		overflow: visible;
	}
	#Rectangle_14 {
		fill: rgba(52,168,83,0.251);
	}
	.Rectangle_14 {
		position: absolute;
		overflow: visible;
		width: 190px;
		height: 127px;
		left: 0px;
		top: 0px;
	}
	#Path_23 {
		fill: rgba(0,0,0,1);
	}
	.Path_23 {
		overflow: visible;
		position: absolute;
		width: 31.39px;
		height: 8.544px;
		left: 134.671px;
		top: 106.528px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_25 {
		fill: rgba(0,0,0,1);
	}
	.Path_25 {
		overflow: visible;
		position: absolute;
		width: 36.831px;
		height: 8.592px;
		left: 20.26px;
		top: 106.504px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_26 {
		fill: rgba(0,0,0,1);
	}
	.Path_26 {
		overflow: visible;
		position: absolute;
		width: 30.448px;
		height: 8.544px;
		left: 135.154px;
		top: 85.528px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_28 {
		fill: rgba(0,0,0,1);
	}
	.Path_28 {
		overflow: visible;
		position: absolute;
		width: 27.357px;
		height: 8.592px;
		left: 20.26px;
		top: 85.504px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_29 {
		fill: rgba(0,0,0,1);
	}
	.Path_29 {
		overflow: visible;
		position: absolute;
		width: 32.65px;
		height: 8.544px;
		left: 134.179px;
		top: 64.528px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_31 {
		fill: rgba(0,0,0,1);
	}
	.Path_31 {
		overflow: visible;
		position: absolute;
		width: 27.347px;
		height: 8.592px;
		left: 20.26px;
		top: 64.504px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_32 {
		fill: rgba(0,0,0,1);
	}
	.Path_32 {
		overflow: visible;
		position: absolute;
		width: 31.909px;
		height: 8.472px;
		left: 134.342px;
		top: 43.6px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_34 {
		fill: rgba(0,0,0,1);
	}
	.Path_34 {
		overflow: visible;
		position: absolute;
		width: 24.546px;
		height: 8.592px;
		left: 20.26px;
		top: 43.504px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_35 {
		opacity: 0.25;
		fill: rgba(0,0,0,1);
	}
	.Path_35 {
		overflow: visible;
		position: absolute;
		width: 36.085px;
		height: 8.4px;
		left: 24.246px;
		top: 23.6px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_36 {
		opacity: 0.25;
		fill: rgba(0,0,0,1);
	}
	.Path_36 {
		overflow: visible;
		position: absolute;
		width: 45.779px;
		height: 8.592px;
		left: 69.217px;
		top: 23.504px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_37 {
		opacity: 0.25;
		fill: rgba(0,0,0,1);
	}
	.Path_37 {
		overflow: visible;
		position: absolute;
		width: 50.237px;
		height: 8.592px;
		left: 125.297px;
		top: 23.504px;
		transform: matrix(1,0,0,1,0,0);
	}
	#RBC_Title {
		opacity: 0.5;
		fill: rgba(0,0,0,1);
	}
	.RBC_Title {
		overflow: visible;
		position: absolute;
		width: 24.76px;
		height: 8.592px;
		left: 82.024px;
		top: 6.504px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Enter_MCHC {
		left: 85px;
		top: 101px;
		position: absolute;
		overflow: visible;
		width: 28px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(8,8,8,1);
	}
	#Enter_MCH {
		left: 85px;
		top: 80px;
		position: absolute;
		overflow: visible;
		width: 28px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(8,8,8,1);
	}
	#Enter_MCV {
		left: 85px;
		top: 58px;
		position: absolute;
		overflow: visible;
		width: 28px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(8,8,8,1);
	}
	#Enter_PCV {
		left: 85px;
		top: 38px;
		position: absolute;
		overflow: visible;
		width: 16px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(8,8,8,1);
	}
	#Differnetial_Leucocyte_Count {
		position: absolute;
		width: 287px;
		height: 135px;
		left: 53px;
		top: 394px;
		overflow: visible;
	}
	#Rectangle_15 {
		fill: rgba(52,168,83,0.251);
	}
	.Rectangle_15 {
		position: absolute;
		overflow: visible;
		width: 287px;
		height: 135px;
		left: 0px;
		top: 0px;
	}
	#Eosinophils_Range {
		fill: rgba(0,0,0,1);
	}
	.Eosinophils_Range {
		overflow: visible;
		position: absolute;
		width: 21.374px;
		height: 9.968px;
		left: 225.401px;
		top: 116.116px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Enter_Eosinophils {
		left: 149px;
		top: 110px;
		position: absolute;
		overflow: visible;
		width: 28px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(8,8,8,1);
	}
	#Eosinophils {
		fill: rgba(0,0,0,1);
	}
	.Eosinophils {
		overflow: visible;
		position: absolute;
		width: 97.042px;
		height: 9.968px;
		left: 20.596px;
		top: 116.116px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Monocyte_Range {
		fill: rgba(0,0,0,1);
	}
	.Monocyte_Range {
		overflow: visible;
		position: absolute;
		width: 22.198px;
		height: 9.968px;
		left: 226.045px;
		top: 93.116px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Enter_Monocyte {
		left: 149px;
		top: 88px;
		position: absolute;
		overflow: visible;
		width: 28px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(8,8,8,1);
	}
	#Monocyte {
		fill: rgba(0,0,0,1);
	}
	.Monocyte {
		overflow: visible;
		position: absolute;
		width: 81.893px;
		height: 9.968px;
		left: 20.596px;
		top: 93.116px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Lymphocyte_Range {
		fill: rgba(0,0,0,1);
	}
	.Lymphocyte_Range {
		overflow: visible;
		position: absolute;
		width: 39.064px;
		height: 9.968px;
		left: 217.318px;
		top: 70.116px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Enter_Lymphocyte {
		left: 149px;
		top: 65px;
		position: absolute;
		overflow: visible;
		width: 28px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(8,8,8,1);
	}
	#Lymphocyte {
		fill: rgba(0,0,0,1);
	}
	.Lymphocyte {
		overflow: visible;
		position: absolute;
		width: 95.948px;
		height: 9.968px;
		left: 20.596px;
		top: 70.116px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Neutrophils_Range {
		fill: rgba(0,0,0,1);
	}
	.Neutrophils_Range {
		overflow: visible;
		position: absolute;
		width: 39.439px;
		height: 9.968px;
		left: 217.285px;
		top: 47.116px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Enter_Neuturophils {
		left: 149px;
		top: 42px;
		position: absolute;
		overflow: visible;
		width: 28px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: normal;
		font-size: 14px;
		color: rgba(8,8,8,1);
	}
	#Neutrophils {
		fill: rgba(0,0,0,1);
	}
	.Neutrophils {
		overflow: visible;
		position: absolute;
		width: 101.567px;
		height: 9.968px;
		left: 20.596px;
		top: 47.116px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Name {
		opacity: 0.25;
		fill: rgba(0,0,0,1);
	}
	.Name {
		overflow: visible;
		position: absolute;
		width: 42.099px;
		height: 9.8px;
		left: 43.287px;
		top: 27.2px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Result {
		opacity: 0.25;
		fill: rgba(0,0,0,1);
	}
	.Result {
		overflow: visible;
		position: absolute;
		width: 53.409px;
		height: 10.024px;
		left: 135.503px;
		top: 27.088px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Bio-Ref {
		opacity: 0.25;
		fill: rgba(0,0,0,1);
	}
	.Bio-Ref {
		overflow: visible;
		position: absolute;
		width: 58.609px;
		height: 10.024px;
		left: 207.18px;
		top: 27.088px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Differential_Leucocyte_Count {
		opacity: 0.5;
		fill: rgba(0,0,0,1);
	}
	.Differential_Leucocyte_Count {
		overflow: visible;
		position: absolute;
		width: 250.339px;
		height: 10.024px;
		left: 16.038px;
		top: 10.088px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Primary {
		position: absolute;
		width: 535px;
		height: 112px;
		left: 30px;
		top: 261px;
		overflow: visible;
	}
	#Rectangle {
		fill: rgba(52,168,83,0.251);
	}
	.Rectangle {
		position: absolute;
		overflow: visible;
		width: 535px;
		height: 112px;
		left: 0px;
		top: 0px;
	}
	#Platelet_Unit {
		fill: rgba(0,0,0,1);
	}
	.Platelet_Unit {
		overflow: visible;
		position: absolute;
		width: 112.831px;
		height: 16.956px;
		left: 284.634px;
		top: 87.844px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Platelet_Range {
		fill: rgba(0,0,0,1);
	}
	.Platelet_Range {
		overflow: visible;
		position: absolute;
		width: 52.918px;
		height: 12.708px;
		left: 441.267px;
		top: 90.4px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Enter_Platelet {
		left: 202px;
		top: 84px;
		position: absolute;
		overflow: visible;
		width: 35px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(8,8,8,1);
	}
	#Platelet {
		fill: rgba(0,0,0,1);
	}
	.Platelet {
		overflow: visible;
		position: absolute;
		width: 90.078px;
		height: 12.6px;
		left: 49.87px;
		top: 90.4px;
		transform: matrix(1,0,0,1,0,0);
	}
	#RBC_Unit {
		fill: rgba(0,0,0,1);
	}
	.RBC_Unit {
		overflow: visible;
		position: absolute;
		width: 99.172px;
		height: 16.956px;
		left: 291.463px;
		top: 60.844px;
		transform: matrix(1,0,0,1,0,0);
	}
	#RBC_Range {
		fill: rgba(0,0,0,1);
	}
	.RBC_Range {
		overflow: visible;
		position: absolute;
		width: 57.145px;
		height: 12.816px;
		left: 439.079px;
		top: 63.292px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Enter_RBC {
		left: 202px;
		top: 59px;
		position: absolute;
		overflow: visible;
		width: 20px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(8,8,8,1);
	}
	#RBC_b {
		fill: rgba(0,0,0,1);
	}
	.RBC_b {
		overflow: visible;
		position: absolute;
		width: 37.141px;
		height: 12.888px;
		left: 76.036px;
		top: 63.256px;
		transform: matrix(1,0,0,1,0,0);
	}
	#WBC_Range {
		fill: rgba(0,0,0,1);
	}
	.WBC_Range {
		overflow: visible;
		position: absolute;
		width: 101.49px;
		height: 12.816px;
		left: 417.155px;
		top: 36.292px;
		transform: matrix(1,0,0,1,0,0);
	}
	#WBC_Unit {
		fill: rgba(0,0,0,1);
	}
	.WBC_Unit {
		overflow: visible;
		position: absolute;
		width: 67.813px;
		height: 16.956px;
		left: 306.027px;
		top: 33.844px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Enter_WBC {
		left: 205px;
		top: 30px;
		position: absolute;
		overflow: visible;
		width: 35px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(8,8,8,1);
	}
	#WBC {
		fill: rgba(0,0,0,1);
	}
	.WBC {
		overflow: visible;
		position: absolute;
		width: 45.381px;
		height: 12.888px;
		left: 71.259px;
		top: 36.256px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Haemoglobin_Range {
		fill: rgba(0,0,0,1);
	}
	.Haemoglobin_Range {
		overflow: visible;
		position: absolute;
		width: 39.914px;
		height: 12.816px;
		left: 447.842px;
		top: 12.292px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Haemoglobin_Unit {
		fill: rgba(0,0,0,1);
	}
	.Haemoglobin_Unit {
		overflow: visible;
		position: absolute;
		width: 38.95px;
		height: 18.738px;
		left: 321.859px;
		top: 9.844px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Enter_Haemoglobin {
		left: 202px;
		top: 6px;
		position: absolute;
		overflow: visible;
		width: 34px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(8,8,8,1);
	}
	#Haemoglobin {
		fill: rgba(0,0,0,1);
	}
	.Haemoglobin {
		overflow: visible;
		position: absolute;
		width: 141.67px;
		height: 12.888px;
		left: 23.169px;
		top: 12.256px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Charts {
		position: absolute;
		width: 574px;
		height: 116px;
		left: 10px;
		top: 135px;
		overflow: visible;
	}
	#Platelet_Chart {
		position: absolute;
		width: 136px;
		height: 116px;
		left: 438px;
		top: 0px;
		overflow: visible;
	}
	#Outer_Rectangle {
		fill: rgba(52,168,83,1);
	}
	.Outer_Rectangle {
		position: absolute;
		overflow: visible;
		width: 136px;
		height: 116px;
		left: 0px;
		top: 0px;
	}
	#Inner_Rectangle {
		fill: rgba(255,255,255,1);
	}
	.Inner_Rectangle {
		position: absolute;
		overflow: visible;
		width: 128px;
		height: 96px;
		left: 4px;
		top: 16px;
	}
	#Title_cg {
		fill: rgba(255,255,255,1);
	}
	.Title_cg {
		overflow: visible;
		position: absolute;
		width: 59.977px;
		height: 8.64px;
		left: 38.366px;
		top: 3.48px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Enter_Platelt_Chart {
		left: 50px;
		top: 88px;
		position: absolute;
		overflow: visible;
		width: 40px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(8,8,8,1);
	}
	#RBC_Chart {
		position: absolute;
		width: 136px;
		height: 116px;
		left: 292px;
		top: 0px;
		overflow: visible;
	}
	#Outer_Rectangle_cj {
		fill: rgba(52,168,83,1);
	}
	.Outer_Rectangle_cj {
		position: absolute;
		overflow: visible;
		width: 136px;
		height: 116px;
		left: 0px;
		top: 0px;
	}
	#Inner_Rectangle_ck {
		fill: rgba(255,255,255,1);
	}
	.Inner_Rectangle_ck {
		position: absolute;
		overflow: visible;
		width: 128px;
		height: 96px;
		left: 4px;
		top: 16px;
	}
	#Title_cl {
		fill: rgba(255,255,255,1);
	}
	.Title_cl {
		overflow: visible;
		position: absolute;
		width: 25.13px;
		height: 8.64px;
		left: 56.316px;
		top: 3.48px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Reading {
		fill: rgba(0,0,0,1);
	}
	.Reading {
		overflow: visible;
		position: absolute;
		width: 34.047px;
		height: 12.708px;
		left: 51.211px;
		top: 94.4px;
		transform: matrix(1,0,0,1,0,0);
	}
	#WBC_Chart {
		position: absolute;
		width: 136px;
		height: 116px;
		left: 146px;
		top: 0px;
		overflow: visible;
	}
	#Outer_Rectangle_co {
		fill: rgba(52,168,83,1);
	}
	.Outer_Rectangle_co {
		position: absolute;
		overflow: visible;
		width: 136px;
		height: 116px;
		left: 0px;
		top: 0px;
	}
	#Inner_Rectangle_cp {
		fill: rgba(255,255,255,1);
	}
	.Inner_Rectangle_cp {
		position: absolute;
		overflow: visible;
		width: 128px;
		height: 96px;
		left: 4px;
		top: 16px;
	}
	#Title_cq {
		fill: rgba(255,255,255,1);
	}
	.Title_cq {
		overflow: visible;
		position: absolute;
		width: 30.704px;
		height: 8.64px;
		left: 52.627px;
		top: 3.48px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Enter_WBC_Chart {
		left: 53px;
		top: 89px;
		position: absolute;
		overflow: visible;
		width: 40px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(8,8,8,1);
	}
	#Haemoglobin_Chart {
		position: absolute;
		width: 136px;
		height: 116px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Outer_Rectangle_ct {
		fill: rgba(52,168,83,1);
	}
	.Outer_Rectangle_ct {
		position: absolute;
		overflow: visible;
		width: 136px;
		height: 116px;
		left: 0px;
		top: 0px;
	}
	#Inner_Rectangle_cu {
		fill: rgba(255,255,255,1);
	}
	.Inner_Rectangle_cu {
		position: absolute;
		overflow: visible;
		width: 128px;
		height: 96px;
		left: 4px;
		top: 16px;
	}
	#Title_cv {
		fill: rgba(255,255,255,1);
	}
	.Title_cv {
		overflow: visible;
		position: absolute;
		width: 95.132px;
		height: 8.64px;
		left: 20.437px;
		top: 3.48px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Enter_Haemoglobin_Chart {
		left: 50px;
		top: 89px;
		position: absolute;
		overflow: visible;
		width: 34px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		color: rgba(8,8,8,1);
	}
	#Personal_Infromation {
		position: absolute;
		width: 547px;
		height: 57px;
		left: 24px;
		top: 64px;
		overflow: visible;
	}
	#Personal_Information_Rectangle {
		fill: rgba(229,229,229,1);
	}
	.Personal_Information_Rectangle {
		position: absolute;
		overflow: visible;
		width: 547px;
		height: 57px;
		left: 0px;
		top: 0px;
	}
	#Enter_Date {
		left: 358px;
		top: 21px;
		position: absolute;
		overflow: visible;
		width: 62px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: normal;
		font-size: 12px;
		color: rgba(8,8,8,1);
	}
	#Date {
		fill: rgba(0,0,0,1);
	}
	.Date {
		overflow: visible;
		position: absolute;
		width: 27.958px;
		height: 8.484px;
		left: 272.128px;
		top: 24.6px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Enter_Doctor_Name {
		left: 358px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 96px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: normal;
		font-size: 12px;
		color: rgba(8,8,8,1);
	}
	#Refered_By {
		fill: rgba(0,0,0,1);
	}
	.Refered_By {
		overflow: visible;
		position: absolute;
		width: 71.95px;
		height: 11.4px;
		left: 272.128px;
		top: 3.012px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Enter_Reg_No {
		left: 67px;
		top: 41px;
		position: absolute;
		overflow: visible;
		width: 85px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: normal;
		font-size: 12px;
		color: rgba(8,8,8,1);
	}
	#Reg_No {
		fill: rgba(0,0,0,1);
	}
	.Reg_No {
		overflow: visible;
		position: absolute;
		width: 43.762px;
		height: 10.812px;
		left: 5.128px;
		top: 45.6px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Enter_AgeSex {
		left: 68px;
		top: 19px;
		position: absolute;
		overflow: visible;
		width: 24px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: normal;
		font-size: 12px;
		color: rgba(8,8,8,1);
	}
	#AgeSex {
		fill: rgba(0,0,0,1);
	}
	.AgeSex {
		overflow: visible;
		position: absolute;
		width: 50.597px;
		height: 12.516px;
		left: 3.94px;
		top: 22.896px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Enter_Name {
		left: 68px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 72px;
		white-space: nowrap;
		text-align: left;
		font-family: Segoe UI;
		font-style: normal;
		font-weight: normal;
		font-size: 12px;
		color: rgba(8,8,8,1);
	}
	#Name_c {
		fill: rgba(0,0,0,1);
	}
	.Name_c {
		overflow: visible;
		position: absolute;
		width: 35.575px;
		height: 8.484px;
		left: 5.128px;
		top: 3.6px;
		transform: matrix(1,0,0,1,0,0);
	}
</style>
<script id="applicationScript">
///////////////////////////////////////
// INITIALIZATION
///////////////////////////////////////

/**
 * Functionality for scaling, showing by media query, and navigation between multiple pages on a single page.
 * Code subject to change.
 **/

if (window.console==null) { window["console"] = { log : function() {} } }; // some browsers do not set console

var Application = function() {
	// event constants
	this.prefix = "--web-";
	this.NAVIGATION_CHANGE = "viewChange";
	this.VIEW_NOT_FOUND = "viewNotFound";
	this.VIEW_CHANGE = "viewChange";
	this.VIEW_CHANGING = "viewChanging";
	this.STATE_NOT_FOUND = "stateNotFound";
	this.APPLICATION_COMPLETE = "applicationComplete";
	this.APPLICATION_RESIZE = "applicationResize";
	this.SIZE_STATE_NAME = "data-is-view-scaled";
	this.STATE_NAME = this.prefix + "state";

	this.lastView = null;
	this.lastState = null;
	this.lastOverlay = null;
	this.currentView = null;
	this.currentState = null;
	this.currentOverlay = null;
	this.currentQuery = {index: 0, rule: null, mediaText: null, id: null};
	this.inclusionQuery = "(min-width: 0px)";
	this.exclusionQuery = "none and (min-width: 99999px)";
	this.LastModifiedDateLabelName = "LastModifiedDateLabel";
	this.viewScaleSliderId = "ViewScaleSliderInput";
	this.pageRefreshedName = "showPageRefreshedNotification";
	this.applicationStylesheet = null;
	this.mediaQueryDictionary = {};
	this.viewsDictionary = {};
	this.addedViews = [];
	this.views = {};
	this.viewIds = [];
	this.viewQueries = {};
	this.overlays = {};
	this.overlayIds = [];
	this.numberOfViews = 0;
	this.verticalPadding = 0;
	this.horizontalPadding = 0;
	this.stateName = null;
	this.viewScale = 1;
	this.viewLeft = 0;
	this.viewTop = 0;

	// view settings
	this.showUpdateNotification = false;
	this.showNavigationControls = false;
	this.scaleViewsToFit = false;
	this.scaleToFitOnDoubleClick = false;
	this.actualSizeOnDoubleClick = false;
	this.scaleViewsOnResize = false;
	this.navigationOnKeypress = false;
	this.showViewName = false;
	this.enableDeepLinking = true;
	this.refreshPageForChanges = false;
	this.showRefreshNotifications = true;

	// view controls
	this.scaleViewSlider = null;
	this.lastModifiedLabel = null;
	this.supportsPopState = false; // window.history.pushState!=null;
	this.initialized = false;

	// refresh properties
	this.refreshDuration = 250;
	this.lastModifiedDate = null;
	this.refreshRequest = null;
	this.refreshInterval = null;
	this.refreshContent = null;
	this.refreshContentSize = null;
	this.refreshCheckContent = false;
	this.refreshCheckContentSize = false;

	var self = this;

	self.initialize = function(event) {
		var view = self.getVisibleView();
		var views = self.getVisibleViews();
		if (view==null) view = self.getInitialView();
		self.collectViews();
		self.collectOverlays();
		self.collectMediaQueries();

		for (let index = 0; index < views.length; index++) {
			var view = views[index];
			self.setViewOptions(view);
			self.setViewVariables(view);
			self.centerView(view);
		}

		// sometimes the body size is 0 so we call this now and again later
		if (self.initialized) {
			window.addEventListener(self.NAVIGATION_CHANGE, self.viewChangeHandler);
			window.addEventListener("keyup", self.keypressHandler);
			window.addEventListener("keypress", self.keypressHandler);
			window.addEventListener("resize", self.resizeHandler);
			window.document.addEventListener("dblclick", self.doubleClickHandler);

			if (self.supportsPopState) {
				window.addEventListener('popstate', self.popStateHandler);
			}
			else {
				window.addEventListener('hashchange', self.hashChangeHandler);
			}

			// we are ready to go
			window.dispatchEvent(new Event(self.APPLICATION_COMPLETE));
		}

		if (self.initialized==false) {
			if (self.enableDeepLinking) {
				self.syncronizeViewToURL();
			}

			if (self.refreshPageForChanges) {
				self.setupRefreshForChanges();
			}

			self.initialized = true;
		}

		if (self.scaleViewsToFit) {
			self.viewScale = self.scaleViewToFit(view);

			if (self.viewScale<0) {
				setTimeout(self.scaleViewToFit, 500, view);
			}
		}
		else if (view) {
			self.viewScale = self.getViewScaleValue(view);
			self.centerView(view);
			self.updateSliderValue(self.viewScale);
		}
		else {
			// no view found
		}

		if (self.showUpdateNotification) {
			self.showNotification();
		}

		//"addEventListener" in window ? null : window.addEventListener = window.attachEvent;
		//"addEventListener" in document ? null : document.addEventListener = document.attachEvent;
	}


	///////////////////////////////////////
	// AUTO REFRESH
	///////////////////////////////////////

	self.setupRefreshForChanges = function() {
		self.refreshRequest = new XMLHttpRequest();

		if (!self.refreshRequest) {
			return false;
		}

		// get document start values immediately
		self.requestRefreshUpdate();
	}

	/**
	 * Attempt to check the last modified date by the headers
	 * or the last modified property from the byte array (experimental)
	 **/
	self.requestRefreshUpdate = function() {
		var url = document.location.href;
		var protocol = window.location.protocol;
		var method;

		try {

			if (self.refreshCheckContentSize) {
				self.refreshRequest.open('HEAD', url, true);
			}
			else if (self.refreshCheckContent) {
				self.refreshContent = document.documentElement.outerHTML;
				self.refreshRequest.open('GET', url, true);
				self.refreshRequest.responseType = "text";
			}
			else {

				// get page last modified date for the first call to compare to later
				if (self.lastModifiedDate==null) {

					// File system does not send headers in FF so get blob if possible
					if (protocol=="file:") {
						self.refreshRequest.open("GET", url, true);
						self.refreshRequest.responseType = "blob";
					}
					else {
						self.refreshRequest.open("HEAD", url, true);
						self.refreshRequest.responseType = "blob";
					}

					self.refreshRequest.onload = self.refreshOnLoadOnceHandler;

					// In some browsers (Chrome & Safari) this error occurs at send:
					//
					// Chrome - Access to XMLHttpRequest at 'file:///index.html' from origin 'null'
					// has been blocked by CORS policy:
					// Cross origin requests are only supported for protocol schemes:
					// http, data, chrome, chrome-extension, https.
					//
					// Safari - XMLHttpRequest cannot load file:///Users/user/Public/index.html. Cross origin requests are only supported for HTTP.
					//
					// Solution is to run a local server, set local permissions or test in another browser
					self.refreshRequest.send(null);

					// In MS browsers the following behavior occurs possibly due to an AJAX call to check last modified date:
					//
					// DOM7011: The code on this page disabled back and forward caching.

					// In Brave (Chrome) error when on the server
					// index.js:221 HEAD https://www.example.com/ net::ERR_INSUFFICIENT_RESOURCES
					// self.refreshRequest.send(null);

				}
				else {
					self.refreshRequest = new XMLHttpRequest();
					self.refreshRequest.onreadystatechange = self.refreshHandler;
					self.refreshRequest.ontimeout = function() {
						self.log("Couldn't find page to check for updates");
					}

					var method;
					if (protocol=="file:") {
						method = "GET";
					}
					else {
						method = "HEAD";
					}

					//refreshRequest.open('HEAD', url, true);
					self.refreshRequest.open(method, url, true);
					self.refreshRequest.responseType = "blob";
					self.refreshRequest.send(null);
				}
			}
		}
		catch (error) {
			self.log("Refresh failed for the following reason:")
			self.log(error);
		}
	}

	self.refreshHandler = function() {
		var contentSize;

		try {

			if (self.refreshRequest.readyState === XMLHttpRequest.DONE) {

				if (self.refreshRequest.status === 2 ||
					self.refreshRequest.status === 200) {
					var pageChanged = false;

					self.updateLastModifiedLabel();

					if (self.refreshCheckContentSize) {
						var lastModifiedHeader = self.refreshRequest.getResponseHeader("Last-Modified");
						contentSize = self.refreshRequest.getResponseHeader("Content-Length");
						//lastModifiedDate = refreshRequest.getResponseHeader("Last-Modified");
						var headers = self.refreshRequest.getAllResponseHeaders();
						var hasContentHeader = headers.indexOf("Content-Length")!=-1;

						if (hasContentHeader) {
							contentSize = self.refreshRequest.getResponseHeader("Content-Length");

							// size has not been set yet
							if (self.refreshContentSize==null) {
								self.refreshContentSize = contentSize;
								// exit and let interval call this method again
								return;
							}

							if (contentSize!=self.refreshContentSize) {
								pageChanged = true;
							}
						}
					}
					else if (self.refreshCheckContent) {

						if (self.refreshRequest.responseText!=self.refreshContent) {
							pageChanged = true;
						}
					}
					else {
						lastModifiedHeader = self.getLastModified(self.refreshRequest);

						if (self.lastModifiedDate!=lastModifiedHeader) {
							self.log("lastModifiedDate:" + self.lastModifiedDate + ",lastModifiedHeader:" +lastModifiedHeader);
							pageChanged = true;
						}

					}


					if (pageChanged) {
						clearInterval(self.refreshInterval);
						self.refreshUpdatedPage();
						return;
					}

				}
				else {
					self.log('There was a problem with the request.');
				}

			}
		}
		catch( error ) {
			//console.log('Caught Exception: ' + error);
		}
	}

	self.refreshOnLoadOnceHandler = function(event) {

		// get the last modified date
		if (self.refreshRequest.response) {
			self.lastModifiedDate = self.getLastModified(self.refreshRequest);

			if (self.lastModifiedDate!=null) {

				if (self.refreshInterval==null) {
					self.refreshInterval = setInterval(self.requestRefreshUpdate, self.refreshDuration);
				}
			}
			else {
				self.log("Could not get last modified date from the server");
			}
		}
	}

	self.refreshUpdatedPage = function() {
		if (self.showRefreshNotifications) {
			var date = new Date().setTime((new Date().getTime()+10000));
			document.cookie = encodeURIComponent(self.pageRefreshedName) + "=true" + "; max-age=6000;" + " path=/";
		}

		document.location.reload(true);
	}

	self.showNotification = function(duration) {
		var notificationID = self.pageRefreshedName+"ID";
		var notification = document.getElementById(notificationID);
		if (duration==null) duration = 4000;

		if (notification!=null) {return;}

		notification = document.createElement("div");
		notification.id = notificationID;
		notification.textContent = "PAGE UPDATED";
		var styleRule = ""
		styleRule = "position: fixed; padding: 7px 16px 6px 16px; font-family: Arial, sans-serif; font-size: 10px; font-weight: bold; left: 50%;";
		styleRule += "top: 20px; background-color: rgba(0,0,0,.5); border-radius: 12px; color:rgb(235, 235, 235); transition: all 2s linear;";
		styleRule += "transform: translateX(-50%); letter-spacing: .5px; filter: drop-shadow(2px 2px 6px rgba(0, 0, 0, .1))";
		notification.setAttribute("style", styleRule);

		notification.className= "PageRefreshedClass";

		document.body.appendChild(notification);

		setTimeout(function() {
			notification.style.opacity = "0";
			notification.style.filter = "drop-shadow( 0px 0px 0px rgba(0,0,0, .5))";
			setTimeout(function() {
				notification.parentNode.removeChild(notification);
			}, duration)
		}, duration);

		document.cookie = encodeURIComponent(self.pageRefreshedName) + "=; max-age=1; path=/";
	}

	/**
	 * Get the last modified date from the header
	 * or file object after request has been received
	 **/
	self.getLastModified = function(request) {
		var date;

		// file protocol - FILE object with last modified property
		if (request.response && request.response.lastModified) {
			date = request.response.lastModified;
		}

		// http protocol - check headers
		if (date==null) {
			date = request.getResponseHeader("Last-Modified");
		}

		return date;
	}

	self.updateLastModifiedLabel = function() {
		var labelValue = "";

		if (self.lastModifiedLabel==null) {
			self.lastModifiedLabel = document.getElementById("LastModifiedLabel");
		}

		if (self.lastModifiedLabel) {
			var seconds = parseInt(((new Date().getTime() - Date.parse(document.lastModified)) / 1000 / 60) * 100 + "");
			var minutes = 0;
			var hours = 0;

			if (seconds < 60) {
				seconds = Math.floor(seconds/10)*10;
				labelValue = seconds + " seconds";
			}
			else {
				minutes = parseInt((seconds/60) + "");

				if (minutes>60) {
					hours = parseInt((seconds/60/60) +"");
					labelValue += hours==1 ? " hour" : " hours";
				}
				else {
					labelValue = minutes+"";
					labelValue += minutes==1 ? " minute" : " minutes";
				}
			}

			if (seconds<10) {
				labelValue = "Updated now";
			}
			else {
				labelValue = "Updated " + labelValue + " ago";
			}

			if (self.lastModifiedLabel.firstElementChild) {
				self.lastModifiedLabel.firstElementChild.textContent = labelValue;

			}
			else if ("textContent" in self.lastModifiedLabel) {
				self.lastModifiedLabel.textContent = labelValue;
			}
		}
	}

	self.getShortString = function(string, length) {
		if (length==null) length = 30;
		string = string!=null ? string.substr(0, length).replace(/\n/g, "") : "[String is null]";
		return string;
	}

	self.getShortNumber = function(value, places) {
		if (places==null || places<1) places = 4;
		value = Math.round(value * Math.pow(10,places)) / Math.pow(10, places);
		return value;
	}

	///////////////////////////////////////
	// NAVIGATION CONTROLS
	///////////////////////////////////////

	self.updateViewLabel = function() {
		var viewNavigationLabel = document.getElementById("ViewNavigationLabel");
		var view = self.getVisibleView();
		var viewIndex = view ? self.getViewIndex(view) : -1;
		var viewName = view ? self.getViewPreferenceValue(view, self.prefix + "view-name") : null;
		var viewId = view ? view.id : null;

		if (viewNavigationLabel && view) {
			if (viewName && viewName.indexOf('"')!=-1) {
				viewName = viewName.replace(/"/g, "");
			}

			if (self.showViewName) {
				viewNavigationLabel.textContent = viewName;
				self.setTooltip(viewNavigationLabel, viewIndex + 1 + " of " + self.numberOfViews);
			}
			else {
				viewNavigationLabel.textContent = viewIndex + 1 + " of " + self.numberOfViews;
				self.setTooltip(viewNavigationLabel, viewName);
			}

		}
	}

	self.updateURL = function(view) {
		view = view == null ? self.getVisibleView() : view;
		var viewId = view ? view.id : null
		var viewFragment = view ? "#"+ viewId : null;

		if (viewId && self.viewIds.length>1 && self.enableDeepLinking) {

			if (self.supportsPopState==false) {
				self.setFragment(viewId);
			}
			else {
				if (viewFragment!=window.location.hash) {

					if (window.location.hash==null) {
						window.history.replaceState({name:viewId}, null, viewFragment);
					}
					else {
						window.history.pushState({name:viewId}, null, viewFragment);
					}
				}
			}
		}
	}

	self.updateURLState = function(view, stateName) {
		stateName = view && (stateName=="" || stateName==null) ? self.getStateNameByViewId(view.id) : stateName;

		if (self.supportsPopState==false) {
			self.setFragment(stateName);
		}
		else {
			if (stateName!=window.location.hash) {

				if (window.location.hash==null) {
					window.history.replaceState({name:view.viewId}, null, stateName);
				}
				else {
					window.history.pushState({name:view.viewId}, null, stateName);
				}
			}
		}
	}

	self.setFragment = function(value) {
		window.location.hash = "#" + value;
	}

	self.setTooltip = function(element, value) {
		// setting the tooltip in edge causes a page crash on hover
		if (/Edge/.test(navigator.userAgent)) { return; }

		if ("title" in element) {
			element.title = value;
		}
	}

	self.getStylesheetRules = function(styleSheet) {
		try {
			if (styleSheet) return styleSheet.cssRules || styleSheet.rules;

			return document.styleSheets[0]["cssRules"] || document.styleSheets[0]["rules"];
		}
		catch (error) {
			// ERRORS:
			// SecurityError: The operation is insecure.
			// Errors happen when script loads before stylesheet or loading an external css locally

			// InvalidAccessError: A parameter or an operation is not supported by the underlying object
			// Place script after stylesheet

			console.log(error);
			if (error.toString().indexOf("The operation is insecure")!=-1) {
				console.log("Load the stylesheet before the script or load the stylesheet inline until it can be loaded on a server")
			}
			return [];
		}
	}

	/**
	 * If single page application hide all of the views.
	 * @param {Number} selectedIndex if provided shows the view at index provided
	 **/
	self.hideViews = function(selectedIndex, animation) {
		var rules = self.getStylesheetRules();
		var queryIndex = 0;
		var numberOfRules = rules!=null ? rules.length : 0;

		// loop through rules and hide media queries except selected
		for (var i=0;i<numberOfRules;i++) {
			var rule = rules[i];

			if (rule.media!=null) {

				if (queryIndex==selectedIndex) {
					self.currentQuery.mediaText = rule.conditionText;
					self.currentQuery.index = selectedIndex;
					self.currentQuery.rule = rule;
					self.enableMediaQuery(rule);
				}
				else {
					if (animation) {
						self.fadeOut(rule)
					}
					else {
						self.disableMediaQuery(rule);
					}
				}

				queryIndex++;
			}
		}

		self.numberOfViews = queryIndex;
		self.updateViewLabel();
		self.updateURL();

		self.dispatchViewChange();

		var view = self.getVisibleView();
		var viewIndex = view ? self.getViewIndex(view) : -1;

		return viewIndex==selectedIndex ? view : null;
	}

	/**
	 * Hide view
	 * @param {Object} view element to hide
	 **/
	self.hideView = function(view) {
		var rule = view ? self.mediaQueryDictionary[view.id] : null;

		if (rule) {
			self.disableMediaQuery(rule);
		}
	}

	/**
	 * Hide overlay
	 * @param {Object} overlay element to hide
	 **/
	self.hideOverlay = function(overlay) {
		var rule = overlay ? self.mediaQueryDictionary[overlay.id] : null;

		if (rule) {
			self.disableMediaQuery(rule);

			//if (self.showByMediaQuery) {
				overlay.style.display = "none";
			//}
		}
	}

	/**
	 * Show the view by media query. Does not hide current views
	 * Sets view options by default
	 * @param {Object} view element to show
	 * @param {Boolean} setViewOptions sets view options if null or true
	 */
	self.showViewByMediaQuery = function(view, setViewOptions) {
		var id = view ? view.id : null;
		var query = id ? self.mediaQueryDictionary[id] : null;
		var display = null;
		setViewOptions = setViewOptions==null ? true : setViewOptions;

		if (query) {
			self.enableMediaQuery(query);
			if (view && setViewOptions) self.setViewOptions(view);
			if (view && setViewOptions) self.setViewVariables(view);
		}
	}

	/**
	 * Show the view. Does not hide current views
	 */
	self.showView = function(view, setViewOptions) {
		var id = view ? view.id : null;
		var query = id ? self.mediaQueryDictionary[id] : null;
		var display = null;
		setViewOptions = setViewOptions==null ? true : setViewOptions;

		if (query) {
			self.enableMediaQuery(query);
			if (view==null) view =self.getVisibleView();
			if (view && setViewOptions) self.setViewOptions(view);
		}
		else if (id) {
			display = window.getComputedStyle(view).getPropertyValue("display");
			if (display=="" || display=="none") {
				view.style.display = "block";
			}
		}

		if (view) {
			if (self.currentView!=null) {
				self.lastView = self.currentView;
			}

			self.currentView = view;
		}
	}

	self.showViewById = function(id, setViewOptions) {
		var view = id ? self.getViewById(id) : null;

		if (view) {
			self.showView(view);
			return;
		}

		self.log("View not found '" + id + "'");
	}

	/**
	 * Show overlay over view
	 * @param {String} id id of view or view reference
	 * @param {Number} x x location
	 * @param {Number} y y location
	 * @param {Event | HTMLElement} event event or html element with styles applied
	 */
	self.showOverlay = function(id, x, y, event) {
		var overlay = id && typeof id === 'string' ? self.getViewById(id) : id ? id : null;
		var query = overlay ? self.mediaQueryDictionary[overlay.id] : null;
		var centerHorizontally = false;
		var centerVertically = false;
		var display = null;

		// get enter animation - event target must have css variables declared
		if (event) {
			var button = event.currentTarget || event; // can be event or htmlelement
			var buttonComputedStyles = getComputedStyle(button);
			var actionTargetValue = buttonComputedStyles.getPropertyValue(self.prefix+"action-target").trim();
			var animation = buttonComputedStyles.getPropertyValue(self.prefix+"animation").trim();
			var targetType = buttonComputedStyles.getPropertyValue(self.prefix+"action-type").trim();
			var actionTarget = self.application ? null : self.getElement(actionTargetValue);
			var actionTargetStyles = actionTarget ? actionTarget.style : null;

			if (actionTargetStyles) {
				actionTargetStyles.setProperty("animation", animation);
			}

			if ("stopImmediatePropagation" in event) {
				event.stopImmediatePropagation();
			}
		}

		if (self.application==false || targetType=="page") {
			document.location.href = "./" + actionTargetValue;
			return;
		}

		// remove any current overlays
		if (self.currentOverlay) {
			self.removeOverlay();
		}

		if (query) {
			//self.setElementAnimation(overlay, null);
			//overlay.style.animation = animation;
			self.enableMediaQuery(query);

			var display = overlay && overlay.style.display;

			if (overlay && display=="" || display=="none") {
				overlay.style.display = "block";
				self.setViewOptions(overlay);
			}

			// add animation defined in event target style declaration
			if (animation && self.supportAnimations) {
				self.fadeIn(overlay, false, animation);
			}
		}
		else if (id) {
			if (overlay==null || overlay==false) {
				self.log("Overlay not found, '"+ id + "'");
				return;
			}

			display = window.getComputedStyle(overlay).getPropertyValue("display");

			if (display=="" || display=="none") {
				overlay.style.display = "block";
			}

			// add animation defined in event target style declaration
			if (animation && self.supportAnimations) {
				self.fadeIn(overlay, false, animation);
			}
		}

		// do not set x or y position if centering
		centerHorizontally = self.getViewPreferenceBoolean(overlay, self.prefix + "center-horizontally", false);
		centerVertically = self.getViewPreferenceBoolean(overlay, self.prefix + "center-vertically", false);

		if (overlay && centerHorizontally==false) {
			overlay.style.left = x + "px";
		}

		if (overlay && centerVertically==false) {
			overlay.style.top = y + "px";
		}

		self.currentOverlay = overlay;
	}

	self.goBack = function() {
		if (self.currentOverlay) {
			self.removeOverlay();
		}
		else if (self.lastView) {
			self.goToView(self.lastView.id);
		}
	}

	self.removeOverlay = function(animate) {
		var overlay = self.currentOverlay;
		animate = animate===false ? false : true;

		if (overlay) {
			var style = overlay.style;

			if (style.animation && self.supportAnimations && animate) {
				self.reverseAnimation(overlay, true);

				var duration = self.getAnimationDuration(style.animation, true);

				setTimeout(function() {
					self.setElementAnimation(overlay, null);
					self.hideOverlay(overlay);
				}, duration);
			}
			else {
				self.setElementAnimation(overlay, null);
				self.hideOverlay(overlay);
			}
		}
	}

	/**
	 * Reverse the animation and hide after
	 * @param {Object} target element with animation
	 * @param {Boolean} hide hide after animation ends
	 */
	self.reverseAnimation = function(target, hide) {
		var lastAnimation = null;
		var style = target.style;

		style.animationPlayState = "paused";
		lastAnimation = style.animation;
		style.animation = null;
		style.animationPlayState = "paused";

		if (hide) {
			//target.addEventListener("animationend", self.animationEndHideHandler);

			var duration = self.getAnimationDuration(lastAnimation, true);
			var isOverlay = self.isOverlay(target);

			setTimeout(function() {
				self.setElementAnimation(target, null);

				if (isOverlay) {
					self.hideOverlay(target);
				}
				else {
					self.hideView(target);
				}
			}, duration);
		}

		setTimeout(function() {
			style.animation = lastAnimation;
			style.animationPlayState = "paused";
			style.animationDirection = "reverse";
			style.animationPlayState = "running";
		}, 30);
	}

	self.animationEndHandler = function(event) {
		var target = event.currentTarget;
		self.dispatchEvent(new Event(event.type));
	}

	self.isOverlay = function(view) {
		var result = view ? self.getViewPreferenceBoolean(view, self.prefix + "is-overlay") : false;

		return result;
	}

	self.animationEndHideHandler = function(event) {
		var target = event.currentTarget;
		self.setViewVariables(null, target);
		self.hideView(target);
		target.removeEventListener("animationend", self.animationEndHideHandler);
	}

	self.animationEndShowHandler = function(event) {
		var target = event.currentTarget;
		target.removeEventListener("animationend", self.animationEndShowHandler);
	}

	self.setViewOptions = function(view) {

		if (view) {
			self.minimumScale = self.getViewPreferenceValue(view, self.prefix + "minimum-scale");
			self.maximumScale = self.getViewPreferenceValue(view, self.prefix + "maximum-scale");
			self.scaleViewsToFit = self.getViewPreferenceBoolean(view, self.prefix + "scale-to-fit");
			self.scaleToFitType = self.getViewPreferenceValue(view, self.prefix + "scale-to-fit-type");
			self.scaleToFitOnDoubleClick = self.getViewPreferenceBoolean(view, self.prefix + "scale-on-double-click");
			self.actualSizeOnDoubleClick = self.getViewPreferenceBoolean(view, self.prefix + "actual-size-on-double-click");
			self.scaleViewsOnResize = self.getViewPreferenceBoolean(view, self.prefix + "scale-on-resize");
			self.enableScaleUp = self.getViewPreferenceBoolean(view, self.prefix + "enable-scale-up");
			self.centerHorizontally = self.getViewPreferenceBoolean(view, self.prefix + "center-horizontally");
			self.centerVertically = self.getViewPreferenceBoolean(view, self.prefix + "center-vertically");
			self.navigationOnKeypress = self.getViewPreferenceBoolean(view, self.prefix + "navigate-on-keypress");
			self.showViewName = self.getViewPreferenceBoolean(view, self.prefix + "show-view-name");
			self.refreshPageForChanges = self.getViewPreferenceBoolean(view, self.prefix + "refresh-for-changes");
			self.refreshPageForChangesInterval = self.getViewPreferenceValue(view, self.prefix + "refresh-interval");
			self.showNavigationControls = self.getViewPreferenceBoolean(view, self.prefix + "show-navigation-controls");
			self.scaleViewSlider = self.getViewPreferenceBoolean(view, self.prefix + "show-scale-controls");
			self.enableDeepLinking = self.getViewPreferenceBoolean(view, self.prefix + "enable-deep-linking");
			self.singlePageApplication = self.getViewPreferenceBoolean(view, self.prefix + "application");
			self.showByMediaQuery = self.getViewPreferenceBoolean(view, self.prefix + "show-by-media-query");
			self.showUpdateNotification = document.cookie!="" ? document.cookie.indexOf(self.pageRefreshedName)!=-1 : false;
			self.imageComparisonDuration = self.getViewPreferenceValue(view, self.prefix + "image-comparison-duration");
			self.supportAnimations = self.getViewPreferenceBoolean(view, self.prefix + "enable-animations", true);

			if (self.scaleViewsToFit) {
				var newScaleValue = self.scaleViewToFit(view);

				if (newScaleValue<0) {
					setTimeout(self.scaleViewToFit, 500, view);
				}
			}
			else {
				self.viewScale = self.getViewScaleValue(view);
				self.viewToFitWidthScale = self.getViewFitToViewportWidthScale(view, self.enableScaleUp)
				self.viewToFitHeightScale = self.getViewFitToViewportScale(view, self.enableScaleUp);
				self.updateSliderValue(self.viewScale);
			}

			if (self.imageComparisonDuration!=null) {
				// todo
			}

			if (self.refreshPageForChangesInterval!=null) {
				self.refreshDuration = Number(self.refreshPageForChangesInterval);
			}
		}
	}

	self.previousView = function(event) {
		var rules = self.getStylesheetRules();
		var view = self.getVisibleView()
		var index = view ? self.getViewIndex(view) : -1;
		var prevQueryIndex = index!=-1 ? index-1 : self.currentQuery.index-1;
		var queryIndex = 0;
		var numberOfRules = rules!=null ? rules.length : 0;

		if (event) {
			event.stopImmediatePropagation();
		}

		if (prevQueryIndex<0) {
			return;
		}

		// loop through rules and hide media queries except selected
		for (var i=0;i<numberOfRules;i++) {
			var rule = rules[i];

			if (rule.media!=null) {

				if (queryIndex==prevQueryIndex) {
					self.currentQuery.mediaText = rule.conditionText;
					self.currentQuery.index = prevQueryIndex;
					self.currentQuery.rule = rule;
					self.enableMediaQuery(rule);
					self.updateViewLabel();
					self.updateURL();
					self.dispatchViewChange();
				}
				else {
					self.disableMediaQuery(rule);
				}

				queryIndex++;
			}
		}
	}

	self.nextView = function(event) {
		var rules = self.getStylesheetRules();
		var view = self.getVisibleView();
		var index = view ? self.getViewIndex(view) : -1;
		var nextQueryIndex = index!=-1 ? index+1 : self.currentQuery.index+1;
		var queryIndex = 0;
		var numberOfRules = rules!=null ? rules.length : 0;
		var numberOfMediaQueries = self.getNumberOfMediaRules();

		if (event) {
			event.stopImmediatePropagation();
		}

		if (nextQueryIndex>=numberOfMediaQueries) {
			return;
		}

		// loop through rules and hide media queries except selected
		for (var i=0;i<numberOfRules;i++) {
			var rule = rules[i];

			if (rule.media!=null) {

				if (queryIndex==nextQueryIndex) {
					self.currentQuery.mediaText = rule.conditionText;
					self.currentQuery.index = nextQueryIndex;
					self.currentQuery.rule = rule;
					self.enableMediaQuery(rule);
					self.updateViewLabel();
					self.updateURL();
					self.dispatchViewChange();
				}
				else {
					self.disableMediaQuery(rule);
				}

				queryIndex++;
			}
		}
	}

	/**
	 * Enables a view via media query
	 */
	self.enableMediaQuery = function(rule) {

		try {
			rule.media.mediaText = self.inclusionQuery;
		}
		catch(error) {
			//self.log(error);
			rule.conditionText = self.inclusionQuery;
		}
	}

	self.disableMediaQuery = function(rule) {

		try {
			rule.media.mediaText = self.exclusionQuery;
		}
		catch(error) {
			rule.conditionText = self.exclusionQuery;
		}
	}

	self.dispatchViewChange = function() {
		try {
			var event = new Event(self.NAVIGATION_CHANGE);
			window.dispatchEvent(event);
		}
		catch (error) {
			// In IE 11: Object doesn't support this action
		}
	}

	self.getNumberOfMediaRules = function() {
		var rules = self.getStylesheetRules();
		var numberOfRules = rules ? rules.length : 0;
		var numberOfQueries = 0;

		for (var i=0;i<numberOfRules;i++) {
			if (rules[i].media!=null) { numberOfQueries++; }
		}

		return numberOfQueries;
	}

	/////////////////////////////////////////
	// VIEW SCALE
	/////////////////////////////////////////

	self.sliderChangeHandler = function(event) {
		var value = self.getShortNumber(event.currentTarget.value/100);
		var view = self.getVisibleView();
		self.setViewScaleValue(view, false, value, true);
	}

	self.updateSliderValue = function(scale) {
		var slider = document.getElementById(self.viewScaleSliderId);
		var tooltip = parseInt(scale * 100 + "") + "%";
		var inputType;
		var inputValue;

		if (slider) {
			inputValue = self.getShortNumber(scale * 100);
			if (inputValue!=slider["value"]) {
				slider["value"] = inputValue;
			}
			inputType = slider.getAttributeNS(null, "type");

			if (inputType!="range") {
				// input range is not supported
				slider.style.display = "none";
			}

			self.setTooltip(slider, tooltip);
		}
	}

	self.viewChangeHandler = function(event) {
		var view = self.getVisibleView();
		var matrix = view ? getComputedStyle(view).transform : null;

		if (matrix) {
			self.viewScale = self.getViewScaleValue(view);

			var scaleNeededToFit = self.getViewFitToViewportScale(view);
			var isViewLargerThanViewport = scaleNeededToFit<1;

			// scale large view to fit if scale to fit is enabled
			if (self.scaleViewsToFit) {
				self.scaleViewToFit(view);
			}
			else {
				self.updateSliderValue(self.viewScale);
			}
		}
	}

	self.getViewScaleValue = function(view) {
		var matrix = getComputedStyle(view).transform;

		if (matrix) {
			var matrixArray = matrix.replace("matrix(", "").split(",");
			var scaleX = parseFloat(matrixArray[0]);
			var scaleY = parseFloat(matrixArray[3]);
			var scale = Math.min(scaleX, scaleY);
		}

		return scale;
	}

	/**
	 * Scales view to scale.
	 * @param {Object} view view to scale. views are in views array
	 * @param {Boolean} scaleToFit set to true to scale to fit. set false to use desired scale value
	 * @param {Number} desiredScale scale to define. not used if scale to fit is false
	 * @param {Boolean} isSliderChange indicates if slider is callee
	 */
	self.setViewScaleValue = function(view, scaleToFit, desiredScale, isSliderChange) {
		var enableScaleUp = self.enableScaleUp;
		var scaleToFitType = self.scaleToFitType;
		var minimumScale = self.minimumScale;
		var maximumScale = self.maximumScale;
		var hasMinimumScale = !isNaN(minimumScale) && minimumScale!="";
		var hasMaximumScale = !isNaN(maximumScale) && maximumScale!="";
		var scaleNeededToFit = self.getViewFitToViewportScale(view, enableScaleUp);
		var scaleNeededToFitWidth = self.getViewFitToViewportWidthScale(view, enableScaleUp);
		var scaleNeededToFitHeight = self.getViewFitToViewportHeightScale(view, enableScaleUp);
		var scaleToFitFull = self.getViewFitToViewportScale(view, true);
		var scaleToFitFullWidth = self.getViewFitToViewportWidthScale(view, true);
		var scaleToFitFullHeight = self.getViewFitToViewportHeightScale(view, true);
		var scaleToWidth = scaleToFitType=="width";
		var scaleToHeight = scaleToFitType=="height";
		var shrunkToFit = false;
		var topPosition = null;
		var leftPosition = null;
		var translateY = null;
		var translateX = null;
		var transformValue = "";
		var canCenterVertically = true;
		var canCenterHorizontally = true;

		if (scaleToFit && isSliderChange!=true) {
			if (scaleToFitType=="fit" || scaleToFitType=="") {
				desiredScale = scaleNeededToFit;
			}
			else if (scaleToFitType=="width") {
				desiredScale = scaleNeededToFitWidth;
			}
			else if (scaleToFitType=="height") {
				desiredScale = scaleNeededToFitHeight;
			}
		}
		else {
			if (isNaN(desiredScale)) {
				desiredScale = 1;
			}
		}

		self.updateSliderValue(desiredScale);

		// scale to fit width
		if (scaleToWidth && scaleToHeight==false) {
			canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			canCenterHorizontally = scaleNeededToFitWidth>=1 && enableScaleUp==false;

			if (isSliderChange) {
				canCenterHorizontally = desiredScale<scaleToFitFullWidth;
			}
			else if (scaleToFit) {
				desiredScale = scaleNeededToFitWidth;
			}

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}

			if (hasMaximumScale) {
				desiredScale = Math.min(desiredScale, Number(maximumScale));
			}

			desiredScale = self.getShortNumber(desiredScale);

			canCenterHorizontally = self.canCenterHorizontally(view, "width", enableScaleUp, desiredScale, minimumScale, maximumScale);
			canCenterVertically = self.canCenterVertically(view, "width", enableScaleUp, desiredScale, minimumScale, maximumScale);

			if (desiredScale>1 && (enableScaleUp || isSliderChange)) {
				transformValue = "scale(" + desiredScale + ")";
			}
			else if (desiredScale>=1 && enableScaleUp==false) {
				transformValue = "scale(" + 1 + ")";
			}
			else {
				transformValue = "scale(" + desiredScale + ")";
			}

			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}

				if (view.style.top != topPosition) {
					view.style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (view.style.left != leftPosition) {
					view.style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
			}

			view.style.transformOrigin = "0 0";
			view.style.transform = transformValue;

			self.viewScale = desiredScale;
			self.viewToFitWidthScale = scaleNeededToFitWidth;
			self.viewToFitHeightScale = scaleNeededToFitHeight;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			return desiredScale;
		}

		// scale to fit height
		if (scaleToHeight && scaleToWidth==false) {
			//canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			//canCenterHorizontally = scaleNeededToFitHeight<=scaleNeededToFitWidth && enableScaleUp==false;
			canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			canCenterHorizontally = scaleNeededToFitWidth>=1 && enableScaleUp==false;

			if (isSliderChange) {
				canCenterHorizontally = desiredScale<scaleToFitFullHeight;
			}
			else if (scaleToFit) {
				desiredScale = scaleNeededToFitHeight;
			}

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}

			if (hasMaximumScale) {
				desiredScale = Math.min(desiredScale, Number(maximumScale));
				//canCenterVertically = desiredScale>=scaleNeededToFitHeight && enableScaleUp==false;
			}

			desiredScale = self.getShortNumber(desiredScale);

			canCenterHorizontally = self.canCenterHorizontally(view, "height", enableScaleUp, desiredScale, minimumScale, maximumScale);
			canCenterVertically = self.canCenterVertically(view, "height", enableScaleUp, desiredScale, minimumScale, maximumScale);

			if (desiredScale>1 && (enableScaleUp || isSliderChange)) {
				transformValue = "scale(" + desiredScale + ")";
			}
			else if (desiredScale>=1 && enableScaleUp==false) {
				transformValue = "scale(" + 1 + ")";
			}
			else {
				transformValue = "scale(" + desiredScale + ")";
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (view.style.left != leftPosition) {
					view.style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
			}

			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}

				if (view.style.top != topPosition) {
					view.style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			view.style.transformOrigin = "0 0";
			view.style.transform = transformValue;

			self.viewScale = desiredScale;
			self.viewToFitWidthScale = scaleNeededToFitWidth;
			self.viewToFitHeightScale = scaleNeededToFitHeight;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			return scaleNeededToFitHeight;
		}

		if (scaleToFitType=="fit") {
			//canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			//canCenterHorizontally = scaleNeededToFitWidth>=scaleNeededToFitHeight;
			canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFit;
			canCenterHorizontally = scaleNeededToFitWidth>=scaleNeededToFit;

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}

			desiredScale = self.getShortNumber(desiredScale);

			if (isSliderChange || scaleToFit==false) {
				canCenterVertically = scaleToFitFullHeight>=desiredScale;
				canCenterHorizontally = desiredScale<scaleToFitFullWidth;
			}
			else if (scaleToFit) {
				desiredScale = scaleNeededToFit;
			}

			transformValue = "scale(" + desiredScale + ")";

			//canCenterHorizontally = self.canCenterHorizontally(view, "fit", false, desiredScale);
			//canCenterVertically = self.canCenterVertically(view, "fit", false, desiredScale);

			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}

				if (view.style.top != topPosition) {
					view.style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (view.style.left != leftPosition) {
					view.style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
			}

			view.style.transformOrigin = "0 0";
			view.style.transform = transformValue;

			self.viewScale = desiredScale;
			self.viewToFitWidthScale = scaleNeededToFitWidth;
			self.viewToFitHeightScale = scaleNeededToFitHeight;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			self.updateSliderValue(desiredScale);

			return desiredScale;
		}

		if (scaleToFitType=="default" || scaleToFitType=="") {
			desiredScale = 1;

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}
			if (hasMaximumScale) {
				desiredScale = Math.min(desiredScale, Number(maximumScale));
			}

			canCenterHorizontally = self.canCenterHorizontally(view, "none", false, desiredScale, minimumScale, maximumScale);
			canCenterVertically = self.canCenterVertically(view, "none", false, desiredScale, minimumScale, maximumScale);

			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}

				if (view.style.top != topPosition) {
					view.style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (view.style.left != leftPosition) {
					view.style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
				else {
					transformValue += " translateX(" + 0 + ")";
				}
			}

			view.style.transformOrigin = "0 0";
			view.style.transform = transformValue;


			self.viewScale = desiredScale;
			self.viewToFitWidthScale = scaleNeededToFitWidth;
			self.viewToFitHeightScale = scaleNeededToFitHeight;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			self.updateSliderValue(desiredScale);

			return desiredScale;
		}
	}

	/**
	 * Returns true if view can be centered horizontally
	 * @param {HTMLElement} view view
	 * @param {String} type type of scaling - width, height, all, none
	 * @param {Boolean} scaleUp if scale up enabled
	 * @param {Number} scale target scale value
	 */
	self.canCenterHorizontally = function(view, type, scaleUp, scale, minimumScale, maximumScale) {
		var scaleNeededToFit = self.getViewFitToViewportScale(view, scaleUp);
		var scaleNeededToFitHeight = self.getViewFitToViewportHeightScale(view, scaleUp);
		var scaleNeededToFitWidth = self.getViewFitToViewportWidthScale(view, scaleUp);
		var canCenter = false;
		var minScale;

		type = type==null ? "none" : type;
		scale = scale==null ? scale : scaleNeededToFitWidth;
		scaleUp = scaleUp == null ? false : scaleUp;

		if (type=="width") {

			if (scaleUp && maximumScale==null) {
				canCenter = false;
			}
			else if (scaleNeededToFitWidth>=1) {
				canCenter = true;
			}
		}
		else if (type=="height") {
			minScale = Math.min(1, scaleNeededToFitHeight);
			if (minimumScale!="" && maximumScale!="") {
				minScale = Math.max(minimumScale, Math.min(maximumScale, scaleNeededToFitHeight));
			}
			else {
				if (minimumScale!="") {
					minScale = Math.max(minimumScale, scaleNeededToFitHeight);
				}
				if (maximumScale!="") {
					minScale = Math.max(minimumScale, Math.min(maximumScale, scaleNeededToFitHeight));
				}
			}

			if (scaleUp && maximumScale=="") {
				canCenter = false;
			}
			else if (scaleNeededToFitWidth>=minScale) {
				canCenter = true;
			}
		}
		else if (type=="fit") {
			canCenter = scaleNeededToFitWidth>=scaleNeededToFit;
		}
		else {
			if (scaleUp) {
				canCenter = false;
			}
			else if (scaleNeededToFitWidth>=1) {
				canCenter = true;
			}
		}

		self.horizontalScrollbarsNeeded = canCenter;

		return canCenter;
	}

	/**
	 * Returns true if view can be centered horizontally
	 * @param {HTMLElement} view view to scale
	 * @param {String} type type of scaling
	 * @param {Boolean} scaleUp if scale up enabled
	 * @param {Number} scale target scale value
	 */
	self.canCenterVertically = function(view, type, scaleUp, scale, minimumScale, maximumScale) {
		var scaleNeededToFit = self.getViewFitToViewportScale(view, scaleUp);
		var scaleNeededToFitWidth = self.getViewFitToViewportWidthScale(view, scaleUp);
		var scaleNeededToFitHeight = self.getViewFitToViewportHeightScale(view, scaleUp);
		var canCenter = false;
		var minScale;

		type = type==null ? "none" : type;
		scale = scale==null ? 1 : scale;
		scaleUp = scaleUp == null ? false : scaleUp;

		if (type=="width") {
			canCenter = scaleNeededToFitHeight>=scaleNeededToFitWidth;
		}
		else if (type=="height") {
			minScale = Math.max(minimumScale, Math.min(maximumScale, scaleNeededToFit));
			canCenter = scaleNeededToFitHeight>=minScale;
		}
		else if (type=="fit") {
			canCenter = scaleNeededToFitHeight>=scaleNeededToFit;
		}
		else {
			if (scaleUp) {
				canCenter = false;
			}
			else if (scaleNeededToFitHeight>=1) {
				canCenter = true;
			}
		}

		self.verticalScrollbarsNeeded = canCenter;

		return canCenter;
	}

	self.getViewFitToViewportScale = function(view, scaleUp) {
		var enableScaleUp = scaleUp;
		var availableWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		var availableHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
		var elementWidth = parseFloat(getComputedStyle(view, "style").width);
		var elementHeight = parseFloat(getComputedStyle(view, "style").height);
		var newScale = 1;

		// if element is not added to the document computed values are NaN
		if (isNaN(elementWidth) || isNaN(elementHeight)) {
			return newScale;
		}

		availableWidth -= self.horizontalPadding;
		availableHeight -= self.verticalPadding;

		if (enableScaleUp) {
			newScale = Math.min(availableHeight/elementHeight, availableWidth/elementWidth);
		}
		else if (elementWidth > availableWidth || elementHeight > availableHeight) {
			newScale = Math.min(availableHeight/elementHeight, availableWidth/elementWidth);
		}

		return newScale;
	}

	self.getViewFitToViewportWidthScale = function(view, scaleUp) {
		// need to get browser viewport width when element
		var isParentWindow = view && view.parentNode && view.parentNode===document.body;
		var enableScaleUp = scaleUp;
		var availableWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		var elementWidth = parseFloat(getComputedStyle(view, "style").width);
		var newScale = 1;

		// if element is not added to the document computed values are NaN
		if (isNaN(elementWidth)) {
			return newScale;
		}

		availableWidth -= self.horizontalPadding;

		if (enableScaleUp) {
			newScale = availableWidth/elementWidth;
		}
		else if (elementWidth > availableWidth) {
			newScale = availableWidth/elementWidth;
		}

		return newScale;
	}

	self.getViewFitToViewportHeightScale = function(view, scaleUp) {
		var enableScaleUp = scaleUp;
		var availableHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
		var elementHeight = parseFloat(getComputedStyle(view, "style").height);
		var newScale = 1;

		// if element is not added to the document computed values are NaN
		if (isNaN(elementHeight)) {
			return newScale;
		}

		availableHeight -= self.verticalPadding;

		if (enableScaleUp) {
			newScale = availableHeight/elementHeight;
		}
		else if (elementHeight > availableHeight) {
			newScale = availableHeight/elementHeight;
		}

		return newScale;
	}

	self.keypressHandler = function(event) {
		var rightKey = 39;
		var leftKey = 37;

		// listen for both events
		if (event.type=="keypress") {
			window.removeEventListener("keyup", self.keypressHandler);
		}
		else {
			window.removeEventListener("keypress", self.keypressHandler);
		}

		if (self.showNavigationControls) {
			if (self.navigationOnKeypress) {
				if (event.keyCode==rightKey) {
					self.nextView();
				}
				if (event.keyCode==leftKey) {
					self.previousView();
				}
			}
		}
		else if (self.navigationOnKeypress) {
			if (event.keyCode==rightKey) {
				self.nextView();
			}
			if (event.keyCode==leftKey) {
				self.previousView();
			}
		}
	}

	///////////////////////////////////
	// GENERAL FUNCTIONS
	///////////////////////////////////

	self.getViewById = function(id) {
		id = id ? id.replace("#", "") : "";
		var view = self.viewIds.indexOf(id)!=-1 && self.getElement(id);
		return view;
	}

	self.getViewIds = function() {
		var viewIds = self.getViewPreferenceValue(document.body, self.prefix + "view-ids");
		var viewId = null;

		viewIds = viewIds!=null && viewIds!="" ? viewIds.split(",") : [];

		if (viewIds.length==0) {
			viewId = self.getViewPreferenceValue(document.body, self.prefix + "view-id");
			viewIds = viewId ? [viewId] : [];
		}

		return viewIds;
	}

	self.getInitialViewId = function() {
		var viewId = self.getViewPreferenceValue(document.body, self.prefix + "view-id");
		return viewId;
	}

	self.getApplicationStylesheet = function() {
		var stylesheetId = self.getViewPreferenceValue(document.body, self.prefix + "stylesheet-id");
		self.applicationStylesheet = document.getElementById("applicationStylesheet");
		return self.applicationStylesheet.sheet;
	}

	self.getVisibleView = function() {
		var viewIds = self.getViewIds();

		for (var i=0;i<viewIds.length;i++) {
			var viewId = viewIds[i].replace(/[\#?\.?](.*)/, "$" + "1");
			var view = self.getElement(viewId);
			var postName = "_Class";

			if (view==null && viewId && viewId.lastIndexOf(postName)!=-1) {
				view = self.getElement(viewId.replace(postName, ""));
			}

			if (view) {
				var display = getComputedStyle(view).display;

				if (display=="block" || display=="flex") {
					return view;
				}
			}
		}

		return null;
	}

	self.getVisibleViews = function() {
		var viewIds = self.getViewIds();
		var views = [];

		for (var i=0;i<viewIds.length;i++) {
			var viewId = viewIds[i].replace(/[\#?\.?](.*)/, "$" + "1");
			var view = self.getElement(viewId);
			var postName = "_Class";

			if (view==null && viewId && viewId.lastIndexOf(postName)!=-1) {
				view = self.getElement(viewId.replace(postName, ""));
			}

			if (view) {
				var display = getComputedStyle(view).display;

				if (display=="none") {
					continue;
				}

				if (display=="block" || display=="flex") {
					views.push(view);
				}
			}
		}

		return views;
	}

	self.getStateNameByViewId = function(id) {
		var state = self.viewsDictionary[id];
		return state && state.stateName;
	}

	self.getMatchingViews = function(ids) {
		var views = self.addedViews.slice(0);
		var matchingViews = [];

		if (self.showByMediaQuery) {
			for (let index = 0; index < views.length; index++) {
				var viewId = views[index];
				var state = self.viewsDictionary[viewId];
				var rule = state && state.rule;
				var matchResults = window.matchMedia(rule.conditionText);
				var view = self.views[viewId];

				if (matchResults.matches) {
					if (ids==true) {
						matchingViews.push(viewId);
					}
					else {
						matchingViews.push(view);
					}
				}
			}
		}

		return matchingViews;
	}

	self.ruleMatchesQuery = function(rule) {
		var result = window.matchMedia(rule.conditionText);
		return result.matches;
	}

	self.getViewsByStateName = function(stateName, matchQuery) {
		var views = self.addedViews.slice(0);
		var matchingViews = [];

		if (self.showByMediaQuery) {

			// find state name
			for (let index = 0; index < views.length; index++) {
				var viewId = views[index];
				var state = self.viewsDictionary[viewId];
				var rule = state.rule;
				var mediaRule = state.mediaRule;
				var view = self.views[viewId];
				var viewStateName = self.getStyleRuleValue(mediaRule, self.STATE_NAME, state);
				var stateFoundAtt = view.getAttribute(self.STATE_NAME)==state;
				var matchesResults = false;

				if (viewStateName==stateName) {
					if (matchQuery) {
						matchesResults = self.ruleMatchesQuery(rule);

						if (matchesResults) {
							matchingViews.push(view);
						}
					}
					else {
						matchingViews.push(view);
					}
				}
			}
		}

		return matchingViews;
	}

	self.getInitialView = function() {
		var viewId = self.getInitialViewId();
		viewId = viewId.replace(/[\#?\.?](.*)/, "$" + "1");
		var view = self.getElement(viewId);
		var postName = "_Class";

		if (view==null && viewId && viewId.lastIndexOf(postName)!=-1) {
			view = self.getElement(viewId.replace(postName, ""));
		}

		return view;
	}

	self.getViewIndex = function(view) {
		var viewIds = self.getViewIds();
		var id = view ? view.id : null;
		var index = id && viewIds ? viewIds.indexOf(id) : -1;

		return index;
	}

	self.syncronizeViewToURL = function() {
		var fragment = self.getHashFragment();

		if (self.showByMediaQuery) {
			var stateName = fragment;

			if (stateName==null || stateName=="") {
				var initialView = self.getInitialView();
				stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
			}

			self.showMediaQueryViewsByState(stateName);
			return;
		}

		var view = self.getViewById(fragment);
		var index = view ? self.getViewIndex(view) : 0;
		if (index==-1) index = 0;
		var currentView = self.hideViews(index);

		if (self.supportsPopState && currentView) {

			if (fragment==null) {
				window.history.replaceState({name:currentView.id}, null, "#"+ currentView.id);
			}
			else {
				window.history.pushState({name:currentView.id}, null, "#"+ currentView.id);
			}
		}

		self.setViewVariables(view);
		return view;
	}

	/**
	 * Set the currentView or currentOverlay properties and set the lastView or lastOverlay properties
	 */
	self.setViewVariables = function(view, overlay, parentView) {
		if (view) {
			if (self.currentView) {
				self.lastView = self.currentView;
			}
			self.currentView = view;
		}

		if (overlay) {
			if (self.currentOverlay) {
				self.lastOverlay = self.currentOverlay;
			}
			self.currentOverlay = overlay;
		}
	}

	self.getViewPreferenceBoolean = function(view, property, altValue) {
		var computedStyle = window.getComputedStyle(view);
		var value = computedStyle.getPropertyValue(property);
		var type = typeof value;

		if (value=="true" || (type=="string" && value.indexOf("true")!=-1)) {
			return true;
		}
		else if (value=="" && arguments.length==3) {
			return altValue;
		}

		return false;
	}

	self.getViewPreferenceValue = function(view, property, defaultValue) {
		var value = window.getComputedStyle(view).getPropertyValue(property);

		if (value===undefined) {
			return defaultValue;
		}

		value = value.replace(/^[\s\"]*/, "");
		value = value.replace(/[\s\"]*$/, "");
		value = value.replace(/^[\s"]*(.*?)[\s"]*$/, function (match, capture) {
			return capture;
		});

		return value;
	}

	self.getStyleRuleValue = function(cssRule, property) {
		var value = cssRule ? cssRule.style.getPropertyValue(property) : null;

		if (value===undefined) {
			return null;
		}

		value = value.replace(/^[\s\"]*/, "");
		value = value.replace(/[\s\"]*$/, "");
		value = value.replace(/^[\s"]*(.*?)[\s"]*$/, function (match, capture) {
			return capture;
		});

		return value;
	}

	self.getCSSPropertyValueForElement = function(id, property) {
		var styleSheets = document.styleSheets;
		var numOfStylesheets = styleSheets.length;
		var values = [];
		var selectorIDText = "#" + id;
		var selectorClassText = "." + id + "_Class";
		var value;

		for(var i=0;i<numOfStylesheets;i++) {
			var styleSheet = styleSheets[i];
			var cssRules = self.getStylesheetRules(styleSheet);
			var numOfCSSRules = cssRules.length;
			var cssRule;

			for (var j=0;j<numOfCSSRules;j++) {
				cssRule = cssRules[j];

				if (cssRule.media) {
					var mediaRules = cssRule.cssRules;
					var numOfMediaRules = mediaRules ? mediaRules.length : 0;

					for(var k=0;k<numOfMediaRules;k++) {
						var mediaRule = mediaRules[k];

						if (mediaRule.selectorText==selectorIDText || mediaRule.selectorText==selectorClassText) {

							if (mediaRule.style && property in mediaRule.style) {
								value = mediaRule.style.getPropertyValue(property);
								values.push(value);
							}
						}
					}
				}
				else {

					if (cssRule.selectorText==selectorIDText || cssRule.selectorText==selectorClassText) {
						if (cssRule.style && property in cssRule.style) {
							value = cssRule.style.getPropertyValue(property);
							values.push(value);
						}
					}
				}
			}
		}

		return values.pop();
	}

	self.collectViews = function() {
		var viewIds = self.getViewIds();

		for (let index = 0; index < viewIds.length; index++) {
			const id = viewIds[index];
			const view = self.getElement(id);
			//view && view.addEventListener("animationend", self.animationEndHandler);
			self.views[id] = view;
		}

		self.viewIds = viewIds;
	}

	self.collectOverlays = function() {
		var viewIds = self.getViewIds();
		var ids = [];

		for (let index = 0; index < viewIds.length; index++) {
			const id = viewIds[index];
			const view = self.getViewById(id);
			const isOverlay = view && self.isOverlay(view);

			if (isOverlay) {
				ids.push(id);
				self.overlays[id] = view;
			}
		}

		self.overlayIds = ids;
	}

	self.collectMediaQueries = function() {
		var viewIds = self.getViewIds();
		var styleSheet = self.getApplicationStylesheet();
		var cssRules = self.getStylesheetRules(styleSheet);
		var numOfCSSRules = cssRules ? cssRules.length : 0;
		var cssRule;
		var id = viewIds.length ? viewIds[0]: ""; // single view
		var selectorIDText = "#" + id;
		var selectorClassText = "." + id + "_Class";
		var viewsNotFound = viewIds.slice();
		var viewsFound = [];
		var selectorText = null;
		var property = self.prefix + "view-id";
		var stateName = self.prefix + "state";
		var stateValue;

		for (var j=0;j<numOfCSSRules;j++) {
			cssRule = cssRules[j];

			if (cssRule.media) {
				var mediaRules = cssRule.cssRules;
				var numOfMediaRules = mediaRules ? mediaRules.length : 0;

				for(var k=0;k<numOfMediaRules;k++) {
					var mediaRule = mediaRules[k];
					var mediaId = null;

					selectorText = mediaRule.selectorText;

					if (selectorText==".mediaViewInfo") {

						mediaId = self.getStyleRuleValue(mediaRule, property);
						stateValue = self.getStyleRuleValue(mediaRule, stateName);

						// prevent duplicates from load and domcontentloaded events
						if (self.addedViews.indexOf(mediaId)==-1) {
							self.addView(mediaId, cssRule, mediaRule, stateValue);
						}

						viewsFound.push(mediaId);

						if (viewsNotFound.indexOf(mediaId)!=-1) {
							viewsNotFound.splice(viewsNotFound.indexOf(mediaId));
						}

						break;
					}
				}
			}
			else {
				selectorText = cssRule.selectorText.replace(/[#|\s|*]?/g, "");

				if (viewIds.indexOf(selectorText)!=-1) {
					//stateValue = self.getStyleRuleValue(cssRule, stateName);
					self.addView(selectorText, cssRule, null, stateValue);

					if (viewsNotFound.indexOf(selectorText)!=-1) {
						viewsNotFound.splice(viewsNotFound.indexOf(selectorText));
					}

					break;
				}
			}
		}

		if (viewsNotFound.length) {
			console.log("Could not find the following views:" + viewsNotFound.join(",") + "");
			console.log("Views found:" + viewsFound.join(",") + "");
		}
	}

	/**
	 * Adds a view. A view object contains the id of the view and the style rule
	 * Use enableMediaQuery(rule) to enable
	 * An array of view names are in self.addedViews array
	 */
	self.addView = function(viewId, cssRule, mediaRule, stateName) {
		var state = {name:viewId, rule:cssRule, id:viewId, mediaRule:mediaRule, stateName:stateName};
		self.addedViews.push(viewId);
		self.viewsDictionary[viewId] = state;
		self.mediaQueryDictionary[viewId] = cssRule;
	}

	self.hasView = function(name) {

		if (self.addedViews.indexOf(name)!=-1) {
			return true;
		}
		return false;
	}

	/**
	 * Go to view by id. Views are added in addView()
	 * @param {String} id id of view in current
	 * @param {Boolean} maintainPreviousState if true then do not hide other views
	 * @param {String} parent id of parent view
	 */
	self.goToView = function(id, maintainPreviousState, parent) {
		var state = self.viewsDictionary[id];

		if (state) {
			if (maintainPreviousState==false || maintainPreviousState==null) {
				self.hideViews();
			}
			self.enableMediaQuery(state.rule);
			self.updateViewLabel();
			self.updateURL();
		}
		else {
			var event = new Event(self.STATE_NOT_FOUND);
			self.stateName = id;
			window.dispatchEvent(event);
		}
	}

	/**
	 * Go to the view in the event targets CSS variable
	 */
	self.goToTargetView = function(event) {
		var button = event.currentTarget;
		var buttonComputedStyles = getComputedStyle(button);
		var actionTargetValue = buttonComputedStyles.getPropertyValue(self.prefix+"action-target").trim();
		var animation = buttonComputedStyles.getPropertyValue(self.prefix+"animation").trim();
		var targetType = buttonComputedStyles.getPropertyValue(self.prefix+"action-type").trim();
		var targetView = self.application ? null : self.getElement(actionTargetValue);
		var targetState = self.getStateNameByViewId(targetView.id);
		var actionTargetStyles = targetView ? targetView.style : null;
		var state = self.viewsDictionary[actionTargetValue];

		// navigate to page
		if (self.application==false || targetType=="page") {
			document.location.href = "./" + actionTargetValue;
			return;
		}

		// if view is found
		if (targetView) {

			if (self.currentOverlay) {
				self.removeOverlay(false);
			}

			if (self.showByMediaQuery) {
				var stateName = targetState;

				if (stateName==null || stateName=="") {
					var initialView = self.getInitialView();
					stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
				}
				self.showMediaQueryViewsByState(stateName, event);
				return;
			}

			// add animation set in event target style declaration
			if (animation && self.supportAnimations) {
				self.crossFade(self.currentView, targetView, false, animation);
			}
			else {
				self.setViewVariables(self.currentView);
				self.hideViews();
				self.enableMediaQuery(state.rule);
				self.scaleViewIfNeeded(targetView);
				self.centerView(targetView);
				self.updateViewLabel();
				self.updateURL();
			}
		}
		else {
			var stateEvent = new Event(self.STATE_NOT_FOUND);
			self.stateName = name;
			window.dispatchEvent(stateEvent);
		}

		event.stopImmediatePropagation();
	}

	/**
	 * Cross fade between views
	 **/
	self.crossFade = function(from, to, update, animation) {
		var targetIndex = to.parentNode
		var fromIndex = Array.prototype.slice.call(from.parentElement.children).indexOf(from);
		var toIndex = Array.prototype.slice.call(to.parentElement.children).indexOf(to);

		if (from.parentNode==to.parentNode) {
			var reverse = self.getReverseAnimation(animation);
			var duration = self.getAnimationDuration(animation, true);

			// if target view is above (higher index)
			// then fade in target view
			// and after fade in then hide previous view instantly
			if (fromIndex<toIndex) {
				self.setElementAnimation(from, null);
				self.setElementAnimation(to, null);
				self.showViewByMediaQuery(to);
				self.fadeIn(to, update, animation);

				setTimeout(function() {
					self.setElementAnimation(to, null);
					self.setElementAnimation(from, null);
					self.hideView(from);
					self.updateURL();
					self.setViewVariables(to);
					self.updateViewLabel();
				}, duration)
			}
			// if target view is on bottom
			// then show target view instantly
			// and fade out current view
			else if (fromIndex>toIndex) {
				self.setElementAnimation(to, null);
				self.setElementAnimation(from, null);
				self.showViewByMediaQuery(to);
				self.fadeOut(from, update, reverse);

				setTimeout(function() {
					self.setElementAnimation(to, null);
					self.setElementAnimation(from, null);
					self.hideView(from);
					self.updateURL();
					self.setViewVariables(to);
				}, duration)
			}
		}
	}

	self.fadeIn = function(element, update, animation) {
		self.showViewByMediaQuery(element);

		if (update) {
			self.updateURL(element);

			element.addEventListener("animationend", function(event) {
				element.style.animation = null;
				self.setViewVariables(element);
				self.updateViewLabel();
				element.removeEventListener("animationend", arguments.callee);
			});
		}

		self.setElementAnimation(element, null);

		element.style.animation = animation;
	}

	self.fadeOutCurrentView = function(animation, update) {
		if (self.currentView) {
			self.fadeOut(self.currentView, update, animation);
		}
		if (self.currentOverlay) {
			self.fadeOut(self.currentOverlay, update, animation);
		}
	}

	self.fadeOut = function(element, update, animation) {
		if (update) {
			element.addEventListener("animationend", function(event) {
				element.style.animation = null;
				self.hideView(element);
				element.removeEventListener("animationend", arguments.callee);
			});
		}

		element.style.animationPlayState = "paused";
		element.style.animation = animation;
		element.style.animationPlayState = "running";
	}

	self.getReverseAnimation = function(animation) {
		if (animation && animation.indexOf("reverse")==-1) {
			animation += " reverse";
		}

		return animation;
	}

	/**
	 * Get duration in animation string
	 * @param {String} animation animation value
	 * @param {Boolean} inMilliseconds length in milliseconds if true
	 */
	self.getAnimationDuration = function(animation, inMilliseconds) {
		var duration = 0;
		var expression = /.+(\d\.\d)s.+/;

		if (animation && animation.match(expression)) {
			duration = parseFloat(animation.replace(expression, "$" + "1"));
			if (duration && inMilliseconds) duration = duration * 1000;
		}

		return duration;
	}

	self.setElementAnimation = function(element, animation, priority) {
		element.style.setProperty("animation", animation, "important");
	}

	self.getElement = function(id) {
		var elementId = id ? id.trim() : id;
		var element = elementId ? document.getElementById(elementId) : null;

		return element;
	}

	self.resizeHandler = function(event) {

		if (self.showByMediaQuery) {
			if (self.enableDeepLinking) {
				var stateName = self.getHashFragment();

				if (stateName==null || stateName=="") {
					var initialView = self.getInitialView();
					stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
				}
				self.showMediaQueryViewsByState(stateName, event);
			}
		}
		else {
			var visibleViews = self.getVisibleViews();

			for (let index = 0; index < visibleViews.length; index++) {
				self.scaleViewIfNeeded();
			}
		}

		window.dispatchEvent(new Event(self.APPLICATION_RESIZE));
	}

	self.scaleViewIfNeeded = function(view) {

		if (self.scaleViewsOnResize) {
			if (view==null) {
				view = self.getVisibleView();
			}

			var isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME)=="false" ? false : true;

			if (isViewScaled) {
				self.scaleViewToFit(view, true);
			}
			else {
				self.scaleViewToActualSize(view);
			}
		}
		else if (view) {
			self.centerView(view);
		}
	}

	self.centerView = function(view) {

		if (self.scaleToFit) {
			self.scaleViewToFit(view, true);
		}
		else {
			self.scaleViewToActualSize(view);  // for centering support for now
		}
	}

	self.preventDoubleClick = function(event) {
		event.stopImmediatePropagation();
	}

	self.getHashFragment = function() {
		var value = window.location.hash ? window.location.hash.replace("#", "") : "";
		return value;
	}

	self.showBlockElement = function(view) {
		view.style.display = "block";
	}

	self.hideElement = function(view) {
		view.style.display = "none";
	}

	self.showStateFunction = null;

	self.showMediaQueryViewsByState = function(state, event) {
		// browser will hide and show by media query (small, medium, large)
		// but if multiple views exists at same size user may want specific view
		// if showStateFunction is defined that is called with state fragment and user can show or hide each media matching view by returning true or false
		// if showStateFunction is not defined and state is defined and view has a defined state that matches then show that and hide other matching views
		// if no state is defined show view
		// an viewChanging event is dispatched before views are shown or hidden that can be prevented

		// get all matched queries
		// if state name is specified then show that view and hide other views
		// if no state name is defined then show
		var matchedViews = self.getMatchingViews();
		var matchMediaQuery = true;
		var foundViews = self.getViewsByStateName(state, matchMediaQuery);
		var showViews = [];
		var hideViews = [];

		// loop views that match media query
		for (let index = 0; index < matchedViews.length; index++) {
			var view = matchedViews[index];

			// let user determine visible view
			if (self.showStateFunction!=null) {
				if (self.showStateFunction(view, state)) {
					showViews.push(view);
				}
				else {
					hideViews.push(view);
				}
			}
			// state was defined so check if view matches state
			else if (foundViews.length) {

				if (foundViews.indexOf(view)!=-1) {
					showViews.push(view);
				}
				else {
					hideViews.push(view);
				}
			}
			// if no state names are defined show view (define unused state name to exclude)
			else if (state==null || state=="") {
				showViews.push(view);
			}
		}

		if (showViews.length) {
			var viewChangingEvent = new Event(self.VIEW_CHANGING);
			viewChangingEvent.showViews = showViews;
			viewChangingEvent.hideViews = hideViews;
			window.dispatchEvent(viewChangingEvent);

			if (viewChangingEvent.defaultPrevented==false) {
				for (var index = 0; index < hideViews.length; index++) {
					var view = hideViews[index];
					self.hideElement(view);
				}

				for (var index = 0; index < showViews.length; index++) {
					var view = showViews[index];

					if (index==showViews.length-1) {
						self.clearDisplay(view);
						self.setViewOptions(view);
						self.setViewVariables(view);
						self.centerView(view);
						self.updateURLState(view, state);
					}
				}
			}

			var viewChangeEvent = new Event(self.VIEW_CHANGE);
			viewChangeEvent.showViews = showViews;
			viewChangeEvent.hideViews = hideViews;
			window.dispatchEvent(viewChangeEvent);
		}

	}

	self.clearDisplay = function(view) {
		view.style.setProperty("display", null);
	}

	self.hashChangeHandler = function(event) {
		var fragment = self.getHashFragment();
		var view = self.getViewById(fragment);

		if (self.showByMediaQuery) {
			var stateName = fragment;

			if (stateName==null || stateName=="") {
				var initialView = self.getInitialView();
				stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
			}
			self.showMediaQueryViewsByState(stateName);
		}
		else {
			if (view) {
				self.hideViews();
				self.showView(view);
				self.setViewVariables(view);
				self.updateViewLabel();

				window.dispatchEvent(new Event(self.VIEW_CHANGE));
			}
			else {
				window.dispatchEvent(new Event(self.VIEW_NOT_FOUND));
			}
		}
	}

	self.popStateHandler = function(event) {
		var state = event.state;
		var fragment = state ? state.name : window.location.hash;
		var view = self.getViewById(fragment);

		if (view) {
			self.hideViews();
			self.showView(view);
			self.updateViewLabel();
		}
		else {
			window.dispatchEvent(new Event(self.VIEW_NOT_FOUND));
		}
	}

	self.doubleClickHandler = function(event) {
		var view = self.getVisibleView();
		var scaleValue = view ? self.getViewScaleValue(view) : 1;
		var scaleNeededToFit = view ? self.getViewFitToViewportScale(view) : 1;
		var scaleNeededToFitWidth = view ? self.getViewFitToViewportWidthScale(view) : 1;
		var scaleNeededToFitHeight = view ? self.getViewFitToViewportHeightScale(view) : 1;
		var scaleToFitType = self.scaleToFitType;

		// Three scenarios
		// - scale to fit on double click
		// - set scale to actual size on double click
		// - switch between scale to fit and actual page size

		if (scaleToFitType=="width") {
			scaleNeededToFit = scaleNeededToFitWidth;
		}
		else if (scaleToFitType=="height") {
			scaleNeededToFit = scaleNeededToFitHeight;
		}

		// if scale and actual size enabled then switch between
		if (self.scaleToFitOnDoubleClick && self.actualSizeOnDoubleClick) {
			var isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME);
			var isScaled = false;

			// if scale is not 1 then view needs scaling
			if (scaleNeededToFit!=1) {

				// if current scale is at 1 it is at actual size
				// scale it to fit
				if (scaleValue==1) {
					self.scaleViewToFit(view);
					isScaled = true;
				}
				else {
					// scale is not at 1 so switch to actual size
					self.scaleViewToActualSize(view);
					isScaled = false;
				}
			}
			else {
				// view is smaller than viewport
				// so scale to fit() is scale actual size
				// actual size and scaled size are the same
				// but call scale to fit to retain centering
				self.scaleViewToFit(view);
				isScaled = false;
			}

			view.setAttributeNS(null, self.SIZE_STATE_NAME, isScaled+"");
			isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME);
		}
		else if (self.scaleToFitOnDoubleClick) {
			self.scaleViewToFit(view);
		}
		else if (self.actualSizeOnDoubleClick) {
			self.scaleViewToActualSize(view);
		}

	}

	self.scaleViewToFit = function(view) {
		return self.setViewScaleValue(view, true);
	}

	self.scaleViewToActualSize = function(view) {
		self.setViewScaleValue(view, false, 1);
	}

	self.onloadHandler = function(event) {
		self.initialize();
	}

	self.setElementHTML = function(id, value) {
		var element = self.getElement(id);
		element.innerHTML = value;
	}

	self.getStackArray = function(error) {
		var value = "";

		if (error==null) {
		  try {
			 error = new Error("Stack");
		  }
		  catch (e) {

		  }
		}

		if ("stack" in error) {
		  value = error.stack;
		  var methods = value.split(/\n/g);

		  var newArray = methods ? methods.map(function (value, index, array) {
			 value = value.replace(/\@.*/,"");
			 return value;
		  }) : null;

		  if (newArray && newArray[0].includes("getStackTrace")) {
			 newArray.shift();
		  }
		  if (newArray && newArray[0].includes("getStackArray")) {
			 newArray.shift();
		  }
		  if (newArray && newArray[0]=="") {
			 newArray.shift();
		  }

			return newArray;
		}

		return null;
	}

	self.log = function(value) {
		console.log.apply(this, [value]);
	}

	// initialize on load
	// sometimes the body size is 0 so we call this now and again later
	window.addEventListener("load", self.onloadHandler);
	window.document.addEventListener("DOMContentLoaded", self.onloadHandler);
}

window.application = new Application();

</script>
</head>

<body>

<div id="CBC">
	<div id="Branding">
		<svg class="Lower_Rectangle">
			<rect id="Lower_Rectangle" rx="0" ry="0" x="0" y="0" width="595" height="9">
			</rect>
		</svg>
		<svg class="Brandind_Rectangle">
			<rect id="Brandind_Rectangle" rx="0" ry="0" x="0" y="0" width="595" height="93">
			</rect>
		</svg>
		<svg class="Address" viewBox="148.708 789.612 298.86 13.16">
			<path id="Address" d="M 156.6880035400391 790.2000122070313 L 156.6880035400391 800 L 155.9739990234375 800 L 155.9739990234375 795.3380126953125 L 149.4219970703125 795.3380126953125 L 149.4219970703125 800 L 148.7079925537109 800 L 148.7079925537109 790.2000122070313 L 149.4219970703125 790.2000122070313 L 149.4219970703125 794.7080078125 L 155.9739990234375 794.7080078125 L 155.9739990234375 790.2000122070313 L 156.6880035400391 790.2000122070313 Z M 162.7420043945313 800.0560302734375 C 162.052001953125 800.0560302734375 161.4259948730469 799.89697265625 160.8659973144531 799.5800170898438 C 160.3159942626953 799.2630004882813 159.8820037841797 798.823974609375 159.5639953613281 798.2639770507813 C 159.2469940185547 797.6950073242188 159.0879974365234 797.0549926757813 159.0879974365234 796.3460083007813 C 159.0879974365234 795.6370239257813 159.2469940185547 795.0020141601563 159.5639953613281 794.4420166015625 C 159.8820037841797 793.8729858398438 160.3159942626953 793.4290161132813 160.8659973144531 793.1119995117188 C 161.4259948730469 792.7949829101563 162.052001953125 792.635986328125 162.7420043945313 792.635986328125 C 163.4329986572266 792.635986328125 164.0540008544922 792.7949829101563 164.60400390625 793.1119995117188 C 165.1640014648438 793.4290161132813 165.6029968261719 793.8729858398438 165.9199981689453 794.4420166015625 C 166.2380065917969 795.0020141601563 166.39599609375 795.6370239257813 166.39599609375 796.3460083007813 C 166.39599609375 797.0549926757813 166.2380065917969 797.6950073242188 165.9199981689453 798.2639770507813 C 165.6029968261719 798.823974609375 165.1640014648438 799.2630004882813 164.60400390625 799.5800170898438 C 164.0540008544922 799.89697265625 163.4329986572266 800.0560302734375 162.7420043945313 800.0560302734375 Z M 162.7420043945313 799.426025390625 C 163.302001953125 799.426025390625 163.802001953125 799.2949829101563 164.2400054931641 799.0339965820313 C 164.6880035400391 798.7730102539063 165.0379943847656 798.4089965820313 165.2899932861328 797.9420166015625 C 165.552001953125 797.4749755859375 165.6820068359375 796.9429931640625 165.6820068359375 796.3460083007813 C 165.6820068359375 795.7490234375 165.552001953125 795.2169799804688 165.2899932861328 794.75 C 165.0379943847656 794.2830200195313 164.6880035400391 793.9190063476563 164.2400054931641 793.6580200195313 C 163.802001953125 793.39697265625 163.302001953125 793.2659912109375 162.7420043945313 793.2659912109375 C 162.1820068359375 793.2659912109375 161.6779937744141 793.39697265625 161.2299957275391 793.6580200195313 C 160.7920074462891 793.9190063476563 160.4420013427734 794.2830200195313 160.1799926757813 794.75 C 159.9279937744141 795.2169799804688 159.802001953125 795.7490234375 159.802001953125 796.3460083007813 C 159.802001953125 796.9429931640625 159.9279937744141 797.4749755859375 160.1799926757813 797.9420166015625 C 160.4420013427734 798.4089965820313 160.7920074462891 798.7730102539063 161.2299957275391 799.0339965820313 C 161.6779937744141 799.2949829101563 162.1820068359375 799.426025390625 162.7420043945313 799.426025390625 Z M 170.4160003662109 800.0560302734375 C 169.8280029296875 800.0560302734375 169.2680053710938 799.9669799804688 168.7359924316406 799.7899780273438 C 168.2039947509766 799.6129760742188 167.7890014648438 799.3889770507813 167.4900054931641 799.1179809570313 L 167.8119964599609 798.5579833984375 C 168.1109924316406 798.8099975585938 168.4929962158203 799.02001953125 168.9600067138672 799.18798828125 C 169.4360046386719 799.3560180664063 169.9309997558594 799.4400024414063 170.4440002441406 799.4400024414063 C 171.1809997558594 799.4400024414063 171.7230072021484 799.3189697265625 172.0679931640625 799.0759887695313 C 172.4230041503906 798.8330078125 172.6000061035156 798.4970092773438 172.6000061035156 798.0679931640625 C 172.6000061035156 797.760009765625 172.5019989013672 797.5170288085938 172.3059997558594 797.3400268554688 C 172.1190032958984 797.1630249023438 171.8860015869141 797.031982421875 171.6060028076172 796.947998046875 C 171.3260040283203 796.864013671875 170.9389953613281 796.7750244140625 170.4440002441406 796.6820068359375 C 169.8650054931641 796.5789794921875 169.3990020751953 796.4669799804688 169.0440063476563 796.3460083007813 C 168.6889953613281 796.2249755859375 168.3860015869141 796.0289916992188 168.1340026855469 795.7579956054688 C 167.8820037841797 795.4869995117188 167.7559967041016 795.114013671875 167.7559967041016 794.6380004882813 C 167.7559967041016 794.0590209960938 167.9940032958984 793.5830078125 168.4700012207031 793.2100219726563 C 168.9550018310547 792.8270263671875 169.6410064697266 792.635986328125 170.5279998779297 792.635986328125 C 170.9949951171875 792.635986328125 171.4570007324219 792.7009887695313 171.9140014648438 792.8319702148438 C 172.3710021972656 792.9630126953125 172.7449951171875 793.135009765625 173.0339965820313 793.3499755859375 L 172.7120056152344 793.9099731445313 C 172.4129943847656 793.6950073242188 172.072998046875 793.531982421875 171.6900024414063 793.4199829101563 C 171.3070068359375 793.3079833984375 170.9149932861328 793.2520141601563 170.5140075683594 793.2520141601563 C 169.8329925537109 793.2520141601563 169.3190002441406 793.3779907226563 168.9739990234375 793.6300048828125 C 168.6289978027344 793.8820190429688 168.4559936523438 794.2130126953125 168.4559936523438 794.6240234375 C 168.4559936523438 794.9509887695313 168.5540008544922 795.2069702148438 168.75 795.3939819335938 C 168.9459991455078 795.5709838867188 169.1840057373047 795.7069702148438 169.4640045166016 795.7999877929688 C 169.7530059814453 795.8839721679688 170.1549987792969 795.9769897460938 170.6679992675781 796.0800170898438 C 171.2369995117188 796.1829833984375 171.6950073242188 796.2949829101563 172.0399932861328 796.416015625 C 172.3950042724609 796.5280151367188 172.6929931640625 796.7150268554688 172.9360046386719 796.9760131835938 C 173.1790008544922 797.2369995117188 173.3000030517578 797.5969848632813 173.3000030517578 798.0540161132813 C 173.3000030517578 798.6610107421875 173.0480041503906 799.14599609375 172.5440063476563 799.510009765625 C 172.0399932861328 799.8740234375 171.3309936523438 800.0560302734375 170.4160003662109 800.0560302734375 Z M 178.9219970703125 792.635986328125 C 179.6029968261719 792.635986328125 180.218994140625 792.7949829101563 180.7700042724609 793.1119995117188 C 181.3200073242188 793.4290161132813 181.75 793.8679809570313 182.0579986572266 794.427978515625 C 182.375 794.9879760742188 182.5339965820313 795.6270141601563 182.5339965820313 796.3460083007813 C 182.5339965820313 797.0650024414063 182.375 797.708984375 182.0579986572266 798.2780151367188 C 181.75 798.8380126953125 181.3200073242188 799.2769775390625 180.7700042724609 799.593994140625 C 180.218994140625 799.9019775390625 179.6029968261719 800.0560302734375 178.9219970703125 800.0560302734375 C 178.2779998779297 800.0560302734375 177.6940002441406 799.906982421875 177.1719970703125 799.6079711914063 C 176.6490020751953 799.2999877929688 176.2429962158203 798.875 175.9539947509766 798.333984375 L 175.9539947509766 802.7160034179688 L 175.2539978027344 802.7160034179688 L 175.2539978027344 792.6920166015625 L 175.9259948730469 792.6920166015625 L 175.9259948730469 794.4140014648438 C 176.2149963378906 793.85400390625 176.6210021972656 793.4199829101563 177.1439971923828 793.1119995117188 C 177.6759948730469 792.7949829101563 178.2680053710938 792.635986328125 178.9219970703125 792.635986328125 Z M 178.8800048828125 799.426025390625 C 179.4400024414063 799.426025390625 179.9440002441406 799.2949829101563 180.3919982910156 799.0339965820313 C 180.8399963378906 798.7730102539063 181.1900024414063 798.4089965820313 181.4420013427734 797.9420166015625 C 181.7030029296875 797.4749755859375 181.8339996337891 796.9429931640625 181.8339996337891 796.3460083007813 C 181.8339996337891 795.7490234375 181.7030029296875 795.2169799804688 181.4420013427734 794.75 C 181.1900024414063 794.2830200195313 180.8399963378906 793.9190063476563 180.3919982910156 793.6580200195313 C 179.9440002441406 793.39697265625 179.4400024414063 793.2659912109375 178.8800048828125 793.2659912109375 C 178.3200073242188 793.2659912109375 177.8159942626953 793.39697265625 177.3679962158203 793.6580200195313 C 176.9290008544922 793.9190063476563 176.5789947509766 794.2830200195313 176.3179931640625 794.75 C 176.0659942626953 795.2169799804688 175.9400024414063 795.7490234375 175.9400024414063 796.3460083007813 C 175.9400024414063 796.9429931640625 176.0659942626953 797.4749755859375 176.3179931640625 797.9420166015625 C 176.5789947509766 798.4089965820313 176.9290008544922 798.7730102539063 177.3679962158203 799.0339965820313 C 177.8159942626953 799.2949829101563 178.3200073242188 799.426025390625 178.8800048828125 799.426025390625 Z M 184.7010040283203 792.6920166015625 L 185.4010009765625 792.6920166015625 L 185.4010009765625 800 L 184.7010040283203 800 L 184.7010040283203 792.6920166015625 Z M 185.0509948730469 790.9140014648438 C 184.8919982910156 790.9140014648438 184.7570037841797 790.8629760742188 184.6450042724609 790.760009765625 C 184.5330047607422 790.6480102539063 184.4770050048828 790.5130004882813 184.4770050048828 790.35400390625 C 184.4770050048828 790.1950073242188 184.5330047607422 790.0599975585938 184.6450042724609 789.947998046875 C 184.7570037841797 789.8359985351563 184.8919982910156 789.780029296875 185.0509948730469 789.780029296875 C 185.2089996337891 789.780029296875 185.3450012207031 789.8359985351563 185.4570007324219 789.947998046875 C 185.5690002441406 790.051025390625 185.625 790.1810302734375 185.625 790.3400268554688 C 185.625 790.4990234375 185.5690002441406 790.6339721679688 185.4570007324219 790.7459716796875 C 185.3450012207031 790.8579711914063 185.2089996337891 790.9140014648438 185.0509948730469 790.9140014648438 Z M 191.9770050048828 799.5380249023438 C 191.8000030517578 799.7059936523438 191.5760040283203 799.8369750976563 191.3049926757813 799.9299926757813 C 191.0440063476563 800.0139770507813 190.7689971923828 800.0560302734375 190.47900390625 800.0560302734375 C 189.8450012207031 800.0560302734375 189.3549957275391 799.8829956054688 189.0090026855469 799.5380249023438 C 188.6640014648438 799.1829833984375 188.4909973144531 798.6929931640625 188.4909973144531 798.0679931640625 L 188.4909973144531 793.2940063476563 L 187.1470031738281 793.2940063476563 L 187.1470031738281 792.6920166015625 L 188.4909973144531 792.6920166015625 L 188.4909973144531 791.0960083007813 L 189.1909942626953 791.0960083007813 L 189.1909942626953 792.6920166015625 L 191.5149993896484 792.6920166015625 L 191.5149993896484 793.2940063476563 L 189.1909942626953 793.2940063476563 L 189.1909942626953 797.9979858398438 C 189.1909942626953 798.4739990234375 189.3029937744141 798.8380126953125 189.5269927978516 799.0900268554688 C 189.7610015869141 799.3330078125 190.1009979248047 799.4539794921875 190.5489959716797 799.4539794921875 C 191.0070037841797 799.4539794921875 191.3849945068359 799.3189697265625 191.6829986572266 799.0479736328125 L 191.9770050048828 799.5380249023438 Z M 196.3930053710938 792.635986328125 C 197.2989959716797 792.635986328125 197.9940032958984 792.8690185546875 198.47900390625 793.3359985351563 C 198.9649963378906 793.7930297851563 199.2070007324219 794.469970703125 199.2070007324219 795.3660278320313 L 199.2070007324219 800 L 198.5350036621094 800 L 198.5350036621094 798.697998046875 C 198.302001953125 799.1270141601563 197.9609985351563 799.4630126953125 197.5130004882813 799.7059936523438 C 197.0650024414063 799.9390258789063 196.5290069580078 800.0560302734375 195.9029998779297 800.0560302734375 C 195.0910034179688 800.0560302734375 194.4470062255859 799.864990234375 193.9709930419922 799.4819946289063 C 193.5050048828125 799.0989990234375 193.27099609375 798.594970703125 193.27099609375 797.969970703125 C 193.27099609375 797.3629760742188 193.4859924316406 796.8729858398438 193.9149932861328 796.5 C 194.35400390625 796.1170043945313 195.0489959716797 795.926025390625 196.0010070800781 795.926025390625 L 198.5070037841797 795.926025390625 L 198.5070037841797 795.3380126953125 C 198.5070037841797 794.656982421875 198.3209991455078 794.1389770507813 197.9470062255859 793.7839965820313 C 197.5829925537109 793.4290161132813 197.0469970703125 793.2520141601563 196.3370056152344 793.2520141601563 C 195.8520050048828 793.2520141601563 195.3849945068359 793.3359985351563 194.9369964599609 793.5040283203125 C 194.4989929199219 793.6719970703125 194.125 793.89599609375 193.8170013427734 794.176025390625 L 193.4669952392578 793.6719970703125 C 193.8309936523438 793.344970703125 194.2700042724609 793.093017578125 194.7830047607422 792.916015625 C 195.2969970703125 792.72900390625 195.8329925537109 792.635986328125 196.3930053710938 792.635986328125 Z M 196.0010070800781 799.4819946289063 C 196.6080017089844 799.4819946289063 197.1210021972656 799.3419799804688 197.5410003662109 799.06201171875 C 197.9709930419922 798.781982421875 198.2929992675781 798.3759765625 198.5070037841797 797.843994140625 L 198.5070037841797 796.4719848632813 L 196.0149993896484 796.4719848632813 C 195.2969970703125 796.4719848632813 194.7740020751953 796.60302734375 194.4470062255859 796.864013671875 C 194.1300048828125 797.125 193.9709930419922 797.4849853515625 193.9709930419922 797.9420166015625 C 193.9709930419922 798.4180297851563 194.1490020751953 798.7960205078125 194.5030059814453 799.0759887695313 C 194.8580017089844 799.3469848632813 195.3569946289063 799.4819946289063 196.0010070800781 799.4819946289063 Z M 202.0910034179688 789.6119995117188 L 202.7910003662109 789.6119995117188 L 202.7910003662109 800 L 202.0910034179688 800 L 202.0910034179688 789.6119995117188 Z M 213.7059936523438 800.0700073242188 C 212.7440032958984 800.0700073242188 211.8760070800781 799.85498046875 211.1020050048828 799.426025390625 C 210.3359985351563 798.9970092773438 209.7299957275391 798.4039916992188 209.2819976806641 797.6480102539063 C 208.8430023193359 796.8920288085938 208.6239929199219 796.0430297851563 208.6239929199219 795.0999755859375 C 208.6239929199219 794.156982421875 208.8430023193359 793.3079833984375 209.2819976806641 792.552001953125 C 209.7299957275391 791.7960205078125 210.3359985351563 791.2030029296875 211.1020050048828 790.7739868164063 C 211.8760070800781 790.344970703125 212.7440032958984 790.1300048828125 213.7059936523438 790.1300048828125 C 214.4149932861328 790.1300048828125 215.0679931640625 790.2470092773438 215.6660003662109 790.47998046875 C 216.2630004882813 790.7039794921875 216.7720031738281 791.0399780273438 217.1920013427734 791.4879760742188 L 216.7440032958984 791.9500122070313 C 215.9600067138672 791.1749877929688 214.9559936523438 790.7880249023438 213.7339935302734 790.7880249023438 C 212.9120025634766 790.7880249023438 212.1660003662109 790.9749755859375 211.4940032958984 791.3480224609375 C 210.8220062255859 791.7210083007813 210.2940063476563 792.239013671875 209.9120025634766 792.9019775390625 C 209.5290069580078 793.5549926757813 209.3379974365234 794.2880249023438 209.3379974365234 795.0999755859375 C 209.3379974365234 795.9119873046875 209.5290069580078 796.6489868164063 209.9120025634766 797.31201171875 C 210.2940063476563 797.9650268554688 210.8220062255859 798.47900390625 211.4940032958984 798.8519897460938 C 212.1660003662109 799.2249755859375 212.9120025634766 799.4119873046875 213.7339935302734 799.4119873046875 C 214.9470062255859 799.4119873046875 215.9499969482422 799.02001953125 216.7440032958984 798.2360229492188 L 217.1920013427734 798.697998046875 C 216.7720031738281 799.14599609375 216.2579956054688 799.4869995117188 215.6519927978516 799.719970703125 C 215.0540008544922 799.9530029296875 214.406005859375 800.0700073242188 213.7059936523438 800.0700073242188 Z M 222.9290008544922 792.635986328125 C 223.843994140625 792.635986328125 224.5670013427734 792.9019775390625 225.0989990234375 793.4340209960938 C 225.6309967041016 793.9660034179688 225.8970031738281 794.7310180664063 225.8970031738281 795.72998046875 L 225.8970031738281 800 L 225.1970062255859 800 L 225.1970062255859 795.7860107421875 C 225.1970062255859 794.9650268554688 224.9869995117188 794.3389892578125 224.5670013427734 793.9099731445313 C 224.156005859375 793.4810180664063 223.5780029296875 793.2659912109375 222.8309936523438 793.2659912109375 C 221.9720001220703 793.2659912109375 221.2960052490234 793.5230102539063 220.8009948730469 794.0360107421875 C 220.3059997558594 794.5490112304688 220.0590057373047 795.239990234375 220.0590057373047 796.1079711914063 L 220.0590057373047 800 L 219.3589935302734 800 L 219.3589935302734 789.6119995117188 L 220.0590057373047 789.6119995117188 L 220.0590057373047 794.218017578125 C 220.3110046386719 793.7139892578125 220.6840057373047 793.3270263671875 221.1790008544922 793.0560302734375 C 221.6739959716797 792.7760009765625 222.2570037841797 792.635986328125 222.9290008544922 792.635986328125 Z M 231.6490020751953 800.0560302734375 C 230.9579925537109 800.0560302734375 230.3329925537109 799.89697265625 229.7729949951172 799.5800170898438 C 229.2220001220703 799.2630004882813 228.7879943847656 798.823974609375 228.4709930419922 798.2639770507813 C 228.1529998779297 797.6950073242188 227.9949951171875 797.0549926757813 227.9949951171875 796.3460083007813 C 227.9949951171875 795.6370239257813 228.1529998779297 795.0020141601563 228.4709930419922 794.4420166015625 C 228.7879943847656 793.8729858398438 229.2220001220703 793.4290161132813 229.7729949951172 793.1119995117188 C 230.3329925537109 792.7949829101563 230.9579925537109 792.635986328125 231.6490020751953 792.635986328125 C 232.3390045166016 792.635986328125 232.9600067138672 792.7949829101563 233.5110015869141 793.1119995117188 C 234.0709991455078 793.4290161132813 234.5090026855469 793.8729858398438 234.8269958496094 794.4420166015625 C 235.1439971923828 795.0020141601563 235.3029937744141 795.6370239257813 235.3029937744141 796.3460083007813 C 235.3029937744141 797.0549926757813 235.1439971923828 797.6950073242188 234.8269958496094 798.2639770507813 C 234.5090026855469 798.823974609375 234.0709991455078 799.2630004882813 233.5110015869141 799.5800170898438 C 232.9600067138672 799.89697265625 232.3390045166016 800.0560302734375 231.6490020751953 800.0560302734375 Z M 231.6490020751953 799.426025390625 C 232.2089996337891 799.426025390625 232.7079925537109 799.2949829101563 233.1470031738281 799.0339965820313 C 233.5950012207031 798.7730102539063 233.9450073242188 798.4089965820313 234.1970062255859 797.9420166015625 C 234.4579925537109 797.4749755859375 234.5890045166016 796.9429931640625 234.5890045166016 796.3460083007813 C 234.5890045166016 795.7490234375 234.4579925537109 795.2169799804688 234.1970062255859 794.75 C 233.9450073242188 794.2830200195313 233.5950012207031 793.9190063476563 233.1470031738281 793.6580200195313 C 232.7079925537109 793.39697265625 232.2089996337891 793.2659912109375 231.6490020751953 793.2659912109375 C 231.0890045166016 793.2659912109375 230.5850067138672 793.39697265625 230.1369934082031 793.6580200195313 C 229.697998046875 793.9190063476563 229.3480072021484 794.2830200195313 229.0870056152344 794.75 C 228.8350067138672 795.2169799804688 228.7089996337891 795.7490234375 228.7089996337891 796.3460083007813 C 228.7089996337891 796.9429931640625 228.8350067138672 797.4749755859375 229.0870056152344 797.9420166015625 C 229.3480072021484 798.4089965820313 229.697998046875 798.7730102539063 230.1369934082031 799.0339965820313 C 230.5850067138672 799.2949829101563 231.0890045166016 799.426025390625 231.6490020751953 799.426025390625 Z M 247.7129974365234 792.6920166015625 L 244.9409942626953 800 L 244.2830047607422 800 L 241.8190002441406 793.6580200195313 L 239.3410034179688 800 L 238.6970062255859 800 L 235.9250030517578 792.6920166015625 L 236.5970001220703 792.6920166015625 L 239.0330047607422 799.2160034179688 L 241.5249938964844 792.6920166015625 L 242.1269989013672 792.6920166015625 L 244.6049957275391 799.2020263671875 L 247.0690002441406 792.6920166015625 L 247.7129974365234 792.6920166015625 Z M 251.9450073242188 796.093994140625 L 250.0410003662109 797.8300170898438 L 250.0410003662109 800 L 249.3410034179688 800 L 249.3410034179688 789.6119995117188 L 250.0410003662109 789.6119995117188 L 250.0410003662109 796.9619750976563 L 254.7169952392578 792.6920166015625 L 255.6130065917969 792.6920166015625 L 252.4629974365234 795.64599609375 L 255.9210052490234 800 L 255.0529937744141 800 L 251.9450073242188 796.093994140625 Z M 257.625 798.8660278320313 C 257.7929992675781 798.8660278320313 257.9330139160156 798.927001953125 258.0450134277344 799.0479736328125 C 258.1570129394531 799.1599731445313 258.2130126953125 799.2949829101563 258.2130126953125 799.4539794921875 C 258.2130126953125 799.5469970703125 258.1990051269531 799.64501953125 258.1709899902344 799.7479858398438 C 258.1520080566406 799.8510131835938 258.1239929199219 799.9669799804688 258.0870056152344 800.0980224609375 L 257.5409851074219 802.0020141601563 L 257.0369873046875 802.0020141601563 L 257.4989929199219 800.0280151367188 C 257.3590087890625 799.9910278320313 257.2470092773438 799.9249877929688 257.1629943847656 799.8319702148438 C 257.0790100097656 799.72900390625 257.0369873046875 799.60302734375 257.0369873046875 799.4539794921875 C 257.0369873046875 799.2860107421875 257.0929870605469 799.14599609375 257.2049865722656 799.0339965820313 C 257.3169860839844 798.9219970703125 257.4570007324219 798.8660278320313 257.625 798.8660278320313 Z M 275.9070129394531 790.2000122070313 L 275.9070129394531 800 L 275.3190002441406 800 L 268.6409912109375 791.4879760742188 L 268.6409912109375 800 L 267.927001953125 800 L 267.927001953125 790.2000122070313 L 268.5289916992188 790.2000122070313 L 275.1929931640625 798.7119750976563 L 275.1929931640625 790.2000122070313 L 275.9070129394531 790.2000122070313 Z M 281.5690002441406 792.635986328125 C 282.4739990234375 792.635986328125 283.1700134277344 792.8690185546875 283.6549987792969 793.3359985351563 C 284.1400146484375 793.7930297851563 284.3829956054688 794.469970703125 284.3829956054688 795.3660278320313 L 284.3829956054688 800 L 283.7109985351563 800 L 283.7109985351563 798.697998046875 C 283.4779968261719 799.1270141601563 283.1369934082031 799.4630126953125 282.6889953613281 799.7059936523438 C 282.2409973144531 799.9390258789063 281.7040100097656 800.0560302734375 281.0790100097656 800.0560302734375 C 280.2669982910156 800.0560302734375 279.6229858398438 799.864990234375 279.1470031738281 799.4819946289063 C 278.6799926757813 799.0989990234375 278.4469909667969 798.594970703125 278.4469909667969 797.969970703125 C 278.4469909667969 797.3629760742188 278.6619873046875 796.8729858398438 279.0910034179688 796.5 C 279.5299987792969 796.1170043945313 280.2250061035156 795.926025390625 281.177001953125 795.926025390625 L 283.6830139160156 795.926025390625 L 283.6830139160156 795.3380126953125 C 283.6830139160156 794.656982421875 283.4960021972656 794.1389770507813 283.1229858398438 793.7839965820313 C 282.7590026855469 793.4290161132813 282.2219848632813 793.2520141601563 281.5130004882813 793.2520141601563 C 281.0280151367188 793.2520141601563 280.5610046386719 793.3359985351563 280.1130065917969 793.5040283203125 C 279.6740112304688 793.6719970703125 279.3009948730469 793.89599609375 278.9930114746094 794.176025390625 L 278.6430053710938 793.6719970703125 C 279.0069885253906 793.344970703125 279.4460144042969 793.093017578125 279.9590148925781 792.916015625 C 280.4719848632813 792.72900390625 281.0090026855469 792.635986328125 281.5690002441406 792.635986328125 Z M 281.177001953125 799.4819946289063 C 281.7839965820313 799.4819946289063 282.2969970703125 799.3419799804688 282.7170104980469 799.06201171875 C 283.14599609375 798.781982421875 283.4679870605469 798.3759765625 283.6830139160156 797.843994140625 L 283.6830139160156 796.4719848632813 L 281.1910095214844 796.4719848632813 C 280.4719848632813 796.4719848632813 279.9500122070313 796.60302734375 279.6229858398438 796.864013671875 C 279.3059997558594 797.125 279.1470031738281 797.4849853515625 279.1470031738281 797.9420166015625 C 279.1470031738281 798.4180297851563 279.3240051269531 798.7960205078125 279.6789855957031 799.0759887695313 C 280.0339965820313 799.3469848632813 280.5329895019531 799.4819946289063 281.177001953125 799.4819946289063 Z M 293.8609924316406 792.6920166015625 L 293.8609924316406 799.2160034179688 C 293.8609924316406 800.4290161132813 293.5669860839844 801.3250122070313 292.97900390625 801.9039916992188 C 292.3909912109375 802.4829711914063 291.5039978027344 802.77197265625 290.3190002441406 802.77197265625 C 289.6470031738281 802.77197265625 289.0119934082031 802.6690063476563 288.4150085449219 802.4639892578125 C 287.8179931640625 802.2589721679688 287.3370056152344 801.9739990234375 286.9729919433594 801.6099853515625 L 287.3510131835938 801.0780029296875 C 287.7149963378906 801.4140014648438 288.1539916992188 801.6749877929688 288.6669921875 801.8619995117188 C 289.1799926757813 802.0490112304688 289.7260131835938 802.1420288085938 290.3049926757813 802.1420288085938 C 291.2760009765625 802.1420288085938 291.9939880371094 801.9089965820313 292.4609985351563 801.4420166015625 C 292.9280090332031 800.9849853515625 293.1610107421875 800.27099609375 293.1610107421875 799.2999877929688 L 293.1610107421875 798.0679931640625 C 292.8619995117188 798.5999755859375 292.4469909667969 799.010986328125 291.9150085449219 799.2999877929688 C 291.3829956054688 799.5889892578125 290.7860107421875 799.7340087890625 290.1229858398438 799.7340087890625 C 289.4419860839844 799.7340087890625 288.8210144042969 799.5850219726563 288.260986328125 799.2860107421875 C 287.7099914550781 798.97802734375 287.2760009765625 798.552978515625 286.9590148925781 798.0120239257813 C 286.6419982910156 797.4710083007813 286.4830017089844 796.8590087890625 286.4830017089844 796.177978515625 C 286.4830017089844 795.4970092773438 286.6419982910156 794.885009765625 286.9590148925781 794.343994140625 C 287.2760009765625 793.802978515625 287.7099914550781 793.3829956054688 288.260986328125 793.083984375 C 288.8210144042969 792.7849731445313 289.4419860839844 792.635986328125 290.1229858398438 792.635986328125 C 290.7950134277344 792.635986328125 291.4020080566406 792.7849731445313 291.9429931640625 793.083984375 C 292.4840087890625 793.3829956054688 292.8999938964844 793.802978515625 293.1889953613281 794.343994140625 L 293.1889953613281 792.6920166015625 L 293.8609924316406 792.6920166015625 Z M 290.1789855957031 799.10400390625 C 290.7479858398438 799.10400390625 291.2619934082031 798.9829711914063 291.718994140625 798.739990234375 C 292.1759948730469 798.4879760742188 292.531005859375 798.1430053710938 292.7829895019531 797.7039794921875 C 293.0440063476563 797.2559814453125 293.1749877929688 796.7470092773438 293.1749877929688 796.177978515625 C 293.1749877929688 795.6090087890625 293.0440063476563 795.10498046875 292.7829895019531 794.666015625 C 292.531005859375 794.2269897460938 292.1759948730469 793.8870239257813 291.718994140625 793.6439819335938 C 291.2619934082031 793.3920288085938 290.7479858398438 793.2659912109375 290.1789855957031 793.2659912109375 C 289.6099853515625 793.2659912109375 289.0960083007813 793.3920288085938 288.6390075683594 793.6439819335938 C 288.1910095214844 793.8870239257813 287.8359985351563 794.2269897460938 287.5750122070313 794.666015625 C 287.322998046875 795.10498046875 287.1969909667969 795.6090087890625 287.1969909667969 796.177978515625 C 287.1969909667969 796.7470092773438 287.322998046875 797.2559814453125 287.5750122070313 797.7039794921875 C 287.8359985351563 798.1430053710938 288.1910095214844 798.4879760742188 288.6390075683594 798.739990234375 C 289.0960083007813 798.9829711914063 289.6099853515625 799.10400390625 290.1789855957031 799.10400390625 Z M 299.6799926757813 800.0560302734375 C 298.989013671875 800.0560302734375 298.364013671875 799.89697265625 297.8039855957031 799.5800170898438 C 297.2529907226563 799.2630004882813 296.8190002441406 798.823974609375 296.5020141601563 798.2639770507813 C 296.1849975585938 797.6950073242188 296.0260009765625 797.0549926757813 296.0260009765625 796.3460083007813 C 296.0260009765625 795.6370239257813 296.1849975585938 795.0020141601563 296.5020141601563 794.4420166015625 C 296.8190002441406 793.8729858398438 297.2529907226563 793.4290161132813 297.8039855957031 793.1119995117188 C 298.364013671875 792.7949829101563 298.989013671875 792.635986328125 299.6799926757813 792.635986328125 C 300.3710021972656 792.635986328125 300.9909973144531 792.7949829101563 301.5419921875 793.1119995117188 C 302.1019897460938 793.4290161132813 302.5409851074219 793.8729858398438 302.8580017089844 794.4420166015625 C 303.1749877929688 795.0020141601563 303.3340148925781 795.6370239257813 303.3340148925781 796.3460083007813 C 303.3340148925781 797.0549926757813 303.1749877929688 797.6950073242188 302.8580017089844 798.2639770507813 C 302.5409851074219 798.823974609375 302.1019897460938 799.2630004882813 301.5419921875 799.5800170898438 C 300.9909973144531 799.89697265625 300.3710021972656 800.0560302734375 299.6799926757813 800.0560302734375 Z M 299.6799926757813 799.426025390625 C 300.239990234375 799.426025390625 300.739013671875 799.2949829101563 301.1780090332031 799.0339965820313 C 301.6260070800781 798.7730102539063 301.9760131835938 798.4089965820313 302.2279968261719 797.9420166015625 C 302.489013671875 797.4749755859375 302.6199951171875 796.9429931640625 302.6199951171875 796.3460083007813 C 302.6199951171875 795.7490234375 302.489013671875 795.2169799804688 302.2279968261719 794.75 C 301.9760131835938 794.2830200195313 301.6260070800781 793.9190063476563 301.1780090332031 793.6580200195313 C 300.739013671875 793.39697265625 300.239990234375 793.2659912109375 299.6799926757813 793.2659912109375 C 299.1199951171875 793.2659912109375 298.6159973144531 793.39697265625 298.1679992675781 793.6580200195313 C 297.72900390625 793.9190063476563 297.3789978027344 794.2830200195313 297.1180114746094 794.75 C 296.8659973144531 795.2169799804688 296.739990234375 795.7490234375 296.739990234375 796.3460083007813 C 296.739990234375 796.9429931640625 296.8659973144531 797.4749755859375 297.1180114746094 797.9420166015625 C 297.3789978027344 798.4089965820313 297.72900390625 798.7730102539063 298.1679992675781 799.0339965820313 C 298.6159973144531 799.2949829101563 299.1199951171875 799.426025390625 299.6799926757813 799.426025390625 Z M 312.0010070800781 789.6119995117188 L 312.0010070800781 800 L 311.3150024414063 800 L 311.3150024414063 798.2780151367188 C 311.0260009765625 798.8469848632813 310.6199951171875 799.2860107421875 310.0969848632813 799.593994140625 C 309.5750122070313 799.9019775390625 308.9819946289063 800.0560302734375 308.3190002441406 800.0560302734375 C 307.6380004882813 800.0560302734375 307.0220031738281 799.89697265625 306.4710083007813 799.5800170898438 C 305.9209899902344 799.2630004882813 305.4869995117188 798.823974609375 305.1690063476563 798.2639770507813 C 304.8609924316406 797.7039794921875 304.7070007324219 797.0650024414063 304.7070007324219 796.3460083007813 C 304.7070007324219 795.6270141601563 304.8609924316406 794.9879760742188 305.1690063476563 794.427978515625 C 305.4869995117188 793.8590087890625 305.9209899902344 793.4199829101563 306.4710083007813 793.1119995117188 C 307.0220031738281 792.7949829101563 307.6380004882813 792.635986328125 308.3190002441406 792.635986328125 C 308.9729919433594 792.635986328125 309.5559997558594 792.7899780273438 310.0690002441406 793.0980224609375 C 310.5920104980469 793.406005859375 311.0029907226563 793.8350219726563 311.3009948730469 794.385986328125 L 311.3009948730469 789.6119995117188 L 312.0010070800781 789.6119995117188 Z M 308.3609924316406 799.426025390625 C 308.9209899902344 799.426025390625 309.4209899902344 799.2949829101563 309.8590087890625 799.0339965820313 C 310.3070068359375 798.7730102539063 310.6570129394531 798.4089965820313 310.9089965820313 797.9420166015625 C 311.1709899902344 797.4749755859375 311.3009948730469 796.9429931640625 311.3009948730469 796.3460083007813 C 311.3009948730469 795.7490234375 311.1709899902344 795.2169799804688 310.9089965820313 794.75 C 310.6570129394531 794.2830200195313 310.3070068359375 793.9190063476563 309.8590087890625 793.6580200195313 C 309.4209899902344 793.39697265625 308.9209899902344 793.2659912109375 308.3609924316406 793.2659912109375 C 307.8009948730469 793.2659912109375 307.2969970703125 793.39697265625 306.8489990234375 793.6580200195313 C 306.4110107421875 793.9190063476563 306.0610046386719 794.2830200195313 305.7990112304688 794.75 C 305.5469970703125 795.2169799804688 305.4209899902344 795.7490234375 305.4209899902344 796.3460083007813 C 305.4209899902344 796.9429931640625 305.5469970703125 797.4749755859375 305.7990112304688 797.9420166015625 C 306.0610046386719 798.4089965820313 306.4110107421875 798.7730102539063 306.8489990234375 799.0339965820313 C 307.2969970703125 799.2949829101563 307.8009948730469 799.426025390625 308.3609924316406 799.426025390625 Z M 318.7720031738281 790.2000122070313 L 322.6499938964844 790.2000122070313 C 323.6679992675781 790.2000122070313 324.5679931640625 790.4099731445313 325.3519897460938 790.8300170898438 C 326.14599609375 791.25 326.7619934082031 791.8330078125 327.2000122070313 792.5800170898438 C 327.6390075683594 793.3170166015625 327.8580017089844 794.156982421875 327.8580017089844 795.0999755859375 C 327.8580017089844 796.0430297851563 327.6390075683594 796.8870239257813 327.2000122070313 797.6339721679688 C 326.7619934082031 798.3709716796875 326.14599609375 798.9500122070313 325.3519897460938 799.3699951171875 C 324.5679931640625 799.7899780273438 323.6679992675781 800 322.6499938964844 800 L 318.7720031738281 800 L 318.7720031738281 790.2000122070313 Z M 322.593994140625 799.3560180664063 C 323.5 799.3560180664063 324.2980041503906 799.1790161132813 324.9880065917969 798.823974609375 C 325.6789855957031 798.4600219726563 326.2109985351563 797.9559936523438 326.5840148925781 797.31201171875 C 326.9580078125 796.6680297851563 327.1440124511719 795.9310302734375 327.1440124511719 795.0999755859375 C 327.1440124511719 794.2689819335938 326.9580078125 793.531982421875 326.5840148925781 792.8880004882813 C 326.2109985351563 792.2440185546875 325.6789855957031 791.7449951171875 324.9880065917969 791.3900146484375 C 324.2980041503906 791.0260009765625 323.5 790.843994140625 322.593994140625 790.843994140625 L 319.4859924316406 790.843994140625 L 319.4859924316406 799.3560180664063 L 322.593994140625 799.3560180664063 Z M 330.114990234375 792.6920166015625 L 330.8150024414063 792.6920166015625 L 330.8150024414063 800 L 330.114990234375 800 L 330.114990234375 792.6920166015625 Z M 330.4649963378906 790.9140014648438 C 330.3059997558594 790.9140014648438 330.1709899902344 790.8629760742188 330.0589904785156 790.760009765625 C 329.9469909667969 790.6480102539063 329.8909912109375 790.5130004882813 329.8909912109375 790.35400390625 C 329.8909912109375 790.1950073242188 329.9469909667969 790.0599975585938 330.0589904785156 789.947998046875 C 330.1709899902344 789.8359985351563 330.3059997558594 789.780029296875 330.4649963378906 789.780029296875 C 330.6239929199219 789.780029296875 330.7590026855469 789.8359985351563 330.8710021972656 789.947998046875 C 330.9830017089844 790.051025390625 331.0390014648438 790.1810302734375 331.0390014648438 790.3400268554688 C 331.0390014648438 790.4990234375 330.9830017089844 790.6339721679688 330.8710021972656 790.7459716796875 C 330.7590026855469 790.8579711914063 330.6239929199219 790.9140014648438 330.4649963378906 790.9140014648438 Z M 335.6130065917969 800.0560302734375 C 335.0249938964844 800.0560302734375 334.4649963378906 799.9669799804688 333.9330139160156 799.7899780273438 C 333.4010009765625 799.6129760742188 332.9859924316406 799.3889770507813 332.68701171875 799.1179809570313 L 333.0090026855469 798.5579833984375 C 333.3080139160156 798.8099975585938 333.6910095214844 799.02001953125 334.1570129394531 799.18798828125 C 334.6329956054688 799.3560180664063 335.1279907226563 799.4400024414063 335.6409912109375 799.4400024414063 C 336.3789978027344 799.4400024414063 336.9200134277344 799.3189697265625 337.2650146484375 799.0759887695313 C 337.6199951171875 798.8330078125 337.7969970703125 798.4970092773438 337.7969970703125 798.0679931640625 C 337.7969970703125 797.760009765625 337.6990051269531 797.5170288085938 337.5029907226563 797.3400268554688 C 337.3169860839844 797.1630249023438 337.0830078125 797.031982421875 336.8030090332031 796.947998046875 C 336.5230102539063 796.864013671875 336.135986328125 796.7750244140625 335.6409912109375 796.6820068359375 C 335.06298828125 796.5789794921875 334.5960083007813 796.4669799804688 334.2409973144531 796.3460083007813 C 333.8869934082031 796.2249755859375 333.5830078125 796.0289916992188 333.3309936523438 795.7579956054688 C 333.0790100097656 795.4869995117188 332.9530029296875 795.114013671875 332.9530029296875 794.6380004882813 C 332.9530029296875 794.0590209960938 333.1910095214844 793.5830078125 333.6669921875 793.2100219726563 C 334.1530151367188 792.8270263671875 334.8389892578125 792.635986328125 335.7250061035156 792.635986328125 C 336.1919860839844 792.635986328125 336.6539916992188 792.7009887695313 337.1109924316406 792.8319702148438 C 337.5690002441406 792.9630126953125 337.9419860839844 793.135009765625 338.2309875488281 793.3499755859375 L 337.9089965820313 793.9099731445313 C 337.6109924316406 793.6950073242188 337.2699890136719 793.531982421875 336.8869934082031 793.4199829101563 C 336.5050048828125 793.3079833984375 336.1130065917969 793.2520141601563 335.7109985351563 793.2520141601563 C 335.0299987792969 793.2520141601563 334.5169982910156 793.3779907226563 334.1709899902344 793.6300048828125 C 333.8259887695313 793.8820190429688 333.6530151367188 794.2130126953125 333.6530151367188 794.6240234375 C 333.6530151367188 794.9509887695313 333.7510070800781 795.2069702148438 333.9469909667969 795.3939819335938 C 334.1430053710938 795.5709838867188 334.3810119628906 795.7069702148438 334.6610107421875 795.7999877929688 C 334.9509887695313 795.8839721679688 335.3519897460938 795.9769897460938 335.864990234375 796.0800170898438 C 336.4349975585938 796.1829833984375 336.8919982910156 796.2949829101563 337.2369995117188 796.416015625 C 337.5920104980469 796.5280151367188 337.8909912109375 796.7150268554688 338.1329956054688 796.9760131835938 C 338.3760070800781 797.2369995117188 338.4970092773438 797.5969848632813 338.4970092773438 798.0540161132813 C 338.4970092773438 798.6610107421875 338.2449951171875 799.14599609375 337.7409973144531 799.510009765625 C 337.2369995117188 799.8740234375 336.5280151367188 800.0560302734375 335.6130065917969 800.0560302734375 Z M 344.0769958496094 799.5380249023438 C 343.8989868164063 799.7059936523438 343.6749877929688 799.8369750976563 343.4049987792969 799.9299926757813 C 343.1430053710938 800.0139770507813 342.8680114746094 800.0560302734375 342.5790100097656 800.0560302734375 C 341.9440002441406 800.0560302734375 341.4540100097656 799.8829956054688 341.1090087890625 799.5380249023438 C 340.7630004882813 799.1829833984375 340.5910034179688 798.6929931640625 340.5910034179688 798.0679931640625 L 340.5910034179688 793.2940063476563 L 339.2470092773438 793.2940063476563 L 339.2470092773438 792.6920166015625 L 340.5910034179688 792.6920166015625 L 340.5910034179688 791.0960083007813 L 341.2909851074219 791.0960083007813 L 341.2909851074219 792.6920166015625 L 343.614990234375 792.6920166015625 L 343.614990234375 793.2940063476563 L 341.2909851074219 793.2940063476563 L 341.2909851074219 797.9979858398438 C 341.2909851074219 798.4739990234375 341.4030151367188 798.8380126953125 341.6270141601563 799.0900268554688 C 341.8599853515625 799.3330078125 342.2009887695313 799.4539794921875 342.6489868164063 799.4539794921875 C 343.1059875488281 799.4539794921875 343.4840087890625 799.3189697265625 343.7829895019531 799.0479736328125 L 344.0769958496094 799.5380249023438 Z M 346.7009887695313 794.2880249023438 C 346.9249877929688 793.7559814453125 347.2749938964844 793.3499755859375 347.7510070800781 793.0700073242188 C 348.2269897460938 792.781005859375 348.8059997558594 792.635986328125 349.4869995117188 792.635986328125 L 349.4869995117188 793.322021484375 L 349.3190002441406 793.3079833984375 C 348.5069885253906 793.3079833984375 347.8720092773438 793.5650024414063 347.4150085449219 794.0780029296875 C 346.9580078125 794.5819702148438 346.72900390625 795.2869873046875 346.72900390625 796.1920166015625 L 346.72900390625 800 L 346.0289916992188 800 L 346.0289916992188 792.6920166015625 L 346.7009887695313 792.6920166015625 L 346.7009887695313 794.2880249023438 Z M 351.4159851074219 792.6920166015625 L 352.1159973144531 792.6920166015625 L 352.1159973144531 800 L 351.4159851074219 800 L 351.4159851074219 792.6920166015625 Z M 351.7659912109375 790.9140014648438 C 351.6069946289063 790.9140014648438 351.4719848632813 790.8629760742188 351.3599853515625 790.760009765625 C 351.2479858398438 790.6480102539063 351.1919860839844 790.5130004882813 351.1919860839844 790.35400390625 C 351.1919860839844 790.1950073242188 351.2479858398438 790.0599975585938 351.3599853515625 789.947998046875 C 351.4719848632813 789.8359985351563 351.6069946289063 789.780029296875 351.7659912109375 789.780029296875 C 351.9240112304688 789.780029296875 352.0599975585938 789.8359985351563 352.1719970703125 789.947998046875 C 352.2839965820313 790.051025390625 352.3399963378906 790.1810302734375 352.3399963378906 790.3400268554688 C 352.3399963378906 790.4990234375 352.2839965820313 790.6339721679688 352.1719970703125 790.7459716796875 C 352.0599975585938 790.8579711914063 351.9240112304688 790.9140014648438 351.7659912109375 790.9140014648438 Z M 357.9639892578125 800.0560302734375 C 357.2550048828125 800.0560302734375 356.6199951171875 799.89697265625 356.0599975585938 799.5800170898438 C 355.5 799.2630004882813 355.0610046386719 798.823974609375 354.7439880371094 798.2639770507813 C 354.427001953125 797.6950073242188 354.2680053710938 797.0549926757813 354.2680053710938 796.3460083007813 C 354.2680053710938 795.6270141601563 354.427001953125 794.9879760742188 354.7439880371094 794.427978515625 C 355.0610046386719 793.8590087890625 355.5 793.4199829101563 356.0599975585938 793.1119995117188 C 356.6199951171875 792.7949829101563 357.2550048828125 792.635986328125 357.9639892578125 792.635986328125 C 358.552001953125 792.635986328125 359.0840148925781 792.7529907226563 359.5599975585938 792.9860229492188 C 360.0450134277344 793.2100219726563 360.43701171875 793.541015625 360.7359924316406 793.97998046875 L 360.2179870605469 794.3579711914063 C 359.9570007324219 793.9940185546875 359.6300048828125 793.7230224609375 359.2380065917969 793.5460205078125 C 358.8550109863281 793.3590087890625 358.4309997558594 793.2659912109375 357.9639892578125 793.2659912109375 C 357.3949890136719 793.2659912109375 356.8810119628906 793.39697265625 356.4240112304688 793.6580200195313 C 355.9760131835938 793.9099731445313 355.6210021972656 794.2689819335938 355.3599853515625 794.7360229492188 C 355.1080017089844 795.2030029296875 354.9819946289063 795.739013671875 354.9819946289063 796.3460083007813 C 354.9819946289063 796.9530029296875 355.1080017089844 797.489013671875 355.3599853515625 797.9559936523438 C 355.6210021972656 798.4229736328125 355.9760131835938 798.7869873046875 356.4240112304688 799.0479736328125 C 356.8810119628906 799.2999877929688 357.3949890136719 799.426025390625 357.9639892578125 799.426025390625 C 358.4309997558594 799.426025390625 358.8550109863281 799.3369750976563 359.2380065917969 799.1599731445313 C 359.6300048828125 798.9730224609375 359.9570007324219 798.697998046875 360.2179870605469 798.333984375 L 360.7359924316406 798.7119750976563 C 360.43701171875 799.1510009765625 360.0450134277344 799.4869995117188 359.5599975585938 799.719970703125 C 359.0840148925781 799.9439697265625 358.552001953125 800.0560302734375 357.9639892578125 800.0560302734375 Z M 366.5400085449219 799.5380249023438 C 366.3619995117188 799.7059936523438 366.1380004882813 799.8369750976563 365.8680114746094 799.9299926757813 C 365.6059875488281 800.0139770507813 365.3309936523438 800.0560302734375 365.0419921875 800.0560302734375 C 364.4070129394531 800.0560302734375 363.9169921875 799.8829956054688 363.5719909667969 799.5380249023438 C 363.2260131835938 799.1829833984375 363.0539855957031 798.6929931640625 363.0539855957031 798.0679931640625 L 363.0539855957031 793.2940063476563 L 361.7099914550781 793.2940063476563 L 361.7099914550781 792.6920166015625 L 363.0539855957031 792.6920166015625 L 363.0539855957031 791.0960083007813 L 363.7539978027344 791.0960083007813 L 363.7539978027344 792.6920166015625 L 366.0780029296875 792.6920166015625 L 366.0780029296875 793.2940063476563 L 363.7539978027344 793.2940063476563 L 363.7539978027344 797.9979858398438 C 363.7539978027344 798.4739990234375 363.8659973144531 798.8380126953125 364.0899963378906 799.0900268554688 C 364.322998046875 799.3330078125 364.6640014648438 799.4539794921875 365.1119995117188 799.4539794921875 C 365.5690002441406 799.4539794921875 365.9469909667969 799.3189697265625 366.2460021972656 799.0479736328125 L 366.5400085449219 799.5380249023438 Z M 368.5450134277344 798.8660278320313 C 368.7130126953125 798.8660278320313 368.8529968261719 798.927001953125 368.9649963378906 799.0479736328125 C 369.0769958496094 799.1599731445313 369.1329956054688 799.2949829101563 369.1329956054688 799.4539794921875 C 369.1329956054688 799.5469970703125 369.1189880371094 799.64501953125 369.0910034179688 799.7479858398438 C 369.0719909667969 799.8510131835938 369.0440063476563 799.9669799804688 369.0069885253906 800.0980224609375 L 368.4609985351563 802.0020141601563 L 367.9570007324219 802.0020141601563 L 368.4190063476563 800.0280151367188 C 368.2789916992188 799.9910278320313 368.1669921875 799.9249877929688 368.0830078125 799.8319702148438 C 367.9989929199219 799.72900390625 367.9570007324219 799.60302734375 367.9570007324219 799.4539794921875 C 367.9570007324219 799.2860107421875 368.0130004882813 799.14599609375 368.125 799.0339965820313 C 368.2369995117188 798.9219970703125 368.3770141601563 798.8660278320313 368.5450134277344 798.8660278320313 Z M 377.8269958496094 800.0700073242188 C 377.1080017089844 800.0700073242188 376.4219970703125 799.948974609375 375.7690124511719 799.7059936523438 C 375.125 799.4539794921875 374.6210021972656 799.1320190429688 374.2569885253906 798.739990234375 L 374.5790100097656 798.2080078125 C 374.9240112304688 798.572021484375 375.385986328125 798.8709716796875 375.9649963378906 799.10400390625 C 376.5530090332031 799.3280029296875 377.1690063476563 799.4400024414063 377.81298828125 799.4400024414063 C 378.7460021972656 799.4400024414063 379.4509887695313 799.2630004882813 379.927001953125 798.9080200195313 C 380.4030151367188 798.552978515625 380.6409912109375 798.0910034179688 380.6409912109375 797.52197265625 C 380.6409912109375 797.0830078125 380.5150146484375 796.7329711914063 380.2630004882813 796.4719848632813 C 380.010986328125 796.2109985351563 379.697998046875 796.010009765625 379.3250122070313 795.8699951171875 C 378.9519958496094 795.72998046875 378.447998046875 795.5850219726563 377.81298828125 795.4359741210938 C 377.093994140625 795.2589721679688 376.5159912109375 795.0859985351563 376.0769958496094 794.9180297851563 C 375.6480102539063 794.75 375.2789916992188 794.4929809570313 374.9710083007813 794.1480102539063 C 374.6719970703125 793.7930297851563 374.5230102539063 793.322021484375 374.5230102539063 792.7340087890625 C 374.5230102539063 792.2579956054688 374.6489868164063 791.823974609375 374.9010009765625 791.4320068359375 C 375.1530151367188 791.031005859375 375.5360107421875 790.7130126953125 376.0490112304688 790.47998046875 C 376.5719909667969 790.2470092773438 377.2200012207031 790.1300048828125 377.9949951171875 790.1300048828125 C 378.5360107421875 790.1300048828125 379.0679931640625 790.208984375 379.5910034179688 790.3679809570313 C 380.114013671875 790.5269775390625 380.5660095214844 790.7410278320313 380.9490051269531 791.0120239257813 L 380.6830139160156 791.5859985351563 C 380.2909851074219 791.3150024414063 379.8569946289063 791.1099853515625 379.3810119628906 790.969970703125 C 378.9140014648438 790.8300170898438 378.4519958496094 790.760009765625 377.9949951171875 790.760009765625 C 377.0899963378906 790.760009765625 376.4039916992188 790.9420166015625 375.93701171875 791.3060302734375 C 375.4700012207031 791.6699829101563 375.2369995117188 792.1409912109375 375.2369995117188 792.719970703125 C 375.2369995117188 793.1589965820313 375.3630065917969 793.5089721679688 375.614990234375 793.77001953125 C 375.8670043945313 794.031005859375 376.1799926757813 794.2319946289063 376.5530090332031 794.3720092773438 C 376.9259948730469 794.5120239257813 377.4349975585938 794.6610107421875 378.0790100097656 794.8200073242188 C 378.7980041503906 794.9970092773438 379.3720092773438 795.1699829101563 379.8009948730469 795.3380126953125 C 380.2300109863281 795.5059814453125 380.593994140625 795.7630004882813 380.8930053710938 796.1079711914063 C 381.2009887695313 796.4439697265625 381.3550109863281 796.9010009765625 381.3550109863281 797.47998046875 C 381.3550109863281 797.9559936523438 381.2239990234375 798.3900146484375 380.9630126953125 798.781982421875 C 380.7109985351563 799.1740112304688 380.3190002441406 799.4869995117188 379.7869873046875 799.719970703125 C 379.2550048828125 799.9530029296875 378.6019897460938 800.0700073242188 377.8269958496094 800.0700073242188 Z M 386.0220031738281 792.635986328125 C 386.9280090332031 792.635986328125 387.6229858398438 792.8690185546875 388.1080017089844 793.3359985351563 C 388.593994140625 793.7930297851563 388.8359985351563 794.469970703125 388.8359985351563 795.3660278320313 L 388.8359985351563 800 L 388.1640014648438 800 L 388.1640014648438 798.697998046875 C 387.9309997558594 799.1270141601563 387.5899963378906 799.4630126953125 387.1419982910156 799.7059936523438 C 386.6940002441406 799.9390258789063 386.1579895019531 800.0560302734375 385.5320129394531 800.0560302734375 C 384.7200012207031 800.0560302734375 384.0759887695313 799.864990234375 383.6000061035156 799.4819946289063 C 383.1340026855469 799.0989990234375 382.8999938964844 798.594970703125 382.8999938964844 797.969970703125 C 382.8999938964844 797.3629760742188 383.114990234375 796.8729858398438 383.5440063476563 796.5 C 383.9830017089844 796.1170043945313 384.6780090332031 795.926025390625 385.6300048828125 795.926025390625 L 388.135986328125 795.926025390625 L 388.135986328125 795.3380126953125 C 388.135986328125 794.656982421875 387.9500122070313 794.1389770507813 387.5759887695313 793.7839965820313 C 387.2120056152344 793.4290161132813 386.6759948730469 793.2520141601563 385.9660034179688 793.2520141601563 C 385.4809875488281 793.2520141601563 385.0140075683594 793.3359985351563 384.5660095214844 793.5040283203125 C 384.1279907226563 793.6719970703125 383.7539978027344 793.89599609375 383.4460144042969 794.176025390625 L 383.0960083007813 793.6719970703125 C 383.4599914550781 793.344970703125 383.8989868164063 793.093017578125 384.4119873046875 792.916015625 C 384.9259948730469 792.72900390625 385.4620056152344 792.635986328125 386.0220031738281 792.635986328125 Z M 385.6300048828125 799.4819946289063 C 386.2369995117188 799.4819946289063 386.75 799.3419799804688 387.1700134277344 799.06201171875 C 387.6000061035156 798.781982421875 387.9219970703125 798.3759765625 388.135986328125 797.843994140625 L 388.135986328125 796.4719848632813 L 385.6440124511719 796.4719848632813 C 384.9259948730469 796.4719848632813 384.4030151367188 796.60302734375 384.0759887695313 796.864013671875 C 383.7590026855469 797.125 383.6000061035156 797.4849853515625 383.6000061035156 797.9420166015625 C 383.6000061035156 798.4180297851563 383.7780151367188 798.7960205078125 384.1319885253906 799.0759887695313 C 384.4869995117188 799.3469848632813 384.9859924316406 799.4819946289063 385.6300048828125 799.4819946289063 Z M 395.3460083007813 799.5380249023438 C 395.1690063476563 799.7059936523438 394.9450073242188 799.8369750976563 394.6740112304688 799.9299926757813 C 394.4129943847656 800.0139770507813 394.1380004882813 800.0560302734375 393.8479919433594 800.0560302734375 C 393.2139892578125 800.0560302734375 392.7239990234375 799.8829956054688 392.3779907226563 799.5380249023438 C 392.0329895019531 799.1829833984375 391.8599853515625 798.6929931640625 391.8599853515625 798.0679931640625 L 391.8599853515625 793.2940063476563 L 390.5159912109375 793.2940063476563 L 390.5159912109375 792.6920166015625 L 391.8599853515625 792.6920166015625 L 391.8599853515625 791.0960083007813 L 392.5599975585938 791.0960083007813 L 392.5599975585938 792.6920166015625 L 394.8840026855469 792.6920166015625 L 394.8840026855469 793.2940063476563 L 392.5599975585938 793.2940063476563 L 392.5599975585938 797.9979858398438 C 392.5599975585938 798.4739990234375 392.6719970703125 798.8380126953125 392.89599609375 799.0900268554688 C 393.1300048828125 799.3330078125 393.4700012207031 799.4539794921875 393.9179992675781 799.4539794921875 C 394.3760070800781 799.4539794921875 394.7539978027344 799.3189697265625 395.052001953125 799.0479736328125 L 395.3460083007813 799.5380249023438 Z M 400.8680114746094 792.635986328125 C 401.7829895019531 792.635986328125 402.5060119628906 792.9019775390625 403.0379943847656 793.4340209960938 C 403.5700073242188 793.9660034179688 403.8359985351563 794.7310180664063 403.8359985351563 795.72998046875 L 403.8359985351563 800 L 403.135986328125 800 L 403.135986328125 795.7860107421875 C 403.135986328125 794.9650268554688 402.9259948730469 794.3389892578125 402.5060119628906 793.9099731445313 C 402.0960083007813 793.4810180664063 401.5169982910156 793.2659912109375 400.7699890136719 793.2659912109375 C 399.9119873046875 793.2659912109375 399.2349853515625 793.5230102539063 398.739990234375 794.0360107421875 C 398.2460021972656 794.5490112304688 397.9979858398438 795.239990234375 397.9979858398438 796.1079711914063 L 397.9979858398438 800 L 397.2980041503906 800 L 397.2980041503906 792.6920166015625 L 397.9700012207031 792.6920166015625 L 397.9700012207031 794.2739868164063 C 398.2219848632813 793.760986328125 398.5960083007813 793.3590087890625 399.0899963378906 793.0700073242188 C 399.593994140625 792.781005859375 400.18701171875 792.635986328125 400.8680114746094 792.635986328125 Z M 409.1820068359375 792.635986328125 C 410.0880126953125 792.635986328125 410.7829895019531 792.8690185546875 411.2680053710938 793.3359985351563 C 411.7539978027344 793.7930297851563 411.9960021972656 794.469970703125 411.9960021972656 795.3660278320313 L 411.9960021972656 800 L 411.3240051269531 800 L 411.3240051269531 798.697998046875 C 411.0910034179688 799.1270141601563 410.75 799.4630126953125 410.302001953125 799.7059936523438 C 409.85400390625 799.9390258789063 409.3179931640625 800.0560302734375 408.6919860839844 800.0560302734375 C 407.8800048828125 800.0560302734375 407.2359924316406 799.864990234375 406.760009765625 799.4819946289063 C 406.2940063476563 799.0989990234375 406.0599975585938 798.594970703125 406.0599975585938 797.969970703125 C 406.0599975585938 797.3629760742188 406.2749938964844 796.8729858398438 406.7040100097656 796.5 C 407.1430053710938 796.1170043945313 407.8380126953125 795.926025390625 408.7900085449219 795.926025390625 L 411.2959899902344 795.926025390625 L 411.2959899902344 795.3380126953125 C 411.2959899902344 794.656982421875 411.1099853515625 794.1389770507813 410.7359924316406 793.7839965820313 C 410.3720092773438 793.4290161132813 409.8359985351563 793.2520141601563 409.1260070800781 793.2520141601563 C 408.6409912109375 793.2520141601563 408.1740112304688 793.3359985351563 407.7260131835938 793.5040283203125 C 407.2879943847656 793.6719970703125 406.9140014648438 793.89599609375 406.6059875488281 794.176025390625 L 406.2560119628906 793.6719970703125 C 406.6199951171875 793.344970703125 407.0589904785156 793.093017578125 407.5719909667969 792.916015625 C 408.0859985351563 792.72900390625 408.6220092773438 792.635986328125 409.1820068359375 792.635986328125 Z M 408.7900085449219 799.4819946289063 C 409.3970031738281 799.4819946289063 409.9100036621094 799.3419799804688 410.3299865722656 799.06201171875 C 410.760009765625 798.781982421875 411.0820007324219 798.3759765625 411.2959899902344 797.843994140625 L 411.2959899902344 796.4719848632813 L 408.8039855957031 796.4719848632813 C 408.0859985351563 796.4719848632813 407.56298828125 796.60302734375 407.2359924316406 796.864013671875 C 406.9190063476563 797.125 406.760009765625 797.4849853515625 406.760009765625 797.9420166015625 C 406.760009765625 798.4180297851563 406.93798828125 798.7960205078125 407.2919921875 799.0759887695313 C 407.6470031738281 799.3469848632813 408.14599609375 799.4819946289063 408.7900085449219 799.4819946289063 Z M 414.7959899902344 798.8660278320313 C 414.9639892578125 798.8660278320313 415.10400390625 798.927001953125 415.2160034179688 799.0479736328125 C 415.3280029296875 799.1599731445313 415.3840026855469 799.2949829101563 415.3840026855469 799.4539794921875 C 415.3840026855469 799.5469970703125 415.3699951171875 799.64501953125 415.3420104980469 799.7479858398438 C 415.3240051269531 799.8510131835938 415.2959899902344 799.9669799804688 415.2579956054688 800.0980224609375 L 414.7120056152344 802.0020141601563 L 414.2080078125 802.0020141601563 L 414.6700134277344 800.0280151367188 C 414.5299987792969 799.9910278320313 414.4179992675781 799.9249877929688 414.3340148925781 799.8319702148438 C 414.25 799.72900390625 414.2080078125 799.60302734375 414.2080078125 799.4539794921875 C 414.2080078125 799.2860107421875 414.2640075683594 799.14599609375 414.3760070800781 799.0339965820313 C 414.4880065917969 798.9219970703125 414.6279907226563 798.8660278320313 414.7959899902344 798.8660278320313 Z M 430.77099609375 800 L 430.7569885253906 791.614013671875 L 426.6549987792969 798.697998046875 L 426.3049926757813 798.697998046875 L 422.2030029296875 791.6420288085938 L 422.2030029296875 800 L 421.5029907226563 800 L 421.5029907226563 790.2000122070313 L 422.1050109863281 790.2000122070313 L 426.4869995117188 797.7739868164063 L 430.8689880371094 790.2000122070313 L 431.4570007324219 790.2000122070313 L 431.4710083007813 800 L 430.77099609375 800 Z M 434.5799865722656 800.0560302734375 C 434.4209899902344 800.0560302734375 434.281005859375 800 434.1600036621094 799.8880004882813 C 434.0480041503906 799.7670288085938 433.9920043945313 799.6220092773438 433.9920043945313 799.4539794921875 C 433.9920043945313 799.2860107421875 434.0480041503906 799.14599609375 434.1600036621094 799.0339965820313 C 434.281005859375 798.9219970703125 434.4209899902344 798.8660278320313 434.5799865722656 798.8660278320313 C 434.7380065917969 798.8660278320313 434.8739929199219 798.9219970703125 434.9859924316406 799.0339965820313 C 435.1069946289063 799.14599609375 435.1679992675781 799.2860107421875 435.1679992675781 799.4539794921875 C 435.1679992675781 799.6220092773438 435.1069946289063 799.7670288085938 434.9859924316406 799.8880004882813 C 434.8739929199219 800 434.7380065917969 800.0560302734375 434.5799865722656 800.0560302734375 Z M 441.2040100097656 790.2000122070313 C 442.4360046386719 790.2000122070313 443.4020080566406 790.4940185546875 444.1019897460938 791.0819702148438 C 444.802001953125 791.6610107421875 445.1520080566406 792.468017578125 445.1520080566406 793.5040283203125 C 445.1520080566406 794.531005859375 444.802001953125 795.3380126953125 444.1019897460938 795.926025390625 C 443.4020080566406 796.5050048828125 442.4360046386719 796.7940063476563 441.2040100097656 796.7940063476563 L 438.4039916992188 796.7940063476563 L 438.4039916992188 800 L 437.6900024414063 800 L 437.6900024414063 790.2000122070313 L 441.2040100097656 790.2000122070313 Z M 441.2040100097656 796.1500244140625 C 442.25 796.1500244140625 443.0480041503906 795.9210205078125 443.5979919433594 795.4639892578125 C 444.1489868164063 795.0070190429688 444.4240112304688 794.35302734375 444.4240112304688 793.5040283203125 C 444.4240112304688 792.655029296875 444.1489868164063 792.0009765625 443.5979919433594 791.5440063476563 C 443.0480041503906 791.0770263671875 442.25 790.843994140625 441.2040100097656 790.843994140625 L 438.4039916992188 790.843994140625 L 438.4039916992188 796.1500244140625 L 441.2040100097656 796.1500244140625 Z M 446.9800109863281 800.0560302734375 C 446.8210144042969 800.0560302734375 446.6809997558594 800 446.5599975585938 799.8880004882813 C 446.447998046875 799.7670288085938 446.3919982910156 799.6220092773438 446.3919982910156 799.4539794921875 C 446.3919982910156 799.2860107421875 446.447998046875 799.14599609375 446.5599975585938 799.0339965820313 C 446.6809997558594 798.9219970703125 446.8210144042969 798.8660278320313 446.9800109863281 798.8660278320313 C 447.1390075683594 798.8660278320313 447.2739868164063 798.9219970703125 447.385986328125 799.0339965820313 C 447.5069885253906 799.14599609375 447.5679931640625 799.2860107421875 447.5679931640625 799.4539794921875 C 447.5679931640625 799.6220092773438 447.5069885253906 799.7670288085938 447.385986328125 799.8880004882813 C 447.2739868164063 800 447.1390075683594 800.0560302734375 446.9800109863281 800.0560302734375 Z">
			</path>
		</svg>
		<svg class="Lab_Name" viewBox="133.984 761.008 326.648 17.184">
			<path id="Lab_Name" d="M 140.4160003662109 778.1920166015625 C 139.1519927978516 778.1920166015625 137.9279937744141 778 136.7440032958984 777.6160278320313 C 135.5760040283203 777.2160034179688 134.656005859375 776.7039794921875 133.9839935302734 776.0800170898438 L 134.8719940185547 774.2080078125 C 135.5119934082031 774.7839965820313 136.3280029296875 775.2559814453125 137.3200073242188 775.6240234375 C 138.3280029296875 775.9760131835938 139.3600006103516 776.1519775390625 140.4160003662109 776.1519775390625 C 141.8079986572266 776.1519775390625 142.8480072021484 775.9199829101563 143.5359954833984 775.4559936523438 C 144.2239990234375 774.9760131835938 144.5679931640625 774.343994140625 144.5679931640625 773.5599975585938 C 144.5679931640625 772.9840087890625 144.3760070800781 772.52001953125 143.9920043945313 772.1680297851563 C 143.6239929199219 771.7999877929688 143.1600036621094 771.52001953125 142.6000061035156 771.3280029296875 C 142.0559997558594 771.135986328125 141.2799987792969 770.9199829101563 140.2720031738281 770.6799926757813 C 139.0079956054688 770.3759765625 137.9839935302734 770.072021484375 137.1999969482422 769.7680053710938 C 136.4320068359375 769.4639892578125 135.7680053710938 769 135.2079925537109 768.3759765625 C 134.6640014648438 767.7360229492188 134.3919982910156 766.8800048828125 134.3919982910156 765.8079833984375 C 134.3919982910156 764.9119873046875 134.6239929199219 764.10400390625 135.0879974365234 763.3839721679688 C 135.5679931640625 762.6640014648438 136.2879943847656 762.0880126953125 137.2480010986328 761.656005859375 C 138.2079925537109 761.2239990234375 139.3999938964844 761.0079956054688 140.8240051269531 761.0079956054688 C 141.8159942626953 761.0079956054688 142.7920074462891 761.135986328125 143.7519989013672 761.3920288085938 C 144.7120056152344 761.6480102539063 145.5359954833984 762.0159912109375 146.2239990234375 762.4959716796875 L 145.4320068359375 764.416015625 C 144.7279968261719 763.968017578125 143.9759979248047 763.6320190429688 143.1759948730469 763.4080200195313 C 142.3760070800781 763.1680297851563 141.5919952392578 763.0479736328125 140.8240051269531 763.0479736328125 C 139.4640045166016 763.0479736328125 138.4400024414063 763.2960205078125 137.7519989013672 763.7919921875 C 137.0800018310547 764.2880249023438 136.7440032958984 764.927978515625 136.7440032958984 765.7119750976563 C 136.7440032958984 766.2880249023438 136.9360046386719 766.760009765625 137.3200073242188 767.1279907226563 C 137.7039947509766 767.47998046875 138.1759948730469 767.760009765625 138.7359924316406 767.968017578125 C 139.3119964599609 768.1599731445313 140.0879974365234 768.3679809570313 141.0639953613281 768.5919799804688 C 142.3280029296875 768.89599609375 143.343994140625 769.2000122070313 144.1119995117188 769.5040283203125 C 144.8800048828125 769.8079833984375 145.5359954833984 770.27197265625 146.0800018310547 770.89599609375 C 146.6399993896484 771.52001953125 146.9199981689453 772.3599853515625 146.9199981689453 773.416015625 C 146.9199981689453 774.2960205078125 146.6799926757813 775.10400390625 146.1999969482422 775.8400268554688 C 145.7200012207031 776.5599975585938 144.9920043945313 777.135986328125 144.0160064697266 777.5679931640625 C 143.0399932861328 777.9840087890625 141.8399963378906 778.1920166015625 140.4160003662109 778.1920166015625 Z M 161.1300048828125 773.7999877929688 L 152.2019958496094 773.7999877929688 L 150.35400390625 778 L 147.8820037841797 778 L 155.4900054931641 761.2000122070313 L 157.8659973144531 761.2000122070313 L 165.4980010986328 778 L 162.9779968261719 778 L 161.1300048828125 773.7999877929688 Z M 160.2899932861328 771.8800048828125 L 156.6660003662109 763.6480102539063 L 153.0420074462891 771.8800048828125 L 160.2899932861328 771.8800048828125 Z M 182.4519958496094 761.2000122070313 L 182.4519958496094 778 L 180.4839935302734 778 L 170.4040069580078 765.4719848632813 L 170.4040069580078 778 L 168.0039978027344 778 L 168.0039978027344 761.2000122070313 L 169.9720001220703 761.2000122070313 L 180.052001953125 773.72802734375 L 180.052001953125 761.2000122070313 L 182.4519958496094 761.2000122070313 Z M 199.1210021972656 769.5040283203125 L 201.4250030517578 769.5040283203125 L 201.4250030517578 776.0560302734375 C 200.5930023193359 776.7440185546875 199.625 777.27197265625 198.52099609375 777.6400146484375 C 197.4170074462891 778.0079956054688 196.2649993896484 778.1920166015625 195.0650024414063 778.1920166015625 C 193.3690032958984 778.1920166015625 191.8410034179688 777.823974609375 190.4810028076172 777.0880126953125 C 189.1210021972656 776.3359985351563 188.0489959716797 775.31201171875 187.2649993896484 774.0159912109375 C 186.4969940185547 772.7039794921875 186.1130065917969 771.2319946289063 186.1130065917969 769.5999755859375 C 186.1130065917969 767.968017578125 186.4969940185547 766.4959716796875 187.2649993896484 765.1840209960938 C 188.0489959716797 763.8720092773438 189.1210021972656 762.8480224609375 190.4810028076172 762.1119995117188 C 191.8569946289063 761.3759765625 193.4010009765625 761.0079956054688 195.1130065917969 761.0079956054688 C 196.4570007324219 761.0079956054688 197.6730041503906 761.2319946289063 198.7610015869141 761.6799926757813 C 199.8650054931641 762.1119995117188 200.8009948730469 762.7520141601563 201.5690002441406 763.5999755859375 L 200.0809936523438 765.0880126953125 C 198.7369995117188 763.7919921875 197.1130065917969 763.1439819335938 195.2089996337891 763.1439819335938 C 193.9290008544922 763.1439819335938 192.7769927978516 763.4240112304688 191.7530059814453 763.9840087890625 C 190.7449951171875 764.5280151367188 189.9530029296875 765.2960205078125 189.3769989013672 766.2880249023438 C 188.8009948730469 767.2639770507813 188.5130004882813 768.3679809570313 188.5130004882813 769.5999755859375 C 188.5130004882813 770.8159790039063 188.8009948730469 771.9199829101563 189.3769989013672 772.9119873046875 C 189.9530029296875 773.8880004882813 190.7449951171875 774.656005859375 191.7530059814453 775.2160034179688 C 192.7769927978516 775.7760009765625 193.9210052490234 776.0560302734375 195.1849975585938 776.0560302734375 C 196.6889953613281 776.0560302734375 198.0010070800781 775.6959838867188 199.1210021972656 774.9760131835938 L 199.1210021972656 769.5040283203125 Z M 216.7239990234375 773.7999877929688 L 207.7960052490234 773.7999877929688 L 205.947998046875 778 L 203.4759979248047 778 L 211.0839996337891 761.2000122070313 L 213.4600067138672 761.2000122070313 L 221.0919952392578 778 L 218.5720062255859 778 L 216.7239990234375 773.7999877929688 Z M 215.8840026855469 771.8800048828125 L 212.2599945068359 763.6480102539063 L 208.6360015869141 771.8800048828125 L 215.8840026855469 771.8800048828125 Z M 239.1739959716797 778 L 239.1499938964844 765.760009765625 L 233.0780029296875 775.9600219726563 L 231.9739990234375 775.9600219726563 L 225.9019927978516 765.8319702148438 L 225.9019927978516 778 L 223.5980072021484 778 L 223.5980072021484 761.2000122070313 L 225.5659942626953 761.2000122070313 L 232.5740051269531 773.0079956054688 L 239.4859924316406 761.2000122070313 L 241.4539947509766 761.2000122070313 L 241.4779968261719 778 L 239.1739959716797 778 Z M 259.5169982910156 761.2000122070313 C 261.6929931640625 761.2000122070313 263.4049987792969 761.719970703125 264.6530151367188 762.760009765625 C 265.9010009765625 763.7999877929688 266.5249938964844 765.2319946289063 266.5249938964844 767.0560302734375 C 266.5249938964844 768.8800048828125 265.9010009765625 770.31201171875 264.6530151367188 771.3519897460938 C 263.4049987792969 772.3920288085938 261.6929931640625 772.9119873046875 259.5169982910156 772.9119873046875 L 255.3650054931641 772.9119873046875 L 255.3650054931641 778 L 252.9649963378906 778 L 252.9649963378906 761.2000122070313 L 259.5169982910156 761.2000122070313 Z M 259.4450073242188 770.823974609375 C 260.9649963378906 770.823974609375 262.125 770.5040283203125 262.9249877929688 769.864013671875 C 263.7250061035156 769.2080078125 264.125 768.27197265625 264.125 767.0560302734375 C 264.125 765.8400268554688 263.7250061035156 764.9119873046875 262.9249877929688 764.27197265625 C 262.125 763.6160278320313 260.9649963378906 763.2880249023438 259.4450073242188 763.2880249023438 L 255.3650054931641 763.2880249023438 L 255.3650054931641 770.823974609375 L 259.4450073242188 770.823974609375 Z M 279.9110107421875 773.7999877929688 L 270.9840087890625 773.7999877929688 L 269.135986328125 778 L 266.6629943847656 778 L 274.2720031738281 761.2000122070313 L 276.6480102539063 761.2000122070313 L 284.2799987792969 778 L 281.760009765625 778 L 279.9110107421875 773.7999877929688 Z M 279.0719909667969 771.8800048828125 L 275.447998046875 763.6480102539063 L 271.8240051269531 771.8800048828125 L 279.0719909667969 771.8800048828125 Z M 289.2780151367188 763.2880249023438 L 283.5180053710938 763.2880249023438 L 283.5180053710938 761.2000122070313 L 297.4140014648438 761.2000122070313 L 297.4140014648438 763.2880249023438 L 291.6539916992188 763.2880249023438 L 291.6539916992188 778 L 289.2780151367188 778 L 289.2780151367188 763.2880249023438 Z M 314.4760131835938 761.2000122070313 L 314.4760131835938 778 L 312.0759887695313 778 L 312.0759887695313 770.5120239257813 L 302.4280090332031 770.5120239257813 L 302.4280090332031 778 L 300.0280151367188 778 L 300.0280151367188 761.2000122070313 L 302.4280090332031 761.2000122070313 L 302.4280090332031 768.4240112304688 L 312.0759887695313 768.4240112304688 L 312.0759887695313 761.2000122070313 L 314.4760131835938 761.2000122070313 Z M 327.0880126953125 778.1920166015625 C 325.3919982910156 778.1920166015625 323.864013671875 777.823974609375 322.5039978027344 777.0880126953125 C 321.1440124511719 776.3359985351563 320.0719909667969 775.3040161132813 319.2879943847656 773.9920043945313 C 318.5199890136719 772.6799926757813 318.135986328125 771.2160034179688 318.135986328125 769.5999755859375 C 318.135986328125 767.9840087890625 318.5199890136719 766.52001953125 319.2879943847656 765.2080078125 C 320.0719909667969 763.89599609375 321.1440124511719 762.8720092773438 322.5039978027344 762.135986328125 C 323.864013671875 761.3839721679688 325.3919982910156 761.0079956054688 327.0880126953125 761.0079956054688 C 328.7680053710938 761.0079956054688 330.2879943847656 761.3839721679688 331.6480102539063 762.135986328125 C 333.0079956054688 762.8720092773438 334.0719909667969 763.89599609375 334.8399963378906 765.2080078125 C 335.6080017089844 766.5040283203125 335.9920043945313 767.968017578125 335.9920043945313 769.5999755859375 C 335.9920043945313 771.2319946289063 335.6080017089844 772.7039794921875 334.8399963378906 774.0159912109375 C 334.0719909667969 775.31201171875 333.0079956054688 776.3359985351563 331.6480102539063 777.0880126953125 C 330.2879943847656 777.823974609375 328.7680053710938 778.1920166015625 327.0880126953125 778.1920166015625 Z M 327.0880126953125 776.0560302734375 C 328.3200073242188 776.0560302734375 329.4240112304688 775.7760009765625 330.3999938964844 775.2160034179688 C 331.3919982910156 774.656005859375 332.1679992675781 773.8880004882813 332.7279968261719 772.9119873046875 C 333.3039855957031 771.9199829101563 333.5920104980469 770.8159790039063 333.5920104980469 769.5999755859375 C 333.5920104980469 768.3839721679688 333.3039855957031 767.2880249023438 332.7279968261719 766.31201171875 C 332.1679992675781 765.3200073242188 331.3919982910156 764.5440063476563 330.3999938964844 763.9840087890625 C 329.4240112304688 763.4240112304688 328.3200073242188 763.1439819335938 327.0880126953125 763.1439819335938 C 325.8559875488281 763.1439819335938 324.7359924316406 763.4240112304688 323.7279968261719 763.9840087890625 C 322.7359924316406 764.5440063476563 321.9519958496094 765.3200073242188 321.3760070800781 766.31201171875 C 320.8160095214844 767.2880249023438 320.5360107421875 768.3839721679688 320.5360107421875 769.5999755859375 C 320.5360107421875 770.8159790039063 320.8160095214844 771.9199829101563 321.3760070800781 772.9119873046875 C 321.9519958496094 773.8880004882813 322.7359924316406 774.656005859375 323.7279968261719 775.2160034179688 C 324.7359924316406 775.7760009765625 325.8559875488281 776.0560302734375 327.0880126953125 776.0560302734375 Z M 339.6610107421875 761.2000122070313 L 342.0610046386719 761.2000122070313 L 342.0610046386719 775.9119873046875 L 351.1570129394531 775.9119873046875 L 351.1570129394531 778 L 339.6610107421875 778 L 339.6610107421875 761.2000122070313 Z M 361.1900024414063 778.1920166015625 C 359.4939880371094 778.1920166015625 357.9660034179688 777.823974609375 356.6059875488281 777.0880126953125 C 355.2460021972656 776.3359985351563 354.1740112304688 775.3040161132813 353.3900146484375 773.9920043945313 C 352.6220092773438 772.6799926757813 352.2380065917969 771.2160034179688 352.2380065917969 769.5999755859375 C 352.2380065917969 767.9840087890625 352.6220092773438 766.52001953125 353.3900146484375 765.2080078125 C 354.1740112304688 763.89599609375 355.2460021972656 762.8720092773438 356.6059875488281 762.135986328125 C 357.9660034179688 761.3839721679688 359.4939880371094 761.0079956054688 361.1900024414063 761.0079956054688 C 362.8699951171875 761.0079956054688 364.3900146484375 761.3839721679688 365.75 762.135986328125 C 367.1099853515625 762.8720092773438 368.1740112304688 763.89599609375 368.9419860839844 765.2080078125 C 369.7099914550781 766.5040283203125 370.093994140625 767.968017578125 370.093994140625 769.5999755859375 C 370.093994140625 771.2319946289063 369.7099914550781 772.7039794921875 368.9419860839844 774.0159912109375 C 368.1740112304688 775.31201171875 367.1099853515625 776.3359985351563 365.75 777.0880126953125 C 364.3900146484375 777.823974609375 362.8699951171875 778.1920166015625 361.1900024414063 778.1920166015625 Z M 361.1900024414063 776.0560302734375 C 362.4219970703125 776.0560302734375 363.5260009765625 775.7760009765625 364.5020141601563 775.2160034179688 C 365.4939880371094 774.656005859375 366.2699890136719 773.8880004882813 366.8299865722656 772.9119873046875 C 367.406005859375 771.9199829101563 367.6940002441406 770.8159790039063 367.6940002441406 769.5999755859375 C 367.6940002441406 768.3839721679688 367.406005859375 767.2880249023438 366.8299865722656 766.31201171875 C 366.2699890136719 765.3200073242188 365.4939880371094 764.5440063476563 364.5020141601563 763.9840087890625 C 363.5260009765625 763.4240112304688 362.4219970703125 763.1439819335938 361.1900024414063 763.1439819335938 C 359.9580078125 763.1439819335938 358.8380126953125 763.4240112304688 357.8299865722656 763.9840087890625 C 356.8380126953125 764.5440063476563 356.0539855957031 765.3200073242188 355.4779968261719 766.31201171875 C 354.9179992675781 767.2880249023438 354.6380004882813 768.3839721679688 354.6380004882813 769.5999755859375 C 354.6380004882813 770.8159790039063 354.9179992675781 771.9199829101563 355.4779968261719 772.9119873046875 C 356.0539855957031 773.8880004882813 356.8380126953125 774.656005859375 357.8299865722656 775.2160034179688 C 358.8380126953125 775.7760009765625 359.9580078125 776.0560302734375 361.1900024414063 776.0560302734375 Z M 385.4020080566406 769.5040283203125 L 387.7059936523438 769.5040283203125 L 387.7059936523438 776.0560302734375 C 386.8739929199219 776.7440185546875 385.906005859375 777.27197265625 384.802001953125 777.6400146484375 C 383.697998046875 778.0079956054688 382.5459899902344 778.1920166015625 381.3460083007813 778.1920166015625 C 379.6499938964844 778.1920166015625 378.1220092773438 777.823974609375 376.7619934082031 777.0880126953125 C 375.4020080566406 776.3359985351563 374.3299865722656 775.31201171875 373.5459899902344 774.0159912109375 C 372.7780151367188 772.7039794921875 372.3940124511719 771.2319946289063 372.3940124511719 769.5999755859375 C 372.3940124511719 767.968017578125 372.7780151367188 766.4959716796875 373.5459899902344 765.1840209960938 C 374.3299865722656 763.8720092773438 375.4020080566406 762.8480224609375 376.7619934082031 762.1119995117188 C 378.1380004882813 761.3759765625 379.6820068359375 761.0079956054688 381.3940124511719 761.0079956054688 C 382.7380065917969 761.0079956054688 383.9540100097656 761.2319946289063 385.0419921875 761.6799926757813 C 386.14599609375 762.1119995117188 387.0820007324219 762.7520141601563 387.8500061035156 763.5999755859375 L 386.3619995117188 765.0880126953125 C 385.0180053710938 763.7919921875 383.3940124511719 763.1439819335938 381.489990234375 763.1439819335938 C 380.2099914550781 763.1439819335938 379.0580139160156 763.4240112304688 378.0339965820313 763.9840087890625 C 377.0260009765625 764.5280151367188 376.2340087890625 765.2960205078125 375.6579895019531 766.2880249023438 C 375.0820007324219 767.2639770507813 374.7940063476563 768.3679809570313 374.7940063476563 769.5999755859375 C 374.7940063476563 770.8159790039063 375.0820007324219 771.9199829101563 375.6579895019531 772.9119873046875 C 376.2340087890625 773.8880004882813 377.0260009765625 774.656005859375 378.0339965820313 775.2160034179688 C 379.0580139160156 775.7760009765625 380.2019958496094 776.0560302734375 381.4660034179688 776.0560302734375 C 382.9700012207031 776.0560302734375 384.2820129394531 775.6959838867188 385.4020080566406 774.9760131835938 L 385.4020080566406 769.5040283203125 Z M 398.7330017089844 772.1920166015625 L 398.7330017089844 778 L 396.3569946289063 778 L 396.3569946289063 772.1439819335938 L 389.6849975585938 761.2000122070313 L 392.2529907226563 761.2000122070313 L 397.6289978027344 770.0560302734375 L 403.0289916992188 761.2000122070313 L 405.4049987792969 761.2000122070313 L 398.7330017089844 772.1920166015625 Z M 414.2860107421875 761.2000122070313 L 416.6860046386719 761.2000122070313 L 416.6860046386719 775.9119873046875 L 425.7820129394531 775.9119873046875 L 425.7820129394531 778 L 414.2860107421875 778 L 414.2860107421875 761.2000122070313 Z M 439.3099975585938 773.7999877929688 L 430.3819885253906 773.7999877929688 L 428.5339965820313 778 L 426.06201171875 778 L 433.6700134277344 761.2000122070313 L 436.0459899902344 761.2000122070313 L 443.6780090332031 778 L 441.1579895019531 778 L 439.3099975585938 773.7999877929688 Z M 438.4700012207031 771.8800048828125 L 434.8460083007813 763.6480102539063 L 431.2219848632813 771.8800048828125 L 438.4700012207031 771.8800048828125 Z M 457.4880065917969 769.2880249023438 C 458.4639892578125 769.5599975585938 459.2319946289063 770.0560302734375 459.7919921875 770.7760009765625 C 460.3519897460938 771.47998046875 460.6319885253906 772.3759765625 460.6319885253906 773.4639892578125 C 460.6319885253906 774.9199829101563 460.0799865722656 776.0399780273438 458.9760131835938 776.823974609375 C 457.8880004882813 777.6079711914063 456.2959899902344 778 454.2000122070313 778 L 446.1839904785156 778 L 446.1839904785156 761.2000122070313 L 453.7200012207031 761.2000122070313 C 455.6400146484375 761.2000122070313 457.1199951171875 761.583984375 458.1600036621094 762.3519897460938 C 459.2160034179688 763.1199951171875 459.7439880371094 764.1840209960938 459.7439880371094 765.5440063476563 C 459.7439880371094 766.4240112304688 459.5360107421875 767.1840209960938 459.1199951171875 767.823974609375 C 458.7200012207031 768.4639892578125 458.1759948730469 768.9520263671875 457.4880065917969 769.2880249023438 Z M 448.5840148925781 763.1439819335938 L 448.5840148925781 768.52001953125 L 453.5039978027344 768.52001953125 C 454.7359924316406 768.52001953125 455.6799926757813 768.2960205078125 456.3359985351563 767.8480224609375 C 457.0079956054688 767.3839721679688 457.343994140625 766.7119750976563 457.343994140625 765.8319702148438 C 457.343994140625 764.9520263671875 457.0079956054688 764.2880249023438 456.3359985351563 763.8400268554688 C 455.6799926757813 763.3759765625 454.7359924316406 763.1439819335938 453.5039978027344 763.1439819335938 L 448.5840148925781 763.1439819335938 Z M 454.10400390625 776.0560302734375 C 455.4639892578125 776.0560302734375 456.4880065917969 775.8319702148438 457.1759948730469 775.3839721679688 C 457.864013671875 774.9359741210938 458.2080078125 774.2319946289063 458.2080078125 773.27197265625 C 458.2080078125 771.4000244140625 456.8399963378906 770.4639892578125 454.10400390625 770.4639892578125 L 448.5840148925781 770.4639892578125 L 448.5840148925781 776.0560302734375 L 454.10400390625 776.0560302734375 Z">
			</path>
		</svg>
		<svg class="Pathologist" viewBox="488.596 720.2 85.526 9.884">
			<path id="Pathologist" d="M 492.2640075683594 720.2000122070313 C 493.5150146484375 720.2000122070313 494.4949951171875 720.4990234375 495.2040100097656 721.0960083007813 C 495.9129943847656 721.6929931640625 496.2680053710938 722.5150146484375 496.2680053710938 723.5599975585938 C 496.2680053710938 724.60498046875 495.9129943847656 725.427001953125 495.2040100097656 726.0239868164063 C 494.4949951171875 726.6119995117188 493.5150146484375 726.906005859375 492.2640075683594 726.906005859375 L 489.6319885253906 726.906005859375 L 489.6319885253906 730 L 488.5960083007813 730 L 488.5960083007813 720.2000122070313 L 492.2640075683594 720.2000122070313 Z M 492.2359924316406 725.9959716796875 C 493.2070007324219 725.9959716796875 493.9490051269531 725.7860107421875 494.4620056152344 725.3660278320313 C 494.9750061035156 724.93701171875 495.2319946289063 724.3350219726563 495.2319946289063 723.5599975585938 C 495.2319946289063 722.7670288085938 494.9750061035156 722.1599731445313 494.4620056152344 721.739990234375 C 493.9490051269531 721.3109741210938 493.2070007324219 721.0960083007813 492.2359924316406 721.0960083007813 L 489.6319885253906 721.0960083007813 L 489.6319885253906 725.9959716796875 L 492.2359924316406 725.9959716796875 Z M 502.8179931640625 727.9559936523438 L 498.3800048828125 727.9559936523438 L 497.4559936523438 730 L 496.447998046875 730 L 500.1019897460938 722.0900268554688 L 501.0960083007813 722.0900268554688 L 504.75 730 L 503.7420043945313 730 L 502.8179931640625 727.9559936523438 Z M 502.4540100097656 727.1439819335938 L 500.6059875488281 723.0419921875 L 498.7439880371094 727.1439819335938 L 502.4540100097656 727.1439819335938 Z M 507.1369934082031 722.9299926757813 L 504.3510131835938 722.9299926757813 L 504.3510131835938 722.0900268554688 L 510.9309997558594 722.0900268554688 L 510.9309997558594 722.9299926757813 L 508.1449890136719 722.9299926757813 L 508.1449890136719 730 L 507.1369934082031 730 L 507.1369934082031 722.9299926757813 Z M 512.4500122070313 722.0900268554688 L 513.4580078125 722.0900268554688 L 513.4580078125 725.56201171875 L 518.260009765625 725.56201171875 L 518.260009765625 722.0900268554688 L 519.2680053710938 722.0900268554688 L 519.2680053710938 730 L 518.260009765625 730 L 518.260009765625 726.416015625 L 513.4580078125 726.416015625 L 513.4580078125 730 L 512.4500122070313 730 L 512.4500122070313 722.0900268554688 Z M 525.656005859375 730.083984375 C 524.8629760742188 730.083984375 524.1400146484375 729.9110107421875 523.4860229492188 729.5659790039063 C 522.8419799804688 729.2109985351563 522.333984375 728.7260131835938 521.9600219726563 728.1099853515625 C 521.5960083007813 727.4940185546875 521.4140014648438 726.802978515625 521.4140014648438 726.0380249023438 C 521.4140014648438 725.281982421875 521.5960083007813 724.5960083007813 521.9600219726563 723.97998046875 C 522.333984375 723.364013671875 522.8419799804688 722.8790283203125 523.4860229492188 722.5239868164063 C 524.1400146484375 722.1690063476563 524.8629760742188 721.9920043945313 525.656005859375 721.9920043945313 C 526.458984375 721.9920043945313 527.1820068359375 722.1690063476563 527.8259887695313 722.5239868164063 C 528.469970703125 722.8690185546875 528.9739990234375 723.35498046875 529.3380126953125 723.97998046875 C 529.7119750976563 724.5960083007813 529.8980102539063 725.281982421875 529.8980102539063 726.0380249023438 C 529.8980102539063 726.802978515625 529.7119750976563 727.4940185546875 529.3380126953125 728.1099853515625 C 528.9739990234375 728.7260131835938 528.469970703125 729.2109985351563 527.8259887695313 729.5659790039063 C 527.1820068359375 729.9110107421875 526.458984375 730.083984375 525.656005859375 730.083984375 Z M 525.656005859375 729.2160034179688 C 526.2630004882813 729.2160034179688 526.8140258789063 729.0809936523438 527.3079833984375 728.8099975585938 C 527.802978515625 728.530029296875 528.1900024414063 728.1519775390625 528.469970703125 727.676025390625 C 528.75 727.1909790039063 528.8900146484375 726.6489868164063 528.8900146484375 726.052001953125 C 528.8900146484375 725.4450073242188 528.75 724.9039916992188 528.469970703125 724.427978515625 C 528.1900024414063 723.9429931640625 527.802978515625 723.5650024414063 527.3079833984375 723.2940063476563 C 526.8140258789063 723.0139770507813 526.2630004882813 722.8740234375 525.656005859375 722.8740234375 C 525.0499877929688 722.8740234375 524.4990234375 723.0139770507813 524.0040283203125 723.2940063476563 C 523.510009765625 723.5650024414063 523.1220092773438 723.9429931640625 522.8419799804688 724.427978515625 C 522.56201171875 724.9039916992188 522.4219970703125 725.4450073242188 522.4219970703125 726.052001953125 C 522.4219970703125 726.6489868164063 522.56201171875 727.1909790039063 522.8419799804688 727.676025390625 C 523.1220092773438 728.1519775390625 523.510009765625 728.530029296875 524.0040283203125 728.8099975585938 C 524.4990234375 729.0809936523438 525.0499877929688 729.2160034179688 525.656005859375 729.2160034179688 Z M 532.0419921875 722.0900268554688 L 533.0499877929688 722.0900268554688 L 533.0499877929688 729.1599731445313 L 537.4600219726563 729.1599731445313 L 537.4600219726563 730 L 532.0419921875 730 L 532.0419921875 722.0900268554688 Z M 542.2949829101563 730.083984375 C 541.5020141601563 730.083984375 540.7780151367188 729.9110107421875 540.125 729.5659790039063 C 539.4810180664063 729.2109985351563 538.9719848632813 728.7260131835938 538.5989990234375 728.1099853515625 C 538.2349853515625 727.4940185546875 538.052978515625 726.802978515625 538.052978515625 726.0380249023438 C 538.052978515625 725.281982421875 538.2349853515625 724.5960083007813 538.5989990234375 723.97998046875 C 538.9719848632813 723.364013671875 539.4810180664063 722.8790283203125 540.125 722.5239868164063 C 540.7780151367188 722.1690063476563 541.5020141601563 721.9920043945313 542.2949829101563 721.9920043945313 C 543.0980224609375 721.9920043945313 543.8209838867188 722.1690063476563 544.4650268554688 722.5239868164063 C 545.1090087890625 722.8690185546875 545.6129760742188 723.35498046875 545.9769897460938 723.97998046875 C 546.3499755859375 724.5960083007813 546.5369873046875 725.281982421875 546.5369873046875 726.0380249023438 C 546.5369873046875 726.802978515625 546.3499755859375 727.4940185546875 545.9769897460938 728.1099853515625 C 545.6129760742188 728.7260131835938 545.1090087890625 729.2109985351563 544.4650268554688 729.5659790039063 C 543.8209838867188 729.9110107421875 543.0980224609375 730.083984375 542.2949829101563 730.083984375 Z M 542.2949829101563 729.2160034179688 C 542.9019775390625 729.2160034179688 543.4520263671875 729.0809936523438 543.947021484375 728.8099975585938 C 544.4420166015625 728.530029296875 544.8289794921875 728.1519775390625 545.1090087890625 727.676025390625 C 545.3889770507813 727.1909790039063 545.5289916992188 726.6489868164063 545.5289916992188 726.052001953125 C 545.5289916992188 725.4450073242188 545.3889770507813 724.9039916992188 545.1090087890625 724.427978515625 C 544.8289794921875 723.9429931640625 544.4420166015625 723.5650024414063 543.947021484375 723.2940063476563 C 543.4520263671875 723.0139770507813 542.9019775390625 722.8740234375 542.2949829101563 722.8740234375 C 541.68798828125 722.8740234375 541.1380004882813 723.0139770507813 540.6430053710938 723.2940063476563 C 540.1480102539063 723.5650024414063 539.760986328125 723.9429931640625 539.4810180664063 724.427978515625 C 539.2009887695313 724.9039916992188 539.0609741210938 725.4450073242188 539.0609741210938 726.052001953125 C 539.0609741210938 726.6489868164063 539.2009887695313 727.1909790039063 539.4810180664063 727.676025390625 C 539.760986328125 728.1519775390625 540.1480102539063 728.530029296875 540.6430053710938 728.8099975585938 C 541.1380004882813 729.0809936523438 541.68798828125 729.2160034179688 542.2949829101563 729.2160034179688 Z M 554.1690063476563 726.0380249023438 L 555.135009765625 726.0380249023438 L 555.135009765625 729.0759887695313 C 554.77099609375 729.4030151367188 554.3280029296875 729.655029296875 553.8049926757813 729.8319702148438 C 553.2919921875 730 552.75 730.083984375 552.1810302734375 730.083984375 C 551.3690185546875 730.083984375 550.635986328125 729.9110107421875 549.9829711914063 729.5659790039063 C 549.3300170898438 729.2109985351563 548.8159790039063 728.7260131835938 548.4429931640625 728.1099853515625 C 548.0700073242188 727.4940185546875 547.8829956054688 726.802978515625 547.8829956054688 726.0380249023438 C 547.8829956054688 725.281982421875 548.0650024414063 724.5960083007813 548.4290161132813 723.97998046875 C 548.802001953125 723.364013671875 549.3109741210938 722.8790283203125 549.9550170898438 722.5239868164063 C 550.6079711914063 722.1690063476563 551.3359985351563 721.9920043945313 552.1389770507813 721.9920043945313 C 553.4639892578125 721.9920043945313 554.4819946289063 722.3839721679688 555.1909790039063 723.1680297851563 L 554.5469970703125 723.8259887695313 C 553.9119873046875 723.1909790039063 553.114013671875 722.8740234375 552.1530151367188 722.8740234375 C 551.5369873046875 722.8740234375 550.9819946289063 723.0139770507813 550.4869995117188 723.2940063476563 C 549.9920043945313 723.5650024414063 549.5999755859375 723.9429931640625 549.3109741210938 724.427978515625 C 549.031005859375 724.9039916992188 548.8909912109375 725.4409790039063 548.8909912109375 726.0380249023438 C 548.8909912109375 726.635009765625 549.031005859375 727.177001953125 549.3109741210938 727.6619873046875 C 549.5999755859375 728.1380004882813 549.9920043945313 728.5159912109375 550.4869995117188 728.7960205078125 C 550.9910278320313 729.0670166015625 551.5599975585938 729.2020263671875 552.1950073242188 729.2020263671875 C 552.9600219726563 729.2020263671875 553.6179809570313 729.0150146484375 554.1690063476563 728.6420288085938 L 554.1690063476563 726.0380249023438 Z M 557.8140258789063 722.0900268554688 L 558.822021484375 722.0900268554688 L 558.822021484375 730 L 557.8140258789063 730 L 557.8140258789063 722.0900268554688 Z M 563.948974609375 730.083984375 C 563.3419799804688 730.083984375 562.7589721679688 729.9949951171875 562.198974609375 729.8179931640625 C 561.6480102539063 729.6309814453125 561.2139892578125 729.3889770507813 560.89697265625 729.0900268554688 L 561.3170166015625 728.3060302734375 C 561.6160278320313 728.5770263671875 562.0029907226563 728.801025390625 562.47900390625 728.97802734375 C 562.9639892578125 729.14599609375 563.4639892578125 729.22998046875 563.9769897460938 729.22998046875 C 564.6680297851563 729.22998046875 565.176025390625 729.1090087890625 565.5029907226563 728.8660278320313 C 565.8389892578125 728.6229858398438 566.0070190429688 728.3109741210938 566.0070190429688 727.927978515625 C 566.0070190429688 727.6290283203125 565.9140014648438 727.3909912109375 565.7269897460938 727.2139892578125 C 565.5399780273438 727.0269775390625 565.3070068359375 726.8870239257813 565.0269775390625 726.7940063476563 C 564.7470092773438 726.7009887695313 564.3690185546875 726.5980224609375 563.8930053710938 726.4860229492188 C 563.2960205078125 726.3460083007813 562.8150024414063 726.2059936523438 562.4509887695313 726.0659790039063 C 562.0869750976563 725.926025390625 561.7739868164063 725.7109985351563 561.5130004882813 725.4219970703125 C 561.260986328125 725.1229858398438 561.135009765625 724.7269897460938 561.135009765625 724.2319946289063 C 561.135009765625 723.5689697265625 561.4010009765625 723.0330200195313 561.9329833984375 722.6220092773438 C 562.4650268554688 722.2020263671875 563.2069702148438 721.9920043945313 564.1589965820313 721.9920043945313 C 564.635009765625 721.9920043945313 565.0969848632813 722.052978515625 565.5449829101563 722.1740112304688 C 566.0020141601563 722.2949829101563 566.3900146484375 722.468017578125 566.7069702148438 722.6920166015625 L 566.343017578125 723.5040283203125 C 565.7360229492188 723.0750122070313 564.9990234375 722.8599853515625 564.1309814453125 722.8599853515625 C 563.468017578125 722.8599853515625 562.968994140625 722.9860229492188 562.6329956054688 723.2379760742188 C 562.2969970703125 723.4810180664063 562.1290283203125 723.7979736328125 562.1290283203125 724.1900024414063 C 562.1290283203125 724.489013671875 562.2219848632813 724.7310180664063 562.4089965820313 724.9180297851563 C 562.5960083007813 725.094970703125 562.8289794921875 725.2310180664063 563.1090087890625 725.323974609375 C 563.3980102539063 725.4169921875 563.7860107421875 725.52001953125 564.27099609375 725.6320190429688 C 564.8590087890625 725.77197265625 565.3350219726563 725.9119873046875 565.698974609375 726.052001953125 C 566.06298828125 726.1829833984375 566.3709716796875 726.3930053710938 566.6229858398438 726.6820068359375 C 566.8839721679688 726.9710083007813 567.0150146484375 727.3590087890625 567.0150146484375 727.843994140625 C 567.0150146484375 728.5159912109375 566.7440185546875 729.0570068359375 566.2030029296875 729.468017578125 C 565.6710205078125 729.8790283203125 564.9199829101563 730.083984375 563.948974609375 730.083984375 Z M 570.3280029296875 722.9299926757813 L 567.5419921875 722.9299926757813 L 567.5419921875 722.0900268554688 L 574.1220092773438 722.0900268554688 L 574.1220092773438 722.9299926757813 L 571.3359985351563 722.9299926757813 L 571.3359985351563 730 L 570.3280029296875 730 L 570.3280029296875 722.9299926757813 Z">
			</path>
		</svg>
		<svg class="Title" viewBox="48.385 21.44 499.686 25.92">
			<path id="Title" d="M 61.84880065917969 47.36000061035156 C 59.3047981262207 47.36000061035156 57.00080108642578 46.80799865722656 54.93679809570313 45.70399856567383 C 52.89680099487305 44.57600021362305 51.28879928588867 43.02799987792969 50.11280059814453 41.06000137329102 C 48.96080017089844 39.09199905395508 48.38479995727539 36.87200164794922 48.38479995727539 34.40000152587891 C 48.38479995727539 31.92799949645996 48.97280120849609 29.70800018310547 50.14879989624023 27.73999977111816 C 51.32479858398438 25.77199935913086 52.93280029296875 24.23600006103516 54.97280120849609 23.13199996948242 C 57.03680038452148 22.00399971008301 59.34080123901367 21.44000053405762 61.88479995727539 21.44000053405762 C 63.94879913330078 21.44000053405762 65.83280181884766 21.79999923706055 67.53679656982422 22.52000045776367 C 69.24079895019531 23.23999977111816 70.68080139160156 24.28400039672852 71.85679626464844 25.65200042724609 L 68.83280181884766 28.49600028991699 C 67.00879669189453 26.52799987792969 64.76480102539063 25.54400062561035 62.10079956054688 25.54400062561035 C 60.37279891967773 25.54400062561035 58.82479858398438 25.92799949645996 57.4567985534668 26.69599914550781 C 56.08879852294922 27.44000053405762 55.02080154418945 28.48399925231934 54.25279998779297 29.82799911499023 C 53.48479843139648 31.17200088500977 53.10079956054688 32.69599914550781 53.10079956054688 34.40000152587891 C 53.10079956054688 36.10400009155273 53.48479843139648 37.62799835205078 54.25279998779297 38.97200012207031 C 55.02080154418945 40.31600189208984 56.08879852294922 41.37200164794922 57.4567985534668 42.13999938964844 C 58.82479858398438 42.88399887084961 60.37279891967773 43.25600051879883 62.10079956054688 43.25600051879883 C 64.76480102539063 43.25600051879883 67.00879669189453 42.2599983215332 68.83280181884766 40.26800155639648 L 71.85679626464844 43.14799880981445 C 70.68080139160156 44.51599884033203 69.22879791259766 45.56000137329102 67.50080108642578 46.27999877929688 C 65.79679870605469 47 63.91279983520508 47.36000061035156 61.84880065917969 47.36000061035156 Z M 87.58570098876953 47.36000061035156 C 85.0177001953125 47.36000061035156 82.70169830322266 46.80799865722656 80.63770294189453 45.70399856567383 C 78.57369995117188 44.57600021362305 76.95369720458984 43.02799987792969 75.77770233154297 41.06000137329102 C 74.60169982910156 39.06800079345703 74.01370239257813 36.84799957275391 74.01370239257813 34.40000152587891 C 74.01370239257813 31.95199966430664 74.60169982910156 29.74399948120117 75.77770233154297 27.77599906921387 C 76.95369720458984 25.78400039672852 78.57369995117188 24.23600006103516 80.63770294189453 23.13199996948242 C 82.70169830322266 22.00399971008301 85.0177001953125 21.44000053405762 87.58570098876953 21.44000053405762 C 90.15370178222656 21.44000053405762 92.46970367431641 22.00399971008301 94.53369903564453 23.13199996948242 C 96.59770202636719 24.23600006103516 98.21769714355469 25.77199935913086 99.39369964599609 27.73999977111816 C 100.5699996948242 29.70800018310547 101.1579971313477 31.92799949645996 101.1579971313477 34.40000152587891 C 101.1579971313477 36.87200164794922 100.5699996948242 39.09199905395508 99.39369964599609 41.06000137329102 C 98.21769714355469 43.02799987792969 96.59770202636719 44.57600021362305 94.53369903564453 45.70399856567383 C 92.46970367431641 46.80799865722656 90.15370178222656 47.36000061035156 87.58570098876953 47.36000061035156 Z M 87.58570098876953 43.25600051879883 C 89.26570129394531 43.25600051879883 90.77770233154297 42.88399887084961 92.12169647216797 42.13999938964844 C 93.4656982421875 41.37200164794922 94.52169799804688 40.31600189208984 95.28970336914063 38.97200012207031 C 96.05770111083984 37.60400009155273 96.44170379638672 36.08000183105469 96.44170379638672 34.40000152587891 C 96.44170379638672 32.72000122070313 96.05770111083984 31.20800018310547 95.28970336914063 29.86400032043457 C 94.52169799804688 28.49600028991699 93.4656982421875 27.44000053405762 92.12169647216797 26.69599914550781 C 90.77770233154297 25.92799949645996 89.26570129394531 25.54400062561035 87.58570098876953 25.54400062561035 C 85.90570068359375 25.54400062561035 84.39369964599609 25.92799949645996 83.04969787597656 26.69599914550781 C 81.70570373535156 27.44000053405762 80.64969635009766 28.49600028991699 79.88169860839844 29.86400032043457 C 79.11370086669922 31.20800018310547 78.72969818115234 32.72000122070313 78.72969818115234 34.40000152587891 C 78.72969818115234 36.08000183105469 79.11370086669922 37.60400009155273 79.88169860839844 38.97200012207031 C 80.64969635009766 40.31600189208984 81.70570373535156 41.37200164794922 83.04969787597656 42.13999938964844 C 84.39369964599609 42.88399887084961 85.90570068359375 43.25600051879883 87.58570098876953 43.25600051879883 Z M 129.2660064697266 47 L 129.2299957275391 30.29599952697754 L 120.9499969482422 44.11999893188477 L 118.8619995117188 44.11999893188477 L 110.5820007324219 30.51199913024902 L 110.5820007324219 47 L 106.1179962158203 47 L 106.1179962158203 21.79999923706055 L 109.9700012207031 21.79999923706055 L 119.9779968261719 38.50400161743164 L 129.8059997558594 21.79999923706055 L 133.6580047607422 21.79999923706055 L 133.6940002441406 47 L 129.2660064697266 47 Z M 150.8690032958984 21.79999923706055 C 153.0529937744141 21.79999923706055 154.9490051269531 22.15999984741211 156.5570068359375 22.8799991607666 C 158.1889953613281 23.60000038146973 159.4369964599609 24.63199996948242 160.3009948730469 25.97599983215332 C 161.1649932861328 27.31999969482422 161.5970001220703 28.91600036621094 161.5970001220703 30.76399993896484 C 161.5970001220703 32.5880012512207 161.1649932861328 34.18399810791016 160.3009948730469 35.55199813842773 C 159.4369964599609 36.89599990844727 158.1889953613281 37.92800140380859 156.5570068359375 38.64799880981445 C 154.9490051269531 39.36800003051758 153.0529937744141 39.72800064086914 150.8690032958984 39.72800064086914 L 145.1809997558594 39.72800064086914 L 145.1809997558594 47 L 140.5010070800781 47 L 140.5010070800781 21.79999923706055 L 150.8690032958984 21.79999923706055 Z M 150.6529998779297 35.76800155639648 C 152.6929931640625 35.76800155639648 154.2409973144531 35.33599853515625 155.2969970703125 34.47200012207031 C 156.3529968261719 33.60800170898438 156.8809967041016 32.37200164794922 156.8809967041016 30.76399993896484 C 156.8809967041016 29.1560001373291 156.3529968261719 27.92000007629395 155.2969970703125 27.05599975585938 C 154.2409973144531 26.1919994354248 152.6929931640625 25.76000022888184 150.6529998779297 25.76000022888184 L 145.1809997558594 25.76000022888184 L 145.1809997558594 35.76800155639648 L 150.6529998779297 35.76800155639648 Z M 166.27099609375 21.79999923706055 L 170.9510040283203 21.79999923706055 L 170.9510040283203 43.04000091552734 L 184.1269989013672 43.04000091552734 L 184.1269989013672 47 L 166.27099609375 47 L 166.27099609375 21.79999923706055 Z M 206.7220001220703 43.07600021362305 L 206.7220001220703 47 L 187.8220062255859 47 L 187.8220062255859 21.79999923706055 L 206.2180023193359 21.79999923706055 L 206.2180023193359 25.72400093078613 L 192.5019989013672 25.72400093078613 L 192.5019989013672 32.2760009765625 L 204.6699981689453 32.2760009765625 L 204.6699981689453 36.12799835205078 L 192.5019989013672 36.12799835205078 L 192.5019989013672 43.07600021362305 L 206.7220001220703 43.07600021362305 Z M 217.0509948730469 25.76000022888184 L 208.6990051269531 25.76000022888184 L 208.6990051269531 21.79999923706055 L 230.0829925537109 21.79999923706055 L 230.0829925537109 25.76000022888184 L 221.7310028076172 25.76000022888184 L 221.7310028076172 47 L 217.0509948730469 47 L 217.0509948730469 25.76000022888184 Z M 252.4949951171875 43.07600021362305 L 252.4949951171875 47 L 233.5950012207031 47 L 233.5950012207031 21.79999923706055 L 251.9909973144531 21.79999923706055 L 251.9909973144531 25.72400093078613 L 238.2749938964844 25.72400093078613 L 238.2749938964844 32.2760009765625 L 250.4429931640625 32.2760009765625 L 250.4429931640625 36.12799835205078 L 238.2749938964844 36.12799835205078 L 238.2749938964844 43.07600021362305 L 252.4949951171875 43.07600021362305 Z M 285.5169982910156 33.89599990844727 C 286.9089965820313 34.35200119018555 288.0130004882813 35.11999893188477 288.8290100097656 36.20000076293945 C 289.6449890136719 37.25600051879883 290.0530090332031 38.57600021362305 290.0530090332031 40.15999984741211 C 290.0530090332031 42.34400177001953 289.2130126953125 44.0359992980957 287.5329895019531 45.23600006103516 C 285.8529968261719 46.4119987487793 283.4049987792969 47 280.1889953613281 47 L 267.6610107421875 47 L 267.6610107421875 21.79999923706055 L 279.468994140625 21.79999923706055 C 282.4450073242188 21.79999923706055 284.7369995117188 22.38800048828125 286.3450012207031 23.56399917602539 C 287.9530029296875 24.71599960327148 288.7569885253906 26.3120002746582 288.7569885253906 28.35199928283691 C 288.7569885253906 29.60000038146973 288.468994140625 30.70400047302246 287.8930053710938 31.66399955749512 C 287.3169860839844 32.62400054931641 286.5249938964844 33.36800003051758 285.5169982910156 33.89599990844727 Z M 272.3410034179688 25.47200012207031 L 272.3410034179688 32.41999816894531 L 278.9649963378906 32.41999816894531 C 280.5969848632813 32.41999816894531 281.8450012207031 32.13199996948242 282.7090148925781 31.55599975585938 C 283.5969848632813 30.95599937438965 284.0409851074219 30.09199905395508 284.0409851074219 28.9640007019043 C 284.0409851074219 27.8120002746582 283.5969848632813 26.94799995422363 282.7090148925781 26.37199974060059 C 281.8450012207031 25.77199935913086 280.5969848632813 25.47200012207031 278.9649963378906 25.47200012207031 L 272.3410034179688 25.47200012207031 Z M 279.9010009765625 43.32799911499023 C 283.5249938964844 43.32799911499023 285.3370056152344 42.11600112915039 285.3370056152344 39.69200134277344 C 285.3370056152344 37.26800155639648 283.5249938964844 36.05599975585938 279.9010009765625 36.05599975585938 L 272.3410034179688 36.05599975585938 L 272.3410034179688 43.32799911499023 L 279.9010009765625 43.32799911499023 Z M 295.0480041503906 21.79999923706055 L 299.7279968261719 21.79999923706055 L 299.7279968261719 43.04000091552734 L 312.9039916992188 43.04000091552734 L 312.9039916992188 47 L 295.0480041503906 47 L 295.0480041503906 21.79999923706055 Z M 327.9140014648438 47.36000061035156 C 325.3460083007813 47.36000061035156 323.0299987792969 46.80799865722656 320.9660034179688 45.70399856567383 C 318.9020080566406 44.57600021362305 317.2820129394531 43.02799987792969 316.1059875488281 41.06000137329102 C 314.9299926757813 39.06800079345703 314.3420104980469 36.84799957275391 314.3420104980469 34.40000152587891 C 314.3420104980469 31.95199966430664 314.9299926757813 29.74399948120117 316.1059875488281 27.77599906921387 C 317.2820129394531 25.78400039672852 318.9020080566406 24.23600006103516 320.9660034179688 23.13199996948242 C 323.0299987792969 22.00399971008301 325.3460083007813 21.44000053405762 327.9140014648438 21.44000053405762 C 330.4819946289063 21.44000053405762 332.7980041503906 22.00399971008301 334.8619995117188 23.13199996948242 C 336.9259948730469 24.23600006103516 338.5459899902344 25.77199935913086 339.7219848632813 27.73999977111816 C 340.8980102539063 29.70800018310547 341.4859924316406 31.92799949645996 341.4859924316406 34.40000152587891 C 341.4859924316406 36.87200164794922 340.8980102539063 39.09199905395508 339.7219848632813 41.06000137329102 C 338.5459899902344 43.02799987792969 336.9259948730469 44.57600021362305 334.8619995117188 45.70399856567383 C 332.7980041503906 46.80799865722656 330.4819946289063 47.36000061035156 327.9140014648438 47.36000061035156 Z M 327.9140014648438 43.25600051879883 C 329.593994140625 43.25600051879883 331.1059875488281 42.88399887084961 332.4500122070313 42.13999938964844 C 333.7940063476563 41.37200164794922 334.8500061035156 40.31600189208984 335.6180114746094 38.97200012207031 C 336.385986328125 37.60400009155273 336.7699890136719 36.08000183105469 336.7699890136719 34.40000152587891 C 336.7699890136719 32.72000122070313 336.385986328125 31.20800018310547 335.6180114746094 29.86400032043457 C 334.8500061035156 28.49600028991699 333.7940063476563 27.44000053405762 332.4500122070313 26.69599914550781 C 331.1059875488281 25.92799949645996 329.593994140625 25.54400062561035 327.9140014648438 25.54400062561035 C 326.2340087890625 25.54400062561035 324.7219848632813 25.92799949645996 323.3779907226563 26.69599914550781 C 322.0339965820313 27.44000053405762 320.9779968261719 28.49600028991699 320.2099914550781 29.86400032043457 C 319.4419860839844 31.20800018310547 319.0580139160156 32.72000122070313 319.0580139160156 34.40000152587891 C 319.0580139160156 36.08000183105469 319.4419860839844 37.60400009155273 320.2099914550781 38.97200012207031 C 320.9779968261719 40.31600189208984 322.0339965820313 41.37200164794922 323.3779907226563 42.13999938964844 C 324.7219848632813 42.88399887084961 326.2340087890625 43.25600051879883 327.9140014648438 43.25600051879883 Z M 358.218994140625 47.36000061035156 C 355.6510009765625 47.36000061035156 353.3349914550781 46.80799865722656 351.27099609375 45.70399856567383 C 349.2070007324219 44.57600021362305 347.5870056152344 43.02799987792969 346.4110107421875 41.06000137329102 C 345.2349853515625 39.06800079345703 344.6470031738281 36.84799957275391 344.6470031738281 34.40000152587891 C 344.6470031738281 31.95199966430664 345.2349853515625 29.74399948120117 346.4110107421875 27.77599906921387 C 347.5870056152344 25.78400039672852 349.2070007324219 24.23600006103516 351.27099609375 23.13199996948242 C 353.3349914550781 22.00399971008301 355.6510009765625 21.44000053405762 358.218994140625 21.44000053405762 C 360.7869873046875 21.44000053405762 363.1029968261719 22.00399971008301 365.1669921875 23.13199996948242 C 367.2309875488281 24.23600006103516 368.8510131835938 25.77199935913086 370.0270080566406 27.73999977111816 C 371.2030029296875 29.70800018310547 371.7909851074219 31.92799949645996 371.7909851074219 34.40000152587891 C 371.7909851074219 36.87200164794922 371.2030029296875 39.09199905395508 370.0270080566406 41.06000137329102 C 368.8510131835938 43.02799987792969 367.2309875488281 44.57600021362305 365.1669921875 45.70399856567383 C 363.1029968261719 46.80799865722656 360.7869873046875 47.36000061035156 358.218994140625 47.36000061035156 Z M 358.218994140625 43.25600051879883 C 359.8989868164063 43.25600051879883 361.4110107421875 42.88399887084961 362.7550048828125 42.13999938964844 C 364.0989990234375 41.37200164794922 365.1549987792969 40.31600189208984 365.9230041503906 38.97200012207031 C 366.6910095214844 37.60400009155273 367.0750122070313 36.08000183105469 367.0750122070313 34.40000152587891 C 367.0750122070313 32.72000122070313 366.6910095214844 31.20800018310547 365.9230041503906 29.86400032043457 C 365.1549987792969 28.49600028991699 364.0989990234375 27.44000053405762 362.7550048828125 26.69599914550781 C 361.4110107421875 25.92799949645996 359.8989868164063 25.54400062561035 358.218994140625 25.54400062561035 C 356.5390014648438 25.54400062561035 355.0270080566406 25.92799949645996 353.6830139160156 26.69599914550781 C 352.3389892578125 27.44000053405762 351.2829895019531 28.49600028991699 350.5150146484375 29.86400032043457 C 349.7470092773438 31.20800018310547 349.3630065917969 32.72000122070313 349.3630065917969 34.40000152587891 C 349.3630065917969 36.08000183105469 349.7470092773438 37.60400009155273 350.5150146484375 38.97200012207031 C 351.2829895019531 40.31600189208984 352.3389892578125 41.37200164794922 353.6830139160156 42.13999938964844 C 355.0270080566406 42.88399887084961 356.5390014648438 43.25600051879883 358.218994140625 43.25600051879883 Z M 376.7510070800781 21.79999923706055 L 387.7669982910156 21.79999923706055 C 390.4549865722656 21.79999923706055 392.8429870605469 22.32799911499023 394.9309997558594 23.38400077819824 C 397.0190124511719 24.41600036621094 398.6390075683594 25.89200019836426 399.7909851074219 27.8120002746582 C 400.9429931640625 29.70800018310547 401.5190124511719 31.90399932861328 401.5190124511719 34.40000152587891 C 401.5190124511719 36.89599990844727 400.9429931640625 39.10400009155273 399.7909851074219 41.02399826049805 C 398.6390075683594 42.91999816894531 397.0190124511719 44.39599990844727 394.9309997558594 45.45199966430664 C 392.8429870605469 46.48400115966797 390.4549865722656 47 387.7669982910156 47 L 376.7510070800781 47 L 376.7510070800781 21.79999923706055 Z M 387.5509948730469 43.04000091552734 C 389.3989868164063 43.04000091552734 391.0190124511719 42.69200134277344 392.4110107421875 41.99599838256836 C 393.8269958496094 41.2760009765625 394.9070129394531 40.26800155639648 395.6510009765625 38.97200012207031 C 396.4190063476563 37.65200042724609 396.8030090332031 36.12799835205078 396.8030090332031 34.40000152587891 C 396.8030090332031 32.67200088500977 396.4190063476563 31.15999984741211 395.6510009765625 29.86400032043457 C 394.9070129394531 28.54400062561035 393.8269958496094 27.5359992980957 392.4110107421875 26.84000015258789 C 391.0190124511719 26.1200008392334 389.3989868164063 25.76000022888184 387.5509948730469 25.76000022888184 L 381.4309997558594 25.76000022888184 L 381.4309997558594 43.04000091552734 L 387.5509948730469 43.04000091552734 Z M 428.1069946289063 47.36000061035156 C 425.56298828125 47.36000061035156 423.2590026855469 46.80799865722656 421.1950073242188 45.70399856567383 C 419.1549987792969 44.57600021362305 417.5469970703125 43.02799987792969 416.3710021972656 41.06000137329102 C 415.218994140625 39.09199905395508 414.6430053710938 36.87200164794922 414.6430053710938 34.40000152587891 C 414.6430053710938 31.92799949645996 415.2309875488281 29.70800018310547 416.4070129394531 27.73999977111816 C 417.5830078125 25.77199935913086 419.1910095214844 24.23600006103516 421.2309875488281 23.13199996948242 C 423.2950134277344 22.00399971008301 425.5989990234375 21.44000053405762 428.1430053710938 21.44000053405762 C 430.2070007324219 21.44000053405762 432.0910034179688 21.79999923706055 433.7950134277344 22.52000045776367 C 435.4989929199219 23.23999977111816 436.9389953613281 24.28400039672852 438.114990234375 25.65200042724609 L 435.0910034179688 28.49600028991699 C 433.2669982910156 26.52799987792969 431.0230102539063 25.54400062561035 428.3590087890625 25.54400062561035 C 426.6310119628906 25.54400062561035 425.0830078125 25.92799949645996 423.7149963378906 26.69599914550781 C 422.3469848632813 27.44000053405762 421.2789916992188 28.48399925231934 420.510986328125 29.82799911499023 C 419.7430114746094 31.17200088500977 419.3590087890625 32.69599914550781 419.3590087890625 34.40000152587891 C 419.3590087890625 36.10400009155273 419.7430114746094 37.62799835205078 420.510986328125 38.97200012207031 C 421.2789916992188 40.31600189208984 422.3469848632813 41.37200164794922 423.7149963378906 42.13999938964844 C 425.0830078125 42.88399887084961 426.6310119628906 43.25600051879883 428.3590087890625 43.25600051879883 C 431.0230102539063 43.25600051879883 433.2669982910156 42.2599983215332 435.0910034179688 40.26800155639648 L 438.114990234375 43.14799880981445 C 436.9389953613281 44.51599884033203 435.4869995117188 45.56000137329102 433.7590026855469 46.27999877929688 C 432.0549926757813 47 430.1709899902344 47.36000061035156 428.1069946289063 47.36000061035156 Z M 453.843994140625 47.36000061035156 C 451.2760009765625 47.36000061035156 448.9599914550781 46.80799865722656 446.89599609375 45.70399856567383 C 444.8320007324219 44.57600021362305 443.2120056152344 43.02799987792969 442.0360107421875 41.06000137329102 C 440.8599853515625 39.06800079345703 440.2720031738281 36.84799957275391 440.2720031738281 34.40000152587891 C 440.2720031738281 31.95199966430664 440.8599853515625 29.74399948120117 442.0360107421875 27.77599906921387 C 443.2120056152344 25.78400039672852 444.8320007324219 24.23600006103516 446.89599609375 23.13199996948242 C 448.9599914550781 22.00399971008301 451.2760009765625 21.44000053405762 453.843994140625 21.44000053405762 C 456.4119873046875 21.44000053405762 458.7279968261719 22.00399971008301 460.7919921875 23.13199996948242 C 462.8559875488281 24.23600006103516 464.4760131835938 25.77199935913086 465.6520080566406 27.73999977111816 C 466.8280029296875 29.70800018310547 467.4159851074219 31.92799949645996 467.4159851074219 34.40000152587891 C 467.4159851074219 36.87200164794922 466.8280029296875 39.09199905395508 465.6520080566406 41.06000137329102 C 464.4760131835938 43.02799987792969 462.8559875488281 44.57600021362305 460.7919921875 45.70399856567383 C 458.7279968261719 46.80799865722656 456.4119873046875 47.36000061035156 453.843994140625 47.36000061035156 Z M 453.843994140625 43.25600051879883 C 455.5239868164063 43.25600051879883 457.0360107421875 42.88399887084961 458.3800048828125 42.13999938964844 C 459.7239990234375 41.37200164794922 460.7799987792969 40.31600189208984 461.5480041503906 38.97200012207031 C 462.3160095214844 37.60400009155273 462.7000122070313 36.08000183105469 462.7000122070313 34.40000152587891 C 462.7000122070313 32.72000122070313 462.3160095214844 31.20800018310547 461.5480041503906 29.86400032043457 C 460.7799987792969 28.49600028991699 459.7239990234375 27.44000053405762 458.3800048828125 26.69599914550781 C 457.0360107421875 25.92799949645996 455.5239868164063 25.54400062561035 453.843994140625 25.54400062561035 C 452.1640014648438 25.54400062561035 450.6520080566406 25.92799949645996 449.3080139160156 26.69599914550781 C 447.9639892578125 27.44000053405762 446.9079895019531 28.49600028991699 446.1400146484375 29.86400032043457 C 445.3720092773438 31.20800018310547 444.9880065917969 32.72000122070313 444.9880065917969 34.40000152587891 C 444.9880065917969 36.08000183105469 445.3720092773438 37.60400009155273 446.1400146484375 38.97200012207031 C 446.9079895019531 40.31600189208984 447.9639892578125 41.37200164794922 449.3080139160156 42.13999938964844 C 450.6520080566406 42.88399887084961 452.1640014648438 43.25600051879883 453.843994140625 43.25600051879883 Z M 483.2120056152344 47.36000061035156 C 479.7319946289063 47.36000061035156 477.0199890136719 46.38800048828125 475.0759887695313 44.44400024414063 C 473.1319885253906 42.47600173950195 472.1600036621094 39.66799926757813 472.1600036621094 36.02000045776367 L 472.1600036621094 21.79999923706055 L 476.8399963378906 21.79999923706055 L 476.8399963378906 35.84000015258789 C 476.8399963378906 40.78400039672852 478.9760131835938 43.25600051879883 483.2479858398438 43.25600051879883 C 487.4960021972656 43.25600051879883 489.6199951171875 40.78400039672852 489.6199951171875 35.84000015258789 L 489.6199951171875 21.79999923706055 L 494.2279968261719 21.79999923706055 L 494.2279968261719 36.02000045776367 C 494.2279968261719 39.66799926757813 493.2560119628906 42.47600173950195 491.31201171875 44.44400024414063 C 489.3919982910156 46.38800048828125 486.6919860839844 47.36000061035156 483.2120056152344 47.36000061035156 Z M 523.1740112304688 21.79999923706055 L 523.1740112304688 47 L 519.322021484375 47 L 505.4259948730469 29.93600082397461 L 505.4259948730469 47 L 500.7820129394531 47 L 500.7820129394531 21.79999923706055 L 504.6340026855469 21.79999923706055 L 518.530029296875 38.86399841308594 L 518.530029296875 21.79999923706055 L 523.1740112304688 21.79999923706055 Z M 535.0390014648438 25.76000022888184 L 526.68701171875 25.76000022888184 L 526.68701171875 21.79999923706055 L 548.0709838867188 21.79999923706055 L 548.0709838867188 25.76000022888184 L 539.718994140625 25.76000022888184 L 539.718994140625 47 L 535.0390014648438 47 L 535.0390014648438 25.76000022888184 Z">
			</path>
		</svg>
		<svg class="Upper_Rectangle">
			<rect id="Upper_Rectangle" rx="0" ry="0" x="0" y="0" width="595" height="9">
			</rect>
		</svg>
	</div>
	<div id="Lifestyle_Suggestion">
		<svg class="Lifestyle_Suggestions" viewBox="187.088 603.22 220.832 12.96">
			<path id="Lifestyle_Suggestions" d="M 187.0879974365234 603.4000244140625 L 189.4279937744141 603.4000244140625 L 189.4279937744141 614.02001953125 L 196.0160064697266 614.02001953125 L 196.0160064697266 616 L 187.0879974365234 616 L 187.0879974365234 603.4000244140625 Z M 197.8630065917969 603.4000244140625 L 200.2030029296875 603.4000244140625 L 200.2030029296875 616 L 197.8630065917969 616 L 197.8630065917969 603.4000244140625 Z M 205.9510040283203 605.3619995117188 L 205.9510040283203 609.1959838867188 L 212.0350036621094 609.1959838867188 L 212.0350036621094 611.176025390625 L 205.9510040283203 611.176025390625 L 205.9510040283203 616 L 203.6109924316406 616 L 203.6109924316406 603.4000244140625 L 212.8090057373047 603.4000244140625 L 212.8090057373047 605.3619995117188 L 205.9510040283203 605.3619995117188 Z M 224.5220031738281 614.0380249023438 L 224.5220031738281 616 L 215.0720062255859 616 L 215.0720062255859 603.4000244140625 L 224.2700042724609 603.4000244140625 L 224.2700042724609 605.3619995117188 L 217.4120025634766 605.3619995117188 L 217.4120025634766 608.6380004882813 L 223.4960021972656 608.6380004882813 L 223.4960021972656 610.5640258789063 L 217.4120025634766 610.5640258789063 L 217.4120025634766 614.0380249023438 L 224.5220031738281 614.0380249023438 Z M 231.0359954833984 616.1799926757813 C 230.0639953613281 616.1799926757813 229.1219940185547 616.0419921875 228.2100067138672 615.7659912109375 C 227.3099975585938 615.489990234375 226.5959930419922 615.1240234375 226.0679931640625 614.6680297851563 L 226.8780059814453 612.8499755859375 C 227.3939971923828 613.2579956054688 228.0240020751953 613.593994140625 228.7680053710938 613.8579711914063 C 229.5240020751953 614.1099853515625 230.2799987792969 614.2360229492188 231.0359954833984 614.2360229492188 C 231.9720001220703 614.2360229492188 232.6679992675781 614.0859985351563 233.1239929199219 613.7860107421875 C 233.5919952392578 613.4860229492188 233.8260040283203 613.0900268554688 233.8260040283203 612.5980224609375 C 233.8260040283203 612.2379760742188 233.6940002441406 611.9439697265625 233.4299926757813 611.7160034179688 C 233.1779937744141 611.4760131835938 232.85400390625 611.2899780273438 232.4579925537109 611.1580200195313 C 232.0619964599609 611.0260009765625 231.5220031738281 610.8759765625 230.8379974365234 610.7080078125 C 229.8780059814453 610.47998046875 229.0980072021484 610.2520141601563 228.4980010986328 610.0239868164063 C 227.9100036621094 609.7960205078125 227.3999938964844 609.4420166015625 226.9680023193359 608.9619750976563 C 226.5480041503906 608.469970703125 226.3379974365234 607.8099975585938 226.3379974365234 606.9819946289063 C 226.3379974365234 606.2860107421875 226.5240020751953 605.656005859375 226.89599609375 605.0919799804688 C 227.2799987792969 604.5159912109375 227.8500061035156 604.0599975585938 228.6060028076172 603.7239990234375 C 229.3739929199219 603.3880004882813 230.3099975585938 603.219970703125 231.4140014648438 603.219970703125 C 232.1820068359375 603.219970703125 232.9380035400391 603.3159790039063 233.6820068359375 603.5079956054688 C 234.4259948730469 603.7000122070313 235.0679931640625 603.9760131835938 235.6080017089844 604.3359985351563 L 234.8699951171875 606.1539916992188 C 234.3179931640625 605.8300170898438 233.7420043945313 605.583984375 233.1419982910156 605.416015625 C 232.5420074462891 605.2479858398438 231.9600067138672 605.1640014648438 231.39599609375 605.1640014648438 C 230.4720001220703 605.1640014648438 229.7819976806641 605.3200073242188 229.3260040283203 605.6320190429688 C 228.8820037841797 605.9439697265625 228.6600036621094 606.3579711914063 228.6600036621094 606.8740234375 C 228.6600036621094 607.2340087890625 228.7859954833984 607.5280151367188 229.0379943847656 607.7559814453125 C 229.302001953125 607.9840087890625 229.6320037841797 608.1640014648438 230.0279998779297 608.2960205078125 C 230.4239959716797 608.427978515625 230.9640045166016 608.5780029296875 231.6479949951172 608.7459716796875 C 232.5839996337891 608.9619750976563 233.3520050048828 609.1900024414063 233.9519958496094 609.4299926757813 C 234.552001953125 609.6580200195313 235.0619964599609 610.0120239257813 235.4819946289063 610.4920043945313 C 235.9140014648438 610.9719848632813 236.1300048828125 611.6199951171875 236.1300048828125 612.4359741210938 C 236.1300048828125 613.1320190429688 235.9380035400391 613.7620239257813 235.5540008544922 614.3259887695313 C 235.1820068359375 614.8900146484375 234.6119995117188 615.3400268554688 233.843994140625 615.676025390625 C 233.0760040283203 616.0120239257813 232.1399993896484 616.1799926757813 231.0359954833984 616.1799926757813 Z M 240.8309936523438 605.3800048828125 L 236.6549987792969 605.3800048828125 L 236.6549987792969 603.4000244140625 L 247.3470001220703 603.4000244140625 L 247.3470001220703 605.3800048828125 L 243.1710052490234 605.3800048828125 L 243.1710052490234 616 L 240.8309936523438 616 L 240.8309936523438 605.3800048828125 Z M 254.3630065917969 611.5540161132813 L 254.3630065917969 616 L 252.0229949951172 616 L 252.0229949951172 611.5900268554688 L 247.072998046875 603.4000244140625 L 249.5749969482422 603.4000244140625 L 253.2649993896484 609.5380249023438 L 256.9909973144531 603.4000244140625 L 259.2950134277344 603.4000244140625 L 254.3630065917969 611.5540161132813 Z M 260.6520080566406 603.4000244140625 L 262.9920043945313 603.4000244140625 L 262.9920043945313 614.02001953125 L 269.5799865722656 614.02001953125 L 269.5799865722656 616 L 260.6520080566406 616 L 260.6520080566406 603.4000244140625 Z M 280.8770141601563 614.0380249023438 L 280.8770141601563 616 L 271.427001953125 616 L 271.427001953125 603.4000244140625 L 280.625 603.4000244140625 L 280.625 605.3619995117188 L 273.7669982910156 605.3619995117188 L 273.7669982910156 608.6380004882813 L 279.8510131835938 608.6380004882813 L 279.8510131835938 610.5640258789063 L 273.7669982910156 610.5640258789063 L 273.7669982910156 614.0380249023438 L 280.8770141601563 614.0380249023438 Z M 292.3670043945313 616.1799926757813 C 291.3949890136719 616.1799926757813 290.4530029296875 616.0419921875 289.5409851074219 615.7659912109375 C 288.6409912109375 615.489990234375 287.927001953125 615.1240234375 287.3989868164063 614.6680297851563 L 288.2090148925781 612.8499755859375 C 288.7250061035156 613.2579956054688 289.3550109863281 613.593994140625 290.0989990234375 613.8579711914063 C 290.8550109863281 614.1099853515625 291.6109924316406 614.2360229492188 292.3670043945313 614.2360229492188 C 293.3030090332031 614.2360229492188 293.9989929199219 614.0859985351563 294.4549865722656 613.7860107421875 C 294.9230041503906 613.4860229492188 295.1570129394531 613.0900268554688 295.1570129394531 612.5980224609375 C 295.1570129394531 612.2379760742188 295.0249938964844 611.9439697265625 294.760986328125 611.7160034179688 C 294.5090026855469 611.4760131835938 294.1849975585938 611.2899780273438 293.7890014648438 611.1580200195313 C 293.3930053710938 611.0260009765625 292.8529968261719 610.8759765625 292.1690063476563 610.7080078125 C 291.2090148925781 610.47998046875 290.4289855957031 610.2520141601563 289.8290100097656 610.0239868164063 C 289.2409973144531 609.7960205078125 288.7309875488281 609.4420166015625 288.2990112304688 608.9619750976563 C 287.8789978027344 608.469970703125 287.6690063476563 607.8099975585938 287.6690063476563 606.9819946289063 C 287.6690063476563 606.2860107421875 287.8550109863281 605.656005859375 288.2269897460938 605.0919799804688 C 288.6109924316406 604.5159912109375 289.1809997558594 604.0599975585938 289.93701171875 603.7239990234375 C 290.7049865722656 603.3880004882813 291.6409912109375 603.219970703125 292.7449951171875 603.219970703125 C 293.5130004882813 603.219970703125 294.2690124511719 603.3159790039063 295.0130004882813 603.5079956054688 C 295.7569885253906 603.7000122070313 296.3989868164063 603.9760131835938 296.9389953613281 604.3359985351563 L 296.2009887695313 606.1539916992188 C 295.6489868164063 605.8300170898438 295.072998046875 605.583984375 294.4729919433594 605.416015625 C 293.8729858398438 605.2479858398438 293.2909851074219 605.1640014648438 292.7269897460938 605.1640014648438 C 291.8030090332031 605.1640014648438 291.1130065917969 605.3200073242188 290.6570129394531 605.6320190429688 C 290.2130126953125 605.9439697265625 289.9909973144531 606.3579711914063 289.9909973144531 606.8740234375 C 289.9909973144531 607.2340087890625 290.1170043945313 607.5280151367188 290.3689880371094 607.7559814453125 C 290.6329956054688 607.9840087890625 290.9630126953125 608.1640014648438 291.3590087890625 608.2960205078125 C 291.7550048828125 608.427978515625 292.2950134277344 608.5780029296875 292.97900390625 608.7459716796875 C 293.9150085449219 608.9619750976563 294.6830139160156 609.1900024414063 295.2829895019531 609.4299926757813 C 295.8829956054688 609.6580200195313 296.3930053710938 610.0120239257813 296.81298828125 610.4920043945313 C 297.2449951171875 610.9719848632813 297.4609985351563 611.6199951171875 297.4609985351563 612.4359741210938 C 297.4609985351563 613.1320190429688 297.2690124511719 613.7620239257813 296.885009765625 614.3259887695313 C 296.5130004882813 614.8900146484375 295.9429931640625 615.3400268554688 295.1749877929688 615.676025390625 C 294.4070129394531 616.0120239257813 293.4710083007813 616.1799926757813 292.3670043945313 616.1799926757813 Z M 305.1990051269531 616.1799926757813 C 303.4590148925781 616.1799926757813 302.1029968261719 615.6939697265625 301.1310119628906 614.7219848632813 C 300.1589965820313 613.7379760742188 299.6730041503906 612.333984375 299.6730041503906 610.510009765625 L 299.6730041503906 603.4000244140625 L 302.0130004882813 603.4000244140625 L 302.0130004882813 610.4199829101563 C 302.0130004882813 612.8920288085938 303.0809936523438 614.1279907226563 305.2170104980469 614.1279907226563 C 307.3410034179688 614.1279907226563 308.4030151367188 612.8920288085938 308.4030151367188 610.4199829101563 L 308.4030151367188 603.4000244140625 L 310.7070007324219 603.4000244140625 L 310.7070007324219 610.510009765625 C 310.7070007324219 612.333984375 310.2210083007813 613.7379760742188 309.2489929199219 614.7219848632813 C 308.2890014648438 615.6939697265625 306.9389953613281 616.1799926757813 305.1990051269531 616.1799926757813 Z M 322.5880126953125 609.5560302734375 L 324.802001953125 609.5560302734375 L 324.802001953125 614.5780029296875 C 324.1539916992188 615.093994140625 323.3980102539063 615.489990234375 322.5339965820313 615.7659912109375 C 321.6700134277344 616.0419921875 320.7820129394531 616.1799926757813 319.8699951171875 616.1799926757813 C 318.5859985351563 616.1799926757813 317.4280090332031 615.9039916992188 316.39599609375 615.3519897460938 C 315.364013671875 614.7880249023438 314.5539855957031 614.0139770507813 313.9660034179688 613.030029296875 C 313.3779907226563 612.0460205078125 313.0840148925781 610.9359741210938 313.0840148925781 609.7000122070313 C 313.0840148925781 608.4639892578125 313.3779907226563 607.35400390625 313.9660034179688 606.3699951171875 C 314.5539855957031 605.385986328125 315.364013671875 604.6179809570313 316.39599609375 604.0659790039063 C 317.4400024414063 603.5020141601563 318.6099853515625 603.219970703125 319.906005859375 603.219970703125 C 320.9620056152344 603.219970703125 321.9219970703125 603.3939819335938 322.7860107421875 603.7420043945313 C 323.6499938964844 604.0900268554688 324.3760070800781 604.5999755859375 324.9639892578125 605.27197265625 L 323.4880065917969 606.7119750976563 C 322.5280151367188 605.7520141601563 321.3699951171875 605.27197265625 320.0140075683594 605.27197265625 C 319.1260070800781 605.27197265625 318.3340148925781 605.4580078125 317.6380004882813 605.8300170898438 C 316.9540100097656 606.2020263671875 316.4140014648438 606.7239990234375 316.0180053710938 607.39599609375 C 315.6340026855469 608.0679931640625 315.4419860839844 608.8359985351563 315.4419860839844 609.7000122070313 C 315.4419860839844 610.5399780273438 315.6340026855469 611.2960205078125 316.0180053710938 611.968017578125 C 316.4140014648438 612.6400146484375 316.9540100097656 613.1680297851563 317.6380004882813 613.552001953125 C 318.3340148925781 613.9359741210938 319.1199951171875 614.1279907226563 319.9960021972656 614.1279907226563 C 320.9800109863281 614.1279907226563 321.843994140625 613.9119873046875 322.5880126953125 613.47998046875 L 322.5880126953125 609.5560302734375 Z M 336.4920043945313 609.5560302734375 L 338.7059936523438 609.5560302734375 L 338.7059936523438 614.5780029296875 C 338.0580139160156 615.093994140625 337.302001953125 615.489990234375 336.43798828125 615.7659912109375 C 335.5740051269531 616.0419921875 334.6860046386719 616.1799926757813 333.7739868164063 616.1799926757813 C 332.489990234375 616.1799926757813 331.3320007324219 615.9039916992188 330.2999877929688 615.3519897460938 C 329.2680053710938 614.7880249023438 328.4580078125 614.0139770507813 327.8699951171875 613.030029296875 C 327.2820129394531 612.0460205078125 326.9880065917969 610.9359741210938 326.9880065917969 609.7000122070313 C 326.9880065917969 608.4639892578125 327.2820129394531 607.35400390625 327.8699951171875 606.3699951171875 C 328.4580078125 605.385986328125 329.2680053710938 604.6179809570313 330.2999877929688 604.0659790039063 C 331.343994140625 603.5020141601563 332.5140075683594 603.219970703125 333.8099975585938 603.219970703125 C 334.8659973144531 603.219970703125 335.8259887695313 603.3939819335938 336.6900024414063 603.7420043945313 C 337.5539855957031 604.0900268554688 338.2799987792969 604.5999755859375 338.8680114746094 605.27197265625 L 337.3919982910156 606.7119750976563 C 336.4320068359375 605.7520141601563 335.2739868164063 605.27197265625 333.9179992675781 605.27197265625 C 333.0299987792969 605.27197265625 332.2380065917969 605.4580078125 331.5419921875 605.8300170898438 C 330.8580017089844 606.2020263671875 330.3179931640625 606.7239990234375 329.9219970703125 607.39599609375 C 329.5379943847656 608.0679931640625 329.3460083007813 608.8359985351563 329.3460083007813 609.7000122070313 C 329.3460083007813 610.5399780273438 329.5379943847656 611.2960205078125 329.9219970703125 611.968017578125 C 330.3179931640625 612.6400146484375 330.8580017089844 613.1680297851563 331.5419921875 613.552001953125 C 332.2380065917969 613.9359741210938 333.0239868164063 614.1279907226563 333.8999938964844 614.1279907226563 C 334.8840026855469 614.1279907226563 335.7479858398438 613.9119873046875 336.4920043945313 613.47998046875 L 336.4920043945313 609.5560302734375 Z M 351.2430114746094 614.0380249023438 L 351.2430114746094 616 L 341.7929992675781 616 L 341.7929992675781 603.4000244140625 L 350.9909973144531 603.4000244140625 L 350.9909973144531 605.3619995117188 L 344.1329956054688 605.3619995117188 L 344.1329956054688 608.6380004882813 L 350.2170104980469 608.6380004882813 L 350.2170104980469 610.5640258789063 L 344.1329956054688 610.5640258789063 L 344.1329956054688 614.0380249023438 L 351.2430114746094 614.0380249023438 Z M 357.7569885253906 616.1799926757813 C 356.7850036621094 616.1799926757813 355.8429870605469 616.0419921875 354.9309997558594 615.7659912109375 C 354.031005859375 615.489990234375 353.3169860839844 615.1240234375 352.7890014648438 614.6680297851563 L 353.5989990234375 612.8499755859375 C 354.114990234375 613.2579956054688 354.7449951171875 613.593994140625 355.489013671875 613.8579711914063 C 356.2449951171875 614.1099853515625 357.0010070800781 614.2360229492188 357.7569885253906 614.2360229492188 C 358.6929931640625 614.2360229492188 359.3890075683594 614.0859985351563 359.8450012207031 613.7860107421875 C 360.31298828125 613.4860229492188 360.5469970703125 613.0900268554688 360.5469970703125 612.5980224609375 C 360.5469970703125 612.2379760742188 360.4150085449219 611.9439697265625 360.1510009765625 611.7160034179688 C 359.8989868164063 611.4760131835938 359.5750122070313 611.2899780273438 359.1789855957031 611.1580200195313 C 358.7829895019531 611.0260009765625 358.2430114746094 610.8759765625 357.5589904785156 610.7080078125 C 356.5989990234375 610.47998046875 355.8190002441406 610.2520141601563 355.218994140625 610.0239868164063 C 354.6310119628906 609.7960205078125 354.1210021972656 609.4420166015625 353.6889953613281 608.9619750976563 C 353.2690124511719 608.469970703125 353.0589904785156 607.8099975585938 353.0589904785156 606.9819946289063 C 353.0589904785156 606.2860107421875 353.2449951171875 605.656005859375 353.6170043945313 605.0919799804688 C 354.0010070800781 604.5159912109375 354.5710144042969 604.0599975585938 355.3269958496094 603.7239990234375 C 356.0950012207031 603.3880004882813 357.031005859375 603.219970703125 358.135009765625 603.219970703125 C 358.9030151367188 603.219970703125 359.6589965820313 603.3159790039063 360.4030151367188 603.5079956054688 C 361.1470031738281 603.7000122070313 361.7890014648438 603.9760131835938 362.3290100097656 604.3359985351563 L 361.5910034179688 606.1539916992188 C 361.0390014648438 605.8300170898438 360.4630126953125 605.583984375 359.8630065917969 605.416015625 C 359.2630004882813 605.2479858398438 358.6809997558594 605.1640014648438 358.1170043945313 605.1640014648438 C 357.1929931640625 605.1640014648438 356.5029907226563 605.3200073242188 356.0469970703125 605.6320190429688 C 355.6029968261719 605.9439697265625 355.3810119628906 606.3579711914063 355.3810119628906 606.8740234375 C 355.3810119628906 607.2340087890625 355.5069885253906 607.5280151367188 355.7590026855469 607.7559814453125 C 356.0230102539063 607.9840087890625 356.3529968261719 608.1640014648438 356.7489929199219 608.2960205078125 C 357.1449890136719 608.427978515625 357.6849975585938 608.5780029296875 358.3689880371094 608.7459716796875 C 359.3049926757813 608.9619750976563 360.072998046875 609.1900024414063 360.6730041503906 609.4299926757813 C 361.2730102539063 609.6580200195313 361.7829895019531 610.0120239257813 362.2030029296875 610.4920043945313 C 362.635009765625 610.9719848632813 362.8510131835938 611.6199951171875 362.8510131835938 612.4359741210938 C 362.8510131835938 613.1320190429688 362.6589965820313 613.7620239257813 362.2749938964844 614.3259887695313 C 361.9030151367188 614.8900146484375 361.3330078125 615.3400268554688 360.5650024414063 615.676025390625 C 359.7969970703125 616.0120239257813 358.8609924316406 616.1799926757813 357.7569885253906 616.1799926757813 Z M 367.552001953125 605.3800048828125 L 363.3760070800781 605.3800048828125 L 363.3760070800781 603.4000244140625 L 374.0679931640625 603.4000244140625 L 374.0679931640625 605.3800048828125 L 369.8919982910156 605.3800048828125 L 369.8919982910156 616 L 367.552001953125 616 L 367.552001953125 605.3800048828125 Z M 375.8240051269531 603.4000244140625 L 378.1640014648438 603.4000244140625 L 378.1640014648438 616 L 375.8240051269531 616 L 375.8240051269531 603.4000244140625 Z M 387.4580078125 616.1799926757813 C 386.1740112304688 616.1799926757813 385.0159912109375 615.9039916992188 383.9840087890625 615.3519897460938 C 382.9519958496094 614.7880249023438 382.1419982910156 614.0139770507813 381.5539855957031 613.030029296875 C 380.9660034179688 612.0339965820313 380.6719970703125 610.9240112304688 380.6719970703125 609.7000122070313 C 380.6719970703125 608.4760131835938 380.9660034179688 607.3720092773438 381.5539855957031 606.3880004882813 C 382.1419982910156 605.3920288085938 382.9519958496094 604.6179809570313 383.9840087890625 604.0659790039063 C 385.0159912109375 603.5020141601563 386.1740112304688 603.219970703125 387.4580078125 603.219970703125 C 388.7420043945313 603.219970703125 389.8999938964844 603.5020141601563 390.9320068359375 604.0659790039063 C 391.9639892578125 604.6179809570313 392.7739868164063 605.385986328125 393.3619995117188 606.3699951171875 C 393.9500122070313 607.35400390625 394.2439880371094 608.4639892578125 394.2439880371094 609.7000122070313 C 394.2439880371094 610.9359741210938 393.9500122070313 612.0460205078125 393.3619995117188 613.030029296875 C 392.7739868164063 614.0139770507813 391.9639892578125 614.7880249023438 390.9320068359375 615.3519897460938 C 389.8999938964844 615.9039916992188 388.7420043945313 616.1799926757813 387.4580078125 616.1799926757813 Z M 387.4580078125 614.1279907226563 C 388.2980041503906 614.1279907226563 389.0539855957031 613.9420166015625 389.7260131835938 613.5700073242188 C 390.3980102539063 613.1859741210938 390.9259948730469 612.6580200195313 391.3099975585938 611.9860229492188 C 391.6940002441406 611.302001953125 391.885986328125 610.5399780273438 391.885986328125 609.7000122070313 C 391.885986328125 608.8599853515625 391.6940002441406 608.10400390625 391.3099975585938 607.4320068359375 C 390.9259948730469 606.7479858398438 390.3980102539063 606.219970703125 389.7260131835938 605.8480224609375 C 389.0539855957031 605.4639892578125 388.2980041503906 605.27197265625 387.4580078125 605.27197265625 C 386.6180114746094 605.27197265625 385.8619995117188 605.4639892578125 385.1900024414063 605.8480224609375 C 384.5180053710938 606.219970703125 383.989990234375 606.7479858398438 383.6059875488281 607.4320068359375 C 383.2219848632813 608.10400390625 383.0299987792969 608.8599853515625 383.0299987792969 609.7000122070313 C 383.0299987792969 610.5399780273438 383.2219848632813 611.302001953125 383.6059875488281 611.9860229492188 C 383.989990234375 612.6580200195313 384.5180053710938 613.1859741210938 385.1900024414063 613.5700073242188 C 385.8619995117188 613.9420166015625 386.6180114746094 614.1279907226563 387.4580078125 614.1279907226563 Z M 407.9200134277344 603.4000244140625 L 407.9200134277344 616 L 405.9939880371094 616 L 399.0459899902344 607.468017578125 L 399.0459899902344 616 L 396.7239990234375 616 L 396.7239990234375 603.4000244140625 L 398.6499938964844 603.4000244140625 L 405.5979919433594 611.9320068359375 L 405.5979919433594 603.4000244140625 L 407.9200134277344 603.4000244140625 Z">
			</path>
		</svg>
		<img id="Excercise_Clip_Art" src="Excercise_Clip_Art.png" srcset="Excercise_Clip_Art.png 1x, Excercise_Clip_Art@2x.png 2x">
		<img id="Vegetable_Clip_Art" src="Vegetable_Clip_Art.png" srcset="Vegetable_Clip_Art.png 1x, Vegetable_Clip_Art@2x.png 2x">
		<svg class="Excercise_Regularly" viewBox="209.596 702.612 62.749 30.174">
			<path id="Excercise_Regularly" d="M 216.5260009765625 712.10400390625 L 216.5260009765625 713 L 209.5959930419922 713 L 209.5959930419922 703.2000122070313 L 216.3159942626953 703.2000122070313 L 216.3159942626953 704.0960083007813 L 210.6320037841797 704.0960083007813 L 210.6320037841797 707.5819702148438 L 215.6999969482422 707.5819702148438 L 215.6999969482422 708.4639892578125 L 210.6320037841797 708.4639892578125 L 210.6320037841797 712.10400390625 L 216.5260009765625 712.10400390625 Z M 223.2359924316406 713 L 220.8979949951172 709.9199829101563 L 218.5460052490234 713 L 217.4259948730469 713 L 220.3379974365234 709.219970703125 L 217.5659942626953 705.635986328125 L 218.6860046386719 705.635986328125 L 220.8979949951172 708.52001953125 L 223.1100006103516 705.635986328125 L 224.2019958496094 705.635986328125 L 221.4299926757813 709.219970703125 L 224.3699951171875 713 L 223.2359924316406 713 Z M 228.8170013427734 713.0700073242188 C 228.0890045166016 713.0700073242188 227.4360046386719 712.9110107421875 226.8569946289063 712.593994140625 C 226.2879943847656 712.2769775390625 225.8399963378906 711.8330078125 225.5130004882813 711.2639770507813 C 225.1860046386719 710.6849975585938 225.0229949951172 710.0369873046875 225.0229949951172 709.3179931640625 C 225.0229949951172 708.5989990234375 225.1860046386719 707.9550170898438 225.5130004882813 707.385986328125 C 225.8399963378906 706.8170166015625 226.2879943847656 706.3729858398438 226.8569946289063 706.0560302734375 C 227.4360046386719 705.739013671875 228.0890045166016 705.5800170898438 228.8170013427734 705.5800170898438 C 229.4519958496094 705.5800170898438 230.0160064697266 705.7059936523438 230.5110015869141 705.9580078125 C 231.0149993896484 706.2009887695313 231.4120025634766 706.5599975585938 231.7010040283203 707.0360107421875 L 230.9589996337891 707.5399780273438 C 230.7160034179688 707.176025390625 230.4080047607422 706.905029296875 230.0350036621094 706.72802734375 C 229.6620025634766 706.541015625 229.2559967041016 706.447998046875 228.8170013427734 706.447998046875 C 228.2850036621094 706.447998046875 227.8040008544922 706.5689697265625 227.375 706.81201171875 C 226.9550018310547 707.0449829101563 226.6239929199219 707.3809814453125 226.3809967041016 707.8200073242188 C 226.1479949951172 708.2589721679688 226.031005859375 708.7579956054688 226.031005859375 709.3179931640625 C 226.031005859375 709.8870239257813 226.1479949951172 710.3909912109375 226.3809967041016 710.8300170898438 C 226.6239929199219 711.2589721679688 226.9550018310547 711.594970703125 227.375 711.8380126953125 C 227.8040008544922 712.0709838867188 228.2850036621094 712.18798828125 228.8170013427734 712.18798828125 C 229.2559967041016 712.18798828125 229.6620025634766 712.0989990234375 230.0350036621094 711.9219970703125 C 230.4080047607422 711.7449951171875 230.7160034179688 711.4739990234375 230.9589996337891 711.1099853515625 L 231.7010040283203 711.614013671875 C 231.4120025634766 712.0900268554688 231.0149993896484 712.4539794921875 230.5110015869141 712.7059936523438 C 230.0070037841797 712.948974609375 229.4420013427734 713.0700073242188 228.8170013427734 713.0700073242188 Z M 239.9429931640625 709.6259765625 L 233.7830047607422 709.6259765625 C 233.8390045166016 710.3909912109375 234.1329956054688 711.0120239257813 234.6649932861328 711.4879760742188 C 235.1970062255859 711.9550170898438 235.8690032958984 712.18798828125 236.6809997558594 712.18798828125 C 237.1380004882813 712.18798828125 237.5579986572266 712.1090087890625 237.9409942626953 711.9500122070313 C 238.322998046875 711.781982421875 238.6549987792969 711.5390014648438 238.9349975585938 711.2219848632813 L 239.4949951171875 711.8660278320313 C 239.1679992675781 712.2579956054688 238.7570037841797 712.5570068359375 238.2630004882813 712.7620239257813 C 237.7769927978516 712.9669799804688 237.2409973144531 713.0700073242188 236.6529998779297 713.0700073242188 C 235.8970031738281 713.0700073242188 235.2250061035156 712.9110107421875 234.6369934082031 712.593994140625 C 234.0579986572266 712.2670288085938 233.6049957275391 711.8189697265625 233.2790069580078 711.25 C 232.9519958496094 710.6810302734375 232.7890014648438 710.0369873046875 232.7890014648438 709.3179931640625 C 232.7890014648438 708.5989990234375 232.9429931640625 707.9550170898438 233.2510070800781 707.385986328125 C 233.5679931640625 706.8170166015625 233.9969940185547 706.3729858398438 234.5390014648438 706.0560302734375 C 235.0890045166016 705.739013671875 235.7050018310547 705.5800170898438 236.3869934082031 705.5800170898438 C 237.0679931640625 705.5800170898438 237.6790008544922 705.739013671875 238.2209930419922 706.0560302734375 C 238.7619934082031 706.3729858398438 239.1869964599609 706.8170166015625 239.4949951171875 707.385986328125 C 239.8029937744141 707.9459838867188 239.9570007324219 708.5900268554688 239.9570007324219 709.3179931640625 L 239.9429931640625 709.6259765625 Z M 236.3869934082031 706.4340209960938 C 235.677001953125 706.4340209960938 235.0800018310547 706.6630249023438 234.5950012207031 707.1199951171875 C 234.1190032958984 707.5679931640625 233.8480072021484 708.156005859375 233.7830047607422 708.8839721679688 L 239.0050048828125 708.8839721679688 C 238.9389953613281 708.156005859375 238.6640014648438 707.5679931640625 238.1790008544922 707.1199951171875 C 237.7030029296875 706.6630249023438 237.1049957275391 706.4340209960938 236.3869934082031 706.4340209960938 Z M 242.9320068359375 707.0780029296875 C 243.1649932861328 706.5830078125 243.5099945068359 706.2100219726563 243.9680023193359 705.9580078125 C 244.4340057373047 705.7059936523438 245.0079956054688 705.5800170898438 245.6900024414063 705.5800170898438 L 245.6900024414063 706.5460205078125 L 245.4519958496094 706.531982421875 C 244.677001953125 706.531982421875 244.0700073242188 706.77001953125 243.6320037841797 707.2459716796875 C 243.1929931640625 707.7219848632813 242.9739990234375 708.3889770507813 242.9739990234375 709.2479858398438 L 242.9739990234375 713 L 241.9799957275391 713 L 241.9799957275391 705.635986328125 L 242.9320068359375 705.635986328125 L 242.9320068359375 707.0780029296875 Z M 250.4730072021484 713.0700073242188 C 249.7449951171875 713.0700073242188 249.0919952392578 712.9110107421875 248.5130004882813 712.593994140625 C 247.9440002441406 712.2769775390625 247.4960021972656 711.8330078125 247.1690063476563 711.2639770507813 C 246.8419952392578 710.6849975585938 246.6790008544922 710.0369873046875 246.6790008544922 709.3179931640625 C 246.6790008544922 708.5989990234375 246.8419952392578 707.9550170898438 247.1690063476563 707.385986328125 C 247.4960021972656 706.8170166015625 247.9440002441406 706.3729858398438 248.5130004882813 706.0560302734375 C 249.0919952392578 705.739013671875 249.7449951171875 705.5800170898438 250.4730072021484 705.5800170898438 C 251.1080017089844 705.5800170898438 251.6719970703125 705.7059936523438 252.1670074462891 705.9580078125 C 252.6710052490234 706.2009887695313 253.0679931640625 706.5599975585938 253.3569946289063 707.0360107421875 L 252.6150054931641 707.5399780273438 C 252.3719940185547 707.176025390625 252.0639953613281 706.905029296875 251.6909942626953 706.72802734375 C 251.3179931640625 706.541015625 250.9120025634766 706.447998046875 250.4730072021484 706.447998046875 C 249.9409942626953 706.447998046875 249.4600067138672 706.5689697265625 249.031005859375 706.81201171875 C 248.6109924316406 707.0449829101563 248.2799987792969 707.3809814453125 248.0370025634766 707.8200073242188 C 247.8040008544922 708.2589721679688 247.6869964599609 708.7579956054688 247.6869964599609 709.3179931640625 C 247.6869964599609 709.8870239257813 247.8040008544922 710.3909912109375 248.0370025634766 710.8300170898438 C 248.2799987792969 711.2589721679688 248.6109924316406 711.594970703125 249.031005859375 711.8380126953125 C 249.4600067138672 712.0709838867188 249.9409942626953 712.18798828125 250.4730072021484 712.18798828125 C 250.9120025634766 712.18798828125 251.3179931640625 712.0989990234375 251.6909942626953 711.9219970703125 C 252.0639953613281 711.7449951171875 252.3719940185547 711.4739990234375 252.6150054931641 711.1099853515625 L 253.3569946289063 711.614013671875 C 253.0679931640625 712.0900268554688 252.6710052490234 712.4539794921875 252.1670074462891 712.7059936523438 C 251.6629943847656 712.948974609375 251.0980072021484 713.0700073242188 250.4730072021484 713.0700073242188 Z M 255.3099975585938 705.635986328125 L 256.3039855957031 705.635986328125 L 256.3039855957031 713 L 255.3099975585938 713 L 255.3099975585938 705.635986328125 Z M 255.8139953613281 704.0260009765625 C 255.6080017089844 704.0260009765625 255.4360046386719 703.9559936523438 255.2960052490234 703.8159790039063 C 255.156005859375 703.676025390625 255.0859985351563 703.5079956054688 255.0859985351563 703.31201171875 C 255.0859985351563 703.125 255.156005859375 702.9619750976563 255.2960052490234 702.822021484375 C 255.4360046386719 702.6820068359375 255.6080017089844 702.6119995117188 255.8139953613281 702.6119995117188 C 256.0190124511719 702.6119995117188 256.1919860839844 702.6820068359375 256.3320007324219 702.822021484375 C 256.4719848632813 702.9530029296875 256.5419921875 703.1110229492188 256.5419921875 703.2979736328125 C 256.5419921875 703.5029907226563 256.4719848632813 703.676025390625 256.3320007324219 703.8159790039063 C 256.1919860839844 703.9559936523438 256.0190124511719 704.0260009765625 255.8139953613281 704.0260009765625 Z M 261.0440063476563 713.0700073242188 C 260.4460144042969 713.0700073242188 259.8720092773438 712.9860229492188 259.3219909667969 712.8179931640625 C 258.7799987792969 712.6409912109375 258.3559875488281 712.4210205078125 258.0480041503906 712.1599731445313 L 258.4960021972656 711.3759765625 C 258.8039855957031 711.6190185546875 259.1910095214844 711.8189697265625 259.6579895019531 711.97802734375 C 260.1239929199219 712.1270141601563 260.6099853515625 712.2020263671875 261.114013671875 712.2020263671875 C 261.7860107421875 712.2020263671875 262.2799987792969 712.0989990234375 262.5979919433594 711.8939819335938 C 262.9240112304688 711.6790161132813 263.0880126953125 711.3809814453125 263.0880126953125 710.9979858398438 C 263.0880126953125 710.7269897460938 262.9989929199219 710.5170288085938 262.8219909667969 710.3679809570313 C 262.6440124511719 710.208984375 262.4200134277344 710.093017578125 262.1499938964844 710.0180053710938 C 261.8789978027344 709.9340209960938 261.5199890136719 709.85498046875 261.0719909667969 709.780029296875 C 260.4739990234375 709.6680297851563 259.9939880371094 709.5560302734375 259.6300048828125 709.4439697265625 C 259.2659912109375 709.322998046875 258.9530029296875 709.1220092773438 258.6919860839844 708.8419799804688 C 258.4400024414063 708.56201171875 258.3139953613281 708.1749877929688 258.3139953613281 707.6799926757813 C 258.3139953613281 707.0640258789063 258.5700073242188 706.5599975585938 259.0840148925781 706.1680297851563 C 259.5969848632813 705.7760009765625 260.3110046386719 705.5800170898438 261.2260131835938 705.5800170898438 C 261.7019958496094 705.5800170898438 262.1780090332031 705.64501953125 262.6539916992188 705.7760009765625 C 263.1300048828125 705.89697265625 263.5220031738281 706.0609741210938 263.8299865722656 706.2659912109375 L 263.39599609375 707.0640258789063 C 262.7890014648438 706.6439819335938 262.0660095214844 706.4340209960938 261.2260131835938 706.4340209960938 C 260.5910034179688 706.4340209960938 260.1099853515625 706.5460205078125 259.7839965820313 706.77001953125 C 259.4660034179688 706.9940185546875 259.3080139160156 707.2880249023438 259.3080139160156 707.6519775390625 C 259.3080139160156 707.9320068359375 259.39599609375 708.156005859375 259.5740051269531 708.323974609375 C 259.760009765625 708.4920043945313 259.989013671875 708.6179809570313 260.260009765625 708.7020263671875 C 260.5299987792969 708.7769775390625 260.9039916992188 708.8560180664063 261.3800048828125 708.9400024414063 C 261.9679870605469 709.052001953125 262.4389953613281 709.1640014648438 262.7940063476563 709.2760009765625 C 263.1480102539063 709.3880004882813 263.4519958496094 709.5789794921875 263.7040100097656 709.8499755859375 C 263.9559936523438 710.1209716796875 264.0820007324219 710.4940185546875 264.0820007324219 710.969970703125 C 264.0820007324219 711.614013671875 263.8110046386719 712.1270141601563 263.2699890136719 712.510009765625 C 262.7380065917969 712.8829956054688 261.9960021972656 713.0700073242188 261.0440063476563 713.0700073242188 Z M 272.3309936523438 709.6259765625 L 266.1709899902344 709.6259765625 C 266.2269897460938 710.3909912109375 266.52099609375 711.0120239257813 267.0530090332031 711.4879760742188 C 267.5849914550781 711.9550170898438 268.2569885253906 712.18798828125 269.0690002441406 712.18798828125 C 269.5270080566406 712.18798828125 269.9469909667969 712.1090087890625 270.3290100097656 711.9500122070313 C 270.7120056152344 711.781982421875 271.0429992675781 711.5390014648438 271.322998046875 711.2219848632813 L 271.8829956054688 711.8660278320313 C 271.5570068359375 712.2579956054688 271.14599609375 712.5570068359375 270.6510009765625 712.7620239257813 C 270.1659851074219 712.9669799804688 269.6289978027344 713.0700073242188 269.0409851074219 713.0700073242188 C 268.2850036621094 713.0700073242188 267.6130065917969 712.9110107421875 267.0249938964844 712.593994140625 C 266.4469909667969 712.2670288085938 265.9939880371094 711.8189697265625 265.6669921875 711.25 C 265.3410034179688 710.6810302734375 265.177001953125 710.0369873046875 265.177001953125 709.3179931640625 C 265.177001953125 708.5989990234375 265.3309936523438 707.9550170898438 265.6390075683594 707.385986328125 C 265.9570007324219 706.8170166015625 266.385986328125 706.3729858398438 266.927001953125 706.0560302734375 C 267.4779968261719 705.739013671875 268.093994140625 705.5800170898438 268.7749938964844 705.5800170898438 C 269.4570007324219 705.5800170898438 270.0679931640625 705.739013671875 270.6090087890625 706.0560302734375 C 271.1510009765625 706.3729858398438 271.5750122070313 706.8170166015625 271.8829956054688 707.385986328125 C 272.1910095214844 707.9459838867188 272.3450012207031 708.5900268554688 272.3450012207031 709.3179931640625 L 272.3309936523438 709.6259765625 Z M 268.7749938964844 706.4340209960938 C 268.0660095214844 706.4340209960938 267.468994140625 706.6630249023438 266.9830017089844 707.1199951171875 C 266.5069885253906 707.5679931640625 266.2369995117188 708.156005859375 266.1709899902344 708.8839721679688 L 271.3930053710938 708.8839721679688 C 271.3280029296875 708.156005859375 271.0530090332031 707.5679931640625 270.5669860839844 707.1199951171875 C 270.0910034179688 706.6630249023438 269.4939880371094 706.4340209960938 268.7749938964844 706.4340209960938 Z M 216.2879943847656 730 L 214.0480041503906 726.8499755859375 C 213.7960052490234 726.8779907226563 213.5350036621094 726.8920288085938 213.2640075683594 726.8920288085938 L 210.6320037841797 726.8920288085938 L 210.6320037841797 730 L 209.5959930419922 730 L 209.5959930419922 720.2000122070313 L 213.2640075683594 720.2000122070313 C 214.5149993896484 720.2000122070313 215.4949951171875 720.4990234375 216.2039947509766 721.0960083007813 C 216.9129943847656 721.6929931640625 217.2680053710938 722.5150146484375 217.2680053710938 723.5599975585938 C 217.2680053710938 724.3250122070313 217.0720062255859 724.9739990234375 216.6799926757813 725.5059814453125 C 216.2969970703125 726.0289916992188 215.7469940185547 726.406982421875 215.0279998779297 726.6400146484375 L 217.4219970703125 730 L 216.2879943847656 730 Z M 213.2359924316406 726.010009765625 C 214.2070007324219 726.010009765625 214.9490051269531 725.7949829101563 215.4620056152344 725.3660278320313 C 215.9750061035156 724.93701171875 216.2319946289063 724.3350219726563 216.2319946289063 723.5599975585938 C 216.2319946289063 722.7670288085938 215.9750061035156 722.1599731445313 215.4620056152344 721.739990234375 C 214.9490051269531 721.3109741210938 214.2070007324219 721.0960083007813 213.2359924316406 721.0960083007813 L 210.6320037841797 721.0960083007813 L 210.6320037841797 726.010009765625 L 213.2359924316406 726.010009765625 Z M 225.9149932861328 726.6259765625 L 219.7550048828125 726.6259765625 C 219.8110046386719 727.3909912109375 220.1049957275391 728.0120239257813 220.6369934082031 728.4879760742188 C 221.1690063476563 728.9550170898438 221.8410034179688 729.18798828125 222.6529998779297 729.18798828125 C 223.1109924316406 729.18798828125 223.531005859375 729.1090087890625 223.9129943847656 728.9500122070313 C 224.2960052490234 728.781982421875 224.6269989013672 728.5390014648438 224.9069976806641 728.2219848632813 L 225.4669952392578 728.8660278320313 C 225.1410064697266 729.2579956054688 224.7299957275391 729.5570068359375 224.2350006103516 729.7620239257813 C 223.75 729.9669799804688 223.2129974365234 730.0700073242188 222.625 730.0700073242188 C 221.8690032958984 730.0700073242188 221.1970062255859 729.9110107421875 220.6089935302734 729.593994140625 C 220.031005859375 729.2670288085938 219.5780029296875 728.8189697265625 219.2510070800781 728.25 C 218.9250030517578 727.6810302734375 218.7610015869141 727.0369873046875 218.7610015869141 726.3179931640625 C 218.7610015869141 725.5989990234375 218.9149932861328 724.9550170898438 219.2230072021484 724.385986328125 C 219.5410003662109 723.8170166015625 219.9700012207031 723.3729858398438 220.5110015869141 723.0560302734375 C 221.0619964599609 722.739013671875 221.6779937744141 722.5800170898438 222.3589935302734 722.5800170898438 C 223.0410003662109 722.5800170898438 223.6519927978516 722.739013671875 224.1929931640625 723.0560302734375 C 224.7350006103516 723.3729858398438 225.1589965820313 723.8170166015625 225.4669952392578 724.385986328125 C 225.7749938964844 724.9459838867188 225.9290008544922 725.5900268554688 225.9290008544922 726.3179931640625 L 225.9149932861328 726.6259765625 Z M 222.3589935302734 723.4340209960938 C 221.6499938964844 723.4340209960938 221.0529937744141 723.6630249023438 220.5670013427734 724.1199951171875 C 220.0910034179688 724.5679931640625 219.8209991455078 725.156005859375 219.7550048828125 725.8839721679688 L 224.9770050048828 725.8839721679688 C 224.9120025634766 725.156005859375 224.6369934082031 724.5679931640625 224.1510009765625 724.1199951171875 C 223.6750030517578 723.6630249023438 223.0780029296875 723.4340209960938 222.3589935302734 723.4340209960938 Z M 234.7700042724609 722.635986328125 L 234.7700042724609 729.10400390625 C 234.7700042724609 730.35498046875 234.4620056152344 731.2789916992188 233.8459930419922 731.8759765625 C 233.2400054931641 732.4829711914063 232.3200073242188 732.7860107421875 231.0879974365234 732.7860107421875 C 230.4069976806641 732.7860107421875 229.7579956054688 732.6829833984375 229.1419982910156 732.47802734375 C 228.5359954833984 732.281982421875 228.0410003662109 732.0070190429688 227.6580047607422 731.6519775390625 L 228.1620025634766 730.89599609375 C 228.5169982910156 731.2130126953125 228.9459991455078 731.4609985351563 229.4499969482422 731.6380004882813 C 229.9640045166016 731.8150024414063 230.5 731.9039916992188 231.0599975585938 731.9039916992188 C 231.9940032958984 731.9039916992188 232.6799926757813 731.6849975585938 233.1179962158203 731.2459716796875 C 233.5570068359375 730.8170166015625 233.7760009765625 730.14501953125 233.7760009765625 729.22998046875 L 233.7760009765625 728.2919921875 C 233.4680023193359 728.7589721679688 233.0619964599609 729.1129760742188 232.5579986572266 729.3560180664063 C 232.0639953613281 729.5989990234375 231.5130004882813 729.719970703125 230.906005859375 729.719970703125 C 230.2160034179688 729.719970703125 229.5859985351563 729.5709838867188 229.0160064697266 729.27197265625 C 228.4559936523438 728.9639892578125 228.0130004882813 728.5390014648438 227.6860046386719 727.9979858398438 C 227.3690032958984 727.447021484375 227.2100067138672 726.8270263671875 227.2100067138672 726.135986328125 C 227.2100067138672 725.4450073242188 227.3690032958984 724.8289794921875 227.6860046386719 724.2880249023438 C 228.0130004882813 723.7470092773438 228.4559936523438 723.3270263671875 229.0160064697266 723.0280151367188 C 229.5760040283203 722.72900390625 230.2059936523438 722.5800170898438 230.906005859375 722.5800170898438 C 231.5319976806641 722.5800170898438 232.0959930419922 722.7059936523438 232.6000061035156 722.9580078125 C 233.10400390625 723.2100219726563 233.5099945068359 723.573974609375 233.8179931640625 724.0499877929688 L 233.8179931640625 722.635986328125 L 234.7700042724609 722.635986328125 Z M 231.0039978027344 728.8380126953125 C 231.5359954833984 728.8380126953125 232.0169982910156 728.7260131835938 232.4459991455078 728.5020141601563 C 232.8760070800781 728.2689819335938 233.2070007324219 727.947021484375 233.4400024414063 727.5360107421875 C 233.6829986572266 727.125 233.8040008544922 726.6589965820313 233.8040008544922 726.135986328125 C 233.8040008544922 725.6129760742188 233.6829986572266 725.1510009765625 233.4400024414063 724.75 C 233.2070007324219 724.3389892578125 232.8760070800781 724.02197265625 232.4459991455078 723.7979736328125 C 232.0260009765625 723.5650024414063 231.5460052490234 723.447998046875 231.0039978027344 723.447998046875 C 230.4720001220703 723.447998046875 229.9920043945313 723.5599975585938 229.5619964599609 723.7839965820313 C 229.1419982910156 724.0079956054688 228.8110046386719 724.3250122070313 228.5679931640625 724.7360229492188 C 228.3350067138672 725.14697265625 228.2180023193359 725.6129760742188 228.2180023193359 726.135986328125 C 228.2180023193359 726.6589965820313 228.3350067138672 727.125 228.5679931640625 727.5360107421875 C 228.8110046386719 727.947021484375 229.1419982910156 728.2689819335938 229.5619964599609 728.5020141601563 C 229.9920043945313 728.7260131835938 230.4720001220703 728.8380126953125 231.0039978027344 728.8380126953125 Z M 244.1860046386719 722.635986328125 L 244.1860046386719 730 L 243.2339935302734 730 L 243.2339935302734 728.656005859375 C 242.9730072021484 729.10400390625 242.6130065917969 729.4539794921875 242.156005859375 729.7059936523438 C 241.6990051269531 729.948974609375 241.1759948730469 730.0700073242188 240.5879974365234 730.0700073242188 C 239.6269989013672 730.0700073242188 238.8659973144531 729.8040161132813 238.3059997558594 729.27197265625 C 237.7550048828125 728.7310180664063 237.4799957275391 727.9420166015625 237.4799957275391 726.906005859375 L 237.4799957275391 722.635986328125 L 238.4739990234375 722.635986328125 L 238.4739990234375 726.8079833984375 C 238.4739990234375 727.5830078125 238.6649932861328 728.1710205078125 239.0480041503906 728.572021484375 C 239.4309997558594 728.9730224609375 239.9770050048828 729.1740112304688 240.6860046386719 729.1740112304688 C 241.4609985351563 729.1740112304688 242.0720062255859 728.9409790039063 242.5200042724609 728.4739990234375 C 242.9680023193359 727.9979858398438 243.1920013427734 727.3400268554688 243.1920013427734 726.5 L 243.1920013427734 722.635986328125 L 244.1860046386719 722.635986328125 Z M 249.5460052490234 722.5800170898438 C 250.5070037841797 722.5800170898438 251.2449951171875 722.822998046875 251.7579956054688 723.3079833984375 C 252.27099609375 723.7839965820313 252.5279998779297 724.4929809570313 252.5279998779297 725.4359741210938 L 252.5279998779297 730 L 251.5760040283203 730 L 251.5760040283203 728.8519897460938 C 251.3520050048828 729.2349853515625 251.02099609375 729.5330200195313 250.5820007324219 729.7479858398438 C 250.1529998779297 729.9630126953125 249.6390075683594 730.0700073242188 249.0420074462891 730.0700073242188 C 248.2209930419922 730.0700073242188 247.5670013427734 729.8740234375 247.0820007324219 729.4819946289063 C 246.5970001220703 729.0900268554688 246.35400390625 728.572021484375 246.35400390625 727.927978515625 C 246.35400390625 727.302978515625 246.5780029296875 726.7990112304688 247.0260009765625 726.416015625 C 247.4830017089844 726.0330200195313 248.2070007324219 725.8419799804688 249.1959991455078 725.8419799804688 L 251.5339965820313 725.8419799804688 L 251.5339965820313 725.3939819335938 C 251.5339965820313 724.7589721679688 251.3569946289063 724.2789916992188 251.0019989013672 723.9520263671875 C 250.6470031738281 723.6160278320313 250.1289978027344 723.447998046875 249.447998046875 723.447998046875 C 248.9810028076172 723.447998046875 248.5330047607422 723.5269775390625 248.10400390625 723.6859741210938 C 247.6750030517578 723.8350219726563 247.3059997558594 724.0449829101563 246.9980010986328 724.3159790039063 L 246.5500030517578 723.573974609375 C 246.9230041503906 723.2570190429688 247.3710021972656 723.0139770507813 247.8939971923828 722.8460083007813 C 248.4170074462891 722.6690063476563 248.9669952392578 722.5800170898438 249.5460052490234 722.5800170898438 Z M 249.1959991455078 729.2860107421875 C 249.7559967041016 729.2860107421875 250.2369995117188 729.1599731445313 250.6380004882813 728.9080200195313 C 251.0390014648438 728.64697265625 251.3379974365234 728.2730102539063 251.5339965820313 727.7880249023438 L 251.5339965820313 726.583984375 L 249.2239990234375 726.583984375 C 247.9640045166016 726.583984375 247.3339996337891 727.0230102539063 247.3339996337891 727.9000244140625 C 247.3339996337891 728.3289794921875 247.4969940185547 728.6699829101563 247.8240051269531 728.9219970703125 C 248.1510009765625 729.1649780273438 248.6080017089844 729.2860107421875 249.1959991455078 729.2860107421875 Z M 256.1799926757813 724.0780029296875 C 256.4129943847656 723.5830078125 256.7579956054688 723.2100219726563 257.2160034179688 722.9580078125 C 257.6820068359375 722.7059936523438 258.2560119628906 722.5800170898438 258.93798828125 722.5800170898438 L 258.93798828125 723.5460205078125 L 258.7000122070313 723.531982421875 C 257.9249877929688 723.531982421875 257.3179931640625 723.77001953125 256.8800048828125 724.2459716796875 C 256.4410095214844 724.7219848632813 256.2219848632813 725.3889770507813 256.2219848632813 726.2479858398438 L 256.2219848632813 730 L 255.2279968261719 730 L 255.2279968261719 722.635986328125 L 256.1799926757813 722.635986328125 L 256.1799926757813 724.0780029296875 Z M 260.7380065917969 719.6119995117188 L 261.7319946289063 719.6119995117188 L 261.7319946289063 730 L 260.7380065917969 730 L 260.7380065917969 719.6119995117188 Z M 270.6849975585938 722.635986328125 L 267.0029907226563 730.8820190429688 C 266.7049865722656 731.572998046875 266.3590087890625 732.06298828125 265.9670104980469 732.3519897460938 C 265.5750122070313 732.6409912109375 265.10400390625 732.7860107421875 264.5530090332031 732.7860107421875 C 264.1990051269531 732.7860107421875 263.8670043945313 732.72998046875 263.5589904785156 732.6179809570313 C 263.2510070800781 732.5059814453125 262.9849853515625 732.3380126953125 262.760986328125 732.114013671875 L 263.2229919433594 731.3720092773438 C 263.5969848632813 731.7449951171875 264.0450134277344 731.9320068359375 264.5669860839844 731.9320068359375 C 264.9030151367188 731.9320068359375 265.18798828125 731.8389892578125 265.4209899902344 731.6519775390625 C 265.6640014648438 731.4650268554688 265.8880004882813 731.1480102539063 266.0929870605469 730.7000122070313 L 266.4150085449219 729.9860229492188 L 263.125 722.635986328125 L 264.1610107421875 722.635986328125 L 266.9330139160156 728.8939819335938 L 269.7049865722656 722.635986328125 L 270.6849975585938 722.635986328125 Z">
			</path>
		</svg>
		<svg class="Eat_Green_and_LEafy_Vegetables" viewBox="290.712 703.116 116.72 29.67">
			<path id="Eat_Green_and_LEafy_Vegetables" d="M 320.4400024414063 712.10400390625 L 320.4400024414063 713 L 313.510009765625 713 L 313.510009765625 703.2000122070313 L 320.2300109863281 703.2000122070313 L 320.2300109863281 704.0960083007813 L 314.5459899902344 704.0960083007813 L 314.5459899902344 707.5819702148438 L 319.614013671875 707.5819702148438 L 319.614013671875 708.4639892578125 L 314.5459899902344 708.4639892578125 L 314.5459899902344 712.10400390625 L 320.4400024414063 712.10400390625 Z M 325.1319885253906 705.5800170898438 C 326.0929870605469 705.5800170898438 326.8309936523438 705.822998046875 327.343994140625 706.3079833984375 C 327.8569946289063 706.7839965820313 328.114013671875 707.4929809570313 328.114013671875 708.4359741210938 L 328.114013671875 713 L 327.1619873046875 713 L 327.1619873046875 711.8519897460938 C 326.93798828125 712.2349853515625 326.6069946289063 712.5330200195313 326.1679992675781 712.7479858398438 C 325.739013671875 712.9630126953125 325.2250061035156 713.0700073242188 324.6279907226563 713.0700073242188 C 323.8070068359375 713.0700073242188 323.1530151367188 712.8740234375 322.6679992675781 712.4819946289063 C 322.1830139160156 712.0900268554688 321.9400024414063 711.572021484375 321.9400024414063 710.927978515625 C 321.9400024414063 710.302978515625 322.1640014648438 709.7990112304688 322.6119995117188 709.416015625 C 323.0690002441406 709.0330200195313 323.7929992675781 708.8419799804688 324.7820129394531 708.8419799804688 L 327.1199951171875 708.8419799804688 L 327.1199951171875 708.3939819335938 C 327.1199951171875 707.7589721679688 326.9429931640625 707.2789916992188 326.5880126953125 706.9520263671875 C 326.2330017089844 706.6160278320313 325.7149963378906 706.447998046875 325.0339965820313 706.447998046875 C 324.5669860839844 706.447998046875 324.1189880371094 706.5269775390625 323.6900024414063 706.6859741210938 C 323.260986328125 706.8350219726563 322.8919982910156 707.0449829101563 322.5840148925781 707.3159790039063 L 322.135986328125 706.573974609375 C 322.5090026855469 706.2570190429688 322.9570007324219 706.0139770507813 323.4800109863281 705.8460083007813 C 324.0029907226563 705.6690063476563 324.5530090332031 705.5800170898438 325.1319885253906 705.5800170898438 Z M 324.7820129394531 712.2860107421875 C 325.3420104980469 712.2860107421875 325.822998046875 712.1599731445313 326.2239990234375 711.9080200195313 C 326.625 711.64697265625 326.9240112304688 711.2730102539063 327.1199951171875 710.7880249023438 L 327.1199951171875 709.583984375 L 324.8099975585938 709.583984375 C 323.5499877929688 709.583984375 322.9200134277344 710.0230102539063 322.9200134277344 710.9000244140625 C 322.9200134277344 711.3289794921875 323.0830078125 711.6699829101563 323.4100036621094 711.9219970703125 C 323.7369995117188 712.1649780273438 324.1940002441406 712.2860107421875 324.7820129394531 712.2860107421875 Z M 334.6919860839844 712.552001953125 C 334.5050048828125 712.719970703125 334.2720031738281 712.8510131835938 333.9920043945313 712.9439697265625 C 333.7210083007813 713.0280151367188 333.4360046386719 713.0700073242188 333.1380004882813 713.0700073242188 C 332.4469909667969 713.0700073242188 331.9150085449219 712.8829956054688 331.5419921875 712.510009765625 C 331.1679992675781 712.1370239257813 330.9819946289063 711.6090087890625 330.9819946289063 710.927978515625 L 330.9819946289063 706.4760131835938 L 329.6659851074219 706.4760131835938 L 329.6659851074219 705.635986328125 L 330.9819946289063 705.635986328125 L 330.9819946289063 704.0260009765625 L 331.9760131835938 704.0260009765625 L 331.9760131835938 705.635986328125 L 334.2160034179688 705.635986328125 L 334.2160034179688 706.4760131835938 L 331.9760131835938 706.4760131835938 L 331.9760131835938 710.8720092773438 C 331.9760131835938 711.3109741210938 332.0830078125 711.64697265625 332.2980041503906 711.8800048828125 C 332.5220031738281 712.10400390625 332.8389892578125 712.2160034179688 333.25 712.2160034179688 C 333.4549865722656 712.2160034179688 333.6510009765625 712.1829833984375 333.8380126953125 712.1179809570313 C 334.0339965820313 712.052978515625 334.2019958496094 711.958984375 334.3420104980469 711.8380126953125 L 334.6919860839844 712.552001953125 Z M 347.2770080566406 708.0999755859375 L 348.27099609375 708.0999755859375 L 348.27099609375 711.8380126953125 C 347.8139953613281 712.239013671875 347.2730102539063 712.5469970703125 346.6470031738281 712.7620239257813 C 346.0220031738281 712.9769897460938 345.364013671875 713.083984375 344.6730041503906 713.083984375 C 343.6929931640625 713.083984375 342.8110046386719 712.8690185546875 342.0270080566406 712.4400024414063 C 341.2430114746094 712.010986328125 340.6270141601563 711.4180297851563 340.1789855957031 710.6619873046875 C 339.7309875488281 709.89697265625 339.5069885253906 709.0430297851563 339.5069885253906 708.0999755859375 C 339.5069885253906 707.156982421875 339.7309875488281 706.3079833984375 340.1789855957031 705.552001953125 C 340.6270141601563 704.7869873046875 341.2430114746094 704.1890258789063 342.0270080566406 703.760009765625 C 342.8110046386719 703.3309936523438 343.697998046875 703.1160278320313 344.68701171875 703.1160278320313 C 345.4339904785156 703.1160278320313 346.1199951171875 703.2369995117188 346.7449951171875 703.47998046875 C 347.3710021972656 703.7130126953125 347.8980102539063 704.06298828125 348.3269958496094 704.530029296875 L 347.6830139160156 705.18798828125 C 346.9089965820313 704.4229736328125 345.9240112304688 704.0399780273438 344.72900390625 704.0399780273438 C 343.9360046386719 704.0399780273438 343.2170104980469 704.2169799804688 342.572998046875 704.572021484375 C 341.9389953613281 704.9169921875 341.4389953613281 705.4030151367188 341.0750122070313 706.0280151367188 C 340.7109985351563 706.6439819335938 340.5289916992188 707.3350219726563 340.5289916992188 708.0999755859375 C 340.5289916992188 708.864990234375 340.7109985351563 709.5560302734375 341.0750122070313 710.1719970703125 C 341.4389953613281 710.7880249023438 341.9389953613281 711.2730102539063 342.572998046875 711.6279907226563 C 343.2080078125 711.9829711914063 343.9219970703125 712.1599731445313 344.7149963378906 712.1599731445313 C 345.7229919433594 712.1599731445313 346.5769958496094 711.9080200195313 347.2770080566406 711.4039916992188 L 347.2770080566406 708.0999755859375 Z M 351.9450073242188 707.0780029296875 C 352.1789855957031 706.5830078125 352.5239868164063 706.2100219726563 352.9809875488281 705.9580078125 C 353.447998046875 705.7059936523438 354.0220031738281 705.5800170898438 354.7030029296875 705.5800170898438 L 354.7030029296875 706.5460205078125 L 354.4649963378906 706.531982421875 C 353.6910095214844 706.531982421875 353.0840148925781 706.77001953125 352.6449890136719 707.2459716796875 C 352.2070007324219 707.7219848632813 351.9869995117188 708.3889770507813 351.9869995117188 709.2479858398438 L 351.9869995117188 713 L 350.9930114746094 713 L 350.9930114746094 705.635986328125 L 351.9450073242188 705.635986328125 L 351.9450073242188 707.0780029296875 Z M 362.8469848632813 709.6259765625 L 356.68701171875 709.6259765625 C 356.7430114746094 710.3909912109375 357.0369873046875 711.0120239257813 357.5690002441406 711.4879760742188 C 358.1010131835938 711.9550170898438 358.7730102539063 712.18798828125 359.5849914550781 712.18798828125 C 360.0419921875 712.18798828125 360.4620056152344 712.1090087890625 360.8450012207031 711.9500122070313 C 361.2269897460938 711.781982421875 361.5589904785156 711.5390014648438 361.8389892578125 711.2219848632813 L 362.3989868164063 711.8660278320313 C 362.0719909667969 712.2579956054688 361.6610107421875 712.5570068359375 361.1669921875 712.7620239257813 C 360.6809997558594 712.9669799804688 360.1449890136719 713.0700073242188 359.5570068359375 713.0700073242188 C 358.8009948730469 713.0700073242188 358.1289978027344 712.9110107421875 357.5409851074219 712.593994140625 C 356.9620056152344 712.2670288085938 356.5090026855469 711.8189697265625 356.1830139160156 711.25 C 355.8559875488281 710.6810302734375 355.6929931640625 710.0369873046875 355.6929931640625 709.3179931640625 C 355.6929931640625 708.5989990234375 355.8469848632813 707.9550170898438 356.1549987792969 707.385986328125 C 356.4719848632813 706.8170166015625 356.9010009765625 706.3729858398438 357.4429931640625 706.0560302734375 C 357.9930114746094 705.739013671875 358.6090087890625 705.5800170898438 359.2909851074219 705.5800170898438 C 359.9719848632813 705.5800170898438 360.5830078125 705.739013671875 361.125 706.0560302734375 C 361.6659851074219 706.3729858398438 362.0910034179688 706.8170166015625 362.3989868164063 707.385986328125 C 362.7070007324219 707.9459838867188 362.8609924316406 708.5900268554688 362.8609924316406 709.3179931640625 L 362.8469848632813 709.6259765625 Z M 359.2909851074219 706.4340209960938 C 358.5809936523438 706.4340209960938 357.9840087890625 706.6630249023438 357.4989929199219 707.1199951171875 C 357.0230102539063 707.5679931640625 356.7520141601563 708.156005859375 356.68701171875 708.8839721679688 L 361.9089965820313 708.8839721679688 C 361.8429870605469 708.156005859375 361.5679931640625 707.5679931640625 361.0830078125 707.1199951171875 C 360.6069946289063 706.6630249023438 360.0090026855469 706.4340209960938 359.2909851074219 706.4340209960938 Z M 371.2959899902344 709.6259765625 L 365.135986328125 709.6259765625 C 365.1919860839844 710.3909912109375 365.4859924316406 711.0120239257813 366.0180053710938 711.4879760742188 C 366.5499877929688 711.9550170898438 367.2219848632813 712.18798828125 368.0339965820313 712.18798828125 C 368.4909973144531 712.18798828125 368.9110107421875 712.1090087890625 369.2940063476563 711.9500122070313 C 369.677001953125 711.781982421875 370.0079956054688 711.5390014648438 370.2879943847656 711.2219848632813 L 370.8479919433594 711.8660278320313 C 370.52099609375 712.2579956054688 370.1109924316406 712.5570068359375 369.6159973144531 712.7620239257813 C 369.1310119628906 712.9669799804688 368.593994140625 713.0700073242188 368.0060119628906 713.0700073242188 C 367.25 713.0700073242188 366.5780029296875 712.9110107421875 365.989990234375 712.593994140625 C 365.4110107421875 712.2670288085938 364.9590148925781 711.8189697265625 364.6319885253906 711.25 C 364.3049926757813 710.6810302734375 364.1419982910156 710.0369873046875 364.1419982910156 709.3179931640625 C 364.1419982910156 708.5989990234375 364.2959899902344 707.9550170898438 364.60400390625 707.385986328125 C 364.9209899902344 706.8170166015625 365.3510131835938 706.3729858398438 365.8919982910156 706.0560302734375 C 366.4429931640625 705.739013671875 367.0589904785156 705.5800170898438 367.739990234375 705.5800170898438 C 368.4209899902344 705.5800170898438 369.0329895019531 705.739013671875 369.5740051269531 706.0560302734375 C 370.114990234375 706.3729858398438 370.5400085449219 706.8170166015625 370.8479919433594 707.385986328125 C 371.156005859375 707.9459838867188 371.3099975585938 708.5900268554688 371.3099975585938 709.3179931640625 L 371.2959899902344 709.6259765625 Z M 367.739990234375 706.4340209960938 C 367.031005859375 706.4340209960938 366.4330139160156 706.6630249023438 365.947998046875 707.1199951171875 C 365.4719848632813 707.5679931640625 365.2009887695313 708.156005859375 365.135986328125 708.8839721679688 L 370.3580017089844 708.8839721679688 C 370.2929992675781 708.156005859375 370.0169982910156 707.5679931640625 369.5320129394531 707.1199951171875 C 369.0559997558594 706.6630249023438 368.4590148925781 706.4340209960938 367.739990234375 706.4340209960938 Z M 377.0849914550781 705.5800170898438 C 378.0090026855469 705.5800170898438 378.7420043945313 705.8510131835938 379.2829895019531 706.3920288085938 C 379.8340148925781 706.9240112304688 380.1090087890625 707.7030029296875 380.1090087890625 708.72998046875 L 380.1090087890625 713 L 379.114990234375 713 L 379.114990234375 708.8280029296875 C 379.114990234375 708.06298828125 378.9240112304688 707.47900390625 378.5409851074219 707.0780029296875 C 378.1589965820313 706.677001953125 377.6130065917969 706.4760131835938 376.9030151367188 706.4760131835938 C 376.1099853515625 706.4760131835938 375.4800109863281 706.7139892578125 375.0130004882813 707.1900024414063 C 374.5559997558594 707.656982421875 374.3269958496094 708.3049926757813 374.3269958496094 709.135986328125 L 374.3269958496094 713 L 373.3330078125 713 L 373.3330078125 705.635986328125 L 374.2850036621094 705.635986328125 L 374.2850036621094 706.9940185546875 C 374.5559997558594 706.5460205078125 374.9289855957031 706.2009887695313 375.4049987792969 705.9580078125 C 375.8909912109375 705.7059936523438 376.4509887695313 705.5800170898438 377.0849914550781 705.5800170898438 Z M 290.7120056152344 720.2000122070313 L 291.7479858398438 720.2000122070313 L 291.7479858398438 729.10400390625 L 297.2359924316406 729.10400390625 L 297.2359924316406 730 L 290.7120056152344 730 L 290.7120056152344 720.2000122070313 Z M 305.0490112304688 726.6259765625 L 298.8890075683594 726.6259765625 C 298.9450073242188 727.3909912109375 299.239013671875 728.0120239257813 299.77099609375 728.4879760742188 C 300.3030090332031 728.9550170898438 300.9750061035156 729.18798828125 301.7869873046875 729.18798828125 C 302.2439880371094 729.18798828125 302.6640014648438 729.1090087890625 303.0469970703125 728.9500122070313 C 303.4299926757813 728.781982421875 303.760986328125 728.5390014648438 304.0409851074219 728.2219848632813 L 304.6010131835938 728.8660278320313 C 304.2739868164063 729.2579956054688 303.864013671875 729.5570068359375 303.3689880371094 729.7620239257813 C 302.8840026855469 729.9669799804688 302.3469848632813 730.0700073242188 301.7590026855469 730.0700073242188 C 301.0029907226563 730.0700073242188 300.3309936523438 729.9110107421875 299.7430114746094 729.593994140625 C 299.1640014648438 729.2670288085938 298.7120056152344 728.8189697265625 298.385009765625 728.25 C 298.0580139160156 727.6810302734375 297.8949890136719 727.0369873046875 297.8949890136719 726.3179931640625 C 297.8949890136719 725.5989990234375 298.0490112304688 724.9550170898438 298.3569946289063 724.385986328125 C 298.6740112304688 723.8170166015625 299.10400390625 723.3729858398438 299.6449890136719 723.0560302734375 C 300.1960144042969 722.739013671875 300.81201171875 722.5800170898438 301.4930114746094 722.5800170898438 C 302.1740112304688 722.5800170898438 302.7860107421875 722.739013671875 303.3269958496094 723.0560302734375 C 303.8680114746094 723.3729858398438 304.2929992675781 723.8170166015625 304.6010131835938 724.385986328125 C 304.9089965820313 724.9459838867188 305.06298828125 725.5900268554688 305.06298828125 726.3179931640625 L 305.0490112304688 726.6259765625 Z M 301.4930114746094 723.4340209960938 C 300.7839965820313 723.4340209960938 300.1860046386719 723.6630249023438 299.7009887695313 724.1199951171875 C 299.2250061035156 724.5679931640625 298.9540100097656 725.156005859375 298.8890075683594 725.8839721679688 L 304.1109924316406 725.8839721679688 C 304.0459899902344 725.156005859375 303.7699890136719 724.5679931640625 303.2850036621094 724.1199951171875 C 302.8089904785156 723.6630249023438 302.2120056152344 723.4340209960938 301.4930114746094 723.4340209960938 Z M 309.4570007324219 722.5800170898438 C 310.4179992675781 722.5800170898438 311.156005859375 722.822998046875 311.6690063476563 723.3079833984375 C 312.1820068359375 723.7839965820313 312.4389953613281 724.4929809570313 312.4389953613281 725.4359741210938 L 312.4389953613281 730 L 311.4869995117188 730 L 311.4869995117188 728.8519897460938 C 311.2630004882813 729.2349853515625 310.9320068359375 729.5330200195313 310.4930114746094 729.7479858398438 C 310.0639953613281 729.9630126953125 309.5499877929688 730.0700073242188 308.9530029296875 730.0700073242188 C 308.1319885253906 730.0700073242188 307.4779968261719 729.8740234375 306.9930114746094 729.4819946289063 C 306.5079956054688 729.0900268554688 306.2650146484375 728.572021484375 306.2650146484375 727.927978515625 C 306.2650146484375 727.302978515625 306.489013671875 726.7990112304688 306.93701171875 726.416015625 C 307.3940124511719 726.0330200195313 308.1180114746094 725.8419799804688 309.1069946289063 725.8419799804688 L 311.4450073242188 725.8419799804688 L 311.4450073242188 725.3939819335938 C 311.4450073242188 724.7589721679688 311.2680053710938 724.2789916992188 310.9129943847656 723.9520263671875 C 310.5580139160156 723.6160278320313 310.0400085449219 723.447998046875 309.3590087890625 723.447998046875 C 308.8919982910156 723.447998046875 308.4440002441406 723.5269775390625 308.0150146484375 723.6859741210938 C 307.5859985351563 723.8350219726563 307.2170104980469 724.0449829101563 306.9089965820313 724.3159790039063 L 306.4609985351563 723.573974609375 C 306.8340148925781 723.2570190429688 307.2820129394531 723.0139770507813 307.8049926757813 722.8460083007813 C 308.3280029296875 722.6690063476563 308.8779907226563 722.5800170898438 309.4570007324219 722.5800170898438 Z M 309.1069946289063 729.2860107421875 C 309.6669921875 729.2860107421875 310.1480102539063 729.1599731445313 310.5490112304688 728.9080200195313 C 310.9500122070313 728.64697265625 311.2489929199219 728.2730102539063 311.4450073242188 727.7880249023438 L 311.4450073242188 726.583984375 L 309.135009765625 726.583984375 C 307.875 726.583984375 307.2449951171875 727.0230102539063 307.2449951171875 727.9000244140625 C 307.2449951171875 728.3289794921875 307.4079895019531 728.6699829101563 307.7349853515625 728.9219970703125 C 308.06201171875 729.1649780273438 308.5190124511719 729.2860107421875 309.1069946289063 729.2860107421875 Z M 317.5750122070313 720.3820190429688 C 317.14599609375 720.3820190429688 316.8190002441406 720.4990234375 316.5950012207031 720.7319946289063 C 316.3800048828125 720.9650268554688 316.2730102539063 721.3109741210938 316.2730102539063 721.7680053710938 L 316.2730102539063 722.635986328125 L 318.5409851074219 722.635986328125 L 318.5409851074219 723.4760131835938 L 316.3009948730469 723.4760131835938 L 316.3009948730469 730 L 315.3070068359375 730 L 315.3070068359375 723.4760131835938 L 313.9909973144531 723.4760131835938 L 313.9909973144531 722.635986328125 L 315.3070068359375 722.635986328125 L 315.3070068359375 721.7260131835938 C 315.3070068359375 721.0540161132813 315.4979858398438 720.52197265625 315.8810119628906 720.1300048828125 C 316.2730102539063 719.7379760742188 316.8240051269531 719.5419921875 317.5329895019531 719.5419921875 C 317.81298828125 719.5419921875 318.0840148925781 719.583984375 318.3450012207031 719.6680297851563 C 318.6059875488281 719.7429809570313 318.8259887695313 719.85498046875 319.0029907226563 720.0040283203125 L 318.6669921875 720.7459716796875 C 318.3779907226563 720.5029907226563 318.0140075683594 720.3820190429688 317.5750122070313 720.3820190429688 Z M 326.2080078125 722.635986328125 L 322.5260009765625 730.8820190429688 C 322.2269897460938 731.572998046875 321.8819885253906 732.06298828125 321.489990234375 732.3519897460938 C 321.0979919433594 732.6409912109375 320.6260070800781 732.7860107421875 320.0759887695313 732.7860107421875 C 319.7210083007813 732.7860107421875 319.3900146484375 732.72998046875 319.0820007324219 732.6179809570313 C 318.7739868164063 732.5059814453125 318.5079956054688 732.3380126953125 318.2839965820313 732.114013671875 L 318.7460021972656 731.3720092773438 C 319.1189880371094 731.7449951171875 319.5669860839844 731.9320068359375 320.0899963378906 731.9320068359375 C 320.4259948730469 731.9320068359375 320.7099914550781 731.8389892578125 320.9440002441406 731.6519775390625 C 321.1860046386719 731.4650268554688 321.4100036621094 731.1480102539063 321.6159973144531 730.7000122070313 L 321.93798828125 729.9860229492188 L 318.6480102539063 722.635986328125 L 319.6839904785156 722.635986328125 L 322.4559936523438 728.8939819335938 L 325.2279968261719 722.635986328125 L 326.2080078125 722.635986328125 Z M 339.6300048828125 720.2000122070313 L 335.2900085449219 730 L 334.2680053710938 730 L 329.9280090332031 720.2000122070313 L 331.0480041503906 720.2000122070313 L 334.7999877929688 728.7119750976563 L 338.5799865722656 720.2000122070313 L 339.6300048828125 720.2000122070313 Z M 346.6940002441406 726.6259765625 L 340.5339965820313 726.6259765625 C 340.5899963378906 727.3909912109375 340.8840026855469 728.0120239257813 341.4159851074219 728.4879760742188 C 341.947998046875 728.9550170898438 342.6199951171875 729.18798828125 343.4320068359375 729.18798828125 C 343.8890075683594 729.18798828125 344.3089904785156 729.1090087890625 344.6919860839844 728.9500122070313 C 345.0740051269531 728.781982421875 345.406005859375 728.5390014648438 345.6860046386719 728.2219848632813 L 346.2460021972656 728.8660278320313 C 345.9190063476563 729.2579956054688 345.5079956054688 729.5570068359375 345.0140075683594 729.7620239257813 C 344.5280151367188 729.9669799804688 343.9920043945313 730.0700073242188 343.4039916992188 730.0700073242188 C 342.6480102539063 730.0700073242188 341.9760131835938 729.9110107421875 341.3880004882813 729.593994140625 C 340.8089904785156 729.2670288085938 340.3559875488281 728.8189697265625 340.0299987792969 728.25 C 339.7030029296875 727.6810302734375 339.5400085449219 727.0369873046875 339.5400085449219 726.3179931640625 C 339.5400085449219 725.5989990234375 339.6940002441406 724.9550170898438 340.0020141601563 724.385986328125 C 340.3190002441406 723.8170166015625 340.7479858398438 723.3729858398438 341.2900085449219 723.0560302734375 C 341.8399963378906 722.739013671875 342.4559936523438 722.5800170898438 343.1380004882813 722.5800170898438 C 343.8190002441406 722.5800170898438 344.4299926757813 722.739013671875 344.9719848632813 723.0560302734375 C 345.5130004882813 723.3729858398438 345.93798828125 723.8170166015625 346.2460021972656 724.385986328125 C 346.5539855957031 724.9459838867188 346.7080078125 725.5900268554688 346.7080078125 726.3179931640625 L 346.6940002441406 726.6259765625 Z M 343.1380004882813 723.4340209960938 C 342.4280090332031 723.4340209960938 341.8309936523438 723.6630249023438 341.3460083007813 724.1199951171875 C 340.8699951171875 724.5679931640625 340.5989990234375 725.156005859375 340.5339965820313 725.8839721679688 L 345.7560119628906 725.8839721679688 C 345.6900024414063 725.156005859375 345.4150085449219 724.5679931640625 344.9299926757813 724.1199951171875 C 344.4540100097656 723.6630249023438 343.8559875488281 723.4340209960938 343.1380004882813 723.4340209960938 Z M 355.5490112304688 722.635986328125 L 355.5490112304688 729.10400390625 C 355.5490112304688 730.35498046875 355.2409973144531 731.2789916992188 354.625 731.8759765625 C 354.0180053710938 732.4829711914063 353.0989990234375 732.7860107421875 351.8670043945313 732.7860107421875 C 351.1849975585938 732.7860107421875 350.5369873046875 732.6829833984375 349.9209899902344 732.47802734375 C 349.3139953613281 732.281982421875 348.8190002441406 732.0070190429688 348.43701171875 731.6519775390625 L 348.9410095214844 730.89599609375 C 349.2950134277344 731.2130126953125 349.7250061035156 731.4609985351563 350.22900390625 731.6380004882813 C 350.7420043945313 731.8150024414063 351.2789916992188 731.9039916992188 351.8389892578125 731.9039916992188 C 352.7720031738281 731.9039916992188 353.4580078125 731.6849975585938 353.8970031738281 731.2459716796875 C 354.3349914550781 730.8170166015625 354.5549926757813 730.14501953125 354.5549926757813 729.22998046875 L 354.5549926757813 728.2919921875 C 354.2470092773438 728.7589721679688 353.8410034179688 729.1129760742188 353.3370056152344 729.3560180664063 C 352.8420104980469 729.5989990234375 352.2909851074219 729.719970703125 351.6849975585938 729.719970703125 C 350.9939880371094 729.719970703125 350.364013671875 729.5709838867188 349.7950134277344 729.27197265625 C 349.2349853515625 728.9639892578125 348.7909851074219 728.5390014648438 348.4649963378906 727.9979858398438 C 348.1470031738281 727.447021484375 347.989013671875 726.8270263671875 347.989013671875 726.135986328125 C 347.989013671875 725.4450073242188 348.1470031738281 724.8289794921875 348.4649963378906 724.2880249023438 C 348.7909851074219 723.7470092773438 349.2349853515625 723.3270263671875 349.7950134277344 723.0280151367188 C 350.3550109863281 722.72900390625 350.9849853515625 722.5800170898438 351.6849975585938 722.5800170898438 C 352.3099975585938 722.5800170898438 352.875 722.7059936523438 353.3789978027344 722.9580078125 C 353.8829956054688 723.2100219726563 354.2890014648438 723.573974609375 354.5969848632813 724.0499877929688 L 354.5969848632813 722.635986328125 L 355.5490112304688 722.635986328125 Z M 351.7829895019531 728.8380126953125 C 352.3150024414063 728.8380126953125 352.7950134277344 728.7260131835938 353.2250061035156 728.5020141601563 C 353.6539916992188 728.2689819335938 353.9849853515625 727.947021484375 354.218994140625 727.5360107421875 C 354.4609985351563 727.125 354.5830078125 726.6589965820313 354.5830078125 726.135986328125 C 354.5830078125 725.6129760742188 354.4609985351563 725.1510009765625 354.218994140625 724.75 C 353.9849853515625 724.3389892578125 353.6539916992188 724.02197265625 353.2250061035156 723.7979736328125 C 352.8049926757813 723.5650024414063 352.3240051269531 723.447998046875 351.7829895019531 723.447998046875 C 351.2510070800781 723.447998046875 350.7699890136719 723.5599975585938 350.3410034179688 723.7839965820313 C 349.9209899902344 724.0079956054688 349.5889892578125 724.3250122070313 349.3469848632813 724.7360229492188 C 349.1130065917969 725.14697265625 348.9970092773438 725.6129760742188 348.9970092773438 726.135986328125 C 348.9970092773438 726.6589965820313 349.1130065917969 727.125 349.3469848632813 727.5360107421875 C 349.5889892578125 727.947021484375 349.9209899902344 728.2689819335938 350.3410034179688 728.5020141601563 C 350.7699890136719 728.7260131835938 351.2510070800781 728.8380126953125 351.7829895019531 728.8380126953125 Z M 364.739990234375 726.6259765625 L 358.5799865722656 726.6259765625 C 358.635986328125 727.3909912109375 358.9299926757813 728.0120239257813 359.4620056152344 728.4879760742188 C 359.9939880371094 728.9550170898438 360.6659851074219 729.18798828125 361.4779968261719 729.18798828125 C 361.9360046386719 729.18798828125 362.3559875488281 729.1090087890625 362.7380065917969 728.9500122070313 C 363.1210021972656 728.781982421875 363.4519958496094 728.5390014648438 363.7319946289063 728.2219848632813 L 364.2919921875 728.8660278320313 C 363.9660034179688 729.2579956054688 363.5549926757813 729.5570068359375 363.0599975585938 729.7620239257813 C 362.5750122070313 729.9669799804688 362.0379943847656 730.0700073242188 361.4500122070313 730.0700073242188 C 360.6940002441406 730.0700073242188 360.0220031738281 729.9110107421875 359.4339904785156 729.593994140625 C 358.8559875488281 729.2670288085938 358.4030151367188 728.8189697265625 358.0759887695313 728.25 C 357.75 727.6810302734375 357.5859985351563 727.0369873046875 357.5859985351563 726.3179931640625 C 357.5859985351563 725.5989990234375 357.739990234375 724.9550170898438 358.0480041503906 724.385986328125 C 358.3659973144531 723.8170166015625 358.7950134277344 723.3729858398438 359.3359985351563 723.0560302734375 C 359.8869934082031 722.739013671875 360.5029907226563 722.5800170898438 361.1839904785156 722.5800170898438 C 361.8659973144531 722.5800170898438 362.4769897460938 722.739013671875 363.0180053710938 723.0560302734375 C 363.5599975585938 723.3729858398438 363.9840087890625 723.8170166015625 364.2919921875 724.385986328125 C 364.6000061035156 724.9459838867188 364.7539978027344 725.5900268554688 364.7539978027344 726.3179931640625 L 364.739990234375 726.6259765625 Z M 361.1839904785156 723.4340209960938 C 360.4750061035156 723.4340209960938 359.8779907226563 723.6630249023438 359.3919982910156 724.1199951171875 C 358.9159851074219 724.5679931640625 358.64599609375 725.156005859375 358.5799865722656 725.8839721679688 L 363.802001953125 725.8839721679688 C 363.7369995117188 725.156005859375 363.4620056152344 724.5679931640625 362.9760131835938 724.1199951171875 C 362.5 723.6630249023438 361.9030151367188 723.4340209960938 361.1839904785156 723.4340209960938 Z M 370.656005859375 729.552001953125 C 370.468994140625 729.719970703125 370.2359924316406 729.8510131835938 369.9559936523438 729.9439697265625 C 369.6849975585938 730.0280151367188 369.3999938964844 730.0700073242188 369.1019897460938 730.0700073242188 C 368.4110107421875 730.0700073242188 367.8789978027344 729.8829956054688 367.5060119628906 729.510009765625 C 367.1319885253906 729.1370239257813 366.9460144042969 728.6090087890625 366.9460144042969 727.927978515625 L 366.9460144042969 723.4760131835938 L 365.6300048828125 723.4760131835938 L 365.6300048828125 722.635986328125 L 366.9460144042969 722.635986328125 L 366.9460144042969 721.0260009765625 L 367.9400024414063 721.0260009765625 L 367.9400024414063 722.635986328125 L 370.1799926757813 722.635986328125 L 370.1799926757813 723.4760131835938 L 367.9400024414063 723.4760131835938 L 367.9400024414063 727.8720092773438 C 367.9400024414063 728.3109741210938 368.0469970703125 728.64697265625 368.2619934082031 728.8800048828125 C 368.4859924316406 729.10400390625 368.8030090332031 729.2160034179688 369.2139892578125 729.2160034179688 C 369.4190063476563 729.2160034179688 369.614990234375 729.1829833984375 369.802001953125 729.1179809570313 C 369.9979858398438 729.052978515625 370.1659851074219 728.958984375 370.3059997558594 728.8380126953125 L 370.656005859375 729.552001953125 Z M 375.0409851074219 722.5800170898438 C 376.0020141601563 722.5800170898438 376.739990234375 722.822998046875 377.2529907226563 723.3079833984375 C 377.7659912109375 723.7839965820313 378.0230102539063 724.4929809570313 378.0230102539063 725.4359741210938 L 378.0230102539063 730 L 377.0710144042969 730 L 377.0710144042969 728.8519897460938 C 376.8469848632813 729.2349853515625 376.5159912109375 729.5330200195313 376.0769958496094 729.7479858398438 C 375.6480102539063 729.9630126953125 375.1340026855469 730.0700073242188 374.5369873046875 730.0700073242188 C 373.7160034179688 730.0700073242188 373.06201171875 729.8740234375 372.5769958496094 729.4819946289063 C 372.0920104980469 729.0900268554688 371.8489990234375 728.572021484375 371.8489990234375 727.927978515625 C 371.8489990234375 727.302978515625 372.072998046875 726.7990112304688 372.52099609375 726.416015625 C 372.9779968261719 726.0330200195313 373.7019958496094 725.8419799804688 374.6910095214844 725.8419799804688 L 377.0289916992188 725.8419799804688 L 377.0289916992188 725.3939819335938 C 377.0289916992188 724.7589721679688 376.8519897460938 724.2789916992188 376.4970092773438 723.9520263671875 C 376.1419982910156 723.6160278320313 375.6239929199219 723.447998046875 374.9429931640625 723.447998046875 C 374.4760131835938 723.447998046875 374.0280151367188 723.5269775390625 373.5989990234375 723.6859741210938 C 373.1700134277344 723.8350219726563 372.8009948730469 724.0449829101563 372.4930114746094 724.3159790039063 L 372.0450134277344 723.573974609375 C 372.4179992675781 723.2570190429688 372.8659973144531 723.0139770507813 373.3890075683594 722.8460083007813 C 373.9119873046875 722.6690063476563 374.4620056152344 722.5800170898438 375.0409851074219 722.5800170898438 Z M 374.6910095214844 729.2860107421875 C 375.2510070800781 729.2860107421875 375.7319946289063 729.1599731445313 376.1329956054688 728.9080200195313 C 376.5339965820313 728.64697265625 376.8330078125 728.2730102539063 377.0289916992188 727.7880249023438 L 377.0289916992188 726.583984375 L 374.718994140625 726.583984375 C 373.4590148925781 726.583984375 372.8290100097656 727.0230102539063 372.8290100097656 727.9000244140625 C 372.8290100097656 728.3289794921875 372.9920043945313 728.6699829101563 373.3190002441406 728.9219970703125 C 373.64599609375 729.1649780273438 374.1029968261719 729.2860107421875 374.6910095214844 729.2860107421875 Z M 384.5169982910156 722.5800170898438 C 385.2080078125 722.5800170898438 385.8330078125 722.739013671875 386.3930053710938 723.0560302734375 C 386.9530029296875 723.364013671875 387.3919982910156 723.802978515625 387.7090148925781 724.3720092773438 C 388.0260009765625 724.9409790039063 388.1849975585938 725.5900268554688 388.1849975585938 726.3179931640625 C 388.1849975585938 727.0460205078125 388.0260009765625 727.6950073242188 387.7090148925781 728.2639770507813 C 387.3919982910156 728.8330078125 386.9530029296875 729.2769775390625 386.3930053710938 729.593994140625 C 385.8330078125 729.9110107421875 385.2080078125 730.0700073242188 384.5169982910156 730.0700073242188 C 383.9010009765625 730.0700073242188 383.3460083007813 729.9390258789063 382.8510131835938 729.677978515625 C 382.3659973144531 729.4169921875 381.9739990234375 729.0390014648438 381.6749877929688 728.5440063476563 L 381.6749877929688 730 L 380.7229919433594 730 L 380.7229919433594 719.6119995117188 L 381.7170104980469 719.6119995117188 L 381.7170104980469 724.0360107421875 C 382.0249938964844 723.5599975585938 382.4169921875 723.2009887695313 382.8930053710938 722.9580078125 C 383.3779907226563 722.7059936523438 383.9200134277344 722.5800170898438 384.5169982910156 722.5800170898438 Z M 384.4469909667969 729.18798828125 C 384.9599914550781 729.18798828125 385.427001953125 729.0709838867188 385.8469848632813 728.8380126953125 C 386.2669982910156 728.594970703125 386.593994140625 728.2550048828125 386.8269958496094 727.8159790039063 C 387.0700073242188 727.3770141601563 387.1910095214844 726.8779907226563 387.1910095214844 726.3179931640625 C 387.1910095214844 725.7579956054688 387.0700073242188 725.2589721679688 386.8269958496094 724.8200073242188 C 386.593994140625 724.3809814453125 386.2669982910156 724.0449829101563 385.8469848632813 723.81201171875 C 385.427001953125 723.5689697265625 384.9599914550781 723.447998046875 384.4469909667969 723.447998046875 C 383.9240112304688 723.447998046875 383.4530029296875 723.5689697265625 383.0329895019531 723.81201171875 C 382.6220092773438 724.0449829101563 382.2959899902344 724.3809814453125 382.0530090332031 724.8200073242188 C 381.8200073242188 725.2589721679688 381.7030029296875 725.7579956054688 381.7030029296875 726.3179931640625 C 381.7030029296875 726.8779907226563 381.8200073242188 727.3770141601563 382.0530090332031 727.8159790039063 C 382.2959899902344 728.2550048828125 382.6220092773438 728.594970703125 383.0329895019531 728.8380126953125 C 383.4530029296875 729.0709838867188 383.9240112304688 729.18798828125 384.4469909667969 729.18798828125 Z M 390.2109985351563 719.6119995117188 L 391.2049865722656 719.6119995117188 L 391.2049865722656 730 L 390.2109985351563 730 L 390.2109985351563 719.6119995117188 Z M 400.3829956054688 726.6259765625 L 394.2229919433594 726.6259765625 C 394.2789916992188 727.3909912109375 394.572998046875 728.0120239257813 395.1050109863281 728.4879760742188 C 395.6369934082031 728.9550170898438 396.3089904785156 729.18798828125 397.1210021972656 729.18798828125 C 397.5780029296875 729.18798828125 397.9979858398438 729.1090087890625 398.3810119628906 728.9500122070313 C 398.7640075683594 728.781982421875 399.0950012207031 728.5390014648438 399.375 728.2219848632813 L 399.9349975585938 728.8660278320313 C 399.6080017089844 729.2579956054688 399.197998046875 729.5570068359375 398.7030029296875 729.7620239257813 C 398.2179870605469 729.9669799804688 397.6809997558594 730.0700073242188 397.0929870605469 730.0700073242188 C 396.3370056152344 730.0700073242188 395.6650085449219 729.9110107421875 395.0769958496094 729.593994140625 C 394.4979858398438 729.2670288085938 394.0459899902344 728.8189697265625 393.718994140625 728.25 C 393.3919982910156 727.6810302734375 393.22900390625 727.0369873046875 393.22900390625 726.3179931640625 C 393.22900390625 725.5989990234375 393.3829956054688 724.9550170898438 393.6910095214844 724.385986328125 C 394.0079956054688 723.8170166015625 394.43798828125 723.3729858398438 394.97900390625 723.0560302734375 C 395.5299987792969 722.739013671875 396.14599609375 722.5800170898438 396.8269958496094 722.5800170898438 C 397.5079956054688 722.5800170898438 398.1199951171875 722.739013671875 398.6610107421875 723.0560302734375 C 399.2019958496094 723.3729858398438 399.6270141601563 723.8170166015625 399.9349975585938 724.385986328125 C 400.2430114746094 724.9459838867188 400.3970031738281 725.5900268554688 400.3970031738281 726.3179931640625 L 400.3829956054688 726.6259765625 Z M 396.8269958496094 723.4340209960938 C 396.1180114746094 723.4340209960938 395.5199890136719 723.6630249023438 395.0350036621094 724.1199951171875 C 394.5589904785156 724.5679931640625 394.2879943847656 725.156005859375 394.2229919433594 725.8839721679688 L 399.4450073242188 725.8839721679688 C 399.3800048828125 725.156005859375 399.10400390625 724.5679931640625 398.6189880371094 724.1199951171875 C 398.1430053710938 723.6630249023438 397.5459899902344 723.4340209960938 396.8269958496094 723.4340209960938 Z M 404.3940124511719 730.0700073242188 C 403.7969970703125 730.0700073242188 403.2229919433594 729.9860229492188 402.6719970703125 729.8179931640625 C 402.1310119628906 729.6409912109375 401.7059936523438 729.4210205078125 401.3980102539063 729.1599731445313 L 401.8460083007813 728.3759765625 C 402.1539916992188 728.6190185546875 402.5419921875 728.8189697265625 403.0079956054688 728.97802734375 C 403.4750061035156 729.1270141601563 403.9599914550781 729.2020263671875 404.4639892578125 729.2020263671875 C 405.135986328125 729.2020263671875 405.6310119628906 729.0989990234375 405.947998046875 728.8939819335938 C 406.2749938964844 728.6790161132813 406.43798828125 728.3809814453125 406.43798828125 727.9979858398438 C 406.43798828125 727.7269897460938 406.3500061035156 727.5170288085938 406.1719970703125 727.3679809570313 C 405.9949951171875 727.208984375 405.77099609375 727.093017578125 405.5 727.0180053710938 C 405.2300109863281 726.9340209960938 404.8699951171875 726.85498046875 404.4219970703125 726.780029296875 C 403.8250122070313 726.6680297851563 403.343994140625 726.5560302734375 402.9800109863281 726.4439697265625 C 402.6159973144531 726.322998046875 402.3039855957031 726.1220092773438 402.0419921875 725.8419799804688 C 401.7900085449219 725.56201171875 401.6640014648438 725.1749877929688 401.6640014648438 724.6799926757813 C 401.6640014648438 724.0640258789063 401.9209899902344 723.5599975585938 402.4339904785156 723.1680297851563 C 402.947998046875 722.7760009765625 403.6619873046875 722.5800170898438 404.5759887695313 722.5800170898438 C 405.052001953125 722.5800170898438 405.5280151367188 722.64501953125 406.0039978027344 722.7760009765625 C 406.4800109863281 722.89697265625 406.8720092773438 723.0609741210938 407.1799926757813 723.2659912109375 L 406.7460021972656 724.0640258789063 C 406.1400146484375 723.6439819335938 405.4159851074219 723.4340209960938 404.5759887695313 723.4340209960938 C 403.9419860839844 723.4340209960938 403.4609985351563 723.5460205078125 403.1340026855469 723.77001953125 C 402.8169860839844 723.9940185546875 402.6579895019531 724.2880249023438 402.6579895019531 724.6519775390625 C 402.6579895019531 724.9320068359375 402.7470092773438 725.156005859375 402.9240112304688 725.323974609375 C 403.1109924316406 725.4920043945313 403.3399963378906 725.6179809570313 403.6099853515625 725.7020263671875 C 403.8810119628906 725.7769775390625 404.2539978027344 725.8560180664063 404.7300109863281 725.9400024414063 C 405.3179931640625 726.052001953125 405.7900085449219 726.1640014648438 406.1440124511719 726.2760009765625 C 406.4989929199219 726.3880004882813 406.802001953125 726.5789794921875 407.0539855957031 726.8499755859375 C 407.3059997558594 727.1209716796875 407.4320068359375 727.4940185546875 407.4320068359375 727.969970703125 C 407.4320068359375 728.614013671875 407.1619873046875 729.1270141601563 406.6199951171875 729.510009765625 C 406.0880126953125 729.8829956054688 405.3460083007813 730.0700073242188 404.3940124511719 730.0700073242188 Z">
			</path>
		</svg>
	</div>
	<div id="RBC">
		<svg class="Rectangle_14">
			<rect id="Rectangle_14" rx="21" ry="21" x="0" y="0" width="190" height="127">
			</rect>
		</svg>
		<svg class="Path_23" viewBox="496.671 503.528 31.39 8.544">
			<path id="Path_23" d="M 500.0429992675781 507.2000122070313 C 500.9230041503906 507.2479858398438 501.5910034179688 507.4880065917969 502.0469970703125 507.9200134277344 C 502.510986328125 508.343994140625 502.7430114746094 508.8999938964844 502.7430114746094 509.5880126953125 C 502.7430114746094 510.0679931640625 502.6270141601563 510.4960021972656 502.3949890136719 510.8720092773438 C 502.1629943847656 511.239990234375 501.8190002441406 511.5320129394531 501.3630065917969 511.7479858398438 C 500.9070129394531 511.9639892578125 500.3510131835938 512.072021484375 499.6950073242188 512.072021484375 C 499.0870056152344 512.072021484375 498.510986328125 511.9760131835938 497.9670104980469 511.7839965820313 C 497.4309997558594 511.5840148925781 496.9989929199219 511.3200073242188 496.6709899902344 510.9920043945313 L 497.0910034179688 510.3080139160156 C 497.3710021972656 510.5960083007813 497.7430114746094 510.8320007324219 498.2070007324219 511.0159912109375 C 498.6709899902344 511.1919860839844 499.1669921875 511.2799987792969 499.6950073242188 511.2799987792969 C 500.3829956054688 511.2799987792969 500.9150085449219 511.1319885253906 501.2909851074219 510.8359985351563 C 501.6669921875 510.5320129394531 501.8550109863281 510.1159973144531 501.8550109863281 509.5880126953125 C 501.8550109863281 509.0679931640625 501.6669921875 508.6600036621094 501.2909851074219 508.364013671875 C 500.9150085449219 508.0679931640625 500.3469848632813 507.9200134277344 499.5870056152344 507.9200134277344 L 498.9869995117188 507.9200134277344 L 498.9869995117188 507.2839965820313 L 501.3150024414063 504.3680114746094 L 497.0190124511719 504.3680114746094 L 497.0190124511719 503.6000061035156 L 502.4190063476563 503.6000061035156 L 502.4190063476563 504.2120056152344 L 500.0429992675781 507.2000122070313 Z M 509.6369934082031 511.2319946289063 L 509.6369934082031 512 L 503.7449951171875 512 L 503.7449951171875 511.3880004882813 L 507.2369995117188 507.9679870605469 C 507.677001953125 507.5360107421875 507.9729919433594 507.1640014648438 508.125 506.8519897460938 C 508.2850036621094 506.5320129394531 508.364990234375 506.2120056152344 508.364990234375 505.8919982910156 C 508.364990234375 505.39599609375 508.1929931640625 505.0119934082031 507.8489990234375 504.739990234375 C 507.5130004882813 504.4599914550781 507.0289916992188 504.3200073242188 506.3970031738281 504.3200073242188 C 505.4129943847656 504.3200073242188 504.6489868164063 504.6319885253906 504.1050109863281 505.2560119628906 L 503.4930114746094 504.7279968261719 C 503.8210144042969 504.343994140625 504.2369995117188 504.0480041503906 504.7409973144531 503.8399963378906 C 505.2529907226563 503.6319885253906 505.8290100097656 503.5280151367188 506.468994140625 503.5280151367188 C 507.3250122070313 503.5280151367188 508.0010070800781 503.7319946289063 508.4970092773438 504.1400146484375 C 509.0010070800781 504.5400085449219 509.2529907226563 505.0920104980469 509.2529907226563 505.7959899902344 C 509.2529907226563 506.2279968261719 509.1570129394531 506.6440124511719 508.9649963378906 507.0440063476563 C 508.7730102539063 507.4440002441406 508.4089965820313 507.9039916992188 507.8729858398438 508.4240112304688 L 505.0169982910156 511.2319946289063 L 509.6369934082031 511.2319946289063 Z M 510.7239990234375 508.3760070800781 L 513.8679809570313 508.3760070800781 L 513.8679809570313 509.1199951171875 L 510.7239990234375 509.1199951171875 L 510.7239990234375 508.3760070800781 Z M 517.8319702148438 507.2000122070313 C 518.7119750976563 507.2479858398438 519.3800048828125 507.4880065917969 519.8359985351563 507.9200134277344 C 520.2999877929688 508.343994140625 520.531982421875 508.8999938964844 520.531982421875 509.5880126953125 C 520.531982421875 510.0679931640625 520.416015625 510.4960021972656 520.1840209960938 510.8720092773438 C 519.9520263671875 511.239990234375 519.6079711914063 511.5320129394531 519.1519775390625 511.7479858398438 C 518.6959838867188 511.9639892578125 518.1400146484375 512.072021484375 517.4840087890625 512.072021484375 C 516.8759765625 512.072021484375 516.2999877929688 511.9760131835938 515.7559814453125 511.7839965820313 C 515.219970703125 511.5840148925781 514.7880249023438 511.3200073242188 514.4600219726563 510.9920043945313 L 514.8800048828125 510.3080139160156 C 515.1599731445313 510.5960083007813 515.531982421875 510.8320007324219 515.9959716796875 511.0159912109375 C 516.4600219726563 511.1919860839844 516.9559936523438 511.2799987792969 517.4840087890625 511.2799987792969 C 518.1719970703125 511.2799987792969 518.7039794921875 511.1319885253906 519.0800170898438 510.8359985351563 C 519.4559936523438 510.5320129394531 519.6439819335938 510.1159973144531 519.6439819335938 509.5880126953125 C 519.6439819335938 509.0679931640625 519.4559936523438 508.6600036621094 519.0800170898438 508.364013671875 C 518.7039794921875 508.0679931640625 518.135986328125 507.9200134277344 517.3759765625 507.9200134277344 L 516.7760009765625 507.9200134277344 L 516.7760009765625 507.2839965820313 L 519.10400390625 504.3680114746094 L 514.8079833984375 504.3680114746094 L 514.8079833984375 503.6000061035156 L 520.2080078125 503.6000061035156 L 520.2080078125 504.2120056152344 L 517.8319702148438 507.2000122070313 Z M 525.22900390625 506.9719848632813 C 525.781005859375 506.9719848632813 526.2689819335938 507.0759887695313 526.6929931640625 507.2839965820313 C 527.125 507.4920043945313 527.4609985351563 507.7879943847656 527.7009887695313 508.1719970703125 C 527.9409790039063 508.5480041503906 528.0609741210938 508.9880065917969 528.0609741210938 509.4920043945313 C 528.0609741210938 510.0039978027344 527.93701171875 510.4559936523438 527.6890258789063 510.8479919433594 C 527.4409790039063 511.239990234375 527.0969848632813 511.5440063476563 526.656982421875 511.760009765625 C 526.2249755859375 511.9679870605469 525.7369995117188 512.072021484375 525.1929931640625 512.072021484375 C 524.0809936523438 512.072021484375 523.22900390625 511.7080078125 522.6370239257813 510.9800109863281 C 522.0449829101563 510.2439880371094 521.7490234375 509.2080078125 521.7490234375 507.8720092773438 C 521.7490234375 506.9360046386719 521.9089965820313 506.1440124511719 522.22900390625 505.4960021972656 C 522.5490112304688 504.8479919433594 522.9970092773438 504.3599853515625 523.572998046875 504.0320129394531 C 524.1489868164063 503.6960144042969 524.8209838867188 503.5280151367188 525.5889892578125 503.5280151367188 C 526.4210205078125 503.5280151367188 527.0850219726563 503.6799926757813 527.5809936523438 503.9840087890625 L 527.2329711914063 504.6799926757813 C 526.8330078125 504.4159851074219 526.2890014648438 504.2839965820313 525.6010131835938 504.2839965820313 C 524.6729736328125 504.2839965820313 523.9450073242188 504.5799865722656 523.4169921875 505.1719970703125 C 522.8889770507813 505.7560119628906 522.625 506.6080017089844 522.625 507.7279968261719 C 522.625 507.9280090332031 522.6370239257813 508.156005859375 522.6610107421875 508.4119873046875 C 522.8690185546875 507.9559936523438 523.2009887695313 507.60400390625 523.656982421875 507.3559875488281 C 524.1129760742188 507.1000061035156 524.6370239257813 506.9719848632813 525.22900390625 506.9719848632813 Z M 525.156982421875 511.3399963378906 C 525.7650146484375 511.3399963378906 526.2570190429688 511.1759948730469 526.6329956054688 510.8479919433594 C 527.0170288085938 510.5119934082031 527.208984375 510.0679931640625 527.208984375 509.5159912109375 C 527.208984375 508.9639892578125 527.0170288085938 508.5239868164063 526.6329956054688 508.1960144042969 C 526.2570190429688 507.8680114746094 525.7449951171875 507.7040100097656 525.0969848632813 507.7040100097656 C 524.6729736328125 507.7040100097656 524.2969970703125 507.7839965820313 523.968994140625 507.9440002441406 C 523.6489868164063 508.10400390625 523.39697265625 508.3240051269531 523.2130126953125 508.60400390625 C 523.0289916992188 508.8840026855469 522.93701171875 509.1960144042969 522.93701171875 509.5400085449219 C 522.93701171875 509.8599853515625 523.02099609375 510.156005859375 523.1890258789063 510.4280090332031 C 523.364990234375 510.7000122070313 523.6209716796875 510.9200134277344 523.9569702148438 511.0880126953125 C 524.2930297851563 511.2560119628906 524.6929931640625 511.3399963378906 525.156982421875 511.3399963378906 Z">
			</path>
		</svg>
		<svg class="Path_25" viewBox="382.26 503.504 36.831 8.592">
			<path id="Path_25" d="M 390.0480041503906 512 L 390.0360107421875 505.8800048828125 L 387 510.9800109863281 L 386.447998046875 510.9800109863281 L 383.4119873046875 505.9159851074219 L 383.4119873046875 512 L 382.260009765625 512 L 382.260009765625 503.6000061035156 L 383.2439880371094 503.6000061035156 L 386.7479858398438 509.5039978027344 L 390.2040100097656 503.6000061035156 L 391.18798828125 503.6000061035156 L 391.2000122070313 512 L 390.0480041503906 512 Z M 397.4769897460938 512.0960083007813 C 396.6369934082031 512.0960083007813 395.8770141601563 511.9119873046875 395.1969909667969 511.5440063476563 C 394.5249938964844 511.1679992675781 393.9970092773438 510.656005859375 393.6130065917969 510.0079956054688 C 393.22900390625 509.3519897460938 393.0369873046875 508.6159973144531 393.0369873046875 507.7999877929688 C 393.0369873046875 506.9840087890625 393.22900390625 506.2520141601563 393.6130065917969 505.60400390625 C 393.9970092773438 504.947998046875 394.5289916992188 504.4360046386719 395.2090148925781 504.0679931640625 C 395.8890075683594 503.6919860839844 396.6489868164063 503.5039978027344 397.489013671875 503.5039978027344 C 398.1449890136719 503.5039978027344 398.7449951171875 503.6159973144531 399.2890014648438 503.8399963378906 C 399.8330078125 504.0559997558594 400.2969970703125 504.3800048828125 400.6809997558594 504.81201171875 L 399.9010009765625 505.5679931640625 C 399.2690124511719 504.9039916992188 398.4809875488281 504.5719909667969 397.5369873046875 504.5719909667969 C 396.9129943847656 504.5719909667969 396.3489990234375 504.7120056152344 395.8450012207031 504.9920043945313 C 395.3410034179688 505.2720031738281 394.9450073242188 505.6600036621094 394.6570129394531 506.156005859375 C 394.3770141601563 506.6440124511719 394.2369995117188 507.1919860839844 394.2369995117188 507.7999877929688 C 394.2369995117188 508.4079895019531 394.3770141601563 508.9599914550781 394.6570129394531 509.4559936523438 C 394.9450073242188 509.9440002441406 395.3410034179688 510.3280029296875 395.8450012207031 510.6080017089844 C 396.3489990234375 510.8880004882813 396.9129943847656 511.0280151367188 397.5369873046875 511.0280151367188 C 398.4729919433594 511.0280151367188 399.260986328125 510.6919860839844 399.9010009765625 510.0199890136719 L 400.6809997558594 510.7760009765625 C 400.2969970703125 511.2080078125 399.8290100097656 511.5360107421875 399.2770080566406 511.760009765625 C 398.7330017089844 511.9840087890625 398.1329956054688 512.0960083007813 397.4769897460938 512.0960083007813 Z M 409.6170043945313 503.6000061035156 L 409.6170043945313 512 L 408.4169921875 512 L 408.4169921875 508.2560119628906 L 403.5929870605469 508.2560119628906 L 403.5929870605469 512 L 402.3930053710938 512 L 402.3930053710938 503.6000061035156 L 403.5929870605469 503.6000061035156 L 403.5929870605469 507.2120056152344 L 408.4169921875 507.2120056152344 L 408.4169921875 503.6000061035156 L 409.6170043945313 503.6000061035156 Z M 415.8869934082031 512.0960083007813 C 415.0469970703125 512.0960083007813 414.2869873046875 511.9119873046875 413.6069946289063 511.5440063476563 C 412.9349975585938 511.1679992675781 412.4070129394531 510.656005859375 412.0230102539063 510.0079956054688 C 411.6390075683594 509.3519897460938 411.4469909667969 508.6159973144531 411.4469909667969 507.7999877929688 C 411.4469909667969 506.9840087890625 411.6390075683594 506.2520141601563 412.0230102539063 505.60400390625 C 412.4070129394531 504.947998046875 412.9389953613281 504.4360046386719 413.6189880371094 504.0679931640625 C 414.2990112304688 503.6919860839844 415.0589904785156 503.5039978027344 415.8989868164063 503.5039978027344 C 416.5549926757813 503.5039978027344 417.1549987792969 503.6159973144531 417.6990051269531 503.8399963378906 C 418.2430114746094 504.0559997558594 418.7070007324219 504.3800048828125 419.0910034179688 504.81201171875 L 418.3110046386719 505.5679931640625 C 417.6789855957031 504.9039916992188 416.8909912109375 504.5719909667969 415.9469909667969 504.5719909667969 C 415.322998046875 504.5719909667969 414.7590026855469 504.7120056152344 414.2550048828125 504.9920043945313 C 413.7510070800781 505.2720031738281 413.3550109863281 505.6600036621094 413.0669860839844 506.156005859375 C 412.7869873046875 506.6440124511719 412.6470031738281 507.1919860839844 412.6470031738281 507.7999877929688 C 412.6470031738281 508.4079895019531 412.7869873046875 508.9599914550781 413.0669860839844 509.4559936523438 C 413.3550109863281 509.9440002441406 413.7510070800781 510.3280029296875 414.2550048828125 510.6080017089844 C 414.7590026855469 510.8880004882813 415.322998046875 511.0280151367188 415.9469909667969 511.0280151367188 C 416.8829956054688 511.0280151367188 417.6709899902344 510.6919860839844 418.3110046386719 510.0199890136719 L 419.0910034179688 510.7760009765625 C 418.7070007324219 511.2080078125 418.239013671875 511.5360107421875 417.68701171875 511.760009765625 C 417.1430053710938 511.9840087890625 416.5429992675781 512.0960083007813 415.8869934082031 512.0960083007813 Z">
			</path>
		</svg>
		<svg class="Path_26" viewBox="497.154 482.528 30.448 8.544">
			<path id="Path_26" d="M 503.2980041503906 490.2319946289063 L 503.2980041503906 491 L 497.406005859375 491 L 497.406005859375 490.3880004882813 L 500.8980102539063 486.9679870605469 C 501.3380126953125 486.5360107421875 501.6340026855469 486.1640014648438 501.7860107421875 485.8519897460938 C 501.9460144042969 485.5320129394531 502.0260009765625 485.2120056152344 502.0260009765625 484.8919982910156 C 502.0260009765625 484.39599609375 501.85400390625 484.0119934082031 501.510009765625 483.739990234375 C 501.1740112304688 483.4599914550781 500.6900024414063 483.3200073242188 500.0580139160156 483.3200073242188 C 499.0740051269531 483.3200073242188 498.3099975585938 483.6319885253906 497.7659912109375 484.2560119628906 L 497.1539916992188 483.7279968261719 C 497.4819946289063 483.343994140625 497.8980102539063 483.0480041503906 498.4020080566406 482.8399963378906 C 498.9140014648438 482.6319885253906 499.489990234375 482.5280151367188 500.1300048828125 482.5280151367188 C 500.9859924316406 482.5280151367188 501.6619873046875 482.7319946289063 502.1579895019531 483.1400146484375 C 502.6619873046875 483.5400085449219 502.9140014648438 484.0920104980469 502.9140014648438 484.7959899902344 C 502.9140014648438 485.2279968261719 502.8179931640625 485.6440124511719 502.6260070800781 486.0440063476563 C 502.4339904785156 486.4440002441406 502.0700073242188 486.9039916992188 501.5339965820313 487.4240112304688 L 498.6780090332031 490.2319946289063 L 503.2980041503906 490.2319946289063 Z M 510.2630004882813 482.6000061035156 L 510.2630004882813 483.2120056152344 L 506.7470092773438 491 L 505.8110046386719 491 L 509.2669982910156 483.3680114746094 L 504.9469909667969 483.3680114746094 L 504.9469909667969 484.9400024414063 L 504.0950012207031 484.9400024414063 L 504.0950012207031 482.6000061035156 L 510.2630004882813 482.6000061035156 Z M 510.8999938964844 487.3760070800781 L 514.0440063476563 487.3760070800781 L 514.0440063476563 488.1199951171875 L 510.8999938964844 488.1199951171875 L 510.8999938964844 487.3760070800781 Z M 518.0070190429688 486.2000122070313 C 518.8870239257813 486.2479858398438 519.5549926757813 486.4880065917969 520.010986328125 486.9200134277344 C 520.4749755859375 487.343994140625 520.7069702148438 487.8999938964844 520.7069702148438 488.5880126953125 C 520.7069702148438 489.0679931640625 520.5910034179688 489.4960021972656 520.3590087890625 489.8720092773438 C 520.1270141601563 490.239990234375 519.7830200195313 490.5320129394531 519.3270263671875 490.7479858398438 C 518.8709716796875 490.9639892578125 518.3150024414063 491.0719909667969 517.6589965820313 491.0719909667969 C 517.051025390625 491.0719909667969 516.4749755859375 490.9760131835938 515.9310302734375 490.7839965820313 C 515.39501953125 490.5840148925781 514.9630126953125 490.3200073242188 514.635009765625 489.9920043945313 L 515.0549926757813 489.3080139160156 C 515.3350219726563 489.5960083007813 515.7069702148438 489.8320007324219 516.1710205078125 490.0159912109375 C 516.635009765625 490.1919860839844 517.1309814453125 490.2799987792969 517.6589965820313 490.2799987792969 C 518.3469848632813 490.2799987792969 518.8790283203125 490.1319885253906 519.2550048828125 489.8359985351563 C 519.6309814453125 489.5320129394531 519.8189697265625 489.1159973144531 519.8189697265625 488.5880126953125 C 519.8189697265625 488.0679931640625 519.6309814453125 487.6600036621094 519.2550048828125 487.364013671875 C 518.8790283203125 487.0679931640625 518.3109741210938 486.9200134277344 517.551025390625 486.9200134277344 L 516.9509887695313 486.9200134277344 L 516.9509887695313 486.2839965820313 L 519.2789916992188 483.3680114746094 L 514.9829711914063 483.3680114746094 L 514.9829711914063 482.6000061035156 L 520.3829956054688 482.6000061035156 L 520.3829956054688 483.2120056152344 L 518.0070190429688 486.2000122070313 Z M 527.6019897460938 490.2319946289063 L 527.6019897460938 491 L 521.7100219726563 491 L 521.7100219726563 490.3880004882813 L 525.2020263671875 486.9679870605469 C 525.6420288085938 486.5360107421875 525.93798828125 486.1640014648438 526.0900268554688 485.8519897460938 C 526.25 485.5320129394531 526.3300170898438 485.2120056152344 526.3300170898438 484.8919982910156 C 526.3300170898438 484.39599609375 526.1580200195313 484.0119934082031 525.8140258789063 483.739990234375 C 525.47802734375 483.4599914550781 524.9940185546875 483.3200073242188 524.3619995117188 483.3200073242188 C 523.3779907226563 483.3200073242188 522.614013671875 483.6319885253906 522.0700073242188 484.2560119628906 L 521.4580078125 483.7279968261719 C 521.7860107421875 483.343994140625 522.2020263671875 483.0480041503906 522.7059936523438 482.8399963378906 C 523.218017578125 482.6319885253906 523.7940063476563 482.5280151367188 524.4340209960938 482.5280151367188 C 525.2899780273438 482.5280151367188 525.9660034179688 482.7319946289063 526.4619750976563 483.1400146484375 C 526.9660034179688 483.5400085449219 527.218017578125 484.0920104980469 527.218017578125 484.7959899902344 C 527.218017578125 485.2279968261719 527.1220092773438 485.6440124511719 526.9299926757813 486.0440063476563 C 526.7379760742188 486.4440002441406 526.3740234375 486.9039916992188 525.8380126953125 487.4240112304688 L 522.9819946289063 490.2319946289063 L 527.6019897460938 490.2319946289063 Z">
			</path>
		</svg>
		<svg class="Path_28" viewBox="382.26 482.504 27.357 8.592">
			<path id="Path_28" d="M 390.0480041503906 491 L 390.0360107421875 484.8800048828125 L 387 489.9800109863281 L 386.447998046875 489.9800109863281 L 383.4119873046875 484.9159851074219 L 383.4119873046875 491 L 382.260009765625 491 L 382.260009765625 482.6000061035156 L 383.2439880371094 482.6000061035156 L 386.7479858398438 488.5039978027344 L 390.2040100097656 482.6000061035156 L 391.18798828125 482.6000061035156 L 391.2000122070313 491 L 390.0480041503906 491 Z M 397.4769897460938 491.0960083007813 C 396.6369934082031 491.0960083007813 395.8770141601563 490.9119873046875 395.1969909667969 490.5440063476563 C 394.5249938964844 490.1679992675781 393.9970092773438 489.656005859375 393.6130065917969 489.0079956054688 C 393.22900390625 488.3519897460938 393.0369873046875 487.6159973144531 393.0369873046875 486.7999877929688 C 393.0369873046875 485.9840087890625 393.22900390625 485.2520141601563 393.6130065917969 484.60400390625 C 393.9970092773438 483.947998046875 394.5289916992188 483.4360046386719 395.2090148925781 483.0679931640625 C 395.8890075683594 482.6919860839844 396.6489868164063 482.5039978027344 397.489013671875 482.5039978027344 C 398.1449890136719 482.5039978027344 398.7449951171875 482.6159973144531 399.2890014648438 482.8399963378906 C 399.8330078125 483.0559997558594 400.2969970703125 483.3800048828125 400.6809997558594 483.81201171875 L 399.9010009765625 484.5679931640625 C 399.2690124511719 483.9039916992188 398.4809875488281 483.5719909667969 397.5369873046875 483.5719909667969 C 396.9129943847656 483.5719909667969 396.3489990234375 483.7120056152344 395.8450012207031 483.9920043945313 C 395.3410034179688 484.2720031738281 394.9450073242188 484.6600036621094 394.6570129394531 485.156005859375 C 394.3770141601563 485.6440124511719 394.2369995117188 486.1919860839844 394.2369995117188 486.7999877929688 C 394.2369995117188 487.4079895019531 394.3770141601563 487.9599914550781 394.6570129394531 488.4559936523438 C 394.9450073242188 488.9440002441406 395.3410034179688 489.3280029296875 395.8450012207031 489.6080017089844 C 396.3489990234375 489.8880004882813 396.9129943847656 490.0280151367188 397.5369873046875 490.0280151367188 C 398.4729919433594 490.0280151367188 399.260986328125 489.6919860839844 399.9010009765625 489.0199890136719 L 400.6809997558594 489.7760009765625 C 400.2969970703125 490.2080078125 399.8290100097656 490.5360107421875 399.2770080566406 490.760009765625 C 398.7330017089844 490.9840087890625 398.1329956054688 491.0960083007813 397.4769897460938 491.0960083007813 Z M 409.6170043945313 482.6000061035156 L 409.6170043945313 491 L 408.4169921875 491 L 408.4169921875 487.2560119628906 L 403.5929870605469 487.2560119628906 L 403.5929870605469 491 L 402.3930053710938 491 L 402.3930053710938 482.6000061035156 L 403.5929870605469 482.6000061035156 L 403.5929870605469 486.2120056152344 L 408.4169921875 486.2120056152344 L 408.4169921875 482.6000061035156 L 409.6170043945313 482.6000061035156 Z">
			</path>
		</svg>
		<svg class="Path_29" viewBox="496.179 461.528 32.65 8.544">
			<path id="Path_29" d="M 502.3469848632813 461.6000061035156 L 502.3469848632813 462.2120056152344 L 498.8309936523438 470 L 497.8949890136719 470 L 501.3510131835938 462.3680114746094 L 497.031005859375 462.3680114746094 L 497.031005859375 463.9400024414063 L 496.1789855957031 463.9400024414063 L 496.1789855957031 461.6000061035156 L 502.3469848632813 461.6000061035156 Z M 506.7309875488281 464.9719848632813 C 507.2829895019531 464.9719848632813 507.77099609375 465.0759887695313 508.1950073242188 465.2839965820313 C 508.6270141601563 465.4920043945313 508.9630126953125 465.7879943847656 509.2030029296875 466.1719970703125 C 509.4429931640625 466.5480041503906 509.56298828125 466.9880065917969 509.56298828125 467.4920043945313 C 509.56298828125 468.0039978027344 509.4389953613281 468.4559936523438 509.1910095214844 468.8479919433594 C 508.9429931640625 469.239990234375 508.5989990234375 469.5440063476563 508.1589965820313 469.760009765625 C 507.7269897460938 469.9679870605469 507.239013671875 470.0719909667969 506.6950073242188 470.0719909667969 C 505.5830078125 470.0719909667969 504.7309875488281 469.7080078125 504.1390075683594 468.9800109863281 C 503.5469970703125 468.2439880371094 503.2510070800781 467.2080078125 503.2510070800781 465.8720092773438 C 503.2510070800781 464.9360046386719 503.4110107421875 464.1440124511719 503.7309875488281 463.4960021972656 C 504.0509948730469 462.8479919433594 504.4989929199219 462.3599853515625 505.0750122070313 462.0320129394531 C 505.6510009765625 461.6960144042969 506.322998046875 461.5280151367188 507.0910034179688 461.5280151367188 C 507.9230041503906 461.5280151367188 508.5870056152344 461.6799926757813 509.0830078125 461.9840087890625 L 508.7349853515625 462.6799926757813 C 508.3349914550781 462.4159851074219 507.7909851074219 462.2839965820313 507.1029968261719 462.2839965820313 C 506.1749877929688 462.2839965820313 505.4469909667969 462.5799865722656 504.9190063476563 463.1719970703125 C 504.3909912109375 463.7560119628906 504.1270141601563 464.6080017089844 504.1270141601563 465.7279968261719 C 504.1270141601563 465.9280090332031 504.1390075683594 466.156005859375 504.1629943847656 466.4119873046875 C 504.3710021972656 465.9559936523438 504.7030029296875 465.60400390625 505.1589965820313 465.3559875488281 C 505.614990234375 465.1000061035156 506.1390075683594 464.9719848632813 506.7309875488281 464.9719848632813 Z M 506.6589965820313 469.3399963378906 C 507.2669982910156 469.3399963378906 507.7590026855469 469.1759948730469 508.135009765625 468.8479919433594 C 508.5190124511719 468.5119934082031 508.7109985351563 468.0679931640625 508.7109985351563 467.5159912109375 C 508.7109985351563 466.9639892578125 508.5190124511719 466.5239868164063 508.135009765625 466.1960144042969 C 507.7590026855469 465.8680114746094 507.2470092773438 465.7040100097656 506.5989990234375 465.7040100097656 C 506.1749877929688 465.7040100097656 505.7990112304688 465.7839965820313 505.4710083007813 465.9440002441406 C 505.1510009765625 466.10400390625 504.8989868164063 466.3240051269531 504.7149963378906 466.60400390625 C 504.531005859375 466.8840026855469 504.4389953613281 467.1960144042969 504.4389953613281 467.5400085449219 C 504.4389953613281 467.8599853515625 504.5230102539063 468.156005859375 504.6910095214844 468.4280090332031 C 504.8670043945313 468.7000122070313 505.1229858398438 468.9200134277344 505.4590148925781 469.0880126953125 C 505.7950134277344 469.2560119628906 506.1950073242188 469.3399963378906 506.6589965820313 469.3399963378906 Z M 510.7179870605469 466.3760070800781 L 513.8619995117188 466.3760070800781 L 513.8619995117188 467.1199951171875 L 510.7179870605469 467.1199951171875 L 510.7179870605469 466.3760070800781 Z M 517.8200073242188 461.5280151367188 C 518.9320068359375 461.5280151367188 519.7839965820313 461.89599609375 520.3759765625 462.6319885253906 C 520.968017578125 463.3599853515625 521.2639770507813 464.3919982910156 521.2639770507813 465.7279968261719 C 521.2639770507813 466.6640014648438 521.10400390625 467.4559936523438 520.7839965820313 468.10400390625 C 520.4639892578125 468.7520141601563 520.0159912109375 469.2439880371094 519.4400024414063 469.5799865722656 C 518.864013671875 469.9079895019531 518.1920166015625 470.0719909667969 517.4240112304688 470.0719909667969 C 516.5919799804688 470.0719909667969 515.927978515625 469.9200134277344 515.4320068359375 469.6159973144531 L 515.780029296875 468.9200134277344 C 516.1799926757813 469.1839904785156 516.7239990234375 469.3160095214844 517.4119873046875 469.3160095214844 C 518.3400268554688 469.3160095214844 519.0679931640625 469.0239868164063 519.5960083007813 468.4400024414063 C 520.1240234375 467.8479919433594 520.3880004882813 466.9920043945313 520.3880004882813 465.8720092773438 C 520.3880004882813 465.6640014648438 520.3759765625 465.4360046386719 520.3519897460938 465.18798828125 C 520.1439819335938 465.6440124511719 519.81201171875 466 519.3560180664063 466.2560119628906 C 518.9000244140625 466.5039978027344 518.3759765625 466.6279907226563 517.7839965820313 466.6279907226563 C 517.2319946289063 466.6279907226563 516.739990234375 466.5239868164063 516.3079833984375 466.3160095214844 C 515.8839721679688 466.1080017089844 515.552001953125 465.8160095214844 515.31201171875 465.4400024414063 C 515.072021484375 465.0559997558594 514.9520263671875 464.6119995117188 514.9520263671875 464.1080017089844 C 514.9520263671875 463.5960083007813 515.0759887695313 463.1440124511719 515.323974609375 462.7520141601563 C 515.572021484375 462.3599853515625 515.9119873046875 462.0599975585938 516.343994140625 461.8519897460938 C 516.7839965820313 461.635986328125 517.2760009765625 461.5280151367188 517.8200073242188 461.5280151367188 Z M 517.916015625 465.89599609375 C 518.3400268554688 465.89599609375 518.7119750976563 465.8160095214844 519.031982421875 465.656005859375 C 519.3599853515625 465.4960021972656 519.6160278320313 465.2760009765625 519.7999877929688 464.9960021972656 C 519.9840087890625 464.7160034179688 520.0759887695313 464.4039916992188 520.0759887695313 464.0599975585938 C 520.0759887695313 463.739990234375 519.9879760742188 463.4440002441406 519.81201171875 463.1719970703125 C 519.6439819335938 462.8999938964844 519.3920288085938 462.6799926757813 519.0560302734375 462.5119934082031 C 518.719970703125 462.343994140625 518.3200073242188 462.260009765625 517.8560180664063 462.260009765625 C 517.2479858398438 462.260009765625 516.7520141601563 462.4280090332031 516.3679809570313 462.7640075683594 C 515.9920043945313 463.0920104980469 515.8040161132813 463.5320129394531 515.8040161132813 464.0840148925781 C 515.8040161132813 464.635986328125 515.9920043945313 465.0759887695313 516.3679809570313 465.4039916992188 C 516.7520141601563 465.7319946289063 517.2680053710938 465.89599609375 517.916015625 465.89599609375 Z M 525.9970092773438 464.9719848632813 C 526.5490112304688 464.9719848632813 527.0369873046875 465.0759887695313 527.4609985351563 465.2839965820313 C 527.8930053710938 465.4920043945313 528.22900390625 465.7879943847656 528.468994140625 466.1719970703125 C 528.708984375 466.5480041503906 528.8289794921875 466.9880065917969 528.8289794921875 467.4920043945313 C 528.8289794921875 468.0039978027344 528.7050170898438 468.4559936523438 528.4569702148438 468.8479919433594 C 528.208984375 469.239990234375 527.864990234375 469.5440063476563 527.4249877929688 469.760009765625 C 526.9929809570313 469.9679870605469 526.5050048828125 470.0719909667969 525.9609985351563 470.0719909667969 C 524.8489990234375 470.0719909667969 523.9970092773438 469.7080078125 523.405029296875 468.9800109863281 C 522.81298828125 468.2439880371094 522.5170288085938 467.2080078125 522.5170288085938 465.8720092773438 C 522.5170288085938 464.9360046386719 522.677001953125 464.1440124511719 522.9970092773438 463.4960021972656 C 523.3170166015625 462.8479919433594 523.7650146484375 462.3599853515625 524.3410034179688 462.0320129394531 C 524.9169921875 461.6960144042969 525.5889892578125 461.5280151367188 526.3569946289063 461.5280151367188 C 527.1890258789063 461.5280151367188 527.85302734375 461.6799926757813 528.3489990234375 461.9840087890625 L 528.0009765625 462.6799926757813 C 527.6010131835938 462.4159851074219 527.0570068359375 462.2839965820313 526.3690185546875 462.2839965820313 C 525.4409790039063 462.2839965820313 524.7130126953125 462.5799865722656 524.1849975585938 463.1719970703125 C 523.656982421875 463.7560119628906 523.3930053710938 464.6080017089844 523.3930053710938 465.7279968261719 C 523.3930053710938 465.9280090332031 523.405029296875 466.156005859375 523.4290161132813 466.4119873046875 C 523.6370239257813 465.9559936523438 523.968994140625 465.60400390625 524.4249877929688 465.3559875488281 C 524.8809814453125 465.1000061035156 525.405029296875 464.9719848632813 525.9970092773438 464.9719848632813 Z M 525.9249877929688 469.3399963378906 C 526.5330200195313 469.3399963378906 527.0250244140625 469.1759948730469 527.4010009765625 468.8479919433594 C 527.7849731445313 468.5119934082031 527.9769897460938 468.0679931640625 527.9769897460938 467.5159912109375 C 527.9769897460938 466.9639892578125 527.7849731445313 466.5239868164063 527.4010009765625 466.1960144042969 C 527.0250244140625 465.8680114746094 526.5130004882813 465.7040100097656 525.864990234375 465.7040100097656 C 525.4409790039063 465.7040100097656 525.0650024414063 465.7839965820313 524.7369995117188 465.9440002441406 C 524.4169921875 466.10400390625 524.1649780273438 466.3240051269531 523.9810180664063 466.60400390625 C 523.7969970703125 466.8840026855469 523.7050170898438 467.1960144042969 523.7050170898438 467.5400085449219 C 523.7050170898438 467.8599853515625 523.7890014648438 468.156005859375 523.9569702148438 468.4280090332031 C 524.1329956054688 468.7000122070313 524.3889770507813 468.9200134277344 524.7249755859375 469.0880126953125 C 525.0609741210938 469.2560119628906 525.4609985351563 469.3399963378906 525.9249877929688 469.3399963378906 Z">
			</path>
		</svg>
		<svg class="Path_31" viewBox="382.26 461.504 27.347 8.592">
			<path id="Path_31" d="M 390.0480041503906 470 L 390.0360107421875 463.8800048828125 L 387 468.9800109863281 L 386.447998046875 468.9800109863281 L 383.4119873046875 463.9159851074219 L 383.4119873046875 470 L 382.260009765625 470 L 382.260009765625 461.6000061035156 L 383.2439880371094 461.6000061035156 L 386.7479858398438 467.5039978027344 L 390.2040100097656 461.6000061035156 L 391.18798828125 461.6000061035156 L 391.2000122070313 470 L 390.0480041503906 470 Z M 397.4769897460938 470.0960083007813 C 396.6369934082031 470.0960083007813 395.8770141601563 469.9119873046875 395.1969909667969 469.5440063476563 C 394.5249938964844 469.1679992675781 393.9970092773438 468.656005859375 393.6130065917969 468.0079956054688 C 393.22900390625 467.3519897460938 393.0369873046875 466.6159973144531 393.0369873046875 465.7999877929688 C 393.0369873046875 464.9840087890625 393.22900390625 464.2520141601563 393.6130065917969 463.60400390625 C 393.9970092773438 462.947998046875 394.5289916992188 462.4360046386719 395.2090148925781 462.0679931640625 C 395.8890075683594 461.6919860839844 396.6489868164063 461.5039978027344 397.489013671875 461.5039978027344 C 398.1449890136719 461.5039978027344 398.7449951171875 461.6159973144531 399.2890014648438 461.8399963378906 C 399.8330078125 462.0559997558594 400.2969970703125 462.3800048828125 400.6809997558594 462.81201171875 L 399.9010009765625 463.5679931640625 C 399.2690124511719 462.9039916992188 398.4809875488281 462.5719909667969 397.5369873046875 462.5719909667969 C 396.9129943847656 462.5719909667969 396.3489990234375 462.7120056152344 395.8450012207031 462.9920043945313 C 395.3410034179688 463.2720031738281 394.9450073242188 463.6600036621094 394.6570129394531 464.156005859375 C 394.3770141601563 464.6440124511719 394.2369995117188 465.1919860839844 394.2369995117188 465.7999877929688 C 394.2369995117188 466.4079895019531 394.3770141601563 466.9599914550781 394.6570129394531 467.4559936523438 C 394.9450073242188 467.9440002441406 395.3410034179688 468.3280029296875 395.8450012207031 468.6080017089844 C 396.3489990234375 468.8880004882813 396.9129943847656 469.0280151367188 397.5369873046875 469.0280151367188 C 398.4729919433594 469.0280151367188 399.260986328125 468.6919860839844 399.9010009765625 468.0199890136719 L 400.6809997558594 468.7760009765625 C 400.2969970703125 469.2080078125 399.8290100097656 469.5360107421875 399.2770080566406 469.760009765625 C 398.7330017089844 469.9840087890625 398.1329956054688 470.0960083007813 397.4769897460938 470.0960083007813 Z M 409.6069946289063 461.6000061035156 L 405.9230041503906 470 L 404.7349853515625 470 L 401.0390014648438 461.6000061035156 L 402.3349914550781 461.6000061035156 L 405.3590087890625 468.5 L 408.4070129394531 461.6000061035156 L 409.6069946289063 461.6000061035156 Z">
			</path>
		</svg>
		<svg class="Path_32" viewBox="496.342 440.6 31.909 8.472">
			<path id="Path_32" d="M 499.7139892578125 444.2000122070313 C 500.593994140625 444.2479858398438 501.2619934082031 444.4880065917969 501.7179870605469 444.9200134277344 C 502.1820068359375 445.343994140625 502.4140014648438 445.8999938964844 502.4140014648438 446.5880126953125 C 502.4140014648438 447.0679931640625 502.2980041503906 447.4960021972656 502.0660095214844 447.8720092773438 C 501.8340148925781 448.239990234375 501.489990234375 448.5320129394531 501.0339965820313 448.7479858398438 C 500.5780029296875 448.9639892578125 500.0220031738281 449.0719909667969 499.3659973144531 449.0719909667969 C 498.7579956054688 449.0719909667969 498.1820068359375 448.9760131835938 497.6380004882813 448.7839965820313 C 497.1019897460938 448.5840148925781 496.6700134277344 448.3200073242188 496.3420104980469 447.9920043945313 L 496.7619934082031 447.3080139160156 C 497.0419921875 447.5960083007813 497.4140014648438 447.8320007324219 497.8779907226563 448.0159912109375 C 498.3420104980469 448.1919860839844 498.8380126953125 448.2799987792969 499.3659973144531 448.2799987792969 C 500.0539855957031 448.2799987792969 500.5859985351563 448.1319885253906 500.9620056152344 447.8359985351563 C 501.3380126953125 447.5320129394531 501.5260009765625 447.1159973144531 501.5260009765625 446.5880126953125 C 501.5260009765625 446.0679931640625 501.3380126953125 445.6600036621094 500.9620056152344 445.364013671875 C 500.5859985351563 445.0679931640625 500.0180053710938 444.9200134277344 499.2579956054688 444.9200134277344 L 498.6579895019531 444.9200134277344 L 498.6579895019531 444.2839965820313 L 500.9859924316406 441.3680114746094 L 496.6900024414063 441.3680114746094 L 496.6900024414063 440.6000061035156 L 502.0899963378906 440.6000061035156 L 502.0899963378906 441.2120056152344 L 499.7139892578125 444.2000122070313 Z M 505.7229919433594 444.0440063476563 C 506.9389953613281 444.0440063476563 507.822998046875 444.2640075683594 508.375 444.7040100097656 C 508.9349975585938 445.135986328125 509.2149963378906 445.7439880371094 509.2149963378906 446.5280151367188 C 509.2149963378906 447.0159912109375 509.0989990234375 447.4519958496094 508.8670043945313 447.8359985351563 C 508.6430053710938 448.2200012207031 508.3030090332031 448.5239868164063 507.8469848632813 448.7479858398438 C 507.3909912109375 448.9639892578125 506.8309936523438 449.0719909667969 506.1669921875 449.0719909667969 C 505.5669860839844 449.0719909667969 504.9949951171875 448.9760131835938 504.4509887695313 448.7839965820313 C 503.9150085449219 448.5840148925781 503.4830017089844 448.3200073242188 503.1549987792969 447.9920043945313 L 503.5750122070313 447.3080139160156 C 503.8550109863281 447.5960083007813 504.2229919433594 447.8320007324219 504.6789855957031 448.0159912109375 C 505.135009765625 448.1919860839844 505.6270141601563 448.2799987792969 506.1549987792969 448.2799987792969 C 506.8510131835938 448.2799987792969 507.3869934082031 448.1239929199219 507.7630004882813 447.81201171875 C 508.1470031738281 447.5 508.3389892578125 447.0840148925781 508.3389892578125 446.5639953613281 C 508.3389892578125 445.9880065917969 508.1229858398438 445.552001953125 507.6910095214844 445.2560119628906 C 507.2669982910156 444.9599914550781 506.5469970703125 444.81201171875 505.531005859375 444.81201171875 L 503.7430114746094 444.81201171875 L 504.1749877929688 440.6000061035156 L 508.77099609375 440.6000061035156 L 508.77099609375 441.3680114746094 L 504.9309997558594 441.3680114746094 L 504.6430053710938 444.0440063476563 L 505.7229919433594 444.0440063476563 Z M 510.4079895019531 445.3760070800781 L 513.552001953125 445.3760070800781 L 513.552001953125 446.1199951171875 L 510.4079895019531 446.1199951171875 L 510.4079895019531 445.3760070800781 Z M 522.1270141601563 446.7919921875 L 520.447021484375 446.7919921875 L 520.447021484375 449 L 519.5830078125 449 L 519.5830078125 446.7919921875 L 514.843017578125 446.7919921875 L 514.843017578125 446.1679992675781 L 519.2949829101563 440.6000061035156 L 520.2550048828125 440.6000061035156 L 515.958984375 446.0239868164063 L 519.6069946289063 446.0239868164063 L 519.6069946289063 444.0799865722656 L 520.447021484375 444.0799865722656 L 520.447021484375 446.0239868164063 L 522.1270141601563 446.0239868164063 L 522.1270141601563 446.7919921875 Z M 528.2509765625 440.6000061035156 L 528.2509765625 441.2120056152344 L 524.7349853515625 449 L 523.7990112304688 449 L 527.2550048828125 441.3680114746094 L 522.9349975585938 441.3680114746094 L 522.9349975585938 442.9400024414063 L 522.0830078125 442.9400024414063 L 522.0830078125 440.6000061035156 L 528.2509765625 440.6000061035156 Z">
			</path>
		</svg>
		<svg class="Path_34" viewBox="382.26 440.504 24.546 8.592">
			<path id="Path_34" d="M 385.5360107421875 440.6000061035156 C 386.6239929199219 440.6000061035156 387.4800109863281 440.8599853515625 388.10400390625 441.3800048828125 C 388.7279968261719 441.8999938964844 389.0400085449219 442.6159973144531 389.0400085449219 443.5280151367188 C 389.0400085449219 444.4400024414063 388.7279968261719 445.156005859375 388.10400390625 445.6759948730469 C 387.4800109863281 446.1960144042969 386.6239929199219 446.4559936523438 385.5360107421875 446.4559936523438 L 383.4599914550781 446.4559936523438 L 383.4599914550781 449 L 382.260009765625 449 L 382.260009765625 440.6000061035156 L 385.5360107421875 440.6000061035156 Z M 385.5 445.4119873046875 C 386.260009765625 445.4119873046875 386.8399963378906 445.2520141601563 387.239990234375 444.9320068359375 C 387.6400146484375 444.60400390625 387.8399963378906 444.135986328125 387.8399963378906 443.5280151367188 C 387.8399963378906 442.9200134277344 387.6400146484375 442.4559936523438 387.239990234375 442.135986328125 C 386.8399963378906 441.8080139160156 386.260009765625 441.6440124511719 385.5 441.6440124511719 L 383.4599914550781 441.6440124511719 L 383.4599914550781 445.4119873046875 L 385.5 445.4119873046875 Z M 394.6759948730469 449.0960083007813 C 393.8359985351563 449.0960083007813 393.0759887695313 448.9119873046875 392.39599609375 448.5440063476563 C 391.7239990234375 448.1679992675781 391.1960144042969 447.656005859375 390.81201171875 447.0079956054688 C 390.4280090332031 446.3519897460938 390.2359924316406 445.6159973144531 390.2359924316406 444.7999877929688 C 390.2359924316406 443.9840087890625 390.4280090332031 443.2520141601563 390.81201171875 442.60400390625 C 391.1960144042969 441.947998046875 391.7279968261719 441.4360046386719 392.4079895019531 441.0679931640625 C 393.0880126953125 440.6919860839844 393.8479919433594 440.5039978027344 394.68798828125 440.5039978027344 C 395.343994140625 440.5039978027344 395.9440002441406 440.6159973144531 396.4880065917969 440.8399963378906 C 397.0320129394531 441.0559997558594 397.4960021972656 441.3800048828125 397.8800048828125 441.81201171875 L 397.1000061035156 442.5679931640625 C 396.4679870605469 441.9039916992188 395.6799926757813 441.5719909667969 394.7359924316406 441.5719909667969 C 394.1119995117188 441.5719909667969 393.5480041503906 441.7120056152344 393.0440063476563 441.9920043945313 C 392.5400085449219 442.2720031738281 392.1440124511719 442.6600036621094 391.8559875488281 443.156005859375 C 391.5759887695313 443.6440124511719 391.4360046386719 444.1919860839844 391.4360046386719 444.7999877929688 C 391.4360046386719 445.4079895019531 391.5759887695313 445.9599914550781 391.8559875488281 446.4559936523438 C 392.1440124511719 446.9440002441406 392.5400085449219 447.3280029296875 393.0440063476563 447.6080017089844 C 393.5480041503906 447.8880004882813 394.1119995117188 448.0280151367188 394.7359924316406 448.0280151367188 C 395.6719970703125 448.0280151367188 396.4599914550781 447.6919860839844 397.1000061035156 447.0199890136719 L 397.8800048828125 447.7760009765625 C 397.4960021972656 448.2080078125 397.0280151367188 448.5360107421875 396.4760131835938 448.760009765625 C 395.9320068359375 448.9840087890625 395.3320007324219 449.0960083007813 394.6759948730469 449.0960083007813 Z M 406.8059997558594 440.6000061035156 L 403.1220092773438 449 L 401.9339904785156 449 L 398.2380065917969 440.6000061035156 L 399.5339965820313 440.6000061035156 L 402.5580139160156 447.5 L 405.6059875488281 440.6000061035156 L 406.8059997558594 440.6000061035156 Z">
			</path>
		</svg>
		<svg class="Path_35" viewBox="386.246 420.6 36.085 8.4">
			<path id="Path_35" d="M 393.4700012207031 420.6000061035156 L 393.4700012207031 429 L 392.4859924316406 429 L 387.4460144042969 422.7359924316406 L 387.4460144042969 429 L 386.2460021972656 429 L 386.2460021972656 420.6000061035156 L 387.2300109863281 420.6000061035156 L 392.2699890136719 426.864013671875 L 392.2699890136719 420.6000061035156 L 393.4700012207031 420.6000061035156 Z M 401.3370056152344 426.8999938964844 L 396.8729858398438 426.8999938964844 L 395.9490051269531 429 L 394.7130126953125 429 L 398.5169982910156 420.6000061035156 L 399.7049865722656 420.6000061035156 L 403.52099609375 429 L 402.260986328125 429 L 401.3370056152344 426.8999938964844 Z M 400.9169921875 425.9400024414063 L 399.1050109863281 421.8240051269531 L 397.2929992675781 425.9400024414063 L 400.9169921875 425.9400024414063 Z M 412.56201171875 429 L 412.5499877929688 422.8800048828125 L 409.5140075683594 427.9800109863281 L 408.9620056152344 427.9800109863281 L 405.9259948730469 422.9159851074219 L 405.9259948730469 429 L 404.7739868164063 429 L 404.7739868164063 420.6000061035156 L 405.7579956054688 420.6000061035156 L 409.2619934082031 426.5039978027344 L 412.7179870605469 420.6000061035156 L 413.7019958496094 420.6000061035156 L 413.7139892578125 429 L 412.56201171875 429 Z M 422.3309936523438 427.9559936523438 L 422.3309936523438 429 L 416.2349853515625 429 L 416.2349853515625 420.6000061035156 L 422.1629943847656 420.6000061035156 L 422.1629943847656 421.6440124511719 L 417.4349975585938 421.6440124511719 L 417.4349975585938 424.2239990234375 L 421.6470031738281 424.2239990234375 L 421.6470031738281 425.2439880371094 L 417.4349975585938 425.2439880371094 L 417.4349975585938 427.9559936523438 L 422.3309936523438 427.9559936523438 Z">
			</path>
		</svg>
		<svg class="Path_36" viewBox="431.217 420.504 45.779 8.592">
			<path id="Path_36" d="M 436.8330078125 429 L 435.02099609375 426.4200134277344 C 434.7969970703125 426.4360046386719 434.6210021972656 426.4440002441406 434.4930114746094 426.4440002441406 L 432.4169921875 426.4440002441406 L 432.4169921875 429 L 431.2170104980469 429 L 431.2170104980469 420.6000061035156 L 434.4930114746094 420.6000061035156 C 435.5809936523438 420.6000061035156 436.43701171875 420.8599853515625 437.0610046386719 421.3800048828125 C 437.6849975585938 421.8999938964844 437.9970092773438 422.6159973144531 437.9970092773438 423.5280151367188 C 437.9970092773438 424.1759948730469 437.8370056152344 424.7279968261719 437.5169982910156 425.1839904785156 C 437.1969909667969 425.6400146484375 436.7409973144531 425.9719848632813 436.1489868164063 426.1799926757813 L 438.1409912109375 429 L 436.8330078125 429 Z M 434.4570007324219 425.4240112304688 C 435.2170104980469 425.4240112304688 435.7969970703125 425.260009765625 436.1969909667969 424.9320068359375 C 436.5969848632813 424.60400390625 436.7969970703125 424.135986328125 436.7969970703125 423.5280151367188 C 436.7969970703125 422.9200134277344 436.5969848632813 422.4559936523438 436.1969909667969 422.135986328125 C 435.7969970703125 421.8080139160156 435.2170104980469 421.6440124511719 434.4570007324219 421.6440124511719 L 432.4169921875 421.6440124511719 L 432.4169921875 425.4240112304688 L 434.4570007324219 425.4240112304688 Z M 446.0320129394531 427.9559936523438 L 446.0320129394531 429 L 439.9360046386719 429 L 439.9360046386719 420.6000061035156 L 445.864013671875 420.6000061035156 L 445.864013671875 421.6440124511719 L 441.135986328125 421.6440124511719 L 441.135986328125 424.2239990234375 L 445.3479919433594 424.2239990234375 L 445.3479919433594 425.2439880371094 L 441.135986328125 425.2439880371094 L 441.135986328125 427.9559936523438 L 446.0320129394531 427.9559936523438 Z M 450.4230041503906 429.0960083007813 C 449.7909851074219 429.0960083007813 449.1789855957031 429 448.5870056152344 428.8080139160156 C 448.0029907226563 428.6080017089844 447.5429992675781 428.3519897460938 447.2070007324219 428.0400085449219 L 447.6510009765625 427.10400390625 C 447.9710083007813 427.3919982910156 448.3789978027344 427.6279907226563 448.875 427.81201171875 C 449.3789978027344 427.9880065917969 449.8949890136719 428.0759887695313 450.4230041503906 428.0759887695313 C 451.1189880371094 428.0759887695313 451.6390075683594 427.9599914550781 451.9830017089844 427.7279968261719 C 452.3269958496094 427.4880065917969 452.4989929199219 427.1719970703125 452.4989929199219 426.7799987792969 C 452.4989929199219 426.4920043945313 452.4030151367188 426.260009765625 452.2109985351563 426.0840148925781 C 452.0270080566406 425.8999938964844 451.7950134277344 425.760009765625 451.5150146484375 425.6640014648438 C 451.2430114746094 425.5679931640625 450.8550109863281 425.4599914550781 450.3510131835938 425.3399963378906 C 449.718994140625 425.18798828125 449.2070007324219 425.0360107421875 448.8150024414063 424.8840026855469 C 448.4309997558594 424.7319946289063 448.0989990234375 424.5 447.8190002441406 424.18798828125 C 447.5469970703125 423.8680114746094 447.4110107421875 423.4400024414063 447.4110107421875 422.9039916992188 C 447.4110107421875 422.4559936523438 447.5270080566406 422.052001953125 447.7590026855469 421.6919860839844 C 447.9989929199219 421.3320007324219 448.3590087890625 421.0440063476563 448.8389892578125 420.8280029296875 C 449.3190002441406 420.6119995117188 449.9150085449219 420.5039978027344 450.6270141601563 420.5039978027344 C 451.1229858398438 420.5039978027344 451.6109924316406 420.5679931640625 452.0910034179688 420.6960144042969 C 452.5710144042969 420.8240051269531 452.9830017089844 421.0079956054688 453.3269958496094 421.2479858398438 L 452.9309997558594 422.2080078125 C 452.5790100097656 421.9840087890625 452.2030029296875 421.8160095214844 451.8030090332031 421.7040100097656 C 451.4030151367188 421.5840148925781 451.010986328125 421.5239868164063 450.6270141601563 421.5239868164063 C 449.9469909667969 421.5239868164063 449.4349975585938 421.6480102539063 449.0910034179688 421.89599609375 C 448.7550048828125 422.1440124511719 448.5870056152344 422.4639892578125 448.5870056152344 422.8559875488281 C 448.5870056152344 423.1440124511719 448.6830139160156 423.3800048828125 448.875 423.5639953613281 C 449.0669860839844 423.739990234375 449.3030090332031 423.8800048828125 449.5830078125 423.9840087890625 C 449.8710021972656 424.0799865722656 450.2590026855469 424.1839904785156 450.7470092773438 424.2959899902344 C 451.3789978027344 424.447998046875 451.8869934082031 424.6000061035156 452.27099609375 424.7520141601563 C 452.6549987792969 424.9039916992188 452.9830017089844 425.135986328125 453.2550048828125 425.447998046875 C 453.5350036621094 425.760009765625 453.6749877929688 426.1799926757813 453.6749877929688 426.7080078125 C 453.6749877929688 427.1480102539063 453.5549926757813 427.552001953125 453.3150024414063 427.9200134277344 C 453.0750122070313 428.2799987792969 452.7109985351563 428.5679931640625 452.2229919433594 428.7839965820313 C 451.7349853515625 428.9920043945313 451.135009765625 429.0960083007813 450.4230041503906 429.0960083007813 Z M 458.9079895019531 429.0960083007813 C 457.7879943847656 429.0960083007813 456.9159851074219 428.7760009765625 456.2919921875 428.135986328125 C 455.6679992675781 427.4960021972656 455.3559875488281 426.5759887695313 455.3559875488281 425.3760070800781 L 455.3559875488281 420.6000061035156 L 456.5559997558594 420.6000061035156 L 456.5559997558594 425.3280029296875 C 456.5559997558594 427.1279907226563 457.343994140625 428.0280151367188 458.9200134277344 428.0280151367188 C 459.68798828125 428.0280151367188 460.2760009765625 427.8080139160156 460.6839904785156 427.3680114746094 C 461.0920104980469 426.9200134277344 461.2959899902344 426.239990234375 461.2959899902344 425.3280029296875 L 461.2959899902344 420.6000061035156 L 462.4599914550781 420.6000061035156 L 462.4599914550781 425.3760070800781 C 462.4599914550781 426.5840148925781 462.1480102539063 427.5079956054688 461.5239868164063 428.1480102539063 C 460.8999938964844 428.7799987792969 460.0280151367188 429.0960083007813 458.9079895019531 429.0960083007813 Z M 464.9200134277344 420.6000061035156 L 466.1199951171875 420.6000061035156 L 466.1199951171875 427.9559936523438 L 470.6679992675781 427.9559936523438 L 470.6679992675781 429 L 464.9200134277344 429 L 464.9200134277344 420.6000061035156 Z M 472.9280090332031 421.6440124511719 L 470.0480041503906 421.6440124511719 L 470.0480041503906 420.6000061035156 L 476.9960021972656 420.6000061035156 L 476.9960021972656 421.6440124511719 L 474.1159973144531 421.6440124511719 L 474.1159973144531 429 L 472.9280090332031 429 L 472.9280090332031 421.6440124511719 Z">
			</path>
		</svg>
		<svg class="Path_37" viewBox="487.297 420.504 50.237 8.592">
			<path id="Path_37" d="M 492.9490051269531 424.6440124511719 C 493.43701171875 424.7799987792969 493.8210144042969 425.0280151367188 494.1010131835938 425.3880004882813 C 494.3810119628906 425.739990234375 494.52099609375 426.18798828125 494.52099609375 426.7319946289063 C 494.52099609375 427.4599914550781 494.2449951171875 428.0199890136719 493.6929931640625 428.4119873046875 C 493.1489868164063 428.8039855957031 492.3529968261719 429 491.3049926757813 429 L 487.2969970703125 429 L 487.2969970703125 420.6000061035156 L 491.0650024414063 420.6000061035156 C 492.0249938964844 420.6000061035156 492.7650146484375 420.7919921875 493.2850036621094 421.1759948730469 C 493.81298828125 421.5599975585938 494.0769958496094 422.0920104980469 494.0769958496094 422.7720031738281 C 494.0769958496094 423.2120056152344 493.9729919433594 423.5920104980469 493.7650146484375 423.9119873046875 C 493.5650024414063 424.2319946289063 493.2929992675781 424.4760131835938 492.9490051269531 424.6440124511719 Z M 488.4970092773438 421.5719909667969 L 488.4970092773438 424.260009765625 L 490.9570007324219 424.260009765625 C 491.572998046875 424.260009765625 492.0450134277344 424.1480102539063 492.3729858398438 423.9240112304688 C 492.7090148925781 423.6919860839844 492.8770141601563 423.3559875488281 492.8770141601563 422.9159851074219 C 492.8770141601563 422.4760131835938 492.7090148925781 422.1440124511719 492.3729858398438 421.9200134277344 C 492.0450134277344 421.68798828125 491.572998046875 421.5719909667969 490.9570007324219 421.5719909667969 L 488.4970092773438 421.5719909667969 Z M 491.2569885253906 428.0280151367188 C 491.93701171875 428.0280151367188 492.4490051269531 427.9159851074219 492.7929992675781 427.6919860839844 C 493.1369934082031 427.4679870605469 493.3089904785156 427.1159973144531 493.3089904785156 426.635986328125 C 493.3089904785156 425.7000122070313 492.625 425.2319946289063 491.2569885253906 425.2319946289063 L 488.4970092773438 425.2319946289063 L 488.4970092773438 428.0280151367188 L 491.2569885253906 428.0280151367188 Z M 496.3789978027344 420.6000061035156 L 497.5790100097656 420.6000061035156 L 497.5790100097656 429 L 496.3789978027344 429 L 496.3789978027344 420.6000061035156 Z M 503.885986328125 429.0960083007813 C 503.0379943847656 429.0960083007813 502.2739868164063 428.9119873046875 501.593994140625 428.5440063476563 C 500.9140014648438 428.1679992675781 500.3779907226563 427.6520080566406 499.9859924316406 426.9960021972656 C 499.6019897460938 426.3399963378906 499.4100036621094 425.6080017089844 499.4100036621094 424.7999877929688 C 499.4100036621094 423.9920043945313 499.6019897460938 423.260009765625 499.9859924316406 422.60400390625 C 500.3779907226563 421.947998046875 500.9140014648438 421.4360046386719 501.593994140625 421.0679931640625 C 502.2739868164063 420.6919860839844 503.0379943847656 420.5039978027344 503.885986328125 420.5039978027344 C 504.7260131835938 420.5039978027344 505.4859924316406 420.6919860839844 506.1659851074219 421.0679931640625 C 506.8460083007813 421.4360046386719 507.3779907226563 421.947998046875 507.7619934082031 422.60400390625 C 508.14599609375 423.2520141601563 508.3380126953125 423.9840087890625 508.3380126953125 424.7999877929688 C 508.3380126953125 425.6159973144531 508.14599609375 426.3519897460938 507.7619934082031 427.0079956054688 C 507.3779907226563 427.656005859375 506.8460083007813 428.1679992675781 506.1659851074219 428.5440063476563 C 505.4859924316406 428.9119873046875 504.7260131835938 429.0960083007813 503.885986328125 429.0960083007813 Z M 503.885986328125 428.0280151367188 C 504.5020141601563 428.0280151367188 505.0539855957031 427.8880004882813 505.5419921875 427.6080017089844 C 506.0379943847656 427.3280029296875 506.4259948730469 426.9440002441406 506.7059936523438 426.4559936523438 C 506.9939880371094 425.9599914550781 507.1380004882813 425.4079895019531 507.1380004882813 424.7999877929688 C 507.1380004882813 424.1919860839844 506.9939880371094 423.6440124511719 506.7059936523438 423.156005859375 C 506.4259948730469 422.6600036621094 506.0379943847656 422.2720031738281 505.5419921875 421.9920043945313 C 505.0539855957031 421.7120056152344 504.5020141601563 421.5719909667969 503.885986328125 421.5719909667969 C 503.2699890136719 421.5719909667969 502.7099914550781 421.7120056152344 502.2059936523438 421.9920043945313 C 501.7099914550781 422.2720031738281 501.3179931640625 422.6600036621094 501.0299987792969 423.156005859375 C 500.75 423.6440124511719 500.6099853515625 424.1919860839844 500.6099853515625 424.7999877929688 C 500.6099853515625 425.4079895019531 500.75 425.9599914550781 501.0299987792969 426.4559936523438 C 501.3179931640625 426.9440002441406 501.7099914550781 427.3280029296875 502.2059936523438 427.6080017089844 C 502.7099914550781 427.8880004882813 503.2699890136719 428.0280151367188 503.885986328125 428.0280151367188 Z M 509.6780090332031 425.2080078125 L 512.906005859375 425.2080078125 L 512.906005859375 426.2040100097656 L 509.6780090332031 426.2040100097656 L 509.6780090332031 425.2080078125 Z M 520.4639892578125 429 L 518.6519775390625 426.4200134277344 C 518.427978515625 426.4360046386719 518.2520141601563 426.4440002441406 518.1240234375 426.4440002441406 L 516.0479736328125 426.4440002441406 L 516.0479736328125 429 L 514.8480224609375 429 L 514.8480224609375 420.6000061035156 L 518.1240234375 420.6000061035156 C 519.2119750976563 420.6000061035156 520.0679931640625 420.8599853515625 520.6920166015625 421.3800048828125 C 521.3159790039063 421.8999938964844 521.6279907226563 422.6159973144531 521.6279907226563 423.5280151367188 C 521.6279907226563 424.1759948730469 521.468017578125 424.7279968261719 521.1480102539063 425.1839904785156 C 520.8280029296875 425.6400146484375 520.3720092773438 425.9719848632813 519.780029296875 426.1799926757813 L 521.77197265625 429 L 520.4639892578125 429 Z M 518.0880126953125 425.4240112304688 C 518.8480224609375 425.4240112304688 519.427978515625 425.260009765625 519.8280029296875 424.9320068359375 C 520.22802734375 424.60400390625 520.427978515625 424.135986328125 520.427978515625 423.5280151367188 C 520.427978515625 422.9200134277344 520.22802734375 422.4559936523438 519.8280029296875 422.135986328125 C 519.427978515625 421.8080139160156 518.8480224609375 421.6440124511719 518.0880126953125 421.6440124511719 L 516.0479736328125 421.6440124511719 L 516.0479736328125 425.4240112304688 L 518.0880126953125 425.4240112304688 Z M 529.6630249023438 427.9559936523438 L 529.6630249023438 429 L 523.5670166015625 429 L 523.5670166015625 420.6000061035156 L 529.4949951171875 420.6000061035156 L 529.4949951171875 421.6440124511719 L 524.7670288085938 421.6440124511719 L 524.7670288085938 424.2239990234375 L 528.97900390625 424.2239990234375 L 528.97900390625 425.2439880371094 L 524.7670288085938 425.2439880371094 L 524.7670288085938 427.9559936523438 L 529.6630249023438 427.9559936523438 Z M 532.8060302734375 421.6440124511719 L 532.8060302734375 424.5719909667969 L 537.0180053710938 424.5719909667969 L 537.0180053710938 425.60400390625 L 532.8060302734375 425.60400390625 L 532.8060302734375 429 L 531.6060180664063 429 L 531.6060180664063 420.6000061035156 L 537.5339965820313 420.6000061035156 L 537.5339965820313 421.6440124511719 L 532.8060302734375 421.6440124511719 Z">
			</path>
		</svg>
		<svg class="RBC_Title" viewBox="444.024 403.504 24.76 8.592">
			<path id="RBC_Title" d="M 449.6400146484375 412 L 447.8280029296875 409.4200134277344 C 447.60400390625 409.4360046386719 447.4280090332031 409.4440002441406 447.2999877929688 409.4440002441406 L 445.2239990234375 409.4440002441406 L 445.2239990234375 412 L 444.0239868164063 412 L 444.0239868164063 403.6000061035156 L 447.2999877929688 403.6000061035156 C 448.3880004882813 403.6000061035156 449.2439880371094 403.8599853515625 449.8680114746094 404.3800048828125 C 450.4920043945313 404.8999938964844 450.8039855957031 405.6159973144531 450.8039855957031 406.5280151367188 C 450.8039855957031 407.1759948730469 450.6440124511719 407.7279968261719 450.3240051269531 408.1839904785156 C 450.0039978027344 408.6400146484375 449.5480041503906 408.9719848632813 448.9559936523438 409.1799926757813 L 450.947998046875 412 L 449.6400146484375 412 Z M 447.2640075683594 408.4240112304688 C 448.0239868164063 408.4240112304688 448.60400390625 408.260009765625 449.0039978027344 407.9320068359375 C 449.4039916992188 407.60400390625 449.60400390625 407.135986328125 449.60400390625 406.5280151367188 C 449.60400390625 405.9200134277344 449.4039916992188 405.4559936523438 449.0039978027344 405.135986328125 C 448.60400390625 404.8080139160156 448.0239868164063 404.6440124511719 447.2640075683594 404.6440124511719 L 445.2239990234375 404.6440124511719 L 445.2239990234375 408.4240112304688 L 447.2640075683594 408.4240112304688 Z M 458.3940124511719 407.6440124511719 C 458.8819885253906 407.7799987792969 459.2659912109375 408.0280151367188 459.5459899902344 408.3880004882813 C 459.8259887695313 408.739990234375 459.9660034179688 409.18798828125 459.9660034179688 409.7319946289063 C 459.9660034179688 410.4599914550781 459.6900024414063 411.0199890136719 459.1380004882813 411.4119873046875 C 458.593994140625 411.8039855957031 457.7980041503906 412 456.75 412 L 452.7420043945313 412 L 452.7420043945313 403.6000061035156 L 456.510009765625 403.6000061035156 C 457.4700012207031 403.6000061035156 458.2099914550781 403.7919921875 458.7300109863281 404.1759948730469 C 459.2579956054688 404.5599975585938 459.5220031738281 405.0920104980469 459.5220031738281 405.7720031738281 C 459.5220031738281 406.2120056152344 459.4179992675781 406.5920104980469 459.2099914550781 406.9119873046875 C 459.010009765625 407.2319946289063 458.7380065917969 407.4760131835938 458.3940124511719 407.6440124511719 Z M 453.9419860839844 404.5719909667969 L 453.9419860839844 407.260009765625 L 456.4020080566406 407.260009765625 C 457.0180053710938 407.260009765625 457.489990234375 407.1480102539063 457.8179931640625 406.9240112304688 C 458.1539916992188 406.6919860839844 458.3219909667969 406.3559875488281 458.3219909667969 405.9159851074219 C 458.3219909667969 405.4760131835938 458.1539916992188 405.1440124511719 457.8179931640625 404.9200134277344 C 457.489990234375 404.68798828125 457.0180053710938 404.5719909667969 456.4020080566406 404.5719909667969 L 453.9419860839844 404.5719909667969 Z M 456.7019958496094 411.0280151367188 C 457.3819885253906 411.0280151367188 457.8940124511719 410.9159851074219 458.2380065917969 410.6919860839844 C 458.5820007324219 410.4679870605469 458.7539978027344 410.1159973144531 458.7539978027344 409.635986328125 C 458.7539978027344 408.7000122070313 458.0700073242188 408.2319946289063 456.7019958496094 408.2319946289063 L 453.9419860839844 408.2319946289063 L 453.9419860839844 411.0280151367188 L 456.7019958496094 411.0280151367188 Z M 465.5799865722656 412.0960083007813 C 464.739990234375 412.0960083007813 463.9800109863281 411.9119873046875 463.2999877929688 411.5440063476563 C 462.6279907226563 411.1679992675781 462.1000061035156 410.656005859375 461.7160034179688 410.0079956054688 C 461.3320007324219 409.3519897460938 461.1400146484375 408.6159973144531 461.1400146484375 407.7999877929688 C 461.1400146484375 406.9840087890625 461.3320007324219 406.2520141601563 461.7160034179688 405.60400390625 C 462.1000061035156 404.947998046875 462.6319885253906 404.4360046386719 463.31201171875 404.0679931640625 C 463.9920043945313 403.6919860839844 464.7520141601563 403.5039978027344 465.5920104980469 403.5039978027344 C 466.2479858398438 403.5039978027344 466.8479919433594 403.6159973144531 467.3919982910156 403.8399963378906 C 467.9360046386719 404.0559997558594 468.3999938964844 404.3800048828125 468.7839965820313 404.81201171875 L 468.0039978027344 405.5679931640625 C 467.3720092773438 404.9039916992188 466.5840148925781 404.5719909667969 465.6400146484375 404.5719909667969 C 465.0159912109375 404.5719909667969 464.4519958496094 404.7120056152344 463.947998046875 404.9920043945313 C 463.4440002441406 405.2720031738281 463.0480041503906 405.6600036621094 462.760009765625 406.156005859375 C 462.4800109863281 406.6440124511719 462.3399963378906 407.1919860839844 462.3399963378906 407.7999877929688 C 462.3399963378906 408.4079895019531 462.4800109863281 408.9599914550781 462.760009765625 409.4559936523438 C 463.0480041503906 409.9440002441406 463.4440002441406 410.3280029296875 463.947998046875 410.6080017089844 C 464.4519958496094 410.8880004882813 465.0159912109375 411.0280151367188 465.6400146484375 411.0280151367188 C 466.5759887695313 411.0280151367188 467.364013671875 410.6919860839844 468.0039978027344 410.0199890136719 L 468.7839965820313 410.7760009765625 C 468.3999938964844 411.2080078125 467.9320068359375 411.5360107421875 467.3800048828125 411.760009765625 C 466.8359985351563 411.9840087890625 466.2359924316406 412.0960083007813 465.5799865722656 412.0960083007813 Z">
			</path>
		</svg>
		<div id="Enter_MCHC">
			<span>50%</span>
		</div>
		<div id="Enter_MCH">
			<span>50%</span>
		</div>
		<div id="Enter_MCV">
			<span>50%</span>
		</div>
		<div id="Enter_PCV">
			<span>50</span>
		</div>
	</div>
	<div id="Differnetial_Leucocyte_Count">
		<svg class="Rectangle_15">
			<rect id="Rectangle_15" rx="21" ry="21" x="0" y="0" width="287" height="135">
			</rect>
		</svg>
		<svg class="Eosinophils_Range" viewBox="278.401 510.116 21.374 9.968">
			<path id="Eosinophils_Range" d="M 282.3070068359375 520.083984375 C 281.5509948730469 520.083984375 280.8739929199219 519.8829956054688 280.2770080566406 519.4819946289063 C 279.6889953613281 519.0809936523438 279.2269897460938 518.5070190429688 278.8909912109375 517.760009765625 C 278.5639953613281 517.0040283203125 278.4010009765625 516.1170043945313 278.4010009765625 515.0999755859375 C 278.4010009765625 514.0830078125 278.5639953613281 513.2009887695313 278.8909912109375 512.4539794921875 C 279.2269897460938 511.697998046875 279.6889953613281 511.1189880371094 280.2770080566406 510.7179870605469 C 280.8739929199219 510.3169860839844 281.5509948730469 510.1159973144531 282.3070068359375 510.1159973144531 C 283.06298828125 510.1159973144531 283.7349853515625 510.3169860839844 284.322998046875 510.7179870605469 C 284.9200134277344 511.1189880371094 285.3869934082031 511.697998046875 285.7229919433594 512.4539794921875 C 286.0589904785156 513.2009887695313 286.2269897460938 514.0830078125 286.2269897460938 515.0999755859375 C 286.2269897460938 516.1170043945313 286.0589904785156 517.0040283203125 285.7229919433594 517.760009765625 C 285.3869934082031 518.5070190429688 284.9200134277344 519.0809936523438 284.322998046875 519.4819946289063 C 283.7349853515625 519.8829956054688 283.06298828125 520.083984375 282.3070068359375 520.083984375 Z M 282.3070068359375 519.1599731445313 C 282.8760070800781 519.1599731445313 283.3760070800781 519.0009765625 283.8049926757813 518.6840209960938 C 284.2439880371094 518.3670043945313 284.5840148925781 517.905029296875 284.8269958496094 517.2979736328125 C 285.0700073242188 516.6909790039063 285.1910095214844 515.958984375 285.1910095214844 515.0999755859375 C 285.1910095214844 514.2410278320313 285.0700073242188 513.5089721679688 284.8269958496094 512.9019775390625 C 284.5840148925781 512.2949829101563 284.2439880371094 511.8330078125 283.8049926757813 511.5159912109375 C 283.3760070800781 511.1990051269531 282.8760070800781 511.0400085449219 282.3070068359375 511.0400085449219 C 281.7380065917969 511.0400085449219 281.2340087890625 511.1990051269531 280.7950134277344 511.5159912109375 C 280.3659973144531 511.8330078125 280.0299987792969 512.2949829101563 279.7869873046875 512.9019775390625 C 279.5440063476563 513.5089721679688 279.4230041503906 514.2410278320313 279.4230041503906 515.0999755859375 C 279.4230041503906 515.958984375 279.5440063476563 516.6909790039063 279.7869873046875 517.2979736328125 C 280.0299987792969 517.905029296875 280.3659973144531 518.3670043945313 280.7950134277344 518.6840209960938 C 281.2340087890625 519.0009765625 281.7380065917969 519.1599731445313 282.3070068359375 519.1599731445313 Z M 287.8919982910156 515.77197265625 L 291.5599975585938 515.77197265625 L 291.5599975585938 516.6400146484375 L 287.8919982910156 516.6400146484375 L 287.8919982910156 515.77197265625 Z M 295.7009887695313 514.218017578125 C 297.1199951171875 514.218017578125 298.1510009765625 514.4749755859375 298.7950134277344 514.9879760742188 C 299.4490051269531 515.4920043945313 299.7749938964844 516.2009887695313 299.7749938964844 517.1160278320313 C 299.7749938964844 517.6849975585938 299.6400146484375 518.1939697265625 299.3689880371094 518.6420288085938 C 299.1080017089844 519.0900268554688 298.7109985351563 519.4450073242188 298.1789855957031 519.7059936523438 C 297.6470031738281 519.9580078125 296.9939880371094 520.083984375 296.218994140625 520.083984375 C 295.5190124511719 520.083984375 294.8519897460938 519.9719848632813 294.2170104980469 519.7479858398438 C 293.5920104980469 519.5150146484375 293.0880126953125 519.2069702148438 292.7049865722656 518.823974609375 L 293.1950073242188 518.0260009765625 C 293.5220031738281 518.3619995117188 293.9509887695313 518.6370239257813 294.4830017089844 518.8519897460938 C 295.0150146484375 519.0570068359375 295.5889892578125 519.1599731445313 296.2049865722656 519.1599731445313 C 297.0169982910156 519.1599731445313 297.6430053710938 518.97802734375 298.0809936523438 518.614013671875 C 298.5289916992188 518.25 298.7529907226563 517.7650146484375 298.7529907226563 517.1580200195313 C 298.7529907226563 516.4860229492188 298.5010070800781 515.9769897460938 297.9970092773438 515.6320190429688 C 297.5029907226563 515.2869873046875 296.6629943847656 515.114013671875 295.4769897460938 515.114013671875 L 293.3909912109375 515.114013671875 L 293.8949890136719 510.2000122070313 L 299.2569885253906 510.2000122070313 L 299.2569885253906 511.0960083007813 L 294.7770080566406 511.0960083007813 L 294.4410095214844 514.218017578125 L 295.7009887695313 514.218017578125 Z">
			</path>
		</svg>
		<div id="Enter_Eosinophils">
			<span>50%</span>
		</div>
		<svg class="Eosinophils" viewBox="73.596 510.116 97.042 9.968">
			<path id="Eosinophils" d="M 80.5260009765625 519.10400390625 L 80.5260009765625 520 L 73.59600067138672 520 L 73.59600067138672 510.2000122070313 L 80.31600189208984 510.2000122070313 L 80.31600189208984 511.0960083007813 L 74.63200378417969 511.0960083007813 L 74.63200378417969 514.5819702148438 L 79.69999694824219 514.5819702148438 L 79.69999694824219 515.4639892578125 L 74.63200378417969 515.4639892578125 L 74.63200378417969 519.10400390625 L 80.5260009765625 519.10400390625 Z M 87.19049835205078 520.083984375 C 86.21990203857422 520.083984375 85.33789825439453 519.8690185546875 84.54450225830078 519.4400024414063 C 83.760498046875 519.0009765625 83.14450073242188 518.4039916992188 82.69650268554688 517.6480102539063 C 82.25789642333984 516.8920288085938 82.03849792480469 516.0430297851563 82.03849792480469 515.0999755859375 C 82.03849792480469 514.156982421875 82.25789642333984 513.3079833984375 82.69650268554688 512.552001953125 C 83.14450073242188 511.7959899902344 83.760498046875 511.2030029296875 84.54450225830078 510.7739868164063 C 85.33789825439453 510.3349914550781 86.21990203857422 510.1159973144531 87.19049835205078 510.1159973144531 C 88.16120147705078 510.1159973144531 89.03389739990234 510.3309936523438 89.80850219726563 510.760009765625 C 90.59249877929688 511.1889953613281 91.20850372314453 511.7869873046875 91.65650177001953 512.552001953125 C 92.10449981689453 513.3079833984375 92.32849884033203 514.156982421875 92.32849884033203 515.0999755859375 C 92.32849884033203 516.0430297851563 92.10449981689453 516.89697265625 91.65650177001953 517.6619873046875 C 91.20850372314453 518.4180297851563 90.59249877929688 519.010986328125 89.80850219726563 519.4400024414063 C 89.03389739990234 519.8690185546875 88.16120147705078 520.083984375 87.19049835205078 520.083984375 Z M 87.19049835205078 519.1599731445313 C 87.96520233154297 519.1599731445313 88.66519927978516 518.9869995117188 89.29049682617188 518.6420288085938 C 89.91590118408203 518.2869873046875 90.40589904785156 517.802001953125 90.760498046875 517.1859741210938 C 91.11519622802734 516.5609741210938 91.29250335693359 515.864990234375 91.29250335693359 515.0999755859375 C 91.29250335693359 514.3350219726563 91.11519622802734 513.6439819335938 90.760498046875 513.0280151367188 C 90.40589904785156 512.4030151367188 89.91590118408203 511.9169921875 89.29049682617188 511.5719909667969 C 88.66519927978516 511.2170104980469 87.96520233154297 511.0400085449219 87.19049835205078 511.0400085449219 C 86.41590118408203 511.0400085449219 85.71119689941406 511.2170104980469 85.07649993896484 511.5719909667969 C 84.45120239257813 511.9169921875 83.95649719238281 512.4030151367188 83.59249877929688 513.0280151367188 C 83.23789978027344 513.6439819335938 83.06050109863281 514.3350219726563 83.06050109863281 515.0999755859375 C 83.06050109863281 515.864990234375 83.23789978027344 516.5609741210938 83.59249877929688 517.1859741210938 C 83.95649719238281 517.802001953125 84.45120239257813 518.2869873046875 85.07649993896484 518.6420288085938 C 85.71119689941406 518.9869995117188 86.41590118408203 519.1599731445313 87.19049835205078 519.1599731445313 Z M 97.35269927978516 520.083984375 C 96.62470245361328 520.083984375 95.92469787597656 519.9669799804688 95.25270080566406 519.7340087890625 C 94.58999633789063 519.5009765625 94.07669830322266 519.1929931640625 93.71269989013672 518.8099975585938 L 94.11869812011719 518.0120239257813 C 94.47339630126953 518.3670043945313 94.9447021484375 518.656005859375 95.53269958496094 518.8800048828125 C 96.12069702148438 519.094970703125 96.72740173339844 519.2020263671875 97.35269927978516 519.2020263671875 C 98.23000335693359 519.2020263671875 98.88800048828125 519.0430297851563 99.32669830322266 518.7260131835938 C 99.76540374755859 518.3989868164063 99.98470306396484 517.97900390625 99.98470306396484 517.4660034179688 C 99.98470306396484 517.073974609375 99.8634033203125 516.760986328125 99.62069702148438 516.5280151367188 C 99.38739776611328 516.2949829101563 99.09799957275391 516.1170043945313 98.75270080566406 515.9959716796875 C 98.40740203857422 515.864990234375 97.92669677734375 515.7249755859375 97.31069946289063 515.5759887695313 C 96.57340240478516 515.3889770507813 95.98539733886719 515.2119750976563 95.54669952392578 515.0440063476563 C 95.10800170898438 514.8670043945313 94.73000335693359 514.6010131835938 94.41269683837891 514.2459716796875 C 94.10469818115234 513.8909912109375 93.95069885253906 513.4110107421875 93.95069885253906 512.8040161132813 C 93.95069885253906 512.3090209960938 94.08139801025391 511.8609924316406 94.34269714355469 511.4599914550781 C 94.60399627685547 511.0490112304688 95.00540161132813 510.7229919433594 95.54669952392578 510.4800109863281 C 96.08799743652344 510.2369995117188 96.76000213623047 510.1159973144531 97.56269836425781 510.1159973144531 C 98.12270355224609 510.1159973144531 98.668701171875 510.1950073242188 99.20069885253906 510.35400390625 C 99.74199676513672 510.5029907226563 100.2089996337891 510.7130126953125 100.6009979248047 510.9840087890625 L 100.2509994506836 511.8099975585938 C 99.83999633789063 511.5390014648438 99.40139770507813 511.3389892578125 98.93470001220703 511.2080078125 C 98.46800231933594 511.0679931640625 98.01069641113281 510.9979858398438 97.56269836425781 510.9979858398438 C 96.70400238037109 510.9979858398438 96.05539703369141 511.1659851074219 95.61669921875 511.5020141601563 C 95.18740081787109 511.8290100097656 94.97270202636719 512.2529907226563 94.97270202636719 512.7760009765625 C 94.97270202636719 513.1680297851563 95.08940124511719 513.4849853515625 95.32270050048828 513.72802734375 C 95.56539916992188 513.9609985351563 95.86399841308594 514.1430053710938 96.21869659423828 514.2739868164063 C 96.58270263671875 514.39501953125 97.06800079345703 514.531005859375 97.67469787597656 514.6799926757813 C 98.39340209960938 514.8569946289063 98.97200012207031 515.0349731445313 99.41069793701172 515.2119750976563 C 99.85870361328125 515.3800048828125 100.2369995117188 515.6409912109375 100.5449981689453 515.9959716796875 C 100.8529968261719 516.3410034179688 101.0070037841797 516.81298828125 101.0070037841797 517.4099731445313 C 101.0070037841797 517.905029296875 100.8710021972656 518.3569946289063 100.6009979248047 518.7680053710938 C 100.338996887207 519.1690063476563 99.93340301513672 519.4910278320313 99.38269805908203 519.7340087890625 C 98.83200073242188 519.9669799804688 98.15540313720703 520.083984375 97.35269927978516 520.083984375 Z M 103.2639999389648 510.2000122070313 L 104.3000030517578 510.2000122070313 L 104.3000030517578 520 L 103.2639999389648 520 L 103.2639999389648 510.2000122070313 Z M 115.6790008544922 510.2000122070313 L 115.6790008544922 520 L 114.8249969482422 520 L 108.5250015258789 512.0479736328125 L 108.5250015258789 520 L 107.4889984130859 520 L 107.4889984130859 510.2000122070313 L 108.3430023193359 510.2000122070313 L 114.6569976806641 518.1519775390625 L 114.6569976806641 510.2000122070313 L 115.6790008544922 510.2000122070313 Z M 123.161003112793 520.083984375 C 122.1910018920898 520.083984375 121.3089981079102 519.8690185546875 120.5149993896484 519.4400024414063 C 119.7310028076172 519.0009765625 119.1149978637695 518.4039916992188 118.6669998168945 517.6480102539063 C 118.2289962768555 516.8920288085938 118.0090026855469 516.0430297851563 118.0090026855469 515.0999755859375 C 118.0090026855469 514.156982421875 118.2289962768555 513.3079833984375 118.6669998168945 512.552001953125 C 119.1149978637695 511.7959899902344 119.7310028076172 511.2030029296875 120.5149993896484 510.7739868164063 C 121.3089981079102 510.3349914550781 122.1910018920898 510.1159973144531 123.161003112793 510.1159973144531 C 124.1320037841797 510.1159973144531 125.004997253418 510.3309936523438 125.7789993286133 510.760009765625 C 126.5630035400391 511.1889953613281 127.1790008544922 511.7869873046875 127.6269989013672 512.552001953125 C 128.0749969482422 513.3079833984375 128.2989959716797 514.156982421875 128.2989959716797 515.0999755859375 C 128.2989959716797 516.0430297851563 128.0749969482422 516.89697265625 127.6269989013672 517.6619873046875 C 127.1790008544922 518.4180297851563 126.5630035400391 519.010986328125 125.7789993286133 519.4400024414063 C 125.004997253418 519.8690185546875 124.1320037841797 520.083984375 123.161003112793 520.083984375 Z M 123.161003112793 519.1599731445313 C 123.9359970092773 519.1599731445313 124.6360015869141 518.9869995117188 125.2610015869141 518.6420288085938 C 125.8870010375977 518.2869873046875 126.3769989013672 517.802001953125 126.7310028076172 517.1859741210938 C 127.0859985351563 516.5609741210938 127.2630004882813 515.864990234375 127.2630004882813 515.0999755859375 C 127.2630004882813 514.3350219726563 127.0859985351563 513.6439819335938 126.7310028076172 513.0280151367188 C 126.3769989013672 512.4030151367188 125.8870010375977 511.9169921875 125.2610015869141 511.5719909667969 C 124.6360015869141 511.2170104980469 123.9359970092773 511.0400085449219 123.161003112793 511.0400085449219 C 122.3870010375977 511.0400085449219 121.681999206543 511.2170104980469 121.0469970703125 511.5719909667969 C 120.4219970703125 511.9169921875 119.927001953125 512.4030151367188 119.5630035400391 513.0280151367188 C 119.2089996337891 513.6439819335938 119.0309982299805 514.3350219726563 119.0309982299805 515.0999755859375 C 119.0309982299805 515.864990234375 119.2089996337891 516.5609741210938 119.5630035400391 517.1859741210938 C 119.927001953125 517.802001953125 120.4219970703125 518.2869873046875 121.0469970703125 518.6420288085938 C 121.681999206543 518.9869995117188 122.3870010375977 519.1599731445313 123.161003112793 519.1599731445313 Z M 134.2890014648438 510.2000122070313 C 135.5399932861328 510.2000122070313 136.5200042724609 510.4989929199219 137.22900390625 511.0960083007813 C 137.9389953613281 511.6929931640625 138.2929992675781 512.5150146484375 138.2929992675781 513.5599975585938 C 138.2929992675781 514.60498046875 137.9389953613281 515.427001953125 137.22900390625 516.0239868164063 C 136.5200042724609 516.6119995117188 135.5399932861328 516.906005859375 134.2890014648438 516.906005859375 L 131.6569976806641 516.906005859375 L 131.6569976806641 520 L 130.6210021972656 520 L 130.6210021972656 510.2000122070313 L 134.2890014648438 510.2000122070313 Z M 134.2610015869141 515.9959716796875 C 135.2319946289063 515.9959716796875 135.9739990234375 515.7860107421875 136.4869995117188 515.3660278320313 C 137.0010070800781 514.93701171875 137.2570037841797 514.3350219726563 137.2570037841797 513.5599975585938 C 137.2570037841797 512.7670288085938 137.0010070800781 512.1599731445313 136.4869995117188 511.739990234375 C 135.9739990234375 511.3110046386719 135.2319946289063 511.0960083007813 134.2610015869141 511.0960083007813 L 131.6569976806641 511.0960083007813 L 131.6569976806641 515.9959716796875 L 134.2610015869141 515.9959716796875 Z M 148.7239990234375 510.2000122070313 L 148.7239990234375 520 L 147.7019958496094 520 L 147.7019958496094 515.47802734375 L 141.5700073242188 515.47802734375 L 141.5700073242188 520 L 140.5339965820313 520 L 140.5339965820313 510.2000122070313 L 141.5700073242188 510.2000122070313 L 141.5700073242188 514.5679931640625 L 147.7019958496094 514.5679931640625 L 147.7019958496094 510.2000122070313 L 148.7239990234375 510.2000122070313 Z M 151.9219970703125 510.2000122070313 L 152.9579925537109 510.2000122070313 L 152.9579925537109 520 L 151.9219970703125 520 L 151.9219970703125 510.2000122070313 Z M 156.1470031738281 510.2000122070313 L 157.1829986572266 510.2000122070313 L 157.1829986572266 519.10400390625 L 162.6710052490234 519.10400390625 L 162.6710052490234 520 L 156.1470031738281 520 L 156.1470031738281 510.2000122070313 Z M 166.9839935302734 520.083984375 C 166.2559967041016 520.083984375 165.5559997558594 519.9669799804688 164.8840026855469 519.7340087890625 C 164.2209930419922 519.5009765625 163.7079925537109 519.1929931640625 163.343994140625 518.8099975585938 L 163.75 518.0120239257813 C 164.10400390625 518.3670043945313 164.5760040283203 518.656005859375 165.1640014648438 518.8800048828125 C 165.7519989013672 519.094970703125 166.3580017089844 519.2020263671875 166.9839935302734 519.2020263671875 C 167.8609924316406 519.2020263671875 168.5189971923828 519.0430297851563 168.9579925537109 518.7260131835938 C 169.39599609375 518.3989868164063 169.6159973144531 517.97900390625 169.6159973144531 517.4660034179688 C 169.6159973144531 517.073974609375 169.4940032958984 516.760986328125 169.2519989013672 516.5280151367188 C 169.0180053710938 516.2949829101563 168.72900390625 516.1170043945313 168.3840026855469 515.9959716796875 C 168.0379943847656 515.864990234375 167.5579986572266 515.7249755859375 166.9420013427734 515.5759887695313 C 166.2039947509766 515.3889770507813 165.6159973144531 515.2119750976563 165.1779937744141 515.0440063476563 C 164.7389984130859 514.8670043945313 164.3609924316406 514.6010131835938 164.0440063476563 514.2459716796875 C 163.7359924316406 513.8909912109375 163.5820007324219 513.4110107421875 163.5820007324219 512.8040161132813 C 163.5820007324219 512.3090209960938 163.7120056152344 511.8609924316406 163.9739990234375 511.4599914550781 C 164.2350006103516 511.0490112304688 164.6360015869141 510.7229919433594 165.1779937744141 510.4800109863281 C 165.718994140625 510.2369995117188 166.3910064697266 510.1159973144531 167.1940002441406 510.1159973144531 C 167.7539978027344 510.1159973144531 168.3000030517578 510.1950073242188 168.8320007324219 510.35400390625 C 169.3730010986328 510.5029907226563 169.8399963378906 510.7130126953125 170.2319946289063 510.9840087890625 L 169.8820037841797 511.8099975585938 C 169.4709930419922 511.5390014648438 169.0319976806641 511.3389892578125 168.5659942626953 511.2080078125 C 168.0989990234375 511.0679931640625 167.6419982910156 510.9979858398438 167.1940002441406 510.9979858398438 C 166.3350067138672 510.9979858398438 165.6860046386719 511.1659851074219 165.2480010986328 511.5020141601563 C 164.8179931640625 511.8290100097656 164.60400390625 512.2529907226563 164.60400390625 512.7760009765625 C 164.60400390625 513.1680297851563 164.7200012207031 513.4849853515625 164.9539947509766 513.72802734375 C 165.1959991455078 513.9609985351563 165.4949951171875 514.1430053710938 165.8500061035156 514.2739868164063 C 166.2140045166016 514.39501953125 166.6990051269531 514.531005859375 167.3059997558594 514.6799926757813 C 168.0240020751953 514.8569946289063 168.6029968261719 515.0349731445313 169.0420074462891 515.2119750976563 C 169.4900054931641 515.3800048828125 169.8679962158203 515.6409912109375 170.1759948730469 515.9959716796875 C 170.4839935302734 516.3410034179688 170.6380004882813 516.81298828125 170.6380004882813 517.4099731445313 C 170.6380004882813 517.905029296875 170.5019989013672 518.3569946289063 170.2319946289063 518.7680053710938 C 169.9700012207031 519.1690063476563 169.5639953613281 519.4910278320313 169.0140075683594 519.7340087890625 C 168.4629974365234 519.9669799804688 167.7859954833984 520.083984375 166.9839935302734 520.083984375 Z">
			</path>
		</svg>
		<svg class="Monocyte_Range" viewBox="279.045 487.116 22.198 9.968">
			<path id="Monocyte_Range" d="M 282.9509887695313 497.0840148925781 C 282.1950073242188 497.0840148925781 281.5190124511719 496.8829956054688 280.9209899902344 496.4819946289063 C 280.3330078125 496.0809936523438 279.8710021972656 495.5069885253906 279.5350036621094 494.760009765625 C 279.2090148925781 494.0039978027344 279.0450134277344 493.1170043945313 279.0450134277344 492.1000061035156 C 279.0450134277344 491.0830078125 279.2090148925781 490.2009887695313 279.5350036621094 489.4540100097656 C 279.8710021972656 488.697998046875 280.3330078125 488.1189880371094 280.9209899902344 487.7179870605469 C 281.5190124511719 487.3169860839844 282.1950073242188 487.1159973144531 282.9509887695313 487.1159973144531 C 283.7070007324219 487.1159973144531 284.3789978027344 487.3169860839844 284.9670104980469 487.7179870605469 C 285.5650024414063 488.1189880371094 286.031005859375 488.697998046875 286.3670043945313 489.4540100097656 C 286.7030029296875 490.2009887695313 286.8710021972656 491.0830078125 286.8710021972656 492.1000061035156 C 286.8710021972656 493.1170043945313 286.7030029296875 494.0039978027344 286.3670043945313 494.760009765625 C 286.031005859375 495.5069885253906 285.5650024414063 496.0809936523438 284.9670104980469 496.4819946289063 C 284.3789978027344 496.8829956054688 283.7070007324219 497.0840148925781 282.9509887695313 497.0840148925781 Z M 282.9509887695313 496.1600036621094 C 283.52099609375 496.1600036621094 284.0199890136719 496.0010070800781 284.4490051269531 495.6839904785156 C 284.8880004882813 495.3670043945313 285.22900390625 494.9049987792969 285.4710083007813 494.2980041503906 C 285.7139892578125 493.6910095214844 285.8349914550781 492.9590148925781 285.8349914550781 492.1000061035156 C 285.8349914550781 491.2409973144531 285.7139892578125 490.5090026855469 285.4710083007813 489.9020080566406 C 285.22900390625 489.2950134277344 284.8880004882813 488.8330078125 284.4490051269531 488.5159912109375 C 284.0199890136719 488.1990051269531 283.52099609375 488.0400085449219 282.9509887695313 488.0400085449219 C 282.3819885253906 488.0400085449219 281.8779907226563 488.1990051269531 281.4389953613281 488.5159912109375 C 281.010009765625 488.8330078125 280.6740112304688 489.2950134277344 280.4309997558594 489.9020080566406 C 280.1889953613281 490.5090026855469 280.0669860839844 491.2409973144531 280.0669860839844 492.1000061035156 C 280.0669860839844 492.9590148925781 280.1889953613281 493.6910095214844 280.4309997558594 494.2980041503906 C 280.6740112304688 494.9049987792969 281.010009765625 495.3670043945313 281.4389953613281 495.6839904785156 C 281.8779907226563 496.0010070800781 282.3819885253906 496.1600036621094 282.9509887695313 496.1600036621094 Z M 288.5360107421875 492.7720031738281 L 292.2040100097656 492.7720031738281 L 292.2040100097656 493.6400146484375 L 288.5360107421875 493.6400146484375 L 288.5360107421875 492.7720031738281 Z M 297.9389953613281 491.1340026855469 C 298.5830078125 491.1340026855469 299.1530151367188 491.2550048828125 299.6470031738281 491.4979858398438 C 300.1510009765625 491.7409973144531 300.5429992675781 492.0859985351563 300.822998046875 492.5339965820313 C 301.1029968261719 492.9729919433594 301.2430114746094 493.4859924316406 301.2430114746094 494.0740051269531 C 301.2430114746094 494.6709899902344 301.0989990234375 495.1990051269531 300.8089904785156 495.656005859375 C 300.5199890136719 496.1130065917969 300.1189880371094 496.4679870605469 299.6050109863281 496.7200012207031 C 299.1010131835938 496.9630126953125 298.5320129394531 497.0840148925781 297.8970031738281 497.0840148925781 C 296.6000061035156 497.0840148925781 295.6059875488281 496.6589965820313 294.9150085449219 495.8099975585938 C 294.2250061035156 494.9509887695313 293.8789978027344 493.7430114746094 293.8789978027344 492.1839904785156 C 293.8789978027344 491.0920104980469 294.0660095214844 490.1679992675781 294.4389953613281 489.4119873046875 C 294.81298828125 488.656005859375 295.3349914550781 488.0870056152344 296.0069885253906 487.7040100097656 C 296.6789855957031 487.31201171875 297.4630126953125 487.1159973144531 298.3590087890625 487.1159973144531 C 299.3299865722656 487.1159973144531 300.1050109863281 487.2929992675781 300.6830139160156 487.6480102539063 L 300.2770080566406 488.4599914550781 C 299.8110046386719 488.1520080566406 299.1759948730469 487.9979858398438 298.3729858398438 487.9979858398438 C 297.2909851074219 487.9979858398438 296.4410095214844 488.3429870605469 295.8250122070313 489.0339965820313 C 295.2090148925781 489.7149963378906 294.9010009765625 490.7090148925781 294.9010009765625 492.0159912109375 C 294.9010009765625 492.2489929199219 294.9150085449219 492.5150146484375 294.9429931640625 492.8139953613281 C 295.1860046386719 492.2820129394531 295.572998046875 491.8710021972656 296.1050109863281 491.5820007324219 C 296.6369934082031 491.2829895019531 297.2489929199219 491.1340026855469 297.9389953613281 491.1340026855469 Z M 297.8550109863281 496.2300109863281 C 298.5650024414063 496.2300109863281 299.1390075683594 496.0390014648438 299.5769958496094 495.656005859375 C 300.0249938964844 495.2640075683594 300.2489929199219 494.7460021972656 300.2489929199219 494.1019897460938 C 300.2489929199219 493.4580078125 300.0249938964844 492.9450073242188 299.5769958496094 492.56201171875 C 299.1390075683594 492.1789855957031 298.5409851074219 491.9880065917969 297.7850036621094 491.9880065917969 C 297.2909851074219 491.9880065917969 296.8519897460938 492.0809936523438 296.468994140625 492.2680053710938 C 296.0960083007813 492.4549865722656 295.802001953125 492.7109985351563 295.5870056152344 493.0379943847656 C 295.3729858398438 493.364990234375 295.2650146484375 493.72900390625 295.2650146484375 494.1300048828125 C 295.2650146484375 494.5029907226563 295.3630065917969 494.8489990234375 295.5589904785156 495.1659851074219 C 295.7650146484375 495.4830017089844 296.06298828125 495.739990234375 296.4549865722656 495.9360046386719 C 296.8469848632813 496.1319885253906 297.3139953613281 496.2300109863281 297.8550109863281 496.2300109863281 Z">
			</path>
		</svg>
		<div id="Enter_Monocyte">
			<span>50%</span>
		</div>
		<svg class="Monocyte" viewBox="73.596 487.116 81.893 9.968">
			<path id="Monocyte" d="M 83.77400207519531 487.2000122070313 L 83.77400207519531 497 L 82.77999877929688 497 L 82.77999877929688 489.1600036621094 L 78.93000030517578 495.7539978027344 L 78.44000244140625 495.7539978027344 L 74.58999633789063 489.2019958496094 L 74.58999633789063 497 L 73.59600067138672 497 L 73.59600067138672 487.2000122070313 L 74.44999694824219 487.2000122070313 L 78.70600128173828 494.4660034179688 L 82.91999816894531 487.2000122070313 L 83.77400207519531 487.2000122070313 Z M 91.2510986328125 497.0840148925781 C 90.28040313720703 497.0840148925781 89.39839935302734 496.8689880371094 88.6051025390625 496.4400024414063 C 87.82109832763672 496.0010070800781 87.20510101318359 495.4039916992188 86.75710296630859 494.6480102539063 C 86.31839752197266 493.8919982910156 86.09909820556641 493.0429992675781 86.09909820556641 492.1000061035156 C 86.09909820556641 491.1570129394531 86.31839752197266 490.3080139160156 86.75710296630859 489.552001953125 C 87.20510101318359 488.7959899902344 87.82109832763672 488.2030029296875 88.6051025390625 487.7739868164063 C 89.39839935302734 487.3349914550781 90.28040313720703 487.1159973144531 91.2510986328125 487.1159973144531 C 92.2218017578125 487.1159973144531 93.09439849853516 487.3309936523438 93.86910247802734 487.760009765625 C 94.65309906005859 488.1889953613281 95.26909637451172 488.7869873046875 95.71710205078125 489.552001953125 C 96.16510009765625 490.3080139160156 96.38909912109375 491.1570129394531 96.38909912109375 492.1000061035156 C 96.38909912109375 493.0429992675781 96.16510009765625 493.8970031738281 95.71710205078125 494.6619873046875 C 95.26909637451172 495.4179992675781 94.65309906005859 496.010986328125 93.86910247802734 496.4400024414063 C 93.09439849853516 496.8689880371094 92.2218017578125 497.0840148925781 91.2510986328125 497.0840148925781 Z M 91.2510986328125 496.1600036621094 C 92.02580261230469 496.1600036621094 92.72579956054688 495.9869995117188 93.35109710693359 495.6419982910156 C 93.97640228271484 495.2869873046875 94.46640014648438 494.802001953125 94.82109832763672 494.1860046386719 C 95.17579650878906 493.5610046386719 95.35310363769531 492.864990234375 95.35310363769531 492.1000061035156 C 95.35310363769531 491.3349914550781 95.17579650878906 490.6440124511719 94.82109832763672 490.0280151367188 C 94.46640014648438 489.4030151367188 93.97640228271484 488.9169921875 93.35109710693359 488.5719909667969 C 92.72579956054688 488.2170104980469 92.02580261230469 488.0400085449219 91.2510986328125 488.0400085449219 C 90.47640228271484 488.0400085449219 89.77179718017578 488.2170104980469 89.13710021972656 488.5719909667969 C 88.51180267333984 488.9169921875 88.01709747314453 489.4030151367188 87.65309906005859 490.0280151367188 C 87.29840087890625 490.6440124511719 87.12110137939453 491.3349914550781 87.12110137939453 492.1000061035156 C 87.12110137939453 492.864990234375 87.29840087890625 493.5610046386719 87.65309906005859 494.1860046386719 C 88.01709747314453 494.802001953125 88.51180267333984 495.2869873046875 89.13710021972656 495.6419982910156 C 89.77179718017578 495.9869995117188 90.47640228271484 496.1600036621094 91.2510986328125 496.1600036621094 Z M 106.9010009765625 487.2000122070313 L 106.9010009765625 497 L 106.0469970703125 497 L 99.74720001220703 489.0480041503906 L 99.74720001220703 497 L 98.71119689941406 497 L 98.71119689941406 487.2000122070313 L 99.56520080566406 487.2000122070313 L 105.8789978027344 495.1520080566406 L 105.8789978027344 487.2000122070313 L 106.9010009765625 487.2000122070313 Z M 114.3840026855469 497.0840148925781 C 113.4130020141602 497.0840148925781 112.5309982299805 496.8689880371094 111.7379989624023 496.4400024414063 C 110.9540023803711 496.0010070800781 110.3379974365234 495.4039916992188 109.8899993896484 494.6480102539063 C 109.4509963989258 493.8919982910156 109.2320022583008 493.0429992675781 109.2320022583008 492.1000061035156 C 109.2320022583008 491.1570129394531 109.4509963989258 490.3080139160156 109.8899993896484 489.552001953125 C 110.3379974365234 488.7959899902344 110.9540023803711 488.2030029296875 111.7379989624023 487.7739868164063 C 112.5309982299805 487.3349914550781 113.4130020141602 487.1159973144531 114.3840026855469 487.1159973144531 C 115.3550033569336 487.1159973144531 116.2269973754883 487.3309936523438 117.0019989013672 487.760009765625 C 117.786003112793 488.1889953613281 118.4020004272461 488.7869873046875 118.8499984741211 489.552001953125 C 119.2979965209961 490.3080139160156 119.5220031738281 491.1570129394531 119.5220031738281 492.1000061035156 C 119.5220031738281 493.0429992675781 119.2979965209961 493.8970031738281 118.8499984741211 494.6619873046875 C 118.4020004272461 495.4179992675781 117.786003112793 496.010986328125 117.0019989013672 496.4400024414063 C 116.2269973754883 496.8689880371094 115.3550033569336 497.0840148925781 114.3840026855469 497.0840148925781 Z M 114.3840026855469 496.1600036621094 C 115.1589965820313 496.1600036621094 115.859001159668 495.9869995117188 116.484001159668 495.6419982910156 C 117.109001159668 495.2869873046875 117.5989990234375 494.802001953125 117.9540023803711 494.1860046386719 C 118.3089981079102 493.5610046386719 118.4860000610352 492.864990234375 118.4860000610352 492.1000061035156 C 118.4860000610352 491.3349914550781 118.3089981079102 490.6440124511719 117.9540023803711 490.0280151367188 C 117.5989990234375 489.4030151367188 117.109001159668 488.9169921875 116.484001159668 488.5719909667969 C 115.859001159668 488.2170104980469 115.1589965820313 488.0400085449219 114.3840026855469 488.0400085449219 C 113.609001159668 488.0400085449219 112.9049987792969 488.2170104980469 112.2699966430664 488.5719909667969 C 111.6449966430664 488.9169921875 111.1500015258789 489.4030151367188 110.786003112793 490.0280151367188 C 110.4309997558594 490.6440124511719 110.2539978027344 491.3349914550781 110.2539978027344 492.1000061035156 C 110.2539978027344 492.864990234375 110.4309997558594 493.5610046386719 110.786003112793 494.1860046386719 C 111.1500015258789 494.802001953125 111.6449966430664 495.2869873046875 112.2699966430664 495.6419982910156 C 112.9049987792969 495.9869995117188 113.609001159668 496.1600036621094 114.3840026855469 496.1600036621094 Z M 126.0999984741211 497.0840148925781 C 125.1289978027344 497.0840148925781 124.2519989013672 496.8689880371094 123.4680023193359 496.4400024414063 C 122.693000793457 496.010986328125 122.0820007324219 495.4179992675781 121.6340026855469 494.6619873046875 C 121.1949996948242 493.8970031738281 120.9759979248047 493.0429992675781 120.9759979248047 492.1000061035156 C 120.9759979248047 491.1570129394531 121.1949996948242 490.3080139160156 121.6340026855469 489.552001953125 C 122.0820007324219 488.7869873046875 122.697998046875 488.1889953613281 123.4820022583008 487.760009765625 C 124.265998840332 487.3309936523438 125.1429977416992 487.1159973144531 126.1139984130859 487.1159973144531 C 126.8420028686523 487.1159973144531 127.5139999389648 487.2369995117188 128.1300048828125 487.4800109863281 C 128.7460021972656 487.7229919433594 129.2689971923828 488.0769958496094 129.697998046875 488.5440063476563 L 129.0399932861328 489.2019958496094 C 128.2749938964844 488.427001953125 127.3089981079102 488.0400085449219 126.1419982910156 488.0400085449219 C 125.3669967651367 488.0400085449219 124.6630020141602 488.2170104980469 124.0279998779297 488.5719909667969 C 123.3929977416992 488.927001953125 122.8939971923828 489.4119873046875 122.5299987792969 490.0280151367188 C 122.1750030517578 490.6440124511719 121.9980010986328 491.3349914550781 121.9980010986328 492.1000061035156 C 121.9980010986328 492.864990234375 122.1750030517578 493.5559997558594 122.5299987792969 494.1719970703125 C 122.8939971923828 494.7879943847656 123.3929977416992 495.2730102539063 124.0279998779297 495.6279907226563 C 124.6630020141602 495.9830017089844 125.3669967651367 496.1600036621094 126.1419982910156 496.1600036621094 C 127.318000793457 496.1600036621094 128.2839965820313 495.7680053710938 129.0399932861328 494.9840087890625 L 129.697998046875 495.6419982910156 C 129.2689971923828 496.1090087890625 128.7409973144531 496.4679870605469 128.1159973144531 496.7200012207031 C 127.5 496.9630126953125 126.8280029296875 497.0840148925781 126.0999984741211 497.0840148925781 Z M 135.0610046386719 493.6119995117188 L 135.0610046386719 497 L 134.0390014648438 497 L 134.0390014648438 493.6119995117188 L 130.1190032958984 487.2000122070313 L 131.2250061035156 487.2000122070313 L 134.5850067138672 492.7019958496094 L 137.9450073242188 487.2000122070313 L 138.9810028076172 487.2000122070313 L 135.0610046386719 493.6119995117188 Z M 142.4239959716797 488.0960083007813 L 138.9799957275391 488.0960083007813 L 138.9799957275391 487.2000122070313 L 146.9040069580078 487.2000122070313 L 146.9040069580078 488.0960083007813 L 143.4600067138672 488.0960083007813 L 143.4600067138672 497 L 142.4239959716797 497 L 142.4239959716797 488.0960083007813 Z M 155.4889984130859 496.10400390625 L 155.4889984130859 497 L 148.5590057373047 497 L 148.5590057373047 487.2000122070313 L 155.2790069580078 487.2000122070313 L 155.2790069580078 488.0960083007813 L 149.5950012207031 488.0960083007813 L 149.5950012207031 491.5820007324219 L 154.6629943847656 491.5820007324219 L 154.6629943847656 492.4639892578125 L 149.5950012207031 492.4639892578125 L 149.5950012207031 496.10400390625 L 155.4889984130859 496.10400390625 Z">
			</path>
		</svg>
		<svg class="Lymphocyte_Range" viewBox="270.318 464.116 39.064 9.968">
			<path id="Lymphocyte_Range" d="M 277.4859924316406 473.10400390625 L 277.4859924316406 474 L 270.6119995117188 474 L 270.6119995117188 473.2860107421875 L 274.6860046386719 469.2959899902344 C 275.2000122070313 468.7919921875 275.5450134277344 468.3580017089844 275.7219848632813 467.9939880371094 C 275.9089965820313 467.6210021972656 276.0020141601563 467.2470092773438 276.0020141601563 466.8739929199219 C 276.0020141601563 466.2950134277344 275.802001953125 465.8469848632813 275.3999938964844 465.5299987792969 C 275.0079956054688 465.2030029296875 274.4440002441406 465.0400085449219 273.7059936523438 465.0400085449219 C 272.5580139160156 465.0400085449219 271.6669921875 465.4039916992188 271.0320129394531 466.1319885253906 L 270.3179931640625 465.5159912109375 C 270.7009887695313 465.0679931640625 271.1860046386719 464.7229919433594 271.7739868164063 464.4800109863281 C 272.3720092773438 464.2369995117188 273.0440063476563 464.1159973144531 273.7900085449219 464.1159973144531 C 274.7890014648438 464.1159973144531 275.5780029296875 464.35400390625 276.156005859375 464.8299865722656 C 276.7439880371094 465.2969970703125 277.0379943847656 465.9410095214844 277.0379943847656 466.7619934082031 C 277.0379943847656 467.2659912109375 276.9259948730469 467.7510070800781 276.7019958496094 468.2179870605469 C 276.4779968261719 468.6849975585938 276.0539855957031 469.2210083007813 275.4280090332031 469.8280029296875 L 272.0960083007813 473.10400390625 L 277.4859924316406 473.10400390625 Z M 282.6029968261719 474.0840148925781 C 281.8469848632813 474.0840148925781 281.1700134277344 473.8829956054688 280.572998046875 473.4819946289063 C 279.9849853515625 473.0809936523438 279.5230102539063 472.5069885253906 279.18701171875 471.760009765625 C 278.8599853515625 471.0039978027344 278.6969909667969 470.1170043945313 278.6969909667969 469.1000061035156 C 278.6969909667969 468.0830078125 278.8599853515625 467.2009887695313 279.18701171875 466.4540100097656 C 279.5230102539063 465.697998046875 279.9849853515625 465.1189880371094 280.572998046875 464.7179870605469 C 281.1700134277344 464.3169860839844 281.8469848632813 464.1159973144531 282.6029968261719 464.1159973144531 C 283.3590087890625 464.1159973144531 284.031005859375 464.3169860839844 284.6189880371094 464.7179870605469 C 285.2160034179688 465.1189880371094 285.6830139160156 465.697998046875 286.0190124511719 466.4540100097656 C 286.3550109863281 467.2009887695313 286.5230102539063 468.0830078125 286.5230102539063 469.1000061035156 C 286.5230102539063 470.1170043945313 286.3550109863281 471.0039978027344 286.0190124511719 471.760009765625 C 285.6830139160156 472.5069885253906 285.2160034179688 473.0809936523438 284.6189880371094 473.4819946289063 C 284.031005859375 473.8829956054688 283.3590087890625 474.0840148925781 282.6029968261719 474.0840148925781 Z M 282.6029968261719 473.1600036621094 C 283.1719970703125 473.1600036621094 283.6709899902344 473.0010070800781 284.1010131835938 472.6839904785156 C 284.5390014648438 472.3670043945313 284.8800048828125 471.9049987792969 285.1229858398438 471.2980041503906 C 285.364990234375 470.6910095214844 285.4869995117188 469.9590148925781 285.4869995117188 469.1000061035156 C 285.4869995117188 468.2409973144531 285.364990234375 467.5090026855469 285.1229858398438 466.9020080566406 C 284.8800048828125 466.2950134277344 284.5390014648438 465.8330078125 284.1010131835938 465.5159912109375 C 283.6709899902344 465.1990051269531 283.1719970703125 465.0400085449219 282.6029968261719 465.0400085449219 C 282.0329895019531 465.0400085449219 281.5289916992188 465.1990051269531 281.0910034179688 465.5159912109375 C 280.6610107421875 465.8330078125 280.3250122070313 466.2950134277344 280.0830078125 466.9020080566406 C 279.8399963378906 467.5090026855469 279.718994140625 468.2409973144531 279.718994140625 469.1000061035156 C 279.718994140625 469.9590148925781 279.8399963378906 470.6910095214844 280.0830078125 471.2980041503906 C 280.3250122070313 471.9049987792969 280.6610107421875 472.3670043945313 281.0910034179688 472.6839904785156 C 281.5289916992188 473.0010070800781 282.0329895019531 473.1600036621094 282.6029968261719 473.1600036621094 Z M 288.18798828125 469.7720031738281 L 291.8559875488281 469.7720031738281 L 291.8559875488281 470.6400146484375 L 288.18798828125 470.6400146484375 L 288.18798828125 469.7720031738281 Z M 301.8609924316406 471.4240112304688 L 299.9010009765625 471.4240112304688 L 299.9010009765625 474 L 298.8930053710938 474 L 298.8930053710938 471.4240112304688 L 293.3630065917969 471.4240112304688 L 293.3630065917969 470.6960144042969 L 298.5570068359375 464.2000122070313 L 299.677001953125 464.2000122070313 L 294.6650085449219 470.5280151367188 L 298.9209899902344 470.5280151367188 L 298.9209899902344 468.260009765625 L 299.9010009765625 468.260009765625 L 299.9010009765625 470.5280151367188 L 301.8609924316406 470.5280151367188 L 301.8609924316406 471.4240112304688 Z M 305.3080139160156 468.2179870605469 C 306.7269897460938 468.2179870605469 307.7579956054688 468.4750061035156 308.4020080566406 468.9880065917969 C 309.0549926757813 469.4920043945313 309.3819885253906 470.2009887695313 309.3819885253906 471.1159973144531 C 309.3819885253906 471.6849975585938 309.2470092773438 472.1940002441406 308.9760131835938 472.6419982910156 C 308.7149963378906 473.0899963378906 308.3179931640625 473.4450073242188 307.7860107421875 473.7059936523438 C 307.2539978027344 473.9580078125 306.6010131835938 474.0840148925781 305.8259887695313 474.0840148925781 C 305.1260070800781 474.0840148925781 304.4590148925781 473.9719848632813 303.8240051269531 473.7479858398438 C 303.1990051269531 473.5150146484375 302.6950073242188 473.2070007324219 302.31201171875 472.8240051269531 L 302.802001953125 472.0260009765625 C 303.1289978027344 472.3619995117188 303.5580139160156 472.6369934082031 304.0899963378906 472.8519897460938 C 304.6220092773438 473.0570068359375 305.1960144042969 473.1600036621094 305.81201171875 473.1600036621094 C 306.6239929199219 473.1600036621094 307.2489929199219 472.9779968261719 307.68798828125 472.614013671875 C 308.135986328125 472.25 308.3599853515625 471.7650146484375 308.3599853515625 471.1579895019531 C 308.3599853515625 470.4859924316406 308.1080017089844 469.9769897460938 307.60400390625 469.6319885253906 C 307.1090087890625 469.2869873046875 306.2690124511719 469.114013671875 305.0840148925781 469.114013671875 L 302.9979858398438 469.114013671875 L 303.5020141601563 464.2000122070313 L 308.864013671875 464.2000122070313 L 308.864013671875 465.0960083007813 L 304.3840026855469 465.0960083007813 L 304.0480041503906 468.2179870605469 L 305.3080139160156 468.2179870605469 Z">
			</path>
		</svg>
		<div id="Enter_Lymphocyte">
			<span>50%</span>
		</div>
		<svg class="Lymphocyte" viewBox="73.596 464.116 95.948 9.968">
			<path id="Lymphocyte" d="M 73.59600067138672 464.2000122070313 L 74.63200378417969 464.2000122070313 L 74.63200378417969 473.10400390625 L 80.12000274658203 473.10400390625 L 80.12000274658203 474 L 73.59600067138672 474 L 73.59600067138672 464.2000122070313 Z M 84.16110229492188 470.6119995117188 L 84.16110229492188 474 L 83.13909912109375 474 L 83.13909912109375 470.6119995117188 L 79.21910095214844 464.2000122070313 L 80.32510375976563 464.2000122070313 L 83.68509674072266 469.7019958496094 L 87.04509735107422 464.2000122070313 L 88.08110046386719 464.2000122070313 L 84.16110229492188 470.6119995117188 Z M 99.66069793701172 464.2000122070313 L 99.66069793701172 474 L 98.66670227050781 474 L 98.66670227050781 466.1600036621094 L 94.81670379638672 472.7539978027344 L 94.32669830322266 472.7539978027344 L 90.47669982910156 466.2019958496094 L 90.47669982910156 474 L 89.48269653320313 474 L 89.48269653320313 464.2000122070313 L 90.33670043945313 464.2000122070313 L 94.59269714355469 471.4660034179688 L 98.80670166015625 464.2000122070313 L 99.66069793701172 464.2000122070313 Z M 106.5220031738281 464.2000122070313 C 107.7720031738281 464.2000122070313 108.7519989013672 464.4989929199219 109.4619979858398 465.0960083007813 C 110.1709976196289 465.6929931640625 110.5260009765625 466.5150146484375 110.5260009765625 467.5599975585938 C 110.5260009765625 468.6050109863281 110.1709976196289 469.427001953125 109.4619979858398 470.0239868164063 C 108.7519989013672 470.6119995117188 107.7720031738281 470.906005859375 106.5220031738281 470.906005859375 L 103.8899993896484 470.906005859375 L 103.8899993896484 474 L 102.8539962768555 474 L 102.8539962768555 464.2000122070313 L 106.5220031738281 464.2000122070313 Z M 106.4940032958984 469.9960021972656 C 107.463996887207 469.9960021972656 108.2060012817383 469.7860107421875 108.7200012207031 469.3659973144531 C 109.2330017089844 468.93701171875 109.4899978637695 468.3349914550781 109.4899978637695 467.5599975585938 C 109.4899978637695 466.7669982910156 109.2330017089844 466.1600036621094 108.7200012207031 465.739990234375 C 108.2060012817383 465.3110046386719 107.463996887207 465.0960083007813 106.4940032958984 465.0960083007813 L 103.8899993896484 465.0960083007813 L 103.8899993896484 469.9960021972656 L 106.4940032958984 469.9960021972656 Z M 120.9560012817383 464.2000122070313 L 120.9560012817383 474 L 119.9339981079102 474 L 119.9339981079102 469.4779968261719 L 113.802001953125 469.4779968261719 L 113.802001953125 474 L 112.765998840332 474 L 112.765998840332 464.2000122070313 L 113.802001953125 464.2000122070313 L 113.802001953125 468.5679931640625 L 119.9339981079102 468.5679931640625 L 119.9339981079102 464.2000122070313 L 120.9560012817383 464.2000122070313 Z M 128.4389953613281 474.0840148925781 C 127.4680023193359 474.0840148925781 126.5859985351563 473.8689880371094 125.7929992675781 473.4400024414063 C 125.0090026855469 473.0010070800781 124.3929977416992 472.4039916992188 123.9449996948242 471.6480102539063 C 123.5059967041016 470.8919982910156 123.2870025634766 470.0429992675781 123.2870025634766 469.1000061035156 C 123.2870025634766 468.1570129394531 123.5059967041016 467.3080139160156 123.9449996948242 466.552001953125 C 124.3929977416992 465.7959899902344 125.0090026855469 465.2030029296875 125.7929992675781 464.7739868164063 C 126.5859985351563 464.3349914550781 127.4680023193359 464.1159973144531 128.4389953613281 464.1159973144531 C 129.4089965820313 464.1159973144531 130.2819976806641 464.3309936523438 131.0570068359375 464.760009765625 C 131.8410034179688 465.1889953613281 132.4570007324219 465.7869873046875 132.9049987792969 466.552001953125 C 133.3529968261719 467.3080139160156 133.5769958496094 468.1570129394531 133.5769958496094 469.1000061035156 C 133.5769958496094 470.0429992675781 133.3529968261719 470.8970031738281 132.9049987792969 471.6619873046875 C 132.4570007324219 472.4179992675781 131.8410034179688 473.010986328125 131.0570068359375 473.4400024414063 C 130.2819976806641 473.8689880371094 129.4089965820313 474.0840148925781 128.4389953613281 474.0840148925781 Z M 128.4389953613281 473.1600036621094 C 129.2129974365234 473.1600036621094 129.9129943847656 472.9869995117188 130.5390014648438 472.6419982910156 C 131.1640014648438 472.2869873046875 131.6540069580078 471.802001953125 132.0090026855469 471.1860046386719 C 132.3630065917969 470.5610046386719 132.5410003662109 469.864990234375 132.5410003662109 469.1000061035156 C 132.5410003662109 468.3349914550781 132.3630065917969 467.6440124511719 132.0090026855469 467.0280151367188 C 131.6540069580078 466.4030151367188 131.1640014648438 465.9169921875 130.5390014648438 465.5719909667969 C 129.9129943847656 465.2170104980469 129.2129974365234 465.0400085449219 128.4389953613281 465.0400085449219 C 127.6640014648438 465.0400085449219 126.9589996337891 465.2170104980469 126.3249969482422 465.5719909667969 C 125.6989974975586 465.9169921875 125.2050018310547 466.4030151367188 124.8410034179688 467.0280151367188 C 124.4860000610352 467.6440124511719 124.3089981079102 468.3349914550781 124.3089981079102 469.1000061035156 C 124.3089981079102 469.864990234375 124.4860000610352 470.5610046386719 124.8410034179688 471.1860046386719 C 125.2050018310547 471.802001953125 125.6989974975586 472.2869873046875 126.3249969482422 472.6419982910156 C 126.9589996337891 472.9869995117188 127.6640014648438 473.1600036621094 128.4389953613281 473.1600036621094 Z M 140.1549987792969 474.0840148925781 C 139.1840057373047 474.0840148925781 138.3070068359375 473.8689880371094 137.5229949951172 473.4400024414063 C 136.7480010986328 473.010986328125 136.1369934082031 472.4179992675781 135.6889953613281 471.6619873046875 C 135.25 470.8970031738281 135.031005859375 470.0429992675781 135.031005859375 469.1000061035156 C 135.031005859375 468.1570129394531 135.25 467.3080139160156 135.6889953613281 466.552001953125 C 136.1369934082031 465.7869873046875 136.7530059814453 465.1889953613281 137.5370025634766 464.760009765625 C 138.3209991455078 464.3309936523438 139.197998046875 464.1159973144531 140.1690063476563 464.1159973144531 C 140.8970031738281 464.1159973144531 141.5690002441406 464.2369995117188 142.1849975585938 464.4800109863281 C 142.8009948730469 464.7229919433594 143.322998046875 465.0769958496094 143.7530059814453 465.5440063476563 L 143.0950012207031 466.2019958496094 C 142.3289947509766 465.427001953125 141.3630065917969 465.0400085449219 140.1970062255859 465.0400085449219 C 139.4219970703125 465.0400085449219 138.7169952392578 465.2170104980469 138.0829925537109 465.5719909667969 C 137.447998046875 465.927001953125 136.9490051269531 466.4119873046875 136.5850067138672 467.0280151367188 C 136.2299957275391 467.6440124511719 136.0529937744141 468.3349914550781 136.0529937744141 469.1000061035156 C 136.0529937744141 469.864990234375 136.2299957275391 470.5559997558594 136.5850067138672 471.1719970703125 C 136.9490051269531 471.7879943847656 137.447998046875 472.2730102539063 138.0829925537109 472.6279907226563 C 138.7169952392578 472.9830017089844 139.4219970703125 473.1600036621094 140.1970062255859 473.1600036621094 C 141.3730010986328 473.1600036621094 142.3390045166016 472.7680053710938 143.0950012207031 471.9840087890625 L 143.7530059814453 472.6419982910156 C 143.322998046875 473.1090087890625 142.7960052490234 473.4679870605469 142.1710052490234 473.7200012207031 C 141.5549926757813 473.9630126953125 140.8829956054688 474.0840148925781 140.1549987792969 474.0840148925781 Z M 149.1159973144531 470.6119995117188 L 149.1159973144531 474 L 148.093994140625 474 L 148.093994140625 470.6119995117188 L 144.1739959716797 464.2000122070313 L 145.2799987792969 464.2000122070313 L 148.6399993896484 469.7019958496094 L 152 464.2000122070313 L 153.0359954833984 464.2000122070313 L 149.1159973144531 470.6119995117188 Z M 156.47900390625 465.0960083007813 L 153.0350036621094 465.0960083007813 L 153.0350036621094 464.2000122070313 L 160.9589996337891 464.2000122070313 L 160.9589996337891 465.0960083007813 L 157.5149993896484 465.0960083007813 L 157.5149993896484 474 L 156.47900390625 474 L 156.47900390625 465.0960083007813 Z M 169.5440063476563 473.10400390625 L 169.5440063476563 474 L 162.6139984130859 474 L 162.6139984130859 464.2000122070313 L 169.3339996337891 464.2000122070313 L 169.3339996337891 465.0960083007813 L 163.6499938964844 465.0960083007813 L 163.6499938964844 468.5820007324219 L 168.7180023193359 468.5820007324219 L 168.7180023193359 469.4639892578125 L 163.6499938964844 469.4639892578125 L 163.6499938964844 473.10400390625 L 169.5440063476563 473.10400390625 Z">
			</path>
		</svg>
		<svg class="Neutrophils_Range" viewBox="270.285 441.116 39.439 9.968">
			<path id="Neutrophils_Range" d="M 278.7829895019531 448.4240112304688 L 276.822998046875 448.4240112304688 L 276.822998046875 451 L 275.8150024414063 451 L 275.8150024414063 448.4240112304688 L 270.2850036621094 448.4240112304688 L 270.2850036621094 447.6960144042969 L 275.47900390625 441.2000122070313 L 276.5989990234375 441.2000122070313 L 271.5870056152344 447.5280151367188 L 275.8429870605469 447.5280151367188 L 275.8429870605469 445.260009765625 L 276.822998046875 445.260009765625 L 276.822998046875 447.5280151367188 L 278.7829895019531 447.5280151367188 L 278.7829895019531 448.4240112304688 Z M 283.614013671875 451.0840148925781 C 282.8580017089844 451.0840148925781 282.1820068359375 450.8829956054688 281.5840148925781 450.4819946289063 C 280.9960021972656 450.0809936523438 280.5339965820313 449.5069885253906 280.197998046875 448.760009765625 C 279.8720092773438 448.0039978027344 279.7080078125 447.1170043945313 279.7080078125 446.1000061035156 C 279.7080078125 445.0830078125 279.8720092773438 444.2009887695313 280.197998046875 443.4540100097656 C 280.5339965820313 442.697998046875 280.9960021972656 442.1189880371094 281.5840148925781 441.7179870605469 C 282.1820068359375 441.3169860839844 282.8580017089844 441.1159973144531 283.614013671875 441.1159973144531 C 284.3699951171875 441.1159973144531 285.0419921875 441.3169860839844 285.6300048828125 441.7179870605469 C 286.2279968261719 442.1189880371094 286.6940002441406 442.697998046875 287.0299987792969 443.4540100097656 C 287.3659973144531 444.2009887695313 287.5339965820313 445.0830078125 287.5339965820313 446.1000061035156 C 287.5339965820313 447.1170043945313 287.3659973144531 448.0039978027344 287.0299987792969 448.760009765625 C 286.6940002441406 449.5069885253906 286.2279968261719 450.0809936523438 285.6300048828125 450.4819946289063 C 285.0419921875 450.8829956054688 284.3699951171875 451.0840148925781 283.614013671875 451.0840148925781 Z M 283.614013671875 450.1600036621094 C 284.1839904785156 450.1600036621094 284.6830139160156 450.0010070800781 285.1119995117188 449.6839904785156 C 285.5509948730469 449.3670043945313 285.8919982910156 448.9049987792969 286.1340026855469 448.2980041503906 C 286.3770141601563 447.6910095214844 286.4979858398438 446.9590148925781 286.4979858398438 446.1000061035156 C 286.4979858398438 445.2409973144531 286.3770141601563 444.5090026855469 286.1340026855469 443.9020080566406 C 285.8919982910156 443.2950134277344 285.5509948730469 442.8330078125 285.1119995117188 442.5159912109375 C 284.6830139160156 442.1990051269531 284.1839904785156 442.0400085449219 283.614013671875 442.0400085449219 C 283.0450134277344 442.0400085449219 282.5409851074219 442.1990051269531 282.1019897460938 442.5159912109375 C 281.6730041503906 442.8330078125 281.3370056152344 443.2950134277344 281.093994140625 443.9020080566406 C 280.8519897460938 444.5090026855469 280.7300109863281 445.2409973144531 280.7300109863281 446.1000061035156 C 280.7300109863281 446.9590148925781 280.8519897460938 447.6910095214844 281.093994140625 448.2980041503906 C 281.3370056152344 448.9049987792969 281.6730041503906 449.3670043945313 282.1019897460938 449.6839904785156 C 282.5409851074219 450.0010070800781 283.0450134277344 450.1600036621094 283.614013671875 450.1600036621094 Z M 289.1990051269531 446.7720031738281 L 292.8670043945313 446.7720031738281 L 292.8670043945313 447.6400146484375 L 289.1990051269531 447.6400146484375 L 289.1990051269531 446.7720031738281 Z M 298.6019897460938 445.1340026855469 C 299.2460021972656 445.1340026855469 299.8160095214844 445.2550048828125 300.3099975585938 445.4979858398438 C 300.8139953613281 445.7409973144531 301.2059936523438 446.0859985351563 301.4859924316406 446.5339965820313 C 301.7659912109375 446.9729919433594 301.906005859375 447.4859924316406 301.906005859375 448.0740051269531 C 301.906005859375 448.6709899902344 301.7619934082031 449.1990051269531 301.4719848632813 449.656005859375 C 301.1830139160156 450.1130065917969 300.7820129394531 450.4679870605469 300.2680053710938 450.7200012207031 C 299.7640075683594 450.9630126953125 299.1950073242188 451.0840148925781 298.5599975585938 451.0840148925781 C 297.2630004882813 451.0840148925781 296.2690124511719 450.6589965820313 295.5780029296875 449.8099975585938 C 294.8880004882813 448.9509887695313 294.5419921875 447.7430114746094 294.5419921875 446.1839904785156 C 294.5419921875 445.0920104980469 294.72900390625 444.1679992675781 295.1019897460938 443.4119873046875 C 295.4760131835938 442.656005859375 295.9979858398438 442.0870056152344 296.6700134277344 441.7040100097656 C 297.3420104980469 441.31201171875 298.1260070800781 441.1159973144531 299.0220031738281 441.1159973144531 C 299.9930114746094 441.1159973144531 300.7680053710938 441.2929992675781 301.3460083007813 441.6480102539063 L 300.9400024414063 442.4599914550781 C 300.4739990234375 442.1520080566406 299.8389892578125 441.9979858398438 299.0360107421875 441.9979858398438 C 297.9540100097656 441.9979858398438 297.10400390625 442.3429870605469 296.4880065917969 443.0339965820313 C 295.8720092773438 443.7149963378906 295.5639953613281 444.7090148925781 295.5639953613281 446.0159912109375 C 295.5639953613281 446.2489929199219 295.5780029296875 446.5150146484375 295.6059875488281 446.8139953613281 C 295.8489990234375 446.2820129394531 296.2359924316406 445.8710021972656 296.7680053710938 445.5820007324219 C 297.2999877929688 445.2829895019531 297.9119873046875 445.1340026855469 298.6019897460938 445.1340026855469 Z M 298.5180053710938 450.2300109863281 C 299.2279968261719 450.2300109863281 299.802001953125 450.0390014648438 300.239990234375 449.656005859375 C 300.68798828125 449.2640075683594 300.9119873046875 448.7460021972656 300.9119873046875 448.1019897460938 C 300.9119873046875 447.4580078125 300.68798828125 446.9450073242188 300.239990234375 446.56201171875 C 299.802001953125 446.1789855957031 299.2040100097656 445.9880065917969 298.447998046875 445.9880065917969 C 297.9540100097656 445.9880065917969 297.5150146484375 446.0809936523438 297.1319885253906 446.2680053710938 C 296.7590026855469 446.4549865722656 296.4649963378906 446.7109985351563 296.25 447.0379943847656 C 296.0360107421875 447.364990234375 295.9280090332031 447.72900390625 295.9280090332031 448.1300048828125 C 295.9280090332031 448.5029907226563 296.0260009765625 448.8489990234375 296.2219848632813 449.1659851074219 C 296.4280090332031 449.4830017089844 296.7260131835938 449.739990234375 297.1180114746094 449.9360046386719 C 297.510009765625 450.1319885253906 297.9769897460938 450.2300109863281 298.5180053710938 450.2300109863281 Z M 305.6499938964844 445.2179870605469 C 307.0679931640625 445.2179870605469 308.1000061035156 445.4750061035156 308.7439880371094 445.9880065917969 C 309.3970031738281 446.4920043945313 309.7239990234375 447.2009887695313 309.7239990234375 448.1159973144531 C 309.7239990234375 448.6849975585938 309.5880126953125 449.1940002441406 309.3179931640625 449.6419982910156 C 309.0559997558594 450.0899963378906 308.6600036621094 450.4450073242188 308.1279907226563 450.7059936523438 C 307.5960083007813 450.9580078125 306.9419860839844 451.0840148925781 306.1679992675781 451.0840148925781 C 305.4679870605469 451.0840148925781 304.7999877929688 450.9719848632813 304.1659851074219 450.7479858398438 C 303.5400085449219 450.5150146484375 303.0360107421875 450.2070007324219 302.6539916992188 449.8240051269531 L 303.1440124511719 449.0260009765625 C 303.4700012207031 449.3619995117188 303.8999938964844 449.6369934082031 304.4320068359375 449.8519897460938 C 304.9639892578125 450.0570068359375 305.5379943847656 450.1600036621094 306.1539916992188 450.1600036621094 C 306.9660034179688 450.1600036621094 307.5910034179688 449.9779968261719 308.0299987792969 449.614013671875 C 308.4779968261719 449.25 308.7019958496094 448.7650146484375 308.7019958496094 448.1579895019531 C 308.7019958496094 447.4859924316406 308.4500122070313 446.9769897460938 307.9460144042969 446.6319885253906 C 307.4509887695313 446.2869873046875 306.6109924316406 446.114013671875 305.4259948730469 446.114013671875 L 303.3399963378906 446.114013671875 L 303.843994140625 441.2000122070313 L 309.2059936523438 441.2000122070313 L 309.2059936523438 442.0960083007813 L 304.7260131835938 442.0960083007813 L 304.3900146484375 445.2179870605469 L 305.6499938964844 445.2179870605469 Z">
			</path>
		</svg>
		<div id="Enter_Neuturophils">
			<span>50%</span>
		</div>
		<svg class="Neutrophils" viewBox="73.596 441.116 101.567 9.968">
			<path id="Neutrophils" d="M 81.78600311279297 441.2000122070313 L 81.78600311279297 451 L 80.93199920654297 451 L 74.63200378417969 443.0480041503906 L 74.63200378417969 451 L 73.59600067138672 451 L 73.59600067138672 441.2000122070313 L 74.44999694824219 441.2000122070313 L 80.76399993896484 449.1520080566406 L 80.76399993896484 441.2000122070313 L 81.78600311279297 441.2000122070313 Z M 91.91470336914063 450.10400390625 L 91.91470336914063 451 L 84.98470306396484 451 L 84.98470306396484 441.2000122070313 L 91.70469665527344 441.2000122070313 L 91.70469665527344 442.0960083007813 L 86.02069854736328 442.0960083007813 L 86.02069854736328 445.5820007324219 L 91.08869934082031 445.5820007324219 L 91.08869934082031 446.4639892578125 L 86.02069854736328 446.4639892578125 L 86.02069854736328 450.10400390625 L 91.91470336914063 450.10400390625 Z M 98.29789733886719 451.0840148925781 C 97.02860260009766 451.0840148925781 96.03919982910156 450.7200012207031 95.32990264892578 449.9920043945313 C 94.62059783935547 449.2640075683594 94.26589965820313 448.2049865722656 94.26589965820313 446.8139953613281 L 94.26589965820313 441.2000122070313 L 95.30190277099609 441.2000122070313 L 95.30190277099609 446.7720031738281 C 95.30190277099609 447.9110107421875 95.55860137939453 448.760009765625 96.0718994140625 449.3200073242188 C 96.58519744873047 449.8800048828125 97.32720184326172 450.1600036621094 98.29789733886719 450.1600036621094 C 99.27790069580078 450.1600036621094 100.0250015258789 449.8800048828125 100.5380020141602 449.3200073242188 C 101.0510025024414 448.760009765625 101.3079986572266 447.9110107421875 101.3079986572266 446.7720031738281 L 101.3079986572266 441.2000122070313 L 102.3160018920898 441.2000122070313 L 102.3160018920898 446.8139953613281 C 102.3160018920898 448.2049865722656 101.9609985351563 449.2640075683594 101.2519989013672 449.9920043945313 C 100.552001953125 450.7200012207031 99.56719970703125 451.0840148925781 98.29789733886719 451.0840148925781 Z M 107.1500015258789 442.0960083007813 L 103.7060012817383 442.0960083007813 L 103.7060012817383 441.2000122070313 L 111.629997253418 441.2000122070313 L 111.629997253418 442.0960083007813 L 108.1859970092773 442.0960083007813 L 108.1859970092773 451 L 107.1500015258789 451 L 107.1500015258789 442.0960083007813 Z M 119.9769973754883 451 L 117.7369995117188 447.8500061035156 C 117.4850006103516 447.8779907226563 117.2239990234375 447.8919982910156 116.9530029296875 447.8919982910156 L 114.3209991455078 447.8919982910156 L 114.3209991455078 451 L 113.2850036621094 451 L 113.2850036621094 441.2000122070313 L 116.9530029296875 441.2000122070313 C 118.2040023803711 441.2000122070313 119.1839981079102 441.4989929199219 119.8929977416992 442.0960083007813 C 120.6029968261719 442.6929931640625 120.9570007324219 443.5150146484375 120.9570007324219 444.5599975585938 C 120.9570007324219 445.3250122070313 120.7610015869141 445.9739990234375 120.3690032958984 446.5060119628906 C 119.9869995117188 447.0289916992188 119.4359970092773 447.4070129394531 118.7170028686523 447.6400146484375 L 121.1110000610352 451 L 119.9769973754883 451 Z M 116.9250030517578 447.010009765625 C 117.8960037231445 447.010009765625 118.6380004882813 446.7950134277344 119.1510009765625 446.3659973144531 C 119.6650009155273 445.93701171875 119.9209976196289 445.3349914550781 119.9209976196289 444.5599975585938 C 119.9209976196289 443.7669982910156 119.6650009155273 443.1600036621094 119.1510009765625 442.739990234375 C 118.6380004882813 442.3110046386719 117.8960037231445 442.0960083007813 116.9250030517578 442.0960083007813 L 114.3209991455078 442.0960083007813 L 114.3209991455078 447.010009765625 L 116.9250030517578 447.010009765625 Z M 127.6869964599609 451.0840148925781 C 126.7160034179688 451.0840148925781 125.8339996337891 450.8689880371094 125.0410003662109 450.4400024414063 C 124.2570037841797 450.0010070800781 123.640998840332 449.4039916992188 123.193000793457 448.6480102539063 C 122.7539978027344 447.8919982910156 122.5350036621094 447.0429992675781 122.5350036621094 446.1000061035156 C 122.5350036621094 445.1570129394531 122.7539978027344 444.3080139160156 123.193000793457 443.552001953125 C 123.640998840332 442.7959899902344 124.2570037841797 442.2030029296875 125.0410003662109 441.7739868164063 C 125.8339996337891 441.3349914550781 126.7160034179688 441.1159973144531 127.6869964599609 441.1159973144531 C 128.6569976806641 441.1159973144531 129.5299987792969 441.3309936523438 130.3049926757813 441.760009765625 C 131.0890045166016 442.1889953613281 131.7050018310547 442.7869873046875 132.1529998779297 443.552001953125 C 132.6009979248047 444.3080139160156 132.8249969482422 445.1570129394531 132.8249969482422 446.1000061035156 C 132.8249969482422 447.0429992675781 132.6009979248047 447.8970031738281 132.1529998779297 448.6619873046875 C 131.7050018310547 449.4179992675781 131.0890045166016 450.010986328125 130.3049926757813 450.4400024414063 C 129.5299987792969 450.8689880371094 128.6569976806641 451.0840148925781 127.6869964599609 451.0840148925781 Z M 127.6869964599609 450.1600036621094 C 128.4609985351563 450.1600036621094 129.1609954833984 449.9869995117188 129.7870025634766 449.6419982910156 C 130.4120025634766 449.2869873046875 130.9019927978516 448.802001953125 131.2570037841797 448.1860046386719 C 131.6109924316406 447.5610046386719 131.7890014648438 446.864990234375 131.7890014648438 446.1000061035156 C 131.7890014648438 445.3349914550781 131.6109924316406 444.6440124511719 131.2570037841797 444.0280151367188 C 130.9019927978516 443.4030151367188 130.4120025634766 442.9169921875 129.7870025634766 442.5719909667969 C 129.1609954833984 442.2170104980469 128.4609985351563 442.0400085449219 127.6869964599609 442.0400085449219 C 126.9120025634766 442.0400085449219 126.2070007324219 442.2170104980469 125.572998046875 442.5719909667969 C 124.9469985961914 442.9169921875 124.4530029296875 443.4030151367188 124.088996887207 444.0280151367188 C 123.734001159668 444.6440124511719 123.556999206543 445.3349914550781 123.556999206543 446.1000061035156 C 123.556999206543 446.864990234375 123.734001159668 447.5610046386719 124.088996887207 448.1860046386719 C 124.4530029296875 448.802001953125 124.9469985961914 449.2869873046875 125.572998046875 449.6419982910156 C 126.2070007324219 449.9869995117188 126.9120025634766 450.1600036621094 127.6869964599609 450.1600036621094 Z M 138.8150024414063 441.2000122070313 C 140.0650024414063 441.2000122070313 141.0449981689453 441.4989929199219 141.7550048828125 442.0960083007813 C 142.4640045166016 442.6929931640625 142.8190002441406 443.5150146484375 142.8190002441406 444.5599975585938 C 142.8190002441406 445.6050109863281 142.4640045166016 446.427001953125 141.7550048828125 447.0239868164063 C 141.0449981689453 447.6119995117188 140.0650024414063 447.906005859375 138.8150024414063 447.906005859375 L 136.1829986572266 447.906005859375 L 136.1829986572266 451 L 135.1470031738281 451 L 135.1470031738281 441.2000122070313 L 138.8150024414063 441.2000122070313 Z M 138.7870025634766 446.9960021972656 C 139.7570037841797 446.9960021972656 140.4989929199219 446.7860107421875 141.0130004882813 446.3659973144531 C 141.5260009765625 445.93701171875 141.7830047607422 445.3349914550781 141.7830047607422 444.5599975585938 C 141.7830047607422 443.7669982910156 141.5260009765625 443.1600036621094 141.0130004882813 442.739990234375 C 140.4989929199219 442.3110046386719 139.7570037841797 442.0960083007813 138.7870025634766 442.0960083007813 L 136.1829986572266 442.0960083007813 L 136.1829986572266 446.9960021972656 L 138.7870025634766 446.9960021972656 Z M 153.2489929199219 441.2000122070313 L 153.2489929199219 451 L 152.2270050048828 451 L 152.2270050048828 446.4779968261719 L 146.0950012207031 446.4779968261719 L 146.0950012207031 451 L 145.0590057373047 451 L 145.0590057373047 441.2000122070313 L 146.0950012207031 441.2000122070313 L 146.0950012207031 445.5679931640625 L 152.2270050048828 445.5679931640625 L 152.2270050048828 441.2000122070313 L 153.2489929199219 441.2000122070313 Z M 156.447998046875 441.2000122070313 L 157.4839935302734 441.2000122070313 L 157.4839935302734 451 L 156.447998046875 451 L 156.447998046875 441.2000122070313 Z M 160.6719970703125 441.2000122070313 L 161.7079925537109 441.2000122070313 L 161.7079925537109 450.10400390625 L 167.1959991455078 450.10400390625 L 167.1959991455078 451 L 160.6719970703125 451 L 160.6719970703125 441.2000122070313 Z M 171.5090026855469 451.0840148925781 C 170.781005859375 451.0840148925781 170.0809936523438 450.9670104980469 169.4089965820313 450.7340087890625 C 168.7460021972656 450.5010070800781 168.2330017089844 450.1929931640625 167.8690032958984 449.8099975585938 L 168.2749938964844 449.0119934082031 C 168.6300048828125 449.3670043945313 169.1009979248047 449.656005859375 169.6889953613281 449.8800048828125 C 170.2769927978516 450.0950012207031 170.8840026855469 450.2019958496094 171.5090026855469 450.2019958496094 C 172.3860015869141 450.2019958496094 173.0440063476563 450.0429992675781 173.4830017089844 449.7260131835938 C 173.9219970703125 449.3989868164063 174.1410064697266 448.97900390625 174.1410064697266 448.4660034179688 C 174.1410064697266 448.0740051269531 174.0200042724609 447.760986328125 173.7769927978516 447.5280151367188 C 173.5440063476563 447.2950134277344 173.2539978027344 447.1170043945313 172.9089965820313 446.9960021972656 C 172.5639953613281 446.864990234375 172.0829925537109 446.7250061035156 171.4669952392578 446.5759887695313 C 170.7299957275391 446.3890075683594 170.1419982910156 446.2120056152344 169.7030029296875 446.0440063476563 C 169.2640075683594 445.8670043945313 168.8860015869141 445.6010131835938 168.5690002441406 445.2460021972656 C 168.2610015869141 444.8909912109375 168.1069946289063 444.4110107421875 168.1069946289063 443.8039855957031 C 168.1069946289063 443.3089904785156 168.2380065917969 442.8609924316406 168.4989929199219 442.4599914550781 C 168.7599945068359 442.0490112304688 169.1620025634766 441.7229919433594 169.7030029296875 441.4800109863281 C 170.2440032958984 441.2369995117188 170.9160003662109 441.1159973144531 171.718994140625 441.1159973144531 C 172.2790069580078 441.1159973144531 172.8249969482422 441.1950073242188 173.3569946289063 441.35400390625 C 173.8979949951172 441.5029907226563 174.3650054931641 441.7130126953125 174.7570037841797 441.9840087890625 L 174.4069976806641 442.8099975585938 C 173.9960021972656 442.5390014648438 173.5579986572266 442.3389892578125 173.0910034179688 442.2080078125 C 172.6239929199219 442.0679931640625 172.1670074462891 441.9979858398438 171.718994140625 441.9979858398438 C 170.8600006103516 441.9979858398438 170.2120056152344 442.1659851074219 169.7729949951172 442.5020141601563 C 169.343994140625 442.8290100097656 169.1289978027344 443.2529907226563 169.1289978027344 443.7760009765625 C 169.1289978027344 444.1679992675781 169.2460021972656 444.4849853515625 169.47900390625 444.7279968261719 C 169.7220001220703 444.9609985351563 170.0200042724609 445.1430053710938 170.375 445.2739868164063 C 170.7389984130859 445.3949890136719 171.2239990234375 445.531005859375 171.8309936523438 445.6799926757813 C 172.5500030517578 445.8569946289063 173.1280059814453 446.0350036621094 173.5670013427734 446.2120056152344 C 174.0149993896484 446.3800048828125 174.3930053710938 446.6409912109375 174.7010040283203 446.9960021972656 C 175.0090026855469 447.3410034179688 175.1629943847656 447.81298828125 175.1629943847656 448.4100036621094 C 175.1629943847656 448.9049987792969 175.0279998779297 449.3569946289063 174.7570037841797 449.7680053710938 C 174.4960021972656 450.1690063476563 174.0899963378906 450.4909973144531 173.5390014648438 450.7340087890625 C 172.9880065917969 450.9670104980469 172.3119964599609 451.0840148925781 171.5090026855469 451.0840148925781 Z">
			</path>
		</svg>
		<svg class="Name" viewBox="96.287 421.2 42.099 9.8">
			<path id="Name" d="M 104.7149963378906 421.2000122070313 L 104.7149963378906 431 L 103.5670013427734 431 L 97.68740081787109 423.6919860839844 L 97.68740081787109 431 L 96.28739929199219 431 L 96.28739929199219 421.2000122070313 L 97.43540191650391 421.2000122070313 L 103.3150024414063 428.5079956054688 L 103.3150024414063 421.2000122070313 L 104.7149963378906 421.2000122070313 Z M 113.8929977416992 428.5499877929688 L 108.6849975585938 428.5499877929688 L 107.6070022583008 431 L 106.1650009155273 431 L 110.6029968261719 421.2000122070313 L 111.9889984130859 421.2000122070313 L 116.4410018920898 431 L 114.9710006713867 431 L 113.8929977416992 428.5499877929688 Z M 113.4029998779297 427.4299926757813 L 111.2890014648438 422.6279907226563 L 109.1750030517578 427.4299926757813 L 113.4029998779297 427.4299926757813 Z M 126.9889984130859 431 L 126.9749984741211 423.8599853515625 L 123.4329986572266 429.8099975585938 L 122.7890014648438 429.8099975585938 L 119.2470016479492 423.9020080566406 L 119.2470016479492 431 L 117.9029998779297 431 L 117.9029998779297 421.2000122070313 L 119.0510025024414 421.2000122070313 L 123.1389999389648 428.0880126953125 L 127.1709976196289 421.2000122070313 L 128.3190002441406 421.2000122070313 L 128.3329925537109 431 L 126.9889984130859 431 Z M 138.3860015869141 429.7820129394531 L 138.3860015869141 431 L 131.2740020751953 431 L 131.2740020751953 421.2000122070313 L 138.1900024414063 421.2000122070313 L 138.1900024414063 422.4179992675781 L 132.6739959716797 422.4179992675781 L 132.6739959716797 425.4280090332031 L 137.5879974365234 425.4280090332031 L 137.5879974365234 426.6180114746094 L 132.6739959716797 426.6180114746094 L 132.6739959716797 429.7820129394531 L 138.3860015869141 429.7820129394531 Z">
			</path>
		</svg>
		<svg class="Result" viewBox="188.503 421.088 53.409 10.024">
			<path id="Result" d="M 195.0549926757813 431 L 192.9409942626953 427.989990234375 C 192.6799926757813 428.0090026855469 192.4750061035156 428.0180053710938 192.3249969482422 428.0180053710938 L 189.9029998779297 428.0180053710938 L 189.9029998779297 431 L 188.5030059814453 431 L 188.5030059814453 421.2000122070313 L 192.3249969482422 421.2000122070313 C 193.5950012207031 421.2000122070313 194.5930023193359 421.5029907226563 195.3209991455078 422.1099853515625 C 196.0489959716797 422.7170104980469 196.4129943847656 423.552001953125 196.4129943847656 424.6159973144531 C 196.4129943847656 425.3720092773438 196.2270050048828 426.0159912109375 195.8529968261719 426.5480041503906 C 195.4799957275391 427.0799865722656 194.947998046875 427.4670104980469 194.2570037841797 427.7099914550781 L 196.5809936523438 431 L 195.0549926757813 431 Z M 192.2830047607422 426.8280029296875 C 193.1699981689453 426.8280029296875 193.8470001220703 426.6369934082031 194.3130035400391 426.2539978027344 C 194.7799987792969 425.8710021972656 195.0130004882813 425.3250122070313 195.0130004882813 424.6159973144531 C 195.0130004882813 423.9070129394531 194.7799987792969 423.364990234375 194.3130035400391 422.9920043945313 C 193.8470001220703 422.6090087890625 193.1699981689453 422.4179992675781 192.2830047607422 422.4179992675781 L 189.9029998779297 422.4179992675781 L 189.9029998779297 426.8280029296875 L 192.2830047607422 426.8280029296875 Z M 205.7870025634766 429.7820129394531 L 205.7870025634766 431 L 198.6750030517578 431 L 198.6750030517578 421.2000122070313 L 205.5910034179688 421.2000122070313 L 205.5910034179688 422.4179992675781 L 200.0749969482422 422.4179992675781 L 200.0749969482422 425.4280090332031 L 204.9889984130859 425.4280090332031 L 204.9889984130859 426.6180114746094 L 200.0749969482422 426.6180114746094 L 200.0749969482422 429.7820129394531 L 205.7870025634766 429.7820129394531 Z M 210.9100036621094 431.1119995117188 C 210.1730041503906 431.1119995117188 209.4589996337891 431 208.7680053710938 430.7760009765625 C 208.0870056152344 430.5429992675781 207.5500030517578 430.2439880371094 207.1580047607422 429.8800048828125 L 207.6759948730469 428.7879943847656 C 208.0489959716797 429.1239929199219 208.5249938964844 429.3989868164063 209.10400390625 429.614013671875 C 209.6920013427734 429.8190002441406 210.2940063476563 429.9219970703125 210.9100036621094 429.9219970703125 C 211.7220001220703 429.9219970703125 212.3289947509766 429.7869873046875 212.7299957275391 429.5159912109375 C 213.1309967041016 429.2359924316406 213.3320007324219 428.8670043945313 213.3320007324219 428.4100036621094 C 213.3320007324219 428.0740051269531 213.2200012207031 427.8030090332031 212.9960021972656 427.5979919433594 C 212.781005859375 427.3829956054688 212.5110015869141 427.2200012207031 212.1840057373047 427.1080017089844 C 211.8670043945313 426.9960021972656 211.4140014648438 426.8699951171875 210.8260040283203 426.7300109863281 C 210.0890045166016 426.5530090332031 209.4909973144531 426.375 209.0339965820313 426.197998046875 C 208.5859985351563 426.02099609375 208.1990051269531 425.75 207.8719940185547 425.385986328125 C 207.5549926757813 425.0130004882813 207.39599609375 424.5130004882813 207.39599609375 423.8880004882813 C 207.39599609375 423.364990234375 207.531005859375 422.8940124511719 207.802001953125 422.4739990234375 C 208.0820007324219 422.0539855957031 208.5019989013672 421.7179870605469 209.0619964599609 421.4660034179688 C 209.6219940185547 421.2139892578125 210.3170013427734 421.0880126953125 211.1479949951172 421.0880126953125 C 211.7270050048828 421.0880126953125 212.2960052490234 421.1629943847656 212.8560028076172 421.31201171875 C 213.4160003662109 421.4609985351563 213.8970031738281 421.6759948730469 214.2980041503906 421.9559936523438 L 213.8359985351563 423.0759887695313 C 213.4250030517578 422.8150024414063 212.9869995117188 422.6189880371094 212.5200042724609 422.4880065917969 C 212.0529937744141 422.3479919433594 211.5959930419922 422.2780151367188 211.1479949951172 422.2780151367188 C 210.3549957275391 422.2780151367188 209.7570037841797 422.4230041503906 209.3560028076172 422.7120056152344 C 208.9640045166016 423.0010070800781 208.7680053710938 423.375 208.7680053710938 423.8320007324219 C 208.7680053710938 424.1679992675781 208.8800048828125 424.4429931640625 209.10400390625 424.6579895019531 C 209.3280029296875 424.8630065917969 209.6029968261719 425.0270080566406 209.9299926757813 425.1480102539063 C 210.2660064697266 425.260009765625 210.718994140625 425.3810119628906 211.2879943847656 425.5119934082031 C 212.0249938964844 425.6889953613281 212.6179962158203 425.8670043945313 213.0659942626953 426.0440063476563 C 213.5140075683594 426.2210083007813 213.8970031738281 426.4920043945313 214.2140045166016 426.8559875488281 C 214.5410003662109 427.2200012207031 214.7039947509766 427.7099914550781 214.7039947509766 428.3259887695313 C 214.7039947509766 428.8389892578125 214.5639953613281 429.3110046386719 214.2839965820313 429.739990234375 C 214.0039978027344 430.1600036621094 213.5789947509766 430.4960021972656 213.0099945068359 430.7479858398438 C 212.4409942626953 430.9909973144531 211.7409973144531 431.1119995117188 210.9100036621094 431.1119995117188 Z M 220.8090057373047 431.1119995117188 C 219.5030059814453 431.1119995117188 218.4850006103516 430.739013671875 217.7570037841797 429.9920043945313 C 217.0290069580078 429.2449951171875 216.6649932861328 428.1719970703125 216.6649932861328 426.7720031738281 L 216.6649932861328 421.2000122070313 L 218.0650024414063 421.2000122070313 L 218.0650024414063 426.7160034179688 C 218.0650024414063 428.8160095214844 218.9850006103516 429.8659973144531 220.822998046875 429.8659973144531 C 221.718994140625 429.8659973144531 222.4049987792969 429.6090087890625 222.8809967041016 429.0960083007813 C 223.3569946289063 428.572998046875 223.5950012207031 427.7799987792969 223.5950012207031 426.7160034179688 L 223.5950012207031 421.2000122070313 L 224.9530029296875 421.2000122070313 L 224.9530029296875 426.7720031738281 C 224.9530029296875 428.1809997558594 224.5890045166016 429.2590026855469 223.8609924316406 430.0060119628906 C 223.1329956054688 430.7430114746094 222.1159973144531 431.1119995117188 220.8090057373047 431.1119995117188 Z M 227.8240051269531 421.2000122070313 L 229.2239990234375 421.2000122070313 L 229.2239990234375 429.7820129394531 L 234.5299987792969 429.7820129394531 L 234.5299987792969 431 L 227.8240051269531 431 L 227.8240051269531 421.2000122070313 Z M 237.1660003662109 422.4179992675781 L 233.8059997558594 422.4179992675781 L 233.8059997558594 421.2000122070313 L 241.9120025634766 421.2000122070313 L 241.9120025634766 422.4179992675781 L 238.552001953125 422.4179992675781 L 238.552001953125 431 L 237.1660003662109 431 L 237.1660003662109 422.4179992675781 Z">
			</path>
		</svg>
		<svg class="Bio-Ref" viewBox="260.18 421.088 58.609 10.024">
			<path id="Bio-Ref" d="M 266.7739868164063 425.9179992675781 C 267.3429870605469 426.0769958496094 267.7909851074219 426.3659973144531 268.1180114746094 426.7860107421875 C 268.4450073242188 427.1969909667969 268.6080017089844 427.718994140625 268.6080017089844 428.35400390625 C 268.6080017089844 429.2030029296875 268.2860107421875 429.8569946289063 267.6419982910156 430.3139953613281 C 267.0069885253906 430.77099609375 266.0790100097656 431 264.8559875488281 431 L 260.1799926757813 431 L 260.1799926757813 421.2000122070313 L 264.5759887695313 421.2000122070313 C 265.6960144042969 421.2000122070313 266.5589904785156 421.4240112304688 267.1659851074219 421.8720092773438 C 267.7820129394531 422.3200073242188 268.0899963378906 422.9410095214844 268.0899963378906 423.7340087890625 C 268.0899963378906 424.2470092773438 267.968994140625 424.6910095214844 267.7260131835938 425.0639953613281 C 267.4930114746094 425.43701171875 267.1749877929688 425.7219848632813 266.7739868164063 425.9179992675781 Z M 261.5799865722656 422.3340148925781 L 261.5799865722656 425.4700012207031 L 264.4500122070313 425.4700012207031 C 265.1690063476563 425.4700012207031 265.718994140625 425.3389892578125 266.1019897460938 425.0780029296875 C 266.4939880371094 424.8070068359375 266.6900024414063 424.4150085449219 266.6900024414063 423.9020080566406 C 266.6900024414063 423.3890075683594 266.4939880371094 423.0010070800781 266.1019897460938 422.739990234375 C 265.718994140625 422.468994140625 265.1690063476563 422.3340148925781 264.4500122070313 422.3340148925781 L 261.5799865722656 422.3340148925781 Z M 264.7999877929688 429.8659973144531 C 265.5929870605469 429.8659973144531 266.1910095214844 429.7349853515625 266.5920104980469 429.4739990234375 C 266.9930114746094 429.2130126953125 267.1940002441406 428.802001953125 267.1940002441406 428.2420043945313 C 267.1940002441406 427.1499938964844 266.39599609375 426.60400390625 264.7999877929688 426.60400390625 L 261.5799865722656 426.60400390625 L 261.5799865722656 429.8659973144531 L 264.7999877929688 429.8659973144531 Z M 270.7760009765625 421.2000122070313 L 272.1759948730469 421.2000122070313 L 272.1759948730469 431 L 270.7760009765625 431 L 270.7760009765625 421.2000122070313 Z M 279.5339965820313 431.1119995117188 C 278.5440063476563 431.1119995117188 277.6530151367188 430.8970031738281 276.8599853515625 430.4679870605469 C 276.0660095214844 430.0289916992188 275.4410095214844 429.427001953125 274.9840087890625 428.6619873046875 C 274.5360107421875 427.8970031738281 274.31201171875 427.0429992675781 274.31201171875 426.1000061035156 C 274.31201171875 425.1570129394531 274.5360107421875 424.3030090332031 274.9840087890625 423.5379943847656 C 275.4410095214844 422.7730102539063 276.0660095214844 422.1749877929688 276.8599853515625 421.7460021972656 C 277.6530151367188 421.3070068359375 278.5440063476563 421.0880126953125 279.5339965820313 421.0880126953125 C 280.5140075683594 421.0880126953125 281.3999938964844 421.3070068359375 282.1940002441406 421.7460021972656 C 282.9869995117188 422.1749877929688 283.6080017089844 422.7730102539063 284.0559997558594 423.5379943847656 C 284.5039978027344 424.2940063476563 284.7279968261719 425.1480102539063 284.7279968261719 426.1000061035156 C 284.7279968261719 427.052001953125 284.5039978027344 427.9110107421875 284.0559997558594 428.6759948730469 C 283.6080017089844 429.4320068359375 282.9869995117188 430.0289916992188 282.1940002441406 430.4679870605469 C 281.3999938964844 430.8970031738281 280.5140075683594 431.1119995117188 279.5339965820313 431.1119995117188 Z M 279.5339965820313 429.8659973144531 C 280.2520141601563 429.8659973144531 280.89599609375 429.7030029296875 281.4660034179688 429.3760070800781 C 282.0440063476563 429.0490112304688 282.4970092773438 428.6010131835938 282.8240051269531 428.0320129394531 C 283.1600036621094 427.4530029296875 283.3280029296875 426.8089904785156 283.3280029296875 426.1000061035156 C 283.3280029296875 425.3909912109375 283.1600036621094 424.7510070800781 282.8240051269531 424.1820068359375 C 282.4970092773438 423.6029968261719 282.0440063476563 423.1510009765625 281.4660034179688 422.8240051269531 C 280.89599609375 422.4970092773438 280.2520141601563 422.3340148925781 279.5339965820313 422.3340148925781 C 278.8150024414063 422.3340148925781 278.1619873046875 422.4970092773438 277.5740051269531 422.8240051269531 C 276.9949951171875 423.1510009765625 276.5379943847656 423.6029968261719 276.2019958496094 424.1820068359375 C 275.875 424.7510070800781 275.7120056152344 425.3909912109375 275.7120056152344 426.1000061035156 C 275.7120056152344 426.8089904785156 275.875 427.4530029296875 276.2019958496094 428.0320129394531 C 276.5379943847656 428.6010131835938 276.9949951171875 429.0490112304688 277.5740051269531 429.3760070800781 C 278.1619873046875 429.7030029296875 278.8150024414063 429.8659973144531 279.5339965820313 429.8659973144531 Z M 286.2909851074219 426.5759887695313 L 290.0570068359375 426.5759887695313 L 290.0570068359375 427.7380065917969 L 286.2909851074219 427.7380065917969 L 286.2909851074219 426.5759887695313 Z M 298.875 431 L 296.760986328125 427.989990234375 C 296.4989929199219 428.0090026855469 296.2940063476563 428.0180053710938 296.1449890136719 428.0180053710938 L 293.7229919433594 428.0180053710938 L 293.7229919433594 431 L 292.322998046875 431 L 292.322998046875 421.2000122070313 L 296.1449890136719 421.2000122070313 C 297.4140014648438 421.2000122070313 298.4129943847656 421.5029907226563 299.1409912109375 422.1099853515625 C 299.8689880371094 422.7170104980469 300.2330017089844 423.552001953125 300.2330017089844 424.6159973144531 C 300.2330017089844 425.3720092773438 300.0459899902344 426.0159912109375 299.6730041503906 426.5480041503906 C 299.2990112304688 427.0799865722656 298.7669982910156 427.4670104980469 298.0769958496094 427.7099914550781 L 300.4010009765625 431 L 298.875 431 Z M 296.1029968261719 426.8280029296875 C 296.989013671875 426.8280029296875 297.6659851074219 426.6369934082031 298.1329956054688 426.2539978027344 C 298.5989990234375 425.8710021972656 298.8330078125 425.3250122070313 298.8330078125 424.6159973144531 C 298.8330078125 423.9070129394531 298.5989990234375 423.364990234375 298.1329956054688 422.9920043945313 C 297.6659851074219 422.6090087890625 296.989013671875 422.4179992675781 296.1029968261719 422.4179992675781 L 293.7229919433594 422.4179992675781 L 293.7229919433594 426.8280029296875 L 296.1029968261719 426.8280029296875 Z M 309.6059875488281 429.7820129394531 L 309.6059875488281 431 L 302.4939880371094 431 L 302.4939880371094 421.2000122070313 L 309.4100036621094 421.2000122070313 L 309.4100036621094 422.4179992675781 L 303.8940124511719 422.4179992675781 L 303.8940124511719 425.4280090332031 L 308.8080139160156 425.4280090332031 L 308.8080139160156 426.6180114746094 L 303.8940124511719 426.6180114746094 L 303.8940124511719 429.7820129394531 L 309.6059875488281 429.7820129394531 Z M 313.2730102539063 422.4179992675781 L 313.2730102539063 425.8340148925781 L 318.18701171875 425.8340148925781 L 318.18701171875 427.0379943847656 L 313.2730102539063 427.0379943847656 L 313.2730102539063 431 L 311.8729858398438 431 L 311.8729858398438 421.2000122070313 L 318.7890014648438 421.2000122070313 L 318.7890014648438 422.4179992675781 L 313.2730102539063 422.4179992675781 Z">
			</path>
		</svg>
		<svg class="Differential_Leucocyte_Count" viewBox="69.038 404.088 250.339 10.024">
			<path id="Differential_Leucocyte_Count" d="M 69.03839874267578 404.2000122070313 L 73.16840362548828 404.2000122070313 C 74.20439910888672 404.2000122070313 75.12370300292969 404.4049987792969 75.92639923095703 404.8160095214844 C 76.72899627685547 405.2269897460938 77.34970092773438 405.8049926757813 77.78839874267578 406.552001953125 C 78.23639678955078 407.2890014648438 78.46040344238281 408.1390075683594 78.46040344238281 409.1000061035156 C 78.46040344238281 410.0610046386719 78.23639678955078 410.9150085449219 77.78839874267578 411.6619873046875 C 77.34970092773438 412.3989868164063 76.72899627685547 412.9729919433594 75.92639923095703 413.3840026855469 C 75.12370300292969 413.7950134277344 74.20439910888672 414 73.16840362548828 414 L 69.03839874267578 414 L 69.03839874267578 404.2000122070313 Z M 73.08439636230469 412.7820129394531 C 73.87770080566406 412.7820129394531 74.572998046875 412.6279907226563 75.17040252685547 412.3200073242188 C 75.77700042724609 412.0119934082031 76.24369812011719 411.5830078125 76.57039642333984 411.0320129394531 C 76.89700317382813 410.4719848632813 77.06040191650391 409.8280029296875 77.06040191650391 409.1000061035156 C 77.06040191650391 408.3720092773438 76.89700317382813 407.7330017089844 76.57039642333984 407.1820068359375 C 76.24369812011719 406.6220092773438 75.77700042724609 406.18798828125 75.17040252685547 405.8800048828125 C 74.572998046875 405.5719909667969 73.87770080566406 405.4179992675781 73.08439636230469 405.4179992675781 L 70.43840026855469 405.4179992675781 L 70.43840026855469 412.7820129394531 L 73.08439636230469 412.7820129394531 Z M 80.60479736328125 404.2000122070313 L 82.00479888916016 404.2000122070313 L 82.00479888916016 414 L 80.60479736328125 414 L 80.60479736328125 404.2000122070313 Z M 86.33879852294922 405.4179992675781 L 86.33879852294922 408.8340148925781 L 91.25279998779297 408.8340148925781 L 91.25279998779297 410.0379943847656 L 86.33879852294922 410.0379943847656 L 86.33879852294922 414 L 84.93879699707031 414 L 84.93879699707031 404.2000122070313 L 91.85479736328125 404.2000122070313 L 91.85479736328125 405.4179992675781 L 86.33879852294922 405.4179992675781 Z M 95.22550201416016 405.4179992675781 L 95.22550201416016 408.8340148925781 L 100.1389999389648 408.8340148925781 L 100.1389999389648 410.0379943847656 L 95.22550201416016 410.0379943847656 L 95.22550201416016 414 L 93.82550048828125 414 L 93.82550048828125 404.2000122070313 L 100.7409973144531 404.2000122070313 L 100.7409973144531 405.4179992675781 L 95.22550201416016 405.4179992675781 Z M 109.8239974975586 412.7820129394531 L 109.8239974975586 414 L 102.7119979858398 414 L 102.7119979858398 404.2000122070313 L 109.6279983520508 404.2000122070313 L 109.6279983520508 405.4179992675781 L 104.1119995117188 405.4179992675781 L 104.1119995117188 408.4280090332031 L 109.0260009765625 408.4280090332031 L 109.0260009765625 409.6180114746094 L 104.1119995117188 409.6180114746094 L 104.1119995117188 412.7820129394531 L 109.8239974975586 412.7820129394531 Z M 118.6429977416992 414 L 116.5289993286133 410.989990234375 C 116.2679977416992 411.0090026855469 116.0619964599609 411.0180053710938 115.9130020141602 411.0180053710938 L 113.4909973144531 411.0180053710938 L 113.4909973144531 414 L 112.0910034179688 414 L 112.0910034179688 404.2000122070313 L 115.9130020141602 404.2000122070313 C 117.181999206543 404.2000122070313 118.1809997558594 404.5029907226563 118.9089965820313 405.1099853515625 C 119.6370010375977 405.7170104980469 120.0009994506836 406.552001953125 120.0009994506836 407.6159973144531 C 120.0009994506836 408.3720092773438 119.8140029907227 409.0159912109375 119.4410018920898 409.5480041503906 C 119.068000793457 410.0799865722656 118.536003112793 410.4670104980469 117.8450012207031 410.7099914550781 L 120.1689987182617 414 L 118.6429977416992 414 Z M 115.8710021972656 409.8280029296875 C 116.7580032348633 409.8280029296875 117.4339981079102 409.6369934082031 117.9010009765625 409.2539978027344 C 118.3679962158203 408.8710021972656 118.6009979248047 408.3250122070313 118.6009979248047 407.6159973144531 C 118.6009979248047 406.9070129394531 118.3679962158203 406.364990234375 117.9010009765625 405.9920043945313 C 117.4339981079102 405.6090087890625 116.7580032348633 405.4179992675781 115.8710021972656 405.4179992675781 L 113.4909973144531 405.4179992675781 L 113.4909973144531 409.8280029296875 L 115.8710021972656 409.8280029296875 Z M 129.375 412.7820129394531 L 129.375 414 L 122.2630004882813 414 L 122.2630004882813 404.2000122070313 L 129.1790008544922 404.2000122070313 L 129.1790008544922 405.4179992675781 L 123.6630020141602 405.4179992675781 L 123.6630020141602 408.4280090332031 L 128.5769958496094 408.4280090332031 L 128.5769958496094 409.6180114746094 L 123.6630020141602 409.6180114746094 L 123.6630020141602 412.7820129394531 L 129.375 412.7820129394531 Z M 140.0700073242188 404.2000122070313 L 140.0700073242188 414 L 138.9219970703125 414 L 133.0420074462891 406.6919860839844 L 133.0420074462891 414 L 131.6419982910156 414 L 131.6419982910156 404.2000122070313 L 132.7899932861328 404.2000122070313 L 138.6699981689453 411.5079956054688 L 138.6699981689453 404.2000122070313 L 140.0700073242188 404.2000122070313 Z M 144.9490051269531 405.4179992675781 L 141.5890045166016 405.4179992675781 L 141.5890045166016 404.2000122070313 L 149.6950073242188 404.2000122070313 L 149.6950073242188 405.4179992675781 L 146.3350067138672 405.4179992675781 L 146.3350067138672 414 L 144.9490051269531 414 L 144.9490051269531 405.4179992675781 Z M 151.2200012207031 404.2000122070313 L 152.6199951171875 404.2000122070313 L 152.6199951171875 414 L 151.2200012207031 414 L 151.2200012207031 404.2000122070313 Z M 161.7980041503906 411.5499877929688 L 156.5899963378906 411.5499877929688 L 155.5119934082031 414 L 154.0700073242188 414 L 158.5079956054688 404.2000122070313 L 159.8939971923828 404.2000122070313 L 164.3459930419922 414 L 162.8760070800781 414 L 161.7980041503906 411.5499877929688 Z M 161.3079986572266 410.4299926757813 L 159.1940002441406 405.6279907226563 L 157.0800018310547 410.4299926757813 L 161.3079986572266 410.4299926757813 Z M 165.8079986572266 404.2000122070313 L 167.2079925537109 404.2000122070313 L 167.2079925537109 412.7820129394531 L 172.5140075683594 412.7820129394531 L 172.5140075683594 414 L 165.8079986572266 414 L 165.8079986572266 404.2000122070313 Z M 177.8800048828125 404.2000122070313 L 179.2799987792969 404.2000122070313 L 179.2799987792969 412.7820129394531 L 184.5859985351563 412.7820129394531 L 184.5859985351563 414 L 177.8800048828125 414 L 177.8800048828125 404.2000122070313 Z M 193.3049926757813 412.7820129394531 L 193.3049926757813 414 L 186.1929931640625 414 L 186.1929931640625 404.2000122070313 L 193.1089935302734 404.2000122070313 L 193.1089935302734 405.4179992675781 L 187.5930023193359 405.4179992675781 L 187.5930023193359 408.4280090332031 L 192.5070037841797 408.4280090332031 L 192.5070037841797 409.6180114746094 L 187.5930023193359 409.6180114746094 L 187.5930023193359 412.7820129394531 L 193.3049926757813 412.7820129394531 Z M 199.6320037841797 414.1119995117188 C 198.3249969482422 414.1119995117188 197.3079986572266 413.739013671875 196.5800018310547 412.9920043945313 C 195.8520050048828 412.2449951171875 195.4880065917969 411.1719970703125 195.4880065917969 409.7720031738281 L 195.4880065917969 404.2000122070313 L 196.8880004882813 404.2000122070313 L 196.8880004882813 409.7160034179688 C 196.8880004882813 411.8160095214844 197.8070068359375 412.8659973144531 199.64599609375 412.8659973144531 C 200.5420074462891 412.8659973144531 201.2279968261719 412.6090087890625 201.7039947509766 412.0960083007813 C 202.1799926757813 411.572998046875 202.4179992675781 410.7799987792969 202.4179992675781 409.7160034179688 L 202.4179992675781 404.2000122070313 L 203.7760009765625 404.2000122070313 L 203.7760009765625 409.7720031738281 C 203.7760009765625 411.1809997558594 203.4120025634766 412.2590026855469 202.6840057373047 413.0060119628906 C 201.9559936523438 413.7430114746094 200.9380035400391 414.1119995117188 199.6320037841797 414.1119995117188 Z M 211.0279998779297 414.1119995117188 C 210.0480041503906 414.1119995117188 209.1609954833984 413.8970031738281 208.3679962158203 413.4679870605469 C 207.5839996337891 413.0289916992188 206.9680023193359 412.4320068359375 206.5200042724609 411.6759948730469 C 206.0720062255859 410.9110107421875 205.8480072021484 410.052001953125 205.8480072021484 409.1000061035156 C 205.8480072021484 408.1480102539063 206.0720062255859 407.2940063476563 206.5200042724609 406.5379943847656 C 206.9680023193359 405.7730102539063 207.5879974365234 405.1749877929688 208.3820037841797 404.7460021972656 C 209.1750030517578 404.3070068359375 210.0619964599609 404.0880126953125 211.0420074462891 404.0880126953125 C 211.8070068359375 404.0880126953125 212.5070037841797 404.218994140625 213.1419982910156 404.4800109863281 C 213.7760009765625 404.7319946289063 214.3179931640625 405.1099853515625 214.7660064697266 405.614013671875 L 213.8560028076172 406.4960021972656 C 213.1179962158203 405.7210083007813 212.1990051269531 405.3340148925781 211.0980072021484 405.3340148925781 C 210.3699951171875 405.3340148925781 209.7120056152344 405.4970092773438 209.1239929199219 405.8240051269531 C 208.5359954833984 406.1510009765625 208.0740051269531 406.6029968261719 207.7380065917969 407.1820068359375 C 207.4109954833984 407.7510070800781 207.2480010986328 408.3909912109375 207.2480010986328 409.1000061035156 C 207.2480010986328 409.8089904785156 207.4109954833984 410.4530029296875 207.7380065917969 411.0320129394531 C 208.0740051269531 411.6010131835938 208.5359954833984 412.0490112304688 209.1239929199219 412.3760070800781 C 209.7120056152344 412.7030029296875 210.3699951171875 412.8659973144531 211.0980072021484 412.8659973144531 C 212.1900024414063 412.8659973144531 213.1089935302734 412.4739990234375 213.8560028076172 411.6900024414063 L 214.7660064697266 412.5719909667969 C 214.3179931640625 413.0759887695313 213.7720031738281 413.4590148925781 213.1280059814453 413.7200012207031 C 212.4929962158203 413.9809875488281 211.7929992675781 414.1119995117188 211.0279998779297 414.1119995117188 Z M 220.9819946289063 414.1119995117188 C 219.9929962158203 414.1119995117188 219.1009979248047 413.8970031738281 218.3079986572266 413.4679870605469 C 217.5149993896484 413.0289916992188 216.8890075683594 412.427001953125 216.4320068359375 411.6619873046875 C 215.9839935302734 410.8970031738281 215.7599945068359 410.0429992675781 215.7599945068359 409.1000061035156 C 215.7599945068359 408.1570129394531 215.9839935302734 407.3030090332031 216.4320068359375 406.5379943847656 C 216.8890075683594 405.7730102539063 217.5149993896484 405.1749877929688 218.3079986572266 404.7460021972656 C 219.1009979248047 404.3070068359375 219.9929962158203 404.0880126953125 220.9819946289063 404.0880126953125 C 221.9620056152344 404.0880126953125 222.8489990234375 404.3070068359375 223.6419982910156 404.7460021972656 C 224.4349975585938 405.1749877929688 225.0559997558594 405.7730102539063 225.5039978027344 406.5379943847656 C 225.9519958496094 407.2940063476563 226.1759948730469 408.1480102539063 226.1759948730469 409.1000061035156 C 226.1759948730469 410.052001953125 225.9519958496094 410.9110107421875 225.5039978027344 411.6759948730469 C 225.0559997558594 412.4320068359375 224.4349975585938 413.0289916992188 223.6419982910156 413.4679870605469 C 222.8489990234375 413.8970031738281 221.9620056152344 414.1119995117188 220.9819946289063 414.1119995117188 Z M 220.9819946289063 412.8659973144531 C 221.7010040283203 412.8659973144531 222.3450012207031 412.7030029296875 222.9140014648438 412.3760070800781 C 223.4929962158203 412.0490112304688 223.9450073242188 411.6010131835938 224.2720031738281 411.0320129394531 C 224.6080017089844 410.4530029296875 224.7760009765625 409.8089904785156 224.7760009765625 409.1000061035156 C 224.7760009765625 408.3909912109375 224.6080017089844 407.7510070800781 224.2720031738281 407.1820068359375 C 223.9450073242188 406.6029968261719 223.4929962158203 406.1510009765625 222.9140014648438 405.8240051269531 C 222.3450012207031 405.4970092773438 221.7010040283203 405.3340148925781 220.9819946289063 405.3340148925781 C 220.2630004882813 405.3340148925781 219.6100006103516 405.4970092773438 219.0220031738281 405.8240051269531 C 218.4429931640625 406.1510009765625 217.9859924316406 406.6029968261719 217.6499938964844 407.1820068359375 C 217.322998046875 407.7510070800781 217.1600036621094 408.3909912109375 217.1600036621094 409.1000061035156 C 217.1600036621094 409.8089904785156 217.322998046875 410.4530029296875 217.6499938964844 411.0320129394531 C 217.9859924316406 411.6010131835938 218.4429931640625 412.0490112304688 219.0220031738281 412.3760070800781 C 219.6100006103516 412.7030029296875 220.2630004882813 412.8659973144531 220.9819946289063 412.8659973144531 Z M 232.697998046875 414.1119995117188 C 231.7180023193359 414.1119995117188 230.8309936523438 413.8970031738281 230.0379943847656 413.4679870605469 C 229.2539978027344 413.0289916992188 228.6380004882813 412.4320068359375 228.1900024414063 411.6759948730469 C 227.7420043945313 410.9110107421875 227.5180053710938 410.052001953125 227.5180053710938 409.1000061035156 C 227.5180053710938 408.1480102539063 227.7420043945313 407.2940063476563 228.1900024414063 406.5379943847656 C 228.6380004882813 405.7730102539063 229.2579956054688 405.1749877929688 230.052001953125 404.7460021972656 C 230.8450012207031 404.3070068359375 231.7319946289063 404.0880126953125 232.7120056152344 404.0880126953125 C 233.4770050048828 404.0880126953125 234.177001953125 404.218994140625 234.8119964599609 404.4800109863281 C 235.4459991455078 404.7319946289063 235.9880065917969 405.1099853515625 236.4360046386719 405.614013671875 L 235.5260009765625 406.4960021972656 C 234.7879943847656 405.7210083007813 233.8690032958984 405.3340148925781 232.7680053710938 405.3340148925781 C 232.0399932861328 405.3340148925781 231.3820037841797 405.4970092773438 230.7940063476563 405.8240051269531 C 230.2059936523438 406.1510009765625 229.7440032958984 406.6029968261719 229.4080047607422 407.1820068359375 C 229.0809936523438 407.7510070800781 228.9179992675781 408.3909912109375 228.9179992675781 409.1000061035156 C 228.9179992675781 409.8089904785156 229.0809936523438 410.4530029296875 229.4080047607422 411.0320129394531 C 229.7440032958984 411.6010131835938 230.2059936523438 412.0490112304688 230.7940063476563 412.3760070800781 C 231.3820037841797 412.7030029296875 232.0399932861328 412.8659973144531 232.7680053710938 412.8659973144531 C 233.8600006103516 412.8659973144531 234.7790069580078 412.4739990234375 235.5260009765625 411.6900024414063 L 236.4360046386719 412.5719909667969 C 235.9880065917969 413.0759887695313 235.4420013427734 413.4590148925781 234.7980041503906 413.7200012207031 C 234.1629943847656 413.9809875488281 233.4629974365234 414.1119995117188 232.697998046875 414.1119995117188 Z M 242.02099609375 410.6119995117188 L 242.02099609375 414 L 240.6349945068359 414 L 240.6349945068359 410.5840148925781 L 236.7429962158203 404.2000122070313 L 238.2409973144531 404.2000122070313 L 241.3769989013672 409.3659973144531 L 244.5269927978516 404.2000122070313 L 245.9129943847656 404.2000122070313 L 242.02099609375 410.6119995117188 Z M 249.1699981689453 405.4179992675781 L 245.8099975585938 405.4179992675781 L 245.8099975585938 404.2000122070313 L 253.9160003662109 404.2000122070313 L 253.9160003662109 405.4179992675781 L 250.5559997558594 405.4179992675781 L 250.5559997558594 414 L 249.1699981689453 414 L 249.1699981689453 405.4179992675781 Z M 262.5530090332031 412.7820129394531 L 262.5530090332031 414 L 255.4409942626953 414 L 255.4409942626953 404.2000122070313 L 262.3569946289063 404.2000122070313 L 262.3569946289063 405.4179992675781 L 256.8410034179688 405.4179992675781 L 256.8410034179688 408.4280090332031 L 261.7550048828125 408.4280090332031 L 261.7550048828125 409.6180114746094 L 256.8410034179688 409.6180114746094 L 256.8410034179688 412.7820129394531 L 262.5530090332031 412.7820129394531 Z M 272.9609985351563 414.1119995117188 C 271.9809875488281 414.1119995117188 271.0950012207031 413.8970031738281 270.3009948730469 413.4679870605469 C 269.5169982910156 413.0289916992188 268.9010009765625 412.4320068359375 268.4530029296875 411.6759948730469 C 268.0050048828125 410.9110107421875 267.781005859375 410.052001953125 267.781005859375 409.1000061035156 C 267.781005859375 408.1480102539063 268.0050048828125 407.2940063476563 268.4530029296875 406.5379943847656 C 268.9010009765625 405.7730102539063 269.5220031738281 405.1749877929688 270.3150024414063 404.7460021972656 C 271.1090087890625 404.3070068359375 271.9949951171875 404.0880126953125 272.9750061035156 404.0880126953125 C 273.7409973144531 404.0880126953125 274.4410095214844 404.218994140625 275.0750122070313 404.4800109863281 C 275.7099914550781 404.7319946289063 276.2510070800781 405.1099853515625 276.6990051269531 405.614013671875 L 275.7890014648438 406.4960021972656 C 275.052001953125 405.7210083007813 274.1329956054688 405.3340148925781 273.031005859375 405.3340148925781 C 272.3030090332031 405.3340148925781 271.6449890136719 405.4970092773438 271.0570068359375 405.8240051269531 C 270.468994140625 406.1510009765625 270.0069885253906 406.6029968261719 269.6709899902344 407.1820068359375 C 269.3450012207031 407.7510070800781 269.1809997558594 408.3909912109375 269.1809997558594 409.1000061035156 C 269.1809997558594 409.8089904785156 269.3450012207031 410.4530029296875 269.6709899902344 411.0320129394531 C 270.0069885253906 411.6010131835938 270.468994140625 412.0490112304688 271.0570068359375 412.3760070800781 C 271.6449890136719 412.7030029296875 272.3030090332031 412.8659973144531 273.031005859375 412.8659973144531 C 274.1229858398438 412.8659973144531 275.0429992675781 412.4739990234375 275.7890014648438 411.6900024414063 L 276.6990051269531 412.5719909667969 C 276.2510070800781 413.0759887695313 275.7049865722656 413.4590148925781 275.0610046386719 413.7200012207031 C 274.427001953125 413.9809875488281 273.7269897460938 414.1119995117188 272.9609985351563 414.1119995117188 Z M 282.9150085449219 414.1119995117188 C 281.9259948730469 414.1119995117188 281.0350036621094 413.8970031738281 280.2409973144531 413.4679870605469 C 279.447998046875 413.0289916992188 278.822998046875 412.427001953125 278.364990234375 411.6619873046875 C 277.9169921875 410.8970031738281 277.6929931640625 410.0429992675781 277.6929931640625 409.1000061035156 C 277.6929931640625 408.1570129394531 277.9169921875 407.3030090332031 278.364990234375 406.5379943847656 C 278.822998046875 405.7730102539063 279.447998046875 405.1749877929688 280.2409973144531 404.7460021972656 C 281.0350036621094 404.3070068359375 281.9259948730469 404.0880126953125 282.9150085449219 404.0880126953125 C 283.8949890136719 404.0880126953125 284.7820129394531 404.3070068359375 285.5750122070313 404.7460021972656 C 286.3689880371094 405.1749877929688 286.989013671875 405.7730102539063 287.43701171875 406.5379943847656 C 287.885009765625 407.2940063476563 288.1090087890625 408.1480102539063 288.1090087890625 409.1000061035156 C 288.1090087890625 410.052001953125 287.885009765625 410.9110107421875 287.43701171875 411.6759948730469 C 286.989013671875 412.4320068359375 286.3689880371094 413.0289916992188 285.5750122070313 413.4679870605469 C 284.7820129394531 413.8970031738281 283.8949890136719 414.1119995117188 282.9150085449219 414.1119995117188 Z M 282.9150085449219 412.8659973144531 C 283.6340026855469 412.8659973144531 284.2780151367188 412.7030029296875 284.8469848632813 412.3760070800781 C 285.4259948730469 412.0490112304688 285.8789978027344 411.6010131835938 286.2049865722656 411.0320129394531 C 286.5409851074219 410.4530029296875 286.7090148925781 409.8089904785156 286.7090148925781 409.1000061035156 C 286.7090148925781 408.3909912109375 286.5409851074219 407.7510070800781 286.2049865722656 407.1820068359375 C 285.8789978027344 406.6029968261719 285.4259948730469 406.1510009765625 284.8469848632813 405.8240051269531 C 284.2780151367188 405.4970092773438 283.6340026855469 405.3340148925781 282.9150085449219 405.3340148925781 C 282.1969909667969 405.3340148925781 281.5429992675781 405.4970092773438 280.9549865722656 405.8240051269531 C 280.3770141601563 406.1510009765625 279.9190063476563 406.6029968261719 279.5830078125 407.1820068359375 C 279.2569885253906 407.7510070800781 279.0929870605469 408.3909912109375 279.0929870605469 409.1000061035156 C 279.0929870605469 409.8089904785156 279.2569885253906 410.4530029296875 279.5830078125 411.0320129394531 C 279.9190063476563 411.6010131835938 280.3770141601563 412.0490112304688 280.9549865722656 412.3760070800781 C 281.5429992675781 412.7030029296875 282.1969909667969 412.8659973144531 282.9150085449219 412.8659973144531 Z M 294.3089904785156 414.1119995117188 C 293.0029907226563 414.1119995117188 291.9849853515625 413.739013671875 291.2569885253906 412.9920043945313 C 290.5289916992188 412.2449951171875 290.1650085449219 411.1719970703125 290.1650085449219 409.7720031738281 L 290.1650085449219 404.2000122070313 L 291.5650024414063 404.2000122070313 L 291.5650024414063 409.7160034179688 C 291.5650024414063 411.8160095214844 292.4849853515625 412.8659973144531 294.322998046875 412.8659973144531 C 295.218994140625 412.8659973144531 295.9049987792969 412.6090087890625 296.3810119628906 412.0960083007813 C 296.8569946289063 411.572998046875 297.0950012207031 410.7799987792969 297.0950012207031 409.7160034179688 L 297.0950012207031 404.2000122070313 L 298.4530029296875 404.2000122070313 L 298.4530029296875 409.7720031738281 C 298.4530029296875 411.1809997558594 298.0889892578125 412.2590026855469 297.3609924316406 413.0060119628906 C 296.6329956054688 413.7430114746094 295.6159973144531 414.1119995117188 294.3089904785156 414.1119995117188 Z M 309.7520141601563 404.2000122070313 L 309.7520141601563 414 L 308.60400390625 414 L 302.7239990234375 406.6919860839844 L 302.7239990234375 414 L 301.3240051269531 414 L 301.3240051269531 404.2000122070313 L 302.4719848632813 404.2000122070313 L 308.3519897460938 411.5079956054688 L 308.3519897460938 404.2000122070313 L 309.7520141601563 404.2000122070313 Z M 314.6310119628906 405.4179992675781 L 311.27099609375 405.4179992675781 L 311.27099609375 404.2000122070313 L 319.3770141601563 404.2000122070313 L 319.3770141601563 405.4179992675781 L 316.0169982910156 405.4179992675781 L 316.0169982910156 414 L 314.6310119628906 414 L 314.6310119628906 405.4179992675781 Z">
			</path>
		</svg>
	</div>
	<div id="Primary">
		<svg class="Rectangle">
			<rect id="Rectangle" rx="21" ry="21" x="0" y="0" width="535" height="112">
			</rect>
		</svg>
		<svg class="Platelet_Unit" viewBox="314.634 348.844 112.831 16.956">
			<path id="Platelet_Unit" d="M 314.6340026855469 350.6440124511719 L 315.9119873046875 350.6440124511719 L 315.9119873046875 364 L 314.6340026855469 364 L 314.6340026855469 350.6440124511719 Z M 322.7799987792969 354.4599914550781 C 324.0159912109375 354.4599914550781 324.9639892578125 354.7720031738281 325.6239929199219 355.39599609375 C 326.2839965820313 356.0079956054688 326.614013671875 356.9200134277344 326.614013671875 358.1319885253906 L 326.614013671875 364 L 325.3900146484375 364 L 325.3900146484375 362.5239868164063 C 325.1019897460938 363.0159912109375 324.6759948730469 363.3999938964844 324.1119995117188 363.6759948730469 C 323.5599975585938 363.9519958496094 322.8999938964844 364.0899963378906 322.1319885253906 364.0899963378906 C 321.0759887695313 364.0899963378906 320.2359924316406 363.8380126953125 319.6119995117188 363.3340148925781 C 318.9880065917969 362.8299865722656 318.6759948730469 362.1640014648438 318.6759948730469 361.3359985351563 C 318.6759948730469 360.5320129394531 318.9639892578125 359.8840026855469 319.5400085449219 359.3919982910156 C 320.1279907226563 358.8999938964844 321.0580139160156 358.6539916992188 322.3299865722656 358.6539916992188 L 325.3359985351563 358.6539916992188 L 325.3359985351563 358.0780029296875 C 325.3359985351563 357.2619934082031 325.1080017089844 356.6440124511719 324.6520080566406 356.2239990234375 C 324.1960144042969 355.7919921875 323.5299987792969 355.5759887695313 322.6539916992188 355.5759887695313 C 322.0539855957031 355.5759887695313 321.4779968261719 355.6780090332031 320.9259948730469 355.8819885253906 C 320.3739929199219 356.0740051269531 319.8999938964844 356.343994140625 319.5039978027344 356.6919860839844 L 318.9280090332031 355.7380065917969 C 319.4079895019531 355.3299865722656 319.9840087890625 355.0180053710938 320.656005859375 354.802001953125 C 321.3280029296875 354.5740051269531 322.0360107421875 354.4599914550781 322.7799987792969 354.4599914550781 Z M 322.3299865722656 363.0820007324219 C 323.0499877929688 363.0820007324219 323.6679992675781 362.9200134277344 324.1839904785156 362.5960083007813 C 324.7000122070313 362.260009765625 325.0840148925781 361.7799987792969 325.3359985351563 361.156005859375 L 325.3359985351563 359.6080017089844 L 322.3659973144531 359.6080017089844 C 320.7460021972656 359.6080017089844 319.9360046386719 360.1719970703125 319.9360046386719 361.2999877929688 C 319.9360046386719 361.8519897460938 320.14599609375 362.2900085449219 320.5660095214844 362.614013671875 C 320.9859924316406 362.9259948730469 321.5740051269531 363.0820007324219 322.3299865722656 363.0820007324219 Z M 333.5950012207031 359.2479858398438 L 331.3630065917969 361.2999877929688 L 331.3630065917969 364 L 330.0849914550781 364 L 330.0849914550781 350.6440124511719 L 331.3630065917969 350.6440124511719 L 331.3630065917969 359.697998046875 L 337.0150146484375 354.5320129394531 L 338.5989990234375 354.5320129394531 L 334.5490112304688 358.4020080566406 L 338.9769897460938 364 L 337.4110107421875 364 L 333.5950012207031 359.2479858398438 Z M 345.718994140625 354.4599914550781 C 346.9070129394531 354.4599914550781 347.8489990234375 354.8080139160156 348.5450134277344 355.5039978027344 C 349.2529907226563 356.18798828125 349.6069946289063 357.1900024414063 349.6069946289063 358.510009765625 L 349.6069946289063 364 L 348.3290100097656 364 L 348.3290100097656 358.635986328125 C 348.3290100097656 357.6520080566406 348.0830078125 356.9020080566406 347.5910034179688 356.385986328125 C 347.0989990234375 355.8699951171875 346.3970031738281 355.6119995117188 345.4849853515625 355.6119995117188 C 344.4649963378906 355.6119995117188 343.6549987792969 355.9179992675781 343.0549926757813 356.5299987792969 C 342.4670104980469 357.1300048828125 342.1730041503906 357.9639892578125 342.1730041503906 359.0320129394531 L 342.1730041503906 364 L 340.8949890136719 364 L 340.8949890136719 350.6440124511719 L 342.1730041503906 350.6440124511719 L 342.1730041503906 356.18798828125 C 342.52099609375 355.635986328125 343.0010070800781 355.2099914550781 343.6130065917969 354.9100036621094 C 344.2250061035156 354.6099853515625 344.927001953125 354.4599914550781 345.718994140625 354.4599914550781 Z M 355.614990234375 364.0899963378906 C 354.8469848632813 364.0899963378906 354.1090087890625 363.9819946289063 353.4010009765625 363.7659912109375 C 352.7049865722656 363.5379943847656 352.1589965820313 363.2560119628906 351.7630004882813 362.9200134277344 L 352.3389892578125 361.9119873046875 C 352.7349853515625 362.2239990234375 353.2330017089844 362.4819946289063 353.8330078125 362.6860046386719 C 354.4330139160156 362.8779907226563 355.0570068359375 362.9739990234375 355.7049865722656 362.9739990234375 C 356.5690002441406 362.9739990234375 357.2049865722656 362.8420104980469 357.6130065917969 362.5780029296875 C 358.0329895019531 362.302001953125 358.2430114746094 361.9179992675781 358.2430114746094 361.4259948730469 C 358.2430114746094 361.0780029296875 358.1289978027344 360.8080139160156 357.9010009765625 360.6159973144531 C 357.6730041503906 360.4119873046875 357.385009765625 360.2619934082031 357.0369873046875 360.1659851074219 C 356.6889953613281 360.0580139160156 356.2269897460938 359.9559936523438 355.6510009765625 359.8599853515625 C 354.8829956054688 359.7160034179688 354.2650146484375 359.5719909667969 353.7969970703125 359.4280090332031 C 353.3290100097656 359.2720031738281 352.927001953125 359.0140075683594 352.5910034179688 358.6539916992188 C 352.2669982910156 358.2940063476563 352.1050109863281 357.7959899902344 352.1050109863281 357.1600036621094 C 352.1050109863281 356.3680114746094 352.4349975585938 355.7200012207031 353.0950012207031 355.2160034179688 C 353.7550048828125 354.7120056152344 354.6730041503906 354.4599914550781 355.8489990234375 354.4599914550781 C 356.4609985351563 354.4599914550781 357.072998046875 354.5440063476563 357.6849975585938 354.7120056152344 C 358.2969970703125 354.8680114746094 358.8009948730469 355.0780029296875 359.1969909667969 355.3420104980469 L 358.6390075683594 356.3680114746094 C 357.8590087890625 355.8280029296875 356.9289855957031 355.5580139160156 355.8489990234375 355.5580139160156 C 355.0329895019531 355.5580139160156 354.4150085449219 355.7019958496094 353.9949951171875 355.989990234375 C 353.5870056152344 356.2780151367188 353.3829956054688 356.656005859375 353.3829956054688 357.1239929199219 C 353.3829956054688 357.4840087890625 353.4970092773438 357.7720031738281 353.7250061035156 357.9880065917969 C 353.9649963378906 358.2040100097656 354.2590026855469 358.3659973144531 354.6069946289063 358.4739990234375 C 354.9549865722656 358.5700073242188 355.4349975585938 358.6719970703125 356.0469970703125 358.7799987792969 C 356.8030090332031 358.9240112304688 357.4089965820313 359.0679931640625 357.864990234375 359.2120056152344 C 358.3210144042969 359.3559875488281 358.7109985351563 359.6019897460938 359.0350036621094 359.9500122070313 C 359.3590087890625 360.2980041503906 359.52099609375 360.7780151367188 359.52099609375 361.3900146484375 C 359.52099609375 362.2179870605469 359.1730041503906 362.8779907226563 358.4769897460938 363.3699951171875 C 357.7929992675781 363.8500061035156 356.8389892578125 364.0899963378906 355.614990234375 364.0899963378906 Z M 365.5920104980469 348.843994140625 L 366.7619934082031 348.843994140625 L 360.8219909667969 365.7999877929688 L 359.6520080566406 365.7999877929688 L 365.5920104980469 348.843994140625 Z M 370.6059875488281 364.0899963378906 C 369.6700134277344 364.0899963378906 368.8299865722656 363.885986328125 368.0859985351563 363.4779968261719 C 367.35400390625 363.0700073242188 366.7780151367188 362.5 366.3580017089844 361.7680053710938 C 365.93798828125 361.0239868164063 365.7279968261719 360.1900024414063 365.7279968261719 359.2659912109375 C 365.7279968261719 358.3420104980469 365.93798828125 357.5140075683594 366.3580017089844 356.7820129394531 C 366.7780151367188 356.0499877929688 367.35400390625 355.4800109863281 368.0859985351563 355.0719909667969 C 368.8299865722656 354.6640014648438 369.6700134277344 354.4599914550781 370.6059875488281 354.4599914550781 C 371.4219970703125 354.4599914550781 372.1480102539063 354.6220092773438 372.7839965820313 354.9460144042969 C 373.4320068359375 355.2579956054688 373.9419860839844 355.7200012207031 374.3139953613281 356.3320007324219 L 373.3599853515625 356.9800109863281 C 373.0480041503906 356.5119934082031 372.6520080566406 356.1640014648438 372.1719970703125 355.9360046386719 C 371.6919860839844 355.6960144042969 371.1700134277344 355.5759887695313 370.6059875488281 355.5759887695313 C 369.9219970703125 355.5759887695313 369.3039855957031 355.7319946289063 368.7520141601563 356.0440063476563 C 368.2120056152344 356.343994140625 367.7860107421875 356.7760009765625 367.4739990234375 357.3399963378906 C 367.1740112304688 357.9039916992188 367.0239868164063 358.5459899902344 367.0239868164063 359.2659912109375 C 367.0239868164063 359.9979858398438 367.1740112304688 360.64599609375 367.4739990234375 361.2099914550781 C 367.7860107421875 361.7619934082031 368.2120056152344 362.1940002441406 368.7520141601563 362.5060119628906 C 369.3039855957031 362.8059997558594 369.9219970703125 362.9559936523438 370.6059875488281 362.9559936523438 C 371.1700134277344 362.9559936523438 371.6919860839844 362.8420104980469 372.1719970703125 362.614013671875 C 372.6520080566406 362.385986328125 373.0480041503906 362.0379943847656 373.3599853515625 361.5700073242188 L 374.3139953613281 362.2179870605469 C 373.9419860839844 362.8299865722656 373.4320068359375 363.2980041503906 372.7839965820313 363.6220092773438 C 372.135986328125 363.9339904785156 371.4100036621094 364.0899963378906 370.6059875488281 364.0899963378906 Z M 385.3569946289063 354.5320129394531 L 385.3569946289063 364 L 384.1329956054688 364 L 384.1329956054688 362.2720031738281 C 383.7969970703125 362.8479919433594 383.3349914550781 363.2980041503906 382.7470092773438 363.6220092773438 C 382.1589965820313 363.9339904785156 381.4869995117188 364.0899963378906 380.7309875488281 364.0899963378906 C 379.4949951171875 364.0899963378906 378.5169982910156 363.7479858398438 377.7969970703125 363.0639953613281 C 377.0889892578125 362.3680114746094 376.7349853515625 361.35400390625 376.7349853515625 360.0220031738281 L 376.7349853515625 354.5320129394531 L 378.0130004882813 354.5320129394531 L 378.0130004882813 359.89599609375 C 378.0130004882813 360.8919982910156 378.2590026855469 361.6480102539063 378.7510070800781 362.1640014648438 C 379.2430114746094 362.6799926757813 379.9450073242188 362.93798828125 380.8569946289063 362.93798828125 C 381.8529968261719 362.93798828125 382.6390075683594 362.6380004882813 383.2149963378906 362.0379943847656 C 383.7909851074219 361.4259948730469 384.0790100097656 360.5799865722656 384.0790100097656 359.5 L 384.0790100097656 354.5320129394531 L 385.3569946289063 354.5320129394531 Z M 389.06201171875 364.0899963378906 C 388.7980041503906 364.0899963378906 388.5700073242188 363.9939880371094 388.3779907226563 363.802001953125 C 388.197998046875 363.6099853515625 388.1080017089844 363.3760070800781 388.1080017089844 363.1000061035156 C 388.1080017089844 362.8240051269531 388.197998046875 362.5960083007813 388.3779907226563 362.4159851074219 C 388.5700073242188 362.2239990234375 388.7980041503906 362.1279907226563 389.06201171875 362.1279907226563 C 389.3259887695313 362.1279907226563 389.5539855957031 362.2239990234375 389.7460021972656 362.4159851074219 C 389.93798828125 362.5960083007813 390.0339965820313 362.8240051269531 390.0339965820313 363.1000061035156 C 390.0339965820313 363.3760070800781 389.93798828125 363.6099853515625 389.7460021972656 363.802001953125 C 389.5539855957031 363.9939880371094 389.3259887695313 364.0899963378906 389.06201171875 364.0899963378906 Z M 404.5589904785156 354.4599914550781 C 405.7470092773438 354.4599914550781 406.677001953125 354.802001953125 407.3489990234375 355.4859924316406 C 408.0329895019531 356.1700134277344 408.375 357.1780090332031 408.375 358.510009765625 L 408.375 364 L 407.0969848632813 364 L 407.0969848632813 358.635986328125 C 407.0969848632813 357.6520080566406 406.8569946289063 356.9020080566406 406.3770141601563 356.385986328125 C 405.9089965820313 355.8699951171875 405.2430114746094 355.6119995117188 404.3789978027344 355.6119995117188 C 403.3949890136719 355.6119995117188 402.6210021972656 355.9179992675781 402.0570068359375 356.5299987792969 C 401.4930114746094 357.1300048828125 401.2109985351563 357.9639892578125 401.2109985351563 359.0320129394531 L 401.2109985351563 364 L 399.9330139160156 364 L 399.9330139160156 358.635986328125 C 399.9330139160156 357.6520080566406 399.6929931640625 356.9020080566406 399.2130126953125 356.385986328125 C 398.7449951171875 355.8699951171875 398.072998046875 355.6119995117188 397.1969909667969 355.6119995117188 C 396.2250061035156 355.6119995117188 395.4509887695313 355.9179992675781 394.875 356.5299987792969 C 394.3110046386719 357.1300048828125 394.0289916992188 357.9639892578125 394.0289916992188 359.0320129394531 L 394.0289916992188 364 L 392.7510070800781 364 L 392.7510070800781 354.5320129394531 L 393.9750061035156 354.5320129394531 L 393.9750061035156 356.260009765625 C 394.3110046386719 355.6839904785156 394.7789916992188 355.239990234375 395.3789978027344 354.9280090332031 C 395.97900390625 354.6159973144531 396.6690063476563 354.4599914550781 397.4490051269531 354.4599914550781 C 398.2409973144531 354.4599914550781 398.9249877929688 354.6279907226563 399.5010070800781 354.9639892578125 C 400.0889892578125 355.2999877929688 400.5270080566406 355.7980041503906 400.8150024414063 356.4580078125 C 401.1629943847656 355.8340148925781 401.6610107421875 355.3479919433594 402.3089904785156 355 C 402.968994140625 354.6400146484375 403.718994140625 354.4599914550781 404.5589904785156 354.4599914550781 Z M 423.6489868164063 354.4599914550781 C 424.8370056152344 354.4599914550781 425.7669982910156 354.802001953125 426.4389953613281 355.4859924316406 C 427.1229858398438 356.1700134277344 427.4649963378906 357.1780090332031 427.4649963378906 358.510009765625 L 427.4649963378906 364 L 426.18701171875 364 L 426.18701171875 358.635986328125 C 426.18701171875 357.6520080566406 425.9469909667969 356.9020080566406 425.4670104980469 356.385986328125 C 424.9989929199219 355.8699951171875 424.3330078125 355.6119995117188 423.468994140625 355.6119995117188 C 422.4849853515625 355.6119995117188 421.7109985351563 355.9179992675781 421.1470031738281 356.5299987792969 C 420.5830078125 357.1300048828125 420.3009948730469 357.9639892578125 420.3009948730469 359.0320129394531 L 420.3009948730469 364 L 419.0230102539063 364 L 419.0230102539063 358.635986328125 C 419.0230102539063 357.6520080566406 418.7829895019531 356.9020080566406 418.3030090332031 356.385986328125 C 417.8349914550781 355.8699951171875 417.1629943847656 355.6119995117188 416.2869873046875 355.6119995117188 C 415.3150024414063 355.6119995117188 414.5409851074219 355.9179992675781 413.9649963378906 356.5299987792969 C 413.4010009765625 357.1300048828125 413.1189880371094 357.9639892578125 413.1189880371094 359.0320129394531 L 413.1189880371094 364 L 411.8410034179688 364 L 411.8410034179688 354.5320129394531 L 413.0650024414063 354.5320129394531 L 413.0650024414063 356.260009765625 C 413.4010009765625 355.6839904785156 413.8689880371094 355.239990234375 414.468994140625 354.9280090332031 C 415.0690002441406 354.6159973144531 415.7590026855469 354.4599914550781 416.5390014648438 354.4599914550781 C 417.3309936523438 354.4599914550781 418.0150146484375 354.6279907226563 418.5910034179688 354.9639892578125 C 419.1789855957031 355.2999877929688 419.6170043945313 355.7980041503906 419.9049987792969 356.4580078125 C 420.2529907226563 355.8340148925781 420.7510070800781 355.3479919433594 421.3989868164063 355 C 422.0589904785156 354.6400146484375 422.8089904785156 354.4599914550781 423.6489868164063 354.4599914550781 Z">
			</path>
		</svg>
		<svg class="Platelet_Range" viewBox="471.267 351.4 52.918 12.708">
			<path id="Platelet_Range" d="M 475.5329895019531 351.3999938964844 L 475.5329895019531 364 L 474.2369995117188 364 L 474.2369995117188 352.552001953125 L 471.2669982910156 352.552001953125 L 471.2669982910156 351.3999938964844 L 475.5329895019531 351.3999938964844 Z M 479.5169982910156 364.0899963378906 C 479.2529907226563 364.0899963378906 479.0249938964844 363.9939880371094 478.8330078125 363.802001953125 C 478.6530151367188 363.6099853515625 478.56298828125 363.3760070800781 478.56298828125 363.1000061035156 C 478.56298828125 362.8240051269531 478.6530151367188 362.5960083007813 478.8330078125 362.4159851074219 C 479.0249938964844 362.2239990234375 479.2529907226563 362.1279907226563 479.5169982910156 362.1279907226563 C 479.781005859375 362.1279907226563 480.0090026855469 362.2239990234375 480.2009887695313 362.4159851074219 C 480.3930053710938 362.5960083007813 480.489013671875 362.8240051269531 480.489013671875 363.1000061035156 C 480.489013671875 363.3760070800781 480.3930053710938 363.6099853515625 480.2009887695313 363.802001953125 C 480.0090026855469 363.9939880371094 479.781005859375 364.0899963378906 479.5169982910156 364.0899963378906 Z M 485.6719970703125 356.5660095214844 C 487.4960021972656 356.5660095214844 488.8219909667969 356.89599609375 489.6499938964844 357.5559997558594 C 490.489990234375 358.2040100097656 490.9100036621094 359.1159973144531 490.9100036621094 360.2919921875 C 490.9100036621094 361.0239868164063 490.7359924316406 361.6780090332031 490.3880004882813 362.2539978027344 C 490.052001953125 362.8299865722656 489.5419921875 363.2860107421875 488.8580017089844 363.6220092773438 C 488.1740112304688 363.9460144042969 487.3340148925781 364.1080017089844 486.3380126953125 364.1080017089844 C 485.43798828125 364.1080017089844 484.5799865722656 363.9639892578125 483.7640075683594 363.6759948730469 C 482.9599914550781 363.3760070800781 482.31201171875 362.9800109863281 481.8200073242188 362.4880065917969 L 482.4500122070313 361.4620056152344 C 482.8699951171875 361.8940124511719 483.4219970703125 362.2479858398438 484.1059875488281 362.5239868164063 C 484.7900085449219 362.7879943847656 485.5280151367188 362.9200134277344 486.3200073242188 362.9200134277344 C 487.364013671875 362.9200134277344 488.1679992675781 362.6860046386719 488.7319946289063 362.2179870605469 C 489.3080139160156 361.75 489.5960083007813 361.1260070800781 489.5960083007813 360.3460083007813 C 489.5960083007813 359.4819946289063 489.2720031738281 358.8280029296875 488.6239929199219 358.3840026855469 C 487.9880065917969 357.9400024414063 486.9079895019531 357.7179870605469 485.3840026855469 357.7179870605469 L 482.7019958496094 357.7179870605469 L 483.3500061035156 351.3999938964844 L 490.2439880371094 351.3999938964844 L 490.2439880371094 352.552001953125 L 484.4840087890625 352.552001953125 L 484.052001953125 356.5660095214844 L 485.6719970703125 356.5660095214844 Z M 492.6990051269531 358.5639953613281 L 497.4150085449219 358.5639953613281 L 497.4150085449219 359.6799926757813 L 492.6990051269531 359.6799926757813 L 492.6990051269531 358.5639953613281 Z M 510.2789916992188 360.68798828125 L 507.7590026855469 360.68798828125 L 507.7590026855469 364 L 506.4630126953125 364 L 506.4630126953125 360.68798828125 L 499.3529968261719 360.68798828125 L 499.3529968261719 359.7520141601563 L 506.031005859375 351.3999938964844 L 507.4710083007813 351.3999938964844 L 501.0270080566406 359.5360107421875 L 506.4989929199219 359.5360107421875 L 506.4989929199219 356.6199951171875 L 507.7590026855469 356.6199951171875 L 507.7590026855469 359.5360107421875 L 510.2789916992188 359.5360107421875 L 510.2789916992188 360.68798828125 Z M 512.7930297851563 364.0899963378906 C 512.5289916992188 364.0899963378906 512.301025390625 363.9939880371094 512.1090087890625 363.802001953125 C 511.9289855957031 363.6099853515625 511.8389892578125 363.3760070800781 511.8389892578125 363.1000061035156 C 511.8389892578125 362.8240051269531 511.9289855957031 362.5960083007813 512.1090087890625 362.4159851074219 C 512.301025390625 362.2239990234375 512.5289916992188 362.1279907226563 512.7930297851563 362.1279907226563 C 513.0570068359375 362.1279907226563 513.2849731445313 362.2239990234375 513.4769897460938 362.4159851074219 C 513.6690063476563 362.5960083007813 513.7650146484375 362.8240051269531 513.7650146484375 363.1000061035156 C 513.7650146484375 363.3760070800781 513.6690063476563 363.6099853515625 513.4769897460938 363.802001953125 C 513.2849731445313 363.9939880371094 513.0570068359375 364.0899963378906 512.7930297851563 364.0899963378906 Z M 518.947021484375 356.5660095214844 C 520.77099609375 356.5660095214844 522.0969848632813 356.89599609375 522.9249877929688 357.5559997558594 C 523.7650146484375 358.2040100097656 524.1849975585938 359.1159973144531 524.1849975585938 360.2919921875 C 524.1849975585938 361.0239868164063 524.010986328125 361.6780090332031 523.6630249023438 362.2539978027344 C 523.3270263671875 362.8299865722656 522.8170166015625 363.2860107421875 522.1329956054688 363.6220092773438 C 521.448974609375 363.9460144042969 520.6090087890625 364.1080017089844 519.6129760742188 364.1080017089844 C 518.7130126953125 364.1080017089844 517.85498046875 363.9639892578125 517.0390014648438 363.6759948730469 C 516.2349853515625 363.3760070800781 515.5869750976563 362.9800109863281 515.094970703125 362.4880065917969 L 515.7249755859375 361.4620056152344 C 516.14501953125 361.8940124511719 516.697021484375 362.2479858398438 517.3809814453125 362.5239868164063 C 518.0650024414063 362.7879943847656 518.802978515625 362.9200134277344 519.594970703125 362.9200134277344 C 520.6389770507813 362.9200134277344 521.4429931640625 362.6860046386719 522.0070190429688 362.2179870605469 C 522.5830078125 361.75 522.8709716796875 361.1260070800781 522.8709716796875 360.3460083007813 C 522.8709716796875 359.4819946289063 522.5469970703125 358.8280029296875 521.8989868164063 358.3840026855469 C 521.2630004882813 357.9400024414063 520.1829833984375 357.7179870605469 518.6589965820313 357.7179870605469 L 515.9769897460938 357.7179870605469 L 516.625 351.3999938964844 L 523.5189819335938 351.3999938964844 L 523.5189819335938 352.552001953125 L 517.7589721679688 352.552001953125 L 517.3270263671875 356.5660095214844 L 518.947021484375 356.5660095214844 Z">
			</path>
		</svg>
		<div id="Enter_Platelet">
			<span>50%</span>
		</div>
		<svg class="Platelet" viewBox="79.87 351.4 90.079 12.6">
			<path id="Platelet" d="M 84.78450012207031 351.3999938964844 C 86.41649627685547 351.3999938964844 87.70050048828125 351.7900085449219 88.63649749755859 352.5700073242188 C 89.57250213623047 353.3500061035156 90.04049682617188 354.4240112304688 90.04049682617188 355.7919921875 C 90.04049682617188 357.1600036621094 89.57250213623047 358.2340087890625 88.63649749755859 359.0140075683594 C 87.70050048828125 359.7940063476563 86.41649627685547 360.1839904785156 84.78450012207031 360.1839904785156 L 81.67050170898438 360.1839904785156 L 81.67050170898438 364 L 79.87049865722656 364 L 79.87049865722656 351.3999938964844 L 84.78450012207031 351.3999938964844 Z M 84.73049926757813 358.6180114746094 C 85.87049865722656 358.6180114746094 86.74050140380859 358.3779907226563 87.34049987792969 357.8980102539063 C 87.94049835205078 357.406005859375 88.24050140380859 356.7040100097656 88.24050140380859 355.7919921875 C 88.24050140380859 354.8800048828125 87.94049835205078 354.1839904785156 87.34049987792969 353.7040100097656 C 86.74050140380859 353.2120056152344 85.87049865722656 352.9660034179688 84.73049926757813 352.9660034179688 L 81.67050170898438 352.9660034179688 L 81.67050170898438 358.6180114746094 L 84.73049926757813 358.6180114746094 Z M 92.68489837646484 351.3999938964844 L 94.48490142822266 351.3999938964844 L 94.48490142822266 362.4339904785156 L 101.306999206543 362.4339904785156 L 101.306999206543 364 L 92.68489837646484 364 L 92.68489837646484 351.3999938964844 Z M 111.4530029296875 360.8500061035156 L 104.7570037841797 360.8500061035156 L 103.3710021972656 364 L 101.5169982910156 364 L 107.2229995727539 351.3999938964844 L 109.004997253418 351.3999938964844 L 114.7289962768555 364 L 112.838996887207 364 L 111.4530029296875 360.8500061035156 Z M 110.822998046875 359.4100036621094 L 108.1050033569336 353.2359924316406 L 105.3870010375977 359.4100036621094 L 110.822998046875 359.4100036621094 Z M 118.4779968261719 352.9660034179688 L 114.1579971313477 352.9660034179688 L 114.1579971313477 351.3999938964844 L 124.5800018310547 351.3999938964844 L 124.5800018310547 352.9660034179688 L 120.2600021362305 352.9660034179688 L 120.2600021362305 364 L 118.4779968261719 364 L 118.4779968261719 352.9660034179688 Z M 135.6840057373047 362.4339904785156 L 135.6840057373047 364 L 126.5400009155273 364 L 126.5400009155273 351.3999938964844 L 135.4320068359375 351.3999938964844 L 135.4320068359375 352.9660034179688 L 128.3399963378906 352.9660034179688 L 128.3399963378906 356.8359985351563 L 134.6580047607422 356.8359985351563 L 134.6580047607422 358.3659973144531 L 128.3399963378906 358.3659973144531 L 128.3399963378906 362.4339904785156 L 135.6840057373047 362.4339904785156 Z M 138.5989990234375 351.3999938964844 L 140.3990020751953 351.3999938964844 L 140.3990020751953 362.4339904785156 L 147.2209930419922 362.4339904785156 L 147.2209930419922 364 L 138.5989990234375 364 L 138.5989990234375 351.3999938964844 Z M 158.4299926757813 362.4339904785156 L 158.4299926757813 364 L 149.2859954833984 364 L 149.2859954833984 351.3999938964844 L 158.1779937744141 351.3999938964844 L 158.1779937744141 352.9660034179688 L 151.0859985351563 352.9660034179688 L 151.0859985351563 356.8359985351563 L 157.4040069580078 356.8359985351563 L 157.4040069580078 358.3659973144531 L 151.0859985351563 358.3659973144531 L 151.0859985351563 362.4339904785156 L 158.4299926757813 362.4339904785156 Z M 163.8470001220703 352.9660034179688 L 159.5269927978516 352.9660034179688 L 159.5269927978516 351.3999938964844 L 169.9490051269531 351.3999938964844 L 169.9490051269531 352.9660034179688 L 165.6289978027344 352.9660034179688 L 165.6289978027344 364 L 163.8470001220703 364 L 163.8470001220703 352.9660034179688 Z">
			</path>
		</svg>
		<svg class="RBC_Unit" viewBox="321.463 321.844 99.172 16.956">
			<path id="RBC_Unit" d="M 333.27099609375 327.4599914550781 C 334.4590148925781 327.4599914550781 335.3890075683594 327.802001953125 336.0610046386719 328.4859924316406 C 336.7449951171875 329.1700134277344 337.0870056152344 330.1780090332031 337.0870056152344 331.510009765625 L 337.0870056152344 337 L 335.8089904785156 337 L 335.8089904785156 331.635986328125 C 335.8089904785156 330.6520080566406 335.5690002441406 329.9020080566406 335.0889892578125 329.385986328125 C 334.6210021972656 328.8699951171875 333.9549865722656 328.6119995117188 333.0910034179688 328.6119995117188 C 332.1069946289063 328.6119995117188 331.3330078125 328.9179992675781 330.7690124511719 329.5299987792969 C 330.2049865722656 330.1300048828125 329.9230041503906 330.9639892578125 329.9230041503906 332.0320129394531 L 329.9230041503906 337 L 328.6449890136719 337 L 328.6449890136719 331.635986328125 C 328.6449890136719 330.6520080566406 328.4049987792969 329.9020080566406 327.9249877929688 329.385986328125 C 327.4570007324219 328.8699951171875 326.7850036621094 328.6119995117188 325.9089965820313 328.6119995117188 C 324.93701171875 328.6119995117188 324.1629943847656 328.9179992675781 323.5870056152344 329.5299987792969 C 323.0230102539063 330.1300048828125 322.7409973144531 330.9639892578125 322.7409973144531 332.0320129394531 L 322.7409973144531 337 L 321.4630126953125 337 L 321.4630126953125 327.5320129394531 L 322.68701171875 327.5320129394531 L 322.68701171875 329.260009765625 C 323.0230102539063 328.6839904785156 323.4909973144531 328.239990234375 324.0910034179688 327.9280090332031 C 324.6910095214844 327.6159973144531 325.3810119628906 327.4599914550781 326.1610107421875 327.4599914550781 C 326.9530029296875 327.4599914550781 327.6369934082031 327.6279907226563 328.2130126953125 327.9639892578125 C 328.8009948730469 328.2999877929688 329.239013671875 328.7980041503906 329.5270080566406 329.4580078125 C 329.875 328.8340148925781 330.3729858398438 328.3479919433594 331.02099609375 328 C 331.6809997558594 327.6400146484375 332.4309997558594 327.4599914550781 333.27099609375 327.4599914550781 Z M 340.5530090332031 327.5320129394531 L 341.8309936523438 327.5320129394531 L 341.8309936523438 337 L 340.5530090332031 337 L 340.5530090332031 327.5320129394531 Z M 341.2009887695313 325.4620056152344 C 340.93701171875 325.4620056152344 340.7149963378906 325.3720092773438 340.5350036621094 325.1919860839844 C 340.3550109863281 325.0119934082031 340.2650146484375 324.7959899902344 340.2650146484375 324.5440063476563 C 340.2650146484375 324.3039855957031 340.3550109863281 324.093994140625 340.5350036621094 323.9140014648438 C 340.7149963378906 323.7340087890625 340.93701171875 323.6440124511719 341.2009887695313 323.6440124511719 C 341.4649963378906 323.6440124511719 341.68701171875 323.7340087890625 341.8670043945313 323.9140014648438 C 342.0469970703125 324.0820007324219 342.1369934082031 324.2860107421875 342.1369934082031 324.5260009765625 C 342.1369934082031 324.7900085449219 342.0469970703125 325.0119934082031 341.8670043945313 325.1919860839844 C 341.68701171875 325.3720092773438 341.4649963378906 325.4620056152344 341.2009887695313 325.4620056152344 Z M 345.385986328125 323.6440124511719 L 346.6640014648438 323.6440124511719 L 346.6640014648438 337 L 345.385986328125 337 L 345.385986328125 323.6440124511719 Z M 350.2200012207031 327.5320129394531 L 351.4979858398438 327.5320129394531 L 351.4979858398438 337 L 350.2200012207031 337 L 350.2200012207031 327.5320129394531 Z M 350.8680114746094 325.4620056152344 C 350.60400390625 325.4620056152344 350.3819885253906 325.3720092773438 350.2019958496094 325.1919860839844 C 350.0220031738281 325.0119934082031 349.9320068359375 324.7959899902344 349.9320068359375 324.5440063476563 C 349.9320068359375 324.3039855957031 350.0220031738281 324.093994140625 350.2019958496094 323.9140014648438 C 350.3819885253906 323.7340087890625 350.60400390625 323.6440124511719 350.8680114746094 323.6440124511719 C 351.1319885253906 323.6440124511719 351.35400390625 323.7340087890625 351.5339965820313 323.9140014648438 C 351.7139892578125 324.0820007324219 351.8039855957031 324.2860107421875 351.8039855957031 324.5260009765625 C 351.8039855957031 324.7900085449219 351.7139892578125 325.0119934082031 351.5339965820313 325.1919860839844 C 351.35400390625 325.3720092773438 351.1319885253906 325.4620056152344 350.8680114746094 325.4620056152344 Z M 358.7619934082031 321.843994140625 L 359.9320068359375 321.843994140625 L 353.9920043945313 338.7999877929688 L 352.8219909667969 338.7999877929688 L 358.7619934082031 321.843994140625 Z M 363.7770080566406 337.0899963378906 C 362.8410034179688 337.0899963378906 362.0010070800781 336.885986328125 361.2569885253906 336.4779968261719 C 360.5249938964844 336.0700073242188 359.9490051269531 335.5 359.5289916992188 334.7680053710938 C 359.1090087890625 334.0239868164063 358.8989868164063 333.1900024414063 358.8989868164063 332.2659912109375 C 358.8989868164063 331.3420104980469 359.1090087890625 330.5140075683594 359.5289916992188 329.7820129394531 C 359.9490051269531 329.0499877929688 360.5249938964844 328.4800109863281 361.2569885253906 328.0719909667969 C 362.0010070800781 327.6640014648438 362.8410034179688 327.4599914550781 363.7770080566406 327.4599914550781 C 364.5929870605469 327.4599914550781 365.3190002441406 327.6220092773438 365.9549865722656 327.9460144042969 C 366.6029968261719 328.2579956054688 367.1130065917969 328.7200012207031 367.4849853515625 329.3320007324219 L 366.531005859375 329.9800109863281 C 366.218994140625 329.5119934082031 365.822998046875 329.1640014648438 365.3429870605469 328.9360046386719 C 364.8630065917969 328.6960144042969 364.3410034179688 328.5759887695313 363.7770080566406 328.5759887695313 C 363.0929870605469 328.5759887695313 362.4750061035156 328.7319946289063 361.9230041503906 329.0440063476563 C 361.3829956054688 329.343994140625 360.9570007324219 329.7760009765625 360.6449890136719 330.3399963378906 C 360.3450012207031 330.9039916992188 360.1950073242188 331.5459899902344 360.1950073242188 332.2659912109375 C 360.1950073242188 332.9979858398438 360.3450012207031 333.64599609375 360.6449890136719 334.2099914550781 C 360.9570007324219 334.7619934082031 361.3829956054688 335.1940002441406 361.9230041503906 335.5060119628906 C 362.4750061035156 335.8059997558594 363.0929870605469 335.9559936523438 363.7770080566406 335.9559936523438 C 364.3410034179688 335.9559936523438 364.8630065917969 335.8420104980469 365.3429870605469 335.614013671875 C 365.822998046875 335.385986328125 366.218994140625 335.0379943847656 366.531005859375 334.5700073242188 L 367.4849853515625 335.2179870605469 C 367.1130065917969 335.8299865722656 366.6029968261719 336.2980041503906 365.9549865722656 336.6220092773438 C 365.3070068359375 336.9339904785156 364.5809936523438 337.0899963378906 363.7770080566406 337.0899963378906 Z M 378.5280151367188 327.5320129394531 L 378.5280151367188 337 L 377.3039855957031 337 L 377.3039855957031 335.2720031738281 C 376.9679870605469 335.8479919433594 376.5060119628906 336.2980041503906 375.9179992675781 336.6220092773438 C 375.3299865722656 336.9339904785156 374.6579895019531 337.0899963378906 373.9020080566406 337.0899963378906 C 372.6659851074219 337.0899963378906 371.68798828125 336.7479858398438 370.9679870605469 336.0639953613281 C 370.260009765625 335.3680114746094 369.906005859375 334.35400390625 369.906005859375 333.0220031738281 L 369.906005859375 327.5320129394531 L 371.1839904785156 327.5320129394531 L 371.1839904785156 332.89599609375 C 371.1839904785156 333.8919982910156 371.4299926757813 334.6480102539063 371.9219970703125 335.1640014648438 C 372.4140014648438 335.6799926757813 373.1159973144531 335.93798828125 374.0280151367188 335.93798828125 C 375.0239868164063 335.93798828125 375.8099975585938 335.6380004882813 376.385986328125 335.0379943847656 C 376.9620056152344 334.4259948730469 377.25 333.5799865722656 377.25 332.5 L 377.25 327.5320129394531 L 378.5280151367188 327.5320129394531 Z M 382.2330017089844 337.0899963378906 C 381.968994140625 337.0899963378906 381.7409973144531 336.9939880371094 381.5490112304688 336.802001953125 C 381.3689880371094 336.6099853515625 381.2789916992188 336.3760070800781 381.2789916992188 336.1000061035156 C 381.2789916992188 335.8240051269531 381.3689880371094 335.5960083007813 381.5490112304688 335.4159851074219 C 381.7409973144531 335.2239990234375 381.968994140625 335.1279907226563 382.2330017089844 335.1279907226563 C 382.4970092773438 335.1279907226563 382.7250061035156 335.2239990234375 382.9169921875 335.4159851074219 C 383.1090087890625 335.5960083007813 383.2049865722656 335.8240051269531 383.2049865722656 336.1000061035156 C 383.2049865722656 336.3760070800781 383.1090087890625 336.6099853515625 382.9169921875 336.802001953125 C 382.7250061035156 336.9939880371094 382.4970092773438 337.0899963378906 382.2330017089844 337.0899963378906 Z M 397.7300109863281 327.4599914550781 C 398.9179992675781 327.4599914550781 399.8479919433594 327.802001953125 400.5199890136719 328.4859924316406 C 401.2040100097656 329.1700134277344 401.5459899902344 330.1780090332031 401.5459899902344 331.510009765625 L 401.5459899902344 337 L 400.2680053710938 337 L 400.2680053710938 331.635986328125 C 400.2680053710938 330.6520080566406 400.0280151367188 329.9020080566406 399.5480041503906 329.385986328125 C 399.0799865722656 328.8699951171875 398.4140014648438 328.6119995117188 397.5499877929688 328.6119995117188 C 396.5660095214844 328.6119995117188 395.7919921875 328.9179992675781 395.2279968261719 329.5299987792969 C 394.6640014648438 330.1300048828125 394.3819885253906 330.9639892578125 394.3819885253906 332.0320129394531 L 394.3819885253906 337 L 393.10400390625 337 L 393.10400390625 331.635986328125 C 393.10400390625 330.6520080566406 392.864013671875 329.9020080566406 392.3840026855469 329.385986328125 C 391.9159851074219 328.8699951171875 391.2439880371094 328.6119995117188 390.3680114746094 328.6119995117188 C 389.39599609375 328.6119995117188 388.6220092773438 328.9179992675781 388.0459899902344 329.5299987792969 C 387.4819946289063 330.1300048828125 387.2000122070313 330.9639892578125 387.2000122070313 332.0320129394531 L 387.2000122070313 337 L 385.9219970703125 337 L 385.9219970703125 327.5320129394531 L 387.14599609375 327.5320129394531 L 387.14599609375 329.260009765625 C 387.4819946289063 328.6839904785156 387.9500122070313 328.239990234375 388.5499877929688 327.9280090332031 C 389.1499938964844 327.6159973144531 389.8399963378906 327.4599914550781 390.6199951171875 327.4599914550781 C 391.4119873046875 327.4599914550781 392.0960083007813 327.6279907226563 392.6719970703125 327.9639892578125 C 393.260009765625 328.2999877929688 393.697998046875 328.7980041503906 393.9859924316406 329.4580078125 C 394.3340148925781 328.8340148925781 394.8320007324219 328.3479919433594 395.4800109863281 328 C 396.1400146484375 327.6400146484375 396.8900146484375 327.4599914550781 397.7300109863281 327.4599914550781 Z M 416.8190002441406 327.4599914550781 C 418.0069885253906 327.4599914550781 418.93701171875 327.802001953125 419.6090087890625 328.4859924316406 C 420.2929992675781 329.1700134277344 420.635009765625 330.1780090332031 420.635009765625 331.510009765625 L 420.635009765625 337 L 419.3569946289063 337 L 419.3569946289063 331.635986328125 C 419.3569946289063 330.6520080566406 419.1170043945313 329.9020080566406 418.6369934082031 329.385986328125 C 418.1690063476563 328.8699951171875 417.5029907226563 328.6119995117188 416.6390075683594 328.6119995117188 C 415.6549987792969 328.6119995117188 414.8810119628906 328.9179992675781 414.3169860839844 329.5299987792969 C 413.7529907226563 330.1300048828125 413.4710083007813 330.9639892578125 413.4710083007813 332.0320129394531 L 413.4710083007813 337 L 412.1929931640625 337 L 412.1929931640625 331.635986328125 C 412.1929931640625 330.6520080566406 411.9530029296875 329.9020080566406 411.4729919433594 329.385986328125 C 411.0050048828125 328.8699951171875 410.3330078125 328.6119995117188 409.4570007324219 328.6119995117188 C 408.4849853515625 328.6119995117188 407.7109985351563 328.9179992675781 407.135009765625 329.5299987792969 C 406.5710144042969 330.1300048828125 406.2890014648438 330.9639892578125 406.2890014648438 332.0320129394531 L 406.2890014648438 337 L 405.010986328125 337 L 405.010986328125 327.5320129394531 L 406.2349853515625 327.5320129394531 L 406.2349853515625 329.260009765625 C 406.5710144042969 328.6839904785156 407.0390014648438 328.239990234375 407.6390075683594 327.9280090332031 C 408.239013671875 327.6159973144531 408.9289855957031 327.4599914550781 409.7090148925781 327.4599914550781 C 410.5010070800781 327.4599914550781 411.1849975585938 327.6279907226563 411.760986328125 327.9639892578125 C 412.3489990234375 328.2999877929688 412.7869873046875 328.7980041503906 413.0750122070313 329.4580078125 C 413.4230041503906 328.8340148925781 413.9209899902344 328.3479919433594 414.5690002441406 328 C 415.22900390625 327.6400146484375 415.97900390625 327.4599914550781 416.8190002441406 327.4599914550781 Z">
			</path>
		</svg>
		<svg class="RBC_Range" viewBox="469.079 324.292 57.145 12.816">
			<path id="RBC_Range" d="M 474.1369934082031 329.7999877929688 C 475.4570007324219 329.8720092773438 476.4590148925781 330.2319946289063 477.1430053710938 330.8800048828125 C 477.8389892578125 331.5159912109375 478.18701171875 332.3500061035156 478.18701171875 333.3819885253906 C 478.18701171875 334.1019897460938 478.0130004882813 334.7439880371094 477.6650085449219 335.3080139160156 C 477.3169860839844 335.8599853515625 476.8009948730469 336.2980041503906 476.1170043945313 336.6220092773438 C 475.4330139160156 336.9460144042969 474.5989990234375 337.1080017089844 473.614990234375 337.1080017089844 C 472.7030029296875 337.1080017089844 471.8389892578125 336.9639892578125 471.0230102539063 336.6759948730469 C 470.218994140625 336.3760070800781 469.5710144042969 335.9800109863281 469.0790100097656 335.4880065917969 L 469.7090148925781 334.4620056152344 C 470.1289978027344 334.8940124511719 470.68701171875 335.2479858398438 471.3829956054688 335.5239868164063 C 472.0790100097656 335.7879943847656 472.822998046875 335.9200134277344 473.614990234375 335.9200134277344 C 474.6470031738281 335.9200134277344 475.4450073242188 335.697998046875 476.0090026855469 335.2539978027344 C 476.572998046875 334.7980041503906 476.8550109863281 334.1740112304688 476.8550109863281 333.3819885253906 C 476.8550109863281 332.6019897460938 476.572998046875 331.989990234375 476.0090026855469 331.5459899902344 C 475.4450073242188 331.1019897460938 474.5929870605469 330.8800048828125 473.4530029296875 330.8800048828125 L 472.5530090332031 330.8800048828125 L 472.5530090332031 329.9259948730469 L 476.0450134277344 325.552001953125 L 469.6010131835938 325.552001953125 L 469.6010131835938 324.3999938964844 L 477.7009887695313 324.3999938964844 L 477.7009887695313 325.3179931640625 L 474.1369934082031 329.7999877929688 Z M 480.9849853515625 337.0899963378906 C 480.7210083007813 337.0899963378906 480.4930114746094 336.9939880371094 480.3009948730469 336.802001953125 C 480.1210021972656 336.6099853515625 480.031005859375 336.3760070800781 480.031005859375 336.1000061035156 C 480.031005859375 335.8240051269531 480.1210021972656 335.5960083007813 480.3009948730469 335.4159851074219 C 480.4930114746094 335.2239990234375 480.7210083007813 335.1279907226563 480.9849853515625 335.1279907226563 C 481.2489929199219 335.1279907226563 481.4769897460938 335.2239990234375 481.6690063476563 335.4159851074219 C 481.8609924316406 335.5960083007813 481.9570007324219 335.8240051269531 481.9570007324219 336.1000061035156 C 481.9570007324219 336.3760070800781 481.8609924316406 336.6099853515625 481.6690063476563 336.802001953125 C 481.4769897460938 336.9939880371094 481.2489929199219 337.0899963378906 480.9849853515625 337.0899963378906 Z M 491.2210083007813 330.3940124511719 C 492.0130004882813 330.6579895019531 492.6189880371094 331.0539855957031 493.0390014648438 331.5820007324219 C 493.4710083007813 332.1099853515625 493.68701171875 332.7460021972656 493.68701171875 333.489990234375 C 493.68701171875 334.2219848632813 493.489013671875 334.864013671875 493.0929870605469 335.4159851074219 C 492.6969909667969 335.9559936523438 492.1270141601563 336.3760070800781 491.3829956054688 336.6759948730469 C 490.6510009765625 336.9639892578125 489.7869873046875 337.1080017089844 488.7909851074219 337.1080017089844 C 487.2789916992188 337.1080017089844 486.0910034179688 336.7839965820313 485.2269897460938 336.135986328125 C 484.3630065917969 335.4880065917969 483.9309997558594 334.6059875488281 483.9309997558594 333.489990234375 C 483.9309997558594 332.7340087890625 484.135009765625 332.0979919433594 484.5429992675781 331.5820007324219 C 484.9630126953125 331.0539855957031 485.5690002441406 330.6579895019531 486.3609924316406 330.3940124511719 C 485.7130126953125 330.1419982910156 485.2210083007813 329.7820129394531 484.885009765625 329.3139953613281 C 484.5490112304688 328.8340148925781 484.3810119628906 328.2699890136719 484.3810119628906 327.6220092773438 C 484.3810119628906 326.6019897460938 484.7770080566406 325.7919921875 485.5690002441406 325.1919860839844 C 486.3729858398438 324.5920104980469 487.4469909667969 324.2919921875 488.7909851074219 324.2919921875 C 489.6789855957031 324.2919921875 490.4530029296875 324.4299926757813 491.1130065917969 324.7059936523438 C 491.7850036621094 324.9700012207031 492.3070068359375 325.35400390625 492.6789855957031 325.8580017089844 C 493.0509948730469 326.3619995117188 493.2369995117188 326.9500122070313 493.2369995117188 327.6220092773438 C 493.2369995117188 328.2699890136719 493.06298828125 328.8340148925781 492.7149963378906 329.3139953613281 C 492.3670043945313 329.7820129394531 491.8689880371094 330.1419982910156 491.2210083007813 330.3940124511719 Z M 485.677001953125 327.6579895019531 C 485.677001953125 328.35400390625 485.9530029296875 328.906005859375 486.5050048828125 329.3139953613281 C 487.0570068359375 329.7219848632813 487.8190002441406 329.9259948730469 488.7909851074219 329.9259948730469 C 489.7630004882813 329.9259948730469 490.5249938964844 329.7219848632813 491.0769958496094 329.3139953613281 C 491.6409912109375 328.906005859375 491.9230041503906 328.3599853515625 491.9230041503906 327.6759948730469 C 491.9230041503906 326.9679870605469 491.635009765625 326.4100036621094 491.0589904785156 326.0020141601563 C 490.4949951171875 325.593994140625 489.739013671875 325.3900146484375 488.7909851074219 325.3900146484375 C 487.8309936523438 325.3900146484375 487.0690002441406 325.593994140625 486.5050048828125 326.0020141601563 C 485.9530029296875 326.4100036621094 485.677001953125 326.9620056152344 485.677001953125 327.6579895019531 Z M 488.7909851074219 336.010009765625 C 489.9070129394531 336.010009765625 490.7770080566406 335.7820129394531 491.4010009765625 335.3259887695313 C 492.0369873046875 334.8699951171875 492.3550109863281 334.2520141601563 492.3550109863281 333.4719848632813 C 492.3550109863281 332.6919860839844 492.0369873046875 332.0799865722656 491.4010009765625 331.635986328125 C 490.7770080566406 331.1799926757813 489.9070129394531 330.9519958496094 488.7909851074219 330.9519958496094 C 487.68701171875 330.9519958496094 486.8169860839844 331.1799926757813 486.1809997558594 331.635986328125 C 485.5570068359375 332.0799865722656 485.2449951171875 332.6919860839844 485.2449951171875 333.4719848632813 C 485.2449951171875 334.2640075683594 485.5570068359375 334.8880004882813 486.1809997558594 335.343994140625 C 486.8049926757813 335.7879943847656 487.6749877929688 336.010009765625 488.7909851074219 336.010009765625 Z M 495.6260070800781 331.5639953613281 L 500.3420104980469 331.5639953613281 L 500.3420104980469 332.6799926757813 L 495.6260070800781 332.6799926757813 L 495.6260070800781 331.5639953613281 Z M 505.6669921875 329.5660095214844 C 507.4909973144531 329.5660095214844 508.8169860839844 329.89599609375 509.6449890136719 330.5559997558594 C 510.4849853515625 331.2040100097656 510.9049987792969 332.1159973144531 510.9049987792969 333.2919921875 C 510.9049987792969 334.0239868164063 510.7309875488281 334.6780090332031 510.3829956054688 335.2539978027344 C 510.0469970703125 335.8299865722656 509.5369873046875 336.2860107421875 508.8529968261719 336.6220092773438 C 508.1690063476563 336.9460144042969 507.3290100097656 337.1080017089844 506.3330078125 337.1080017089844 C 505.4330139160156 337.1080017089844 504.5750122070313 336.9639892578125 503.7590026855469 336.6759948730469 C 502.9549865722656 336.3760070800781 502.3070068359375 335.9800109863281 501.8150024414063 335.4880065917969 L 502.4450073242188 334.4620056152344 C 502.864990234375 334.8940124511719 503.4169921875 335.2479858398438 504.1010131835938 335.5239868164063 C 504.7850036621094 335.7879943847656 505.5230102539063 335.9200134277344 506.3150024414063 335.9200134277344 C 507.3590087890625 335.9200134277344 508.1629943847656 335.6860046386719 508.7269897460938 335.2179870605469 C 509.3030090332031 334.75 509.5910034179688 334.1260070800781 509.5910034179688 333.3460083007813 C 509.5910034179688 332.4819946289063 509.2669982910156 331.8280029296875 508.6189880371094 331.3840026855469 C 507.9830017089844 330.9400024414063 506.9030151367188 330.7179870605469 505.3789978027344 330.7179870605469 L 502.6969909667969 330.7179870605469 L 503.3450012207031 324.3999938964844 L 510.239013671875 324.3999938964844 L 510.239013671875 325.552001953125 L 504.47900390625 325.552001953125 L 504.0469970703125 329.5660095214844 L 505.6669921875 329.5660095214844 Z M 513.52197265625 337.0899963378906 C 513.2579956054688 337.0899963378906 513.030029296875 336.9939880371094 512.8380126953125 336.802001953125 C 512.6580200195313 336.6099853515625 512.5679931640625 336.3760070800781 512.5679931640625 336.1000061035156 C 512.5679931640625 335.8240051269531 512.6580200195313 335.5960083007813 512.8380126953125 335.4159851074219 C 513.030029296875 335.2239990234375 513.2579956054688 335.1279907226563 513.52197265625 335.1279907226563 C 513.7860107421875 335.1279907226563 514.0139770507813 335.2239990234375 514.2059936523438 335.4159851074219 C 514.3980102539063 335.5960083007813 514.4940185546875 335.8240051269531 514.4940185546875 336.1000061035156 C 514.4940185546875 336.3760070800781 514.3980102539063 336.6099853515625 514.2059936523438 336.802001953125 C 514.0139770507813 336.9939880371094 513.7860107421875 337.0899963378906 513.52197265625 337.0899963378906 Z M 523.7579956054688 330.3940124511719 C 524.5499877929688 330.6579895019531 525.156005859375 331.0539855957031 525.5759887695313 331.5820007324219 C 526.0079956054688 332.1099853515625 526.2239990234375 332.7460021972656 526.2239990234375 333.489990234375 C 526.2239990234375 334.2219848632813 526.0260009765625 334.864013671875 525.6300048828125 335.4159851074219 C 525.2340087890625 335.9559936523438 524.6640014648438 336.3760070800781 523.9199829101563 336.6759948730469 C 523.18798828125 336.9639892578125 522.323974609375 337.1080017089844 521.3280029296875 337.1080017089844 C 519.8159790039063 337.1080017089844 518.6279907226563 336.7839965820313 517.7639770507813 336.135986328125 C 516.9000244140625 335.4880065917969 516.468017578125 334.6059875488281 516.468017578125 333.489990234375 C 516.468017578125 332.7340087890625 516.6719970703125 332.0979919433594 517.0800170898438 331.5820007324219 C 517.5 331.0539855957031 518.1060180664063 330.6579895019531 518.8980102539063 330.3940124511719 C 518.25 330.1419982910156 517.7579956054688 329.7820129394531 517.4219970703125 329.3139953613281 C 517.0859985351563 328.8340148925781 516.9180297851563 328.2699890136719 516.9180297851563 327.6220092773438 C 516.9180297851563 326.6019897460938 517.3140258789063 325.7919921875 518.1060180664063 325.1919860839844 C 518.9099731445313 324.5920104980469 519.9840087890625 324.2919921875 521.3280029296875 324.2919921875 C 522.2160034179688 324.2919921875 522.989990234375 324.4299926757813 523.6500244140625 324.7059936523438 C 524.322021484375 324.9700012207031 524.843994140625 325.35400390625 525.2160034179688 325.8580017089844 C 525.5880126953125 326.3619995117188 525.7739868164063 326.9500122070313 525.7739868164063 327.6220092773438 C 525.7739868164063 328.2699890136719 525.5999755859375 328.8340148925781 525.2520141601563 329.3139953613281 C 524.9039916992188 329.7820129394531 524.406005859375 330.1419982910156 523.7579956054688 330.3940124511719 Z M 518.2139892578125 327.6579895019531 C 518.2139892578125 328.35400390625 518.489990234375 328.906005859375 519.0419921875 329.3139953613281 C 519.593994140625 329.7219848632813 520.3560180664063 329.9259948730469 521.3280029296875 329.9259948730469 C 522.2999877929688 329.9259948730469 523.06201171875 329.7219848632813 523.614013671875 329.3139953613281 C 524.177978515625 328.906005859375 524.4600219726563 328.3599853515625 524.4600219726563 327.6759948730469 C 524.4600219726563 326.9679870605469 524.1719970703125 326.4100036621094 523.5960083007813 326.0020141601563 C 523.031982421875 325.593994140625 522.2760009765625 325.3900146484375 521.3280029296875 325.3900146484375 C 520.3679809570313 325.3900146484375 519.6060180664063 325.593994140625 519.0419921875 326.0020141601563 C 518.489990234375 326.4100036621094 518.2139892578125 326.9620056152344 518.2139892578125 327.6579895019531 Z M 521.3280029296875 336.010009765625 C 522.4439697265625 336.010009765625 523.3140258789063 335.7820129394531 523.93798828125 335.3259887695313 C 524.573974609375 334.8699951171875 524.8920288085938 334.2520141601563 524.8920288085938 333.4719848632813 C 524.8920288085938 332.6919860839844 524.573974609375 332.0799865722656 523.93798828125 331.635986328125 C 523.3140258789063 331.1799926757813 522.4439697265625 330.9519958496094 521.3280029296875 330.9519958496094 C 520.2239990234375 330.9519958496094 519.35400390625 331.1799926757813 518.718017578125 331.635986328125 C 518.093994140625 332.0799865722656 517.781982421875 332.6919860839844 517.781982421875 333.4719848632813 C 517.781982421875 334.2640075683594 518.093994140625 334.8880004882813 518.718017578125 335.343994140625 C 519.3419799804688 335.7879943847656 520.2119750976563 336.010009765625 521.3280029296875 336.010009765625 Z">
			</path>
		</svg>
		<div id="Enter_RBC">
			<span>18</span>
		</div>
		<svg class="RBC_b" viewBox="106.036 324.256 37.141 12.888">
			<path id="RBC_b" d="M 114.4599990844727 337 L 111.7419967651367 333.1300048828125 C 111.4059982299805 333.1539916992188 111.1419982910156 333.1659851074219 110.9499969482422 333.1659851074219 L 107.8359985351563 333.1659851074219 L 107.8359985351563 337 L 106.036003112793 337 L 106.036003112793 324.3999938964844 L 110.9499969482422 324.3999938964844 C 112.5820007324219 324.3999938964844 113.8659973144531 324.7900085449219 114.802001953125 325.5700073242188 C 115.7379989624023 326.3500061035156 116.2060012817383 327.4240112304688 116.2060012817383 328.7919921875 C 116.2060012817383 329.7640075683594 115.9660034179688 330.5920104980469 115.4860000610352 331.2760009765625 C 115.0059967041016 331.9599914550781 114.3219985961914 332.4580078125 113.4339981079102 332.7699890136719 L 116.4219970703125 337 L 114.4599990844727 337 Z M 110.8960037231445 331.635986328125 C 112.036003112793 331.635986328125 112.9059982299805 331.3900146484375 113.5059967041016 330.8980102539063 C 114.1060028076172 330.406005859375 114.4059982299805 329.7040100097656 114.4059982299805 328.7919921875 C 114.4059982299805 327.8800048828125 114.1060028076172 327.1839904785156 113.5059967041016 326.7040100097656 C 112.9059982299805 326.2120056152344 112.036003112793 325.9660034179688 110.8960037231445 325.9660034179688 L 107.8359985351563 325.9660034179688 L 107.8359985351563 331.635986328125 L 110.8960037231445 331.635986328125 Z M 127.5920028686523 330.4660034179688 C 128.3240051269531 330.6700134277344 128.8999938964844 331.0419921875 129.3200073242188 331.5820007324219 C 129.7400054931641 332.1099853515625 129.9499969482422 332.7820129394531 129.9499969482422 333.5979919433594 C 129.9499969482422 334.6900024414063 129.5359954833984 335.5299987792969 128.7079925537109 336.1180114746094 C 127.8919982910156 336.7059936523438 126.697998046875 337 125.1259994506836 337 L 119.1139984130859 337 L 119.1139984130859 324.3999938964844 L 124.765998840332 324.3999938964844 C 126.2060012817383 324.3999938964844 127.3160018920898 324.68798828125 128.0959930419922 325.2640075683594 C 128.8880004882813 325.8399963378906 129.2839965820313 326.6380004882813 129.2839965820313 327.6579895019531 C 129.2839965820313 328.3179931640625 129.1280059814453 328.8880004882813 128.8159942626953 329.3680114746094 C 128.5160064697266 329.8479919433594 128.1080017089844 330.2139892578125 127.5920028686523 330.4660034179688 Z M 120.9140014648438 325.8580017089844 L 120.9140014648438 329.8900146484375 L 124.6039962768555 329.8900146484375 C 125.5279998779297 329.8900146484375 126.2360000610352 329.7219848632813 126.7279968261719 329.385986328125 C 127.2320022583008 329.0379943847656 127.484001159668 328.5339965820313 127.484001159668 327.8739929199219 C 127.484001159668 327.2139892578125 127.2320022583008 326.7160034179688 126.7279968261719 326.3800048828125 C 126.2360000610352 326.0320129394531 125.5279998779297 325.8580017089844 124.6039962768555 325.8580017089844 L 120.9140014648438 325.8580017089844 Z M 125.0540008544922 335.5419921875 C 126.0739974975586 335.5419921875 126.8420028686523 335.3739929199219 127.3580017089844 335.0379943847656 C 127.8740005493164 334.7019958496094 128.1320037841797 334.1740112304688 128.1320037841797 333.4540100097656 C 128.1320037841797 332.0499877929688 127.1060028076172 331.3479919433594 125.0540008544922 331.3479919433594 L 120.9140014648438 331.3479919433594 L 120.9140014648438 335.5419921875 L 125.0540008544922 335.5419921875 Z M 138.3710021972656 337.1440124511719 C 137.1109924316406 337.1440124511719 135.9709930419922 336.8680114746094 134.9510040283203 336.3160095214844 C 133.9429931640625 335.7520141601563 133.1510009765625 334.9840087890625 132.5749969482422 334.0119934082031 C 131.9989929199219 333.0280151367188 131.7109985351563 331.9240112304688 131.7109985351563 330.7000122070313 C 131.7109985351563 329.4760131835938 131.9989929199219 328.3779907226563 132.5749969482422 327.406005859375 C 133.1510009765625 326.4219970703125 133.9490051269531 325.6539916992188 134.968994140625 325.1019897460938 C 135.9889984130859 324.5379943847656 137.1289978027344 324.2560119628906 138.3890075683594 324.2560119628906 C 139.3730010986328 324.2560119628906 140.2729949951172 324.4240112304688 141.0890045166016 324.760009765625 C 141.9049987792969 325.0840148925781 142.6009979248047 325.5700073242188 143.177001953125 326.2179870605469 L 142.0070037841797 327.3519897460938 C 141.0590057373047 326.3559875488281 139.8769989013672 325.8580017089844 138.4609985351563 325.8580017089844 C 137.5249938964844 325.8580017089844 136.6790008544922 326.0679931640625 135.9230041503906 326.4880065917969 C 135.1670074462891 326.9079895019531 134.572998046875 327.489990234375 134.1410064697266 328.2340087890625 C 133.7209930419922 328.9660034179688 133.5110015869141 329.7879943847656 133.5110015869141 330.7000122070313 C 133.5110015869141 331.6119995117188 133.7209930419922 332.4400024414063 134.1410064697266 333.1839904785156 C 134.572998046875 333.9159851074219 135.1670074462891 334.4920043945313 135.9230041503906 334.9119873046875 C 136.6790008544922 335.3320007324219 137.5249938964844 335.5419921875 138.4609985351563 335.5419921875 C 139.8650054931641 335.5419921875 141.0469970703125 335.0379943847656 142.0070037841797 334.0299987792969 L 143.177001953125 335.1640014648438 C 142.6009979248047 335.81201171875 141.8990020751953 336.3039855957031 141.0709991455078 336.6400146484375 C 140.2550048828125 336.9760131835938 139.3549957275391 337.1440124511719 138.3710021972656 337.1440124511719 Z">
			</path>
		</svg>
		<svg class="WBC_Range" viewBox="447.155 297.292 101.49 12.816">
			<path id="WBC_Range" d="M 458.0809936523438 306.68798828125 L 455.5610046386719 306.68798828125 L 455.5610046386719 310 L 454.2650146484375 310 L 454.2650146484375 306.68798828125 L 447.1549987792969 306.68798828125 L 447.1549987792969 305.7520141601563 L 453.8330078125 297.3999938964844 L 455.2730102539063 297.3999938964844 L 448.8290100097656 305.5360107421875 L 454.3009948730469 305.5360107421875 L 454.3009948730469 302.6199951171875 L 455.5610046386719 302.6199951171875 L 455.5610046386719 305.5360107421875 L 458.0809936523438 305.5360107421875 L 458.0809936523438 306.68798828125 Z M 464.2929992675781 310.1080017089844 C 463.3210144042969 310.1080017089844 462.4509887695313 309.8500061035156 461.6830139160156 309.3340148925781 C 460.927001953125 308.8179931640625 460.3330078125 308.0799865722656 459.9010009765625 307.1199951171875 C 459.4809875488281 306.1480102539063 459.27099609375 305.0079956054688 459.27099609375 303.7000122070313 C 459.27099609375 302.3919982910156 459.4809875488281 301.2579956054688 459.9010009765625 300.2980041503906 C 460.3330078125 299.3259887695313 460.927001953125 298.5820007324219 461.6830139160156 298.0660095214844 C 462.4509887695313 297.5499877929688 463.3210144042969 297.2919921875 464.2929992675781 297.2919921875 C 465.2650146484375 297.2919921875 466.1289978027344 297.5499877929688 466.885009765625 298.0660095214844 C 467.6530151367188 298.5820007324219 468.2529907226563 299.3259887695313 468.6849975585938 300.2980041503906 C 469.1170043945313 301.2579956054688 469.3330078125 302.3919982910156 469.3330078125 303.7000122070313 C 469.3330078125 305.0079956054688 469.1170043945313 306.1480102539063 468.6849975585938 307.1199951171875 C 468.2529907226563 308.0799865722656 467.6530151367188 308.8179931640625 466.885009765625 309.3340148925781 C 466.1289978027344 309.8500061035156 465.2650146484375 310.1080017089844 464.2929992675781 310.1080017089844 Z M 464.2929992675781 308.9200134277344 C 465.0249938964844 308.9200134277344 465.6669921875 308.7160034179688 466.218994140625 308.3080139160156 C 466.7829895019531 307.8999938964844 467.2210083007813 307.3059997558594 467.5329895019531 306.5260009765625 C 467.8450012207031 305.7460021972656 468.0010070800781 304.8039855957031 468.0010070800781 303.7000122070313 C 468.0010070800781 302.5960083007813 467.8450012207031 301.6539916992188 467.5329895019531 300.8739929199219 C 467.2210083007813 300.093994140625 466.7829895019531 299.5 466.218994140625 299.0920104980469 C 465.6669921875 298.6839904785156 465.0249938964844 298.4800109863281 464.2929992675781 298.4800109863281 C 463.5610046386719 298.4800109863281 462.9129943847656 298.6839904785156 462.3489990234375 299.0920104980469 C 461.7969970703125 299.5 461.364990234375 300.093994140625 461.0530090332031 300.8739929199219 C 460.7409973144531 301.6539916992188 460.5849914550781 302.5960083007813 460.5849914550781 303.7000122070313 C 460.5849914550781 304.8039855957031 460.7409973144531 305.7460021972656 461.0530090332031 306.5260009765625 C 461.364990234375 307.3059997558594 461.7969970703125 307.8999938964844 462.3489990234375 308.3080139160156 C 462.9129943847656 308.7160034179688 463.5610046386719 308.9200134277344 464.2929992675781 308.9200134277344 Z M 476.2109985351563 310.1080017089844 C 475.239013671875 310.1080017089844 474.3689880371094 309.8500061035156 473.6010131835938 309.3340148925781 C 472.8450012207031 308.8179931640625 472.2510070800781 308.0799865722656 471.8190002441406 307.1199951171875 C 471.3989868164063 306.1480102539063 471.1889953613281 305.0079956054688 471.1889953613281 303.7000122070313 C 471.1889953613281 302.3919982910156 471.3989868164063 301.2579956054688 471.8190002441406 300.2980041503906 C 472.2510070800781 299.3259887695313 472.8450012207031 298.5820007324219 473.6010131835938 298.0660095214844 C 474.3689880371094 297.5499877929688 475.239013671875 297.2919921875 476.2109985351563 297.2919921875 C 477.1830139160156 297.2919921875 478.0469970703125 297.5499877929688 478.8030090332031 298.0660095214844 C 479.5710144042969 298.5820007324219 480.1709899902344 299.3259887695313 480.6029968261719 300.2980041503906 C 481.0350036621094 301.2579956054688 481.2510070800781 302.3919982910156 481.2510070800781 303.7000122070313 C 481.2510070800781 305.0079956054688 481.0350036621094 306.1480102539063 480.6029968261719 307.1199951171875 C 480.1709899902344 308.0799865722656 479.5710144042969 308.8179931640625 478.8030090332031 309.3340148925781 C 478.0469970703125 309.8500061035156 477.1830139160156 310.1080017089844 476.2109985351563 310.1080017089844 Z M 476.2109985351563 308.9200134277344 C 476.9429931640625 308.9200134277344 477.5849914550781 308.7160034179688 478.1369934082031 308.3080139160156 C 478.7009887695313 307.8999938964844 479.1390075683594 307.3059997558594 479.4509887695313 306.5260009765625 C 479.7630004882813 305.7460021972656 479.9190063476563 304.8039855957031 479.9190063476563 303.7000122070313 C 479.9190063476563 302.5960083007813 479.7630004882813 301.6539916992188 479.4509887695313 300.8739929199219 C 479.1390075683594 300.093994140625 478.7009887695313 299.5 478.1369934082031 299.0920104980469 C 477.5849914550781 298.6839904785156 476.9429931640625 298.4800109863281 476.2109985351563 298.4800109863281 C 475.47900390625 298.4800109863281 474.8309936523438 298.6839904785156 474.2669982910156 299.0920104980469 C 473.7149963378906 299.5 473.2829895019531 300.093994140625 472.9710083007813 300.8739929199219 C 472.6589965820313 301.6539916992188 472.5029907226563 302.5960083007813 472.5029907226563 303.7000122070313 C 472.5029907226563 304.8039855957031 472.6589965820313 305.7460021972656 472.9710083007813 306.5260009765625 C 473.2829895019531 307.3059997558594 473.7149963378906 307.8999938964844 474.2669982910156 308.3080139160156 C 474.8309936523438 308.7160034179688 475.47900390625 308.9200134277344 476.2109985351563 308.9200134277344 Z M 488.1289978027344 310.1080017089844 C 487.1570129394531 310.1080017089844 486.2869873046875 309.8500061035156 485.5190124511719 309.3340148925781 C 484.7630004882813 308.8179931640625 484.1690063476563 308.0799865722656 483.7369995117188 307.1199951171875 C 483.3169860839844 306.1480102539063 483.1069946289063 305.0079956054688 483.1069946289063 303.7000122070313 C 483.1069946289063 302.3919982910156 483.3169860839844 301.2579956054688 483.7369995117188 300.2980041503906 C 484.1690063476563 299.3259887695313 484.7630004882813 298.5820007324219 485.5190124511719 298.0660095214844 C 486.2869873046875 297.5499877929688 487.1570129394531 297.2919921875 488.1289978027344 297.2919921875 C 489.1010131835938 297.2919921875 489.9649963378906 297.5499877929688 490.7210083007813 298.0660095214844 C 491.489013671875 298.5820007324219 492.0889892578125 299.3259887695313 492.52099609375 300.2980041503906 C 492.9530029296875 301.2579956054688 493.1690063476563 302.3919982910156 493.1690063476563 303.7000122070313 C 493.1690063476563 305.0079956054688 492.9530029296875 306.1480102539063 492.52099609375 307.1199951171875 C 492.0889892578125 308.0799865722656 491.489013671875 308.8179931640625 490.7210083007813 309.3340148925781 C 489.9649963378906 309.8500061035156 489.1010131835938 310.1080017089844 488.1289978027344 310.1080017089844 Z M 488.1289978027344 308.9200134277344 C 488.8609924316406 308.9200134277344 489.5029907226563 308.7160034179688 490.0549926757813 308.3080139160156 C 490.6189880371094 307.8999938964844 491.0570068359375 307.3059997558594 491.3689880371094 306.5260009765625 C 491.6809997558594 305.7460021972656 491.8370056152344 304.8039855957031 491.8370056152344 303.7000122070313 C 491.8370056152344 302.5960083007813 491.6809997558594 301.6539916992188 491.3689880371094 300.8739929199219 C 491.0570068359375 300.093994140625 490.6189880371094 299.5 490.0549926757813 299.0920104980469 C 489.5029907226563 298.6839904785156 488.8609924316406 298.4800109863281 488.1289978027344 298.4800109863281 C 487.3970031738281 298.4800109863281 486.7489929199219 298.6839904785156 486.1849975585938 299.0920104980469 C 485.6329956054688 299.5 485.2009887695313 300.093994140625 484.8890075683594 300.8739929199219 C 484.5769958496094 301.6539916992188 484.4209899902344 302.5960083007813 484.4209899902344 303.7000122070313 C 484.4209899902344 304.8039855957031 484.5769958496094 305.7460021972656 484.8890075683594 306.5260009765625 C 485.2009887695313 307.3059997558594 485.6329956054688 307.8999938964844 486.1849975585938 308.3080139160156 C 486.7489929199219 308.7160034179688 487.3970031738281 308.9200134277344 488.1289978027344 308.9200134277344 Z M 495.3089904785156 304.5639953613281 L 500.0249938964844 304.5639953613281 L 500.0249938964844 305.6799926757813 L 495.3089904785156 305.6799926757813 L 495.3089904785156 304.5639953613281 Z M 505.2319946289063 297.3999938964844 L 505.2319946289063 310 L 503.9360046386719 310 L 503.9360046386719 298.552001953125 L 500.9660034179688 298.552001953125 L 500.9660034179688 297.3999938964844 L 505.2319946289063 297.3999938964844 Z M 511.7359924316406 297.3999938964844 L 511.7359924316406 310 L 510.4400024414063 310 L 510.4400024414063 298.552001953125 L 507.4700012207031 298.552001953125 L 507.4700012207031 297.3999938964844 L 511.7359924316406 297.3999938964844 Z M 519.77001953125 310.1080017089844 C 518.7979736328125 310.1080017089844 517.927978515625 309.8500061035156 517.1599731445313 309.3340148925781 C 516.4039916992188 308.8179931640625 515.8099975585938 308.0799865722656 515.3779907226563 307.1199951171875 C 514.9580078125 306.1480102539063 514.7479858398438 305.0079956054688 514.7479858398438 303.7000122070313 C 514.7479858398438 302.3919982910156 514.9580078125 301.2579956054688 515.3779907226563 300.2980041503906 C 515.8099975585938 299.3259887695313 516.4039916992188 298.5820007324219 517.1599731445313 298.0660095214844 C 517.927978515625 297.5499877929688 518.7979736328125 297.2919921875 519.77001953125 297.2919921875 C 520.7420043945313 297.2919921875 521.6060180664063 297.5499877929688 522.3619995117188 298.0660095214844 C 523.1300048828125 298.5820007324219 523.72998046875 299.3259887695313 524.1619873046875 300.2980041503906 C 524.593994140625 301.2579956054688 524.8099975585938 302.3919982910156 524.8099975585938 303.7000122070313 C 524.8099975585938 305.0079956054688 524.593994140625 306.1480102539063 524.1619873046875 307.1199951171875 C 523.72998046875 308.0799865722656 523.1300048828125 308.8179931640625 522.3619995117188 309.3340148925781 C 521.6060180664063 309.8500061035156 520.7420043945313 310.1080017089844 519.77001953125 310.1080017089844 Z M 519.77001953125 308.9200134277344 C 520.5020141601563 308.9200134277344 521.1439819335938 308.7160034179688 521.6959838867188 308.3080139160156 C 522.260009765625 307.8999938964844 522.697998046875 307.3059997558594 523.010009765625 306.5260009765625 C 523.322021484375 305.7460021972656 523.47802734375 304.8039855957031 523.47802734375 303.7000122070313 C 523.47802734375 302.5960083007813 523.322021484375 301.6539916992188 523.010009765625 300.8739929199219 C 522.697998046875 300.093994140625 522.260009765625 299.5 521.6959838867188 299.0920104980469 C 521.1439819335938 298.6839904785156 520.5020141601563 298.4800109863281 519.77001953125 298.4800109863281 C 519.0380249023438 298.4800109863281 518.3900146484375 298.6839904785156 517.8259887695313 299.0920104980469 C 517.2739868164063 299.5 516.8419799804688 300.093994140625 516.530029296875 300.8739929199219 C 516.218017578125 301.6539916992188 516.06201171875 302.5960083007813 516.06201171875 303.7000122070313 C 516.06201171875 304.8039855957031 516.218017578125 305.7460021972656 516.530029296875 306.5260009765625 C 516.8419799804688 307.3059997558594 517.2739868164063 307.8999938964844 517.8259887695313 308.3080139160156 C 518.3900146484375 308.7160034179688 519.0380249023438 308.9200134277344 519.77001953125 308.9200134277344 Z M 531.68701171875 310.1080017089844 C 530.7150268554688 310.1080017089844 529.844970703125 309.8500061035156 529.0770263671875 309.3340148925781 C 528.3209838867188 308.8179931640625 527.7269897460938 308.0799865722656 527.2949829101563 307.1199951171875 C 526.875 306.1480102539063 526.6649780273438 305.0079956054688 526.6649780273438 303.7000122070313 C 526.6649780273438 302.3919982910156 526.875 301.2579956054688 527.2949829101563 300.2980041503906 C 527.7269897460938 299.3259887695313 528.3209838867188 298.5820007324219 529.0770263671875 298.0660095214844 C 529.844970703125 297.5499877929688 530.7150268554688 297.2919921875 531.68701171875 297.2919921875 C 532.6589965820313 297.2919921875 533.5230102539063 297.5499877929688 534.2789916992188 298.0660095214844 C 535.0469970703125 298.5820007324219 535.64697265625 299.3259887695313 536.0789794921875 300.2980041503906 C 536.510986328125 301.2579956054688 536.7269897460938 302.3919982910156 536.7269897460938 303.7000122070313 C 536.7269897460938 305.0079956054688 536.510986328125 306.1480102539063 536.0789794921875 307.1199951171875 C 535.64697265625 308.0799865722656 535.0469970703125 308.8179931640625 534.2789916992188 309.3340148925781 C 533.5230102539063 309.8500061035156 532.6589965820313 310.1080017089844 531.68701171875 310.1080017089844 Z M 531.68701171875 308.9200134277344 C 532.4190063476563 308.9200134277344 533.0609741210938 308.7160034179688 533.6129760742188 308.3080139160156 C 534.177001953125 307.8999938964844 534.614990234375 307.3059997558594 534.927001953125 306.5260009765625 C 535.239013671875 305.7460021972656 535.39501953125 304.8039855957031 535.39501953125 303.7000122070313 C 535.39501953125 302.5960083007813 535.239013671875 301.6539916992188 534.927001953125 300.8739929199219 C 534.614990234375 300.093994140625 534.177001953125 299.5 533.6129760742188 299.0920104980469 C 533.0609741210938 298.6839904785156 532.4190063476563 298.4800109863281 531.68701171875 298.4800109863281 C 530.9550170898438 298.4800109863281 530.3070068359375 298.6839904785156 529.7429809570313 299.0920104980469 C 529.1909790039063 299.5 528.7589721679688 300.093994140625 528.447021484375 300.8739929199219 C 528.135009765625 301.6539916992188 527.97900390625 302.5960083007813 527.97900390625 303.7000122070313 C 527.97900390625 304.8039855957031 528.135009765625 305.7460021972656 528.447021484375 306.5260009765625 C 528.7589721679688 307.3059997558594 529.1909790039063 307.8999938964844 529.7429809570313 308.3080139160156 C 530.3070068359375 308.7160034179688 530.9550170898438 308.9200134277344 531.68701171875 308.9200134277344 Z M 543.60498046875 310.1080017089844 C 542.6329956054688 310.1080017089844 541.7630004882813 309.8500061035156 540.9949951171875 309.3340148925781 C 540.239013671875 308.8179931640625 539.64501953125 308.0799865722656 539.2130126953125 307.1199951171875 C 538.7930297851563 306.1480102539063 538.5830078125 305.0079956054688 538.5830078125 303.7000122070313 C 538.5830078125 302.3919982910156 538.7930297851563 301.2579956054688 539.2130126953125 300.2980041503906 C 539.64501953125 299.3259887695313 540.239013671875 298.5820007324219 540.9949951171875 298.0660095214844 C 541.7630004882813 297.5499877929688 542.6329956054688 297.2919921875 543.60498046875 297.2919921875 C 544.5770263671875 297.2919921875 545.4409790039063 297.5499877929688 546.197021484375 298.0660095214844 C 546.9650268554688 298.5820007324219 547.5650024414063 299.3259887695313 547.9970092773438 300.2980041503906 C 548.4290161132813 301.2579956054688 548.64501953125 302.3919982910156 548.64501953125 303.7000122070313 C 548.64501953125 305.0079956054688 548.4290161132813 306.1480102539063 547.9970092773438 307.1199951171875 C 547.5650024414063 308.0799865722656 546.9650268554688 308.8179931640625 546.197021484375 309.3340148925781 C 545.4409790039063 309.8500061035156 544.5770263671875 310.1080017089844 543.60498046875 310.1080017089844 Z M 543.60498046875 308.9200134277344 C 544.3369750976563 308.9200134277344 544.97900390625 308.7160034179688 545.531005859375 308.3080139160156 C 546.094970703125 307.8999938964844 546.5330200195313 307.3059997558594 546.844970703125 306.5260009765625 C 547.156982421875 305.7460021972656 547.31298828125 304.8039855957031 547.31298828125 303.7000122070313 C 547.31298828125 302.5960083007813 547.156982421875 301.6539916992188 546.844970703125 300.8739929199219 C 546.5330200195313 300.093994140625 546.094970703125 299.5 545.531005859375 299.0920104980469 C 544.97900390625 298.6839904785156 544.3369750976563 298.4800109863281 543.60498046875 298.4800109863281 C 542.8729858398438 298.4800109863281 542.2249755859375 298.6839904785156 541.6610107421875 299.0920104980469 C 541.1090087890625 299.5 540.677001953125 300.093994140625 540.364990234375 300.8739929199219 C 540.052978515625 301.6539916992188 539.89697265625 302.5960083007813 539.89697265625 303.7000122070313 C 539.89697265625 304.8039855957031 540.052978515625 305.7460021972656 540.364990234375 306.5260009765625 C 540.677001953125 307.3059997558594 541.1090087890625 307.8999938964844 541.6610107421875 308.3080139160156 C 542.2249755859375 308.7160034179688 542.8729858398438 308.9200134277344 543.60498046875 308.9200134277344 Z">
			</path>
		</svg>
		<svg class="WBC_Unit" viewBox="336.027 294.844 67.813 16.956">
			<path id="WBC_Unit" d="M 341.9670104980469 294.843994140625 L 343.1369934082031 294.843994140625 L 337.1969909667969 311.7999877929688 L 336.0270080566406 311.7999877929688 L 341.9670104980469 294.843994140625 Z M 346.9809875488281 310.0899963378906 C 346.0450134277344 310.0899963378906 345.2049865722656 309.885986328125 344.4609985351563 309.4779968261719 C 343.72900390625 309.0700073242188 343.1530151367188 308.5 342.7330017089844 307.7680053710938 C 342.31298828125 307.0239868164063 342.1029968261719 306.1900024414063 342.1029968261719 305.2659912109375 C 342.1029968261719 304.3420104980469 342.31298828125 303.5140075683594 342.7330017089844 302.7820129394531 C 343.1530151367188 302.0499877929688 343.72900390625 301.4800109863281 344.4609985351563 301.0719909667969 C 345.2049865722656 300.6640014648438 346.0450134277344 300.4599914550781 346.9809875488281 300.4599914550781 C 347.7969970703125 300.4599914550781 348.5230102539063 300.6220092773438 349.1589965820313 300.9460144042969 C 349.8070068359375 301.2579956054688 350.3169860839844 301.7200012207031 350.6889953613281 302.3320007324219 L 349.7349853515625 302.9800109863281 C 349.4230041503906 302.5119934082031 349.0270080566406 302.1640014648438 348.5469970703125 301.9360046386719 C 348.0669860839844 301.6960144042969 347.5450134277344 301.5759887695313 346.9809875488281 301.5759887695313 C 346.2969970703125 301.5759887695313 345.6789855957031 301.7319946289063 345.1270141601563 302.0440063476563 C 344.5870056152344 302.343994140625 344.1610107421875 302.7760009765625 343.8489990234375 303.3399963378906 C 343.5490112304688 303.9039916992188 343.3989868164063 304.5459899902344 343.3989868164063 305.2659912109375 C 343.3989868164063 305.9979858398438 343.5490112304688 306.64599609375 343.8489990234375 307.2099914550781 C 344.1610107421875 307.7619934082031 344.5870056152344 308.1940002441406 345.1270141601563 308.5060119628906 C 345.6789855957031 308.8059997558594 346.2969970703125 308.9559936523438 346.9809875488281 308.9559936523438 C 347.5450134277344 308.9559936523438 348.0669860839844 308.8420104980469 348.5469970703125 308.614013671875 C 349.0270080566406 308.385986328125 349.4230041503906 308.0379943847656 349.7349853515625 307.5700073242188 L 350.6889953613281 308.2179870605469 C 350.3169860839844 308.8299865722656 349.8070068359375 309.2980041503906 349.1589965820313 309.6220092773438 C 348.510986328125 309.9339904785156 347.7850036621094 310.0899963378906 346.9809875488281 310.0899963378906 Z M 361.7319946289063 300.5320129394531 L 361.7319946289063 310 L 360.5079956054688 310 L 360.5079956054688 308.2720031738281 C 360.1719970703125 308.8479919433594 359.7099914550781 309.2980041503906 359.1220092773438 309.6220092773438 C 358.5339965820313 309.9339904785156 357.8619995117188 310.0899963378906 357.1059875488281 310.0899963378906 C 355.8699951171875 310.0899963378906 354.8919982910156 309.7479858398438 354.1719970703125 309.0639953613281 C 353.4639892578125 308.3680114746094 353.1099853515625 307.35400390625 353.1099853515625 306.0220031738281 L 353.1099853515625 300.5320129394531 L 354.3880004882813 300.5320129394531 L 354.3880004882813 305.89599609375 C 354.3880004882813 306.8919982910156 354.6340026855469 307.6480102539063 355.1260070800781 308.1640014648438 C 355.6180114746094 308.6799926757813 356.3200073242188 308.93798828125 357.2319946289063 308.93798828125 C 358.2279968261719 308.93798828125 359.0140075683594 308.6380004882813 359.5899963378906 308.0379943847656 C 360.1659851074219 307.4259948730469 360.4540100097656 306.5799865722656 360.4540100097656 305.5 L 360.4540100097656 300.5320129394531 L 361.7319946289063 300.5320129394531 Z M 365.43701171875 310.0899963378906 C 365.1730041503906 310.0899963378906 364.9450073242188 309.9939880371094 364.7529907226563 309.802001953125 C 364.572998046875 309.6099853515625 364.4830017089844 309.3760070800781 364.4830017089844 309.1000061035156 C 364.4830017089844 308.8240051269531 364.572998046875 308.5960083007813 364.7529907226563 308.4159851074219 C 364.9450073242188 308.2239990234375 365.1730041503906 308.1279907226563 365.43701171875 308.1279907226563 C 365.7009887695313 308.1279907226563 365.9289855957031 308.2239990234375 366.1210021972656 308.4159851074219 C 366.31298828125 308.5960083007813 366.4089965820313 308.8240051269531 366.4089965820313 309.1000061035156 C 366.4089965820313 309.3760070800781 366.31298828125 309.6099853515625 366.1210021972656 309.802001953125 C 365.9289855957031 309.9939880371094 365.7009887695313 310.0899963378906 365.43701171875 310.0899963378906 Z M 380.9339904785156 300.4599914550781 C 382.1220092773438 300.4599914550781 383.052001953125 300.802001953125 383.7239990234375 301.4859924316406 C 384.4079895019531 302.1700134277344 384.75 303.1780090332031 384.75 304.510009765625 L 384.75 310 L 383.4719848632813 310 L 383.4719848632813 304.635986328125 C 383.4719848632813 303.6520080566406 383.2319946289063 302.9020080566406 382.7520141601563 302.385986328125 C 382.2839965820313 301.8699951171875 381.6180114746094 301.6119995117188 380.7539978027344 301.6119995117188 C 379.7699890136719 301.6119995117188 378.9960021972656 301.9179992675781 378.4320068359375 302.5299987792969 C 377.8680114746094 303.1300048828125 377.5859985351563 303.9639892578125 377.5859985351563 305.0320129394531 L 377.5859985351563 310 L 376.3080139160156 310 L 376.3080139160156 304.635986328125 C 376.3080139160156 303.6520080566406 376.0679931640625 302.9020080566406 375.5880126953125 302.385986328125 C 375.1199951171875 301.8699951171875 374.447998046875 301.6119995117188 373.5719909667969 301.6119995117188 C 372.6000061035156 301.6119995117188 371.8259887695313 301.9179992675781 371.25 302.5299987792969 C 370.6860046386719 303.1300048828125 370.4039916992188 303.9639892578125 370.4039916992188 305.0320129394531 L 370.4039916992188 310 L 369.1260070800781 310 L 369.1260070800781 300.5320129394531 L 370.3500061035156 300.5320129394531 L 370.3500061035156 302.260009765625 C 370.6860046386719 301.6839904785156 371.1539916992188 301.239990234375 371.7539978027344 300.9280090332031 C 372.35400390625 300.6159973144531 373.0440063476563 300.4599914550781 373.8240051269531 300.4599914550781 C 374.6159973144531 300.4599914550781 375.2999877929688 300.6279907226563 375.8760070800781 300.9639892578125 C 376.4639892578125 301.2999877929688 376.9020080566406 301.7980041503906 377.1900024414063 302.4580078125 C 377.5379943847656 301.8340148925781 378.0360107421875 301.3479919433594 378.6839904785156 301 C 379.343994140625 300.6400146484375 380.093994140625 300.4599914550781 380.9339904785156 300.4599914550781 Z M 400.0239868164063 300.4599914550781 C 401.2120056152344 300.4599914550781 402.1419982910156 300.802001953125 402.8139953613281 301.4859924316406 C 403.4979858398438 302.1700134277344 403.8399963378906 303.1780090332031 403.8399963378906 304.510009765625 L 403.8399963378906 310 L 402.56201171875 310 L 402.56201171875 304.635986328125 C 402.56201171875 303.6520080566406 402.3219909667969 302.9020080566406 401.8420104980469 302.385986328125 C 401.3739929199219 301.8699951171875 400.7080078125 301.6119995117188 399.843994140625 301.6119995117188 C 398.8599853515625 301.6119995117188 398.0859985351563 301.9179992675781 397.5220031738281 302.5299987792969 C 396.9580078125 303.1300048828125 396.6759948730469 303.9639892578125 396.6759948730469 305.0320129394531 L 396.6759948730469 310 L 395.3980102539063 310 L 395.3980102539063 304.635986328125 C 395.3980102539063 303.6520080566406 395.1579895019531 302.9020080566406 394.6780090332031 302.385986328125 C 394.2099914550781 301.8699951171875 393.5379943847656 301.6119995117188 392.6619873046875 301.6119995117188 C 391.6900024414063 301.6119995117188 390.9159851074219 301.9179992675781 390.3399963378906 302.5299987792969 C 389.7760009765625 303.1300048828125 389.4939880371094 303.9639892578125 389.4939880371094 305.0320129394531 L 389.4939880371094 310 L 388.2160034179688 310 L 388.2160034179688 300.5320129394531 L 389.4400024414063 300.5320129394531 L 389.4400024414063 302.260009765625 C 389.7760009765625 301.6839904785156 390.2439880371094 301.239990234375 390.843994140625 300.9280090332031 C 391.4440002441406 300.6159973144531 392.1340026855469 300.4599914550781 392.9140014648438 300.4599914550781 C 393.7059936523438 300.4599914550781 394.3900146484375 300.6279907226563 394.9660034179688 300.9639892578125 C 395.5539855957031 301.2999877929688 395.9920043945313 301.7980041503906 396.2799987792969 302.4580078125 C 396.6279907226563 301.8340148925781 397.1260070800781 301.3479919433594 397.7739868164063 301 C 398.4339904785156 300.6400146484375 399.1839904785156 300.4599914550781 400.0239868164063 300.4599914550781 Z">
			</path>
		</svg>
		<div id="Enter_WBC">
			<span>50%</span>
		</div>
		<svg class="WBC" viewBox="101.259 297.256 45.381 12.888">
			<path id="WBC" d="M 120.375 297.3999938964844 L 116.1630020141602 310 L 114.2730026245117 310 L 110.8349990844727 299.93798828125 L 107.3970031738281 310 L 105.4710006713867 310 L 101.2590026855469 297.3999938964844 L 103.1129989624023 297.3999938964844 L 106.5149993896484 307.6419982910156 L 110.0609970092773 297.3999938964844 L 111.7170028686523 297.3999938964844 L 115.1910018920898 307.6960144042969 L 118.6650009155273 297.3999938964844 L 120.375 297.3999938964844 Z M 131.0549926757813 303.4660034179688 C 131.7870025634766 303.6700134277344 132.3630065917969 304.0419921875 132.7830047607422 304.5820007324219 C 133.2030029296875 305.1099853515625 133.4129943847656 305.7820129394531 133.4129943847656 306.5979919433594 C 133.4129943847656 307.6900024414063 132.9989929199219 308.5299987792969 132.1710052490234 309.1180114746094 C 131.3549957275391 309.7059936523438 130.1609954833984 310 128.5890045166016 310 L 122.5770034790039 310 L 122.5770034790039 297.3999938964844 L 128.22900390625 297.3999938964844 C 129.6690063476563 297.3999938964844 130.7790069580078 297.68798828125 131.5590057373047 298.2640075683594 C 132.3509979248047 298.8399963378906 132.7469940185547 299.6380004882813 132.7469940185547 300.6579895019531 C 132.7469940185547 301.3179931640625 132.5910034179688 301.8880004882813 132.2790069580078 302.3680114746094 C 131.97900390625 302.8479919433594 131.5709991455078 303.2139892578125 131.0549926757813 303.4660034179688 Z M 124.3769989013672 298.8580017089844 L 124.3769989013672 302.8900146484375 L 128.0670013427734 302.8900146484375 C 128.9909973144531 302.8900146484375 129.6990051269531 302.7219848632813 130.1909942626953 302.385986328125 C 130.6950073242188 302.0379943847656 130.9470062255859 301.5339965820313 130.9470062255859 300.8739929199219 C 130.9470062255859 300.2139892578125 130.6950073242188 299.7160034179688 130.1909942626953 299.3800048828125 C 129.6990051269531 299.0320129394531 128.9909973144531 298.8580017089844 128.0670013427734 298.8580017089844 L 124.3769989013672 298.8580017089844 Z M 128.5169982910156 308.5419921875 C 129.5370025634766 308.5419921875 130.3049926757813 308.3739929199219 130.8209991455078 308.0379943847656 C 131.3370056152344 307.7019958496094 131.5950012207031 307.1740112304688 131.5950012207031 306.4540100097656 C 131.5950012207031 305.0499877929688 130.5690002441406 304.3479919433594 128.5169982910156 304.3479919433594 L 124.3769989013672 304.3479919433594 L 124.3769989013672 308.5419921875 L 128.5169982910156 308.5419921875 Z M 141.8339996337891 310.1440124511719 C 140.5740051269531 310.1440124511719 139.4340057373047 309.8680114746094 138.4140014648438 309.3160095214844 C 137.406005859375 308.7520141601563 136.6139984130859 307.9840087890625 136.0379943847656 307.0119934082031 C 135.4620056152344 306.0280151367188 135.1739959716797 304.9240112304688 135.1739959716797 303.7000122070313 C 135.1739959716797 302.4760131835938 135.4620056152344 301.3779907226563 136.0379943847656 300.406005859375 C 136.6139984130859 299.4219970703125 137.4120025634766 298.6539916992188 138.4320068359375 298.1019897460938 C 139.4519958496094 297.5379943847656 140.5919952392578 297.2560119628906 141.8520050048828 297.2560119628906 C 142.8359985351563 297.2560119628906 143.7359924316406 297.4240112304688 144.552001953125 297.760009765625 C 145.3679962158203 298.0840148925781 146.0639953613281 298.5700073242188 146.6399993896484 299.2179870605469 L 145.4700012207031 300.3519897460938 C 144.5220031738281 299.3559875488281 143.3399963378906 298.8580017089844 141.9239959716797 298.8580017089844 C 140.9880065917969 298.8580017089844 140.1419982910156 299.0679931640625 139.3860015869141 299.4880065917969 C 138.6300048828125 299.9079895019531 138.0359954833984 300.489990234375 137.60400390625 301.2340087890625 C 137.1840057373047 301.9660034179688 136.9739990234375 302.7879943847656 136.9739990234375 303.7000122070313 C 136.9739990234375 304.6119995117188 137.1840057373047 305.4400024414063 137.60400390625 306.1839904785156 C 138.0359954833984 306.9159851074219 138.6300048828125 307.4920043945313 139.3860015869141 307.9119873046875 C 140.1419982910156 308.3320007324219 140.9880065917969 308.5419921875 141.9239959716797 308.5419921875 C 143.3280029296875 308.5419921875 144.5099945068359 308.0379943847656 145.4700012207031 307.0299987792969 L 146.6399993896484 308.1640014648438 C 146.0639953613281 308.81201171875 145.3619995117188 309.3039855957031 144.5339965820313 309.6400146484375 C 143.7180023193359 309.9760131835938 142.8179931640625 310.1440124511719 141.8339996337891 310.1440124511719 Z">
			</path>
		</svg>
		<svg class="Haemoglobin_Range" viewBox="477.842 273.292 39.914 12.816">
			<path id="Haemoglobin_Range" d="M 482.1080017089844 273.3999938964844 L 482.1080017089844 286 L 480.81201171875 286 L 480.81201171875 274.552001953125 L 477.8420104980469 274.552001953125 L 477.8420104980469 273.3999938964844 L 482.1080017089844 273.3999938964844 Z M 493.7239990234375 284.8479919433594 L 493.7239990234375 286 L 484.885986328125 286 L 484.885986328125 285.0820007324219 L 490.1239929199219 279.9519958496094 C 490.7839965820313 279.3039855957031 491.2279968261719 278.7460021972656 491.4559936523438 278.2780151367188 C 491.6960144042969 277.7980041503906 491.8160095214844 277.3179931640625 491.8160095214844 276.8380126953125 C 491.8160095214844 276.093994140625 491.5580139160156 275.5180053710938 491.0419921875 275.1099853515625 C 490.5379943847656 274.6900024414063 489.81201171875 274.4800109863281 488.864013671875 274.4800109863281 C 487.3880004882813 274.4800109863281 486.2420043945313 274.947998046875 485.4259948730469 275.8840026855469 L 484.5079956054688 275.0920104980469 C 485 274.5159912109375 485.6239929199219 274.0719909667969 486.3800048828125 273.760009765625 C 487.1480102539063 273.447998046875 488.0119934082031 273.2919921875 488.9719848632813 273.2919921875 C 490.2560119628906 273.2919921875 491.2699890136719 273.5979919433594 492.0140075683594 274.2099914550781 C 492.7699890136719 274.8099975585938 493.1480102539063 275.6380004882813 493.1480102539063 276.6940002441406 C 493.1480102539063 277.3420104980469 493.0039978027344 277.9660034179688 492.7160034179688 278.5660095214844 C 492.4280090332031 279.1659851074219 491.8819885253906 279.8559875488281 491.0780029296875 280.635986328125 L 486.7940063476563 284.8479919433594 L 493.7239990234375 284.8479919433594 Z M 495.3529968261719 280.5639953613281 L 500.0690002441406 280.5639953613281 L 500.0690002441406 281.6799926757813 L 495.3529968261719 281.6799926757813 L 495.3529968261719 280.5639953613281 Z M 505.2760009765625 273.3999938964844 L 505.2760009765625 286 L 503.9800109863281 286 L 503.9800109863281 274.552001953125 L 501.010009765625 274.552001953125 L 501.010009765625 273.3999938964844 L 505.2760009765625 273.3999938964844 Z M 513.5079956054688 278.4580078125 C 514.3359985351563 278.4580078125 515.0679931640625 278.614013671875 515.7039794921875 278.9259948730469 C 516.3519897460938 279.2380065917969 516.8560180664063 279.6820068359375 517.2160034179688 280.2579956054688 C 517.5759887695313 280.8219909667969 517.7559814453125 281.4819946289063 517.7559814453125 282.2380065917969 C 517.7559814453125 283.0060119628906 517.5700073242188 283.6839904785156 517.197998046875 284.2720031738281 C 516.8259887695313 284.8599853515625 516.3099975585938 285.3160095214844 515.6500244140625 285.6400146484375 C 515.0020141601563 285.9519958496094 514.27001953125 286.1080017089844 513.4539794921875 286.1080017089844 C 511.7860107421875 286.1080017089844 510.5079956054688 285.56201171875 509.6199951171875 284.4700012207031 C 508.7319946289063 283.3659973144531 508.2879943847656 281.81201171875 508.2879943847656 279.8080139160156 C 508.2879943847656 278.4039916992188 508.5280151367188 277.2160034179688 509.0079956054688 276.2439880371094 C 509.4880065917969 275.2720031738281 510.1600036621094 274.5400085449219 511.0239868164063 274.0480041503906 C 511.8880004882813 273.5440063476563 512.89599609375 273.2919921875 514.0479736328125 273.2919921875 C 515.2960205078125 273.2919921875 516.2919921875 273.5199890136719 517.0360107421875 273.9760131835938 L 516.5139770507813 275.0199890136719 C 515.9140014648438 274.6239929199219 515.0980224609375 274.4259948730469 514.0659790039063 274.4259948730469 C 512.6740112304688 274.4259948730469 511.5820007324219 274.8699951171875 510.7900085449219 275.7579956054688 C 509.9979858398438 276.6340026855469 509.6019897460938 277.9119873046875 509.6019897460938 279.5920104980469 C 509.6019897460938 279.8919982910156 509.6199951171875 280.2340087890625 509.656005859375 280.6180114746094 C 509.9679870605469 279.9339904785156 510.4660034179688 279.406005859375 511.1499938964844 279.0339965820313 C 511.8340148925781 278.6499938964844 512.6199951171875 278.4580078125 513.5079956054688 278.4580078125 Z M 513.4000244140625 285.010009765625 C 514.31201171875 285.010009765625 515.0499877929688 284.7640075683594 515.614013671875 284.2720031738281 C 516.1900024414063 283.7680053710938 516.47802734375 283.1019897460938 516.47802734375 282.2739868164063 C 516.47802734375 281.4460144042969 516.1900024414063 280.7860107421875 515.614013671875 280.2940063476563 C 515.0499877929688 279.802001953125 514.281982421875 279.5559997558594 513.3099975585938 279.5559997558594 C 512.6740112304688 279.5559997558594 512.1099853515625 279.6759948730469 511.6180114746094 279.9159851074219 C 511.1380004882813 280.156005859375 510.760009765625 280.4859924316406 510.4840087890625 280.906005859375 C 510.2080078125 281.3259887695313 510.0700073242188 281.7940063476563 510.0700073242188 282.3099975585938 C 510.0700073242188 282.7900085449219 510.1960144042969 283.2340087890625 510.447998046875 283.6419982910156 C 510.7120056152344 284.0499877929688 511.0960083007813 284.3800048828125 511.6000061035156 284.6319885253906 C 512.10400390625 284.8840026855469 512.7039794921875 285.010009765625 513.4000244140625 285.010009765625 Z">
			</path>
		</svg>
		<svg class="Haemoglobin_Unit" viewBox="351.859 270.844 38.95 18.738">
			<path id="Haemoglobin_Unit" d="M 361.5790100097656 276.5320129394531 L 361.5790100097656 284.8479919433594 C 361.5790100097656 286.4559936523438 361.1830139160156 287.6440124511719 360.3909912109375 288.4119873046875 C 359.6109924316406 289.1919860839844 358.4289855957031 289.5820007324219 356.8450012207031 289.5820007324219 C 355.968994140625 289.5820007324219 355.135009765625 289.4500122070313 354.3429870605469 289.1860046386719 C 353.56298828125 288.9339904785156 352.927001953125 288.5799865722656 352.4349975585938 288.1239929199219 L 353.0830078125 287.1520080566406 C 353.5390014648438 287.5599975585938 354.0910034179688 287.8779907226563 354.739013671875 288.1059875488281 C 355.3989868164063 288.3340148925781 356.0889892578125 288.447998046875 356.8089904785156 288.447998046875 C 358.0090026855469 288.447998046875 358.8909912109375 288.1659851074219 359.4549865722656 287.6019897460938 C 360.0190124511719 287.0499877929688 360.3009948730469 286.1860046386719 360.3009948730469 285.010009765625 L 360.3009948730469 283.8039855957031 C 359.9049987792969 284.4039916992188 359.3829956054688 284.8599853515625 358.7349853515625 285.1719970703125 C 358.0989990234375 285.4840087890625 357.3909912109375 285.6400146484375 356.6109924316406 285.6400146484375 C 355.7229919433594 285.6400146484375 354.9129943847656 285.447998046875 354.1809997558594 285.0639953613281 C 353.4609985351563 284.6679992675781 352.8909912109375 284.1220092773438 352.4710083007813 283.4259948730469 C 352.06298828125 282.7179870605469 351.8590087890625 281.9200134277344 351.8590087890625 281.0320129394531 C 351.8590087890625 280.1440124511719 352.06298828125 279.3519897460938 352.4710083007813 278.656005859375 C 352.8909912109375 277.9599914550781 353.4609985351563 277.4200134277344 354.1809997558594 277.0360107421875 C 354.9010009765625 276.6520080566406 355.7109985351563 276.4599914550781 356.6109924316406 276.4599914550781 C 357.4150085449219 276.4599914550781 358.1409912109375 276.6220092773438 358.7890014648438 276.9460144042969 C 359.43701171875 277.2699890136719 359.9590148925781 277.7380065917969 360.3550109863281 278.3500061035156 L 360.3550109863281 276.5320129394531 L 361.5790100097656 276.5320129394531 Z M 356.7369995117188 284.5060119628906 C 357.4209899902344 284.5060119628906 358.0390014648438 284.3619995117188 358.5910034179688 284.0740051269531 C 359.1430053710938 283.7739868164063 359.5690002441406 283.3599853515625 359.8689880371094 282.8320007324219 C 360.1809997558594 282.3039855957031 360.3370056152344 281.7040100097656 360.3370056152344 281.0320129394531 C 360.3370056152344 280.3599853515625 360.1809997558594 279.7659912109375 359.8689880371094 279.25 C 359.5690002441406 278.7219848632813 359.1430053710938 278.3139953613281 358.5910034179688 278.0260009765625 C 358.0509948730469 277.7260131835938 357.4330139160156 277.5759887695313 356.7369995117188 277.5759887695313 C 356.0530090332031 277.5759887695313 355.4349975585938 277.7200012207031 354.8829956054688 278.0079956054688 C 354.3429870605469 278.2959899902344 353.9169921875 278.7040100097656 353.6050109863281 279.2319946289063 C 353.3049926757813 279.760009765625 353.1549987792969 280.3599853515625 353.1549987792969 281.0320129394531 C 353.1549987792969 281.7040100097656 353.3049926757813 282.3039855957031 353.6050109863281 282.8320007324219 C 353.9169921875 283.3599853515625 354.3429870605469 283.7739868164063 354.8829956054688 284.0740051269531 C 355.4349975585938 284.3619995117188 356.0530090332031 284.5060119628906 356.7369995117188 284.5060119628906 Z M 368.8609924316406 270.843994140625 L 370.031005859375 270.843994140625 L 364.0910034179688 287.7999877929688 L 362.9209899902344 287.7999877929688 L 368.8609924316406 270.843994140625 Z M 378.5920104980469 272.6440124511719 L 378.5920104980469 286 L 377.3680114746094 286 L 377.3680114746094 284.1279907226563 C 376.9840087890625 284.7640075683594 376.4739990234375 285.25 375.8380126953125 285.5859985351563 C 375.2139892578125 285.9219970703125 374.5060119628906 286.0899963378906 373.7139892578125 286.0899963378906 C 372.8259887695313 286.0899963378906 372.0220031738281 285.885986328125 371.302001953125 285.4779968261719 C 370.5820007324219 285.0700073242188 370.0180053710938 284.5 369.6099853515625 283.7680053710938 C 369.2019958496094 283.0360107421875 368.9979858398438 282.2019958496094 368.9979858398438 281.2659912109375 C 368.9979858398438 280.3299865722656 369.2019958496094 279.4960021972656 369.6099853515625 278.7640075683594 C 370.0180053710938 278.0320129394531 370.5820007324219 277.4679870605469 371.302001953125 277.0719909667969 C 372.0220031738281 276.6640014648438 372.8259887695313 276.4599914550781 373.7139892578125 276.4599914550781 C 374.4819946289063 276.4599914550781 375.1719970703125 276.6220092773438 375.7839965820313 276.9460144042969 C 376.4079895019531 277.2579956054688 376.9179992675781 277.7200012207031 377.3139953613281 278.3320007324219 L 377.3139953613281 272.6440124511719 L 378.5920104980469 272.6440124511719 Z M 373.8219909667969 284.9559936523438 C 374.4819946289063 284.9559936523438 375.0759887695313 284.8059997558594 375.60400390625 284.5060119628906 C 376.1440124511719 284.1940002441406 376.5639953613281 283.7560119628906 376.864013671875 283.1919860839844 C 377.1759948730469 282.6279907226563 377.3320007324219 281.9859924316406 377.3320007324219 281.2659912109375 C 377.3320007324219 280.5459899902344 377.1759948730469 279.9039916992188 376.864013671875 279.3399963378906 C 376.5639953613281 278.7760009765625 376.1440124511719 278.343994140625 375.60400390625 278.0440063476563 C 375.0759887695313 277.7319946289063 374.4819946289063 277.5759887695313 373.8219909667969 277.5759887695313 C 373.1499938964844 277.5759887695313 372.5440063476563 277.7319946289063 372.0039978027344 278.0440063476563 C 371.4760131835938 278.343994140625 371.0559997558594 278.7760009765625 370.7439880371094 279.3399963378906 C 370.4440002441406 279.9039916992188 370.2940063476563 280.5459899902344 370.2940063476563 281.2659912109375 C 370.2940063476563 281.9859924316406 370.4440002441406 282.6279907226563 370.7439880371094 283.1919860839844 C 371.0559997558594 283.7560119628906 371.4760131835938 284.1940002441406 372.0039978027344 284.5060119628906 C 372.5440063476563 284.8059997558594 373.1499938964844 284.9559936523438 373.8219909667969 284.9559936523438 Z M 382.4209899902344 273.3999938964844 L 383.7529907226563 273.3999938964844 L 383.7529907226563 284.8479919433594 L 390.8089904785156 284.8479919433594 L 390.8089904785156 286 L 382.4209899902344 286 L 382.4209899902344 273.3999938964844 Z">
			</path>
		</svg>
		<div id="Enter_Haemoglobin">
			<span>12.5</span>
		</div>
		<svg class="Haemoglobin" viewBox="53.169 273.256 141.67 12.888">
			<path id="Haemoglobin" d="M 64.00530242919922 273.3999938964844 L 64.00530242919922 286 L 62.20529937744141 286 L 62.20529937744141 280.3840026855469 L 54.96929931640625 280.3840026855469 L 54.96929931640625 286 L 53.1693000793457 286 L 53.1693000793457 273.3999938964844 L 54.96929931640625 273.3999938964844 L 54.96929931640625 278.8179931640625 L 62.20529937744141 278.8179931640625 L 62.20529937744141 273.3999938964844 L 64.00530242919922 273.3999938964844 Z M 75.80470275878906 282.8500061035156 L 69.10870361328125 282.8500061035156 L 67.72270202636719 286 L 65.86869812011719 286 L 71.57469940185547 273.3999938964844 L 73.35669708251953 273.3999938964844 L 79.08070373535156 286 L 77.19069671630859 286 L 75.80470275878906 282.8500061035156 Z M 75.17469787597656 281.4100036621094 L 72.45670318603516 275.2359924316406 L 69.73870086669922 281.4100036621094 L 75.17469787597656 281.4100036621094 Z M 90.10430145263672 284.4339904785156 L 90.10430145263672 286 L 80.96029663085938 286 L 80.96029663085938 273.3999938964844 L 89.85230255126953 273.3999938964844 L 89.85230255126953 274.9660034179688 L 82.76029968261719 274.9660034179688 L 82.76029968261719 278.8359985351563 L 89.07830047607422 278.8359985351563 L 89.07830047607422 280.3659973144531 L 82.76029968261719 280.3659973144531 L 82.76029968261719 284.4339904785156 L 90.10430145263672 284.4339904785156 Z M 104.7009963989258 286 L 104.6829986572266 276.8200073242188 L 100.1289978027344 284.4700012207031 L 99.3009033203125 284.4700012207031 L 94.74690246582031 276.8739929199219 L 94.74690246582031 286 L 93.01889801025391 286 L 93.01889801025391 273.3999938964844 L 94.49490356445313 273.3999938964844 L 99.75090026855469 282.2560119628906 L 104.9349975585938 273.3999938964844 L 106.411003112793 273.3999938964844 L 106.4290008544922 286 L 104.7009963989258 286 Z M 115.8980026245117 286.1440124511719 C 114.6259994506836 286.1440124511719 113.4800033569336 285.8680114746094 112.4599990844727 285.3160095214844 C 111.4400024414063 284.7520141601563 110.6360015869141 283.9779968261719 110.0479965209961 282.9939880371094 C 109.4720001220703 282.010009765625 109.1839981079102 280.9119873046875 109.1839981079102 279.7000122070313 C 109.1839981079102 278.4880065917969 109.4720001220703 277.3900146484375 110.0479965209961 276.406005859375 C 110.6360015869141 275.4219970703125 111.4400024414063 274.6539916992188 112.4599990844727 274.1019897460938 C 113.4800033569336 273.5379943847656 114.6259994506836 273.2560119628906 115.8980026245117 273.2560119628906 C 117.1579971313477 273.2560119628906 118.2979965209961 273.5379943847656 119.318000793457 274.1019897460938 C 120.3379974365234 274.6539916992188 121.1360015869141 275.4219970703125 121.7119979858398 276.406005859375 C 122.2880020141602 277.3779907226563 122.5759963989258 278.4760131835938 122.5759963989258 279.7000122070313 C 122.5759963989258 280.9240112304688 122.2880020141602 282.0280151367188 121.7119979858398 283.0119934082031 C 121.1360015869141 283.9840087890625 120.3379974365234 284.7520141601563 119.318000793457 285.3160095214844 C 118.2979965209961 285.8680114746094 117.1579971313477 286.1440124511719 115.8980026245117 286.1440124511719 Z M 115.8980026245117 284.5419921875 C 116.8219985961914 284.5419921875 117.6500015258789 284.3320007324219 118.3820037841797 283.9119873046875 C 119.1259994506836 283.4920043945313 119.7080001831055 282.9159851074219 120.1279983520508 282.1839904785156 C 120.5599975585938 281.4400024414063 120.7760009765625 280.6119995117188 120.7760009765625 279.7000122070313 C 120.7760009765625 278.7879943847656 120.5599975585938 277.9660034179688 120.1279983520508 277.2340087890625 C 119.7080001831055 276.489990234375 119.1259994506836 275.9079895019531 118.3820037841797 275.4880065917969 C 117.6500015258789 275.0679931640625 116.8219985961914 274.8580017089844 115.8980026245117 274.8580017089844 C 114.9739990234375 274.8580017089844 114.1340026855469 275.0679931640625 113.3779983520508 275.4880065917969 C 112.6340026855469 275.9079895019531 112.0459976196289 276.489990234375 111.6139984130859 277.2340087890625 C 111.1940002441406 277.9660034179688 110.984001159668 278.7879943847656 110.984001159668 279.7000122070313 C 110.984001159668 280.6119995117188 111.1940002441406 281.4400024414063 111.6139984130859 282.1839904785156 C 112.0459976196289 282.9159851074219 112.6340026855469 283.4920043945313 113.3779983520508 283.9119873046875 C 114.1340026855469 284.3320007324219 114.9739990234375 284.5419921875 115.8980026245117 284.5419921875 Z M 134.0579986572266 279.6279907226563 L 135.7859954833984 279.6279907226563 L 135.7859954833984 284.5419921875 C 135.1620025634766 285.0580139160156 134.4360046386719 285.4540100097656 133.6069946289063 285.7300109863281 C 132.7799987792969 286.0060119628906 131.9160003662109 286.1440124511719 131.0160064697266 286.1440124511719 C 129.7440032958984 286.1440124511719 128.5980072021484 285.8680114746094 127.5780029296875 285.3160095214844 C 126.5579986572266 284.7520141601563 125.7539978027344 283.9840087890625 125.1660003662109 283.0119934082031 C 124.5899963378906 282.0280151367188 124.302001953125 280.9240112304688 124.302001953125 279.7000122070313 C 124.302001953125 278.4760131835938 124.5899963378906 277.3720092773438 125.1660003662109 276.3880004882813 C 125.7539978027344 275.4039916992188 126.5579986572266 274.635986328125 127.5780029296875 274.0840148925781 C 128.6100006103516 273.5320129394531 129.7680053710938 273.2560119628906 131.052001953125 273.2560119628906 C 132.0599975585938 273.2560119628906 132.9720001220703 273.4240112304688 133.7879943847656 273.760009765625 C 134.6159973144531 274.0840148925781 135.3179931640625 274.5639953613281 135.8939971923828 275.2000122070313 L 134.7779998779297 276.3160095214844 C 133.7700042724609 275.343994140625 132.552001953125 274.8580017089844 131.1239929199219 274.8580017089844 C 130.1640014648438 274.8580017089844 129.3000030517578 275.0679931640625 128.5319976806641 275.4880065917969 C 127.7760009765625 275.89599609375 127.181999206543 276.4719848632813 126.75 277.2160034179688 C 126.318000793457 277.947998046875 126.1019973754883 278.7760009765625 126.1019973754883 279.7000122070313 C 126.1019973754883 280.6119995117188 126.318000793457 281.4400024414063 126.75 282.1839904785156 C 127.181999206543 282.9159851074219 127.7760009765625 283.4920043945313 128.5319976806641 283.9119873046875 C 129.3000030517578 284.3320007324219 130.1580047607422 284.5419921875 131.1060028076172 284.5419921875 C 132.2339935302734 284.5419921875 133.2180023193359 284.2720031738281 134.0579986572266 283.7319946289063 L 134.0579986572266 279.6279907226563 Z M 139.2319946289063 273.3999938964844 L 141.0319976806641 273.3999938964844 L 141.0319976806641 284.4339904785156 L 147.85400390625 284.4339904785156 L 147.85400390625 286 L 139.2319946289063 286 L 139.2319946289063 273.3999938964844 Z M 155.3789978027344 286.1440124511719 C 154.1069946289063 286.1440124511719 152.9609985351563 285.8680114746094 151.9409942626953 285.3160095214844 C 150.9210052490234 284.7520141601563 150.1170043945313 283.9779968261719 149.5290069580078 282.9939880371094 C 148.9530029296875 282.010009765625 148.6649932861328 280.9119873046875 148.6649932861328 279.7000122070313 C 148.6649932861328 278.4880065917969 148.9530029296875 277.3900146484375 149.5290069580078 276.406005859375 C 150.1170043945313 275.4219970703125 150.9210052490234 274.6539916992188 151.9409942626953 274.1019897460938 C 152.9609985351563 273.5379943847656 154.1069946289063 273.2560119628906 155.3789978027344 273.2560119628906 C 156.6390075683594 273.2560119628906 157.7790069580078 273.5379943847656 158.7989959716797 274.1019897460938 C 159.8190002441406 274.6539916992188 160.6170043945313 275.4219970703125 161.1929931640625 276.406005859375 C 161.7689971923828 277.3779907226563 162.0570068359375 278.4760131835938 162.0570068359375 279.7000122070313 C 162.0570068359375 280.9240112304688 161.7689971923828 282.0280151367188 161.1929931640625 283.0119934082031 C 160.6170043945313 283.9840087890625 159.8190002441406 284.7520141601563 158.7989959716797 285.3160095214844 C 157.7790069580078 285.8680114746094 156.6390075683594 286.1440124511719 155.3789978027344 286.1440124511719 Z M 155.3789978027344 284.5419921875 C 156.3029937744141 284.5419921875 157.1309967041016 284.3320007324219 157.8630065917969 283.9119873046875 C 158.6069946289063 283.4920043945313 159.1889953613281 282.9159851074219 159.6089935302734 282.1839904785156 C 160.0410003662109 281.4400024414063 160.2570037841797 280.6119995117188 160.2570037841797 279.7000122070313 C 160.2570037841797 278.7879943847656 160.0410003662109 277.9660034179688 159.6089935302734 277.2340087890625 C 159.1889953613281 276.489990234375 158.6069946289063 275.9079895019531 157.8630065917969 275.4880065917969 C 157.1309967041016 275.0679931640625 156.3029937744141 274.8580017089844 155.3789978027344 274.8580017089844 C 154.4550018310547 274.8580017089844 153.6150054931641 275.0679931640625 152.8589935302734 275.4880065917969 C 152.1150054931641 275.9079895019531 151.5269927978516 276.489990234375 151.0950012207031 277.2340087890625 C 150.6750030517578 277.9660034179688 150.4649963378906 278.7879943847656 150.4649963378906 279.7000122070313 C 150.4649963378906 280.6119995117188 150.6750030517578 281.4400024414063 151.0950012207031 282.1839904785156 C 151.5269927978516 282.9159851074219 152.1150054931641 283.4920043945313 152.8589935302734 283.9119873046875 C 153.6150054931641 284.3320007324219 154.4550018310547 284.5419921875 155.3789978027344 284.5419921875 Z M 173.2859954833984 279.4660034179688 C 174.0180053710938 279.6700134277344 174.593994140625 280.0419921875 175.0140075683594 280.5820007324219 C 175.4340057373047 281.1099853515625 175.6439971923828 281.7820129394531 175.6439971923828 282.5979919433594 C 175.6439971923828 283.6900024414063 175.2299957275391 284.5299987792969 174.4019927978516 285.1180114746094 C 173.5859985351563 285.7059936523438 172.3919982910156 286 170.8200073242188 286 L 164.8079986572266 286 L 164.8079986572266 273.3999938964844 L 170.4600067138672 273.3999938964844 C 171.8999938964844 273.3999938964844 173.0099945068359 273.68798828125 173.7899932861328 274.2640075683594 C 174.5820007324219 274.8399963378906 174.9779968261719 275.6380004882813 174.9779968261719 276.6579895019531 C 174.9779968261719 277.3179931640625 174.8220062255859 277.8880004882813 174.5099945068359 278.3680114746094 C 174.2100067138672 278.8479919433594 173.802001953125 279.2139892578125 173.2859954833984 279.4660034179688 Z M 166.6080017089844 274.8580017089844 L 166.6080017089844 278.8900146484375 L 170.2980041503906 278.8900146484375 C 171.2220001220703 278.8900146484375 171.9299926757813 278.7219848632813 172.4219970703125 278.385986328125 C 172.9259948730469 278.0379943847656 173.1779937744141 277.5339965820313 173.1779937744141 276.8739929199219 C 173.1779937744141 276.2139892578125 172.9259948730469 275.7160034179688 172.4219970703125 275.3800048828125 C 171.9299926757813 275.0320129394531 171.2220001220703 274.8580017089844 170.2980041503906 274.8580017089844 L 166.6080017089844 274.8580017089844 Z M 170.7480010986328 284.5419921875 C 171.7680053710938 284.5419921875 172.5359954833984 284.3739929199219 173.052001953125 284.0379943847656 C 173.5679931640625 283.7019958496094 173.8260040283203 283.1740112304688 173.8260040283203 282.4540100097656 C 173.8260040283203 281.0499877929688 172.8000030517578 280.3479919433594 170.7480010986328 280.3479919433594 L 166.6080017089844 280.3479919433594 L 166.6080017089844 284.5419921875 L 170.7480010986328 284.5419921875 Z M 178.4309997558594 273.3999938964844 L 180.2310028076172 273.3999938964844 L 180.2310028076172 286 L 178.4309997558594 286 L 178.4309997558594 273.3999938964844 Z M 194.8390045166016 273.3999938964844 L 194.8390045166016 286 L 193.3630065917969 286 L 185.8029937744141 276.60400390625 L 185.8029937744141 286 L 184.0030059814453 286 L 184.0030059814453 273.3999938964844 L 185.47900390625 273.3999938964844 L 193.0390014648438 282.7959899902344 L 193.0390014648438 273.3999938964844 L 194.8390045166016 273.3999938964844 Z">
			</path>
		</svg>
	</div>
	<div id="Charts">
		<div id="Platelet_Chart">
			<svg class="Outer_Rectangle">
				<rect id="Outer_Rectangle" rx="0" ry="0" x="0" y="0" width="136" height="116">
				</rect>
			</svg>
			<svg class="Inner_Rectangle">
				<rect id="Inner_Rectangle" rx="0" ry="0" x="0" y="0" width="128" height="96">
				</rect>
			</svg>
			<svg class="Title_cg" viewBox="486.366 138.48 59.977 8.64">
				<path id="Title_cg" d="M 489.8219909667969 138.6000061035156 C 490.5499877929688 138.6000061035156 491.1820068359375 138.7200012207031 491.7179870605469 138.9600067138672 C 492.2619934082031 139.1999969482422 492.6780090332031 139.5440063476563 492.9660034179688 139.9920043945313 C 493.2539978027344 140.4400024414063 493.3980102539063 140.9720001220703 493.3980102539063 141.5879974365234 C 493.3980102539063 142.1959991455078 493.2539978027344 142.7279968261719 492.9660034179688 143.1840057373047 C 492.6780090332031 143.6320037841797 492.2619934082031 143.9759979248047 491.7179870605469 144.2160034179688 C 491.1820068359375 144.4559936523438 490.5499877929688 144.5760040283203 489.8219909667969 144.5760040283203 L 487.9259948730469 144.5760040283203 L 487.9259948730469 147 L 486.3659973144531 147 L 486.3659973144531 138.6000061035156 L 489.8219909667969 138.6000061035156 Z M 489.75 143.2559967041016 C 490.4299926757813 143.2559967041016 490.9460144042969 143.1119995117188 491.2980041503906 142.8240051269531 C 491.6499938964844 142.5359954833984 491.8259887695313 142.1239929199219 491.8259887695313 141.5879974365234 C 491.8259887695313 141.052001953125 491.6499938964844 140.6399993896484 491.2980041503906 140.3520050048828 C 490.9460144042969 140.0639953613281 490.4299926757813 139.9199981689453 489.75 139.9199981689453 L 487.9259948730469 139.9199981689453 L 487.9259948730469 143.2559967041016 L 489.75 143.2559967041016 Z M 494.9559936523438 138.6000061035156 L 496.5159912109375 138.6000061035156 L 496.5159912109375 145.6799926757813 L 500.9079895019531 145.6799926757813 L 500.9079895019531 147 L 494.9559936523438 147 L 494.9559936523438 138.6000061035156 Z M 507.64599609375 145.0559997558594 L 503.4460144042969 145.0559997558594 L 502.6180114746094 147 L 501.010009765625 147 L 504.7900085449219 138.6000061035156 L 506.3259887695313 138.6000061035156 L 510.1180114746094 147 L 508.4859924316406 147 L 507.64599609375 145.0559997558594 Z M 507.1300048828125 143.8320007324219 L 505.5459899902344 140.1600036621094 L 503.9739990234375 143.8320007324219 L 507.1300048828125 143.8320007324219 Z M 512.468994140625 139.9199981689453 L 509.6849975585938 139.9199981689453 L 509.6849975585938 138.6000061035156 L 516.81298828125 138.6000061035156 L 516.81298828125 139.9199981689453 L 514.0289916992188 139.9199981689453 L 514.0289916992188 147 L 512.468994140625 147 L 512.468994140625 139.9199981689453 Z M 517.9829711914063 138.6000061035156 L 519.5430297851563 138.6000061035156 L 519.5430297851563 145.6799926757813 L 523.9349975585938 145.6799926757813 L 523.9349975585938 147 L 517.9829711914063 147 L 517.9829711914063 138.6000061035156 Z M 531.4669799804688 145.6920013427734 L 531.4669799804688 147 L 525.1669921875 147 L 525.1669921875 138.6000061035156 L 531.2990112304688 138.6000061035156 L 531.2990112304688 139.9080047607422 L 526.7269897460938 139.9080047607422 L 526.7269897460938 142.0919952392578 L 530.7830200195313 142.0919952392578 L 530.7830200195313 143.3760070800781 L 526.7269897460938 143.3760070800781 L 526.7269897460938 145.6920013427734 L 531.4669799804688 145.6920013427734 Z M 534.9099731445313 139.9199981689453 L 532.1259765625 139.9199981689453 L 532.1259765625 138.6000061035156 L 539.2540283203125 138.6000061035156 L 539.2540283203125 139.9199981689453 L 536.469970703125 139.9199981689453 L 536.469970703125 147 L 534.9099731445313 147 L 534.9099731445313 139.9199981689453 Z M 542.947021484375 147.1199951171875 C 542.2990112304688 147.1199951171875 541.6710205078125 147.0279998779297 541.06298828125 146.843994140625 C 540.4630126953125 146.6600036621094 539.9869995117188 146.4160003662109 539.635009765625 146.1119995117188 L 540.1749877929688 144.8999938964844 C 540.5189819335938 145.1719970703125 540.9390258789063 145.39599609375 541.4349975585938 145.5720062255859 C 541.9390258789063 145.7400054931641 542.4429931640625 145.8240051269531 542.947021484375 145.8240051269531 C 543.5709838867188 145.8240051269531 544.0349731445313 145.7239990234375 544.3389892578125 145.5240020751953 C 544.6510009765625 145.3240051269531 544.8070068359375 145.0599975585938 544.8070068359375 144.7319946289063 C 544.8070068359375 144.4920043945313 544.718994140625 144.2960052490234 544.5430297851563 144.1439971923828 C 544.375 143.9839935302734 544.1589965820313 143.8600006103516 543.89501953125 143.7720031738281 C 543.6309814453125 143.6840057373047 543.27099609375 143.5839996337891 542.8150024414063 143.4720001220703 C 542.1749877929688 143.3200073242188 541.655029296875 143.1679992675781 541.2550048828125 143.0160064697266 C 540.8629760742188 142.8639984130859 540.5230102539063 142.6280059814453 540.2349853515625 142.3079986572266 C 539.9550170898438 141.9799957275391 539.8150024414063 141.5399932861328 539.8150024414063 140.9880065917969 C 539.8150024414063 140.5240020751953 539.9390258789063 140.10400390625 540.18701171875 139.7279968261719 C 540.4429931640625 139.343994140625 540.822998046875 139.0399932861328 541.3270263671875 138.8159942626953 C 541.8389892578125 138.5919952392578 542.4630126953125 138.4799957275391 543.198974609375 138.4799957275391 C 543.7109985351563 138.4799957275391 544.2150268554688 138.5440063476563 544.7109985351563 138.6719970703125 C 545.2069702148438 138.8000030517578 545.635009765625 138.9839935302734 545.9949951171875 139.2239990234375 L 545.5029907226563 140.4360046386719 C 545.135009765625 140.2200012207031 544.7509765625 140.0559997558594 544.3510131835938 139.9440002441406 C 543.9509887695313 139.8320007324219 543.56298828125 139.7760009765625 543.18701171875 139.7760009765625 C 542.5709838867188 139.7760009765625 542.1110229492188 139.8800048828125 541.8070068359375 140.0879974365234 C 541.510986328125 140.2960052490234 541.3629760742188 140.5720062255859 541.3629760742188 140.9160003662109 C 541.3629760742188 141.156005859375 541.447021484375 141.3520050048828 541.614990234375 141.5039978027344 C 541.791015625 141.656005859375 542.010986328125 141.7760009765625 542.2750244140625 141.8639984130859 C 542.5390014648438 141.9519958496094 542.8989868164063 142.052001953125 543.35498046875 142.1640014648438 C 543.97900390625 142.3079986572266 544.4910278320313 142.4600067138672 544.8909912109375 142.6199951171875 C 545.291015625 142.7720031738281 545.6309814453125 143.0079956054688 545.9110107421875 143.3280029296875 C 546.198974609375 143.6479949951172 546.343017578125 144.0800018310547 546.343017578125 144.6239929199219 C 546.343017578125 145.0879974365234 546.2150268554688 145.5079956054688 545.958984375 145.8840026855469 C 545.7109985351563 146.2599945068359 545.3309936523438 146.5599975585938 544.8189697265625 146.7839965820313 C 544.3070068359375 147.0079956054688 543.6829833984375 147.1199951171875 542.947021484375 147.1199951171875 Z">
				</path>
			</svg>
			<div id="Enter_Platelt_Chart">
				<span>7200</span>
			</div>
		</div>
		<div id="RBC_Chart">
			<svg class="Outer_Rectangle_cj">
				<rect id="Outer_Rectangle_cj" rx="0" ry="0" x="0" y="0" width="136" height="116">
				</rect>
			</svg>
			<svg class="Inner_Rectangle_ck">
				<rect id="Inner_Rectangle_ck" rx="0" ry="0" x="0" y="0" width="128" height="96">
				</rect>
			</svg>
			<svg class="Title_cl" viewBox="358.316 138.48 25.13 8.64">
				<path id="Title_cl" d="M 363.81201171875 147 L 362.0960083007813 144.5399932861328 C 362.0239868164063 144.5480041503906 361.9159851074219 144.552001953125 361.7720031738281 144.552001953125 L 359.8760070800781 144.552001953125 L 359.8760070800781 147 L 358.3160095214844 147 L 358.3160095214844 138.6000061035156 L 361.7720031738281 138.6000061035156 C 362.5 138.6000061035156 363.1319885253906 138.7200012207031 363.6679992675781 138.9600067138672 C 364.2120056152344 139.1999969482422 364.6279907226563 139.5440063476563 364.9159851074219 139.9920043945313 C 365.2040100097656 140.4400024414063 365.3479919433594 140.9720001220703 365.3479919433594 141.5879974365234 C 365.3479919433594 142.2200012207031 365.1919860839844 142.7640075683594 364.8800048828125 143.2200012207031 C 364.5759887695313 143.6759948730469 364.135986328125 144.0160064697266 363.5599975585938 144.2400054931641 L 365.4920043945313 147 L 363.81201171875 147 Z M 363.7760009765625 141.5879974365234 C 363.7760009765625 141.052001953125 363.6000061035156 140.6399993896484 363.2470092773438 140.3520050048828 C 362.89599609375 140.0639953613281 362.3800048828125 139.9199981689453 361.7000122070313 139.9199981689453 L 359.8760070800781 139.9199981689453 L 359.8760070800781 143.2680053710938 L 361.7000122070313 143.2680053710938 C 362.3800048828125 143.2680053710938 362.89599609375 143.1239929199219 363.2470092773438 142.8359985351563 C 363.6000061035156 142.5399932861328 363.7760009765625 142.1239929199219 363.7760009765625 141.5879974365234 Z M 373.0450134277344 142.6320037841797 C 373.5090026855469 142.7839965820313 373.8770141601563 143.0399932861328 374.1489868164063 143.3999938964844 C 374.4209899902344 143.7519989013672 374.5570068359375 144.1920013427734 374.5570068359375 144.7200012207031 C 374.5570068359375 145.447998046875 374.2770080566406 146.0119934082031 373.7170104980469 146.4120025634766 C 373.1570129394531 146.8040008544922 372.3410034179688 147 371.2690124511719 147 L 367.0929870605469 147 L 367.0929870605469 138.6000061035156 L 371.0289916992188 138.6000061035156 C 372.02099609375 138.6000061035156 372.7850036621094 138.7960052490234 373.3210144042969 139.1880035400391 C 373.8569946289063 139.5720062255859 374.125 140.10400390625 374.125 140.7839965820313 C 374.125 141.1999969482422 374.0289916992188 141.5679931640625 373.8370056152344 141.8880004882813 C 373.6449890136719 142.2079925537109 373.3810119628906 142.4559936523438 373.0450134277344 142.6320037841797 Z M 368.6530151367188 139.8240051269531 L 368.6530151367188 142.1399993896484 L 370.8609924316406 142.1399993896484 C 371.4049987792969 142.1399993896484 371.8210144042969 142.0440063476563 372.1090087890625 141.8520050048828 C 372.4049987792969 141.6519927978516 372.5530090332031 141.3639984130859 372.5530090332031 140.9880065917969 C 372.5530090332031 140.60400390625 372.4049987792969 140.3159942626953 372.1090087890625 140.1239929199219 C 371.8210144042969 139.9239959716797 371.4049987792969 139.8240051269531 370.8609924316406 139.8240051269531 L 368.6530151367188 139.8240051269531 Z M 371.1730041503906 145.7760009765625 C 372.3810119628906 145.7760009765625 372.9849853515625 145.3719940185547 372.9849853515625 144.5639953613281 C 372.9849853515625 143.7559967041016 372.3810119628906 143.3520050048828 371.1730041503906 143.3520050048828 L 368.6530151367188 143.3520050048828 L 368.6530151367188 145.7760009765625 L 371.1730041503906 145.7760009765625 Z M 380.1099853515625 147.1199951171875 C 379.2619934082031 147.1199951171875 378.4939880371094 146.9360046386719 377.8059997558594 146.5679931640625 C 377.1260070800781 146.1920013427734 376.5899963378906 145.6759948730469 376.197998046875 145.0200042724609 C 375.8139953613281 144.3639984130859 375.6220092773438 143.6239929199219 375.6220092773438 142.8000030517578 C 375.6220092773438 141.9759979248047 375.8179931640625 141.2359924316406 376.2099914550781 140.5800018310547 C 376.6019897460938 139.9239959716797 377.1380004882813 139.4120025634766 377.8179931640625 139.0440063476563 C 378.5060119628906 138.6679992675781 379.2739868164063 138.4799957275391 380.1220092773438 138.4799957275391 C 380.8099975585938 138.4799957275391 381.43798828125 138.6000061035156 382.0060119628906 138.8399963378906 C 382.5740051269531 139.0800018310547 383.0539855957031 139.4279937744141 383.4460144042969 139.8840026855469 L 382.43798828125 140.8320007324219 C 381.8299865722656 140.1759948730469 381.0820007324219 139.8480072021484 380.1940002441406 139.8480072021484 C 379.6180114746094 139.8480072021484 379.1019897460938 139.9759979248047 378.64599609375 140.2319946289063 C 378.1900024414063 140.4799957275391 377.8340148925781 140.8280029296875 377.5780029296875 141.2760009765625 C 377.3219909667969 141.7239990234375 377.1940002441406 142.2319946289063 377.1940002441406 142.8000030517578 C 377.1940002441406 143.3679962158203 377.3219909667969 143.8760070800781 377.5780029296875 144.3240051269531 C 377.8340148925781 144.7720031738281 378.1900024414063 145.1239929199219 378.64599609375 145.3800048828125 C 379.1019897460938 145.6280059814453 379.6180114746094 145.7519989013672 380.1940002441406 145.7519989013672 C 381.0820007324219 145.7519989013672 381.8299865722656 145.4199981689453 382.43798828125 144.7559967041016 L 383.4460144042969 145.7160034179688 C 383.0539855957031 146.1719970703125 382.5700073242188 146.5200042724609 381.9939880371094 146.7599945068359 C 381.4259948730469 147 380.7980041503906 147.1199951171875 380.1099853515625 147.1199951171875 Z">
				</path>
			</svg>
			<svg class="Reading" viewBox="353.211 229.4 34.047 12.708">
				<path id="Reading" d="M 364.3529968261719 238.9040069580078 L 361.9590148925781 238.9040069580078 L 361.9590148925781 242 L 360.2130126953125 242 L 360.2130126953125 238.9040069580078 L 353.2109985351563 238.9040069580078 L 353.2109985351563 237.6439971923828 L 359.6549987792969 229.3999938964844 L 361.5989990234375 229.3999938964844 L 355.4249877929688 237.3560028076172 L 360.2669982910156 237.3560028076172 L 360.2669982910156 234.6199951171875 L 361.9590148925781 234.6199951171875 L 361.9590148925781 237.3560028076172 L 364.3529968261719 237.3560028076172 L 364.3529968261719 238.9040069580078 Z M 366.9719848632813 242.1080017089844 C 366.635986328125 242.1080017089844 366.3479919433594 241.9940032958984 366.1080017089844 241.7660064697266 C 365.8680114746094 241.5260009765625 365.7479858398438 241.2259979248047 365.7479858398438 240.8659973144531 C 365.7479858398438 240.5180053710938 365.8680114746094 240.2299957275391 366.1080017089844 240.0019989013672 C 366.3479919433594 239.7619934082031 366.635986328125 239.6419982910156 366.9719848632813 239.6419982910156 C 367.3080139160156 239.6419982910156 367.5899963378906 239.7559967041016 367.8179931640625 239.9839935302734 C 368.0459899902344 240.2120056152344 368.1600036621094 240.5059967041016 368.1600036621094 240.8659973144531 C 368.1600036621094 241.2259979248047 368.0400085449219 241.5260009765625 367.7999877929688 241.7660064697266 C 367.5719909667969 241.9940032958984 367.2959899902344 242.1080017089844 366.9719848632813 242.1080017089844 Z M 373.5400085449219 229.3999938964844 L 373.5400085449219 242 L 371.7579956054688 242 L 371.7579956054688 230.9660034179688 L 368.9140014648438 230.9660034179688 L 368.9140014648438 229.3999938964844 L 373.5400085449219 229.3999938964844 Z M 387.2579956054688 238.9040069580078 L 384.864013671875 238.9040069580078 L 384.864013671875 242 L 383.1180114746094 242 L 383.1180114746094 238.9040069580078 L 376.1159973144531 238.9040069580078 L 376.1159973144531 237.6439971923828 L 382.5599975585938 229.3999938964844 L 384.5039978027344 229.3999938964844 L 378.3299865722656 237.3560028076172 L 383.1719970703125 237.3560028076172 L 383.1719970703125 234.6199951171875 L 384.864013671875 234.6199951171875 L 384.864013671875 237.3560028076172 L 387.2579956054688 237.3560028076172 L 387.2579956054688 238.9040069580078 Z">
				</path>
			</svg>
		</div>
		<div id="WBC_Chart">
			<svg class="Outer_Rectangle_co">
				<rect id="Outer_Rectangle_co" rx="0" ry="0" x="0" y="0" width="136" height="116">
				</rect>
			</svg>
			<svg class="Inner_Rectangle_cp">
				<rect id="Inner_Rectangle_cp" rx="0" ry="0" x="0" y="0" width="128" height="96">
				</rect>
			</svg>
			<svg class="Title_cq" viewBox="208.627 138.48 30.704 8.64">
				<path id="Title_cq" d="M 221.7070007324219 138.6000061035156 L 218.9230041503906 147 L 217.2669982910156 147 L 215.1909942626953 140.7839965820313 L 213.0789947509766 147 L 211.4109954833984 147 L 208.6269989013672 138.6000061035156 L 210.2469940185547 138.6000061035156 L 212.3350067138672 144.9839935302734 L 214.5070037841797 138.6000061035156 L 215.9470062255859 138.6000061035156 L 218.0709991455078 145.0200042724609 L 220.218994140625 138.6000061035156 L 221.7070007324219 138.6000061035156 Z M 228.9299926757813 142.6320037841797 C 229.3939971923828 142.7839965820313 229.7619934082031 143.0399932861328 230.0339965820313 143.3999938964844 C 230.3059997558594 143.7519989013672 230.4420013427734 144.1920013427734 230.4420013427734 144.7200012207031 C 230.4420013427734 145.447998046875 230.1620025634766 146.0119934082031 229.6020050048828 146.4120025634766 C 229.0420074462891 146.8040008544922 228.2259979248047 147 227.1540069580078 147 L 222.9779968261719 147 L 222.9779968261719 138.6000061035156 L 226.9140014648438 138.6000061035156 C 227.906005859375 138.6000061035156 228.6699981689453 138.7960052490234 229.2059936523438 139.1880035400391 C 229.7420043945313 139.5720062255859 230.0099945068359 140.10400390625 230.0099945068359 140.7839965820313 C 230.0099945068359 141.1999969482422 229.9140014648438 141.5679931640625 229.7220001220703 141.8880004882813 C 229.5299987792969 142.2079925537109 229.2660064697266 142.4559936523438 228.9299926757813 142.6320037841797 Z M 224.5379943847656 139.8240051269531 L 224.5379943847656 142.1399993896484 L 226.7460021972656 142.1399993896484 C 227.2899932861328 142.1399993896484 227.7059936523438 142.0440063476563 227.9940032958984 141.8520050048828 C 228.2899932861328 141.6519927978516 228.4380035400391 141.3639984130859 228.4380035400391 140.9880065917969 C 228.4380035400391 140.60400390625 228.2899932861328 140.3159942626953 227.9940032958984 140.1239929199219 C 227.7059936523438 139.9239959716797 227.2899932861328 139.8240051269531 226.7460021972656 139.8240051269531 L 224.5379943847656 139.8240051269531 Z M 227.0579986572266 145.7760009765625 C 228.2660064697266 145.7760009765625 228.8699951171875 145.3719940185547 228.8699951171875 144.5639953613281 C 228.8699951171875 143.7559967041016 228.2660064697266 143.3520050048828 227.0579986572266 143.3520050048828 L 224.5379943847656 143.3520050048828 L 224.5379943847656 145.7760009765625 L 227.0579986572266 145.7760009765625 Z M 235.9949951171875 147.1199951171875 C 235.1470031738281 147.1199951171875 234.3789978027344 146.9360046386719 233.6909942626953 146.5679931640625 C 233.0110015869141 146.1920013427734 232.4750061035156 145.6759948730469 232.0829925537109 145.0200042724609 C 231.6990051269531 144.3639984130859 231.5070037841797 143.6239929199219 231.5070037841797 142.8000030517578 C 231.5070037841797 141.9759979248047 231.7030029296875 141.2359924316406 232.0950012207031 140.5800018310547 C 232.4869995117188 139.9239959716797 233.0229949951172 139.4120025634766 233.7030029296875 139.0440063476563 C 234.3910064697266 138.6679992675781 235.1589965820313 138.4799957275391 236.0070037841797 138.4799957275391 C 236.6950073242188 138.4799957275391 237.322998046875 138.6000061035156 237.8910064697266 138.8399963378906 C 238.4589996337891 139.0800018310547 238.9389953613281 139.4279937744141 239.3309936523438 139.8840026855469 L 238.322998046875 140.8320007324219 C 237.7149963378906 140.1759948730469 236.9669952392578 139.8480072021484 236.0789947509766 139.8480072021484 C 235.5030059814453 139.8480072021484 234.9869995117188 139.9759979248047 234.531005859375 140.2319946289063 C 234.0749969482422 140.4799957275391 233.718994140625 140.8280029296875 233.4629974365234 141.2760009765625 C 233.2070007324219 141.7239990234375 233.0789947509766 142.2319946289063 233.0789947509766 142.8000030517578 C 233.0789947509766 143.3679962158203 233.2070007324219 143.8760070800781 233.4629974365234 144.3240051269531 C 233.718994140625 144.7720031738281 234.0749969482422 145.1239929199219 234.531005859375 145.3800048828125 C 234.9869995117188 145.6280059814453 235.5030059814453 145.7519989013672 236.0789947509766 145.7519989013672 C 236.9669952392578 145.7519989013672 237.7149963378906 145.4199981689453 238.322998046875 144.7559967041016 L 239.3309936523438 145.7160034179688 C 238.9389953613281 146.1719970703125 238.4550018310547 146.5200042724609 237.8789978027344 146.7599945068359 C 237.3110046386719 147 236.6829986572266 147.1199951171875 235.9949951171875 147.1199951171875 Z">
				</path>
			</svg>
			<div id="Enter_WBC_Chart">
				<span>7200</span>
			</div>
		</div>
		<div id="Haemoglobin_Chart">
			<svg class="Outer_Rectangle_ct">
				<rect id="Outer_Rectangle_ct" rx="0" ry="0" x="0" y="0" width="136" height="116">
				</rect>
			</svg>
			<svg class="Inner_Rectangle_cu">
				<rect id="Inner_Rectangle_cu" rx="0" ry="0" x="0" y="0" width="128" height="96">
				</rect>
			</svg>
			<svg class="Title_cv" viewBox="30.437 138.48 95.132 8.64">
				<path id="Title_cv" d="M 37.90060043334961 138.6000061035156 L 37.90060043334961 147 L 36.34059906005859 147 L 36.34059906005859 143.3999938964844 L 31.9965991973877 143.3999938964844 L 31.9965991973877 147 L 30.43659973144531 147 L 30.43659973144531 138.6000061035156 L 31.9965991973877 138.6000061035156 L 31.9965991973877 142.0679931640625 L 36.34059906005859 142.0679931640625 L 36.34059906005859 138.6000061035156 L 37.90060043334961 138.6000061035156 Z M 45.59939956665039 145.0559997558594 L 41.39939880371094 145.0559997558594 L 40.5713996887207 147 L 38.96340179443359 147 L 42.74340057373047 138.6000061035156 L 44.27939987182617 138.6000061035156 L 48.0713996887207 147 L 46.43939971923828 147 L 45.59939956665039 145.0559997558594 Z M 45.08340072631836 143.8320007324219 L 43.4994010925293 140.1600036621094 L 41.92739868164063 143.8320007324219 L 45.08340072631836 143.8320007324219 Z M 55.43970108032227 145.6920013427734 L 55.43970108032227 147 L 49.13970184326172 147 L 49.13970184326172 138.6000061035156 L 55.27170181274414 138.6000061035156 L 55.27170181274414 139.9080047607422 L 50.69969940185547 139.9080047607422 L 50.69969940185547 142.0919952392578 L 54.75569915771484 142.0919952392578 L 54.75569915771484 143.3760070800781 L 50.69969940185547 143.3760070800781 L 50.69969940185547 145.6920013427734 L 55.43970108032227 145.6920013427734 Z M 64.89479827880859 147 L 64.88279724121094 141.4320068359375 L 62.12279891967773 146.0399932861328 L 61.42679977416992 146.0399932861328 L 58.66680145263672 141.5039978027344 L 58.66680145263672 147 L 57.17879867553711 147 L 57.17879867553711 138.6000061035156 L 58.46279907226563 138.6000061035156 L 61.79880142211914 144.1679992675781 L 65.07479858398438 138.6000061035156 L 66.35880279541016 138.6000061035156 L 66.37079620361328 147 L 64.89479827880859 147 Z M 72.56369781494141 147.1199951171875 C 71.70770263671875 147.1199951171875 70.93569946289063 146.9360046386719 70.24770355224609 146.5679931640625 C 69.55970001220703 146.1920013427734 69.01969909667969 145.6759948730469 68.62770080566406 145.0200042724609 C 68.23570251464844 144.3560028076172 68.03970336914063 143.6159973144531 68.03970336914063 142.8000030517578 C 68.03970336914063 141.9839935302734 68.23570251464844 141.2480010986328 68.62770080566406 140.5919952392578 C 69.01969909667969 139.9279937744141 69.55970001220703 139.4120025634766 70.24770355224609 139.0440063476563 C 70.93569946289063 138.6679992675781 71.70770263671875 138.4799957275391 72.56369781494141 138.4799957275391 C 73.41970062255859 138.4799957275391 74.19170379638672 138.6679992675781 74.87969970703125 139.0440063476563 C 75.56770324707031 139.4120025634766 76.10769653320313 139.9239959716797 76.49970245361328 140.5800018310547 C 76.89170074462891 141.2359924316406 77.08769989013672 141.9759979248047 77.08769989013672 142.8000030517578 C 77.08769989013672 143.6239929199219 76.89170074462891 144.3639984130859 76.49970245361328 145.0200042724609 C 76.10769653320313 145.6759948730469 75.56770324707031 146.1920013427734 74.87969970703125 146.5679931640625 C 74.19170379638672 146.9360046386719 73.41970062255859 147.1199951171875 72.56369781494141 147.1199951171875 Z M 72.56369781494141 145.7519989013672 C 73.12370300292969 145.7519989013672 73.62770080566406 145.6280059814453 74.07569885253906 145.3800048828125 C 74.52369689941406 145.1239929199219 74.87570190429688 144.7720031738281 75.13169860839844 144.3240051269531 C 75.38770294189453 143.8679962158203 75.51570129394531 143.3600006103516 75.51570129394531 142.8000030517578 C 75.51570129394531 142.2400054931641 75.38770294189453 141.7359924316406 75.13169860839844 141.2879943847656 C 74.87570190429688 140.8320007324219 74.52369689941406 140.4799957275391 74.07569885253906 140.2319946289063 C 73.62770080566406 139.9759979248047 73.12370300292969 139.8480072021484 72.56369781494141 139.8480072021484 C 72.00370025634766 139.8480072021484 71.49970245361328 139.9759979248047 71.05169677734375 140.2319946289063 C 70.60369873046875 140.4799957275391 70.25170135498047 140.8320007324219 69.99569702148438 141.2879943847656 C 69.73970031738281 141.7359924316406 69.61170196533203 142.2400054931641 69.61170196533203 142.8000030517578 C 69.61170196533203 143.3600006103516 69.73970031738281 143.8679962158203 69.99569702148438 144.3240051269531 C 70.25170135498047 144.7720031738281 70.60369873046875 145.1239929199219 71.05169677734375 145.3800048828125 C 71.49970245361328 145.6280059814453 72.00370025634766 145.7519989013672 72.56369781494141 145.7519989013672 Z M 84.47730255126953 142.7039947509766 L 85.95330047607422 142.7039947509766 L 85.95330047607422 146.052001953125 C 85.52130126953125 146.39599609375 85.01730346679688 146.6600036621094 84.44129943847656 146.843994140625 C 83.86530303955078 147.0279998779297 83.27330017089844 147.1199951171875 82.66529846191406 147.1199951171875 C 81.80930328369141 147.1199951171875 81.03730010986328 146.9360046386719 80.34929656982422 146.5679931640625 C 79.66130065917969 146.1920013427734 79.12129974365234 145.6759948730469 78.72930145263672 145.0200042724609 C 78.33730316162109 144.3639984130859 78.14129638671875 143.6239929199219 78.14129638671875 142.8000030517578 C 78.14129638671875 141.9759979248047 78.33730316162109 141.2359924316406 78.72930145263672 140.5800018310547 C 79.12129974365234 139.9239959716797 79.66130065917969 139.4120025634766 80.34929656982422 139.0440063476563 C 81.04530334472656 138.6679992675781 81.82530212402344 138.4799957275391 82.68930053710938 138.4799957275391 C 83.39330291748047 138.4799957275391 84.03330230712891 138.5959930419922 84.60929870605469 138.8280029296875 C 85.185302734375 139.0599975585938 85.66929626464844 139.3999938964844 86.06130218505859 139.8480072021484 L 85.07730102539063 140.8079986572266 C 84.43730163574219 140.1679992675781 83.66529846191406 139.8480072021484 82.76129913330078 139.8480072021484 C 82.16929626464844 139.8480072021484 81.64129638671875 139.9720001220703 81.17729949951172 140.2200012207031 C 80.72129821777344 140.4680023193359 80.36129760742188 140.8159942626953 80.09729766845703 141.2640075683594 C 79.84130096435547 141.7120056152344 79.71330261230469 142.2239990234375 79.71330261230469 142.8000030517578 C 79.71330261230469 143.3600006103516 79.84130096435547 143.8639984130859 80.09729766845703 144.3119964599609 C 80.36129760742188 144.7599945068359 80.72129821777344 145.1119995117188 81.17729949951172 145.3679962158203 C 81.64129638671875 145.6239929199219 82.16529846191406 145.7519989013672 82.74929809570313 145.7519989013672 C 83.40529632568359 145.7519989013672 83.98130035400391 145.6080017089844 84.47730255126953 145.3200073242188 L 84.47730255126953 142.7039947509766 Z M 88.01080322265625 138.6000061035156 L 89.57080078125 138.6000061035156 L 89.57080078125 145.6799926757813 L 93.96279907226563 145.6799926757813 L 93.96279907226563 147 L 88.01080322265625 147 L 88.01080322265625 138.6000061035156 Z M 98.96610260009766 147.1199951171875 C 98.11009979248047 147.1199951171875 97.33809661865234 146.9360046386719 96.65010070800781 146.5679931640625 C 95.96209716796875 146.1920013427734 95.42209625244141 145.6759948730469 95.03009796142578 145.0200042724609 C 94.63809967041016 144.3560028076172 94.44210052490234 143.6159973144531 94.44210052490234 142.8000030517578 C 94.44210052490234 141.9839935302734 94.63809967041016 141.2480010986328 95.03009796142578 140.5919952392578 C 95.42209625244141 139.9279937744141 95.96209716796875 139.4120025634766 96.65010070800781 139.0440063476563 C 97.33809661865234 138.6679992675781 98.11009979248047 138.4799957275391 98.96610260009766 138.4799957275391 C 99.82209777832031 138.4799957275391 100.5940017700195 138.6679992675781 101.2819976806641 139.0440063476563 C 101.9700012207031 139.4120025634766 102.5100021362305 139.9239959716797 102.9020004272461 140.5800018310547 C 103.2939987182617 141.2359924316406 103.4899978637695 141.9759979248047 103.4899978637695 142.8000030517578 C 103.4899978637695 143.6239929199219 103.2939987182617 144.3639984130859 102.9020004272461 145.0200042724609 C 102.5100021362305 145.6759948730469 101.9700012207031 146.1920013427734 101.2819976806641 146.5679931640625 C 100.5940017700195 146.9360046386719 99.82209777832031 147.1199951171875 98.96610260009766 147.1199951171875 Z M 98.96610260009766 145.7519989013672 C 99.52610015869141 145.7519989013672 100.0299987792969 145.6280059814453 100.4779968261719 145.3800048828125 C 100.9260025024414 145.1239929199219 101.2779998779297 144.7720031738281 101.5339965820313 144.3240051269531 C 101.7900009155273 143.8679962158203 101.9179992675781 143.3600006103516 101.9179992675781 142.8000030517578 C 101.9179992675781 142.2400054931641 101.7900009155273 141.7359924316406 101.5339965820313 141.2879943847656 C 101.2779998779297 140.8320007324219 100.9260025024414 140.4799957275391 100.4779968261719 140.2319946289063 C 100.0299987792969 139.9759979248047 99.52610015869141 139.8480072021484 98.96610260009766 139.8480072021484 C 98.40609741210938 139.8480072021484 97.902099609375 139.9759979248047 97.4541015625 140.2319946289063 C 97.006103515625 140.4799957275391 96.65409851074219 140.8320007324219 96.39810180664063 141.2879943847656 C 96.14209747314453 141.7359924316406 96.01409912109375 142.2400054931641 96.01409912109375 142.8000030517578 C 96.01409912109375 143.3600006103516 96.14209747314453 143.8679962158203 96.39810180664063 144.3240051269531 C 96.65409851074219 144.7720031738281 97.006103515625 145.1239929199219 97.4541015625 145.3800048828125 C 97.902099609375 145.6280059814453 98.40609741210938 145.7519989013672 98.96610260009766 145.7519989013672 Z M 111.0960006713867 142.6320037841797 C 111.5599975585938 142.7839965820313 111.9280014038086 143.0399932861328 112.1999969482422 143.3999938964844 C 112.4720001220703 143.7519989013672 112.6080017089844 144.1920013427734 112.6080017089844 144.7200012207031 C 112.6080017089844 145.447998046875 112.3280029296875 146.0119934082031 111.7679977416992 146.4120025634766 C 111.2080001831055 146.8040008544922 110.3919982910156 147 109.3199996948242 147 L 105.1439971923828 147 L 105.1439971923828 138.6000061035156 L 109.0800018310547 138.6000061035156 C 110.0719985961914 138.6000061035156 110.8359985351563 138.7960052490234 111.3720016479492 139.1880035400391 C 111.9079971313477 139.5720062255859 112.1760025024414 140.10400390625 112.1760025024414 140.7839965820313 C 112.1760025024414 141.1999969482422 112.0800018310547 141.5679931640625 111.8880004882813 141.8880004882813 C 111.6959991455078 142.2079925537109 111.431999206543 142.4559936523438 111.0960006713867 142.6320037841797 Z M 106.7040023803711 139.8240051269531 L 106.7040023803711 142.1399993896484 L 108.9120025634766 142.1399993896484 C 109.4560012817383 142.1399993896484 109.8720016479492 142.0440063476563 110.1600036621094 141.8520050048828 C 110.4560012817383 141.6519927978516 110.6039962768555 141.3639984130859 110.6039962768555 140.9880065917969 C 110.6039962768555 140.60400390625 110.4560012817383 140.3159942626953 110.1600036621094 140.1239929199219 C 109.8720016479492 139.9239959716797 109.4560012817383 139.8240051269531 108.9120025634766 139.8240051269531 L 106.7040023803711 139.8240051269531 Z M 109.2239990234375 145.7760009765625 C 110.431999206543 145.7760009765625 111.036003112793 145.3719940185547 111.036003112793 144.5639953613281 C 111.036003112793 143.7559967041016 110.431999206543 143.3520050048828 109.2239990234375 143.3520050048828 L 106.7040023803711 143.3520050048828 L 106.7040023803711 145.7760009765625 L 109.2239990234375 145.7760009765625 Z M 114.2730026245117 138.6000061035156 L 115.8330001831055 138.6000061035156 L 115.8330001831055 147 L 114.2730026245117 147 L 114.2730026245117 138.6000061035156 Z M 125.5690002441406 138.6000061035156 L 125.5690002441406 147 L 124.2850036621094 147 L 119.6529998779297 141.3119964599609 L 119.6529998779297 147 L 118.1050033569336 147 L 118.1050033569336 138.6000061035156 L 119.3889999389648 138.6000061035156 L 124.0210037231445 144.2879943847656 L 124.0210037231445 138.6000061035156 L 125.5690002441406 138.6000061035156 Z">
				</path>
			</svg>
			<div id="Enter_Haemoglobin_Chart">
				<span>12.5</span>
			</div>
		</div>
	</div>
	<div id="Personal_Infromation">
		<svg class="Personal_Information_Rectangle">
			<rect id="Personal_Information_Rectangle" rx="0" ry="0" x="0" y="0" width="547" height="57">
			</rect>
		</svg>
		<div id="Enter_Date">
			<span>July 1, 2020</span>
		</div>
		<svg class="Date" viewBox="296.128 88.6 27.958 8.484">
			<path id="Date" d="M 296.1279907226563 88.59999847412109 L 299.7999877929688 88.59999847412109 C 300.6960144042969 88.59999847412109 301.4920043945313 88.7760009765625 302.18798828125 89.12799835205078 C 302.8840026855469 89.47200012207031 303.4240112304688 89.96399688720703 303.8080139160156 90.60399627685547 C 304.1919860839844 91.23600006103516 304.3840026855469 91.96800231933594 304.3840026855469 92.80000305175781 C 304.3840026855469 93.63200378417969 304.1919860839844 94.36799621582031 303.8080139160156 95.00800323486328 C 303.4240112304688 95.63999938964844 302.8840026855469 96.13200378417969 302.18798828125 96.48400115966797 C 301.4920043945313 96.8280029296875 300.6960144042969 97 299.7999877929688 97 L 296.1279907226563 97 L 296.1279907226563 88.59999847412109 Z M 299.7279968261719 95.68000030517578 C 300.343994140625 95.68000030517578 300.8840026855469 95.56400299072266 301.3479919433594 95.33200073242188 C 301.8200073242188 95.09200286865234 302.1799926757813 94.75599670410156 302.4280090332031 94.32399749755859 C 302.6839904785156 93.88400268554688 302.81201171875 93.37599945068359 302.81201171875 92.80000305175781 C 302.81201171875 92.2239990234375 302.6839904785156 91.72000122070313 302.4280090332031 91.28800201416016 C 302.1799926757813 90.84799957275391 301.8200073242188 90.51200103759766 301.3479919433594 90.27999877929688 C 300.8840026855469 90.04000091552734 300.343994140625 89.91999816894531 299.7279968261719 89.91999816894531 L 297.68798828125 89.91999816894531 L 297.68798828125 95.68000030517578 L 299.7279968261719 95.68000030517578 Z M 308.3460083007813 90.51999664306641 C 309.2900085449219 90.51999664306641 310.010009765625 90.74800109863281 310.5060119628906 91.20400238037109 C 311.010009765625 91.65200042724609 311.2619934082031 92.33200073242188 311.2619934082031 93.24400329589844 L 311.2619934082031 97 L 309.8460083007813 97 L 309.8460083007813 96.22000122070313 C 309.6619873046875 96.5 309.3980102539063 96.71600341796875 309.0539855957031 96.86799621582031 C 308.7179870605469 97.01200103759766 308.3099975585938 97.08399963378906 307.8299865722656 97.08399963378906 C 307.3500061035156 97.08399963378906 306.9299926757813 97.00399780273438 306.5700073242188 96.84400177001953 C 306.2099914550781 96.67600250244141 305.9299926757813 96.447998046875 305.7300109863281 96.16000366210938 C 305.5379943847656 95.86399841308594 305.4419860839844 95.53199768066406 305.4419860839844 95.16400146484375 C 305.4419860839844 94.58799743652344 305.6539916992188 94.12799835205078 306.0780029296875 93.78399658203125 C 306.510009765625 93.43199920654297 307.1860046386719 93.25599670410156 308.1059875488281 93.25599670410156 L 309.7619934082031 93.25599670410156 L 309.7619934082031 93.16000366210938 C 309.7619934082031 92.71199798583984 309.6260070800781 92.36799621582031 309.35400390625 92.12799835205078 C 309.0899963378906 91.88800048828125 308.6940002441406 91.76799774169922 308.1659851074219 91.76799774169922 C 307.8059997558594 91.76799774169922 307.4500122070313 91.82399749755859 307.0979919433594 91.93599700927734 C 306.7539978027344 92.04799652099609 306.4620056152344 92.20400238037109 306.2219848632813 92.40399932861328 L 305.6340026855469 91.31199645996094 C 305.9700012207031 91.05599975585938 306.3739929199219 90.86000061035156 306.8460083007813 90.7239990234375 C 307.3179931640625 90.58799743652344 307.8179931640625 90.51999664306641 308.3460083007813 90.51999664306641 Z M 308.1419982910156 95.99199676513672 C 308.5180053710938 95.99199676513672 308.8500061035156 95.90799713134766 309.1380004882813 95.73999786376953 C 309.4339904785156 95.56400299072266 309.6419982910156 95.31600189208984 309.7619934082031 94.99600219726563 L 309.7619934082031 94.25199890136719 L 308.2139892578125 94.25199890136719 C 307.3500061035156 94.25199890136719 306.9179992675781 94.53600311279297 306.9179992675781 95.10399627685547 C 306.9179992675781 95.37599945068359 307.0260009765625 95.59200286865234 307.2420043945313 95.75199890136719 C 307.4580078125 95.91200256347656 307.7579956054688 95.99199676513672 308.1419982910156 95.99199676513672 Z M 317.0390014648438 96.65200042724609 C 316.8630065917969 96.79599761962891 316.6470031738281 96.90399932861328 316.3909912109375 96.97599792480469 C 316.1430053710938 97.04799652099609 315.8789978027344 97.08399963378906 315.5989990234375 97.08399963378906 C 314.8949890136719 97.08399963378906 314.3510131835938 96.90000152587891 313.9670104980469 96.53199768066406 C 313.5830078125 96.16400146484375 313.3909912109375 95.62799835205078 313.3909912109375 94.92400360107422 L 313.3909912109375 91.83999633789063 L 312.3349914550781 91.83999633789063 L 312.3349914550781 90.63999938964844 L 313.3909912109375 90.63999938964844 L 313.3909912109375 89.17600250244141 L 314.8909912109375 89.17600250244141 L 314.8909912109375 90.63999938964844 L 316.6069946289063 90.63999938964844 L 316.6069946289063 91.83999633789063 L 314.8909912109375 91.83999633789063 L 314.8909912109375 94.88800048828125 C 314.8909912109375 95.19999694824219 314.9670104980469 95.44000244140625 315.1189880371094 95.60800170898438 C 315.27099609375 95.76799774169922 315.4909973144531 95.84799957275391 315.7789916992188 95.84799957275391 C 316.114990234375 95.84799957275391 316.3949890136719 95.76000213623047 316.6189880371094 95.58399963378906 L 317.0390014648438 96.65200042724609 Z M 324.0859985351563 93.83200073242188 C 324.0859985351563 93.93599700927734 324.0780029296875 94.08399963378906 324.06201171875 94.2760009765625 L 319.0339965820313 94.2760009765625 C 319.1220092773438 94.74800109863281 319.3500061035156 95.12400054931641 319.7179870605469 95.40399932861328 C 320.093994140625 95.67600250244141 320.5580139160156 95.81199645996094 321.1099853515625 95.81199645996094 C 321.8139953613281 95.81199645996094 322.3940124511719 95.58000183105469 322.8500061035156 95.11599731445313 L 323.6539916992188 96.04000091552734 C 323.3659973144531 96.38400268554688 323.0020141601563 96.64399719238281 322.56201171875 96.81999969482422 C 322.1220092773438 96.99600219726563 321.6260070800781 97.08399963378906 321.0740051269531 97.08399963378906 C 320.3699951171875 97.08399963378906 319.75 96.94400024414063 319.2139892578125 96.66400146484375 C 318.6780090332031 96.38400268554688 318.2619934082031 95.99600219726563 317.9660034179688 95.5 C 317.6780090332031 94.99600219726563 317.5339965820313 94.42800140380859 317.5339965820313 93.79599761962891 C 317.5339965820313 93.1719970703125 317.6740112304688 92.61199951171875 317.9540100097656 92.11599731445313 C 318.2420043945313 91.61199951171875 318.6380004882813 91.22000122070313 319.1419982910156 90.94000244140625 C 319.64599609375 90.66000366210938 320.2139892578125 90.51999664306641 320.8460083007813 90.51999664306641 C 321.4700012207031 90.51999664306641 322.0260009765625 90.66000366210938 322.5140075683594 90.94000244140625 C 323.010009765625 91.21199798583984 323.3940124511719 91.59999847412109 323.6659851074219 92.10399627685547 C 323.9460144042969 92.59999847412109 324.0859985351563 93.17600250244141 324.0859985351563 93.83200073242188 Z M 320.8460083007813 91.72000122070313 C 320.3659973144531 91.72000122070313 319.9580078125 91.86399841308594 319.6220092773438 92.15200042724609 C 319.2940063476563 92.43199920654297 319.093994140625 92.80799865722656 319.0220031738281 93.27999877929688 L 322.6579895019531 93.27999877929688 C 322.593994140625 92.81600189208984 322.3980102539063 92.44000244140625 322.0700073242188 92.15200042724609 C 321.7420043945313 91.86399841308594 321.3340148925781 91.72000122070313 320.8460083007813 91.72000122070313 Z">
			</path>
		</svg>
		<div id="Enter_Doctor_Name">
			<span>Dr B M Vishkerma</span>
		</div>
		<svg class="Refered_By" viewBox="296.128 67.012 71.95 11.4">
			<path id="Refered_By" d="M 301.6239929199219 76 L 299.9079895019531 73.54000091552734 C 299.8359985351563 73.54799652099609 299.7279968261719 73.552001953125 299.5840148925781 73.552001953125 L 297.68798828125 73.552001953125 L 297.68798828125 76 L 296.1279907226563 76 L 296.1279907226563 67.59999847412109 L 299.5840148925781 67.59999847412109 C 300.31201171875 67.59999847412109 300.9440002441406 67.72000122070313 301.4800109863281 67.95999908447266 C 302.0239868164063 68.19999694824219 302.4400024414063 68.54399871826172 302.7279968261719 68.99199676513672 C 303.0159912109375 69.44000244140625 303.1600036621094 69.97200012207031 303.1600036621094 70.58799743652344 C 303.1600036621094 71.22000122070313 303.0039978027344 71.76399993896484 302.6919860839844 72.22000122070313 C 302.3880004882813 72.67600250244141 301.947998046875 73.01599884033203 301.3720092773438 73.23999786376953 L 303.3039855957031 76 L 301.6239929199219 76 Z M 301.5880126953125 70.58799743652344 C 301.5880126953125 70.052001953125 301.4119873046875 69.63999938964844 301.0599975585938 69.35199737548828 C 300.7080078125 69.06400299072266 300.1919860839844 68.91999816894531 299.5119934082031 68.91999816894531 L 297.68798828125 68.91999816894531 L 297.68798828125 72.26799774169922 L 299.5119934082031 72.26799774169922 C 300.1919860839844 72.26799774169922 300.7080078125 72.12400054931641 301.0599975585938 71.83599853515625 C 301.4119873046875 71.54000091552734 301.5880126953125 71.12400054931641 301.5880126953125 70.58799743652344 Z M 310.7850036621094 72.83200073242188 C 310.7850036621094 72.93599700927734 310.7770080566406 73.08399963378906 310.760986328125 73.2760009765625 L 305.7330017089844 73.2760009765625 C 305.8210144042969 73.74800109863281 306.0490112304688 74.12400054931641 306.4169921875 74.40399932861328 C 306.7929992675781 74.67600250244141 307.2569885253906 74.81199645996094 307.8089904785156 74.81199645996094 C 308.5130004882813 74.81199645996094 309.0929870605469 74.58000183105469 309.5490112304688 74.11599731445313 L 310.3529968261719 75.04000091552734 C 310.0650024414063 75.38400268554688 309.7009887695313 75.64399719238281 309.260986328125 75.81999969482422 C 308.8210144042969 75.99600219726563 308.3250122070313 76.08399963378906 307.7730102539063 76.08399963378906 C 307.0690002441406 76.08399963378906 306.4490051269531 75.94400024414063 305.9129943847656 75.66400146484375 C 305.3770141601563 75.38400268554688 304.9609985351563 74.99600219726563 304.6650085449219 74.5 C 304.3770141601563 73.99600219726563 304.2330017089844 73.42800140380859 304.2330017089844 72.79599761962891 C 304.2330017089844 72.1719970703125 304.3729858398438 71.61199951171875 304.6530151367188 71.11599731445313 C 304.9410095214844 70.61199951171875 305.3370056152344 70.22000122070313 305.8410034179688 69.94000244140625 C 306.3450012207031 69.66000366210938 306.9129943847656 69.51999664306641 307.5450134277344 69.51999664306641 C 308.1690063476563 69.51999664306641 308.7250061035156 69.66000366210938 309.2130126953125 69.94000244140625 C 309.7090148925781 70.21199798583984 310.0929870605469 70.59999847412109 310.364990234375 71.10399627685547 C 310.6449890136719 71.59999847412109 310.7850036621094 72.17600250244141 310.7850036621094 72.83200073242188 Z M 307.5450134277344 70.72000122070313 C 307.0650024414063 70.72000122070313 306.6570129394531 70.86399841308594 306.3210144042969 71.15200042724609 C 305.9930114746094 71.43199920654297 305.7929992675781 71.80799865722656 305.7210083007813 72.27999877929688 L 309.3569946289063 72.27999877929688 C 309.2929992675781 71.81600189208984 309.0969848632813 71.44000244140625 308.7690124511719 71.15200042724609 C 308.4410095214844 70.86399841308594 308.0329895019531 70.72000122070313 307.5450134277344 70.72000122070313 Z M 314.8299865722656 68.2239990234375 C 314.197998046875 68.2239990234375 313.8819885253906 68.56800079345703 313.8819885253906 69.25599670410156 L 313.8819885253906 69.63999938964844 L 315.64599609375 69.63999938964844 L 315.64599609375 70.83999633789063 L 313.9299926757813 70.83999633789063 L 313.9299926757813 76 L 312.4299926757813 76 L 312.4299926757813 70.83999633789063 L 311.3739929199219 70.83999633789063 L 311.3739929199219 69.63999938964844 L 312.4299926757813 69.63999938964844 L 312.4299926757813 69.23200225830078 C 312.4299926757813 68.54399871826172 312.6300048828125 68.00399780273438 313.0299987792969 67.61199951171875 C 313.4299926757813 67.21199798583984 313.9939880371094 67.01200103759766 314.7219848632813 67.01200103759766 C 315.2980041503906 67.01200103759766 315.75 67.12799835205078 316.0780029296875 67.36000061035156 L 315.6579895019531 68.48799896240234 C 315.4020080566406 68.31199645996094 315.1260070800781 68.2239990234375 314.8299865722656 68.2239990234375 Z M 322.5859985351563 72.83200073242188 C 322.5859985351563 72.93599700927734 322.5780029296875 73.08399963378906 322.56201171875 73.2760009765625 L 317.5339965820313 73.2760009765625 C 317.6220092773438 73.74800109863281 317.8500061035156 74.12400054931641 318.2179870605469 74.40399932861328 C 318.593994140625 74.67600250244141 319.0580139160156 74.81199645996094 319.6099853515625 74.81199645996094 C 320.3139953613281 74.81199645996094 320.8940124511719 74.58000183105469 321.3500061035156 74.11599731445313 L 322.1539916992188 75.04000091552734 C 321.8659973144531 75.38400268554688 321.5020141601563 75.64399719238281 321.06201171875 75.81999969482422 C 320.6220092773438 75.99600219726563 320.1260070800781 76.08399963378906 319.5740051269531 76.08399963378906 C 318.8699951171875 76.08399963378906 318.25 75.94400024414063 317.7139892578125 75.66400146484375 C 317.1780090332031 75.38400268554688 316.7619934082031 74.99600219726563 316.4660034179688 74.5 C 316.1780090332031 73.99600219726563 316.0339965820313 73.42800140380859 316.0339965820313 72.79599761962891 C 316.0339965820313 72.1719970703125 316.1740112304688 71.61199951171875 316.4540100097656 71.11599731445313 C 316.7420043945313 70.61199951171875 317.1380004882813 70.22000122070313 317.6419982910156 69.94000244140625 C 318.14599609375 69.66000366210938 318.7139892578125 69.51999664306641 319.3460083007813 69.51999664306641 C 319.9700012207031 69.51999664306641 320.5260009765625 69.66000366210938 321.0140075683594 69.94000244140625 C 321.510009765625 70.21199798583984 321.8940124511719 70.59999847412109 322.1659851074219 71.10399627685547 C 322.4460144042969 71.59999847412109 322.5859985351563 72.17600250244141 322.5859985351563 72.83200073242188 Z M 319.3460083007813 70.72000122070313 C 318.8659973144531 70.72000122070313 318.4580078125 70.86399841308594 318.1220092773438 71.15200042724609 C 317.7940063476563 71.43199920654297 317.593994140625 71.80799865722656 317.5220031738281 72.27999877929688 L 321.1579895019531 72.27999877929688 C 321.093994140625 71.81600189208984 320.8980102539063 71.44000244140625 320.5700073242188 71.15200042724609 C 320.2420043945313 70.86399841308594 319.8340148925781 70.72000122070313 319.3460083007813 70.72000122070313 Z M 325.4549865722656 70.52799987792969 C 325.8869934082031 69.85600280761719 326.6470031738281 69.51999664306641 327.7349853515625 69.51999664306641 L 327.7349853515625 70.947998046875 C 327.6069946289063 70.92400360107422 327.4909973144531 70.91200256347656 327.3869934082031 70.91200256347656 C 326.8030090332031 70.91200256347656 326.3469848632813 71.08399963378906 326.0190124511719 71.42800140380859 C 325.6910095214844 71.76399993896484 325.5270080566406 72.25199890136719 325.5270080566406 72.89199829101563 L 325.5270080566406 76 L 324.0270080566406 76 L 324.0270080566406 69.59200286865234 L 325.4549865722656 69.59200286865234 L 325.4549865722656 70.52799987792969 Z M 330.4349975585938 70.52799987792969 C 330.8670043945313 69.85600280761719 331.6270141601563 69.51999664306641 332.7149963378906 69.51999664306641 L 332.7149963378906 70.947998046875 C 332.5870056152344 70.92400360107422 332.4710083007813 70.91200256347656 332.3670043945313 70.91200256347656 C 331.7829895019531 70.91200256347656 331.3269958496094 71.08399963378906 330.9989929199219 71.42800140380859 C 330.6709899902344 71.76399993896484 330.5069885253906 72.25199890136719 330.5069885253906 72.89199829101563 L 330.5069885253906 76 L 329.0069885253906 76 L 329.0069885253906 69.59200286865234 L 330.4349975585938 69.59200286865234 L 330.4349975585938 70.52799987792969 Z M 339.9530029296875 72.83200073242188 C 339.9530029296875 72.93599700927734 339.9450073242188 73.08399963378906 339.9289855957031 73.2760009765625 L 334.9010009765625 73.2760009765625 C 334.989013671875 73.74800109863281 335.2170104980469 74.12400054931641 335.5849914550781 74.40399932861328 C 335.9609985351563 74.67600250244141 336.4249877929688 74.81199645996094 336.9769897460938 74.81199645996094 C 337.6809997558594 74.81199645996094 338.260986328125 74.58000183105469 338.7170104980469 74.11599731445313 L 339.52099609375 75.04000091552734 C 339.2330017089844 75.38400268554688 338.8689880371094 75.64399719238281 338.4289855957031 75.81999969482422 C 337.989013671875 75.99600219726563 337.4930114746094 76.08399963378906 336.9410095214844 76.08399963378906 C 336.2369995117188 76.08399963378906 335.6170043945313 75.94400024414063 335.0809936523438 75.66400146484375 C 334.5450134277344 75.38400268554688 334.1289978027344 74.99600219726563 333.8330078125 74.5 C 333.5450134277344 73.99600219726563 333.4010009765625 73.42800140380859 333.4010009765625 72.79599761962891 C 333.4010009765625 72.1719970703125 333.5409851074219 71.61199951171875 333.8210144042969 71.11599731445313 C 334.1090087890625 70.61199951171875 334.5050048828125 70.22000122070313 335.0090026855469 69.94000244140625 C 335.5130004882813 69.66000366210938 336.0809936523438 69.51999664306641 336.7130126953125 69.51999664306641 C 337.3370056152344 69.51999664306641 337.8930053710938 69.66000366210938 338.3810119628906 69.94000244140625 C 338.8770141601563 70.21199798583984 339.260986328125 70.59999847412109 339.5329895019531 71.10399627685547 C 339.81298828125 71.59999847412109 339.9530029296875 72.17600250244141 339.9530029296875 72.83200073242188 Z M 336.7130126953125 70.72000122070313 C 336.2330017089844 70.72000122070313 335.8250122070313 70.86399841308594 335.489013671875 71.15200042724609 C 335.1610107421875 71.43199920654297 334.9609985351563 71.80799865722656 334.8890075683594 72.27999877929688 L 338.5249938964844 72.27999877929688 C 338.4609985351563 71.81600189208984 338.2650146484375 71.44000244140625 337.93701171875 71.15200042724609 C 337.6090087890625 70.86399841308594 337.2009887695313 70.72000122070313 336.7130126953125 70.72000122070313 Z M 347.6700134277344 67.09600067138672 L 347.6700134277344 76 L 346.2300109863281 76 L 346.2300109863281 75.1719970703125 C 345.9819946289063 75.47599792480469 345.6740112304688 75.70400238037109 345.3059997558594 75.85600280761719 C 344.9460144042969 76.00800323486328 344.5459899902344 76.08399963378906 344.1059875488281 76.08399963378906 C 343.489990234375 76.08399963378906 342.9339904785156 75.947998046875 342.43798828125 75.67600250244141 C 341.9500122070313 75.40399932861328 341.5660095214844 75.01999664306641 341.2860107421875 74.52400207519531 C 341.0060119628906 74.01999664306641 340.8659973144531 73.44400024414063 340.8659973144531 72.79599761962891 C 340.8659973144531 72.14800262451172 341.0060119628906 71.57599639892578 341.2860107421875 71.08000183105469 C 341.5660095214844 70.58399963378906 341.9500122070313 70.19999694824219 342.43798828125 69.92800140380859 C 342.9339904785156 69.65599822998047 343.489990234375 69.51999664306641 344.1059875488281 69.51999664306641 C 344.5299987792969 69.51999664306641 344.9179992675781 69.59200286865234 345.2699890136719 69.73600006103516 C 345.6220092773438 69.87999725341797 345.9219970703125 70.09600067138672 346.1700134277344 70.38400268554688 L 346.1700134277344 67.09600067138672 L 347.6700134277344 67.09600067138672 Z M 344.2860107421875 74.80000305175781 C 344.64599609375 74.80000305175781 344.9700012207031 74.72000122070313 345.2579956054688 74.55999755859375 C 345.5459899902344 74.39199829101563 345.7739868164063 74.15599822998047 345.9419860839844 73.85199737548828 C 346.1099853515625 73.54799652099609 346.1940002441406 73.19599914550781 346.1940002441406 72.79599761962891 C 346.1940002441406 72.39600372314453 346.1099853515625 72.04399871826172 345.9419860839844 71.73999786376953 C 345.7739868164063 71.43599700927734 345.5459899902344 71.20400238037109 345.2579956054688 71.04399871826172 C 344.9700012207031 70.87599945068359 344.64599609375 70.79199981689453 344.2860107421875 70.79199981689453 C 343.9259948730469 70.79199981689453 343.6019897460938 70.87599945068359 343.3139953613281 71.04399871826172 C 343.0260009765625 71.20400238037109 342.7980041503906 71.43599700927734 342.6300048828125 71.73999786376953 C 342.4620056152344 72.04399871826172 342.3779907226563 72.39600372314453 342.3779907226563 72.79599761962891 C 342.3779907226563 73.19599914550781 342.4620056152344 73.54799652099609 342.6300048828125 73.85199737548828 C 342.7980041503906 74.15599822998047 343.0260009765625 74.39199829101563 343.3139953613281 74.55999755859375 C 343.6019897460938 74.72000122070313 343.9259948730469 74.80000305175781 344.2860107421875 74.80000305175781 Z M 359.0450134277344 71.63200378417969 C 359.5090026855469 71.78399658203125 359.8770141601563 72.04000091552734 360.1489868164063 72.40000152587891 C 360.4209899902344 72.75199890136719 360.5570068359375 73.19200134277344 360.5570068359375 73.72000122070313 C 360.5570068359375 74.447998046875 360.2770080566406 75.01200103759766 359.7170104980469 75.41200256347656 C 359.1570129394531 75.80400085449219 358.3410034179688 76 357.2690124511719 76 L 353.0929870605469 76 L 353.0929870605469 67.59999847412109 L 357.0289916992188 67.59999847412109 C 358.02099609375 67.59999847412109 358.7850036621094 67.79599761962891 359.3210144042969 68.18800354003906 C 359.8569946289063 68.57199859619141 360.125 69.10399627685547 360.125 69.78399658203125 C 360.125 70.19999694824219 360.0289916992188 70.56800079345703 359.8370056152344 70.88800048828125 C 359.6449890136719 71.20800018310547 359.3810119628906 71.45600128173828 359.0450134277344 71.63200378417969 Z M 354.6530151367188 68.82399749755859 L 354.6530151367188 71.13999938964844 L 356.8609924316406 71.13999938964844 C 357.4049987792969 71.13999938964844 357.8210144042969 71.04399871826172 358.1090087890625 70.85199737548828 C 358.4049987792969 70.65200042724609 358.5530090332031 70.36399841308594 358.5530090332031 69.98799896240234 C 358.5530090332031 69.60399627685547 358.4049987792969 69.31600189208984 358.1090087890625 69.12400054931641 C 357.8210144042969 68.92400360107422 357.4049987792969 68.82399749755859 356.8609924316406 68.82399749755859 L 354.6530151367188 68.82399749755859 Z M 357.1730041503906 74.7760009765625 C 358.3810119628906 74.7760009765625 358.9849853515625 74.37200164794922 358.9849853515625 73.56400299072266 C 358.9849853515625 72.75599670410156 358.3810119628906 72.35199737548828 357.1730041503906 72.35199737548828 L 354.6530151367188 72.35199737548828 L 354.6530151367188 74.7760009765625 L 357.1730041503906 74.7760009765625 Z M 368.0780029296875 69.59200286865234 L 365.0780029296875 76.51599884033203 C 364.7980041503906 77.21199798583984 364.4580078125 77.69999694824219 364.0580139160156 77.98000335693359 C 363.6579895019531 78.26799774169922 363.1740112304688 78.41200256347656 362.6059875488281 78.41200256347656 C 362.2860107421875 78.41200256347656 361.9700012207031 78.36000061035156 361.6579895019531 78.25599670410156 C 361.3460083007813 78.15200042724609 361.0899963378906 78.00800323486328 360.8900146484375 77.82399749755859 L 361.489990234375 76.72000122070313 C 361.6340026855469 76.85600280761719 361.802001953125 76.96399688720703 361.9939880371094 77.04399871826172 C 362.1940002441406 77.12400054931641 362.3940124511719 77.16400146484375 362.593994140625 77.16400146484375 C 362.8580017089844 77.16400146484375 363.0740051269531 77.09600067138672 363.2420043945313 76.95999908447266 C 363.4179992675781 76.82399749755859 363.5780029296875 76.59600067138672 363.7219848632813 76.2760009765625 L 363.8299865722656 76.02400207519531 L 361.0339965820313 69.59200286865234 L 362.593994140625 69.59200286865234 L 364.6099853515625 74.33200073242188 L 366.6380004882813 69.59200286865234 L 368.0780029296875 69.59200286865234 Z">
			</path>
		</svg>
		<div id="Enter_Reg_No">
			<span>07-2020-OPD/4</span>
		</div>
		<svg class="Reg_No" viewBox="29.128 109.6 43.762 10.812">
			<path id="Reg_No" d="M 34.62400054931641 118 L 32.90800094604492 115.5400009155273 C 32.83599853515625 115.5479965209961 32.72800064086914 115.552001953125 32.58399963378906 115.552001953125 L 30.6879997253418 115.552001953125 L 30.6879997253418 118 L 29.12800025939941 118 L 29.12800025939941 109.5999984741211 L 32.58399963378906 109.5999984741211 C 33.3120002746582 109.5999984741211 33.94400024414063 109.7200012207031 34.47999954223633 109.9599990844727 C 35.02399826049805 110.1999969482422 35.43999862670898 110.5439987182617 35.72800064086914 110.9919967651367 C 36.01599884033203 111.4400024414063 36.15999984741211 111.9720001220703 36.15999984741211 112.5879974365234 C 36.15999984741211 113.2200012207031 36.00400161743164 113.7639999389648 35.69200134277344 114.2200012207031 C 35.38800048828125 114.6760025024414 34.94800186157227 115.015998840332 34.37200164794922 115.2399978637695 L 36.30400085449219 118 L 34.62400054931641 118 Z M 34.5880012512207 112.5879974365234 C 34.5880012512207 112.052001953125 34.4119987487793 111.6399993896484 34.06000137329102 111.3519973754883 C 33.70800018310547 111.0640029907227 33.19200134277344 110.9199981689453 32.51200103759766 110.9199981689453 L 30.6879997253418 110.9199981689453 L 30.6879997253418 114.2679977416992 L 32.51200103759766 114.2679977416992 C 33.19200134277344 114.2679977416992 33.70800018310547 114.1240005493164 34.06000137329102 113.8359985351563 C 34.4119987487793 113.5400009155273 34.5880012512207 113.1240005493164 34.5880012512207 112.5879974365234 Z M 43.78530120849609 114.8320007324219 C 43.78530120849609 114.9359970092773 43.77730178833008 115.0839996337891 43.76129913330078 115.2760009765625 L 38.73329925537109 115.2760009765625 C 38.8213005065918 115.7480010986328 39.04930114746094 116.1240005493164 39.41730117797852 116.4039993286133 C 39.79330062866211 116.6760025024414 40.25730133056641 116.8119964599609 40.80929946899414 116.8119964599609 C 41.51330184936523 116.8119964599609 42.09329986572266 116.5800018310547 42.54930114746094 116.1159973144531 L 43.35329818725586 117.0400009155273 C 43.06529998779297 117.3840026855469 42.70130157470703 117.6439971923828 42.26129913330078 117.8199996948242 C 41.8213005065918 117.9960021972656 41.32529830932617 118.0839996337891 40.77330017089844 118.0839996337891 C 40.06930160522461 118.0839996337891 39.44929885864258 117.9440002441406 38.91329956054688 117.6640014648438 C 38.37730026245117 117.3840026855469 37.96129989624023 116.9960021972656 37.66529846191406 116.5 C 37.37730026245117 115.9960021972656 37.23329925537109 115.4280014038086 37.23329925537109 114.7959976196289 C 37.23329925537109 114.1719970703125 37.37329864501953 113.6119995117188 37.65330123901367 113.1159973144531 C 37.94129943847656 112.6119995117188 38.33729934692383 112.2200012207031 38.84130096435547 111.9400024414063 C 39.34529876708984 111.6600036621094 39.91329956054688 111.5199966430664 40.5452995300293 111.5199966430664 C 41.1693000793457 111.5199966430664 41.72529983520508 111.6600036621094 42.21329879760742 111.9400024414063 C 42.70930099487305 112.2119979858398 43.09329986572266 112.5999984741211 43.36529922485352 113.1039962768555 C 43.64530181884766 113.5999984741211 43.78530120849609 114.1760025024414 43.78530120849609 114.8320007324219 Z M 40.5452995300293 112.7200012207031 C 40.06529998779297 112.7200012207031 39.65729904174805 112.8639984130859 39.3213005065918 113.1520004272461 C 38.99330139160156 113.431999206543 38.79330062866211 113.8079986572266 38.72129821777344 114.2799987792969 L 42.3572998046875 114.2799987792969 C 42.29330062866211 113.8160018920898 42.0973014831543 113.4400024414063 41.7692985534668 113.1520004272461 C 41.44129943847656 112.8639984130859 41.03329849243164 112.7200012207031 40.5452995300293 112.7200012207031 Z M 51.58620071411133 111.5920028686523 L 51.58620071411133 117.0279998779297 C 51.58620071411133 119.2839965820313 50.43420028686523 120.4120025634766 48.13019943237305 120.4120025634766 C 47.51419830322266 120.4120025634766 46.93019866943359 120.3320007324219 46.37820053100586 120.1719970703125 C 45.82619857788086 120.0199966430664 45.37020111083984 119.7959976196289 45.01020050048828 119.5 L 45.68220138549805 118.3720016479492 C 45.96220016479492 118.6039962768555 46.31420135498047 118.7880020141602 46.73820114135742 118.9240036010742 C 47.17020034790039 119.068000793457 47.606201171875 119.1399993896484 48.04619979858398 119.1399993896484 C 48.75019836425781 119.1399993896484 49.26620101928711 118.9800033569336 49.59420013427734 118.6600036621094 C 49.92219924926758 118.3399963378906 50.08620071411133 117.8519973754883 50.08620071411133 117.1959991455078 L 50.08620071411133 116.8600006103516 C 49.8302001953125 117.1399993896484 49.5181999206543 117.3519973754883 49.15019989013672 117.4960021972656 C 48.78219985961914 117.6399993896484 48.37820053100586 117.7119979858398 47.93820190429688 117.7119979858398 C 47.3302001953125 117.7119979858398 46.7781982421875 117.5839996337891 46.28219985961914 117.3280029296875 C 45.7942008972168 117.0640029907227 45.40620040893555 116.6959991455078 45.11819839477539 116.2239990234375 C 44.83819961547852 115.7519989013672 44.69820022583008 115.2119979858398 44.69820022583008 114.6039962768555 C 44.69820022583008 113.9960021972656 44.83819961547852 113.4599990844727 45.11819839477539 112.9960021972656 C 45.40620040893555 112.5240020751953 45.7942008972168 112.1600036621094 46.28219985961914 111.9039993286133 C 46.7781982421875 111.6480026245117 47.3302001953125 111.5199966430664 47.93820190429688 111.5199966430664 C 48.40219879150391 111.5199966430664 48.82220077514648 111.5960006713867 49.19820022583008 111.7480010986328 C 49.58219909667969 111.9000015258789 49.90219879150391 112.1320037841797 50.15819931030273 112.4440002441406 L 50.15819931030273 111.5920028686523 L 51.58620071411133 111.5920028686523 Z M 48.16619873046875 116.4400024414063 C 48.73419952392578 116.4400024414063 49.19820022583008 116.2720031738281 49.55820083618164 115.9359970092773 C 49.92620086669922 115.5920028686523 50.11019897460938 115.1480026245117 50.11019897460938 114.6039962768555 C 50.11019897460938 114.068000793457 49.92620086669922 113.6320037841797 49.55820083618164 113.2959976196289 C 49.19820022583008 112.9599990844727 48.73419952392578 112.7919998168945 48.16619873046875 112.7919998168945 C 47.5901985168457 112.7919998168945 47.11819839477539 112.9599990844727 46.75019836425781 113.2959976196289 C 46.39020156860352 113.6320037841797 46.21020126342773 114.068000793457 46.21020126342773 114.6039962768555 C 46.21020126342773 115.1480026245117 46.39020156860352 115.5920028686523 46.75019836425781 115.9359970092773 C 47.11819839477539 116.2720031738281 47.5901985168457 116.4400024414063 48.16619873046875 116.4400024414063 Z M 64.48259735107422 109.5999984741211 L 64.48259735107422 118 L 63.19860076904297 118 L 58.56660079956055 112.3119964599609 L 58.56660079956055 118 L 57.01860046386719 118 L 57.01860046386719 109.5999984741211 L 58.3026008605957 109.5999984741211 L 62.93460083007813 115.2880020141602 L 62.93460083007813 109.5999984741211 L 64.48259735107422 109.5999984741211 Z M 69.46949768066406 118.0839996337891 C 68.82150268554688 118.0839996337891 68.23750305175781 117.9440002441406 67.71749877929688 117.6640014648438 C 67.19750213623047 117.3840026855469 66.78949737548828 116.9960021972656 66.49349975585938 116.5 C 66.20549774169922 115.9960021972656 66.06150054931641 115.4280014038086 66.06150054931641 114.7959976196289 C 66.06150054931641 114.1640014648438 66.20549774169922 113.5999984741211 66.49349975585938 113.1039962768555 C 66.78949737548828 112.6080017089844 67.19750213623047 112.2200012207031 67.71749877929688 111.9400024414063 C 68.23750305175781 111.6600036621094 68.82150268554688 111.5199966430664 69.46949768066406 111.5199966430664 C 70.12550354003906 111.5199966430664 70.7135009765625 111.6600036621094 71.23349761962891 111.9400024414063 C 71.75350189208984 112.2200012207031 72.15750122070313 112.6080017089844 72.44550323486328 113.1039962768555 C 72.74150085449219 113.5999984741211 72.88950347900391 114.1640014648438 72.88950347900391 114.7959976196289 C 72.88950347900391 115.4280014038086 72.74150085449219 115.9960021972656 72.44550323486328 116.5 C 72.15750122070313 116.9960021972656 71.75350189208984 117.3840026855469 71.23349761962891 117.6640014648438 C 70.7135009765625 117.9440002441406 70.12550354003906 118.0839996337891 69.46949768066406 118.0839996337891 Z M 69.46949768066406 116.8000030517578 C 70.02149963378906 116.8000030517578 70.47750091552734 116.6159973144531 70.83750152587891 116.2480010986328 C 71.19750213623047 115.879997253418 71.37750244140625 115.3960037231445 71.37750244140625 114.7959976196289 C 71.37750244140625 114.1959991455078 71.19750213623047 113.7119979858398 70.83750152587891 113.3440017700195 C 70.47750091552734 112.9759979248047 70.02149963378906 112.7919998168945 69.46949768066406 112.7919998168945 C 68.91750335693359 112.7919998168945 68.46150207519531 112.9759979248047 68.10150146484375 113.3440017700195 C 67.74949645996094 113.7119979858398 67.57350158691406 114.1959991455078 67.57350158691406 114.7959976196289 C 67.57350158691406 115.3960037231445 67.74949645996094 115.879997253418 68.10150146484375 116.2480010986328 C 68.46150207519531 116.6159973144531 68.91750335693359 116.8000030517578 69.46949768066406 116.8000030517578 Z">
			</path>
		</svg>
		<div id="Enter_AgeSex">
			<span>23/F</span>
		</div>
		<svg class="AgeSex" viewBox="27.94 86.896 50.597 12.516">
			<path id="AgeSex" d="M 34.57600021362305 95.05599975585938 L 30.37599945068359 95.05599975585938 L 29.54800033569336 97 L 27.94000053405762 97 L 31.71999931335449 88.59999847412109 L 33.25600051879883 88.59999847412109 L 37.04800033569336 97 L 35.41600036621094 97 L 34.57600021362305 95.05599975585938 Z M 34.06000137329102 93.83200073242188 L 32.47600173950195 90.16000366210938 L 30.90399932861328 93.83200073242188 L 34.06000137329102 93.83200073242188 Z M 44.27370071411133 90.59200286865234 L 44.27370071411133 96.02799987792969 C 44.27370071411133 98.28399658203125 43.12170028686523 99.41200256347656 40.81769943237305 99.41200256347656 C 40.20169830322266 99.41200256347656 39.61769866943359 99.33200073242188 39.06570053100586 99.1719970703125 C 38.51369857788086 99.01999664306641 38.05770111083984 98.79599761962891 37.69770050048828 98.5 L 38.36970138549805 97.37200164794922 C 38.64970016479492 97.60399627685547 39.00170135498047 97.78800201416016 39.42570114135742 97.92400360107422 C 39.85770034790039 98.06800079345703 40.293701171875 98.13999938964844 40.73369979858398 98.13999938964844 C 41.43769836425781 98.13999938964844 41.95370101928711 97.98000335693359 42.28170013427734 97.66000366210938 C 42.60969924926758 97.33999633789063 42.77370071411133 96.85199737548828 42.77370071411133 96.19599914550781 L 42.77370071411133 95.86000061035156 C 42.5177001953125 96.13999938964844 42.2056999206543 96.35199737548828 41.83769989013672 96.49600219726563 C 41.46969985961914 96.63999938964844 41.06570053100586 96.71199798583984 40.62570190429688 96.71199798583984 C 40.0177001953125 96.71199798583984 39.4656982421875 96.58399963378906 38.96969985961914 96.3280029296875 C 38.4817008972168 96.06400299072266 38.09370040893555 95.69599914550781 37.80569839477539 95.2239990234375 C 37.52569961547852 94.75199890136719 37.38570022583008 94.21199798583984 37.38570022583008 93.60399627685547 C 37.38570022583008 92.99600219726563 37.52569961547852 92.45999908447266 37.80569839477539 91.99600219726563 C 38.09370040893555 91.52400207519531 38.4817008972168 91.16000366210938 38.96969985961914 90.90399932861328 C 39.4656982421875 90.64800262451172 40.0177001953125 90.51999664306641 40.62570190429688 90.51999664306641 C 41.08969879150391 90.51999664306641 41.50970077514648 90.59600067138672 41.88570022583008 90.74800109863281 C 42.26969909667969 90.90000152587891 42.58969879150391 91.13200378417969 42.84569931030273 91.44400024414063 L 42.84569931030273 90.59200286865234 L 44.27370071411133 90.59200286865234 Z M 40.85369873046875 95.44000244140625 C 41.42169952392578 95.44000244140625 41.88570022583008 95.27200317382813 42.24570083618164 94.93599700927734 C 42.61370086669922 94.59200286865234 42.79769897460938 94.14800262451172 42.79769897460938 93.60399627685547 C 42.79769897460938 93.06800079345703 42.61370086669922 92.63200378417969 42.24570083618164 92.29599761962891 C 41.88570022583008 91.95999908447266 41.42169952392578 91.79199981689453 40.85369873046875 91.79199981689453 C 40.2776985168457 91.79199981689453 39.80569839477539 91.95999908447266 39.43769836425781 92.29599761962891 C 39.07770156860352 92.63200378417969 38.89770126342773 93.06800079345703 38.89770126342773 93.60399627685547 C 38.89770126342773 94.14800262451172 39.07770156860352 94.59200286865234 39.43769836425781 94.93599700927734 C 39.80569839477539 95.27200317382813 40.2776985168457 95.44000244140625 40.85369873046875 95.44000244140625 Z M 52.26969909667969 93.83200073242188 C 52.26969909667969 93.93599700927734 52.26169967651367 94.08399963378906 52.24570083618164 94.2760009765625 L 47.21770095825195 94.2760009765625 C 47.30569839477539 94.74800109863281 47.53369903564453 95.12400054931641 47.90169906616211 95.40399932861328 C 48.2776985168457 95.67600250244141 48.74169921875 95.81199645996094 49.293701171875 95.81199645996094 C 49.99769973754883 95.81199645996094 50.57770156860352 95.58000183105469 51.03369903564453 95.11599731445313 L 51.83769989013672 96.04000091552734 C 51.54970169067383 96.38400268554688 51.18569946289063 96.64399719238281 50.74570083618164 96.81999969482422 C 50.30569839477539 96.99600219726563 49.80970001220703 97.08399963378906 49.2577018737793 97.08399963378906 C 48.5536994934082 97.08399963378906 47.93370056152344 96.94400024414063 47.39770126342773 96.66400146484375 C 46.86169815063477 96.38400268554688 46.44570159912109 95.99600219726563 46.14970016479492 95.5 C 45.86169815063477 94.99600219726563 45.71770095825195 94.42800140380859 45.71770095825195 93.79599761962891 C 45.71770095825195 93.1719970703125 45.85770034790039 92.61199951171875 46.13769912719727 92.11599731445313 C 46.42570114135742 91.61199951171875 46.82170104980469 91.22000122070313 47.32569885253906 90.94000244140625 C 47.8297004699707 90.66000366210938 48.39770126342773 90.51999664306641 49.02970123291016 90.51999664306641 C 49.65370178222656 90.51999664306641 50.20970153808594 90.66000366210938 50.69770050048828 90.94000244140625 C 51.19369888305664 91.21199798583984 51.57770156860352 91.59999847412109 51.84970092773438 92.10399627685547 C 52.12969970703125 92.59999847412109 52.26969909667969 93.17600250244141 52.26969909667969 93.83200073242188 Z M 49.02970123291016 91.72000122070313 C 48.54970169067383 91.72000122070313 48.14170074462891 91.86399841308594 47.80569839477539 92.15200042724609 C 47.47769927978516 92.43199920654297 47.2776985168457 92.80799865722656 47.2056999206543 93.27999877929688 L 50.84170150756836 93.27999877929688 C 50.7776985168457 92.81600189208984 50.58169937133789 92.44000244140625 50.25370025634766 92.15200042724609 C 49.92570114135742 91.86399841308594 49.5177001953125 91.72000122070313 49.02970123291016 91.72000122070313 Z M 56.32659912109375 86.89600372314453 L 57.67060089111328 86.89600372314453 L 53.71060180664063 98.19999694824219 L 52.36660003662109 98.19999694824219 L 56.32659912109375 86.89600372314453 Z M 60.67729949951172 97.12000274658203 C 60.02930068969727 97.12000274658203 59.40129852294922 97.02799987792969 58.79330062866211 96.84400177001953 C 58.19329833984375 96.66000366210938 57.71730041503906 96.41600036621094 57.36529922485352 96.11199951171875 L 57.90530014038086 94.90000152587891 C 58.24929809570313 95.1719970703125 58.6693000793457 95.39600372314453 59.16529846191406 95.57199859619141 C 59.6693000793457 95.73999786376953 60.17330169677734 95.82399749755859 60.67729949951172 95.82399749755859 C 61.30130004882813 95.82399749755859 61.76530075073242 95.7239990234375 62.06930160522461 95.52400207519531 C 62.38130187988281 95.32399749755859 62.53730010986328 95.05999755859375 62.53730010986328 94.73200225830078 C 62.53730010986328 94.49199676513672 62.44929885864258 94.29599761962891 62.27330017089844 94.14399719238281 C 62.10530090332031 93.98400115966797 61.88930130004883 93.86000061035156 61.62530136108398 93.77200317382813 C 61.36130142211914 93.68399810791016 61.00130081176758 93.58399963378906 60.5452995300293 93.47200012207031 C 59.90530014038086 93.31999969482422 59.38529968261719 93.16799926757813 58.98529815673828 93.01599884033203 C 58.59329986572266 92.86399841308594 58.25329971313477 92.62799835205078 57.96530151367188 92.30799865722656 C 57.68529891967773 91.98000335693359 57.5452995300293 91.54000091552734 57.5452995300293 90.98799896240234 C 57.5452995300293 90.52400207519531 57.6693000793457 90.10399627685547 57.91730117797852 89.72799682617188 C 58.17330169677734 89.34400177001953 58.55329895019531 89.04000091552734 59.05730056762695 88.81600189208984 C 59.56930160522461 88.59200286865234 60.19329833984375 88.48000335693359 60.92929840087891 88.48000335693359 C 61.44129943847656 88.48000335693359 61.9453010559082 88.54399871826172 62.44129943847656 88.6719970703125 C 62.93730163574219 88.80000305175781 63.36529922485352 88.98400115966797 63.72529983520508 89.2239990234375 L 63.23329925537109 90.43599700927734 C 62.86529922485352 90.22000122070313 62.48130035400391 90.05599975585938 62.081298828125 89.94400024414063 C 61.68130111694336 89.83200073242188 61.29330062866211 89.7760009765625 60.91730117797852 89.7760009765625 C 60.30130004882813 89.7760009765625 59.84130096435547 89.87999725341797 59.53730010986328 90.08799743652344 C 59.24129867553711 90.29599761962891 59.09329986572266 90.57199859619141 59.09329986572266 90.91600036621094 C 59.09329986572266 91.15599822998047 59.17729949951172 91.35199737548828 59.34529876708984 91.50399780273438 C 59.52130126953125 91.65599822998047 59.74129867553711 91.7760009765625 60.00529861450195 91.86399841308594 C 60.2692985534668 91.95200347900391 60.62929916381836 92.052001953125 61.08530044555664 92.16400146484375 C 61.70930099487305 92.30799865722656 62.22129821777344 92.45999908447266 62.62129974365234 92.62000274658203 C 63.02130126953125 92.77200317382813 63.36130142211914 93.00800323486328 63.64130020141602 93.3280029296875 C 63.92929840087891 93.64800262451172 64.07330322265625 94.08000183105469 64.07330322265625 94.62400054931641 C 64.07330322265625 95.08799743652344 63.9453010559082 95.50800323486328 63.68930053710938 95.88400268554688 C 63.44129943847656 96.26000213623047 63.06129837036133 96.55999755859375 62.54930114746094 96.78399658203125 C 62.03730010986328 97.00800323486328 61.41329956054688 97.12000274658203 60.67729949951172 97.12000274658203 Z M 71.50019836425781 93.83200073242188 C 71.50019836425781 93.93599700927734 71.49220275878906 94.08399963378906 71.4761962890625 94.2760009765625 L 66.44819641113281 94.2760009765625 C 66.53620147705078 94.74800109863281 66.76419830322266 95.12400054931641 67.1322021484375 95.40399932861328 C 67.50820159912109 95.67600250244141 67.97219848632813 95.81199645996094 68.52420043945313 95.81199645996094 C 69.22820281982422 95.81199645996094 69.80819702148438 95.58000183105469 70.26419830322266 95.11599731445313 L 71.06819915771484 96.04000091552734 C 70.78019714355469 96.38400268554688 70.41619873046875 96.64399719238281 69.9761962890625 96.81999969482422 C 69.53620147705078 96.99600219726563 69.04019927978516 97.08399963378906 68.48819732666016 97.08399963378906 C 67.78420257568359 97.08399963378906 67.16419982910156 96.94400024414063 66.62819671630859 96.66400146484375 C 66.09220123291016 96.38400268554688 65.67620086669922 95.99600219726563 65.38020324707031 95.5 C 65.09220123291016 94.99600219726563 64.94819641113281 94.42800140380859 64.94819641113281 93.79599761962891 C 64.94819641113281 93.1719970703125 65.08820343017578 92.61199951171875 65.36820220947266 92.11599731445313 C 65.65619659423828 91.61199951171875 66.05220031738281 91.22000122070313 66.55619812011719 90.94000244140625 C 67.06020355224609 90.66000366210938 67.62819671630859 90.51999664306641 68.26020050048828 90.51999664306641 C 68.88420104980469 90.51999664306641 69.44020080566406 90.66000366210938 69.92819976806641 90.94000244140625 C 70.42420196533203 91.21199798583984 70.80819702148438 91.59999847412109 71.0802001953125 92.10399627685547 C 71.36019897460938 92.59999847412109 71.50019836425781 93.17600250244141 71.50019836425781 93.83200073242188 Z M 68.26020050048828 91.72000122070313 C 67.78019714355469 91.72000122070313 67.37220001220703 91.86399841308594 67.03620147705078 92.15200042724609 C 66.70819854736328 92.43199920654297 66.50820159912109 92.80799865722656 66.43620300292969 93.27999877929688 L 70.07219696044922 93.27999877929688 C 70.00820159912109 92.81600189208984 69.81220245361328 92.44000244140625 69.48419952392578 92.15200042724609 C 69.15619659423828 91.86399841308594 68.74819946289063 91.72000122070313 68.26020050048828 91.72000122070313 Z M 76.84529876708984 97 L 75.20130157470703 94.77999877929688 L 73.54519653320313 97 L 71.88929748535156 97 L 74.38529968261719 93.74800109863281 L 71.99729919433594 90.59200286865234 L 73.66529846191406 90.59200286865234 L 75.23729705810547 92.69200134277344 L 76.80930328369141 90.59200286865234 L 78.42929840087891 90.59200286865234 L 76.029296875 93.7239990234375 L 78.53730010986328 97 L 76.84529876708984 97 Z">
			</path>
		</svg>
		<div id="Enter_Name">
			<span><?php echo $name; ?></span>
		</div>
		<svg class="Name_c" viewBox="29.128 67.6 35.575 8.484">
			<path id="Name_c" d="M 36.59199905395508 67.59999847412109 L 36.59199905395508 76 L 35.30799865722656 76 L 30.67600059509277 70.31199645996094 L 30.67600059509277 76 L 29.12800025939941 76 L 29.12800025939941 67.59999847412109 L 30.41200065612793 67.59999847412109 L 35.04399871826172 73.28800201416016 L 35.04399871826172 67.59999847412109 L 36.59199905395508 67.59999847412109 Z M 41.14680099487305 69.51999664306641 C 42.09080123901367 69.51999664306641 42.81079864501953 69.74800109863281 43.30680084228516 70.20400238037109 C 43.81079864501953 70.65200042724609 44.06280136108398 71.33200073242188 44.06280136108398 72.24400329589844 L 44.06280136108398 76 L 42.64680099487305 76 L 42.64680099487305 75.22000122070313 C 42.46279907226563 75.5 42.19879913330078 75.71600341796875 41.85480117797852 75.86799621582031 C 41.518798828125 76.01200103759766 41.11080169677734 76.08399963378906 40.63079833984375 76.08399963378906 C 40.15079879760742 76.08399963378906 39.73080062866211 76.00399780273438 39.37080001831055 75.84400177001953 C 39.01079940795898 75.67600250244141 38.73080062866211 75.447998046875 38.53079986572266 75.16000366210938 C 38.33879852294922 74.86399841308594 38.24280166625977 74.53199768066406 38.24280166625977 74.16400146484375 C 38.24280166625977 73.58799743652344 38.45479965209961 73.12799835205078 38.87879943847656 72.78399658203125 C 39.31079864501953 72.43199920654297 39.98680114746094 72.25599670410156 40.90679931640625 72.25599670410156 L 42.56280136108398 72.25599670410156 L 42.56280136108398 72.16000366210938 C 42.56280136108398 71.71199798583984 42.42679977416992 71.36799621582031 42.15480041503906 71.12799835205078 C 41.89080047607422 70.88800048828125 41.49480056762695 70.76799774169922 40.96680068969727 70.76799774169922 C 40.6068000793457 70.76799774169922 40.25080108642578 70.82399749755859 39.89879989624023 70.93599700927734 C 39.5547981262207 71.04799652099609 39.26279830932617 71.20400238037109 39.02280044555664 71.40399932861328 L 38.43479919433594 70.31199645996094 C 38.77080154418945 70.05599975585938 39.17480087280273 69.86000061035156 39.64680099487305 69.7239990234375 C 40.11880111694336 69.58799743652344 40.61880111694336 69.51999664306641 41.14680099487305 69.51999664306641 Z M 40.94279861450195 74.99199676513672 C 41.31880187988281 74.99199676513672 41.65079879760742 74.90799713134766 41.93880081176758 74.73999786376953 C 42.23479843139648 74.56400299072266 42.44279861450195 74.31600189208984 42.56280136108398 73.99600219726563 L 42.56280136108398 73.25199890136719 L 41.01480102539063 73.25199890136719 C 40.15079879760742 73.25199890136719 39.71879959106445 73.53600311279297 39.71879959106445 74.10399627685547 C 39.71879959106445 74.37599945068359 39.82680130004883 74.59200286865234 40.04280090332031 74.75199890136719 C 40.2588005065918 74.91200256347656 40.55879974365234 74.99199676513672 40.94279861450195 74.99199676513672 Z M 54.07590103149414 69.51999664306641 C 54.8838996887207 69.51999664306641 55.52389907836914 69.75599670410156 55.99589920043945 70.22799682617188 C 56.46789932250977 70.69200134277344 56.70389938354492 71.39199829101563 56.70389938354492 72.3280029296875 L 56.70389938354492 76 L 55.20389938354492 76 L 55.20389938354492 72.51999664306641 C 55.20389938354492 71.95999908447266 55.07989883422852 71.54000091552734 54.83190155029297 71.26000213623047 C 54.58390045166016 70.97200012207031 54.22790145874023 70.8280029296875 53.76390075683594 70.8280029296875 C 53.2598991394043 70.8280029296875 52.85589981079102 70.99600219726563 52.55189895629883 71.33200073242188 C 52.24789810180664 71.66000366210938 52.09590148925781 72.13200378417969 52.09590148925781 72.74800109863281 L 52.09590148925781 76 L 50.59590148925781 76 L 50.59590148925781 72.51999664306641 C 50.59590148925781 71.95999908447266 50.47190093994141 71.54000091552734 50.22389984130859 71.26000213623047 C 49.97589874267578 70.97200012207031 49.61989974975586 70.8280029296875 49.15589904785156 70.8280029296875 C 48.64390182495117 70.8280029296875 48.23590087890625 70.99199676513672 47.93190002441406 71.31999969482422 C 47.63589859008789 71.64800262451172 47.48789978027344 72.12400054931641 47.48789978027344 72.74800109863281 L 47.48789978027344 76 L 45.98789978027344 76 L 45.98789978027344 69.59200286865234 L 47.41590118408203 69.59200286865234 L 47.41590118408203 70.40799713134766 C 47.65589904785156 70.12000274658203 47.95589828491211 69.90000152587891 48.31589889526367 69.74800109863281 C 48.67589950561523 69.59600067138672 49.07590103149414 69.51999664306641 49.51589965820313 69.51999664306641 C 49.99589920043945 69.51999664306641 50.41989898681641 69.61199951171875 50.78789901733398 69.79599761962891 C 51.16389846801758 69.97200012207031 51.45989990234375 70.23600006103516 51.67589950561523 70.58799743652344 C 51.93989944458008 70.25199890136719 52.27989959716797 69.99199676513672 52.69589996337891 69.80799865722656 C 53.11190032958984 69.61599731445313 53.5718994140625 69.51999664306641 54.07590103149414 69.51999664306641 Z M 64.70330047607422 72.83200073242188 C 64.70330047607422 72.93599700927734 64.69529724121094 73.08399963378906 64.67929840087891 73.2760009765625 L 59.65129852294922 73.2760009765625 C 59.73929977416992 73.74800109863281 59.96730041503906 74.12400054931641 60.33530044555664 74.40399932861328 C 60.71129989624023 74.67600250244141 61.17530059814453 74.81199645996094 61.72729873657227 74.81199645996094 C 62.43130111694336 74.81199645996094 63.01129913330078 74.58000183105469 63.46730041503906 74.11599731445313 L 64.27130126953125 75.04000091552734 C 63.98329925537109 75.38400268554688 63.61930084228516 75.64399719238281 63.17929840087891 75.81999969482422 C 62.73929977416992 75.99600219726563 62.24330139160156 76.08399963378906 61.69129943847656 76.08399963378906 C 60.98730087280273 76.08399963378906 60.3672981262207 75.94400024414063 59.831298828125 75.66400146484375 C 59.2952995300293 75.38400268554688 58.87929916381836 74.99600219726563 58.58330154418945 74.5 C 58.2952995300293 73.99600219726563 58.15129852294922 73.42800140380859 58.15129852294922 72.79599761962891 C 58.15129852294922 72.1719970703125 58.29130172729492 71.61199951171875 58.5713005065918 71.11599731445313 C 58.85929870605469 70.61199951171875 59.25529861450195 70.22000122070313 59.75930023193359 69.94000244140625 C 60.26330184936523 69.66000366210938 60.831298828125 69.51999664306641 61.46329879760742 69.51999664306641 C 62.08729934692383 69.51999664306641 62.6432991027832 69.66000366210938 63.13130187988281 69.94000244140625 C 63.62730026245117 70.21199798583984 64.01129913330078 70.59999847412109 64.28330230712891 71.10399627685547 C 64.56330108642578 71.59999847412109 64.70330047607422 72.17600250244141 64.70330047607422 72.83200073242188 Z M 61.46329879760742 70.72000122070313 C 60.98329925537109 70.72000122070313 60.57529830932617 70.86399841308594 60.23929977416992 71.15200042724609 C 59.91130065917969 71.43199920654297 59.71129989624023 71.80799865722656 59.63930130004883 72.27999877929688 L 63.27529907226563 72.27999877929688 C 63.21129989624023 71.81600189208984 63.01530075073242 71.44000244140625 62.68730163574219 71.15200042724609 C 62.35929870605469 70.86399841308594 61.95130157470703 70.72000122070313 61.46329879760742 70.72000122070313 Z">
			</path>
		</svg>
	</div>
</div>

</body>

</html>