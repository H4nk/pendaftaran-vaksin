<!DOCTYPE html>
<html>

<head>
    <title>Kartu Peserta Seleksi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .kartu-peserta-seleksi {
            padding: 16px;
            width: 415px;
            border: 1px solid black;
        }

        .kartu-peserta-seleksi p {
            font-size: 8pt;
        }

        .kartu-peserta-seleksi td,
        .kartu-peserta-seleksi .footer-wrapper p {
            font-size: 9.5pt;
        }

        .kartu-peserta-seleksi .head-wrapper {
            display: flex;
            padding: 8pt;
            flex-direction: row;
            margin: -16px -16px 0;
            align-items: center;
            justify-content: center;
            border-bottom: 2px solid black;
        }

        .kartu-peserta-seleksi .head-wrapper .sec {
            width: 60px;
            text-align: center;
        }

        .kartu-peserta-seleksi .head-wrapper .sec:nth-child(2) {
            flex: 1;
        }

        .kartu-peserta-seleksi .head-wrapper img {
            height: 50px;
        }

        .kartu-peserta-seleksi .head-wrapper .sec:last-child {
            font-weight: 900;
        }

        .kartu-peserta-seleksi .head-wrapper .sec:nth-child(-1n+3) p {
            margin-bottom: 0;
        }

        .kartu-peserta-seleksi .head-wrapper .sec:nth-child(2) p:nth-child(-n+3) {
            font-weight: bold
        }

        .kartu-peserta-seleksi .content-wrapper {
            padding: 16px 0;
        }


        .kartu-peserta-seleksi .content-wrapper tr:nth-last-child(-n+2) td:last-child {
            color: blue;
        }

        .kartu-peserta-seleksi .content-wrapper tr td:nth-child(2) {
            width: 15px;
            text-align: center;
        }

        .kartu-peserta-seleksi .footer-wrapper {
            text-align: right;
        }

        .kartu-peserta-seleksi .footer-wrapper p {
            margin-bottom: 0
        }
    </style>
</head>

<body onload="window.print()">
    <div class="kartu-peserta-seleksi-wrapper">
        <div class="kartu-peserta-seleksi">
            <div class="head-wrapper">
                <div class="sec"><img class="img-thumbnail" src="<?= base_url('logo.png');?>" alt="MA KHAS KEMPEK"></div>
                <div class="sec">
                    <p>KARTU PESERTA</p>
                    <p>VAKSINASI COVID 19</p>
                    <p>PUSKESMAS BASO</p>
                    <p>TAHUN 2023</p>
                </div>
                <div class="sec">
                    <p>PESERTA VAKSIN</p>
                </div>
            </div>
            <div class="content-wrapper">
                <table>
                    <tbody>
                        <tr>
                            <td>Kode Pendaftaran</td>
                            <td>:</td>
                            <td><?= $api;?></td>
                        </tr>
                        <tr>
                            <td>Vaksin</td>
                            <td>:</td>
                            <td><strong><?= $vaksin;?></strong></td>
                        </tr>
                        <tr>
                            <td>Vaksin Ke</td>
                            <td>:</td>
                            <td><strong><?= $ke;?></strong></td>
                        </tr>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td><strong><?= $nama;?></strong></td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>:</td>
                            <td><?= $nik;?></td>
                        </tr>   
						<tr>
                            <td>Tanggal Lahir</td>
                            <td>:</td>
                            <td><?= $tgl_lahir;?></td>
                        </tr>                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?= $email;?></td>
                        </tr>                        <tr>
                            <td>Waktu Vaksin</td>
                            <td>:</td>
                            <td><?= $tgl_vaksin;?></td>
                        </tr> 

                    </tbody>
                </table>
            </div> 
            <div class="footer-wrapper">
                <p>Baso, <?= tgl_indo(date('Y-m-d'));?></p>
                <p>Kepala Puskesmas</p>
                <br><br>
                <p><strong>dr. FITRI YARTI</strong></p>
                <p><strong>NIP. 19691112200212 2 002</strong></p>
            </div>
        </div>
    </div>
</body>

</html>