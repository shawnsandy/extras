<h3 class="text-center">
  {{ $title or "Connect " }}
</h3>
<hr/>
<p class="text-center">

@if( in_array("github", $providers) )

    <a href="/extras/github/auth" class="btn btn-default btn-lg">Github</a>

    @endif




@if(in_array("linkedin", $providers) )

    <a href="/extras/linkedin/auth " class="btn btn-default btn-lg">LinkedIn</a>

    @endif


@if(in_array("facebook", $providers ) )

    <a href="/extras/facebook/auth " class="btn btn-default btn-lg">Facebook</a>

@endif


@if(in_array("twitter",$providers ) )

    <a href="/extras/twitter/auth" class="btn btn-default btn-lg">Twitter</a>

    @endif

</p>
