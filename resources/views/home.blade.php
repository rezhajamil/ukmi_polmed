@extends('layouts.app')
@section('body')
    <div class="bg-gradient-to-br to-teal-700 from-emerald-900">
        @include('layouts.navigation')
        @include('section.intro')
        @include('section.program')
        @include('section.join')
        @include('section.sosmed')
        @include('section.footer')
    </div>
@endsection
@section('script')
    <script async src="//www.instagram.com/embed.js"></script>
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $('#header').addClass(
                        'bg-teal-900 shadow-md').removeClass(
                        'bg-transparent');
                    // Add the class to change header background
                } else {
                    $('#header').removeClass(
                        'bg-teal-900 shadow-md'
                    ).addClass('bg-transparent'); // Remove the class to make navbar background transparent

                }
                // console.log($(this).scrollTop());
            });

            $("#form-join").submit(function(event) {
                // Prevent the default form submission behavior
                // event.preventDefault();

                // Get the form action URL
                var action = $(this).attr("action");

                // Get the form data as a query string
                let nama = $("#nama").val();
                let whatsapp = $("#whatsapp").val();
                let jenis_kelamin = $("#jenis_kelamin").val();
                let alamat = $("#alamat").val();
                let prodi = $("#prodi").val();
                let kelas = $("#kelas").val();
                let sapaan = jenis_kelamin == 'laki-laki' ? 'bang' : 'kak';
                let url = "https://wa.me/";

                let message =
                    `Assalamualaykum Warahmatullahi Wabarakatuh ${sapaan}.\n\nPerkenalkan nama saya ${nama}. Saya berminat untuk gabung UKMI POLMED ${sapaan}.\nBerikut data saya ${sapaan}\n\nNama : ${nama}\nNomor Whatsapp : ${whatsapp}\nAlamat : ${alamat}\nProdi : ${prodi}\nKelas : ${kelas}\n\nTerimakasih banyak ${sapaan}`;

                message = encodeURIComponent(message);

                if (jenis_kelamin == 'laki-laki') {
                    url += "6282289138698";
                } else if (jenis_kelamin == 'perempuan') {
                    url += '6281264119612';
                }

                // console.log(url + "?text=" + message);

                // Open a new tab/window with the action URL and query string
                window.open(url + "?text=" + message, "_blank");
            });
        });
    </script>
@endsection
