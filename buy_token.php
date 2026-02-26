<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Tokens</title>

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

/* ===== BACKGROUND IMAGE ===== */
body{
    margin:0;
    padding:0;
    background: url('assets/images/back.png') no-repeat center center fixed;
    background-size: cover;
    position: relative;
    font-family: sans-serif;
}

/* Dark overlay */
body::before{
    content:"";
    position: fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background: rgba(0,0,0,0.6);
    z-index:-1;
}

/* Navbar */
.navbar{
    background: rgba(0,0,0,0.85);
}
.navbar-brand{
    color:#fff !important;
    font-weight:600;
}

/* Heading */
h2{
    color:#fff;
}

/* TOKEN CARD */
.token-card{
    width:180px;
    height:180px;
    perspective:1000px;
    cursor:pointer;
}

.token-inner{
    position:relative;
    width:100%;
    height:100%;
    transition:transform 0.7s;
    transform-style:preserve-3d;
}

.token-card.flipped .token-inner{
    transform:rotateY(180deg);
}

.token-front,
.token-back{
    position:absolute;
    width:100%;
    height:100%;
    border-radius:20px;
    display:flex;
    align-items:center;
    justify-content:center;
    flex-direction:column;
    backface-visibility:hidden;
    font-weight:600;
    box-shadow:0 10px 25px rgba(0,0,0,0.3);
}

/* Green Front */
.token-front{
    background:#28a745;
    color:#fff;
    font-size:20px;
}

/* Red Back */
.token-back{
    background:#dc3545;
    color:#fff;
    transform:rotateY(180deg);
    font-size:18px;
}

/* Button Style */
.custom-btn{
    display:inline-block;
    padding:12px 40px;
    background:#fff;
    color:#000;
    border-radius:50px;
    font-weight:600;
    text-decoration:none;
    border:2px solid #000;
    transition:0.3s;
}

.custom-btn:hover{
    background:#28a745;
    color:#fff;
    border-color:#28a745;
}

</style>
</head>

<body>

<!-- NAVIGATION -->
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="#">Token Dashboard</a>
  </div>
</nav>

<div class="container py-5">

    <h2 class="text-center mb-5">Your Purchased Tokens</h2>

    <div class="row g-4 justify-content-center">

        <?php for($i=1; $i<=20; $i++) { ?>

        <div class="col-6 col-md-4 col-lg-3 d-flex justify-content-center">
            <div class="token-card" onclick="flipToken(this)">
                <div class="token-inner">

                    <div class="token-front">
                        Token No: <?php echo $i; ?>
                    </div>

                    <div class="token-back">
                        Token No: <?php echo $i; ?>
                        <div class="mt-2 fw-bold">Used</div>
                    </div>

                </div>
            </div>
        </div>

        <?php } ?>

    </div>

    <!-- Back Button -->
    <div class="text-center mt-5">
        <a href="index.php" class="custom-btn">Back</a>
    </div>

</div>

<script>
function flipToken(element){
    if(!element.classList.contains("flipped")){
        element.classList.add("flipped");
    }
}
</script>

</body>
</html>