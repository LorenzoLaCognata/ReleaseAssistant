<!DOCTYPE html>
<html lang="en">

<head>

    <title>Release Assistant - Release - Audiological Tests</title>

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

                    <h1 class="h3 mb-4 text-gray-800">Release - Audiological Tests</h1>

                    <div class="card shadow mb-4">
                        <div class="card-body">
						
							<div class="progress progress-sm mr-2">
								<div class="progress-bar bg-success" role="progressbar" style="width: 80%"></div>
							</div><span class="small font-weight-bold">80%</span>
							
                            <div class="table-responsive">

								<table class="table table-responsive table-borderless table-striped">
									
									<thead class="thead-dark">
										<tr>
											<th scope="col"></th>
											<th scope="col">Change</th>
											<th scope="col">Type</th>
											<th scope="col">User</th>
											<th scope="col">Release</th>
											<th scope="col">Progress</th>
										</tr>
									</thead>

									<tbody>
								  
										<?php

												echo "										<tr>" . PHP_EOL;
												echo "											<td><a href=\"change.php\"><i class=\"fa fa-magnifying-glass\"></i></a></td>" . PHP_EOL;
												echo "											<td><i class=\"fa fa-dice-d6\"></i> Audiological Tests IT</td>" . PHP_EOL;
												echo "											<td><i class=\"fa fa-lightbulb\"></i> Feature</td>" . PHP_EOL;
												echo "											<td><a href=\"change_map_user.php\"><i class=\"fa fa-user\"></i></a> Giuseppe B.</td>" . PHP_EOL;
												echo "											<td><a href=\"change_map_release.php\"><i class=\"fa fa-upload\"></i></a> Audiological Tests</td>" . PHP_EOL;
												echo "											<td>" . PHP_EOL;
												echo "												<div class=\"progress progress-sm mr-2\">" . PHP_EOL;
												echo "													<div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 80%\"></div>" . PHP_EOL;
												echo "												</div><span class=\"small font-weight-bold\">80%</span>" . PHP_EOL;
												echo "											</td>" . PHP_EOL;
												echo "										</tr>" . PHP_EOL;

												echo "										<tr>" . PHP_EOL;
												echo "											<td><a href=\"change.php\"><i class=\"fa fa-magnifying-glass\"></i></a></td>" . PHP_EOL;
												echo "											<td><i class=\"fa fa-dice-d6\"></i> Audiological Tests ES</td>" . PHP_EOL;
												echo "											<td><i class=\"fa fa-lightbulb\"></i> Feature</td>" . PHP_EOL;
												echo "											<td><a href=\"change_map_user.php\"><i class=\"fa fa-user\"></i></a> Giuseppe B.</td>" . PHP_EOL;
												echo "											<td><a href=\"change_map_release.php\"><i class=\"fa fa-upload\"></i></a> Audiological Tests</td>" . PHP_EOL;
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

							<div class="mb-4">
								Create <a href="change_create.php"><i class="fa fa-square-plus"></i></a>
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