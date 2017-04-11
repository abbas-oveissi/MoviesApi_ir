<!DOCTYPE html>
<html>
<body>

<form action="/moviesapi-laravel/api/v1/movies/multi" method="post" enctype="multipart/form-data">

    <input type="text" name="title" value="Mickey"><br>
    <input type="text" name="year" value="13a70"><br>
    <input type="text" name="country" value="iran"><br>
    <input type="text" name="imdb_id" value="1370"><br>


    <input type="file" name="poster" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>