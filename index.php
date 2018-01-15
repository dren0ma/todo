<?php

$todos = file_get_contents('assets/todos.json');
$todos = json_decode($todos, true);

?>

<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE-Edge">
	
	<title>PHP To-Do-List</title>

	<!--   imports bulma   -->
	<link rel="stylesheet" type="text/css" href="assets/bulma/bulma.css">

	<!--   imports custom css   -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	<!--   import fontawesome   -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="columns is-vcentered">
	<div class="column col-todo is-8 is-offset-2">
		<h1 class="title">To-Do List</h1>
		
		<div class="field">
			<div class="control">
				<input class="input" type="text" placeholder="Add New Task" id="newTask">
			</div>
			<div class="content">
			<ul class="fa-ul">
				<?php
					foreach ($todos as $key => $todo) {
						if ($todo['done'] === false){	//task not complete
							echo "<li id='".$key. "'><span><i class='fa fa-li fa-trash'></i></span>".$todo['task']."</label>";
						}
						else {							//task completed
							echo "<li id='".$key. "' class='completed'><span><i class='fa fa-li fa-trash'></i></span>".$todo['task']."</label>";
						}
					}

				?>
			</ul>
			</div>
		</div>
	</div>
</div>


	<!--   imports jQuery   -->
	<script src="assets/js/jquery-3.2.1.min.js"></script>

	<!--   import custom javascript   -->
	<script type="text/javascript" src="assets/js/todos.js"></script>


</body>
</html>