<!DOCTYPE html>
<html lang="en">

<head>

    <title>Release Assistant - Development - Map existing column (ODI)</title>

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

                    <h1 class="h3 mb-4 text-gray-800">Development - Map existing column (ODI)</h1>

                    <div class="card shadow mb-4">
                        <div class="card-body">
													
							<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">

								<span>Development Object</span>

								<div class="input-group mb-2">
									<input type="text" class="form-control bg-light border-0 small" size="64" value="MAP_FT_TEST_ACTIVITY_IT_04" required>
								</div>

								<span>Release Object</span>

								<div class="input-group mb-2">
									<input type="text" class="form-control bg-light border-0 small" size="64" value="PKG_FT_TEST_ACTIVITY_IT" required>
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