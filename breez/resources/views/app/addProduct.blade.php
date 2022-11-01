<div class="card text-center">
    <div class="card-body">

        <form method="post" action="{{ route('admin.addProduct',$shop->id) }}" class="col-md-12 mb-3">

            @csrf

            <div class="row">

              <div class="col-md-4 mb-3">

                <input type="text" value="{{ old('productName') }}" class="form-control @error('productName') is-invalid @enderror" name="productName"  placeholder="Product Name"  required>
                @error('productName')
                <div class=".alert alert-danger"> {{ $message }}</div>
                @enderror

            </div>


                <div class="col-md-4 mb-3">
                    <input type="number" value="{{ old('productPrice') }}" class="form-control @error('productPrice') is-invalid @enderror" name="productPrice"  placeholder="Price"  required>

                    @error('productPrice')
                    <div class=".alert alert-danger"> {{ $message }}</div>
                    @enderror
                </div>



                <div class="col-md-4 mb-3">
                    <textarea value="{{ old('productDescription') }}" class="form-control @error('productDescription') is-invalid @enderror" name="productDescription" placeholder="Description" rows="1" required></textarea>
                    @error('productDescription')
                    <div class=".alert alert-danger"> {{ $message }}</div>
                    @enderror
                </div>


            </div>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <input type="file" value="{{ old('productImage') }}" class="form-control @error('productImage') is-invalid @enderror" name="productImage"  placeholder="Select Image"  required>
                    @error('productImage')
                    <div class=".alert alert-danger"> {{ $message }}</div>
                    @enderror
                </div>


                    <div class="col-md-4 mb-3">
                        <input type="number" value="{{ old('productQuantity') }}" class="form-control @error('productQuantity') is-invalid @enderror" name="productQuantity" placeholder="Quantity"  required>
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

