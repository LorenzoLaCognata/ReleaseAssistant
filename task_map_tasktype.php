<!DOCTYPE html>
<html lang="en">

<head>

    <title>Release Assistant - Development - MAP_FT_TEST_ACTIVITY_IT_04</title>

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

                    <h1 class="h3 mb-4 text-gray-800">Development - MAP_FT_TEST_ACTIVITY_IT_04</h1>

                    <div class="card shadow mb-4">
                        <div class="card-body">
													
                            <div class="table-responsive">

								<table class="table table-responsive table-borderless table-striped">
									
									<thead class="thead-dark">
										<tr>
											<th scope="col">Task</th>
											<th scope="col"></th>
										</tr>
									</thead>

									<tbody>
								  
										<?php

												echo "										<tr>" . PHP_EOL;
												echo "											<td><i class=\"fa fa-list-check\"></i> Table compare</td>" . PHP_EOL;
												echo "											<td><i class=\"fa-regular fa-square-check\"></i></td>" . PHP_EOL;
												echo "										</tr>" . PHP_EOL;

												echo "										<tr>" . PHP_EOL;
												echo "											<td><i class=\"fa fa-list-check\"></i> Run in Dev environment</td>" . PHP_EOL;
												echo "											<td><a href=\"\"><i class=\"fa-solid fa-square-check\"></i></a></td>" . PHP_EOL;
												echo "										</tr>" . PHP_EOL;

												echo "										<tr>" . PHP_EOL;
												echo "											<td><i class=\"fa fa-list-check\"></i> Code compare</td>" . PHP_EOL;
												echo "											<td><a href=\"\"><i class=\"fa-solid fa-square-check\"></i></a></td>" . PHP_EOL;
												echo "										</tr>" . PHP_EOL;

												echo "										<tr>" . PHP_EOL;
												echo "											<td><i class=\"fa fa-list-check\"></i> Partition filter</td>" . PHP_EOL;
												echo "											<td><a href=\"\"><i class=\"fa-solid fa-square-check\"></i></a></td>" . PHP_EOL;
												echo "										</tr>" . PHP_EOL;

												echo "										<tr>" . PHP_EOL;
												echo "											<td><i class=\"fa fa-list-check\"></i> Run in Test environment</td>" . PHP_EOL;
												echo "											<td><a href=\"\"><i class=\"fa-solid fa-square-check\"></i></a></td>" . PHP_EOL;
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