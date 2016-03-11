@foreach ($products as $product)
<div class="col-md-3 col-sm-6">
    <div class="single-shop-product">
        <div class="product-upper">
            <img src="/loja/img/product-2.jpg" alt="">
        </div>
        <h2><a href="{{ route('products_details', ['url'=>$product->url]) }}">{{ $product->title }}</a></h2>
        <div class="product-carousel-price">
            <ins>${{ $product->value }}</ins>
        </div>  
        
        <div class="product-option-shop">
            <a class="add_to_cart_button" data-quantity="1" 
            data-product_sku="" data-product_id="70" 
            rel="nofollow" href="">
                Adicionar ao carrinho
            </a>
        </div>                       
    </div>
</div>
@endforeach