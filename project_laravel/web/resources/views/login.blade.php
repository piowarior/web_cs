<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN LOGIN</title>
    <link rel="stylesheet" href="{{ asset('css/ui.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Baskervville+SC&family=New+Amsterdam&family=Oswald:wght@200..700&family=Poppins&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body>

    <div class="hero">
        <div class="logop"><img src="{{ asset('images/mjd store logo.webp') }}" alt=""></div>
        <div class="registrasi"><a href="gf">registrasi</a></div>
        <div class="conten">
            <div class="isi">

                <div class="logo"><img src= "{{ asset('images/enter.png') }}" alt=""></div>

                <h2>Sign in with email</h2>
                <div class="teks">Sign in to ignite your creativity and bring more joy to everything you do</div>
                <input type="email" placeholder="name">
                <input type="password" placeholder="password">
            </div>
            <a href="Forget Password?">Forget Password?</a>
            <div class="btn" type="submit"  name="submit"><button>Create Account</button></div>
                
            
        </div>
    </div>
    
</body>
</html>