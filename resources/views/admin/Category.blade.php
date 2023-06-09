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
              <input type="hidden" class="form-control" id="id" name="id" value="">
            </div>

            <div class="form-group">
                <label for="name">Category Name:</label>
                <input type="name" class="form-control" id="name" name="name" value="" />
                <span class="name bg-danger text-center"></span>
            </div>

            <div class="form-group">
                <label for="desc">Description:</label>
                <textarea class="form-control" id="description" placeholder="Description" name="description" rows="6"></textarea>
                <span class="description bg-danger"></span>
            </div>

            <div class="form-group">
                <label for="meta_title">Meta Title</label>
                <input type="text" class="form-control" id="meta_title" name="meta_title" value="" />
                <span class="meta_title bg-danger"></span>
            </div>

            <div class="form-group">
                <label for="meta_desc">Meta Description</label>
                <textarea class="form-control" id="meta_description" placeholder="Description" name="meta_description" rows="6"></textarea>
                <span class="meta_description bg-danger"></span>
            </div>

            
            <button type="submit" class="btn btn-info add_cat">Add</button>
            <button type="submit" class="btn btn-info upd_cat">Update</button>

        </form>
        </div>
      </div>
      
    </div>
  </div>
  <!-- End Modal Box -->



<table class="table table-striped">
<thead>
  
  <tr>
    <td colspan="1"><button type="button" class="btn btn-primary">Total <span class="badge badge-light">{{ $data->count() }}</span> Records</button></td>
    <td colspan="4">

      <div class="message">
        @if(Session()->has('success'))
        <p class="bg-success text-center text-white" style="width: 300px; margin-left: auto; margin-right: auto; line-height: 30px;">{{ Session()->get('success') }}</p>
        @else
        <p class="bg-danger text-center">{{ Session()->get('success') }}</p>
        @endif
      </div>

    </td>
  </tr>

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
    
    <td class="text-center">
      <button class="btn btn-warning edit" data-id="{{ $item->category_id }}"><i class="fa fa-edit"></i></button> 
      <a href='{{ url("admin/deleteCat/") }}/{{$item->category_id}}' class="btn btn-danger"><i class="fa fa-trash"></i></a>
    </td>
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

    $('.upd_cat').hide();
    
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

            setTimeout(() => {
              location.replace('http://127.0.0.1:8000/admin/category');
            }, 5000);
            
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

    $(document).on('click', '.edit', function(e){
      e.preventDefault();

      $('.upd_cat').show();
      $('.add_cat').hide();

      const id = $(this).data('id');
      // alert(id);
      $('#myModal').modal('show');
      $('.modal-title').html('Edit Category');

      const editRoute = ('editCat/'+id);
      $.ajax({
        url: editRoute,
        method: 'GET',

        success: function(data){
          console.log(data);
          $('#id').val(id);
          $('#name').val(data.name);
          $('#description').val(data.description);
          $('#meta_title').val(data.meta_title);
          $('#meta_description').val(data.meta_description);

        }
      });
      
    });

    $('.upd_cat').on('click', function(e){
      e.preventDefault();

      let _token = $("input[name='_token']").val();
      let name = $("#name").val();
      let description = $("#description").val();
      let meta_title = $("#meta_title").val();
      let meta_description = $("#meta_description").val();

      const id = $('#id').val();
      const UpdateRoute = ("updateCat/"+id);
      
      $.ajax({
        url: UpdateRoute,
        method: 'PUT',
        data: {
          _token:_token,
          name:name,
          description:description,
          meta_title:meta_title,
          meta_description:meta_description
        },

        success: function(data){
          if(data.response){
            $('.message').css('display','none');
            $('.message').html(JSON.parse(JSON.stringify(data.response))).slideDown().delay(3000).slideUp();
            setTimeout(() => {
              location.replace('http://127.0.0.1:8000/admin/category');
            }, 5000);
            
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

    // $(document).on('click', '.delete', function(e){
    //   e.preventDefault();
    //   const id = $(this).data('id');
      
    //   if(confirm('Really delete this category ?')){
    //     const delCatRoute = ('deleteCat/'+id);
    //     $.ajax({
    //       url : delCatRoute,
    //       method : 'GET',

    //       success : function(data){
    //         console.log(data);
    //       }
    //     });
    //   }
    // });

  });
</script>