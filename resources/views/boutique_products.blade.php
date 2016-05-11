@extends('layouts.default')



@section('content')
<div style="position:absolute; top:52px; z-index:-1">
 <div class="container-fluid">
     <div class="row">
         <div class="col-md-11 col-md-offset-1">
             <div class="panel panel-default display">
                <div class="panel-heading">Add Product</div>
                    <div class="panel-body">
                         <form id='Upload' class="form-horizontal" role="form" method="POST" action="/boutique/addproduct/{{$boutique->id}}" enctype="multipart/form-data">

                         {{--<form class="form-horizontal" role="form" method="POST" action="/boutique/addproduct/{{$boutique->id}}">--}}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <input type="hidden" name="user_id" value="{{ $user->id }}" />
                            <div class="form-group">
                                <label class="col-md-4 control-label">Product Pricing</label>
                                <div class="col-md-6">
                                   <div class="details">
                                   <p>All products sold through Eco-nomix will be participating in the multi-level bonus program commonly referred to as the '10-4 Good Buddy Program'.</p>
                                   <p>The 10-4 Good Buddy program pays out a total of 26% bonuses, plus an additional 4% is reserved for charitable contributions and selected programs that deserve funding.</p>
                                   <p>Eco-nomix will receive 10% profit on the sale, out of which credit card charges, bank charges for payroll system, accounting and maintenance of the website will be paid.</p>
                                   <p>You will be paid 60% of the Retail Price you set below.</p>
                                   <p>Payment for product will be made through the Eco-nomix payroll debit card.</p>
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
                                    <input type="text" class="form-control" name="product_name" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Short Description</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="description" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Long Description</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" name="display_description" value=""></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Retail Price</label>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="retail" value="" step="any">
                                </div>
                            </div>
                            <div class="form-group">
                               <label class="col-md-4 control-label">Shipping (if known)</label>
                               <div class="col-md-6">
                                   <input type="number" class="form-control" name="cost_shipping" value="" step="any">
                               </div>
                            </div>
                            <div class="form-group">
                               <label class="col-md-4 control-label">Weight (to calculate shipping cost)</label>
                               <div class="col-md-6">
                                   <input type="number" class="form-control" name="shipping_handling" value="" step="any">
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
                                   <input type="text" class="form-control" name="physical_description" value="" step="any">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">One of a Kind</label>
                                <div class="col-md-6">
                                    <select name="one_of_a_kind">
                                        <option value="0">NO</option>
                                        <option value="1">YES</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Save
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