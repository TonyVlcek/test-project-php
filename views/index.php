<form class="form-inline">
	<input type="text" id="city-filter-input" class="form-control" placeholder="Filter by City">
</form>

<table class="table table-striped" id="users-table">
	<thead>
		<tr>
			<th>Name</th>
			<th>E-mail</th>
			<th>City</th>
		</tr>
	</thead>
	<tbody>

		<?php foreach($users as $user){?>
		<tr>
			<td><?=$user->getName()?></td>
			<td><?=$user->getEmail()?></td>
			<td class="city"><?=$user->getCity()?></td>
		</tr>
		<?php }?>
	</tbody>
	<tfoot>

	</tfoot>
</table>

<div class="row">
	<div id="notice"></div>
	<form id="add-user" method="post" action="create.php" class="form-inline">
		<div class="form-group col-md-3">
			<label class="sr-only" for="name">Name</label>
			<input name="name" type="text" class="form-control" id="name" placeholder="Some Name" required maxlength="255">
		</div>

		<div class="form-group col-md-3">
			<label class="sr-only" for="email">E-mail</label>
			<input name="email" class="form-control" input="email" id="email" placeholder="some@email.com" required maxlength="255">
		</div>

		<div class="form-group col-md-3">
			<label class="sr-only" for="city">City</label>
			<input name="city" class="form-control" input="text" id="city" placeholder="Prague" required maxlength="255"/>
		</div>

		<div class="col-md-3">
			<button type="submit" class="btn btn-primary">
				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
				Add
			</button>
		</div>
	</form>
</div>
