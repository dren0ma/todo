// mark completed task by clicking


//completing a task
$("ul").on("click", "li", function() {
	$(this).toggleClass("completed");

	// ajax post request
	$.post("done.php",
		{id: $(this).attr("id")},
		function(data, status) {
		});
	
});



//create new task
$('#newTask').keypress(function(event) {
	if (event.which == 13) {				//if user pressed ENTER key
		var	todoText = $(this).val();

		$(this).val('');

		$.post("create.php",
		{task: todoText},
		function(data, status) {
			$('ul').append("<li id='" + data + "'><span><i class='fa fa-trash'></i></span>" + todoText + 
				"</li>");
		});
	}
});



//deleting task

$("ul").on("click", "span", function() {
	//remove list item from DOM
	$(this).parent().fadeOut(500, function(){
		$(this).remove();
	});

	//ajax request to update JSON
	$.post("delete.php",
	{id: $(this).parent().attr('id')},		//retrieve id to be deleted
	function(data, status){
	});

event.stopPropagation();

})