$(function(){$(".teacher-delete-btn").click(function(){$("#deleteConfirmModal #delete-form").attr("action",$(this).data("delete-url"));$("#deleteConfirmModal").modal("toggle")})});
