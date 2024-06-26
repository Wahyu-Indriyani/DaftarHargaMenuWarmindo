<?php 
    include 'header.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Menu </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
   
</head>

<style>
    *{
        margin: 0;
        padding: 0;
        outline: none;
        border: none;
        text-decoration: none;
        box-sizing: border-box;
        font-family: "poppins";
        scroll-behavior: smooth;
    }
    body{
        background-color: #fff;
        margin: 0;
        padding: 0;
    }
    main img{
        width: 100%;
    }
    .container-sidebar{
        position: fixed;
        top: 120px;
        bottom: 0;
        height: 73%;
        left: 0;
        background: papayawhip;
        width: 70px;
        overflow: hidden;
        transition: width 0.2s linear;
        box-shadow: none;
    }
    .container-sidebar ul li a{
        position: relative;
        color: rgb(163, 42, 42);
        font-size: 14px;
        display: table;
        width: 300px;
        padding: 5px;   
    }
    .fas{
        position: relative;
        width: 65px;
        height: 90px;
        top: 14px;
        font-size: 20px;
        text-align: center;
    }
    .nav-item{
        position: relative;
        top: 12px;
        margin-left: 10px;
    }
    .container-sidebar a:hover{
        background-color: rgb(225, 215, 144);
    }
    .container-sidebar:hover{
        width: 280px;
        transition: all 0.5s ease;
    }
    .grid{
        display: grid;
        grid-template-columns: repeat(4,1fr);
        margin: 120px;
        align-items:center;
        grid-gap: 20px;
    }
    img{
        object-fit: cover;
    }
    .grid > article{
        box-shadow: 5px 5px 5px 0px grey;
        border-radius: 20px;
        text-align: center;
        background: papayawhip;
        width: 290px;
        transition: none;
    }
    .grid > article img{
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
    }
    .grid > article:hover{
        transform: none;
    }
    @media (max-width:800px){
        .grid{
            grid-template-columns:repeat(2,1fr);
        }
    }
    @media (max-width : 400px){
        .grid{
            grid-template-columns: repeat(1,1fr); 
        }
    }
    .container{
        display: flex;
        width: 100vw;
        min-height: 80vh;
    }
    #cart-container { 
        position: absolute; 
        flex-direction: column;
        flex:1; 
        top: 10px;
        right: 15px;
        width: 200px; 
        max-height: 80vh; 
        overflow:auto ;
        background: papayawhip; 
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    #cart-container{
        flex: 1;
        overflow-y: auto;
    }
    #cart-items {
        list-style-type: none;
        padding: 0;
    }
    #cart-items li {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
    }
    #total-price {
        font-size: 1em;
        font-weight: bold;
    }
    #checkout {
        display: block;
        width: 80%;
        padding: 10px;
        background: rgb(163, 42, 42);
        color: none;
        border: none;
        cursor: pointer;
        font-size: 1em;
        text-align: center;
        margin: 10px auto; /* Center the button horizontally */
    }
    #checkout:hover {
        background: #efdcc8;
    }
    .modal {
        display: none;
        position: fixed;
        z-index:11;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        /* background-color: rgb(0, 0, 0); */
        /* background-color: rgba(0, 0, 0, 0.4); */
        padding-top: 60px;
    }
    .modal-content {
        background-color: #efdcc8;
        margin: 10% auto;
        padding: 30px;
        border: none;
        width: 30%;
        box-shadow: 5px 5px 5px 0.5px rgb(163, 42, 42);
        border-radius: 20px;
        border-top-left-radius: 30px;
        border-top-right-radius: 30px;
    }
    .close-button {
        color: #aaa;
        float: right;
        font-size: 30px;
        font-weight: bold;
    }
    .close-button:hover,
    .close-button:focus {
        color: black;
        text-decoration: dotted;
        cursor: pointer;
        font-family: "poppins";
        text-align: center;
    }
</style>


<body>
    <!-- <header>
        <div class="logo">
            <img src="img/logo.png">
        </div>
        <nav>
            <ul>
                <li><a href="index.php"> Home </a></li>
                <li><a href="menu .html"> Menu </a></li>
                <li><a href="http://wa.me/+6282326193904"> Contacts </a></li>
                <li><a href="https://maps.app.goo.gl/n6ezXGY3Ce9C9AES9"> Location </a></li>
                <li>    
                    <div id="cart-container">
                        <p><b>Shopping Cart</b></p><br>
                        <ul id="cart-items"></ul>
                        <p id="total-price"><b>Total: Rp.0</b></p>
                        <button id="checkout">Checkout</button>
                    </div>
                </li>
            </ul>
        </nav>
    </header> -->

    <header>
        <div id="cart-container">
            <p><b>Shopping Cart</b></p><br>
            <ul id="cart-items"></ul>
            <p id="total-price"><b>Total: Rp.0</b></p>
            <button id="checkout">Checkout</button>
        </div>
    </header>

    <main>
    <nav class="container-sidebar">
        <ul>
            <li> <a href=" #Makanan ">
                <i class="fas fa-utensils"> </i>
                <span class="nav-item"> Aneka Indomie </span>
            </a></li>
            <li> <a href=" #Minuman ">
                <i class="fas fa-glass-martini"> </i>
                <span class="nav-item"> Aneka Minuman </span>
            </a></li>
            <li> <a href=" #Lainnya ">
                <i class="fas fa-pizza-slice"> </i>
                <span class="nav-item"> Lainnya </span>
            </a></li>
        </ul>
    </nav>
        <div class="container">
            <div class="grid" id="Makanan">
                <article>
                    <img src="img/ayam bawang.png" width="300px" height="300px">
                    <div class="konten">
                        <p>Indomie Ayam Bawang<br>Rp.12.000<br>
                        <span>Aneka Indomie</span></p>
                        <button class="add-to-cart" data-name="Indomie Ayam Bawang" data-price="12000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article>
                <article>
                    <img src="img/biasa.png" width="300px" height="300px">
                    <div class="konten">
                        <p>Indomie Biasa<br>Rp.12.000<br>
                        <span>Aneka Indomie</span></p>
                        <button class="add-to-cart" data-name="Indomie Biasa" data-price="12000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article>
                <article>
                    <img src="img/cabe ijo.png" width="300px" height="300px">
                    <div class="konten">
                        <p>Indomie Cabe Ijo<br>Rp.12.000<br>
                        <span>Aneka Indomie</span></p>
                        <button class="add-to-cart" data-name="Indomie Cabe Ijo" data-price="12000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article>
                <article>
                    <img src="img/jumbo.png" width="300px" height="300px">
                    <div class="konten">
                        <p>Indomie Jumbo<br>Rp.12.000<br>
                        <span>Aneka Indomie</span></p>
                        <button class="add-to-cart" data-name="Indomie Jumbo" data-price="12000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article>
                <article>
                    <img src="img/kari ayam.png"width="300px" height="300px" >
                    <div class="konten">
                        <p>Indomie Kari Ayam<br>Rp.12.000<br>
                        <span>Aneka Indomie</span></p>
                        <button class="add-to-cart" data-name="Indomie Kari Ayam" data-price="12000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article>
                <article>
                    <img src="img/rendang.png" width="300px" height="300px">
                    <div class="konten">
                        <p>Indomie Rendang<br>Rp.12.000<br>
                        <span>Aneka Indomie</span></p>
                        <button class="add-to-cart" data-name="Indomie Rendang" data-price="12000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article>
                <article>
                    <img src="img/soto.png" width="300px" height="300px">
                    <div class="konten">
                        <p>Indomie Soto<br>Rp.12.000<br>
                        <span>Aneka Indomie</span></p>
                        <button class="add-to-cart" data-name="Indomie Soto" data-price="12000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article>
                <article>
                    <img src="img/goreng spesial.png" width="300px" height="300px">
                    <div class="konten">
                        <p>Indomie Spesial<br>Rp.12.000<br>
                        <span>Aneka Indomie</span></p>
                        <button class="add-to-cart" data-name="Indomie Spesial" data-price="12000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article>     
                <article>
                    <img src="img/seblak.png" width="300px" height="300px">
                    <div class="konten">
                        <p>Indomie Seblak<br>Rp.12.000<br>
                        <span>Aneka Indomie</span></p>
                        <button class="add-to-cart" data-name="Indomie Seblak" data-price="12000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article>       
                <article>
                    <img src="img/ayam geprek .png" width="300px" height="300px">
                    <div class="konten">
                        <p>Indomie Ayam Geprek<br>Rp.12.000<br>
                        <span>Aneka Indomie</span></p>
                        <button class="add-to-cart" data-name="Indomie Ayam Geprek" data-price="12000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                </article> 
                <article>
                    <img src="img/Ayam panggang .png" width="300px" height="300px">
                    <div class="konten">
                        <p>Indomie Ayam Panggang <br>Rp.12.000<br>
                        <span>Aneka Indomie</span></p>
                        <button class="add-to-cart" data-name="Indomie Ayam Panggang" data-price="12000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article>  
                <article>
                    <img src="img/dendeng balado .crdownload" width="300px" height="300px">
                    <div class="konten">
                        <p>Indomie Dendeng Balado <br>Rp.12.000<br>
                        <span>Aneka Indomie</span></p>
                        <button class="add-to-cart" data-name="Indomie Dendeng Balado" data-price="12000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article> 
            </div>
        </div>     
            <div class="grid" id="Minuman">
                <article>
                    <img src="img/avocado .png" width="300px" height="300px">
                    <div class="konten">
                        <p> Pop Ice </p><br>Rp.5.000<br>
                        <span>Aneka Minuman</span></p>
                        <button class="add-to-cart" data-name="Pop Ice" data-price="5000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article> 
                <article>
                    <img src="img/blewah .png" width="300px" height="300px">
                    <div class="konten">
                        <p> Nutri Sari <br>Rp.5.000<br>
                        <span>Aneka Minuman</span></p>
                        <button class="add-to-cart" data-name="Nutri Sari" data-price="5000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article> 
                <article>
                    <img src="img/chocolatos .png" width="300px" height="300px">
                    <div class="konten">
                        <p> Chocolatos <br>Rp.5.000<br>
                        <span>Aneka Minuman</span></p>
                        <button class="add-to-cart" data-name="Chocolatos" data-price="5000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article> 
                <article>
                    <img src="img/milo .png" width="300px" height="300px">
                    <div class="konten">
                        <p> Milo <br>Rp.5.000<br>
                        <span>Aneka Minuman</span></p>
                        <button class="add-to-cart" data-name="Milo" data-price="5000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article>
                <article>
                    <img src="img/nescafe .png" width="300px" height="300px">
                    <div class="konten">
                        <p> Nescafe <br>Rp.5.000<br>
                        <span>Aneka Minuman</span></p>
                        <button class="add-to-cart" data-name="Nescafe" data-price="5000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article> 
                <article>
                    <img src="img/cappucino .png" width="300px" height="300px">
                    <div class="konten">
                        <p> Good Day <br>Rp.5.000<br>
                        <span>Aneka Minuman</span></p>
                        <button class="add-to-cart" data-name="Good Day" data-price="5000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article> 
                <article>
                    <img src="img/leci .png" width="300px" height="300px">
                    <div class="konten">
                        <p> Nutri Sari <br>Rp.5.000<br>
                        <span>Aneka Minuman</span></p>
                        <button class="add-to-cart" data-name="Nutri Sari" data-price="5000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article> 
                <article>
                    <img src="img/coklat .png" width="300px" height="300px">
                    <div class="konten">
                        <p> Pop Ice <br>Rp.5.000<br>
                        <span>Aneka Minuman</span></p>
                        <button class="add-to-cart" data-name="Pop Ice" data-price="5000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article> 
                <article>
                    <img src="img/mocacino .png" width="300px" height="300px">
                    <div class="konten">
                        <p> Good Day <br>Rp.5.000<br>
                        <span>Aneka Minuman</span></p>
                        <button class="add-to-cart" data-name="Good Day" data-price="5000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article> 
                <article>
                    <img src="img/cookies .png" width="300px" height="300px">
                    <div class="konten">
                        <p> Pop Ice <br>Rp.5.000<br>
                        <span>Aneka Minuman</span></p>
                        <button class="add-to-cart" data-name="Pop Ice" data-price="5000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article> 
                <article>
                    <img src="img/mangga .png" width="300px" height="300px">
                    <div class="konten">
                        <p> Pop Ice <br>Rp.5.000<br>
                        <span>Aneka Minuman</span></p>
                        <button class="add-to-cart" data-name="Pop Ice" data-price="5000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article> 
                <article>
                    <img src="img/melon .png" width="300px" height="300px">
                    <div class="konten">
                        <p> Pop Ice <br>Rp.5.000<br>
                        <span>Aneka Minuman</span></p>
                        <button class="add-to-cart" data-name="Pop Ice" data-price="5000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article> 
                <article>
                    <img src="img/taro .png" width="300px" height="300px">
                    <div class="konten">
                        <p> Pop Ice <br>Rp.5.000<br>
                        <span>Aneka Minuman</span></p>
                        <button class="add-to-cart" data-name="Pop Ice" data-price="5000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article> 
                <article>
                    <img src="img/p leci .png" width="300px" height="300px">
                    <div class="konten">
                        <p> Pop Ice <br>Rp.5.000<br>
                        <span>Aneka Minuman</span></p>
                        <button class="add-to-cart" data-name="Pop Ice" data-price="5000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article> 
                <article>
                    <img src="img/vanila latte .png" width="300px" height="300px">
                    <div class="konten">
                        <p> Pop Ice <br>Rp.5.000<br>
                        <span>Aneka Minuman</span></p>
                        <button class="add-to-cart" data-name="Pop Ice" data-price="5000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article> 
                <article>
                    <img src="img/vanila blue .png" width="300px" height="300px">
                    <div class="konten">
                        <p> Pop Ice <br>Rp.5.000<br>
                        <span>Aneka Minuman</span></p>
                        <button class="add-to-cart" data-name="Pop Ice" data-price="5000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article> 
                <article>
                    <img src="img/stroberi .png" width="300px" height="300px">
                    <div class="konten">
                        <p> Pop Ice <br>Rp.5.000<br>
                        <span>Aneka Minuman</span></p>
                        <button class="add-to-cart" data-name="Pop Ice" data-price="5000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article>  
                <article>
                    <img src="img/freeze .png" width="300px" height="300px">
                    <div class="konten">
                        <p> Good Day <br>Rp.5.000<br>
                        <span>Aneka Minuman</span></p>
                        <button class="add-to-cart" data-name="Good Day" data-price="5000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article> 
                <article>
                    <img src="img/white coffe .png" width="300px" height="300px">
                    <div class="konten">
                        <p> Luwak <br>Rp.5.000<br>
                        <span>Aneka Minuman</span></p>
                        <button class="add-to-cart" data-name="Luwak" data-price="5000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article> 
                <article>
                    <img src="img/beng beng .png" width="300px" height="300px">
                    <div class="konten">
                        <p> Drink Beng Beng <br>Rp.5.000<br>
                        <span>Aneka Minuman</span></p>
                        <button class="add-to-cart" data-name="Drink Beng Beng" data-price="5000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article>
            </div>
            <div class="grid" id="Lainnya">
                <article>
                    <img src="img/Tahu Isi Sayuran.jpeg" width="300px" height="300px">
                    <div class="konten">
                        <p>Tahu Isi (1) <br>Rp.2.000<br>
                        <span> Gorengan</span></p>
                        <button class="add-to-cart" data-name="Gorengan" data-price="2000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article>
                <article>
                    <img src="img/Mendoan .jpeg" width="300px" height="300px">
                    <div class="konten">
                        <p>Tempe Mendoan (1) <br>Rp.1.000<br>
                        <span>Gorengan</span></p>
                        <button class="add-to-cart" data-name="Tempe Mendoan" data-price="1000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article>
                <article>
                    <img src="img/Bakwan .jpeg" width="300px" height="300px">
                    <div class="konten">
                        <p>Bakwan (1) <br>Rp.1.000<br>
                        <span>Gorengan</span></p>
                        <button class="add-to-cart" data-name="Bakwan" data-price="1000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article>
                <article>
                    <img src="img/Pisang coklat.jpeg" width="300px" height="300px">
                    <div class="konten">
                        <p>Pisang Coklat (1) <br>Rp.1.000<br>
                        <span>Gorengan</span></p>
                        <button class="add-to-cart" data-name="Pisang Coklat" data-price="1000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article>
                <article>
                    <img src="img/Sate Telur .jpeg" width="300px" height="300px">
                    <div class="konten">
                        <p>Sate Telur (1) <br>Rp.3.000<br>
                        <span>Sate</span></p>
                        <button class="add-to-cart" data-name="Sate Telur" data-price="3000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article>
                <article>
                    <img src="img/Sate Usus .jpeg" width="300px" height="300px">
                    <div class="konten">
                        <p>Sate Usus (1) <br>Rp.2.000<br>
                        <span>Sate</span></p>
                        <button class="add-to-cart" data-name="Sate Usus" data-price="2000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article>
                <article>
                    <img src="img/Risol Mayo.jpeg" width="300px" height="300px">
                    <div class="konten">
                        <p>Risol Mayo (1) <br>Rp.2.500<br>
                        <span>Gorengan</span></p>
                        <button class="add-to-cart" data-name="Risol Mayo" data-price="2500"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article>
                <article>
                    <img src="img/Nasi Ayam geprek.jpeg" width="300px" height="300px">
                    <div class="konten">
                        <p> Ayam Geprek <br>Rp.12.000<br>
                        <span>Nasi</span></p>
                        <button class="add-to-cart" data-name="Ayam Geprek" data-price="12000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article>
                <article>
                    <img src="img/Telur Geprek .jpeg" width="300px" height="300px">
                    <div class="konten">
                        <p> Telur Geprek <br>Rp.7.000<br>
                        <span>Nasi</span></p>
                        <button class="add-to-cart" data-name="Telur Geprek" data-price="7000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article>
                <article>
                    <img src="img/Ikan Nila Bakar.jpeg" width="300px" height="300px">
                    <div class="konten">
                        <p> Ikan Nila Bakar <br>Rp.21.000<br>
                        <span>Nasi</span></p>
                        <button class="add-to-cart" data-name="Ikan Nila Bakar" data-price="21000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article>
                <article>
                    <img src="img/lele penyet .jpeg" width="300px" height="300px">
                    <div class="konten">
                        <p> Lele Penyet <br>Rp.14.000<br>
                        <span>Nasi</span></p>
                        <button class="add-to-cart" data-name="Lele Penyet" data-price="14000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article>
                <article>
                    <img src="img/Ayam Penyet .jpeg" width="300px" height="300px">
                    <div class="konten">
                        <p> Ayam Penyet <br>Rp.17.000<br>
                        <span>Nasi</span></p>
                        <button class="add-to-cart" data-name="Ayam Penyet" data-price="17000"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </div>
                </article>
            </div>  
        </div>
    </main>

<!-- Modal HTML -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close-button">&times;</span>
        <h2><center>Detail Pesanan Anda</center></h2><br>
        <ul id="modal-cart-items"></ul><br>
        <p id="modal-total-price"><b>Total: Rp.0</b></p><br>
        <button id="checkout2"><i class='fab fa-cc-visa' style='font-size:48px;color:black'></i></i> <i class="fa fa-credit-card" style="font-size:48px;color:black"></i>
            <br></button>
    </div>
</div>

    <!-- <footer>
        <div class="footer-container">
            <div class="footer-section about">
                <h3> Warmindo </h3><br>
                <p> &copy; 2024 Warmindo Putri Kecil Ayah</p>
            </div>

            <div class="footer-section browser">
                <h3> Browser </h3><br>
                    <ul>
                         <a href="index.php"> Home </a>
                         <a href="menu .html"> Menu </a>
                         <a href="wa.me/+6282326193904"> Contacts </a>
                         <a href="https://maps.app.goo.gl/n6ezXGY3Ce9C9AES9"> Location </a>
                </ul>
            </div>
            <br>

            <div class="social-icons">
                <h3> Social Media </h3><br>
                <ul>
                    <li><a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>

            <div class="footer-section address">
                <h3> Address </h3> 
                <p> Jl. Ringroad Selatan, Kragilan, Tamanan, </p>
                <p> Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55191 </p>
            </div>
    </footer> -->

    <?php 
        include 'footer.php'; 
    ?>
        <!-- Modal JavaScript -->
        <script>
            const cart = [];
            const cartItemsElement = document.getElementById('cart-items');
            const totalPriceElement = document.getElementById('total-price');
            const modalCartItemsElement = document.getElementById('modal-cart-items');
            const modalTotalPriceElement = document.getElementById('modal-total-price');
            const closeButton = document.querySelector('.close-button');
            const modal = document.getElementById("myModal");
            const checkoutButton = document.getElementById('checkout');
        
            document.querySelectorAll('.add-to-cart').forEach(button => {
                button.addEventListener('click', () => {
                    const name = button.getAttribute('data-name');
                    const price = parseInt(button.getAttribute('data-price'));
                    addItemToCart(name, price);
                });
            });
    
            function addItemToCart(name, price) {
                const item = cart.find(i => i.name === name);
                if (item) {
                    item.quantity++;
                } else {
                    cart.push({ name, price, quantity: 1 });
                }
                updateCart();
            }
    
            function updateCart() {
                cartItemsElement.innerHTML = '';
                modalCartItemsElement.innerHTML = '';
                let totalPrice = 0;
                cart.forEach(item => {
                    totalPrice += item.price * item.quantity;
                    const li = document.createElement('li');
                    li.textContent = `${item.name} - Rp.${item.price} x ${item.quantity}`;
                    const removeButton = document.createElement('button');
                    removeButton.innerHTML = '<i class="fa fa-trash"></i>';
                    removeButton.addEventListener('click', () => removeItemFromCart(item.name));
                    li.appendChild(removeButton);
                    cartItemsElement.appendChild(li);
    
                    // Update modal cart
                    const modalLi = document.createElement('li');
                    modalLi.textContent = `${item.name} - Rp.${item.price} x ${item.quantity}`;
                    modalCartItemsElement.appendChild(modalLi);
                });
                totalPriceElement.textContent = `Total: Rp.${totalPrice}`;
                modalTotalPriceElement.textContent = `Total: Rp.${totalPrice}`;
            }
    
            function removeItemFromCart(name) {
                const itemIndex = cart.findIndex(i => i.name === name);
                if (itemIndex !== -1) {
                    cart[itemIndex].quantity--;
                    if (cart[itemIndex].quantity === 0) {
                        cart.splice(itemIndex, 1);
                    }
                    updateCart();
                }
            }

            document.getElementById('checkout2').addEventListener('click', () => {
            alert('Terima Kasih, Struk Anda Akan Segera Kami Proses ');
            generateReceipt();
            cart.length = 0; // Clear the cart
            updateCart();
        });

        function generateReceipt() {
            let receipt = 'Receipt\n\n';
            let totalPrice = 0;
            cart.forEach(item => {
                const itemTotal = item.price * item.quantity;
                totalPrice += itemTotal;
                receipt += `${item.name} - Rp.${item.price} x ${item.quantity} = Rp.${itemTotal}\n`;
            });
            receipt += `\nTotal: Rp.${totalPrice}`;

            const blob = new Blob([receipt], { type: 'text/plain' });
            const link = document.createElement('a');
            link.href = URL.createObjectURL(blob);
            link.download = 'strukbelanja.txt';
            link.click();
        }

            checkoutButton.addEventListener('click', () => {
                updateCart();
                modal.style.display = "block";
            });
    
            closeButton.addEventListener('click', () => {
                modal.style.display = "none";
            });
    
            window.addEventListener('click', (event) => {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            });
        </script>
    
</body>
</html> 

