 <!--data list -->
 <div class="details">

    <div class="recentOrders">
        <div class="cardHeader">
            <h2>Recent Orders</h2>
            <a href="" class="btn">View All</a>
        </div>

        <table>
            <thead>
                <tr>
                    <td>Name</td>
                    <td>City</td>
                    <td>Address</td>
                    <td>Status</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->city }}</td>
                    <td>{{ $order->address }}</td>
                    <td><span class="status delivered">{{ $order->status }}</span></td>
                </tr>
                @endforeach


            </tbody>

        </table>
    </div>
