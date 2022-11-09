

    <div class="grid grid-cols-6 gap-6">
        <div class="col-span-6 sm:col-span-3">
            <label for="name" class="block text-sm font-medium text-gray-700">Nombres</label>
            <input type="text" name="name" id="name" autocomplete="given-name" value="{{ old('name') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>

        <div class="col-span-6 sm:col-span-3">
            <label for="lastname" class="block text-sm font-medium text-gray-700">Apellidos</label>
            <input type="text" name="lastname" id="lastname" autocomplete="family-name" value="{{ old('lastname') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>

        <div class="col-span-6 sm:col-span-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email </label>
            <input type="text" name="email" id="email-address" autocomplete="email" value="{{ old('email')  }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>

        <div class="col-span-6 sm:col-span-3">
            <label for="cc" class="block text-sm font-medium text-gray-700">Cedula</label>
            <input type="text" name="cc" id="cc" autocomplete="cedula" value="{{ old('cc') }}"  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>

        <div class="col-span-6">
            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
            <input type="text" name="phone" id="phone" autocomplete="phone" value="{{ old('phone') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>

    </div>


