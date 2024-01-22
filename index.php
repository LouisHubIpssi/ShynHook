<?php 
    include ("./partials/head.php");
    include ("./partials/header.php");
?>
    <main>
        <!-- texte deroulant -->
        <div class="promo">
            <img src="./img/logobite.svg"  id="bandeau" alt="">
            <img src="./img/logobite.svg"  id="bandeau2" alt="">

            <div class="text-overlay"><p>Offres !</p></div>
        </div>
        <div class="shop">
            <div class="container">
                <img src="./img/pull1.png" class="vetement"  alt="" onclick="afficherDescription('Prototype Pull Beige oversize', './img/pull1.png')">
                <a href="#"><img src="./img/shopping-basket.png" class="shoppingBasket" alt="shopping-basket"></a>
            </div>
            <div class="container">
                <img src="./img/T-shirt coloré.png" class="vetement" alt="" onclick="afficherDescription('T-shirt coloré', './img/T-shirt coloré.png')">
                <a href="#"><img src="./img/shopping-basket.png" class="shoppingBasket" alt="shopping-basket"></a>
            </div>
            <div class="container">
                <img src="./img/pullVertBackRouge.png" class="vetement" alt="">
                <a href="#"><img src="./img/shopping-basket.png" class="shoppingBasket" alt="shopping-basket"></a>
            </div>
            <div class="container">
                <img src="./img/OIG (7).jpg" class="vetement"  alt="">
                <a href="#"><img src="./img/shopping-basket.png" class="shoppingBasket" alt="shopping-basket"></a>
            </div>
            <div class="container">
                <img src="./img/OIG (8).jpg" class="vetement" alt="">
                <a href="#"><img src="./img/shopping-basket.png" class="shoppingBasket" alt="shopping-basket"></a>
            </div>
            <div class="container">
                <img src="./img/OIG (9).jpg" class="vetement" alt="">
                <a href="#"><img src="./img/shopping-basket.png" class="shoppingBasket" alt="shopping-basket"></a>
            </div>
            <div class="container">
                <img src="./img/short.png" class="vetement" alt="">
                <a href="#"><img src="./img/shopping-basket.png" class="shoppingBasket" alt="shopping-basket"></a>
            </div>
        </div>

    </main>

    <script>
    function afficherDescription(nomVetement, photoVetement){
        var url = 'description.php?nom=' + encodeURIComponent(nomVetement) + '&photo=' + encodeURIComponent(photoVetement);
        window.location.href = url;
    }
</script>


    <style>*, ::after, ::before {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    background-color: #B8B8FF   ;
    font-family: Lato,Helvetica,sans-serif;
    overflow-x: hidden;
}

.home {
    display: flex;
    justify-content: center;
    align-content: center;
    /* background-color: red; */
    height: 120px;

}




.shop {
    display: flex;
    flex-direction: row;
    justify-content: center;
    height: 150vh;
    flex-wrap: wrap;
    gap: 100px;

    /* background-color:red; */
}

.carousel {
    display: flex;
    height: 40vh;
    background-color: transparent;
    width: 30vw;

}
.home img {
    width: 50px;
    height: 50px;
    opacity: 0.6;
    border: solid black 5px;
    background-color: transparent;
    box-shadow: -1px 2px 10px 3px rgba(0, 0, 0, 0.3) inset;
}


.container{
    width: 340px;
    height: 380px;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-right: 20px;
    margin-left: 20px;
    background-color: #FEFAE0;
    border-radius: 10px;
    margin-top: 30px;
    transition: 0.4s;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;

}

.container .vetement{
    width: 100%;
    height: 80%;
    border-radius: 10px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}

.container .shoppingBasket{
    height: 65px;
    width: 65px;
    transition: 0.3s;
    opacity: 0.8;
    margin-top: 0px;
    /* border: solid black; */
    border-radius: 10px;
    position: relative;
    
}

.container .shoppingBasket:hover{
    transform: scale(1.1);
    transition: 0.3s;
}

.container:hover{
    transform: scale(1.1);
    transition: 0.3s;
    background : rgb(156, 152, 152);
}

.promo{
    width: 100vw;
    height: 100px;
    /* background-color: red; */
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 10px;
}
#bandeau {
    height: 150px;
    width: 100vw;
    display: block;
}

main p {
    font-size: 40px;
    position: absolute;
    right: 200px;
    top: 175px;
}

#bandeau2 {
    margin-top: 100px;
    height: 120px;
    width: 10000px;
    position: absolute;
    z-index: -2;
    top: 800px;
}

@keyframes scroll {
            from {
                transform: translateX(100%);
            }
            to {
                transform: translateX(-100%);
            }
        }

        .text-overlay {
            white-space: nowrap;
            overflow: hidden;
            animation: scroll 10s linear infinite;
        }


</style>
    <?php include ("./partials/footer.php"); ?>