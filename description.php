<?php 
 include "./partials/head.php";
 include "./partials/header.php";
?>


<body>
    <main>
        <!-- Page de description commune pour les vêtements -->
        <div id="gauche">
            <img src="" id="photoVetement" alt="">
        </div>
        <div id="droite">
            <h2 id="nomVetement"></h2>
            <label for="choixFruit">Choisissez un fruit :</label>
            <select id="choixFruit" name="fruits">
            <option value="pomme">M</option>
            <option value="orange">L</option>
            <option value="banane">S</option>
            <option value="fraise">Xl</option>
            </select>
            <button id="panier">
                <p>Ajouter au panier</p>
            </button>

            <button id="paiement">
                <p>Précommander cet article </p>
            </button>
        





    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
    // Récupère les paramètres de l'URL
    var urlParams = new URLSearchParams(window.location.search);
    var nomVetement = urlParams.get('nom');
    var photoVetement = urlParams.get('photo');

    // Met à jour la page de description
    var nomVetementElement = document.getElementById('nomVetement');
    var photoVetementElement = document.getElementById('photoVetement');

    // Définissez les informations du produit
    nomVetementElement.innerText = nomVetement || 'Nom du Vêtement';
    photoVetementElement.src = photoVetement || 'default.jpg';
    });


    </script>
    <style>
        main{
            display: flex;
        }

        #gauche{
            height: 80vh;
            width: 45vw;
            background-color: #FEFAE0;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 100px;
            border-radius: 20px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;

        }
        #gauche img{
            width: 80%;
            height: 80%;
            border-radius: 20px;
            
        }

        #droite {
            height: 80vh;
            width: 35vw;
            /* background-color: #FEFAE0; */
            border: solid #FEFAE0 2px;
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-left: 100px;
            
        }
        #droite select {
            width: 60%;
            height: 100px;
            border-radius: 40px;
        }
        #panier {
            width: 40%;
            height: 60px;
            background-color: #FEFAE0;
            display:flex;
            align-items: center;
            justify-content: center;
            border: solid black 2px;
            border-radius: 50px;
            margin-top : 100px;
            transition: 0.2s;
        }
        #panier:hover {
            transform: scale(1.06);
            transition: 0.2s;
        }
        #paiement {
            width: 40%;
            height: 60px;
            background-color: #FEFAE0;
            display:flex;
            align-items: center;
            justify-content: center;
            border: solid black 2px;
            border-radius: 50px;
            margin-top: 60px;
            transition: 0.2s;
        }
        #paiement:hover {
            transform: scale(1.05);
            transition: 0.2s;
        }

        #droite h2{
            margin-bottom: 50px;
            font-size: 3rem;
        }
        #droite label{
            margin-bottom: 15px;
        }
        
    </style>
</body>
</html>