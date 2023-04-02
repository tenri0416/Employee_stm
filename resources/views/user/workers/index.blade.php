<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            作業者一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <section class="text-gray-600 body-font">
                        <div class="container px-1 py-4 mx-auto">
                            <div class="flex flex-col text-center w-full mb-1">
                                <h1 class="sm:text-4xl text-3xl font-medium title-font text-gray-900 mb-1">作業者一覧
                                </h1>

                            </div>
                            <x-flash-message status="session('status')" />

                            <div class="text-right mb-12">
                                <a class="text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg w-50"
                                    href="{{ route('user.worker.create') }}">新規作成</a>
                            </div>
                            <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                                <table class="table-auto w-full text-left whitespace-no-wrap">
                                    <thead>
                                        <tr>
                                            <th
                                                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">
                                                ID</th>
                                            <th
                                                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                                社員名</th>
                                            <th
                                                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                                所属</th>
                                            <th
                                                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                                電話番号</th>
                                            <th
                                                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                                メールアドレス</th>
                                            <th
                                                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                                作成日時</th>
                                            <th
                                                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                                更新日時</th>
                                            <th
                                                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($workers as $worker)
                                            <tr>
                                                <td class="px-1 py-1"><a class="border-b-2 border-indigo-600"
                                                        href="{{ route('user.worker.show', $worker->id) }}">{{ $worker->id }}</a>
                                                </td>
                                                <td class="px-1 py-1">{{ $worker->affiliation }}</td>
                                                <td class="px-1 py-1">{{ $worker->name }}</td>
                                                <td class="px-1 py-1 text-lg text-gray-900">{{ $worker->phone_num }}
                                                </td>
                                                <td class="px-1 py-1 text-lg text-gray-900">{{ $worker->email }}</td>
                                                <td class="px-1 py-1 text-lg text-gray-900">
                                                    {{ $worker->created_at->diffForHumans() }}
                                                </td>
                                                <td class="px-1 py-1 text-lg text-gray-900">
                                                    {{ $worker->updated_at->diffForHumans() }}
                                                </td>

                                                <form id="delete_{{ $worker->id }}" method="post"
                                                    action="{{ route('user.worker.destroy', ['worker' => $worker->id]) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <td class="px-4 py-3">
                                                        <a data-id="{{ $worker->id }}" onclick="deletePost(this)"
                                                            class=" text-white bg-red-300 border-0 py-2 px-4 focus:outline-none hover:bg-red-500 rounded ">削除</a>
                                                    </td>
                                                </form>

                                            </tr>
                                        @endforeach
                            </div>
                    </section>
                    {{ $workers->links() }}
                </div>
            </div>
        </div>
    </div>
    <script>
        function deletePost(e) {
            'use strict';
            if (confirm('本当に削除してもいいですか?')) {
                document.getElementById('delete_' + e.dataset.id).submit();
            }
        }
    </script>
</x-app-layout>
