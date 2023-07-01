<form action="{{ route('product.store') }}">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


  {{-- <form action="{{ route('product*namaFunctiondicontroller.store*namaFunctiondicontroller') }}" method="POST">
    @csrf
    <div>
        <label for="name">Product Name</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="image">Product Image URL</label>
        <input type="text" name="image" id="image" required>
    </div>
    <div>
        <label for="price">Product Price</label>
        <input type="number" name="price" id="price" required>
    </div>
    <div>
        <button type="submit">Add Product</button>
    </div>
</form> --}}