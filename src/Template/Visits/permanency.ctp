<?= $this->Html->script('Chart.min'); ?>

<script>
	var barChartData = {
		labels : [ <?php foreach ($permanency as $visit): ?>
					<?= '"' . h($visit->name) . '",' ?>
					<?php endforeach; ?> ],
		datasets : [
			{
				fillColor : "#3678C6",
				strokeColor : "rgba(220,220,220,0.8)",
				highlightFill: "rgba(220,220,220,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				data : [ <?php foreach ($permanency as $visit): ?>
					<?= h($visit->permanency) . ',' ?>
					<?php endforeach; ?> ]
			}
		]

	}

	window.onload = function (){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myBar = new Chart(ctx).Bar(barChartData, {
			responsive : true
		});
	}
</script>

<div class="visits index white-bg z-depth-3">
	<div class="card-panel black">
		<h1><?= __('Permanency by zone') ?></h1>
	</div>
	<div class="wrapper">
		<p><?= __('Analize the permanency of your customers by zone (seconds)') ?></p>
		
		<div class="chart-container col l8 m10 s12 offset-l2 offset-m1">
			<canvas id="canvas" height="80px" width="100px"></canvas>
		</div>

		<div class="clear"></div>    
	</div>
</div>