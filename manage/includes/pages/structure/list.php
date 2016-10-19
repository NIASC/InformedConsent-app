<div class="row-fluid panel-title">

	<div class="span6">
		<h4><?php echo $TRANSLATION['page_list']; ?></h4>
	</div>

	<div class="span6 text-right">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>&act=add" class="btn btn-info">+ <?php echo $TRANSLATION['new_page']; ?></a>
	</div>

</div>

<div id="sortable">
<?php echo build_sections_list($database_link, 0, $content_language) ?>
</ul>
</div>
<script type="text/javascript">
var sorter = new SectionSorter($("#sortable ul"));

$("#sortable ul").sortable({
	handle: ".handle",
	connectWith: "#sortable ul",
	placeholder: "sortable-placeholder",
	cursor: "move"
}).bind({
	'sortstart': function(event, ui) {
		if(!sorter.sortStarted()) {
			ui.item.addClass("sortable-item");
			ui.item.find(".sortable-actions").hide();
			$("#sortable ul").addClass("sortable-empty-place");
			sorter.startSort();
			sorter.onStart(event, ui);
		}
	},
	'sortstop': function(event, ui) {
		if(sorter.sortStarted()) {
			ui.item.removeClass("sortable-item");
			ui.item.find(".sortable-actions").show();
			$("#sortable ul").removeClass("sortable-empty-place");
			sorter.stopSort();
			sorter.onStop(event, ui);
		}
	}
});
</script>
