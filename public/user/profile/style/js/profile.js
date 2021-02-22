$(document).ready(function () {
  //Initialize Select2 Elements
  $('.select2').select2();
  $('.select2').on('change', function() {
    $('.skill-save').removeClass('hidden');
  });

  function markNotificationsAsRead() {
    $.get('/unreadNotificationsMarkAsRead');
  };

  $('textarea').on('keyup keypress', function() {
    $(this).height(0);
    $(this).height(this.scrollHeight);
  });

  $(function () {
    $(".skill-toggle").click(function () {
      $(".skill-save").toggleClass("hidden");
    });
  });
  $(function () {
    $(".description-toggle").click(function () {
      $("#description-show").add($("#description-edit")).toggleClass("hidden");
    });
  });
  $(function () {
    $(".experience-toggle").click(function () {
      $(".experience-toggle").toggleClass("hidden");
      $("#experience-add").toggleClass("hidden");
    });
  });
  $(function () {
    $(".education-toggle").click(function () {
      $(".education-toggle").toggleClass("hidden");
      $("#education-add").toggleClass("hidden");
    });
  });
  $(function () {
    $(".project-toggle").click(function () {
      $(".project-toggle").toggleClass("hidden");
      $("#project-add").add($("#project-edit")).toggleClass("hidden");
    });
  });
  $(function () {
    $(".showcase-toggle").click(function () {
      $("#showcase-add").add($("#showcase-edit")).toggleClass("hidden");
    });
  });
  $(function () {
    $(".profile-toggle").click(function () {
      $(".basicShow").add($(".basicEdit")).toggleClass("hidden");
    });
  });
  $(function () {
    $(".expect-toggle").click(function () {
      $(".expectAdd").add($(".expectEdit")).toggleClass("hidden");
    });
  });
});
