<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products')}}: {{$product->name}}
        </h2>
    </x-slot>

    @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="block p-6 rounded-lg shadow-lg bg-white">
                      <form action="{{route('products.update', [$product->id])}}" method="POST">
                        <input type="hidden" name="_method" value="PUT" />
                        {{csrf_field()}}
                        <div class="form-group mb-6">
                          <label for="name" class="form-label inline-block mb-2 text-gray-700">
                          Name</label>
                          <input type="text" class="form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
                            id="name"
                            name="name"
                            value="{{$product->name}}"
                            >
                        
                        </div>
                        <div class="form-group mb-6">
                          <label for="exampleInputPassword1" class="form-label inline-block mb-2 text-gray-700">Price</label>
                          <input type="number" step="0.01" class="form-control block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputPassword1"
                            name="price"
                            value="{{$product->price}}">
                        </div>
                       
                        <button type="submit" class="
                          px-6
                          py-2.5
                          bg-blue-600
                          text-white
                          font-medium
                          text-xs
                          leading-tight
                          uppercase
                          rounded
                          shadow-md
                          hover:bg-blue-700 hover:shadow-lg
                          focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                          active:bg-blue-800 active:shadow-lg
                          transition
                          duration-150
                          ">Submit</button>
                      </form>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>