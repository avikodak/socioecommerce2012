<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
    </head>
    <body>
        <form enctype="multipart/form-data" action="uploadUtil.php" method="POST">
            <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
            Choose a file to upload: <input name="uploadedfile" type="file" /><br />
            <div><button>Add one more file</button></div>
            <input type="submit" value="Upload File" />
        </form>
    </body>
</html>
