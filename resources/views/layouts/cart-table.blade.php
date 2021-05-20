<!-- Product Row -->
@foreach ($newCart->books as $id => $book)
<tr>
    <input type="hidden" name="{{'books[' . $id . ']' }}" value="{{ $book['book_name'] }}" />
    <td class="pro-thumbnail"><a href="{{ route('book.detail', $id) }}" target="_blank"><img src="{{ $book['pic'] }}"
                alt="Product"></a></td>
    <td class="pro-title"><a href="{{ route('book.detail', $id) }}" target="_blank">{{ $book['book_name'] }}</a></td>
    <td class="pro-remove"><a><i class="far fa-trash-alt" data-id="{{ $id }}"
                onclick="deleteBookInCart($(this))"></i></a>
    </td>
</tr>
@endforeach
<!-- Discount Row  -->
<tr>
    <td colspan="6" class="actions">
        <div class="coupon-block">
            <div class="coupon-text">
                <label for="coupon_code">Tổng số lượng:</label>
                <span class="quantity">{{ $newCart->totalQuantity }}</span>
            </div>
            <div class="coupon-btn">
                <button type="submit" class="btn btn-outlined">Mượn sách</button>
            </div>
        </div>
    </td>
</tr>
