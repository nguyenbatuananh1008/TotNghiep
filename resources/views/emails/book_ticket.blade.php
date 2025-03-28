@extends('layouts.app_email')
@section('table')
    <tr>
        <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">
            <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Hi
                {{ $transaction->t_name }},</p>
            <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Đặt vé thành công. Cảm ơn bạn đã tin tưởng và sử dụng hệ thống của chúng tôi</p>
            <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;">
                <tbody>
                <tr>
                    <td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">
                        <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;">
                            <tbody>
                            <tr>
                                <td style="font-family: sans-serif; font-size: 14px; vertical-align: top; background-color: #3498db; border-radius: 5px; text-align: center;">
                                    <a href="{{ route('get.home') }}" target="_blank"
                                       style="display: inline-block; color: #ffffff; background-color: #3498db; border: solid 1px #3498db; border-radius: 5px;
                                           box-sizing: border-box; cursor: pointer; text-decoration: none; font-size: 14px;
                                            font-weight: bold; margin: 0; padding: 12px 25px; text-transform: capitalize;
                                             border-color: #3498db;">Về trang chủ</a> </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
{{--            <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Nếu sau 5p mà bài đăng của bạn chưa được duyệt hãy liên hệ trực tiếp với admin để được xử lý nhanh nhất nhé</p>--}}
{{--            <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Chúc bạn may mắm</p>--}}
        </td>
    </tr>
@stop