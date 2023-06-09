@extends('layouts.master')

@section('title','Products')

@section('content')
    
    <h1 class="cat_title">Products <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">New</button></h1>
    <!-- Modal Box -->
    <!-- <h2>Modal Example</h2> -->
    <!-- Trigger the modal with a button -->
    

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Product</h4>
        </div>
        <div class="modal-body">
          
        <form>
            
            <div class="form-group">
                <label for="name">Product Name:</label>
                <input type="name" class="form-control" id="name" placeholder="Product Name" name="name">
            </div>

            <div class="form-group">
                <label for="desc">Description:</label>
                <textarea class="form-control" id="desc" placeholder="Description" name="desc" rows="6"></textarea>
            </div>

            <div class="form-group">
                <label for="meta_title">Meta Title</label>
                <input type="text" class="form-control" id="meta_title" placeholder="Meta Title" name="meta_title">
            </div>

            <div class="form-group">
                <label for="meta_desc">Meta Description</label>
                <textarea class="form-control" id="meta_desc" placeholder="Description" name="meta_desc" rows="6"></textarea>
            </div>

            <div class="form-group">
                <label for="category">Category</label>
                <select name="category" id="category" class="form-control">
                    <option value="">Select a Category</option>
                    <option disabled>-----------------------------</option>

                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
        </div>
      </div>
      
    </div>
  </div>
  <!-- End Modal Box -->
<table class="table table-striped">
<thead>
<tr class="table_heading">
    <th style="width: 500px;">Name</th>
    <th style="width: 100px;">SKU</th>
    <th style="width: 300px;">MPN</th>
    <th style="width: 100px;">Price</th>
    <th style="width: 150px;">Action</th>
</tr>
</thead>
@forelse($data as $item)

<tbody>
    <tr>
    <td>{{ $item->model  }}</td>
    <td>{{ $item->sku  }}</td>
    <td>{{ $item->mpn  }}</td>
    <td style="text-align: right;">{{ $item->price  }}</td>
    <td class="text-center"><button class="btn btn-warning"><i class="fa fa-edit"></i></button> <button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>

    </tr>
</tbody>

@empty
<span>No Record</span>
@endforelse
<table>
    <div class="text-center">
        {{ $data->links("pagination::bootstrap-4") }}
    </div>
@endsection
