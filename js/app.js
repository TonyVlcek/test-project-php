function filterTable(event) {
	console.log(event.target.value);
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

// Get the input element and add an event listener
const input = document.querySelector('#city-filter-input');
input.addEventListener("input", filterTable);
