@extends('layouts.master')

@section('content')	

<div class= "container">
	<h1 id="mboardheader">Message</h1>
	<div class= 'mboard'>
		<table class="table table-striped">
			<tr class="mboardtablehead">
				<th>TITLE</th>
				<th>DATE</th>
				<th>MESSAGE</th>
			</tr>		
			<tr>
				<td>{{{ $post->title }}}</td>
				<td>{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A ') }}}</td>
				<td> {{{ $post->message }}}</td>
			</tr>							
		</table>
	</div>
</div>
	<hr>
	<div>
		{{Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'delete', 'id' => 'formDeletePost'))}}
		{{ Form::submit('Delete') }}
		{{Form::close()}}|
		
		<a class='links' href="{{{ action('PostsController@edit', $post->id)}}}">Edit Post</a> |
		
		<a class='links' href="{{{ action('PostsController@index')}}}">Return to Message Listing</a>
	</div>	
			
@stop
@section('bottom-script')

<script>
	$('#btnDeletePost').on('click', function (e){
		e.preventDefault();
		if(confirm('Are you sure you want to delete this post?')){
			$('#formDeletePost').submit();
		}
	});
</script>
<hr>
<div>
	    <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'reynablogdev'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    
</div>

@stop