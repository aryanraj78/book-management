<div>
<div class="container cart-container">
    <h2 class="text-center mb-4">Shopping Cart</h2>
    @if(count($cart_items) > 0)
    <!-- Cart Items -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Product</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Total</th>
                <th scope="col">Remove</th>
            </tr>
        </thead>
        <tbody>
            <!-- Sample Cart Items (replace with dynamic data) -->
            @foreach($cart_items as $items)
            <tr>
                <td>{{$items->book->title}}</td>
                <td>{{$items->quantity}}</td>
                <td>Rs.{{$items->book->price}}</td>
                <td>Rs.{{$items->price}}</td>
                <td><a wire:click="removeFromCart({{ $items->id }})">Remove</a></td>
            </tr>
            @endforeach
            
        </tbody>
    </table>

    <!-- Cart Summary -->
    <div class="text-right">
        <p><strong>Total: Rs.{{$cart_items->sum('price')}}</strong></p>
    </div>

    <!-- Checkout Button -->
    <div class="text-center mt-4">
        <button class="btn btn-success">Proceed to Checkout</button>
    </div>
    @else
    Your Cart Is Empty.
    @endif
</div>

</div>
