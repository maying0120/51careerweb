$(document).ready(function () {
  $(function () {
    $(".profile-toggle").click(function () {
      $(".basicShow").add($(".basicEdit")).toggleClass("dn");
    });
  });
  $(function () {
    $(".expect-toggle").click(function () {
      $(".expectAdd").add($(".expectEdit")).toggleClass("dn");
    });
  });
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
  $(function () {
    $(".description-toggle").click(function () {
      $(".descriptionShow").add($(".descriptionEdit")).toggleClass("dn");
    });
  });

  var expect_city_num = 1;
  $(function() {
    $("#expect-new-add").click(function () {
      var num = ++expect_city_num;
      var new_city = "<tr><td><input type='text' name='city[]' id='expect-city-" + num + "' placeholder='Add another location'></td></tr>";
      $("#expect-new-add-city").append(new_city);
    });
  });
});
