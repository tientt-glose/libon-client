@extends('index')
@section('title', "Chi tiết giỏ sách")
@section('before-theme-styles-end')
<!-- toastr -->
<link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}">
@endsection

{{-- @section ('before-styles-end')
<!-- custom -->
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection --}}

@section('script')
<!-- toastr -->
<script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>

@if($errors->any())
@foreach ($errors->all() as $error)
<script>
    toastr.error('{{ $error }}')
</script>
@endforeach
@endif

@if (session()->has('success'))
<script>
    toastr.success('{{ session()->get('success') }}')
</script>
@endif

<script>
    function deleteBookInCart(_this) {
        // console.log($(_this).data('id'))
        $.ajax({
            data: {
                book_id: $(_this).data('id'),
                csrf: '{{ csrf_token() }}'
            },
            url: '{{ route('cart.delete_to_cart') }}',
            type: 'POST',
            headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
            success: function (data) {
                // console.log(data);
                if(data.result == 0){
                    toastr.error(data.message)
                }else{
                    $('#change-item-cart').empty();
                    $('#change-item-cart').html(data.html)
                    $('#change-item-cart-2').empty();
                    $('#change-item-cart-2').html(data.html)
                    $('#outer-count').text(data.quantity)
                    $('#outer-count-2').text(data.quantity)
                    $('#cart-table').empty();
                    $('#cart-table').html(data.table)
                    toastr.success(data.message)
                }
            }
        })
    }
</script>
@endsection

@section('content')
<section class="breadcrumb-section">
    <h2 class="sr-only">Site Breadcrumb</h2>
    <div class="container">
        <div class="breadcrumb-contents">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Chi tiết giỏ sách</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<main class="cart-page-main-block inner-page-sec-padding-bottom">
    <div class="cart_area cart-area-padding  ">
        <div class="container">
            <div class="page-section-title">
                <h1>Chi tiết giỏ sách</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('cart.borrow_book') }}" method="POST">
                        @csrf
                        <div class="cart-table table-responsive mb--40">
                            <table class="table">
                                <!-- Head Row -->
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Bìa</th>
                                        <th class="pro-title">Sách</th>
                                        <th class="pro-remove">Action</th>
                                    </tr>
                                </thead>
                                @if (Session::has('cart'))
                                <input type="hidden" name="user_id"
                                    value="{{ Session::has('userId') ? Session::get('userId') : null}}" />
                                <tbody id="cart-table">
                                    <!-- Product Row -->
                                    @foreach (Session::get('cart')->books as $id => $book)
                                    <tr>
                                        <input type="hidden" name="{{'books[' . $id . ']' }}"
                                            value="{{ $book['book_name'] }}" />
                                        <td class="pro-thumbnail"><a href="{{ route('book.detail', $id) }}"
                                                target="_blank"><img src="{{ $book['pic'] }}" alt="Product"></a></td>
                                        <td class="pro-title"><a href="{{ route('book.detail', $id) }}"
                                                target="_blank">{{ $book['book_name'] }}</a></td>
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
                                                    <span
                                                        class="quantity">{{ Session::has('cart') ? Session::get('cart')->totalQuantity : 0 }}</span>
                                                </div>
                                                <div class="coupon-btn">
                                                    <button type="submit" class="btn btn-outlined">Mượn sách</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                @else
                                <tbody id="cart-table">
                                    <tr>
                                        <td colspan="6" class="actions">
                                            <h4> Không có sách trong giỏ </h4>
                                        </td>
                                    </tr>
                                </tbody>
                                @endif
                            </table>
                        </div>
                        <!-- Cart Table -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
