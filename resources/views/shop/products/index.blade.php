<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 dark:text-slate-200 text-left">Name</th>
                                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 dark:text-slate-200 text-left">Price</th>
                                <th ></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-slate-800">
                        @foreach($products as $product)
                        <tr>
                            <td class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">{{$product->name}}</td>
                            <td class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">{{$product->price}}</td>
                            <td><a class="px-1
                              py-1
                              bg-blue-600
                              text-white
                              font-medium
                              text-xs
                              leading-tight
                              uppercase
                              rounded" 
                              href="{{route('products.edit', [$product->id])}}">Edit</a>
                          </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
