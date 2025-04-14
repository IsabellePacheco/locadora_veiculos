
<?php
// Back-end
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADM - Locadora de Veículos</title>

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Link ícones do bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="style.css">
</head>
<body class="container py-4">
    <div class="container py-4">
        <!-- Mensagem de "Bem-Vindo" -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center inicio">
                    <h1>Sistema de Locadora de Veículos</h1>
                    <div class="d-flex align-items-center gap-3 user-info mx-3">
                        <span class="user-icon">
                            <i class="bi bi-person-circle" style="font-size: 24px;"></i>
                        </span>
                        <!-- Bem vindo, [usuário] -->
                        <span class="welcome-text">
                            Bem-vindo, <strong>Administrador</strong>!
                        </span>
                        <!-- Botão de LogOut -->
                        <a href="#" class="btn btn-outline-danger d-flex align-items-center gap-1">
                            <i class="bi bi-box-arrow-right"></i>
                            Sair
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Formulário para adicionar novos veículos -->
        <div class="row same-height-row">
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header">
                        <h4 class="mb-0">Adicionar novo veículo 🚗</h4>
                    </div>
                    <div class="card-body">
                        <form action="post" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="modelo" class="form-label">
                                    Modelo:
                                </label>
                                <input type="text" class="form-control" name="Modelo" placeholder="Digite aqui o modelo..." required="form-control">
                                <div class="invalid-feedback">
                                    Informe um modelo válido!
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="placa" class="form-label">
                                    Placa:
                                </label>
                                <input type="text" class="form-control" name="placa" placeholder="Digite aqui sua placa..." required="form-control">
                                <div class="invalid-feedback">
                                    Informe uma placa válida!
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="tipo" class="form-label">
                                    Tipo:
                                </label>
                                <select class="form-select" name="tipo" id="tipo" required>
                                    <option value="empty"></option>
                                    <option value="carro">Carro</option>
                                    <option value="moto">Moto</option>
                                    <option value="caminhão">Caminhão</option>
                                    <option value="van">Van</option>
                                </select>
                            </div>
                            <button class="btn btn-primary w-100" type="submit" name="adicionar">Adicionar veículo</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col md-6">
                <div class="card h-100">
                    <div class="card header">
                        <h4 class="mb-0">Calcular a previsão de aluguel 💵</h4>
                    </div>
                    <div class="card-body">
                        <form action="" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="tipo" class="input-label">
                                    Tipo de veículo:
                                </label>
                                <select class="form-select" name="tipo" id="tipo" required>
                                    <option value="empty"></option>
                                    <option value="carro">Carro</option>
                                    <option value="moto">Moto</option>
                                    <option value="caminhão">Caminhão</option>
                                    <option value="van">Van</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="quantidade" class="form-label">
                                    Quantidade de dias:
                                </label>
                                <input type="number" name="dias_calculo" class="form-control" value="1" required>
                                <button class="btn btn-primary w-100" type="submit" name="adicionar">Calcular</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- tabela de veiculos cadastrados -->
         <!-- row -linha -->
          <!-- mt- margin-top -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">
                            Veículos cadastrados 📄🚘🚘
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <th>Tipo</th>
                                    <th>Modelo</th>
                                    <th>Placa</th>
                                    <th>Status</th>
                                    <th>Ações</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Carros</td>
                                        <td>Uno</td>
                                        <td>SAE4D34</td>
                                        <td>
                                            <span class="badge bg-success">
                                                Disponível ✅
                                            </span>
                                        </td>
                                        <td>
                                            <div class="action-wrapper">
                                                <form action="post" class="btn-group-actions">

                                                <!-- botao deletar(sempre diponivel -adm) -->
                                                <button class="btn btn-danger btn-sm delete-btn" type="submit" name="deletar">
                                                    Deletar
                                                </button>
                                                <!-- botoes condicionais -->
                                                <div class="rent-group">
                                                    <!-- veiculo alugado -->
                                                    <button class="btn btn-warning btn-sm" type="submit" name="devolver">
                                                        Devolver
                                                    </button>

                                                    <!-- veiculo disponível -->
                                                    <input type="number"  name="dias" class="form-control days-input" value="1" min="1" required>
                                                    <button class="btn btn-primary " name="alugar" type="submit">
                                                        Alugar
                                                    </button>

                                                </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Moto</td>
                                        <td>Shineray</td>
                                        <td>SAE4D34</td>
                                        <td>
                                            <span class="badge bg-warning">
                                                Alugado ❌
                                            </span>
                                        </td>
                                        <td>
                                            <div class="action-wrapper">
                                                <form action="post" class="btn-group-actions">

                                                <!-- botao deletar(sempre diponivel -adm) -->
                                                <button class="btn btn-danger btn-sm delete-btn" type="submit" name="deletar">
                                                    Deletar
                                                </button>
                                                <!-- botoes condicionais -->
                                                <div class="rent-group">
                                                    <!-- veiculo alugado -->
                                                    <button class="btn btn-warning btn-sm" type="submit" name="devolver">
                                                        Devolver
                                                    </button>

                                                    <!-- veiculo disponível -->
                                                    <input type="number"  name="dias" class="form-control days-input" value="1" min="1" required>
                                                    <button class="btn btn-primary " name="alugar" type="submit">
                                                        Alugar
                                                    </button>

                                                </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Carros</td>
                                        <td>Toyota </td>
                                        <td> ABC1D23</td>
                                        <td>
                                            <span class="badge bg-success">
                                                Disponível ✅
                                            </span>
                                        </td>
                                        <td>
                                            <div class="action-wrapper">
                                                <form action="post" class="btn-group-actions">

                                                <!-- botao deletar(sempre diponivel -adm) -->
                                                <button class="btn btn-danger btn-sm delete-btn" type="submit" name="deletar">
                                                    Deletar
                                                </button>
                                                <!-- botoes condicionais -->
                                                <div class="rent-group">
                                                    <!-- veiculo alugado -->
                                                    <button class="btn btn-warning btn-sm" type="submit" name="devolver">
                                                        Devolver
                                                    </button>

                                                    <!-- veiculo disponível -->
                                                    <input type="number"  name="dias" class="form-control days-input" value="1" min="1" required>
                                                    <button class="btn btn-primary " name="alugar" type="submit">
                                                        Alugar
                                                    </button>

                                                </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Carros </td>
                                        <td>Honda </td>
                                        <td>XYZ9K87</td>
                                        <td>
                                            <span class="badge bg-success">
                                                Disponível ✅
                                            </span>
                                        </td>
                                        <td>
                                            <div class="action-wrapper">
                                                <form action="post" class="btn-group-actions">

                                                <!-- botao deletar(sempre diponivel -adm) -->
                                                <button class="btn btn-danger btn-sm delete-btn" type="submit" name="deletar">
                                                    Deletar
                                                </button>
                                                <!-- botoes condicionais -->
                                                <div class="rent-group">
                                                    <!-- veiculo alugado -->
                                                    <button class="btn btn-warning btn-sm" type="submit" name="devolver">
                                                        Devolver
                                                    </button>

                                                    <!-- veiculo disponível -->
                                                    <input type="number"  name="dias" class="form-control days-input" value="1" min="1" required>
                                                    <button class="btn btn-primary " name="alugar" type="submit">
                                                        Alugar
                                                    </button>

                                                </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>