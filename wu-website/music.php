<!DOCTYPE html>

<html>

    <head>

        <script type="text/javascript" src="jQuery/jquery-2.1.1.min.js"></script>

        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />

        <link href="index.css" rel="stylesheet" />

        <script type="text/javascript" src="musicScript.js"></script>

        <script src="bootstrap/js/bootstrap.min.js"></script>

        <title>New Day New Song Music Upload</title>

    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-3 col-md-4 col-md-offset-3 col-lg-6 col-lg-offset-3 musicUploadForm">
        
                        <form role="form" action="addMusic.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="musicUploadInput">Upload your music</label>
                            <input type="file" class="form-control" id="musicFile" name="musicFile" />
                        </div>

                        <div class="form-group">
                            <label for="nameOfSongInput">Name of song:</label>
                            <input type="text" class="form-control" id="songName" name="songName" />
                        </div>

                        <div class="form-group">
                            <label for="genreTypeInput">Genre:</label>
                            <input type="text" class="form-control" id="genreType" name="genreType" />
                        </div>

                        <div class="form-group">
                            <label for="nameOfAlbumInput">Name of Album:</label>
                            <input type="text" class="form-control" id="albumName" name="albumName" />
                        </div>

                        <div class="form-group">
                            <label for="nameOfArtistInput">Name of Artist:</label>
                            <input type="text" class="form-control" id="artistName" name="artistName" />
                        </div>

                        <button type="submit" class="btn btn-default" value="submit" name="submit">Submit
                        </button>

                        </form>
                </div>
            </div>
        </div>

    </body>

</html>