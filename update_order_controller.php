<?php
$file = 'app/Http/Controllers/OrderController.php';
$content = file_get_contents($file);

$old_method = '    public function productTrackOrder(Request $request){
        // return $request->all();
        $order=Order::where(\'user_id\',auth()->user()->id)->where(\'order_number\',$request->order_number)->first();
        if($order){
            if($order->status=="new"){
            request()->session()->flash(\'success\',\'Your order has been placed. please wait.\');
            return redirect()->route(\'home\');

            }
            elseif($order->status=="process"){
                request()->session()->flash(\'success\',\'Your order is under processing please wait.\');
                return redirect()->route(\'home\');
    
            }
            elseif($order->status=="delivered"){
                request()->session()->flash(\'success\',\'Your order is successfully delivered.\');
                return redirect()->route(\'home\');
    
            }
            else{
                request()->session()->flash(\'error\',\'Your order canceled. please try again\');
                return redirect()->route(\'home\');
    
            }
        }
        else{
            request()->session()->flash(\'error\',\'Invalid order numer please try again\');
            return back();
        }
    }';

$new_method = '    public function productTrackOrder(Request $request){
        $order = Order::where(\'order_number\', $request->order_number)->first();
        if($order){
            return back()->with(\'order_details\', $order);
        }
        else{
            request()->session()->flash(\'error\',\'Invalid Order Number. Please check and try again.\');
            return back();
        }
    }';

$content = str_replace($old_method, $new_method, $content);
file_put_contents($file, $content);
echo "OrderController updated.\n";
