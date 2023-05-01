function filterTable(event) {
	// Get the input element and table body
	const input = event.target;
	const rows = document.querySelectorAll('#users-table tbody tr');

	// Loop through each row of the table
	rows.forEach(row => {
		let cell = row.querySelector('td.city');

		if (cell.textContent.toLowerCase().includes(input.value.toLowerCase())) {
			row.style.display = '';
		} else {
			row.style.display = 'none';
		}
	});
}

function submitAddUserFrom(event) {
	event.preventDefault(); // avoid to execute the actual submit of the form.

	const form = $(this);
	const actionUrl = form.attr('action');

	$.ajax({
		type: 'POST',
		url: actionUrl,
		data: form.serialize(),
		dataType: 'json',
		success: function(response) {
			const success = $("<div class='alert alert-success' role='alert'>").text("New user added");
			$("#notice").html(success);

			// Reload to show the newly added user in table
			//TODO: Better solution to only reload the table. Parse and replace table with another AJAX request to index.php
			window.location.reload();
		},
		error: function(xhr, status, error) {
			const errors = JSON.parse(xhr.responseText);
			$("#notice").html(); // reset notice content
			errors.forEach(error => {
				const alert = $("<div class='alert alert-danger' role='alert'>").text(error);
				$("#notice").append(alert);
			})
		}
	});
}

// Filter event listener
const input = document.querySelector('#city-filter-input');
input.addEventListener("input", filterTable);

// Add user from submission listener
$("#add-user").submit(submitAddUserFrom);
