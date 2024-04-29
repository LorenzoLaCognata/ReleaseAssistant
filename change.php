<!DOCTYPE html>
<html lang="en">

<head>

    <title>Release Assistant - Change - Wow Effect IT</title>

	<?php
		include('head.html');
	?>

    <link href="css/css-table.css" rel="stylesheet" type="text/css">
	
</head>

<body id="page-top">

    <div id="wrapper">

		<?php
			include('sidebar.php');
		?>

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

				<?php
					include('topbar.html');
				?>

                <div class="container-fluid">

                    <h1 class="h3 mb-4 text-gray-800">Change - Wow Effect IT</h1>

                    <div class="card shadow mb-4">
                        <div class="card-body">
						
							<div class="mb-4">
								Create <a href=""><i class="fa fa-square-plus"></i></a>
							</div>
							
                            <div class="table-responsive">

								<table class="table table-responsive table-borderless table-striped">
									
									<thead class="thead-dark">
										<tr>
											<th scope="col"></th>
											<th scope="col">Development Type</th>
											<th scope="col">Category</th>
											<th scope="col">Development Object</th>
											<th scope="col">Release Object</th>
											<th scope="col">Progress</th>
										</tr>
									</thead>

									<tbody>
								  
										<?php

												echo "										<tr>" . PHP_EOL;
												echo "											<td><a href=\"\"><i class=\"fa fa-magnifying-glass\"></i></a></td>" . PHP_EOL;
												echo "											<td><a href=\"\"><i class=\"fa fa-file-code\"></i></a> Map existing column</td>" . PHP_EOL;
												echo "											<td>ODI</td>" . PHP_EOL;
												echo "											<td><a href=\"\"><i class=\"fa fa-object-group\"></i></a> MAP_FT_TEST_ACTIVITY_IT_04</td>" . PHP_EOL;
												echo "											<td>PKG_FT_TEST_ACTIVITY_IT</td>" . PHP_EOL;
												echo "											<td>" . PHP_EOL;
												echo "												<div class=\"progress progress-sm mr-2\">" . PHP_EOL;
												echo "													<div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 80%\"></div>" . PHP_EOL;
												echo "												</div><span class=\"small font-weight-bold\">80%</span>" . PHP_EOL;
												echo "											</td>" . PHP_EOL;
												echo "										</tr>" . PHP_EOL;

										?>
									
									</tbody>
								</table>
							</div>
						</div>  
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
		include('bottom.html');
	?>

</body>

</html>