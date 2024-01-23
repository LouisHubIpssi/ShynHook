<?php
include "./partials/head.php";
include "./partials/header.php";
?>


<main>


<img src="./img/icons8-shopping-cart-96.png" alt=""><br>
<h1>Votre panier est vide...</h1>

</main>

<style>
    main {
        display: flex;
        flex-direction: column;
        align-items: center;
        height: 80vh;
        width: 100vw;
    }
    main h1{
        font-family: Lato;
        font-size: 50px;
        margin-top: 30px;
        
    }
    main img {
        width: 8rem;
        height: 8rem;
        margin-top: 200px;
    }
</style>

<?php include "./partials/footer.php" ?>