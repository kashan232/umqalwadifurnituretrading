<?php
$file = 'resources/views/frontend/pages/order-track.blade.php';
$content = file_get_contents($file);

$items_html = <<<'HTML'
                            <!-- Order Items Details -->
                            <div class="row mt-5">
                                <div class="col-12">
                                    <div class="tcs-info-box" style="padding: 0; overflow: hidden;">
                                        <h4 style="background: #036b41; color: #fff; padding: 15px 20px; font-size: 16px; font-weight: 700; margin: 0;">Order Items</h4>
                                        <div class="table-responsive">
                                            <table class="table" style="margin-bottom: 0;">
                                                <thead style="background: #f4f6f9;">
                                                    <tr>
                                                        <th style="border-bottom: 1px solid #eee; font-weight: 600; padding: 15px 20px; color: #555;">Product</th>
                                                        <th style="border-bottom: 1px solid #eee; font-weight: 600; padding: 15px 20px; color: #555;">Rate</th>
                                                        <th style="border-bottom: 1px solid #eee; font-weight: 600; padding: 15px 20px; color: #555;">Qty</th>
                                                        <th style="border-bottom: 1px solid #eee; font-weight: 600; padding: 15px 20px; color: #555; text-align: right;">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($order->cart_info as $cart)
                                                    @php
                                                        $photo = explode(',',$cart->product['photo']);
                                                    @endphp
                                                    <tr>
                                                        <td style="padding: 15px 20px; border-bottom: 1px solid #eee; display: flex; align-items: center;">
                                                            <img src="{{$photo[0]}}" alt="{{$cart->product['title']}}" style="width: 50px; height: 50px; object-fit: cover; border-radius: 4px; margin-right: 15px; border: 1px solid #ddd;">
                                                            <span style="font-weight: 600; color: #333;">{{$cart->product['title']}}</span>
                                                        </td>
                                                        <td style="padding: 15px 20px; border-bottom: 1px solid #eee; vertical-align: middle;">Rs. {{number_format($cart->price, 2)}}</td>
                                                        <td style="padding: 15px 20px; border-bottom: 1px solid #eee; vertical-align: middle;">{{$cart->quantity}}</td>
                                                        <td style="padding: 15px 20px; border-bottom: 1px solid #eee; vertical-align: middle; text-align: right; font-weight: 700; color: #036b41;">Rs. {{number_format($cart->amount, 2)}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot style="background: #fdfdfd;">
                                                    <tr>
                                                        <td colspan="3" style="padding: 15px 20px; text-align: right; font-weight: 600; color: #555; border-top: 2px solid #ddd;">Subtotal</td>
                                                        <td style="padding: 15px 20px; text-align: right; font-weight: 700; color: #333; border-top: 2px solid #ddd;">Rs. {{number_format($order->sub_total, 2)}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3" style="padding: 15px 20px; text-align: right; font-weight: 600; color: #555;">Shipping</td>
                                                        <td style="padding: 15px 20px; text-align: right; font-weight: 700; color: #333;">Rs. {{number_format($order->shipping->price ?? 0, 2)}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3" style="padding: 15px 20px; text-align: right; font-weight: 800; color: #023a23; font-size: 16px;">Grand Total</td>
                                                        <td style="padding: 15px 20px; text-align: right; font-weight: 800; color: #036b41; font-size: 16px;">Rs. {{number_format($order->total_amount, 2)}}</td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
HTML;

$search = "                            </div>\n                        </div>\n                    @endif";
$replace = "                            </div>\n" . $items_html . "\n                    @endif";

$content = str_replace($search, $replace, $content);
file_put_contents($file, $content);
echo "Items table added successfully.\n";
