<!DOCTYPE html>
<html lang="en">

<head>

    <title>Release Assistant - Release - Wow Effect</title>

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

                    <h1 class="h3 mb-4 text-gray-800">Release - Wow Effect</h1>

                    <div class="card shadow mb-4">
                        <div class="card-body">
													
                            <div class="table-responsive">

								<table class="table table-responsive table-borderless table-striped">
									
									<thead class="thead-dark">
										<tr>
											<th scope="col">User</th>
											<th scope="col"></th>
											<th scope="col"></th>
											<th scope="col"></th>
										</tr>
									</thead>

									<tbody>
								  
										<?php

												echo "										<tr>" . PHP_EOL;
												echo "											<td><i class=\"fa fa-user\"></i> Matteo P.</td>" . PHP_EOL;
												echo "											<td><i class=\"fa fa-user-check\"></i></td>" . PHP_EOL;
												echo "											<td><a href =\"\"><i class=\"fa fa-users-viewfinder\"></i></a></td>" . PHP_EOL;
												echo "											<td><a href =\"\"><i class=\"fa fa-square-xmark\"></i></a></td>" . PHP_EOL;
												echo "										</tr>" . PHP_EOL;

												echo "										<tr>" . PHP_EOL;
												echo "											<td><i class=\"fa fa-user\"></i> Giuseppe B.</td>" . PHP_EOL;
												echo "											<td><a href =\"\"><i class=\"fa fa-user-check\"></i></a></td>" . PHP_EOL;
												echo "											<td><i class=\"fa fa-users-viewfinder\"></i></td>" . PHP_EOL;
												echo "											<td><a href =\"\"><i class=\"fa fa-square-xmark\"></i></a></td>" . PHP_EOL;
												echo "										</tr>" . PHP_EOL;

												echo "										<tr>" . PHP_EOL;
												echo "											<td><i class=\"fa fa-user\"></i> Carmine A.</td>" . PHP_EOL;
												echo "											<td><a href =\"\"><i class=\"fa fa-user-check\"></i></a></td>" . PHP_EOL;
												echo "											<td><i class=\"fa fa-users-viewfinder\"></i></td>" . PHP_EOL;
												echo "											<td><a href =\"\"><i class=\"fa fa-square-xmark\"></i></a></td>" . PHP_EOL;
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