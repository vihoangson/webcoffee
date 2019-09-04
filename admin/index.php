<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Page Title</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="../bower_components/summernote/dist/summernote-bs4.css" >
</head>
<body>
<form method="post" action="save.php">
    <progress></progress>
    <textarea class="summernote" name="content"></textarea>
    <button class="btn">aldkfj</button>
</form>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="../bower_components/summernote/dist/summernote.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.summernote').summernote({
            height: 300,
            tabsize: 2,
            followingToolbar: true,
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    alert(123);
                    sendFile(files[0], editor, welEditable);
                }
            }

        });
    });

    function sendFile(file, editor, welEditable) {
        data = new FormData();
        data.append("file", file);
        $.ajax({
            data: data,
            type: 'POST',
            xhr: function() {
                var myXhr = $.ajaxSettings.xhr();
                if (myXhr.upload) myXhr.upload.addEventListener('progress',progressHandlingFunction, false);
                return myXhr;
            },
            url: 'saveimg.php',
            cache: false,
            contentType: false,
            processData: false,
            success: function(url) {
                $('.summernote').summernote('insertImage',url, function ($image) {
                });
                //editor.insertImage(welEditable, url);
            }
        });
    }

    function progressHandlingFunction(e){
        if(e.lengthComputable){
            $('progress').attr({value:e.loaded, max:e.total});
            // reset progress on complete
            if (e.loaded == e.total) {
                $('progress').attr('value','0.0');
            }
        }
    }
</script>
</body>
</html>
