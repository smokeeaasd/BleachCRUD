<!doctype html>
<html lang="pt_br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Lista - Quincy</title>
</head>
<body>
	<div class="container padding p-3">
		<div class="row row-cols-4">
			<?php foreach($model->rows as $item):?>
			<div class="col padding p-2">
				<div class="card">
					<img src="<?=$item->avatar_quincy?>" class="card-img-top" height="300">
					<div class="card-body">
						<h5 class="card-title">ID: <?=$item->id?></h5>
						<h5 class="card-title"><?=$item->nome?></h5>
						<p class="card-text"><?=$item->descricao?></p>
					</div>
					<ul class="list-group list-group-flush">
					</ul>
					<div class="card-body">
						<a href="/quincy/delete?id=<?= $item->id ?>" class="card-link">Remover</a>
						<a href="/quincy/form?id=<?= $item->id ?>" class="card-link">Editar</a>
					</div>
				</div>
			</div>
			<?php endforeach;?>
		</div>
		<?php if (count($model->rows) == 0):?>
				<h1>Nenhum item registrado</h1>
		<?php endif;?>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>