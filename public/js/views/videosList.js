$(function(){$(".video-preview-btn").click(function(){$("#videoPreviewModal .modal-title").text($(this).data("video-title"));var a=$(this).data("file-name");("free"==$(this).data("video-value")?videojs("video-player",{controls:!0,autoplay:!1,preload:"auto",fluid:!0,techOrder:["youtube"],sources:[{type:"video/youtube",src:a}],youtube:{iv_load_policy:1}}):videojs("video-player",{controls:!0,autoplay:!1,preload:"auto",fluid:!0})).src(a);$("#videoPreviewModal").modal("toggle")});$(".video-delete-btn").click(function(){$("#deleteConfirmModal #delete-form").attr("action",
$(this).data("delete-url"));$("#deleteConfirmModal").modal("toggle")});$("#videoPreviewModal").on("hidden.bs.modal",function(){$("#videoPreviewModal .modal-title").empty();videojs("video-player").dispose();$("#videoPreviewModal .modal-body").append('<video id="video-player" class="video-js vjs-default-skin vjs-big-play-centered">Your browser does not support HTML5 video.</video>')})});