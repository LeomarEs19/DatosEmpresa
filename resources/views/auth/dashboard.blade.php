@extends('layauts.app')

@section('titulo')

    Datos Empleado

@endsection

@section('contenido')

        <div class="md:flex md:justify-center md:gap-10 md:ítems-center">

            <div class="md:w-6/12 p-5 border-2 border-dashed">
                <img src="{{ asset('img/usuario.2.png') }}" alt="">
            </div>

            <div class="md:w-4/12 h-4/5 bg-white p-6 rounded-lg shadow-xl">

                <form action="" method="POST">
                    @csrf
                    <div class="mb-5">
                        <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                        <p type="text" name="name" id="name" placeholder="Nombre" class="border p-3 w-full rounded-lg "><span>{{auth()->user()->name}}</span></p>

                    </div>

                    <div class="mb-5">
                        <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Apellido</label>
                        <p type="text" name="username" id="username" placeholder="Nombre" class="border p-3 w-full rounded-lg "><span>{{auth()->user()->username}}</span></p>

                    </div> @csrf

                    <div class="mb-5">
                        <label for="card" class="mb-2 block uppercase text-gray-500 font-bold">Cedula</label>
                        <p type="text" name="card" id="card" placeholder="Nombre" class="border p-3 w-full rounded-lg "><span>{{auth()->user()->card}}</span></p>

                    </div>

                    <div class="mb-5">
                        <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Correo</label>
                        <p type="text" name="email" id="email" placeholder="Nombre" class="border p-3 w-full rounded-lg "><span>{{auth()->user()->email}}</span></p>

                    </div>

                    <div class="mb-5">
                        <label for="address" class="mb-2 block uppercase text-gray-500 font-bold">Direccion</label>
                        <p type="text" name="address" id="address" placeholder="Nombre" class="border p-3 w-full rounded-lg "><span>{{auth()->user()->address}}</span></p>

                    </div>

                    <div class="mb-5">
                        <label for="phone" class="mb-2 block uppercase text-gray-500 font-bold">Telefono</label>
                        <p type="text" name="phone" id="phone" placeholder="Nombre" class="border p-3 w-full rounded-lg "><span>{{auth()->user()->phone}}</span></p>

                    </div>

                    {{-- <div class="mb-5">
                        <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Contraseña</label>
                        <input type="password" name="password" id="password" placeholder="{{auth()->user()->password}}" class="border p-3 w-full rounded-lg">

                    </div> --}}

                    <input type="submit" value="Editar" class=" cuenta bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white">
                </form>
            </div>
        </div>

@endsection
