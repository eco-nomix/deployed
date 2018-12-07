@extends('...layouts.default')


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
                       KineticGold Member Agreement
                </div>
            </div>
            <div class="panel panel-default display">

                <div class="panel-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group col-md-12 ">


                        By registering with KineticGold.org and using this website, each user agrees, understands, and warrants the following:
                        <br><br>
                        KineticGold is a for-profit website created for the purpose of selling memberships and products.
                        Access to KineticGold.org is generally open to the public, with the only limitation being to
                        individualized pages that are accessible only through logging in.
                        <br><br>
                        By registering with KineticGold.org, each user agrees to view text and/or material that is or may be false,
                        defamatory, inaccurate, abusive, vulgar, hateful, harassing, obscene, profane, sexually oriented, threatening,
                        invasive of a person’s privacy, or otherwise objectionable.  In fact, "objectionable” is the default state of
                        all material on the internet, and each user of KineticGold.org is expected to understand the same.  However, a
                        user may not post any text or material that violates any United States or Tennessee law, or the policies of KineticGold.org
                        as explained herein.  Each user also explicitly agrees not to post to KineticGold.org any copyrighted, trademarked,
                        or otherwise protected material, unless the user owns the material, or the material is presented as “fair use” under
                        United States and/or Tennessee law.
                        <br><br>
                        KineticGold.org does not allow any type of solicitation, including but not limited to advertisements, junk mail,
                        directed mail, “spam”, chain letters, or pyramid schemes, Ponzi schemes, or “multi-level marketing” beyond the official
                        site functionality of KineticGold.org.
                        <br><br>
                        Each user understands and agrees that it is impossible for anyone associated with KineticGold.org to
                        confirm the validity or provenance of any content posted by users of the site.  No person associated with
                        KineticGold.org monitors or is responsible for the posted content.   No person associated with KineticGold.org
                        warrants the accuracy, completeness, or usefulness of any information presented.  To the contrary, it is more
                        likely that the information presented in each posting is inaccurate, incomplete, and/or useless.  The posted messages
                        express only the views of the author, and not necessary the views of any administrator or owner of KineticGold.org.
                        Anyone who feels that any posted content is objectionable or inaccurate is encourage to notify an administrator,
                        but not response or corrective action should ever be expected.  Nevertheless, the administration and owners of
                        this website have the right to remove or modify any content posted to KineticGold.org (including member profile
                        information), without notice or explanation.
                        <br><br>
                        Each user is solely responsible for the content of the user’s posted text and materials.  Furthermore, by using
                        KineticGold.org, each user agrees to indemnify, defend, and hold hairless the owners and administrators of this
                        website for any claim related to the user’s posted text or material.
                        <br><br>
                        The owners and administrators of KineticGold.org adhere to two written rules with respect to posted text and
                        material:  (1) no pornography: and (2) no overt racism.  These limited rules are intended to allow a very reasonable
                        method that the user may promote their products through KineticGold.org.  Any user that does not follow this basic
                        guideline may have their product descriptions edited or the products removed completely.
                        <br><br>
                        Economics does not use any type of advertising or tracking software.
                        <br><br>
                        By joining and using KineticGold.org, each user agrees, understands and warrants that, as with every use of
                        the internet, the User’s Anonymity cannot be protected.  To the contrary, Each user’s personally identifying
                        information is always viewable by the administrators and owners of KineticGold.org.  The owners of KineticGold.org,
                        also reserve the right to reveal the user’s identity (or any other related information collected herein) as required by law.
                        <br><br>
                        KineticGold.org shall maintain a money-back policy for all of its products less a reasonable restocking fee.
                        Vendors selling products through KineticGold.org shall also be subject to such.  Any customized products created for
                        the user such as business cards and debit-cards are exempt from a return policy.
                        <br><br>
                        Registered users can request that their benefits be cancelled at any time, without cost, through the KineticGold.org website.
                        <br><br>
                        This Registration Agreement shall be governed by, and construed and enforced in accordance with the laws of the
                        country of Nevis without regard to conflicts of law, principles or provisions.
                        

                        </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
@endsection