<h1>Listado de Usuarios!!!</h1>

<!-- ACA IBA LA TABLA CON EL LISTADO DE USUARIOS PERO LA ELIMINE SIN QUERER -->

@forelse ($users as $user)
    <li>{{ $user->name }}</li>
@empty
    <p>No users</p>
@endforelse