<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord - Paiements</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #136ad5;
            color: #ecf0f1;
            transition: all 0.3s;
        }

        .sidebar.collapsed {
            width: 60px;
        }

        .logo-container {
            padding: 20px;
            text-align: center;
        }

        .logo img {
            max-width: 100%;
            height: auto;
        }

        .nav-item {
            padding: 10px 15px;
        }

        .nav-link {
            color: #ecf0f1;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .nav-text {
            margin-left: 10px;
        }

        .main-content {
            flex: 1;
            padding: 20px;
            transition: margin-left 0.3s;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .search-bar {
            flex: 1;
            max-width: 300px;
        }

        .table-responsive {
            margin-top: 20px;
        }
        .btn-lg {
                padding: 15px 30px;
                font-size: 1.2rem;
            }
            .transition-scale {
                transition: transform 0.3s ease-in-out;
            }
            .transition-scale:hover {
                transform: scale(1.1);
            }

        .btn-group {
            margin-bottom: 20px;    
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 60px;
            }

            .nav-text {
                display: none;
            }

            .main-content {
                margin-left: 60px;
            }
        }
    
    </style>
</head>
<body>
    <div class="sidebar" id="sidebar">
        <div class="logo-container">
            <div class="logo">
                <img src="../Authentification/images/logo.png" alt="logo">
            </div>
        </div>
        <nav>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        <i class="fas fa-tachometer-alt"></i>
                        <span class="nav-text">Tableau de bord</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#professors">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <span class="nav-text">Professeurs</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#payments">
                        <i class="fas fa-credit-card"></i>
                        <span class="nav-text">Paiements</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#supervisors">
                        <i class="fas fa-user-tie"></i>
                        <span class="nav-text">Surveillants</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#students">
                        <i class="fas fa-users"></i>
                        <span class="nav-text">Élèves</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#settings">
                        <i class="fas fa-cogs"></i>
                        <span class="nav-text">Paramètres</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=logout">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="nav-text">Déconnexion</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="main-content">
        <header class="header">
            <div class="search-bar" style="width: 70%; margin: 0 auto;">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Recherche..." style="border-radius: 25px 0 0 25px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    <div class="input-group-append">
                        <span class="input-group-text" style="background-color: #fff; border-radius: 0 25px 25px 0; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                            <i class="fas fa-search"></i>
                        </span>
                    </div>
                </div>
            </div>
            <h1>Tableau de bord</h1>
            <div class="header-icons">
                <a href="#" class="btn btn-link"><i class="fas fa-bell"></i></a>
                <a href="#" class="btn btn-link"><i class="fas fa-user"></i></a>
            </div>
        </header>

        <!-- Ajout des boutons avant le tableau -->
        <div class="btn-group d-flex justify-content-between">
            <a href="#" class="btn btn-success btn-lg mx-2 transition-scale">Professeurs</a>
            <a href="#" class="btn btn-warning btn-lg mx-2 transition-scale">Surveillants</a>
            <a href="#" class="btn btn-info btn-lg mx-2 transition-scale">Élèves</a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Adresse e-mail</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Olivia Rhye</td>
                        <td>olivia@untitledui.com</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Phoenix Baker</td>
                        <td>phoenix@untitledui.com</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Lana Steiner</td>
                        <td>lana@untitledui.com</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Demi Wilkinson</td>
                        <td>demi@untitledui.com</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Candice Wu</td>
                        <td>candice@untitledui.com</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Natal Craig</td>
                        <td>natal@untitledui.com</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('sidebar');
            const toggleBtn = document.createElement('button');
            toggleBtn.innerHTML = '<i class="fas fa-bars"></i>';
            toggleBtn.classList.add('btn', 'btn-link', 'd-md-none');
            toggleBtn.style.position = 'fixed';
            toggleBtn.style.top = '10px';
            toggleBtn.style.left = '10px';
            toggleBtn.style.zIndex = '1000';
            document.body.appendChild(toggleBtn);

            toggleBtn.addEventListener('click', function() {
                sidebar.classList.toggle('collapsed');
            });
        });
    </script>
</body>
</html>