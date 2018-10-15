@extends('layouts.tib')


@section('content')
<div style="position:absolute; top:52px; z-index:-1">
<div style="width:100%">
    {{--<div class="pagecontainer"><img src="{{URL::to('/')}}/images/On-Line Accounting-small.jpg" ></div>--}}
<div style="z-index:-5; overflow-y:scroll; height: 100%; background-size:cover;
 background-attachment:fixed;  background-image:url('/images/pexels-photo-97079.jpeg');">

   <div class="skip">&nbsp;</div>
    <div class="trans row">
        <div class="col-md-8 col-md-offset-2">
            <div style="width:100%;">
                <div class="kinetic800">
                       TIB Foundation Member Agreement
                </div>
            </div>
            <div class="panel panel-default tibdisplay">

                <div class="panel-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group col-md-12 ">


                        By registering with TIBFoundation.com and using this website, each user agrees, understands, and warrants the following:
                        <br><br>
                        TIB Foundation is a for-profit website created for the purpose of selling Foundation memberships and delivering educational content
                        to our Members..
                        Access to TIBFoundation is generally open to the public, with the only limitation being to
                        individualized pages and educational materials that are accessible only through logging in.
                        <br><br>
                        By registering with TIBFoundation, each user agrees to view text and/or material that is or may be false,
                        defamatory, inaccurate, abusive, vulgar, hateful, harassing, obscene, profane, sexually oriented, threatening,
                        invasive of a person’s privacy, or otherwise objectionable.  In fact, "objectionable” is the default state of
                        all material on the internet, and each user of TIBFoundation.com (or .org) is expected to understand the same.  However, a
                        user may not post any text or material that violates any United States or California law, or the policies of TIBFoundation
                        as explained herein.  Each user also explicitly agrees not to post to TIBFoundation.com (or .org) any copyrighted, trademarked,
                        or otherwise protected material, unless the user owns the material, or the material is presented as “fair use” under
                        United States and/or California law.
                        <br><br>
                        TIBFoundation does not allow any type of solicitation, including but not limited to advertisements, junk mail,
                        directed mail, “spam”, chain letters, or pyramid schemes, Ponzi schemes, or “multi-level marketing” beyond the official
                        site functionality of TIBFoundation .com (or .org).
                        <br><br>
                        Each user understands and agrees that it is impossible for anyone associated with TIBFoundation to
                        confirm the validity or provenance of any content posted by users of the site.  No person associated with
                        TIBFoundation monitors or is responsible for any posted content.   No person associated with TIBFoundation
                        warrants the accuracy, completeness, or usefulness of any information presented.  To the contrary, it is more
                        likely that the information presented in each posting is inaccurate, incomplete, and/or useless.  The posted messages
                        express only the views of the author, and not necessary the views of any administrator or owner of TIBFoundation.
                        Anyone who feels that any posted content is objectionable or inaccurate is encouraged to notify an administrator,
                        but no response or corrective action should ever be expected.  Nevertheless, the administration and owners of
                        this website have the right to remove or modify any content posted to TIBFoundation.com (or .org) (including member profile
                        information), without notice or explanation.
                        <br><br>
                        Each user is solely responsible for the content of the user’s posted text and materials.  Furthermore, by using
                        TIBFoundation.com, each user agrees to indemnify, defend, and hold hairless the owners and administrators of this
                        website for any claim related to the user’s posted text or material.
                        <br><br>
                        The owners and administrators of TIGFoundation adhere to two written rules with respect to posted text and
                        material:  (1) no pornography: and (2) no overt racism.  These limited rules are intended to allow a very reasonable
                        method that the user may promote their products through TIGFoundation.com (or .org).  Any user that does not follow this basic
                        guideline may have their product descriptions edited or the products removed completely.
                        <br><br>
                        TIBFoundation does not use any type of advertising or tracking software.
                        <br><br>
                        By joining and using TIBFoundation.com (or .org), each user agrees, understands and warrants that, as with every use of
                        the internet, the User’s Anonymity cannot be protected.  To the contrary, Each user’s personally identifying
                        information is always viewable by the administrators and owners of TIB Foundation.  The owners of TIBFoundation.com (or .org),
                        also reserve the right to reveal the user’s identity (or any other related information collected herein) as required by law.
                        <br><br>
                        TIBFoundation.com shall maintain a money-back policy for all of its physical products less a reasonable restocking fee.
                        Vendors selling products through TIBFoundation.com shall also be subject to such.  Any customized products created for
                        the user such as business cards are exempt from a return policy.
                        <br><br>
                        Members users can request that their benefits be cancelled at any time, without cost, through the tibfoundation.com website.
                        <br><br>
                        This Registration Agreement shall be governed by, and construed and enforced in accordance with the laws of the
                        United States without regard to conflicts of law, principles or provisions.
                        

                        </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
@endsection