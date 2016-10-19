$(document).ready(function() {

	$('.datetimepicker').datetimepicker({
		dateFormat: 'yy-mm-dd',
		timeFormat: "HH:mm:ss"
	});

	$('textarea.editor_full').ckeditor({
		toolbar: [
			{ name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source', '-', 'Preview', 'Print', '-', 'Templates' ] },
			{ name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
			{ name: 'editing', groups: [ 'find', 'selection' ], items: [ 'Find', 'Replace', '-', 'SelectAll' ] },
			{ name: 'styles', items: [ 'Styles', 'Format', 'FontSize' ] },
			{ name: 'colors', items: [ 'TextColor', 'BGColor' ] },
			{ name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
			'/',
			{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat' ] },
			{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
			{ name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
			{ name: 'insert', items: [ 'Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe' ] }
]});

	$('textarea.editor_small').ckeditor({
		toolbar: [
			{ name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
			{ name: 'editing', groups: [ 'find', 'selection' ], items: [ 'Find', 'Replace', '-', 'SelectAll' ] },
			{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat' ] },
			{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
			{ name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
			{ name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] }
]});

	$('textarea.editor_full').removeClass('hidden_element');
	$('textarea.editor_small').removeClass('hidden_element');

	$('span.editor_loading').addClass('hidden_element');


	//

	$('.file-list-table input:radio').click(function() {

		if ($(this).prop('checked')) {

			$('.srcFile').val($(this).attr('filename'));
			$('.srcExt').val($(this).attr('fileext'));

		}

	});

	$('#type').change(function() {
		
		var type = $(this).val();
		$.getJSON("js/templates.json", function(data){
			
        var optionsArray = data.widget[type].templates;
		$('#style').html('');
		if(optionsArray === 1)
		$('#style_wrapper').addClass('hidden');
		else
		$('#style_wrapper').removeClass('hidden');

		$.each(optionsArray,function(index, element){
			$('#style').append('<li><input type="radio" name="style" value="'+index+'" id="style-'+index+'"/><label for="style-'+index+'"><i class="'+element.className+'"></i>'+element.description+'</label></li>');
			});
        });
	});

	$("#cache-cleaner").click(function(e) {
		e.preventDefault();
		var clear = false;
		xhttp = getXHR();
		xhttp.onreadystatechange = function() {
			if (xhttp.readyState !== XMLHttpRequest.DONE) {
				return;
			}
			if (xhttp.status !== 200) {
				return;
			}

			if(clear) {
				alert("folder cleared!");
				clear = false;
			} else {
				var response = JSON.parse(xhttp.responseText);
				if(response.size > 0) {
					clear = confirm("files: " + response.files + " size: " + (response.size / 1024).toFixed(0) + " kb. clear folder?");
				} else {
					alert('Cache folder is empty');
				}
				if(clear) {
					xhttp.open("POST", "ajax/image_uploader.php?folder", true);
					xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
					xhttp.send("clear=");
				}
			}
		};

		xhttp.open("GET", "ajax/image_uploader.php?folder=info", true);
		xhttp.send();
	});
});

var SectionSorter = function(root) {

	this.sortStarted = function() {
		return sortStartedFlag;
	}

	this.stopSort = function() {
		sortStartedFlag = false;
	}

	this.startSort = function() {
		sortStartedFlag = true;
	}

	this.onStart = function(event, ui) {
		startIndex = ui.item.index();
		startParent = ui.item.parent().attr("data-parent");
		return true;
	}

	this.onStop = function(ecent, ui) {
		if(!trySubmitSort(ui)) {
			cancelSort();
		}
		reset();
		return true;
	}

	var lang = $("select[name='language']").children(":selected").attr("value");
	var root = root;

	var startParent;
	var startIndex;

	var sortStartedFlag = false;

	function reset() {
		startParent = undefined;
		startIndex = undefined;
	}

	function cancelSort() {
		reset();
		root.sortable("cancel");
	}

	function trySubmitSort(ui) {
		var item = ui.item;

		if(item.index() === startIndex && item.parent().attr("data-parent") === startParent) {
			return false;
		}

		xhttp = getXHR();

		xhttp.open("GET", "ajax/section_sorter.php?" +
											"id=" + item.attr("data-id") +
											"&index=" + (item.index()) +
											"&parent=" + item.parent().attr("data-parent") +
											"&language=" + lang, false);
		xhttp.send();

		if(xhttp.status !== 200) {
			alert("Server Error");
			return false;
		}

		try {
			var response = JSON.parse(xhttp.responseText);

			if(response.status === "error") {
				alert(response.msg);
				return false;
			}
			else if(response.status === "ok") {
				return true;
			}
		} catch(ex) {
			alert("Invalid response format");
			return false;
		}

		return false;
	}
};

function getXHR() {
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xhttp=new XMLHttpRequest();
	} else
	{// code for IE6, IE5
		xhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	return xhttp;
}

function showResult(str, id, lang){

	if (str.length==0)
	  {
	  document.getElementById(id).innerHTML = '';
	  //return;
	  }

	if(str.length<3) return;

	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }

	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }

	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById(id).innerHTML=xmlhttp.responseText;
		}
	  }


	xmlhttp.open("GET","includes/pages/newspages/ajax.php?securekey=asdsa&keyword="+str+'&'+'lang='+lang+'&'+id,true);
	xmlhttp.send();

}

//remove unselected options
function removeOptions(selectbox) {

	var i;
	for(i=selectbox.options.length-1;i>=0;i--){
		if(selectbox.options[i].selected){selectbox.options[i].selected = 'selected';}
		else selectbox.remove(i);
		}
}



//remove clicked option
function remove_option(postName, id) {

	// from html
	element = document.getElementById('html'+id+'_'+postName);
	element.parentNode.removeChild(element);

	// from combo
	comboElement = document.getElementById('id'+id+'_'+postName);
	comboElement.parentNode.remove(comboElement.index);
}


//add clicked option
function add_option(postName, id){

	var title = document.getElementById('title'+id+'_'+postName).innerHTML;
	//add info in combo
	var selectbox = document.getElementById('post_'+postName);
	selectbox.options[selectbox.options.length] = new Option(title, id);
	selectbox.options[selectbox.options.length-1].selected = true;
	selectbox.options[selectbox.options.length-1].setAttribute("id","id"+id+'_'+postName);

	//add info visual
	document.getElementById('visible_' + postName).innerHTML += '<tr id="html'+id+'_'+postName+'"><td><span class="row_minus" onclick="remove_option(\''+postName+'\','+id+')"></span></td><td>'+title+'</td></tr>';
}

// jquery sortable rearrange fix
$.ui.sortable.prototype._rearrange = function (event, i, a, hardRefresh) {

	a ? a[0].appendChild(this.placeholder[0]) : (i.item[0].parentNode) ? i.item[0].parentNode.insertBefore(this.placeholder[0], (this.direction === "down" ? i.item[0] : i.item[0].nextSibling)) : i.item[0];
	this.counter = this.counter ? ++this.counter : 1;
	var counter = this.counter;

	this._delay(function () {
		if (counter === this.counter) {
			this.refreshPositions(!hardRefresh); //Precompute after each DOM insertion, NOT on mousemove
		}
	});

}
