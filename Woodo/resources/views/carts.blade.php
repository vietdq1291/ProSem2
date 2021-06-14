

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
                            
                        </div>
                    </td>
                    <td class="si-close">
                  <td class="close-td" data-id="" ><img src="images/delete@4x.png" alt="" style="max-width: 20%;"></td>

                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="select-total">
     <span>total:</span>
        <h5>{{number_format($newCart->totalPrice)}} $</h5>
    </div>
</div>
        
 @endif