@extends('layouts.default')



@section('content')
<div style="position:absolute; top:52px; z-index:-1">
    <div style="width:100%">
    {{--<div class="pagecontainer"><img src="{{URL::to('/')}}/images/On-Line Accounting-small.jpg" ></div>--}}
        <div style="z-index:-5; overflow-y:scroll; height: 100%; background-size:cover; background-attachment:fixed;  background-image:url('/images/denmark.jpeg');">
            <div class="skip">&nbsp;</div>
            <div class="trans row">
            <div class="col-md-8 col-md-offset-2">
                <div style="width:100%;">
                    <div class="kinetic600">
                        Auto-Ship Policy
                    </div>
                </div>
                <div style="width:100%;" class="panel panel-default display">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group col-md-12 ">

                             <ol type="A">
                             <li>KineticGoldld offers a one hundred percent (100%) thirty-day money back guarantee for all non customized products.</li>
                             <li>Any product paid for with a credit or debit card, the returned amount shall be credited to that same Card.</li>
                             <li>Any product paid for with KineticGold Account will be credited back to the same account.  </li>
                             <li>With respect to return of Sales, KineticGold offers various refund opportunities depending on the product
                                 or service purchased.  Shipping and handling charges incurred will not be refunded.</li>
                             <li>Customized products (such as business cards) may only be returned if the customized
                                 information (name, address, etc) is other than as ordered. </li>
                             <li>Upon cancellation of the Member Agreement, the Member may return all generic sales aids
                                 purchased within one (1) year from the date of cancellation for a refund if he or she is
                                 unable to sell or use the merchandise. A Member may only return sales aids he or she personally
                                 purchased from the Company under his or her Member Identification Number, and which are in
                                 Resalable condition. Any custom orders of printed sales aids (i.e. business cards, brochures, etc.)
                                 whereon the Member’s contact information is embedded or hard printed, or has been added by
                                 the Member, are not able to be returned in resalable condition thus are nonrefundable.  KineticGold’s
                                 receipt of the products and sales aids, the Member will be reimbursed ninety percent (90%) of the
                                 net cost of the original purchase price(s), less shipping and handling charges. If the purchases
                                 were made through a credit card, the refund will be credited back to the same credit card account.
                                 The Company shall deduct from the reimbursement paid to the Member any incentives received by the Member
                                 which were associated with the merchandise that is returned.</li>
                             <li>All returns, whether by a Customer, or Member, must be made as follows:
                                    <ol type="I">
                                        <li>Obtain Return Merchandise Authorization (KineticGold.org);</li>
                                        <li>Ship items to the address of KineticGold Customer service when you are given your RMA.</li>
                                        <li>Provide a copy of the invoice with the returned products or service. Such invoice
                                        must reference the RMA and include the reason for the return.</li>
                                        <li>Ship back product in manufacturer’s box exactly as it was delivered.</li>
                                    </ol></li>
                                <li>The return of $500 or more of products accompanied by a request for a refund within a calendar year,
                                by a Member, may constitute grounds for involuntary termination.</li>
                            </ol>

                        </div>

                         <div class="form-group col-md-12 ">
                         </div>

                         <div class="form-group col-md-12 ">
                         </div>
                </div>
            </div>
            <div class="skip">&nbsp;</div>
        </div>
    </div>
</div>
</div>
@endsection