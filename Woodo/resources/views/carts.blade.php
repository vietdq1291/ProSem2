

@if($newCart != null)


            
  <div id="chages-item">
                                
	<div class="select-items">
        <table>
            <tbody>
            @foreach($newCart->products as $item)
            
          
       
                <tr>
                    <td class="si-text" style="width: 14rem;">
                        <div class="product-selected">
                            <p> {{number_format($item['pr_price'])}} x {{$item['quanty']}}</p>
                          	  <p> {{$item['productinfo']->pr_name}}</p>
                            
                        </div>
                    </td>
                    <td class="si-close">
                  			<i class="ti-close" data-id="{{$item['productinfo']->id}}" > X <i>
                  	</td>

                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="select-total">
     <span>total:</span>
        <h5>{{number_format($newCart->totalPrice)}} $</h5>
        <input hidden id="total-quanty" type="number" value="{{$newCart->totalQuanty}}">
    </div>
</div>
        
 @endif