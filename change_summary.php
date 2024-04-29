<!DOCTYPE html>
<html lang="en">

<head>

    <title>Release Assistant - Changes</title>

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

                    <h1 class="h3 mb-4 text-gray-800">Changes</h1>

                    <div class="card shadow mb-4">
                        <div class="card-body">
						
							<div class="mb-4">
								Create <a href="change_create.php"><i class="fa fa-square-plus"></i></a>
							</div>
							
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
												echo "											<td><i class=\"fa fa-dice-d6\"></i> Wow Effect IT</td>" . PHP_EOL;
												echo "											<td><i class=\"fa fa-lightbulb\"></i> Feature</td>" . PHP_EOL;
												echo "											<td><a href=\"change_map_user.php\"><i class=\"fa fa-user\"></i></a> Matteo P.</td>" . PHP_EOL;
												echo "											<td><a href=\"change_map_release.php\"><i class=\"fa fa-upload\"></i></a> Wow Effect</td>" . PHP_EOL;
												echo "											<td>" . PHP_EOL;
												echo "												<div class=\"progress progress-sm mr-2\">" . PHP_EOL;
												echo "													<div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 45%\"></div>" . PHP_EOL;
												echo "												</div><span class=\"small font-weight-bold\">45%</span>" . PHP_EOL;
												echo "											</td>" . PHP_EOL;
												echo "										</tr>" . PHP_EOL;

												echo "										<tr>" . PHP_EOL;
												echo "											<td><a href=\"change.php\"><i class=\"fa fa-magnifying-glass\"></i></a></td>" . PHP_EOL;
												echo "											<td><i class=\"fa fa-dice-d6\"></i> Wow Effect ES</td>" . PHP_EOL;
												echo "											<td><i class=\"fa fa-lightbulb\"></i> Feature</td>" . PHP_EOL;
												echo "											<td><a href=\"change_map_user.php\"><i class=\"fa fa-user\"></i></a> Matteo P.</td>" . PHP_EOL;
												echo "											<td><a href=\"change_map_release.php\"><i class=\"fa fa-upload\"></i></a></td>" . PHP_EOL;
												echo "											<td>" . PHP_EOL;
												echo "												<div class=\"progress progress-sm mr-2\">" . PHP_EOL;
												echo "													<div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 20%\"></div>" . PHP_EOL;
												echo "												</div><span class=\"small font-weight-bold\">20%</span>" . PHP_EOL;
												echo "											</td>" . PHP_EOL;
												echo "										</tr>" . PHP_EOL;

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

												echo "										<tr>" . PHP_EOL;
												echo "											<td><a href=\"change.php\"><i class=\"fa fa-magnifying-glass\"></i></a></td>" . PHP_EOL;
												echo "											<td><i class=\"fa fa-dice-d6\"></i> CRM 2.0 IT</td>" . PHP_EOL;
												echo "											<td><i class=\"fa fa-lightbulb\"></i> Feature</td>" . PHP_EOL;
												echo "											<td><a href=\"change_map_user.php\"><i class=\"fa fa-user\"></i></a> Carmine A.</td>" . PHP_EOL;
												echo "											<td><a href=\"change_map_release.php\"><i class=\"fa fa-upload\"></i></a> CRM 2.0</td>" . PHP_EOL;
												echo "											<td>" . PHP_EOL;
												echo "												<div class=\"progress progress-sm mr-2\">" . PHP_EOL;
												echo "													<div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 55%\"></div>" . PHP_EOL;
												echo "												</div><span class=\"small font-weight-bold\">55%</span>" . PHP_EOL;
												echo "											</td>" . PHP_EOL;
												echo "										</tr>" . PHP_EOL;
												echo "										<tr>" . PHP_EOL;
												echo "											<td><a href=\"change.php\"><i class=\"fa fa-magnifying-glass\"></i></a></td>" . PHP_EOL;
												echo "											<td><i class=\"fa fa-dice-d6\"></i> Incident INC123456</td>" . PHP_EOL;
												echo "											<td><i class=\"fa fa-cog\"></i> Fix</td>" . PHP_EOL;
												echo "											<td><a href=\"change_map_user.php\"><i class=\"fa fa-user\"></i></a></td>" . PHP_EOL;
												echo "											<td><a href=\"change_map_release.php\"><i class=\"fa fa-upload\"></a></td>" . PHP_EOL;
												echo "											<td>" . PHP_EOL;
												echo "												<div class=\"progress progress-sm mr-2\">" . PHP_EOL;
												echo "													<div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 0%\"></div>" . PHP_EOL;
												echo "												</div><span class=\"small font-weight-bold\">0%</span>" . PHP_EOL;
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