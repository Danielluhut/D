<?php
// hanya tampilan
?>
<!DOCTYPE html>
<html>
<head>
    <title>DOROTHY</title>
    <style>
        body {
            text-align: center;
            font-family: 'Comic Sans MS', cursive;
            margin: 0;
            height: 100vh;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            animation: bgMove 8s infinite alternate;
        }

        /* Background gradasi bergerak */
        @keyframes bgMove {
            0% { background: linear-gradient(45deg, #ff9a9e, #fad0c4); }
            50% { background: linear-gradient(45deg, #a18cd1, #fbc2eb); }
            100% { background: linear-gradient(45deg, #f6d365, #fda085); }
        }

        h1 {
            font-size: 40px;
            color: white;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.3);
            animation: floatText 2s infinite ease-in-out;
        }

        @keyframes floatText {
            0%,100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .btn {
            padding: 15px 40px;
            font-size: 20px;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            margin: 20px;
            transition: 0.3s ease;
        }

        #btnMau {
            background-color: #00c853;
            color: white;
        }

        #btnTidak {
            background-color: #d50000;
            color: white;
        }

        .buttons {
            display: flex;
            gap: 20px;
        }
    </style>
</head>
<body>

<h1>NONTON GASIHHHH???</h1>

<div class="buttons">
    <button id="btnMau" class="btn">GASS</button>
    <button id="btnTidak" class="btn">GAK, CAPE</button>
</div>

<script>
    let scale = 1;
    let clickCount = 0;

    const btnMau = document.getElementById("btnMau");
    const btnTidak = document.getElementById("btnTidak");

    const texts = [
        "BENERAN?",
        "YAKIN?",
        "NONTON GASIH?",
        "GASS LAHH",
        "KATA GUA AYOO DAH",
        "NAH, HRS MAU"
    ];

    btnTidak.addEventListener("click", function() {
        scale += 0.3;
        btnMau.style.transform = "scale(" + scale + ")";

        // Ganti teks tombol MAU
        btnMau.innerText = texts[clickCount % texts.length];
        clickCount++;

        // Animasi goyang tombol MAU
        btnMau.animate([
            { transform: "rotate(-5deg) scale(" + scale + ")" },
            { transform: "rotate(5deg) scale(" + scale + ")" },
            { transform: "rotate(0deg) scale(" + scale + ")" }
        ], {
            duration: 300
        });
    });

    btnMau.addEventListener("click", function() {
        document.body.innerHTML = "<h1 style='color:white;font-size:50px;'>YEAAAY! JADI NONTON 🎉🎬</h1>";
    });
</script>

</body>
</html>