<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            作業者詳細
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-flash-message status="session('status')" />

                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-24 mx-auto flex flex-col">
                            <div class="lg:w-4/6 mx-auto">

                                <div class="flex flex-col sm:flex-row mt-10">
                                    <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                                        <div
                                            class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" class="w-10 h-10"
                                                viewBox="0 0 24 24">
                                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                        </div>
                                        <div class="flex flex-col items-center text-center justify-center">
                                            <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">社員写真</h2>
                                            <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>

                                        </div>
                                    </div>
                                    <div
                                        class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">

                                        <div class="text-2xl">ID：{{ $worker->id }}</div>
                                        <div class="text-2xl">名前：{{ $worker->name }}</div>
                                        <div class="text-2xl">所属：{{ $worker->affiliation }}</div>
                                        <div class="text-2xl">電話番号：{{ $worker->phone_num }}</div>
                                        <div class="text-2xl">メール：{{ $worker->email }}</div>
                                        @if ($worker->situation == '1')
                                            <div class="text-2xl">状態：現職中 </div>
                                        @elseif($worker->situation == '2')
                                            <div class="text-2xl">状態：停職中</div>
                                        @endif


                                        <div class="text-2xl">作成日：{{ $worker->created_at }}</div>
                                        <div class="text-2xl">更新日：{{ $worker->updated_at }}</div>


                                        <div class="mt-8">
                                            <button
                                                onclick="location.href='{{ route('user.worker.edit', $worker->id) }}'"
                                                class=" text-white bg-blue-300 border-0 py-2 px-4 focus:outline-none hover:bg-blue-500 rounded ">編集</button>
                                            <button
                                                type="button"onclick="location.href='{{ route('user.worker.index') }}' "
                                                class=" text-white bg-gray-500 border-0 py-2 px-4 focus:outline-none hover:bg-gray-400 rounded text-lg w-50">戻る</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
