$(function() {
    $(".video-preview-btn").click(function() {
        $("#videoPreviewModal .modal-title").text($(this).data("video-title"));
        var videoSRC = $(this).data("file-name");

        if ($(this).data("video-value") == "free") {
            var videoPlayer = videojs("video-player", {
                controls: true,
                autoplay: false,
                preload: "auto",
                fluid: true,
                techOrder: ["youtube"],
                sources: [{ type: "video/youtube", src: videoSRC }],
                youtube: { iv_load_policy: 1 }
            });
            videoPlayer.src(videoSRC);
        } else {
            var videoPlayer = videojs("video-player", {
                controls: true,
                autoplay: false,
                preload: "auto",
                fluid: true
            });
            videoPlayer.src(videoSRC);
        }
        $("#videoPreviewModal").modal("toggle");
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
        videojs("video-player").dispose();
        $("#videoPreviewModal .modal-body").append(
            '<video id="video-player" class="video-js vjs-default-skin vjs-big-play-centered">Your browser does not support HTML5 video.</video>'
        );
    });

    $("#add-to-course-btn").click(function() {
        var selectedVideoIds = [];

        $(".video-add-checkbox").each(function(i, element) {
            if ($(element).prop("checked")) {
                selectedVideoIds.push($(element).val());
            }
        });

        if (selectedVideoIds.length > 0) {
            $("#addVideosToModuleModal input[name='selected_video_ids']").val(
                JSON.stringify(selectedVideoIds)
            );
            $("#addVideosToModuleModal").modal("toggle");
        } else {
            toastr.warning("Please select some videos.", "Warning");
        }
    });

    $("#clear-all-checkboxes-btn").click(function() {
        $(".video-add-checkbox").each(function(i, element) {
            $(element).prop("checked", false);
        });
    });
});
