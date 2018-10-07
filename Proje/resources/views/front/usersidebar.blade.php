<div id="sidebar" class="span3">
	<br>
	@if(Auth::check())
		<?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"?>{{Auth::user()->name}}
	<ul class="blocklist">
		<li><a href="{{url('/')}}/user/profil">User Profile</a></li>
		<li><a href="{{url('/')}}/sepetim">Sepetim</a></li>
		<li><a href="{{url('/')}}/siparisler">Siparislerim</a></li>
		<li><a href="{{url('/')}}/user/comments">User Comments</a></li>
		<li><a href="{{url('/')}}/user/favori">User Favori</a></li>
		<li><a href="{{url('/')}}/logout">Logout</a></li>
	</ul>
		@endif
</div>


