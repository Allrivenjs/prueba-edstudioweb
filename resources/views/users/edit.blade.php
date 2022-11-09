<x-app-layout>
    <x-slot name="header" >
        <div class="flex flex-row justify-start items-center space-x-8 ">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Actulizar usuario') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="overflow-x-auto relative p-6">
                    <div class="mt-10 sm:mt-0">
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                            <div class="md:col-span-1">
                                <div class="px-4 sm:px-0">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">Informacion personal</h3>
                                    <p class="mt-1 text-sm text-gray-600">Aqui podras crear un usuario</p>
                                </div>
                            </div>
                            <div class="mt-5 md:col-span-2 md:mt-0">
                                @include('users.helpers.messages')
                                <form action="{{route('users.update', $user->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="overflow-hidden sm:rounded-md">
                                        <div class="bg-white px-4 py-5 sm:p-6">
                                            <div class="grid grid-cols-6 gap-6">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="name" class="block text-sm font-medium text-gray-700">Nombres</label>
                                                    <input  type="text" name="name" id="name" autocomplete="given-name" value="{{ $user->name }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="lastname" class="block text-sm font-medium text-gray-700">Apellidos</label>
                                                    <input  type="text" name="lastname" id="lastname" autocomplete="family-name" value="{{ $user->lastname }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                </div>

                                                <div class="col-span-6 sm:col-span-4">
                                                    <label for="email" class="block text-sm font-medium text-gray-700">Email </label>
                                                    <input  type="text" name="email" id="email-address" autocomplete="email" value="{{ $user->email }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="cc" class="block text-sm font-medium text-gray-700">Cedula</label>
                                                    <input  type="text" name="cc" id="cc" autocomplete="cedula" value="{{ $user->cc }}"  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                </div>

                                                <div class="col-span-6">
                                                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                                                    <input  type="text" name="phone" id="phone" autocomplete="phone" value="{{ $user->phone }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
