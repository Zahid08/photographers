$(function() {
    // Ckeditor standard
    $( 'textarea.ckeditor_standard' ).ckeditor({width:'100%', height: '100px', toolbar: [
		{ name: 'document', items: [ 'Source', '-', 'Preview', '-', 'Templates' ] },	
		[ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],
                [ 'NumberedList', 'BulletedList', 'Outdent', 'Indent' ],
                [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ],
                [ 'Styles', 'Format', 'Font', 'FontSize' ],
                [ 'TextColor', 'BGColor' ],
                [ 'CmsImageManager', 'CmsFileManager', 'Table', 'SpecialChar', 'HorizontalRule' ],
		{ name: 'basicstyles', items: [ 'Bold', 'Italic' ] },
                { name: 'tools', items: [ 'Maximize' ] }
	]});
});
