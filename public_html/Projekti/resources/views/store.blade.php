<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Store Page') }}
        </h2>
    </x-slot>

    <div class="py-12 taustakuva">
        <div class="ShopContainer">
            <div class="ShopBox">
                <div class="ShopContent">
                    <div class="ShopMessage">
                        <div class="ProductGrid">
                            @foreach ($items as $item)
                            
                                <!-- Card -->
                                <div class="ShopCard">
                                    <img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}"
                                        class="ProductAvatar">
                                    <p class="ShopDescription">{{ $item['name'] }} - ${{ $item['price'] }}</p>

                                    <form action="{{ route('addToCart') }}" method="POST">

                                        @csrf
                                        <input type="hidden" name="id" value="{{ $item['id'] }}">
                                        <input type="hidden" name="name" value="{{ $item['name'] }}">
                                        <input type="hidden" name="price" value="{{ $item['price'] }}">
                                        <button type="submit" class="AddToCartButton">Add to Cart</button>

                                    </form>

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
