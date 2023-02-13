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
                    </tr>
                    </thead>
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
                                <h5>{{$customer->email}}</h5>

                            </td>
                            <td class="people-des">
                                <h5>{{$customer->salary}}</h5>

                            </td>
                            <td class="people-des">
                                <h5>{{$customer->status}}</h5>

                            </td>
                            <td class="edit"><a href="/customers/{{ $customer->id }}/edit">EDIT</a></td>
                            <td class="edit"><a href="/customers/{{ $customer->id }}/delete">DELETE</a></td>
                        </tr>
                        </tbody>
                </table>
            </div>
        </div>

        <!-- end of interface-section -->
    </div>

</x-main>
