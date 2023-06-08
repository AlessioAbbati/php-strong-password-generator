<?php include_once __DIR__ . '/logic.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link di BOOTSTRAP, per accedere alla libreria-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- script con link di BOOTSTRAP, da mettere in fondo al body o nell'head con defer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous" defer></script>
    <title>PHP Strong Password Generator</title>
</head>

<body>
    <div class="container">
        <h1>Strong Password Generator</h1>
        <h2>Genera una password sicura</h2>
        <div class="alert alert-danger" role="alert">
            Nessun parametro valido inserito
        </div>
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="inputPassword6" class="col-form-label">Lunghezza Password:</label>
            </div>
            <div class="col-auto">
                <input type="password" id="inputPassword6" class="form-control" aria-labelledby="passwordHelpInline">
            </div>
        </div>
        <div class="form-check">
				<input class="form-check-input" type="checkbox" id="lettere" name="chars[]" value="lettere">
				<label class="form-check-label" for="lettere">
					Lettere
				</label>
			</div>

			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="numeri" name="chars[]" value="numeri">
				<label class="form-check-label" for="numeri">
					Numeri
				</label>
			</div>

			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="simboli" name="chars[]" value="simboli">
				<label class="form-check-label" for="simboli">
					Simboli
				</label>
			</div>
            <button type="submit" class="btn btn-primary">Submit</button>
			<a href="/php-strong-password-generator" class="btn btn-secondary">Reset</a>
    </div>
</body>

</html>