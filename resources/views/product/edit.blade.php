@extends('masters.master')

@section('content-center')
@if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success', null)[0] }}
</div>
@endif

@foreach ($errors->all() as $sError)
<div class="alert alert-warning">{{ $sError }}</div>
@endforeach
<div class="card m-4">
    <div class="card-header text-center font-weight-bold">
        Datos del producto
    </div>
    <div class="card-body">
        <form name="edit-product-form" id="edit-product-form" action="{{ route('product.save') }}" method="post">
            @csrf
            <div class="form-group">
                <input type="hidden" id="id" name="id" value="{{ $product->id }}" />
                <label for="name">{{ __('auth.Name') }}</label>
                <input type="text" id="name" name="name" class="form-control" required="" value="{{$product->name}}" />
                <label for="oldPass">{{ __('auth.Description') }}</label>
                <input type="text" id="description" name="description" class="form-control" value="{{$product->description}}" />
                <label for="newPass">{{ __('auth.Price') }}</label>
                <input type="number" id="price" name="price" step="0.01" class="form-control" value="{{$product->price}}" />
                <label for="newPass">{{ __('auth.DiscountPercent') }}</label>
                <input type="number" id="discountPercent" name="discountPercent" step="0.01" class="form-control" value="{{$product->discountPercent}}" />
                <label for="newPass">{{ __('auth.DiscountStart_at') }}</label>
                <input type="datetime-local" id="discountStart_at" name="discountStart_at" class="form-control" value="{{date("Y-m-d\TH:i", strtotime($product->discountStart_at))}}" />
                <label for="newPass">{{ __('auth.DiscountEnd_at') }}</label>
                <input type="datetime-local" id="discountEnd_at" name="discountEnd_at" class="form-control" value="{{date("Y-m-d\TH:i", strtotime($product->discountEnd_at))}}" />
            </div>
            <button type="submit" class="btn btn-primary">{{ __('auth.Save') }}</button>
        </form>
    </div>
</div>
@endsection