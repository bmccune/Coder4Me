<?PHP
	$firstName = ($_GET['firstName']) ? $_GET['firstName'] : $_POST['firstName'];
	$lastName = ($_GET['lastName']) ? $_GET['lastName'] : $_POST['lastName'];
	$email = ($_GET['email']) ? $_GET['email'] : $_POST['email'];
	$label = ($_GET['label']) ? $_GET['label'] : $_POST['label'];
	$state = ($_GET['state']) ? $_GET['state'] : $_POST['state'];
	$zip = ($_GET['zip']) ? $_GET['zip'] : $_POST['zip'];
	$password = ($_GET['password']) ? $_GET['password'] : $_POST['password'];
	$step = ($_GET['step']) ? $_GET['step'] : $_POST['step'];
	if($step = 1){
	echo $step;
	?>
	<div class="span12 step2">
	<form class="form-horizontal">
		<div style="max-height:415px;overflow:auto;" class="control-group languages">
			<div class="row">
				<div class="span4">
					<h5>Registration Progress</h5>    
					<div class="btn-toolbar">
						<div class="btn-group">
						 
						<a class="btn">Step 1<i class="icon-ok" style="margin-left:10px;"></i></a>
						<a class="btn active">Step 2</a>
						<a class="btn disabled">Step 3</a>

						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span6">
					<h4>Development Skills</h4>
					<label class="checkbox"><input type="checkbox" value="php">PHP</label>
					<label class="checkbox"><input type="checkbox" value="html">HTML</label>
					<label class="checkbox"><input type="checkbox" value="css">CSS</label>
					<label class="checkbox"><input type="checkbox" value="javascript">JavaScript</label>
					<label class="checkbox"><input type="checkbox" value="ruby">Ruby</label>
					<label class="checkbox"><input type="checkbox" value="rubyonrails">Ruby on Rails</label>
					<label class="checkbox"><input type="checkbox" value="mysql">MySql</label>
					<label class="checkbox"><input type="checkbox" value="asp">ASP</label>
					<label class="checkbox"><input type="checkbox" value="node">Node.js</label>
					<label class="checkbox"><input type="checkbox" value="java">Java</label>
				</div>
				<div class="span6">
					<label class="checkbox"><input type="checkbox" value="c">C</label>
					<label class="checkbox"><input type="checkbox" value="objectivec">Objective-C</label>
					<label class="checkbox"><input type="checkbox" value="cplus">C++</label>
					<label class="checkbox"><input type="checkbox" value="csharp">C#</label>
					<label class="checkbox"><input type="checkbox" value="vb">Visual Basic</label>
					<label class="checkbox"><input type="checkbox" value="vbnet">Visual Basic .Net</label>
					<label class="checkbox"><input type="checkbox" value="python">Python</label>
					<label class="checkbox"><input type="checkbox" value="perl">Perl</label>
				</div>
			</div>
		</div>
		<div class="control-group">
			<div class="form-actions">
				<input id="step" type="hidden" name="step" value="2">
				<button type="submit" class="btn btn-primary">Next</button>
				<button type="button" class="btn">Back</button>
			</div>
		</div>
	</form>
	</div>
	<?PHP
	}elseif($step = 2){
	?>
	<div class="span12 step2">
	<form class="form-horizontal">
		<div style="max-height:415px;overflow:auto;" class="control-group languages">
			<div class="row">
				<div class="span4">
					<h5>Profile Progress</h5>    
					<div class="progress">
						<div class="bar" style="width: 75%;"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span6">
					<h1>Step 3</h1>
					
				</div>
				<div class="span6">
					
				</div>
			</div>
		</div>
		<div class="control-group">
			<div class="form-actions">
				<input id="step" type="hidden" name="step" value="2">
				<button type="submit" class="btn btn-primary">Next</button>
				<button type="button" class="btn">Back</button>
			</div>
		</div>
	</form>
	</div>

	<?PHP
	}else{
	?>
	<h1>Error</h1>
	<?PHP
	}
	?>