<html>
<head>
	<style>
		.view {
			padding: 20px;
			margin-bottom: 20px;
		}
		.butoane {
			padding: 20px;
			border: 2px solid green;
			margin-bottom: 20px;
		}
		.raspuns {
			padding: 20px;
			color: white;
		}
	</style>

	<script src="/jquery-3.3.1.min.js"></script>
	<script>
		$(document).ready(function()
		{
			$("#metodaPentruTestCuDouaArgumente").click(function()
			{
				var culoare = $("#culori").val();
				var cifra = $("#cifre").val();

				$.get("/test/" + culoare + "/" + cifra, function(raspuns)
				{
					$("#container-raspuns").html(raspuns);
				});
			});

			$("#metodaPentruTestFaraArgumente").click(function()
			{
				$.get("/test", function(raspuns)
				{
					$("#container-raspuns").html(raspuns);
				});
			});
		})
	</script>
</head>
<body>
	<?= $view1 ?>
	<?= $view2 ?>

	<div class="butoane">
		<button id="metodaPentruTestCuDouaArgumente">Testează metodaPentruTestCuDouaArgumente()</button>
		<button id="metodaPentruTestFaraArgumente">Testează metodaPentruTestFaraArgumente()</button>
	</div>

	<div id="container-raspuns">
	</div>
</body>
</html>
