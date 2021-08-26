<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Data Warga</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/@coreui/coreui@2.1.16/dist/css/coreui.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" />
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('css/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('css/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('css/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('css/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('css/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('css/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('css/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('css/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('css/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('css/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('css/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('css/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('css/favicon-16x16.png') }}">
    <!-- <link rel="manifest" href="/manifest.json">
         <meta name="msapplication-TileColor" content="#ffffff">
         <meta name="msapplication-TileImage" content="/ms-icon-144x144.png"> -->
    <meta name="theme-color" content="#ffffff">
    <style>
        html {
            visibility: hidden;
        }

        @media print {
            html {
                visibility: visible;
                background-color: white;
            }

            html div {
                color: 'black';
            }

            @page {
                margin: 0;
            }
        }

        @font-face {
            font-family: "Arial";
            src: url('/fonts/arial.ttf');
        }
    </style>
</head>

<body>
    <div style="background-color: white">
        <div>
            <img src="{{ asset('public/header.png') }}">
        </div>
        <br>
        <br>
        <div style="font-size: 16pt; font-family: 'Arial'; text-align: justify; margin-right: 3.7cm; margin-left: 3.7cm;">
            <div class="row">
                <div class="col-md-7">
                    <div>
                        Kepada Yth,
                    </div>
                    <br>
                    <div>
                        WALI MURID
                    </div>
                    <div>
                        <strong>{{ $user->name }}</strong>
                    </div>
                    <div>
                        <strong>{{ $school->name }}</strong>
                    </div>
                </div>
                <div class="col-md-5">
                    <div style="padding: 8px; border: 1px solid;">
                        <div style="padding-right: 8px; padding-left: 8px;">
                            <strong style="display: flex">
                                <div style="white-space: pre;">Perihal :</div>
                                <div style="padding-left: 11px;">Surat Akun Login Wali Murid dan Murid</div>
                            </strong>
                        </div>
                        <div style="padding-right: 8px; padding-left: 8px; white-space: pre;"><strong>Sifat : Sangat Rahasia</strong></div>
                    </div>
                </div>
            </div>
            <div>
                Dengan hormat,
            </div>
            <br>
            <div>
                Dalam rangka meningkatkan kualitas pendidikan dan layanan di lingkungan sekolah mengeluarkan aplikasi pendidikan digital GREAT SCHOOL (Great Application For School) yaitu sebuah aplikasi yang memudahkan proses belajar mengajar di sekolah yang informasinya dapat diakses oleh guru, orang tua dan murid. Dengan demikian, semua pihak mendapat manfaat dan dapat saling memantau proses pendidikan anaknya di sekolah.
            </div>
            <br>
            <div>
                Melalui surat ini kami memberitahukan bahwa bapak/ibu wali murid RESMI TERCATAT SEBAGAI USER di dalam layanan GREAT SCHOOL dengan akun sebagai berikut:
            </div>
            <br>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4" class="table-detail" align="center" style="border: 1px solid; border-right: 0; background-color: #BFBFBF !important;">KODE SEKOLAH</div>
                <div class="col-md-4" align="center" style="border: 1px solid;">{{ $school->code }}</div>
                <div class="col-md-2"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4" class="table-detail" align="center" style="border: 1px solid; border-right: 0; background-color: #BFBFBF !important;">USER ID WALI</div>
                <div class="col-md-4" align="center" style="border: 1px solid;">{{ $wali->username }}</div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4" class="table-detail" align="center" style="border: 1px solid; border-right: 0; background-color: #BFBFBF !important;">PASSWORD WALI</div>
                <div class="col-md-4" align="center" style="border: 1px solid; border-top: 0;">{{ $wali->password_plain }}</div>
                <div class="col-md-2"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4" class="table-detail" align="center" style="border: 1px solid; border-right: 0; background-color: #BFBFBF !important;">USER ID MURID</div>
                <div class="col-md-4" align="center" style="border: 1px solid;">{{ $user->username }}</div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4" class="table-detail" align="center" style="border: 1px solid; border-right: 0; border-top: 0; background-color: #BFBFBF !important;">PASSWORD MURID</div>
                <div class="col-md-4" align="center" style="border: 1px solid; border-top: 0;">{{ $user->password_plain }}</div>
                <div class="col-md-2"></div>
            </div>
            <br>
            <div>
                Simpan dan rahasiakanlah user ID dan password ini untuk keamanan dan kenyamanan dalam menggunakan aplikasi GREAT SCHOOL. Informasikan hanya <strong>User ID Murid</strong> dan <strong>Password Murid</strong> kepada putra/putri anda.
            </div>
            <br>
            <div>
                Untuk menginstal aplikasi silahkan ketik GREAT SCHOOL pada search bar Play Store (Android) atau App Store (IOS). Jika ada kendala mengenai aplikasi GREAT SCHOOL dapat menghubungi Customer Service dengan nomor telp <strong>0878-8001-5373</strong>, <strong>0812-9737-1531</strong> atau email <strong>responcepat@asagreatschool.id</strong>.
            </div>
            <br>
            <div>
                Terima kasih atas perhatian bapak/ibu dan selamat menikmati kemudahan dalam mengakses informasi pendidikan dari putra/putri anda sekolah.
            </div>
        </div>
        <div style="position: absolute; bottom: 0">
            <img src="{{ asset('public/footer.png') }}">
        </div>
        <br>
    </div>
    <script>
        document.title = `Data Warga`;
        window.print();
    </script>
</body>

</html>