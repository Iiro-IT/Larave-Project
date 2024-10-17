<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Your Cart') }}
        </h2>
    </x-slot>

    <div class="py-12 taustakuva">
        <div class="CartContainer">
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            <div class="CartItems">
                @if ($cartItems->isNotEmpty())
                    @foreach ($cartItems as $item)
                        <div class="CartItem">
                            <p>{{ $item->name }} - €{{ $item->price }}</p>
                        </div>
                    @endforeach

                    <!-- Clear Cart Button -->
                    <form action="{{ route('clearCart') }}" method="POST">
                        @csrf
                        <button type="submit" class="ClearCartButton">Clear Cart</button>
                    </form>
                @else
                    <p>Your cart is empty!</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
