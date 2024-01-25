<div>
    <div class="container dashboard-container">
        <h2 class="text-center mb-4">User Dashboard</h2>

        <!-- User Information -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">User Information</h5>
                <p class="card-text">Name: <strong>{{auth()->user()->name}}</strong></p>
                <p class="card-text">Email: <strong>{{auth()->user()->email}}</strong></p>
                <!-- Add more user-related information as needed -->
            </div>
        </div>
        @if($book_list)
        <!-- Suggestions Section -->
        <div class="mt-4">
            <h4>Suggested Content</h4>
            <div class="card-deck">
                <!-- Sample Suggested Content (replace with dynamic data) -->
               @foreach($book_list as $book)
                <div class="card">
                
                    <div class="card-body">
                        <div>
                            <strong>{{$book->title}}</strong> by {{$book->author}} <strong>Rs.{{$book->price}}</strong>
                        </div>
                        
                        <div>
                            <button class="btn btn-success" wire:click="addToCart({{ $book->id }})">Add to Cart</button>
                        </div>
                    </div>
                </div>
                @endforeach
                
            
                <!-- Add more cards for additional suggested content -->
            </div>
        </div>
        @endif
    </div>

</div>
