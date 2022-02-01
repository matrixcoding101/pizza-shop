@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">{{ __('Menu') }}</div>

                    <div class="card-body">
                        <ul class="list-group">
                            <a href="" class="list-group-item list-group-item-action" >View</a>
                            <a href="" class="list-group-item list-group-item-action" >Create</a>
                        </ul>
                    </div>
                </div>
                @if(count($errors)>0)
                    <div class="card mt-5">
                        <div class="card-body">
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $error)
                                        <p>{{$error}}</p>
                                    @endforeach
                                </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Pizza') }}</div>

                    <form action="{{route('pizza.store')}}" method="post" enctype="multipart/form-data">@csrf
                    <div class="card-body">
                        <div class="form-group">
                            <lable for="name">Name Of Pizza</lable>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name Of Pizza">
                        </div>
                        <br>
                        <div class="form-group">
                            <lable for="description">Description Of Pizza</lable>
                            <textarea name="description" id="" class="form-control"></textarea>
                        </div>
                        <br>
                        <div class="form-inline">
                            <lable>Pizza Price($)</lable>
                            <input type="number" name="small_pizza_price" id="" class="form-control mr-sm-2" placeholder="Small Pizza Price">
                            <input type="number" name="medium_pizza_price" id="" class="form-control mr-sm-2" placeholder="Medium Pizza Price">
                            <input type="number" name="large_pizza_price" id="" class="form-control mr-sm-2" placeholder="Large Pizza Price">
                        </div>
                        <br>
                        <div class="form-group">
                            <lable for="category">Category</lable>
                            <select class="form-control" name="category" id="" >
                                <option value=""></option>
                                <option value="vegetarian">Vegetarian</option>
                                <option value="nonvegetarian">Non-Vegetarian</option>
                                <option value="traditional">Traditional</option>
                                <option value="spicy">Spicy</option>
                                <option value="meaty">Meaty</option>
                            </select>
                            <br>
                        </div>
                        <br>
                        <div class="form-group">
                            <lable>Image</lable>
                            <input type="file" name="image" id="" class="form-control">
                        </div>
                        <br>
                        <div class="form-group text-center">
                            <button class="btn btn-primary" type="submit" >Save</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
