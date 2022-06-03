@extends('admin.layouts.app')

@section('title', 'ALL PRODUCTS')

@section('CSS')
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('content')  

<div class="col-12">

@if (session('success'))
<div class="alert alert-success text-center">
    {{ session('success') }}
</div>
@endif

</div>

<div class="col-12">
    <div class="card card-info">
        <div class="card-header"  id="table1_wrapper" >
          <h3 class="card-title">PRODUCTS</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0" id="table1_wrapper">
          <table class="table table-striped" id="table1">
            <thead>
              <tr>
                <th >#</th>
                <th>name</th>
                <th>code</th>
                <th>quantity</th>
                <th>price</th>
                <th>status</th>
                <th>brand</th>
                <th>sub category</th>
                <th>create date</th>
                <th>update date</th>
                <th>operations</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product ->name_en.'/'.$product->name_ar }}</td>
                    <td>{{ $product->code }}</td>
                    <td @class([ 'font-weight-bold',
                                'text-success' =>$product->quantity >=5 , 
                                 'text-warning' =>$product->quantity <5 && $product->quantity >0 , 
                                 'text-danger' =>$product->quantity ==0
                      ]) >
                        {{ $product->quantity }}
                    </td>
                    <td>{{ number_format ($product->price) }} EGP</td>
                    <td>
                        <span @class ([ 'badge' ,
                         'bg-success'=> $product->status,
                         'bg-danger'=>!$product->status
                        ])  >
                          {{ $product->status==1 ? 'ACTIVE' : 'NO ACTIVE' }}
                        </span>
                    </td>
                    <td>{{ $product->brand_name_en.' / '. $product->brand_name_ar }}</td>
                    <td>{{ $product->subcategory_name_en.' / '. $product->subcategory_name_ar }}</td>
                    <td>{{ $product->created_at }}</td>
                    <td>{{ $product->updated_at }}</td>
                    <td> 
                        <a class=" btn btn-outline-warning bt-sm "  href="{{ Route('dashboard.products.edit', ['id'=>$product->id]) }}">EDIT</a>
                       <form  method="post" action="{{ Route('dashboard.products.destroy', ['id'=>$product->id]) }}">
                      @csrf 
                      <button class="btn btn-outline-danger rounded btn-sm" href=""> DELETE </button>
                    </form>
                    </td>
                  </tr>
                @endforeach
            
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>

</div>
@endsection

@section('JS')
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

<script>
  $(function () {
    $("#table1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#table1_wrapper');
  });

</script>


@endsection
