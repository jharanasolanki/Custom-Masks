<div id="html-content-holder" style="background-color: #F0F0F1; color: #00cc65; width: 500px;
        padding-left: 25px; padding-top: 10px;">
        <strong>Codepedia.info</strong><hr />
        <h2 style="color: #3e4b51;">
            Html to canvas, and canvas to proper image
        </h2>
        <p style="color: #3e4b51;">
            <b>Codepedia.info</b> is a programming blog. Tutorials focused on Programming ASP.Net,
            C#, jQuery, AngularJs, Gridview, MVC, Ajax, Javascript, XML, MS SQL-Server, NodeJs,
            Web Design, Software</p>
        <p style="color: #3e4b51;">
            <b>html2canvas</b> script allows you to take "screenshots" of webpages or parts
            of it, directly on the users browser. The screenshot is based on the DOM and as
            such may not be 100% accurate to the real representation as it does not make an
            actual screenshot, but builds the screenshot based on the information available
            on the page.
        </p>
    </div>
    <input id="btn-Preview-Image" type="button" value="Preview" />
    <a id="btn-Convert-Html2Image" href="#">Download</a>
    <br />
    <h3>Preview :</h3>
    <div id="previewImage">
    </div>
</div>
<script src="Scripts/jquer_latest_2.11_.min.js" type="text/javascript"></script>
<script src="Scripts/html2canvas.js" type="text/javascript"></script> 
<script>
var element = $("#html-content-holder"); // global variable
var getCanvas; // global variable

    $("#btn-Preview-Image").on('click', function () {
         html2canvas(element, {
         onrendered: function (canvas) {
                $("#previewImage").append(canvas);
                getCanvas = canvas;
             }
         });
    });
    $("#btn-Convert-Html2Image").on('click', function () {
    var imgageData = getCanvas.toDataURL("image/png");
    // Now browser starts downloading it instead of just showing it
    var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
    $("#btn-Convert-Html2Image").attr("download", "your_pic_name.png").attr("href", newData);
});
</script>