<form wire:submit.prevent='submit'>

    <!-- EMAIL -->
    <div class="mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="Email Address" wire:model='email'>
        <div>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <!-- PASSWORD -->
    <div class="mb-3">
        <input type="password" class="form-control" id="floatingInput1" placeholder="Password" wire:model='password'>
        <div>
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="d-flex mt-1 justify-content-between align-items-center">
        <div class="form-check">
            <input class="form-check-input input-primary" type="checkbox" id="customCheckc1" checked=""
                wire:model='remember'>
            <label class="form-check-label text-muted" for="customCheckc1">Remember me?</label>
        </div>
        <a href="#">
            <h6 class="f-w-400 mb-0">Forgot Password?</h6>
        </a>
    </div>

    <!-- SUBMIT -->
    <div class="d-grid mt-4">
        <button type="submit" class="btn btn-primary">Login</button>
    </div>
    <div class="text-center"><br></div>
</form>
