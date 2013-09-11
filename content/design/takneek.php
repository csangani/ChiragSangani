<script>
    var resizeFunction = function() {
        $('#ContentFrame').height(Math.floor(Math.floor($(window).innerHeight()) - Math.ceil($('#CS5-HeaderWrapper').outerHeight() + $('#CS5-Footer').outerHeight()))-5);
        $('#CS5-HeaderSpace').css('padding-top', $('#CS5-HeaderWrapper').outerHeight() + 'px');
    };
    $(document).ready(resizeFunction);
    $(window).resize(resizeFunction);
</script>
<iframe id="ContentFrame" src="<?= $assetRoot ?>websites/takneek/" style="width:100%;border:0;padding:0;margin:0"></iframe>