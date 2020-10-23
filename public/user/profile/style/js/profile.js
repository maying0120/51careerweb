$(document).ready(function () {
  $(function () {
    $(".experience-toggle").click(function () {
      $(".experienceAdd").add($(".experienceEdit")).toggleClass("dn");
    });
  });

  $(function () {
    $(".project-toggle").click(function () {
      $(".projectAdd").add($(".projectEdit")).toggleClass("dn");
    });
  });

  $(function () {
    $(".education-toggle").click(function () {
      $(".educationalAdd").add($(".educationalEdit")).toggleClass("dn");
    });
  });

  $(function () {
    $(".showcase-toggle").click(function () {
      $(".workAdd").add($(".workEdit")).toggleClass("dn");
    });
  });
});
