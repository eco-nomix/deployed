@extends('layouts.default')


@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default display">
                <div class="panel-heading">Business Plan</div>
                <div class="panel-body">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group col-md-12 ">
                        The Goal of Eco-nomix is to provide the products, training and service that will enable individuals, families and communities to become more prepared for the tough times ahead of us.  We anticipate major changes in society around us, and most of what we see concerns us.
                    </div>
                    <div class="form-group col-md-12 ">
                        Our present economic situation is a house of cards that has been stacked carefully of the last 100 years, but with removal of a few essential cards, the whole situation could come crashing down.  If it does, life as we know it, especially in the United States will change and it could change literally overnight.
                    </div>
                    <div class="form-group col-md-12 ">
                        The economic down-turn that could result would be radically different then anything experienced in the last century including the great depression, not necessary worse, but very different.  During the Great Depression, much of the population was tied to the small farm, they may have been broke, but they still produced food for themselves and others.  Today it is much different.
                    </div>
                    <div class="form-group col-md-12 ">
                        If the same type of changes took place today, it would have much greater effect as few have the skills necessary to support themselves or their families.
                    </div>
                    <div class="form-group col-md-12 ">
                        There is still time to prepare and make a major difference in how the future plays out for your family.
                    </div>
                    <div class="form-group col-md-12 ">

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
@endsection