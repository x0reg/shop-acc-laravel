<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lazy Load Images on Scroll Example</title>
    <style>
        img.lazy {
            width: 700px;
            height: 467px;
            display: block;

            /* optional way, set loading as background */
            background-image: url('https://upload.wikimedia.org/wikipedia/commons/c/c7/Loading_2.gif');
            background-repeat: no-repeat;
            background-position: 50% 50%;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- cdnjs -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js">
    </script>
    <script>
        // $(document).ready(function() {
        //     $('.lazy').Lazy({
        //         // your configuration goes here
        //         scrollDirection: 'vertical',
        //         effect: 'fadeIn',
        //         visibleOnly: true,
        //         onError: function(element) {
        //             console.log('error loading ' + element.data('src'));
        //         }
        //     });

        // })
        $(function() {

            var lazy = $('.lazy').Lazy({
                chainable: false,
                placeholder: "https://upload.wikimedia.org/wikipedia/commons/c/c7/Loading_2.gif",
                scrollDirection: 'vertical',
                combined: true,
                delay: 5000,
                visibleOnly: true,
                asyncLoader: function(element) {
                    setTimeout(function() {
                        element.load()
                    }, 5000);
                },
                onError: function(element) {
                    console.log('error loading ' + element.data('src'));
                },
                onFinishedAll: function() {
                    if (!this.config("autoDestroy"))
                        this.destroy();
                }
            });
            var attributeName = lazy.config('attribute'); // get
            lazy.config('effect', 'show'); // set


        });
    </script>
</head>

<body>
    <div class="container">



        <h1>Lazy Load Images Example</h1>

        <div class="lazy" data-loader="asyncLoader">
            <h2>TEST</h2>
        </div>
        <img class="lazy"
            data-src="https://images2.thanhnien.vn/528068263637045248/2024/1/25/e093e9cfc9027d6a142358d24d2ee350-65a11ac2af785880-17061562929701875684912.jpg" />
        <img class="lazy"
            data-src="https://www.vietnamworks.com/hrinsider/wp-content/uploads/2023/12/anh-dep-thien-nhien-3d-003.jpg" />
        <img class="lazy"
            data-src="https://media-cdn-v2.laodong.vn/storage/newsportal/2023/8/26/1233821/Giai-Nhi-1--Nang-Tre.jpg" />
        <img class="lazy" data-src="https://cdn.pixabay.com/photo/2023/08/13/00/09/woman-8186582_1280.jpg" />
        <img class="lazy" data-src="https://bold.vn/wp-content/uploads/2019/05/bold-academy-5.jpg" />
        <img class="lazy" data-src="images/6.jpg" />
        <img class="lazy" data-src="images/7.jpg" />
        <img class="lazy" data-src="images/8.jpg" />
        <img class="lazy"
            data-src="https://images2.thanhnien.vn/528068263637045248/2024/1/25/e093e9cfc9027d6a142358d24d2ee350-65a11ac2af785880-17061562929701875684912.jpg" />
        <img class="lazy"
            data-src="https://images2.thanhnien.vn/528068263637045248/2024/1/25/e093e9cfc9027d6a142358d24d2ee350-65a11ac2af785880-17061562929701875684912.jpg" />
    </div>

</body>

</html>
