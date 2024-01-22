<body>
<header>
        <nav>
            <a href="../../index.php">Home</a>
            <a href="#">Shop</a>
            <a href="../../signup.php">Signup</a>
            <a href="#">Location</a>
            <a href="#">Contact</a>
        </nav>
        <button type="button" aria-label="toggle curtain navigation" class="nav-toggler">
            <span class="line l1"></span>
            <span class="line l2"></span>
            <span class="line l3"></span>
        </button>
        <a href="./panier.php"> 
            <img src="./img/shopping-basket.png" class="panier" alt="">
        </a>
        <section class="home">
            <a href="./index.php"><h1>S<span class="glow">H</span>YNH<span class="glow">OO</span>K</h1></a>
        </section>
    </header>
    <style>
        *, ::after, ::before {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
a{
    text-decoration: none;
}

body {
    background-color: #B8B8FF   ;
    font-family: Lato,Helvetica,sans-serif;
    overflow-x: hidden;
}
        
    header{
    position: sticky;
    width: 100vw;
    height: 140px;
    background-color: #B8B8FF   ;
    /* background-color: red; */
    /* border-bottom: #FEFAE0 solid 1px; */
   
    }
        .home h1 {
    /* background-color: red; */
    height: 90px;
    font-family: Rubik Glitch;
    cursor: default;
    font-size: 100px;
    text-align: center;
    color: #f1f1f1;
    font-weight: 100;
    margin-bottom: 250px;
    margin-top: 40px;
    -webkit-box-reflect: below 1px linear-gradient;
    /* animation: animate 8s linear infinite; */
    line-height: 0.70em;
    filter: brightness();
    animation: slowGlow 3s linear infinite;
    
}

.home h1 span.glow {
    animation: animate 8s linear infinite;
    text-shadow: none;
}


.nav-toggler {
    position: fixed;
    z-index: 10;
    top: 40px;
    right: 30px;
    height: 50px;
    width: 50px;
    border: none;
    outline: none;
    cursor: pointer;
    display: flex;
    justify-content: center;
    align-content: center;
    background: transparent;
}

.panier{
    position: fixed;
    top: 15px;
    height: 40px;
    width: 40px;
    right: 105px;
    transition: 0.3s;
}
.panier:hover{
    animation: panier_wow 3s;
    transition: 0.3s;
}

.line   {
    position: absolute;
    display: block;
    height: 2px;
    width: 100%;
    background: #FEFAE0;
    transition: transform 0.3s ease-out, opacity 0.1s ease-out;
}

.l1 {
    transform: translateY(-10px);
}
.l3 {
    transform: translateY(10px);
}

.nav-toggler.active .l1 {
    transform: translateY(0px) rotate(135deg);
    background: #B8B8FF;

}

.nav-toggler.active .l2 {
    opacity: 0;
}

.nav-toggler.active .l3 {
    transform: translateY(0px) rotate(-135deg);
    background: #B8B8FF;
}

nav{
    position: fixed;
    width: 100%;
    min-height: 50vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    border-radius: 5px;
    background: #FEFAE0;
    border-bottom: 1px solid #cfcfcf;
    transform: translateY(-100%);
    transition: transform 0.3s cubic-bezier(0,.02,.32,1);
    text-shadow: 0 0 5px white;
    z-index: 5;
}

nav.active {
    transform: translate(0);
}

nav a{
    font-family: QuickSand, sans-serif;
    color: #D4A373;
    font-size: 30px;
    display: block;
    margin: 10px 0;
    text-decoration: none;
}
@keyframes slowGlow 
{
    0%, 40%,80%
    {
        text-shadow: 0 0 3px white, 0 0 10px #FFE1A8;
    }
    20%,70%
    { 
        text-shadow: 0 0 5px white , 0 0 10px #FFE1A8; 
    }
    98%
    {
        text-shadow: 0 0 4px white, 0 0 10px #FFE1A8;
    }

}


@keyframes animate 
{
    0%,18%,20%,50.1%,60%,65.1%, 80%, 91%, 92%
    {
        color: white;
        box-shadow: none;
        text-shadow: 0 0 10px #FFE1A8, 0 0 30px white;
    }
    18.1%,20.1%,50%,60.5%,65%,80.1%, 90%, 92.1%,100% 
    {
        color:  #C9CBA3;
        text-shadow: 0 0 6px black, 0 0 2px #FFE1A8;
        
    }
}


@keyframes panier_wow
{
    10%
    {
        transform: rotate(10deg);
    }
    30%
    {
        transform: rotate(-20deg);
    }
}
    </style>