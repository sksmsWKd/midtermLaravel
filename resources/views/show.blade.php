<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <br>
                    <div>
                        @if (Auth::user())
                            <button class="btn btn-warning pull-left "
                                onclick="location.href='{{ route('edit', ['id' => $car->id]) }}'">수정</button>
                            <form action="{{ route('delete', ['id' => $car->id]) }}" method="post">
                                @csrf
                                @method("delete")
                                <button class="btn btn-warning" action="submit">삭제</button>
                            </form>

                        @endif
                    </div>
                    @if (!Auth::user())
                        <button onclick="location.href='{{ route('login') }}'"> 로그인하고 수정하자</button>
                    @endif




                    <div class="container">

                        <div class="form-group ">
                            <label>등록 차량 번호</label>
                            <input type="text" readonly class="form-control" value="{{ $car->id }}">
                            {{-- ->diffforHumans() --}}
                        </div>
                        <div class="form-group ">
                            <label>제조회사</label>
                            <input type="text" readonly class="form-control" value="{{ $car->company }}">
                            {{-- ->diffforHumans() --}}
                        </div>
                        <div class="form-group ">
                            <label>변경일</label>
                            <input type="text" readonly class="form-control" value="{{ $car->updated_at }}">
                        </div>
                        <div class="form-group ">
                            <label>등록일</label>
                            <input type="text" readonly class="form-control" value="{{ $car->created_at }}">
                        </div>
                        <div class="form-group ">
                            <label>자동차명</label>
                            <input type="text" readonly class="form-control" value="{{ $car->name }}">
                        </div>
                        <div class="form-group ">
                            <label>제조년도</label>
                            <input type="text" readonly class="form-control" value="{{ $car->year }}">
                        </div>
                        <div class="form-group ">
                            <label>가격</label>
                            <input type="text" readonly class="form-control" value="{{ $car->price }}">
                        </div>
                        <div class="form-group ">
                            <label>차종</label>
                            <input type="text" readonly class="form-control" value="{{ $car->type }}">
                        </div>
                        <div class="form-group ">
                            <label>외형</label>
                            <input type="text" readonly class="form-control" value="{{ $car->appearance }}">
                        </div>





                        <div class="from-group ">
                            <label for="imageFile">이미지</label>
                            <div class="from-group ">
                                <img class="card-img-top" src="{{ '/storage/images/' . $car->image }}"
                                    alt="Card image cap">
                            </div>
                        </div>

                        {{-- input name 에 넣는것 - >컨트롤러에 리퀘스트 --}}
                        <br><br>

                        <div>
                        </div>
                    </div>
                </div>
            </div>
</x-app-layout>
