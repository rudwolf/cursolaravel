@extends('layouts.loja')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="product-content-right">
        <div class="row">
          <div class="col-sm-6">
            <div class="product-images">
              <div class="product-main-img">
                <img src="/loja/img/product-2.jpg" alt="">
              </div>
            </div>
          </div>
          
          <div class="col-sm-6">
            <div class="product-inner">
              <h2 class="product-name">{{ $product->title }}</h2>
              <div class="product-inner-price">
                <ins>${{ $product->value }}</ins>
              </div>  
              
              <form action="" class="cart">
                <div class="quantity">
                  <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                </div>
                <button class="add_to_cart_button" type="submit">Adicionar ao carrinhp</button>
              </form>   
              
              <div class="product-inner-category">
                <p>Category:
                @foreach ($product->categories as $category)
                  <a href="{{ route('list_products', ['id'=>$category->id])}}">{{ $category->title }}</a>,
                @endforeach
                </p>
              </div> 
              
              <div role="tabpanel">
                <ul class="product-tab" role="tablist">
                  <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                </ul>
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade in active" id="home">
                    <h2>Descrição do produto</h2>  
                    {{ $product->title }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection