<div>
    <div class="container login-container">
        <h2 class="text-center mb-4">Login</h2>
        @if (session()->has('message'))
            <div class="bg-green-200 text-green-600 p-2 successmsg text-center" wire:poll>
                {{ session('message') }}
            </div>
        @endif
        <form wire:submit.prevent="submit">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" wire:model="email" id="email" placeholder="Enter your email" required>
                @error('email') <span class="error errmsg">{{ $message }}</span> @enderror<br>

            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" wire:model="password" id="password" placeholder="Enter your password" required>
                @error('password') <span class="error errmsg">{{ $message }}</span> @enderror<br>

            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
        <p class="text-center mt-3">Signup? <a href="{{url('signup')}}">signup</a></p>

    </div>
</div>
