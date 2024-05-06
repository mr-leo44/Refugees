<x-guest-layout>
    <div class="container w-full px-5 py-8 mx-auto">
        <div class="flex items-center min-h-screen">
            <div class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-xl">
                <div class="flex flex-col md:flex-row">
                    <div class="h-32 md:h-auto md:w-1/2">
                        <img class="object-cover w-full h-full" src="{{ asset('imgs/get-asile.jpg') }}" alt="img" />
                    </div>
                    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                        <div class="w-full">
                            <h3 class="mb-4 text-md text-center font-bold text-slate-600">Please, fill this form</h3>

                            <form method="POST" action="{{ route('store.asile.demand') }}">
                                @csrf
                                <div class="sm:col-span-6">
                                    <label for="firstname"
                                        class="block text-sm font-medium text-gray-700">Firstname</label>
                                    <div class="mt-1">
                                        <input type="text" id="firstname" name="firstname"
                                            class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('firstname') @enderror" />
                                    </div>
                                    @error('firstname')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="sm:col-span-6 pt-5">
                                    <label for="lastname" class="block text-sm font-medium text-gray-700">Lastname</label>
                                    <div class="mt-1">
                                        <input type="text" id="lastname" name="lastname"
                                            class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('lastname') @enderror" />
                                    </div>
                                    @error('lastname')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="sm:col-span-6 pt-5">
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <div class="mt-1">
                                        <input id="email" type="email" name="email"
                                            class="@error('email') border-red-400 @enderror shadow-sm focus:ring-indigo-500 appearance-none bg-white border py-2 px-3 text-base leading-normal focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" />
                                    </div>
                                    @error('email')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="sm:col-span-6 pt-5">
                                    <label for="phone"
                                        class="block text-sm font-medium text-gray-700">Phone</label>
                                    <div class="mt-1">
                                        <input type="text" id="phone" name="phone"
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
                                                <option value="{{ $from->value }}">{{ $from->name }}</option>
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
                                                <option value="{{ $to->value }}">{{ $to->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('to')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="mt-6 py-4">
                                    <button type="submit"
                                        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</x-guest-layout>
