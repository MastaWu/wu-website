<!DOCTYPE html>

<html>

    <head>

        <script type="text/javascript" src="jQuery/jquery-2.1.1.min.js"></script>

        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />

        <link href="music.css" rel="stylesheet" />

        <script type="text/javascript" src="musicScript.js"></script>

        <script src="bootstrap/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    
        <script type="text/javascript">

            google.load('visualization', '1.0', {'packages':['corechart']});

            google.setOnLoadCallback(drawChart);


            

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ['Date', 'Scoreboard', 'Up 95', 'Route 64'],
                  ['11/5', 603, 405, 704],
                  ['11/6', 630, 468, 637],
                  ['11/7', 702, 706, 823],
                  ['11/8', 1038, 903, 714]
                ]);

                var options = {
                    title: 'Trending Music', titleTextStyle: { color: 'white', fontName: 'brandon-grotesque' },
                    legend: { textStyle: { color: 'white', fontName: 'brandon-grotesque' } },
                    backgroundColor: { fill: 'transparent', strokeWidth: 3 },
                    width: 500,
                    height: 300,
                    hAxis: { title: 'Date', textStyle: { color: 'white'}, titleTextStyle: { color: 'white', fontName: 'brandon-grotesque' } },
                    vAxis: { title: 'Upvotes', textStyle: { color: 'white' }, titleTextStyle: { color: 'white', fontName: 'brandon-grotesque' } }
                    
                };

                var chart = new google.visualization.LineChart(document.getElementById('trend_div'));

                chart.draw(data, options);
            }

            </script>

        <title>New Day New Song Music Upload</title>

    </head>

    <body>

        <div class="container">
            
            <div class="row logoRow">

                <div class="col-sm-6 col-sm-offset-4 col-md-6 col-md-offset-4 col-lg-6 col-lg-offset-4 logoStart margin-Top">
                <h2 id="name">New Day Alarm</h2>
                <img src="logo.png" class="logo"/>
                <h2 id="slogan">Your day is never the same, <br />why should your songs.</h2>
                </div>
            </div>


            <div class="row buttonRow">

                <div class="col-sm-12 col-sm-offset-2 col-md-12 col col-md-offset-2 col-lg-12 col-lg-offset-2 margin-Top">
                    <div class="btn-group">
                        <button type="button" value="button" class="btn btn-default btn-lg pull-left" id="uploadButton"><img id="uploadButtonImage" src="upload.png" /></button>
                        <button type="button" value="button" class="btn btn-default btn-lg pull-right" id="trendingButton"><img id="trendingButtonImage" src="trend.png" /></button>
                    </div>
                </div>
            </div>


            <div class="row uploadRow">

                <div class="col-sm-4 col-sm-offset-3 col-md-4 col-md-offset-3 col-lg-6 col-lg-offset-3 musicUploadForm uploadTopMargin">
                    <img src="s upload.png" id="sImg" style="display:block; margin:auto" />
                        <form role="form" action="addMusic.php" method="post" enctype="multipart/form-data" class="uploadForm" id="uploadForm">

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

                        <button type="submit" class="btn btn-default formSubmit" value="submit" name="submit">Submit
                        </button>

                        </form>
                </div>

            </div>

            <div class="trendingRow">

                <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 margin-Top" >

                    <div id="trend_div">

                    </div>
                    <div id="trend_table" style="width: 500px">
                        <table class="table">
                            <tr style="font-size: 14px">
                                <td><b>#</b></td>
                                <td><b>Song Name</b></td>
                                <td><b>Band Name</b></td>
                                <td><b>Genre</b></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Scoreboard</td>
                                <td>Football Kid</td>
                                <td>Techno</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Up 95</td>
                                <td>Highway Runners</td>
                                <td>Country</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Route 64</td>
                                <td>VA Road Block</td>
                                <td>Rock</td>
                            </tr>
                        </table>

                    </div>

                </div>

            </div>

            <div class="row musicRow">

                <div class="col-sm-4 col-sm-offset-3 col-md-4 col-md-offset-3 col-lg-6 col-lg-offset-3 uploadedResults">

                    UPLOADED

                </div>
            </div>
        </div>

    </body>

</html>