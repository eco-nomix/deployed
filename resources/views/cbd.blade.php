@extends('layouts.cbd')


@section('content')
<style>
h1{
    font-size:5.7vw;
}
h2{
    font-size:4.0vw;
}
h3{
    font-size:3.2vw;
}
h4{
    font-size:2.5vw;
}
p{
    font-size:3.5vw;
}

div{
    width:100%;
    background: #ccc;
    text-align: justify;

}

</style>
<div style="text-align:center; top:52px; border:1px solid red;">
    <h1>CBD Care Group</h1>

</div>

<div style="position:absolute;top:calc(100px+10vw); border:1px solid blue;">
    <div  style="float: right; width: 20%;  ">
        <img id="img1" src="../images/fchamgang 1.jpeg" style="width:100%"  />
     </div>
     <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent magna tortor, tincidunt ac tristique sit amet, condimentum ut erat. Mauris sem mi, ultrices et hendrerit vitae, hendrerit non tortor. Aliquam erat volutpat. Morbi eget leo lorem, ut placerat nisl. Aenean auctor volutpat condimentum. Morbi adipiscing leo et felis faucibus suscipit nec at odio. Pellentesque convallis turpis non sapien facilisis quis volutpat magna venenatis. Etiam nisi metus, imperdiet vitae lobortis sit amet, pharetra ut leo.
     </p>


</div>

{{--<div style="z-index:2; width:100%;background: #ccc; padding: 10px; text-align: justify; font-size:14px;">--}}
    {{--<div  style="float: left; margin-top: 10px; background-color: #ff0000; width: 20%;  margin: 10px;">--}}
     {{--<img id="img2" src="../images/fchamgang 2.jpeg" style="width:100%"  />--}}
     {{--</div>--}}
     {{--<p>--}}
            {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent magna tortor, tincidunt ac tristique sit amet, condimentum ut erat. Mauris sem mi, ultrices et hendrerit vitae, hendrerit non tortor. Aliquam erat volutpat. Morbi eget leo lorem, ut placerat nisl. Aenean auctor volutpat condimentum. Morbi adipiscing leo et felis faucibus suscipit nec at odio. Pellentesque convallis turpis non sapien facilisis quis volutpat magna venenatis. Etiam nisi metus, imperdiet vitae lobortis sit amet, pharetra ut leo.--}}
     {{--</p>--}}
     {{--<p>--}}
            {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent magna tortor, tincidunt ac tristique sit amet, condimentum ut erat. Mauris sem mi, ultrices et hendrerit vitae, hendrerit non tortor. Aliquam erat volutpat. Morbi eget leo lorem, ut placerat nisl. Aenean auctor volutpat condimentum. Morbi adipiscing leo et felis faucibus suscipit nec at odio. Pellentesque convallis turpis non sapien facilisis quis volutpat magna venenatis. Etiam nisi metus, imperdiet vitae lobortis sit amet, pharetra ut leo.--}}
     {{--</p>--}}
     {{--<p>--}}
            {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent magna tortor, tincidunt ac tristique sit amet, condimentum ut erat. Mauris sem mi, ultrices et hendrerit vitae, hendrerit non tortor. Aliquam erat volutpat. Morbi eget leo lorem, ut placerat nisl. Aenean auctor volutpat condimentum. Morbi adipiscing leo et felis faucibus suscipit nec at odio. Pellentesque convallis turpis non sapien facilisis quis volutpat magna venenatis. Etiam nisi metus, imperdiet vitae lobortis sit amet, pharetra ut leo.--}}
     {{--</p>--}}
{{--</div>--}}
{{--<div style="z-index:-1; width:100%;background: #bbb; padding: 10px; text-align: justify; font-size:14px;">--}}
     {{--<img id="img2" src="../images/fchamgang 2.jpeg"  style="float: left; margin-top: 10px; background-color: #ff0000; width: 20%;  margin: 10px;" />--}}
     {{--<p>--}}
            {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent magna tortor, tincidunt ac tristique sit amet, condimentum ut erat. Mauris sem mi, ultrices et hendrerit vitae, hendrerit non tortor. Aliquam erat volutpat. Morbi eget leo lorem, ut placerat nisl. Aenean auctor volutpat condimentum. Morbi adipiscing leo et felis faucibus suscipit nec at odio. Pellentesque convallis turpis non sapien facilisis quis volutpat magna venenatis. Etiam nisi metus, imperdiet vitae lobortis sit amet, pharetra ut leo.--}}
     {{--</p>--}}
     {{--<p>--}}
            {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent magna tortor, tincidunt ac tristique sit amet, condimentum ut erat. Mauris sem mi, ultrices et hendrerit vitae, hendrerit non tortor. Aliquam erat volutpat. Morbi eget leo lorem, ut placerat nisl. Aenean auctor volutpat condimentum. Morbi adipiscing leo et felis faucibus suscipit nec at odio. Pellentesque convallis turpis non sapien facilisis quis volutpat magna venenatis. Etiam nisi metus, imperdiet vitae lobortis sit amet, pharetra ut leo.--}}
     {{--</p>--}}
     {{--<p>--}}
            {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent magna tortor, tincidunt ac tristique sit amet, condimentum ut erat. Mauris sem mi, ultrices et hendrerit vitae, hendrerit non tortor. Aliquam erat volutpat. Morbi eget leo lorem, ut placerat nisl. Aenean auctor volutpat condimentum. Morbi adipiscing leo et felis faucibus suscipit nec at odio. Pellentesque convallis turpis non sapien facilisis quis volutpat magna venenatis. Etiam nisi metus, imperdiet vitae lobortis sit amet, pharetra ut leo.--}}
     {{--</p>--}}
{{--</div>--}}
        {{--<table width="560" height="750" border="1">--}}
            {{--<tr>--}}


                {{--<td width="280px" height="375" style="vertical-align: top;">--}}
                {{--<img id="img1" src="../images/cbd 1.jpeg" width="280" height="375"  />--}}
                {{--</td>--}}


                 {{--<td width="280px" height="375" style="vertical-align: top;">--}}
                  {{--<img id="img2" src="../images/cbd 2.jpeg" width="280" height="375" />--}}

                 {{--</td>--}}

            {{--</tr>--}}

             {{--<tr>--}}


                {{--<td width="280px" height="375" style="vertical-align: top;">--}}
                {{--<img id="img3" src="../images/cbd 3.jpeg" width="280" height="375"  />--}}
                {{--</td>--}}


                 {{--<td width="280px" height="375" style="vertical-align: top;">--}}
                  {{--<img id="img4" src="../images/cbd 4.jpeg" width="280" height="375" />--}}

                 {{--</td>--}}


            {{--</tr>--}}
        {{--</table>--}}






@endsection