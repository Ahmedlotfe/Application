<x-main>

    <div class="main-page">
        <!-- start of menu-bar -->
        <div class="menu-bar">
            <div class="items">
                <ul>
                    <li class="active"><a href="/customers"><i class="fa-solid fa-chart-simple "></i> <span>Customer</span></a></li>
                </ul>
            </div>
        </div>
        <!-- end of menu-bar -->

        <!-- start of nav-bar -->

        <div class="interface">

            <h3 class= "i-name">Edit Customer</h3>

            <div class="board">
                <div class="card-body">
                    <form action="/customers/{{ $customer->id }}/update" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">First Name</label>
                            <input type="text" class="form-control" placeholder="First Name" name="first_name" value="{{ $customer->first_name }}">
                            @error('first_name')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div> <!-- form-group// -->

                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" placeholder="Last Name" name="last_name" value="{{ $customer->last_name }}">
                            @error('last_name')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div> <!-- form-group// -->

                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Username</label>
                            <input type="text" class="form-control" placeholder="Username" name="user_name" value="{{ $customer->user_name }}">
                            @error('user_name')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div> <!-- form-group// -->

                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Email" name="email" value="{{ $customer->email }}">
                            @error('email')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div> <!-- form-group// -->

                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Salary</label>
                            <input type="number" class="form-control" placeholder="Salary" name="salary" value="{{ $customer->salary }}">
                            @error('salary')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div> <!-- form-group// -->

                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Status</label>
                            <input type="number" class="form-control" placeholder="Status" name="status" value="{{ $customer->status }}">
                            @error('status')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div> <!-- form-group// -->

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block"> Update </button>
                        </div> <!-- form-group// -->
                    </form>
                </div> <!-- card-body.// -->
            </div>
        </div>

        <!-- end of interface-section -->
    </div>

</x-main>
