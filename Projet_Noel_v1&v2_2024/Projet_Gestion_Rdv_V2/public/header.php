<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Application Noel</title>
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
            .header {
                background-color: #0056b3;
                color: white;
                text-align: center;
                padding: 20px 0;
                font-size: 2rem;
                font-weight: bold;
                text-transform: uppercase;
                margin-bottom: 20px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            }
            body {
                font-family: 'Roboto', sans-serif;
                background-color: #f8f9fa;
            /* background-image: url('images/ecole2.jpeg');   
                background-size: cover;   
                background-position: center; 
                background-repeat: no-repeat;*/
            }
            .nav-link {
                font-size: 1.2rem; 
                color: black;
                transition: color 0.3s;
            }
            .nav-link:hover {
                text-decoration: underline; 
                color:rgb(29, 5, 151); 
            }
            .nav-link1 {
            font-size: 1.2rem; 
            color: rgb(29, 5, 151);
            transition: color 0.3s;
            }
            .nav-link1:hover {
                text-decoration: underline; 
                color:rgb(29, 5, 151); 
            }
            form {
                background-color: #ffffff;
                border: 1px solid #ccc;
                border-radius: 8px;
                padding: 20px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
                max-width: 500px; 
                margin: 20px auto; 
            }

                input[type="text"],
                input[type="email"],
                input[type="password"],
        textarea {
            width: 100%; 
            padding: 10px; 
            margin: 10px 0; 
            border: 1px solid #ccc; 
            border-radius: 4px; 
            box-sizing: border-box; 
        }

        input[type="submit"],
        button {
            background-color: #0056b3; 
            color: white; 
            border: none; 
            border-radius: 4px; 
            padding: 10px 15px; 
            cursor: pointer; 
            transition: background-color 0.3s; 
        }

        input[type="submit"]:hover,
        button:hover {
            background-color: #004494;
        }
        .red-link {
            color: red;
            position: absolute; 
            left: 0; 
            bottom: 0; 
        }
        .red-link:hover {
            color: red; 
        }
    </style>
    <div class="header text-center">
        <span class="mr-2"><h1>BIENVENUE DANS MON APPLICATION DE RENDEZVOUS🕒</h1></span>🎁⭐🎅
    </div>
    <nav class="navbar navbar-expand-lg bg-info m-3 ">
    <div class="container">
    <ul class="navbar-nav w-100">
        <li class="nav-item flex-fill text-center">
            <a class="nav-link1" href="../../Projet_Gestion_RDV_V2/public/index.php">APPLICATION DE GESTION RENDEZVOUS🕒📅</a>
        </li>
        <li class="nav-item text-left">
            <a class="nav-link1 red-link" href="../../Menu_Projet_Noel_2024_V1&V2.php">Menu_Noel</a>
        </li>
    </ul>
   </div>
    </nav>
    <nav class="navbar navbar-expand-lg bg-info m-3 ">
        <div class="container">
            <ul class="navbar-nav w-100 justify-content-between">
                <li class="nav-item flex-fill">
                    <a class="nav-link text-center" href="index.php?controller=rendezvous">rendezvous📞⏰</a>
                </li>
                <li class="nav-item flex-fill">
                    <a class="nav-link text-center" href="index.php?controller=client">client🤝💼</a>
                </li>
            </ul>
        </div>
    </nav>
    <head>
   
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
