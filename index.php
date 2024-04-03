<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>UPets</title>
</head>
<body>
    <div class="container-fluid">
        <div> <!-- menu -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar brand" href="#"> Zoo UP </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expand="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="#navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a></li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Animais</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expand="false">
                                Suprimentos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Manutenção</a></li>
                                <li><a class="dropdown-item" href="#">Alimentação</a></li>
                                <li><a class="dropdown-item" href="#">Medicos</a></li>
                                <li><a class="dropdown-item" href="#">E.P.I</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Financeiro</a></li>
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Funcionario</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="row">
        <div class="cow-md-3"></div><!--Div vazia -->
        <div class="cow-md-6 m-3 p-3">
            <h1>Cadastro de Animais</h1>
            <form action="cadastraAnimal.php" method="get">
                <div class="mb-3">
                    <label for="tipo" class = "form-label">Tipo</label>
                    <select class="form-select" name="familia">
                        <option value="1">Felinos</option>
                        <option value="2">Canideo</option>
                        <option value="3">Ave</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="nome">Nome Do Animal</label>
                    <input class="form-control" type="text" name="nome">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="tutor">Tutor</label>
                    <select class="from-select" name="tutor">
                        <option value="1">Joao</option>
                        <option value="2">Carlos</option>
                        <option value="3">Luis</option>
                    </select>
                </div>
                <div class="mb-3">
                <label class="form-label" for="porte">Porte</label>
                <select class="from-select" name="porte">
                        <option value="1">Pequeno</option>
                        <option value="2">Medio</option>
                        <option value="3">Grande</option>
                    </select>
                </div>
                <div class="mb-3">
                <label class="form-label" for="peso">Peso</label>
               <input  class ="form-control" type="text" name="peso">
                </div>
                <div class="mb-3">
                    <div>
                    <label for="">Gênero</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name = "genero" value="F">
                        <label class="form-check-label" for="genero">Femea</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name = "genero" value="M">
                        <label class="form-check-label" for="genero">Macho</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="dn">Data de Nascimento</label>
                    <input type="date"  name="dn" class="from-control">
                </div>
                <input class="btn btn-outline-danger" type="button" value="Cancelar">
                <input class="btn btn-outline-success" type="submit" value="Salvar">
            </form>
        </div>
        <div class="cow-md-3"></div>
    </div>
    </div>
</body>
</html>
