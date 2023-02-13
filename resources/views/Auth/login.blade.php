<x-main>

    <div class="main-page col-12">
        <!-- start of menu-bar -->
        <div class="menu-bar">
            <div class="items">
                <ul>
                    <li class="active"><a href="/customers"><i class="fa-solid fa-chart-simple "></i> <span>Customers</span></a></li>
                </ul>
            </div>
        </div>
        <!-- end of menu-bar -->

        <!-- start of nav-bar -->

        <div class="interface">

            <h3 class= "i-name text-center">Login</h3>

            <div class="board col-6 m-auto">
                <div class="card-body">
                    <form action="/login" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                            @error('email')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div> <!-- form-group// -->

                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password" value="{{ old('password') }}">
                        </div> <!-- form-group// -->

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block"> Login </button>
                        </div> <!-- form-group// -->
                    </form>
                </div> <!-- card-body.// -->
            </div>
        </div>

        <!-- end of interface-section -->
    </div>

</x-main>
