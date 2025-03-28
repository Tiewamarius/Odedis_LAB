<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>REGISTER</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">

</head>

<body>
    <!-- partial:index.partial.html -->
    <!doctype html>

    <html lang="en">

    <head>

        <meta charset="UTF-8">

        <title>REGISTER</title>

        <link rel="stylesheet" href="./style.css">

    </head>

    <body> <!-- partial:index.partial.html -->

        <section>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>

            <div class="signin">
                <div class="content">
                    <h2>Creer compte</h2>
                        <div class="form">
                            <form  method="POST" action="{{  route('register')  }}" class="form">
                             @csrf
                            <div class="inputBox">
                                <input type="text" required name="name" :value="old('username')" required autofocus autocomplete="username" /> <i>Nom d'utilisateur</i>
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div class="inputBox">
                                <input type="email" required name="email" :value="old('email')" required autofocus autocomplete="email" /> <i>Adresse Email</i>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" /></div>
                            <div class="inputBox">
                                <input type="password"name="password" required> <i>Password</i>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" /></div>
                            <div class="inputBox">
                                <input type="password" name="password_confirmation" required autocomplete="new-password"> <i>Confirme Password</i>
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" /></div>
                            <div class="links">
                                <a href="#">Déja un compte</a>
                                <a href="{{ route('login') }}">se connecter</a>
                            </div>
                            <div class="inputBox">
                                <input type="submit" value="VALIDER">
                            </div>
                        </form>
                        </div>
                    </div>
            </div>
            
        </section> <!-- partial -->
   

    </body>

    </html>
    <!-- partial -->

</body>

</html>
