<x-app-layout>
    <x-slot name="header" >
        <div class="flex flex-row justify-start items-center space-x-8 ">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Usuarios') }}
            </h2>
            <a href="{{ route('users.create') }}" class="btn btn-primary float-right">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAABh0lEQVRoge2ZQU4CMRSGP40ZVx5BIBrjISQuQFmb6MaTuOUUCidw6SX0FkREjGvUhZshuCiGJ7Ez0NJW4vuSJi+h897/d6ZM8wYURVH+OjWgCwyBHJgEHvm0Vgeo+opvAe8RRNvGG3DiKr6WWLw0UXEx0BVJHoEGkLkkWpIMaAJ9Uf/GJdFQJGisSt0SNEX9gUsCuWFjrPw8maif2yZtFCSYLDgvJKUaNiMJCUZIA4fAM/AEHIQqEtLAObCLeRldhCoS0oDc+NuhiugeSI0aSM3aG9jyuHYfOCvIcTQXX1nm5cAd5sC4UuSR9jd6+B2T5eg5avjfj1ALuAR2LL/XmT1GD8C9Zd4HcOuhw0rp7SuhLa5vh9Kw9o+QGkiNGkhNSAOfljgavn+je5g3bG8aB9GgXYnUFBkYizhVY+ubsW1SkYFXEde95SzPsYhfXBJ0mG2gPqbNHau5e8rP5u61S6IqprWdur0+wrG9DmbVU5oYYbrUXlQwt3BAvE9Mg2lN55VXFEWJwxfWERorviCVwQAAAABJRU5ErkJggg==">
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="overflow-x-auto relative">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Cédula
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Nombre
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Apellido
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Email
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Teléfono
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Opciones
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $users as $user)

                                <tr class="bg-white border-b ">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                        {{ $user->cc }}
                                    </th>
                                    <td class="py-4 px-6">
                                        {{ $user->name }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $user->lastname }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $user->email }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $user->phone }}
                                    </td>
                                    <td class=" flex flex-col py-4 px-6">
                                        <a href="{{ route('users.show', $user->id)  }}" class="text-green-500 hover:text-green-700">Ver</a>
                                        <a href="{{ route('users.edit', $user->id) }}" class="text-blue-500 hover:text-blue-700">Editar</a>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-700">Eliminar</button>
                                        </form>
                                    </td>

                                </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>



            </div>
        </div>
    </div>
</x-app-layout>
