@extends(layouts.admin)

@section('body')

<div class='table-responsive'>
    <table class='table table-striped'>
        <thead>
        <tr>
            <th>#id</th>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Type</th>
            <th>Edit Image</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>  
        </thead> 

        <tbody>


@foreach($products as $producs)
<tr>
    <td>{{ $product['id'] }}</td>
    <td> <img src="<?php echo Storage::url($product['image']);?>" alt="<?php echo Storage::url($product['image']);?>" width='100' height='100' style='max-height: 220px'> </td>
    <td>{{ $product['name'] }}</td>
    <td>{{ $product['description'] }}</td>
    <td>{{ $product['type'] }}</td>
    <td>${{ $product['price'] }}</td>
    <td><a href="{{ route('admin.products.editImageForm', ['id'=>$product['id']]) }}" class='btn btn-primary' title="">EditImage</a></td>
    <td><a href="{{ route('admin.products.editForm', ['id'=>$product['id']]) }}" class='btn btn-primary' title="">Edit</a></td>
    <td><a href="{{ route('admin.products.delete', ['id'=>$product['id']]) }}" class='btn btn-warning' title="">Delete</a></td>
</tr>

@endforeach

        </tbody>
    </table>
</div>
@endsection