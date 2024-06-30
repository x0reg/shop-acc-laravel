<!DOCTYPE html>
<html>

<head>
    <title>Rotate Image</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://cdn.sobekrepository.org/includes/jquery-rotate/2.2/jquery-rotate.min.js">
    </script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            position: relative;
            max-width: 100%;
            width: 550px;
            height: auto;
            margin: 20px auto;
        }

        #myImage {
            width: 100%;
            height: auto;
        }

        #spinButton {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            cursor: pointer;
            width: 20%;
            /* Adjust size as needed */
            transition: opacity 0.3s;
            /* Smooth transition for opacity */
        }

        #spinButton:hover {
            opacity: 0.5;
        }

        #spinButton.disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }
    </style>
</head>

<body>
    <div class="container">
        <img id="myImage" src="https://shopnambe.vn/upload/vongquay_kimcuong/image/35.png" alt="Circle Image"
            class="img-fluid">
        <a style="cursor: pointer" id="spinButton"><img src="https://lashgame.ngoquocdat.dev/images/spin-btn.png"
                alt="Spin Button" class="img-fluid"></a>
    </div>
</body>
<script>
    $(document).ready(function() {
        function rotateImage(angles, reward) {
            var angle = 0; // Đặt lại góc về 0
            angle += 1800 + angles; // 5 vòng = 5 * 360 độ + 90 độ
            $("#myImage").rotate({
                angle: 0,
                animateTo: angle,
                duration: 5000,
                callback: function() {
                    $("#spinButton").removeClass('disabled');
                    alert(reward)
                    console.log('Rotation complete!');
                }
            });
        }

        $("#spinButton").click(function() {
            var $button = $(this);
            if ($button.hasClass('disabled')) {
                return; // Không gửi yêu cầu AJAX nếu nút bị vô hiệu hóa
            }
            $button.addClass('disabled'); // Vô hiệu hóa nút
            $.ajax({
                url: '/random',
                type: 'GET',
                success: function(data) {
                    var angle = data.angle;
                    var reward = data.reward;
                    // alert("You won: " + reward);
                    console.log("You won: " + reward);
                    rotateImage(angle, reward);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                    $button.removeClass('disabled');
                }
            });
        });
    });
</script>

</html>
