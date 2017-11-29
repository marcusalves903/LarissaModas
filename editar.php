<br/>

<div class="col-md-8 col-md-offset-2">
	<form method = "POST" action = "">
		<div class="form-group">
			<label>ID: </label>
			<input type = "text" name = "nome" class = "form-control" value = "<?php echo $nome; ?>"><br/>
		</div>
		<div class="form-group">
			<label>Descrição: </label>
			<input type = "text" name = "senha" class = "form-control" value = "<?php echo $senha; ?>""><br/>
		</div>
		<div class="form-group">
			<label>Preço: </label>
			<input type = "text" name = "email" class = "form-control" value = "<?php echo $email; ?>""><br/>
		</div>
		<div class="form-group">
			<label>quantidade: </label>
			<input type = "text" name = "qunatidade" class = "form-control" value = "<?php echo $quantidade; ?>""><br/>
		</div>
	   <div class="form-group">
			<input type = "submit" name = "Atualizar" class = "btn btn-warning" value = "Atualizar dados"><br/>
		</div>
	</form>
</div>

