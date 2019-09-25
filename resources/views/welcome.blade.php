@extends('layouts.app')
@section("content")

            <div class="content">
                <div class="title m-b-md">
                    <form METHOD="POST" action="{{("/add")}}" enctype="multipart/form-data">
                        @csrf
                        <label>Mobile
                          <input type="file"   name="mobile[]" id="mobile" multiple="">
                        </label>
                        <label>Desktop
                        <input type="file" name="desktop[]" id="desktop" multiple="">
                        </label>
                        <button value="add" id="btn">Add</button>
                    </form>

                </div>


            </div>
    @endsection
