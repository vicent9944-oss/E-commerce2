<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>YHWH Online market</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' fill='black'/><text x='50' y='60' font-size='50' text-anchor='middle' fill='gold' font-family='Arial'>Y</text></svg>">
<style>
:root{--primary:#4CAF50;--secondary:#2196F3;--bg:#f4f6fb}
body{font-family:'Poppins',sans-serif;margin:0;background:var(--bg)}
header{display:flex;justify-content:space-between;align-items:center;padding:15px 30px;background:white;box-shadow:0 2px 10px rgba(0,0,0,.1)}
.search{padding:8px;border-radius:20px;border:1px solid #ccc}
header button {padding:8px 15px;border:none;border-radius:20px;cursor:pointer;background:#ddd;text-underline-position: none;display: block}
header button a{
    display: inline-block;
    color: black;
    text-underline-position: none;
    text-decoration: none;
}
header button:hover{background:var(--primary);color:white}


.nav{display:flex;justify-content:center;gap:10px;padding:15px}
.nav button{padding:8px 15px;border:none;border-radius:20px;cursor:pointer;background:#ddd}
.nav button:hover{background:var(--primary);color:white}

.products{display:flex;flex-wrap:wrap;gap:20px;justify-content:center;padding:20px}
.card{background:white;width:220px;border-radius:15px;padding:10px;box-shadow:0 5px 15px rgba(0,0,0,.1)}
.card img{width:100%;height:150px;object-fit:cover;border-radius:10px}
.card button{width:100%;padding:8px;border:none;border-radius:10px;background:var(--secondary);color:white;cursor:pointer}

.cart-toggle{position:fixed;bottom:20px;right:20px;background:var(--primary);color:white;border:none;padding:15px;border-radius:50%;cursor:pointer}

.cart{position:fixed;right:-350px;top:0;width:320px;height:100%;background:white;box-shadow:-5px 0 15px rgba(0,0,0,.1);padding:15px;transition:.4s;overflow:auto}
.cart.open{right:0}

.cart-header{display:flex;justify-content:space-between;align-items:center}
.close-btn{cursor:pointer;font-size:18px}

.cart-item{display:flex;gap:10px;align-items:center;margin-bottom:10px}
.cart-item img{width:45px;height:45px;border-radius:5px}

.qty button{padding:2px 6px;border:none}
.remove{background:red;color:white;border:none;padding:3px 8px;border-radius:5px}
.total{font-weight:bold;margin-top:10px}

.checkout-btn{width:100%;padding:10px;background:var(--primary);color:white;border:none;border-radius:10px;margin-top:10px;cursor:pointer}

/* MODAL */
.modal{display:none;position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,.5);justify-content:center;align-items:center}
.modal-content{background:white;padding:20px;border-radius:10px;width:300px}
.modal-content input,select{width:100%;padding:8px;margin:5px 0}


</style>
</head>
<body>
<?php include('includes/menu.php');?> 












<?php include('includes/footer.php');?>


</body>
</html>
