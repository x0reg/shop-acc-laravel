<!DOCTYPE html>
<html>

<head>
    <title>Rotate Image</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://cdn.sobekrepository.org/includes/jquery-rotate/2.2/jquery-rotate.min.js">
    </script>
</head>

<body>
    <img id="myImage" src="https://shopnambe.vn/upload/vongquay_kimcuong/image/35.png" width="350px" height="350px"
        alt="Circle Image" style="display: block; margin: 20px auto;">
    <button id="rotateButton" style="display: block; margin: 20px auto;">Rotate Image</button>
</body>
<script>
    $(document).ready(function() {
        function rotateImage() {
            var angle = 0; // Đặt lại góc về 0
            angle += 1800 + 90; // 5 vòng = 5 * 360 độ + 90 độ
            $("#myImage").rotate({
                angle: 0,
                animateTo: angle,
                duration: 5000, // thời gian quay trong 5 giây
                callback: function() {
                    alert($(this).getRotateAngle());
                    console.log('Rotation complete!');
                }
            });
        }

        $("#rotateButton").click(rotateImage);
    });
</script>

</html>
