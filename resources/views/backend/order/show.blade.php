@extends('backend.layouts.master')

@section('title','Order Detail')

@section('main-content')
<div class="card">
  <h5 class="card-header">Order
  </h5>
  <!-- <a href="{{route('order.pdf',$order->id)}}" class=" btn btn-sm btn-primary shadow-sm float-right"><i class="fas fa-download fa-sm text-white-50"></i> Generate PDF</a> -->
  <div class="card-body">
    @if($order)
    <div class="table-responsive">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>S.N.</th>
            <th>Order No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Quantity</th>
            <th>Charge</th>
            <th>Total Amount</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->order_number}}</td>
            <td>{{$order->first_name}} {{$order->last_name}}</td>
            <td>{{$order->email}}</td>
            <td>{{$order->quantity}}</td>
            <td>Rs:{{$order->shipping->price ?? ''}}</td>
            <td>Rs:{{number_format($order->total_amount,2)}}</td>
            <td>
              @if($order->status=='new')
              <span class="badge badge-primary">{{$order->status}}</span>
              @elseif($order->status=='process')
              <span class="badge badge-warning">{{$order->status}}</span>
              @elseif($order->status=='delivered')
              <span class="badge badge-success">{{$order->status}}</span>
              @else
              <span class="badge badge-danger">{{$order->status}}</span>
              @endif
            </td>
            <td>
               <div class="d-flex flex-wrap gap-2">
                <a href="{{route('order.edit',$order->id)}}" class="btn btn-primary btn-sm rounded-circle"  style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fas fa-edit"></i></a>
                <form method="POST" action="{{route('order.destroy',[$order->id])}}" class="d-inline">
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger btn-sm rounded-circle" data-id={{$order->id}} style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button>
                </form>
               </div>
            </td>

          </tr>
        </tbody>
      </table>
    </div>
    <section class="confirmation_part section_padding">
      <div class="order_boxes">
        <div class="row">
          <!-- Order Items -->
          <div class="col-lg-7 col-md-12 mb-4">
            <div class="card shadow-sm border-0 h-100">
              <div class="card-header bg-white">
                <h6 class="mb-0 fw-bold">Order Items</h6>
              </div>
              <div class="card-body">
                <table class="table align-middle">
                  <thead class="table-light">
                    <tr>
                      <th>Product</th>
                      <th class="text-center">Qty</th>
                      <th class="text-end">Price</th>
                      <th class="text-end">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($order->carts as $cart)
                    <tr>
                      <td>
                        @if($cart->product->photo)
                        @php
                        $photo = explode(',', $cart->product->photo);
                        @endphp
                        <img src="{{ $photo[0] }}"
                          alt="{{ $cart->product->title }}"
                          class="img-fluid img-thumbnail me-2"
                          style="max-width: 80px; height: auto; object-fit: cover;">
                        @else
                        <img src="{{ asset('images/no-image.png') }}"
                          alt="No Image"
                          class="img-thumbnail me-2"
                          style="width:100px; height:100px; object-fit:cover;">
                        @endif
                        <div class="mt-2">
                          <strong>{{ $cart->product->title }}</strong><br>
                          <small class="text-muted">#{{ $cart->product->id }}</small>
                        </div>
                      </td>
                      <td class="text-center">{{ $cart->quantity }}</td>
                      <td class="text-end">Rs {{ number_format($cart->price,2) }}</td>
                      <td class="text-end">Rs {{ number_format($cart->amount,2) }}</td>
                    </tr>
                    @endforeach
                  </tbody>

                  <tfoot class="table-light">
                    <tr>
                      <td colspan="3" class="text-end fw-bold">Grand Total:</td>
                      <td class="text-end fw-bold">Rs {{ number_format($order->total_amount,2) }}</td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>

          <!-- Shipping Info -->
          <div class="col-lg-5 col-md-12 mb-4">
            <div class="card shadow-sm border-0 h-100">
              <div class="card-header bg-white">
                <h6 class="mb-0 fw-bold">Shipping Information</h6>
              </div>
              <div class="card-body">
                <ul class="list-unstyled mb-0">
                  <li><strong>Name:</strong> {{ $order->first_name }} {{ $order->last_name }}</li>
                  <li><strong>Email:</strong> {{ $order->email }}</li>
                  <li><strong>Phone:</strong> {{ $order->phone }}</li>
                  <li><strong>Address:</strong> {{ $order->address1 }}, {{ $order->address2 }}</li>
                  <li><strong>Country:</strong> {{ $order->country }}</li>
                  <li><strong>Post Code:</strong> {{ $order->post_code }}</li>
                  <li><strong>Shipping Charge:</strong> Rs {{ $order->shipping->price ?? 0 }}</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 col-md-12 col-lx-12">
            <div class="order-info">
              <h4 class="text-center pb-4">ORDER INFORMATION</h4>

              <table class="table">
                <tr class="">
                  <td>Order Number</td>
                  <td> : {{$order->order_number}}</td>
                </tr>
                <tr>
                  <td>Order Date</td>
                  <td> : {{$order->created_at->format('D d M, Y')}} at {{$order->created_at->format('g : i a')}} </td>
                </tr>
                <tr>
                  <td>Quantity</td>
                  <td> : {{$order->quantity}}</td>
                </tr>
                <tr>
                  <td>Order Status</td>
                  <td> : {{$order->status}}</td>
                </tr>
                <tr>
                  @php
                  $shipping_charge=DB::table('shippings')->where('id',$order->shipping_id)->pluck('price');
                  @endphp
                  <td>Shipping Charge</td>
                  <td>Rs:{{$order->shipping->price ?? '' }}</td>
                </tr>
                <tr>
                  <td>Total Amount</td>
                  <td>Rs: {{number_format($order->total_amount,2)}}</td>
                </tr>
                <tr>
                  <td>Payment Method</td>
                  <td> : @if($order->payment_method=='cod') Cash on Delivery @else Paypal @endif</td>
                </tr>
                <tr>
                  <td>Payment Status</td>
                  <td> : {{$order->payment_status}}</td>
                </tr>
              </table>
            </div>
          </div>

        </div>
      </div>
    </section>
    @endif

  </div>
</div>
@endsection

@push('styles')
<style>
  .order-info,
  .shipping-info {
    background: #ECECEC;
    padding: 20px;
  }

  .order-info h4,
  .shipping-info h4 {
    text-decoration: underline;
  }
</style>
@endpush