$(function() {
    $(".video-preview-btn").click(function() {
        $("#videoPreviewModal .modal-title").text($(this).data("video-title"));
        var videoSRC = $(this).data("file-name");

        if ($(this).data("video-value") == "free") {
            $("#videoPreviewModal .modal-body").append(
                '<iframe width="100%" height="350" src=""></iframe>'
            );
            $("#videoPreviewModal").modal("toggle");

            var videoSRCauto = videoSRC + "?autoplay=1";

            $("#videoPreviewModal iframe").attr("src", videoSRCauto);
            $("#videoPreviewModal button.close,button.footer-close").click(
                function() {
                    $("#videoPreviewModal iframe").attr("src", videoSRC);
                }
            );
        } else {
            $("#videoPreviewModal .modal-body").append(
                '<video width="100%" height="350" src="" controls>Your browser does not support HTML5 video.</video>'
            );

            $("#videoPreviewModal video").attr("src", videoSRC);
            $("#videoPreviewModal").modal("toggle");
        }
    });

    $(".video-delete-btn").click(function() {
        $("#deleteConfirmModal #delete-form").attr(
            "action",
            $(this).data("delete-url")
        );
        $("#deleteConfirmModal").modal("toggle");
    });

    $("#videoPreviewModal").on("hidden.bs.modal", function() {
        $("#videoPreviewModal .modal-title").empty();
        $("#videoPreviewModal .modal-body").empty();
    });
});
