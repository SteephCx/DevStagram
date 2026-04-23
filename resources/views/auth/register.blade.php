@extends('layouts.app')

@section('titulo')
    Registrate en DevStagram
@endsection

@section('contenido')
        <div class="md:flex md:justify-center md:gap-10 md:items-center">
            <div class="md:w-6/12 p-5">
                <img src="{{ asset('img/registrar.jpg')}}" alt="imagen registro usuario">
            </div>

            <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
                <form>
                    <div class="mb-5">
                        <label for="name" class="mb-2 block uppercase text-gray-500 font-bold" for="">
                            Nombre
                        </label>
                        <input
                         id="name"
                         name="name"
                         placeholder="Tu nombre"
                         class="border p-3 w-full rounded-lg "
                        type="text">
                    </div>
                    <div class="mb-5">
                        <label for="username" class="mb-2 block uppercase text-gray-500 font-bold" for="">
                            Nombre de Usuario
                        </label>
                        <input
                         id="username"
                         name="username"
                         placeholder="Tu nombre de usuario"
                         class="border p-3 w-full rounded-lg "
                        type="text">
                    </div>
                    <div class="mb-5">
                        <label for="email" class="mb-2 block uppercase text-gray-500 font-bold" for="">
                           tu correo electrónico
                        </label>
                        <input
                         id="email"
                         name="email"
                         placeholder="Tu correo electronico"
                         class="border p-3 w-full rounded-lg "
                        type="email">
                    </div>
                    <div class="mb-5">
                        <label for="password" class="mb-2 block uppercase text-gray-500 font-bold" for="">
                           tu contraseña
                        </label>
                        <input
                         id="password"
                         name="password"
                         placeholder="Tu contraseña"
                         class="border p-3 w-full rounded-lg "
                        type="password">
                    </div>
                    <div class="mb-5">
                        <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold" for="">
                           repetir password
                        </label>
                        <input
                         id="password_confirmation"
                         name="password"
                         placeholder="Repite tu password"
                         class="border p-3 w-full rounded-lg "
                        type="password">
                    </div>
                    <input type="submit" value="Crear Cuenta"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer
                    uppercase font-bold w-full p-3 text-white rounded-lg">
                </form>

            </div>

        </div>
@endsection