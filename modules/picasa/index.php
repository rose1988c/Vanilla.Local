<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript">
        var scriptLoader = {
            _loadScript: function (url, callback) {
                var head = document.getElementsByTagName('head')[0];
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.src = url;
                if (callback) {
                    script.onreadystatechange = function () {
                        if (this.readyState == 'loaded') callback();
                    }
                    script.onload = callback;
                }
                head.appendChild(script);
            },
 
            load: function (items, iteration) {
                if (!iteration) iteration = 0;
                if (items[iteration]) {
                    scriptLoader._loadScript(
                        items[iteration],
                        function () {
                            scriptLoader.load(items, iteration+1);
                        }
                    )
                }
            }
        }
        </script>
        <script type="text/javascript" src="1.js"></script>
 
        <style>
            #picasaGallery {
                width: 400px;
            }
                .picasaGalleryItem {
                    border: 1px solid silver;
                    margin: 5px;
                    padding: 2px;
                    float: left;
                }
        </style>
    </head>
 
    <body>
        <div id="picasaGallery"></div>
        <script type="text/javascript">
            picasa.load({
                containerId: 'picasaGallery',
                userName: 'sergey.brin',
                albumName: 'AlcedoHighlights',
                imageSize: 104
            })
        </script>
    </body>
</html>