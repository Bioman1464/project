@foreach($cartItems->items as $item)
<td class="active">{{$item['data']['id']}}</td>
<tg class="active"><img src="{{Storage::disk('local')->url('product_images/'.$item['data']['image']}}" width="100" height="100"></tg>
<td class="active">{{$item['data']['name']}}</td>
<td class="active">{{$item['data']['description']}}</td>
<td class="active">{{$item['data']['type']}}</td>
<td class="active">${{$item['price']}}</td>
@endforeach