@extends('layouts.master')

@section('title','Category')

@section('content')
<h1 class="cat_title">Category


<!-- Modal Box -->
<!-- <h2>Modal Example</h2> -->
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">New</button>
  </h1>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Category</h4>
        </div>
        <div class="modal-body">

        <div class="message bg-success text-center"></div>
          
        <form id="prd_cat">
          @csrf
            <div class="form-group">
                <label for="name">Category Name:</label>
                <input type="name" class="form-control" id="name" placeholder="Category Name" name="name">
                <span class="name bg-danger text-center"></span>
            </div>

            <div class="form-group">
                <label for="desc">Description:</label>
                <textarea class="form-control" id="description" placeholder="Description" name="description" rows="6"></textarea>
                <span class="description bg-danger"></span>
            </div>

            <div class="form-group">
                <label for="meta_title">Meta Title</label>
                <input type="text" class="form-control" id="meta_title" placeholder="Meta Title" name="meta_title">
                <span class="meta_title bg-danger"></span>
            </div>

            <div class="form-group">
                <label for="meta_desc">Meta Description</label>
                <textarea class="form-control" id="meta_description" placeholder="Description" name="meta_description" rows="6"></textarea>
                <span class="meta_description bg-danger"></span>
            </div>

            
            <button type="submit" class="btn btn-default add_cat">Add</button>
        </form>
        </div>
      </div>
      
    </div>
  </div>
  <!-- End Modal Box -->


<table class="table table-striped">
<thead>
<tr class="table_heading">
    <th>Name</th>
    <th>Description</th>
    <th>Meta Title</th>
    <th>Meta Description</th>
    <th style="width: 150px;">Action</th>
</tr>
</thead>
@forelse($data as $item)

<tbody>
    <tr>
    <td>{{ $item->name }}</td>
    <td>{{ $item->description  }}</td>
    <td>{{ $item->meta_title  }}</td>
    <td>{{ $item->meta_description  }}</td>
    
    <td class="text-center"><button class="btn btn-warning edit" data-id="{{ $item->id }}"><i class="fa fa-edit"></i></button> <button data-id="{{ $item->id }}" href="" class="btn btn-danger delete"><i class="fa fa-trash"></i></button></td>

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

<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script>

  // $.ajaxSetup({
  //     headers: {
  //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  //     }
  // });

  $(document).ready(function(){

    $('.add_cat').on('click', function(e){
      e.preventDefault();
      
      let _token = $("input[name='_token']").val();
      let name = $("#name").val();
      let description = $("#description").val();
      let meta_title = $("#meta_title").val();
      let meta_description = $("#meta_description").val();
      $.ajax({
        url : "{{ route('addcatRoute')}}",
        type : 'POST',
        // data: $('#prd_cat').serialize(),
        data: {
          _token:_token,
          name:name,
          description:description,
          meta_title:meta_title,
          meta_description:meta_description
        },

        success : function(data){
          if(data.response){
            $('.message').css('display','none');
            $('.message').html(JSON.parse(JSON.stringify(data.response))).slideDown().delay(3000).slideUp();
            
          }else{
            const name = data.validation_error.name;
            const description = data.validation_error.description;
            const meta_title = data.validation_error.meta_title;
            const meta_description = data.validation_error.meta_description;

            $('.name').html(name);
            $('.description').html(description);
            $('.meta_title').html(meta_title);
            $('.meta_description').html(meta_description);
          }
          
        }
      });
    });

    $(document).on('click', '.edit', function(){
      const id = $(this).data('id');
      alert(id);
    });
  });
</script>