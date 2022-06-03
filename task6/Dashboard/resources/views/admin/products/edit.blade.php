@extends('admin.layouts.app')

@section('title', 'EDIT PRODUCT')

@section('content')    
<div class="col-12">
    <!-- general form elements -->
    <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title">PRODUCT INFORMATION</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form method="post" action="{{ Route('dashboard.products.update',['id'=> $product->id ]) }}" enctype="multipart/form-data" >
        @csrf
        <div class="card-body">
          <div class="form-row">
              <div class="col-6">
                <label for="name_en">product name(en)</label>
                <input type="text" class="form-control" name="name_en"  id="name_en"  value=" {{ $product->name_en }}" />
              </div>
              <div class="col-6">
                <label for="name_ar">product name(ar)</label>
                <input type="text" class="form-control" name="name_ar"  id="name_ar" value="{{ $product->name_ar }}" />
              </div>
            </div>
            <div class="form-row">
                <div class="col-3">
                  <label for="code">code</label>
                  <input type="number" class="form-control" name="code"  id="code" value="{{ $product->code }}" />
                </div>
                <div class="col-3">
                  <label for="price">price</label>
                  <input type="number" class="form-control" name="price"  id="price" value="{{ $product->price }}" />
                </div>
                <div class="col-3">
                    <label for="quantity">quantity</label>
                    <input type="number" class="form-control" name="quantity"  id="quantity" value="{{ $product->quantity }}" />
                  </div>
                </div>
                <div class="form-row">
                    <div class="col-3">
                      <label for="status">status</label>
                    <select class="form-control" name="status" id="status" >
                    <option value="1">ACTIVE</option>
                    <option value="0">NO ACTIVE</option>
                </select>
                    </div>

                    <div class="col-3">
                      <label for="brand_id">brand</label>
                      <select class="form-control" name="brand_id" id="brand_id" >
                        <option value=""> NO BRAND</option>
                      @foreach($brands as $brand)
                      <option @selected($brand->id==$product->brand_id) value=" {{ $brand->id }}"> {{ $brand->name_en }} / {{ $brand->name_ar }} </option>
                      @endforeach
                      </select>
                  </div>
                  <div class="col-3">
                    <label for="subcategory_id">sub category</label>
                    <select class="form-control" name="subcategory_id" id="subcatefory_id" >
                    @foreach($subcategories as $subcategory)
                    <option @selected($subcategory->id==$product->subcategory_id) value=" {{ $subcategory->id }}"> {{ $subcategory->name_en }} / {{ $subcategory->name_ar }} </option>
                    @endforeach
                    <select class="form-control" name="status" id="status" >
                </div>
                    
                <div class="form-row">
                    <div class="col-6">
                      <label for="details_en">details(en)</label>
                      <textarea class="form-control" name="details_en"  id="details_en" cols="30" rows="10"  >{{ $product->details_en }}
                    </textarea>
                    </div>

                    <div class="col-6">
                      <label for="details_ar">details(ar)</label>
                      <textarea  class="form-control" name="details_ar"  id="details_ar" cols="30" rows="10" >{{ $product->details_ar }}
                    </textarea>

                    </div>

                    <div class="col-4">
                        <label for="file">
                            <img src=" {{ $product->image ? asset('dist/img/products/'.$product->image) : asset('dist/img/default.png') }}"  alt="upload"  id="image" class="w-100" style="cursor: pointer"  >
                        </label>
                        <input type="file" class="d-none" name="image"  id="file" onchange="loadImage(event)" cols="30" rows="10" >
                      </div>
                  </div>
                </div>

        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-success">UPDATE</button>
        </div>
      </form>
    </div>
</div>
@endsection


@section('js')
<script>
    var loadImage = function(event) {
        var output = document.getElementById('image');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>  
@endsection
