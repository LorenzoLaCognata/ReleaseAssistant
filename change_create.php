<!DOCTYPE html>
<html lang="en">

<head>

    <title>Release Assistant - Create Change</title>

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

                    <h1 class="h3 mb-4 text-gray-800">Create Change</h1>

                    <div class="card shadow mb-4">
                        <div class="card-body">
						
							<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">

								<span>Name</span>

								<div class="input-group mb-2">
									<input type="text" class="form-control bg-light border-0 small" placeholder="Change name...">
								</div>

								<span>Type</span>

								<div class="input-group mb-2">
									<input type="radio" class="form-control bg-light border-0 small" id="feature" name="type" value="feature">
									<label for="feature">Feature</label>
									<input type="radio" class="form-control bg-light border-0 small" id="fix" name="type" value="fix">
									<label for="fix">Fix</label>
								</div>

								<div class="input-group-append mt-4">
									<button class="btn btn-primary" type="button">
										<i class="fas fa-square-plus fa-sm"></i>
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