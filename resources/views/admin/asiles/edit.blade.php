<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-white rounded">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.asiles.index') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">
                    All Requests
                </a>
            </div>
            <div class="m-2 p-2">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{ route('admin.asiles.update', $asile->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="sm:col-span-6">
                            <label for="firstname" class="block text-sm font-medium text-gray-700">Firstname</label>
                            <div class="mt-1">
                                <input type="text" id="firstname" name="firstname"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('firstname')border-red-400 @enderror"
                                    value="{{ $asile->firstname }}" />
                            </div>
                            @error('firstname')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="lastname" class="block text-sm font-medium text-gray-700">Lastname</label>
                            <div class="mt-1">
                                <input type="text" id="lastname" name="lastname"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('lastname')border-red-400 @enderror"
                                    value="{{ $asile->lastname }}" />
                            </div>
                            @error('lastname')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <div class="mt-1">
                                <input id="email" type="email" name="email" value="{{ $asile->email }}"
                                    class="@error('email') border-red-400 @enderror shadow-sm focus:ring-indigo-500 appearance-none bg-white border py-2 px-3 text-base leading-normal focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" />
                            </div>
                            @error('email')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                            <div class="mt-1">
                                <input type="text" id="phone"
                                    value="{{ $asile->phone }}"name="phone"
                                    class="@error('phone') border-red-400 @enderror block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('phone')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="from" class="block text-sm font-medium text-gray-700">Origin</label>
                            <div class="mt-1">
                                <select class="form-multiselect rounded-md block w-full mt-1" name="from"
                                    id="from">
                                    @foreach (App\Enums\CountryFrom::cases() as $from)
                                        <option value="{{ $from->value }}" @selected($asile->from->value == $from->value)>
                                            {{ $from->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('from')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="to" class="block text-sm font-medium text-gray-700">Host Country</label>
                            <div class="mt-1">
                                <select class="form-multiselect rounded-md block w-full mt-1" name="to"
                                    id="to">
                                    @foreach (App\Enums\CountryTo::cases() as $to)
                                        <option value="{{ $to->value }}" @selected($asile->to->value == $to->value)>
                                            {{ $to->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('to')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-6 py-4">
                            <button type="submit"
                                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Update</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-admin-layout>
