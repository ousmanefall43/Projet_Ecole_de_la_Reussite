<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            overflow-x: hidden;
        }
        .sidebar {
            background-color: #136ad5;
            color: #ecf0f1;
            height: 100vh;
            transition: all 0.3s;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            width: 220px;
        }
        .sidebar.active {
            left: -220px;
        }
        .sidebar .nav-link {
            color: #ecf0f1;
            padding: 10px 15px;
            display: flex;
            align-items: center;
        }
        .sidebar .nav-link span {
            margin-left: 10px;
        }
        .sidebar .nav-link:hover {
            background-color: #4f81c7;
        }
        .main-content {
            transition: margin-left 0.3s;
            margin-left: 220px;
            width: calc(100% - 220px);
        }
        .nav-item {
            width: 100%;
        }
        .logo-container {
            padding: 15px;
        }
        .logo img {
            max-width: 100%;
            height: auto;
        }
        .search-bar {
            width: 100%;
            max-width: 300px;
        }
        .header-icons {
            display: flex;
            align-items: center;
        }
        @media (max-width: 1200px) {
            .sidebar {
                width: 180px;
            }
            .main-content {
                margin-left: 180px;
                width: calc(100% - 180px);
            }
        }
        @media (max-width: 992px) {
            .sidebar {
                left: -220px;
            }
            .sidebar.active {
                left: 0;
            }
            .main-content {
                margin-left: 0;
                width: 100%;
            }
            .navbar-toggler {
                display: block;
            }
        }
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                align-items: flex-start;
            }
            .search-bar {
                order: -1;
                margin-bottom: 10px;
            }
            .header-icons {
                margin-top: 10px;
            }
        }
        @media (max-width: 576px) {
            .nav-item {
                width: 100%;
            }
            .search-bar {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <nav class="sidebar" id="sidebar">
                <div class="logo-container">
                    <div class="logo">
                        <img src="../Authentification/images/logo.png" alt="logo" class="img-fluid">
                    </div>
                </div>
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

            <main class="main-content">
                <header class="d-flex justify-content-between flex-wrap align-items-center p-3 border-bottom">
                    <button class="navbar-toggler d-lg-none" type="button" id="sidebarCollapse">
                        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                    </button>
                    <h1 class="h2">Tableau de bord</h1>
                    <div class="search-bar">
                        <input type="text" class="form-control" placeholder="Recherche...">
                    </div>
                    <div class="header-icons">
                        <a href="#" class="text-decoration-none text-dark mx-2"><i class="fas fa-bell"></i></a>
                        <a href="#" class="text-decoration-none text-dark mx-2"><i class="fas fa-user"></i></a>
                    </div>
                </header>
                <!-- Contenu principal ici -->
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $('.main-content').toggleClass('col-md-9 col-lg-10');
            });
        });
    </script>
</body>
</html>
