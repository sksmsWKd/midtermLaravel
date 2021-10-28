<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Index') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">




                    @foreach ($cars as $car)
                        <div>
                            글 번호 : {{ $car->id }} 누르세요 ->>
                            <a href="{{ route('show', ['id' => $car->id]) }}">
                                제조회사 : {{ $car->company }} , 자동차명 : {{ $car->name }} , 자동차명 : {{ $car->year }}
                            </a>
                        </div>
                        <br>

                    @endforeach

                </div>
            </div>
        </div>
    </div>

    {{ $cars->links() }}
</x-app-layout>
