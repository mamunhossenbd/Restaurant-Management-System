@extends('frontend.layouts.main')
@section('main-content')

<!DOCTYPE html>
<html>
<head>
  <title>Product Menu Details View</title>
  <style>
    .product-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
      border: 1px solid #ddd;
      padding: 10px;
      border-radius: 4px;
    }
    
    .product-image {
      width: 50px;
      height: 50px;
      border-radius: 4px;
      object-fit: cover;
    }
    
    .product-info {
      flex: 1;
      margin-left: 10px;
    }
    
    .product-title {
      font-weight: bold;
      text-align: center;
    }
    
    .product-price {
      margin-top: 5px;
      font-size: 16px;
    }
    
    .product-description {
      margin-top: 5px;
      color: #888;
    }
  </style>
</head>
<body>
  <h2>Product Menu Details</h2>
 <div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="product-container">
        <form action="{{url('/addcart',$product->id)}}" method="POST">
       @csrf
        <div class="product-info"> 
           <img class="product-image" src="{{asset('uploads/'.$product->photo)}}"alt="Product 1">
          <h3 class="product-title">Menu Name:{{$product->title}}</h3>
          <span class="product-price">Price:{{$product->price}}</span>
          <p class="product-description"><h4>Menu Details:</h4> {{$product->details}}</p>
          <div class="details_quentity">
            <h5>select quentity</h5>
            <div class="quentity_btn_area d-flex flex-wrapa align-items-center">
                <div class="">
                    <input type="number" placeholder="1" name="quntity" min="1" value="1">
                </div>
            </div>
        </div>
        <ul class="details_button_area d-flex flex-wrap">
          <li><input type="submit" value="add to cart" class="common_btn"></li>
      </ul>
        </div>
        </form>
      </div>
    </div>
  </div>
 </div>
</body>
</html>
@endsection




