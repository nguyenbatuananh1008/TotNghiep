<div class="lists">
    <div class="item">
        <a href="tel:{{ $transaction->t_phone }}">Liên hệ : 0{{ number_format($transaction->t_phone,0,',','.') }}</a>
    </div>
    <div class="item">
        <a href="{{ route('get_guest.ticket.success', $transaction->id) }}">Xác nhận thanh toán</a>
    </div>
    <div class="item">
        <a href="{{ route('get_guest.ticket.cancel', $transaction->id) }}">Huỷ bỏ</a>
    </div>
</div>