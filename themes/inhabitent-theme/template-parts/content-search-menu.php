
<form method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<label class="search-label">
			<input type="search" class="search-field" placeholder="Type and hit enter..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" autofocus="autofocus" title="Search for:" />
		</label>
		
	</fieldset>
</form>