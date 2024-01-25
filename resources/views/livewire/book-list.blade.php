<div>
    <!-- Book List -->
    <h4 class="mt-4">Book List</h4>
        @if (session()->has('message'))
            <div class="bg-green-200 text-green-600 p-2 successmsg text-center" wire:poll>
                {{ session('message') }}
            </div>
        @endif
    <div>
        <label for="">Genre</label>
        <select wire:model="genre">
            <option value="">All</option> 
            @foreach($genre_list as $row)        
            <option value="{{$row}}">{{$row}}</option> 
            @endforeach         
                   
        </select>
    </div>
    <ul id="bookList" class="list-group">
        <!-- Sample Book Listing -->
        @foreach($book_list as $book)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div>
                <strong>{{$book->title}}</strong> by {{$book->author}} <strong>Rs.{{$book->price}}</strong>
            </div>
            
            <div>
                <button class="btn btn-success" wire:click="addToCart({{ $book->id }})">Add to Cart</button>
            </div>
        </li>
        @endforeach
        <!-- <li class="list-group-item d-flex justify-content-between align-items-center">
            <div>
                <strong>Book Title 1</strong> by Author 1
            </div>
            <div>
                <button class="btn btn-success" onclick="addToCart('Book Title 1')">Add to Cart</button>
            </div>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div>
                <strong>Book Title 2</strong> by Author 2
            </div>
            <div>
                <button class="btn btn-success" onclick="addToCart('Book Title 2')">Add to Cart</button>
            </div>
        </li> -->
        <!-- Book items will be dynamically added here -->
    </ul>
</div>
