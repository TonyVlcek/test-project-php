<table class="table table-striped">
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
			<td><?=$user->getCity()?></td>
		</tr>
		<?php }?>
	</tbody>
	<tfoot>

	</tfoot>
</table>

<div class="row">
	<form method="post" action="create.php" class="form-inline">
		<div class="form-group col-md-3">
			<label class="sr-only" for="name">Name</label>
			<input type="text" class="form-control" id="name" placeholder="Some name">
		</div>

		<div class="form-group col-md-3">
			<label class="sr-only" for="email">E-mail</label>
			<input name="email" class="form-control" input="text" id="email" placeholder="some@email.com">
		</div>

		<div class="form-group col-md-3">
			<label class="sr-only" for="city">City</label>
			<input name="city" class="form-control" input="text" id="city" placeholder="Prague"/>
		</div>

		<div class="col-md-3">
			<button type="submit" class="btn btn-primary">
				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
				Add
			</button>
		</div>
	</form>
</div>
