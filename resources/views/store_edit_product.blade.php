@extends('layouts.default')



@section('content')
<div style="position:absolute; top:52px; z-index:-1">
 <div class="container-fluid">
     <div class="row">
         <div class="col-md-11 col-md-offset-1">
             <div class="panel panel-default display">
                <div class="panel-heading">Edit Product  @if($user_id==$user->id)<a href="/store/{{$store->id}}/delete_product/{{$Product->id}}" class='btn btn-primary'>Delete</a> @endif </div>
                    <div class="panel-body">

                         <form id='Upload' class="form-horizontal" role="form" method="POST" action="/store/{{$store->id}}/productedit/{{$Product->id}}" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <input type="hidden" name="user_id" value="{{ $user->id }}" />
                            <div class="form-group">
                                <label class="col-md-4 control-label">Product Pricing</label>
                                <div class="col-md-6">
                                   <div class="details">
                                   <p>All products sold through KineticGold will be participating in the multi-level bonus program commonly referred to as the '10-4 Good Buddy Program'.</p>
                                   <p>The 10-4 Good Buddy program pays out a total of 26% bonuses, plus an additional 4% is reserved for charitable contributions and selected programs that deserve funding.</p>
                                   <KineticGoldix will receive 10% profit on the sale, out of which credit card charges, bank charges for payroll system, accounting and maintenance of the website will be paid.</p>
                                   <p>You will be paid the wholesale price you set below. The member price and non-member price will be calculated for you.</p>
                                   <p>Payment for product will be made through KineticGoldomix payroll debit card.</p>
                                   </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Shipping Information</label>
                                <div class="col-md-6">
                                     <div class="details">
                                       <p>If you enter a shipping amount, that is the shipping cost to be charged to the buyer for this product, if you enter a weight, the shipping cost will be calculated based upon that weight, and the zipcode of the buyer.  If both are left blank, the buyer's cost for shipping is free.</p>
                                       <p>Shipping Costs will NOT be considered as part of the bonus system and will be paid to you entirely.  Shipping costs must be reasonable and reflect actual costs. Shipping of the product must occur promptly after the sale.</p>
                                     </div>                                                                   </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Product Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="product_name" value="{{$Product->product_name}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Product Category</label>
                                <div class="col-md-6">
                                    <select name="product_category">
                                        @foreach($categories as $key=>$category)
                                            <option value="{{$key}}" @if($Product->product_category == $key) Selected @endif>{{$category}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Short Description</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="description" value="{{$Product->description}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Long Description</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" name="display_description" value="">{{$Product->display_description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Non-Member Price</label>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="nonmember" value="{{$Product->non_member}}" step="any" Readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Member Price</label>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="member" value="{{$Product->member}}" step="any" Readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Wholesale Price (you receive)</label>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="wholesale" value="{{$wholesale}}" step="any">
                                </div>
                            </div>
                            <div class="form-group">
                               <label class="col-md-4 control-label">Shipping (if known)</label>
                               <div class="col-md-6">
                                   <input type="number" class="form-control" name="cost_shipping" value="{{$Product->cost_shipping}}" step="any">
                               </div>
                            </div>
                            <div class="form-group">
                               <label class="col-md-4 control-label">Weight (to calculate shipping cost)</label>
                               <div class="col-md-6">
                                   <input type="number" class="form-control" name="shipping_weight" value="{{$Product->shipping_weight}}" step="any">
                               </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Current Picture</label>
                                <div class="col-md-6">
                                    <div align="center" style="border:black solid 1px; display:table-cell; vertical-align:middle; text-align:center; width:200px; height:60px;">
                                         <img src="/images/{{$Product->image}}" width="150"  >
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Product Picture</label>
                                <div class="col-md-6">
                                    <input id='file' type="file" class="form-control" name="file" ></text>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Physical Description</label>
                                <div class="col-md-6">
                                   <input type="text" class="form-control" name="physical_description" value="{{$Product->physical_description}}" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">One of a Kind</label>
                                <div class="col-md-6">
                                    <select name="one_of_a_kind">
                                        <option value="0" @if($Product->one_of_a_kind == 0) Selected @endif>NO</option>
                                        <option value="1" @if($Product->one_of_a_kind == 1) Selected @endif>YES</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>

                                </div>
                            </div>
                         </form>
                  </div>
               </div>
            </div>
        </div>
     </div>
  </div>
</div>








@stop