<div  id="books">
	<ul class="row book-content-list" v-for="content in books">
		<a :href="content.url">
			<li class="col-md-2 col-sm-2 "><img :src="content.img"  class="img"/></li>
			<li class="col-md-10 col-sm-10 ">
				<h5 class="title">{{content.name}}</h5>
				<p>{{content.dsc}}</p>
			</li>
		</a>
	</ul>
</div>