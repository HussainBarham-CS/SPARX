@include('app.adminHeader')
@include('app.adminNavication')
@include('app.adminTopBar')


<div class="card text-center">
    <div class="card-body">

        <form method="post" action="{{ route('admin.update',$Data->id) }}" class="col-md-12 mb-3">

            @csrf

            <div class="row">

              <div class="col-md-4 mb-3">

                <input type="text" value="{{ $Data->name }}" class="form-control @error('productName') is-invalid @enderror" name="productName"  placeholder="Product Name"  required>
                @error('productName')
                <div class=".alert alert-danger"> {{ $message }}</div>
                @enderror

            </div>


                <div class="col-md-4 mb-3">
                    <input type="number" value="{{ $Data->price }}" class="form-control @error('productPrice') is-invalid @enderror" name="productPrice"  placeholder="Price"  required>

                    @error('productPrice')
                    <div class=".alert alert-danger"> {{ $message }}</div>
                    @enderror
                </div>



                <div class="col-md-4 mb-3">
                    <textarea class="form-control @error('productDescription') is-invalid @enderror" name="productDescription" placeholder="Description" rows="1" required>{{ $Data->desc }}</textarea>
                    @error('productDescription')
                    <div class=".alert alert-danger"> {{ $message }}</div>
                    @enderror
                </div>


            </div>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <input type="file" value="{{ $Data->image }}" class="form-control @error('productImage') is-invalid @enderror" name="productImage"  placeholder="Select Image"  required>
                    @error('productImage')
                    <div class=".alert alert-danger"> {{ $message }}</div>
                    @enderror
                </div>


                    <div class="col-md-4 mb-3">
                        <input type="number" value="{{ $Data->numbers }}" class="form-control @error('productQuantity') is-invalid @enderror" name="productQuantity" placeholder="Quantity"  required>
                        @error('productQuantity')
                        <div class=".alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>


                  <button class="btn btn-primary " type="submit">DONE !</button>

            </div>






          </form>
        </div>

    </div>
</div>

@include('app.adminFooter')
