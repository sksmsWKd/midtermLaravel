<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container mt-5">


                        <form action="{{ route('update', ['id' => $car->id]) }}" method="post"
                            enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            @error('company')
                                <div>
                                    {{ $message }}
                                </div>

                            @enderror
                            <div class="form-group">
                                <label for="company">company</label>
                                <input type="text" name="company" class="form-control" value="{{ $car->company }}" />
                            </div>
                            @error('name')
                                <div>
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="form-group">
                                <label for="name">name</label>
                                <input type="text" name="name" class="form-control" value="{{ $car->name }}" />
                            </div>
                            @error('year')
                                <div>
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="form-group">
                                <label for="year">year</label>
                                <input type="text" name="year" class="form-control" value="{{ $car->year }}" />
                            </div>
                            @error('price')
                                <div>
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="form-group">
                                <label for="price">price</label>
                                <input type="text" name="price" class="form-control" value="{{ $car->price }}" />
                            </div>
                            @error('type')
                                <div>
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="form-group">
                                <label for="type">type</label>
                                <input type="text" name="type" class="form-control" value="{{ $car->type }}" />
                            </div>

                            @error('appearance')
                                <div>
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="form-group">
                                <label for="appearance">appearance</label>
                                <input type="text" name="appearance" class="form-control"
                                    value="{{ $car->appearance }}" />
                            </div>

                            @error('image')
                                <div>
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="form-group">
                                <label for="file">file</label>
                                <input type="file" name="image" value="{{ $car->image }}" />
                                {{ $car->image }}
                            </div>





                            <img class="card-img-top" src="/storage/images/{{ $car->image }}" alt="Card image cap">


                            <button type="submit" class="btn btn-secondary">
                                완료
                            </button>




                            <button type="button" onclick="location.href='index'" class="btn btn-dark">
                                취소
                            </button>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
