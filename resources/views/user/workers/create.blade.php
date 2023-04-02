<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            作業者新規作成
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    <x-input-error :messages="$errors->get('affiliation')" class="mt-2" />
                    <x-input-error :messages="$errors->get('phone_num')" class="mt-2" />


                    <form method="post" action="{{ route('user.worker.store') }}">
                        @csrf
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="name" id="name"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                value="{{ old('name') }}" placeholder=" " required />
                            <label for="name"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">名前
                            </label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="affiliation" id="affiliation"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                value="{{ old('affiliation') }}" placeholder=" " required />
                            <label for="affiliation"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">所属
                            </label>
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <input type="number" name="phone_num"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                value="{{ old('phone_num') }}" placeholder=" " required />
                            <label for="floating_password"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">電話番号</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="email" name="email" id="floating_repeat_password"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                value="{{ old('email') }}" placeholder=" " required />
                            <label for="floating_repeat_password"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">email</label>
                        </div>

                        <button type="button"onclick="location.href='{{ route('user.worker.index') }}' "
                            class=" text-white bg-gray-500 border-0 py-2 px-8 focus:outline-none hover:bg-gray-400 rounded text-lg w-50">戻る</button>
                        <button type="submit"
                            class=" text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg w-50">登録する</button>
                    </form>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
