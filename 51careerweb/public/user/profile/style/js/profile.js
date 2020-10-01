$(document).ready(function () {
  $(function () {
    $(".experience-toggle").click(function () {
      $(".experienceAdd").toggleClass("dn");
      $(".experienceEdit").toggleClass("dn");
    });
  });

  $(function () {
    $(".project-toggle").click(function () {
      $(".projectAdd").toggleClass("dn");
      $(".projectEdit").toggleClass("dn");
    });
  });

  $(function () {
    $(".education-toggle").click(function () {
      $(".educationalAdd").toggleClass("dn");
      $(".educationalEdit").toggleClass("dn");
    });
  });

  $(function () {
    $(".showcase-toggle").click(function () {
      $(".workAdd").toggleClass("dn");
      $(".workEdit").toggleClass("dn");
    });
  });
});
