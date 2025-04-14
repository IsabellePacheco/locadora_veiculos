
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
                            Bem-vindo, <strong>Usuário</strong>!
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

            <div class="col md-6">
                <div class="card h-100">
                    <div class="card-header">
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
                            </div>
                            <button class="btn btn-success w-100" type="submit" name="calcular">Calcular previsão</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- TABELA DE VEÍCULOS CADASTRADOS -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mt-2">
                            Veículos Cadastrados 
                        </h4>
                        <p class="mt-2">Clique em cima para mais detalhes:</p>
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
                                <tbody data-bs-toggle="modal" data-bs-target="#carro">
                                    <td>Carro</td>
                                    <td>Toyota </td>
                                    <td> RST4J82</td>
                                    <td>
                                        <span class="badge bg-success">
                                            Disponível
                                        </span>
                                    </td>
                                    <td>
                                        <div class="action-wrapper">
                                            <form action="post" class="btn-group-actions">

                                            <!-- Botão Deletar (sempre disponível para 'ADM') -->
                                             <button class="btn btn-danger btn-sm delete-btn" type="submit" name="Deletar">
                                                Deletar
                                            </button>

                                            <!-- Botões condicionais -->
                                            <div class="rent-group">
                                                <!-- Veículo alugado -->
                                                <button class="btn btn-warning btn-sm" type="submit" name="Devolver">Devolver</button>

                                                <!-- Veículo disponível -->
                                                <input type="number" name="dias" class="form-control days-input" value="1" min="1" required>
                                                <button class="btn btn-primary" name="alugar" type="submit">Alugar</button>
                                            </div>
                                            </form>
                                        </div>
                                    </td>

                                    <div class="modal fade" id="carro">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Carro</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>🚗 Toyota Corolla XEi 2.0 Flex 2022<br>
                                                        <br>
                                                        Sedan médio com motor 2.0 flex, câmbio CVT, excelente conforto e segurança. Ideal para quem busca economia e confiabilidade no uso diário ou em viagens.<br>
                                                        <br>
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tbody>
                                <tbody data-bs-toggle="modal" data-bs-target="#moto">
                                    <td>Moto</td>
                                    <td>Honda </td>
                                    <td>KLM9T56</td>
                                    <td>
                                        <span class="badge bg-warning">
                                            Alugado
                                        </span>
                                    </td>
                                    <td>
                                        <div class="action-wrapper">
                                            <form action="post" class="btn-group-actions">

                                            <!-- Botão Deletar (sempre disponível para 'ADM') -->
                                             <button class="btn btn-danger btn-sm delete-btn" type="submit" name="Deletar">
                                                Deletar
                                            </button>

                                            <!-- Botões condicionais -->
                                            <div class="rent-group">
                                                <!-- Veículo alugado -->
                                                <button class="btn btn-warning btn-sm" type="submit" name="Devolver">Devolver</button>

                                                <div class="modal fade" id="moto">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Moto</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        🏍️ Honda CG 160 Start 2021<br>
                                                        <br>
                                                        Moto urbana de baixa cilindrada, confiável e econômica. Ideal para deslocamentos diários, com baixo custo de manutenção e boa durabilidade.
                                                        
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                            </div>
                                            </form>
                                        </div>
                                    </td>
                                </tbody>
                                <tbody data-bs-toggle="modal" data-bs-target="#caminhao">
                                    <td>Moto</td>
                                    <td>Yamaha </td>
                                    <td>QWE3F88</td>
                                    <td>
                                        <span class="badge bg-success">
                                            Disponível
                                        </span>
                                    </td>
                                    <td>
                                        <div class="action-wrapper">
                                            <form action="post" class="btn-group-actions">

                                            <!-- Botão Deletar (sempre disponível para 'ADM') -->
                                             <button class="btn btn-danger btn-sm delete-btn" type="submit" name="Deletar">
                                                Deletar
                                            </button>

                                            <!-- Botões condicionais -->
                                            <div class="rent-group">
                                                <!-- Veículo alugado -->
                                                <button class="btn btn-warning btn-sm" type="submit" name="Devolver">Devolver</button>

                                                <!-- Veículo disponível -->
                                                <input type="number" name="dias" class="form-control days-input" value="1" min="1" required>
                                                <button class="btn btn-primary" name="alugar" type="submit">Alugar</button>

                                                <div class="modal fade" id="caminhao">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Moto</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        🏍️Yamaha MT-07 ABS 2022 🏍️<br><br>
                                                        Moto naked com motor bicilíndrico de 689cc, excelente torque e desempenho esportivo. Combina estilo agressivo com ótima dirigibilidade e tecnologia de segurança como ABS.
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                            </div>
                                            </form>
                                        </div>
                                    </td>
                                </tbody>
                                <tbody data-bs-toggle="modal" data-bs-target="#van">
                                    <td>Carro</td>
                                    <td>Jeep</td>
                                    <td>BGH2L19</td>
                                    <td>
                                        <span class="badge bg-warning">
                                            Alugado
                                        </span>
                                    </td>
                                    <td>
                                        <div class="action-wrapper">
                                            <form action="post" class="btn-group-actions">

                                            <!-- Botão Deletar (sempre disponível para 'ADM') -->
                                             <button class="btn btn-danger btn-sm delete-btn" type="submit" name="Deletar">
                                                Deletar
                                            </button>

                                            <!-- Botões condicionais -->
                                            <div class="rent-group">
                                                <!-- Veículo alugado -->
                                                <button class="btn btn-warning btn-sm" type="submit" name="Devolver">Devolver</button>

                                                <!-- Veículo disponível -->
                                                

                                                <div class="modal fade" id="van">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Carro</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        🚗 Jeep Compass Longitude 1.3 Turbo 2023 🚗<br><br>
                                                        SUV moderno com motor turbo e tração dianteira, possui ótimo espaço interno, central multimídia completa e design robusto. Indicado tanto para a cidade quanto para aventuras leves.
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                            </div>

                                            </form>
                                        </div>
                                    </td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>