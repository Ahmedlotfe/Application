<x-main>

    <div class="main-page">
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

            <h3 class= "i-name">Customers</h3>


            <div class="board">
                <table>
                    <thead>
                    <tr>
                        <td>first_name</td>
                        <td>last_name</td>
                        <td>user_name</td>
                        <td>email</td>
                        <td>salary</td>
                        <td>status</td>
                        <td></td>
                        <td class="edit"><a href="create_customers">New Customer</a></td>
                        <td class="edit">
                            <form method="POST" action="/logout">
                                @csrf
                                <button style="outline: none">
                                    Logout
                                </button>
                            </form>

                        </td>
                    </tr>
                    </thead>
                    @foreach($customers as $customer)
                        <tbody>
                        <tr>
                            <td class="people-des">
                                <h5>{{$customer->first_name}}</h5>

                            </td>
                            <td class="people-des">
                                <h5>{{$customer->last_name}}</h5>
                            </td>
                            <td class="people-des">
                                <h5>{{$customer->user_name}}</h5>

                            </td>
                            <td class="people-des">
                                <h5> <a href="/customers/{{ $customer->id }}"> <span>{{$customer->email}}</span></a> </h5>

                            </td>
                            <td class="people-des">
                                <h5>{{$customer->salary}}</h5>

                            </td>
                            <td class="people-des">
                                <h5>{{$customer->status}}</h5>

                            </td>

                        </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>

        <!-- end of interface-section -->
    </div>

</x-main>
