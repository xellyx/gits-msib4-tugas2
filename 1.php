<!DOCTYPE html>
<html>

<head>
    <title>Tugas GITS.ID</title>

    <style>
        body {
            background-color: lightblue;
        }

        .animasi {
            position: relative;
            margin-left: 50px;
        }
    </style>

</head>

<body>
    <h1>Biodata diri:</h1>
    <hr color="black" size="7">
    <table border="5">
        <tr>
            <td>Nama</td>
            <td>Yusuf Rizky Yuhansyah</td>
            <td rowspan=5 class="image"><img height="250" width="160" src="32._YUSUF_RIZKY_YUHANSYAH (3).JPG"></td>
        </tr>
        <tr>
            <td>Tempat, Tanggal Lahir</td>
            <td>Batam, 08 Februari 2002</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>Poncowati, Lampung Tengah, Lampung</td>
        </tr>
        <tr>
            <td>Nomor HP</td>
            <td>085156405969</td>
        </tr>
    </table>

    <h1>Pendidikan:</h1>
    <hr color="black" size="7">
    <table border="5">
        <tr>
            <td>SDN 2 PONCOWATI</td>
        </tr>
        <tr>
            <td>SMPN 1 TERBANGGI BESAR</td>
        </tr>
        <tr>
            <td>SMAN 1 TERBANGGI BESAR</td>
        </tr>
    </table>


    <img class="animasi" src="https://www.gambaranimasi.org/data/media/230/animasi-bergerak-burung-0250.gif" alt="animasi-bergerak-burung">


    <script>
        // Animasi gambar
        let burung = document.querySelector(".animasi");
        let angle = Math.PI / 2;

        function animate(time, lastTime) {
            if (lastTime != null) {
                angle += (time - lastTime) * 0.001;
            }
            burung.style.top = (Math.sin(angle) * 300) + "px";
            burung.style.left = (Math.cos(angle) * 20) + "px";
            requestAnimationFrame(newTime => animate(newTime, time));
        }
        requestAnimationFrame(animate);
    </script>

</body>

</html>