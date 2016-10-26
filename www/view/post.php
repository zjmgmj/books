<?php
include ("/header.php");
?>
<script>
	var editor;
	KindEditor.ready(function(K) {
		editor = K.create('textarea[name="post"]', {
			allowFileManager: true
		});
		K('input[name=getHtml]').click(function(e) {
			alert(editor.html());
		});
		K('input[name=isEmpty]').click(function(e) {
			alert(editor.isEmpty());
		});
		K('input[name=getText]').click(function(e) {
			alert(editor.text());
		});
		K('input[name=selectedHtml]').click(function(e) {
			alert(editor.selectedHtml());
		});
		K('input[name=setHtml]').click(function(e) {
			editor.html('<h3>Hello KindEditor</h3>');
		});
		K('input[name=setText]').click(function(e) {
			editor.text('<h3>Hello KindEditor</h3>');
		});
		K('input[name=insertHtml]').click(function(e) {
			editor.insertHtml('<strong>插入HTML</strong>');
		});
		K('input[name=appendHtml]').click(function(e) {
			editor.appendHtml('<strong>添加HTML</strong>');
		});
		K('input[name=clear]').click(function(e) {
			editor.html('');
		});
	});
</script>
<div class="post-content" id="post">
	<form method="post">
		标题：<br />
		<input type="text" name="title" class="post-title" /><br />
		分类：
		<select name="tag1" value="javascript">
			<option value="javascript" v-for="class in classification">javascript</option>
			<option value="HTML" >HTML</option>
			<option value="CSS" >CSS</option>
			<option value="Node">Node</option>
			<option value="Mongodb" >Mongodb</option>
		</select><br />
		正文：
		<br />
		<textarea name="post" class="post-text"></textarea><br />
		<span><% if (success) { %><%= success %><% } %></span>
		<button type="submit" class="button-1">发表</button>
	</form>
	<a href="/admin/upload" target="_blank">文件上传</a>

</div>

</body>

</html>