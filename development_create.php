<!DOCTYPE html>
<html lang="en">

<head>

    <title>Release Assistant - Create Development</title>

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

                    <h1 class="h3 mb-4 text-gray-800">Create Development</h1>

                    <div class="card shadow mb-4">
                        <div class="card-body">
						
							<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">

								<span>Development Object</span>

								<div class="input-group mb-2">
									<input type="text" class="form-control bg-light border-0 small" size="64" placeholder="Development Object name..." required>
								</div>

								<span>Release Object</span>

								<div class="input-group mb-4">
									<input type="text" class="form-control bg-light border-0 small" size="64" placeholder="Release Object name..." required>
								</div>

								<div class="table-responsive">

									<table class="table table-responsive table-borderless table-striped">
										
										<thead class="thead-dark">
											<tr>
												<th scope="col">Development Type</th>
												<th scope="col">Category</th>
												<th scope="col"></th>
											</tr>
										</thead>

										<tbody>
									  
											<?php

													echo "										<tr>" . PHP_EOL;
													echo "											<td><i class=\"fa fa-file-code\"></i> Add new column</td>" . PHP_EOL;
													echo "											<td>SQL</td>" . PHP_EOL;
													echo "											<td><a href=\"\"><i class=\"fa-solid fa-square-check\"></i></a></td>" . PHP_EOL;
													echo "										</tr>" . PHP_EOL;

													echo "										<tr>" . PHP_EOL;
													echo "											<td><i class=\"fa fa-file-code\"></i> Add new table</td>" . PHP_EOL;
													echo "											<td>SQL</td>" . PHP_EOL;
													echo "											<td><a href=\"\"><i class=\"fa-solid fa-square-check\"></i></a></td>" . PHP_EOL;
													echo "										</tr>" . PHP_EOL;

													echo "										<tr>" . PHP_EOL;
													echo "											<td><i class=\"fa fa-file-code\"></i> Map new column</td>" . PHP_EOL;
													echo "											<td>ODI</td>" . PHP_EOL;
													echo "											<td><a href=\"\"><i class=\"fa-solid fa-square-check\"></i></a></td>" . PHP_EOL;
													echo "										</tr>" . PHP_EOL;

													echo "										<tr>" . PHP_EOL;
													echo "											<td><i class=\"fa fa-file-code\"></i> Map new table</td>" . PHP_EOL;
													echo "											<td>ODI</td>" . PHP_EOL;
													echo "											<td><a href=\"\"><i class=\"fa-solid fa-square-check\"></i></a></td>" . PHP_EOL;
													echo "										</tr>" . PHP_EOL;

													echo "										<tr>" . PHP_EOL;
													echo "											<td><i class=\"fa fa-file-code\"></i> Map existing column</td>" . PHP_EOL;
													echo "											<td>ODI</td>" . PHP_EOL;
													echo "											<td><a href=\"\"><i class=\"fa-solid fa-square-check\"></i></a></td>" . PHP_EOL;
													echo "										</tr>" . PHP_EOL;

											?>
										
										</tbody>
									</table>
								</div>

								<div class="input-group-append mt-4">
									<button class="btn btn-primary" type="button">
										<i class="fas fa-square-check fa-sm"></i>
									</button>
								</div>

							</form>

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