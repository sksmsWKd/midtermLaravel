<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                    <br>
                    <br>
                    <br>

                    <form action="/company" method="get">

                        회사로 검색.
                        <div class="form-group">
                            <label for="company">company</label>
                            <input type="text" name="company" class="form-control" />
                        </div>
                        <button class="btn btn-warning" action="submit"> 회사명으로 검색 go버튼</button>
                    </form>

                    <form action="/type" method="get">
                        차종으로 검색.
                        <div class="form-group">
                            <label for="type">type</label>
                            <input type="text" name="type" class="form-control" />
                        </div>
                        <button class="btn btn-warning" action="submit"> 차종으로 검색 go버튼</button>
                    </form>
                    <form action="/appearance" method="get">
                        외형으로 검색.
                        <div class="form-group">
                            <label for="appearance">appearance</label>
                            <input type="text" name="appearance" class="form-control" />
                        </div>
                        <button class="btn btn-warning" action="submit"> 외형으로 검색 go버튼</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
