<!doctype html>
<html lang="pt_br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Cadastro - Quincy</title>
</head>
<body>
	<div class="container padding p-5">
		<h1>Cadastro - Quincy</h1>
		<div class="tab-content">
			<div class="tab-pane fade show active" role="tabpanel">
				<form id="frm1" method="POST" action="/quincy/form/save" class="border rounded-3 padding p-2">
					<input type="hidden" value="<?= $model->id ?>" name="id"/>
					<div class="form-outline mb-4">
						<label for="nome" class="form-label">Nome</label>
						<input type="text" class="form-control" id="nome" name="nome" value="<?= $model->nome ?>" required />
					</div>

					<div class="mb-3">
						<label for="descricao" class="form-label">Descrição</label>
						<textarea class="form-control" id="descricao" name="descricao" rows="3" required><?= $model->descricao ?></textarea>
					</div>

					<div class="mb-3">
						<label for="select_img" class="form-label">Imagem</label>
						<input class="form-control select_img" type="file" id="formFile" name="select_img" value="<?= $model->avatar_quincy ?>" accept="image/png, image/jpeg, image/jpg" required>
					</div>

					<div class="mb-3">
						<button type="submit" class="btn btn-primary mb-3">Salvar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script>
		<?php require(dirname(__FILE__) . '\js\quincy.js') ?>
	</script>
</body>

</html>