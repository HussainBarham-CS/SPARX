<div class="card text-center">

    <div class="card-body">
        <table class="table">
            <thead class="bg-primary text-white">
              <tr>
                <th scope="col">id</th>
                <th scope="col">Product Name</th>
                <th scope="col">Image</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Category</th>
                <th scope="col">Edit/Delete</th>

              </tr>
            </thead>

            <tbody>
                @foreach ($Data as $data )
                <tr class="tr">
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->name }}</td>
                    <td><img src="{{ asset('assets/img/logo.png') }}" width="40px" alt=""></td>
                    <td>{{ $data->price }}</td>
                    <td>{{ $data->numbers }}</td>
                    <td>catagory</td>
                    <td>
                        <a href="{{ route('admin.edit',$data->id) }}" style="font-size: 30px; color:rgb(15, 78, 214)"><ion-icon name="create-outline"></ion-icon></a><a href="{{ route('admin.delete',$data->id) }}" style="font-size: 30px;color:red"><ion-icon name="trash-outline"></ion-icon></a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>




@include('app.adminFooter')
