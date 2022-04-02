<!DOCTYPE html>
<html>

<?php
       function create_slug($string){
        $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
        return $slug;
     }
     echo create_slug('HELLO EVEYRBS SHSDISD');
?>

<!-- <head>
    <meta charset="utf-8">
    <title>CKEditor</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
</head>

<body>
    <div id="editor">This is some sample content.</div>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
</body> -->

</html>