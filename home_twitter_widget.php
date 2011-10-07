					<script src="http://widgets.twimg.com/j/2/widget.js"></script>
					<script>
					new TWTR.Widget({
					  version: 2,
					  type: 'search',
					  search: 'mynuvotv OR operationosmin OR modellatina',
					  interval: 3000,
					  width: 370,
					  height: 370,
					  theme: {
					    shell: {
					      background: '#ffffff',
					      color: '#1f1e1c'
					    },
					    tweets: {
					      background: '#ffffff',
					      color: '#1f1e1c',
					      links: '#c4122f'
					    }
					  },
					  features: {
					    scrollbar: true,
					    loop: true,
					    live: true,
					    hashtags: true,
					    timestamp: false,
					    avatars: true,
						toptweets: false,
					    behavior: 'default'
					  }
					}).render().start();
					</script>