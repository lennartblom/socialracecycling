
<script src="http://localhost/socialracecycling/js/tinymce/tinymce.min.js"></script>
<!--<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    theme: "modern",
    plugins: [
        "advlist  emoticons autolink lists link charmap preview hr anchor pagebreak"
    ],
    toolbar1: "insertfile undo redo  | bold italic | bullist numlist outdent indent",
    toolbar2: "styleselect table"
    
});
</script>-->

<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    theme: "modern",
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify  ",
    toolbar2: "bullist numlist | indent outdent | forecolor backcolor emoticons | link | preview",
    image_advtab: true,
    templates: [
        {title: 'Test template 1', content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
    ],
});
</script>