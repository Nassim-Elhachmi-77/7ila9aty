<?php

session_start();

if(!isset($_SESSION['nom'])){

header("Location: login.php");

}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>7ila9aty</title>

<style>

@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&display=swap');

body {
    font-family: Arial;
    margin: 0;
    background: #f5f5f5;
    text-align: center;
}

/* NAV */
nav {
    background: black;
    color: white;
    padding: 20px 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* TITRE EFFET */
.logo {
    font-family: 'Playfair Display', serif;
    font-size: 38px;
    font-weight: 900;
    background: linear-gradient(90deg, #FFD700, #FF6B00, #FFD700, #FF6B00);
    background-size: 300%;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    animation: shimmer 3s infinite linear;
    letter-spacing: 3px;
    text-transform: uppercase;
}

.logo::after {
    content: '✂️';
    -webkit-text-fill-color: #FFD700;
    font-size: 22px;
    margin-left: 8px;
    display: inline-block;
}

@keyframes shimmer {
    0% { background-position: 0% }
    100% { background-position: 300% }
}
nav button {
    background: white;
    color: black;
    border: none;
    padding: 8px 14px;
    cursor: pointer;
    margin-left: 5px;
    font-weight: bold;
    border-radius: 3px;
    transition: background 0.2s;
}

nav button:hover {
    background: #FFD700;
}

/* SECTIONS */
section {
    display: none;
    margin: 30px;
}

.active {
    display: block;
}

/* HERO */
.hero {
    position: relative;
    height: 280px;
    overflow: hidden;
    margin-bottom: 20px;
}

.hero img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(0.5);
}

.hero-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    width: 100%;
}

.hero-text h1 {
    font-family: 'Playfair Display', serif;
    font-size: 52px;
    font-weight: 900;
    background: linear-gradient(90deg, #FFD700, #FF6B00, #FFD700);
    background-size: 300%;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    animation: shimmer 3s infinite linear;
    margin: 0;
    letter-spacing: 4px;
    text-transform: uppercase;
}

.hero-text p {
    color: #ddd;
    font-size: 16px;
    margin-top: 8px;
}

/* SERVICE CARDS */
.services-grid {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
    margin: 20px 0;
}

.card {
    background: white;
    width: 200px;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0,0,0,0.15);
}

.card img {
    width: 100%;
    height: 140px;
    object-fit: cover;
}

.card-body {
    padding: 12px;
}

.card-body h3 { margin: 5px 0; }

.card-body p {
    color: #FF6B00;
    font-weight: bold;
    margin: 5px 0;
}

/* TABLE */
table {
    margin: auto;
    width: 60%;
    background: white;
    border-collapse: collapse;
}

th {
    background: black;
    color: white;
    padding: 12px;
}

td {
    border: 1px solid #ddd;
    padding: 10px;
}

tr:nth-child(even) td { background: #f9f9f9; }

/* FORM */
input, select {
    padding: 10px;
    margin: 10px;
    width: 250px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

/* PANIER */
.panier {
    background: white;
    width: 300px;
    margin: auto;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

button {
    background: black;
    color: white;
    padding: 10px 16px;
    border: none;
    cursor: pointer;
    border-radius: 4px;
    transition: background 0.2s;
}

button:hover { background: #333; }


/* SECTION TITLE */
.section-title {
    font-family: 'Playfair Display', serif;
    font-size: 26px;
    display: inline-block;
    margin-bottom: 15px;
}

.section-title::after {
    content: '';
    display: block;
    width: 60%;
    height: 3px;
    background: linear-gradient(90deg, #FFD700, #FF6B00);
    margin: 5px auto 0;
    border-radius: 2px;
}

</style>
</head>
<body>

<!-- NAV -->
<nav>
    <div class="logo">7ila9aty</div>
    <div>
        <button onclick="show('home')">🏠 Home</button>
        <button onclick="show('profile')">👤 Profile</button>
        <a href="logout.php">

<button>
🚪 Logout
</button>

</a>
    </div>
</nav>

<!-- HOME -->
<section id="home" class="active">

<!-- HERO IMAGE -->
<div class="hero">
    <img src="https://images.unsplash.com/photo-1585747860715-2ba37e788b70?w=1200&q=80" alt="Barbershop">
    <div class="hero-text">
        <h1>7ila9aty</h1>
        <p>Le meilleur salon de coiffure pour hommes</p>
    </div>
</div>

<h2 id="welcome"></h2>

<!-- SERVICES AVEC IMAGES -->
<h2 class="section-title">Nos Services</h2>

<div class="services-grid">

    <div class="card">
        <img src="https://images.unsplash.com/photo-1599351431202-1e0f0137899a?w=400&q=80" alt="Coupe">
        <div class="card-body">
            <h3>✂️ Coupe</h3>
            <p>50 Dhs</p>
            <button onclick="add(50)">Ajouter</button>
        </div>
    </div>

    <div class="card">
        <img src="https://images.unsplash.com/photo-1621605815971-fbc98d665033?w=400&q=80" alt="Barbe">
        <div class="card-body">
            <h3>🪒 Barbe</h3>
            <p>30 Dhs</p>
            <button onclick="add(30)">Ajouter</button>
        </div>
    </div>

    <div class="card">
        <img src="https://images.unsplash.com/photo-1503951914875-452162b0f3f1?w=400&q=80" alt="Coupe + Barbe">
        <div class="card-body">
            <h3>💈 Coupe + Barbe</h3>
            <p>70 Dhs</p>
            <button onclick="add(70)">Ajouter</button>
        </div>
    </div>

</div>

<!-- PANIER -->
<h2 class="section-title">Panier</h2>

<div class="panier">
    <p>Total: <span id="total">0</span> Dhs</p>
    <button onclick="pay()">💳 Payer</button>
    <button onclick="clearCart()" style="background:#888; margin-left:5px;">🗑️ Vider</button>
</div>

<!-- RENDEZ-VOUS -->
<h2 class="section-title" style="margin-top:30px;">Rendez-vous</h2>

<form onsubmit="book(event)">
    <select id="service">
        <option>Coupe</option>
        <option>Barbe</option>
        <option>Coupe + Barbe</option>
    </select><br>
    <input type="date" id="date" required><br>
    <input type="time" id="time" required><br>
    <button type="submit">📅 Réserver</button>
</form>


</section>

<!-- REGISTER -->


<!-- PROFILE -->
<section id="profile">

<h2 class="section-title">Profile</h2>

<p>

👤 Nom :
<?php echo $_SESSION['nom']; ?>

</p>

<p>

📧 Email :
<?php echo $_SESSION['email']; ?>

</p>

<p>

📞 Tel :
<?php echo $_SESSION['tel']; ?>

</p>

</section>

<script>

function show(page){
    document.querySelectorAll("section").forEach(s => s.classList.remove("active"));
    document.getElementById(page).classList.add("active");
    if(page === "profile") loadProfile();
    if(page === "home") loadUser();
}

function register(e){
    e.preventDefault();
    localStorage.setItem("nom", document.getElementById("nom").value);
    localStorage.setItem("email", document.getElementById("email").value);
    localStorage.setItem("tel", document.getElementById("tel").value);
    alert("Inscription réussie ✅");
    show("home");
}

function loadUser(){
    let user = localStorage.getItem("nom");
    document.getElementById("welcome").innerText = user ? "Bienvenue " + user + " 👋" : "Bienvenue invité 👋";
}

function loadProfile(){
    document.getElementById("pname").innerText = "👤 Nom: " + (localStorage.getItem("nom") || "-");
    document.getElementById("pemail").innerText = "📧 Email: " + (localStorage.getItem("email") || "-");
    document.getElementById("ptel").innerText = "📞 Tel: " + (localStorage.getItem("tel") || "-");
}

let total = 0;

function add(p){
    total += p;
    document.getElementById("total").innerText = total;
}

function pay(){
    if(total === 0){ alert("Panier vide !"); return; }
    alert("Paiement de " + total + " Dhs effectué ✅");
}

function clearCart(){
    total = 0;
    document.getElementById("total").innerText = 0;
}

function book(e){
    e.preventDefault();
    let service = document.getElementById("service").value;
    let date = document.getElementById("date").value;
    let time = document.getElementById("time").value;
    alert("✅ Rendez-vous: " + service + "\n📅 " + date + " à " + time);
}

function logout(){
    localStorage.clear();
    alert("Déconnecté 👋");
    loadUser();
}

loadUser();

</script>

</body>
</html>

