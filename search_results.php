<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippets/header.php @>

	<div class="container">
		<div class="row">
			<div id="title" class="col-md-12">
				<h1>Search results for '@{ ?search }'</h1>
            </div>
        </div>
        <div class="row">
            <@ newPagelist { 
                excludeHidden: false,
                search: @{ ?search },
                sort: ':basename asc',
                limit: 10,
                page: @{ ?page | def (1) }
            } @>
            <@ if @{ :pagelistCount } > 0 @>
                <ul>
                <@ foreach in pagelist @>
                    <@ if @{ :current } @>
                        <@ set { %top_level: @{ url } } @>
                    <@ end @>
                    <li>
                        <a title="@{ title }" href="@{ url }">@{ title }</a>
                        <p>@{ text  | markdown | shorten (100) }</p>
                    </li>
                <@ end @>
                </ul>
            <@ else @>
                <h2>No results found</h2>
            <@ end @>
        </div>
	</div>

<@ snippets/footer.php @>
