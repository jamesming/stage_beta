	</div>	<!-- end #wrapper -->
	<div id="fb-root"></div>
	<script>
		window.fbAsyncInit = function() {
			FB.init({appId: <? echo $appId ?>, status: true, cookie: true, xfbml: true});
			FB.Canvas.setSize();
<? if ( $page == "pastport-social" ) { ?>
			initialize();
<? } ?>
		};
		(function() {
			var e = document.createElement('script'); e.async = true;
			e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
			document.getElementById('fb-root').appendChild(e);
		}());
	</script>
</body>
</html>